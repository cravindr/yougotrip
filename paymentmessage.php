<?php
session_start();
session_start();
require('smartysetting.php');

if(isset($_SESSION['TRIP_USER_ID'])){	
	$smarty->assign('label_login',"Logout");
	$smarty->assign('url_login',"logout.php");	
}else{
	$smarty->assign('label_login',"Login");
	$smarty->assign('url_login',"login.php");
}

if(isset($_SESSION['TRIP_USER_ID'])){
	
	$smarty->display('header.tpl');
	$smarty->display('links_css_buynow.tpl');
	$smarty->display('breadcrumbs.tpl');
	$smarty->assign('payment_message',$_SESSION['PAYMENT_MESSAGE']);
	unset($_SESSION['PAYMENT_MESSAGE']);
	$smarty->display('paymentmessage.tpl');
	$smarty->display('footer.tpl');

	
}

else
{
		header("Location:index.php");
}


?>




