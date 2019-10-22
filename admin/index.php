<?php
session_start();
require('smartysetting.php');
//require('authenticate.php');


$smarty->assign('webpagename',"Yougotrip");
$smarty->assign('webtitle','Yougotrip.com');
$smarty->assign('loginerror',$_SESSION['LOGINERROR']);
$smarty->display('index.tpl');

?>