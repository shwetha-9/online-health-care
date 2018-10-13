<?php
session_start();

$user = filter_input(INPUT_POST,'user');
$email = filter_input(INPUT_POST,'email');
$pass = filter_input(INPUT_POST,'pass');
$conpass = filter_input(INPUT_POST,'conpass');
$mobile = filter_input(INPUT_POST,'mobile');
$_SESSION['email'] = $email;
$_SESSION['pass'] = $pass;
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
 $sql = "INSERT INTO pop(user,pass,conpass,mobile,email)
 values ('$user','$pass','$conpass','$mobile','$email')";
 if($conn->query($sql)) {
	header('location:beforehome.php');
 }
 else {
	echo "Error: Email-Id Already Exists....." ;
 }
 $conn->close();
}
?>