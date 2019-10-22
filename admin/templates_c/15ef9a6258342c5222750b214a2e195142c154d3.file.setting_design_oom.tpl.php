<?php /* Smarty version Smarty-3.1.14, created on 2015-12-11 13:17:17
         compiled from "templates\setting_design_oom.tpl" */ ?>
<?php /*%%SmartyHeaderCode:19299566aab2c1b7e78-02629312%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '15ef9a6258342c5222750b214a2e195142c154d3' => 
    array (
      0 => 'templates\\setting_design_oom.tpl',
      1 => 1449836232,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '19299566aab2c1b7e78-02629312',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_566aab2c2aa1b9_79500413',
  'variables' => 
  array (
    'settings_post_url' => 0,
    'name' => 0,
    'email' => 0,
    'password' => 0,
    'conformpassword' => 0,
    'category_id' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_566aab2c2aa1b9_79500413')) {function content_566aab2c2aa1b9_79500413($_smarty_tpl) {?><form id="validate" method="post"  action="<?php echo $_smarty_tpl->tpl_vars['settings_post_url']->value;?>
">

<div class="data-fluid">
<div class="row-form">
<div class="span2">Name:</div>
<div class="span4 input-append">
<input type="text" name="name" id="name" placeholder="Enter the name" value="<?php echo $_smarty_tpl->tpl_vars['name']->value;?>
" class="validate[required,maxSize[100]]"/>
<span class="add-on blue"><i class="icon-user icon-white"></i></span>
</div>
</div>

<div class="row-form">
<div class="span2">Email:</div>
<div class="span4 input-append">
<input type="text" name="email" id="email" placeholder="Enter the email" value="<?php echo $_smarty_tpl->tpl_vars['email']->value;?>
" class="validate[required,maxSize[100],custom[email]]"/>
<span class="add-on blue"><i class="icon-envelope icon-white"></i></span>
</div>
</div>

<div class="row-form">
<div class="span2">Password:</div>
<div class="span4 input-append">
<input type="text" name="password" id="password" placeholder="Enter the password" value="<?php echo $_smarty_tpl->tpl_vars['password']->value;?>
" class="validate[required,maxSize[100]]"/>
<span class="add-on blue"><i class="icon-eye-open icon-white"></i></span>
</div>
</div>



<div class="row-form">
<div class="span2">Conform Password:</div>
<div class="span4 input-append">
<input type="text" name="conformpassword" id="conformpassword" placeholder="Retype the password" value="<?php echo $_smarty_tpl->tpl_vars['conformpassword']->value;?>
" class="validate[required,maxSize[100],equals[password]]"/>
<span class="add-on blue"><i class="icon-eye-open icon-white"></i></span>
</div>
</div>

<div class="row-form">
          <div class="span6  pagination-centered">
            <input type="hidden" name="category_id" value="<?php echo $_smarty_tpl->tpl_vars['category_id']->value;?>
" />
            <button class="btn" type="submit">Submit</button>
            <button class="btn" type="reset">Reset</button>
            <button class="btn btn-info" type="button" onClick="$('#validate').validationEngine('hide');">Hide prompts</button>
          </div>
      </div>

     </div>

<?php }} ?>