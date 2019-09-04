<?php
include_once 'connection.php';
if(isset($_POST['submitBtn']) && $_POST['submitBtn'] == 'SignUp')
{	
	$target_file = "";
	if(!empty($_FILES))
	{
	 $target_dir = "uploads/";
	 $target_file = $target_dir . basename($_FILES["fileToUpload"]["name"]);
	 move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file);
	} 

	$name	=	$_POST['name'];
	$email 		= 	$_POST['email'];
	$password	= 	$_POST['password'];
	$mobile 	= 	$_POST['mobile'];
	$image 	=	$target_file;//$_POST['fileToUpload'];
	$gender 	= 	$_POST['gender'];
	$class 		=   $_POST['class'];
	$subject 		= 	implode(",",$_POST['subject']);
	//$city		=	$_POST['city'];

	$sql = "INSERT INTO students (name,email,password,mobile,image,gender,class,subject)
	    VALUES ('$name','$email','$password','$mobile','$image','$gender','$class','$subject')";


	$conn = OpenCon();

	if ($conn->query($sql) === TRUE) {
	 
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