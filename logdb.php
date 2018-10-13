<?php

session_start();

$email = $_POST['email'];
$pass = $_POST['password'];
$host = "localhost";
$dbusername = "root";
$dbpassword = "";
$dbname = "user";
$_SESSION['email']=$email;
date_default_timezone_set("Asia/Kolkata");
$dates=date('m/d/Y h:i:s a', time());
//create connection

$conn = mysqli_connect($host,$dbusername,$dbpassword,$dbname);
if(mysqli_connect_error()) {
die('Connect Error ('.mysqli_connect_errno().')'.mysqli_connect_error());
}
else {
 $q = "select * from  pop where email='$email' && pass='$pass'";
 $w = "update pop set logintime='$dates' where email='$email'";
 if($conn->query($q)) {
 	if ($conn->query($w)) {
		header('location:beforehome.php');	
 	}
 }
 else {
	echo "Error: Invalid User......."; 
 }
 $conn->close();
}
?>
