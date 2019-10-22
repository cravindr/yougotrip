<?php /* Smarty version Smarty-3.1.14, created on 2015-12-11 12:54:22
         compiled from "templates\result.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1268953365044066354-95516187%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '799a10864ba2b7f1f6d907c4435497ce78ed8b0c' => 
    array (
      0 => 'templates\\result.tpl',
      1 => 1377755960,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1268953365044066354-95516187',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_53365044102755_21089072',
  'variables' => 
  array (
    'color' => 0,
    'result' => 0,
    'redirect_url' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_53365044102755_21089072')) {function content_53365044102755_21089072($_smarty_tpl) {?><div class="row-form">
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