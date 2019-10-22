<?php
session_start();
require('smartysetting.php');
require('authenticate.php');

$adminid = $_SESSION['ADMIN_ID'];
$smarty->assign('menu_dashboard','class="active"');
$smarty->display('header.tpl');

$qry = "select user_name from admin_profile where uid='$adminid'";
$res = mysqli_query($con,$qry);
$row = mysqli_fetch_assoc($res);
$smarty->assign('user_name',$row['user_name']);	
$smarty->assign('profile_post_url','profile_save.php');	

$smarty->display('profile.tpl');
$smarty->display('footer.tpl');
?>
