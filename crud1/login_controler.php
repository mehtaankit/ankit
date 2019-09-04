<?php 
session_start();
//include_once 'connection.php';

if(isset($_POST['login']) && $_POST['login'] == 'login')
{
	$flag = false;

	$email = $_POST['email'];
	if(empty($email))
	{
     $_SESSION['emailError'] = "Please fill Email ID";
     $flag = true;
    }
else if(!empty($email))
	{
		if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {

		 $_SESSION['emailError'] =  "Invalid email format"; 
		 $_SESSION['emailValue'] =  $email; 
		 $flag = true;
		}
      
    }
    $flag =  false;
$password = $_POST['password']
if (empty($password)) {
	$_SESSION['passwordError'] = "Please fill Password"
}


    if($flag == true)
    {
    	header("Location: login.php");	
    }
	/*$email 		= 	$_POST['email'];
	$password	= 	$_POST['password'];
	 $sql = "SELECT * FROM students where email = '$email' and password = '$password'";

	$conn = OpenCon();
	$query = $conn->query($sql);
	if($query->num_rows > 0)
	{
		$result = $query->fetch_assoc();
		$_SESSION['userdata'] = $result;
		header("Location: home.php");
	}
	else{
	header("Location: login.php?mes=incorret");
	}*/


}

?>
