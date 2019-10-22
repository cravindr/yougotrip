<?php /* Smarty version Smarty-3.1.14, created on 2015-12-11 13:01:06
         compiled from "templates\category.tpl" */ ?>
<?php /*%%SmartyHeaderCode:882853215227ea92a6-11606705%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '3991c7c8bca25dcf79d0f1cad20bcb9ccd9b25ac' => 
    array (
      0 => 'templates\\category.tpl',
      1 => 1379490878,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '882853215227ea92a6-11606705',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_53215228079bb5_00082560',
  'variables' => 
  array (
    'category_post_url' => 0,
    'category_name' => 0,
    'category_id' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_53215228079bb5_00082560')) {function content_53215228079bb5_00082560($_smarty_tpl) {?>            
<form id="validate" method="POST" action="<?php echo $_smarty_tpl->tpl_vars['category_post_url']->value;?>
">
<div class="data-fluid">
<!-- Option Selection start -->
    
     <div class="row-form">
          <div class="span2">Category Name:</div>
          <div class="span4 input-prepend">
          <span class="add-on blue"><i class="icon-signal icon-white"></i></span>
          <input type="text" name="cname" id="cname" placeholder="Category Name" value="<?php echo $_smarty_tpl->tpl_vars['category_name']->value;?>
" class="validate[required,maxSize[100]]"/></div>
       
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

</form>
<?php }} ?>