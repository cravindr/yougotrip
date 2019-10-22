<?php
require('../dbconnect.php');

if($_POST){
	
	$id = $_POST['id'];
	$tbl = $_POST['tbl'];
	$pri = $_POST['pri'];
	$dis = $_POST['dis'];	
	
	if($dis == 1){
		$qry = "delete from category_display where category_id='$id'";
		$res= mysqli_query($con,$qry);
	}else if($dis == 0){
		$qry = "insert into category_display(`category_id`, `category_desc`) select `category_id`, `category_desc` from category where category_id='$id'";
		$res= mysqli_query($con,$qry);
	}
	
}