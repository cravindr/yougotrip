<?php
session_start();
require('smartysetting.php');
require('source/email.php');
require('fgpasswordgenerator.php');

if($_POST){
	$title = $_POST['title'];
	$firstname = $_POST['firstname'];
	$lastname = $_POST['lastname'];
	$email = $_POST['email'];
	$password = $_POST['password'];
	$confirmpassword = $_POST['confirmpassword'];
	$address = $_POST['address'];
	$place = $_POST['place'];
	$state = $_POST['state'];
	$country = $_POST['country'];
	$pincode = $_POST['pincode'];
	$phone = $_POST['phone'];
	$pan = $_POST['pan'];
	$mobile = $_POST['mobile'];
	$mobile2 = $_POST['mobile2'];
	$cdate = Date('Y-m-d H:i:s');
	$verifiacation_code=generatePassword(20,3);
	$verified='0';
	
	
	$qry = "insert into users(`title`, `firstname`, `lastname`, `email`, `password`, `address`, `place`, `state`, `country`, `pincode`,`pan`,`phone`,
	 `mobile`, `mobile2`, `cdate`,`verification_code`,`verified`)
	 values('$title','$firstname','$lastname','$email',md5('$password'),'$address','$place','$state','$country','$pincode','$pan','$phone',
	 '$mobile','$mobile2','$cdate','$verifiacation_code','$verified')";
	$res = mysqli_query($con,$qry);
	if($res){
		$qry = "select welcome_message from content_detail";
		$res = mysqli_query($con,$qry);
		$row = mysqli_fetch_array($res);
		$message = $row['welcome_message'];
		$message = str_replace('{#username}', $firstname." ".$lastname,$message);
		$sec_code=md5($password);
		$verification_url="http://yougotrip.com/useractivation.php?username=$firstname$lastname&sec_code=$sec_code&email=$email&vericode=$verifiacation_code";
		$message=str_replace('{#link}', $verification_url,$message);
		
		//echo $message;
		
		$subject="YouGoTrip.com";
		fnMail($email, $subject, $message);
		//error_reporting(E_ERROR | E_PARSE);
		header('Location:login.php');
	}else{
		header('Location:index.php');
	}
}

?>