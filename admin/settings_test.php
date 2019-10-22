<?php
require('smartysetting.php');


$smarty->assign('menu_profile','class="active"');
$smarty->display('header.tpl');
	
/*$qry="select * from setting_test";
$res = mysqli_query($con,$qry);
$r = mysqli_num_rows($res);
if($r != 0){
	
	$smarty->assign('name',$row['name']);
	$smarty->assign('address',$row['address']);
	$smarty->assign('place',$row['place']);
	$smarty->assign('settings_post_url','settings_test_upd.php');
}else{
	$smarty->assign('settings_post_url','settings_test_save.php');
}
*/
$smarty->assign('settings_post_url','settings_test_save.php');
$smarty->display('settings_test.tpl');
$smarty->display('footer.tpl');
?>
