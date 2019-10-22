<?php
session_start();
require('smartysetting.php');
require('authenticate.php');
//$adminid = $_SESSION['ADMIN_ID'];

if($_POST){
	$category_id = $_POST['category_id'];
	$cname = $_POST['cname'];
	$description = $_POST['description'];
	$qry= "update category set `category_desc`='$cname' where category_id='$category_id'";
	$res = mysqli_query($con,$qry);	
}

if($res){
	$_SESSION['ERROR_CODE'] = 1;
	$_SESSION['RESULT'] = "<h3> Category Updated Successfully. </h3>";
	$_SESSION['REDIRECT_URL'] = "categorylist.php";
	$_SESSION['ACTIVE_MENU_RESULT'] = "menu_tour.php";
	header('Location:result.php');
}else{
	$_SESSION['ERROR_CODE'] = 0;
	$_SESSION['RESULT'] = "<h3>Sorry Category not Updated.</h3>";
	$_SESSION['REDIRECT_URL'] = "category.php";
	$_SESSION['ACTIVE_MENU_RESULT'] = "menu_tour.php";
	header('Location:result.php');
}

?>
