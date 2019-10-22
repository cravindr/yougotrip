<?php
session_start();
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

if(isset($_SESSION['TRIP_USER_ID'])){
	
	$smarty->display('header.tpl');
	$smarty->display('links_css_buynow.tpl');
	$smarty->display('breadcrumbs.tpl');
	$user_id = $_SESSION['TRIP_USER_ID'];
	$qry = "SELECT  sum(`credit`)-sum(`debit`) as 'balance' FROM `payment`  group by `user_id` having `user_id`=$user_id";
	$res = mysqli_query($con,$qry);
	$row=mysqli_fetch_array($res);
	$smarty->assign('balance',$row['balance']);
	$smarty->display('balance.tpl');
	$smarty->display('footer.tpl');

	
}

else
{
		header("Location:login.php");
}


?>




