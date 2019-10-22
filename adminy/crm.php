<?php
session_start();
require('smartysetting.php');
require('authenticate.php');
$smarty->assign('menu_crm','class="active"');
$smarty->assign('addnewurl','crm_upd.php');

$smarty->display('header.tpl');
$smarty->display('crm.tpl');
$smarty->display('footer.tpl');






?>