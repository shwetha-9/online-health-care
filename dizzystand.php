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
<h1><b>What Causes Dizziness on Standing Up?</b></h1>
<h3>There are many causes for orthostatic hypotension. These include:</h3>
<ul>
	<li>dehydration</li>
	<li>anemia, or low red blood cell count</li>
	<li>a drop in blood volume, called hypovolemia, caused by certain drugs such as thiazide diuretics and loop diuretics</li>
	<li>pregnancy</li>
	<li>heart conditions, such as a heart attack or valve disease</li>
	<li>diabetes, thyroid conditions, and other diseases of the endocrine system</li>
	<li>Parkinson’s disease</li>
	<li>long-term bed rest or immobility</li>
	<li>hot weather</li>
	<li>blood pressure medications and antidepressants</li>
	<li>alcohol or drug use while taking blood pressure medications</li>
	<li>diuretics</li>
	<li>aging</li>
</ul>
<h1><b>How is orthostatic hypotension treated?</b></h1>
<h3>Treatment for orthostatic hypotension depends on the cause. Doctor-recommended treatment may include the following lifestyle changes:</h3>
<ul>
	<li>Increase your fluid and water intake and limit your alcohol intake if you’re dehydrated.</li>
	<li>Stand up slowly when getting out of a chair or bed.</li>
	<li>Perform isometric exercises before getting up to help raise your blood pressure. For example, squeeze a rubber ball or a towel with your hand.</li>
	<li>Adjust the dose or switch to another medication if medication is the cause.</li>
	<li>Wear compression stockings to help with circulation in your legs.</li>
	<li>Avoid crossing your legs or standing for long periods of time.</li>
	<li>Avoid walking in hot weather.</li>
	<li>Sleep with the head of your bead slightly elevated.</li>
	<li>Avoid eating large carbohydrate-rich meals.</li>
	<li>Add additional salt to your daily meals to retain fluid.</li>
</ul>
<h3>For severe cases, your doctor may prescribe drugs that work to increase blood volume or constrict blood vessels. According to the Cleveland Clinic, these drugs might include:</h3>
<ul>
	<li>fludrocortisone (Florinef)</li>
	<li>midodrine (ProAmatine)</li>
	<li>erythropoietin (Epogen, Procrit)</li>
	<li>pyridostigmine (Mestinon)</li>
</ul>
</body>
</html>