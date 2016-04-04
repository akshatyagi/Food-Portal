<?php 
session_start();
session_destroy();
header("Location:loginafterlogout.php");

?>

