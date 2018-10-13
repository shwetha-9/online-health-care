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
<h1><b>Increased Skin Pigmentation</b></h1>
<p>Hyperpigmentation is a condition that causes the skin to darken. It can occur in small patches, cover large areas, or affect the entire body. This condition usually isn’t harmful, but it can be a symptom of another medical condition.</p>
<p>Hyperpigmentation is not harmful and usually isn’t a sign of a serious medical condition. In some cases, darkened areas of the skin fade on their own. In others, the dark spots fade with treatment. Even if treatment can’t completely reverse hyperpigmentation, it may improve the condition.</p>
<h1><b>How is hyperpigmentation diagnosed?</b></h1>
<p>A dermatologist can diagnose hyperpigmentation. They will take your medical history and give you a physical exam to determine the cause. In some cases, a skin biopsy can rule out skin cancer.Topical prescription medication can treat some cases of hyperpigmentation. This medication usually contains hydroquinone, which bleaches skin. Utilizing retinoic acid also assists with lightening dark spots of the skin. Both of these medications can take a few months to lighten darkened areas.</p>
<ul>
	<li>spicy foods, which can increase redness</li>
	<li>foods high in refined sugars, which can cause wrinkles</li>
	<li>nonorganic dairy that may contain growth hormones</li>
	<li>processed foods like chips</li>
</ul>
<h1><b>Home Remedies</b></h1>
<li><b>Apple cider vinegar:</b>contains acetic acid, which research shows may lighten pigmentation.</li>
<li><b>Green tea extract:</b>Steep a green tea bag in boiled water for three to five minutes.Remove the tea bag from the water and let cool — you don’t want to burn your skin.Rub the tea bag over your dark patches.Repeat twice a day until you get results.</li>	
<li><b>Milk:</b>Milk, buttermilk, and even sour milk have all been shown to effectively lighten skin discoloration. Lactic acid is the ingredient responsible for this effect.</li>
</ul>
</body>
</html>
