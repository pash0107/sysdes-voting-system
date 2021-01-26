<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
	<link href="css/Custom.css" rel="stylesheet">

    <title>Admin Page: Online Campaign Poll System</title>
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
                        <li><a href="admindashboard.php"><i class="fa fa-dashboard fa-fw"></i> Admin Page</a>
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
			<div class="container">
					<center>
					<br/>
					<h1><b>Administrator</b></h1>
					</center>	
					<hr/>
			</div>
			<div class="container">
      <!-- Example row of columns -->
      <div class="row">
			<div class="col-md-4">
			<div class="panel panel-default" style="opacity: .8;">
				<div class="panel panel-heading">
					<div class="panel-title">
						Feedback
					</div>
				</div>
					<h2 class="center"><i class="fa fa-users fa-5x"></i></h2>
			  <center>
				<b><h3 style="font-family: Franklin Gothic Heavy;">Today's Feedback</h3></b>
			  </center>
			  <center>
				<div style="margin: 0 0 10px 10px; padding: 10px;">
					<p style="font-family: Lucida Sans">We are still not sure on who’s to and not to vote in the upcoming election. So we decided to make an online poll system, an activity in which several or many people are asked on questions in order to get information. In this online poll system, the user is asked on whom he/she will vote among the list of respective candidates. </p>
				</div>
			</center>
			</div>
			</div>
			<div class="col-md-4">
			<div class="panel panel-default" style="opacity: .8;">
				<div class="panel panel-heading">
					<div class="panel-title">
						Objectives
					</div>
				</div>
			  <h2 class="center"><i class="fa fa-table fa-5x"></i></h2>
			  <center>
				<b><h3 style="font-family: Franklin Gothic Heavy;">Objective of BQOSS</h3></b>
			  </center>
			  <center>
				<div style="margin: 0 0 10px 10px; padding: 10px;">
					<p style="font-family: Lucida Sans">To solve the problems, the researchers propose a system which is called “Batangas Quezon Online Survey System” or the “BQOSS”. The proposed system is capable of generating reports which includes the top candidates that has been chosen by the users. </p>
				</div>
			 </center>
			 <center>  
				<button type="button" class="btn btn-default" data-toggle="modal" data-target="#objective"><i class="fa fa-group"></i> Scope</button>
			  </center><br>
			</div>
			</div>
			<div class="col-md-4">
			<div class="panel panel-default" style="opacity: .8;">
				<div class="panel panel-heading">
					<div class="panel-title">
						Feedback
					</div>
				</div>
			  <h2 class="center"><i class="fa fa-tasks fa-5x"></i></h2>
			  <center>
				<b><h3 style="font-family: Franklin Gothic Heavy;">About BQOSS</h3></b>
				<div style="margin: 0 0 10px 10px; padding: 10px;">
					<p style="font-family: Lucida Sans">The BQOSS is a system that can manipulate, gathers data that can be use to know the top candidates of national, district and local. This is an electronic system that can use to lessen man power to gather information in every surveys.</p>
				</div>
			</center>
			  <center>  
				<button type="button" class="btn btn-default" data-toggle="modal" data-target="#scope"><i class="fa fa-group"></i> Scope</button>
			  </center><br>
			</div>
			</div>
		</div>
      </div>
		<div class="footer" style="margin-bottom:10px;">
			<h5>&#169; All right Researved. Batangas Quezon Online Survey System</h5>
			<h5><i class="fa fa-user"></i> First Asia Institute of Technology and Humanities</h5>
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
