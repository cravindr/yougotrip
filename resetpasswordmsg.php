<?php

session_start();
require('smartysetting.php');



	
	$smarty->display('header.tpl');
	$smarty->display('links_css_buynow.tpl');
	$smarty->display('breadcrumbs.tpl');
	$smarty->assign('resetmsg',$_SESSION['RESET_MSG']);
	$smarty->display('resetmsg.tpl');
	$smarty->display('footer.tpl');

	

?>




