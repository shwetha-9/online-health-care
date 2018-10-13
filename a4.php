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
<h1><b>What Causes Anemia?</b></h1>
<p>Dietary iron, vitamin B-12, and folate are essential for red blood cells to mature in the body. Normally, 0.8 to 1 percent of the body’s red blood cells are replaced every day, and the average lifespan for red cells is 100 to 120 days. In general, any process that has a negative effect on this balance between red blood cell production and destruction can cause anemia.<br>Causes of anemia are generally divided into those that decrease red blood cell production and those that increase red blood cell destruction.<br>

Factors that decrease red blood cell production include:</p>
<ul>
	<li>inadequate stimulation of red blood cell production by the hormone erythropoietin, which is produced by the kidneys</li>
	<li>inadequate dietary intake of iron, vitamin B-12, or folate</li>
	<li>hypothyroidism</li>
</ul>
<h1><b>Prevention</b></h1>
<ul>
	<li>Eat plenty of iron-rich foods, such as tofu, green and leafy vegetables, lean red meat, lentils, beans and iron-fortified cereals and breads.</li>
	<li>Eat and drink vitamin C-rich foods and drinks.</li>
	<li>Avoid drinking tea or coffee with your meals, as they can affect iron absorption.</li>
	<li>Get enough vitamin B12 and folic acid in your diet.</li>
</ul>
<h1><b>Home remedies</b></h1>
<ul>
	<li>Drumstick Leaves</li>
	<li>Vitamins B12 And Folate</li>
	<li>Blackstrap Molasses</li>
	<li>Green Veggies</li>
	<li>Vitamin C</li>
	<li>Probiotics</li>
	<li>Figs</li>
	<li>Beetroot</li>
	<li>Bananas</li>
	<li>Dates And Raisins</li>
	<li>Copper</li>
	<li>Black Sesame Seeds</li>
</ul>
</body>
</html>