									 <?php
require('connect.php');
if(isset($_POST['firstname'])){
					//$agree=$_POST['agree'];
				
				
				$fullname=$_POST['firstname'];
	$lastname=$_POST['lastname'];
	$password2=$_POST['password'];
	$email=$_POST['email'];
	$country=$_POST['country'];
	$phone=$_POST['phone'];
		//$empstatus=$_POST['empstatus'];
		//$timestamp=date("d/m/Y");

$transid = 'FW'.'-'.rand(100,999);

	//move_uploaded_file($_FILES["image"]["tmp_name"],"uploads/" . $_FILES["image"]["name"]);			
//$location=$_FILES["image"]["name"];

				//$agree=$_POST['agree'];
					//if(isset($_POST['agree'])){
					$userquery=mysql_query("SELECT * FROM users WHERE email='$email'") or die (mysql_error());
$countuser=@mysql_num_rows($userquery);
if ($countuser)
{
		
	$row=mysql_fetch_array($userquery);
	if($email==$row['email']){
		echo '<img src="3.ico" width="30" height="30">Email as been used ['.$email.']';
	}
}else{


		////////////////////////////////////
	$sqlquery="INSERT INTO users(userid, fullname, lastname, password, email, country, phone, deposit, percentage, accounttype, status,balance) VALUES ('$transid','$fullname','$lastname','$password2','$email','$country','$phone','0.00','0','STARTER','verified','0.00')";
	$result=@mysql_query($sqlquery);

	if($result){
		
		 header("location:confirm.php");
    
		//send mail
		        			//send mail to ADMIN mail
	
if(isset($_POST['email'])){
$fullname = $_POST['firstname'];
$email = $_POST['email'];

		date_default_timezone_set('UTC');
$date = date("l, F  j Y");
$time = date('h:i:s a', time());
$nowww = $date." ".$time;

	$to = 'support@Cryptologictrade.com';
	//$to = $_SESSION["qv"];
$subject = "Cryptologictrade ";
//$from = $email;


//$host = "smtp.unitedfunds24.com";
$host = "mx1.hostinger.com";
$port = '587';
$username = "u435055766";
$password = "makemoney2019";


//$to = 'info@24hourloan.co.za'; // note the comma

// Subject
//$subject = 'Client Application';

// Message
$message = "
<html>
<head>
<title></title>
</head>
<body><br>

Dear <b> ".$fullname."&nbsp;".$lastname."  </b> <br>
Thank you for choosing Cryptologictrade as your Trading Platform. Your Trading Account has been successfully created. Make sure to keep your login details safe for future references. For safety and security, never share your login details or password with anyone.
<p><b>Account Detail: </b></p>
<p>Email :".$email."  </p>
<p>Password : ".$password2."  </p>

<p>Regards,
<br>
<br>
<p>Contact Us via:support@Cryptologictrade.com
    </p>

</body>
</html>";


// data-live-search="true"
// To send HTML mail, the Content-type header must be set
$headers[] = 'MIME-Version: 1.0';
$headers[] = 'Content-type: text/html; charset=iso-8859-1';
$headers[] ='From:'.$to;
$headers[] = 'Cc: '.$email;
// Mail it
mail($to, $subject, $message, implode("\r\n", $headers));
if(mail){
echo 'Your Registration is Been Process, We will Get Back to You  As Soon as Possible Via Email (support@Cryptologictrade.com)';
}
else{
	echo 'Unable to resend code, try again';
}
}

		
	}else{
	echo '<img src="cancel.png" width="30" height="30">OPERATION FAIL, try again.';	
	}
	
}
					
					//}else{
				//echo '<img src="3.ico" width="30" height="30">Check the Terms and Conditions Box';	
				//}
					
				}					
	
?>

		