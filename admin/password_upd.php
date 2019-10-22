<?php
session_start();
require('smartysetting.php');

if($_POST){
	$adminid = $_SESSION['ADMIN_ID'];
	$currentpassword=$_POST['currentpassword'];
	$password=$_POST['password'];
	$cpassword=$_POST['cpassword'];
}


$qry_current_pass = "select password from admin_profile where password= md5('$currentpassword') and uid = '$adminid'";
$res_current_pass = mysqli_query($con,$qry_current_pass);
$row_current_pass = mysqli_fetch_assoc($res_current_pass);
if($row_current_pass['password'] != ''){
	$qry= "update admin_profile set password= md5('$password') where uid = '$adminid'";
	$res = mysqli_query($con,$qry);
	if($res){
		$_SESSION['ERROR_CODE'] = 1;
		$_SESSION['RESULT'] = "<h3>Congratulations! Your Password has been successfully changed</h4>";
		$_SESSION['REDIRECT_URL'] = "dashboard.php";
		header('Location:result.php');
	}else{
		$_SESSION['ERROR_CODE'] = 0;
		$_SESSION['RESULT'] = "<h3>Password Not Changed... Error.</h3>";
		$_SESSION['REDIRECT_URL'] = "changepassword.php";
		header('Location:result.php');
	}
}else{
	$_SESSION['ERROR_CODE'] = 0;
	$_SESSION['RESULT'] = "<h3>Current Password given is wrong.</h3>";
	$_SESSION['REDIRECT_URL'] = "changepassword.php";
	header('Location:result.php');
}


?>
