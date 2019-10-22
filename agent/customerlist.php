<?php
session_start();
require('smartysetting.php');
require('authenticate.php');

$tablename="customer";
$condition_field1="agent_id";
$agent_id=$_SESSION['AGENT_ID'];

$smarty->assign('menu_customer','class="active"');
$smarty->display('header.tpl');

$smarty->assign('tbl_title','Customer List');
$smarty->assign('tbl_th_name','Name');
$smarty->assign('tbl_th_company','Company');
//$smarty->assign('tbl_th_status','Status');
$smarty->assign('tbl_th_meta_city','City');
$smarty->assign('tbl_th_meta_mobile','Mobile');

$smarty->display('customer_tab_header.tpl'); // table header


$qry = "select * from $tablename where $condition_field1=".$agent_id;

$res = mysqli_query($con,$qry);

while($row = mysqli_fetch_array($res)){
	$smarty->assign('tbl_row_name',$row['first_name']."  ".$row['last_name']);
	//$desc = substr($row['desc'], 0, 20);
	$smarty->assign('tbl_row_company',$row['company']);
	$smarty->assign('tbl_row_city',$row['city']);
	$smarty->assign('tbl_row_mobile',$row['mobile']);
	
	$smarty->assign('customer_id',$row['customer_id']);
												
	$smarty->display('customer_tab_body.tpl'); // table body
}

$smarty->display('customer_tab_footer.tpl'); // table end
$smarty->display('footer.tpl');
?>