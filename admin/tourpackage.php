<?php
require('smartysetting.php');
require('authenticate.php');

$smarty->assign('menu_postads','class="active"');
$smarty->display('header.tpl');

/*$job_id = $_GET['id'];
	if($job_id != ''){
	$qry = "select * from jobs where job_id='$job_id'";
	$res = mysqli_query($con,$qry);
	$row = mysqli_fetch_array($res);
	$smarty->assign('input_jads',$row['job_category']);
	$smarty->assign('input_location',$row['location']);
	$smarty->assign('input_adtype',$row['job_type']);
	$smarty->assign('input_company',$row['company_name']);
	$smarty->assign('input_education',$row['education']);
	$smarty->assign('input_experiance',$row['experiance']);
	$smarty->assign('input_adtitle',$row['title']);
	
	if($row['img1'] != '')
		$smarty->assign('input_img1',$row['img1']);
	else 
		$smarty->assign('input_img1','img/noimg.gif');
	
	if($row['img2'] != '')
		$smarty->assign('input_img2',$row['img2']);
	else 
		$smarty->assign('input_img2','img/noimg.gif');
	
	if($row['img3'] != '')
		$smarty->assign('input_img3',$row['img3']);
	else 
		$smarty->assign('input_img3','img/noimg.gif');
		
	$smarty->assign('input_description',$row['description']);
	$smarty->assign('input_terms','checked="checked"');
}else{
	$smarty->assign('input_img1','img/noimg.gif');
	$smarty->assign('input_img2','img/noimg.gif');
	$smarty->assign('input_img3','img/noimg.gif');	
}
*/

$smarty->display('tour.tpl');
$smarty->display('footer.tpl');
?>
