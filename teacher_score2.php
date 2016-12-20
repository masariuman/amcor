<?php 
require("koneksi.php");

  if(!isset($_COOKIE['amcor'])){
    header("Location: index.php");
  }

  $user = $_COOKIE['amcor'];

  $query="select * from siswa where username='$user'";
  $query1="select * from guru where username='$user'";
  $query2="select * from admin where username='$user'";
  $query7="select * from daftarnilai_ic1";
  $query8="select * from daftarnilai_ic2";
  $query9="select * from daftarnilai_ic3";

  $hasil = mysqli_query($conn, $query) or die("Error");
  $hasil1 = mysqli_query($conn, $query1) or die("Error");
  $hasil2 = mysqli_query($conn, $query2) or die("Error");
  $hasil7 = mysqli_query($conn, $query7) or die("Error");
  $hasil8 = mysqli_query($conn, $query7) or die("Error");
  $hasil9 = mysqli_query($conn, $query7) or die("Error");
  $hasil10 = mysqli_query($conn, $query7) or die("Error");
  $hasil11 = mysqli_query($conn, $query8) or die("Error");
  $hasil12 = mysqli_query($conn, $query8) or die("Error");
  $hasil13 = mysqli_query($conn, $query9) or die("Error");
  $hasil14 = mysqli_query($conn, $query9) or die("Error");
  $hasil15 = mysqli_query($conn, $query7) or die("Error");


  $data = mysqli_fetch_array($hasil);
  $data1 = mysqli_fetch_array($hasil1);
  $data2 = mysqli_fetch_array($hasil2);

  if ($user === $data2['username']) {
    header("location: indexadmin.php");
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
            <li class="nav11 animated bounceInDown"><a href="indexguru.php">HOME <span class="sr-only">(current)</span></a></li>
            <li class="nav22 animated bounceInDown"><a href="newsguru.php">NEWS</a></li>
            <li class="nav44 animated bounceInDown active "><a href="teacher.php">TEACHER</a></li>
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
          <h3 class="studenttab">| <small><a href="teacher.php" class="at">Student's Info</a></small> | <small><a href="teacher_score.php" class="st">Student's Score</a></small>  | <small><a href="teacher_admin.php" class="at">Admin's Info</a></small> |</h3>
          
          




<h4>ADDING SCORE</h4>
<hr>

<?php
  require("koneksi.php");
  if (isset ($_POST['kirim'])){
    $usernamee    = $_POST['usernamee'];
    $pre_test     = $_POST['pre_test'];
    $post_test    = $_POST['post_test'];
    $pre_test1    = $_POST['pre_test1'];
    $post_test1   = $_POST['post_test1'];
    $pre_test2    = $_POST['pre_test2'];
    $post_test2   = $_POST['post_test2'];

      $querykirim="insert daftarnilai_ic1 values ('$usernamee','$pre_test','$post_test')";
      $querykirim1="insert daftarnilai_ic2 values ('$usernamee','$pre_test','$post_test')";
      $querykirim2="insert daftarnilai_ic3 values ('$usernamee','$pre_test','$post_test')";
      mysqli_query($conn, $querykirim) or die(header("LOCATION: teacher_score_error.php"));
      mysqli_query($conn, $querykirim1) or die("Error2");
      mysqli_query($conn, $querykirim2) or die("Error3");
      echo "<b style='color:green;'>DATA BERHASIL DISIMPAN</b><br><br>";
    }



?>
Masukkan symbol negatif (-) apabila belum ada nilainya. <br><br>

<form action="teacher_score.php" method="post">
<table border="0">
<tr>
  <TD style="padding: 6px 10px; width:340px;" valign='center' align='center' bgcolor="#d559a8">
    Kelas IC I
  </TD>
  <TD style="padding: 6px 10px; width:340px;" valign='center' align='center' bgcolor="#d559a8">
    Kelas IC II
  </TD>
  <TD style="padding: 6px 10px; width:340px;" valign='center' align='center' bgcolor="#d559a8">
    Kelas IC III
  </TD>
</tr>
<tr>
<td>


  <table border='0' style='border-collapse:collapse;' cellpadding='5' cellspacing='0'>

    <tr>
      <td style="padding: 6px 10px;" valign='center'>NOMOR INDUK SISWA : </td><td><input type="text" name="usernamee" style='width:150px;'></td>
    </tr>
    <tr>
      <td style="padding: 6px 10px;" valign='center'>PRE-TEST : </td><td><input type="text" name="pre_test" style='width:150px;'></td>
    </tr>
    <tr>
      <td style="padding: 6px 10px;" valign='center'>POST-TEST : </td><td><input type="text" name="post_test" style='width:150px;'></td>
    </tr>
  </table>
  

</td>

<td>

  <table border='0' style='border-collapse:collapse;' cellpadding='5' cellspacing='0'>

   
    <tr>
      <td style="padding: 6px 10px;" valign='center'>PRE-TEST : </td><td><input type="text" name="pre_test1" style='width:150px;'></td>
    </tr>
    <tr>
      <td style="padding: 6px 10px;" valign='center'>POST-TEST : </td><td><input type="text" name="post_test1" style='width:150px;'></td>
    </tr>
  </table>
  
  
</td>

<td>

  <table border='0' style='border-collapse:collapse;' cellpadding='5' cellspacing='0'>

    
    <tr>
      <td style="padding: 6px 10px;" valign='center'>PRE-TEST : </td><td><input type="text" name="pre_test2" style='width:150px;'></td>
    </tr>
    <tr>
      <td style="padding: 6px 10px;" valign='center'>POST-TEST : </td><td><input type="text" name="post_test2" style='width:150px;'></td>
    </tr>
  </table>
  
  
</td>

</tr>
<tr>
  <td colspan="3" align="center">
    <input type="submit" value='KIRIM' name='kirim' style="padding: 6px 10px;" valign='center'><input type="reset" name="reset" value="RESET" style="padding: 6px 10px;" valign='center'>
    </td>
    </tr>

  </td>
</tr>
</table>
</form>

<br><br><br>



<HR><br><br>



<h4>STUDENT'S SCORE</h4>
<hr>
<b style='color:red;'>DATA BERHASIL DIHAPUS</b><br><br>

<table border="4px" BORDERCOLOR="#852222">
            <tr>
              <td style="padding: 6px 10px;" valign='center' align='center' bgcolor="#d559a8" rowspan="3">
                <font color="white">NO</font>
              </td>
              <td style="padding: 6px 10px;" valign='center' align='center' bgcolor="#d559a8" rowspan="3">
                <font color="white">NOMOR INDUK SISWA</font>
              </td>
              <td style="padding: 6px 10px;" valign='center' align='center' bgcolor="#d559a8" colspan="2">
                <font color="white">KELAS IC I</font>
              </td>
              <td style="padding: 6px 10px;" valign='center' align='center' bgcolor="#d559a8" colspan="2">
                <font color="white">KELAS IC II</font>
              </td>
              <td style="padding: 6px 10px;" valign='center' align='center' bgcolor="#d559a8" colspan="2">
                <font color="white">KELAS IC III</font>
              </td>
              <td style="padding: 6px 10px;" valign='center' align='center' bgcolor="#d559a8" rowspan="3">
                <font color="white">PENGATURAN</font>
              </td>
            </tr>
            <tr>
            <tr>
              <td style="padding: 6px 10px;" valign='center' align='center' bgcolor="#d559a8">
                <font color="white">PRE-TEST</font>
              </td>
              <td style="padding: 6px 10px;" valign='center' align='center' bgcolor="#d559a8">
                <font color="white">POST-TEST</font>
              </td>
              <td style="padding: 6px 10px;" valign='center' align='center' bgcolor="#d559a8">
                <font color="white">PRE-TEST</font>
              </td>
              <td style="padding: 6px 10px;" valign='center' align='center' bgcolor="#d559a8">
                <font color="white">POST-TEST</font>
              </td>
              <td style="padding: 6px 10px;" valign='center' align='center' bgcolor="#d559a8">
                <font color="white">PRE-TEST</font>
              </td>
              <td style="padding: 6px 10px;" valign='center' align='center' bgcolor="#d559a8">
                <font color="white">POST-TEST</font>
              </td>
            </tr>
            <tr>
              <td>
                <table>
                      <?php
                        $x=1;
                          while($data7 = mysqli_fetch_array($hasil7)){
                            echo"
                              <tr>
                                <td align='center' style='padding: 6px 15px;' valign='center'>$x</td>";
                              echo"</tr>";
                            $x++;
                          } ?>
                </table>
              </td>
              <td>
                <table>
                      <?php
                        $x=1;
                          while($data8 = mysqli_fetch_array($hasil8)){
                            echo"
                              <tr>
                                <td align='center' style='padding: 6px 45px;' valign='center'>$data8[0]</td>";
                              echo"</tr>";
                            $x++;
                          } ?>
                </table>
              </td>
              <td>
                <table>
                      <?php
                        $x=1;
                          while($data9 = mysqli_fetch_array($hasil9)){
                            echo"
                              <tr>
                                <td align='center' style='padding: 6px 45px;' valign='center'>$data9[1]</td>";
                              echo"</tr>";
                            $x++;
                          } ?>
                </table>
              </td> 
              <td>
                <table>
                      <?php
                        $x=1;
                          while($data10 = mysqli_fetch_array($hasil10)){
                            echo"
                              <tr>
                                <td align='center' style='padding: 6px 45px;' valign='center'>$data10[2]</td>";
                              echo"</tr>";
                            $x++;
                          } ?>
                </table>
              </td> 
              <td>
                <table>
                      <?php
                        $x=1;
                          while($data11 = mysqli_fetch_array($hasil11)){
                            echo"
                              <tr>
                                <td align='center' style='padding: 6px 45px;' valign='center'>$data11[1]</td>";
                              echo"</tr>";
                            $x++;
                          } ?>
                </table>
              </td>
              <td>
                <table>
                      <?php
                        $x=1;
                          while($data12 = mysqli_fetch_array($hasil12)){
                            echo"
                              <tr>
                                <td align='center' style='padding: 6px 45px;' valign='center'>$data12[2]</td>";
                              echo"</tr>";
                            $x++;
                          } ?>
                </table>
              </td>
              <td>
                <table>
                      <?php
                        $x=1;
                          while($data13 = mysqli_fetch_array($hasil13)){
                            echo"
                              <tr>
                                <td align='center' style='padding: 6px 45px;' valign='center'>$data13[1]</td>";
                              echo"</tr>";
                            $x++;
                          } ?>
                </table>
              </td>
              <td>
                <table>
                      <?php
                        $x=1;
                          while($data14 = mysqli_fetch_array($hasil14)){
                            echo"
                              <tr>
                                <td align='center' style='padding: 6px 45px;' valign='center'>$data14[2]</td>";
                              echo"</tr>";
                            $x++;
                          } ?>
                </table>
              </td> 
              <td>
                <table>
                      <?php
                        $x=1;
                          while($data15 = mysqli_fetch_array($hasil15)){
                            echo"
                              <tr>
                                <td align='center' style='padding: 6px 15px;' valign='center'>
                                <a href='teacher_score_edit.php?&edit&id=$data15[0]'>Edit</a>&nbsp;|
                                <a href='proses_delete_teacher.php?&delete&id=$data15[0]'>Delete</a></td>";
                              echo"</tr>";
                            $x++;
                          } ?>
                </table>
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