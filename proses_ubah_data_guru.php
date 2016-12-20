<?php
  require("koneksi.php");
    $usernamee    = $_POST['username'];
    $password     = $_POST['password'];
    $nama     = $_POST['nama'];
    $alamat     = $_POST['alamat'];
    $jenis_kelamin  = $_POST['jenis_kelamin'];
    $nomor_hp   = $_POST['nomor_hp'];
    $emaill     = $_POST['emaill'];
    $query = "UPDATE guru SET username='$usernamee', password='$password', nama='$nama', alamat='$alamat', jenis_kelamin='$jenis_kelamin', nomor_hp='$nomor_hp', email='$emaill' WHERE username='$usernamee'";
    mysqli_query($conn, $query) or die("Error");
    header("Location: admin_teacher3.php");

?>