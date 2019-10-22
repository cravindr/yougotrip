<!DOCTYPE html>
<!--[if IE 7]> <html lang="en" class="ie7"> <![endif]-->  
<!--[if IE 8]> <html lang="en" class="ie8"> <![endif]-->  
<!--[if IE 9]> <html lang="en" class="ie9"> <![endif]-->  
<!--[if !IE]><!--> <html lang="en"> <!--<![endif]-->  
<head>
    <title>{$title}</title>

    <!-- Meta -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <meta name="keywords" content="{$metakeywords}" />
    <meta name="title" content="{$metatitle}" />
    <meta name="author" content="OrangeOnlineMedia" />
    <meta name="description" content="{$metadesc}" />
    
    <!-- CSS Global Compulsory-->
    <link rel="stylesheet" href="/assets/plugins/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="/assets/css/style.css">
    <link rel="stylesheet" href="/assets/css/headers/header1.css">
    <link rel="stylesheet" href="/assets/plugins/bootstrap/css/bootstrap-responsive.min.css">
    <link rel="stylesheet" href="/assets/css/style_responsive.css">
    <link rel="shortcut icon" href="favicon.ico">
    <link rel="stylesheet" href="/assets/plugins/font-awesome/css/font-awesome.css">
    
        <!-- CSS Theme -->    
    <link rel="stylesheet" href="/assets/css/themes/default.css" id="style_color">
    <link rel="stylesheet" href="/assets/css/validation/validationEngine.jquery.css">
</head> 

<body>

<!--=== Top ===-->
<div class="top">
    <div class="container">
        <div class="top-widget pull-right">
        <ul class="loginbar">
            <li class="phone-number">Call Us {$callus}</li>
            <li class="devider">&nbsp;</li>
            <li><a href="page_faq.html" class="login-btn">Help</a></li>
            <li class="devider">&nbsp;</li>
            <li><a href="{$url_login}" class="login-btn">{$label_login}</a></li>
        </ul>
        <ul class="social-icons">
            <!--<li><a href="{$feed}" data-original-title="Feed" class="social_rss"></a></li>-->
            <li><a href="{$facebook}" data-original-title="Facebook" class="social_facebook"></a></li>
            <li><a href="{$googleplus}" data-original-title="Goole Plus" class="social_googleplus"></a></li>
            <li><a href="{$twitter}" data-original-title="Twitter" class="social_twitter"></a></li>
            <li><a href="{$linkedin}" data-original-title="Linkedin" class="social_linkedin"></a></li>
            <!--<li><a href="{$pinterest}" data-original-title="Pinterest" class="social_pintrest"></a></li>-->
            
           <!-- <li><a href="{$vimeo}" data-original-title="Vimeo" class="social_vimeo"></a></li>-->
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
            <a href="/index.php"><img id="logo-header" src="/{$logo}" alt="Logo"></a>
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
                            <a href="/index.php"  >Home
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
                                <li><a href="/enquiry_flight_booking.php">Flight Booking</a></li>
                                <li><a href="/enquiry_hotel_reservation.php">Hotel Reservation</a></li>
                                <li><a href="/enquiry_visa_assistance.php">Vissa Assistance</a></li>
                                <li><a href="/enquiry_travel_insurance.php">Travel Insurance</a></li>
                                
                            </ul>
                            <b class="caret-out"></b>                        
                        </li>
                        
                        <li class="active">
                            <a href="" class="dropdown-toggle" data-toggle="dropdown">Tour Packages
                                <b class="caret"></b>                            
                            </a>
                            <ul class="dropdown-menu">
                            	<li><a href="/packages.php?PACK=*">All Packages</a></li>
                                <li><a href="/packages.php?PACK=MS">Malaysia Singapore</a></li>
                                <li><a href="/packages.php?PACK=IN">Indian</a></li>
                                <li><a href="/packages.php?PACK=EU">Europe</a></li>

                                
                            </ul>
                            <b class="caret-out"></b>                        
                        </li>
                        
                        <!--<li {$show_booking}>
                            <a href="" class="dropdown-toggle" data-toggle="dropdown">My Booking
                                <b class="caret"></b>                            
                            </a>
                            <ul class="dropdown-menu">
                                <li><a href="#">Curent Booking</a></li>
                                <li><a href="orderlist.php">History</a></li>
                                </ul>
                            <b class="caret-out"></b>                        
                        </li>-->
                        
                        <li {$show_booking}>
                            <a href="" class="dropdown-toggle" data-toggle="dropdown">My Account
                                <b class="caret"></b>                            
                            </a>
                            <ul class="dropdown-menu">
                                <li><a href="/userinfo.php">Profile</a></li>
                                <li><a href="/creditbalance.php">Credit Balance</a></li>
                                <li><a href="/orderlist.php">Booked History</a></li>
                                <li><a href="/transaction.php">Transaction</a></li>
                                <li><a href="/changepassword.php">Change Password</a></li>
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
