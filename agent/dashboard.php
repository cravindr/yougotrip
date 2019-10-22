<?php
require('smartysetting.php');


$smarty->assign('agentname',$_SESSION['AGENT_NAME']);
$smarty->assign('agentlogo',$_SESSION['AGENT_LOGO']);
$smarty->display('header.tpl');
$smarty->display('dashboard.tpl');
$smarty->display('footer.tpl');
?>
