<?php

  if($_COOKIE['me']=='NO')
    header("location:login.php");
?>
 <?php
        
    $con=mysqli_connect("localhost","root","","forum");
   $id=$_POST['id'];
   $det=$_POST['det'];
   mysqli_query($con,"update post set message='$det' where id_message='$id' ");
   header("location:first_forum.php");

?>