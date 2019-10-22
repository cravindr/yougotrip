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
$smarty->display('links_css_buynow.tpl');
$smarty->display('breadcrumbs.tpl');

if(isset($_SESSION['ERROR_CODE'])){
	if($_SESSION['ERROR_CODE'] == 1){
		$smarty->assign('alert_type','');
	}
	else if($_SESSION['ERROR_CODE'] == 2){
		$smarty->assign('alert_type','alert-error');
	}
	else if($_SESSION['ERROR_CODE'] == 3){
		$smarty->assign('alert_type','alert-success');
	}
	else if($_SESSION['ERROR_CODE'] == 4){
		$smarty->assign('alert_type','alert-info');
	}	
	$smarty->assign('alert_head',$_SESSION['ERROR_HEAD']);
	$smarty->assign('alert_body',$_SESSION['ERROR_CONTENT']);
	$smarty->assign('redirect_url',$_SESSION['REDIRECT_URL']);
}

$smarty->display('result.tpl');
$smarty->display('footer.tpl');
$smarty->display('links_js_buynow.tpl');

	
?>