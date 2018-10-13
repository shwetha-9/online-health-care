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
<title>symptoms</title>
</head>
<body>
<h1><b>What causes back pain?</b></h1>
<p>The most common causes of lower back pain are strain and problems with back structures.</p>
<ul>
	<li><b>Strain:</b>Strained muscles and ligaments often cause back pain. Strain commonly occurs with incorrect lifting of heavy objects and sudden awkward movements. Strain can also result from over-activity. An example is the sore feeling and stiffness that occurs after a few hours of yard work or playing a sport.</li>
	<li><b>Structural problems:</b>Vertebrae are the interlocking bones stacked on top of one another that make up the spine. Disks are areas of tissue that cushion the space between each vertebra. Disk injuries are a fairly common cause of back pain.</li>
<h3>Other causes of back pain</h3>
	<li>narrowing of the spinal canal, or spinal stenosis</li>
	<li>displacement of one vertebral body onto another, called degenerative spondylolisthesis</li>
	<li>loss of nerve function at the lower spinal cord, called cauda equina syndrome (a medical emergency)</li>
	<li>fungal or bacterial infection of the spine, such as Staphylococcus, E. coli, or tuberculosis</li>
	<li>cancer or nonmalignant tumor in the spine</li>
</ul>
<h1><b>Prevention</b></h1>
<p>To avoid back pain, you must reduce excess stresses and strains on your back and ensure your back is strong and supple.</p>
<ul>
	<li><b>Posture:</b>How you sit, stand and lie down can have an important effect on your back. The following tips should help you maintain a good posture.</li>
	<li><b>Standing:</b>Stand upright, with your head facing forward and your back straight. Balance your weight evenly on both feet and keep your legs straight.</li>
	<li><b>Sitting:</b>You should be able sit upright with support in the small of your back. Your knees and hips should be level and your feet should be flat on the floor (use a footstool if necessary). Some people find it useful to use a small cushion or rolled-up towel to support the small of the back.<br>If you use a keyboard, make sure that your forearms are horizontal and your elbows are at right angles.</li>
	<li><b>Driving:</b>Make sure that your lower back is properly supported. Correctly positioning your wing mirrors will prevent you from having to twist around. Foot controls should be squarely in front of your feet. If driving long distances, take regular breaks so that you can stretch your legs.</li>
	<li><b>Sleeping:</b>Your mattress should be firm enough to support your body while supporting the weight of your shoulders and buttocks, keeping your spine straight. If your mattress is too soft, place a firm board – ideally 2cm thick – on top of the base of your bed and under the mattress. Support your head with a pillow, but make sure that your neck is not forced up at a steep angle.</li>
	<li><b>Exercise:</b>Exercise is both an excellent way to prevent back pain and to reduce any back pain you might have. However, if you have chronic back pain (back pain that has lasted for more than 3 months), consult your doctor or physiotherapist before starting any exercise program.<br>Exercises such as walking or swimming strengthen the muscles that support your back without putting any strain on it or subjecting it to a sudden jolt.</li>
	<li><b>Lifting and handling:</b>One of the biggest causes of back injury, especially at work, is lifting or handling objects incorrectly.</li>
</ul>
<h1><b>Home remedies</b></h1>
<p>Ice packs may relieve discomfort and help lessen inflammation in acute phases of back pain. Warm compresses may relieve pain when inflammation has subsided.<br>Exercises to improve posture and strengthen the muscles of the back and abdominal muscles, called the core muscles, are a treatment option that should be strongly considered. This treatment often involves:</p>
<ul>
	<li>improving posture</li>
	<li>using proper lifting techniques</li>
	<li>strengthening core muscles</li>
</ul>
<p>A physical therapist can teach you how to perform these types of exercises at home.</p>
</body>
</html>