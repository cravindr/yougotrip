<?php
session_start();
require('smartysetting.php');
require('authenticate.php');

$smarty->assign('menu_dashboard','class="active"');
$smarty->display('header.tpl');

$id=$_SESSION['ID_EDIT'];
unset($_SESSION['ID_EDIT']);
	if($id)
	{
		$sql="select * from brandpartner where id=" . $id;

		$rs=mysqli_query($con,$sql);
		$row=mysqli_fetch_array($rs);
		$img_url=$row['image'];
		
		$smarty->assign('partid',$id);
		$smarty->assign('company',$row['companyname']);
		$smarty->assign('url',$row['url']);
		$smarty->assign('desc',$row['desc']);
		$smarty->assign('image',$row['image']);
		$smarty->assign('meta_desc',$row['meta_desc']);
		$smarty->assign('meta_keyword',$row['meta_keyword']);
		$smarty->assign('addnewurl','brandpartner_edit.php');
		
		
		
		$display_img_logo = "<div class='fileupload-new thumbnail span2' id='img$num'>
								<div class='arrow'></div>
								<a href='#'><div class='icon' onclick=removeLogo($id,$id,'$img_url')>
									<span class='icon-remove'></span>
								</div> </a>    
								<img src='$img_url' width='100%' />
							</div>";
							
	if($row['image'] != '' ){	
		$smarty->assign('visiable_logo_main','style="display:none"'); // hide the imge upload button
		$smarty->assign('display_img_lo','style="display:block"'); //show the logo image div
		$smarty->assign('display_img_logo',$display_img_logo);
	}else{
		echo "no image";
		$smarty->assign('visiable_img_logo','style="display:none"'); // hide logo image div
		$smarty->assign('visiable_logo_main','style="display:block"'); // Show the image upload button
		$smarty->assign('input_img1',$row['pack_image']);  // asign dummy logo
	}
		
	$smarty->assign('display_img','style="display:block"');	
		
		
		
		
		
		
		
	}// if true part

	else
	{
	$smarty->assign('addnewurl','brandpartner_upd.php');
	} //if else part


$smarty->display('brandpartner.tpl');
$smarty->display('footer.tpl');






?>