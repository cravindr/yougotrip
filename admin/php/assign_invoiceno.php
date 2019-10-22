<?php
session_start();

if($_POST){
	unset($_SESSION['INVOICE_NO']);
	$id = $_POST['id'];
	$_SESSION['INVOICE_NO'] = $id;
	
}

?>