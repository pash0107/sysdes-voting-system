<?php
	mysql_connect("localhost","root","") or die("couldn't connect");
	mysql_select_db("electionsurvey") or die("Could not connect to the database");
	$output = '';
	//collect
	if(isset($_POST['search']))
	{
		$searchq =  $_POST['search'];
		
		$query = mysql_query("SELECT * FROM voters WHERE VPN LIKE '%$searchq%' OR name LIKE '%$searchq%' OR prec LIKE '%$searchq%'") or die("Couldn't not search");
		$count = mysql_num_rows($query);
		
		if($count == 0)
		{
			$output = '<div class="alert alert-warning">Oops! You enter an invalid voter!</div> ';
		}
		else
		{
			while($row = mysql_fetch_array($query))
			{
				$v_id = $row['v_id'];
				$VPN = $row['VPN'];
				$name = $row['name'];
				$Sex = $row['Sex'];
				$Address = $row['Address'];
				$Barangay = $row['Barangay'];
				$City = $row['City'];
				$prec = $row['prec'];
				$output.= '<tbody>
							<tr>
								<td>'.$v_id.'</td>
								<td>'.$VPN.'</td>
								<td>'.$name.'</td>
								<td>'.$Sex.'</td>
								<td>'.$Address.'</td>
								<td>'.$Barangay.'</td>
								<td>'.$City.'</td>
								<td>'.$prec.'</td>
							</tr>
						</tbody>';
			}
		}
		
	}
?>