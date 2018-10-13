<?php

session_start();

if(!isset($_SESSION['email'])){
	//$_POST['pass']=$_SESSION['pass'];
	header("location:log.php");
}
?>
<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<title> HealthCare </title>
<link href="logo.png" rel="icon" type="image/ico">
<style>
body{
	margin:0;
	padding:0;
	background-image:url(https://az616578.vo.msecnd.net/files/2016/05/09/635984128268237397-146475885_healthcare.jpg);
	background-repeat: no-repeat;
	background-position: left 140px;
	background-size: 60%;
}
nav{
	width: 100%;
	background:darkblue;
	overflow:auto;
}
ul{
	padding: 0;
	margin: 0 0 0 250px;
	list-style: none;
}
li{
	float: left;
}

   
.logo img{
	position: absolute;
}

nav a{
	display: inline-block;
	margin-left: 40px;
	margin-right:60px;
	padding: 30px 15px;
	text-decoration: none;
	font-family: arial;
	color: white;
}

              
  
nav a:hover{
   background-color:lightcoral;
	transition: 0.0s;
	
}
.dropdown_list{
       background-color:slateblue;
       position:absolute;
       display:none;
       width: 170px;
}    
.dropdown_list a{ 
       text-align:left;
       float: left;
       }
       .dropdown:hover .dropdown_list{
       display:block;
       }
       .heading{
       color:navy;
		 margin-left: 930px;
       text-shadow: 2px 2px 4px #000000 }
		 .main{
		 color: darkblue;
		 margin-left: 830px;
		 margin-right: 35px;	
		 font-size: 20px;
		 line-height: 35px;
		 text-align: justify;
		 }
</style>
</head>
<body>
<div class="logo"><a href="#" ><img src="logo.png" width="240px" height="77px"></a></div>
<nav>
	<ul>
		<li><a href="home.php"> Home</a></li>
		<li><a href="vision.php"> Our Vision</a></li>	
		<li ><a href="symptoms.php">Symptoms</a></li>	
		<li class="dropdown"><a href="#">Care For You</a>
			  <div class="dropdown_list">           
           <a href="tips.php">Tips</a>
           <a href="dis.php">Disease</a>
           <a href="contact.php">contact</a>
   </li>	
		<li><a href="logout.php"> Logout</a></li>
	</ul>
</nav>
<marquee behavior="scroll" bgcolor="lightblue" height="50px"><h2 style="color:DodgerBlue;">Welcome To HealthCare</h2></marquee>
<h1 class="heading"> ABOUT US</h1>
<dl class="main">
<li>We are an online healthcare center focused on improving how consumers shop for and enroll in health insurance coverage.</li>
<li>Our goal is to be the leading destination for healthcare consumers by providing expertise, data and options to consumers making considered purchase decisions</li>
<li>We seek to develop a relationship with users based on trust and the value we deliver to them through advice, analysis, recommendations and relevant buying options.</li>
</dl>  
</body>
</html> 
