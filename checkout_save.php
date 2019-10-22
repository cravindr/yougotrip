<?php
session_start();
require('smartysetting.php');
require('source/email.php');

if($_POST){
	
	$qry = "insert into ";
	$res = mysqli_query($con,$qry);
	if($res){
		$qry = "select invoice_text from content_detail";
		$res = mysqli_query($con,$qry);
		$row = mysqli_fetch_array($res);
		$message = $row['invoice_text'];
		$message = str_replace('{#name}', $firstname." ".$lastname,$message);
		$message = str_replace('{#package_name}', $pack_name);		
		fnMail($email, $subject, $message);
		header('Location:index.php');
	}else{
		header('Location:index.php');
	}
}

?>

