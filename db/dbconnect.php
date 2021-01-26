<?php
	$mysql_hostname="localhost";
	$mysql_user="root";
	$mysql_password="";
	$mysql_database="electionsurvey";
	
	$database = mysql_connect($mysql_hostname,$mysql_user,$mysql_password) or die("Oops you are not yet connected to our database");
	mysql_select_db($mysql_database,$database) or die("Wrong");
?>