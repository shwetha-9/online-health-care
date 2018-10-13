<?php
session_start();
if(!isset($_SESSION['email'])){
	header("location:log.php");
}
?>
<!DOCTYPE html>
<html>
<head>
	<title>Disease</title>
	<link rel="stylesheet" type="text/css" href="style.css">
	<link href="logo.png" rel="icon" type="image/ico">
</head>
<body>
	<h1><b>1.Cardiovascular Diseases</b> </h1>
	<p>This amounts to about 24.8% deaths in the country. Although preventable, the disease is killing more people each year. Understanding the causes and following precautions can help preventing the disease and possibility of death among individuals. It is surprising that heart diseases in India occur 10-15 years earlier than in the west.</p>
	<h2><b>Causes</b></h2>
	<ul>
		<li>Use of tobacco</li>
		<li> Diet, physical inactivity, and obesity</li>
		<li> High cholesterol and high blood pressure</li>
		<li>Heredity</li>
	</ul>
	<h2><b>Prevention</b></h2>
	<ul>
		<li>Quit smoking and use of tobacco</li>
		<li> Eat a heart healthy diet Maintain healthy weight</li>
		<li> Maintain healthy weight</li>
	</ul>
	<hr><h1><b>2. Respiratory Diseases</b> </h1>
	<p>These diseases account for 10.2% deaths in India. According to a survey, India accounts for 47 per cent of global measles death!</p>
	<h2><b>Causes</b></h2>
	<ul>
		<li> Main Causes of Respiratory Diseases</li>
		<li> Smoking</li>
		<li> Air pollution</li>
		<li> Silica dust, Asbesto, grain dust</li>
	</ul>
	<h2><b>Prevention</b></h2>
	<ul>
		<li> Stay active, make sure your workplace is safe</li>
		<li> Eat a healthy diet</li>
		<li> Breathe deeply</li>
		<li> Quit smoking</li>
	</ul>
	<hr><h1><b>3. Tuberculosis</b> </h1>
	<p>The disease accounts for 10.1% deaths in the country.</p>
	<h2><b>Causes</b></h2>
	<ul>
		<li> Contagious causes</li>
	</ul>
	<h2><b>Prevention</b></h2>
	<ul>
		<li> Vaccination with BCG vaccine</li>
		<li> Eat a healthy diet</li>
		<li> Regular preventative tests</li>
	</ul>
	<hr><h1><b>4. Malignant and Other Tumours</b> </h1>
	<p>About 9.4% people in India die due to malignant and other tumours. Here is a list of causes of tumour development in the body:</p>
	<h2><b>Causes</b></h2>
	<ul>
		<li> Chemical or toxic compound exposures</li>
		<li> Ionizing radiation</li>
		<li> Pathogens</li>
		<li> Genetics </li>
		<li> Some unknown causes</li>
	</ul>
	<h2><b>Prevention</b></h2>
	<ul>
		<li> Avoid tobacco usage Maintain a healthy weight and stay active</li>
		<li> Maintain a healthy weight and stay active</li>
		<li> Eat a healthy diet Get regular medical care and immunization</li>
		<li> Get regular medical care and immunization</li>
	</ul>
	<hr><h1><b>5. Defined Conditions</b> </h1>
	<p>It is sad but true that around 5.3% population in India die due to III defined conditions due to unknown and undetermined.</p>
	<h2><b>Prevention</b></h2>
	<ul>
		<li>Get regular medical care</li>	
	</ul>
	<hr><h1><b>6. Digestive Diseases</b> </h1>
	<p>Disorders related to digestive system accounts to 5.1% of deaths in India. The major cause is negligence of people while consuming food.</p>
	<h2><b>Causes</b></h2>
	<ul>
		<li> Unhealthy food</li>
		<li> Medications: Aspirin</li>
		<li> Alcohol and tobacco abuse</li>
	</ul>
	<h2><b>Prevention</b></h2>
	<ul>
		<li> Quit smoking and void use of alcohol</li>
		<li> Eat a healthy diet</li>
		<li> Exercise lightly 5 days week</li>
		<li> Avoid daily use of aspirin, sulpha drugs, and steroids</li>
	</ul>
	<hr><h1><b>7. Diarrheal Diseases</b> </h1>
	<p>About 5.0% people in India die of diarrheal diseases.</p>
	<h2><b>Causes</b></h2>
	<ul>
		<li> Food poisoning (bacterial infection)</li>
		<li> Eating foods that upset the digestive system; allergic food</li>
		<li> Medications and radiation therapy</li>
	</ul>
	<h2><b>Prevention</b></h2>
	<ul>
		<li> Wash hands frequently</li>
		<li> Quit alcohol</li>
		<li> Eat a healthy diet</li>
	</ul>
	<hr><h1><b>8. Unintentional Injuries</b> </h1>
	<p>Accidents cause 4.6% of deaths across the nation. India is rated as the number 1 country when it comes to deaths in road accidents!</p>
	<h2><b>Causes</b></h2>
	<ul>
		<li> Accidents/disasters</li>
	</ul>
	<h2><b>Prevention</b></h2>
	<ul>
		<li> Drive carefully</li>
		<li> Carry a first aid kit</li>
	</ul>
	<hr><h1><b>9. Intentional Self Harm</b> </h1>
	<p>Suicide is the second most cause of death among Indians aged 15-29 years. It accounts to 3.0% of total deaths in India.</p>
	<h2><b>Causes</b></h2>
	<ul>
		<li> Suicide</li>
	</ul>
	<h2><b>Prevention</b></h2>
	<ul>
		<li> Don't stress yourself</li>
		<li> Talk to loved ones</li>
		<li> Rehabilitation and counselling</li>
	</ul>
	<hr><h1><b>10. Malaria</b> </h1>
	<p>This fatal disease causes 2.8% of total disease related deaths in India. A survey report has revealed that about 95% of countryâ€™s population resides in malaria endemic areas.</p>
	<h2><b>Causes</b></h2>
	<ul>
		<li> Parasite transmission by mosquitoes</li>
	</ul>
	<h2><b>Prevention</b></h2>
	<ul>
		<li> Avoid travelling to unhygienic places</li>
		<li> Avoid mosquito bite</li>
		<li> Use mosquito repellent cream</li>
	</ul>
</body>
</html>