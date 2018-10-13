<?php
session_start();
if(!isset($_SESSION['email'])){
	header("location:log.php");
}
?>
<!DOCTYPE html>
<html>
<head>
<title>ContactUs</title>
<link href="logo.png" rel="icon" type="image/ico">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">

<!-- jQuery library -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

<!-- Popper JS -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"></script>

<!-- Latest compiled JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script>
<style type="text/css">
body{
background-image:url(http://www.photoplato.com/photoplato/19865-blue-and-white-hd-wallpaper_17334.jpg);
background-repeat: no-repeat;
background-size: cover;

}


h2{
margin-top: 20px;
margin-left: 800px;
color:darkblue;
text-align: center;
font-family: constantia;
}

.hidden{
padding-right:0px;
margin-left: 800px;
height: 80px;
width: 280px;
font-family: constantia;
}

label{
margin-left: 15px;
margin-top: 10px;
color: navy;
}
.form-group{
margin: 15px 15px 15px 15px;
}

.btn{
margin-left: 15px;
margin-bottom: 15px;
color: skyblue;}

</style>
</head>
<body>
<div class="container">
	<h2 class="text text-center">FeedBack Form</h2><br>
	<div class="hidden">
	<form action="contactdb.php" method="post">
	<div class="form-group">
		<label>Name: </label>
		<input type="text" name="user"  id="user" autocomplete="off">
		<span id="username" class="text-danger font-weight-bold" ></span>	
	</div>
	<div class="form-group">
		<label>Email: </label>
		<input type="email" name="email" id="emails" autocomplete="off">
		<span id="emailids" class="text-danger font-weight-bold" ></span>	
	</div>
	<div class="form-group">
		<label>Mobile Number: </label>
		<input type="text" name="mobile" id="mobileNumber" autocomplete="off">
		<span id="mobileno" class="text-danger font-weight-bold" ></span>	
	</div>
	<div class="form-group">
		<label>Message: </label>
         <textarea id="form_message" name="message" placeholder="Message for me" rows="3" required="required" data-error="Please,leave us a message."></textarea> 	
    			 <div class="help-block with-errors"></div>
	</div>
	<input type="submit" name="submit" style="color:darkblue;" value="submit" class="btn">
	
          
	</form>
	</div>
</div>
</body>
</html>