<?php
if (isset($_SESSION['ruser']))
{
	echo '<form action="index.php" class="navbar-form navbar-right" method="post">';
			echo 'Hello, <span>'.$_SESSION['ruser']. '</span>&nbsp;';
			echo '<input type="submit" value="Logout" id="ex" name="ex" class="btn btn-default"></h4>';
			echo '</form>';
		if (isset($_POST['ex']))
			{
 			unset($_SESSION['ruser']);
 			unset($_SESSION['radmin']);
 			echo '<script>window.location.reload()</script>';
			}
}
else
	{
		if (isset($_POST['press']))
		{
				if(login($_POST['login'],$_POST['pass'])){
						echo '<script>window.location.reload()</script>';
 				}
		} else 	{
				echo '<form action="index.php" class="navbar-form navbar-right" method="post">';
				echo '<input type="text" name="login" size="10" class="form-control" placeholder="login">
	   					  <input type="password" name="pass" size="10" class="form-control" placeholder="password">
      					  <input type="submit" id="press"  value="Login"  class="btn btn-default" name="press">
						  </form>';
				}
    }



        