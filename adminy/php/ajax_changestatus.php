<?php
require('../dbconnect.php');

if($_POST){
	
	$id = $_POST['id'];
	$tbl = $_POST['tbl'];
	$pri = $_POST['pri'];
	
	$qry = "select status from $tbl where $pri = '$id'";
	$res= mysqli_query($con,$qry);
	if($res){
		//echo 'success';
		$row = mysqli_fetch_array($res);
		$status = $row['status'];
		if($status == 0){
			$qry2 = "update $tbl set status=1 where $pri='$id'";
			$res2 = mysqli_query($con,$qry2);
		}else if($status == 1){
			$qry2 = "update $tbl set status=0 where $pri='$id'";
			$res2 = mysqli_query($con,$qry2);
		}
	}else{
		//echo 'failed';		
	}
	
}