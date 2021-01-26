<?php
	mysql_connect("localhost","root","") or die("couldn't connect");
	mysql_select_db("electionsurvey") or die("Could not connect to the database");
	$output = '';
	//collect
	if(isset($_POST['search']))
	{
		$searchq =  $_POST['search'];
		
		$query = mysql_query("SELECT * FROM voters WHERE VPN LIKE '%$searchq%' OR name LIKE '%$searchq%' OR prec LIKE '%$searchq%' OR Barangay LIKE '%$searchq%'") or die("Couldn't not search");
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
				$date = $row['Date'];
				$remarks = $row['Remarks'];
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

<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
	<link href="css/Custom.css" rel="stylesheet">

    <title>User Page: Online Campaign Poll System</title>
    <link href="bower_components/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="bower_components/metisMenu/dist/metisMenu.min.css" rel="stylesheet">
    <link href="dist/css/timeline.css" rel="stylesheet">
    <link href="dist/css/sb-admin-2.css" rel="stylesheet">
    <link href="bower_components/morrisjs/morris.css" rel="stylesheet">
    <link href="bower_components/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
        
	<script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
	<script src="js/user.js"></script>
</head>

<body>
    <div id="wrapper">
        <!-- Navigation -->
        <nav class="navbar navbar-default navbar-fixed-top" role="navigation">  
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand"  href="admindashboard.php"><img oncontextmenu='alert("Image context menu is disabled!");return false;' src="Images/BQOSS_logo.png" style="height:35px;width:30px; display:inline-block;padding:10px 0px 0 0px;"> Batangas Quezon Online Survey System</a>
            </div>
            <!-- /.navbar-header -->

            <ul class="nav navbar-top-links navbar-right">
                <!-- /.dropdown -->
                <li class="dropdown">
                    <a class="dropdown-toggle" data-toggle="dropdown" href="#">
                        <i class="fa fa-user fa-fw"></i>  <i class="fa fa-caret-down"></i>
                    </a>
                    <ul class="dropdown-menu dropdown-user">
                        <li><a href="admindashboard.php"><i class="fa fa-flag fa-fw"></i> Dashboard</a>
                        </li>
                        </li>
                        <li class="divider"></li>
                        <li><a href="changePassword.php"><i class="fa fa-sign-out fa-fw"></i> Logout</a>
                        </li>
                    </ul>
                    <!-- /.dropdown-user -->
                </li>
                <!-- /.dropdown -->
            </ul>
            <!-- /.navbar-top-links -->
		</nav>
	</div>
            <div class="navbar-default sidebar" style="padding-left: 10px;padding-right: 10px; margin-top: 5px;" role="navigation">
                <div class="sidebar-nav navbar-collapse">
                    <ul class="nav" id="side-menu">			
                    				<li>
					<div class="panel panel-default">
                        <div class="panel-heading">
                            <div class="row">
                                <div class="col-xs-3">
                                    <i class="fa fa-group fa-5x"></i>
                                </div>
                                <div class="col-xs-9 text-right">
                                    <div class="huge">01</div>
                                    <div>Registered Voters</div>
                                </div>
                            </div>
                        </div>
                        <a href="registervoters.php">
                            <div class="panel-footer">
                                <span class="pull-left">Voters</span>
                                <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
                                <div class="clearfix"></div>
                            </div>
                        </a>
                    </div>
					</li>
					
					<li>
					<div class="panel panel-default">
                        <div class="panel-heading">
                            <div class="row">
                                <div class="col-xs-3">
                                    <i class="fa fa-user fa-5x"></i>
                                </div>
                                <div class="col-xs-9 text-right">
                                    <div class="huge">02</div>
                                    <div>Results</div>
                                </div>
                            </div>
                        </div>
                        <a href="result.php">
                            <div class="panel-footer">
                                <span class="pull-left">View Details</span>
                                <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
                                <div class="clearfix"></div>
                            </div>
                        </a>
                    </div>	
					</li>
					<li>
					<div class="panel panel-red">
                        <div class="panel-heading">
                            <div class="row">
                                <div class="col-xs-3">
                                    <i class="fa fa-trash fa-5x"></i>
                                </div>
                                <div class="col-xs-9 text-right">
                                    <div class="huge">03</div>
                                    <div>Log Out</div>
                                </div>
                            </div>
                        </div>
                        <a href="index.php">
                            <div class="panel-footer">
                                <span class="pull-left">Log Out</span>
                                <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
                                <div class="clearfix"></div>
                            </div>
                        </a>
                    </div>
					</li>					
					</ul>
                            <!-- /.nav-second-level -->
                </div>
                <!-- /.sidebar-collapse -->
            </div>
            <!-- /.navbar-static-side -->
    <div id="page-wrapper"style=" margin-right: 20px; margin-top: 70px;padding-top: 20px;border-radius: 25px; background-image: url('newgray.png')">
        <div class="row">
			<div class="col-lg-12">
                <div class="panel panel-default">
						<div class="panel-heading">
							<h3 class="panel-title" style="font-family: Franklin Gothic Heavy;"><i class="fa fa-bell"></i> Admin Dashboard</h1>
						</div>
						<div class="panel-body">
		<div class="container">
      <!-- Example row of columns -->
		<div class="row">
            <div class="col-lg-4">
                <ol class="breadcrumb">
                    <li>
                        <i class="fa fa-dashboard"></i> <a href="admindashboard.php">Dashboard</a>
                    </li>
                    <li class="active">
                        Voter's List
                    </li>
                </ol>
            </div>
        </div>
		
		<div class="row">
            <div class="col-lg-12">
                <div class="form-inline form-padding">
                    <form action="registervoters.php" method="post">
                        <input type="text" class="form-control" name="search" placeholder="Search voters..."required/>
                        <button type="submit" class="btn btn-default"><i class="fa fa-search"></i> Search</button>
                    </form>
                </div>
            </div>
        </div>
		<hr/>
		<div class="row">
				<div class="col-lg-12"> 
					<div class="panel panel-default" style="margin-right: 20px; opacity: .8;">
						<div class="panel-heading">
							<h3 class="panel-title"><i class="fa fa-group"></i> Voter's Search List</h3>
						</div>  
						<div class="table-responsive">
							<table class="table table-striped">
								<thead>
									<tr>
										<th>ID</th>
										<th>VPN</th>
										<th>Name</th>
										<th>Sex</th>
										<th>Address</th>
										<th>Barangay</th>
										<th>City</th>	
										<th>Precint</th>
									</tr>
								</thead>
								<?php print("$output");?>
							</table>
						</div>
				</div>
			</div>
		</div>
		<hr />
			<div class="row">
				<div class="col-lg-12"> 
					<div class="panel panel-default" style="margin-right: 20px; opacity: .8;">
						<div class="panel-heading">
							<h3 class="panel-title"><i class="fa fa-group"></i> Voter's List</h3>
						</div>
						<div class="panel-body">
							<?php 
								$num_rec_per_page=50;
								mysql_connect('localhost','root','');
								mysql_select_db('electionsurvey');
								if (isset($_GET["page"])) { $page  = $_GET["page"]; } else { $page=1; }; 
								$start_from = ($page-1) * $num_rec_per_page; 
								$sql = "SELECT * FROM voters LIMIT $start_from, $num_rec_per_page"; 
								$rs_result = mysql_query ($sql); //run the query
							?> 
							<div class="table responsive">
								<table class="table table-striped">
									<thead>
										<tr>
											<th>ID</th>
											<th>VPN</th>
											<th>Name</th>
											<th>Sex</th>
											<th>Address</th>
											<th>Barangay</th>
											<th>City</th>	
											<th>Precint</th>
										</tr>
									</thead>
							<?php 
								while ($row = mysql_fetch_assoc($rs_result)) { 
							?>
									<tbody>
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
									</tbody>
							<?php 
								}; 
							?> 
								</table>
							</div>
							<center>
								<?php 
									$sql = "SELECT * FROM voters"; 
									$rs_result = mysql_query($sql); //run the query
									$total_records = mysql_num_rows($rs_result);  //count number of records
									$total_pages = ceil($total_records / $num_rec_per_page); 

									echo "<ul class='pagination'>
											<li><a href='registervoters.php?page=1'>".'<<'."</a></li></ul>";// Goto 1st page  

									for ($i=1; $i<=$total_pages; $i++) { 
												echo "<ul class='pagination'>
														<li><a href='registervoters.php?page=".$i."'>".$i."</a></li>
													  </ul>"; 
									}; 
									echo "<ul class='pagination'>
											<li><a href='registervoters.php?page=$total_pages'>".'>>'."</a></li>"; // Goto last page
								?>
							</center>
						</div>
						</div>
						</div>
					</div>
				</div>
		  </div>
	  </div>
                <!-- /.col-lg-12 -->
    </div>
	</div>
	</div>
			

    <!-- jQuery -->
    <script src="bower_components/jquery/dist/jquery.min.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="bower_components/bootstrap/dist/js/bootstrap.min.js"></script>

    <!-- Metis Menu Plugin JavaScript -->
    <script src="bower_components/metisMenu/dist/metisMenu.min.js"></script>

    <!-- Morris Charts JavaScript -->
    <script src="bower_components/raphael/raphael-min.js"></script>
    <script src="bower_components/morrisjs/morris.min.js"></script>
    <script src="js/morris-data.js"></script>

    <!-- Custom Theme JavaScript -->
    <script src="dist/js/sb-admin-2.js"></script>
	<?php include('php/modal.php'); ?>
</body>
</html>
