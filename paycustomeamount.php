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
	$id=$_SESSION['INVOICE_NO'];
	
	$qryinv="select * from invoice where invoiceno='$id'";
	$rsinv=mysqli_query($con,$qryinv);
	$rowinv=mysqli_fetch_array($rsinv);
	$balanceinvamount=$rowinv['balanceamount'];
	
	$smarty->assign('form_post_url',"paynowcustomeamount.php");
	$smarty->assign('maxinvamount',$balanceinvamount);
	
	
	$smarty->display('paycustomeamount.tpl');
	$smarty->display('footer.tpl');
	$smarty->display('link_js_validate.tpl');
	

	
}

else
{
		header("Location:index.php");
}


?>




