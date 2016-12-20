<?php 
require("koneksi.php");

  if(!isset($_COOKIE['amcor'])){
    header("Location: index.php");
  }

  $user = $_COOKIE['amcor'];

  $query="select * from siswa where username='$user'";
  $query1="select * from guru where username='$user'";
  $query2="select * from admin where username='$user'";
  $query7="select * from admin";

  $hasil = mysqli_query($conn, $query) or die("Error");
  $hasil1 = mysqli_query($conn, $query1) or die("Error");
  $hasil2 = mysqli_query($conn, $query2) or die("Error");
  $hasil7 = mysqli_query($conn, $query7) or die("Error");

  $data = mysqli_fetch_array($hasil);
  $data1 = mysqli_fetch_array($hasil1);
  $data2 = mysqli_fetch_array($hasil2);

  if ($user === $data1['username']) {
    header("location: indexguru.php");
  }
  if ($user === $data['username']) {
    header("Location: indexsiswa.php");
  }

?>



<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>AMERICAN CORNER UNTIVERSITAS TANJUNGPURA</title>

    <!-- Bootstrap -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- CUSTOM -->
    <link href="css/custom3.css" rel="stylesheet">
    <link href='http://fonts.googleapis.com/css?family=Oswald|Open+Sans' rel='stylesheet' type='text/css'>
    <link rel="stylesheet" href="css/font-awasome.min.css">
    <link rel="stylesheet" href="css/animate.css">

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>
  <body>

    <nav class="navbar navbar-default">
      <div class="container">
        <!-- Brand and toggle get grouped for better mobile display -->
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand2 animated bounceInDown" href="index.php"><img src="img/ac.png" class="logo"></a>
        </div>

        <!-- Collect the nav links, forms, and other content for toggling -->
        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">

          <ul class="nav navbar-nav">
            <li class="nav11 animated bounceInDown"><a href="indexadmin.php">HOME <span class="sr-only">(current)</span></a></li>
            <li class="nav22 animated bounceInDown"><a href="newsadmin.php">NEWS</a></li>
            <li class="nav44 animated bounceInDown active "><a href="admin.php">ADMIN</a></li>
          </ul>

          <!-- Media Sosial -->
          <ul class="navkanan">
            <li class="twitter2 animated bounceInDown"><a href="logout.php"><!-- <i class="fa fa-twitter"></i> --><!--LOGIN BUTTON--><input type="submit" name="submit" value="Logout" class="button1"><!--END LOGIN BUTTON--></a></li>
            <!-- <li class="facebook animated bounceInDown"><a href="#"><i class="fa fa-facebook"></i></a></li> -->
          </ul>
          <!-- /Media Sosial -->

        </div><!-- /.navbar-collapse -->
      </div><!-- /.container -->
    </nav>






    <!-- HEADER -->
    <!-- MAIN CONTENT -->
    <div class="main-content container">
      <div class="row">
        
      <!-- ABOUT ME -->
        <div class="student">
          <h3 class="studenttab">| <small><a href="admin.php" class="st">Admin's Info</a></small> | <small><a href="admin_teacher.php" class="at">Teacher's Info</a></small> | <small><a href="admin_student.php" class="at">Student's Info</a></small> |</h3>
          
          <?php 

              require("admin_info.php");

          ?>

        </div>
      <!-- /ABOUT ME -->
      


      

      </div>
    </div>
    <!-- /MAIN CONTENT -->
    <!-- /HEADER -->




    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="js/bootstrap.min.js"></script>
  </body>
</html>