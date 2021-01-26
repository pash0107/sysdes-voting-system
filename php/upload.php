<?php
	$pres = $_POST['pres'];
	$vice = $_POST['vice'];
	$sen = $_POST['sen'];
	$party = $_POST['party'];
	$rep = $_POST['rep'];
	$board = $_POST['board'];
	$viceMayor = $_POST['viceMayor'];
	$gov = $_POST['gov'];
	$mayor = $_POST['mayor'];
	$vgov = $_POST['vgov'];
	$councillor = $_POST['councillor'];
	$email = $_POST['email'];
	$connect = mysql_connect("localhost", "root", "") or die ("Coudn't connect to the database!");
	mysql_select_db("electionsurvey") or die ("Coudn't connect to the database!");
		
	if($pres && $vice && $sen && $party && $rep && $board && $gov && $vgov && $mayor && $viceMayor && $councillor)
	{
		$voted1 = mysql_query("INSERT INTO voted(voters_id, date) VALUES('$email', NOW())");
		$voted = mysql_query("SELECT count(*) AS counter FROM voted");
		$row = mysql_fetch_array($voted);
		$id = $row['counter'];
		$pres_query = mysql_query("INSERT INTO votes(voters_id, type, name, date, email) VALUES('$email', 'President', '$pres', NOW(), '$id')");
		$vice_query = mysql_query("INSERT INTO votes(voters_id, type, name, date, email) VALUES('$email', 'VicePresident', '$vice', NOW(), '$id')");
		$split = explode(',', $sen);
		for($i=0; $i<count($split); $i++)
		{
			$sen_query = mysql_query("INSERT INTO votes(voters_id, type, name, date, email) VALUES('$email', 'Senator', '$split[$i]', NOW(), '$id')");
		}
		$party_query = mysql_query("INSERT INTO votes(voters_id, type, name, date, email) VALUES('$email', 'Partylist', '$party', NOW(), '$id')");
		$rep_query = mysql_query("INSERT INTO votes(voters_id, type, name, date, email) VALUES('$email', 'Representative', '$rep', NOW(), '$id')");
		$board_query = mysql_query("INSERT INTO votes(voters_id, type, name, date, email) VALUES('$email', 'BoardMember', '$board', NOW(), '$id')");
		$gov_query = mysql_query("INSERT INTO votes(voters_id, type, name, date, email) VALUES('$email', 'Governor', '$gov', NOW())");
		$vgov_query = mysql_query("INSERT INTO votes(voters_id, type, name, date, email) VALUES('$email', 'Vice Governor', '$vgov', NOW(), '$id')");
		$mayor_query = mysql_query("INSERT INTO votes(voters_id, type, name, date, email) VALUES('$email', 'Mayor', '$mayor', NOW(), '$id')");
		$viceMayor_query = mysql_query("INSERT INTO votes(voters_id, type, name, date, email) VALUES('$email', 'Vice Mayor', '$viceMayor', NOW(), '$id')");
		$split = explode(',', $councillor);
		for($i=0; $i<count($split); $i++)
		{
			$councillor_query = mysql_query("INSERT INTO votes(voters_id, type, name, date, email) VALUES('$email', 'Councillor', '$split[$i]', NOW(), '$id')");
		}
		echo "Success";
	}
	else
	{
		echo "Missing";
	}
?>