<?php

session_start();
require('smartysetting.php');
require('dbconnect.php');

if($_POST){


	if ($_POST['paymode']=='account')
	{
			
			
			$id = $_SESSION['INVOICE_NO'];
			$qryinv="select * from invoice where invoiceno='$id'";
			$rsinv=mysqli_query($con,$qryinv);
			$rowinv=mysqli_fetch_array($rsinv);
			$invoice_bending_amount=$rowinv['balanceamount'];
			
			$payamount=$_SESSION['PAY_AMOUNT'];
			
			$invoiceamount=$rowinv['amount'];
			$packagename=$rowinv['pack_title'];
			$userid=$_SESSION['TRIP_USER_ID'];
			
			$qry="SELECT user_id ,sum(credit)-sum(debit) as 'balance' FROM `payment` where user_id=$userid";
			$rs=mysqli_query($con,$qry);
			$row=mysqli_fetch_array($rs);
			
			$accbalanceamount=$row['balance'];
			
			$payoption=$_SESSION['PAY_OPTION'];
			
			
			
			if($payoption=='advance')
			{	
				$commnets=$packagename. "  Advance Amount paid";
				$orderstatus="advance";
				$discount=0;
				$current_invoice_balance_amount=$invoice_bending_amount-1000;
				
			}elseif($payoption=='half')
			{
				$commnets=$packagename. "  Half Amount paid";
				$orderstatus="part";
				$discount=500;
				$current_invoice_balance_amount=$invoice_bending_amount-($payamount+$discount);
				
			}elseif($payoption=='full')
			{
			$commnets=$packagename. " Full  Amount paid";
			$orderstatus="Paid";	
			$discount=1000;
			$payamount=$payamount-$discount;
			$current_invoice_balance_amount=$invoice_bending_amount-($payamount+$discount);
			}
			
			
			
			$currentbalance=$accbalanceamount-$payamount;
			//echo $payamount. " acc balan".$accbalanceamount;
			
			if($payamount>$accbalanceamount)
			{
				$_SESSION['PAYMENT_MESSAGE']= "Error Insufficient fund in your Account";
			}
			else
			{
				$date=date('Y-m-d');
				$qry="insert into payment(user_id,debit,balance,cdate,invoice_id,comments ) 
				values('$userid','$payamount','$currentbalance','$date','$id','$commnets')";
				
				
				
				$rs=mysqli_query($con,$qry);
				
					$qry="update invoice set status='$orderstatus',
					balanceamount ='$current_invoice_balance_amount',
					discount='$discount' 
					 where invoiceno='$id'";
					 
					 
					
					$rs=mysqli_query($con,$qry);
						
					$_SESSION['PAYMENT_MESSAGE']= "Payment Done Success";
		
					
				
				
				
			}
	} // $_POST['paymode']
	else
	{
	$_SESSION['PAYMENT_MESSAGE']= "Payment Gateway page <strong>Under Maintanance..</strong> <br> Please try another options...<br> Thanks..... ";	
	}
} // .$_POST


header('Location: paymentmessage.php');



?>