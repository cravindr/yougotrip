<?php
session_start();
require('smartysetting.php');
require('source/trail_space.php');
//require('authenticate.php');
$table_name="package";
$PACK=$_GET['PACK'];


$smarty->assign('webpagename',"Yougotrip");
$smarty->assign('webtitle','Yougotrip.com');
$smarty->assign('loginerror',$_SESSION['LOGINERROR']);

if(isset($_SESSION['TRIP_USER_ID'])){	
	$smarty->assign('label_login',"Logout");
	$smarty->assign('url_login',"logout.php");	
}else{
	$smarty->assign('label_login',"Login");
	$smarty->assign('url_login',"login.php");
	$smarty->assign('show_booking','style="display:none"');
}
$smarty->display('header.tpl');
$smarty->display('links_css_index.tpl');
$smarty->display('slider3.tpl');

$smarty->display('body_start.tpl');

//fnStyle1($con,$smarty,$table_name);
//fnStyle2($con,$smarty,$table_name);






if ($PACK=='MS')
{
 $catad=" category_desc='Malaysia Singapore'";
	 fnStyle3($con,$smarty,$table_name,$catad);
}

if ($PACK=='IN')
{
 $catad=" category_desc='Indian Tour'";
 fnStyle3($con,$smarty,$table_name,$catad);
}
if ($PACK=='EU')
{
	$catad=" category_desc='Europ'";
 fnStyle3($con,$smarty,$table_name,$catad);
}
if ($PACK=='*') 
{
	$catad=" category_desc like'%'";
fnStyle3($con,$smarty,$table_name,$catad);
}



$smarty->display('footer.tpl');
$smarty->display('links_js_index.tpl');


/*########################### fnStyle1 Start #########################################*/

function fnStyle1($con,$smarty,$table_name){
	echo '<!-- Recent Works -->
	<div class="headline"><h3>International Pack</h3></div>';
	
	$qry = "select * from $table_name";
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
			$flag=false;
			
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
	$qry = "select * from $table_name";
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


/*########################### fnStyle3 Start #########################################*/

function fnStyle3($con,$smarty,$table_name,$cata){
		echo '</div><!--/row-->
	<!-- //End Recent Works -->
    
    <!-- Transform Thumbnail -->
    <div class="row-fluid">
        <div class="headline"><h3>Tour Packages</h3></div>';
	
	$qry = "select * from $table_name where status='1' and  $cata ";
	
	$res = mysqli_query($con,$qry);
		
	$i=0;
	$flag=true;
	
	while($row = mysqli_fetch_assoc($res)){
		$i=$i+1;
	
		if(($i % 4)==1)
		{
			echo '<ul class="thumbnails" id="cat3">';
			$flag=true;

			
		}

		$smarty->assign('img_src','admin/'.$row['pack_image']);
		$pack_title = addTrialSpaceToLine($row['pack_title'],160);
		$smarty->assign('pack_title',$pack_title);
		//$smarty->assign('pack_desc',$row['pack_desc']);	
		$smarty->assign('pack_id',$row['pack_id']);
		$smarty->assign('pack_category',$row['category_desc']);
		
		$smarty->display('list_style3.tpl');
	
		if(($i % 4)==0)
		{
			echo '</ul>';
			$flag=false;

			
		}
			
	} // while end 
	
		if ($flag==true)
		{
		echo '</ul>';
		}
echo '</div>';
}  // function end 
/*############################### fnStyle3 end ######################################*/
?>

