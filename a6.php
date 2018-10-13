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
<h1><b>What Causes Arm Pain?</b></h1>
<p>Causes of arm pain and the accompanying symptoms can range from mild to severe. Possible causes of arm pain include:</p>
<ul>
	<li><b>Pinched nerves:</b>Pinched nerves happen when a nerve has too much pressure on it due to surrounding:<br>

bones<br>
muscle<br>
cartilage<br>
tendons</li>
	<li><b>Sprains:</b>Sprains are stretching or tearing of the ligaments or tendons, and they’re common injuries. You can take care of a mild sprain at home, but more severe strains may require surgery. Common symptoms can include swelling, bruising, and limited joint mobility.</li>
	<li><b>Tendonitis:</b>Tendonitis is inflammation of the tendon. It commonly occurs in the shoulders, elbows, and wrists. Tendonitis can vary from mild to severe. Other symptoms include mild swelling, tenderness, and a dull, aching pain.</li>
	<li><b>Rotator cuff injury:</b>These occur most often in people who perform overhead motions in their daily lives, like painters or baseball players. Symptoms include a dull ache in the shoulder and potential arm weakness.</li>
	<li><b>Broken bones:</b>Broken or fractured bones can cause immense, sharp pain in the arm. You may hear an audible snap when the bone breaks. Symptoms include:<br>

swelling<br>
bruising<br>
severe pain<br>
a visible deformity<br>
an inability to turn your palm upward</li>
<li><b>Rheumatoid arthritis:This is a chronic disorder caused by inflammation that most directly affects the joints. Common symptoms include:<br>

warm, tender joints<br>
swelling of the joints<br>
stiffness in the joints<br>
fatigue</b></li>
</ul>
<h1><b>Preventing arm pain</b></h1>
<p>In many cases, arm pain occurs due to a preventable injury or condition. You can do the following to prevent injury and arm pain:</p>
<ul>
	<li>Stretch regularly, particularly before exercise.</li>
	<li>Make sure you have the correct form for the exercises you’re performing to prevent injury.</li>
	<li>Wear protective equipment while playing sports.</li>
	<li>Stay in shape.</li>
	<li>Lift objects carefully.</li>
</ul>
<h1><b>Home remedies</b></h1>
<ul>
	<li><b>Rest:</b>Sometimes, all the body needs is rest. Rest the area in pain, and avoid strenuous exercise and movement.</li>
	<li><b>Over-the-counter (OTC) painkillers:</b>If you don’t want to take a trip to your doctor and your pain is mild, OTC pain medications like aspirin or ibuprofen can help treat your discomfort. Don’t use these medications for longer than their recommended use.</li>
	<li><b>Compression:</b>Wrapping the affected area with an elastic bandage or brace can help reduce swelling and prevent you from extending a joint too far, encouraging healing.</li>
	<li><b>Elevation:</b>Keep your arm elevated to help reduce swelling and pain.</li>
	<p>If any of these remedies make your pain worse, stop the home treatment immediately and consult your doctor.</p>
</ul>
</body>
</html>