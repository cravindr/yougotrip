<?php
require('smartysetting.php');

$smarty->assign('menu_profile','class="active"');
$smarty->display('header.tpl');

$qry="select * from samplesetting_oom";
$res = mysqli_query($con,$qry);
$r = mysqli_num_rows($res);

if($r != 0){
	$row = mysqli_fetch_assoc($res);
	$smarty->assign('name',$row['name']);
	$smarty->assign('email',$row['email']);
	$smarty->assign('password',$row['password']);
	$smarty->assign('settings_post_url','settings_upload.php');
}else{
	$smarty->assign('settings_post_url','setting_save_oom.php');
}






$smarty->display('setting_design_oom.tpl');
$smarty->display('footer.tpl');


?>