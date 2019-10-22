<?php
session_start();

if($_POST){
	$pack = $_POST['pack'];
	//if($pack == 'malaysia'){
		unset($_SESSION['ID_EDIT']);
		$id = $_POST['id'];
		$_SESSION['ID_EDIT'] = $id;
		
		unset($_SESSION['CAT_EDIT']);
		$pack = $_POST['pack'];
		$_SESSION['CAT_EDIT'] = $pack;
		
	//}
	
}

?>