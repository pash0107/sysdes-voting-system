<?php
	$fromDate = $_POST['fromDate'];
	$toDate = $_POST['toDate'];
	$connect = mysql_connect("localhost", "root", "") or die ("Coudn't connect to the database!");
	mysql_select_db("electionsurvey") or die ("Coudn't connect to the database!");
		
	if($fromDate && $toDate)
	{
		$result = "";
		$query = mysql_query("SELECT type, name FROM votes WHERE `date` BETWEEN '$fromDate' AND '$toDate'");
		$query1 = mysql_query("SELECT DISTINCT email FROM votes WHERE `date` BETWEEN '$fromDate' AND '$toDate'");
		$num_rows = mysql_num_rows($query1);
		$result .= $num_rows . '&';
		while($row = mysql_fetch_array($query))
		{
			$result .= $row['type'] . ',' . $row['name'] . '&';
		}
		echo $result;
	}
?>