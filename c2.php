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
<h1><b>What Causes Catatonia?</b></h1>
<p>Common causes of catatonia include mental disorders, post-traumatic stress disorder, and Parkinson’s disease.<br>Catatonia is a rarely seen side effect of some medications used to treat mental illnesses. (If you suspect that a medication is causing catatonia, seek immediate medical attention. This is considered a medical emergency.)<br>Withdrawal from some medications, such as clozapine, can cause catatonia.<br>Imaging studies have revealed that some people with chronic catatonia may have brain abnormalities. This is especially true of the frontal lobes or thalamus (Rajagopal, 2007).<br>Another theory is that having excess or too few neurotransmitters causes catatonia. Neurotransmitters are brain chemicals that carry messages from one neuron to the next. One theory is that a sudden reduction in dopamine, a neurotransmitter, causes catatonia. Another theory is that a reduction in gamma-aminobutryic acid (GABA) leads to the condition.</p>
<h1><b>Prevention</b></h1>
<p>Because the exact cause of catatonia is often unknown, prevention is not possible. However, patients should avoid taking excess neuroleptic medications, such as Thorazine. Medication abuse may lead to catatonia</p>
<h1><b>How Is Catatonia Treated?</b></h1>
<h3>Medications</h3>
<p>Medications are usually the first approach to treating catatonia. They include:</p>
<ul>
	<li>amobarbitol</li>
	<li>benzodiazepines (such as clonazepam, lorazepam, and midazolam)</li>
	<li>bromocriptine</li>
	<li>carbamazepine</li>
	<li>lithium carbonate</li>
	<li>muscle relaxants</li>
	<li>reserpine</li>
	<li>thyroid hormone</li>
	<li>tricyclic antidepressants</li>
	<li>zolpidem</li>
</ul>
<p>Benzodiazepines are usually the first medications prescribed. These medications increase GABA in the brain. This supports the theory that reduced GABA leads to catatonia.<br>After five days, if there is no response to the medication or if symptoms worsen, a physician may recommend other treatments. These include electroconvulsive treatment (ECT). </p>
</body>
</html>