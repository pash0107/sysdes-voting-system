<?php
	include('db/dbconnect.php');
	
	$per_page = 50;
	$adjacents = 5;
	
	$page_query = mysql_query("SELECT * FROM voters") or die(mysql_error());
	
	$pages = ceil(mysql_result($pages_query,0)/ $per_page);
	
	$page = (isset($_GET['page'])) ? (int)$_GET['page'] : 1;
	
	$start = ($page = 1) * $per_page;
	
	$query = mysql_query("SELECT VPN,name,Sex,Address,Barangay,City,prec FROM voters LIMIT $start,$per_page") or die(mysql_error());
	
	$pagination ="Pagination";
	
	$Prev_Page = ($page == 1)? 1:$page - 1;

?>