<?php /* Smarty version Smarty-3.1.14, created on 2015-12-11 11:12:09
         compiled from "templates\header.tpl" */ ?>
<?php /*%%SmartyHeaderCode:519352bbbcfcb6d361-25467450%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '20a5b87bf1d249a8e4b5bdf6dc560aa9c65c681a' => 
    array (
      0 => 'templates\\header.tpl',
      1 => 1396072348,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '519352bbbcfcb6d361-25467450',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_52bbbcfcef8df5_89248861',
  'variables' => 
  array (
    'webtitle' => 0,
    'webmetacontent' => 0,
    'webmetakeyword' => 0,
    'webmetadescription' => 0,
    'menu_profile' => 0,
    'menu_tour' => 0,
    'menu_agent' => 0,
    'menu_booked' => 0,
    'menu_user' => 0,
    'menu_crm' => 0,
    'registerpage_cap' => 0,
    'companyname' => 0,
    'webpagename' => 0,
    'websubtitle' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_52bbbcfcef8df5_89248861')) {function content_52bbbcfcef8df5_89248861($_smarty_tpl) {?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">

<head>        
    <title><?php echo $_smarty_tpl->tpl_vars['webtitle']->value;?>
 </title>    
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0" />    
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="content" content="<?php echo $_smarty_tpl->tpl_vars['webmetacontent']->value;?>
">
    <meta name="keyword" content="<?php echo $_smarty_tpl->tpl_vars['webmetakeyword']->value;?>
">
    <meta name="description" content="<?php echo $_smarty_tpl->tpl_vars['webmetadescription']->value;?>
">
    <!--[if gt IE 8]>
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />        
    <![endif]-->                
    <title><?php echo $_smarty_tpl->tpl_vars['webtitle']->value;?>
</title>
    <link rel="icon" type="image/ico" href="favicon.ico"/>
    
    <link href="css/stylesheets.css" rel="stylesheet" type="text/css" />
    <!--[if lte IE 7]>
        <link href="css/ie.css" rel="stylesheet" type="text/css" />
        <script type='text/javascript' src='js/plugins/other/lte-ie7.js'></script>
    <![endif]-->    
    <script type='text/javascript' src='js/plugins/jquery/jquery-1.9.1.min.js'></script>
    <script type='text/javascript' src='js/plugins/jquery/jquery-ui-1.10.1.custom.min.js'></script>
    <script type='text/javascript' src='js/plugins/jquery/jquery-migrate-1.1.1.min.js'></script>
    <script type='text/javascript' src='js/plugins/jquery/globalize.js'></script>
    <script type='text/javascript' src='js/plugins/other/excanvas.js'></script>    
    <script type='text/javascript' src='js/plugins/other/jquery.mousewheel.min.js'></script>        
    <script type='text/javascript' src='js/plugins/bootstrap/bootstrap.min.js'></script>    
    <script type='text/javascript' src='js/plugins/cookies/jquery.cookies.2.2.0.min.js'></script>
           
    <script type='text/javascript' src='js/plugins/jflot/jquery.flot.js'></script>    
    <script type='text/javascript' src='js/plugins/jflot/jquery.flot.stack.js'></script>    
    <script type='text/javascript' src='js/plugins/jflot/jquery.flot.pie.js'></script>
    <script type='text/javascript' src='js/plugins/jflot/jquery.flot.resize.js'></script> 
    <script type='text/javascript' src='js/plugins/sparklines/jquery.sparkline.min.js'></script>          
    
    <script type='text/javascript' src='js/plugins/mcustomscrollbar/jquery.mCustomScrollbar.min.js'></script>
       
    <script type='text/javascript' src="js/plugins/uniform/jquery.uniform.min.js"></script>
    <script type='text/javascript' src='js/plugins/datatables/jquery.dataTables.min.js'></script>
    
    <script type='text/javascript' src='js/plugins/validationEngine/languages/jquery.validationEngine-en.js'></script>
    <script type='text/javascript' src='js/plugins/validationEngine/jquery.validationEngine.js'></script>      
    <script type='text/javascript' src="js/plugins/uniform/jquery.uniform.min.js"></script>
    <script type='text/javascript' src="js/plugins/select/select2.min.js"></script>
    <script type='text/javascript' src='js/plugins/tagsinput/jquery.tagsinput.min.js'></script>
    <script type='text/javascript' src='js/plugins/maskedinput/jquery.maskedinput-1.3.min.js'></script>
    <script type='text/javascript' src='js/plugins/multiselect/jquery.multi-select.min.js'></script>
    <script type='text/javascript' src='js/plugins/shbrush/XRegExp.js'></script>
    <script type='text/javascript' src='js/plugins/shbrush/shCore.js'></script>
    <script type='text/javascript' src='js/plugins/shbrush/shBrushXml.js'></script>
    <script type='text/javascript' src='js/plugins/shbrush/shBrushJScript.js'></script>
    <script type='text/javascript' src='js/plugins/shbrush/shBrushCss.js'></script>    
    <script type='text/javascript' src='js/plugins/ckeditor/ckeditor.js'></script>
    <script type='text/javascript' src='js/plugins.js'></script>
    <script type='text/javascript' src='js/charts.js'></script>    
    <script type='text/javascript' src='js/actions.js'></script>
    <script type='text/javascript' src='js/plugins/bootstrap/bootstrap-fileupload.min.js'></script>
    
    <script type='text/javascript' src='jscript/dashboard.js'></script>

</head>
<body>

        <div class="sidebar">
            
            <div class="top">
                <a href="../index.php" class="logo"></a>
                
            </div>
            <div class="nContainer">                
                <ul class="navigation">         
                    <li><a href="dashboard.php" class="blblue">Dashboard</a></li>
                    
                    <li <?php echo $_smarty_tpl->tpl_vars['menu_profile']->value;?>
>
                        <a href="#" class="blyellow">Profile</a>
                        <div class="open"></div>
                        <ul>
                            <!--<li><a href="profile.php">Profile</a></li>-->
                            <li><a href="settings.php">Settings</a></li>
                            <li><a href="social.php">Social</a></li>
                            <li><a href="content.php">Content</a></li>
                           <!-- <li><a href="layout_desc.php">Layout</a></li>-->
<!--                            <li><a href="brandpartner.php">Brand Partner</a></li>
                            <li><a href="brandlist.php">Brand Partner List</a></li>   -->                         
                            <li><a href="changepassword.php">Change Password</a></li>
                        </ul>
                    </li>
                    <li <?php echo $_smarty_tpl->tpl_vars['menu_tour']->value;?>
>
                        <a href="#" class="blgreen">Tour Package</a>
                        <div class="open"></div>
                        <ul>
                            <li><a href="category.php">New Category</a></li>
                            <li><a href="categorylist.php">Category List</a></li>
                            <li><a href="tourpack.php">New Tour</a></li>
                            <li><a href="tourpacklist.php">Tour List</a></li>
                            <li><a href="displaylist.php">Display List</a></li>
<!--                            <li><a href="gallery.php">Gallery</a></li>
                            <li><a href="gallerylist.php">Gallery List</a></li>-->
                        </ul>
                    </li>
                    <li <?php echo $_smarty_tpl->tpl_vars['menu_agent']->value;?>
>
                        <a href="#" class="blred">Agent</a>
                        <div class="open"></div>
                        <ul>
                            <li><a href="agent.php">Create Agent</a></li>
                            <li><a href="agentslist.php">List Agent</a></li>
                            <li><a href="bookedlist.php">Booked List</a></li>
             
                        </ul>
                    </li> 
                    <li <?php echo $_smarty_tpl->tpl_vars['menu_booked']->value;?>
>
                        <a href="#" class="blred">Booking</a>
                        <div class="open"></div>
                        <ul>
                            <li><a href="booked_list.php">Booked List</a></li>
                            
             
                        </ul>
                    </li>
                    
                    <li <?php echo $_smarty_tpl->tpl_vars['menu_user']->value;?>
>
                        <a href="#" class="blred">Users</a>
                        <div class="open"></div>
                        <ul>
                            <li><a href="manageusers.php">Manage User</a></li>             
                        </ul>
                    </li>                
                    <li <?php echo $_smarty_tpl->tpl_vars['menu_crm']->value;?>
>
                        <a href="#" class="blred">CRM</a>
                        <div class="open"></div>
                        <ul>
                            <li><a href="crm.php">New Enquiry</a></li>
                            <li><a href="crmlist.php">Enquiry List </a></li>
                        </ul>
                    </li>
                    
                    <li>
                        <a href="logout.php" class="blpurple">Logout</a> </li>                                       
                                       
                </ul>
                <a class="close">
                    <span class="ico-remove"></span>
                </a>
            </div>
            
          <!--  <div class="widget">
                <div class="datepicker"></div>
            </div>-->
            
        </div>
        
<div class="body">
            
            <ul class="navigation">
                <li>
                    <a href="dashboard.php" class="button">
                        <div class="icon">
                            <span class="ico-monitor"></span>
                        </div>                    
                        <div class="name">Dashboard</div>
                    </a>                
                </li>
                <li>
                    <a href="#" class="button yellow">
                        <div class="arrow"></div>
                        <div class="icon">
                            <span class="ico-cog-2"></span>
                        </div>                    
                        <div class="name">Profile</div>
                    </a>          
                    <ul class="sub">
                        
                            <li><a href="settings.php">Settings</a></li>
                            <li><a href="social.php">Social</a></li>
                            <li><a href="content.php">Content</a></li>
                            <li><a href="changepassword.php">Change Password</a></li>
                            <!--<li><a href="layout_desc.php">Layout</a></li>-->
                            <!--<li><a href="brandpartner.php">Brand Partner</a></li>-->
                            <!--<li><a href="brandlist.php">Brand Partner List</a></li>-->                            
                            
                    </ul>
                </li>                
                <li>
                    <a href="#" class="button green">
                        <div class="arrow"></div>
                        <div class="icon">
                            <span class="ico-pen-2"></span>
                        </div>                    
                        <div class="name">Tour Packages</div>
                    </a>                
                    <ul class="sub">
                        <li><a href="category.php">New Category</a></li>
                            <li><a href="categorylist.php">Category List</a></li>
                            <li><a href="tourpack.php">New Tour</a></li>
                            <li><a href="tourpacklist.php">Tour List</a></li>
                            <li><a href="displaylist.php">Display List</a></li>
                            <!--<li><a href="gallery.php">Gallery</a></li>
                            <li><a href="gallerylist.php">Gallery List</a></li>-->
                    </ul>                    
                </li>                        
                <li>
                    <a href="#" class="button red">
                    <div class="arrow"></div>
                        <div class="icon">
                            <span class="ico-chart-4"></span>
                        </div>                    
                        <div class="name">Agent</div>
                    </a>      
                    <ul class="sub">
                        <li><a href="agent.php">Create Agent</a></li>
                            <li><a href="agentslist.php">List Agent</a></li>
                            <!--<li><a href="tegalary.php">Credit Limit</a></li>-->
                            <li><a href="bookedlist.php">Booked List</a></li>
                    </ul>          
                </li>                
                <li>
                    <a href="#" class="button dblue">
                        <div class="arrow"></div>
                        <div class="icon">
                            <span class="ico-info-sign"></span>
                        </div>                    
                        <div class="name">CRM</div>
                    </a> 
                       
                       <ul class="sub">
                        <li><a href="crm.php">New Enquiry</a></li>
                        <li><a href="crmlist.php">Enquiry List</a></li>
                    </ul>                                     
                </li>
                <li>
                    <a href="logout.php" class="button purple">
                        <div class="icon">
                            <span class="ico-locked"></span>
                        </div>                    
                        <div class="name">Logout</div>
                    </a>                
                </li>
                                
                <li>
                    <div class="user">
                        <img src="img/examples/users/dmitry_m.jpg" align="left"/>
                        <a href="#" class="name">
                            <span><?php echo $_smarty_tpl->tpl_vars['registerpage_cap']->value;?>
</span>
                            <span class="sm"><?php echo $_smarty_tpl->tpl_vars['companyname']->value;?>
</span>
                        </a>
                    </div>
                    <div class="buttons">
                        <div class="sbutton green navButton">
                            <a href="#"><span class="ico-align-justify"></span></a>
                        </div>
                        <div class="sbutton blue">
                            <a href="#"><span class="ico-cogs"></span></a>
                            <div class="popup">
                                <div class="arrow"></div>
                                <div class="row-fluid">
                                    <div class="row-form">
                                        <div class="span12"><strong>SETTINGS</strong></div>
                                    </div>                                    
                                    <div class="row-form">
                                        <div class="span4">Navigation:</div>
                                        <div class="span8"><input type="radio" class="cNav" name="cNavButton" value="default"/> Default <input type="radio" class="cNav" name="cNavButton" value="bordered"/> Bordered</div>
                                    </div>                                    
                                    <div class="row-form">
                                        <div class="span4">Content:</div>
                                        <div class="span8"><input type="radio" class="cCont" name="cContent" value=""/> Responsive <input type="radio" class="cCont" name="cContent" value="fixed"/> Fixed</div>
                                    </div>                                    
                                </div>
                            </div>
                        </div>                        
                    </div>
                </li>                
            </ul>
            
          <div class="content">  
          
          <div class="page-header">
                    <div class="icon">
                        <span class="ico-layout-7"></span>
                    </div>
                    <h1><?php echo $_smarty_tpl->tpl_vars['webpagename']->value;?>
 <small><?php echo $_smarty_tpl->tpl_vars['websubtitle']->value;?>
</small></h1>
                </div>

                <div class="row-fluid">
                    <div class="span12">
                        <div class="block" id="bodystart" name="bodystart">
<?php }} ?>