<?php
require('smartysetting.php');
require('authenticate.php');

$smarty->assign('menu_dashboard','class="active"');
$smarty->display('header.tpl');
	
$qry="select * from setting";
$res = mysqli_query($con,$qry);
$r = mysqli_num_rows($res);
if($r != 0){
	$row = mysqli_fetch_assoc($res);
	$smarty->assign('site_name',$row['sitename']);
	$smarty->assign('domain_name',$row['domainname']);
	$smarty->assign('title_name',$row['titlename']);
	$smarty->assign('logo',$row['logo']);
	$smarty->assign('subtitle',$row['subtitle']);
	$smarty->assign('meta_content',$row['metacontent']);
	$smarty->assign('meta_keyword',$row['metakeyword']);
	$smarty->assign('sbuttoncap',$row['searchbuttoncap']);
	$smarty->assign('address',$row['address']);
	$smarty->assign('email',$row['email']);
	$smarty->assign('phone',$row['phone']);
	$smarty->assign('website',$row['website']);
	$smarty->assign('fax',$row['fax']);

	$smarty->assign('settings_post_url','settings_upd.php');
}else{
	$smarty->assign('settings_post_url','settings_save.php');
}

$smarty->display('settings.tpl');
$smarty->display('footer.tpl');
?>
