<?php /* Smarty version Smarty-3.1.14, created on 2013-12-26 10:51:54
         compiled from "templates\index.tpl" */ ?>
<?php /*%%SmartyHeaderCode:3016552bbbcf2d5f386-71940237%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'f90be83b235fb03cc225b11607032e9ddd415899' => 
    array (
      0 => 'templates\\index.tpl',
      1 => 1381907988,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '3016552bbbcf2d5f386-71940237',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'webtitle' => 0,
    'webpagename' => 0,
    'loginerror' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_52bbbcf32db2e4_45372765',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_52bbbcf32db2e4_45372765')) {function content_52bbbcf32db2e4_45372765($_smarty_tpl) {?><!DOCTYPE html>
<html lang="en">
<head>        
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0" />    
    <!--[if gt IE 8]>
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />        
    <![endif]-->                
    <title><?php echo $_smarty_tpl->tpl_vars['webtitle']->value;?>
</title>
    <link rel="icon" type="image/ico" href="favicon.ico"/>
    
    <link href="css/stylesheets.css" rel="stylesheet" type="text/css" />
    <!--[if lt IE 10]>
        <link href="css/ie.css" rel="stylesheet" type="text/css" />
    <![endif]-->           
    <!--[if lte IE 7]>
        <script type='text/javascript' src='js/plugins/other/lte-ie7.js'></script>
    <![endif]-->    
    <script type='text/javascript' src='js/plugins/jquery/jquery-1.9.1.min.js'></script>
    <script type='text/javascript' src='js/plugins/jquery/jquery-ui-1.10.1.custom.min.js'></script>
    <script type='text/javascript' src='js/plugins/jquery/jquery-migrate-1.1.1.min.js'></script>
    <script type='text/javascript' src='js/plugins/jquery/globalize.js'></script>
    <script type='text/javascript' src='js/plugins/other/excanvas.js'></script>
    <script type='text/javascript' src='js/plugins/other/jquery.mousewheel.min.js'></script>
    <script type='text/javascript' src='js/plugins/bootstrap/bootstrap.min.js'></script>
    <script type='text/javascript' src="js/plugins/uniform/jquery.uniform.min.js"></script>
    
    <script type='text/javascript' src='js/plugins/validationEngine/languages/jquery.validationEngine-en.js'></script>
    <script type='text/javascript' src='js/plugins/validationEngine/jquery.validationEngine.js'></script> 
      
    <script type='text/javascript' src='js/plugins/shbrush/XRegExp.js'></script>
    <script type='text/javascript' src='js/plugins/shbrush/shCore.js'></script>
    <script type='text/javascript' src='js/plugins/shbrush/shBrushXml.js'></script>
    <script type='text/javascript' src='js/plugins/shbrush/shBrushJScript.js'></script>
    <script type='text/javascript' src='js/plugins/shbrush/shBrushCss.js'></script>    
    
    <script type='text/javascript' src='js/plugins.js'></script>
    <script type='text/javascript' src='js/charts.js'></script>
    <script type='text/javascript' src='js/actions.js'></script>
    
</head>
<body>    
    <div id="loader"><img src="img/loader.gif"/></div>
       
    <div class="login">

        <div class="page-header">
            <div class="icon">
                <span class="ico-arrow-right"></span>
            </div>
            <h1>Login <small><?php echo $_smarty_tpl->tpl_vars['webpagename']->value;?>
</small></h1>
        </div>        
        <?php echo $_smarty_tpl->tpl_vars['loginerror']->value;?>

        <form method="post" action="logincheck.php" name="validate" id="validate" >
        
        <div class="row-fluid">
            <div class="row-form">
                <div class="span12">
                    <input type="text" name="username" placeholder="login" class="validate[required]" />
                </div>
            </div>
            <div class="row-form">
                <div class="span12">
                    <input type="password" name="password" placeholder="password" class="validate[required]"/>
                </div>            
            </div>
            <div class="row-form">
                <div class="span12">
                    <input type="checkbox"/> Keep me signed in
                </div>
            </div>
            <div class="row-form">
                <div class="span12">
                    <button class="btn">Sign in <span class="icon-arrow-next icon-white"></span></button>
                    
                </div>                
            </div>
        </div>
        
        </form>
        
    </div>
    
</body>
</html>
<?php }} ?>