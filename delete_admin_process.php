<?php

  if($_COOKIE['me']=='NO')
    header("location:login.php");
?>
<?php
   $id=$_GET['id'];
   $con = mysqli_connect("localhost","root", "","forum");
   mysqli_query($con,"delete from post where id_university='".$id."'");
   mysqli_query($con,"delete from userinf where university_number='".$id."'");
   header("location:delete_admin.php");
?>