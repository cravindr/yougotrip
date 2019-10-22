<?php
session_start();
require('smartysetting.php');
require('authendicate.php');

if(isset($_SESSION['TRIP_USER_ID'])){	
	$smarty->assign('label_login',"Logout");
	$smarty->assign('url_login',"logout.php");	
}else{
	$smarty->assign('label_login',"Login");
	$smarty->assign('url_login',"login.php");
}

$smarty->assign('name',$_SESSION['TRIP_USER_NAME']);

//---------------------------------------------------------------------

if(isset($_SESSION['TRIP_USER_ID']))
	  {
		  $user_id = $_SESSION['TRIP_USER_ID'];
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
		  $smarty->assign('input_pan',$row['pan']);
		  $smarty->assign('input_mobile',$row['mobile']);
		  $smarty->assign('input_mobile2',$row['mobile2']);
		  $smarty->assign('user_id',$row['user_id']);	
		  $smarty->assign('user_post_url','updateuser.php');   //assign update url
	  }
else
		{
			
			Header("Location:login.php");
		}


$smarty->display('header.tpl');
$smarty->display('links_css_buynow.tpl');
$smarty->display('breadcrumbs.tpl');
$smarty->display('userinfo.tpl');
$smarty->display('footer.tpl');
	
?>