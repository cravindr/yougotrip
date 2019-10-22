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


$qry= "insert into setting (`sitename`, `domainname`, `titlename`, `logo`, `subtitle`, `metacontent`, `metakeyword`,
 	  `searchbuttoncap`, `address`, `email`, `phone`, `website`, `fax`)
 	   values('$site_name','$domain_name','$title_name','$logo','$subtitle','$meta_content','$meta_keyword',
	   '$sbuttoncap','$address','$email','$phone','$website','$fax')";

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
