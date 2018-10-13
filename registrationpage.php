<!DOCTYPE html>
<html>
<head>
<title>Registration Form</title>
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
background-image:url(https://images5.alphacoders.com/570/thumb-1920-570618.jpg);
background-repeat: no-repeat;
background-size: cover;

}


h2{
margin-top: 20px;
margin-left: 800px;
color:deeppink;
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
color: maroon;
}
.form-group{
margin: 15px 15px 15px 15px;
}

.btn{
margin-left: 15px;
margin-bottom: 15px;}

</style>
</head>
<body>
<div class="container">
	<h2 class="text text-center">Registration Form</h2><br>
	<div class="hidden">
	<form action="registration.php" onsubmit="return validation()" method="post">
	<div class="form-group">
		<label>Name: </label>
		<input type="text" name="user" class="form-control" id="user" autocomplete="off">
		<span id="username" class="text-danger font-weight-bold" ></span>	
	</div>
	<div class="form-group">
		<label>Email: </label>
		<input type="email" name="email" class="form-control" id="emails" autocomplete="off">
		<span id="emailids" class="text-danger font-weight-bold" ></span>	
	</div>
	<div class="form-group">
		<label>Password: </label>
		<input type="password" name="pass" class="form-control" id="pass" autocomplete="off">
		<span id="passwords" class="text-danger font-weight-bold" ></span>		
	</div>
	<div class="form-group">
		<label>Confirm Password: </label>
		<input type="password" name="conpass" class="form-control" id="conpass" autocomplete="off">
		<span id="confirmpass" class="text-danger font-weight-bold" ></span>		
	</div>
	<div class="form-group">
		<label>Mobile Number: </label>
		<input type="number" name="mobile" class="form-control" id="mobileNumber" autocomplete="off">
		<span id="mobileno" class="text-danger font-weight-bold" ></span>	
	</div>
	<input type="submit" name="submit" value="submit" class="btn btn-success">
	</form></div>
</div>
<script type="text/javascript">
	function validation(){
		var user = document.getElementById('user').value;
		var pass = document.getElementById('pass').value;
		var confirmpass = document.getElementById('conpass').value;
		var mobileNumber = document.getElementById('mobileNumber').value;
		var emails = document.getElementById('emails').value;
		
		if (user=="") {
			document.getElementById('username').innerHTML="**please fill the username feild";
			return false;
		}
		
		if ((user.length<=2) || (user.length>=20)){
			document.getElementById('username').innerHTML="**User lenght must be between 2 to 20.";
			return false;
		}
		
		if (!isNaN(user)){
			document.getElementById('username').innerHTML="**Only Characters are allowed";
			return false;
		}

		if (pass=="") {
			document.getElementById('passwords').innerHTML="**please fill the password feild";
			return false;
		}

		if (pass.length<8){
			document.getElementById('passwords').innerHTML="**Password lenght atleast 8 characters.";
			return false;
		}
		
		if (confirmpass=="") {
			document.getElementById('confirmpass').innerHTML="**please fill the confirmpassword feild";
			return false;
		}
		
		if (confirmpass.length<8){
			document.getElementById('confirmpass').innerHTML="**ConfirmPassword lenght atleast 8 characters.";
			return false;
		}

		if (confirmpass!=pass) {
			document.getElementById('confirmpass').innerHTML="**Password Not Matched";
			return false;
		}
						
		
		if (mobileNumber=="") {
			document.getElementById('mobileno').innerHTML="**please fill the Mobile Number feild";
			return false;
		}
		
		if (isNaN(mobileNumber)) {
			document.getElementById('mobileno').innerHTML="**Only Digits Are Allowed";
			return false;
		}
		
		if (mobileNumber.length!=10) {
			document.getElementById('mobileno').innerHTML="**Please fill correct Mobile Number";
			return false;
		}
		
		if (emails=="") {	
			document.getElementById('emailids').innerHTML="**please fill the Email ID feild";
			return false;
		}
		
		if (emails.indexOf('@')<=0) {
			document.getElementById('emailids').innerHTML="**Invalid Email ID";
			return false;
		}

		if ((emails.charAt(email.length-4)!='.') && (emails.charAt(emails.length-3)!='.')) {
			document.getElementById('emailids').innerHTML="**Invalid Email ID";
			return false;
		}



}	
	
</script>
</body>
</html>