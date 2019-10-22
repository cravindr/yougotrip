<?php
require('smartysetting.php');
require('authenticate.php');

$smarty->assign('menu_dashboard','class="active"');
$smarty->display('header.tpl');

$smarty->assign('tbl_title','Brand Partner List');
$smarty->assign('tbl_th_company','Brand Partner');
$smarty->assign('tbl_th_desc','Gallery Description');
//$smarty->assign('tbl_th_status','Status');
$smarty->assign('tbl_th_meta_desc','Meta Description');
$smarty->assign('tbl_th_meta_keyword','Meta Keyword');

$smarty->display('brand_tab_header.tpl'); // table header


$qry = "select * from brandpartner";
$res = mysqli_query($con,$qry);

while($row = mysqli_fetch_array($res)){
	$smarty->assign('tbl_row_company',$row['companyname']);
	$desc = substr($row['desc'], 0, 20);
	$smarty->assign('tbl_row_desc',$desc);
	$smarty->assign('tbl_row_meta_desc',$row['meta_desc']);
	$smarty->assign('tbl_row_meta_keyword',$row['meta_keyword']);
	
	$smarty->assign('brand_id',$row['id']);
												
	$smarty->display('brand_tab_body.tpl'); // table body
}

$smarty->display('brand_tab_footer.tpl'); // table end
$smarty->display('footer.tpl');
?>