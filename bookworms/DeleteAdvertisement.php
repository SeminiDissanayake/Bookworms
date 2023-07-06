<?php session_start();
	$con = mysqli_connect("localhost","root","","bookworms");
	if (!$con)
		{
			die("Sorry!!! We are facing technical issue..");
		}
	$sql = "DELETE FROM `tbladvertisement` WHERE `tbladvertisement`.`advertisementID` = ".$_GET["id"];

	if (mysqli_query($con, $sql))
	{
		header('Location:ViewMyAdvertisements.php');
	}
?>