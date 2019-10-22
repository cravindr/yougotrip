<?php
session_start();
require('smartysetting.php');
require('authenticate.php');
//$adminid = $_SESSION['ADMIN_ID'];

$smarty->assign('menu_tour','class="active"');
$smarty->display('header.tpl');

$smarty->assign('tbl_title','Category List');
$smarty->assign('tbl_th_title','Category Title');
$smarty->assign('tbl_th_display','Display');

$smarty->display('category_tab_header.tpl');


$qry = "select * from category";
$res = mysqli_query($con,$qry);

while($row = mysqli_fetch_array($res)){
	$smarty->assign('tbl_row_title',$row['category_desc']);
	$smarty->assign('category_id',$row['category_id']);
	$cid = $row['category_id'];
	$qry_d = "select category_id from category_display where category_id='$cid'";
	$res_d = mysqli_query($con,$qry_d);
	$row_d = mysqli_fetch_assoc($res_d);
	if($row_d['category_id'] == 0 && $row_d['category_id'] == ''){
		$smarty->assign('current_display',0);
		$smarty->assign('tbl_display_label','label-important');
		$smarty->assign('tbl_row_display','Off');
	}else{
		$smarty->assign('current_display',1);
		$smarty->assign('tbl_display_label','label-success');
		$smarty->assign('tbl_row_display','On');
	}							
	$smarty->display('category_tab_body.tpl');
}

$smarty->display('category_tab_footer.tpl');
$smarty->display('footer.tpl');
?>
