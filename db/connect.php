<?php
	$host="localhost";
	$user='root';
	$password='';
	$database='registration';
	
	$database = new mysqli($host, $user, $password, $database);
	
	if($database->connect_errno){
		die ("Sorry we just have some problems");
	}
?>