<?php



require("koneksi.php");


$id  = $_GET['id'];

$query="select * from admin where username='$id'";
$query1="select * from guru where username='$id'";
$query2="select * from siswa where username='$id'";
$query3="DELETE FROM admin WHERE username='$id'";
$query4="DELETE FROM guru WHERE username='$id'";
$query5="DELETE FROM siswa WHERE username='$id'";
$query6="DELETE FROM daftarnilai_ic1 WHERE username='$id'";
$query7="DELETE FROM daftarnilai_ic2 WHERE username='$id'";
$query8="DELETE FROM daftarnilai_ic3 WHERE username='$id'";

$hasil = mysqli_query($conn, $query) or die("Error");
$hasil1 = mysqli_query($conn, $query1) or die("Error1");
$hasil2 = mysqli_query($conn, $query2) or die("Error2");

	// data
$data = mysqli_fetch_array($hasil);
$data1 = mysqli_fetch_array($hasil1);
$data2 = mysqli_fetch_array($hasil2);

if(isset($_GET['delete'])){
			
	if ($id === $data['username']) {
		mysqli_query($conn, $query3) or die("Error");
		header("Location: admin_info2.php");
	}
	if ($id === $data1['username']) {
		mysqli_query($conn, $query4) or die("Error");
		header("Location: admin_teacher2.php");
	}
	if ($id === $data2['username']) {
		mysqli_query($conn, $query5) or die("Error");
		mysqli_query($conn, $query6) or die("Error6");
		mysqli_query($conn, $query7) or die("Error7");
		mysqli_query($conn, $query8) or die("Error8");
		header("Location: admin_student2.php");
	}		
}
		