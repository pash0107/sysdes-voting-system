<?php
			mysql_connect("localhost","root","") or die("couldn't connect");
			mysql_select_db("electionsurvey") or die("Could not connect to the database");
			$resulta = '';
			//collect
			if(isset($_POST['candidresult']))
			{
				$candidsearch =  $_POST['candidresult'];
				
				$candidquery = mysql_query("SELECT * FROM votes WHERE voters_id LIKE '%$qsearchq%'") or die("Couldn't not search");
				$count = mysql_num_rows($candidquery);
				
				if($count == 0)
				{
					$resulta = '<div class="alert alert-danger alert-dismissable">    <button type="button" class="close" data-dismiss="alert"        aria-hidden="true">       &times;    </button>    The voter you want to enter is not register in the system. </div>';
				}
				else
				{
					while($row = mysql_fetch_array($candidquery))
					{
						$voters_id=$row['voters_id'];
						$type = $row['type'];
						$name = $row['name'];
						
						$result.= '<tbody>
									<tr>
										<td>'.$type.'</td>
										<td>'.$name.'</td>
									</tr>
								</tbody>';
					}
				}
				
			}
		?>