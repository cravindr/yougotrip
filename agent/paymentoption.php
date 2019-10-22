<?php
session_start();
require('smartysetting.php');
require('authenticate.php');
$agentid = $_SESSION['AGENT_ID'];
$smarty->assign('menu_ticket','class="active"');
$smarty->display('header.tpl');
$smarty->display('paymentoption.tpl');
$smarty->display('footer.tpl');


?>