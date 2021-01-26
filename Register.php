<!DOCTYPE html>
	<html>
		<head>
			<title> Sign Up</title>
			<link rel="icon" href="Images/Logo.ico" type="image/ico" size="16x16 32x32">
			<meta name="viewport" content="width=device-width, initial scale=1.0">
			<link href="css/bootstrap.min.css" rel="stylesheet">
			<link href="css/Custom.css" rel="stylesheet">
			<script src="js/Respond.js"></script>
			<meta charset="utf-8">
		</head>
		<body background="bc.png">
			<?php
			 	 session_start();
				 require('db.php');
				 // If form submitted, insert values into the database.
				 $error=false;
				 if (isset($_POST['Email'])){
				 $FirstName = $_POST['FName'];
				 $LastName = $_POST['LName'];
				 $MiddleName = $_POST['MName'];
				 $Sex = $_POST['sex'];
				 $Age = $_POST['Age'];
				 $Status = $_POST['Status'];
				 $Province = $_POST['Province'];
				 $City = $_POST['City'];
				 $Barangay = $_POST['Barangay'];
				 $Email = $_POST['Email'];
				 $Password = $_POST['Password'];
				 $ConfirmPassword = $_POST['ConfirmPassword'];
				 //Striplashes and mysql_real_escape_string
				 $FirstName = stripslashes($FirstName);
				 $FirstName = mysql_real_escape_string($FirstName);
				 $LastName = stripslashes($LastName);
				 $LastName = mysql_real_escape_string($LastName);
				 $MiddleName = stripslashes($MiddleName);
				 $MiddleName = mysql_real_escape_string($MiddleName);
				 $Sex = stripslashes($Sex);
				 $Sex = mysql_real_escape_string($Sex);
				 $Age = stripslashes($Age);
				 $Age = mysql_real_escape_string($Age);
				 $Status = stripslashes($Status);
				 $Status = mysql_real_escape_string($Status);
				 $Province = stripslashes($Province);
				 $Province = mysql_real_escape_string($Province);
				 $City = stripslashes($City);
				 $City = mysql_real_escape_string($City);
				 $Barangay = stripslashes($Barangay);
				 $Barangay = mysql_real_escape_string($Barangay);
				 $Email = stripslashes($Email);
				 $Email = mysql_real_escape_string($Email);
				 $Password = stripslashes($Password);
				 $Password = mysql_real_escape_string($Password);
				 $ConfirmPassword = stripslashes($ConfirmPassword);
				 $ConfirmPassword = mysql_real_escape_string($ConfirmPassword);
				 $trn_date = date("Y-m-d H:i:s");
				 //Query database//
				 
				 if(!preg_match("/^[a-zA-Z ]+$/",$FirstName))
				{
					$error=true;
					$FirstName_error="Name must contain only alphabets and space.";
				}
				if(!preg_match("/^[a-zA-Z ]+$/",$LastName))
				{
					$error=true;
					$LastName_error="Name must contain only alphabets and space.";
				}
				if(!preg_match("/^[a-zA-Z ]+$/",$MiddleName))
				{
					$error=true;
					$MiddleName_error="Name must contain only alphabets and space.";
				}
				if(!filter_var($Email,FILTER_VALIDATE_EMAIL)){
					$error=true;
					$Email_error="Please enter a valid email address.";
				}
				if(strlen($Password)<6){
					$error=true;
					$Password_error="Password must be minimum of 6 characters.";
				}
				if($Password!=$ConfirmPassword){
					$error=true;
					$ConfirmPassword_error="Passwords do not match.";
				}
				if(empty($_SESSION['6_letters_code']) || strcmp($_SESSION['6_letters_code'], $_POST['6_letters_code']) != 0){
					$error=true;
					$captcha_error="\n The captcha code does not match!";
				}
				 $query = "INSERT into `electionsurvey`.`users` (FirstName,LastName,MiddleName,Sex,Age,Status,Province,City,Barangay,Email,Password,ConfirmPassword,trn_date) VALUES ('$FirstName','$LastName','$MiddleName','$Sex','$Age','$Status','$Province','$City','$Barangay','$Email' , '$Password','$ConfirmPassword', '$trn_date')";
				 $result = mysql_query($query);
				 
				 if($result){
					 echo "<script>alert('You have successfully created your account');window.location.href='index.php';</script>";
				 }
				 if(!$result){
					$note="Email already exists.";
					echo "<script>alert('The account do you want to create is taken. Please try another Email to register.');window.location.href='index.php';</script>";
				}
				}
			?>	
			<div class="container">
				<div class="row">
					<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
						<div class="jumbotron" style=" opacity: .9;margin-top: 30px; box-shadow: inset 1px -1px 1px #444, inset -1px 1px 1px #444;">
							<b><h1 style="font-family:Franklin Gothic Heavy;">
								<div class="logo">
									<a href='index.php'><img oncontextmenu='alert("Image context menu is disabled!");return false;' src="Images/BQOSS_logo.png" style="height:140px;width:140px;"></a>
								</div>
									Batangas Quezon Online Survey System
							   </h1><b>
							<h2><b>Registration Form<b></h2>
							<form method="POST"  action="<?php echo $_SERVER['PHP_SELF']; ?>" name="registration" class="form-horizontal" role="form">
								<div class="panel panel-default">
									<div class="panel-heading">
										<h3 class="panel-title"><span class="glyphicon glyphicon-user"></span> Personal Information:</h3>
									</div>
									<div class="panel-body">
											<div class="form-group">
												<label class="col-sm-2 control-label">First Name: </label>
													<div class="col-sm-10">
														<input type="text" class="form-control" value="<?php if($error) echo $FirstName; ?>" name="FName" placeholder="FirstName" required/>
														<span class="note"><?php if (isset($FirstName_error)) echo $FirstName_error; ?></span>
													</div> 
											</div>
											<div class="form-group">
												<label class="col-sm-2 control-label">Last Name: </label>
													<div class="col-sm-10">
														<input type="text" class="form-control" value="<?php if($error) echo $LastName; ?>" name="LName" placeholder="LastName" required/>
														<span class="note"><?php if (isset($LastName_error)) echo $LastName_error; ?></span>
														</span>
													</div> 
											</div>
											<div class="form-group">
												<label class="col-sm-2 control-label">Middle Name: </label>
													<div class="col-sm-10">
														<input type="text" class="form-control" value="<?php if($error) echo $MiddleName; ?>" name="MName" placeholder="MiddleName" required/>
														<span class="note"><?php if (isset($MiddleName_error)) echo $MiddleName_error; ?></span>
													</div> 
											</div>
											
											<div class="form-group">
												<label class="col-sm-2 control-label" for="sex">Select sex:</label>
													<div class="col-sm-10">
														<select name="sex" class="form-control" required>
															<option>Male</option>
															<option>Female</option>
														</select> 
													</div>
											</div>
											
											<div class="form-group">
												<label class="col-sm-2 control-label">Age: </label>
													<div class="col-sm-10">
														<input type="number" class="form-control" name="Age" placeholder="Age" required/>
													</div>
											</div>
											
											<div class="form-group">
												<label class="col-sm-2 control-label" for="status">Select status:</label>
													<div class="col-sm-10">
														<select name="Status" class="form-control" required>
															<option>Youth</option>
															<option>Employed</option>
															<option>Unemployed</option>
															<option>Self-employed</option>
															<option>Senior Citizen</option>
														</select> 
													</div>
											</div>
											
											<div class="form-group">
												<label class="col-sm-2 control-label" for="Province">Province:</label>
													<div class="col-sm-10">
														<select name="Province" class="form-control" required>
															<option>Batangas</option>
															<option>Quezon</option>
														</select> 
													</div>
											</div>
											
											<div class="form-group">
												<label class="col-sm-2 control-label">City/Municipalities: </label>
													<div class="col-sm-10">
														<input type="text" class="form-control" name="City" placeholder="City/Municipality" required/>
													</div> 
											</div>
											
											<div class="form-group">
												<label class="col-sm-2 control-label">Barangay </label>
													<div class="col-sm-10">
														<input type="text" class="form-control" name="Barangay" placeholder="Barangay" required/>
													</div> 
											</div>
									</div> <!--Panel-Body ending-->
								</div> <!--Panel-Primary Ending-->
								
								<div class="panel panel-default">
									<div class="panel-heading">
										<h3 class="panel-title"><span class="glyphicon glyphicon-leaf"></span> Account Information:</h3>
									</div>
									
									<div class="panel-body">
										<div class="form-group">
											<label class="col-sm-2 control-label">E-mail Address: </label>
												<div class="col-sm-10">
													<input type="email" class="form-control"  value="<?php if($error) echo $Email; ?>" name="Email" placeholder="Email Address"required/>
													<span class="note"><?php if (isset($Email_error)) echo $Email_error; ?></span>
													<span class="note"><?php if (isset($note)) { echo $note; } ?></span>
												</div> 
										</div>
											
										<div class="form-group">
											<label for="inputPassword" class="col-sm-2 control-label"><span class="glyphicon glyphicon-asterisk"></span> Password: </label>
												<div class="col-sm-10">
													<input type="password" class="form-control" name="Password" placeholder="Password" required/>
													<span class="note"><?php if (isset($Password_error)) echo $Password_error; ?></span>
												</div>
										</div>
											
										<div class="form-group">
											<label for="inputPassword" class="col-sm-2 control-label"><span class="glyphicon glyphicon-asterisk"></span> Verify Password: </label>
												<div class="col-sm-10">
													<input type="password" class="form-control" name="ConfirmPassword" placeholder="Verify Password" required/><br></span>
													<span class="note"><?php if (isset($ConfirmPassword_error)) echo $ConfirmPassword_error; ?></span>
												</div>
										</div>								
									</div><!--Panel-Body Ending-->								
								</div> <!--Panel Ending-->
								<center>
									<div class="panel panel-default">
										<div class="panel panel-heading">
											CAPTCHA SIGN UP
										</div>
									<div class="panel-body">
									<p>
										<img src="captcha_code_file.php?rand=<?php echo rand(); ?>" id='captchaimg' class="img-thumbnail" style="border: 3px solid c8c8c8;"><br>
										Enter the code above here:<br>
										<input class="custom-input" name="6_letters_code" type="text" required><br>
										<small>Can't read the image? Click <a href='javascript:refreshCaptcha();' style="text-decoration:none;color:#333333;"><b>here</b></a> to refresh.</small>
									</p>
									</div>
									</div>
									
								</center>
								<div class="row">
									<div class="form-group">
										<div class="col-lg-12">
											<button type="submit" class="btn btn-default btn-lg btn-block" href="index.php"><span class="glyphicon glyphicon-user"></span> Submit</button>
										</div>
									</div>
								</div>
							</form><!--Form Ending-->
							<div class="footer">
								<h5>&#169; All right Researved. Batangas Quezon Online Survey System</h5>
								<h5><span class="glyphicon glyphicon-briefcase"></span> First Asia Institute of Technology and Humanities</h5>
							</div>
						</div> <!--Jumbotron Ending-->
					</div><!--Column Ending.-->
				</div><!--Row Ending-->
			</div> <!--Container Ending-->
			<!-- JavaScript-->
			<script src="js/captcha.js"></script>
			<script src="js/gen_validatorv31.js"></script>
			<script src="http://code.jquery.com/jquery-latest.min.js"></script>
			<script src="js/bootstrap.min.js"></script>
		</body>
	</html>