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
<h1><b>What Causes Breast Lump?</b></h1>
<p>There are many possible causes for a lump in your breast, including:</p>
<ul>
	<li>breast cysts, which are soft, fluid-filled sacs</li>
	<li>milk cysts, referring to sacs filled with milk that can occur during breast-feeding</li>
	<li>fibrocystic breasts, a condition in which breast tissue feels lumpy in texture and is sometimes accompanied by pain</li>
	<li>fibroadenoma, meaning noncancerous rubbery lumps that move easily within the breast tissue and rarely become cancerous</li>
	<li>hamartoma, which is a benign, tumorlike growth</li>
	<li>intraductal papilloma, referring to a small, non-cancerous tumor in a milk duct</li>
	<li>lipoma, which is a slow-growing, noncancerous, fatty lump</li>
	<li>mastitis, or an infection of the breast</li>
	<li>injury</li>
	<li>breast cancer</li>
</ul>
<h1><b>Treatment for Breast Lumps</b></h1>
<p>Your doctor must determine the cause of your breast lump before he or she can formulate a treatment plan. Not all breast lumps will need treatment.<br>If you have a breast infection, your doctor will probably prescribe antibiotics to treat it. If you have a cyst, it can be drained of fluids. Usually, cysts go away after they’re drained. In some cases, cysts do not need to be treated and may disappear on their own.<br>If the lump is found to be breast cancer, treatment can include:</p>
<ul>
	<li>lumpectomy, or removing the lump</li>
	<li>mastectomy, which refers to removing your breast tissue</li>
	<li>chemotherapy, which uses drugs to fight or destroy the cancer</li>
	<li>radiation, a treatment that uses radioactive rays or materials to fight the cancer</li>
</ul>
<p>Your treatment will depend on the type of breast cancer you have, the size and location of the tumor, and whether the cancer has spread beyond your breast.<br>There are other causes of breast lumps which do not require any treatment. If you have a breast lump due to an injury, your doctor may recommend allowing your breast time to heal. Some types of breast lump, such as fibroadenoma, in many cases do not need to be removed or treated at all. That’s why it’s important not to jump to conclusions if you find a breast lump. Your doctor can help determine if the lump requires further testing and if any treatment is needed. </p>
</body>
</html>