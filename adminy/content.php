<?php
require('smartysetting.php');
require('authenticate.php');

$smarty->assign('menu_profile','class="active"');
$smarty->display('header.tpl');

$qry="select * from content_detail";
$res=mysqli_query($con,$qry);
if($res)
	{
		$row=mysqli_fetch_array($res);
		$smarty->assign('home_link',$row['home_link']);
		$smarty->assign('about_us',$row['about_us']);
		$smarty->assign('services',$row['services']);
		$smarty->assign('contact',$row['contact']);
		$smarty->assign('terms_conditions',$row['terms_conditions']);
		$smarty->assign('return_policy',$row['return_policy']);
		$smarty->assign('invoice_message',$row['invoice_text']);
		$smarty->assign('welcome_message',$row['welcome_message']);
		$smarty->assign('forgot_password',$row['forgot_password']);
		$smarty->assign('activation',$row['activation']);
	
	}

$smarty->display('content.tpl');
$smarty->display('footer.tpl');
?>
