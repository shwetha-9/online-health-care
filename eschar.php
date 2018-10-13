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
<h1><b>What Causes Eschar?</b></h1>
<p>Eschar is caused by burning or cauterizing — a method wherein you apply chemicals or heat to destroy tissue, stop bleeding, or prevent the spread of infection. It also occurs in pressure wounds such as bedsores.<br>Factors that increase your risk for eschar include:</p>
<ul>
	<li>immobility</li>
	<li>advancing age</li>
	<li>paralysis</li>
	<li>poor health</li>
	<li>recovery post-surgery</li>
	<li>coma</li>
	<li>smoking</li>
	<li>very dry or moist skin</li>
</ul>
<h1><b>How Is Eschar Prevented?</b></h1>
<p>Prevention is vital to keeping eschar from occurring. Wounds are significantly easier to prevent than treat.<br>Constantly repositioning a patient who is confined to a bed or wheelchair is important to relieve stress and pressure to areas prone to skin breakdown. This may involve switching positions every 15 minutes to one hour. Cushions, specialized mattresses, and special repositioning devices can help.<br>
Keeping skin clean and dry is vital to preventing wounds. If you can’t control your urine or stool, prompt cleaning is necessary to keep skin breakdown from occurring.<br>
Eating a healthy diet high in protein, vitamin C, and zinc is vital to encourage skin healing. Drinking enough fluids is needed to prevent dry skin.<br>Stopping smoking and keeping active also can prevent pressure sores by keeping your body as healthy as possible.</p>
<h1><b>How Is Eschar Treated?</b></h1>
<p>Treatment for wounds with eschar depends upon your symptoms. For example, if the area around your wound is dry, isn’t peeling off, and doesn’t have redness around it, your doctor won’t recommend removing the eschar, as it’s considered the body’s natural covering.<br>

If the eschar is peeling or oozing or has symptoms of potential infection, your doctor may recommend a wound treatment method known as debridement to remove dead tissues.<br>

There are different methods of debridement, including:</p>
<ul>
	<li>autolytic debridement, which involves applying an enzyme-coated dressing that breaks down dead tissue</li>
	<li>enzymatic debridement, which means to apply chemicals that remove dead skin tissue</li>
	<li>mechanical debridement, which involves using special tools to remove dead skin</li>
	<li>surgical debridement to cut away dead tissue</li>
</ul>
<p>In addition to treating the wound, your doctor will try to make you as comfortable as possible. This includes prescribing pain relieving medications and medications to relieve muscle spasms, which can affect wound healing. Antibiotics may be used to prevent infection. You’ll want to eat a healthy diet high in protein, which promotes skin healing.<br>

In severe instances, surgery may be necessary to remove any infection and reconstruct the skin around the wound.</p>
</body>
</html>