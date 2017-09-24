
<h3>Оставьте отзыв об отеле.</h3>
<?php
connect();
echo '<form action="index.php?menu=2" method="post">';
		echo '<select name="hotelyid" class="col-sm-3 col-md-3 col-lg-3">';
			$res=mysql_query("SELECT * FROM hotels ORDER BY hotel");
			echo '<option value="0">Select hotel...</option>';
			while ($row=mysql_fetch_array($res, MYSQL_NUM)) {
					echo '<option value="'.$row[0].'">'.$row[1].'</option>';
			}
			mysql_free_result($res);
			echo '<input type="submit" name="selhotel" value="Select Hotel" class="btn btn-xs btn-primary">';
		echo '</select>';

	
	/*Button Select country submit*/
	if(isset($_POST['selcountry'])) { 
		echo '<br/>';
		$countryid=$_POST['countryid'];
		if($countryid == 0) exit();
		$result=mysql_query("SELECT * FROM cities where countryid=".$countryid." ORDER BY city");
		echo '<select name="cityid" class="col-sm-3 col-md-3 col-lg-3">';
		echo '<option value="0">Select city...</option>';
			while ($row=mysql_fetch_array($result, MYSQL_NUM)) {
					echo '<option value="'.$row[0].'">'.$row[1].'</option>';
			}
			mysql_free_result($result);
		echo '</select>';
		echo '<input type="submit" name="selcity" value="Select City" class="btn btn-xs btn-primary">';
	}
echo '</form>';

?>