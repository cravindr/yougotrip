<?php
session_start();
require('smartysetting.php');
require('dbconnect.php');

$smarty->assign('label_login',"Login");
$smarty->assign('url_login',"login.php");

$smarty->display('header.tpl');
$smarty->display('link_css_agent.tpl');

$smarty->display('links_css_register.tpl');
$smarty->display('breadcrumbs.tpl');

	$smarty->assign('display_img','style="display:none"');	
	$smarty->assign('user_post_url','agent_save.php');	

$smarty->display('agent.tpl');
$smarty->display('footer.tpl');
$smarty->display('link_js_agent.tpl');
	
?>