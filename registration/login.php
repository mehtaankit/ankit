<!DOCTYPE html>
<html>
<head>
	<title>Log IN Form</title>
</head>
<?php
$sucess = $_REQUEST['mes'] ?? '';
if(!empty($sucess) && $sucess == 'signup_s')
{
	echo "You have successfully Signup, Please login with your credential";
}
else if(!empty($sucess) && $sucess == 'incorret')
{
	echo "Incorrect userid and password";	
}
	
?>
<body>
	<h2><center>LOG IN HERE .</center></h2> 
	<center>
<form action="login_controler.php" enctype="multipart/form-data" method="POST">		
<input type="text" placeholder="Enter Username" name="email" ></br>
 <input type="password" placeholder="Enter Password" name="password"></br></br>
     <button value = "login" name= "login" type="submit">Login</button></br> 
     <a href="singup.php" class="btton">SingnUp</a><br>
     <a href="forget.php" class="btton">ForgetID</a>
 </center>
    </form>
