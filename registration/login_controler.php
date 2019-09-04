<?php 
session_start();
include_once 'connection.php';

if(isset($_POST['login']) && $_POST['login'] == 'login')
{

	$email 		= 	$_POST['email'];
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
	}


}

?>
