<?php
session_start();
require('smartysetting.php');
require('authenticate.php');
//$adminid = $_SESSION['ADMIN_ID'];

if($_POST){
	$cname = $_POST['cname'];
	$description = $_POST['description'];
	$qry= "insert into category(`category_desc`) values('$cname')";
	$res = mysqli_query($con,$qry);	
}

if($res){
	$_SESSION['ERROR_CODE'] = 1;
	$_SESSION['RESULT'] = "<h3> Category Added Successfully </h3>";
	$_SESSION['REDIRECT_URL'] = "categorylist.php";
	$_SESSION['ACTIVE_MENU_RESULT'] = "menu_tour.php";
	header('Location:result.php');
}else{
	$_SESSION['ERROR_CODE'] = 0;
	$_SESSION['RESULT'] = "<h3>Sorry Category not Added.</h3>";
	$_SESSION['REDIRECT_URL'] = "category.php";
	$_SESSION['ACTIVE_MENU_RESULT'] = "menu_tour.php";
	header('Location:result.php');
}

?>
