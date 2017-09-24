
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Hotel info</title>
	  
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

    <!-- Optional theme -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">

    <!-- Latest compiled and minified JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
<style>
body {
   background-color: rgb(237,196,238);
}
</style>




</head>
<body>

<div class="container">
<div class="row">

<?php
include_once ("functions.php");
if(isset($_GET['hotelid'])){
    $hotelid=$_GET['hotelid'];
    connect();

   $sel='select ho.hotel, ho.stars, ho.cost, ho.info, co.country, ci.city
   from hotels ho, countries co, cities ci
   where ho.countryid=co.id and ho.id='.$hotelid;

   /* $sel='select * from hotels where id='.$hotelid; */
    $res=mysql_query($sel);
    /* $row=mysql_fetch_array($res, MYSQL_NUM);
    $hname=$row[1];
    $hstars=$row[4];
    $hcost=$row[5];
    $hinfo=$row[6];*/
    $row=mysql_fetch_array($res, MYSQL_ASSOC);
    $hname=$row["hotel"];
    $hstars=$row["stars"];
    $hcost=$row["cost"];
    $hinfo=$row["info"];
    $hcountry=$row["country"];
    $hcity=$row["city"];

    mysql_free_result($res);
    echo '<div class="page-header">';
    echo '<h2> Hotel: '.$hname.'</h2>';
    echo '</div>';
    echo'<dl class="dl-horizontal">';
    echo'<dt>Back:</dt>';
    echo'<dd><a href="http://site2/index.php?menu=1">Back to home page</a></dd>';
    echo'<dt>Cost:</dt>';
    echo'<dd>'.$hcost.'</dd>';
    echo'<dt>City:</dt>';
    echo'<dd>'.$hcity.'</dd>';
    echo'<dt>Country:</dt>';
    echo'<dd>'.$hcountry.'</dd>';
    echo'<dt>Description:</dt>';
    echo'<dd>'.$hinfo.'</dd>';
    echo'<dt>Stars:</dt>';
    echo'<dd>';
    for ($i=0; $i<$hstars; $i++)
        {
          echo '<image src="../images/icons/star-10.png" alt="star">';
        }
    echo '</dd>';
    echo'</dl>';

 /*
    echo '<div class="row"><div class="col-md-6 text-center">';
         connect();
         $sel='select imagepath from images where hotelid='.$hotelid;
         $res=mysql_query($sel);
         echo '<span class="label label-info">Watch our pictures</span>';
        
         echo'<ul id="gallery">';
            $i=0;
            while($row=mysql_fetch_array($res, MYSQL_NUM)){
            echo ' <li><img src="../'.$row[0].'"></li>';
          }
          mysql_free_result($res);
          echo '</ul>';
*/
}
?>

 </div> <!--/row-->







<div class="row">

    <div class="col-lg-12">
        <h2 class="page-header">Watch our pictures</h2>
        <?php
        connect();
        $sel='select imagepath from images where hotelid='.$hotelid;
        $res=mysql_query($sel);

         $i=0;
            while($row=mysql_fetch_array($res, MYSQL_NUM)){
           echo '<div class="col-lg-3 col-md-4 col-xs-6 thumb">';
           echo '<a class="thumbnail" href="#" data-image-id="" data-toggle="modal" data-title=" " data-caption=" " data-image="../'.$row[0].'" data-target="#image-gallery">';
           echo '<img class="img-responsive" src="../'.$row[0].'" alt=" ">';
           echo '</a>';
           echo '</div>';

        }
          mysql_free_result($res);
        ?>
    </div>
<div class="modal fade" id="image-gallery" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">×</span><span class="sr-only">Close</span></button>
                <h4 class="modal-title" id="image-gallery-title"></h4>
            </div>
            <div class="modal-body">
                <img id="image-gallery-image" class="img-responsive" src="">
            </div>
            <div class="modal-footer">

                <div class="col-md-2">
                    <button type="button" class="btn btn-primary" id="show-previous-image">Previous</button>
                </div>

                <div class="col-md-8 text-justify" id="image-gallery-caption">
                    This text will be overwritten by jQuery
                </div>

                <div class="col-md-2">
                    <button type="button" id="show-next-image" class="btn btn-default">Next</button>
                </div>
            </div>
        </div>
    </div>
</div>

</div> <!--/container-->



<!-- jQuery (necessary for Bootstrap’s JavaScript plugins) -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
<!-- Include all compiled plugins (below), or include
individual files as needed -->
<script src="../js/bootstrap.min.js"></script>
<script src="../js/plugins/slideshow.js"></script>
</body>
</html>


