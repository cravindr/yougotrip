<?php /* Smarty version Smarty-3.1.14, created on 2015-12-11 11:28:16
         compiled from "templates\settings.tpl" */ ?>
<?php /*%%SmartyHeaderCode:5487532152203e8688-41399188%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'c9a4cd81d23d6d87290ced5b1c9586cfb17e1b19' => 
    array (
      0 => 'templates\\settings.tpl',
      1 => 1379581662,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '5487532152203e8688-41399188',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_53215220950875_81076678',
  'variables' => 
  array (
    'settings_post_url' => 0,
    'site_name' => 0,
    'domain_name' => 0,
    'title_name' => 0,
    'logo' => 0,
    'subtitle' => 0,
    'meta_content' => 0,
    'meta_keyword' => 0,
    'sbuttoncap' => 0,
    'address' => 0,
    'email' => 0,
    'phone' => 0,
    'website' => 0,
    'fax' => 0,
    'category_id' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_53215220950875_81076678')) {function content_53215220950875_81076678($_smarty_tpl) {?>            
<form id="validate" method="POST" action="<?php echo $_smarty_tpl->tpl_vars['settings_post_url']->value;?>
">
<div class="data-fluid">
<!-- Option Selection start -->
    
    
         <div class="row-form">
              <div class="span2">Site Name:</div>
              <div class="span4 input-prepend">
              <span class="add-on blue"><i class="icon-signal icon-white"></i></span>
              <input type="text" name="site_name" id="site_name" placeholder="Site Name" value="<?php echo $_smarty_tpl->tpl_vars['site_name']->value;?>
" class="validate[required,maxSize[100]]"/></div>
          </div>
   
        <div class="row-form">
              <div class="span2">Domain Name:</div>
              <div class="span4 input-prepend">
              <span class="add-on blue"><i class="icon-signal icon-white"></i></span>
              <input type="text" name="domain_name" id="domain_name" placeholder="Domain Name" value="<?php echo $_smarty_tpl->tpl_vars['domain_name']->value;?>
" class="validate[required,maxSize[100]]"/></div>
          </div>
   
        <div class="row-form">
              <div class="span2">Title Name:</div>
              <div class="span4 input-prepend">
              <span class="add-on blue"><i class="icon-signal icon-white"></i></span>
              <input type="text" name="title_name" id="title_name" placeholder="Title Name" value="<?php echo $_smarty_tpl->tpl_vars['title_name']->value;?>
" class="validate[required,maxSize[100]]"/></div>
          </div>
   
        <div class="row-form">
              <div class="span2"> Logo:</div>
              <div class="span4 input-prepend">
              <span class="add-on blue"><i class="icon-signal icon-white"></i></span>
              <input type="text" name="logo" id="logo" placeholder="Logo" value="<?php echo $_smarty_tpl->tpl_vars['logo']->value;?>
" class="validate[required,maxSize[100]]"/></div>
          </div>
   
        <div class="row-form">
              <div class="span2"> Subtitle:</div>
              <div class="span4 input-prepend">
              <span class="add-on blue"><i class="icon-signal icon-white"></i></span>
              <input type="text" name="subtitle" id="subtitle" placeholder="Subtitle" value="<?php echo $_smarty_tpl->tpl_vars['subtitle']->value;?>
" class="validate[required,maxSize[100]]"/></div>
          </div>
  
        <div class="row-form">
              <div class="span2"> Meta Content:</div>
              <div class="span4 input-prepend">
              <span class="add-on blue"><i class="icon-signal icon-white"></i></span>
              <input type="text" name="meta_content" id="meta_content" placeholder="Meta Content" value="<?php echo $_smarty_tpl->tpl_vars['meta_content']->value;?>
" class="validate[required,maxSize[100]]"/></div>
          </div>
   
        <div class="row-form">
              <div class="span2"> Meta Keyword:</div>
              <div class="span4 input-prepend">
              <span class="add-on blue"><i class="icon-signal icon-white"></i></span>
              <input type="text" name="meta_keyword" id="meta_keyword" placeholder="Meta Keyword" value="<?php echo $_smarty_tpl->tpl_vars['meta_keyword']->value;?>
" class="validate[required,maxSize[100]]"/></div>
          </div>
   
        <div class="row-form">
              <div class="span2"> Search Button Caption:</div>
              <div class="span4 input-prepend">
              <span class="add-on blue"><i class="icon-signal icon-white"></i></span>
              <input type="text" name="sbuttoncap" id="sbuttoncap" placeholder="Search Button Caption" value="<?php echo $_smarty_tpl->tpl_vars['sbuttoncap']->value;?>
" /></div>
          </div>
   
        <div class="row-form">
              <div class="span2"> Address:</div>
              <div class="span4">
              <textarea name="address" id="address" placeholder="Address"><?php echo $_smarty_tpl->tpl_vars['address']->value;?>
</textarea></div>
          </div>
 
        <div class="row-form">
              <div class="span2"> Email:</div>
              <div class="span4 input-prepend">
              <span class="add-on blue"><i class="icon-signal icon-white"></i></span>
              <input type="text" name="email" id="email" placeholder="eg. example@gmail.com" value="<?php echo $_smarty_tpl->tpl_vars['email']->value;?>
" class="validate[required,maxSize[100]]"/></div>
          </div>
  
        <div class="row-form">
              <div class="span2"> Phone:</div>
              <div class="span4 input-prepend">
              <span class="add-on blue"><i class="icon-signal icon-white"></i></span>
              <input type="text" name="phone" id="phone" placeholder="eg. 9942356712" value="<?php echo $_smarty_tpl->tpl_vars['phone']->value;?>
" class="validate[required,maxSize[100]]"/></div>
          </div>
  
        <div class="row-form">
              <div class="span2"> Website:</div>
              <div class="span4 input-prepend">
              <span class="add-on blue"><i class="icon-signal icon-white"></i></span>
              <input type="text" name="website" id="website" placeholder="eg. www.mydomain.com" value="<?php echo $_smarty_tpl->tpl_vars['website']->value;?>
" /></div>
          </div>
    
        <div class="row-form">
              <div class="span2"> Fax:</div>
              <div class="span4 input-prepend">
              <span class="add-on blue"><i class="icon-signal icon-white"></i></span>
              <input type="text" name="fax" id="fax" placeholder="Fax" value="<?php echo $_smarty_tpl->tpl_vars['fax']->value;?>
" /></div>
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