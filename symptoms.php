<?php
session_start();
if(!isset($_SESSION['email'])){
	header("location:log.php");
}
?>
<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<title>Symptoms List</title>
<link href="logo.png" rel="icon" type="image/ico">
<h1>Choose Symptoms</h1>
<style>
h1{
color: navy;font-size: 40px;
text-shadow: 2px 2px 6px;
font-size:50px;
}
 body{
 font-size:30px;
 background-image:url(https://wallpaper.wiki/wp-content/uploads/2017/06/Glitter-blue-light-wallpaper-HD.jpg);


 }
 .main :hover{
 background-color: pink;
 }
 
 
</style>
</head>
<body>
<div class="main">
<select onchange="location = this.value;">
  <option value="default">A</option>
  <option value="a1.php">abdominal tenderness</option>
  <option value="a2.php">acne</option>
  <option value="a3.php">aggressiveness</option>
  <option value="a4.php">anemia</option>
  <option value="a5.php">anxious mood</option>
  <option value="a6.php">arm pain</option>
  <option value="a7.php">ataxia</option>
  <option value="a8.php">aversion to food or drink</option>
</select>
<select onchange="location = this.value;">
  <option value="default">B</option>
  <option value="b1.php">backache</option>
  <option value="b2.php">bee sting</option>
  <option value="b3.php">blackhead</option>
  <option value="b4.php">blanching of skin</option>
  <option value="b5.php">bleeds easily</option>
  <option value="b6.php">blood-tinged sputum</option>
  <option value="b7.php">bowed legs</option>
  <option value="b8.php">breast nodule</option>
  <option value="b9.php">bruising around the eyes</option>
  </select>

  <select onchange="location = this.value;">
    <option value="default">C</option>
    <option value="c1.php">cataract</option>
    <option value="c2.php">chest pain</option>
    <option value="c3.php">catatonic state</option>
    <option value="c4.php">chills</option>
    <option value="c5.php">choking</option>
    <option value="c6.php">chronic pain</option>
    <option value="c7.php">claw hand</option>
    <option value="c8.php">cleft palate and lip</option>
    <option value="c9.php">coughing</option>
  </select>
  <select onchange="location = this.value;">
  <option value="default">D</option>
  <option value="deprassion.php">depression</option>
  <option value="dermatitis.php">dermatitis</option>
  <option value="dizzystand">dizzy when standing up</option>
  <option value="dryhair.php">dry hair</option>
  <option value="dryskin.php">dry skin</option>
  </select> 
  <select onchange="location = this.value;">
  <option value="default">E</option>
  <option value="erection.php">erection too short-lived</option>
  <option value="eructation.php">eructation</option>
  <option value="eschar.php">eschar</option>
  </select>
  <hr>
  <select onchange="location = this.value;">
 	<option value="default">F</option>
   <option value="feelshot.php">feels hot to touch</option>
   <option value="footclaw.php">feet clawing</option>
   <option value="fingerclubbing.php">finger clubbing</option>
  </select>
  <select onchange="location = this.value;">
   <option value="default">G</option>
   <option value="gaitabnormality.php">gait abnormality</option>
   <option value="goiter.php"> goiter</option>
   <option value="growthretardation.php">growth retardation</option>
  </select>
  <select onchange="location = this.value;">
   <option value="default">H</option>
   <option value="headache.php">headache</option>
   <option value="hearingloss.php">hearing loss</option>
   <option value="highbloodpressure.php">high blood pressure</option>
  </select>
  <select onchange="location = this.value;">
   <option value="default">I</option>
   <option value="i1.php">increased hunger</option>
   <option value="i2.php">increased skin pigmentation</option>
   <option value="i3.php">increased tendency to bruise</option>
   <option value="i4.php">indigestion</option>
  </select>
  <select onchange="location = this.value;">
   <option value="default">J</option>
   <option value="j1.php">jaundice</option>
   <option value="j2.php">joint pain</option>
   <option value="j3.php">joints warm</option>
  </select>
  <hr>
  <select onchange="location = this.value;">
   <option value="default">K</option>
   <option value="k1.php">kyphosis deformity of spine</option>
  </select>
  <select onchange="location = this.value;">
   <option value="default">L</option>
   <option value="l1.php">lazy eye</option>
   <option value="l2.php">loss of hair</option>
   <option value="l3.php">low blood pressure</option>
  </select>
  <select onchange="location = this.value;">
   <option value="default">M</option>
   <option value="m1.php">memory loss</option>
   <option value="m2.php">mouth ulcers</option>
   <option value="m3.php">muscle cramp</option>
  </select>
  <select onchange="location = this.value;">
   <option value="default">N</option>
   <option value="n1.php">Nazal Irritation</option>
   <option value="n2.php">not feeling well</option>
   <option value="n3.php">numbness</option>
  </select>
  <select onchange="location = this.value;">
   <option value="default">O</option>
   <option value="o1.php">Ocular Pain</option>
   <option value="o2.php">Olfactory Impairment</option>
   <option value="o3.php">Otorrhea</option>
  </select>
  <hr>
  <select onchange="location = this.value;">
   <option value="default">P</option>
   <option value="p1.php">pain in neck</option>
   <option value="p2.php">Painfull Menstruation</option>
   <option value="p3.php">pale stools</option>
  </select>
  <select onchange="location = this.value;">
   <option value="default">Q</option>
   <option value="q1.php">queasy in the mornings</option>
  </select>
  <select onchange="location = this.value;">
   <option value="default">R</option>
   <option value="r1.php">respiratory obstruction</option>
   <option value="r2.php">rough voice</option>
  </select>
  <select onchange="location = this.value;">
   <option value="default">S</option>
   <option value="s1.php">scalp itchy</option>
   <option value="s2.php">shoulder pain</option>
   <option value="s3.php">sleeplessness</option>
   <option value="s4.php">sticky skin</option>
   <option value="s5.php">sun sensitivity</option>
  </select>
  <select onchange="location = this.value;">
   <option value="default">T</option>
   <option value="t1.php">tense stomach</option>
   <option value="t2.php">toothache</option>  
  </select>
  <select onchange="location = this.value;">
   <option value="default">U</option>
   <option value="u1.php">unconscious</option>  
   <option value="u2.php">urinary hesitation</option>
  </select>
  <hr>
  <select onchange="location = this.value;">
   <option value="default">V</option>
   <option value="v1.php">vaginal discharge</option>
   <option value="v2.php">vomiting</option>
  </select>
  <select onchange="location = this.value;">
   <option value="default">W</option>
   <option value="w1.php">weight increase</option>
   <option value="w2.php">wrist pain</option>
  </select>
  <select onchange="location = this.value;">
   <option value="default">X</option>
   <option value="x1.php">xanthoma</option>
   <option value="x2.php">xerostomia</option>
  </select>
  <select onchange="location = this.value;">
   <option value="default">Y</option>
   <option value="y1.php">yawns too much</option>
   <option value="y2.php">yellow eyes</option>
  </select>
  </div> 
</body>
</html>
