<?php
	
         $con=mysqli_connect("localhost","root","","forum");
         if(mysqli_connect_error())
         		{
	  		   echo "Failed to connect to mysql :".mysqli_connect_error();
		        }
            $f=$_POST['firstname'];
            $l=$_POST['lastname'];
            $c=$_POST['college'];
            $g=$_POST['gender'];	
            $u=$_POST['university_number'];
	
            $p=$_POST['password'];
            $m="normal";
           
    $insert = mysqli_query($con,"INSERT INTO userinf(college,firstname,gender,lastname,member,password,university_number) VALUES ('".$c."','".$f."','".$g."','".$l."','".$m."','".$p."','".$u."')");
	
	
      if ($insert)
                {
                           setcookie('me',$u,time()+3600);

                           header("Location:first_forum.php");
                }


    else
        header("Location:add_account.php");
?>