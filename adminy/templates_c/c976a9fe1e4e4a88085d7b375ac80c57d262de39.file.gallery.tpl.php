<?php /* Smarty version Smarty-3.1.14, created on 2013-09-28 14:06:25
         compiled from "templates\gallery.tpl" */ ?>
<?php /*%%SmartyHeaderCode:10676524695096c93b5-44733675%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'c976a9fe1e4e4a88085d7b375ac80c57d262de39' => 
    array (
      0 => 'templates\\gallery.tpl',
      1 => 1379579075,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '10676524695096c93b5-44733675',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'gallery_post_url' => 0,
    'input_title' => 0,
    'input_desc' => 0,
    'display_img' => 0,
    'display_img_con' => 0,
    'input_meta_desc' => 0,
    'input_meta_keyword' => 0,
    'gallery_id' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_524695097b4bf6_90688092',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_524695097b4bf6_90688092')) {function content_524695097b4bf6_90688092($_smarty_tpl) {?>            
<form id="validate" method="POST" action="<?php echo $_smarty_tpl->tpl_vars['gallery_post_url']->value;?>
" enctype="multipart/form-data">
<div class="data-fluid">
<!-- Option Selection start -->
    

      <div class="row-form">
          <div class="span2">Name:</div>
          <div class="span4 input-prepend">
          <span class="add-on blue"><i class="icon-map-marker icon-white"></i></span>
          <input type="text" name="title"  id="title" value="<?php echo $_smarty_tpl->tpl_vars['input_title']->value;?>
" placeholder="eg. company images" class="validate[required]"/></div>
      </div>
      
      
      <div class="row-form">
          <div class="span2">Description:</div>
          <div class="span8 input-prepend">          
          	<div class="data-fluid editor">
                <textarea id="description"  name="description" style="height: 300px;"><?php echo $_smarty_tpl->tpl_vars['input_desc']->value;?>
</textarea>
            </div>
          </div>
      </div>
      


        <!--######################################### Display Images While Edit ############################################# -->  
       <div class="row-form">
          <div class="span2"></div>
          <div class="span4">
            <div  id="imgdisplay" name="imgdisplay" <?php echo $_smarty_tpl->tpl_vars['display_img']->value;?>
>
                    <?php echo $_smarty_tpl->tpl_vars['display_img_con']->value;?>

            </div>
          </div>
       </div>
        
       <!--######################################### Add Multipul Image ############################################# -->  
      <div class="row-form">
        <div class="span2">Pictures:</div>
          <div class="span3 input-prepend">
          <span class="add-on blue"><i class="icon-signal icon-white"></i></span>
          <input type="text" name="piccount" id="piccount"  placeholder="eg. No of Pic"  class="validate[maxSize[2]]"/></div>
        <input type="button" class="btn" id="btnpiccount" value="Add Picture" />
       </div> 

        <!--######################################### Add Multipul Image ############################################# -->  
        <div  id="imgupload" name="imgupload">
        
        
        
        </div>
           
      <div class="row-form">
          <div class="span2">Meta Description:</div>
          <div class="span4 input-prepend">
          <span class="add-on blue"><i class="icon-map-marker icon-white"></i></span>
          <input type="text" name="meta_desc"  id="meta_desc" value="<?php echo $_smarty_tpl->tpl_vars['input_meta_desc']->value;?>
" placeholder="eg. gallery, images, etc..." class="validate[required]"/></div>
      </div>
      
      <div class="row-form">
          <div class="span2">Meta Keyword:</div>
          <div class="span4 input-prepend">
          <span class="add-on blue"><i class="icon-map-marker icon-white"></i></span>
          <input type="text" name="meta_keyword"  id="meta_keyword" value="<?php echo $_smarty_tpl->tpl_vars['input_meta_keyword']->value;?>
" placeholder="eg. gallery, images, etc..." class="validate[required]"/></div>
      </div>
      
      <div class="row-form">
          <div class="span6  pagination-centered">
            <input type="hidden" name="gallery_id" value="<?php echo $_smarty_tpl->tpl_vars['gallery_id']->value;?>
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