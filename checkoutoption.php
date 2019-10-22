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

if(isset($_SESSION['TRIP_USER_ID']))
{
		$smarty->display('header.tpl');
		$smarty->display('links_css_checkoutoptionl.tpl');
		$smarty->display('breadcrumbs.tpl');
		$smarty->display('body_start.tpl');
		
		$pack_id = $_SESSION['ID_EDIT'];
		$smarty->display('checkoutoption.tpl');
		$smarty->display('rspan3.tpl');
		$smarty->display('body_close.tpl');
		
		$smarty->display('footer.tpl');
		$smarty->display('links_js_checkoutoption.tpl');
}
else
{
	header("Location:index.php");
}


	
?>