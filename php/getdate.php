<?php
	$connect = mysql_connect("localhost", "root", "") or die ("Coudn't connect to the database!");
	mysql_select_db("electionsurvey") or die ("Coudn't connect to the database!");
		
		$result = "";
		$query = mysql_query("SELECT Fromdate,Todate FROM result");
		while($row = mysql_fetch_array($query))
		{
			$result .= $row['Fromdate'] . ',' . $row['Todate'];
		}
		echo $result;
?>