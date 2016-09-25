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
</head>

<body>
    <?php include 'navbar.php';?>
    <header class="jumbotron" style="background-image:url('images/desert-road-bokskar.png');">
      <!-- Main component for a primary marketing message or call to action -->
      <div class="container full-width">
          <div class="row">
            <div class="col-lg-12">
              <div class="welcome-phrase">
               <h2>Your Road, Your Life</h2>
              </div>
            </div>
            <div class="col-lg-12">
              <div class="form-inline btn-form-login">
                <button type="submit" class="btn btn-primary btn-signing btn-lg">Sign up</button>
                <button class="btn btn-default btn-signing btn-lg">Sign in</button>
              </div>
            </div>
          </div>
      </div>
    </header>

    <div class="container full-width">
        <!--div class="row">
          <ol class="breadcrumb">
            <li class="active"><a href="./index.html">Home</a></li>
            <li><a href="./aboutus.html">About Us</a></li>
          </ol>
        </div-->
        <div class="row row-content">
          <div class="col-lg-12">
            <div class="row">
              <div class="enlarged">
                <span class="glyphicon glyphicon-globe custom-glyphicon"></span>
              </div>
            </div>
            <div class="row">
              <div class="col-lg-5 col-md-5 col-sm-4 col-xs-3 displaced-top"><hr/></div>
              <div class="col-lg-2 col-md-2 col-sm-4 col-xs-6">
                <h3 class="statement">Welcome</h3>
              </div>
              <div class="col-lg-5 col-md-5 col-sm-4 col-xs-3 displaced-top"><hr/></div>
            </div>
            <div class="row">
              <div class="purple-haze">
                <p>Today is a great day to save your money. Vehicle ownership will change forever!</p>
              </div>
            </div>
          </div>
        </div>

        <div class="row eighty">
            <div class="col-xs-12 col-sm-4">
                <div class="form-group icon-container">
                    <h4 class="hightened"><span class="glyphicon glyphicon-globe"></span> Global Access</h4>
                    <p>Your global access to any vehicle is limitless.</p>
                </div>
            </div>
            <div class="col-xs-12 col-sm-4">
              <div class="form-group icon-container">
                  <h4 class="hightened"><span class="glyphicon glyphicon-thumbs-up"></span> Maintenance Free</h4>
                  <p>We maintain your vehicle and the fleet for life.</p>
              </div>
            </div>
            <div class="col-xs-12 col-sm-4">
              <div class="form-group icon-container">
                  <h4 class="hightened"><span class="glyphicon glyphicon-send"></span> Travel</h4>
                  <p>NYC to/from RIO we're always ready.</p>
              </div>
            </div>
        </div>

        <div class="row eighty">
            <div class="col-xs-12 col-sm-4">
                <div class="form-group icon-container">
                    <h4 class="hightened"><span class="glyphicon glyphicon-scale"></span> Open 24/7/365</h4>
                    <p>Time is important, why close at the speen of life?</p>
                </div>
            </div>
            <div class="col-xs-12 col-sm-4">
              <div class="form-group icon-container">
                  <h4 class="hightened"><span class="glyphicon glyphicon-cutlery"></span> We deliver</h4>
                  <p>Relax. We can pick it up or deliver it for you.</p>
              </div>
            </div>
            <div class="col-xs-12 col-sm-4">
              <div class="form-group icon-container">
                  <h4 class="hightened"><span class="glyphicon glyphicon-blackboard"></span> Management</h4>
                  <p>Online, Phone or Direct, your chariot awaits.</p>
              </div>
            </div>
        </div>

        <div class="row eighty">
            <div class="col-xs-12 col-sm-4">
                <div class="form-group icon-container">
                    <h4 class="hightened"><span class="glyphicon glyphicon-option-vertical"></span> Infinite Options</h4>
                    <p>Your options are your canvas.</p>
                </div>
            </div>
            <div class="col-xs-12 col-sm-4">
              <div class="form-group icon-container">
                  <h4 class="hightened"><span class="glyphicon glyphicon-road"></span> Service for Life</h4>
                  <p>Valet for your world.</p>
              </div>
            </div>
            <div class="col-xs-12 col-sm-4">
              <div class="form-group icon-container">
                  <h4 class="hightened"><span class="glyphicon glyphicon-heart"></span> Lifetime support</h4>
                  <p>We have your back anywhere in the world.</p>
              </div>
            </div>
        </div>
    </div>

    <div id="steps" class="container full-width">
      <div class="purple-haze">
        <h3 class="kapitalized">Here's how BOKSKar works</h3>
        <hr/>
      </div>
      <div id="carousel-steps" class="carousel slide eighty" data-ride="carousel">
        <!-- Indicators -->
        <ol class="carousel-indicators">
          <li data-target="#carousel-steps" data-slide-to="0" class="active"></li>
          <li data-target="#carousel-steps" data-slide-to="1"></li>
          <li data-target="#carousel-steps" data-slide-to="2"></li>
          <li data-target="#carousel-steps" data-slide-to="3"></li>
          <li data-target="#carousel-steps" data-slide-to="4"></li>
          <li data-target="#carousel-steps" data-slide-to="5"></li>
          <li data-target="#carousel-steps" data-slide-to="7"></li>
        </ol>

        <!-- Wrapper for slides -->
        <div class="carousel-inner" role="listbox">
          <div class="item active">
            <div class="step-number">1</div>
            <div class="carousel-caption">
              Create an account and tell us who you are.
            </div>
            <div class="carousel-img-wrapper"><img src="images/BooksKar Laptop screenv1.png" alt="..."></div>
          </div>
          <div class="item">
            <div class="step-number">2</div>
            <div class="carousel-caption">
              Tell us who you want us to pay on your behalf.
            </div>
            <div class="carousel-img-wrapper"><img src="images/BooksKar Laptop screenv1.png" alt="..."></div>
          </div>
          <div class="item">
            <div class="step-number">3</div>
            <div class="carousel-caption">
              Select your current providers or select new providers.
            </div>
            <div class="carousel-img-wrapper"><img src="images/BooksKar Laptop screenv1.png" alt="..."></div>
          </div>
          <div class="item">
            <div class="step-number">4</div>
            <div class="carousel-caption">
              Select a payment plan and how long you'll want to pay.
            </div>
            <div class="carousel-img-wrapper"><img src="images/BooksKar Laptop screenv1.png" alt="..."></div>
          </div>
          <div class="item">
            <div class="step-number">5</div>
            <div class="carousel-caption">
              Confirm your providers and payment plan.
            </div>
            <div class="carousel-img-wrapper"><img src="images/BooksKar Laptop screenv1.png" alt="..."></div>
          </div>
          <div class="item">
            <div class="step-number">6</div>
            <div class="carousel-caption">
              Read and eSign your agreement documents and submit.
            </div>
            <div class="carousel-img-wrapper"><img src="images/BooksKar Laptop screenv1.png" alt="..."></div>
          </div>
          <div class="item">
            <div class="step-number">7</div>
            <div class="carousel-caption last">
              You are done! Go tell your friends and get a chance to win a free weekend upgrade!
            </div>
            <div class="carousel-img-wrapper"><img src="images/BooksKar Laptop screenv1.png" alt="..."></div>
            <div class="follow-us hidden">
              <label class="follow-us-caption">Follow us</label>
              <div class="navbar-nav">
                <a class="btn btn-social-icon btn-twitter" href="http://twitter.com/BOKSKAR"><i class="fa fa-twitter"></i></a>
                <a class="btn btn-social-icon btn-facebook" href="https://www.facebook.com/bokskar/"><i class="fa fa-facebook"></i></a>
                <a class="btn btn-social-icon btn-instagram" href="https://www.instagram.com/bokskar/"><i class="fa fa-instagram"></i></a>
                <a class="btn btn-social-icon btn-pinterest" href="#"><i class="fa fa-pinterest"></i></a>
                <a class="btn btn-social-icon btn-linkedin" href="https://www.linkedin.com/company/bokskar.com"><i class="fa fa-linkedin"></i></a>
                <a class="btn btn-social-icon btn-youtube" href="https://www.youtube.com/watch?v=-rwSPtjbXXY"><i class="fa fa-youtube"></i></a>
                <a class="btn btn-social-icon" href="mailto:press@bokskar.com"><i class="fa fa-envelope-o"></i></a>
              </div>
            </div>
          </div>
        </div>

        <!-- Controls -->
        <a class="left carousel-control" href="#carousel-steps" role="button" data-slide="prev">
          <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
          <span class="sr-only">Previous</span>
        </a>
        <a class="right carousel-control" href="#carousel-steps" role="button" data-slide="next">
          <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
          <span class="sr-only">Next</span>
        </a>
      </div>
    </div>

    <div id="offer" class="container full-width">
        <div class="row eighty">
          <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 form-inline">
            <div class="purple-haze"><h3 class="statement pull-left">What we offer&nbsp;&nbsp;&nbsp;</h3></div><div class="displaced-top-hr"><hr/></div>
          </div>
        </div>

        <div class="row eighty">
            <div class="col-xs-12 col-sm-4">
                <div class="form-group icon-container">
                    <h4 class="hightened"><span class="glyphicon glyphicon-text-background"></span> Auto Insurance</h4>
                    <p>Your global access to any vehicle is limitless.</p>
                </div>
            </div>
            <div class="col-xs-12 col-sm-4">
              <div class="form-group icon-container">
                  <h4 class="hightened"><span class="glyphicon glyphicon-wrench"></span> Auto Maintenance</h4>
                  <p>We maintain your vehicle and the fleet for life.</p>
              </div>
            </div>
            <div class="col-xs-12 col-sm-4">
              <div class="form-group icon-container">
                  <h4 class="hightened"><span class="glyphicon glyphicon-briefcase"></span> Business Solutions</h4>
                  <p>NYC to/from RIO we're always ready.</p>
              </div>
            </div>
        </div>

        <div class="row eighty">
            <div class="col-xs-12 col-sm-4">
                <div class="form-group icon-container">
                    <h4 class="hightened"><span class="glyphicon glyphicon-phone"></span> 24/7 Live Service</h4>
                    <p>Time is important, why close at the speen of life?</p>
                </div>
            </div>
            <div class="col-xs-12 col-sm-4">
              <div class="form-group icon-container">
                  <h4 class="hightened"><span class="glyphicon glyphicon-plane"></span> Traveling International?</h4>
                  <p>Relax. We can pick it up or deliver it for you.</p>
              </div>
            </div>
            <div class="col-xs-12 col-sm-4">
              <div class="form-group icon-container">
                  <h4 class="hightened"><span class="btn-social-icon btn-dropbox" href="#"><i class="fa fa-dropbox"></i></span> Looking for parking spot?</h4>
                  <p>Online, Phone or Direct, your chariot awaits.</p>
              </div>
            </div>
        </div>
    </div>
    <?php include 'footer.php';?>
    

    <!-- jQuery (necessary for Bootstrap's Javascript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <script src="bower_components/bootstrap-sass/assets/javascripts/bootstrap.min.js"></script>
    <script src="bower_components/angular/angular.min.js"></script>

</body>

</html>
