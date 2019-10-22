<?php
require('smartysetting.php');
require('authenticate.php');

$smarty->assign('menu_tour','class="active"');
$smarty->display('header.tpl');

if(isset($_SESSION['ID_EDIT'])){
	$gallery_id = $_SESSION['ID_EDIT'];
	$qry = "select * from gallery where gallery_id='$gallery_id'";
	$res = mysqli_query($con,$qry);
	$row = mysqli_fetch_array($res);
	$smarty->assign('input_title',$row['name']);
	$smarty->assign('input_desc',$row['desc']);
	$smarty->assign('input_meta_desc',$row['meta_desc']);
	$smarty->assign('input_meta_keyword',$row['meta_keyword']);
	
		
	$smarty->assign('display_img','style="display:block"');	
	
	$gid = $row['gallery_id'];
	$qry_img = "select * from gallery_image where gallery_id =$gid";
	$res_img = mysqli_query($con,$qry_img);
	$num = 1;
	while($row_img = mysqli_fetch_array($res_img)){			
		$img_url = $row_img['gallery_image'];
		$display_img_con .= "<div class='fileupload-new thumbnail span2' id='img$num'>
								<img src='$img_url' width='100%' onclick=removeImg($num,$gid,'$img_url') />
							</div>";
		$num = $num+1;
	}
	
	$smarty->assign('display_img_con',$display_img_con);
	$smarty->assign('gallery_id',$row['gallery_id']);
	
	$smarty->assign('gallery_post_url','gallery_upd.php');
	
	unset($_SESSION['ID_EDIT']);
	
}else{
	$smarty->assign('display_img','style="display:none"');	
	$smarty->assign('gallery_post_url','gallery_save.php');
}

$smarty->display('gallery.tpl');
$smarty->display('footer.tpl');
?>
