<?php

  if($_COOKIE['me']=='NO')
    header("location:login.php");
?>
<?php
  
        $con=mysqli_connect("localhost","root","","forum");  
        $det=$_POST['det'];

          $result=mysqli_query($con,"insert into post(message,id_university)values('".$det."', '".$_COOKIE['me']."')");
       
        header("location:first_forum.php");

?>