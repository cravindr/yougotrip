<?php
session_start();
require('smartysetting.php');

if(isset($_SESSION['TRIP_USER_ID'])){	
	$smarty->assign('label_login',"Logout");
	$smarty->assign('url_login',"logout.php");	
}else{
	$smarty->assign('label_login',"Login");
	$smarty->assign('url_login',"login.php");
}

$smarty->display('header.tpl');
$smarty->display('links_css_buynow.tpl');
$smarty->display('breadcrumbs.tpl');

if($_POST){	
$_SESSION['NO_OF_ADULT']=$_POST['adult'];
$_SESSION['NO_OF_CHILD']=$_POST['child'];
$_SESSION['NO_OF_CWB']=$_POST['childwob'];
$_SESSION['TROUR_PACK_ID']=$_POST['tour_pack_id'];

	$tour_pack_id = $_POST['tour_pack_id'];
	
	$qry = "select `pack_title`,`adult_price`, `child_price`, `child_wob_price`, `pack_image` from package where pack_id ='$tour_pack_id'";
	$res = mysqli_query($con,$qry);
	$row = mysqli_fetch_assoc($res);

	$smarty->assign('pack_image',$_POST['pack_image']);
	
	if($_POST['adult'] == '' || $_POST['adult'] == 0){
		$smarty->assign('adult_display','style="display:none"');
	}
	
	if($_POST['child'] == '' || $_POST['child'] == 0){
		$smarty->assign('child_display','style="display:none"');
	}
	
	if($_POST['childwob'] == '' || $_POST['childwob'] == 0){
		$smarty->assign('childwob_display','style="display:none"');
	}
	$adult_total=$row['adult_price']*$_POST['adult'];
	$child_total=$row['child_price']*$_POST['child'];
	$cwb_total=$row['child_wob_price']*$_POST['childwob'];
	$gross_total=$adult_total+$child_total+$cwb_total;
	
	//$smarty->assign('form_post_url','checkoutoption.php');
	$smarty->assign('form_post_url','process_order.php');
	
	$smarty->assign('unit_price_adult',$row['adult_price']);
	$smarty->assign('no_adult',$_POST['adult']);
	$smarty->assign('adult_total',$adult_total);
	$smarty->assign('unit_price_child',$row['child_price']);
	$smarty->assign('no_child',$_POST['child']);
	$smarty->assign('child_total',$child_total);
	$smarty->assign('unit_price_childwob',$row['child_wob_price']);
	$smarty->assign('no_childwob',$_POST['childwob']);
	$smarty->assign('childwob_total',$cwb_total);
	$smarty->assign('gross_total',$gross_total);

	
	
$_SESSION['ADULT_TOTAL']=$adult_total;
$_SESSION['CHILD_TOTAL']=$child_total;
$_SESSION['CWB_TOTAL']=$cwb_total;
$_SESSION['GRAND_TOTAL']=$gross_total ;
	
	
}
$smarty->display('checkout.tpl');
$smarty->display('footer.tpl');
	
?>