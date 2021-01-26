
<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Change Password</title>
	<link href="css/Custom.css" rel="stylesheet" type="text/css">
    <!-- Bootstrap Core CSS -->
    <link href="bower_components/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- MetisMenu CSS -->
    <link href="bower_components/metisMenu/dist/metisMenu.min.css" rel="stylesheet">

    <!-- Timeline CSS -->
    <link href="dist/css/timeline.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="dist/css/sb-admin-2.css" rel="stylesheet">

    <!-- Morris Charts CSS -->
    <link href="bower_components/morrisjs/morris.css" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="bower_components/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>

<body onload="checkEmail();">

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
                <a class="navbar-brand" href="user.php"><img oncontextmenu='alert("Image context menu is disabled!");return false;' src="Images/BQOSS_logo.png" style="height:35px;width:30px; display:inline-block;padding:10px 0px 0 0px;"> Batangas Quezon Online Survey System</a>
            </div>
            <!-- /.navbar-header -->

            <ul class="nav navbar-top-links navbar-right">
                <li class="dropdown">
               
                <!-- /.dropdown -->
                <li class="dropdown">
                    <a class="dropdown-toggle" data-toggle="dropdown" href="#">
                        <i class="fa fa-user fa-fw"></i>  <i class="fa fa-caret-down"></i>
                    </a>
                    <ul class="dropdown-menu dropdown-user">
                        <li><a href="user.php"><i class="fa fa-user fa-fw"></i> User Profile</a>
                        </li>
                        <li class="divider"></li>
                        <li><a href="index.php" onclick="logout();"><i class="fa fa-sign-out fa-fw"></i> Logout</a>
                        </li>
                    </ul>
                    <!-- /.dropdown-user -->
                </li>
                <!-- /.dropdown -->
            </ul>
            <!-- /.navbar-top-links -->

            <div class="navbar-default sidebar" style="padding: 10px;"role="navigation">
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
						<div class="panel panel-default">
                        <div class="panel-heading">
                            <div class="row">
                                <div class="col-xs-3">
                                    <i class="fa fa-bell fa-5x"></i>
                                </div>
                                <div class="col-xs-9 text-right">
                                    <div class="huge">01</div>
                                    <div>Change Password</div>
                                </div>
                            </div>
                        </div>
                        <a href="changePassword.php">
                            <div class="panel-footer">
                                <span class="pull-left">Edit Profile</span>
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
                                    <i class="fa fa-dashboard fa-5x"></i>
                                </div>
                                <div class="col-xs-9 text-right">
                                    <div class="huge">01</div>
                                    <div>Survey Result</div>
                                </div>
                            </div>
                        </div>
                        <a onclick="location.href='userresult.php'">
                            <div class="panel-footer">
                                <span class="pull-left">Latest Post of survey forms</span>
                                <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
                                <div class="clearfix"></div>
                            </div>
                        </a>
                    </div>
					</li>
					
					
                    </ul>
                </div>
                <!-- /.sidebar-collapse -->
            </div>
            <!-- /.navbar-static-side -->
        </nav>

        <div id="page-wrapper" style="background-image: url('newgray.png');">
            <div class="row">
                <div class="col-lg-12">
					<br/>
                    <h1 class="page-header">Settings</h1>
                </div>
                <!-- /.col-lg-12 -->
            </div>
			<form class="form-horizontal" onsubmit='return false'>
			<div class="panel panel-default">
									<div class="panel-heading">
										<h3 class="panel-title"><span class="glyphicon glyphicon-leaf"></span> Change Password:</h3>
									</div>
									
									<div class="panel-body">
										<div class="form-group">
											<label class="col-sm-2 control-label"> Email: </label>
												<div class="col-sm-10">
													<p class="form-control" id="em" disabled></p>
												</div> 
										</div>
											
										<div class="form-group">
											<label for="inputPassword" class="col-sm-2 control-label"><span class="glyphicon glyphicon-asterisk"></span> Old Password: </label>
												<div class="col-sm-10">
													<input type="password" class="form-control" id="Password" name="Password" placeholder="Password"/>
												</div>
										</div>
											
										<div class="form-group">
											<label for="NewPassword" class="col-sm-2 control-label"><span class="glyphicon glyphicon-asterisk"></span> New Password: </label>
												<div class="col-sm-10">
													<input type="password" class="form-control" id="NewPassword" name="NewPassword" placeholder="Verify Password"/><br>
												</div>
										</div>
										
										<div class="form-group">
											<label for="NewPassword" class="col-sm-2 control-label"><span class="glyphicon glyphicon-asterisk"></span> Re-enter new Password: </label>
												<div class="col-sm-10">
													<input type="password" class="form-control"id="NewConfirmPassword" name="NewConfirmPassword" placeholder="Re-enter new Password"/><br>
												</div>
										</div>
										<center>
										<span class="pull-right"><button class="btn btn-primary" onclick="changePass();"> Change </button></span>										
										</center>
									</div><!--Panel-Body Ending-->
									<div class="panel-footer">
										
									</div> <!--Panel-Footer Ending.-->
									
			</div> <!--Panel Ending-->
			</form>
								
         </div>  
        <!-- /#page-wrapper -->

    </div>
    <!-- /#wrapper -->

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
	<script src="js/changePassword.js"></script>
	<script src="js/user.js"></script>
</body>

</html>
