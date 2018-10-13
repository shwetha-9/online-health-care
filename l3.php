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
<h1><b>Low Blood Pressure</b></h1>
<p>Hypotension is low blood pressure. Your blood pushes against your arteries with each heartbeat. And the pushing of the blood against the artery walls is called blood pressure.Low blood pressure is good in most cases. But low blood pressure can sometimes make you feel tired or dizzy. In those cases, hypotension can be a sign of an underlying condition that should be treated.</p>
<p>Blood pressure is measured when your heart beats, and in the periods of rest between heartbeats. The measurement of your blood pumping through your arteries when the ventricles of the heart squeeze is called systolic pressure or systole. The measurement for the periods of rest is called diastolic pressure, or diastole.Systole supplies your body with blood, and diastole supplies your heart with blood by filling the coronary arteries. Blood pressure is written with the systolic number above the diastolic number. Hypotension in adults is defined as blood pressure of 90/60 or lower</p>
<ul>
	<li>pregnancy, due to an increase in demand for blood from both mother and the growing fetus</li>
	<li>large amounts of blood loss through injury</li>
	<li>impaired circulation caused by heart attacks or faulty heart valves</li>
	<li>weakness and a state of shock that sometimes accompanies dehydration</li>
	<li>endocrine disorders such as diabetes, adrenal insufficiency, and thyroid disease</li>
</ul>
<h1><b>Treatment for hypotension</b></h1>
<p>Your treatment will depend on the underlying cause of your hypotension. Treatment could include medications for heart disease, diabetes, or infection.Drink plenty of water to avoid hypotension due to dehydration, especially if you are vomiting or have diarrhea.Staying hydrated can also help treat and prevent the symptoms of neurally mediated hypotension. If you suffer from low blood pressure when standing for long periods, be sure to take a break to sit down. And try to reduce your stress levels to avoid emotional trauma.Treat orthostatic hypotension with slow, gradual movements. Instead of standing up quickly, work your way into a sitting or standing position using small movements. You can also avoid orthostatic hypotension by not crossing your legs when you sit.</p>
<h1><b>Home Remedies</b></h1>
<ul>
	<li><b>Walk and exercise regularly:</b>Exercise is one of the best things you can do to lower high blood pressure.Regular exercise helps make your heart stronger and more efficient at pumping blood, which lowers the pressure in your arteries.</li>
	<li><b>Reduce your sodium intake:</b>One reason for this may be genetic differences in how people process sodium. About half of people with high blood pressure and a quarter of people with normal levels seem to have a sensitivity to salt .</li>
	<li><b> Learn to manage stress:</b>When you're chronically stressed, your body is in a constant fight-or-flight mode. On a physical level, that means a faster heart rate and constricted blood vessels.When you experience stress, you might also be more likely to engage in other behaviors, such as drinking alcohol or eating unhealthy food, that can negatively affect blood pressure.Several studies have explored how reducing stress can help lower blood pressure. </li>
</ul>
</body>
</html>