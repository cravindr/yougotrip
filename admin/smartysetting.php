<?php
session_start();
 require('Smarty/libs/Smarty.class.php');
 require('dbconnect.php');
 $smarty=new Smarty;
 $smarty->template_dir='templates';
 $smarty->config_dir='config';
 $smarty->cache_dir='config';
 $smarty->compile_dir='templates_c';
 
 $res=mysqli_query($con,'select * from setting');

 $resultset=mysqli_fetch_array($res);
 $_SESSION["SITENAME"]==$resultset['sitename'];
 
 $smarty->assign('webpagename',$resultset['sitename']);
 $smarty->assign('webtitle',$resultset['titlename']);
 $smarty->assign('webmetacontent',$resultset['metacontent']);
 $smarty->assign('webmetakeyword',$resultset['metakeyword']);
 $smarty->assign('webmetadescription',$resultset['metadescription']);
 $smarty->assign('weblogo',$resultset['logo']); 
 $smarty->assign('webmainlogo',$resultset['mainlogo']);
 $smarty->assign('websubtitle',$resultset['subtitle']);
 
?>
