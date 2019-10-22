<?php
require('../dbconnect.php');

if($_POST){
	
	$id = $_POST['id'];
	$img_url = $_POST['img_url'];
	$qry = "update brandpartner set image='' where id = '$id'";
	$res= mysqli_query($con,$qry);
	if($res){
		echo 'success';
		unlink("../".$img_url);
	}else{
		echo 'failed';		
	}
}