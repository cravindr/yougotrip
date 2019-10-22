<?php
session_start();
require('smartysetting.php');

if(isset($_SESSION['TRIP_USER_ID'])){	
	$smarty->assign('label_login',"Logout");
	$smarty->assign('url_login',"logout.php");	
}else{
	$smarty->assign('label_login',"Login");
	$smarty->assign('url_login',"login.php");
}

/*$smarty->display('header.tpl');
$smarty->display('links_css_package_detail.tpl');
$smarty->display('breadcrumbs.tpl');
$smarty->display('body_start.tpl');*/

$pack_id = $_SESSION['ID_EDIT'];
if(isset($_SESSION['ID_EDIT'])){
	$qry = "select * from package where pack_id='$pack_id'";
	$res = mysqli_query($con,$qry);
	$row = mysqli_fetch_array($res);
	
	if($row['title_desc']=="")
	{
		$packtitle=str_replace("<br>","",$row['pack_title']);
		
		$smarty->assign('title',$packtitle);
	}
	else
	{	
	
	$smarty->assign('title',$row['title_desc']);
	}
	
	$smarty->assign('metakeywords',$row['meta_desc']);
	$smarty->assign('metadesc',$row['meta_keyword']);

// SOME MODEFICATION DONE	
$smarty->display('header.tpl');
$smarty->display('links_css_package_detail.tpl');
$smarty->display('breadcrumbs.tpl');
$smarty->display('body_start.tpl');
	
	
	
	$smarty->assign('tour_pack_id',$pack_id);
	$smarty->assign('packagetype',$row['category_desc']);
	$smarty->assign('packagetitle',$row['pack_title']);
	//$smarty->assign('desc_head',$row['pack_title']);
	$smarty->assign('desc_body',$row['pack_desc']);
	//$smarty->assign('includes_head',$row['pack_title']);
	$smarty->assign('includes_body',$row['pack_includes']);	
	//$smarty->assign('excludes_head',$row['pack_title']);
	$smarty->assign('excludes_body',$row['pack_excludes']);
	//$smarty->assign('itinerary_head',$row['pack_title']);
	$smarty->assign('itinerary_body',$row['itinerary']);
	//$smarty->assign('date_head',$row['pack_title']);
	$smarty->assign('date_body',$row['dateandcost']);
	$smarty->assign('place_desc',$row['place_desc']);
	
}


$smarty->display('lspan9_head.tpl');

 $qry = "select * from package_image where pack_id='$pack_id'";
 $res = mysqli_query($con,$qry);

 $i = 1;
 $flag=true;

 while($row = mysqli_fetch_assoc($res)){
	if(($i % 4)==1)
	{
		echo '<ul class="thumbnails">';
		$flag=true;		
	}
	
	$smarty->assign('img_src','admin/'.$row['pack_image']);
	$smarty->display('lspan9_image_body.tpl'); 
	
	if(($i % 4)==0)
	{
		echo '</ul><!--/thumbnails-->';
		$flag=false;		
	}
	
	$i = $i +1;
 }
 
 if ($flag==true)
 {
	echo '</ul><!--/thumbnails-->';
 }
      

$smarty->display('lspan9_foot.tpl');
$smarty->display('rspan3.tpl');

$smarty->display('footer.tpl');
$smarty->display('links_js_package_detail.tpl');



	 /*
	  $no_rows = mysqli_num_rows($res);
 $norows = 1;
	 if($no_rows < 4){
		  if($norows==1){
			 echo '<ul class="thumbnails">';
			 $smarty->assign('img_src','admin/'.$row['gallery_image']);
			 $smarty->display('lspan9_image_body.tpl'); 
		 }else if($norows==$no_rows){
			 $smarty->assign('img_src','admin/'.$row['gallery_image']);
			 
			 $smarty->display('lspan9_image_body.tpl'); 
			 echo '</ul><!--/thumbnails-->';
		 }else{
			 $smarty->assign('img_src','admin/'.$row['gallery_image']);
			 $smarty->display('lspan9_image_body.tpl'); 
		 }
		
		 $norows = $norows +1;
		 
	 }else{
		 if($i == 0){
			echo '<ul class="thumbnails">';
			$smarty->assign('img_src','admin/'.$row['gallery_image']);
			$smarty->display('lspan9_image_body.tpl'); 
			$i = $i +1;
		 }else if($i ==4){
			 $smarty->assign('img_src','admin/'.$row['gallery_image']);			 
			 $smarty->display('lspan9_image_body.tpl'); 
			 echo '</ul><!--/thumbnails-->';
			 $i=0;
		 }else{
			$smarty->assign('img_src','admin/'.$row['gallery_image']);
			$smarty->display('lspan9_image_body.tpl'); 
			$i = $i +1;
		 }
	 }
	 
	 */
	
?>