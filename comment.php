<?php

  if($_COOKIE['me']=='NO')
    header("location:login.php");
?>
<!DOCTYPE html>
<html lang="en">
<head>
<style>
.button {
	width: 80%;
	font-size: 50px;
	font-weight: bold;
	padding: 20px;
	border: none;
	border-radius: 20px;
	background: #910000;
	color: white;
	outline: none;
	cursor: pointer;
	position: relative;
       margin: 10px auto;
}
.button1 {
	width: 20%;
	font-size: 15px;
	font-weight: bold;
	padding: 8px;
	border: none;
	border-radius: 8px;
	background: blue;
	color: white;
	outline: none;
	cursor: pointer;
	position: relative;
     margin: 5px auto;
}
</style>
</head>
<body>
<?php
  $con=mysqli_connect("localhost","root","","forum"); 
  $id=$_GET['id']; 
  $result=mysqli_query($con,"select * from post where id_message='".$id."'");
  echo "<table width='100%' border=0 align=center>";
  echo "<tr bgcolor='#cccccc'>";
  echo "<td><center>post</center></td>"; 
  echo "</tr>";
  echo"</table>";
   $row=mysqli_fetch_array($result);         
   echo"<div class='button'><center>";
   echo $row['message'];

   echo"</center></div>";
  
          echo"<a href='insrt_comment.php'><button class='button1'>Insert comment</button></a>";
 
  
?>
  
 <?php
    echo"<div style='background-color:lightblue;color:black;padding:5px;margin:5px;box-sizeing:border-box;'>"; 
    echo"<center><a href='BACK.php'><button>Back</button></a></center>";
    echo"</div>";
?>
 
        
</body>
</html>