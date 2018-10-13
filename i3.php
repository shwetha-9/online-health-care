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
<h1><b>Increased tendency to bruise</b></h1>
<p>Bruising (ecchymosis) happens when small blood vessels (capillaries) under the skin break. This causes bleeding within skin tissues. You will also see discolorations from the bleeding.</p>
<p>Most of us get bruises from bumping into something from time to time. Bruising sometimes increases with age. This is especially true in women as the capillary walls become more fragile and the skin becomes thin. The occasional bruise typically doesn’t cause much medical concern.</p>
<h1><b>Medications and easy bruising</b></h1>
<p>Sometimes medications are needed to treat certain health conditions and improve quality of life. However, the very medications you depend on may be what’s causing or your easy bruising.Certain medications can increase your tendency to bleed by reducing your body’s ability to form clots. This can sometimes lead to easy bruising. These medications are often used for heart attack and stroke prevention. Your doctor may also prescribe these medications if you have atrial fibrillation, deep vein thrombosis, pulmonary embolism, or a recent cardiac stent placement. </p>
<ul>
	<li>prevent bruising by taking your time when walking</li>
	<li>practicing balancing exercises to prevent bumps and falls</li>
	<li>removing household hazards that you can trip over or bump into</li>
	<li>wearing protective gear (like knee pads) when exercising</li>
	<li>opting for long sleeves and pants to prevent minor bruises</li>
</ul>
<h1><b>Home Remedies</b></h1>
<ul>
<li><b>Ice therapy:</b>Apply ice immediately after the injury to reduce blood flow around the area. Cooling the blood vessels can reduce the amount of blood that leaks into the surrounding tissue. This can prevent the bruise from being as apparent and reduce swelling.You can use a reusable ice pack, a bag of ice, or a bag of froz.</li>
<li><b>Heat:</b>You can apply heat to boost circulation and increase blood flow. This will help to clear away the trapped blood after the bruise has already formed. Applying heat can also help to loosen tense muscles and relieve pain.</li>
<li><b>Aloe vera:</b>Aloe vera has been shown to reduce pain and inflammation. You can apply it topically to the affected area. Make sure to use a gel that is pure aloe vera. Read the label carefully to check for additives.</li>
<li><b>Vitamin C:</b>Vitamin C has anti-inflammatory properties and can be used to promote wound healing. You can also find gels, creams, or serums that contain vitamin C. You can apply these topically. You can also take it as a supplement. Eat plenty of fresh fruits and vegetables as well.</li>
</ul>
</body>
</html>
