<?php 
require("koneksi.php");

  if(!isset($_COOKIE['amcor'])){
    header("Location: index.php");
  }

  $user = $_COOKIE['amcor'];

  $query="select * from siswa where username='$user'";
  $query1="select * from guru where username='$user'";
  $query2="select * from admin where username='$user'";
  $query7="select * from siswa";

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
          <h3 class="studenttab">| <small><a href="admin.php" class="at">Admin's Info</a></small> | <small><a href="admin_teacher.php" class="at">Teacher's Info</a></small> | <small><a href="admin_student.php" class="st">Student's Info</a></small> |</h3>
          
          








<h4>ADDING DATA</h4>
<hr>

<?php
  require("koneksi.php");
  if (isset ($_POST['kirim'])){
    $usernamee        = $_POST['usernamee'];
    $password         = $_POST['password'];
    $nama             = $_POST['nama'];
    $alamat_tetap     = $_POST['alamat_tetap'];
    $alamat_sekarang  = $_POST['alamat_sekarang'];
    $tempat_lahir     = $_POST['tempat_lahir'];
    $tanggal_lahir    = $_POST['tanggal_lahir'];
    $jenis_kelamin    = $_POST['jenis_kelamin'];
    $agama            = $_POST['agama'];
    $nomor_hp         = $_POST['nomor_hp'];
    $emaill           = $_POST['emaill'];
    if (empty($usernamee) or empty ($password)){
      echo "<b style='color:red;'>USERNAME ATAU PASSWORD TIDAK BOLEH KOSONG</b><br><br>";
    }
    else {

      $querykirim="insert siswa values ('$usernamee','$password','$nama','$alamat_tetap','$alamat_sekarang','$tempat_lahir','$tanggal_lahir','$jenis_kelamin','$agama','$nomor_hp','$emaill')";
      $hasilkirim = mysqli_query($conn, $querykirim) or die(header("Location: admin_student_error.php"));
      echo "<b style='color:green;'>DATA BERHASIL DISIMPAN</b><br><br>";
    }
  }
?>



<form action="admin_student.php" method="post">
  <table border='0' style='border-collapse:collapse;' cellpadding='5' cellspacing='0'>

    <tr>
      <td style="padding: 6px 10px;" valign='center'>USERNAME : </td><td><input type="text" name="usernamee" style='width:150px;'></td>
    </tr>
    <tr>
      <td style="padding: 6px 10px;" valign='center'>PASSWORD : </td><td><input type="text" name="password" style='width:150px;'></td>
    </tr>
    <tr>
      <td style="padding: 6px 10px;" valign='center'>NAMA : </td><td><input type="text" name="nama" style='width:150px;'></td>
    </tr>
    <tr>
      <td style="padding: 6px 10px;" valign='center'>ALAMAT TETAP : </td><td><input type="text" name="alamat_tetap" style='width:150px;'></td>
    </tr>
    <tr>
      <td style="padding: 6px 10px;" valign='center'>ALAMAT SEKARANG : </td><td><input type="text" name="alamat_sekarang" style='width:150px;'></td>
    </tr>
    <tr>
      <td style="padding: 6px 10px;" valign='center'>TEMPAT LAHIR : </td><td><input type="text" name="tempat_lahir" style='width:150px;'></td>
    </tr>
    <tr>
      <td style="padding: 6px 10px;" valign='center'>TANGGAL LAHIR : </td><td><input type="text" name="tanggal_lahir" style='width:150px;'></td>
    </tr>
    <tr>
      <td style="padding: 6px 10px;" valign='center'>JENIS KELAMIN : </td><td><select id="soflow"  name="jenis_kelamin">
            <option value="">-- Klik Untuk Memilih --</option>
            <option value="L">Male</option>
            <option value="P">Female</option>
            <option value="O">Other</option>
          </select></td>
    </tr>
    <tr>
      <td style="padding: 6px 10px;" valign='center'>AGAMA : </td><td><select id="soflow"  name="agama">
            <option value="">-- Klik Untuk Memilih --</option>
            <option value="Islam">ISLAM</option>
            <option value="Protestan">PROTESTAN</option>
            <option value="Katolik">KATOLIK</option>
            <option value="Hindu">HINDU</option>
            <option value="Budha">BUDHA</option>
          </select></td>
    </tr>
    <tr>
      <td style="padding: 6px 10px;" valign='center'>NOMOR HP : </td><td><input type="text" name="nomor_hp" style='width:150px;'></td>
    </tr>
    <tr>
      <td style="padding: 6px 10px;" valign='center'>EMAIL : </td><td><input type="text" name="emaill" style='width:150px;'></td>
    </tr>
  </table>
  <input type="submit" value='KIRIM' name='kirim'><input type="reset" name="reset" value="RESET">
