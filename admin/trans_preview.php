<?php
session_start();
require('smartysetting.php');
require('authenticate.php');
require('dbconnect.php');

$agentid = $_SESSION['AGENT_ID'];
//unset($_SESSION['AGENT_ID']);
$invoiceno=$_SESSION['INVOICE_NO'];
unset($_SESSION['INVOICE_NO']);
$payamount=$_POST['amount'];




$smarty->assign('currencysymbal',"Rs.");
$qryinv="select * from invoice where invoiceno='$invoiceno'";
$rsinv=mysqli_query($con,$qryinv);
$rowinv=mysqli_fetch_array($rsinv);
$customer_id=$rowinv['cusomer_id'];
$invoicedate=$rowinv['inv_date'];
$invoiceduedate = date('Y-m-d',strtotime($date1 . "+15 days"));
$invoice_total_amount=$rowinv['totalamount'];
$agentid=$rowinv['agent_id'];



if($agentid==0)
{
	$qry_customer="select * from users where user_id='$customer_id'";

}
else
{
	$qry_customer="select * from customer where customer_id='$customer_id'";
}



$rs_customer=mysqli_query($con,$qry_customer);
$row_customer=mysqli_fetch_array($rs_customer);

if($agentid==0)
{
$customer_name=$row_customer['firstname'].$row_customer['lastname'];
}
else
{
	$customer_name=$row_customer['first_name'].$row_customer['last_name'];
}
$customer_company=$row_customer['company'];
$customer_address=$row_customer['address'];
$customer_city=$row_customer['city'];
$customer_state=$row_customer['state'];
$customer_country=$row_customer['country'];
$customer_zip=$row_customer['zip'];
$customer_mobile=$row_customer['mobile'].$row_customer['mobile2'];
$customer_phone=$row_customer['phone'];
$customer_email=$row_customer['email'];

if(trim($customer_company)!=='')
{
	$customer_bill_address=$customer_bill_address."M/S <strong>$customer_company</strong>";
}

if(trim($customer_address)!=='')
{
	$customer_bill_address=$customer_bill_address."<br> $customer_address";
}
if(trim($customer_city)!=='')
{
	$customer_bill_address=$customer_bill_address."<br> $customer_city";
}
if(trim($customer_state)!=='')
{
	$customer_bill_address=$customer_bill_address."<br> $customer_state";
}
if(trim($customer_country)!=='')
{
	$customer_bill_address=$customer_bill_address."<br> $customer_country";
}
if(trim($customer_zip)!=='')
{
	$customer_bill_address=$customer_bill_address."<br> $customer_zip";
}
if(trim($customer_mobile)!=='')
{
	$customer_bill_address=$customer_bill_address."<br> $customer_mobile";
}
if(trim($customer_phone)!=='')
{
	$customer_bill_address=$customer_bill_address."<br> $customer_phone";
}
if(trim($customer_email)!=='')
{
	$customer_bill_address=$customer_bill_address."<br> $customer_email";
}

/*$customer_bill_address="M/S <strong>$customer_company</strong>"."<br>".
$customer_address
."<br>".
$customer_city
."<br>".
$customer_state
."<br>".
$customer_country
."<br>".
$customer_zip
."<br>".
$customer_mobile
."<br>".
$customer_phone
."<br>".
$customer_email
;*/
$agent_bill_address="";

if($agentid==0)
{
	
		$qry_setting="select * from setting";
		$rs_setting=mysqli_query($con,$qry_setting);
		$row_setting=mysqli_fetch_array($rs_setting);
		
		$agent_bill_address=$agent_bill_address."<strong>".$row_setting['titlename']."</strong>";
		$agent_bill_address=$agent_bill_address."<br>".$row_setting['address'];
		$agent_bill_address=$agent_bill_address."<br>".$row_setting['email'];
		$agent_bill_address=$agent_bill_address."<br>".$row_setting['phone'];
		$agent_bill_address=$agent_bill_address."<br>".$row_setting['fax'];
		$agent_company_logo=$row_setting['logo'];
		
}
else
{
	
	
	$qry_agent="select * from agent where agent_id='$agentid'";
	$rs_agent=mysqli_query($con,$qry_agent);
	$row_agent=mysqli_fetch_array($rs_agent);
	
	$agent_company=$row_agent['company'];
	$agent_company_logo=$row_agent['company_logo'];
	$agent_company_reg_no=$row_agent['company_reg_no'];
	$agent_company_service_tax_no=$row_agent['company_service_tax_no'];
	$agent_company_address=$row_agent['company_address'];
	$agent_phone=$row_agent['phone'];
	$agent_mobile=$row_agent['mobile'].",".$row_agent['mobile2'];
	$agent_website=$row_agent['website'];
	
	if(trim($agent_company_reg_no)!=='')
	{
	$agent_bill_address=$agent_bill_address."Reg.No# $agent_company_reg_no";
	}
	
	
	if(trim($agent_company_service_tax_no)!=='')
	{
	$agent_bill_address=$agent_bill_address."<br> Service Tax.No# $agent_company_service_tax_no";
	}
	
	if(trim($agent_company_address)!=='')
	{
	$agent_bill_address=$agent_bill_address."<br>$agent_company_address";
	}
	
	if(trim($agent_phone)!=='')
	{
	$agent_bill_address=$agent_bill_address."<br>Phone:$agent_phone";
	}
	if(trim($agent_mobile)!=='')
	{
	$agent_bill_address=$agent_bill_address."<br>Mobile:$agent_mobile";
	}
	if(trim($agent_website)!=='')
	{
	$agent_bill_address=$agent_bill_address."<br>Website:$agent_website";
	}

}
$smarty->assign('invoiceno',$invoiceno);
$smarty->assign('invoicedate',$invoicedate);
$smarty->assign('agentlogo',$agent_company_logo);
$smarty->assign('companyname',$agent_company);
$smarty->assign('companyaddress',$agent_bill_address);
$smarty->assign('customername',$customer_name);
$smarty->assign('customeraddress',$customer_bill_address);
$smarty->assign('invoiceduedate',$invoiceduedate);
$smarty->assign('invoice_amount',$invoice_total_amount);
$smarty->display('trans_header.tpl');

