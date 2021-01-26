<?php include("auth.php"); //include auth.php file on all secure pages ?>
<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<title>Welcome Home</title>
<link rel="stylesheet" href="css/bootstrap.min.css" />
</head>
<body>
<div class="form-group">
<!--Username Fetching and Printing-->
			<?php
			if(isset($_SESSION['Email']))
			{
				$login_session=$_SESSION['Email'];
			}
			?>
			<?php echo '<h4> Logged as '.$login_session.'</h4>';?>
			
			<!--Data Fetching-->
			<?php
				error_reporting(0);
				require("dbcon.php");
	
				$sql="SELECT 
						FirstName, LastName 
					FROM 
						register.users
					WHERE
						Email='$login_session'";
			
				$result = ->query($sql);

				if($result->num_rows == 1)
				{
					$row = $result->fetch_assoc();
				}
				else{
					echo "Something error happened";
				}
			?>
			
<p>This is secure area.</p>
<p><a href="dashboard.php">Dashboard</a></p>
<a href="logout.php">Logout</a>
</div>
</body>
</htm