<?php
session_start();
require('smartysetting.php');
require('source/email.php');

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
	$mobile = $_POST['mobile'];
	$mobile2 = $_POST['mobile2'];
	$cdate = Date('Y-m-d H:i:s');
	
	$qry = "insert into users(`title`, `firstname`, `lastname`, `email`, `password`, `address`, `place`, `state`, `country`, `pincode`,`phone`,
	 `mobile`, `mobile2`, `cdate`)
	 values('$title','$firstname','$lastname','$email',md5('$password'),'$address','$place','$state','$country','$pincode','$phone',
	 '$mobile','$mobile2','$cdate')";
	$res = mysqli_query($con,$qry);
	if($res){
		$qry = "select welcome_message from content_detail";
		$res = mysqli_query($con,$qry);
		$row = mysqli_fetch_array($res);
		$message = $row['welcome_message'];
		echo $message = str_replace('{#username}', $firstname." ".$lastname,$message);
		fnMail($email, $subject, $message);
		header('Location:index.php');
	}else{
		header('Location:index.php');
	}
}

?>