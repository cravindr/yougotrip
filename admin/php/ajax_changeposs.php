<?php
require('../dbconnect.php');

if($_POST){
	
	$id = $_POST['id'];
	$tbl = $_POST['tbl'];
	$pri = "pack_id";
	$poss = $_POST['poss'];
	
	
	$update_qry="update display set possition=possition+1 where possition>='$poss' and possition<>0";
	mysqli_query($con,$update_qry);
	
	$update_qry="update display set possition='$poss' where $pri = '$id'";
	mysqli_query($con,$update_qry);
	

	
}