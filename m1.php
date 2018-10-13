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
<h1><b>Memory Loss</b></h1>
<p>Everyone occasionally experiences forgetfulness. Mild memory loss tends to increase with age and is generally no cause for concern. But progressive memory loss due to illnesses like Alzheimer’s disease can be serious.Consult your doctor if memory loss starts to affect your daily life, or if it’s accompanied by other symptoms. Noting what type of memory loss you have will help your doctor determine its cause.Many causes of memory loss are treatable if diagnosed early. If not diagnosed and treated, some illnesses will progress and make treatment more difficult.</p>
<ul>
	<li>Keep your address book and calendar up to date.</li>
	<li>Keep your home organized and easy to manage.</li>
	<li>Be socially active and engage in hobbies you enjoy.</li>
	<li>If your memory loss is progressing or becoming severe, make an appointment with your doctor. Ask someone you trust to go with you.</li>
	<li>Use lists for chores.</li>
</ul>
<h1><b>Medical Examination</b></h1>
<p>A medical exam for memory loss will include a complete medical history. Bring a family member or trusted friend along to help you. Your doctor will ask questions about the specifics of your problems with memory. They may also ask a few questions to test your memory. Your doctor should also give you a complete physical exam and ask about other physical symptoms.</p>
<h1><b>Home Remedies</b></h1>
<ul>
	<li><b>Eat Less Added Sugar:</b>Eating too much added sugar has been linked to many health issues and chronic diseases, including cognitive decline.</li>
	<li><b>Make Time for Meditation:</b>As you age, gray matter declines, which negatively impacts memory and cognition (10).Meditation and relaxation techniques have been shown to improve short-term memory in people of all ages, from people in their 20s to the elderly</li>
	<li><b>Maintain a Healthy Weight:</b>Maintaining a healthy body weight is essential for well-being and is one of the best ways to keep your body and mind in top condition.Several studies have established obesity as a risk factor for cognitive decline.</li>
	<li><b>Get Enough Sleep:</b>Lack of proper sleep has been associated with poor memory for quite some time.Sleep plays an important role in memory consolidation, a process in which short-term memories are strengthened and transformed into long-lasting memories.Research shows that if you are sleep deprived, you could be negatively impacting your memory.</li>
</ul>
</body>
</html>