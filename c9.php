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
<h1><b>What Causes Cough?</b></h1>
<p>A cough can be caused by several conditions, both temporary and permanent.</p>
<ul>
	<li><b>Clearing the throat:</b>A cough is a standard way of clearing the throat. When your airways become clogged with mucus or foreign particles such as smoke or dust, a cough is a reflex reaction that attempts to clear the particles and make breathing easier.<br>Usually, this type of coughing is relatively infrequent, but coughing will increase with exposure to irritants such as smoke.</li>
	<li><b>Viruses and bacteria:</b>The most common cause of a cough is a respiratory tract infection, such as a cold or flu. Respiratory tract infections are usually caused by a virus and may last from a few days to a week. Infections caused by the flu may take a little longer to clear up and may sometimes require antibiotics.</li>
	<li><b>Smoking:</b>Smoking is another common cause of coughing. A cough caused by smoking is almost always a chronic cough with a distinctive sound. It’s often known as “smoker’s cough.”</li>
	<li><b>Asthma:</b>A common cause of coughing in young children is asthma. Typically, asthmatic coughing involves wheezing, making it easy to identify. Asthma exacerbations should receive treatment using an inhaler. It’s possible for children to grow out of asthma as they get older.</li>
	<li><b>Other conditions:</b><br>Other conditions that may cause a cough include:</li>
	<ul>
		<li>damage to the vocal cords</li>
		<li>postnasal drip</li>
		<li>bacterial infections such as pneumonia, whooping cough, and croup</li>
		<li>serious conditions such as pulmonary embolism and heart failure </li>
	</ul>
	<p>Another common condition that can cause a chronic cough is gastroesophageal reflux disease (GERD). In this condition, stomach contents flow back into the esophagus. This backflow stimulates a reflex in the trachea, causing the person to cough.</p>
</ul>
<h1><b>prevention</b></h1>
<p>While infrequent coughing is necessary to clear the airways, there are ways you can prevent catching other coughs.</p>
<ul>
	<li><b>Quit smoking:</b>Smoking is a common contributor to a chronic cough. It can be very difficult to cure a “smoker’s cough.” There are a wide variety of methods available to help you stop smoking, from gadgets such as electronic cigarettes to advice groups and support networks. After you stop smoking, you will be much less likely to catch colds or suffer from a chronic cough.</li>
	<li><b>Dietary changes:</b>A study in the American Journal of Respiratory and Critical Care Medicine found that people who eat diets high in fruit, fiber, and flavonoids are less likely to suffer from chronic coughs. If you need help adjusting your diet, your doctor may be able to advise you or refer you to a dietitian.</li>
	<li><b>Medical conditions:</b>It’s advisable to stay away from anyone suffering from contagious illnesses, such as bronchitis, to avoid coming into contact with germs. You should wash your hands frequently, and you shouldn’t share cutlery, towels, or pillows.<br>If you have existing medical conditions that increase your chances of developing a cough, such as GERD or asthma, consult your doctor about different management strategies. Once the condition is correctly managed, you may find that your cough disappears, or it may become much less frequent.</li>
</ul>
<h1><b>How is a cough treated?</b></h1>
<ul>
	<li>Keep hydrated by drinking plenty of water.</li>
	<li>Elevate your head with extra pillows when sleeping.</li>
	<li>Use cough drops to soothe your throat.</li>
	<li>Gargle hot salt water regularly to remove mucus and soothe your throat.</li>
	<li>Avoid irritants, including smoke and dust.</li>
	<li>Add honey or ginger to hot tea to relieve your cough and clear your airway.</li>
	<li>Use decongestant sprays to unblock your nose and ease breathing.</li>
</ul>
</body>
</html>