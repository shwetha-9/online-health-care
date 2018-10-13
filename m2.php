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
<h1><b>Mouth Ulcers</b></h1>
<p>Mouth ulcers — also known as canker sores — are normally small, painful lesions that develop in your mouth or at the base of your gums. They can make eating, drinking, and talking uncomfortable. Women, adolescents, and people with a family history of mouth ulcers are at higher risk for developing mouth ulcers.</p>
<p>Mouth ulcers aren’t contagious and usually go away within one to two weeks. However, if you get a canker sore that is large or extremely painful, or if it lasts for a long time without healing, you should seek the advice of a doctor.</p>
<ul>
	<li>minor mouth injury from dental work, hard brushing, sports injury, or accidental bite</li>
	<li>toothpastes and mouth rinses that contain sodium lauryl sulfate</li>
	<li>food sensitivities to acidic foods like strawberries, citrus, and pineapples, and other trigger foods like chocolate and coffee</li>
	<li>lack of essential vitamins, especially B-12, zinc, folate, and iron</li>
	<li>allergic response to mouth bacteria</li>
	<li>bacterial, viral, or fungal infections</li>
</ul>
<h1><b>How are mouth ulcers diagnosed?</b></h1>
<p>Your doctor will be able to diagnose mouth ulcers through a visual exam. If you’re having frequent, severe mouth ulcers, you might be tested for other medical conditions.</p>
<h1><b>Home Remedies</b></h1>
<ul>
	<li><b>Lemon balm:</b>It a member of the mint family, may help reduce the redness and swelling associated with a blister. However, symptoms such as pain and scabbing did not improve with lemon balm. Most research suggests using a lip balm with at least one percent lemon balm. As an alternative, a compress made of a lemon balm infusion (tea) may provide similar benefits. Lemon balm may also help protect against future outbreaks.</li>
	<li><b>Ice:</b>Ice may not reduce the duration of a breakout, but it can ease the discomfort and inflammation of cold sores. Apply a cold pack directly to the sores for temporary relief.</li>
	<li><b>Aloe vera:</b>This gel is widely available and can be grown as a houseplant. While research connecting the plant to cold sores is limited, studies have found that applying it topically can aid in soothing the skin when a cold sore breaks out. It has anti-inflammatory properties that can be helpful.</li>
</ul>
</body>
</html>