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
<h1><b>What Causes Feels Hot to Touch?</b></h1>
<h3>Common causes</h3>
<ul>
	<li>fever with any infection</li>
	<li>high environmental temperature, particularly combined with high humidity</li>
	<li>not drinking enough fluids (dehydration)</li>
	<li>exercise</li>
	<li>wearing clothes that are too heavy</li>
	<li>drinking alcoholic beverages</li>
	<li>medications such as anticholinergics, diuretics, phenothiazines, neuroleptics and illicit drugs</li>
	<li>alcohol withdrawal</li>
	<li>appendicitis, diverticulitis, or other internal infections</li>
	<li>sweat gland problems</li>
	<li>chicken pox</li>
	<li>heat exhaustion</li>
	<li>heat stroke</li>
	<li>heat cramps</li>
	<li>acute hepatitis</li>
	<li>infectious mononucleosis</li>
	<li>infective endocarditis</li>
	<li>rheumatoid arthritis</li>
	<li>sepsis</li>
</ul>
<h1><b>Treatments</b></h1>
<p>During exercise, it’s recommended to drink 8 ounces of fluid every twenty minutes. If a person becomes overheated due to the environment or exercise, keep them in a cool, shaded place. Apply cool wet cloths to their skin. Placing cool compresses on the groin, neck, and armpit helps lower the body temperature. Provide cool fluids as frequently as the person can tolerate.<br>

Sports drinks replace fluids, as well as electrolytes, which can be important in combating dehydration. Water, popsicles, and ice chips also work well. The important thing is to try to keep the person hydrated with fluids any way you can.</p>
<h3>When to call 911</h3>
<ul>
	<li>the person loses consciousness</li>
	<li>the person is confused, lethargic, or delirious</li>
	<li>the person is disoriented or has a seizure</li>
	<li>the person is breathing rapidly or has a rapid pulse</li>
	<li>the person’s condition deteriorates</li>
	<li>the person is nauseous or vomiting</li>
</ul>
</body>
</html>