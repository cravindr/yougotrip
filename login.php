<?php
session_start();
require('smartysetting.php');

$smarty->assign('label_login',"Login");
$smarty->assign('url_login',"login.php");

if($_SESSION['loginerror'] == 1)
{
	$smarty->assign('loginfailed','<h4 style="color:#FD7800">Invalid Username or Password </h4>');
}
else
{
	$smarty->assign('loginfailed','');
}

$smarty->display('header.tpl');
$smarty->display('links_css_register.tpl');
$smarty->display('breadcrumbs.tpl');

if(isset($_SESSION['LOGIN_REDIRECT_URL'])){
	$smarty->assign('redirecturl',$_SESSION['LOGIN_REDIRECT_URL']);
}else{
	$smarty->assign('redirecturl','index.php');
}
$smarty->display('login.tpl');

$smarty->display('footer.tpl');
$smarty->display('links_js_register.tpl');
	
?>