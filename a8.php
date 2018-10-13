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
<h1><b>Causes of loss of appetite</b></h1>
<p>Since anorexia is often a symptom of a medical problem, speak with your doctor if you notice a significant decrease in your appetite. Technically any medical issue can result in loss of appetite.<br>Common causes of loss of appetite can include the following:</p>
<ul>
	<li><b>Depression:</b>During episodes of depression, a person may lose interest in food or forget to eat. This can lead to weight loss and malnourishment. The actual cause of loss of appetite is not known. Sometimes, people with depression can overeat.</li>
	<li><b>Cancer:</b>Side effects caused by some cancer treatments (radiation and chemotherapy) can also affect appetite. People who receive these treatments may lose their appetite if they experience nausea, difficulty swallowing, difficulty chewing, and mouth sores.</li>
	<li><b>Hepatitis C:</b>Hepatitis C is a liver infection that spreads from person to person through contact with infected blood. This infection is caused by the hepatitis C virus. If left untreated, it can cause liver damage. Advanced liver damage can cause nausea and vomiting, which affects appetite</li>
	<li><b>Kidney failure:</b>People with kidney failure will often have a condition called uremia, which means there is excess protein in the blood. This protein would normally be flushed out in the urine, however, the damaged kidneys are unable to filter it properly. Uremia can cause people with kidney failure to feel nauseated, and not want to eat. Sometimes food will taste different. Some will find that the foods they once enjoyed no longer appeal to them.</li>
	<li><b>Heart failure:</b>People with heart failure may also experience loss of appetite. This is because you have less blood flow to the digestive system, causing problems with digestion. This can make it uncomfortable and unappealing to eat.</li>
	<li><b>HIV/AIDS:</b>Loss of appetite is also a common symptom of HIV/AIDS. There are different reasons for loss of appetite with HIV and AIDS. Both can cause painful sores on the mouth and tongue. Because of pain, some people reduce their food intake or completely lose the desire to eat.</li>
</ul>
<h1><b>Prevention</b></h1>
<ul>
	<li>Eat 5-6 small meals a day rather than 3 large meals that may fill you up too quickly.</li>
	<li>Track the times during day when you feel most hungry.</li>
	<li>Snack whenever you are hungry. Choose snacks that are high in calories and protein, such as dried fruits, yogurt, nuts and nut butters, cheeses, eggs, protein, granola bars, and pudding.</li>
	<li>Eat in pleasant surroundings that make you feel comfortable.</li>
	<li>Eat soft foods, like mashed potatoes or smoothies, if your loss of appetite is due to pain.</li>
	<li>Keep your favorite snacks on hand so you can eat on the go.</li>
	<li>Add spices or sauces to make food more appealing and higher in calories.</li>
	<li>Drink liquids between meals so that they don’t fill you up while you are eating.</li>
	<li>Meet with a dietitian to create a meal plan that works for you.</li>

</ul>
</body>
</html>