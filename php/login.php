<?php
	$email = $_POST['email'];
	$password = $_POST['password'];
	
	if($email&&$password)
	{
		$connect = mysql_connect("localhost", "root", "") or die ("Coudn't connect to the database!");
		mysql_select_db("electionsurvey") or die ("Coudn't connect to the database!");
		
		if($connect == false)
		{
			echo "reconnect";
		}
		else
		{
			$query = mysql_query("SELECT id FROM users WHERE Email = '$email' AND Password = '$password'");
			$num_rows = mysql_num_rows($query);
			if($num_rows > 0)
				echo $email;
			else
				echo "Failed";
		}
	}
	else
	{
		if($email)
			echo "Missing password";
		else if($password)
			echo "Missing email";
		else
			echo "Missing both";
	}
?>