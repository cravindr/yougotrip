<?php
session_start();

if($_POST){
	unset($_SESSION['ID_EDIT']);
	$id = $_POST['id'];
	$_SESSION['ID_EDIT'] = $id;
	
}

?>