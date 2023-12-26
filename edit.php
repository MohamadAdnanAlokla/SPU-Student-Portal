<?php

  if($_COOKIE['me']=='NO')
    header("location:login.php");
?>
<?php 

          
	 $con=mysqli_connect("localhost","root","","forum");  
     
          $id=$_GET['id'];

        $result=mysqli_query($con,"select * from post where id_message='".$id."'");


  while($row =mysqli_fetch_array($result))
       {    
        
  		$det=$row['message'];
       }
?> 
   
<html>
<head>

</head>
<body>
     
	<form action="edit_process.php" method="post">
	 post:<br/>
	<textarea name="det" rows="7" cols="40"><?php echo $det;?>
	</textarea>
	<br/>
	<input type="hidden" name="id" value="<?php echo $_GET['id'];?>">
	<input type="submit" value="update"> | <button><a href="first_forum.php">cansel</a></button>
	
</form>


</body>
</html>