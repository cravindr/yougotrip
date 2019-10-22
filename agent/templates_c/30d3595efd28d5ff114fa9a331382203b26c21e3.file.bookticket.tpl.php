<?php /* Smarty version Smarty-3.1.14, created on 2013-09-28 17:29:09
         compiled from "templates\bookticket.tpl" */ ?>
<?php /*%%SmartyHeaderCode:281355246c187acd187-72360831%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '30d3595efd28d5ff114fa9a331382203b26c21e3' => 
    array (
      0 => 'templates\\bookticket.tpl',
      1 => 1380369546,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '281355246c187acd187-72360831',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_5246c1881f1540_32329779',
  'variables' => 
  array (
    'tourpack_post_url' => 0,
    'input_packagetype' => 0,
    'input_title' => 0,
    'pack_id' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5246c1881f1540_32329779')) {function content_5246c1881f1540_32329779($_smarty_tpl) {?>            
<form id="validate" method="POST" action="<?php echo $_smarty_tpl->tpl_vars['tourpack_post_url']->value;?>
" enctype="multipart/form-data">
<div class="data-fluid">
<!-- Option Selection start -->
    <div class="span6">
         <div class="row-form">
              <div class="span2">Tour Packages:</div>
              <div class="span4 input-prepend">
              <span class="add-on blue"><i class="icon-signal icon-white"></i></span>
              <input type="text" name="packagetype" id="packagetype" placeholder="Package" auto-complete="false" value="<?php echo $_smarty_tpl->tpl_vars['input_packagetype']->value;?>
" data-provide="typeahead" class="validate[required,maxSize[100]]"/></div>
           
          </div>
    
          <div class="row-form">
              <div class="span2">Title:</div>
              <div class="span4 input-prepend">
              <span class="add-on blue"><i class="icon-map-marker icon-white"></i></span>
              <input type="text" name="title"  id="title" placeholder="eg. Singapore Malaysia tour" value="<?php echo $_smarty_tpl->tpl_vars['input_title']->value;?>
"   class="validate[required]"/></div>
          </div>
            
    </div>
</div>

      <div class="row-form">
          <div class="span6  pagination-centered">
          	<input type="hidden" name="pack_id" value="<?php echo $_smarty_tpl->tpl_vars['pack_id']->value;?>
" />
            <button class="btn" type="submit">Submit</button>
            <button class="btn" type="reset">Reset</button>
            <button class="btn btn-info" type="button" onClick="$('#validate').validationEngine('hide');">Hide prompts</button>
          </div>
      </div>
  </div>

      
<input type="hidden" name="noofimgbox" id="noofimgbox" value="1" />
</form>

  
  <script type='text/javascript' src='jscript/image_upload_btn.js'></script>
  <script type='text/javascript' src='jscript/tour.js'></script><?php }} ?>