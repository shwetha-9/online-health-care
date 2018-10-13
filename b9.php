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
<h1>Causes of Black Eye</h1>
<ul>
	<li>A black eye can happen when something strikes a person on the face. This could be a ball, a fist, a door, or another item.</li>
	<li>A black eye can also occur after some types of dental or cosmetic surgery. The bruising can last for several days.</li>
	<li>A black eye itself is not dangerous, and the discoloration is usually due to bruising around the eye. Sometimes, however, it can be a sign of a more serious condition</li>
	<li>Bruising around both eyes, known as raccoon eyes, may indicate a skull fracture or other type of head injury. This requires urgent medical attention.</li>
</ul>
<h1><b>Prevention</b></h1>
<p>A number of measures can reduce the likelihood of traumatic injury, including a black eye.<br>

Here are some tips:</p>
<ul>
	<li><b>Rugs and carpets:</b>Fix or place these to avoid wrinkles and slipping</li>
	<li><b>Other trip hazards:</b>Keep the stairs and floor clear of cables, clutter, and other items, especially in areas where people walk</li>
	<li><b>Protective gear:</b>People who participate in activities that increase the risk to the face, such as martial arts, boxing, and contact sports should use protective gear. Helmets are essential when cycling or riding a motorcycle.</li>
	<li><b>Goggles:</b>These can help protect the eyes during activities such as gardening, woodwork, or metalwork.</li>
</ul>
<h1><b>Treatment</b></h1>
<ul>
	<li>Black eyes due to a minor injury can be treated with ice, rest, and pain medication. A follow-up visit with your doctor will be suggested if you have any visual changes or lingering pain. If swelling and pain accompany the bruising, apply a cold compress for 20 minutes, then take it off for 20 minutes. When the swelling reduces, you may apply a warm compress to help promote the reabsorption of blood.</li>
	<li>For any pain and throbbing, you may take pain relievers such as ibuprofen or acetaminophen. Avoid putting pressure on the affected area.</li>
	<li>There are many home remedies you can use to treat a black eye. An ice pack is the best method. Sometimes people use frozen packs of raw meat. It’s best to avoid this, as the meat may contain harmful bacteria.</li>
	<li>Arnica is a good herbal remedy to reduce swelling. Another option is to mix 5 tablespoons of melted Vaseline with cayenne pepper to make a natural healing ointment. But careful with this homemade remedy. The ointment can burn the eyeball if the two come in contact. Vitamins C and K will also promote healing and reduce swelling.</li>
</ul>
</body>
</html>