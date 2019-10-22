<?php
session_start();
require('dbconnect.php');
$username=$_GET['username'];
$email=$_GET['email'];
$sec_code=$_GET['sec_code'];
$vericode=$_GET['vericode'];

$qry="select * from users where email='$email' and password='$sec_code' and verification_code='$vericode'";

$rs=mysqli_query($con,$qry);
$noorw=mysqli_num_rows($rs);
if($noorw==1)
{
	$upd_qry="update users set verified='1' where  email='$email'";
	 
	mysqli_query($con,$upd_qry);
	header("Location:login.php");
}
else
{
	$_SESSION['ERR_MSG']="Unable to Activate this user. either Already activated or Invalid activation message<br> Please Contact support@yougotrip.com";
	header("Location:err_message.php");
}


?>