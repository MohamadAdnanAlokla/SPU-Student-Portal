<html>
<head>
</head>
<body>
<?php
	

         $u=$_POST['university_number'];
         $p=$_POST['password'];
        
         
         $con=mysqli_connect("localhost","root","","forum");
         if(mysqli_connect_error())
         		{
	  		   echo "Failed to connect to mysql :".mysqli_connect_error();
		        }
         else
		{
		    $result = mysqli_query($con, "SELECT * FROM userinf WHERE university_number = '".$u."' AND password = '".$p."'");

                    
                    if (mysqli_num_rows($result)!= 0)
			{
                           
                            setcookie('me',$u,time()+3600);

                           header("Location:first_forum.php");
                        }
                    else
                        {
                           header("Location:login.php");
                        } 
                }
         
?>
</body>
</html>