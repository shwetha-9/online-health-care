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
<h1><b>What causes a bleeding disorder?</b></h1>
<p>Bleeding disorders often develop when the blood can’t clot properly. For blood to clot, your body needs blood proteins called clotting factors and blood cells called platelets. Normally, platelets clump together to form a plug at the site of a damaged or injured blood vessel. The clotting factors then come together to form a fibrin clot. This keeps the platelets in place and prevents blood from flowing out of the blood vessel.<br>In people with bleeding disorders, however, the clotting factors or platelets don’t work the way they should or are in short supply. When the blood doesn’t clot, excessive or prolonged bleeding can occur. It can also lead to spontaneous or sudden bleeding in the muscles, joints, or other parts of the body.<br>The majority of bleeding disorders are inherited, which means they’re passed from a parent to their child. However, some disorders may develop as a result of other medical conditions, such as liver disease.<br>Bleeding disorders may also be caused by:</p>
<ul>
	<li>a low red blood cell count</li>
	<li>a vitamin K deficiency</li>
	<li>side effects from certain medications</li>
</ul>
<h1><b>How are bleeding disorders treated?</b></h1>
<p>Treatment options vary depending on the type of bleeding disorder and its severity. Though treatments can’t cure bleeding disorders, they can help relieve the symptoms associated with certain disorders.</p>
<ul>
	<li><b>Iron supplementation</b>Your doctor may prescribe iron supplements to replenish the amount of iron in your body if you have significant blood loss. A low iron level can result in iron deficiency anemia. This condition can make you feel weak, tired, and dizzy. You may need a blood transfusion if symptoms don’t improve with iron supplementation.</li>
	<li><b>Blood transfusion</b>A blood transfusion replaces any lost blood with blood taken from a donor. The donor blood has to match your blood type to prevent complications. This procedure can only be done in the hospital.</li>
	<li><b>Other treatments</b><br>Some bleeding disorders may be treated with topical products or nasal sprays. Other disorders, including hemophilia, can be treated with factor replacement therapy. This involves injecting clotting factor concentrates into your bloodstream. These injections can prevent or control excessive bleeding.<br>You can also get fresh frozen plasma transfusions if you lack certain clotting factors. Fresh frozen plasma contains factors V and VIII, which are two important proteins that help with blood clotting. These transfusions must be done in a hospital.</li>
</ul>
<h1><b>Prevention</b></h1>
<ul>
	<li>Always treat your bleeding quickly.  People with hemophilia should take factor right away.</li>
	<li>People with hemophilia should take factor before doing an activity likely to cause a bleed.</li>
	<li>Exercise at least three times a week.  Follow the advice of your joint doctor (orthopedist) and physical therapist (PT).</li>
	<li>Brush and floss your teeth at least once a day.</li>
	<li>Eat regular, healthy meals.</li>
	<li>Try to stay near your ideal body weight.</li>
	<li>Get a good night's sleep.</li>
	<li>Always wear your seat belt.</li>
	<li>Take all the shots (vaccines) that you need and keep them up-to-date.</li>
	<li>Check with your HTC before you start taking a new medicine or any herbal remedies.</li>
	<li>Keep treatment calendars that show the day and reason you treated, the name of the medication, the dosage, and, for factor concentrate, the lot number.  Send copies to your HTC.</li>
	<li>Reorder factor or other medication before you run out.</li>
	<li>If you get factor concentrate in the emergency room, make sure the hospital always has some.</li>
	<li>Always wear a MedicAlert® tag.</li>
	<li>Practice safer sex.</li>
	<li>Clean up blood with bleach.</li>
	<li>Try to have as normal a life as possible.</li>
	<li>Know what your health insurance covers.</li>
	<li>Get to know other families with bleeding disorders.</li>

</ul>
</body>
</html>