$invdetail="select * from invoice_detail where invoiceno='$invoiceno'";
$rs_inv_detail=mysqli_query($con,$invdetail);

$totalprice=0;
while($row_inv_detail=mysqli_fetch_assoc($rs_inv_detail))
	{
	
	$pack_name=$row_inv_detail['package_name'];
	
	
	$pack_desc= $pack_name." [ Adults] ";
	$pack_qty=$row_inv_detail['adultqty'];
	$pack_price=$row_inv_detail['adultprice'];
	$pack_total=$pack_qty*$pack_price;
	$totalprice=$totalprice+$pack_total;
	
	$smarty->assign('pack_desc',$pack_desc);
	$smarty->assign('pack_qty',$pack_qty);
	$smarty->assign('pack_price',$pack_price);
	$smarty->assign('pack_total',$pack_total);
	if($pack_qty>0) 
		{
			$smarty->display('invoice_body.tpl');
		}
	
	$pack_desc= $pack_name." [ Child] ";
	$pack_qty=$row_inv_detail['childqty'];
	$pack_price=$row_inv_detail['childprice'];
	$pack_total=$pack_qty*$pack_price;
	$totalprice=$totalprice+$pack_total;
	
	$smarty->assign('pack_desc',$pack_desc);
	$smarty->assign('pack_qty',$pack_qty);
	$smarty->assign('pack_price',$pack_price);
	$smarty->assign('pack_total',$pack_total);
	if($pack_qty>0) 
		{
			$smarty->display('invoice_body.tpl');
		}
	
	$pack_desc= $pack_name." [ Child without Bed] ";
	$pack_qty=$row_inv_detail['childwbqty'];
	$pack_price=$row_inv_detail['childwbprice'];
	$pack_total=$pack_qty*$pack_price;
	$totalprice=$totalprice+$pack_total;
	
	$smarty->assign('pack_desc',$pack_desc);
	$smarty->assign('pack_qty',$pack_qty);
	$smarty->assign('pack_price',$pack_price);
	$smarty->assign('pack_total',$pack_total);
	if($pack_qty>0) 
		{
			$smarty->display('trans_body.tpl');
		}
	
	
	
	
	}





//$smarty->assign('menu_ticket','class="active"');
$smarty->assign('total',$totalprice);

$smarty->display('trans_footer1.tpl');
echo $agentid;
if($agentid)
{
$qry_trans="select * from agent_payment where invoice_id='$invoiceno'  order by payment_id ";
}
else
{
	$qry_trans="select * from payment where invoice_id='$invoiceno'  order by payment_id ";
}

$rs_trans=mysqli_query($con,$qry_trans);
/*echo $qry_trans. mysqli_num_rows($rs_trans);
eixt;*/

$totalpaid=0;
while($row_trans=mysqli_fetch_assoc($rs_trans))
{
	$cdate =date('Y-m-d', strtotime($row_trans['cdate']));
	$debit =$row_trans['debit'];
	$totalpaid=$totalpaid+$debit;
	$trans_balance=$totalprice-$totalpaid;
	$smarty->assign('date',$cdate);
	$smarty->assign('debit',$debit);
	$smarty->assign('balance_amount',$trans_balance);
	$smarty->assign('total_paid',$totalpaid);
	$smarty->display('trans_footer2.tpl');
}


$smarty->display('trans_footer3.tpl');


?>