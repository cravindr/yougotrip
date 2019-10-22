<?php
require('../dbconnect.php');
$table_name="news";
$table_ctfld="news_id";
$table_updfld="active";


if($_POST){
	
	$id = $_POST['id'];
	$post = $_POST['post'];
	
	if($post == 'jobs'){
		
		$qry = "select active from $table_name where $table_ctfld = '$id'";
		$res= mysqli_query($con,$qry);
		if($res){
			//echo 'success';
			$row = mysqli_fetch_array($res);
			$active = $row['active'];
			if($active == 0){
				$qry2 = "update $table_name set $table_updfld=1 where $table_ctfld='$id'";
				$res2 = mysqli_query($con,$qry2);
			}else if($active == 1){
				$qry2 = "update $table_name set $table_updfld=0 where $table_ctfld='$id'";
				$res2 = mysqli_query($con,$qry2);
			}
		}else{
			//echo 'failed';		
		}
		
	}
	/*	else if($post == 'property'){
		
		$qry = "select verify from property where property_id = '$id'";
		$res= mysqli_query($con,$qry);
		if($res){
			//echo 'success';
			$row = mysqli_fetch_array($res);
			$verify = $row['verify'];
			if($verify == 0){
				$qry2 = "update property set verify=1 where property_id='$id'";
				$res2 = mysqli_query($con,$qry2);
			}else if($verify == 1){
				$qry2 = "update property set verify=0 where property_id='$id'";
				$res2 = mysqli_query($con,$qry2);
			}
		}else{
			//echo 'failed';		
		}
		
	}else if($post == 'sales'){
		
		$qry = "select verify from sales where product_id = '$id'";
		$res= mysqli_query($con,$qry);
		if($res){
			//echo 'success';
			$row = mysqli_fetch_array($res);
			$verify = $row['verify'];
			if($verify == 0){
				$qry2 = "update sales set verify=1 where product_id='$id'";
				$res2 = mysqli_query($con,$qry2);
			}else if($verify == 1){
				$qry2 = "update sales set verify=0 where product_id='$id'";
				$res2 = mysqli_query($con,$qry2);
			}
		}else{
			//echo 'failed';		
		}
		
	}
*/	
}
