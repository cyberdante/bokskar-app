<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=Edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->

    <title>BOKSKar - Cutomer Dashboard</title>

    <!-- Bootstrap -->
    <link href="sass/main-styles.css" rel="stylesheet">
    <link href="css/font-awesome.min.css" rel="stylesheet">
    <link href="css/bootstrap-social.css" rel="stylesheet">

    <!--[if IE]>
        <link href="/css/ie.css" media="screen, projection" rel="stylesheet" type="text/css" />
    <![endif]-->

    <!-- TODO: Embeded styles, pure CSS, missing prefixes, move elsewhere -->
    <style>

      /* Header bar */
      header {
        height: 50px;
        display: flex;
        align-items: center;
        justify-content: space-between;

        /* TODO: use vars */
        color: #C3C3CB;
        background: #9424D0;
        margin-top: 2px;
      }

      header .title {
        padding-left: 10px;
      }

      header .info {
        padding-right: 10px;
      }

      /* Wraps both the sidebar and the main content pane */
      .wrapper {
        background: #9424D0;
        overflow-x: hidden;
      }

      /* Sidebar */

      .sidebar {
        width: 200px;
        margin-left: -150px;
        float: left;
        background: #9424D0;
      }

      .sidebar ul {
        list-style: none;
        padding: 0;
      }

      .sidebar ul li {
        width: 100%;
      }

      .sidebar ul li a {
        color: #C3C3CB;
      }

      .sidebar ul li:first-child a {
        color: #9424D0;
        background: #C3C3CB;
      }

      .sidebar ul li a:hover {
        color: #9424D0;
      }

      .sidebar.displayed {
        margin-left: 0;
      }

      /* Main content */
      .main-content {
        width: calc(100% - 50px);
        margin-left: 50px;
        background: white;
        height: 100%;
      }

      .sidebar, .main-content {
        transition: margin 200ms ease-out;
      }

      .sidebar.displayed + .main-content {
        margin-left: 200px;
      }

    </style>
</head>

<body>

    <!-- Import header -->
    <?php include 'navbar.php';?>

    <!-- Header bar -->
    <header>
      <span class="h3 title">Account</span>
      <span class="info">Hi, John Smith <img src="http://placehold.it/32x32" alt="profile picture" class="img-circle"></span>
    </header>

    <!-- Wrapper for both sidebar and content-pane -->
    <div class="wrapper clearfix">

      <!-- sidebar -->
      <nav class="sidebar">
        <ul class="nav">
          <!-- First item will be used as menu toggle -->
          <li><a href="#">Dashboard Menu <span id="sidenav-toggle-btn" class="pull-right fa fa-lg fa-bars inversed">
      </span></a></li>
          <li><a href="">My Garage <span class="pull-right fa fa-lg fa-car"></span></a></li>
          <li><a href="">Account <span class="pull-right fa fa-lg fa-home"></span></a></li>
          <li><a href="">Profile <span class="pull-right fa fa-lg fa-user"></span></a></li>
          <li><a href="">Upgrades <span class="pull-right fa fa-lg fa-upload"></span></a></li>
          <li><a href="">Support <span class="pull-right fa fa-lg fa-headphones"></span></a></li>
          <li><a href="">History <span class="pull-right fa fa-lg fa-clock-o"></span></a></li>
          <li><a href="">Settings <span class="pull-right fa fa-lg fa-cogs"></span></a></li>
          <li><a href="">Share <span class="pull-right fa fa-lg fa-share-alt"></span></a></li>
          <li><a href="">Promotions <span class="pull-right fa fa-lg fa-bullhorn"></span></a></li>
        </ul>
      </nav>

      <!-- main content -->
      <main class="main-content">

        <div class="container-fluid">
          <h1>Hello</h1>
          <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ad voluptates, facilis! Quis cum, quaerat ipsa repudiandae pariatur praesentium molestiae placeat voluptatem facere autem voluptatum sequi quia perferendis ipsam, labore nostrum?</p>
        </div>

      </main>

    </div><!-- .wrapper.clearfix -->

    <!-- import footer -->
    <?php include 'footer.php';?>


    <!-- jQuery (necessary for Bootstrap's Javascript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <script src="bower_components/bootstrap-sass/assets/javascripts/bootstrap.min.js"></script>
    <script src="bower_components/angular/angular.min.js"></script>

    <!-- TODO: move elsewhere -->
    <script>
      $(document).ready(function() {
        $("#sidenav-toggle-btn").click(function (e) {
          e.preventDefault();
          $(".sidebar").toggleClass("displayed");
        });
      });
    </script>

</body>

</html>
