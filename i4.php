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
<h1><b>Indigestion</b></h1>
<p>Indigestion (dyspepsia) happens to almost everyone. Eating habits or a chronic digestive problem can trigger indigestion.Indigestion something results from overeating or eating too fast. Spicy, greasy, and fatty foods also increase the risk of indigestion. Lying down too soon after eating can make it harder to digest food.</p>
<p>Sometimes, there’s no known cause of indigestion (functional dyspepsia). Functional dyspepsia may be caused by abnormal muscle motility (squeezing action) in the area where the stomach muscles digest and move food into the small intestine.</p>
<ul>
	<li>Eat smaller meals throughout the day.
    <li>Avoid spicy, fatty foods that can trigger heartburn.</li>
    <li>Eat slower and don’t eat before lying down.</li>
    <li>Stop smoking.</li>
    <li>Lose excess body weight.</li>
    <li>Reduce the amount of coffee, soft drinks, and alcohol you consume.</li>
    <li>Reduce stress through yoga or relaxation therapy.</li>
</ul>
<h1><b>Home Remedies</b></h1>
<ul>
	<li><b>Peppermint tea:</b>it is more than a breath freshener. It also has an antispasmodic effect on the body, making it a great choice for relieving stomach problems like nausea and indigestion. Drink a cup of peppermint tea after meals to quickly soothe your stomach, or keep a few pieces of peppermint in your pocket and suck on the candy after eating.</li>
	<li><b>Apple cider vinegar:</b>Since too little stomach acid can trigger indigestion, drink apple cider vinegar to increase your body’s production of stomach acid. Add one to two teaspoons of raw, unpasteurized apple cider vinegar to a cup of water and drink for fast relief. Or stop indigestion before it occurs by drinking the mixture 30 minutes before eating.</li>
	<li><b>Ginger:</b>Drink a cup of ginger tea as needed to soothe your stomach and get rid of indigestion. Other options include sucking on ginger candy or making your own ginger water. Boil one or two pieces of ginger root in four cups of water. Add flavor with lemon or honey before drinking.</li>
</ul>
</body>
</html>


