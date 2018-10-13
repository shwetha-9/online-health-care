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
<h1><b>Causes of depression</b></h1>
<p>There are several possible causes of depression. Early childhood trauma can cause depression. This is because some events impact the way the body reacts to fear and stressful situations. Some people develop depression because of their genetics. You are more likely to develop it if you have a family history of depression or another mood disorder.<br>Other common causes include:</p>
<ul>
	<li>brain structure: there's a greater risk for depression if the frontal lobe of your brain is less active</li>
	<li>medical conditions, such as a chronic illness, insomnia, chronic pain, or attention deficit hyperactivity disorder</li>
	<li>a history of abusing drugs and alcohol</li>
</ul>
<p>Many other people will have no discernable cause for their depression.<br>About 30 percent of people who have a substance abuse problem also experience depression. In addition to these causes, other risk factors for depression include:</p>
<ul>
	<li>low self-esteem or being self-critical</li>
	<li>personal history of mental illness</li>
	<li>certain medications</li>
	<li>stressful events, such as loss of a loved one, economic problems, or a divorce</li>
</ul>
<h1><b>Treatment for depression</b></h1>
<p>Living with depression can be difficult, but treatment can help you cope. Talk to your doctor about possible options. You may successfully manage symptoms with one form of treatment. It is also common to combine conventional and lifestyle therapies, including the following.</p>
<ul>
	<li><b>Medications:</b>Your doctor may prescribe antidepressants, antianxiety, or antipsychotic medications.</li>
	<li><b>Psychotherapy:</b>Speaking with a therapist can help you learn skills to cope with negative feelings. You may also benefit from family or group therapy sessions.</li>
	<li><b>Light therapy:</b>Exposure to doses of white light can help regulate mood and improve symptoms of depression. This therapy is commonly used in seasonal affective disorder (which is now called major depressive disorder with seasonal pattern).</li>
	<li><b>Alternative therapies:</b>sk your doctor about acupuncture or meditation. Some herbal supplements are also used to treat depression, such as St. John’s Wort, SAMe, and fish oil.<br>Talk with your doctor before taking a supplement or combining a supplement with prescription medication. Doing this will help prevent complications and side effects. Some supplements may worsen depression or reduce the effectiveness of medication.</li>
	<li><b>Exercise:</b>Aim for 30 minutes of physical activity three to five days a week. Exercise can increase your body's production of endorphins, which are hormones that improve your mood.</li>
	<li><b>Avoid alcohol and drugs:</b>Drinking or using drugs may make you feel better for a little bit. But in the long run, these substances can worsen depression and anxiety symptoms.</li>
	<li><b>Learn how to say no:</b>Feeling overwhelmed can worsen anxiety and depression symptoms. Setting boundaries in your professional and personal life can help you feel better.</li>
	<li><b>Take care of yourself:</b>You can also improve symptoms of depression by taking care of yourself. This includes getting plenty of sleep, eating a healthy diet, avoiding negative people, and participating in enjoyable activities.</li>
</ul>
<p>Sometimes depression doesn't respond to medication. Your doctor may recommend other treatment options if your symptoms don’t improve. These include electroconvulsive therapy to stimulate the brain and treat major depression, or transcranial magnetic stimulation to stimulate nerve cells and regulate your moods.</p>
</body>
</html>