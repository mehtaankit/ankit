<?php 
include("connection.php");

$id = $_GET['id'];
$sql = "DELETE FROM students WHERE id=$id";
$conn = OpenCon();
$result = $conn->query($sql);
header("Location:fatch.php"); 
?>