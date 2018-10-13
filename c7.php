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
<h1><b>What Causes Claw Hand?</b></h1>
<p>Common causes of claw hand include:</p>
<ul>
	<li><b>Congenital Birth Defect:</b>Claw hand sometimes occurs as a defect at birth.</li>
	<li><b>Nerve Damage:</b>Damage to the nerves can occur in the arm or hand from injuries or diseases, such as diabetes. Diabetic neuropathy, or damage to the nerves caused by uncontrolled blood sugar levels, can lead to claw hand. Many other conditions can cause nerve damage. One common cause is cervical spondylosis, or abnormal wear of the cartilage or bone in your spine that can cause compression on your nerves. Alcoholic neuropathy is damage to the nerves caused by excessive or long-term alcohol use.</li>
	<li><b>Skin Scarring:</b>Claw hand can occur due to scarring of the skin on the arm or hand is the result of a burn injury.</li>
	<li><b>Bacterial Disease:</b>A bacterial disease such as leprosy can cause damage to the skin. However, leprosy is extremely rare in the United States. There are currently an estimated 6,500 people in the United States with leprosy, according to the U.S. Department of Health and Human Services, and only half of those cases cause enough symptoms to require treatment.</li>
</ul>
<h1><b>What Are the Treatment Options for Claw Hand?</b></h1>
<p>Claw hand is often treatable. With treatment, your symptoms may improve or completely disappear, depending on the cause and severity of your condition. The type of treatment that’s best for you depends on what’s causing your symptoms.</p>
<ul>
	<li><b>Physical Therapy:</b>Your doctor may recommend physical therapy to help you gain more flexibility in your fingers and hand. Physical therapy may consist of stretches and strengthening exercises. Physical therapy may be the sole treatment or it may occur in combination with other treatments.</li>
	<li><b>Home Treatment:</b>If the curvature of your fingers is due to an injury, resting your hand may be the only treatment you need. Your doctor may also suggest that you wear a brace that keeps your wrist straight to prevent further injury.</li>
	<li><b>Surgery:</b>You may need surgery to repair damaged nerves, ligaments, or muscles that are the cause of your symptoms. If your injury is due to tight skin, as is seen in people who have burn injuries, skin grafts and surgery to remove scar tissue may be necessary. Multiple surgeries may be necessary for serious defects and for burn injuries.</li>
	<li><b>Medications</b>Your doctor may prescribe medication to treat an underlying disease that’s causing your symptoms. For example, antibiotics are a treatment for leprosy.</li>
</ul>
</body>
</html>