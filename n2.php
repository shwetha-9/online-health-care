<?php

session_start();
if(!isset($_SESSION['email'])){
	header("location:log.php");
}
?>
<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" href="style.css"/>
	<link href="logo.png" rel="icon" type="image/ico">
<title>Symptoms</title>
</head>
<body>
<h1><b>Not Feeling Well</b></h1>
<p>malaise happens suddenly. Other times, it may develop gradually and persist for a long period. The reason behind your malaise can be extremely difficult to determine because it can be the result of so many conditions.However, once your doctor diagnoses the cause of your malaise, treating the condition can help you feel better.</p>
<p>There are numerous possible causes of malaise. Anytime your body undergoes a disruption, such as an injury, disease, or trauma, you can experience malaise. The possible causes listed here are far from exhaustive. It’s important not to jump to conclusions about the cause of your malaise until you’ve seen your doctor.</p>
<ul>
	<li>some medications used to treat hypertension and heart disease, specifically beta-blockers</li>
	<li>medications used to treat psychiatric disorders</li>
	<li>exercising regularly</li>
	<li>eating a balanced, healthy diet</li>
	<li>getting plenty of rest</li>
	<li>anticonvulsants</li>
<ul>
<h1><b>How Is Malaise Diagnosed?</b></h1>
<p>Your doctor will perform a physical examination. They’ll look for an obvious physical condition that could be the cause of your malaise or could give clues about its cause.Your doctor will also ask questions about your malaise. Be prepared to provide details such as approximately when the malaise started and whether the malaise seems to come and go, or is constantly present.Your doctor will also likely ask you questions about recent travel, additional symptoms you’re experiencing, any challenges you have in completing daily activities, and why you think you’re having these challenges. They’ll ask you what medications you’re taking, if you use drugs or alcohol, and whether you have any known health issues or conditions.</p>
<h1><b>Home Remedies</b></h1>
<ul>
	<li><b>Get plenty of rest:</b>A viral fever is a sign that your body is working hard to fight off an infection. Cut yourself some slack by resting as much as possible. Even if you can’t spend the day in bed, try to avoid as much physical activity as possible. Aim for eight to nine hours or more of sleep per night. During the day, take it easy.</li>
	<li><b>Try herbal remedies:</b>People sometimes try herbal remedies to treat a fever. Keep in mind that these supplements have been shown to improve fever in animals. There’s no reliable evidence that they work in humans. Their safety in children is often unclear or unknown, too.</li>
	<li><b>Take an over-the-counter medication:</b>Over-the-counter (OTC) fever reducers are the easiest way to manage a fever. In addition to temporarily reducing your fever, they’ll help you feel a little less uncomfortable and more like yourself.</li>
</ul>
</body>
</html>