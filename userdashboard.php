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
	<link href="css/Custom.css" rel="stylesheet" type="text/css">

        
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
                <a class="navbar-brand" href="user.php"><span class="glyphicon glyphicon-flag"></span> Batangas Quezon Online Survey System</a>
            </div>
            <!-- /.navbar-header -->

            <ul class="nav navbar-top-links navbar-right">
                <!-- /.dropdown -->
                <li class="dropdown">
                    <a class="dropdown-toggle" data-toggle="dropdown" href="#">
                        <i class="fa fa-user fa-fw"></i>  <i class="fa fa-caret-down"></i>
                    </a>
                    <ul class="dropdown-menu dropdown-user">
                        <li><a href="user.php"><i class="fa fa-user fa-fw"></i> User Profile</a>
                        </li>
                        <li class="divider"></li>
                        <li><a href="index.php" onclick="logout();" style="text-decoration: none; color: black; cursor: hand;"><i class="fa fa-sign-out fa-fw"></i> Logout</a>
                        </li>
                    </ul>
                    <!-- /.dropdown-user -->
                </li>
                <!-- /.dropdown -->
            </ul>
            <!-- /.navbar-top-links -->
		</nav>
	</div>
            <div class="navbar-default sidebar" style="padding-left: 10px;padding-right: 10px;" role="navigation">
                <div class="sidebar-nav navbar-collapse">
                    <ul class="nav" id="side-menu">
                        
                     <li>
					<div class="panel panel-default">
                        <div class="panel-heading">
                            <div class="row">
                                <div class="col-xs-3">
                                    <i class="fa fa-dashboard fa-5x"></i>
                                </div>
                                <div class="col-xs-9 text-right">
                                    <div class="huge">01</div>
                                    <div>Dashboard</div>
                                </div>
                            </div>
                        </div>
                        <a onclick="checker();">
                            <div class="panel-footer">
                                <span class="pull-left">Latest Post of survey forms</span>
                                <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
                                <div class="clearfix"></div>
                            </div>
                        </a>
                    </div>
					</li>
					
                    <li>
                    <li>
					<div class="panel panel-default">
                        <div class="panel-heading">
                            <div class="row">
                                <div class="col-xs-3">
                                    <i class="fa fa-bell fa-5x"></i>
                                </div>
                                <div class="col-xs-9 text-right">
                                    <div class="huge">00</div>
                                    <div>Change Password</div>
                                </div>
                            </div>
                        </div>
                        <a href="changePassword.php">
                            <div class="panel-footer">
                                <span class="pull-left">Change Password</span>
                                <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
                                <div class="clearfix"></div>
                            </div>
                        </a>
                    </div>
					</li>
                        </li>					
					</ul>
                            <!-- /.nav-second-level -->
                </div>
                <!-- /.sidebar-collapse -->
            </div>
            <!-- /.navbar-static-side -->
    <div id="page-wrapper">
			<br/>
			<div class="container">
					<center>
					<h1><b>USER PROFILE</b></h1>
					</center>	
			</div>
			<div class="panel panel-default">
				<div class="panel-heading">
					<h3 class="panel-title">
						<span class="glyphicon glyphicon-user"></span> Welcome to Log in Page
					</h3>
				</div>
				<div class="panel-body">
					<div class="row">
						<div class="col-lg-4">
							<div class="panel panel-default">
								<div class="panel-heading">
									<h3 class="panel-title">
										Personal Information
									</h3>
								</div>
								<div class="panel-body">
									<form class="form-horizontal">
										<div class="form-group">
											<label class="col-sm-2 control-label"> Email: </label>
												<div class="col-sm-10">
													<p class="form-control" id="em" disabled></p>
												</div> 
										</div>
										
										<div class="form-group">
											<label class="col-sm-2 control-label"> Last Name: </label>
												<div class="col-sm-10">
													<p class="form-control" id="ln" disabled></p>
												</div> 
										</div>
										
										<div class="form-group">
											<label class="col-sm-2 control-label"> First Name: </label>
												<div class="col-sm-10">
													<p class="form-control" id="fn" disabled></p>
												</div> 
										</div>
										
										<div class="form-group">
											<label class="col-sm-2 control-label"> Middle Name: </label>
												<div class="col-sm-10">
													<p class="form-control" id="mn" disabled></p>
												</div> 
										</div>
									</form>
								</div>
							</div>
						</div>
						
						<div class="col-lg-4">
							<div class="panel panel-default">
								<div class="panel-heading">
									<h3 class="panel-title">
										User Status
									</h3>
								</div>
								<div class="panel-body">
									<form class="form-horizontal">
										<div class="form-group">
											<label class="col-sm-2 control-label"> Sex: </label>
												<div class="col-sm-10">
													<p class="form-control" id="sex" disabled></p>
												</div> 
										</div>
										
										<div class="form-group">
											<label class="col-sm-2 control-label"> Age: </label>
												<div class="col-sm-10">
													<p class="form-control" id="age" disabled></p>
												</div> 
										</div>
										
										<div class="form-group">
											<label class="col-sm-2 control-label"> Status: </label>
												<div class="col-sm-10">
													<p class="form-control" id="stat" disabled></p>
												</div> 
										</div>
									</form>
								</div>
							</div>
						</div>
						
						<div class="col-lg-4">
							<div class="panel panel-default">
								<div class="panel-heading">
									<h3 class="panel-title">
										User Address Information
									</h3>
								</div>
								<div class="panel-body">
									<form class="form-horizontal">
										<div class="form-group">
											<label class="col-sm-2 control-label">Province: </label>
												<div class="col-sm-10">
													<p class="form-control" id="prov" disabled></p>
												</div> 
										</div>
										
										<div class="form-group">
											<label class="col-sm-2 control-label">City: </label>
												<div class="col-sm-10">
													<p class="form-control" id="city" disabled></p>
												</div> 
										</div>
										
										<div class="form-group">
											<label class="col-sm-2 control-label">Barangay:  </label>
												<div class="col-sm-10">
													<p class="form-control" id="barang" disabled></p>
												</div> 
										</div>
									</form>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
			
	</div>
		<div class="footer">
			<h5>&#169; All right Researved. Batangas Quezon Online Survey System</h5>
			<h5><i class="fa fa-user"></i> First Asia Institute of Technology and Humanities</h5>
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
	<script>
		fill();
	</script>
</body>
</html>
