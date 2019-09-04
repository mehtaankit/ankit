
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
include_once 'connection.php';

$id = $_GET['id'] ?? 0;

$sql = "SELECT * FROM students where id = '$id'";

$conn = OpenCon();
$query = $conn->query($sql);
$result = $query->fetch_assoc();
   
?>

<body>
<h1>Update</h1>
    <p>Update User</p>

<form>

Name: <input type="text" placeholder="Enter Name" value="<?= $result['name'] ?>" name="name"></br>
Email: <input type="text" placeholder="Enter Email" value="<?= $result['email'] ?>" name="email"></br>
Password: <input type="text" placeholder="Enter Password" value="<?= $result['password'] ?>"  name="password"></br>
Mobile NO: <input type="text" placeholder="Enter Mobile No" value="<?= $result['mobile'] ?>"  name="mobile"></br>
Image <input type="image"  name="image" value="<?= $result['image'] ?>" ></br>

Gender : <input type="radio" name="gender" value="male" <?php if($result['gender'] == 'male'){echo "checked";}?> >  Male
  <input type="radio" name="gender" value=female <?php if($result['gender'] == 'female'){echo "checked";}?> >  Female
 
   Class : <select name="class"  >
    <option value="10th">10th</option>
    <option value="12th">12th</option>
   </select><br>
  Subject : <br>
   <input type="checkbox" name="subject[]" value="Maths" >Maths<br>
  <input type="checkbox" name="subject[]" value="Science "> Science <br>
  <input type="checkbox" name="subject[]" value="Commerce" checked> Commerce<br>
   

<button value="SignUp" name="submitBtn" type="submit">SignUp</button>
<input type="hidden" name="id" value="<?=$result['id']?>">
<a href="login.php" class="btton">LogIN</a>
</form>
</body>
</html>
<hr>
