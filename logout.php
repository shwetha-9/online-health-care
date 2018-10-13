<?php
session_start();
$email = $_SESSION['email'];
$host = "localhost";
$dbusername = "root";
$dbpassword = "";
$dbname = "user";
date_default_timezone_set("Asia/Kolkata");
$dateq=date('m/d/Y h:i:s a', time());

$conn = mysqli_connect($host,$dbusername,$dbpassword,$dbname);
if(mysqli_connect_error()) {
die('Connect Error ('.mysqli_connect_errno().')'.mysqli_connect_error());
}
$w = "update pop set logouttime='$dateq' where email='$email'";
if ($conn->query($w)) {	
	session_destroy();
	header("location:log.php");}
?>