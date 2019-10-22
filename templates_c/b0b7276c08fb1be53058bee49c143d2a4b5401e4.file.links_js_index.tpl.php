<?php /* Smarty version Smarty-3.1.14, created on 2019-10-22 07:33:59
         compiled from "templates/links_js_index.tpl" */ ?>
<?php /*%%SmartyHeaderCode:9074291545dae94c73fb3f7-19299197%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'b0b7276c08fb1be53058bee49c143d2a4b5401e4' => 
    array (
      0 => 'templates/links_js_index.tpl',
      1 => 1379749430,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '9074291545dae94c73fb3f7-19299197',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_5dae94c73fc8c6_10577416',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5dae94c73fc8c6_10577416')) {function content_5dae94c73fc8c6_10577416($_smarty_tpl) {?><!-- JS Implementing Plugins -->           
<script type="text/javascript" src="assets/plugins/flexslider/jquery.flexslider-min.js"></script>
<script type="text/javascript" src="assets/plugins/parallax-slider/js/modernizr.js"></script>
<script type="text/javascript" src="assets/plugins/parallax-slider/js/jquery.cslider.js"></script> 
<script type="text/javascript" src="assets/plugins/bxslider/jquery.bxslider.js"></script>
<script type="text/javascript" src="assets/plugins/back-to-top.js"></script>
<!-- JS Page Level -->           
<script type="text/javascript" src="assets/js/app.js"></script>
<script type="text/javascript" src="assets/js/pages/index.js"></script>
<script type="text/javascript">
    jQuery(document).ready(function() {
        App.init();
        App.initSliders();
        App.initBxSlider1();
        Index.initParallaxSlider();
    });
</script>
<!--[if lt IE 9]>
    <script src="assets/js/respond.js"></script>
<![endif]-->

<script type="text/javascript" src="jscript/index.js"></script><?php }} ?>