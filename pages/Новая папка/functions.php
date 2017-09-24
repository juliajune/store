<?php
 global $link;

/*Connect to data base*/
  function connect(
   $host="localhost",
   $user="root",
   $pass="654321",
   $dbname="10597")
  {
  	
    mysql_connect($host, $user, $pass) or die("Connection error");
  	mysql_select_db($dbname) or die ("Select db error");
  	mysql_query("et names 'utf8'");
  
}


/*Register users*/
function register($name,$pass,$email){
    $name=trim(htmlspecialchars($name));
    $pass=trim(htmlspecialchars($pass));
    $email=trim(htmlspecialchars($email));
    if ($name=="" || $pass=="" || $email=="") {
          echo "<h3/><span style='color:red;'>Fill All Required Fields!</span><h3/>";
          return false;
    }
    if (strlen($name)<3 || strlen($name)>30 || strlen($pass)<3 || strlen($pass)>30) {
          echo "<h3/><span style='color:red;'>Values Length Must Be Between 3And 30!</span><h3/>";
         return false;
    }
    $ins='insert into users (login, pass, email, roleid) values("'.$name.'","'.md5($pass).'","'.$email.'", 2)';
    connect();
    mysql_query($ins);
    
    $err=mysql_errno();
    $err_text=mysql_error();
    if ($err){
            if($err==1062) 
                  echo "<h3/><span style='color:red;'>This Login Is Already Taken!</span><h3/>";
            else
                  echo "<h3/><span style='color:red;'>Error code:".$err.":".$err_text."!</span><h3/>";
    return false;
    }
return true;
}


/*Login*/
function login($name,$pass)
{
    $name=trim(htmlspecialchars($name));
    $pass=trim(htmlspecialchars($pass));
    if ($name=="" || $pass=="")
    {
      echo "<h3/><span style='color:red;'>Fill All Required Fields!</span><h3/>";
      return false;
    }
    if (strlen($name)<3 || strlen($name)>30 || strlen($pass)<3 || strlen($pass)>30) {
      echo "<h3/><span style='color:red;'> Value Length Must Be Between 3 And 30! </span><h3/>";
      return false;
    }
    connect();
    $sel='select * from users where login="'.$name.'"and pass="'.md5($pass).'"';
    $res=mysql_query($sel);
    if($row=mysql_fetch_array($res,MYSQL_NUM)){
        $_SESSION['ruser']=$name;
          if($row[5]==1) {
              $_SESSION['radmin']=$name;
          }
    return true;
    } else {
            echo "<h3/><span style='color:red;'>No Such User!</span><h3/>";
      return false;
      }
} /*End Login function*/


?>