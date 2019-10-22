<?php
require('smartysetting.php');
require('authenticate.php');

$smarty->assign('menu_tour','class="active"');
$smarty->display('header.tpl');

if(isset($_SESSION['ID_EDIT'])){
	$category_id = $_SESSION['ID_EDIT'];
	$qry = "select * from category where category_id='$category_id'";
	$res = mysqli_query($con,$qry);
	$row = mysqli_fetch_array($res);
	$smarty->assign('category_name',$row['category_desc']);
	$smarty->assign('category_id',$row['category_id']);
	
	$smarty->assign('category_post_url','category_upd.php');
	
	unset($_SESSION['ID_EDIT']);
	
}else{
	$smarty->assign('category_post_url','category_save.php');	
}

$smarty->display('category.tpl');
$smarty->display('footer.tpl');
?>
