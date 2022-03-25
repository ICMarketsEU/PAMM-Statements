<?php
session_start();
if (isset($_SESSION['loggedin']) && $_SESSION['loggedin'] == true) {
	    //$SEshop_id = $_SESSION['shop_id'];
        $SEshopname =  $_SESSION['firstname'];	
		$SEshopcurrency = $_SESSION['lastname'];
		//$SEshopcurrency1 = $_SESSION['department'];
				$SEshopuserid = $_SESSION['userid'];
		        $SEshopmail = $_SESSION['email'];	
			  $SEshopno1 = $_SESSION['phone'];	
			   $SEshopno2 = $_SESSION['country'];
		//$SEshoplogo = $_SESSION['deposit'];
$deposit = $_SESSION['deposit'];

$deposit1 = $_SESSION['deposit1'];
		
		
$deposit5 = $_SESSION['deposit5'];

	$link = $_SESSION['link'];	  
		
		$amt= $_SESSION['amt'];
		$bitcoin = $_SESSION['bitcoin'];
		
	  //  $SErole = $_SESSION['role'];
		
		}
		elseif ($_SESSION['loggedin']=""){
		header("Location: login1.php");
		}