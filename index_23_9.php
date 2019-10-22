<?php
session_start();
require('smartysetting.php');
require('source/trail_space.php');
//require('authenticate.php');
$table_name="display";
$language="tamil";

$smarty->assign('webpagename',"Yougotrip");
$smarty->assign('webtitle','Yougotrip.com');
$smarty->assign('loginerror',$_SESSION['LOGINERROR']);

$smarty->display('header.tpl');
$smarty->display('links_css_index.tpl');
$smarty->display('slider.tpl');
//$smarty->display('breadcrumbs.tpl');

$smarty->display('body_start.tpl');
//$smarty->display('list_style1.tpl');
fnStyle1($con,$smarty,$table_name);
fnStyle2($con,$smarty,$table_name);

$smarty->display('list_style.tpl');
//$smarty->display('testimonial.tpl');
$smarty->display('footer.tpl');
$smarty->display('links_js_index.tpl');


/*########################### fnStyle1 Start #########################################*/

function fnStyle1($con,$smarty,$table_name){
	echo '<!-- Recent Works -->
	<div class="headline"><h3>International Pack</h3></div>';
	
	$qry = "select * from $table_name where category_desc='Malaysia Singapore'";
	$res = mysqli_query($con,$qry);
		
	$i=0;
	$flag=true;
	
	while($row = mysqli_fetch_assoc($res)){
		$i=$i+1;
	
		if(($i % 4)==1)
		{
			echo '<ul class="thumbnails">';
			$flag=true;
			
		}

		$smarty->assign('img_src','admin/'.$row['pack_image']);
		$pack_title = addTrialSpaceToLine($row['pack_title'],160);
		$smarty->assign('pack_title',$pack_title);
		//$smarty->assign('pack_desc',$row['pack_desc']);	
		$smarty->assign('pack_id',$row['pack_id']);
		$smarty->assign('pack_category',$row['category_desc']);
		
		$smarty->display('list_style1.tpl');
	
		if(($i % 4)==0)
		{
			echo '</ul>';
			$flag=true;
			
		}
			
	} // while end 
	
		if ($flag==true)
		{
		echo '</ul>';
		}

}  // function end 
/*############################### fnStyle1 end ######################################*/





function fnStyle2($con,$smarty,$table_name){
	echo '<!-- Recent Works -->
		<div class="headline"><h3>Malaysia Singapore</h3></div>
		<div class="row-fluid margin-bottom-40">';
	$qry = "select * from $table_name where category_desc='Malaysia Singapore'";
	$res = mysqli_query($con,$qry);
	
	echo '<ul id="list" class="bxslider recent-work">';
	while($row = mysqli_fetch_assoc($res)){
	
		$smarty->assign('img_src','admin/'.$row['pack_image']);
		$pack_title = addTrialSpaceToLine($row['pack_title'],80);
		$smarty->assign('pack_title',$pack_title);
		//$smarty->assign('pack_desc',$row['pack_desc']);	
		$smarty->assign('pack_id',$row['pack_id']);
		$smarty->assign('pack_category',$row['category_desc']);
		$smarty->display('list_style2.tpl');	
	}
	
	echo '</ul>';
}
?>
