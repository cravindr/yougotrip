<?php
session_start();
require('smartysetting.php');
require('authenticate.php');

$smarty->assign('menu_user','class="active"');
$smarty->display('header.tpl');

if(isset($_SESSION['ID_EDIT'])){
	$user_id = $_SESSION['ID_EDIT'];
	$qry = "select * from users where user_id='$user_id'";
	$res = mysqli_query($con,$qry);
	$row = mysqli_fetch_array($res);
	$smarty->assign('input_title',$row['title']);
	$smarty->assign('input_firstname',$row['firstname']);
	$smarty->assign('input_lastname',$row['lastname']);
	$smarty->assign('input_email',$row['email']);
	$smarty->assign('input_address',$row['address']);
	$smarty->assign('input_place',$row['place']);
	$smarty->assign('input_state',$row['state']);
	$smarty->assign('input_country',$row['country']);
	$smarty->assign('input_pincode',$row['pincode']);
	$smarty->assign('input_phone',$row['phone']);
	$smarty->assign('input_mobile',$row['mobile']);
	$smarty->assign('input_mobile2',$row['mobile2']);
	$smarty->assign('user_id',$row['user_id']);	
	$smarty->assign('user_post_url','user_upd.php');
	
}else{	
	$smarty->assign('display_img','style="display:none"');	
	$smarty->assign('user_post_url','user_save.php');	
}

	$smarty->assign('tbl_th_transid','Trans Id');
	$smarty->assign('tbl_th_date','Date');
	$smarty->assign('tbl_th_credit','Credit');
	$smarty->assign('tbl_th_debit','Debit');
	$smarty->assign('tbl_th_balance','Balance');
	$smarty->assign('tbl_th_comments','Comments');
	$smarty->assign('tbl_th_invoice','Invoice No');
	
	
$smarty->display('user_tab_header.tpl');

if(isset($_SESSION['ID_EDIT'])){
	$user_id = $_SESSION['ID_EDIT'];
	$qry = "select * from payment where user_id='$user_id' order by cdate desc";
	$res = mysqli_query($con,$qry);
	while($row = mysqli_fetch_array($res)){
		$smarty->assign('tbl_row_transid',$row['payment_id']);
		$cdate = date("d-m-Y", strtotime($row['cdate']));
		$smarty->assign('tbl_row_date',$cdate);
		$smarty->assign('tbl_row_credit',$row['credit']);
		$smarty->assign('tbl_row_debit',$row['debit']);
		$smarty->assign('tbl_row_balance',$row['balance']);
		$comments = substr($row['comments'], 0, 23);
		$smarty->assign('tbl_row_comments',$comments);
		$smarty->assign('tbl_row_invoice',$row['invoice_id']);
		$smarty->display('user_tab_body.tpl');
	}
	unset($_SESSION['ID_EDIT']);
	
}


$smarty->display('user_tab_footer.tpl');
$smarty->display('footer.tpl');
?>
