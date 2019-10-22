<?php
require('../dbconnect.php');

$stable_name="news";
$stable_ctfld="news_id";

$itable_name="news_display";
$itable_ctfld="news_id";


if($_POST){
	
	$id = $_POST['id'];
	$language = $_POST['language'];

		$qry1 = "select * from $stable_name where $stable_ctfld = '$id'";
		$qry = "insert into $itable_name ($qry1)";
		$res= mysqli_query($con,$qry);
	}
	
?>