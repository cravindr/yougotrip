<?php
session_start();
require('smartysetting.php');

if(isset($_SESSION['TRIP_USER_ID'])){	
	$smarty->assign('label_login',"Logout");
	$smarty->assign('url_login',"logout.php");	
}else{
	$smarty->assign('label_login',"Login");
	$smarty->assign('url_login',"login.php");
}

$smarty->display('header.tpl');
$smarty->display('links_css_package_detail.tpl');
$smarty->display('breadcrumbs.tpl');
$smarty->assign('package','Flight Ticket Booking');
$smarty->display('enquiry.tpl');
$smarty->display('footer.tpl');
$smarty->display('links_js_package_detail.tpl');
	
?>