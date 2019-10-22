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

if(isset($_SESSION['TOUR_PACK_BUY_ID'])){
	$tour_pack_id = $_SESSION['TOUR_PACK_BUY_ID'];
	$qry = "select `pack_title`,`adult_price`, `child_price`, `child_wob_price`, `pack_image` from package where pack_id ='$tour_pack_id'";
	$res = mysqli_query($con,$qry);
	$row = mysqli_fetch_assoc($res);
	
	$smarty->assign('tour_pack_id',$tour_pack_id);
	$smarty->assign('adult',$row['adult_price']);
	$smarty->assign('child',$row['child_price']);
	$smarty->assign('child_wob',$row['child_wob_price']);
	$smarty->assign('quote',$row['pack_title']);	
	$smarty->assign('pack_image','admin/'.$row['pack_image']);
}

if(isset($_SESSION['TRIP_USER_ID'])){	
	$smarty->assign('redirect_style_login','style="display:none"');	
}else{
	$smarty->assign('redirect_style_checkout','style="display:none"');
}
$smarty->display('buynow.tpl');
$smarty->display('footer.tpl');
$smarty->display('links_js_buynow.tpl');

	
?>