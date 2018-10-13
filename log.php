<!DOCTYPE html>
<link href="logo.png" rel="icon" type="image/ico">
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>HealthCare</title>
   <style>
        body{
        
         font-family: Arial, sans-serif;
          background-size:cover;
          background-image:url(http://getwallpapers.com/wallpaper/full/4/6/d/635732.jpg);
          }
            .ab b{
        font-size: 70px;
        color:white;
        font-style:oblique;
        text-align:center;
        margin:250px; 
        margin-left:240px; 
        margin-right:240px;  
        }
        
        .form-div{ 
        margin-left:500px;
        margin-bottom: 150px;
        margin-top:100px;
        border: 2px solid blue;
        width: 300px;
        height: 300px;
        text-align: center;
        border-radius:15px;
       

        
     }
        .form-div h2{
        color:whitesmoke;
        }
        input[type='text'],input[type='password']{
        height:25px;
        text-align:center;
        border:2px solid blue;
        margin:5px;
        font-size:18px;
        padding:10px 10px;
        width:240px;
        border-radius:15px;
         }
         input[type='text']:focus,
         input[type='password']:focus{
         outline:none;
         background-color:lightskyblue;
         }
         input[type='submit']{
         background-color:lightblue;
         color:blue;
         border:none;
         font-size:18px;
         padding:8px 40px;
         border-radius:50px;
         margin:5px 0 10px;
         }
          input[type='button']{
         background-color:lightblue;
         color:blue;
         border:none;
         font-size:18px;
         padding:8px 40px;
         border-radius:50px;
         margin:5px 0 10px;
         }
         input[type='submit']:hover{
         opacity:0.8;
         cursor:pointer;
         box-shadow:0 0 10px lightblue;
         }
          input[type='button']:hover{
         opacity:0.8;
         cursor:pointer;
         box-shadow:0 0 10px lightblue;
         }
         
    </style>
</head>
<body>
<div class="ab">

	<header>
			<b>Welcome to HealthCare</b>
	</header>

</div>

    <!-- Login Form -->
    <div class="form-div">
        <h2>Login Here</h2>
        <form action="logdb.php" method="post">
            <input type="text" name="email" placeholder="Email"><br>
            <input type="password" name="password" placeholder="Password"><br>
            <input type="submit" value="Login"><br>
            <a href="registrationpage.php"><input type="button" value="Registrtion"></a>
        </form>
    </div>

</body>
</html>