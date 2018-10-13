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
<h1><b>What Causes Aggressive Behavior?</b></h1>
<p>Aggression in children can be caused by several factors. These can include:</p>
<ul>
	<li>poor relationship skills</li>
	<li>underlying health conditions</li>
	<li>stress or frustration</li>
</ul>
<p>Your child might imitate aggressive or violent behavior that they see in their daily life. They may receive attention for it from family members, teachers, or peers. You can accidentally encourage it by ignoring or rewarding their aggressive behavior.</p>
<p>Aggressive behavior in teenagers is common. For example, many teens act rudely or get into arguments sometimes. However, your teen might have a problem with aggressive behavior if they regularly:</p>
<ul>
	<li>yell during arguments</li>
	<li>get into fights</li>
	<li>bully others</li>
</ul>
<p>In some cases, they may act aggressively in response to:</p>
<ul>
	<li>stress</li>
	<li>peer pressure</li>
	<li>substance abuse</li>
	<li>unhealthy relationships with family members or others</li>
</ul>
<h1><b>Steps for managing aggressive behaviour</b></h1>
<ul>
	<li>Identify the problem</li>
	<li>Look at the situation</li>
	<li>Look at how the person is feeling when they behave aggressively</li>
	<li>Identify anything the person could be reacting to</li>
	<li>Develop a strategy to manage the behaviour</li>
</ul>
</body>
</html>