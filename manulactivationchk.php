<?php
session_start();
require('dbconnect.php');
$email=$_POST['email'];
$verification_code=$_POST['verification_code'];
$qry="select * from users where email='$email' and verification_code='$verification_code'";

$rs=mysqli_query($con,$qry);
if(mysqli_num_rows($rs)==1)
{
	$upd_qry="update users set verified='1' where email='$email'";
	mysqli_query($con,$upd_qry);
	header("Location:login.php");
}
else
{
	$_SESSION['ERR_MSG']="Unable to Activate this user. either Already activated or Invalid activation message<br> Please Contact support@yougotrip.com";
	header("Location:err_message.php");
}
?>