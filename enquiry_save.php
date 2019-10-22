<?php
session_start();
require('smartysetting.php');
require('source/email.php');

if($_POST){
	$name = $_POST['name'];
	$email = $_POST['email'];
	$phone = $_POST['phone'];
	$city = $_POST['city'];
	$comments = $_POST['comments'];
	$packtitle= $_POST['packtitle'];
	
	$date = Date('Y-m-d H:i:s');
	$concat_tour = $_POST['concat_tour'];		
	
	if($concat_tour != ''){
		$comments = $concat_tour.$comments;	
	}
	
	$message="Name:$name <br>Email Id:$email<br>Phone:$phone<br>City:$city<br>Pack Title:$packtitle<br>Comments:$comments";
	
	$qry = "insert into crm(`first_name`, `email`, `mobile`, `city`, `desc`, `cdate`,`enquiry_title`) 
	values('$name','$email','$phone','$city','$comments','$date','$packtitle')";
	$res = mysqli_query($con,$qry);
	
	fnMail("md@yougotrip.com","Enquiry from Yougotrip", $message);
	
	$_SESSION['ERROR_CODE']=3;
	$_SESSION['ERROR_HEAD']="Thanks for your Enquiry" ;
	$_SESSION['ERROR_CONTENT']="We will reply soon";
	$_SESSION['REDIRECT_URL']="index.php";
	
	
	if($res){
		header('Location:result.php');
	}else{
		header('Location:result.php');
	}
}

?>