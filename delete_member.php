<?php

  if($_COOKIE['me']=='NO')
    header("location:login.php");
?>
<!DOCTYPE html>
<html lang="en">
<head>
</head>
<body>
<?php
  $con=mysqli_connect("localhost","root","","forum");  
  $result=mysqli_query($con,"select * from userinf where university_number!='".$_COOKIE['me']."' AND member!='admin'AND member!='owner'");
  echo "<table width='100%' border=0 align=center>";
  echo "<tr bgcolor='#cccccc'>";
  echo "<td>member</td>";
  echo "<td>number of university</td>";
   echo "<td>opration</td>";
  echo "</tr>";
  while($row=mysqli_fetch_array($result))
   {
                 echo "<tr>";
                 echo "<td>";
                 echo $row['firstname'];
                 echo "  ";
                 echo $row['lastname'];                
                 echo"</td>";
                 echo"<td>".$row['university_number']."</td>";
                 echo "<td><a href='delete_member_process.php?id=$row[university_number]'><button>delete</button></a>";
                 echo "</tr>";
   }
echo"</table>";
?>
  
 <?php
    echo"<div style='background-color:lightblue;color:black;padding:5px;margin:5px;box-sizeing:border-box;'>"; 
    echo"<center><a href='BACK.php'><button>Back</button></a></center>";
    echo"</div>";
?>
 
        
</body>
</html>