<?php

  if($_COOKIE['me']=='NO')
    header("location:login.php");
?>
<?php
   
	 $con=mysqli_connect("localhost","root","","forum");  
     
          $id=$_GET['id'];

        $result=mysqli_query($con,"delete from post where id_message='".$id."'");

         header("Location:first_forum.php");        
?>