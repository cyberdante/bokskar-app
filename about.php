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
</style>
</head>

<body>
    <?php include 'navbar.php';?>
    <div class="container">
        <div class="row">
            <div class="text-center"><h3>Us</h3></div>
            <div class="text-center"><p>What We Do</div>
            <div class="text-center"><hr class="hr-purple small"></div>
            <div>
                <p> 
                    BOKSKAR is a different company than we all are normally used too. Different from an automotive dealership, or insurance company and
                    even different from automotive service providers like ride share or car rental services. BOKSKAR is the future, it's a new way to own a 
                    vehicle for the 21st century and beyond. 
                <p>
                    Typically, everyone goes out and buys a car at a dealership, and gets a maintenance plan and then gets insurance. BOKSKar has developed
                    a quantitative algorithm that provides owners like you a cost effective plan that reduces TCO:Total Cost Ownership of owning your vehicle
                    over a 4-7 year span. This plan is easy, simple,affordable to everyone in any income bracket. 
                <p>
                    This seems like alot but its quite simple, we have developed an effective program that decreases your vehicle cost by combining them into 
                    one super low payment. How is that possible you say? BOKSKar is the dealership, maintenance, insurance and automotive services company
                    all rolled into one company. BOKSKar is the future. 
            </div>
            <div class="strike">
              <span>
                <img src="/images/cogs.png"></img>
              </span>
            </div>
        </div>
    </div>
    <div class="container">
        <div class="row">
            <div class="text-center"><h3>Programs</h3></div>
            <div class="text-center"><p>Snapshot of our Programs</div>
            <div class="text-center"><hr class="hr-purple small"></div>
            <div>
                <p>
                    BOKSKar offers programs that can be tailored to meet your either long term or short term financial goals. Each program has been developed to maximize three key points:
                    Duration, Terms, Payments.
                <p>
                    <strong>Membership:</strong><br>
                    The membership program offers owners yearly ownership of their dream vehicle. With low monthly automatic payments scheduled over the lif of the agreement from 1 to 99 years. 
                <p>
                    <strong>Subscription</strong><br>
                    The subscription program offers owners month to month or yearly ownership of their dream vehicle. Automatic payments are scheduled on a month to month or yearly over the life
                    of the agreement up to 8 years. 
                <p>
                    <strong>Fractional</strong><br>
                    The fractional program offers owners "as-needed":day-to-day, week-to-week or month-to-month fractional ownership. Automatic payments are scheduled monthly
                    over the life of the agreement up to 99 years

            </div>
            <div class="strike">
              <span>
                <img src="/images/cogs.png"></img>
              </span>
            </div>
        </div>
   </div>
    <div class="container">
        <div class="row">
            <div class="text-center"><h3>Philosophy</h3></div>
            <div class="text-center"><p>Our Philosophy Explained</div>
            <div class="text-center"><hr class="hr-purple small"></div>
            <div>
                <p>
                    <strong>Differentiate and all will follow.</strong><br>
                    Since day one, we found the experience of owning a car was a dream to many and for some a deep financial hole. Today we take great
                    care to ensure that we will ultimately serve <strong>you</strong>, rather than meeting out own internal goal or bottom line. 
                <p>
                    <strong>Do it right and do it realy well.</strong><br>
                    We provide financial solutions & vehicles as a service, and we know service is key. We research and are focused exclusively on 
                    solving these problems. We know what we do well, and how we could do it better. Our dedication is to improve your life and knowing this 
                    helps us apply what we've learned to develop new products and services.
                <p>
                    <strong>Zero is bigger than one.</strong><br>
                    Knowing the answer is more valuable than time itself. Commitment is our job to you, but providing the best possible service engagement
                    is by setting the industry standard and you expecting no less.

            </div>
            <div class="strike">
              <span>
                <img src="/images/cogs.png"></img>
              </span>
            </div>
        </div>
    </div>
    <div class="container">
         <div class="row">
            <div class="text-center"><h3>Code of Ethics</h3></div>
            <div class="text-center"><p>We live by scouts law</div>
            <div class="text-center"><hr class="hr-purple small"></div>
            <div>
                <p>
                    <strong>HONESTY:</strong>
                    We will never mislead and communicate what is false. We will be transparent, open and freely share information as
                    appropriate to the relationship. <strong><em>We will be honest.</em></strong>
                <p>
                    <strong>PROMISE:</strong>
                    We will go above and beyond and to great lengths to keep our commitments to everyone. We will not make promises we cannot
                    keep, nor will we make promises on behalf of the company, unless we have the capacity to do so. <strong><em>We will keep the promise</em></strong>
                <p>
                    <strong>RESPECT:</strong>
                    We will be transparent, open and direct in our communication, and receptive to the influence of change. We will highly honor
                    and guard the values, and abilities of our contributions of others. While embracing our responsibility to ourselves, each other and to the planet and
                    holding our accountability for our actions in this regard. <strong><em>We will respect.</em></strong>
                <p>
                    <strong>COMPASSION:</strong>
                    We will maintain an awareness of the needs of others and act accordingly to meet those needs whenever it presents itself. We will also
                    minimize any and all harm whenever possible. We will act in ways that are consistent with our commitment to social, environmental responsibility. 
                    <strong><em>We will be compassionate.</em></strong>
                <p>
                    <strong>FAIRNESS:</strong> 
                    We will create and follow due process and over achieve outcomes that any sensible reasonable person would call just, evenhandedand non-arbitrary. 
                    <strong><em>We will be fair.</em></strong>
                <p>
                    <strong>INTEGRITY:</strong> 
                    We will live up to our ethical principles, even when we are confronted by personal, professional risk as well as economic and social pressure. 
                    <strong><em>We will stand by our integrity.</em></strong>

            </div>
            <div class="strike">
              <span>
                <img src="/images/cogs.png"></img>
              </span>
            </div>
        </div>
    </div>
    <div class="container">
        <div class="row">
            <div class="text-center"><h3>Motto</h3></div>
            <div class="text-center"><hr class="hr-purple small"></div>
            <div class="text-center">
                <p>
                    Drive Anywhere Anytime<sup>TM</sup>
            </div>
            <div class="strike">
              <span>
                <img src="/images/cogs.png"></img>
              </span>
            </div>
        </div>
    </div>
    <div class="container">
        <div class="row vdivide">
            <div class="text-center"><h3>Meet Our Team</h3></div>
            <div class="text-center"><p>Team work = <em>Success</em></div>
            <div class="text-center"><hr class="hr-purple small"></div>
            <div class="col-xs-3">
                    <div class="text-center">Rudy Ferraz<br><span class="grn-text">CEO|COB</div>
                    <hr class="hr-purple">
                    <div class="text-center">Matthew Stahlmann<br><span class="grn-text">CTO</div> 
            </div>
            <div class="col-xs-3">
                    <div class="text-center">Frances Ferraz<br><span class="grn-text">CFO|EP of Sales</div>
                    <hr class="hr-purple">
                    <div class="text-center">Damien Perez<br><span class="grn-text">Senior Software Engineer</div> 
            </div>
            <div class="col-xs-3">
                    <div class="text-center">Gabriel Ruiz<br><span class="grn-text">Dir. of Product Development</div>
                    <hr class="hr-purple">
                    <div class="text-center">Monica Hahn<br><span class="grn-text">Marketing Intern</div> 
            </div>
            <div class="col-xs-3">
                    <div class="text-center">Alicia Agnew<br><span class="grn-text">Dir. of Human Resources</div>
                    <hr class="hr-purple">
                    <div class="text-center">Your Name Here<br><span class="grn-text">resume@bokskar.com</div> 
            </div>
        </div>
        <div class="row">   
            <div class="strike">
              <span>
                <img src="/images/cogs.png"></img>
              </span>
            </div>
        </div>
    </div>
    <div class="container">
        <div class="row">
            <div class="text-center"><h3>Investors</h3></div>
            <div class="text-center"><p>determination + goals = partners</div>
            <div class="text-center"><hr class="hr-purple small"></div>
            <div class="text-center">
               
            </div>
            <div class="strike">
              <span>
                <img src="/images/cogs.png"></img>
              </span>
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