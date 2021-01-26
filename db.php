<?php
	$host="localhost";
	$user='root';
	$pass='';
	$db='electionsurvey';
	
	$db = new mysqli($host, $user, $pass, $db);
	$connection = mysql_connect('localhost', 'root', '');
	if (!$connection){
	die("Database Connection Failed" . mysql_error());
	}
	$select_db = mysql_select_db('electionsurvey');
	if (!$select_db){
		
	die("Database Selection Failed" . mysql_error());
}
?>