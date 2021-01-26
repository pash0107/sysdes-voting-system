<!DOCTYPE html>
<html>
<head>
</head>
<body>
<?php 
$num_rec_per_page=50;
mysql_connect('localhost','root','');
mysql_select_db('electionsurvey');
if (isset($_GET["page"])) { $page  = $_GET["page"]; } else { $page=1; }; 
$start_from = ($page-1) * $num_rec_per_page; 
$sql = "SELECT * FROM voters LIMIT $start_from, $num_rec_per_page"; 
$rs_result = mysql_query ($sql); //run the query
?> 
<table>
<tr><td>Name</td><td>Phone</td></tr>
<?php 
while ($row = mysql_fetch_assoc($rs_result)) { 
?> 
            <tr>
            <td><?php echo $row['v_id']; ?></td>
            <td><?php echo $row['VPN']; ?></td>
            <td><?php echo $row['name']; ?></td> 
			 <td><?php echo $row['Sex']; ?></td>
            <td><?php echo $row['Address']; ?></td>
			 <td><?php echo $row['Barangay']; ?></td>
            <td><?php echo $row['City']; ?></td>
            <td><?php echo $row['prec']; ?></td>
            </tr>
<?php 
}; 
?> 
</table>
<?php 
$sql = "SELECT * FROM voters"; 
$rs_result = mysql_query($sql); //run the query
$total_records = mysql_num_rows($rs_result);  //count number of records
$total_pages = ceil($total_records / $num_rec_per_page); 

echo "<a href='page.php?page=1'>".'|<'."</a> "; // Goto 1st page  

for ($i=1; $i<=$total_pages; $i++) { 
            echo "<a href='page.php?page=".$i."'>".$i."</a> "; 
}; 
echo "<a href='page.php?page=$total_pages'>".'>|'."</a> "; // Goto last page
?>

</body>
</html>