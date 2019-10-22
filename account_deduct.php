<?php
session_start();
session_start();
require('smartysetting.php');

if(isset($_SESSION['TRIP_USER_ID'])){	
	$smarty->assign('label_login',"Logout");
	$smarty->assign('url_login',"logout.php");	
}else{
	$smarty->assign('label_login',"Login");
	$smarty->assign('url_login',"login.php");
}

if(isset($_SESSION['TRIP_USER_ID'])){
	
	$smarty->display('header.tpl');
	$smarty->display('links_css_buynow.tpl');
	$smarty->display('breadcrumbs.tpl');
	
	$user_id = $_SESSION['TRIP_USER_ID'];
	$user_name=$_SESSION['TRIP_USER_NAME'];
	$qry = "SELECT  sum(`credit`)-sum(`debit`) as 'balance' FROM `payment`  group by `user_id` having `user_id`=$user_id";
	$res = mysqli_query($con,$qry);
	$row=mysqli_fetch_array($res);
	
	 
	
	$currnet_balance=$row['balance'];
	$gross_total=$_SESSION['GRAND_TOTAL'] ;
	$net_balance=$currnet_balance-$gross_total;
	$smarty->assign('user_name',$user_name);	
	$smarty->assign('balance',RSformat($currnet_balance));
	$smarty->assign('gross_total',RSformat($gross_total));
	$smarty->assign('net_total',RSformat($net_balance));
	
	$smarty->display('account_deduct.tpl');
	$smarty->display('footer.tpl');

	
}

else
{
		header("Location:index.php");
}



function RSformat($amount)
{
	return "Rs. ".number_format($amount, 2, '.', '');
}


?>



