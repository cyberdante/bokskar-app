# Create a new image from this base image
FROM mhart/alpine-node:6
MAINTAINER Todd Bluhm <toddbluhm@gmail.com>

# Update and install the latest dependencies
RUN apk update && apk upgrade && rm -rf /var/cache/apk/*

# Copy package.json
COPY ./package.json /app/package.json
COPY ./bower.json /app/bower.json
WORKDIR /app/

# Install node modules
RUN apk add --update git build-base curl bash && \
  echo "-- Fixing PhantomJS --" && \
  curl -Ls "https://github.com/dustinblackman/phantomized/releases/download/2.1.1/dockerized-phantomjs.tar.gz" | tar xz -C / && \
  echo "-- Installing node modules --" && \
  npm install && \
  echo "-- Installing bower components --" && \
  npm i -g bower && bower install --allow-root && \
  apk del git build-base curl && \
  rm -rf /usr/share/man /tmp/* /var/tmp/* /var/cache/apk/* /root/.npm /root/.node-gyp

# Add the node files to image
COPY . /app/

# Set some environment variables
ENV HOST=0.0.0.0 PORT=3000

# Expose the port
EXPOSE $PORT

# Default command
CMD ["npm", "start"]
