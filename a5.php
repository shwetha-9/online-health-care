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
<h1><b>What causes anxiety?</b></h1>
<p>Researchers are not sure of the exact cause of anxiety. But, it’s likely a combination of factors play a role. These include genetic and environmental factors, as well as brain chemistry.<br>In addition, researchers believe that the areas of the brain responsible for controlling fear may be impacted.</p>
<h1><b>Prevention</b></h1>
<ul>
	<li>Take care of your body by eating a well-balanced diet. Include a multivitamin when you can't always eat right.</li>
	<li>Limit alcohol, caffeine, and sugar consumption.</li>
	<li>Take time out for yourself every day. Even 20 minutes of relaxation or doing something pleasurable for yourself can be restorative and decrease your overall anxiety level.</li>
	<li>Trim a hectic schedule to its most essential items, and do your best to avoid activities you don't find relaxing.</li>
	<li>Keep an anxiety journal. Rank your anxiety on a 1-to-10 scale. Note the events during which you felt anxious and the thoughts going through your mind before and during the anxiety. Keep track of things that make you more anxious or less anxious.</li>
	<li>Interrupt hyperventilation. If you begin to hyperventilate, exhale into a paper bag and inhale the air within the bag. This increases the amount of carbon dioxide you are inhaling, which can reduce the urge to hyperventilate. Inhaling from a bag will help relieve any dizziness or tingling you might feel.</li>
</ul>
<h1><b>Natural remedies</b></h1>
<ul>
	<li>getting enough sleep</li>
	<li>meditating</li>
	<li>staying active and exercising</li>
	<li>eating a healthy diet</li>
	<li>staying active and working out</li>
	<li>avoiding alcohol</li>
	<li>avoiding caffeine</li>
	<li>quitting smoking cigarettes</li>

</ul>
</body>
</html>