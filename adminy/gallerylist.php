<?php
require('smartysetting.php');
require('authenticate.php');

$smarty->assign('menu_tour','class="active"');
$smarty->display('header.tpl');

$smarty->assign('tbl_title','Gallery List');
$smarty->assign('tbl_th_title','Gallery Title');
$smarty->assign('tbl_th_desc','Gallery Description');
//$smarty->assign('tbl_th_status','Status');
$smarty->assign('tbl_th_meta_desc','Meta Description');
$smarty->assign('tbl_th_meta_keyword','Meta Keyword');

$smarty->display('gallery_tab_header.tpl');


$qry = "select * from gallery";
$res = mysqli_query($con,$qry);

while($row = mysqli_fetch_array($res)){
	$smarty->assign('tbl_row_title',$row['name']);
	$desc = substr($row['desc'], 0, 20);
	$smarty->assign('tbl_row_desc',$desc);
	$smarty->assign('tbl_row_meta_desc',$row['meta_desc']);
	$smarty->assign('tbl_row_meta_keyword',$row['meta_keyword']);
	
	$smarty->assign('gallery_id',$row['gallery_id']);
												
	$smarty->display('gallery_tab_body.tpl');
}

$smarty->display('gallery_tab_footer.tpl');
$smarty->display('footer.tpl');
?>