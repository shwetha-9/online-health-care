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
<h1><b>Causes of chills</b></h1>
<p>Some chills occur after exposure to a cold environment. They can also occur as a response to a bacterial or viral infection that causes a fever. Chills are commonly associated with the following conditions:</p>
<ul>
	<li>bacterial or viral gastroenteritis</li>
	<li>flu</li>
	<li>meningitis</li>
	<li>sinusitis</li>
	<li>pneumonia</li>
	<li>strep throat</li>
	<li>urinary tract infections (UTIs)</li>
	<li>malaria</li>
</ul>
<h1><b>Treating chills at home</b></h1>
<p>If you or your child has a fever with chills, there are some things you can do at home for comfort and relief. Keep reading to learn how to treat a fever with chills and when you should call a doctor.</p>
<h3>Home care for adults</h3>
<p>Treatment is usually based on whether your chills are accompanied by a fever and the severity of the fever. If your fever is mild and you have no other serious symptoms, you don’t have to see a doctor. Get plenty of rest and drink plenty of liquids. A mild fever is 101.4°F (38.6°C) or less.<br>Cover yourself with a light sheet and avoid heavy blankets or clothing, which can raise your body temperature. Sponging your body with lukewarm water or taking a cool shower may help reduce a fever. Cold water, however, may trigger an episode of chills.<br>As with any medication, carefully follow the instructions and take them as directed. Aspirin and ibuprofen will lower your fever and reduce inflammation. Acetaminophen will bring down a fever, but it won’t reduce inflammation. Acetaminophen can be toxic to your liver if it isn’t taken as directed and long-term use of ibuprofen can cause kidney and stomach damage.</p>
<h3>Home care for children</h3>
<p>Treating a child with chills and fever depends on the child’s age, temperature, and any accompanying symptoms. In general, if your child’s fever is between 100ºF (37.8°C) and 102ºF (38.9°C) and they’re uncomfortable, you can give them acetaminophen in tablet or liquid form. It’s important to follow the dosing instructions on the package.<br>Never bundle feverish children in heavy blankets or layers of clothing. Dress them in lightweight clothing and give them water or other liquids to keep them hydrated.<br>Never give aspirin to children under the age of 18 because of the risk of Reye’s syndrome. Reye’s syndrome is a rare but serious disorder that can develop in children who are given aspirin while fighting a viral infection.</p>
</body>
</html>