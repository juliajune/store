
<?php 
if (isset($_POST["sublogout"]) and isset($_SESSION['register_user']) ){
              
     logout();

    
}

else  { ?>

		  <p>Logout?</p>
			<form action="" method="POST">
  			  <p><input type="submit" name="sublogout" value="Exit"/></p>
			</form>

<?php } ?>




