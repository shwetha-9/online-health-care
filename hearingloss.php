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
<h1>What Causes Hearing Loss?</h1>
<p>The American Speech-Language-Hearing Association (ASHA) reports that there are three basic types of hearing loss, each caused by different underlying factors. The three most common causes of decreased hearing are conductive hearing loss, sensorineural hearing loss (SNHL), and mixed hearing loss.</p>
<h3>Conductive Hearing Loss</h3>
<p>Conductive hearing loss occurs when sounds aren’t able to travel from the outer ear to the eardrum and the bones of the middle ear. When this type of hearing loss occurs, you may find it difficult to hear soft or muffled sounds. Conductive hearing loss isn’t always permanent. Medical interventions can treat it. Treatment may include antibiotics or surgical interventions, such as a cochlear implant. A cochlear implant is a small electrical machine placed under your skin behind the ear. It translates sound vibrations into electrical signals that your brain can then interpret as meaningful sound.<br>

Conductive hearing loss can be the result of:</p>
<ul>
	<li>ear infections</li>
	<li>allergies</li>
	<li>swimmer’s ear</li>
	<li>a buildup of wax in the ear</li>
</ul>
<h3>Sensorineural Hearing Loss (SNHL)</h3>
<p>SNHL happens when there’s damage to inner ear structures or in the nerve pathways to the brain. This type of hearing loss is usually permanent. SNHL makes even distinct, normal, or loud sounds seem muffled or unclear.<br>

SNHL can result from:</p>
<ul>
	<li>birth defects that alter the structure of the ear</li>
	<li>aging</li>
	<li>working around loud noises</li>
	<li>trauma to the head or skull</li>
	<li>Meniere’s disease, which is a disorder of the inner ear that can affect hearing and balance.</li>
	<li>acoustic neuroma, which is a noncancerous tumor that grows on the nerve that connects the ear to the brain called the “vestibular cochlear nerve”</li>
</ul>
<h1><b>How Can I Prevent Hearing Loss?</b></h1>
<p>Not all cases of hearing loss are preventable. However, there are several steps that you can take to protect your hearing:</p>
<ul>
	<li>Use safety equipment if you work in areas with loud noises, and wear earplugs when you swim and go to concerts. The National Institute on Deafness and Other Communication Disorders reports that 15 percent of people ages 20 to 69 experienced hearing loss due to loud noise.</li>
	<li>Have regular hearing tests if you work around loud noises, swim often, or go to concerts on a regular basis.</li>
	<li>Avoid prolonged exposure to loud noises and music.</li>
	<li>Seek help for ear infections. They may cause permanent damage to the ear if they’re left untreated.</li>
</ul>
<h1><b>What Are the Treatment Options for Hearing Loss?</b></h1>
<p>If you develop hearing loss due to a buildup of wax in the ear canal, you can remove the wax at home. Over-the-counter solutions, including wax softeners, can remove wax from the ear. Syringes can also push warm water through the ear canal to remove the wax. Consult your doctor before attempting to remove any object stuck in your ear to avoid unintentionally damaging your ear.<br>

For other causes of hearing loss, you’ll need to see your doctor. If your hearing loss is the result of an infection, your doctor may need to prescribe antibiotics. If your hearing loss is due to other conductive hearing problems, your doctor may refer you to a specialist to receive a hearing aid or a cochlear implant.</p>
</body>
</html>