<?php
	require("db/connect.php");
	if(isset($_POST['submit']))
	{
		$FirstName = $_POST['FName'];
		$LastName = $_POST['LName'];
		$MiddleName = $_POST['MName'];
		$Sex = $_POST['sex'];
		$Age = $_POST['age'];
		$Status = $_POST['status'];
		$Province = $_POST['Province'];
		$City = $_POST['City'];
		$Barangay = $_POST['Barangay'];
		$Email = $_POST['Email'];
		$inputPassword = $_POST['inputPassword'];
		$inputPassword1 = $_POST['inputPassword1'];
		
		$sql="INSERT INTO `users` (`ID`, `FirstName`, `LastName`, `MiddleName`, `Sex`, `Age`, `Status`, `Province`, `City`, `Barangay`, `Email`,`inputPassword`) 
			VALUES (NULL, '$FirstName', '$LastName', '$LastName', '$MiddleName', '$Sex', '$Age', '$Status', '$Province', '$City', '$Barangay','$Email','$inputPassword')";
	
	if ($insert = $database->query($sql)){
		header("Location: emix-adm-member-profile.php");
	}
	else
		echo mysql_error();
	}
	
	
?>