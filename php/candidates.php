<?php
	$email = $_POST['email'];
	$district = $_POST['district'];
	$connect = mysql_connect("localhost", "root", "") or die ("Coudn't connect to the database!");
	mysql_select_db("electionsurvey") or die ("Coudn't connect to the database!");
	
	
	if($connect == false)
	{
		echo "reconnect";
	}
	else
	{
		$result = "";
		$rep_candid = mysql_query("SELECT a.name FROM representative a, provinces b, users c WHERE c.Email = '$email' AND b.name = c.Province AND b.id = a.province_id");
		$rep_create = "";
		while($row = mysql_fetch_array($rep_candid))
		{
			$rep_create .= $row['name'] . ",";
		}
		$result .= $rep_create . '&';
		
		$gov_candid = mysql_query("SELECT a.name FROM governors a, provinces b, users c WHERE c.Email = '$email' AND b.name = c.Province AND b.id = a.province_id");
		$gov_create = "";
		while($row = mysql_fetch_array($gov_candid))
		{
			$gov_create .= $row['name'] . ",";
		}
		$result .= $gov_create . '&';
		
		$vgov_candid = mysql_query("SELECT a.name FROM vice_gov a, provinces b, users c WHERE c.Email = '$email' AND b.name = c.Province AND b.id = a.province_id");
		$vgov_create = "";
		while($row = mysql_fetch_array($vgov_candid))
		{
			$vgov_create .= $row['name'] . ",";
		}
		$result .= $vgov_create . '&';
		
		$board_candid = mysql_query("SELECT name FROM boardmember WHERE district = '$district'");
		$board_create = "";
		while($row = mysql_fetch_array($board_candid))
		{
			$board_create .= $row['name'] . ",";
		}
		$result .= $board_create . '&';
		
		$mayor_city = mysql_query("SELECT Province, City FROM users WHERE Email = '$email'");
		$mayor_row = mysql_fetch_array($mayor_city);
		$my_city = $mayor_row['City'] . ', ' . $mayor_row['Province'];
		$city_id1 = mysql_query("SELECT id FROM places WHERE name = '$my_city'");
		$city_id2 = mysql_fetch_array($city_id1);
		$city_id = $city_id2['id'];
		$mayor_candid = mysql_query("SELECT name FROM mayors WHERE city_id = '$city_id'");
		$mayor_create = "";
		while($row = mysql_fetch_array($mayor_candid))
		{
			$mayor_create .= $row['name'] . ",";
		}
		$result .= $mayor_create . '&';
		$viceMayor_candid = mysql_query("SELECT name FROM vice_mayors WHERE city_id = '$city_id'");
		$viceMayor_create = "";
		while($row = mysql_fetch_array($viceMayor_candid))
		{
			$viceMayor_create .= $row['name'] . ",";
		}
		$result .= $viceMayor_create . '&';
		$councillor_candid = mysql_query("SELECT name FROM councillor WHERE city_id = '$city_id'");
		$councillor_create = "";
		while($row = mysql_fetch_array($councillor_candid))
		{
			$councillor_create .= $row['name'] . ",";
		}
		$result .= $councillor_create;
		echo utf8_decode($result);
	}
?>