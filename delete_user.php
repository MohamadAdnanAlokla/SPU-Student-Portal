<?php

  if($_COOKIE['me']=='NO')
    header("location:login.php");
?>
<?php
  $d=$_COOKIE['me'];
   setcookie('me','NO',time()-3600);
   $con = mysqli_connect("localhost","root", "","forum");
   mysqli_query($con,"delete from post where id_university='".$d."'");
   mysqli_query($con,"delete from userinf where university_number='".$d."'");
   
   header("location:welcome.html");
?>