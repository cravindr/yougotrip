<?php
require('../dbconnect.php');

if($_POST){
	
	$id = $_POST['id'];
	$img_url = $_POST['img_url'];
	$qry = "delete from package_image where pack_id = '$id' and pack_image='$img_url'";
	$res= mysqli_query($con,$qry);
	if($res){
		echo 'success';
		unlink("../".$img_url);
	}else{
		echo 'failed';		
	}
}