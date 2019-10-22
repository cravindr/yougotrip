<?php
session_start();
require('smartysetting.php');

$smarty->assign('label_login',"Login");
$smarty->assign('url_login',"login.php");

$smarty->display('header.tpl');
$smarty->display('links_css_register.tpl');
$smarty->display('breadcrumbs.tpl');
$smarty->display('register.tpl');
$smarty->display('footer.tpl');
$smarty->display('links_js_register.tpl');
	
?>