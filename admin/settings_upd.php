<?php
session_start();
require('smartysetting.php');
require('authenticate.php');

if($_POST){
	
	$site_name = $_POST['site_name'];
	$domain_name = $_POST['domain_name'];
	$title_name = $_POST['title_name'];
	$logo = $_POST['logo'];
	$subtitle = $_POST['subtitle'];
	$meta_content = $_POST['meta_content'];
	$meta_keyword = $_POST['meta_keyword'];
	$sbuttoncap = $_POST['sbuttoncap'];
	$address = $_POST['address'];
	$email = $_POST['email'];
	$phone = $_POST['phone'];
	$website = $_POST['website'];
	$fax = $_POST['fax'];	
}


$qry= "update setting set `sitename`='$site_name', `domainname`='$domain_name', `titlename`='$title_name', `logo`='$logo',
	 `subtitle`='$subtitle', `metacontent`='$meta_content', `metakeyword`='$meta_keyword',
 	  `searchbuttoncap`='$sbuttoncap', `address`='$address', `email`='$email', `phone`='$phone', `website`='$website', `fax`='$fax'";

$res = mysqli_query($con,$qry);

if($res){
	$_SESSION['ERROR_CODE'] = 1;
	$_SESSION['RESULT'] = "<h3>Settings updated Successfully. </h3>";
	$_SESSION['REDIRECT_URL'] = "settings.php";
	$_SESSION['ACTIVE_MENU_RESULT'] = "menu_dashboard.php";
	header('Location:result.php');
}else{
	$_SESSION['ERROR_CODE'] = 0;
	$_SESSION['RESULT'] = "<h3>Sorry Settings not Updated.</h3>";
	$_SESSION['REDIRECT_URL'] = "settings.php";
	$_SESSION['ACTIVE_MENU_RESULT'] = "menu_dashboard.php";
	header('Location:result.php');
}

?>
