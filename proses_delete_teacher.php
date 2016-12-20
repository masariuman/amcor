<?php



require("koneksi.php");


$id  = $_GET['id'];


$query6="DELETE FROM daftarnilai_ic1 WHERE username='$id'";
$query7="DELETE FROM daftarnilai_ic2 WHERE username='$id'";
$query8="DELETE FROM daftarnilai_ic3 WHERE username='$id'";

	
		mysqli_query($conn, $query6) or die("Error6");
		mysqli_query($conn, $query7) or die("Error7");
		mysqli_query($conn, $query8) or die("Error8");
		header("Location: teacher_score2.php");