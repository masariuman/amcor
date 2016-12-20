<?php 
require("koneksi.php");

  if(!isset($_COOKIE['amcor'])){
    header("Location: index.php");
  }

  $user = $_COOKIE['amcor'];

  $query="select * from siswa where username='$user'";
  $query1="select * from guru where username='$user'";
  $query2="select * from admin where username='$user'";
  $query3="select * from daftarnilai_ic1 where username='$user'";
  $query4="select * from daftarnilai_ic2 where username='$user'";
  $query5="select * from daftarnilai_ic3 where username='$user'";

  $hasil = mysqli_query($conn, $query) or die("Error");
  $hasil1 = mysqli_query($conn, $query1) or die("Error");
  $hasil2 = mysqli_query($conn, $query2) or die("Error");
  $hasil3 = mysqli_query($conn, $query3) or die("Error");
  $hasil4 = mysqli_query($conn, $query4) or die("Error");
  $hasil5 = mysqli_query($conn, $query5) or die("Error");

  $data = mysqli_fetch_array($hasil);
  $data1 = mysqli_fetch_array($hasil1);
  $data2 = mysqli_fetch_array($hasil2);
  $data3 = mysqli_fetch_array($hasil3);
  $data4 = mysqli_fetch_array($hasil4);
  $data5 = mysqli_fetch_array($hasil5);

  if ($user === $data1['username']) {
    header("location: indexguru.php");
  }
  if ($user === $data2['username']) {
    header("Location: indexadmin.php");
  }

  if ($user === $data3['username']) {
      $pretest1 = $data3[1]; 
      $posttest1 = $data3[2];
  }

  if ($user === $data4['username']) {
      $pretest2 = $data4[1]; 
      $posttest2 = $data4[2];
  }

  if ($user === $data5['username']) {
      $pretest3 = $data5[1]; 
      $posttest3 = $data5[2];
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
            <li class="nav11 animated bounceInDown"><a href="indexsiswa.php">HOME <span class="sr-only">(current)</span></a></li>
            <li class="nav22 animated bounceInDown"><a href="newssiswa.php">NEWS</a></li>
            <li class="nav44 animated bounceInDown active "><a href="students.php">STUDENT</a></li>
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
          <h3 class="studenttab">| <small><a href="students.php" class="at">BIODATA</a></small> | <small><a href="score.php" class="st">SCORE</a></small> | <small><a href="teacher_info.php" class="at">TEACHER'S INFO</a></small> |</h3>

          <h4>SCORE</h4><hr>

          <h3>IC 1</h3>

          <table border="3px" BORDERCOLOR="#852222">
            <tr>
              <td style="padding: 6px 10px; width: 100px; text-align: center;" bgcolor="#d559a8">
                <font color="white">PRETEST</font>
              </td>
              <td style="padding: 6px 10px; width: 100px; text-align: center;">
                <?php echo"$pretest1"; ?>
              </td>
            </tr>
            <tr>
              <td style="padding: 6px 10px; width: 100px; text-align: center;" bgcolor="#d559a8">
                <font color="white">POSTTEST</font>
              </td>
              <td style="padding: 6px 10px; width: 100px; text-align: center;">
                <?php echo"$posttest1"; ?>
              </td>
            </tr>
          </table><br><br><br><br>


          <h3>IC 2</h3>

          <table border="3px" BORDERCOLOR="#852222">
            <tr>
              <td style="padding: 6px 10px; width: 100px; text-align: center;" bgcolor="#d559a8">
                <font color="white">PRETEST</font>
              </td>
              <td style="padding: 6px 10px; width: 100px; text-align: center;">
                <?php echo"$pretest2"; ?>
              </td>
            </tr>
            <tr>
              <td style="padding: 6px 10px; width: 100px; text-align: center;" bgcolor="#d559a8">
                <font color="white">POSTTEST</font>
              </td>
              <td style="padding: 6px 10px; width: 100px; text-align: center;">
                <?php echo"$posttest2"; ?>
              </td>
            </tr>
          </table><br><br><br><br>


          <h3>IC 3</h3>

          <table border="3px" BORDERCOLOR="#852222">
            <tr>
              <td style="padding: 6px 10px; width: 100px; text-align: center;" bgcolor="#d559a8">
                <font color="white">PRETEST</font>
              </td>
              <td style="padding: 6px 10px; width: 100px; text-align: center;">
                <?php echo"$pretest3"; ?>
              </td>
            </tr>
            <tr>
              <td style="padding: 6px 10px; width: 100px; text-align: center;" bgcolor="#d559a8">
                <font color="white">POSTTEST</font>
              </td>
              <td style="padding: 6px 10px; width: 100px; text-align: center;">
                <?php echo"$posttest3"; ?>
              </td>
            </tr>
          </table>



          
          

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