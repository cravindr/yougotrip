<?php
require('smartysetting.php');
require('authenticate.php');

$smarty->assign('menu_tour','class="active"');
$smarty->display('header.tpl');

if(isset($_SESSION['ID_EDIT'])){
	$pack_id = $_SESSION['ID_EDIT'];
	$_SESSION['PACK_ID']=$pack_id;
	$qry = "select * from package where pack_id='$pack_id'";
	$res = mysqli_query($con,$qry);
	$row = mysqli_fetch_array($res);
	$smarty->assign('input_packagetype',$row['category_desc']);
	$smarty->assign('input_title',$row['pack_title']);
	$smarty->assign('input_title_desc',$row['title_desc']);
	$smarty->assign('input_description',$row['pack_desc']);
	$smarty->assign('input_place_desc',$row['place_desc']);
	$smarty->assign('input_includes',$row['pack_includes']);
	$smarty->assign('input_excludes',$row['pack_excludes']);
	$smarty->assign('input_itinerary',$row['itinerary']);
	$smarty->assign('input_dac',$row['dateandcost']);
	$smarty->assign('input_adultprice',$row['adult_price']);
	$smarty->assign('input_childprice',$row['child_price']);
	$smarty->assign('input_childwobprice',$row['child_wob_price']);
	$smarty->assign('input_meta_desc',$row['meta_desc']);
	$smarty->assign('input_meta_keyword',$row['meta_keyword']);
	$smarty->assign('input_staticurl',$row['staticurl']);
	$smarty->assign('themeval',$row['theme']);
	
	
	$num = 1;
	$pid = $row['pack_id'];
	$img_url = $row['pack_image'];
	$display_img_logo = "<div class='fileupload-new thumbnail span2' id='imgl$num'>
								<div class='arrow'></div>
								<a href='#'><div class='icon' onclick=removeLogo($num,$pid,'$img_url')>
									<span class='icon-remove'></span>
								</div> </a>    
								<img src='$img_url' width='100%' />
							</div>";
							
	if($row['pack_image'] != ''  ){		
		$smarty->assign('display_logo_main','style="display:none"');
		$smarty->assign('display_img_lo','style="display:block"');
		$smarty->assign('display_img_logo',$display_img_logo);
	}else{
		$smarty->assign('display_img_lo','style="display:none"');
		$smarty->assign('input_img1',$row['pack_image']);
	}
		
	$smarty->assign('display_img','style="display:block"');	
	
	$qry_img = "select * from package_image where pack_id =$pid";
	$res_img = mysqli_query($con,$qry_img);
	while($row_img = mysqli_fetch_array($res_img)){			
		$img_url = $row_img['pack_image'];
		$display_img_con .= "<div class='fileupload-new thumbnail span2' id='img$num'>
								<div class='arrow'></div>
								<a href='#'><div class='icon' onclick=removeImg($num,$pid,'$img_url')>
									<span class='icon-remove'></span>
								</div> </a>    
								<img src='$img_url' width='100%' />
							</div>";
		$num = $num+1;
	}
	
	$smarty->assign('display_img_con',$display_img_con);
	$smarty->assign('pack_id',$row['pack_id']);
	
	$smarty->assign('tourpack_post_url','tourpack_upd.php');
	
	
	
}else{	
	$smarty->assign('display_img','style="display:none"');	
	$smarty->assign('tourpack_post_url','tourpack_save.php');	
}

$smarty->display('tour.tpl');
$smarty->display('footer.tpl');
unset($_SESSION['ID_EDIT']);
?>
