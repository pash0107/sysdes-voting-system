<?php
	$email = $_POST['email'];
	$connect = mysql_connect("localhost", "root", "") or die ("Coudn't connect to the database!");
	mysql_select_db("electionsurvey") or die ("Coudn't connect to the database!");
		
	if($connect == false)
	{
		echo "reconnect";
	}
	else
	{
		$details_create = "";
		$fn = mysql_query("SELECT `FirstName` FROM users WHERE `Email` = '$email'");
		while($row = mysql_fetch_array($fn))
		{
			$details_create .= $row['FirstName'] . ",";
		}
		$ln = mysql_query("SELECT `LastName` FROM users WHERE `Email` = '$email'");
		while($row = mysql_fetch_array($ln))
		{
			$details_create .= $row['LastName'] . ",";
		}
		$mn = mysql_query("SELECT `MiddleName` FROM users WHERE `Email` = '$email'");
		while($row = mysql_fetch_array($mn))
		{
			$details_create .= $row['MiddleName'] . ",";
		}
		$sex = mysql_query("SELECT `Sex` FROM users WHERE `Email` = '$email'");
		while($row = mysql_fetch_array($sex))
		{
			$details_create .= $row['Sex'] . ",";
		}
		$age = mysql_query("SELECT `Age` FROM users WHERE `Email` = '$email'");
		while($row = mysql_fetch_array($age))
		{
			$details_create .= $row['Age'] . ",";
		}
		$stat = mysql_query("SELECT `Status` FROM users WHERE `Email` = '$email'");
		while($row = mysql_fetch_array($stat))
		{
			$details_create .= $row['Status'] . ",";
		}
		$place = "";
		$city = mysql_query("SELECT `City` FROM users WHERE `Email` = '$email'");
		while($row = mysql_fetch_array($city))
		{
			$details_create .= $row['City'] . ",";
			$place .= $row['City'] . ", ";
		}
		$prov = mysql_query("SELECT `Province` FROM users WHERE `Email` = '$email'");
		while($row = mysql_fetch_array($prov))
		{
			$details_create .= $row['Province'] . ",";
			$place .= $row['Province'];
		}
		$barang = mysql_query("SELECT `Barangay` FROM users WHERE `Email` = '$email'");
		while($row = mysql_fetch_array($barang))
		{
			$details_create .= $row['Barangay'] . ",";
		}
		$dist = mysql_query("SELECT `district` FROM places WHERE name = '$place'");
		while($row = mysql_fetch_array($dist))
		{
			$details_create .= $row['district'];
		}
		echo $details_create;
	}
?>