
<!DOCTYPE html>
<html>
<style>
input[type=text], select {
  width: 100%;
  padding: 12px 20px;
  margin: 8px 0;
  display: inline-block;
  border: 1px solid #ccc;
  border-radius: 4px;
  box-sizing: border-box;
}
</style>
<head>
  <title>Sign Up Form</title>
</head>

<?php
$sucess = $_REQUEST['mes'] ?? '';
if(!empty($sucess) && $sucess == 'd')
{
  echo "Direct controller access not allowed";
}
?>

<body>
<h1>Sign Up</h1>
    <p>Please fill in this form to create an account.</p>

<form action="process.php" enctype="multipart/form-data" method="POST">

Name: <input type="text" placeholder="Enter Name" name="name"></br>
Email: <input type="text" placeholder="Enter Email" name="email"></br>
Password: <input type="text" placeholder="Enter Password" name="password"></br>
Mobile NO: <input type="text" placeholder="Enter Mobile No" name="mobile"></br>
Image <input type="file"  name="image"></br>

Gender : <input type="radio" name="gender" value="male"> Male
  <input type="radio" name="gender" value="female"> Female
  <input type="radio" name="gender" value="other"> Other<br>
   Class : <select name="class">
    <option value="10th">10th</option>
    <option value="12th">12th</option>
   </select><br>
  Subject : <br>
   <input type="checkbox" name="subject[]" value="Maths">Maths<br>
  <input type="checkbox" name="subject[]" value="Science"> Science <br>
  <input type="checkbox" name="subject[]" value="Commerce" checked> Commerce<br>
   

<button value="SignUp" name="submitBtn" type="submit">SignUp</button>
<a href="login.php" class="btton">LogIN</a>
</form>
</body>
</html>
<hr>
