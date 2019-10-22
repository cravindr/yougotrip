<?php /* Smarty version Smarty-3.1.14, created on 2013-09-27 14:00:05
         compiled from "templates\result.tpl" */ ?>
<?php /*%%SmartyHeaderCode:176325245420d4128a8-65366145%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '799a10864ba2b7f1f6d907c4435497ce78ed8b0c' => 
    array (
      0 => 'templates\\result.tpl',
      1 => 1377755959,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '176325245420d4128a8-65366145',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'color' => 0,
    'result' => 0,
    'redirect_url' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_5245420d546d08_99939601',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5245420d546d08_99939601')) {function content_5245420d546d08_99939601($_smarty_tpl) {?><div class="row-form">
	<div align="center" class="span12 <?php echo $_smarty_tpl->tpl_vars['color']->value;?>
 center" >
        <div align="center" class="offset1  center">
            <div align="center" style="height:100px;display: table-cell; vertical-align: middle;padding:60px">
                <h4> <?php echo $_smarty_tpl->tpl_vars['result']->value;?>
 </h4>
            </div>
            <a href="<?php echo $_smarty_tpl->tpl_vars['redirect_url']->value;?>
"><h5>Click here to go back</h5></a>
            <br/><br/>
        </div>
    </div>
</div><?php }} ?>