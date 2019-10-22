<?php
session_start();
require('smartysetting.php');

$smarty->assign('label_login',"Login");
$smarty->assign('url_login',"login.php");
$smarty->display('header.tpl');
$smarty->display('bookticket.tpl');
$smarty->display('footer.tpl');

	
?>