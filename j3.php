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
<h1><b>Join Warm</b></h1>
<p>From your knees to your fingers to your elbows, there are a number of movable joints in the body. Warm joints means one or more of your joints feels hot to the touch or warmer than your surrounding skin.  Joints that are warm are often uncomfortable because the warmth is accompanied by swelling and redness. This and other symptoms can indicate a number of medical conditions, including arthritis and injury.</p>
<p>Joints that are warm will feel hotter to the touch than the skin around them. The joints may appear swollen and red. They may feel painful and uncomfortable.</p>
<ul>
	<li>swelling and tenderness in the knuckles or around the wrist.</li>
	<li>an ache when they use their hands.</li>
	<li>joint stiffness, which may be more pronounced in the morning.</li>
	<li>difficulty moving their fingers</li>
</ul>
<h1><b>What are the causes of hand arthritis?</b></h1>
<p>The exact cause of hand arthritis is unknown. The condition develops due to wear and tear of the joint, which occurs gradually over time. A healthy joint has cartilage at the end of the bone that cushions and allows smooth movement. In OA, cartilage deteriorates, which triggers joint pain and stiffness.</p>
<h1><b>Home Remedies</b></h1>
<ul>
	<li><b>Green tea: Anti-inflammatory beverage:</b>Itcontains polyphenols. These compounds may help reduce inflammation and the need for medications. One study in Arthritis Research and Therapy reported green tea increased cartilage protection.Due to the risk of liver problems and side effects from concentrated amounts, green tea is best taken in moderation.</li>
	<li><b>Ginger: Pain reducers:</b>Oral ginger is also noted for reducing pain from OA. According to a 2015 study in Osteoarthritis and Cartilage, ginger taken long-term may even decrease the risk for OA-related disability. Due to the risk of side effects, the National Center for Complementary and Integrative Health recommends using ginger moderately as a spice instead of supplement forms.</li>
	<li><b>Turmeric (curcumin): Treats inflammation, pain, and stiffness:</b>Curcumin is the active compound in turmeric. It’s is part of the ginger family, but may help OA in different ways. Studies show that the substance may fight inflammatory compounds. It may also help reduce pain and stiffness during an OA flare-up.</li>
</ul>
</body>
</html>