<!DOCTYPE html>
<html lang="en">

<!-- Mirrored from  Cryptologictrade .com/login.php by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 18 Apr 2020 11:38:47 GMT -->
<!-- Added by HTTrack --><meta http-equiv="content-type" content="text/html;charset=UTF-8" /><!-- /Added by HTTrack -->
<head>
  <meta charset="utf-8">
  <title>Login |  Cryptologictrade </title>
  <meta name="description" content=" Cryptologictrade is your leading cryptocurrency investment and trading platform that offersBinary and Forex trading options, provides 24/7 customer support, high level of security, and stable deposits and withdrawals.">
  <meta name="keywords" content=" Cryptologictrade ,Binary and Forex Investment,Binary and Forex Trading Platform, Binary Trading Platform, Digital Options Trading, BTC, Cryptocurrency Investment">
  <meta name="author" content=" Cryptologictrade ">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="icon" href="images/favicon.png">
  <!--Fontawesome CDN-->
	<link rel="stylesheet" href="../use.fontawesome.com/releases/v5.3.1/css/all.css" integrity="sha384-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU" crossorigin="anonymous">
  <link href="bootstrap.min.css" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css?family=Open+Sans&amp;display=swap" rel="stylesheet">
  <link href="style.css" rel="stylesheet" type="text/css">
</head>
<body>
<div class="container">
	<div class="auth-logo">
	   <a href="index-2.html"><img src="images/login_logo.png" class="mx-auto text-center"></a>
	</div>
	<div class="d-flex justify-content-center h-100">
		<div class="card">
						<div class="card-header">
				<h3 class="text-center">Forget Password</h3>
			</div>
			<div class="card-body">
				<form action="#" method="post">
				    <?php
	include('conn.php');
	session_start();

	if ($_SERVER["REQUEST_METHOD"] == "POST") {

	function check_input($data){
		$data=trim($data);
		$data=stripslashes($data);
		$data=htmlspecialchars($data);
		return $data;
	}

	$email=check_input($_POST['email']);
	

	if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
  		$_SESSION['sign_msg'] = "Invalid email format";
  		header('location:../forget-password.php');
	}

	else{

		$query=mysqli_query($conn,"select * from user where email='$email'");
		if(mysqli_num_rows($query)>0){
			$_SESSION['sign_msg'] = "Email already taken";
  			header('location:../forget-password.php');
		}
		else{
		//depends on how you set your verification code
		$set='123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
		$code=substr(str_shuffle($set), 0, 12);

		
		//default value for our verify is 0, means it is unverified

		//sending email verification
		$to = $email;
			$subject = "Reset Password Verification Code";
			$message = "
				<html>
				<title> Cryptologictrade </title>
				</head>
				<body>
				<h2>RESET PASSWORD</h2>
																<p>Hello, request has been made to reset your password. To reset your password, please click on this link:</p>
				<p><h4><a href='https://www.PrimeFolioNetwork.com/change-password.php?uid=".$uid."&code=".$code."'>
				
				https://www. Cryptologictrade .com/change-password.php?uid=".$uid."&code=".$code."
				
				</a></h4></p>
				<p>If you did not make this request, you do not need to take any action. Your password cannot be changed without clicking the above link to verify the request. </p>
				</body>
				</html>
				";
			//dont forget to include content-type on header if your sending html
			$headers = "MIME-Version: 1.0" . "\r\n";
			$headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";
			$headers .= "From: noreply@PrimeFolioNetwork.com". "\r\n" .
						"CC: .$email.";

		mail($to,$subject,$message,$headers);

  	 echo "<script>alert('A link to reset your password has been sent to your email address. Follow this link to reset your password');</script>";
  		}
	}
	}
?>


					<input type="hidden" name="csrf_token" value="da8de9c36e35d9388d0fb1efe06b947a">					<div class="input-group form-group">
						<div class="input-group-prepend">
							<span class="input-group-text"><i class="fas fa-envelope"></i></span>
						</div>
						<input type="email" name="email" class="form-control" placeholder="Email Address" required>
					</div>
			<!--		<div class="input-group form-group">
						<div class="input-group-prepend">
							<span class="input-group-text"><i class="fas fa-key"></i></span>
						</div>
						<input type="password" name="password" class="form-control" placeholder="Password" required>
					</div>  -->
					<div class="row align-items-center remember">
						<input type="checkbox">Remember Me
					</div>
					<div class="form-group">
						<input type="submit" name="login" value="Login" class="btn float-right login_btn">
					</div>
				</form>
			</div>
			<div class="card-footer">
				<div class="d-flex justify-content-center links">
					Don't have an account?<a href="login.php">Login</a>
				</div>
				<div class="d-flex justify-content-center">
					<a href="forget-password.php">Forgot your password?</a>
				</div>
			</div>
		</div>
	</div>
</div>
<script src="../code.jquery.com/jquery-1.11.1.min.js"></script>
<script src="../maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
<!--   --></body>

<!-- Mirrored from  Cryptologictrade .com/login.php by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 18 Apr 2020 11:38:59 GMT -->
</html>
