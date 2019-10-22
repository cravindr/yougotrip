<?php
session_start();
require('smartysetting.php');

$smarty->display('header.tpl');
$smarty->display('links_css_register.tpl');
$smarty->display('breadcrumbs.tpl');
$smarty->assign('form_post_url','resetpassword.php');

$smarty->display('forgetpassword.tpl');
$smarty->display('footer.tpl');
$smarty->display('links_js_register.tpl');
	
?>