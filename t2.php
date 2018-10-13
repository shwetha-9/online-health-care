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
<h1><b>What Causes Toothache?</b></h1>
<p>A toothache is pain that you feel in or around your tooth. Most often, toothache pain is a sign that there’s something wrong with your tooth or gums. Sometimes, however, toothache pain is referred pain. That means the pain is caused by a problem elsewhere in your body.</p>
<p>You should never ignore toothaches. Toothaches caused by tooth decay can get worse if left untreated. Toothaches are usually not life-threatening, but in some cases, they can be signs of serious conditions that require immediate medical treatment.</p>
<p>Tooth decay is the most common reason for toothaches. If tooth decay goes untreated, an abscess can develop. This is an infection near your tooth or in the pulp inside your tooth. See your dentist right away if you think you have a dental abscess. In rare cases, the infection can spread to your brain, which can be life-threatening.</p>
<p>A toothache can also be caused by an impacted tooth. This happens when one of your teeth, usually a wisdom tooth, is stuck in your gum tissue or bone. As a result, it can’t erupt, or grow in.</p>
<h1><b>Prevention</b></h1>
<p>To help prevent toothaches, brush and floss your teeth at least twice a day and get dental checkups and cleanings twice a year, or as often as recommended by your dentist.</p>
<p>You can help keep your heart and lungs healthy by not smoking, eating a low-fat and high-fiber diet, and exercising at least 30 minutes a day, five times a week. Get your doctor’s permission before starting an exercise routine.</p>
<h1><b>Home Treatment</b></h1>
<p>Things that may help temporarily relieve your tooth pain include:</p>
<ul>
<li>over-the-counter pain relievers, such as aspirin</li>
<li>over-the-counter topical dental pain relievers, such as benzocaine (Anbesol, Orajel) </li>	
<li>over-the-counter decongestants, such as pseudoephedrine (Sudafed), if your pain is due to sinus congestion </li>
<li>clove oil applied to your aching tooth</li>
</ul>
</body>
</html>