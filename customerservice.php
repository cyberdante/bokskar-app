<!DOCTYPE html>
<html lang="en" ng-app="bokskarApp">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=Edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->

    <title>About Us</title>

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
        .strike {
        display: block;
        text-align: center;
        overflow: hidden;
        white-space: nowrap; 
    }

    .strike > span {
        position: relative;
        display: inline-block;
    }
	
    .strike > span:before,
    .strike > span:after {
        content: "";
        position: absolute;
        top: 50%;
        width: 9999px;
        height: 1px;
        background: #9424D0;
    }

    .strike > span:before {
        right: 100%;
        margin-right: 15px;
    }

    .strike > span:after {
        left: 100%;
        margin-left: 15px;
    }
    .v-divider{
        margin-left:5px;
        margin-right:5px;
        width:1px;
        height:100%;
        border-left:1px yellow;
    }
    .grn-text{
        color:#66ff33;
    }
    .row.vdivide [class*='col-']:not(:last-child):after {
        background: #9424D0;
        width: 1px;
        content: "";
        display:block;
        position: absolute;
        top:0;
        bottom: 0;
        right: 0;
        min-height: 70px;
    }
    .row.vdivide2 [class*='col-']:not(:last-child):after {
        background: #757575;
        width: 3px;
        content: "";
        display:block;
        position: absolute;
        top:0;
        bottom: 0;
        right: 0;
        min-height: 100px;
    }
    .row.vdivide3 [class*='col-']:not(:last-child):after {
        background: #757575;
        width: 1px;
        content: "";
        display:block;
        position: absolute;
        top:0;
        bottom: 0;
        right: 0;
        min-height: 40px;
    }
    .service-phrase {
        color: #FFFFFF;
        font-family: sans-serif;
        text-align: center;
        margin-right: 30px;
        margin-bottom: 40px !important;
    }  
    .center-text {
        font-family: sans-serif;
        text-align: center;
    } 
    .link-text{
        font-family: sans-serif;
        color: blue;
        text-decoration: underline;
        font: 25px arial, sans-serif;
    }
    .gray-heading {
        color: #757575;
        font: 25px arial, sans-serif;
    }
    .gray-text{
        color: #757575;
    }
    hr{
        border-color:#9424D0;
    }
    .purple-haze-right {
        color: #9424D0;
        text-align: right;
        font-family: sans-serif; 
    }
    .panel:hover {
    box-shadow: 5px 0px 40px rgba(0,0,0, .2);
}
</style>
</head>

