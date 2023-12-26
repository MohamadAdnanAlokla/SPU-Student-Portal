<html>
<head>
<title>
</title>
</head>
<body>

<?php
 $u=$_POST['user'];
 echo"<form action='insert_process_image.php' method='POST'>";
 echo"<input type='file' name='pic'>";
 echo"<input type='hidden' name='user' value='".$u."'>";
 echo" <input type='submit' value='save'>";
 echo" </form>";
 echo"<button><a href='Back.php'>BACK</a></button>"
?>
</body>
</html>