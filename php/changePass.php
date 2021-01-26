<?php
	$currPass = $_POST['currPass'];
	$newPass = $_POST['newPass'];
	$confPass = $_POST['confPass'];
	$email = $_POST['email'];
	
	if($currPass && $newPass && $confPass && $email)
	{
		$connect = mysql_connect("localhost", "root", "") or die("Couln't find the server!");
		mysql_select_db("electionsurvey") or die("Could't find the database!");
		
		if($newPass == $confPass)
		{
			$query = mysql_query("SELECT * FROM users WHERE Password = '$currPass' AND Email='$email'");
			$num_rows = mysql_num_rows($query);
			if($num_rows > 0)
			{
				$query = mysql_query("UPDATE users SET Password = '$newPass',ConfirmPassword='$confPass' WHERE Email='$email'");
				echo "success";
			}
			else
			{
				echo "wrongDetail";
			}
		}
		else
		{
			echo "notSame";
		}
	}
	else
	{
		echo "reconnect";
	}
	
?>