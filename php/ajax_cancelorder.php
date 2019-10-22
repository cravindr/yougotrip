<?php
require('../dbconnect.php');

if($_POST){
	
	$id = $_POST['id'];
	$tbl = $_POST['tbl'];
	$pri_column = $_POST['pri_column'];
	
	$sqry="select * from $tbl where $pri_column = '$id'";
	
	$srs=mysqli_query($con,$sqry);
	$srow=mysqli_fetch_array($srs);
	$totalinvoiceamout=$srow['totalamount'];
	$status=$srow['status'];
	$user_id=$srow['cusomer_id'];
	$comments=$srow['category_desc'].$srow['pack_title '];
	$comments="Cancellation of invoice $id ($comments)";
	$cdate=date("Y-m-d");
	
	if ( strtolower($status)=='paid')
	{
		$qry="select sum(credit)-sum(debit) as 'balanceamt' from  payment where user_id='$user_id'";
		$rs=mysqli_query($con,$qry);
		$row=mysqli_fetch_array($rs);
		$avaliablebalance=$row['balanceamt'];
		
		$totalbalance=$avaliablebalance+$totalinvoiceamout;
		
		$insqry="insert into payment(user_id,credit,balance,cdate,comments,invoice_id)
             values('$user_id','$totalinvoiceamout','$totalbalance','$cdate','$comments','$id')";
		
		mysqli_query($con,$insqry);	

	}
	
	
	$qry = "update $tbl set status='Canceled' where $pri_column = '$id'";
	$res= mysqli_query($con,$qry);
	if($res){
		echo 'success';
	}else{
		echo 'failed';		
	}
}