<body>
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
            <li><a href="#" role="tab" data-toggle="tab" onclick='window.open("index.php","_self");'>How it works</a></li>
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
            <li class="active"><a href="about.php" role="tab" data-toggle="tab">About Us</a></li>
            <li role="separator" class="divider"></li>
            <li><a href="#" role="tab" data-toggle="tab">Support</a></li>
            <li role="separator" class="divider"></li>
            <li><a href="#" role="tab" data-toggle="tab">Blog</a></li>
          </ul>
        </div>
      </div>
    </nav>
    <div class="container-fluid">
        <header class="jumbotron" style="background-image:url('images/customerservice.jpg');">
        <!-- Main component for a primary marketing message or call to action -->
        <div class="container full-width">
            <div class="row">
                <div class="col-lg-12">
                <div class="service-phrase">
                <h1>At Your Service</h1>
                <h3>Welcome to the future of vehicle ownership. Drive. Any where. Any time.</h3>
                </div>
                </div>
                <div class="col-lg-12">
                <div class="form-inline btn-form-login">
                    <button type="submit" class="btn btn-default btn-signing btn-lg">Sign up</button>
                </div>
                </div>
            </div>
        </div>
        </header>
       
            
        
    
    <div class="container">
        <div class="row vdivide2">
            <div class="col-xs-6">
                <div class="purple-haze-right"><h1>COMMITMENT</h1></div>
            </div>
            <div class="col-xs-6">
                <div><h3 class="gray-heading">"Its not a choice, but our act to outperform."</h3><br>-Rudy Ferraz, BOKSKar CEO</div>
            </div>
        </div>
    </div>
    <hr class="hr-purple large">
    <div class="container">
        <div class="row">
            <span>
                <img class="center-block" src="/images/cogs.png"></img>
            </span>
        </div>
        <div class="row">
            <div class="strike">
              <span>
                <h3 class="gray-heading">BEST CUSTOMER SUPPORT AVAILABLE</h3>
              </span>
            </div>
        </div>
        <div class="row">
            <h4 class="center-text gray-heading">We work hard so you dont have to. Period.</h4>
        </div>
        <div class="row">
            <h3 class="center-text gray-heading">Have a question, need support? We're open 24/7/365</h3>
        </div>
        <div class="row">
            <h3 class="center-text gray-heading">Multilingual customer support staff</h3>
        </div>
    </div>
    <hr class="hr-purple large">
    <div class="container">
        <div class="row">
            <img src="/images/purple-phone.png" height="45" width="45"></img>
            <span class="gray-heading">Call Us</span>
            <span class="link-text">205-265-7527</span>
            <span class="link-text">205-BOKSKAR</span>
        </div>
        <div class="row">
            <h3 class="gray-heading">General Customer Support Extension: 611</h3>
        </div>
        <div class="row">
            <span class="gray-heading">Direct phone link press to connect:</span>
            <a href="#"><img src="/images/skype.png" height="45" width="45"></img></a>
             <a href="#"><img src="/images/hangouts-icon.png" height="45" width="45"></img></a>
             <a href="#"><img src="/images/facetime.png" height="45" width="45"></img></a>
        </div>
        <div class="row">
            <span class="gray-heading">Member Services Customer Support Extension: 311</span>
        </div>
        <div class="row">
            <span class="gray-heading">Elite Level Extension: 312</span>
        </div>
        <div class="row">
            <span class="gray-heading">Gold Level Extension: 313</span>
        </div>
        <div class="row">
            <span class="gray-heading">Silver Level Extension: 314</span>
        </div>
        
    </div>
    <hr class="hr-purple large">
    <div class="container">
        <div class="row">
            <img src="/images/video-phone-icon.png" height="45" width="45"></img>
            <span class="gray-heading">Video Phone</span>
        </div>
        <div class="row">
            <span class="gray-heading">Direct video link press to connect:</span>
            <a href="#"><img src="/images/skype.png" height="45" width="45"></img></a>
             <a href="#"><img src="/images/hangouts-icon.png" height="45" width="45"></img></a>
             <a href="#"><img src="/images/facetime.png" height="45" width="45"></img></a>
        </div>
    </div>
    <hr class="hr-purple large">
    <div class="container">
        <div class="row">
            <img src="/images/purple-phone.png" height="45" width="45"></img>
            <span class="gray-heading">Chat With Us</span>
        </div>
        <div class="row">
            <span class="gray-heading">Direct video link press to connect:</span>
            <a href="#"><img src="/images/skype.png" height="45" width="45"></img></a>
        </div>
    </div>
    <hr class="hr-purple large">
    <div class="container">
        <div class="row">
            <img src="/images/email-icon.png" height="45" width="45"></img>
            <span class="gray-heading">Email Us </span><span class="link-text">customersupport@bokskar.com</span>
        </div>
        <div class="row">
            <div class="row vdivide3">
                <div class="col-xs-4">
                        <div><span class="gray-heading text-center">Web Email Popup - Outlook</span></div>
                </div>
                <div class="col-xs-2 text-center">
                        <div class="gray-heading">Gmail</div>
                </div>
                <div class="col-xs-2">
                        <div class="gray-heading text-center">Yahoo</div>
                </div>
            </div>
        </div>
    </div>
    <hr class="hr-purple large">
    <div class="container">
        <div class="row">
            <img src="/images/purple-phone.png" height="45" width="45"></img>
            <span class="gray-heading">Web Support Ticket</span>
        </div>
        <br>
        <div class="row">
            <div class="panel panel-default">
                    <div class="panel-heading text-center">
                        <h3>BOKSKar Web Support Ticket [BWST}</h3>
                    </div><!--panel heading end-->
                    <form class="form form-multiline" role="form" id="support-form">
                    <div class="form-group">
                        
                        <label for="contact_name">From:</label>
                        <div>
                            <input type="text" class="form-control" id="contact_name" name="contact_name">
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="contact_email">Subject:</label>
                        <div>
                            <input type="text" class="form-control" id="contact_email" name="contact_email">
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="concern">Concern:</label>
                        <div>
                            <textarea class="form-control" id="concern" name="concern" rows="10"></textarea>
                        </div>
                    </div><!--form group end-->
                    </form><!--main form tag end-->
                    <div class="panel-footer">
                        <button class="btn btn-info" id="contacts-submit">Send</button>
                        <br><div id="contactmsg" name="contactmsg"></div>
                    </div><!--panel footer end-->
                </div><!--panel end-->
        </div>
    </div>
    <hr class="hr-purple large">
    <div class="container">
        <div class="row">
            <div class="row vdivide">
                <div class="col-lg-6">
                        <img src="/images/heart-icon.png" class="center-block" height="45" width="45"></img><br>
                        <div class="center-text">
                            <h3>We Work Here</h3>
                            <h3 class="gray-text">100% NA Customer Support<h3>
                            <h3 class="gray-text">100% SA Customer Support<h3>
                            <h3 class="gray-text">100% EU Customer Support<h3>
                            <h3 class="gray-text">Multilingual Team Members<h3>
                        </div>
                </div>
                <div class="col-lg-6">
                        <img src="/images/heart-icon.png" class="center-block" height="45" width="45"></img><br>
                        <div class="center-text">
                            <h3>Help Is On The Way</h3>
                            <h3 class="gray-text">24/7/365 Roadside Assistance<h3>
                            <h3 class="gray-text">24/7/365 Vehicle Replacement<h3>
                            <h3 class="gray-text">Maintenance Free Service<h3>
                            <h3 class="gray-text">Global OnStar Support<h3>
                        </div>
                </div>
            </div>
        </div>
    </div>
     <hr class="hr-purple large">
    <div class="container">
        <div class="row">
            <div class="row vdivide">
                <div class="col-lg-6">
                        <img src="/images/heart-icon.png" class="center-block" height="45" width="45"></img><br>
                        <div class="center-text">
                            <h3>At Your Service</h3>
                            <h3 class="gray-text">24/7/365 Valet Service<h3>
                            <h3 class="gray-text">3 Levels of Concierge Services<h3>
                            <h3 class="gray-text">Direct Link Video or Voice Services<h3>
                        </div>
                </div>
                <div class="col-lg-6">
                        <img src="/images/heart-icon.png" class="center-block" height="45" width="45"></img><br>
                        <div class="center-text">
                            <h3>State Of The Art</h3>
                            <h3 class="gray-text">24/7/365 Support Center<h3>
                            <h3 class="gray-text">Secure Cloud Computing<h3>
                            <h3 class="gray-text">Local Time Support<h3>
                        </div>
                </div>
            </div>
        </div>
    </div>
    <hr class="hr-purple large">
</div>

 <?php include 'footer.php';?>
    

    <!-- jQuery (necessary for Bootstrap's Javascript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <script src="bower_components/bootstrap-sass/assets/javascripts/bootstrap.min.js"></script>
    <script src="bower_components/angular/angular.min.js"></script>

</body>

</html>