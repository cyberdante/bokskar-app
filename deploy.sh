#!/usr/bin/env bash

# more bash-friendly output for jq
JQ="jq --raw-output --exit-status"

CLUSTER=default
SERVICE=bokskar-web-app-service
TASKNAME=bokskar-web-app
IMAGE_NAME=bokskar-web-app
PORT=3000


configure_aws_cli(){
	aws --version
	aws configure set default.region us-east-1
	aws configure set default.output json
}

deploy_cluster() {

    family=$TASKNAME

    make_task_def
    register_definition
    if [[ $(aws ecs update-service --cluster $CLUSTER --service $SERVICE --task-definition $revision | \
                   $JQ '.service.taskDefinition') != $revision ]]; then
        echo "Error updating service."
        return 1
    fi

    # wait for older revisions to disappear
    # not really necessary, but nice for demos
    for attempt in {1..30}; do
        if stale=$(aws ecs describe-services --cluster $CLUSTER --services $SERVICE | \
                       $JQ ".services[0].deployments | .[] | select(.taskDefinition != \"$revision\") | .taskDefinition"); then
            echo "Waiting for stale deployments:"
            echo "$stale"
            sleep 5
        else
            echo "Deployed!"
            return 0
        fi
    done
    echo "Service update took too long."
    return 1
}

make_task_def(){
	task_template='[
		{
			"name": "%s",
			"image": "%s.dkr.ecr.us-east-1.amazonaws.com/%s:%s",
			"essential": true,
			"memory": 500,
			"cpu": 500,
			"portMappings": [
				{
					"containerPort": %s,
					"hostPort": %s
				}
			]
		}
	]'

	task_def=$(printf "$task_template" $IMAGE_NAME $AWS_ACCOUNT_ID $IMAGE_NAME $CIRCLE_SHA1 $PORT $PORT)
}

push_ecr_image(){
	eval $(aws ecr get-login --region us-east-1)
	docker push $AWS_ACCOUNT_ID.dkr.ecr.us-east-1.amazonaws.com/$IMAGE_NAME:$CIRCLE_SHA1
}

register_definition() {

    if revision=$(aws ecs register-task-definition --container-definitions "$task_def" --family $family | $JQ '.taskDefinition.taskDefinitionArn'); then
        echo "Revision: $revision"
    else
        echo "Failed to register task definition"
        return 1
    fi

}

configure_aws_cli
push_ecr_image
deploy_cluster
