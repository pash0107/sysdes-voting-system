
<?php /*Vice-President Survey*/
	$con = mysqli_connect('localhost','root','','survey1');
	if(isset($_POST['Cayetano'])){
		$vote_Cayetano = "UPDATE `vicepresident` set Cayetano=Cayetano+1";
		$run_Cayetano = mysqli_query($con, $vote_Cayetano);
		
		if($run_Cayetano){
			echo "<script>alert('Your Vote is successfully enter to our database.');window.location.href='dashboard.php';</script>";
		}
		
	}
	if(isset($_POST['Escudero'])){
		$vote_Escudero = "UPDATE `vicepresident` set Escudero=Escudero+1";
		$run_Escudero = mysqli_query($con, $vote_Escudero);
		
		if($run_Escudero){
			echo "<script>alert('Your Vote is successfully enter to our database.');window.location.href='dashboard.php';</script>";
		}
	}
	if(isset($_POST['Honasan'])){
		$vote_Honasan = "UPDATE `vicepresident` set Honasan=Honasan+1";
		$run_Honasan = mysqli_query($con, $vote_Honasan);
		
		if($run_Honasan){
			echo "<script>alert('Your Vote is successfully enter to our database.');window.location.href='dashboard.php';</script>";
		}
	}
	if(isset($_POST['Marcos'])){
		$vote_Marcos = "UPDATE `vicepresident` set Marcos=Marcos+1";;
		$run_Marcos = mysqli_query($con, $vote_Marcos);
		if($run_Marcos){
			echo "<script>alert('Your Vote is successfully enter to our database.');window.location.href='dashboard.php';</script>";
		}
	}
	if(isset($_POST['Robredo'])){
		$vote_Robredo = "UPDATE `vicepresident` set Robredo=Robredo+1";;
		$run_Robredo = mysqli_query($con, $vote_Robredo);
		if($run_Robredo){
			echo "<script>alert('Your Vote is successfully enter to our database.');window.location.href='dashboard.php';</script>";
		}
	}
	if(isset($_POST['Trillanes'])){
		$vote_Trillanes = "UPDATE `vicepresident` set Trillanes=Trillanes+1";;
		$run_Trillanes = mysqli_query($con, $vote_Trillanes);
		if($run_Trillanes){
			echo "<script>alert('Your Vote is successfully enter to our database.');window.location.href='dashboard.php';</script>";
		}
	}

	if(isset($_GET['results'])){
	$get_votes1 = "select * FROM vicepresident";
	$run_votes1 = mysqli_query($con, $get_votes1);
	$row_votes1 = mysqli_fetch_array($run_votes1);
	
	$Cayetano = $row_votes1['Cayetano'];
	$Escudero = $row_votes1['Escudero'];
	$Honasan = $row_votes1['Honasan'];
	$Marcos = $row_votes1['Marcos'];
	$Robredo = $row_votes1['Robredo'];
	$Trillanes = $row_votes1['Trillanes'];

	$count1 = $Cayetano+$Escudero+$Honasan+$Marcos+$Robredo+$Trillanes;

	$per_Cayetano = round($Cayetano*100/$count1) . "%";
	$per_Escudero = round($Escudero*100/$count1) . "%";
	$per_Honasan = round($Honasan*100/$count1) . "%";
	$per_Marcos = round($Marcos*100/$count1) . "%";
	$per_Robredo = round($Robredo*100/$count1) . "%";
	$per_Trillanes = round($Trillanes*100/$count1) . "%";
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

</head>

<body>

    <div id="wrapper">

        <!-- Navigation -->
        <nav class="navbar navbar-default navbar-static-top" role="navigation" style="margin-bottom: 0">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="user.php">Dashboard: Online Campaign Poll System</a>
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
                        <li><a href="usersetting.php"><i class="fa fa-gear fa-fw"></i> Settings</a>
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

            <div class="navbar-default sidebar" style="padding: 10px;"role="navigation">
                <div class="sidebar-nav navbar-collapse">
                    <ul class="nav" id="side-menu">
                        <li class="sidebar-search">
                            <div class="input-group custom-search-form">
                                <input type="text" class="form-control" placeholder="Search...">
                                <span class="input-group-btn">
                                <button class="btn btn-default" type="button">
                                    <i class="fa fa-search"></i>
                                </button>
                            </span>
                            </div>
                            <!-- /.nav-second-level -->
                        </li>
						<li>
						<div class="panel panel-primary">
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
					<div class="panel panel-primary">
                        <div class="panel-heading">
                            <div class="row">
                                <div class="col-xs-3">
                                    <i class="fa fa-user fa-5x"></i>
                                </div>
                                <div class="col-xs-9 text-right">
                                    <div class="huge">02</div>
                                    <div>Survey</div>
                                </div>
                            </div>
                        </div>
                        <a href="ListSurvey.php">
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
                </div>
                <!-- /.sidebar-collapse -->
            </div>
            <!-- /.navbar-static-side -->
        </nav>

        <div id="page-wrapper">
            <div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header">Dashboard</h1>
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <!-- /.row -->
            <!-- /.row -->
					<div class="container">
						<div class="jumbotron" style="margin-top: 30px; box-shadow: inset 1px -1px 1px #444, inset -1px 1px 1px #444;">
						<div class="row">
							<div class="col-lg-12">
							<div class="panel panel-primary">
									<div class="panel-heading">
										<h3 class="panel-title"><span class="glyphicon glyphicon-user"></span> Vice-Presidential Candidates:</h3>
									</div>
									<div class="panel-body">
								<form action="dashboard.php" class="form-horizontal" method="POST" align="center" role="form">
									<div class="row">
										<div class="col-lg-4 col-sm-4 col-xs-4 col-md-4">
											<div class="panel panel-primary">
										<div class="panel-heading">
											<h3 class="panel-title"><span class="glyphicon glyphicon-user"></span> Allan Peter Cayetano:</h3>
										</div>
										<div class="panel-body">
											<img src="Images/Cayetano.jpg"class="img-thumbnail">
										</div>
										<div class="panel-footer">
											<button type="submit" name="Cayetano" class="btn btn-outline btn-primary"><span class="glyphicon glyphicon-pencil"></span> Allan Cayetano</button>
										</div>
										</div>
										</div>
										<div class="col-lg-4 col-sm-4 col-xs-4 col-md-4">
										<div class="panel panel-primary">
									<div class="panel-heading">
										<h3 class="panel-title"><span class="glyphicon glyphicon-user"></span> Francis Escudero:</h3>
									</div>
										<div class="panel-body">
											<img src="Images/Escudero.jpg"class="img-thumbnail">
										</div>
										<div class="panel-footer">
											<button type="submit" name="Escudero" class="btn btn-outline btn-primary"><span class="glyphicon glyphicon-pencil"></span> Francis Escudero</button>
										</div>
										</div>
										</div>
										<div class="col-lg-4 col-sm-4 col-xs-4 col-md-4">
										<div class="panel panel-primary">
									<div class="panel-heading">
										<h3 class="panel-title"><span class="glyphicon glyphicon-user"></span> Gringo Honasan:</h3>
									</div>
										<div class="panel-body">
											<img src="Images/Honasan.jpg"class="img-thumbnail">
										</div>
										<div class="panel-footer">
											<button type="submit" name="Honasan" class="btn btn-outline btn-primary"><span class="glyphicon glyphicon-pencil"></span> Gringo Honasan</button>
										</div>
										</div>
										</div>
									</div>
									<br>
									<div class="row">
										<div class="col-lg-4">
										<div class="panel panel-primary">
									<div class="panel-heading">
										<h3 class="panel-title"><span class="glyphicon glyphicon-user"></span> BongBong Marcos:</h3>
									</div>
									<div class="panel-body">
											<img src="Images/Marcos.jpg"class="img-thumbnail">
										</div>
										<div class="panel-footer">
											<button type="submit" name="Marcos" class="btn btn-outline btn-primary"><span class="glyphicon glyphicon-pencil"></span> BongBong Marcos</button>
										</div>
										</div>
										</div>
										<div class="col-lg-4">
										<div class="panel panel-primary">
									<div class="panel-heading">
										<h3 class="panel-title"><span class="glyphicon glyphicon-user"></span> Leanor Robredo:</h3>
									</div>
									<div class="panel-body">
										<img src="Images/Robredo.jpg"class="img-thumbnail">
										</div>
										<div class="panel-footer">
											<button type="submit" name="Robredo" class="btn btn-outline btn-primary"><span class="glyphicon glyphicon-pencil"></span> Leanor Robredo</button>
										</div>
										</div>
										</div>
										<div class="col-lg-4">
										<div class="panel panel-primary">
									<div class="panel-heading">
										<h3 class="panel-title"><span class="glyphicon glyphicon-user"></span> Antonio Trillanes:</h3>
									</div>
									<div class="panel-body">
										<img src="Images/Trillanes.jpg"class="img-thumbnail">
										</div>
										<div class="panel-footer">
											<button type="submit" name="Trillanes" class="btn btn-outline btn-primary"><span class="glyphicon glyphicon-pencil"></span> Antonio Trillanes</button>
										</div>
										</div>
										</div>
									</div>
								</form>
								</div>
							</div>
							</div>
						</div>
						</div>
					</span>
                            </div>
							
							
							
					<!--<div class="container">
						<div class="jumbotron" style="margin-top: 30px; box-shadow: inset 1px -1px 1px #444, inset -1px 1px 1px #444;">
						<div class="row">
							<div class="col-lg-12">
							<div class="panel panel-primary">
									<div class="panel-heading">
										<h3 class="panel-title"><span class="glyphicon glyphicon-user"></span> Senatorial Candidates:</h3>
									</div>
									<div class="panel-body">
								<form action="dashboard.php" class="form-horizontal" method="POST" align="center" role="form">
									<div class="row">
										<div class="col-lg-4 col-sm-4 col-xs-4 col-md-4">
											<div class="panel panel-primary">
										<div class="panel-heading">
											<h3 class="panel-title"><span class="glyphicon glyphicon-user"></span> Sharrif Albani</h3>
										</div>
										<div class="panel-body">
											<img src="Images/Cayetano.jpg"class="img-thumbnail">
										</div>
										<div class="panel-footer">
											<button type="submit" name="Albani" class="btn btn-outline btn-primary"><span class="glyphicon glyphicon-pencil"></span> Sharrif Albani</button>
										</div>
										</div>
										</div>
										<div class="col-lg-4 col-sm-4 col-xs-4 col-md-4">
										<div class="panel panel-primary">
									<div class="panel-heading">
										<h3 class="panel-title"><span class="glyphicon glyphicon-user"></span>	Aldin Ali</h3>
									</div>
										<div class="panel-body">
											<img src="Images/Escudero.jpg"class="img-thumbnail">
										</div>
										<div class="panel-footer">
											<button type="submit" name="Ali" class="btn btn-outline btn-primary"><span class="glyphicon glyphicon-pencil"></span> Aldin Ali </button>
										</div>
										</div>
										</div>
										<div class="col-lg-4 col-sm-4 col-xs-4 col-md-4">
										<div class="panel panel-primary">
									<div class="panel-heading">
										<h3 class="panel-title"><span class="glyphicon glyphicon-user"></span> Raffy Alunan </h3>
									</div>
										<div class="panel-body">
											<img src="Images/Honasan.jpg"class="img-thumbnail">
										</div>
										<div class="panel-footer">
											<button type="submit" name="Alunan" class="btn btn-outline btn-primary"><span class="glyphicon glyphicon-pencil"></span> Raffy Alunan </button>
										</div>
										</div>
										</div>
									</div>
									<br>
									<div class="row">
										<div class="col-lg-4">
										<div class="panel panel-primary">
									<div class="panel-heading">
										<h3 class="panel-title"><span class="glyphicon glyphicon-user"></span> Ina Ambolodto </h3>
									</div>
									<div class="panel-body">
											<img src="Images/Marcos.jpg"class="img-thumbnail">
										</div>
										<div class="panel-footer">
											<button type="submit" name="Ambolodto" class="btn btn-outline btn-primary"><span class="glyphicon glyphicon-pencil"></span> Ina Ambolodto </button>
										</div>
										</div>
										</div>
										<div class="col-lg-4">
										<div class="panel panel-primary">
									<div class="panel-heading">
										<h3 class="panel-title"><span class="glyphicon glyphicon-user"></span> Godofredo Arquiza </h3>
									</div>
									<div class="panel-body">
										<img src="Images/Robredo.jpg"class="img-thumbnail">
										</div>
										<div class="panel-footer">
											<button type="submit" name="Arquiza" class="btn btn-outline btn-primary"><span class="glyphicon glyphicon-pencil"></span> Godofredo Arquiza </button>
										</div>
										</div>
										</div>
										<div class="col-lg-4">
										<div class="panel panel-primary">
									<div class="panel-heading">
										<h3 class="panel-title"><span class="glyphicon glyphicon-user"></span> Levito Baligod</h3>
									</div>
									<div class="panel-body">
										<img src="Images/Trillanes.jpg"class="img-thumbnail">
										</div>
										<div class="panel-footer">
											<button type="submit" name="Baligod" class="btn btn-outline btn-primary"><span class="glyphicon glyphicon-pencil"></span> Levito Baligod</button>
										</div>
										</div>
										</div>
									</div>
									
									
									<div class="row">
										<div class="col-lg-4">
										<div class="panel panel-primary">
									<div class="panel-heading">
										<h3 class="panel-title"><span class="glyphicon glyphicon-user"></span> Greco Belgica  </h3>
									</div>
									<div class="panel-body">
											<img src="Images/Marcos.jpg"class="img-thumbnail">
										</div>
										<div class="panel-footer">
											<button type="submit" name="Belgica" class="btn btn-outline btn-primary"><span class="glyphicon glyphicon-pencil"></span> Greco Belgica  </button>
										</div>
										</div>
										</div>
										<div class="col-lg-4">
										<div class="panel panel-primary">
									<div class="panel-heading">
										<h3 class="panel-title"><span class="glyphicon glyphicon-user"></span> Walden Bello</h3>
									</div>
									<div class="panel-body">
										<img src="Images/Robredo.jpg"class="img-thumbnail">
										</div>
										<div class="panel-footer">
											<button type="submit" name="Bello" class="btn btn-outline btn-primary"><span class="glyphicon glyphicon-pencil"></span> Walden Bello</button>
										</div>
										</div>
										</div>
										<div class="col-lg-4">
										<div class="panel panel-primary">
									<div class="panel-heading">
										<h3 class="panel-title"><span class="glyphicon glyphicon-user"></span> Sandra Cam </h3>
									</div>
									<div class="panel-body">
										<img src="Images/Trillanes.jpg"class="img-thumbnail">
										</div>
										<div class="panel-footer">
											<button type="submit" name="Cam" class="btn btn-outline btn-primary"><span class="glyphicon glyphicon-pencil"></span> Sandra Cam </button>
										</div>
										</div>
										</div>
									</div>
									
									<div class="row">
										<div class="col-lg-4">
										<div class="panel panel-primary">
									<div class="panel-heading">
										<h3 class="panel-title"><span class="glyphicon glyphicon-user"></span> Mel Chavez   </h3>
									</div>
									<div class="panel-body">
											<img src="Images/Marcos.jpg"class="img-thumbnail">
										</div>
										<div class="panel-footer">
											<button type="submit" name="Chavez" class="btn btn-outline btn-primary"><span class="glyphicon glyphicon-pencil"></span> Mel Chavez   </button>
										</div>
										</div>
										</div>
										<div class="col-lg-4">
										<div class="panel panel-primary">
									<div class="panel-heading">
										<h3 class="panel-title"><span class="glyphicon glyphicon-user"></span> Neri Colmenares </h3>
									</div>
									<div class="panel-body">
										<img src="Images/Robredo.jpg"class="img-thumbnail">
										</div>
										<div class="panel-footer">
											<button type="submit" name="Colmenares" class="btn btn-outline btn-primary"><span class="glyphicon glyphicon-pencil"></span> Neri Colmenares</button>
										</div>
										</div>
										</div>
										<div class="col-lg-4">
										<div class="panel panel-primary">
									<div class="panel-heading">
										<h3 class="panel-title"><span class="glyphicon glyphicon-user"></span> Leila De Lima </h3>
									</div>
									<div class="panel-body">
										<img src="Images/Trillanes.jpg"class="img-thumbnail">
										</div>
										<div class="panel-footer">
											<button type="submit" name="DeLima" class="btn btn-outline btn-primary"><span class="glyphicon glyphicon-pencil"></span> Leila De Lima  </button>
										</div>
										</div>
										</div>
									</div>
									
									<div class="row">
										<div class="col-lg-4">
										<div class="panel panel-primary">
									<div class="panel-heading">
										<h3 class="panel-title"><span class="glyphicon glyphicon-user"></span> Isko Moreno Domagoso    </h3>
									</div>
									<div class="panel-body">
											<img src="Images/Marcos.jpg"class="img-thumbnail">
										</div>
										<div class="panel-footer">
											<button type="submit" name="Domagoso" class="btn btn-outline btn-primary"><span class="glyphicon glyphicon-pencil"></span> Isko Moreno Domagoso    </button>
										</div>
										</div>
										</div>
										<div class="col-lg-4">
										<div class="panel panel-primary">
									<div class="panel-heading">
										<h3 class="panel-title"><span class="glyphicon glyphicon-user"></span> Ray Dorona  </h3>
									</div>
									<div class="panel-body">
										<img src="Images/Robredo.jpg"class="img-thumbnail">
										</div>
										<div class="panel-footer">
											<button type="submit" name="Dorona" class="btn btn-outline btn-primary"><span class="glyphicon glyphicon-pencil"></span> Ray Dorona </button>
										</div>
										</div>
										</div>
										<div class="col-lg-4">
										<div class="panel panel-primary">
									<div class="panel-heading">
										<h3 class="panel-title"><span class="glyphicon glyphicon-user"></span> Frank Drilon  </h3>
									</div>
									<div class="panel-body">
										<img src="Images/Trillanes.jpg"class="img-thumbnail">
										</div>
										<div class="panel-footer">
											<button type="submit" name="Drilon" class="btn btn-outline btn-primary"><span class="glyphicon glyphicon-pencil"></span> Frank Drilon   </button>
										</div>
										</div>
										</div>
									</div>
									
									<div class="row">
										<div class="col-lg-4">
										<div class="panel panel-primary">
									<div class="panel-heading">
										<h3 class="panel-title"><span class="glyphicon glyphicon-user"></span> Larry Gadon  </h3>
									</div>
									<div class="panel-body">
											<img src="Images/Marcos.jpg"class="img-thumbnail">
										</div>
										<div class="panel-footer">
											<button type="submit" name="Gadon" class="btn btn-outline btn-primary"><span class="glyphicon glyphicon-pencil"></span> Larry Gadon</button>
										</div>
										</div>
										</div>
										<div class="col-lg-4">
										<div class="panel panel-primary">
									<div class="panel-heading">
										<h3 class="panel-title"><span class="glyphicon glyphicon-user"></span> Win Gatchalian </h3>
									</div>
									<div class="panel-body">
										<img src="Images/Robredo.jpg"class="img-thumbnail">
										</div>
										<div class="panel-footer">
											<button type="submit" name="Gatchalian" class="btn btn-outline btn-primary"><span class="glyphicon glyphicon-pencil"></span> Win Gatchalian </button>
										</div>
										</div>
										</div>
										<div class="col-lg-4">
										<div class="panel panel-primary">
									<div class="panel-heading">
										<h3 class="panel-title"><span class="glyphicon glyphicon-user"></span> Richard Gordon   </h3>
									</div>
									<div class="panel-body">
										<img src="Images/Trillanes.jpg"class="img-thumbnail">
										</div>
										<div class="panel-footer">
											<button type="submit" name="Gordon" class="btn btn-outline btn-primary"><span class="glyphicon glyphicon-pencil"></span> Richard Gordon    </button>
										</div>
										</div>
										</div>
									</div>
									
									<div class="row">
										<div class="col-lg-4">
										<div class="panel panel-primary">
									<div class="panel-heading">
										<h3 class="panel-title"><span class="glyphicon glyphicon-user"></span> TG Guinggona   </h3>
									</div>
									<div class="panel-body">
											<img src="Images/Marcos.jpg"class="img-thumbnail">
										</div>
										<div class="panel-footer">
											<button type="submit" name="Guinggona" class="btn btn-outline btn-primary"><span class="glyphicon glyphicon-pencil"></span> TG Guinggona </button>
										</div>
										</div>
										</div>
										<div class="col-lg-4">
										<div class="panel panel-primary">
									<div class="panel-heading">
										<h3 class="panel-title"><span class="glyphicon glyphicon-user"></span> Risa Hontiveros  </h3>
									</div>
									<div class="panel-body">
										<img src="Images/Robredo.jpg"class="img-thumbnail">
										</div>
										<div class="panel-footer">
											<button type="submit" name="Hontiveros" class="btn btn-outline btn-primary"><span class="glyphicon glyphicon-pencil"></span>Risa Hontiveros  </button>
										</div>
										</div>
										</div>
										<div class="col-lg-4">
										<div class="panel panel-primary">
									<div class="panel-heading">
										<h3 class="panel-title"><span class="glyphicon glyphicon-user"></span> Eid Kabalu</h3>
									</div>
									<div class="panel-body">
										<img src="Images/Trillanes.jpg"class="img-thumbnail">
										</div>
										<div class="panel-footer">
											<button type="submit" name="Kabalu" class="btn btn-outline btn-primary"><span class="glyphicon glyphicon-pencil"></span> Eid Kabalu     </button>
										</div>
										</div>
										</div>
									</div>
									
									<div class="row">
										<div class="col-lg-4">
										<div class="panel panel-primary">
									<div class="panel-heading">
										<h3 class="panel-title"><span class="glyphicon glyphicon-user"></span> Atty. Lorna Kapunan    </h3>
									</div>
									<div class="panel-body">
											<img src="Images/Marcos.jpg"class="img-thumbnail">
										</div>
										<div class="panel-footer">
											<button type="submit" name="Kapunan" class="btn btn-outline btn-primary"><span class="glyphicon glyphicon-pencil"></span> Atty. Lorna Kapunan  </button>
										</div>
										</div>
										</div>
										<div class="col-lg-4">
										<div class="panel panel-primary">
									<div class="panel-heading">
										<h3 class="panel-title"><span class="glyphicon glyphicon-user"></span> Princess Jacel Kiram  </h3>
									</div>
									<div class="panel-body">
										<img src="Images/Robredo.jpg"class="img-thumbnail">
										</div>
										<div class="panel-footer">
											<button type="submit" name="Kiram" class="btn btn-outline btn-primary"><span class="glyphicon glyphicon-pencil"></span> Princess Jacel Kiram   </button>
										</div>
										</div>
										</div>
										<div class="col-lg-4">
										<div class="panel panel-primary">
									<div class="panel-heading">
										<h3 class="panel-title"><span class="glyphicon glyphicon-user"></span> Alma Moreno Lacsamana </h3>
									</div>
									<div class="panel-body">
										<img src="Images/Trillanes.jpg"class="img-thumbnail">
										</div>
										<div class="panel-footer">
											<button type="submit" name="Lacsamana" class="btn btn-outline btn-primary"><span class="glyphicon glyphicon-pencil"></span> Alma Moreno Lacsamana </button>
										</div>
										</div>
										</div>
									</div>
									
									<div class="row">
										<div class="col-lg-4">
										<div class="panel panel-primary">
									<div class="panel-heading">
										<h3 class="panel-title"><span class="glyphicon glyphicon-user"></span> Panfilo Ping Lacson     </h3>
									</div>
									<div class="panel-body">
											<img src="Images/Marcos.jpg"class="img-thumbnail">
										</div>
										<div class="panel-footer">
											<button type="submit" name="Lacson" class="btn btn-outline btn-primary"><span class="glyphicon glyphicon-pencil"></span> Panfilo Ping Lacson   </button>
										</div>
										</div>
										</div>
										<div class="col-lg-4">
										<div class="panel panel-primary">
									<div class="panel-heading">
										<h3 class="panel-title"><span class="glyphicon glyphicon-user"></span> Rey Langit  </h3>
									</div>
									<div class="panel-body">
										<img src="Images/Robredo.jpg"class="img-thumbnail">
										</div>
										<div class="panel-footer">
											<button type="submit" name="Langit" class="btn btn-outline btn-primary"><span class="glyphicon glyphicon-pencil"></span> Rey Langit   </button>
										</div>
										</div>
										</div>
										<div class="col-lg-4">
										<div class="panel panel-primary">
									<div class="panel-heading">
										<h3 class="panel-title"><span class="glyphicon glyphicon-user"></span> Mark Lapid </h3>
									</div>
									<div class="panel-body">
										<img src="Images/Trillanes.jpg"class="img-thumbnail">
										</div>
										<div class="panel-footer">
											<button type="submit" name="Lapid" class="btn btn-outline btn-primary"><span class="glyphicon glyphicon-pencil"></span> Mark Lapid </button>
										</div>
										</div>
										</div>
									</div>
									
									<div class="row">
										<div class="col-lg-4">
										<div class="panel panel-primary">
									<div class="panel-heading">
										<h3 class="panel-title"><span class="glyphicon glyphicon-user"></span> Dante Liban </h3>
									</div>
									<div class="panel-body">
											<img src="Images/Marcos.jpg"class="img-thumbnail">
										</div>
										<div class="panel-footer">
											<button type="submit" name="Liban" class="btn btn-outline btn-primary"><span class="glyphicon glyphicon-pencil"></span> Dante Liban</button>
										</div>
										</div>
										</div>
										<div class="col-lg-4">
										<div class="panel panel-primary">
									<div class="panel-heading">
										<h3 class="panel-title"><span class="glyphicon glyphicon-user"></span> Romeo Maganto   </h3>
									</div>
									<div class="panel-body">
										<img src="Images/Robredo.jpg"class="img-thumbnail">
										</div>
										<div class="panel-footer">
											<button type="submit" name="Maganto" class="btn btn-outline btn-primary"><span class="glyphicon glyphicon-pencil"></span> Romeo Maganto</button>
										</div>
										</div>
										</div>
										<div class="col-lg-4">
										<div class="panel panel-primary">
									<div class="panel-heading">
										<h3 class="panel-title"><span class="glyphicon glyphicon-user"></span> Edu Manzano </h3>
									</div>
									<div class="panel-body">
										<img src="Images/Trillanes.jpg"class="img-thumbnail">
										</div>
										<div class="panel-footer">
											<button type="submit" name="Manzano" class="btn btn-outline btn-primary"><span class="glyphicon glyphicon-pencil"></span> Edu Manzano </button>
										</div>
										</div>
										</div>
									</div>
									
									<div class="row">
										<div class="col-lg-4">
										<div class="panel panel-primary">
									<div class="panel-heading">
										<h3 class="panel-title"><span class="glyphicon glyphicon-user"></span> Allan Montano  </h3>
									</div>
									<div class="panel-body">
											<img src="Images/Marcos.jpg"class="img-thumbnail">
										</div>
										<div class="panel-footer">
											<button type="submit" name="Montano" class="btn btn-outline btn-primary"><span class="glyphicon glyphicon-pencil"></span> Allan Montano </button>
										</div>
										</div>
										</div>
										<div class="col-lg-4">
										<div class="panel panel-primary">
									<div class="panel-heading">
										<h3 class="panel-title"><span class="glyphicon glyphicon-user"></span> Mon Montaño </h3>
									</div>
									<div class="panel-body">
										<img src="Images/Robredo.jpg"class="img-thumbnail">
										</div>
										<div class="panel-footer">
											<button type="submit" name="Montano1" class="btn btn-outline btn-primary"><span class="glyphicon glyphicon-pencil"></span> Mon Montaño </button>
										</div>
										</div>
										</div>
										<div class="col-lg-4">
										<div class="panel panel-primary">
									<div class="panel-heading">
										<h3 class="panel-title"><span class="glyphicon glyphicon-user"></span> Getulio Napeñas </h3>
									</div>
									<div class="panel-body">
										<img src="Images/Trillanes.jpg"class="img-thumbnail">
										</div>
										<div class="panel-footer">
											<button type="submit" name="Napenas" class="btn btn-outline btn-primary"><span class="glyphicon glyphicon-pencil"></span> Getulio Napeñas  </button>
										</div>
										</div>
										</div>
									</div>
									
									<div class="row">
										<div class="col-lg-4">
										<div class="panel panel-primary">
									<div class="panel-heading">
										<h3 class="panel-title"><span class="glyphicon glyphicon-user"></span> Susan Ople</h3>
									</div>
									<div class="panel-body">
											<img src="Images/Marcos.jpg"class="img-thumbnail">
										</div>
										<div class="panel-footer">
											<button type="submit" name="Ople" class="btn btn-outline btn-primary"><span class="glyphicon glyphicon-pencil"></span> Susan Ople  </button>
										</div>
										</div>
										</div>
										<div class="col-lg-4">
										<div class="panel panel-primary">
									<div class="panel-heading">
										<h3 class="panel-title"><span class="glyphicon glyphicon-user"></span> Sergio Osmeña III  </h3>
									</div>
									<div class="panel-body">
										<img src="Images/Robredo.jpg"class="img-thumbnail">
										</div>
										<div class="panel-footer">
											<button type="submit" name="Osmena" class="btn btn-outline btn-primary"><span class="glyphicon glyphicon-pencil"></span> Sergio Osmeña III  </button>
										</div>
										</div>
										</div>
										<div class="col-lg-4">
										<div class="panel panel-primary">
									<div class="panel-heading">
										<h3 class="panel-title"><span class="glyphicon glyphicon-user"></span> Manny Pacquiao  </h3>
									</div>
									<div class="panel-body">
										<img src="Images/Trillanes.jpg"class="img-thumbnail">
										</div>
										<div class="panel-footer">
											<button type="submit" name="Pacquiao" class="btn btn-outline btn-primary"><span class="glyphicon glyphicon-pencil"></span> Manny Pacquiao   </button>
										</div>
										</div>
										</div>
									</div>
									
									<div class="row">
										<div class="col-lg-4">
										<div class="panel panel-primary">
									<div class="panel-heading">
										<h3 class="panel-title"><span class="glyphicon glyphicon-user"></span> Mr. Coop Paez </h3>
									</div>
									<div class="panel-body">
											<img src="Images/Marcos.jpg"class="img-thumbnail">
										</div>
										<div class="panel-footer">
											<button type="submit" name="Paez" class="btn btn-outline btn-primary"><span class="glyphicon glyphicon-pencil"></span> Mr. Coop Paez   </button>
										</div>
										</div>
										</div>
										<div class="col-lg-4">
										<div class="panel panel-primary">
									<div class="panel-heading">
										<h3 class="panel-title"><span class="glyphicon glyphicon-user"></span> Samuel Pagdilao </h3>
									</div>
									<div class="panel-body">
										<img src="Images/Robredo.jpg"class="img-thumbnail">
										</div>
										<div class="panel-footer">
											<button type="submit" name="Pagdilao" class="btn btn-outline btn-primary"><span class="glyphicon glyphicon-pencil"></span> Samuel Pagdilao   </button>
										</div>
										</div>
										</div>
										<div class="col-lg-4">
										<div class="panel panel-primary">
									<div class="panel-heading">
										<h3 class="panel-title"><span class="glyphicon glyphicon-user"></span> Jovito Palparan Jr.   </h3>
									</div>
									<div class="panel-body">
										<img src="Images/Trillanes.jpg"class="img-thumbnail">
										</div>
										<div class="panel-footer">
											<button type="submit" name="Palparan" class="btn btn-outline btn-primary"><span class="glyphicon glyphicon-pencil"></span> Jovito Palparan Jr.    </button>
										</div>
										</div>
										</div>
									</div>
									
									<div class="row">
										<div class="col-lg-4">
										<div class="panel panel-primary">
									<div class="panel-heading">
										<h3 class="panel-title"><span class="glyphicon glyphicon-user"></span> Kiko Pangilinan </h3>
									</div>
									<div class="panel-body">
											<img src="Images/Marcos.jpg"class="img-thumbnail">
										</div>
										<div class="panel-footer">
											<button type="submit" name="Pangilinan" class="btn btn-outline btn-primary"><span class="glyphicon glyphicon-pencil"></span> Kiko Pangilinan   </button>
										</div>
										</div>
										</div>
										<div class="col-lg-4">
										<div class="panel panel-primary">
									<div class="panel-heading">
										<h3 class="panel-title"><span class="glyphicon glyphicon-user"></span> Carlos Jericho Petilla  </h3>
									</div>
									<div class="panel-body">
										<img src="Images/Robredo.jpg"class="img-thumbnail">
										</div>
										<div class="panel-footer">
											<button type="submit" name="Petilla" class="btn btn-outline btn-primary"><span class="glyphicon glyphicon-pencil"></span> Carlos Jericho Petilla </button>
										</div>
										</div>
										</div>
										<div class="col-lg-4">
										<div class="panel panel-primary">
									<div class="panel-heading">
										<h3 class="panel-title"><span class="glyphicon glyphicon-user"></span> Ralph Recto </h3>
									</div>
									<div class="panel-body">
										<img src="Images/Trillanes.jpg"class="img-thumbnail">
										</div>
										<div class="panel-footer">
											<button type="submit" name="Recto" class="btn btn-outline btn-primary"><span class="glyphicon glyphicon-pencil"></span> Ralph Recto     </button>
										</div>
										</div>
										</div>
									</div>
									
									<div class="row">
										<div class="col-lg-4">
										<div class="panel panel-primary">
									<div class="panel-heading">
										<h3 class="panel-title"><span class="glyphicon glyphicon-user"></span> Martin Romualdez  </h3>
									</div>
									<div class="panel-body">
											<img src="Images/Marcos.jpg"class="img-thumbnail">
										</div>
										<div class="panel-footer">
											<button type="submit" name="Romualdez" class="btn btn-outline btn-primary"><span class="glyphicon glyphicon-pencil"></span> Martin Romualdez    </button>
										</div>
										</div>
										</div>
										<div class="col-lg-4">
										<div class="panel panel-primary">
									<div class="panel-heading">
										<h3 class="panel-title"><span class="glyphicon glyphicon-user"></span> Roman Romulo   </h3>
									</div>
									<div class="panel-body">
										<img src="Images/Robredo.jpg"class="img-thumbnail">
										</div>
										<div class="panel-footer">
											<button type="submit" name="Romulo" class="btn btn-outline btn-primary"><span class="glyphicon glyphicon-pencil"></span> Roman Romulo  </button>
										</div>
										</div>
										</div>
										<div class="col-lg-4">
										<div class="panel panel-primary">
									<div class="panel-heading">
										<h3 class="panel-title"><span class="glyphicon glyphicon-user"></span> Dionisio Santiago  </h3>
									</div>
									<div class="panel-body">
										<img src="Images/Trillanes.jpg"class="img-thumbnail">
										</div>
										<div class="panel-footer">
											<button type="submit" name="Santiago" class="btn btn-outline btn-primary"><span class="glyphicon glyphicon-pencil"></span> Dionisio Santiago      </button>
										</div>
										</div>
										</div>
									</div>
									
									<div class="row">
										<div class="col-lg-4">
										<div class="panel panel-primary">
									<div class="panel-heading">
										<h3 class="panel-title"><span class="glyphicon glyphicon-user"></span> Vicente Sotto   </h3>
									</div>
									<div class="panel-body">
											<img src="Images/Marcos.jpg"class="img-thumbnail">
										</div>
										<div class="panel-footer">
											<button type="submit" name="Sotto" class="btn btn-outline btn-primary"><span class="glyphicon glyphicon-pencil"></span> Vicente Sotto     </button>
										</div>
										</div>
										</div>
										<div class="col-lg-4">
										<div class="panel panel-primary">
									<div class="panel-heading">
										<h3 class="panel-title"><span class="glyphicon glyphicon-user"></span> Francis Tolentino</h3>
									</div>
									<div class="panel-body">
										<img src="Images/Robredo.jpg"class="img-thumbnail">
										</div>
										<div class="panel-footer">
											<button type="submit" name="Tolentino" class="btn btn-outline btn-primary"><span class="glyphicon glyphicon-pencil"></span> Francis Tolentino  </button>
										</div>
										</div>
										</div>
										<div class="col-lg-4">
										<div class="panel panel-primary">
									<div class="panel-heading">
										<h3 class="panel-title"><span class="glyphicon glyphicon-user"></span> Diosdado Valeroso   </h3>
									</div>
									<div class="panel-body">
										<img src="Images/Trillanes.jpg"class="img-thumbnail">
										</div>
										<div class="panel-footer">
											<button type="submit" name="Valeroso" class="btn btn-outline btn-primary"><span class="glyphicon glyphicon-pencil"></span> Diosdado Valeroso </button>
										</div>
										</div>
										</div>
									</div>
									
									<div class="row">
										<div class="col-lg-4">
										<div class="panel panel-primary">
									<div class="panel-heading">
										<h3 class="panel-title"><span class="glyphicon glyphicon-user"></span> Joel Villanueva </h3>
									</div>
									<div class="panel-body">
											<img src="Images/Marcos.jpg"class="img-thumbnail">
										</div>
										<div class="panel-footer">
											<button type="submit" name="Villanueva" class="btn btn-outline btn-primary"><span class="glyphicon glyphicon-pencil"></span> Joel Villanueva      </button>
										</div>
										</div>
										</div>
										<div class="col-lg-4">
										<div class="panel panel-primary">
									<div class="panel-heading">
										<h3 class="panel-title"><span class="glyphicon glyphicon-user"></span> Migz Zubiri </h3>
									</div>
									<div class="panel-body">
										<img src="Images/Robredo.jpg"class="img-thumbnail">
										</div>
										<div class="panel-footer">
											<button type="submit" name="Zubiri" class="btn btn-outline btn-primary"><span class="glyphicon glyphicon-pencil"></span> Migz Zubiri  </button>
										</div>
										</div>
										</div>
									</div>
								</form>
								</div>
							</div>
							</div>
						</div>
						</div>
					</span>
                            </div>-->
      
        </div>
                        <!-- /.panel-footer -->
                    </div>
                    <!-- /.panel .chat-panel -->
                </div>
                <!-- /.col-lg-4 -->
            </div>
            <!-- /.row -->
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

</body>

</html>