</form>

<br><br><br>



<HR><br><br>
<h4>STUDENTS INFO</h4>
<hr>

<b style='color:red;'>DATA BERHASIL DIHAPUS</b><br><br>

<table border="4px" BORDERCOLOR="#852222">
            <tr>
              <td style="padding: 6px 10px;" valign='center' align='center' bgcolor="#d559a8">
                <font color="white">NO</font>
              </td>
              <td style="padding: 6px 10px;" valign='center' align='center' bgcolor="#d559a8">
                <font color="white">USERNAME</font>
              </td>
              <td style="padding: 6px 10px;" valign='center' align='center' bgcolor="#d559a8">
                <font color="white">PASSWORD</font>
              </td>
              <td style="padding: 6px 10px;" valign='center' align='center' bgcolor="#d559a8">
                <font color="white">NAMA</font>
              </td>
              <td style="padding: 6px 10px;" valign='center' align='center' bgcolor="#d559a8">
                <font color="white">ALAMAT TETAP</font>
              </td>
              <td style="padding: 6px 10px;" valign='center' align='center' bgcolor="#d559a8">
                <font color="white">ALAMAT SEKARANG</font>
              </td>
              <td style="padding: 6px 10px;" valign='center' align='center' bgcolor="#d559a8">
                <font color="white">TEMPAT LAHIR</font>
              </td>
              <td style="padding: 6px 10px;" valign='center' align='center' bgcolor="#d559a8">
                <font color="white">TANGGAL LAHIR</font>
              </td>
              <td style="padding: 6px 10px;" valign='center' align='center' bgcolor="#d559a8">
                <font color="white">JENIS KELAMIN</font>
              </td>
              <td style="padding: 6px 10px;" valign='center' align='center' bgcolor="#d559a8">
                <font color="white">AGAMA</font>
              </td>
              <td style="padding: 6px 10px;" valign='center' align='center' bgcolor="#d559a8">
                <font color="white">NOMOR HP</font>
              </td>
              <td style="padding: 6px 10px;" valign='center' align='center' bgcolor="#d559a8">
                <font color="white">EMAILT</font>
              </td>
              <td style="padding: 6px 10px;" valign='center' align='center' bgcolor="#d559a8">
                <font color="white">SETTING</font>
              </td>
            </tr>
            <tr>

            <?php
            $x=1;
            while($data7 = mysqli_fetch_array($hasil7)){
              echo"
                <tr>
                  <td align='center' style='padding: 6px 10px;' valign='center'>$x</td>
                  <td align='center' style='padding: 6px 10px;' valign='center'>$data7[0]</td>
                  <td align='center' style='padding: 6px 10px;' valign='center'>$data7[1]</td>
                  <td align='center' style='padding: 6px 10px;' valign='center'>$data7[2]</td>
                  <td align='center' style='padding: 6px 10px;' valign='center'>$data7[3]</td>
                  <td align='center' style='padding: 6px 10px;' valign='center'>$data7[4]</td>
                  <td align='center' style='padding: 6px 10px;' valign='center'>$data7[5]</td>
                  <td align='center' style='padding: 6px 10px;' valign='center'>$data7[6]</td>
                  <td align='center' style='padding: 6px 10px;' valign='center'>$data7[7]</td>
                  <td align='center' style='padding: 6px 10px;' valign='center'>$data7[8]</td>
                  <td align='center' style='padding: 6px 10px;' valign='center'>$data7[9]</td>
                  <td align='center' style='padding: 6px 10px;' valign='center'>$data7[10]</td>
                  <td align='center' valign='center'>
            <a href='admin_student_edit.php?&edit&id=$data7[0]'>Edit</a>&nbsp;&nbsp;&nbsp;
            <a href='proses_delete_admin.php?&delete&id=$data7[0]''>Delete</a>
        </td>";
                echo"</tr>";
              $x++;
            } ?>

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