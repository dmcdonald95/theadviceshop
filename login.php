<?php
error_reporting(E_ALL);
session_start();
$_SESSION['username'] = $_REQUEST['username'];
echo "Redirecting to: ".$_GET['page'].".php";
header("Location: ".$_GET['page'].".php");
exit();
?>
