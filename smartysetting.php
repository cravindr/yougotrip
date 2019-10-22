<?php
if(!isset($_SESSION)) session_start();
 require('Smarty/libs/Smarty.class.php');
 require('dbconnect.php');
 require('globalsetting.php');
 
 $smarty=new Smarty;
 $smarty->template_dir='templates';
 $smarty->config_dir='config';
 $smarty->cache_dir='cache';
 $smarty->compile_dir='templates_c';
 
 $res=mysqli_query($con,'select * from setting');
 $resultset=mysqli_fetch_array($res);

 
 $res2=mysqli_query($con,'select * from social');
 $resultset2=mysqli_fetch_array($res2);
 
 $res3=mysqli_query($con,'select * from layout_desc');
 $resultset3=mysqli_fetch_array($res3);
 
  $res4=mysqli_query($con,'select * from content_detail');
 $resultset4=mysqli_fetch_array($res4);




 $_SESSION["SITENAME"]=$resultset['sitename'];
 
 $smarty->assign('sitename',$resultset['sitename']);
 $smarty->assign('domainname',$resultset['domainname']);
 $smarty->assign('title',$resultset['titlename']);
 $smarty->assign('logo','admin/'.$resultset['logo']);
 $smarty->assign('subtitle',$resultset['subtitle']);
 $smarty->assign('metadesc',$resultset['metacontent']); 
 $smarty->assign('metakeywords',$resultset['metakeyword']);
 // $smarty->assign('metatitle',$resultset['metatitle']);
 $smarty->assign('searchbuttoncap',$resultset['searchbuttoncap']);
 $smarty->assign('address',$resultset['address']);
 $smarty->assign('email',$resultset['email']);
 $smarty->assign('phone',$resultset['phone']);
 $smarty->assign('website',$resultset['website']);
 $smarty->assign('fax',$resultset['fax']);
 
 
 $smarty->assign('callus',$resultset2['callus']);
 $smarty->assign('feed',$resultset2['feed']);
 $smarty->assign('facebook',$resultset2['facebook']);
 $smarty->assign('twitter',$resultset2['twitter']);
 $smarty->assign('googleplus',$resultset2['googleplus']);
 $smarty->assign('pinterest',$resultset2['pinterest']); 
 $smarty->assign('linkedin',$resultset2['linkedin']);
 //$smarty->assign('searchbuttoncap',$resultset2['searchbuttoncap']);
 $smarty->assign('vimeo',$resultset2['vimeo']);
 $smarty->assign('youtube',$resultset2['youtube']);
 
 $smarty->assign('business_hours',$resultset3['business_hours']);
 $smarty->assign('why_we_are',$resultset3['why_we_are']);
 $smarty->assign('stay_connected',$resultset3['stayconnected']);
 
 $smarty->assign('about_us',$resultset4['about_us']);
 
 
 $s = new Settings;
 $_SESSION['SETTINGS'] = $s->assignSettings($s,$con);
 
 /*
 $ss = $_SESSION['SETTINGS'];
 echo $ss->sitename;
 echo $ss->domainname;
 exit;
 */
?>
