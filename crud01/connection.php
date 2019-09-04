<?php 
/*
function OpenCon()

{
*/	$dbhost = "localhost";
	$dbuser = "root";
	$dbpass = "";
	$db = "php";

	$conn = mysqli_connect($dbhost,$dbuser,$dbpass,$db) /*or die("Connection Failed: %s \n". $conn-> error)*/;
/*
	return $conn;
}

function CloseCon($conn)
{
 $conn -> close();
 }*/
 if ($conn) {
 	echo "connection is OK";
 }else{
 	die("Connection is faild".mysqli_connect_error());
 }

 ?>
