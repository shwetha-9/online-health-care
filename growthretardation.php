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
<h1><b>How Do Children Develop Growth Retardation?</b></h1>
<p>IUGR occurs for a number of reasons. Your child may have an inherited abnormality in their cells or tissues. They could be suffering from malnutrition or low oxygen intake. You, or your child’s birthmother, may have health problems that lead to IUGR.<br>

IUGR can start at any stage of pregnancy. A number of factors increase your child’s IUGR risk. These factors are divided into three categories: maternal factors, fetal factors, and uterine/placental factors. Uterine/placental factors are also referred to as intrauterine factors.</p>
<ul>
	<li><b>Maternal factors</b><br>Maternal factors are health conditions that you, or your child’s birthmother, can have that increase the risk of IUGR. They include:</li>
	<ul>
		<li>chronic diseases, such as chronic kidney disease, diabetes, heart disease, and respiratory disease</li>
		<li>high blood pressure</li>
		<li>malnutrition</li>
		<li>anemia</li>
		<li>certain infections</li>
		<li>substance abuse</li>
		<li>smoking</li>
	</ul>
	<li><b>Fetal Factors</b><br>Fetal factors are health conditions that your fetus can have that raise the risk of IUGR. They include:</li>
	<ul>
		<li>infection</li>
		<li>birth defects</li>
		<li>chromosome abnormalities</li>
		<li>multiple gestation pregnancy</li>
	</ul>
	<li><b>Intrauterine Factors</b><br>Intrauterine factors are conditions that can develop in your uterus that raise the risk of IUGR, including:</li>
	<ul>
		<li>decreased uterine blood flow</li>
		<li>decreased blood flow in your placenta</li>
		<li>infections in the tissues around your fetus</li>
	</ul>
	<p>A condition known as placenta previa can also cause IUGR. Placenta previa occurs when your placenta attaches too low in your uterus.</p>
</ul>
<h1><b>Is Growth Retardation Treatable?</b></h1>
<p>Depending on the cause, IUGR may be reversible.<br>

Before offering treatment, your doctor may monitor your fetus using:</p>
<ul>
	<li>ultrasound, to see how their organs are developing and to check for normal movements</li>
	<li>heart-rate monitoring, to be certain their heart rate increases as it moves</li>
	<li>Doppler flow studies, to make certain that their blood is flowing properly</li>
</ul>
<h3>Treatment will focus on addressing the underlying cause of IUGR. Depending on the cause, one of the following treatment options may be useful:</h3>
<ul>
	<li><b>Increasing Your Nutrient Intake</b><br>This ensures that your fetus is getting adequate food. If you haven’t been eating enough, your baby may not have enough nutrients to grow.</li>
	<li><b>Bed Rest</b><br>You may be put on bed rest to help improve your fetus’s circulation.</li>
	<li><b>Induced Delivery</b><br>In severe cases, an early delivery may be necessary. This allows your doctor to intervene before damage caused by IUGR gets worse. Induced delivery is usually only necessary if your fetus has stopped growing entirely or has serious medical problems. In general, your doctor will probably prefer to allow it to grow for as long as possible before delivery.</li>
</ul>
</body>
</html>