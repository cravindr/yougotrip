<?php
session_start();
require('smartysetting.php');
require('authenticate.php');
//$adminid = $_SESSION['ADMIN_ID'];

$smarty->assign('menu_user','class="active"');
$smarty->display('header.tpl');

$smarty->assign('tbl_title','Manage Users');
$smarty->assign('tbl_th_first','Firstname');
$smarty->assign('tbl_th_last','Lastname');
$smarty->assign('tbl_th_place','Place');
$smarty->assign('tbl_th_country','Country');
$smarty->assign('tbl_th_status','Status');
$smarty->assign('tbl_th_date','Date');

$smarty->display('users_tab_header.tpl');

$qry = "select * from users";
$res = mysqli_query($con,$qry);

while($row = mysqli_fetch_array($res)){
	$smarty->assign('userid',$row['user_id']);
	$smarty->assign('tbl_row_first',$row['firstname']);
	$smarty->assign('tbl_row_last',$row['lastname']);
	$smarty->assign('tbl_row_place',$row['place']);
	$smarty->assign('tbl_row_country',$row['country']);
			
	if($row['status'] == 0){
		$smarty->assign('tbl_status_label','label-important');
		$smarty->assign('tbl_row_status','Not Active');
	}else if($row['status'] == 1){
		$smarty->assign('tbl_status_label','label-success');
		$smarty->assign('tbl_row_status','Active');
	}
		
	$smarty->assign('tbl_row_date',$row['cdate']);		
										
	$smarty->display('users_tab_body.tpl');
}

$smarty->display('users_tab_footer.tpl');
$smarty->display('footer.tpl');
?>
