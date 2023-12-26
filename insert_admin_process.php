<?php

  if($_COOKIE['me']=='NO')
    header("location:login.php");
?>
 <?php
        
    $con=mysqli_connect("localhost","root","","forum");
   $id=$_GET['id'];
    mysqli_query($con,"update userinf set member='admin' where university_number='$id' ");
    header("location:insert_admin.php");

?>