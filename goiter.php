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
<h1><b>What Causes a Goiter?</b></h1>
<p>Iodine deficiency is the main cause of goiters. Iodine is essential to helping your thyroid produce thyroid hormones. When you don’t have enough iodine, the thyroid works extra hard to make thyroid hormone, causing the gland to grow larger.<br>

Other causes include the following:</p>
<ul>
	<li><b>Graves’ Disease</b><br>Graves’ disease occurs when your thyroid produces more thyroid hormone than normal, which is known as hyperthyroidism. The excessive production of hormones makes the thyroid increase in size.</li>
	<li><b>Hashimoto’s Disease</b><br>When you have Hashimoto’s disease, the thyroid doesn’t produce enough thyroid hormone, causing hypothyroidism. The low thyroid hormone causes the pituitary gland to make more thyroid-stimulating hormone (TSH), which causes the thyroid to swell.</li>
	<li><b>Inflammation</b><br>Some people develop thyroiditis, an inflammation of the thyroid that can cause a goiter.</li>
	<li><b>Nodules</b><br>Solid or fluid-containing cysts may appear on the thyroid and cause it to swell. These nodules are often noncancerous.</li>
	<li><b>Thyroid Cancer</b><br>Cancer may affect the thyroid, which causes swelling on one side of the gland. Thyroid cancer is not as common as the formation of benign nodules.</li>
	<li><b>Pregnancy</b><br>Being pregnant can sometimes cause the thyroid to become larger.</li>
</ul>
<h1><b>How Is a Goiter Treated?</b></h1>
<p>Your doctor will decide on a course of treatment based on the size and condition of your goiter, and symptoms associated with it. Treatment is also based on health problems that contribute to the goiter.</p>
<ul>
	<li><b>Medications</b><br>If you have hypothyroidism or hyperthyroidism, medications to treat these conditions may be enough to shrink a goiter. Medications (corticosteroids) to reduce your inflammation may be used if you have thyroiditis.</li>
	<li><b>Surgeries</b><br>Surgical removal of your thyroid, known as thyroidectomy,  is an option if yours grows too large or doesn’t respond to medication therapy.</li>
	<li><b>Radioactive Iodine</b><br>In people with toxic multinodular goiters, RAI may be necessary. The RAI is ingested orally, and then travels to your thyroid through your blood, where it destroys the excess tissue.</li>
	<li><b>Home Care</b><br>Depending on your type of goiter, you may need to increase or decrease your iodine intake at home</li>
</ul>
<p>If a goiter is small and doesn’t  cause any problems, you may require no treatment at all.</p>
</body>
</html>