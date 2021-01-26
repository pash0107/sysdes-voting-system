<?php
	$fromDate = $_POST['fromDate'];
	$toDate = $_POST['toDate'];
	$connect = mysql_connect("localhost", "root", "") or die ("Coudn't connect to the database!");
	mysql_select_db("electionsurvey") or die ("Coudn't connect to the database!");
		
	if($fromDate && $toDate)
	{
		$query = mysql_query("UPDATE result SET id = 1, Fromdate = '$fromDate', Todate = '$toDate'");
		$sql = mysql_query("DELETE FROM `voted` WHERE 1");
		$sql = mysql_query("ALTER TABLE `voted` AUTO-INCREMENT=1");
		echo "Success";
	}
	else
	{
		echo "No Data";
	}
?>