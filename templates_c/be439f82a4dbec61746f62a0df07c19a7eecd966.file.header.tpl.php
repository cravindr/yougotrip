<?php /* Smarty version Smarty-3.1.14, created on 2019-10-22 07:33:59
         compiled from "templates/header.tpl" */ ?>
<?php /*%%SmartyHeaderCode:5339813785dae94c7393f53-24389680%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'be439f82a4dbec61746f62a0df07c19a7eecd966' => 
    array (
      0 => 'templates/header.tpl',
      1 => 1400825678,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '5339813785dae94c7393f53-24389680',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'title' => 0,
    'metakeywords' => 0,
    'metadesc' => 0,
    'callus' => 0,
    'url_login' => 0,
    'label_login' => 0,
    'feed' => 0,
    'facebook' => 0,
    'googleplus' => 0,
    'twitter' => 0,
    'linkedin' => 0,
    'pinterest' => 0,
    'vimeo' => 0,
    'logo' => 0,
    'show_booking' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_5dae94c73c7169_36720508',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5dae94c73c7169_36720508')) {function content_5dae94c73c7169_36720508($_smarty_tpl) {?><!DOCTYPE html>
<!--[if IE 7]> <html lang="en" class="ie7"> <![endif]-->  
<!--[if IE 8]> <html lang="en" class="ie8"> <![endif]-->  
<!--[if IE 9]> <html lang="en" class="ie9"> <![endif]-->  
<!--[if !IE]><!--> <html lang="en"> <!--<![endif]-->  
<head>
    <title><?php echo $_smarty_tpl->tpl_vars['title']->value;?>
</title>

    <!-- Meta -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <meta name="keywords" content="<?php echo $_smarty_tpl->tpl_vars['metakeywords']->value;?>
" />
    <meta name="description" content="<?php echo $_smarty_tpl->tpl_vars['metadesc']->value;?>
" />
    <meta name="google-site-verification" content="_8iJ3VVci8eeS3nPGtIqYlqNfI4B86MyXhnwhZF-hXQ" />
    
    <!-- CSS Global Compulsory-->
    <link rel="stylesheet" href="assets/plugins/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/css/style.css">
    <link rel="stylesheet" href="assets/css/headers/header1.css">
    <link rel="stylesheet" href="assets/plugins/bootstrap/css/bootstrap-responsive.min.css">
    <link rel="stylesheet" href="assets/css/style_responsive.css">
    <link rel="shortcut icon" href="favicon.ico">
    <link rel="stylesheet" href="assets/plugins/font-awesome/css/font-awesome.css">
    
        <!-- CSS Theme -->    
    <link rel="stylesheet" href="assets/css/themes/default.css" id="style_color">
    <link rel="stylesheet" href="assets/css/validation/validationEngine.jquery.css">
</head> 

<body>

<!--=== Top ===-->
<div class="top">
    <div class="container">
        <div class="top-widget pull-right">
        <ul class="loginbar">
            <li class="phone-number">Call Us <?php echo $_smarty_tpl->tpl_vars['callus']->value;?>
</li>
            <li class="devider">&nbsp;</li>
            <li><a href="page_faq.html" class="login-btn">Help</a></li>
            <li class="devider">&nbsp;</li>
            <li><a href="<?php echo $_smarty_tpl->tpl_vars['url_login']->value;?>
" class="login-btn"><?php echo $_smarty_tpl->tpl_vars['label_login']->value;?>
</a></li>
        </ul>
        <ul class="social-icons">
            <!--<li><a href="<?php echo $_smarty_tpl->tpl_vars['feed']->value;?>
" data-original-title="Feed" class="social_rss"></a></li>-->
            <li><a href="<?php echo $_smarty_tpl->tpl_vars['facebook']->value;?>
" data-original-title="Facebook" class="social_facebook"></a></li>
            <li><a href="<?php echo $_smarty_tpl->tpl_vars['googleplus']->value;?>
" data-original-title="Goole Plus" class="social_googleplus"></a></li>
            <li><a href="<?php echo $_smarty_tpl->tpl_vars['twitter']->value;?>
" data-original-title="Twitter" class="social_twitter"></a></li>
            <li><a href="<?php echo $_smarty_tpl->tpl_vars['linkedin']->value;?>
" data-original-title="Linkedin" class="social_linkedin"></a></li>
            <!--<li><a href="<?php echo $_smarty_tpl->tpl_vars['pinterest']->value;?>
" data-original-title="Pinterest" class="social_pintrest"></a></li>-->
            
           <!-- <li><a href="<?php echo $_smarty_tpl->tpl_vars['vimeo']->value;?>
" data-original-title="Vimeo" class="social_vimeo"></a></li>-->
        </ul>
        </div>
    </div>
</div><!--/top-->
<!--=== End Top ===-->

<!--=== Header ===-->
<div class="header">               
    <div class="container"> 
        <!-- Logo -->       
        <div class="logo">                                             
            <a href="index.php"><img id="logo-header" src="<?php echo $_smarty_tpl->tpl_vars['logo']->value;?>
" alt="Logo"></a>
        </div><!-- /logo -->        
                                    
        <!-- Menu -->       
        <div class="navbar">                                
            <div class="navbar-inner">                                  
                <a class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse">
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </a><!-- /nav-collapse -->                                  
                <div class="nav-collapse collapse">                                     
                    <ul class="nav top-2">
                        <li>
                            <a href="index.php"  >Home
                                <!--<b class="caret"></b>-->                       
                            </a>
                            
                            <!--<ul class="dropdown-menu">
                                <li><a href="index.php">Home</a></li>
							</ul>                            
                            <b class="caret-out"></b>  -->
                                                  
                        </li>
                        
                        <li class="active">
                            <a href="" class="dropdown-toggle" data-toggle="dropdown">Services
                                <b class="caret"></b>                            
                            </a>
                            <ul class="dropdown-menu">
                                <li><a href="enquiry_flight_booking.php">Flight Booking</a></li>
                                <li><a href="enquiry_hotel_reservation.php">Hotel Reservation</a></li>
                                <li><a href="enquiry_visa_assistance.php">Vissa Assistance</a></li>
                                <li><a href="enquiry_travel_insurance.php">Travel Insurance</a></li>
                                
                            </ul>
                            <b class="caret-out"></b>                        
                        </li>
                        
                        <li class="active">
                            <a href="" class="dropdown-toggle" data-toggle="dropdown">Tour Packages
                                <b class="caret"></b>                            
                            </a>
                            <ul class="dropdown-menu">
                            	<li><a href="packages.php?PACK=*">All Packages</a></li>
                                <li><a href="packages.php?PACK=MS">Malaysia Singapore</a></li>
                                <li><a href="packages.php?PACK=IN">Indian</a></li>
                                <li><a href="packages.php?PACK=EU">Europe</a></li>

                                
                            </ul>
                            <b class="caret-out"></b>                        
                        </li>
                        
                        <!--<li <?php echo $_smarty_tpl->tpl_vars['show_booking']->value;?>
>
                            <a href="" class="dropdown-toggle" data-toggle="dropdown">My Booking
                                <b class="caret"></b>                            
                            </a>
                            <ul class="dropdown-menu">
                                <li><a href="#">Curent Booking</a></li>
                                <li><a href="orderlist.php">History</a></li>
                                </ul>
                            <b class="caret-out"></b>                        
                        </li>-->
                        
                        <li <?php echo $_smarty_tpl->tpl_vars['show_booking']->value;?>
>
                            <a href="" class="dropdown-toggle" data-toggle="dropdown">My Account
                                <b class="caret"></b>                            
                            </a>
                            <ul class="dropdown-menu">
                                <li><a href="userinfo.php">Profile</a></li>
                                <li><a href="creditbalance.php">Credit Balance</a></li>
                                <li><a href="orderlist.php">Booked History</a></li>
                                <li><a href="transaction.php">Transaction</a></li>
                                <li><a href="changepassword.php">Change Password</a></li>
                                </ul>
                            <b class="caret-out"></b>                        
                        </li>
                        
                        <!--
                        <li>
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown">Blog
                                <b class="caret"></b>                            
                            </a>
                            <ul class="dropdown-menu">
                                <li><a href="blog.html">Blog</a></li>
                                <li><a href="blog_item.html">Blog Item</a></li>
                                <li><a href="blog_left_sidebar.html">Blog Left Sidebar</a></li>
                                <li><a href="blog_item_left_sidebar.html">Blog Item Left Sidebar</a></li>
                            </ul>
                            <b class="caret-out"></b>                        
                        </li>
                         <li>
                            <a href="contactus.php">Contact                        
                            </a>
                                                 
                        </li>
                        -->

                    </ul>

                </div><!-- /nav-collapse -->                                
            </div><!-- /navbar-inner -->
        </div><!-- /navbar -->                          
    </div><!-- /container -->               
</div><!--/header -->      
<!--=== End Header ===-->



                <!--############################## Left Part Start ########################################--->
<!--=== Content Part ===-->
<?php }} ?>