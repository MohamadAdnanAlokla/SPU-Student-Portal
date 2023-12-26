<?php

  if($_COOKIE['me']=='NO')
    header("location:login.php");
?>
<!DOCTYPE html>
<html lang="ar">

<head>
  <title>Academics &mdash; Website by Colorlib</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">


  <link href="https://fonts.googleapis.com/css?family=Muli:300,400,700,900" rel="stylesheet">
  <link rel="stylesheet" href="fonts/icomoon/style.css">

  <link rel="stylesheet" href="css/bootstrap.min.css">
  <link rel="stylesheet" href="css/jquery-ui.css">
  <link rel="stylesheet" href="css/owl.carousel.min.css">
  <link rel="stylesheet" href="css/owl.theme.default.min.css">
  <link rel="stylesheet" href="css/owl.theme.default.min.css">

  <link rel="stylesheet" href="css/jquery.fancybox.min.css">

  <link rel="stylesheet" href="css/bootstrap-datepicker.css">

  <link rel="stylesheet" href="fonts/flaticon/font/flaticon.css">

  <link rel="stylesheet" href="css/aos.css">
  <link href="css/jquery.mb.YTPlayer.min.css" media="all" rel="stylesheet" type="text/css">

  <link rel="stylesheet" href="css/style.css">






<style>
.button {
	width: 20%;
	font-size: 15px;
	font-weight: bold;
	padding: 8px;
	border: none;
	border-radius: 8px;
	background: #910000;
	color: white;
	outline: none;
	cursor: pointer;
	position: relative;
     margin: 5px auto;
}
.pos
{
  background-color:black;
  color:white;
   margin:20px;
   padding:5px;
   text-align:center;
   box-sizeing:border-box;
   border:1px;
}

</style>

</head>


<body data-spy="scroll" data-target=".site-navbar-target" data-offset="300">

  <div class="site-wrap">

    <div class="site-mobile-menu site-navbar-target">
      <div class="site-mobile-menu-header">
        <div class="site-mobile-menu-close mt-3">
          <span class="icon-close2 js-menu-toggle"></span>
        </div>
      </div>
      <div class="site-mobile-menu-body"></div>
    </div>


    <div class="py-2 bg-light">
      <div class="container">
        <div class="row align-items-center">
          <div class="col-lg-9 d-none d-lg-block">
            <a href="#" class="small mr-3"><span class="icon-question-circle-o mr-2"></span> Have a questions?</a> 
            <a href="#" class="small mr-3"><span class="icon-phone2 mr-2"></span>0954106119</a> 
            <a href="#" class="small mr-3"><span class="icon-envelope-o mr-2"></span>mohammad0992702412@gmail.com</a> 
          </div>
          <div class="col-lg-3 text-right">
            <a href="logout.php" class="small btn btn-primary px-4 py-2 rounded-0"><span class="icon-users"></span> Log Out</a>
          </div>
        </div>
      </div>
    </div>
    <header class="site-navbar py-4 js-sticky-header site-navbar-target" role="banner">

      <div class="container">
        <div class="d-flex align-items-center">
          <div class="site-logo">
            <a href="index.html" class="d-block">
              <img src="images/logo.jpg" width="100" height="50" alt="Image" class="img-fluid">
            </a>
          </div>
          <div class="mr-auto">
            <nav class="site-navigation position-relative text-right" role="navigation">
              <ul class="site-menu main-menu js-clone-nav mr-auto d-none d-lg-block">
                <li class="active">
                  <a href="#" class="nav-link text-left">Home</a>
                </li>
                <li class="has-children">
                  <a href="#" class="nav-link text-left">About Us</a>
                  <ul class="dropdown">
                    <li><a href="#">Our Teachers</a></li>
                    <li><a href="#">Our School</a></li>
                  </ul>
                </li>
                <li>
                  <a href="#" class="nav-link text-left">Admissions</a>
                </li>
                <li>
                  <a href="#" class="nav-link text-left">Courses</a>
                </li>
                <li>
                    <a href="#" class="nav-link text-left">Contact</a>
                  </li>
              </ul>                                                                                                                                                                                                                                                                                          </ul>
            </nav>

          </div>
          <div class="ml-auto">
            <div class="social-wrap">
              <a href="#"><span class="icon-facebook"></span></a>
              <a href="#"><span class="icon-twitter"></span></a>
              <a href="#"><span class="icon-linkedin"></span></a>

              <a href="#" class="d-inline-block d-lg-none site-menu-toggle js-menu-toggle text-black"><span
                class="icon-menu h3"></span></a>
            </div>
          </div>
         
        </div>
      </div>

    </header>

<br>
<br>
<br>
<br><br>
<div class='pos'>
<?php
     echo date ('Y-m-d h:i:a',time()+3*3600); 
?>
<?php 

           $con = mysqli_connect("localhost","root", "","forum");
            $s=mysqli_query($con,"select firstname,lastname,pic from userinf where university_number='".$_COOKIE['me']."'");
            
           while($row1=mysqli_fetch_array($s))
           
                { 
                 echo" <img src='".$row1['pic']."' height='120' width='80'> ";   
                 echo "<h1>"; 
                 echo "<b>";
                 echo"<div class='header'>";
                 echo $row1['firstname'];
                 echo "  ";
                 echo $row1['lastname'];
                 echo"</div>";
                 echo "</b>";
                 echo "</h1>";
      }
                 
            


