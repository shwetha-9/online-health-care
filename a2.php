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
<h1><b>What Causes Acne?</b></h1>
<p>Your skin has tiny holes called pores which can become blocked by oil, bacteria, dead skin cells, and dirt. When this occurs, you may develop a pimple or “zit.” If your skin is repeatedly affected by this condition, you may have acne.</p>
<p>Acne occurs when the pores on your skin become blocked with oil, dead skin, or bacteria.<br>
Each pore on your skin is the opening to a follicle. The follicle is made up of a hair and a sebaceous (oil) gland. The oil gland releases sebum (oil), which travels up the hair, out of the pore, and onto your skin. The sebum keeps your skin lubricated and soft.<br>Acne can be caused by one or more problems in this lubrication process. It can occur when:</p>
<ul>
	<li>too much oil is produced by your follicles</li>
	<li>dead skin cells accumulate in your pores</li>
	<li>bacteria build up in your pores</li>
</ul>
<p>All of these problems contribute to the development of pimples. A zit appears when bacteria grows in a clogged pore and the oil is unable to escape.</p>
<h1>Prevention</h1>
<ul>
	<li>washing your face twice a day with an oil-free cleanser</li>
	<li>using an over-the-counter acne cream to remove excess oil</li>
	<li>avoiding makeup that contains oil</li>
	<li>removing makeup and cleaning your skin thoroughly before bed</li>
	<li>showering after exercising</li>
	<li>avoiding tight-fitting clothing</li>
	<li>eating a healthy diet with minimal refined sugars</li>
	<li>reducing stress</li>
</ul>
<h1>Home remedies</h1>
<ul>
	<li>cleaning your skin daily with a mild soap to remove excess oil and dirt</li>
	<li>shampooing your hair regularly and keeping it out of your face</li>
	<li>using makeup that’s water-based or labeled as “noncomedogenic” (not pore-clogging)</li>
	<li>not squeezing or picking pimples, which spreads bacteria and excess oil</li>
	<li>not wearing hats or tight headbands</li>
	<li>not touching your face</li>
</ul>