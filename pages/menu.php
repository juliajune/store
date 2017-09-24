

<ul class="nav navbar-nav">

<?php if (isset ($_GET['menu'])){
         $menu=$_GET['menu'];
?>

<!-- Select the "Active" menu item-->
        <li <?php  if ($menu==1)  {
                                    echo "class='active'" ;
                                   } else { 
                                     echo "class=''" ;
                                     }
                                    ?>>
           <a href="index.php?menu=1">Catalog</a></li>
        <li <?php  if ($menu==2)  {
                                    echo "class='active'";
                                   } else {
                                      echo "class=''" ;
                                    } ?>>
            <a href="index.php?menu=2">Cart</a></li>  
        <li <?php  if ($menu==3) 
                                   {
                                     echo "class='active'";
                                    } else { 
                                      echo "class=''" ;} 
                                      ?>>
            <a href="index.php?menu=3">Comment</a></li>
        <li <?php  if ($menu==4) 
                                   {
                                     echo "class='active'";
                                    } else { 
                                      echo "class=''" ;} 
                                      ?>>
        <a href="index.php?menu=4">Categories</a></li>
        <li <?php  if ($menu==5) 
                                   {
                                     echo "class='active'";
                                    } else { 
                                      echo "class=''" ;} 
                                      ?>>
        <a href="index.php?menu=5">Items</a></li>
        <li <?php  if ($menu==6) 
                                   {
                                     echo "class='active'";
                                    } else { 
                                      echo "class=''" ;} 
                                      ?>>
        <a href="index.php?menu=6">Reports</a></li>
        <li <?php  if ($menu==7) 
                                   {
                                     echo "class='active'";
                                    } else { 
                                      echo "class=''" ;} 
                                      ?>>
        <a href="index.php?menu=7">Users</a></li>
         <li <?php  if ($menu==8) 
                                   {
                                     echo "class='active'";
                                    } else { 
                                      echo "class=''" ;} 
                                      ?>>
        <a href="index.php?menu=8">Admins</a></li>


        
?>

<!--Home page. No select menu -->
 <?php 
 } else { ?>
        <!--<li class="active"><a href="index.php" >Home</a></li>-->
        <li><a href="index.php?menu=1">Catalog</a></li>
        <li><a href="index.php?menu=2">Feedback</a></li>
        <li><a href="index.php?menu=3">Registration</a></li>
        <li><a href="index.php?menu=4">Admin</a></li>
<?php }?>


</ul>