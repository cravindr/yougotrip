<?php
session_start();

require('smartysetting.php');

if($_POST){
	
	$name = $_POST['name'];
	$email = $_POST['email'];
	$password = $_POST['password'];
}


$qry= "insert into samplesetting_oom (`name`, `email`, `password`)
 	   values('$name','$email','$password')";

$res = mysqli_query($con,$qry);
if($res){
	$_SESSION['ERROR_CODE'] = 1;
	$_SESSION['RESULT'] = "<h3>Settings added Successfully. </h3>";
	$_SESSION['REDIRECT_URL'] = "settings.php";
	$_SESSION['ACTIVE_MENU_RESULT'] = "menu_dashboard.php";
	header('Location:result.php');
}else{
	$_SESSION['ERROR_CODE'] = 0;
	$_SESSION['RESULT'] = "<h3>Sorry Settings not Added.</h3>";
	$_SESSION['REDIRECT_URL'] = "settings.php";
	$_SESSION['ACTIVE_MENU_RESULT'] = "menu_dashboard.php";
	header('Location:result.php');
}

?>