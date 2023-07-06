<?php session_start();
	if (isset($_POST["btnSubmit"]))
	{
		$username = $_POST["txtEmail"];
		$password = $_POST["txtPassword"];
		
		$con = mysqli_connect("localhost","root","","bookworms");
		
		if (!$con)
		{
			die("Sorry!!! We are facing technical issue..");
		}
		
		$sql = "SELECT * FROM `tbluser` WHERE `email`='".$username."' AND `password`='".$password."'";
		
		$result = mysqli_query($con,$sql);
		
		if (mysqli_num_rows($result) > 0)
		{
			$_SESSION["username"] = $username;
			header('Location:myAccount.php');
		}
		else
		{
			header('Location:login.php');
		}
	}
?>
