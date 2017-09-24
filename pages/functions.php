
<?php  

$users="pages/users.txt";
function register($log, $pass, $email)
{
   //validation
    $log=trim(htmlspecialchars($log));
    $pass=trim(htmlspecialchars($pass));
    $email=trim(htmlspecialchars($email));

    //Empty feeld
    if ($log==""||$pass==""||$email==""){
    	echo "Need enter parameter!";
    	return false;
    }

     //string length
     if (strlen($log)<3||strlen($log)>30||strlen($pass)<3||strlen($pass)>30){
    	echo "Parameter must more 3 and low 30";
    	return false;
    }

     //Search user in users.txt
     global $users;
     $file=fopen($users, 'a+');
     while($line=fgets($file,128)){
        $readname=substr($line, 0, strpos($line, ':'));
        if ($readname==$log){
        	echo "Eror! User exist!";
        	return false;
        }
     }
        
        //new user
        $line=$log.':'.md5($pass).':'.$email."\r\n";
        fputs($file,$line);
        fclose($file);
        echo "New user added!";
        $_SESSION['register_user']=$log;
        return true;

    }

   //Моя функция логинивания. На уроке сделали по другому. Свою ф-цию переименовала login1
   function login($log, $pass) {
   	    //validation
        $log=trim(htmlspecialchars($log));
        $pass=trim(htmlspecialchars($pass));

        //Empty feeld
        if ($log==""||$pass==""){
    	echo "Need enter parameter!";
    	return false;
        } //validation

          //Search user in users.txt
          global $users;
          $file=fopen($users, 'a+');
          
          while($line=fgets($file,128)){
          	 $readname=substr($line, 0, strpos($line, ':'));
             /*
              strpos($line, ':')+1  - позиция 1-го :, сдвигаем на +1, чтобы взять строку после него
              strrpos($line, ':') - позиция последнего :
              (strrpos($line, ':')-((strpos($line, ':')+1))) - длина строки  между двумя :  - это  пароль
             */ 
          	 $readpass=substr($line,  (strpos($line, ':')+1), (strrpos($line, ':')-((strpos($line, ':')+1))));
          	  
          	//User  exists
             if ($readname==$log||$readpass==md5($pass)){
              	$_SESSION['register_user']=$log;
                setcookie("register_user", $login, time()+60*60*24*365);
                echo 'Helo, '.$log;   
                return true;
          

        } //if
             

      }//while  


        //User not exists
                   echo "Invalid login or password! </br>";
                   echo 'New user? <a href="index.php?page=1">You need register!</a></br>'; 
                   
   }; //Function login

   /*
    function logout(){
         echo "Hello";
         session_destroy();


    }
 
    */
//Функция логинивания. На уроке сделали по другому. Свою ф-цию переименовала. Она не заработала
function login_xx ($login, $pswd)
  {
    // Data validation block
    $login = trim(htmlspecialchars($login));
    $pswd = trim(htmlspecialchars($pswd));
    
    if( empty($login) || empty($pswd) )
    {
      echo '<h3 style="color: red;">Please fill out all fields</h3>';
      return false;
    }
    if( strlen($login) < 3 || strlen($login) > 30 || strlen($pswd) < 3 || strlen($pswd) > 30 )
    {
      echo '<h3 style="color: red;">Values Length Must Be Between 3 and 30 Symbols.</h3>';
      return false;
    }
    
    // Cash password
    $pswd = md5($pswd);
    
    // Search user login in base-file
    global $users;
    $file = fopen($users, 'r');

    while( !feof($file) )
    {
      $line = fgets($file);
      $data = explode(':', $line);
      if( $login == $data[0] && $pswd == $data[1] )
      {
        $_SESSION['authorized']=$login; 
        echo '<h3 style="color: green;">Welcome back, ' .$login.'!</h3>';
        ?>
        
        <form action="<?php $_SERVER['REQUEST_URI']; ?>" method="post">
          <input type="submit" name="sublogout" value="Log Out" />
        </form>
        
        <?php
      }
      else
      {
        echo '<script>window.location = "index.php?page=1";</script>';
      }
    }
    fclose($file);
    return true;
  }





 ?>