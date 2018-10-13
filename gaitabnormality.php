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
<h1><b>What causes gait and balance problems?</b></h1>
<p>Potential causes of temporary gait or balance complications include:</p>
<ul>
	<li>injury</li>
	<li>trauma</li>
	<li>inflammation</li>
	<li>pain</li>
</ul>
<p>Longer-term difficulties often result from muscular neurological issues.<br>

Problems with gait, balance, and coordination are often caused by specific conditions, including:</p>
<ul>
	<li>joint pain or conditions, such as arthritis</li>
	<li>multiple sclerosis (MS)</li>
	<li>Meniere's disease</li>
	<li>brain hemorrhage</li>
	<li>brain tumor</li>
	<li>Parkinson’s disease</li>
	<li>Arnold-Chiari malformation</li>
	<li>spinal cord compression or infarction</li>
	<li>Guillain Barre</li>
	<li>peripheral neuropathy</li>
	<li>myopathy</li>
	<li>cerebral palsy</li>
	<li>gout</li>
	<li>muscular dystrophy</li>
	<li>obesity</li>
	<li>chronic alcohol abuse</li>
	<li>vitamin B12 deficiency</li>
	<li>stroke</li>
	<li>vertigo</li>
	<li>migraines</li>
	<li>deformities</li>
	<li>certain medications, including antihypertensive drugs</li>
</ul>
<p>Other causes include limited range of motion and fatigue. Muscle weakness can occur in one or both legs making walking difficult. Foot and leg numbness can make it difficult to know where your feet are moving or whether they are touching the floor.</p>
<h1><b>Treating gait and balance problems</b></h1>
<p>Treatment for gait and balance issues depends on the cause. Treatments may include medications and physical therapy. You may require rehabilitation to learn to move muscles, to compensate for a lack of balance, and learn how to prevent falls. For vertigo-caused balance issues, you may learn how to position your head to regain balance.

</p>
</body>
</html>