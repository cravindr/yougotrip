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
	
	$payoption=$_POST['payoption'];
		
	$_SESSION['PAY_OPTION']=$payoption;
	


	
	
	$user_id = $_SESSION['TRIP_USER_ID'];
	$id=$_SESSION['INVOICE_NO'];
	$qryinv="select * from invoice where invoiceno='$id'";
	$rsinv=mysqli_query($con,$qryinv);
	$rowinv=mysqli_fetch_array($rsinv);
	$smarty->assign('form_post_url',"paynow.php");
	$invoiceamount=$rowinv['amount'];
	$halfamt=$invoiceamount/2;
	
	if($payoption=="advance")
	{
		$_SESSION['PAY_AMOUNT']=1000;	
	}elseif($payoption=="half")
	{
			$_SESSION['PAY_AMOUNT']=$halfamt;
	}elseif($payoption=="full")
	{
			$_SESSION['PAY_AMOUNT']=$invoiceamount;
	}


	
	$smarty->display('paymode.tpl');
	
	$smarty->display('footer.tpl');

	
}

else
{
		header("Location:index.php");
}


?>




