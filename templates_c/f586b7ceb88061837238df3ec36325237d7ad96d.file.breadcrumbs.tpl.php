<?php /* Smarty version Smarty-3.1.14, created on 2019-10-22 07:48:36
         compiled from "templates/breadcrumbs.tpl" */ ?>
<?php /*%%SmartyHeaderCode:10079419645dae9834aa25d6-46904821%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'f586b7ceb88061837238df3ec36325237d7ad96d' => 
    array (
      0 => 'templates/breadcrumbs.tpl',
      1 => 1385452108,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '10079419645dae9834aa25d6-46904821',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'pagetitle' => 0,
    'pagename' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_5dae9834aa8ec7_86466583',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5dae9834aa8ec7_86466583')) {function content_5dae9834aa8ec7_86466583($_smarty_tpl) {?><!--=== Breadcrumbs ===-->
<div class="breadcrumbs margin-bottom-30">
	<div class="container">
        <h1 class="color-green pull-left"><?php echo $_smarty_tpl->tpl_vars['pagetitle']->value;?>
</h1>
        <ul class="pull-right breadcrumb">
            <li><a href="index.php">Home</a> <span class="divider">/</span></li>
            <li><a href="">Pages</a> <span class="divider">/</span></li>
            <li class="active"><?php echo $_smarty_tpl->tpl_vars['pagename']->value;?>
</li>
        </ul>
    </div><!--/container-->
</div><!--/breadcrumbs-->
<!--=== End Breadcrumbs ===--><?php }} ?>