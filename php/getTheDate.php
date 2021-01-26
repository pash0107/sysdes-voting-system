<?php
	$connect = mysql_connect("localhost", "root", "") or die ("Coudn't connect to the database!");
	mysql_select_db("electionsurvey") or die ("Coudn't connect to the database!");
		
		$result = "";
		$query = mysql_query("SELECT date FROM voted WHERE id=1 OR id=(SELECT count(*) FROM voted)");
		while($row = mysql_fetch_array($query))
		{
			$result .= $row['date'] . ',';
		}
		echo $result;
?>