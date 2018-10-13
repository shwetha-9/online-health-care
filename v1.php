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
<link rel="stylesheet" href="style.css">
<title>Symptoms</title>
</head>
<body>
<h1><b>What Causes Vomiting?</b></h1>
<p>Vomiting is common. Eating too much food or drinking too much alcohol can make a person throw up. This generally isn’t a cause for concern. Vomiting itself is not a condition. It’s a symptom of other conditions. Some of these conditions include:</p>
<ul>
<li>food poisoning</li>	
<li>indigestion</li>
<li>infections (associated with bacterial and viral illnesses)</li>
<li>motion sickness</li>
<li>pregnancy-related morning sickness</li>
<li>headaches</li>
<li>prescription medications</li>
<li>anesthesia</li>
<li>chemotherapy</li>
<li>chemotherapy</li>
</ul>
<h1>Prevention</h1>
<p>Treatment plans are the best course of action for related medical conditions. Vomiting triggers can vary between patients. These may include:</p>
<ul>
<li>excessive alcohol consumption</li>
<li>eating too much food</li>	
<li>migraines</li>	
<li>exercising after eating</li>	
<li>stress</li>	
<li>hot or spicy foods</li>	
</ul>
<p>Adopting better lifestyle habits can help prevent vomiting episodes. It’s difficult to entirely avoid viruses that cause vomiting, but you can reduce your chances of getting a virus by exercising good hygiene, like regular hand washing. Knowing how to treat recurrent vomiting can help you avoid further complications.</p>
<h1><b>Home remedies</b></h1>
<h3>Ginger:</h3>
<p>Try sipping a cup of warm ginger tea when nausea strikes. Or slowly eat a small piece of fresh ginger root or candied ginger. According to a 2016 study, ginger is safe and effective for preventing and treating nausea and vomiting in pregnant women and people undergoing chemotherapy. </p>	
<h3>Fennel:</h3>
<p>Fennel seeds are thought to help calm the digestive tract. But scientific studies on fennel for vomiting are lacking. Still, anecdotal evidence suggests it may be worth sipping a cup of fennel tea the next time nausea strikes. </p>
<p>To make fennel tea, add about a teaspoon of fennel seeds to one cup of boiling water. Steep for 10 minutes and strain before drinking.</p>
<h3>Cloves:</h3>
<p>Cloves are a folk remedy for nausea and vomiting caused by motion sickness. They also contain eugenol, a compound thought to have antibacterial abilities. To make clove tea, add one cup of boiling water to a teaspoon or so of cloves. Steep for ten minutes, and strain before drinking. </p>
</body>
</html>
