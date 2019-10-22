<?php
require('smartysetting.php');
require('authenticate.php');

$smarty->assign('menu_profile','class="active"');
$smarty->display('header.tpl');
$smarty->assign('posturl','layout_upd.php');

$qry="select * from layout_desc";

$res=mysqli_query($con,$qry);
if($res)
	{
		$row=mysqli_fetch_array($res);
		$smarty->assign('business_hours',$row['business_hours']);
		$smarty->assign('stayconnected',$row['stayconnected']);
		$smarty->assign('visa_process',$row['visa_process']);
		$smarty->assign('ticket_booking',$row['ticket_booking']);
		$smarty->assign('why_we_are',$row['why_we_are']);
			
	
	}

$smarty->display('layout.tpl');
$smarty->display('footer.tpl');
?>



