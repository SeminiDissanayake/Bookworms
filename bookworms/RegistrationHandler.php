<?php session_start();
	if (isset($_POST["btnSignUp"]))
	{
		$name = $_POST["txtName"];
		$username = $_POST["txtEmail"];
		$password = $_POST["txtPassword"];
		$contactnumber = $_POST["txtContactNo"];
		
		$con = mysqli_connect("localhost","root","","bookworms");
		
		if (!$con)
		{
			die("Sorry!!! We are facing technical issue..");
		}
		
		$sql = "INSERT INTO `tbluser` (`email`, `name`, `contactNumber`, `password`) VALUES ('".$username."', '".$name."', '".$contactnumber."', '".$password."');";
		
		
		mysqli_query($con, $sql);
		
		header('Location:login.php');
	}
?>