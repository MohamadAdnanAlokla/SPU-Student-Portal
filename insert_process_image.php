<html>
<head>
<title>
</title>
</head>
<body>
<?php
     //����� �������� �� ���� insert_image.php
      $u=$_POST['user']; 
      $p=$_POST['pic'];
      
    //������� ����� �������� �������� ����
     $con=mysqli_connect("localhost","root","","forum");

     $s=mysqli_query($con,"UPDATE userinf SET pic='".$p."' where university_number='".$u."' ");
    
      header("location:first_forum.php");   
    
      
       
?>
</body>
</html>