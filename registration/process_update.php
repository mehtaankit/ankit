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

	$name	    =	$_POST['name'];
	$email 		= 	$_POST['email'];
	$password	= 	$_POST['password'];
	$mobile 	= 	$_POST['mobile'];
	$image 	    =	    $target_file;//$_POST['fileToUpload'];
	$gender     =      $_POST['gender'];
	$class 		=   $_POST['class'];
	$id 		=   $_POST['id'];
	$subject		= 	implode(",",$_POST['subject']);
	//$city		=	$_POST['city'];

	$sql = "UPDATE students SET 
	name = '$name',
	email = '$email',
	mobile = '$mobile',
	image =  '$image',
	gender = '$gender',
	class =  '$class',
	subject = '$subject' WHERE id=$id";
    
	$conn = OpenCon();

	if ($conn->query($sql) === TRUE) {
	 
	 	header("Location: fatch.php");
		//echo "New record created successfully";
	} else {
	echo "Error: " . $sql . "<br>" . $conn->error;
	}

	CloseCon($conn);
	 
}else{
	header("Location: singup.php?mes=d");
}





?>