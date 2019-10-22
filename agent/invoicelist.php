<?php
session_start();
require('smartysetting.php');
require('authenticate.php');
$agentid = $_SESSION['AGENT_ID'];

$smarty->assign('menu_ticket','class="active"');
$smarty->display('header.tpl');

$smarty->assign('tbl_title','Invoice List');
$smarty->assign('invoiceno','Inv-No');
$smarty->assign('cusomer_id','Cus-ID');
$smarty->assign('customer_name','Customer Name');
$smarty->assign('inv_date','Date');
$smarty->assign('amount','Amount');
$smarty->assign('discount','Discount');
$smarty->assign('totalamount','Total');

$smarty->display('invoice_tab_header.tpl');


$qry = "select * from invoice where agent_id=$agentid";
$res = mysqli_query($con,$qry);

while($row = mysqli_fetch_array($res)){
	
	  $smarty->assign('invoice_id',$row['invoiceno']);
	  $smarty->assign('cusomer_id',$row['cusomer_id']);
	  $smarty->assign('customer_name',$row['customer_name']);
	  $smarty->assign('inv_date',$row['inv_date']);
	  $smarty->assign('amount',$row['amount']);
	  $smarty->assign('discount',$row['discount']);
	  $smarty->assign('totalamount',$row['totalamount']);
				
	$smarty->display('invoice_tab_body.tpl');
}

$smarty->display('invoice_tab_footer.tpl');
$smarty->display('footer.tpl');
?>



                         
                            