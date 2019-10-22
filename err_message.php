<?php

session_start();
require('smartysetting.php');


	
	$smarty->display('header.tpl');
	$smarty->display('link_css_changepass.tpl');
	$smarty->display('breadcrumbs.tpl');
	
	$smarty->assign('message',$_SESSION['ERR_MSG']);
	unset($_SESSION['ERR_MSG']);
	
	$smarty->display('err_message.tpl');
	$smarty->display('footer.tpl');
	$smarty->display('link_js_changepass.tpl');

?>




