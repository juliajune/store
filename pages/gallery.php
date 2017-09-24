
<h2>Gallery</h2>
<h4>Select file type</h4>
<form action='index.php?page=3' method='post'>
<select name="ext">
<?php 
   $path='images/';
   if ($dir=opendir($path))
   {
     $filter=array('jpeg','jpg','png','gif','bmp');
     $ar=array();

     while(($file=readdir($dir)) !== false) //до тех пор, пока тождественоо не равно false  Т.е. пока не переберем все файлы
     {
        $fullname=$path.$file; // images/1.jpg
        $pos=strrpos($fullname,"."); // найти в строке символ "." Читаем строку с конца - задом наперед. Но позиции идут сначала
        $ext=substr($fullname,$pos+1); // берем следующий элемент массива после ".", т.е расширение. Позици массива слева направ
         if(in_array($ext, $filter) && !in_array($ext, $ar))
           {
           	echo '<option>'.$ext.'</option>';
           	$ar[]=$ext;
           }
     }
     closedir($dir);
   }
?>
</select>
<input type="submit" name="subext" value="Show Gallery">
</form>

<?php 
if(isset($_POST['subext'])){
   $ext=$_POST['ext'];
   $ar=glob($path.'*.'.$ext); //функция glob - array
   foreach ($ar as $a){
     echo '<a href=" '.$a.' " target="_blank">
              <img height="100px" src="'.$a.'">
           </a>';

   }

}

?>
