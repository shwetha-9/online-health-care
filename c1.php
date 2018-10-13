<?php

session_start();
if(!isset($_SESSION['email'])){
	header("location:log.php");
}
?>
<!DOCTYPE html>
<html>
<head>
<link href="logo.png" rel="icon" type="image/ico">
	<link rel="stylesheet" href="style.css"/>
<title>Symptoms</title>
</head>
<body>
<h1><b>What Causes Cataracts?</b></h1>
<p>There are several underlying causes of cataracts. These include:</p>
<ul>
	<li>an overproduction of oxidants, which are oxygen molecules that have been chemically altered due to normal daily life</li>
	<li>smoking</li>
	<li>ultraviolet radiation</li>
	<li>the long-term use of steroids and other medications</li>
	<li>certain diseases, such as diabetes</li>
	<li>trauma</li>
	<li>radiation therapy</li>
</ul>
<h1><b>Prevention</b></h1>
<p>To reduce your risk of developing cataracts:</p>
<ul>
	<li>protect your eyes from UVB rays by wearing sunglasses outside</li>
	<li>have regular eye exams</li>
	<li>stop smoking</li>
	<li>eat fruits and vegetables that contain antioxidants</li>
	<li>maintain a healthy weight</li>
	<li>keep diabetes and other medical conditions in check</li>
</ul>
<h1><b>Home remedies</b></h1>
<ul>
	<li>Improve the lighting in your home with more lighting and brighter lamps.</li>
	<li>Limit your night driving.</li>
	<li>When you go outside in daytime, wear sunglasses or a broad-brimmed hat to reduce glare.</li>
	<li>Avoid sunlamps and tanning booths.</li>
	<li>Get your eyes checked once a year (more often, if you’ve noticed problems).</li>
	<li>Make sure your eyeglasses or contact lenses are the most accurate prescription (further to the tip above!).</li>
	<li>Use a magnifying glass to read.</li>
	<li>Keep diabetes under control with diet, exercise, and medication.</li>
	<li>Quit smoking!</li>
</ul>
</body>
</html>