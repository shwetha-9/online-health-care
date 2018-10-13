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
<h1><b>What Causes Dry Skin?</b></h1>
<p>Dry skin is an uncomfortable condition marked by scaling, itching, and cracking. It can occur for a variety of reasons. You might have naturally dry skin. But even if your skin tends to be oily, you can develop dry skin from time to time.<br>Dry skin can affect any part of your body. It commonly affects hands, arms, and legs. In many cases, lifestyle changes and over-the-counter moisturizers may be all you need to treat it. If those treatments aren’t enough, you should contact your doctor.</p>
<h3>Types of dry skin</h3>
<p>Exposure to dry weather conditions, hot water, and certain chemicals can cause your skin to dry out. Dry skin can also result from underlying medical conditions.<br>Dermatitis is the medical term for extremely dry skin. There are several different types of dermatitis.</p>
<ul>
	<li><b>Contact dermatitis</b><br>Contact dermatitis develops when your skin reacts to something it touches, causing localized inflammation.<br>Irritant contact dermatitis can occur when your skin’s exposed to an irritating chemical agent, such as bleach.<br>Allergic contact dermatitis can develop when your skin is exposed to a substance you’re allergic to, such as nickel.</li>
	<li><b>Seborrheic dermatitis</b><br>Seborrheic dermatitis occurs when your skin produces too much oil. It results in a red and scaly rash, usually on your scalp. This type of dermatitis is common in infants.</li>
	<li><b>Atopic dermatitis</b><br>Atopic dermatitis is also known as eczema. It’s a chronic skin condition that causes dry scaly patches to appear on your skin. It’s common among young children.<br>Other conditions, such as psoriasis and type 2 diabetes, can also cause your skin to dry out.</li>
</ul>
<h1><b>Treatment for dry skin</b></h1>
<p>Your doctor’s recommended treatment plan will depend on the cause of your dry skin.<br>In some cases, they may refer you to a skin specialist or dermatologist. Along with lifestyle remedies, they may recommend over-the-counter or prescription ointments, creams, or lotions to treat your symptoms.</p>
<h1><b>Lifestyle remedies</b></h1>
<p>Simple lifestyle changes can help prevent and relieve dry skin. Try to:</p>
<ul>
	<li>avoid using hot water to bathe or shower</li>
	<li>shower every other day instead of every day</li>
	<li>keep your shower time to less than 10 minutes</li>
	<li>use a moisturizing soap when you bathe or shower</li>
	<li>apply moisturizer immediately after bathing or showering</li>
	<li>pat, rather than rub, wet skin dry with a soft towel</li>
	<li>avoid itching or scrubbing dry skin patches</li>
	<li>use a humidifier in your home</li>
	<li>drink plenty of water</li>
</ul>
<p>It’s also important to choose the right kind of moisturizer for your skin type. If your skin is extremely dry, look for a petrolatum-based product.<br>You might consider switching to a lighter, water-based lotion during the summer months if your skin becomes less dry then. Lotions that contain grapeseed oil and antioxidants can also help trap water in your skin.</p>
</body>
</html>