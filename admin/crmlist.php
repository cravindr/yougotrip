<?php
require('smartysetting.php');
require('authenticate.php');


$smarty->assign('menu_crm','class="active"');
$smarty->display('header.tpl');

$smarty->assign('tbl_title','Enqueiry List');
$smarty->assign('tbl_th_name','Name');
$smarty->assign('tbl_th_company','Pack Detail');
//$smarty->assign('tbl_th_status','Status');
$smarty->assign('tbl_th_meta_city','City');
$smarty->assign('tbl_th_meta_mobile','Mobile');

$smarty->display('crm_tab_header.tpl'); // table header


$qry = "select * from crm order by crm_id desc";
$res = mysqli_query($con,$qry);

while($row = mysqli_fetch_array($res)){
	
	$smarty->assign('customer_id',$row['crm_id']);
	$smarty->assign('tbl_row_name',$row['first_name']."  ".$row['last_name']);
	//$desc = substr($row['desc'], 0, 20);
	$smarty->assign('tbl_row_company',$row['enquiry_title']);
	$smarty->assign('tbl_row_city',$row['city']);
	$smarty->assign('tbl_row_mobile',$row['mobile']);
	
	$smarty->assign('crm_id',$row['crm_id']);
												
	$smarty->display('crm_tab_body.tpl'); // table body
}

$smarty->display('crm_tab_footer.tpl'); // table end
$smarty->display('footer.tpl');
$smarty->display('customer_model_view.tpl');
?>