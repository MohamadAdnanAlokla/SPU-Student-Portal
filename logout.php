<?php

  if($_COOKIE['me']=='NO')
    header("location:login.php");
?>
<?php
 setcookie('me','NO',time()-3600);	
        header("location:welcome.html");
?>