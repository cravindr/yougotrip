<?php
require('../dbconnect.php');
$table_name="news";

if($_POST){
	
	$id = $_POST['id'];
	$qry = "delete from $table_name where news_id = '$id'";

	$res= mysqli_query($con,$qry);
	if($res){
		echo 'success';
	}else{
		echo 'failed';		
	}
}