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
		$rep_candid = mysql_query("SELECT a.name FROM representative a, provinces b, users c WHERE c.Email = '$email' AND b.name = c.Province AND b.id = a.province_id");
		$rep_create = "";
		while($row = mysql_fetch_array($rep_candid))
		{
			$rep_create .= $row['name'] . ",";
		}
		$result = $rep_create;
		echo utf8_decode($result);
		/*
		$gov_candid = mysql_query("SELECT a.name FROM governors a, provinces b, users c WHERE c.Email = '$email' AND b.name = c.Province AND b.id = a.province_id");
		$gov_create = "";
		while($row = mysql_fetch_array($gov_candid))
		{
			$gov_create .= $row['name'] . ",";
		}
		$result = $gov_create;
		echo utf8_decode($result);
		
		$vgov_candid = mysql_query("SELECT a.name FROM vice_gov a, provinces b, users c WHERE c.Email = '$email' AND b.name = c.Province AND b.id = a.province_id");
		$vgov_create = "";
		while($row = mysql_fetch_array($vgov_candid))
		{
			$vgov_create .= $row['name'] . ",";
		}
		$result = $vgov_create;
		echo utf8_decode($result);*/
	}
?>