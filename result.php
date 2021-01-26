<?php
	mysql_connect("localhost","root","") or die("couldn't connect");
	mysql_select_db("electionsurvey") or die("Could not connect to the database");
	$output = '';
	//collect
	if(isset($_POST['search']))
	{
		$searchq =  $_POST['search'];
		
		$query = mysql_query("SELECT * FROM votes WHERE type LIKE '%$searchq%' OR date LIKE '%$searchq%'") or die("Couldn't not search");
		$count = mysql_num_rows($query);
		
		if($count == 0)
		{
			$output = '<div class="alert alert-warning">Oops! You enter an invalid result!</div> ';
		}
		else
		{
			while($row = mysql_fetch_array($query))
			{
				$type = $row['type'];
				$name = $row['name'];
				$date = $row['date'];
				$output.= '<tbody>
							<tr>
								<td>'.$type.'</td>
								<td>'.$name.'</td>
								<td>'.$date.'</td>
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
    <link href="css/jquery-ui.css" rel="stylesheet">
    <link href="bower_components/morrisjs/morris.css" rel="stylesheet">
    <link href="bower_components/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
        
	<script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
	<script src="js/user.js"></script>
	<style>
		.hmeter {
				background: #555;
				-moz-border-radius: 25px;
				-webkit-border-radius: 25px;
				 border-radius: 25px;
				 padding: 10px;
				 box-shadow: inset 0 -1px 1px rgba(255, 255, 255, 0.3);
			}
		.hmeter > span {
			display: block;
			height: 100%;
			border-top-right-radius: 8px;
			border-bottom-right-radius: 8px;
			border-top-left-radius: 20px;
			border-bottom-left-radius: 20px;
			background-color: rgb(43,194,83);
			background-image: linear-gradient(
				center bottom,
				rgb(43,194,83) 37%,
				rgb(84,240,84) 69%
			);
			box-shadow:
				inset 0 2px 9px rgba(255,255,255,0.3),
				inset 0 -2px 6px rgba(0,0,0,0.4);
			position: relative;
			overflow: hidden;
		}	
		.meter {
				background: #555;
				box-shadow: inset 0 -1px 1px rgba(255, 255, 255, 0.3);
				margin: 0;
			}
		.meter1 {
				border-top-right-radius: 8px;
				border-top-left-radius: 8px;
				background-color: rgb(43,194,83);
				background-image: linear-gradient(
					center bottom,
					rgb(43,194,83) 37%,
					rgb(84,240,84) 69%
				);
				box-shadow:
					inset 0 2px 9px rgba(255,255,255,0.3),
					inset 0 -2px 6px rgba(0,0,0,0.4);
			}	
		.meter2 {
				border-top-right-radius: 8px;
				border-top-left-radius: 8px;
				background-color: rgb(43,194,186);
				background-image: linear-gradient(
					center bottom,
					rgb(43,194,186) 37%,
					rgb(84,240,230) 69%
				);
				box-shadow:
					inset 0 2px 9px rgba(255,255,255,0.3),
					inset 0 -2px 6px rgba(0,0,0,0.4);
			}
			
		.meter3 {
				border-top-right-radius: 8px;
				border-top-left-radius: 8px;
				background-color: rgb(189,194,43);
				background-image: linear-gradient(
					center bottom,
					rgb(189,194,43) 37%,
					rgb(235,240,84) 69%
				);
				box-shadow:
					inset 0 2px 9px rgba(255,255,255,0.3),
					inset 0 -2px 6px rgba(0,0,0,0.4);
			}	
		.meter4 {
				border-top-right-radius: 8px;
				border-top-left-radius: 8px;
				background-color: rgb(51,43,194);
				background-image: linear-gradient(
					center bottom,
					rgb(51,43,194) 37%,
					rgb(84,84,240) 69%
				);
				box-shadow:
					inset 0 2px 9px rgba(255,255,255,0.3),
					inset 0 -2px 6px rgba(0,0,0,0.4);
			}
			
		.meter5 {
				border-top-right-radius: 8px;
				border-top-left-radius: 8px;
				background-color: rgb(194,106,43);
				background-image: linear-gradient(
					center bottom,
					rgb(194,106,43) 37%,
					rgb(240,148,43) 69%
				);
				box-shadow:
					inset 0 2px 9px rgba(255,255,255,0.3),
					inset 0 -2px 6px rgba(0,0,0,0.4);
			}	
		.meter6 {
				border-top-right-radius: 8px;
				border-top-left-radius: 8px;
				background-color: rgb(224,205,56);
				background-image: linear-gradient(
					center bottom,
					rgb(224,205,56) 37%,
					rgb(194,174,43) 69%
				);
				box-shadow:
					inset 0 2px 9px rgba(255,255,255,0.3),
					inset 0 -2px 6px rgba(0,0,0,0.4);
			}
			
	</style>
</head>

<body onload="getTheDate();">
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
                <a class="navbar-brand" href="admindashboard.php"><img oncontextmenu='alert("Image context menu is disabled!");return false;' src="Images/BQOSS_logo.png" style="height:35px;width:30px; display:inline-block;padding:10px 0px 0 0px;"> Batangas Quezon Online Survey System</a>
            </div>
            <!-- /.navbar-header -->

            <ul class="nav navbar-top-links navbar-right">
                <!-- /.dropdown -->
                <li class="dropdown">
                    <a class="dropdown-toggle" data-toggle="dropdown" href="#">
                        <i class="fa fa-user fa-fw"></i>  <i class="fa fa-caret-down"></i>
                    </a>
                    <ul class="dropdown-menu dropdown-user">
                        <li><a href="admindashboard.php"><i class="fa fa-flag fa-fw"></i> News</a>
                        </li>
                        </li>
                        <li class="divider"></li>
                        <li><a href="index.php"><i class="fa fa-sign-out fa-fw"></i> Logout</a>
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
					</ul>
                            <!-- /.nav-second-level -->
                </div>
                <!-- /.sidebar-collapse -->
            </div>
            <!-- /.navbar-static-side -->
			
			
			
			
    <div id="page-wrapper"style=" margin-right: 20px; margin-top: 70px;border-radius: 25px; background-image: url('newgray.png')">
			<br/>
		<div class="row">
			<div class="col-lg-12">
				<div class="panel panel-default">
						<div class="panel-heading">
							<h3 class="panel-title" style="font-family: Franklin Gothic Heavy;"><i class="fa fa-bell"></i> Admin Dashboard</h1>
						</div>
						<div class="panel-body">
							<div class="container">
						  <!-- Example row of columns -->
						  <center>
							<div class="row" style="margin-right: 20px;">
								<br>
								<div class="col-lg-4">
											<div class="form-group">
												<label class="col-sm-2 control-label"> Date From: </label>
													<div class="col-sm-10">
														<input id="datepicker" type="text" class="form-control" placeholder="Date">
													</div> 
											</div>
								</div>
								<div class="col-lg-4">
									<div class="form-group">
												<label class="col-sm-2 control-label"> Date To: </label>
													<div class="col-sm-10">
														<input id="datepicker1" type="text" class="form-control" placeholder="Date">
													</div> 
											</div>
								</div>
								<div class="col-lg-4">
									<button onclick="generateReport();" class="btn btn-outline btn-primary"><i class="fa fa-dashboard"></i> Generate Survey</button>
									<button onclick="post();" class="btn btn-outline btn-success"><i class="fa fa-dashboard"></i> Post Survey</button>
								</div>
							</div>
							</center>
							<br/>
							
							<hr />
							<div id="noresult" style="text-align: center; display: block;">
								No Result has been generated
							</div>
							<div id="presLabel" style="display:none;">
								<h1 style="text-align: center;"><i class="fa fa-dashboard"></i> President's Tally</h1>
							</div>
							<div id="presGraph" class="meter" style="position:relative; width: 95%; left: 1vw;height: 60vh; border: 5px solid #c8c8c8; border-radius: 2px; display: none;">
								<div style="position:relative; width: 14.2%; height: 100%; bottom: 0px; display: inline-block;">
									<img id="presSpanImg1" style="width:100%; height: 100%; position: absolute; bottom: 0px;">
								</div>
								<div style="position:relative; width: 5%; height: 100%; bottom: 0px; display:inline-block;">
									<span class="meter1" id="presSpan1" style="position: absolute; bottom: 0px; width: 100%; overflow: hidden;">
										<div id="presSpan1perc" style="position: relative; top: 5%; font-weight: bold; font-size: 1vw; font-family: 'Tahoma'; width: 100%; text-align: center;"></div>
									</span>
								</div>
								<div style="position:relative; width: 14.2%; height: 100%; bottom: 0px; display: inline-block;">
									<img id="presSpanImg2" style="width:100%; height: 100%; position: absolute; bottom: 0px;">
								</div>
								<div style="position:relative; width: 5%; height: 100%; bottom: 0px; display:inline-block;">
									<span  class="meter2" id="presSpan2" style="position: absolute; bottom: 0px; width: 100%; overflow: hidden;">
									<div id="presSpan2perc" style="position: relative; top: 5%; font-weight: bold; font-size: 1vw; font-family: 'Tahoma'; width: 100%; text-align: center;"></div>
									</span>
								</div>
								<div style="position:relative; width: 14.2%; height: 100%; bottom: 0px; display: inline-block;">
									<img id="presSpanImg3" style="width:100%; height: 100%; position: absolute; bottom: 0px;">
								</div>
								<div style="position:relative; width: 5%; height: 100%; bottom: 0px; display:inline-block;">
									<span id="presSpan3" class="meter3" style="position: absolute; bottom: 0px; width: 100%; overflow: hidden;">
										<div id="presSpan3perc" style="position: relative; top: 5%; font-weight: bold; font-size: 1vw; font-family: 'Tahoma'; width: 100%; text-align: center;"></div>
									</span>
								</div>
								<div style="position:relative; width: 14.2%; height: 100%; bottom: 0px; display: inline-block;">
									<img id="presSpanImg4" style="width:100%; height: 100%; position: absolute; bottom: 0px;">
								</div>
								<div style="position:relative; width: 5%; height: 100%; bottom: 0px;display:inline-block;">
									<span id="presSpan4"class="meter4" style="position: absolute; bottom: 0px; width: 100%; overflow: hidden;">
										<div id="presSpan4perc" style="position: relative; top: 5%; font-weight: bold; font-size: 1vw; font-family: 'Tahoma'; width: 100%; text-align: center;"></div>
									</span>
								</div>
								<div style="position:relative; width: 14.2%; height: 100%; bottom: 0px; display: inline-block;">
									<img id="presSpanImg5" style="width:100%; height: 100%; position: absolute; bottom: 0px;">
								</div>
								<div style="position:relative; width: 5%; height: 100%; bottom: 0px;display:inline-block;">
									<span id="presSpan5" class="meter5" style="position: absolute; bottom: 0px; width: 100%; overflow: hidden;">
										<div id="presSpan5perc" style="position: relative; top: 5%; font-weight: bold; font-size: 1vw; font-family: 'Tahoma'; width: 100%; text-align: center;"></div>
									</span>
								</div>
							</div>
							<div id="preslabel"class="meter" style=" display: none;position:relative; width: 95%;left: 1vw;height: 8vh; border-right: 5px solid #c8c8c8;border-left: 5px solid #c8c8c8;border-bottom: 5px solid #c8c8c8; border-radius: 2px; display: block;">
								<div id="first" style="position:relative; border-right: 5px solid #c8c8c8; width: 19.9%; height: 100%; bottom: 0px; display: inline-block;">
									<div style="color: white; position: relative; top: 38%; text-align: center;">
										
									</div>
								</div>
								
								<div id="second" style="position:relative; border-right: 5px solid #c8c8c8; width: 19.9%; height: 100%; bottom: 0px; display: inline-block;">
									<div style="color: white; position: relative; top: 38%; text-align: center;">
										
									</div>
								</div>
								
								<div id="third" style="position:relative; border-right: 5px solid #c8c8c8; width: 19.6%; height: 100%; bottom: 0px; display: inline-block;">
									<div style="color: white; position: relative; top: 38%; text-align: center;">
										
									</div>
								</div>
								
								<div id="fourth" style="position:relative; border-right: 5px solid #c8c8c8; width: 19.6%; height: 100%; bottom: 0px; display: inline-block;">
									<div style="color: white; position: relative; top: 38%; text-align: center;">
										
									</div>
								</div>
								
								<div id="fifth" style="position:relative; width: 19%; height: 100%; bottom: 0px; display: inline-block;">
									<div style="color: white; position: relative; top: 38%; text-align: center;">
										
									</div>
								</div>
							</div>
							
							<!-- Vice President-->
							<hr />
							<div id="viceLabel" style="display:none;">
								<h1 style="text-align: center;"><i class="fa fa-dashboard"></i> Vice President's Tally</h1>
							</div>
							<div id="viceGraph" class="meter" style="position:relative; width: 95%; left: 1vw;height: 60vh; border: 5px solid #c8c8c8; border-radius: 2px; display: none;">
								<div style="position:relative; width: 10.8%; height: 100%; bottom: 0px; display: inline-block;">
									<img id="viceSpanImg1" style="width:100%; height: 100%; position: absolute; bottom: 0px;">
								</div>
								<div style="position:relative; width: 5%; height: 100%; bottom: 0px; display:inline-block;">
									<span class="meter1" id="viceSpan1" style="position: absolute; bottom: 0px; width: 100%; overflow: hidden;">
										<div id="viceSpan1perc" style="position: relative; top: 5%; font-weight: bold; font-size: 1vw; font-family: 'Tahoma'; width: 100%; text-align: center;"></div>
									</span>
								</div>
								<div style="position:relative; width: 10.8%; height: 100%; bottom: 0px; display: inline-block;">
									<img id="viceSpanImg2" style="width:100%; height: 100%; position: absolute; bottom: 0px;">
								</div>
								<div style="position:relative; width: 5%; height: 100%; bottom: 0px; display:inline-block;">
									<span  class="meter2" id="viceSpan2" style="position: absolute; bottom: 0px; width: 100%; overflow: hidden;">
									<div id="viceSpan2perc" style="position: relative; top: 5%; font-weight: bold; font-size: 1vw; font-family: 'Tahoma'; width: 100%; text-align: center;"></div>
									</span>
								</div>
								<div style="position:relative; width: 10.8%; height: 100%; bottom: 0px; display: inline-block;">
									<img id="viceSpanImg3" style="width:100%; height: 100%; position: absolute; bottom: 0px;">
								</div>
								<div style="position:relative; width: 5%; height: 100%; bottom: 0px; display:inline-block;">
									<span id="viceSpan3" class="meter3" style="position: absolute; bottom: 0px; width: 100%; overflow: hidden;">
										<div id="viceSpan3perc" style="position: relative; top: 5%; font-weight: bold; font-size: 1vw; font-family: 'Tahoma'; width: 100%; text-align: center;"></div>
									</span>
								</div>
								<div style="position:relative; width: 10.8%; height: 100%; bottom: 0px; display: inline-block;">
									<img id="viceSpanImg4" style="width:100%; height: 100%; position: absolute; bottom: 0px;">
								</div>
								<div style="position:relative; width: 5%; height: 100%; bottom: 0px;display:inline-block;">
									<span id="viceSpan4"class="meter4" style="position: absolute; bottom: 0px; width: 100%; overflow: hidden;">
										<div id="viceSpan4perc" style="position: relative; top: 5%; font-weight: bold; font-size: 1vw; font-family: 'Tahoma'; width: 100%; text-align: center;"></div>
									</span>
								</div>
								<div style="position:relative; width: 10.8%; height: 100%; bottom: 0px; display: inline-block;">
									<img id="viceSpanImg5" style="width:100%; height: 100%; position: absolute; bottom: 0px;">
								</div>
								<div style="position:relative; width: 5%; height: 100%; bottom: 0px;display:inline-block;">
									<span id="viceSpan5" class="meter5" style="position: absolute; bottom: 0px; width: 100%; overflow: hidden;">
										<div id="viceSpan5perc" style="position: relative; top: 5%; font-weight: bold; font-size: 1vw; font-family: 'Tahoma'; width: 100%; text-align: center;"></div>
									</span>
								</div>
								<div style="position:relative; width: 10.8%; height: 100%; bottom: 0px; display: inline-block;">
									<img id="viceSpanImg6" style="width:100%; height: 100%; position: absolute; bottom: 0px;">
								</div>
								<div style="position:relative; width: 5%; height: 100%; bottom: 0px;display:inline-block;">
									<span id="viceSpan6" class="meter6" style="position: absolute; bottom: 0px; width: 100%; overflow: hidden;">
										<div id="viceSpan6perc" style="position: relative; top: 5%; font-weight: bold; font-size: 1vw; font-family: 'Tahoma'; width: 100%; text-align: center;"></div>
									</span>
								</div>
							</div>
							
							<div id="vicelabel"class="meter" style=" display: none;position:relative; width: 95%;left: 1vw;height: 8vh; border-right: 5px solid #c8c8c8;border-left: 5px solid #c8c8c8;border-bottom: 5px solid #c8c8c8; border-radius: 2px; display: block;">
								<div id="vicefirst" style="position:relative; border-right: 5px solid #c8c8c8; width: 16.5%; height: 100%; bottom: 0px; display: inline-block;">
									<div style="color: white; position: relative; top: 38%; text-align: center;">
										
									</div>
								</div>
								
								<div id="vicesecond" style="position:relative; border-right: 5px solid #c8c8c8; width: 16.5%; height: 100%; bottom: 0px; display: inline-block;">
									<div style="color: white; position: relative; top: 38%; text-align: center;">
										
									</div>
								</div>
								
								<div id="vicethird" style="position:relative; border-right: 5px solid #c8c8c8; width: 16.2%; height: 100%; bottom: 0px; display: inline-block;">
									<div style="color: white; position: relative; top: 38%; text-align: center;">
										
									</div>
								</div>
								
								<div id="vicefourth" style="position:relative; border-right: 5px solid #c8c8c8; width: 16.2%; height: 100%; bottom: 0px; display: inline-block;">
									<div style="color: white; position: relative; top: 38%; text-align: center;">
										
									</div>
								</div>
								
								<div id="vicefifth" style="position:relative; width: 16.2%;  border-right: 5px solid #c8c8c8;height: 100%; bottom: 0px; display: inline-block;">
									<div style="color: white; position: relative; top: 38%; text-align: center;">
										
									</div>
								</div>
								
								<div id="vicesixth" style="position:relative; width: 16.2%; height: 100%; bottom: 0px; display: inline-block;">
									<div style="color: white; position: relative; top: 38%; text-align: center;">
										
									</div>
								</div>
							</div>
							
							<!-- Senator-->
							<hr />
							<div id="senLabel" style="display:none;">
								<h1 style="text-align: center;"><i class="fa fa-dashboard"></i> Senatorial Tally</h1>
							</div>
							<div id="senGraph" class="meter" style="position:relative; width: 95%; left: 1vw;height: 60vh; border: 5px solid #c8c8c8; border-radius: 2px; display: none;">
								<div style="position:relative; width: 10.8%; height: 100%; bottom: 0px; display: inline-block;">
									<img id="senSpanImg1" style="width:100%; height: 100%; position: absolute; bottom: 0px;">
								</div>
								<div style="position:relative; width: 5%; height: 100%; bottom: 0px; display:inline-block;">
									<span class="meter1" id="senSpan1" style="position: absolute; bottom: 0px; width: 100%; overflow: hidden;">
										<div id="senSpan1perc" style="position: relative; top: 5%; font-weight: bold; font-size: 1vw; font-family: 'Tahoma'; width: 100%; text-align: center;"></div>
									</span>
								</div>
								<div style="position:relative; width: 10.8%; height: 100%; bottom: 0px; display: inline-block;">
									<img id="senSpanImg2" style="width:100%; height: 100%; position: absolute; bottom: 0px;">
								</div>
								<div style="position:relative; width: 5%; height: 100%; bottom: 0px; display:inline-block;">
									<span  class="meter2" id="senSpan2" style="position: absolute; bottom: 0px; width: 100%; overflow: hidden;">
									<div id="senSpan2perc" style="position: relative; top: 5%; font-weight: bold; font-size: 1vw; font-family: 'Tahoma'; width: 100%; text-align: center;"></div>
									</span>
								</div>
								<div style="position:relative; width: 10.8%; height: 100%; bottom: 0px; display: inline-block;">
									<img id="senSpanImg3" style="width:100%; height: 100%; position: absolute; bottom: 0px;">
								</div>
								<div style="position:relative; width: 5%; height: 100%; bottom: 0px; display:inline-block;">
									<span id="senSpan3" class="meter3" style="position: absolute; bottom: 0px; width: 100%; overflow: hidden;">
										<div id="senSpan3perc" style="position: relative; top: 5%; font-weight: bold; font-size: 1vw; font-family: 'Tahoma'; width: 100%; text-align: center;"></div>
									</span>
								</div>
								<div style="position:relative; width: 10.8%; height: 100%; bottom: 0px; display: inline-block;">
									<img id="senSpanImg4" style="width:100%; height: 100%; position: absolute; bottom: 0px;">
								</div>
								<div style="position:relative; width: 5%; height: 100%; bottom: 0px;display:inline-block;">
									<span id="senSpan4"class="meter4" style="position: absolute; bottom: 0px; width: 100%; overflow: hidden;">
										<div id="senSpan4perc" style="position: relative; top: 5%; font-weight: bold; font-size: 1vw; font-family: 'Tahoma'; width: 100%; text-align: center;"></div>
									</span>
								</div>
								<div style="position:relative; width: 10.8%; height: 100%; bottom: 0px; display: inline-block;">
									<img id="senSpanImg5" style="width:100%; height: 100%; position: absolute; bottom: 0px;">
								</div>
								<div style="position:relative; width: 5%; height: 100%; bottom: 0px;display:inline-block;">
									<span id="senSpan5" class="meter5" style="position: absolute; bottom: 0px; width: 100%; overflow: hidden;">
										<div id="senSpan5perc" style="position: relative; top: 5%; font-weight: bold; font-size: 1vw; font-family: 'Tahoma'; width: 100%; text-align: center;"></div>
									</span>
								</div>
								<div style="position:relative; width: 10.8%; height: 100%; bottom: 0px; display: inline-block;">
									<img id="senSpanImg6" style="width:100%; height: 100%; position: absolute; bottom: 0px;">
								</div>
								<div style="position:relative; width: 5%; height: 100%; bottom: 0px;display:inline-block;">
									<span id="senSpan6" class="meter6" style="position: absolute; bottom: 0px; width: 100%; overflow: hidden;">
										<div id="senSpan6perc" style="position: relative; top: 5%; font-weight: bold; font-size: 1vw; font-family: 'Tahoma'; width: 100%; text-align: center;"></div>
									</span>
								</div>
							</div>
							
							<div id="senlabel"class="meter" style=" display: none;position:relative; width: 95%;left: 1vw;height: 8vh; border-right: 5px solid #c8c8c8;border-left: 5px solid #c8c8c8;border-bottom: 5px solid #c8c8c8; border-radius: 2px; display: block;">
								<div id="senfirst" style="position:relative; border-right: 5px solid #c8c8c8; width: 16.5%; height: 100%; bottom: 0px; display: inline-block;">
									<div style="color: white; position: relative; top: 38%; text-align: center;">
										
									</div>
								</div>
								
								<div id="sensecond" style="position:relative; border-right: 5px solid #c8c8c8; width: 16.5%; height: 100%; bottom: 0px; display: inline-block;">
									<div style="color: white; position: relative; top: 38%; text-align: center;">
										
									</div>
								</div>
								
								<div id="senthird" style="position:relative; border-right: 5px solid #c8c8c8; width: 16.2%; height: 100%; bottom: 0px; display: inline-block;">
									<div style="color: white; position: relative; top: 38%; text-align: center;">
										
									</div>
								</div>
								
								<div id="senfourth" style="position:relative; border-right: 5px solid #c8c8c8; width: 16.2%; height: 100%; bottom: 0px; display: inline-block;">
									<div style="color: white; position: relative; top: 38%; text-align: center;">
										
									</div>
								</div>
								
								<div id="senfifth" style="position:relative; width: 16.2%;  border-right: 5px solid #c8c8c8;height: 100%; bottom: 0px; display: inline-block;">
									<div style="color: white; position: relative; top: 38%; text-align: center;">
										
									</div>
								</div>
								
								<div id="sensixth" style="position:relative; width: 16.2%; height: 100%; bottom: 0px; display: inline-block;">
									<div style="color: white; position: relative; top: 38%; text-align: center;">
										
									</div>
								</div>
							</div>
							<div id="candidates16" style="display:none; padding-bottom: 20px; position:relative; width: 95%;left: 1vw; border-right: 5px solid #c8c8c8;border-left: 5px solid #c8c8c8;border-bottom: 5px solid #c8c8c8; border-radius: 2px; display: block;">
								
							</div>
							<br/>
			<div class="row">
				<div class="col-lg-12">
                <div class="form-inline form-padding">
                    <form action="result.php" method="post">
                        <input type="text" class="form-control" name="search" placeholder="Search Result..."required/>
                        <button type="submit" class="btn btn-default"><i class="fa fa-search"></i> Search</button>
                    </form>
                </div>
				</div>
				<div class="col-lg-12"> 
					<div class="panel panel-default" style="margin-right: 20px; opacity: .8;">
						<div class="panel-heading">
							<h3 class="panel-title"><i class="fa fa-group"></i> Result Search List</h3>
						</div>  
						<div class="table-responsive">
							<table class="table table-striped">
								<thead>
									<tr>
										<th>Type</th>
										<th>Name</th>
										<th>Date</th>
									</tr>
								</thead>
								<?php print("$output");?>
							</table>
						</div>
				</div>
			</div>
		</div>
						  </div>
						  </div><!--Panel-Body-->
			</div><!--panel-->
	  </div><!--col-12-->
	  </div><!-- Row-->
	  </div><!--wrapper -->
			

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
	<script src="js/jquery.js"></script>
	<script src="js/jquery-ui.js"></script>
	<script>
	  $(function() {
		$( "#datepicker" ).datepicker({ dateFormat: 'yy-mm-dd' }).datepicker("setDate", new Date());
		$( "#datepicker1" ).datepicker({ dateFormat: 'yy-mm-dd' }).datepicker("setDate", new Date());
	  });
  </script>


    <!-- Custom Theme JavaScript -->
    <script src="dist/js/sb-admin-2.js"></script>
	<script src="js/candidates1.js"></script>
	<script src="js/generate.js"></script>
	
	<?php include('php/modal.php'); ?>
</body>
</html>
