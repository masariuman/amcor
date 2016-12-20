<?php  

// set the expiration date to one hour ago
setcookie("amcor", "", time() - 3600);
header("Location: login.php");

?>
