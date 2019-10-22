<?php
require('../dbconnect.php');

if($_POST){
	
	$id = $_POST['id'];
	$tbl = $_POST['tbl'];
	$table2="invoice_detail";
	$pri_column = $_POST['pri_column'];
	$qry = "delete from $tbl where $pri_column = '$id'";
	
	$qry2 = "delete from $table2 where $pri_column = '$id'";
	
	$res= mysqli_query($con,$qry);
	$res= mysqli_query($con,$qry2);
	if($res){
		echo 'success';
	}else{
		echo 'failed';		
	}
}