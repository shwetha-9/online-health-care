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
<h1><b>What Causes Dry Hair?</b></h1>
<p>A variety of factors can lead to dry hair, including environmental conditions, hair care habits, and your physical health.<br>Some of the environmental conditions that can cause dry hair include:</p>
<ul>
	<li>living in a dry, hot climate</li>
	<li>spending a lot of time in the sun or wind</li>
	<li>frequently swimming in chlorinated or salty water</li>
</ul>
<p>Hair care practices that often contribute to dry hair include:</p>
<ul>
	<li>washing your hair too often</li>
	<li>using harsh shampoos, conditioners, or styling products</li>
	<li>dying or chemically treating your hair</li>
	<li>regularly blow-drying your hair</li>
	<li>using electric curling irons, straighteners, or curlers</li>
</ul>
<p>In some cases, dry hair is the result of an underlying health problem that affects your hair’s ability to retain moisture. Examples include:</p>
<ul>
	<li><b>Anorexia nervosa:</b>This eating disorder can lead to malnutrition. It can cause dry and brittle hair, along with more serious complications.</li>
	<li><b>Hypoparathyroidism:</b>This condition causes the parathyroid gland in your neck to produce too little parathyroid hormone, which decreases the level of calcium in your blood. Calcium is a key nutrient for healthy hair, as well as bones, teeth, and other tissue.</li>
	<li><b>Hypothyroidism:</b>If you have this condition, your thyroid glands don’t produce enough thyroid hormones. Dry and brittle hair is one of the early symptoms of this condition.</li>
	<li><b>Menkes syndrome:</b>In this rare genetic condition, your cells don’t absorb enough copper. Low copper absorption affects the health of your hair, causing dryness.</li>
</ul>
<h1><b>Treating dry hair</b></h1>
<p>In many cases, you can treat dry hair through simple lifestyle changes. For example, it may help to:</p>
<ul>
	<li>avoid shampooing your hair every day</li>
	<li>condition your hair every time you wash it</li>
	<li>use a shampoo and conditioner that are meant for your hair type</li>
	<li>use moisturizing styling products</li>
	<li>avoid chemical hair treatments</li>
	<li>blow-dry your hair less frequently</li>
	<li>avoid flat irons, curling irons, and electric rollers</li>
</ul>
<p>Daily shampooing can rob your hair of its protective oils and lead to dryness. Try washing your hair once or twice a week instead. You can also apply hair oils or leave-in conditioners to add luster and softness.<br>Protecting your hair from heat and sun exposure is also important. If you live in a dry climate, wear a hat when you go outdoors and avoid long-term exposure to dry or windy air. You should protect your hair from chlorine and salt water by wearing a bathing cap when swimming in a pool or ocean.<br>If an underlying medical problem is causing your dry hair, your doctor may recommend medications or other treatments to address it. Your hair may improve once you treat the underlying condition. Work with your doctor to find the best course of treatment for you.</p>
</body>
</html>