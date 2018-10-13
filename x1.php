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
<link rel="stylesheet" href="style.css">
<title>Symptoms</title>
</head>
<body>
<h1><b>What Causes Xanthoma?</b></h1>
<p>Xanthoma is a condition in which fatty growths develop underneath the skin. These growths can appear anywhere on the body, but they typically form on the: </p>
<ul>
	<li>joints, especially the knees and elbows</li>
	<li>feet</li>
	<li>hands</li>
	<li>buttocks</li>
</ul>
<p>Xanthomas can vary in size. The growths may be as small as a pinhead or as large as a grape. They often look like a flat bump under the skin and sometimes appear yellow or orange. They usually don’t cause any pain. However, they might be tender and itchy. There may be clusters of growths in the same area or several individual growths on different parts of the body.</p>
<h1><b>Prevention</b></h1>
	<ul>
		<li> To help reduce your chances of getting xanthoma, take the following steps: </li><br>
		<li>Keep blood lipids and cholesterol at a healthy level</li>
		<li>Keep metabolic disorders well-controlled</li>
		<li>Balancing your LDL and HDL levels.</li>
		<li>Lowering the level of triglycerides in your bloodstream.</li>
		<li>Regulating your blood lipid levels, including fatty acids.</li>
		<li>Eating an organic and healthy diet.</li>
		
	</ul>
<h1><b>Home remedies</b></h1>
	<p>The first and most important thing you have to do when you notice these yellow plaques on your skin is make an appointment with your doctor and determine the exact cause of these cholesterol deposits.</p>
	<p>You need diagnostic tests like a lipid profile blood test to find out your cholesterol levels. And while you are at it, you also should get your liver checked out.</p>
	<p><b>Garlic:</b>Raw garlic contains sulfur compounds and natural enzymes that can successfully dissolve and disintegrate cholesterol deposits through both topical application and internal consumption.</p>
	<p><b>Castor Oil:</b>Cold-pressed, organic castor oil has anti-inflammatory properties and is rich in fatty acids that can help dissolve the solid cholesterol deposits underneath your skin. Regular application will give you smooth, younger-looking skin that is free of any yellowish lesions.</p>
</body>
</html>
