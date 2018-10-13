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
<h1><b>What causes ataxia?</b></h1>
<p>There are a number of known causes for ataxia. They range from chronic conditions to sudden onset. However, most conditions will relate to damage or degeneration of the cerebellum.</p>
<h3>Disease and injury-related causes</h3>
<p>Coordinated movements involve the cerebellum, the peripheral nerves of the body, and the spinal cord. Diseases and injuries that damage or destroy any of these structures can lead to ataxia. These include:</p>
<ul>
	<li>head trauma</li>
	<li>alcoholism</li>
	<li>infection</li>
	<li>multiple sclerosis, a chronic disease that affects the brain and spinal cord</li>
	<li>stroke</li>
	<li>transient ischemic attack (TIA), a temporary decrease of blood supply to your brain</li>
	<li>genetic ataxias</li>
	<li>cerebral palsy, a group of disorders caused by damage to a child’s brain in early development</li>
	<li>brain tumors</li>
	<li>paraneoplastic syndromes, abnormal immune responses to certain cancerous tumors</li>
	<li>neuropathy, disease or injury to a nerve</li>
	<li>spinal injuries</li>
</ul>
<h1><b>Treatment</b></h1>
<p>Although ataxia is generally not curable, a great deal can be done to ease symptoms and improve the quality of life of the patient. Treatment for coordination and balance problems usually involves the use of adaptive devices that help the patient attain as much independence as possible. These may include the use of a cane (walking stick), crutches, walker, or a wheelchair.<br>Symptoms such as tremor, stiffness, spasticity, sleep disorders, muscle weakness, depression (or frustration, sadness, and anger) may be addressed with targeted physical therapy, speech therapy, medications, and counseling.</p>
<ul>
	<li><b>Occupational therapy:</b>This can help the person manage better around the house and at work. It may involve some home adaptations, wheelchair assessment, and making the kitchen more practical.</li>
	<li><b>Speech therapy:</b>This can help with swallowing, coughing, choking, and speech problems. If speech becomes very difficult, the speech therapist can help the person learn how to use speech aids.</li>
	<li><b>Orthopedic care:</b>This can help treat curvature of the spine.</li>
	<li><b>Physical therapy:</b>This can help maintain strength and improve mobility.</li>
	<li><b>Counseling:</b>Sessions can help the person manage frustration and depression that may arise when symptoms affect physical mobility and coordination.</li>
	<li><b>Supplements and nutrition:</b>If levels of vitamin E are low, supplements, a special diet, or both may help. Sensitivity to gluten can occur with ataxia, so a gluten-free diet may help.</li>
	<li><b>Medication:</b>Treatment for ataxia telangiectasia include gamma-globulin injections to boost the immune system. There are also drugs for muscle spasms and uncontrollable eye movements.</li>
</ul>
</body>
</html>