<!DOCTYPE html>
	<html>
		<head>
			<title> Online Campaign Poll System</title>
			<link rel="icon" href="Images/Logo.ico" type="image/ico" size="16x16 32x32">
			<meta name="viewport" content="width=device-width, initial scale=1.0">
			<link href="css/bootstrap.min.css" rel="stylesheet" type="text/css">
			<link href="css/Custom.css" rel="stylesheet" type="text/css">
			<script src="js/jquery.js"></script>
			<script src="js/Respond.js"></script>
			<script src="js/bootstrap.js"></script>
			<meta charset="utf-8">
		</head>
		<body background="Images/background.png">
			<?php
				 require('db.php');
				 session_start();
				 // If form submitted, insert values into the database.
				 if (isset($_POST['AdminName'])){
				 $AdminName = $_POST['AdminName'];
				 $AdminPassword = $_POST['AdminPassword'];
				 $AdminName = stripslashes($AdminName);
				 $AdminName = mysql_real_escape_string($AdminName);
				 $AdminPassword = stripslashes($AdminPassword);
				 $AdminPassword = mysql_real_escape_string($AdminPassword);
				 //Checking is user existing in the database or not
				 $query1 = "SELECT * FROM `electionsurvey`.`admin` WHERE AdminName='$AdminName' and AdminPassword='$AdminPassword'";
				 $result1 = mysql_query($query1) or die(mysql_error());
				 $rows1 = mysql_num_rows($result1);
				 if($rows1==1){
				 $_SESSION['AdminName'] = $AdminName;
				 header("Location: admindashboard.php"); // Redirect admin to adminlogin.php
				 }else{
				 echo "<script>alert('The account you want to enter is not an administrator.');window.location.href='index.php';</script>";
				 }
				 }
				 else{
					 echo "<script>alert('You're not an authorized admin.');window.location.href='adminlogin.php';</script>";
			?>
			<div class="container">
				<div class="row">
					<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
						<div class="jumbotron" style=" opacity: .9; margin-top: 30px; box-shadow: inset 1px -1px 1px #444, inset -1px 1px 1px #444;">
							<b><h1 style="font-family:Franklin Gothic Heavy;">
								<div class="logo">
									<a href='adminlogin.php'><img oncontextmenu='alert("Image context menu is disabled!");return false;' src="Images/BQOSS_logo.png" style="height:140px;width:140px;"></a>
								</div>
							Batangas Quezon Online Survey System</h1><b>
							<h2><b>Administrator<b></h2>
								<div class="panel panel-default">
									<div class="panel-heading">
										<h3 class="panel-title">
											<span class="glyphicon glyphicon-user"></span> Welcome to ADMIN Log in Page
										</h3>
									</div>
									<div class="panel-body">
										<form method="POST" class="form-horizontal" action="" role="form" name="login">
											<div class="form-group">
												<label class="col-sm-2 control-label"><span class="glyphicon glyphicon-user"></span> AdminName: </label>
													<div class="col-sm-10">
														<input type="text" class="form-control" name="AdminName" placeholder="AdminName">
													</div> 
											</div>    
											<div class="form-group">
												<label for="inputPassword" class="col-sm-2 control-label"><span class="glyphicon glyphicon-asterisk"></span> AdminPassword: </label>
													<div class="col-sm-10">
														<input type="password" class="form-control" name="AdminPassword" placeholder="Password">
													</div>
											</div>
													
												<div class="row">
												<div class="col-sm-6">
													<button href="index.php" class="btn btn-lg btn btn-default btn btn-block"><span class="glyphicon glyphicon-user"></span> Back to User Log In</a></button>
												</div>
												<div class="col-sm-6">
													<button type="submit" class="btn btn-lg btn-default btn btn-block" value="Login"><span class="glyphicon glyphicon-lock"></span> Login Admin</a>
												</div>
												</div>
										</form>
									</div>
									
								</div><!--Panel-Ending.-->
								<div class="footer">
									<h5>&#169; All right Researved. Batangas Quezon Online Survey System</h5>
									<h5><span class="glyphicon glyphicon-briefcase"></span> First Asia Institute of Technology and Humanities</h5>
								</div>
						</div><!--Jumbotron-Ending.-->
					</div><!--Column- Ending.-->
				</div> <!--Row Ending.-->
			</div> <!--Container Ending-->
			<?php }?>
</body>
</html>