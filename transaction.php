<?php
session_start();
session_start();
require('smartysetting.php');
require('pagination.php');  // paginatgion step 1 of 5
require('authendicate.php');

$pageurl="transaction.php";

if(isset($_SESSION['TRIP_USER_ID'])){	
	$smarty->assign('label_login',"Logout");
	$smarty->assign('url_login',"logout.php");	
}else{
	$smarty->assign('label_login',"Login");
	$smarty->assign('url_login',"login.php");
}
$smarty->assign('name',$_SESSION['TRIP_USER_NAME']);

// Paginatin step 2 of 5

$tranpageid= $_SESSION['TRAN_PAGE_ID'];
unset($_SESSION['TRAN_PAGE_ID']);
if ($tranpageid=='')
	{
		$tranpageid=1;
	}
	

if(isset($_SESSION['TRIP_USER_ID'])){
	
	$smarty->display('header.tpl');
	$smarty->display('links_css_buynow.tpl');
	$smarty->display('breadcrumbs.tpl');

	$smarty->assign('tbl_th_transid','Trans Id');
	$smarty->assign('tbl_th_date','Date');
	$smarty->assign('tbl_th_credit','Credit');
	$smarty->assign('tbl_th_debit','Debit');
	$smarty->assign('tbl_th_balance','Balance');
	$smarty->assign('tbl_th_comments','Comments');
	$smarty->assign('tbl_th_invoice','Invoice No');
	
	
	
	$smarty->display('trans_tab_header.tpl');
	
	
	$user_id = $_SESSION['TRIP_USER_ID'];

	
	// Paginaetion  step 3 of 5
	
	
	$pagesize=10;
	$lowerlimit=($tranpageid-1)*$pagesize;
	//$upperlimit=($tranpageid)*$pagesize;
	$upperlimit=$pagesize;
	
	//$qry = "select * from payment where user_id='$user_id' order by cdate desc,invoice_id desc";
	$qry = "select * from payment where user_id='$user_id' order by payment_id  desc";
 
	$res = mysqli_query($con,$qry);
	$rcount=mysqli_num_rows($res);
	$pagecount=$rcount/$pagesize;

	if (($rcount % $pagesize) !=0)
		{
		$pagecount=$pagecount+1;	
		}
	
	$limitset=" LIMIT $lowerlimit,$upperlimit ";
	
	

	
	// executing the query with limit
	$qrywithlimit = $qry.$limitset;
	//echo $qrywithlimit;
	$res = mysqli_query($con,$qrywithlimit);
	//echo mysqli_num_rows($res);
	while($row = mysqli_fetch_array($res)){
		$smarty->assign('tbl_row_transid',$row['payment_id']);
		$cdate = date("d-m-Y", strtotime($row['cdate']));
		$smarty->assign('tbl_row_date',$cdate);
		$smarty->assign('tbl_row_credit',$row['credit']);
		$smarty->assign('tbl_row_debit',$row['debit']);
		$smarty->assign('tbl_row_balance',$row['balance']);
		
		$comments = substr($row['comments'], 0, 60);
		$smarty->assign('tbl_row_comments',$comments);
		$smarty->assign('tbl_row_invoice',$row['invoice_id']);
		$smarty->display('trans_tab_body.tpl');
	}
	
	$smarty->display('trans_tab_footer.tpl');
	echo fnBuidPagination($pagecount,$tranpageid);  // Paginatin step 4 of 5
	
	
	$smarty->display('footer.tpl');
	$smarty->display('link_js_transaction.tpl');  //  Paginatin step 4 of 5

	
}

else
{
		Header("Location:login.php");
}

?>




