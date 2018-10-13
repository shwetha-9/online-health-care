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
<title>Symptoms</title>
		<link rel="stylesheet" href="style.css"/>
</head>
<body>
<h1><b>What Causes Abdominal Tenderness?</b></h1>
<p>Abdominal tenderness, or point tenderness in your abdomen, is when pressure on an area of your abdomen causes pain.<br> It may also feel sore and tender.<br> If the removal of pressure causes pain, then that is known as rebound tenderness or Blumberg sign.<br> Point tenderness is often a sign that something is wrong with one or more organs in the area.<br> </p>
<ul>
	<li><b>appendicitis:</b>swelling of the appendix, a small pouch attached to the large intestines, which usually occurs when the appendix becomes blocked by feces travelling through the intestines</li>
	<li><b>abdominal abscess:</b>a pocket of infected fluid and pus inside the belly, caused by a burst appendix, intestine, or ovary; inflammatory bowel disease; or infection</li>
	<li><b>Meckel diverticulum:</b>a remnant of the umbilical cord that creates a small bulge on the small intestine that can cause bleeding or intestinal obstruction later in life (occurs in about 2 percent of the U.S. population)</li>
	<li><b>diverticulitis:</b>inflammation of the inner lining of the intestines</li>
	<li><b>inguinal hernia:</b>a condition that occurs when part of the membrane lining the abdominal cavity or intestines bursts through a weak spot in the abdominal muscle</li>
	<li><b>twisted fallopian tube:</b>a rare condition in which one or both fallopian tubes twist on the tissues that surround them</li>
	<li><b>ruptured ovarian cyst:</b>sometimes cysts form on the ovaries where follicles form and these cysts may burst</li>
	<li><b>ruptured ectopic pregnancy:</b>a life-threatening pregnancy condition in which the fetus begins to form outside the uterus, and the sac of fluid holding the fetus bursts</li>
	<li><b>pelvic inflammatory disease (PID):</b>an infection of a woman’s reproductive organs, often the complication of several kinds of STDs, such as chlamydia and gonorrhea</li>	
</ul>
<h1><b>Prevention</b></h1>
	<ul>
		<li>Eat a balanced, healthy diet.</li>	
		<li>Eat smaller meals throughout the day.</li>
		<li>Exercise at least 30 minutes a day.</li>
		<li>Drink water frequently.</li>
		<li>Practice safe sex to decrease your risk for pelvic inflammatory diseases.</li>
	</ul>
<h1><b>Home remedies</b></h1>
	<p>Once you have addressed the main cause of your abdominal tenderness, you can help ease any other symptoms with some simple home treatments.</p>
	<ul>
		<li>Apply a hot water bottle or heating pad to the tender area to help ease abdominal soreness.</li>	
		<li>Take an over-the-counter pain reliever, such as ibuprofen or acetaminophen.</li>
		<li>Practice relaxation techniques, such as yoga, meditation, and deep breathing. Stress can worsen inflammation and tenderness.</li>
	</ul>
</body>
</html>
