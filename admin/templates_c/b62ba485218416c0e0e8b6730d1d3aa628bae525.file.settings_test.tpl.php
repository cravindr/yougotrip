<?php /* Smarty version Smarty-3.1.14, created on 2015-12-11 12:24:18
         compiled from "templates\settings_test.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1009566a989cb78001-53795307%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'b62ba485218416c0e0e8b6730d1d3aa628bae525' => 
    array (
      0 => 'templates\\settings_test.tpl',
      1 => 1449825924,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1009566a989cb78001-53795307',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_566a989cbc1416_81694461',
  'variables' => 
  array (
    'settings_post_url' => 0,
    'name' => 0,
    'address' => 0,
    'place' => 0,
    'category_id' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_566a989cbc1416_81694461')) {function content_566a989cbc1416_81694461($_smarty_tpl) {?>            
<form id="validate" method="POST" action="<?php echo $_smarty_tpl->tpl_vars['settings_post_url']->value;?>
">
<div class="data-fluid">
<!-- Option Selection start -->
   
        
 
        <div class="row-form">
              <div class="span2"> Name:</div>
              <div class="span4 input-prepend">
              <span class="add-on blue"><i class="icon-signal icon-white"></i></span>
              <input type="text" name="name" id="name" placeholder="eg. Ravi" value="<?php echo $_smarty_tpl->tpl_vars['name']->value;?>
" class="validate[required,maxSize[100]]"/></div>
          </div>
  
        
        <div class="row-form">
              <div class="span2"> Address :</div>
              <div class="span4 input-prepend">
              <span class="add-on blue"><i class="icon-signal icon-white"></i></span>
              <input type="text" name="address" id="address" placeholder="eg. R.S Puram " value="<?php echo $_smarty_tpl->tpl_vars['address']->value;?>
" class="validate[required,maxSize[100]]"/></div>
          </div>
          
          <div class="row-form">
              <div class="span2"> Place:</div>
              <div class="span4 input-prepend">
              <span class="add-on blue"><i class="icon-signal icon-white"></i></span>
              <input type="text" name="place" id="place" placeholder="eg. Coimbatore " value="<?php echo $_smarty_tpl->tpl_vars['place']->value;?>
" class="validate[required,maxSize[100]]"/></div>
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