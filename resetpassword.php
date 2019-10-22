<?php
session_start();
require('fgpasswordgenerator.php');
require('dbconnect.php');
require('source/email.php');

$email=$_POST['email'];
$newpass= generatePassword(15,5);

$qryname="select * from users where email='$email'";
$rs=mysqli_query($con,$qryname);

$noofrow=mysqli_num_rows($rs);

if ($noofrow==1)
{
	$row=mysqli_fetch_array($rs);
	
	$name=$row['firstname']. " ".$row['lastname'];
	
	$qrycontent="select forgot_password from   content_detail";
	$rs=mysqli_query($con,$qrycontent);
	$row=mysqli_fetch_array($rs);
	
	$forget_pass_message=$row['forgot_password'];
	
	$forget_pass_message=str_replace('#username',$name,$forget_pass_message);
	$forget_pass_message=str_replace('#newpassword',$newpass,$forget_pass_message);
	
	fnMail($email," Yougotrip.com Password Reset",$forget_pass_message);
	$qry="update users set password=md5('$newpass') where email='$email'";
	mysqli_query($con,$qry);
	$_SESSION['RESET_MSG']="Your Password has been reset successfully and email to your email id :<strong> $email</strong>" ;
}
else
{
	$_SESSION['RESET_MSG']="Invalid email id :<strong> $email</strong>" ;
}

header('Location:resetpasswordmsg.php');
?>