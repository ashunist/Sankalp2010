<?php
session_start();
session_unregister($_SESSION['username']);
session_destroy();
header("location:login.php");
?>

