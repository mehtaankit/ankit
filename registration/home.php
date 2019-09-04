<?php
session_start();
if(!isset($_SESSION['userdata']))
{
	header("Location: login.php");
}
$userdata = $_SESSION['userdata'];
$h ="<b>Hey !! </b>".$userdata['name'];
echo "<center>$h </center>";
echo "</br>";
?>

<?php include_once'menu.php'?>