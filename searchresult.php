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

$smarty->display('header.tpl');
$smarty->display('links_css_package_detail.tpl');
$smarty->display('breadcrumbs.tpl');

//$smarty->display('searchresult.tpl');
 $smarty->display('search_container_start.tpl');
 
 /*
echo '<div class="row-fluid">  <!-- Start row-fluid -->';
$smarty->display('search_detail.tpl');
$smarty->display('search_detail.tpl');
echo '</div>';


echo '<div class="row-fluid">  <!-- Start row-fluid -->';
$smarty->display('search_detail.tpl');
$smarty->display('search_detail.tpl');
echo '</div>';
*/

fnStyle1($con,$smarty,'package');


  $smarty->display('search_container_end.tpl');



$smarty->display('footer.tpl');
$smarty->display('links_js_search_detail.tpl');




function fnStyle1($con,$smarty,$table_name){
	
	
	$qry = "select * from $table_name";
	$res = mysqli_query($con,$qry);
	$noofrows=mysqli_num_rows($res);
	$smarty->assign('noofrows',$noofrows);	
	$i=0;
	$flag=true;
	
	while($row = mysqli_fetch_assoc($res)){
		$i=$i+1;
		
		$category_desc =$row['category_desc'];
		$pack_title =$row['pack_title'];
		$pack_desc =$row['pack_desc'];
		$pack_id =$row['pack_id'];
		$pack_image =$row['pack_image'];
		
		 
		 
		
		$smarty->assign('category_desc',$category_desc);
		$smarty->assign('pack_title',$pack_title);
		$smarty->assign('pack_desc',$pack_desc);
		$smarty->assign('pack_id',$pack_id);
		$smarty->assign('pack_image',"admin/".$pack_image);
	
		if(($i % 2)==1)
		{
			echo '<div class="row-fluid">  <!-- Start row-fluid -->';
			$flag=true;
			
		}
		$smarty->display('search_detail.tpl');
	
		if(($i % 2)==0)
		{
			echo '</div>';
			$flag=false;
			
		}
			
	} // while end 
	
		if ($flag==true)
		{
		echo '</div>';
		}

}  // function end 

?>




