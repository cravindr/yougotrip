<?php
require('../dbconnect.php');

if($_POST){
	
	$id = $_POST['id'];
	$tbl = $_POST['tbl'];
	$pri_column = $_POST['pri_column'];
	$qry = "delete from $tbl where $pri_column = '$id'";
	$res= mysqli_query($con,$qry);
	if($res){
		echo 'success';
	}else{
		echo 'failed';		
	}
}