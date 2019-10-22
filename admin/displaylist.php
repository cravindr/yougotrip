<?php
session_start();
require('smartysetting.php');
require('authenticate.php');
//$adminid = $_SESSION['ADMIN_ID'];

$smarty->assign('menu_tour','class="active"');
$smarty->display('header.tpl');

$smarty->assign('tbl_title','Display List');
$smarty->assign('tbl_th_title','Package Title');
$smarty->assign('tbl_th_desc','Description');
$smarty->assign('tbl_th_display','Display');
$smarty->assign('tbl_th_adult','Adult Price');
$smarty->assign('tbl_th_child','Child Price');
$smarty->assign('tbl_th_possition','Possition');
$smarty->assign('tbl_th_status','Status');
$smarty->assign('tbl_th_cat','Category');

$smarty->display('display_tab_header.tpl');

$qry = "select * from display order by possition";
$res = mysqli_query($con,$qry);

while($row = mysqli_fetch_array($res)){
	$smarty->assign('tbl_row_title',$row['pack_title']);
	$pack_desc = substr($row['pack_desc'], 0, 20);
	$smarty->assign('tbl_row_desc',$pack_desc);
	
	$pid = $row['pack_id'];
	$qry_d = "select pack_id from display where pack_id='$pid'";
	$res_d = mysqli_query($con,$qry_d);
	$row_d = mysqli_fetch_assoc($res_d);
	if($row_d['pack_id'] == 0 && $row_d['pack_id'] == ''){
		$smarty->assign('current_display',0);
		$smarty->assign('tbl_display_label','label-important');
		$smarty->assign('tbl_row_display','Off');
	}else{
		$smarty->assign('current_display',1);
		$smarty->assign('tbl_display_label','label-success');
		$smarty->assign('tbl_row_display','On');
	}
	
	$smarty->assign('tbl_row_adult_price',$row['adult_price']);
	$smarty->assign('tbl_row_child_price',$row['child_price']);
	$smarty->assign('tbl_row_child_wob',$row['child_wob_price']);
	$smarty->assign('tbl_row_poss',$row['possition']);
	
	
	$smarty->assign('pack_id',$row['pack_id']);
			
	if($row['status'] == 0){
		$smarty->assign('tbl_status_label','label-important');
		$smarty->assign('tbl_row_status','Not Active');
	}else if($row['status'] == 1){
		$smarty->assign('tbl_status_label','label-success');
		$smarty->assign('tbl_row_status','Active');
	}
		
	$smarty->assign('tbl_row_cat',$row['category_desc']);		
										
	$smarty->display('display_tab_body.tpl');
}

$smarty->display('tour_tab_footer.tpl');
$smarty->display('footer.tpl');
?>
