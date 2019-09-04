<?php include_once "config.php"; ///include and requred ?> 

<?php 
if(isset($_POST['submit']) && $_POST['submit'] == 'Register')

 {
  $fullname= $_POST['fname'];
  $email= $_POST['email'];
  $username= $_POST['username'];
  $password= md5($_POST['password']);

  $query = "INSERT INTO user(fname,email,username,password) VALUES ('$fullname','$email','$username','$password')";
  $conn = OpenCon();

	if ($conn->query($query) === TRUE) {
	 
	 	header("Location: login.php?mes=signup_s");
		//echo "New record created successfully";
	} else {
	echo "Error: " . $sql . "<br>" . $conn->error;
	}

	CloseCon($conn);
	 
}else{
	header("Location: singup.php?mes=d");
}
  


?>