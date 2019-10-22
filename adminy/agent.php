<?php
session_start();
require('smartysetting.php');
require('authenticate.php');

$smarty->assign('menu_agent','class="active"');
$smarty->display('header.tpl');

if(isset($_SESSION['ID_EDIT'])){
	$agent_id = $_SESSION['ID_EDIT'];
	$qry = "select * from agent where agent_id='$agent_id'";
	$res = mysqli_query($con,$qry);
	$row = mysqli_fetch_array($res);
	$smarty->assign('agent_id',$agent_id);
	$smarty->assign('input_title',$row['title']);
	$smarty->assign('input_firstname',$row['first_name']);
	$smarty->assign('input_lastname',$row['last_name']);
	$smarty->assign('input_address',$row['address']);
	$smarty->assign('input_city',$row['city']);
	$smarty->assign('input_state',$row['state']);
	$smarty->assign('input_country',$row['country']);
	$smarty->assign('input_pincode',$row['zip']);
	$smarty->assign('input_email',$row['email']);
	$smarty->assign('input_income',$row['income']);
	$smarty->assign('input_phone',$row['phone']);
	$smarty->assign('input_mobile',$row['mobile']);
	$smarty->assign('input_mobile2',$row['mobile2']);
	$smarty->assign('input_fax',$row['fax']);
	$smarty->assign('input_pan',$row['pan_card_no']);
	$smarty->assign('input_website',$row['website']);
	$smarty->assign('input_cmp_name',$row['company']);
	
	$num = 1;
	$img_url = $row['company_logo'];
	$display_img_logo = "<div class='fileupload-new thumbnail span2' id='img$num'>
								<div class='arrow'></div>
								<a href='#'><div class='icon' onclick=removeLogo($num,$agent_id,'$img_url')>
									<span class='icon-remove'></span>
								</div> </a>    
								<img src='$img_url' width='100%' />
							</div>";
	if($row['company_logo'] != ''  ){		
		$smarty->assign('display_logo_main','style="display:none"');
		$smarty->assign('display_img_lo','style="display:block"');
		$smarty->assign('display_img_logo',$display_img_logo);
	}else{
		$smarty->assign('display_img_lo','style="display:none"');
		$smarty->assign('input_img1',$row['company_logo']);
	}
	
	$smarty->assign('input_cmp_reg_no',$row['company_reg_no']);
	$smarty->assign('input_cmp_vat',$row['company_vat_no']);
	$smarty->assign('input_cmp_service_tax',$row['company_service_tax_no']);
	$smarty->assign('input_cmp_address',$row['company_address']);
	$smarty->assign('input_cmp_bank_details',$row['company_bank_details']);
	$smarty->assign('input_cmp_pan',$row['company_pan_card_no']);
	
	$smarty->assign('user_post_url','agent_upd.php');
	
	unset($_SESSION['ID_EDIT']);
	
}else{	
	$smarty->assign('display_img','style="display:none"');	
	$smarty->assign('user_post_url','agent_save.php');	
}

$smarty->display('agent.tpl');
$smarty->display('footer.tpl');
?>
