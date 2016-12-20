<?php
  require("koneksi.php");
    $usernamee    = $_POST['username'];
    $pre_test     = $_POST['pre_test'];
    $post_test    = $_POST['post_test'];
    $pre_test1    = $_POST['pre_test1'];
    $post_test1   = $_POST['post_test1'];
    $pre_test2    = $_POST['pre_test2'];
    $post_test2   = $_POST['post_test2'];
    // echo "$usernamee, $pre_test, $post_test, $pre_test1, $post_test1, $pre_test2, $post_test2";
    $query = "UPDATE daftarnilai_ic1 SET username='$usernamee', pretest='$pre_test', posttest='$post_test'  WHERE username='$usernamee'";
    $query1 = "UPDATE daftarnilai_ic2 SET username='$usernamee', pretest='$pre_test1', posttest='$post_test1'  WHERE username='$usernamee'";
    $query2 = "UPDATE daftarnilai_ic3 SET username='$usernamee', pretest='$pre_test2', posttest='$post_test2'  WHERE username='$usernamee'";
    mysqli_query($conn, $query) or die("Error");
    mysqli_query($conn, $query1) or die("Error1");
    mysqli_query($conn, $query2) or die("Error2");
    header("Location: teacher_score3.php");

?>