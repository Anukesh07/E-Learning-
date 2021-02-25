<?php
session_start();
$_SESSION["user"]="end";
header("Location:LogIn.php");
?>