<?php
session_start();
if($_POST){
	
	$id = $_POST['id'];
	$type=$_POST['type'];
	$_SESSION['INVOICE_NO']=$id;
	$_SESSION['PAY_TYPE']=$type;
	
}






