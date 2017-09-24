

<?php if (isset($_SESSION['register_user'])) {  //user login?> 
                     


<h3>Upload </h3>

<?php
if (isset($_POST['send']))
{

   if($_FILES['fn']['error']!=0 )
   {
      echo  '<h3><span style="color:red;"> Error uploading </span></h3>';
      exit();
   }

   if (is_uploaded_file($_FILES['fn']['tmp_name'])) /* загружен ли файл?*/
   {
       move_uploaded_file($_FILES['fn']['tmp_name'], "images/".$_FILES['fn']['name']);
       echo  '<h3><span style="color:green;"> File successfuly uploaded </span></h3>';
 
   }




}

else { ?>

	<form action="index.php?page=2" method="post"  enctype="multipart/form-data">
   <input type="hidden" name="MAX_FILE_SIZE" value="5000000"> <!--" "-->
   <input type="file" name="fn">
   <input  type="submit" name="send" value="Send File">
 </form>

<?php 
}

} //not login user 
else { //not login user

  echo '<script>window.location = "index.php?page=1";</script>';

       
} 


?>

