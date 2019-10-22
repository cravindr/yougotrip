<?php
session_start();
require('smartysetting.php');
require('authenticate.php');

$qry = "select * from admin_profile";
$res = mysqli_query($con,$qry);
$row = mysqli_fetch_array($res);

$smarty->assign('menu_profile','class="active"');
$smarty->display('header.tpl');
;
$smarty->display('changepassword.tpl');
$smarty->display('footer.tpl');
?>
