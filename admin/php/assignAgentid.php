<?php
session_start();

if($_POST){
	unset($_SESSION['AGENT_ID']);
	$id = $_POST['id'];
	$operation=$_POST['operation'];
	$_SESSION['AGENT_ID'] = $id;
	$_SESSION['ID_EDIT'] = $id;
	$_SESSION['AGENT_OPERATION']=$operation;
	
	
}

?>