<?php
session_start();
if(!isset($_SESSION['email'])){
	header("location:log.php");
}

$user = $_POST['user'];
$email = $_POST['email'];
$mobile = $_POST['mobile'];
$message = $_POST['message'];
$host = "localhost";
$dbusername = "root";
$dbpassword = "";
$dbname = "user";

//create connection

$conn = mysqli_connect($host,$dbusername,$dbpassword,$dbname);
if(mysqli_connect_error()) {
die('Connect Error ('.mysqli_connect_errno().')'.mysqli_connect_error());
}
else {
 $sql = "INSERT INTO feed(name,email,mobile,message)
 values ('$user','$email','$mobile','$message')";
 echo $sql;
 if($conn->query($sql)) {
 	header("location:home.php");
 }
 else{
 	echo "database error";
 }
 $conn->close();
}
?>