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
<h1><b>What causes chest pain?</b></h1>
<p>When you have chest pain, your first thought may be that you’re having a heart attack. While chest pain is a well-established sign of a heart attack, it can also be caused by many other less serious conditions. About 13 percent of all emergency room (ER) visits for chest pain result in a diagnosis of a serious heart-related problem, according to the National Center for Health Studies (NCHS).</p>
<h3>Heart-related causes of chest pain</h3>
<p>The following are heart-related causes of chest pain:</p>
<ul>
	<li>heart attack, which is a blockage of blood flow to the heart</li>
	<li>angina, which is chest pain caused by blockages in the blood vessels leading to your heart</li>
	<li>pericarditis, which is an inflammation of the sac around the heart</li>
	<li>myocarditis, which is an inflammation of the heart muscle</li>
</ul>
<h3>Gastrointestinal causes of chest pain</h3>
<p>The following are gastrointestinal causes of chest pain:</p>
<ul>
	<li>acid reflux, or heartburn</li>
	<li>swallowing problems related to disorders of the esophagus</li>
	<li>gallstones</li>
	<li>inflammation of the gallbladder or pancreas</li>
</ul>
<h3>Other causes</h3>
<p>Shingles can cause chest pain. You may develop pain along your back or chest before the shingles rash becomes apparent. Panic attacks can also cause chest pain.</p>
<h1><b>Prevention</b></h1>
<ul>
	<li>Avoid smoking</li>
	<li>Keep blood pressure, cholesterol and diabetes in check </li>
	<li>Counter obesity by the following methods:</li>
		<ul>
			<li>Walking for a minimum of 30 min for at least 5 days a week</li>
			<li>Eating a balanced low fat meal with plenty of fibers</li>
		</ul>
	<li>Follow any stress- busting technique such as meditation or yoga regularly.</li>
</ul>
<h1><b>How is chest pain treated?</b></h1>
	<h3>Treatments for heart-related causes of chest pain include:</h3>
	<ul>
		<li>medications, including nitroglycerin and other medications that open partially closed arteries, clot-busting drugs, or blood thinners</li>
		<li>cardiac catheterization, which may involve using balloons or stents to open blocked arteries</li>
		<li>surgical repair of the arteries, which is also known as coronary artery bypass grafting or bypass surgery</li>
	</ul>
	<h3>Treatments for other causes of chest pain include:</h3>
	<ul>
		<li>lung re-inflation for a collapsed lung, which your doctor will perform by inserting a chest tube or related device</li>
		<li>antacids or certain procedures for acid reflux and heartburn</li>
		<li>anti-anxiety medications for chest pain related to panic attacks</li>
	</ul>
</body>
</html>