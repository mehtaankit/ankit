<?php session_start();?>
<!DOCTYPE html>
<html>
<head>
	<title>Log IN Form</title>
</head>

	

<body>
	<h2><center>LOG IN HERE .</center></h2> 
	<center>
<form action="login_controler.php" enctype="multipart/form-data" method="POST">		
<input type="text" <?php if(isset($_SESSION['emailValue'])) {?> value="<?= $_SESSION['emailValue']?>" <?php unset($_SESSION['emailValue']); }?> placeholder="Enter Username" name="email" ></br>
<?php if(isset($_SESSION['emailError']) && !empty($_SESSION['emailError'])) {?>
	<?= $_SESSION['emailError']?><br/>
<?php unset($_SESSION['emailError']);}?>

 <input type="password" placeholder="Enter Password" name="password"></br></br>
     <button value = "login" name= "login" type="submit">Login</button></br> 
         <?php if(isset($_SESSION['passwordError']) ) {?>
	<?= $_SESSION['passwordError']?><br/>
 </center>
    </form>
