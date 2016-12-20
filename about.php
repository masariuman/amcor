<!DOCTYPE html>

  <?php 
      require("koneksi.php");

      if(isset($_COOKIE['amcor'])){
        $user = $_COOKIE['amcor'];

        $query="select * from siswa where username='$user'";
        $query1="select * from guru where username='$user'";
        $query2="select * from admin where username='$user'";


        $hasil = mysqli_query($conn, $query) or die("Error");
        $hasil1 = mysqli_query($conn, $query1) or die("Error");
        $hasil2 = mysqli_query($conn, $query2) or die("Error");

        $data = mysqli_fetch_array($hasil);
        $data1 = mysqli_fetch_array($hasil1);
        $data2 = mysqli_fetch_array($hasil2);


        if ($user === $data['username']) {
          setcookie("amcor", "$user");
          header("Location: indexsiswa.php");
        }
        if ($user === $data1['username']) {
          header("location: indexguru.php");
        }
        if ($user === $data2['username']) {
          header("Location: indexadmin.php");
        }

      }

  ?>

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
    <link href="css/custom.css" rel="stylesheet">
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
            <li class="nav11 animated bounceInDown"><a href="index.php">HOME <span class="sr-only">(current)</span></a></li>
            <li class="nav22 animated bounceInDown"><a href="news.php">NEWS</a></li>
            <li class="nav33 animated bounceInDown active "><a href="about.php">ABOUT</a></li>
            <li class="nav55 animated bounceInDown"><a href="contact.php">CONTACT</a></li>
          </ul>

          <!-- Media Sosial -->
          <ul class="navkanan">
            <li class="twitter2 animated bounceInDown"><a href="login.php"><!-- <i class="fa fa-twitter"></i> --><!--LOGIN BUTTON--><input type="submit" name="submit" value="Login" class="button1"><!--END LOGIN BUTTON--></a></li>
            <!-- <li class="facebook animated bounceInDown"><a href="#"><i class="fa fa-facebook"></i></a></li> -->
          </ul>
          <!-- /Media Sosial -->

        </div><!-- /.navbar-collapse -->
      </div><!-- /.container -->
    </nav>




    <!-- MAIN CONTENT -->
    <div class="main-content container">
      <div class="row">
        
      <!-- ABOUT ME -->
        <div class="about-me">
          <h3>ABOUT US</h3>
          <h4>AMERICAN CORNER <small>UNIVERSITAS TANJUNGPURA</small></h4>
          <p>Nunc ipsum metus, pretium ut eros feugiat, iaculis posuere arcu. Nulla facilisi. Praesent fermentum elit id odio dapibus laoreet nec condimentum arcu. In rhoncus elementum tellus, sed pretium dolor posuere vel. Ut at massa tincidunt diam facilisis commodo. Duis tempus euismod faucibus. Vestibulum condimentum ex ut auctor eleifend. Aliquam euismod orci vitae bibendum tristique. Duis vehicula, sem vitae semper facilisis, turpis urna dignissim nulla, imperdiet convallis leo purus eu mi. Nunc eu elit pretium, blandit leo nec .</p>
        </div>
      <!-- /ABOUT ME -->
      <hr>


     

      </div>
    </div>
    <!-- /MAIN CONTENT -->



    <!-- FOOTER -->
    <footer>
      <div class="container"> <!-- Row -->
        <div class="pull-left"> AMCOR.COM </div>
        <div class="pull-right"> Copyright 2015 AmCor. Designed by <a href="#">Arif Setiawan, DIan Aulia Sari & Ika Pebriani </a></div>
      </div> <!-- /Container -->
    </footer>
    <!-- /FOOTER -->
    


    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="js/bootstrap.min.js"></script>
  </body>
</html>