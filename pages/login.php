
<?php  //Login form. Start
if (isset($_SESSION['register_user'])/* && isset($_COOKIE('register_user'))*/) {
        echo "Hello,".$_SESSION['register_user'];
        echo "</br>";
        include_once("logout.php"); 

} else 
            
        if (isset($_POST["sublogin"])){
	            login($_POST['login'], $_POST['pass']);
        } else { ?>
             <p>Login, please</p>
              <form action="" method="POST">
                 <p><label>Enter your name:</label><input type="text" name="login" placeholder="Name"/></p>
                 <p><label>Enter your password:</label><input type="password" name="pass" placeholder="Password"/></p>
                 <p><input type="submit" name="sublogin" value="OK"/></p>
               </form>

 <?php } //Login form. End ?>