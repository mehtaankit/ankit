<?php 
include("connection.php")
/*if(isset($_POST['submit']) && $_POST['submit'] == 'SignUp')*/
/*$name  =   $_POST['name'];
$email =   $_POST['email'];
$username = $_POST['username'];
$password = $_POST['password'];

$sql = "INSERT INTO user1 VALUES ('$name', '$email', '$username','$password')";
mysqli_query($conn, $sql);*/

$sql = "INSERT INTO user1 VALUES ('ankit','mehtaankit@','mehtaankit','adeep')"

mysqli_query($conn, $sql);

 ?>