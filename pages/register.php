
<?php
if (isset($_POST["subreg"])){
	/*
	echo "Your name: ".$_POST["user_name"]."<br/>";
	echo "Your E-mail: ".$_POST["user_mail"]."<br/>";
	echo "Your Password: ".$_POST["user_pass"]."<br/>";
*/

	register($_POST['login'], $_POST['pass'],  $_POST['email'] );

} else  { ?>

<p>Register, please</p>
<form action="index.php?page=1" method="POST">
<p><label>Enter your name:</label><input type="text" name="login" placeholder="Name"/></p>
<p><label>Enter your e-mail:</label><input type="e-mail" name="email" placeholder="E-mail"/></p>
<p><label>Enter your password:</label><input type="password" name="pass" placeholder="Password"/></p>
<p><input type="submit" name="subreg" value="OK"/></p>
</form>

<?php } ?>