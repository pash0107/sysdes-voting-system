<!DOCTYPE html>
	<html>
		<head>
			<title>Batangas Quezon Online Survey System</title>
			<link rel="icon" href="Images/BQOSS.ico" type="image/ico" size="16x16 32x32">
			<meta name="viewport" content="width=device-width, initial scale=1.0">
			<link href="css/bootstrap.min.css" rel="stylesheet" type="text/css">
			<link href="css/Custom.css" rel="stylesheet" type="text/css">	
			<script src="js/jquery.js"></script>
			<script src="js/Respond.js"></script>
			<script src="js/bootstrap.js"></script>
			<script src="js/login.js"></script>
			<meta charset="utf-8">
		</head>
		<body background="Images/background.png" style="background-repeat: no-repeat;" onload="check();">
			<div class="container">
				<div class="row">
					<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
						<div class="jumbotron" style=" opacity: .9; margin-top: 30px; box-shadow: inset 1px -1px 1px #444, inset -1px 1px 1px #444;">
							<b><h1 style="font-family:Franklin Gothic Heavy;">
								<div class="logo">
									<a href='index.php'><img oncontextmenu='alert("Image context menu is disabled!");return false;' src="Images/BQOSS_logo.png" style="height:140px;width:140px;"></a>
								</div>
								Batangas Quezon Online Survey System</h1><b>
								<div class="panel panel-default">
									<div class="panel-heading">
										<h3 class="panel-title">
											<span class="glyphicon glyphicon-user"></span> Welcome to Log in Page
										</h3>
									</div>
									<div class="panel-body">
										<form class="form-horizontal">
											<div class="form-group">
												<label class="col-sm-2 control-label"><span class="glyphicon glyphicon-user"></span> Email: </label>
													<div class="col-sm-10">
														<input id="email" type="text" class="form-control" name="Email" placeholder="Email">
													</div> 
											</div>    
											<div class="form-group">
												<label for="inputPassword" class="col-sm-2 control-label"><span class="glyphicon glyphicon-asterisk"></span> Password: </label>
													<div class="col-sm-10">
														<input id="password" type="password" class="form-control" name="Password" placeholder="Password">
													</div>
											</div>
											
										</form>
										<div class="row">
											<div class="col-sm-offset-2 col-sm-10">
												<button onclick="login();" name="Login" class="btn btn-outline btn-default btn-lg btn-block" value="Login"><span class="glyphicon glyphicon-log-in"></span> Login User</button>
											</div>
										</div>
									</div>
									<div class="panel-footer">
										<div class="row">
													<div class="col-sm-offset-2 col-sm-10">
														<a href="Register.php" style="text-decoration: none;">
															<button type="button" class="btn btn-outline btn-default btn-lg btn-block"onclick="Register.php"><font color="#000000;"><span class="glyphicon glyphicon-user"></span> Register here</font></a></h3>	
														</a>
													</div>
										</div>
									</div> <!--Panel-Footer Ending.-->
								</div><!--Panel-Ending.-->
								<div class="footer">
									<h5>&#169; All right Researved. Batangas Quezon Online Survey System</h5>
									<h5><span class="glyphicon glyphicon-briefcase"></span> First Asia Institute of Technology and Humanities</h5>
								</div>
						</div><!--Jumbotron-Ending.-->
					</div><!--Column- Ending.-->
				</div> <!--Row Ending.-->
			</div> <!--Container Ending-->
			
</body>
</html>