?>
  </div>   
                           
<section>
  <nav>
    
        
   
       <?php
         
          echo"<ul>";
          echo"<li><a href='insert_image.php'><button class='button'>";
          echo "<form action='insert_image.php' method='POST'>";
          echo "<input type='hidden' name='user' value='".$_COOKIE['me']."'>";
          echo"<input type='submit' value='Insert Image'>";
          echo "</form>";
          echo"</button></a></li>";
	  echo" <li><a href='delete_user.php'><button class='button'>Delete my account</button></a></li>";

           $con = mysqli_connect("localhost","root", "","forum");
           $s3=mysqli_query($con,"select * from userinf where university_number='".$_COOKIE['me']."'");

          $row3=mysqli_fetch_array($s3);

         if($row3['member']=="admin"||$row3['member']=="owner")   
           { 
             
               echo "<li><a href='delete_member.php'><button class='button'>member delete</button></a></li>";
               echo "<li><a href='insert_admin.php'><button class='button'>insert admin</button></a></li>";
           }
    if($row3['member']=="owner")   
           { 
             
               echo "<li><a href='delete_admin.php'><button class='button'>edit admin</button></a></li>";
              
           }
    echo"</ul>";
        ?>
    	
     
    </nav>

  <article>

<?php	
   
   
	$con = mysqli_connect("localhost","root", "","forum");
           if(mysqli_connect_error())
         		{
	  		   echo "Failed to connect to mysql :".mysqli_connect_error();
		        }

     $sql="select * from post order by id_message desc";
     $result=mysqli_query($con,$sql);

     echo"</div>";
echo "<table width='100%' border=0 align=center>";
echo "<tr bgcolor='#cccccc'>";
echo "<td>postes</td>";
echo "<td>sender</td>";
echo"<td>edit</td>";
echo "</tr>";
   if($result)
{
  while($row =mysqli_fetch_array($result))
    {   
         
         echo "<tr>"; 
  	 echo "<td>";
         echo "<div class='pos'>";
         echo $row['message'];
        
         echo "</td>";
         
        $d=$row['id_university'];
        $s=mysqli_query($con,"select firstname,lastname from userinf where university_number='".$d."'");
           $row1=mysqli_fetch_array($s);
          
                 echo "<td>";
                 echo"<div style='background-color:lightblue;color:black;padding:20px;margin:20px;box-sizeing:border-box;
                 text-align:center;border:1px;'>";
                 echo $row1['firstname'];
                 echo "  ";
                 echo $row1['lastname'];
                 
                 echo"</div>";
                 echo"</td>";

      $s2=mysqli_query($con,"select * from userinf where university_number='".$_COOKIE['me']."'");

        $row2=mysqli_fetch_array($s2);
        echo"<td>"; 
        echo "<a href='comment.php?id=$row[id_message]'><button>comment</button></a>";
       if($_COOKIE['me']==$d||$row2['member']=="admin"||$row2['member']=="owner")   
           {
              
              echo "|<a href='edit.php?id=$row[id_message]'><button>edit</button></a>|
                     <a href='delete.php?id=$row[id_message]'><button>delete</button></a>";
           }
       echo"</td>";
echo "</div>";
    }
echo"</table>";

}
 echo"<form action='insert_process.php' method='post'>";
 echo"<div class='site-section'>";
        echo" <div class='container'>";
            echo" <div class='row'>";
               echo"  <div class='col-md-12 form-group'>";
                 echo"    <label for='message'>Message</label>";
                 echo"    <textarea name='det' id='message' cols='10' rows='5' class='form-control'></textarea>";
                echo" </div>";
          echo"   </div>";

           echo"  <div class='row'>";
             echo"    <div class='col-12'>";
                 echo"    <input type='submit' value='Send Message' class='btn btn-primary btn-lg px-5'>";
                
               echo"  </div>";
           echo"  </div>";
         echo"</div>";
 echo"</form>";

?>  
</article>
</section>


 <!-- loader -->
  <div id="loader" class="show fullscreen"><svg class="circular" width="48px" height="48px"><circle class="path-bg" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke="#eeeeee"/><circle class="path" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke-miterlimit="10" stroke="#51be78"/></svg></div>

  <script src="js/jquery-3.3.1.min.js"></script>
  <script src="js/jquery-migrate-3.0.1.min.js"></script>
  <script src="js/jquery-ui.js"></script>
  <script src="js/popper.min.js"></script>
  <script src="js/bootstrap.min.js"></script>
  <script src="js/owl.carousel.min.js"></script>
  <script src="js/jquery.stellar.min.js"></script>
  <script src="js/jquery.countdown.min.js"></script>
  <script src="js/bootstrap-datepicker.min.js"></script>
  <script src="js/jquery.easing.1.3.js"></script>
  <script src="js/aos.js"></script>
  <script src="js/jquery.fancybox.min.js"></script>
  <script src="js/jquery.sticky.js"></script>
  <script src="js/jquery.mb.YTPlayer.min.js"></script>


  <script src="js/main.js"></script>
</body>
</html>   
