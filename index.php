<?php
session_start();
include_once ("pages/functions.php");
include_once ("pages/classes.php");
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Travel Agency</title>
	  
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <link href="css/jquery-ui.css" rel="stylesheet">

   

    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

    <!-- Optional theme -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">

    <!-- Latest compiled and minified JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>

     <script src="js/jquery-3.1.0.min.js"></script>
<style>
html {
  position: relative;
  min-height: 100%;
}
body {
  /* Margin bottom by footer height */
  margin-bottom: 60px;
  background-color: rgb(237,196,238);
}
.footer {
  position: absolute;
  bottom: 0;
  /*width: 100%;*/
  /* Set the fixed height of the footer here */
  height: 60px;
  
}
</style>


</head>
<body>

<header>
<!--Top main menu-->
<nav class="navbar navbar-default"  style="margin-bottom:0px;">
  <div class="container">
    <!-- Brand and toggle get grouped for better mobile display -->
    <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a class="navbar-brand" href="http://site2/index.php">Travel Agency</a>
    </div>

    <!-- Collect the content for toggling -->
    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
       <!--Menu here-->
       <?php include_once("pages/menu.php");  ?>
      
      <!--Login form here-->
      <?php include_once("pages/login.php");?>
      
    </div><!-- /.navbar-collapse -->
  </div><!-- /.container -->
</nav><!--/Top main menu-->


<!--Homepage slider-->
<div id="myCarousel" class="carousel slide" data-ride="carousel">
      <!-- Indicators -->
      <ol class="carousel-indicators">
        <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
        <li data-target="#myCarousel" data-slide-to="1"></li>
        <li data-target="#myCarousel" data-slide-to="2"></li>
        <li data-target="#myCarousel" data-slide-to="3"></li>
        <li data-target="#myCarousel" data-slide-to="4"></li>
      </ol>
      <div class="carousel-inner" role="listbox">
        <div class="item active">
          <img class="first-slide" src="images/homepage-gallery/flower.jpg" alt="Provence">
          <div class="container" >
            <div class="carousel-caption" >
              <!--
              <h1 style="background: rgba(255,245,215,.5);">Provence with discount 5%!</h1>
              <p>5 days and 4 night for two person.</p>
              <p><a class="btn btn-default" href="#" role="button">Learn more</a></p>
              -->
            </div>
          </div>
        </div>
        <div class="item">
          <img class="second-slide" src="images/homepage-gallery/bluesky.jpg" alt="Blue sky">
          <div class="container">
            <div class="carousel-caption">
              <!--
              <h1>Another example headline.</h1>
              <p>Cras justo odio, dapibus ac facilisis in, egestas eget quam. Donec id elit non mi porta gravida at eget metus. Nullam id dolor id nibh ultricies vehicula ut id elit.</p>
              <p><a class="btn btn-default" href="#" role="button">Learn more</a></p>
              -->
            </div>
          </div>
        </div>
        <div class="item">
          <img class="third-slide" src="images/homepage-gallery/lake.jpg" alt="Lake">
          <div class="container">
            <div class="carousel-caption">
               <!--
              <h1>One more for good measure.</h1>
              <p>Cras justo odio, dapibus ac facilisis in, egestas eget quam. Donec id elit non mi porta gravida at eget metus. Nullam id dolor id nibh ultricies vehicula ut id elit.</p>
              <p><a class="btn btn-default" href="#" role="button">Browse gallery</a></p>
              -->
            </div>
          </div>
        </div>
        <div class="item">
          <img class="third-slide" src="images/homepage-gallery/prague.jpg" alt="Prague">
          <div class="container">
            <div class="carousel-caption">
              <!--
              <h1>One more for good measure.</h1>
              <p>Cras justo odio, dapibus ac facilisis in, egestas eget quam. Donec id elit non mi porta gravida at eget metus. Nullam id dolor id nibh ultricies vehicula ut id elit.</p>
              <p><a class="btn btn-default" href="#" role="button">Browse gallery</a></p>
               -->
            </div>
          </div>
        </div>
        <div class="item">
          <img class="third-slide" src="images/homepage-gallery/ocean.jpg" alt="Ocean">
          <div class="container">
            <div class="carousel-caption">
              <!--
              <h1>One more for good measure.</h1>
              <p>Cras justo odio, dapibus ac facilisis in, egestas eget quam. Donec id elit non mi porta gravida at eget metus. Nullam id dolor id nibh ultricies vehicula ut id elit.</p>
              <p><a class="btn btn-default" href="#" role="button">Browse gallery</a></p>
               -->
            </div>
          </div>
        </div>
      </div>
      <a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
        <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
        <span class="sr-only">Previous</span>
      </a>
      <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
        <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
        <span class="sr-only">Next</span>
      </a>
    </div><!--/Homepage slider-->
</header>


<div class="container" >
<!-- Page content -->
<div class="row">
  <section class="col-sm-12 col-md-12 col-lg-12">
        <?php 
              if(isset($_GET['menu'])){
               $menu=$_GET['menu'];
              if($menu==1) include_once("pages/catalog.php");
              if($menu==8) include_once("pages/admin.php");
              /*if($menu==2) include_once("pages/feedback.php");
              if($menu==3) include_once("pages/register.php");
              if($menu==4) include_once("pages/admin.php");
              if($menu==5 && isset($_SESSION['radmin']))
              include_once("pages/private.php");
              */
            }
            
         ?>


</section>
</div>  <!-- /Page content -->
   
<div class="row"><!--Footer--> 
  <footer class="col-sm-12 col-md-12 col-lg-12">
      <!--  Footer -->
  </footer>
</div> <!--/Footer--> 


</div><!-- /container-->
<!-- jQuery (necessary for Bootstrap’s JavaScript plugins) -->
<!--<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>-->
<!-- Include all compiled plugins (below), or include
individual files as needed -->
<script src="js/bootstrap.min.js"></script>
<script src="js/jquery-ui.js"></script>
</body>
</html>