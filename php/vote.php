<?php
	$email = $_POST['email'];
	$connect = mysql_connect("localhost", "root", "") or die ("Coudn't connect to the database!");
	mysql_select_db("electionsurvey") or die ("Coudn't connect to the database!");
		
	$query = mysql_query("SELECT id FROM voted WHERE voters_id = '$email'");
	$num_rows = mysql_num_rows($query);
	
	if($num_rows == 0)
	{
		echo "Success";
	}
	else
	{
		echo "Failed";
	}
?>