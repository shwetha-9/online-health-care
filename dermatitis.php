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
<h1><b>What Causes Dermatitis?</b></h1>
<p>The causes of dermatitis vary depending on the type. Some types, like dyshidrotic eczema, neurodermatitis, and nummular dermatitis, may have unknown causes.</p>
<ul>
	<li><b>Contact dermatitis</b><br>Contact dermatitis occurs when you come in direct contact with an irritant or allergen. Common materials that cause allergic reactions include detergents, cosmetics, nickel, poison ivy, and oak.</li>
	<li><b>Eczema</b><br>Eczema is caused by a combination of factors like dry skin, environmental setting, and bacteria on the skin. It’s often genetic, as people with eczema often have a family history of eczema, allergies, or asthma.</li>
	<li><b>Seborrheic dermatitis</b><br>Seborrheic dermatitis is likely caused by a fungus in the oil glands. It tends to get worse in the spring and winter. This type of dermatitis also appears to be genetic for some people.</li>
	<li><b>Stasis dermatitis
</b><br>Stasis dermatitis occurs due to poor circulation in the body, most commonly the lower legs and feet.</li>
	<li><b>Triggers</b><br>The trigger is what causes your skin to have a reaction. It could be a substance, your environment, or something happening in your body.<br>Common triggers for dermatitis that cause symptoms to flare include:</li>
	<ul>
		<li>stress</li>
		<li>hormonal changes</li>
		<li>the environment</li>
		<li>irritating substances</li>
	</ul>
</ul>
<h1><b>How is dermatitis treated?</b></h1>
<p>Treatments for dermatitis depend on the type, severity of symptoms, and the cause. Your skin may clear up on its own after one to three weeks.<br>If it doesn’t, your doctor or dermatologist may recommend:</p>
<ul>
	<li>medications to reduce allergies and itching, like the antihistamine diphenhydramine</li>
	<li>phototherapy, or exposing affected areas to controlled amounts of light</li>
	<li>topical creams with a steroid, like hydrocortisone, to relieve itchiness and inflammation</li>
	<li>creams or lotions for dry skin</li>
	<li>oatmeal baths to relieve itching</li>
</ul>
<p>Antibiotics or antifungal medications are usually given only if an infection has developed. Infections can occur when the skin is broken due to intense scratching.<br>Home care for dermatitis may include applying cool, wet cloths to the skin to reduce itching and discomfort. You can try adding baking soda to a cool bath to help reduce symptoms. If your skin is broken, you can cover the wound with a dressing or bandage to prevent irritation or infection.<br>Dermatitis can sometimes flare up when you’re stressed. Alternative therapies like acupuncture, massage, and yoga can be helpful in reducing stress.<br>Dietary changes, like eliminating foods that trigger a reaction, may help you manage eczema symptoms. In some cases, dietary supplements, like vitamin D and probiotics can help as well.</p>
<h1><b>How is dermatitis prevented?</b></h1>
<p>Awareness is the first step in avoiding dermatitis. The only way to prevent an allergic reaction is to avoid contact with allergens or substances that cause rashes, like poison ivy. But if you have eczema, which isn’t always preventable, your best option is to prevent a flare-up of symptoms.<br>Try to avoid scratching the affected area. Scratching can open or reopen wounds and spread the bacteria to another part of your body.<br>Another way to prevent dry skin is by taking shorter baths, using mild soaps, and using warm instead of hot water. Most people also find relief by moisturizing frequently.<br>The University of Michigan recommends using water-based moisturizers after washing hands and oil-based moisturizers for extremely dry skin.</p>
</body>
</html>