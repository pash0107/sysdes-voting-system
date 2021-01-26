<!DOCTYPE html>
<html lang="en">
<head>
	
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
	<link href="css/Custom.css" rel="stylesheet">
	<link href="css/font-awesome.css" rel="stylesheet">
	
    <title>Dashboard</title>

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
	<script type="text/javascript" src="js/candidates.js"></script>
	<script type="text/javascript" src="js/connect.js"></script>
	<script type="text/javascript" src="js/user.js"></script>
</head>

<body onload="remove();">
        <!-- Navigation -->
        <nav class="navbar navbar-default navbar-fixed-top" role="navigation">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="news.php"><img oncontextmenu='alert("Image context menu is disabled!");return false;' src="Images/BQOSS_logo.png" style="height:35px;width:30px; display:inline-block;padding:10px 0px 0 0px;">  Dashboard: Batangas Quezon Online Survey System</a>
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
                        <li><a href="index.php" onclick="logout();" style="text-decoration: none; color: black; cursor: hand;"><i class="fa fa-sign-out fa-fw"></i> Logout</a>
                        </li>
					</ul>
					 
                    <!-- /.dropdown-user -->
                </li>
                <!-- /.dropdown -->
            </ul>
            <!-- /.navbar-top-links -->
			<br/>
            <div class="navbar-default sidebar" style="padding: 10px;"role="navigation">
                <div class="sidebar-nav navbar-collapse">
                    <ul class="nav" id="side-menu">
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
                                <span class="pull-left">Edit Password</span>
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
		<div style="background-color: white; text-align: center; position: fixed; padding: 1px; height: 30px; width: 230px; bottom: 275px; margin-left: 10px; border-radius: 2px; border: 4px solid #c8c8c8;">
			Vote Board
		</div>
		<div id="votedCandid" style="background-color: white; overflow-y: scroll; position: fixed; height: 260px; width: 230px; bottom: 0px; margin: 10px; border-radius: 2px; border: 4px solid #c8c8c8;">
			<b>President</b><br><br><b>Vice President</b><br><br><b>Senate</b><br><br><b>Partylist</b><br><br><b>Representative</b><br><br><b>Governor</b><br><br><b>Vice Governor</b><br><br><b>Board Member</b><br><br><b>Mayor</b><br><br><b>Vice Mayor</b><br><br><b>Councillor</b><br><br>
		</div>
		<br/>
        <div id="page-wrapper" style="padding-bottom: 20px;background-image: url('newgray.png')">
            <div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header">Survey Form</h1>
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <!-- /.row -->
            <!-- /.row -->
			<div class="panel panel-default" style="opacity: .9;">
				<div class="panel panel-heading"><i class="fa fa-user"></i> President
				</div>
				<div class="panel panel-body">
					<div class="row" id="presCandid">
				</div>
				</div>
			</div>
			
			<div class="panel panel-default" style="opacity: .9;">
				<div class="panel panel-heading"><i class="fa fa-user"></i> Vice President
				</div>
				<div class="panel panel-body">
					<div class="row" id="viceCandid">
				</div>
				</div>
			</div>
			
			<div class="panel panel-default" style="opacity: .9;">
				<div class="panel panel-heading"><i class="fa fa-user"></i> Senator
				</div>
				<div class="panel panel-body">
					<div class="row" id="senateCandid">
					</div>
				</div>
			</div>
			
			<div class="panel panel-default" style="opacity: .9;">
				<div class="panel panel-heading"><i class="fa fa-user"></i> PartyList
				</div>
					<div class="panel panel-body">
						<div class="row" id="partyCandid">
						</div>
					</div>
			</div>
			
			<div class="panel panel-default" style="opacity: .9;">
				<div class="panel panel-heading"><i class="fa fa-user"></i> Representative
				</div>
					<div class="panel panel-body">
						<div class="row" id="repCandid">
						</div>
					</div>
			</div>
			
			<div class="panel panel-default" style="opacity: .9;">
				<div class="panel panel-heading"><i class="fa fa-user"></i> Governor
				</div>
					<div class="panel panel-body">
						<div class="row" id="govCandid">
						</div>
					</div>
			</div>
			
			<div class="panel panel-default" style="opacity: .9;">
				<div class="panel panel-heading"><i class="fa fa-user"></i> Vice Governor
				</div>
					<div class="panel panel-body">
						<div class="row" id="viceGovCandid">
						</div>
					</div>
			</div>
			
			<div class="panel panel-default" style="opacity: .9;">
				<div class="panel panel-heading"><i class="fa fa-user"></i> Board Member
				</div>
					<div class="panel panel-body">
						<div class="row" id="boardCandid">
						</div>
					</div>
			</div>
			
			<div class="panel panel-default" style="opacity: .9;">
				<div class="panel panel-heading"><i class="fa fa-user"></i> Mayor
				</div>
					<div class="panel panel-body">
						<div class="row" id="mayorCandid">
						</div>
					</div>
			</div>
			
			<div class="panel panel-default" style="opacity: .9;">
				<div class="panel panel-heading"><i class="fa fa-user"></i> Vice Mayor
				</div>
					<div class="panel panel-body">
						<div class="row" id="viceMayorCandid">
						</div>
					</div>
			</div>
			
			<div class="panel panel-default" style="opacity: .9;">
				<div class="panel panel-heading"><i class="fa fa-user"></i> Councilor
				</div>
					<div class="panel panel-body">
						<div class="row" id="councillorCandid">
						</div>
					</div>
			</div>
			<center>
				<div class="row">
					<div class="col-lg-12">
						<button name="submit" onclick="submit();" class="btn btn-outline btn-default btn-lg btn-block">Submit</button>
					</div>
				</div>
			</center>
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
		pres();
		vice();
		senate();
		party();
		repCandid();
		govCandid();
		viceGovCandid();
		boardCandid();
		mayorCandid();
		viceMayorCandid();
		councilCandid();
	</script>
	<script src="js/user.js"></script>
</body>

</html>
