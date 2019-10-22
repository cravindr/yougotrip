<?php

session_start();
require('../smartysetting.php');
require('../dbconnect.php');

if($_POST){
	
	$id = $_POST['id'];
	$qryinv="select * from invoice where invoiceno='$id'";
	$rsinv=mysqli_query($con,$qryinv);
	$rowinv=mysqli_fetch_array($rsinv);
	$invoiceamount=$rowinv['amount'];
	
	$packagename=$rowinv['pack_title'];
	
	
	$userid=$_SESSION['TRIP_USER_ID'];
	$qry="SELECT user_id ,sum(credit)-sum(debit) as 'balance' FROM `payment` where user_id=$userid";
	$rs=mysqli_query($con,$qry);
	$row=mysqli_fetch_array($rs);
	$balanceamount=$row['balance'];
	
	$currentbalance=$balanceamount-$invoiceamount;
	
	/*echo "invoice amoutn".$invoiceamount;
	echo "balance amount".$balanceamount;
	echo "current balnace".$currentbalance;*/

	if($invoiceamount>$balanceamount)
	{
		echo "insufficient";
	}
	else
	{
		$date=date('Y-m-d');
		$qry="insert into payment(user_id,debit,balance,cdate,invoice_id,comments ) 
		values('$userid','$invoiceamount','$currentbalance','$date','$id','$packagename')";
		
		$rs=mysqli_query($con,$qry);
		
			$qry="update invoice set status='Paid' where invoiceno='$id'";

			$rs=mysqli_query($con,$qry);
				echo "success";

			
		
		
		
	}
}






