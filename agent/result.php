<?php
session_start();
require('smartysetting.php');
require('authenticate.php');

//$_SESSION['ERROR_CODE'] = 0;
//$_SESSION['RESULT'] = "<h3>Congratulations! Your ad will be available on 99poster in 3 to 6 hours. </h3>
//						<h4>As soon as your ad is active we'll send you an email notification. Meanwhile you can edit it and create the best ad.</h4>";

$menu_active = $_SESSION['ACTIVE_MENU_RESULT'];

$smarty->assign($menu_active,'class="active"');
$smarty->display('header.tpl');
if(isset($_SESSION['ERROR_CODE'])){
	if($_SESSION['ERROR_CODE'] == 1){
		$smarty->assign('color','green');
		$smarty->assign('result',$_SESSION['RESULT']);
	}
	else if($_SESSION['ERROR_CODE'] == 0){
		$smarty->assign('color','yellow');
		$smarty->assign('result',$_SESSION['RESULT']);
	}
	$smarty->assign('redirect_url',$_SESSION['REDIRECT_URL']);
}

$smarty->display('result.tpl');
$smarty->display('footer.tpl');
?>
