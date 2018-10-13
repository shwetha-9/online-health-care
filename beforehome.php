<?php

session_start();
if(isset($_SESSION['email'] )){
	//$_POST['pass']=$_SESSION['pass'];
	echo '<h1><a href="home.php" style="color:DodgerBlue;margin:30px; margin-left:50px;" >Welcome To Our HealthCare</a></h1>
		<link href="logo.png" rel="icon" type="image/ico"><title>HealthCare</title>';
}
else {
	header("location:log.php");
}
?>
