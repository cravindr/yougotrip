<?php
require('smartysetting.php');
require('authenticate.php');

$smarty->assign('menu_dashboard','class="active"');
$smarty->display('header.tpl');

$qry="select * from social";
$res=mysqli_query($con,$qry);
if($res)
	{
		$row=mysqli_fetch_array($res);
		$smarty->assign('callus',$row['callus']);
		$smarty->assign('feed',$row['feed']);
		$smarty->assign('facebook',$row['facebook']);
		$smarty->assign('twitter',$row['twitter']);
		$smarty->assign('googleplus',$row['googleplus']);
		$smarty->assign('return_policy',$row['return_policy']);
		$smarty->assign('pinterest',$row['pinterest']);
		$smarty->assign('linkedin',$row['linkedin']);
		$smarty->assign('vimeo',$row['vimeo']);
		$smarty->assign('youtube',$row['youtube']);
	
	}
$smarty->display('social.tpl');
$smarty->display('footer.tpl');
?>
