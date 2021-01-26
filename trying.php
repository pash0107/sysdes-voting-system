<?php
	session_start();
	
	if(isset($_SESSION['usr_id'])){
		header('location: account.php');
	}

	include_once 'db.php';

	$error=false;

	if(isset($_POST['signup'])){
		$email=mysqli_real_escape_string($connection, $_POST['email']);
        $password=mysqli_real_escape_string($connection, $_POST['password']);
		$confirm_password=mysqli_real_escape_string($connection, $_POST['confirm_password']);
		$fname=mysqli_real_escape_string($connection, $_POST['fname']);
		$lname=mysqli_real_escape_string($connection, $_POST['lname']);
		$addrline=mysqli_real_escape_string($connection, $_POST['addrline']);
		$barangay=mysqli_real_escape_string($connection, $_POST['barangay']);
		$towncity=mysqli_real_escape_string($connection, $_POST['towncity']);
		$province=mysqli_real_escape_string($connection, $_POST['province']);
		$mobnum=mysqli_real_escape_string($connection, $_POST['mobnum']);
		$bus_name=mysqli_real_escape_string($connection, $_POST['bus_name']);
		$bus_addrline=mysqli_real_escape_string($connection, $_POST['bus_addrline']);
		$bus_barangay=mysqli_real_escape_string($connection, $_POST['bus_barangay']);
		$bus_towncity=mysqli_real_escape_string($connection, $_POST['bus_towncity']);
		$bus_province=mysqli_real_escape_string($connection, $_POST['bus_province']);
		$bus_num=mysqli_real_escape_string($connection, $_POST['bus_num']);
		
		$email=stripslashes($email);
		$password=stripslashes($password);
		$confirm_password=stripslashes($confirm_password);
		$fname=ucwords($fname);
		$lname=ucwords($lname);
		$addrline=ucwords($addrline);
		$barangay=ucwords($barangay);
		$towncity=ucwords($towncity);
		$province=ucwords($province);
		$bus_name=ucwords($bus_name);
		$bus_addrline=ucwords($bus_addrline);
		$bus_barangay=ucwords($bus_barangay);
		$bus_towncity=ucwords($bus_towncity);
		$bus_province=ucwords($bus_province);
		
		$trn_date=date("Y-m-d H:i:s");
		
		if(!preg_match("/^[a-zA-Z ]+$/",$FirstName)){
			$error=true;
			$fname_error="Name must contain only alphabets and space.";
		}
		if(!preg_match("/^[a-zA-Z ]+$/",$LastName)){
			$error=true;
			$lname_error="Name must contain only alphabets and space.";
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
		if(!$error){
			if(mysqli_query($connection, "INSERT INTO users (FirstName,LastName,MiddleName,Sex,Age,Status,Province,City,Barangay,Email,Password,ConfirmPassword,trn_date) VALUES ('".$FirstName."','".$LastName."','".$MiddleName."','".$Sex."','".$Age."','".$Status."','".$Province."','".$City."','".$City."','".$Barangay."','".$Email."','".$Password."','".$ConfirmPassword."')")){
				header('location: sign-up.php?register=success');
				$successmsg="Successfully registered! <a href='login.php'>Click here to login</a>";
			}
			else{
				$note="Email already exists.";
			}
		}
	}
<!DOCTYPE html>
	<html>
		<head>
			<title> Sign Up</title>
			<link rel="icon" href="Images/Logo.ico" type="image/ico" size="16x16 32x32">
			<meta name="viewport" content="width=device-width, initial scale=1.0">
			<link href="css/bootstrap.min.css" rel="stylesheet">
			<link href="css/custom.css" rel="stylesheet">
			<script src="js/Respond.js"></script>
			<meta charset="utf-8">
		</head>
		<body>
			<?php
			 	 session_start();
				 require('db.php');
				 // If form submitted, insert values into the database.
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
				 $query = "INSERT into `electionsurvey`.`users` (FirstName,LastName,MiddleName,Sex,Age,Status,Province,City,Barangay,Email,Password,ConfirmPassword,trn_date) VALUES ('$FirstName','$LastName','$MiddleName','$Sex','$Age','$Status','$Province','$City','$Barangay','$Email' , '$Password','$ConfirmPassword', '$trn_date')";
				 $result = mysql_query($query);
				 
				 if($result){
					 echo "<script>alert('You have successfully created your account');window.location.href='index.php';</script>";
				 }
				 if(!$result){
					 echo "<script>alert('The account do you want to create is taken. Please try another Email to register.');window.location.href='index.php';</script>";
				 }
				 }
				 else{
			?>	
			<div class="container">
				<div class="row">
					<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
						<div class="jumbotron" style="margin-top: 30px; box-shadow: inset 1px -1px 1px #444, inset -1px 1px 1px #444;">
							<h1 style="font-family: Bookman Old Style;"><span class="glyphicon glyphicon-thumbs-up"></span> Online Campaign Poll System</h1>
							<h2 style="color: #337ab7;font-family: Bookman Old Style;">Registration form</h2>
							<form method="POST"  action="" name="registration" class="form-horizontal" role="form">
								<div class="panel panel-primary">
									<div class="panel-heading">
										<h3 class="panel-title"><span class="glyphicon glyphicon-user"></span> Personal Information:</h3>
									</div>
									<div class="panel-body">
											<div class="form-group">
												<label class="col-sm-2 control-label">First Name: </label>
													<div class="col-sm-10">
														<input type="text" class="form-control" name="FName" placeholder="FirstName" required/>
														
													</div> 
											</div>
											<div class="form-group">
												<label class="col-sm-2 control-label">Last Name: </label>
													<div class="col-sm-10">
														<input type="text" class="form-control" name="LName" placeholder="LastName" required/>
														</span>
													</div> 
											</div>
											<div class="form-group">
												<label class="col-sm-2 control-label">Middle Name: </label>
													<div class="col-sm-10">
														<input type="text" class="form-control" name="MName" placeholder="MiddleName" required/>
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
												<label class="col-sm-2 control-label">Province: </label>
													<div class="col-sm-10">
														<input type="text" class="form-control" name="Province" placeholder="Province" required/>
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
								
								<div class="panel panel-primary">
									<div class="panel-heading">
										<h3 class="panel-title"><span class="glyphicon glyphicon-leaf"></span> Account Information:</h3>
									</div>
									
									<div class="panel-body">
										<div class="form-group">
											<label class="col-sm-2 control-label">E-mail Address: </label>
												<div class="col-sm-10">
													<input type="text" class="form-control" name="Email" placeholder="Email Address"required/>
												</div> 
										</div>
											
										<div class="form-group">
											<label for="inputPassword" class="col-sm-2 control-label"><span class="glyphicon glyphicon-asterisk"></span> Password: </label>
												<div class="col-sm-10">
													<input type="password" class="form-control" name="Password" placeholder="Password" required/>
												</div>
										</div>
											
										<div class="form-group">
											<label for="inputPassword" class="col-sm-2 control-label"><span class="glyphicon glyphicon-asterisk"></span> Verify Password: </label>
												<div class="col-sm-10">
													<input type="password" class="form-control" name="ConfirmPassword" placeholder="Verify Password" required/><br></span>
												</div>
										</div>								
									</div><!--Panel-Body Ending-->								
								</div> <!--Panel Ending-->
								<!--<center>
									<p>
										<img src="captcha_code_file.php?rand=<?php echo rand(); ?>" id='captchaimg'><br>
										Enter the code above here:<br>
										<input class="custom-input" name="6_letters_code" type="text" required><br>
										<small>Can't read the image? Click <a href='javascript:refreshCaptcha();' style="text-decoration:none;color:#333333;"><b>here</b></a> to refresh.</small>
									</p>
									
								</center>-->
								<div class="row">
									<div class="form-group">
										<div class="col-lg-6">
											<button type="back" class="btn btn-primary btn-lg btn-block" href="index.php"><span class="glyphicon glyphicon-pencil"></span> Back</button>
										</div>
										<div class="col-lg-6">
											<!--<input class="btn btn-primary btn-lg btn-block" type="submit" name="submit" value="SIGN UP"></input>-->
											<button type="submit" name="submit" class="btn btn-primary btn-lg btn-block"><span class="glyphicon glyphicon-pencil"></span> Register</button>
										</div>
									</div>
								</div>
							</form><!--Form Ending-->
						</div> <!--Jumbotron Ending-->
					</div><!--Column Ending.-->
				</div><!--Row Ending-->
			</div> <!--Container Ending-->
			<!-- JavaScript-->
			<script src="js/captcha.js"></script>
			<script src="js/gen_validatorv31.js"></script>
			<script src="http://code.jquery.com/jquery-latest.min.js"></script>
			<script src="js/bootstrap.min.js"></script>
				 <?php } ?>
		</body>
	</html>