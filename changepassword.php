<?php

session_start();
require('smartysetting.php');
require('authendicate.php');

if(isset($_SESSION['TRIP_USER_ID'])){	
	$smarty->assign('label_login',"Logout");
	$smarty->assign('url_login',"logout.php");	
}else{
	$smarty->assign('label_login',"Login");
	$smarty->assign('url_login',"login.php");
}

if(isset($_SESSION['TRIP_USER_ID'])){
	$smarty->assign('form_post_url',"changepass.php");
	
	$smarty->display('header.tpl');
	$smarty->display('link_css_changepass.tpl');
	$smarty->display('breadcrumbs.tpl');
	
	$smarty->display('changepassword.tpl');
	
	$smarty->display('footer.tpl');
	$smarty->display('link_js_changepass.tpl');

	
}

else
{
		header("Location:login.php");
}


?>




