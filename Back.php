<?php
   
   if($_COOKIE['me']!='NO')
    header("location:first_forum.php");
   else
     header("location:welcome.html");
    
    
?>