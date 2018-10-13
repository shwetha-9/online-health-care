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
<h1><b>What causes clubbing?</b></h1>
<p>It’s not completely understood why clubbing occurs, but certain diseases are known to activate components in the bloodstream. This activation plays a role in changing the nail bed. Nail widening that characterizes clubbing happens when the tissue under your nail plate becomes thicker. This can be triggered by a number of conditions throughout the body. For example, clubbing often results from lung diseases, such as:</p>
<ul>
	<li><b>lung cancer,</b>a disease that develops when you have abnormal lung cells that grow out of control</li>
	<li><b>cystic fibrosis,</b>a genetic condition that affects how salt and water are moved throughout the body and creates thick secretions within the lungs and other organs</li>
	<li><b>pulmonary fibrosis,</b>a condition that occurs when your lung tissue becomes thick and scarred, often for unknown reasons</li>
	<li><b>bronchiectasis,</b>a condition that occurs when your airways become widened and scarred due to infection or other factors that prevent your lungs from expelling mucus</li>
	<li><b>asbestosis,</b>a disease that develops when you inhale asbestos fibers that scar your lung tissue</li>
</ul>
<h1><b>Can clubbing be prevented?</b></h1>
<p>The only way to prevent clubbing is by taking steps to prevent and manage the underlying conditions that cause it. For example, you can:</p>
<ul>
	<li>reduce your risk of lung cancer by avoiding tobacco smoke and limiting your exposure to toxins in the workplace</li>
	<li>lower your chances of developing bronchiectasis by getting vaccinated against measles and whooping cough, seeking prompt treatment for lung infections, and limiting your contact with tobacco smoke and other toxins</li>
	<li>prevent asbestosis by using protective equipment when you’re working in an industry, such as construction, where you might be exposed to asbestos</li>
</ul>
<p>If you’ve been diagnosed with a lung disease, follow your doctor’s recommended treatment plan. That may help you maintain your blood oxygen levels and prevent clubbing.</p>
</body>
</html>