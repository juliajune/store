<div class="page-header">
  <h1>Select Tours</h1>
</div>

<div class="row">


 <?php 
 /*Select country form*/
   connect();
   echo '<form action="index.php?menu=1" class="form-horizontal"  method="post" >';
      echo '<div class="col-xs-3 col-sm-3 col-md-3 col-lg-3">';
      /*echo '<div class="col-xs-3 col-sm-3 col-md-3 col-lg-3 col-xs-offset-3 col-sm-offset-3 col-md-offset-3 col-lg-offset-3">';*/
      echo '<select name="countryid" class="form-control">';
      $res=mysql_query('select * from countries order by country');
      echo'<option value="0">Select country...</option>';
      while ($row=mysql_fetch_array($res, MYSQL_NUM)){
      	 echo '<option value="'.$row[0].'">'.$row[1].'</option>';
      	
      }
      mysql_free_result($res);
      echo '</select>';
      echo '</div>';
      echo '<div class="col-xs-3 col-sm-3 col-md-3 col-lg-3">';
      echo '<input type="submit" name="sub1" value="Select Country" class="form-control btn  btn-primary"> ';
      echo '</div>';
  
  /*If "Select country" submit , then view  "Select city" control elements*/ 
  if (isset($_POST['sub1']))
  {
    
    if ($_POST['countryid']==0) exit(); /*if no select, exit*/
    $sel='select * from cities where countryid='.$_POST['countryid'].' order by city';
    $res2=mysql_query($sel);
    echo '<div class="col-xs-3 col-sm-3 col-md-3 col-lg-3">';
    echo '<select name="cityid" class="form-control">';
    echo '<option value="0"> Select city..</option>';
    while($row=mysql_fetch_array($res2, MYSQL_NUM))
    {
       echo '<option value="'.$row[0].'">';
       echo $row[1].'</option>';
    }
    mysql_free_result($res2);
    

    echo '</select>';
    echo '</div>';
    echo '<div class="col-xs-3 col-sm-3 col-md-3 col-lg-3">';
    echo '<input type="submit" name="sub2" value="Select City" class="form-control btn btn-primary"/> ';
    echo '</div>';
  echo '</form>';
} ?>


</div>


<?php

if (isset($_POST['sub2'])){
   $cityid=$_POST['cityid']; 
   $sel='select ho.hotel, co.country, ci.city, ho.cost, ho.id
   from hotels ho, countries co, cities ci
   where ho.countryid=co.id and ci.id='.$cityid;
    
   echo '<h2> Search result</h2>';
   echo '<div class="row">';
   echo '<div class="table-responsive">';
   echo '<table width="100%" class="table table-striped">';
   echo '<tr><th>Hotel</th>
         <th>Country</th>
         <th>City</th>
         <th>Cost</th>
         <th>Info</th></tr>';

    $res3=mysql_query($sel);
    while ($row=mysql_fetch_array($res3, MYSQL_NUM)){
    	echo '<tr>';
    	echo '<td>'.$row[0].'</td>';
    	echo '<td>'.$row[1].'</td>';
    	echo '<td>'.$row[2].'</td>';
    	echo '<td>'.$row[3].'</td>';
    	echo '<td><a target="_blank" href="pages/hotelinfo.php?hotelid='.$row[4].' ">More info...</a></td>';
    	echo '</tr>';
    }
    mysql_free_result($res3);

   echo '</table>';
   echo '</div>';
}



?>



