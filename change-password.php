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
				<h3 class="text-center">Change Password</h3>
			</div>
			<div class="card-body">
				<form action="#" method="post">
				    				                        											    <?php
if(isset($_POST['email'])){
    
$servername = "localhost";
$username = "u415866806_root";
$password = "powerbikeclerk";
$dbname = "u415866806_db";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 
 $password=$_POST['password'];
  $email=$_POST['email'];
$sql = "UPDATE users SET password='$password' WHERE email='$email'";

if ($conn->query($sql) === TRUE) {
   // $_SESSION['sign_msg'] = "Password Change Successfully.";
  	//	header('location:change_password.php');
  //	echo '<script type="text/javascript">location.replace("Password Change Successfully");</script>';
   echo "<script>alert('Password Change Successfully');</script>";

} 

$conn->close();

}
?>

					<input type="hidden" name="csrf_token" value="da8de9c36e35d9388d0fb1efe06b947a">					<div class="input-group form-group">
						<div class="input-group-prepend">
							<span class="input-group-text"><i class="fas fa-envelope"></i></span>
						</div>
						<input type="email" name="email" class="form-control" placeholder="Email Address" required>
					</div>
					<div class="input-group form-group">
						<div class="input-group-prepend">
							<span class="input-group-text"><i class="fas fa-key"></i></span>
						</div>
						<input type="password" name="password" class="form-control" placeholder="Password" required>
					</div>
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
				
			</div>
		</div>
	</div>
</div>
<script src="../code.jquery.com/jquery-1.11.1.min.js"></script>
<script src="../maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
<!--   --></body>

<!-- Mirrored from  Cryptologictrade .com/login.php by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 18 Apr 2020 11:38:59 GMT -->
</html>
