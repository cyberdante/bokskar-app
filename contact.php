<!DOCTYPE html>
<html lang="en" ng-app="bokskarApp">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=Edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->

    <title>BOKSKar</title>

    <!-- Bootstrap -->
    <link href="sass/main-styles.css" rel="stylesheet">
    <link href="css/font-awesome.min.css" rel="stylesheet">
    <link href="css/bootstrap-social.css" rel="stylesheet">

    <!--
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/bootstrap-theme.min.css" rel="stylesheet">

    <link href="/css/screen.css" media="screen, projection" rel="stylesheet" type="text/css" />
    <link href="/css/print.css" media="print" rel="stylesheet" type="text/css" />
    -->
    <!--[if IE]>
        <link href="/css/ie.css" media="screen, projection" rel="stylesheet" type="text/css" />
    <![endif]-->
  <style>
    #map-container { 
        height: 300px; 
        overflow:visible;
        padding-bottom:20px;
        border-style:solid;
        border-color:#9424D0;
    }
    .contactInfo{
        width:60%;
    }
    .right-align{
        text-align: right;
    }
    .bottom-align{
        vertical-align: bottom;
    }
    .red-text{
        color:red;
    }
    .small-input{
        max-width:200px;
    }
</style>
   
</head>

<body>
    <script>  
       // var map;
    function mapInit(){
        // Constructor creates a new map - only center and zoom are required.
        map = new google.maps.Map(document.getElementById('map-container'), {
        center: {lat: 28.5418, lng: -81.3787},
        zoom: 13
    });
    var marker = new google.maps.Marker({
    //position: {lat: 40.7413549, lng: -73.9980244},
    position: {lat: 28.5418, lng:  -81.3787},
        map: map,
        title: 'BOKSKar'
        });
    }
   </script> 
    <script async defer src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAI_CTktNW9492HqWCmLWV_OqPgMT1BEzI&v=3&callback=mapInit"></script>
   
    <nav class="navbar navbar-default navbar-fixed-top" role="navigation">
      <div class="container full-width">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand">
            <img src="images/BoksKar Name v4.0 Color.png" title="BOKSKar" alt="BOKSKar_logo" class="logo-bokskar" height="50px"/></a>
        </div>
        <div id="navbar" class="navbar-collapse collapse pull-right">
          <ul class="nav navbar-nav">
            <li class="active"><a href="#" role="tab" data-toggle="tab">How it works</a></li>
            <li style="display:none" class="dropdown">
              <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">
                Menu <span class="caret"></span></a>
                <ul class="dropdown-menu">
                  <li><a href="#">Getting your vehicle</a></li>
                  <li><a href="#">Maintenance and repairs</a></li>
                  <li><a href="#">Upgrading to a new car</a></li>
                  <li><a href="#">Downgrading to a new car</a></li>
                  <li style="display: none;" role="separator" class="divider"></li>
                  <li style="display: none;"  class="dropdown-header">Specials</li>
                  <li><a href="#">Insurance acquisition</a></li>
                </ul>
            </li>
            <li role="separator" class="divider"></li>
            <li><a href="#" role="tab" data-toggle="tab">FAQ</a></li>
            <li><a href="#" role="tab" data-toggle="tab">Sign up <span style="display:none" class="glyphicon glyphicon-log-out"></span></a></li>
            <li role="separator" class="divider"></li>
            <li><a href="#" role="tab" data-toggle="tab">Login</a></li>
            <li role="separator" class="divider"></li>
            <li><a href="#" role="tab" data-toggle="tab" onclick='window.open("about.php","_self");'>About Us</a></li>
            <li role="separator" class="divider"></li>
            <li><a href="#" role="tab" data-toggle="tab">Support</a></li>
            <li role="separator" class="divider"></li>
            <li><a href="#" role="tab" data-toggle="tab">Blog</a></li>
          </ul>
        </div>
      </div>
    </nav>
    <div class="container full-width">
        <p>
        <div id="map-container"></div>
    </div><!--container end-->
    <div class="container">
        <div class="row">
            <h3>Have Something To Tell Us?</h3>
            <hr>
            <p>
                Hi Friend,
            <p>
                Thank you for visiting BOKSKar, we would like to know what you think about us and what you would like to see us 
                imporove on(site errors, more cars, etc.). We're always open to new and fresh ideas you might have. As a bonus you might 
                get a free upgrade for helping us out. 
            <p>
                Thank you from the BOKSKar Team!
        </div>
        <div class="contactInfo">
            <div class="row">
                <img src="images/BoksKar Name v4.0 Color.png" title="BOKSKar" alt="BOKSKar_logo" class="logo-bokskar" height="50px"/><div class="bottom-align"><span class="pull-right"><span class="red-text">*</span>required</span></div>
                <hr>
            </div><!--row end-->
            <form role="form">
                <div class="row">
                    <div class="form-group col-xs-12">
                        <label for="name" class="control-label">Your First/Last Name<span class="red-text">*</span> (the one your parents gave you when you wore your birthday suit)</label>
                        <div>
                            <input type="text" class="form-control" id="name">
                        </div>
                    </div><!--form group end-->
                </div><!--row end-->
                <div class="row">
                    <div class="form-group col-xs-12">
                        <label for="email" class="control-label">Your Email<span class="red-text">*</span> (Email is 30yrs old, snail mail is 5000yrs old - which one is faster?)</label>
                        <div>
                            <input type="text" class="form-control" id="email">
                        </div>
                    </div><!--form group end-->
                </div><!--row end-->
                <div class="row">
                    <div class="form-group col-xs-12">
                        <label for="phone" class="control-label">Your Phone or Cell Number<span class="red-text">*</span> (Hello, is it me your looking for?)</label>
                        <div>
                            <input type="text" class="form-control small-input" id="phone" maxlength="10">
                        </div>
                    </div><!--form group end-->
                </div><!--row end-->
                <div class="row">
                    <div class="form-group col-xs-12">
                        <label for="country" class="control-label">Your Country<span class="red-text">*</span> (Let us know which country you're writing from in case we need to stop by for dinner')</label>
                        <div>
                            <select class="form-control small-input" id="country">
                                <option>USA</option>
                                <option>Spain</option>
                                <option>Germany</option>
                                <option>Brazil</option>
                            </select>
                        </div>
                    </div><!--form group end-->
                </div><!--row end-->
                <div class="row">
                    <div class="form-group col-xs-12">
                        <label for="subject" class="control-label">Subject<span class="red-text">*</span> (The HRM Queen has her subjects, but we only use one)</label>
                        <div>
                            <input type="text" class="form-control" id="subject">
                        </div>
                    </div><!--form group end-->
                </div><!--row end-->
                <div class="row">
                    <div class="form-group col-xs-12">
                        <label for="message" class="control-label">Your Message<span class="red-text">*</span> (Is there a message in the bottle?)</label>
                        <div>
                            <textarea class="form-control" rows="10" id="message"></textarea>
                        </div>
                    </div><!--form group end-->
                </div><!--row end-->
            </form>
            </div><!--row end-->
        </div><!--contact info end-->
    </div><!--container end-->
     <?php include 'footer.php';?>
    

    <!-- jQuery (necessary for Bootstrap's Javascript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <script src="bower_components/bootstrap-sass/assets/javascripts/bootstrap.min.js"></script>
    <script src="bower_components/angular/angular.min.js"></script>

</body>

</html>
