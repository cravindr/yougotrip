<?php /* Smarty version Smarty-3.1.14, created on 2013-09-28 12:11:42
         compiled from "templates\tour.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1765852467a26394a28-87407264%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '11729741b6bf51210f7b3d16d3120627d723fa9c' => 
    array (
      0 => 'templates\\tour.tpl',
      1 => 1379592701,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1765852467a26394a28-87407264',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'tourpack_post_url' => 0,
    'input_packagetype' => 0,
    'input_title' => 0,
    'input_description' => 0,
    'input_includes' => 0,
    'input_excludes' => 0,
    'input_itinerary' => 0,
    'input_dac' => 0,
    'input_adultprice' => 0,
    'input_childprice' => 0,
    'input_childwobprice' => 0,
    'display_img_lo' => 0,
    'display_img_logo' => 0,
    'display_logo_main' => 0,
    'input_img1' => 0,
    'display_img' => 0,
    'display_img_con' => 0,
    'input_meta_desc' => 0,
    'input_meta_keyword' => 0,
    'pack_id' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_52467a265bb225_85544189',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_52467a265bb225_85544189')) {function content_52467a265bb225_85544189($_smarty_tpl) {?>            
<form id="validate" method="POST" action="<?php echo $_smarty_tpl->tpl_vars['tourpack_post_url']->value;?>
" enctype="multipart/form-data">
<div class="data-fluid">
<!-- Option Selection start -->
    
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
            <div class="row-form">
          <div class="span2"></div>
      <!-- ################################# tab control ###################################################-->
      <div class="span10">
                              
            <div class="data-fluid tabbable">                    
                <ul class="nav nav-tabs">
                    <li class="active"><a href="#desc" data-toggle="tab">Description</a></li>
                    <li><a href="#inc" data-toggle="tab">Includes</a></li>
                    <li><a href="#exc" data-toggle="tab">Excludes</a></li>
                    <li><a href="#ite" data-toggle="tab">Itinerary</a></li>
                    <li><a href="#das" data-toggle="tab">Date & Cost</a></li>
                </ul>
                
                <div class="tab-content">
                
                    <div class="tab-pane active" id="desc">
                         <div class="span10">

                            <div class="data-fluid editor">
                                <textarea id="description"  name="description" style="height: 300px;"><?php echo $_smarty_tpl->tpl_vars['input_description']->value;?>
</textarea>
                            </div>
                        </div>
                    </div>

                    
                    <div class="tab-pane" id="inc">
                          <div class="span10">
                                  <div class="data-fluid editor">
                                      <textarea id="includes" name="includes" style="height: 300px;"><?php echo $_smarty_tpl->tpl_vars['input_includes']->value;?>
</textarea>
                                  </div>
                          </div>

                   </div>
                    
                    <div class="tab-pane" id="exc">
                             <div class="span10">
                                  <div class="data-fluid editor">
                                      <textarea id="excludes" name="excludes" style="height: 300px;"><?php echo $_smarty_tpl->tpl_vars['input_excludes']->value;?>
</textarea>
                                  </div>
                           </div>
                    </div>
                    <div class="tab-pane" id="ite">
                       <div class="span10">
                                  <div class="data-fluid editor">
                                      <textarea id="itinerary" name="itinerary" style="height: 300px;"><?php echo $_smarty_tpl->tpl_vars['input_itinerary']->value;?>
</textarea>
                                  </div>
                        </div>
                    </div>
                    <div class="tab-pane" id="das">
                           <div class="span10">
                                  <div class="data-fluid editor">
                                      <textarea id="dac" name="dac" style="height: 300px;"><?php echo $_smarty_tpl->tpl_vars['input_dac']->value;?>
</textarea>
                                  </div>
                           </div>
                    </div>
                    
                </div>
                
            </div>
        </div>
    <!-- ####################################################################################-->
      </div>
      </div>
      
      
      <div class="row-form">
          <div class="span2">Adult Price:</div>
          <div class="span4 input-prepend">
          <span class="add-on blue"><i class="icon-arrow-down icon-white"></i></span>
          <input type="text" name="adultprice" id="adultprice" placeholder="eg. 12000.00" value="<?php echo $_smarty_tpl->tpl_vars['input_adultprice']->value;?>
"  class="validate[required]"/>
          </div>
      </div>
      
      <div class="row-form">
          <div class="span2">Child Price:</div>
          <div class="span4 input-prepend">
          <span class="add-on blue"><i class="icon-arrow-down icon-white"></i></span>
          <input type="text" name="childprice" id="childprice" placeholder="eg. 12000.00" value="<?php echo $_smarty_tpl->tpl_vars['input_childprice']->value;?>
"  class="validate[required]"/>
          </div>
      </div>
      <div class="row-form">
          <div class="span2">Child with out Bed Price:</div>
          <div class="span4 input-prepend">
          <span class="add-on blue"><i class="icon-arrow-down icon-white"></i></span>
          <input type="text" name="childwobprice" id="childwobprice" placeholder="eg. 12000.00" value="<?php echo $_smarty_tpl->tpl_vars['input_childwobprice']->value;?>
" class="validate[required]"/>
          </div>
      </div>
      
      <div class="row-form">
          <div class="span2"></div>
          <div class="span4">
            <div  id="imgdisplay_logo" name="imgdisplay_logo" <?php echo $_smarty_tpl->tpl_vars['display_img_lo']->value;?>
>
                    <?php echo $_smarty_tpl->tpl_vars['display_img_logo']->value;?>

            </div>
          </div>
       </div>
        
      
      <div class="row-form">
          <div class="span2">Upload Logo:</div>
          <div class="span4" id="display_logo_main" <?php echo $_smarty_tpl->tpl_vars['display_logo_main']->value;?>
>
            <div class="fileupload fileupload-new" data-provides="fileupload">
                <div class="fileupload-new thumbnail span2" >
                <img src="<?php echo $_smarty_tpl->tpl_vars['input_img1']->value;?>
" name="asd.jpg" width="100%"/>
                </div>
                <div class="fileupload-preview fileupload-exists thumbnail" style="max-width: 200px; max-height: 150px; line-height: 20px;"></div>
                <div>
                <span class="btn btn-file"><span class="fileupload-new">Select image</span><span class="fileupload-exists">Change</span>
                <input type="file" name="pro_image1" id="pro_image1" /></span>
                <a href="#" class="btn fileupload-exists" data-dismiss="fileupload">Remove</a>
                </div>
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
        <div class="span2">More Picture:</div>
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
" placeholder="eg. gallery, images, etc..." /></div>
      </div>
      
      <div class="row-form">
          <div class="span2">Meta Keyword:</div>
          <div class="span4 input-prepend">
          <span class="add-on blue"><i class="icon-map-marker icon-white"></i></span>
          <input type="text" name="meta_keyword"  id="meta_keyword" value="<?php echo $_smarty_tpl->tpl_vars['input_meta_keyword']->value;?>
"  placeholder="eg. gallery, images, etc..." /></div>
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