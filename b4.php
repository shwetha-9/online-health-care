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
<h1><b>What Causes Blanching of Skin?</b></h1>
<p>The possible causes of blanching of skin can range from a medical emergency to a temporary inconvenience.<br>Shock is a medical emergency that causes blanching of the skin, as well as other signs and symptoms. The condition occurs when the body is not getting enough blood or oxygen, usually due to one of the following:</p>
<ul>
	<li>significant blood loss</li>
	<li>severe trauma</li>
	<li>third-degree burns</li>
	<li>clinical dehydration</li>
	<li>severe infection</li>
	<li>an allergic reaction</li>
</ul>
<h3>Several skin conditions can cause blanching of skin, including:</h3>
<ul>
	<li>burned skin — can cause pigment loss</li>
	<li>dermatitis, or skin irritation — some areas of skin are red and others are pale</li>
	<li>frostbite — the skin’s tissues become frozen, resulting in loss of blood flow</li>
	<li>tinea versicolor — a type of fungal skin infection</li>
	<li>pressure sores — blanching of skin indicates impaired blood flow</li>
	<li>vitiligo — the skin has areas of smooth, white patches</li>
</ul>
<h1><b>Home Care</b></h1>
<p>Take care of your skin by washing regularly with antibacterial soap and applying moisturizer to prevent skin damage. Keep the skin warm through layering, wearing mittens or warm socks, and refraining from staying in the cold too long.<br>People who are bed-bound require frequent turning to keep excess pressure from causing bedsores. Pressure points such as the buttocks, elbows, heels, and back of the head are vulnerable to pressure that can cause wounds known as decubitus ulcers. </p>
</body>
</html>