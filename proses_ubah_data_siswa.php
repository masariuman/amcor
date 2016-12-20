<?php
  require("koneksi.php");
    $usernamee        = $_POST['username'];
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
    $query = "UPDATE siswa SET username='$usernamee', password='$password', nama='$nama', alamat_tetap='$alamat_tetap', alamat_sekarang='$alamat_sekarang', tempat_lahir='$tempat_lahir', tanggal_lahir='$tanggal_lahir', jenis_kelamin='$jenis_kelamin', agama='a$gama', nomor_hp='$nomor_hp', email='$emaill' WHERE username='$usernamee'";
    mysqli_query($conn, $query) or die("Error");
    header("Location: admin_student3.php");

?>


