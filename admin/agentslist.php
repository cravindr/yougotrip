<?php
session_start();
require('smartysetting.php');
require('authenticate.php');
//$adminid = $_SESSION['ADMIN_ID'];

$smarty->assign('menu_agent','class="active"');
$smarty->display('header.tpl');

$smarty->assign('tbl_title','Agents List');
$smarty->assign('tbl_th_name','Agent Name');
$smarty->assign('tbl_th_city','City');
$smarty->assign('tbl_th_country','Country');
$smarty->assign('tbl_th_company','Company');
$smarty->assign('tbl_th_email','Email');
$smarty->assign('tbl_th_mobile','Mobile');
$smarty->assign('tbl_th_date','Date');

$smarty->display('agent_tab_header.tpl');

$qry = "select * from agent";
$res = mysqli_query($con,$qry);

while($row = mysqli_fetch_array($res)){
	
	$smarty->assign('tbl_row_first_name',$row['first_name'].$row['last_name']);
	$smarty->assign('tbl_row_city',$row['city']);
	$smarty->assign('tbl_row_country',$row['country']);	
	$smarty->assign('tbl_row_company',$row['company']);
	$smarty->assign('tbl_row_email',$row['email']);
	$smarty->assign('tbl_row_mobile',$row['mobile']);
	$smarty->assign('tbl_row_cdate',$row['cdate']);	
	$smarty->assign('agent_id',$row['agent_id']);		
										
	$smarty->display('agent_tab_body.tpl');
}

$smarty->display('agent_tab_footer.tpl');
$smarty->display('footer.tpl');


?>
