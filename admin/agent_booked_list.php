<?php
session_start();
require('smartysetting.php');
require('authenticate.php');
$agentid = $_SESSION['AGENT_ID'];


$smarty->assign('menu_agent','class="active"');
$smarty->display('header.tpl');

$smarty->assign('tbl_title','Invoice List');
$smarty->assign('sno','S.No');
$smarty->assign('invoiceno','Inv-No');
$smarty->assign('cusomer_id','Cus-ID');
$smarty->assign('customer_name','Customer Name');
$smarty->assign('inv_date','Date');
$smarty->assign('amount','Amount');
$smarty->assign('balance','Balance');
$smarty->assign('discount','Discount');
$smarty->assign('totalamount','Total');
$smarty->assign('status','Status');


$smarty->display('invoice_tab_header.tpl');


$qry = "select * from invoice where agent_id=$agentid order by invoiceno desc ";
$res = mysqli_query($con,$qry);

$i=0;
while($row = mysqli_fetch_array($res)){
	$i=$i+1;
	  $smarty->assign('invoice_id',$row['invoiceno']);
	  $invoice_id=$row['invoiceno'];
	  $smarty->assign('sno',$i);
	  $smarty->assign('customer_id',$row['cusomer_id']);
	  $customer_id=$row['cusomer_id'];
	  
	  $smarty->assign('fnView',"customerView('$customer_id')");
	  
	  $smarty->assign('customer_name',$row['customer_name']);
	  $smarty->assign('inv_date',$row['inv_date']);
	  $smarty->assign('amount',$row['amount']);
	  $smarty->assign('balance',$row['balanceamount']);
	  $smarty->assign('discount',$row['discount']);
	  $smarty->assign('totalamount',$row['totalamount']);
	  $smarty->assign('status',$row['status']);
	  /*$action="";
	  if(strtolower( $row['status'])=="created")
	  {
	 $action="  <input type='button' class='btn' onclick='payInvoice({$invoice_id})' value='Pay Now' />
                    <input type='button' class=' btn btn-warning ' onclick='cancelInvoice({$invoice_id})' value='Cancel' />";
	  }
	  
	  if(strtolower( $row['status'])=="part")
	  {
	 $action="  <input type='button' class='btn' onclick='payInvoice({$invoice_id})' value='Pay Now' /> ";
	$action=$action. "   <input type='button' class='btn btn-success' onclick='transInvoice({$invoice_id})' value='Pay Detail' />";
	  }
	  
	  if(strtolower( $row['status'])=="cancled")
	  {
	 $action="";
	  }
	  
	  if(strtolower( $row['status'])=="paid")
	  {
	 $action="   <input type='button' class=' btn btn-success' onclick='transInvoice({$invoice_id})' value='Pay Detail' />";
	  }
	  */
	  
	  if(strtolower( $row['status'])=="paid" ||strtolower( $row['status'])=="part"   )
	  {
	 $action="   <input type='button' class=' btn btn-success' onclick='transInvoice({$invoice_id})' value='Pay Detail' />";
	  }
	  
	  
				
	$smarty->assign('action',$action);
	
	$smarty->display('invoice_tab_body.tpl');
}

$smarty->display('invoice_tab_footer.tpl');
$smarty->display('footer.tpl');
$smarty->display('customer_model_view.tpl');
?>



                         
                            
