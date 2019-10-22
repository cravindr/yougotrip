<?php /* Smarty version Smarty-3.1.14, created on 2015-12-08 09:19:38
         compiled from "templates\user_tab_header.tpl" */ ?>
<?php /*%%SmartyHeaderCode:325915666929ade5207-95892983%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '957059b01dee8ee9effac70a1dfbc41753a5845f' => 
    array (
      0 => 'templates\\user_tab_header.tpl',
      1 => 1380368512,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '325915666929ade5207-95892983',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'user_post_url' => 0,
    'input_title' => 0,
    'input_firstname' => 0,
    'input_lastname' => 0,
    'input_email' => 0,
    'input_address' => 0,
    'input_place' => 0,
    'input_state' => 0,
    'input_country' => 0,
    'input_pincode' => 0,
    'input_phone' => 0,
    'input_mobile' => 0,
    'input_mobile2' => 0,
    'user_id' => 0,
    'tbl_title' => 0,
    'tbl_th_transid' => 0,
    'tbl_th_date' => 0,
    'tbl_th_credit' => 0,
    'tbl_th_debit' => 0,
    'tbl_th_balance' => 0,
    'tbl_th_comments' => 0,
    'tbl_th_invoice' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_5666929aed4ba6_67061534',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5666929aed4ba6_67061534')) {function content_5666929aed4ba6_67061534($_smarty_tpl) {?>            

<div class="span4">
  <form id="validate" method="POST" action="<?php echo $_smarty_tpl->tpl_vars['user_post_url']->value;?>
">
    <div class="data-fluid">
    <!-- Option Selection start -->
        
         <div class="row-form">
              <div class="span3">Title:</div>
              <div class="span9 input-prepend">
              <span class="add-on blue"><i class="icon-signal icon-white"></i></span>
              <input type="text" name="title" id="title" placeholder="Title" value="<?php echo $_smarty_tpl->tpl_vars['input_title']->value;?>
" class="validate[required,maxSize[100]]"/></div>
           
          </div>
    
          <div class="row-form">
              <div class="span3">First Name:</div>
              <div class="span9 input-prepend">
              <span class="add-on blue"><i class="icon-map-marker icon-white"></i></span>
              <input type="text" name="firstname"  id="firstname" placeholder="First Name" value="<?php echo $_smarty_tpl->tpl_vars['input_firstname']->value;?>
"   class="validate[required]"/></div>
          </div>
                
          </div>
          
          
          <div class="row-form">
              <div class="span3">Last Name:</div>
              <div class="span9 input-prepend">
              <span class="add-on blue"><i class="icon-arrow-down icon-white"></i></span>
              <input type="text" name="lastname" id="lastname" placeholder="Last Name" value="<?php echo $_smarty_tpl->tpl_vars['input_lastname']->value;?>
"  class="validate[required]"/>
              </div>
          </div>
          
          <div class="row-form">
              <div class="span3">Email:</div>
              <div class="span9 input-prepend">
              <span class="add-on blue"><i class="icon-arrow-down icon-white"></i></span>
              <input type="text" name="email" id="email" placeholder="Email" value="<?php echo $_smarty_tpl->tpl_vars['input_email']->value;?>
"  class="validate[required]"/>
              </div>
          </div>
          <div class="row-form">
              <div class="span3">Address:</div>
              <div class="span9 input-prepend">
              <span class="add-on blue"><i class="icon-arrow-down icon-white"></i></span>
              <input type="text" name="address" id="address" placeholder="Address" value="<?php echo $_smarty_tpl->tpl_vars['input_address']->value;?>
" class="validate[required]"/>
              </div>
          </div>
          
          <div class="row-form">
              <div class="span3">Place:</div>
              <div class="span9 input-prepend">
              <span class="add-on blue"><i class="icon-arrow-down icon-white"></i></span>
              <input type="text" name="place" id="place" placeholder="Place" value="<?php echo $_smarty_tpl->tpl_vars['input_place']->value;?>
" class="validate[required]"/>
              </div>
          </div>
          
          <div class="row-form">
              <div class="span3">State:</div>
              <div class="span9 input-prepend">
              <span class="add-on blue"><i class="icon-arrow-down icon-white"></i></span>
              <input type="text" name="state" id="state" placeholder="State" value="<?php echo $_smarty_tpl->tpl_vars['input_state']->value;?>
" class="validate[required]"/>
              </div>
          </div>
          
          <div class="row-form">
              <div class="span3">Country:</div>
              <div class="span9 input-prepend">
              <span class="add-on blue"><i class="icon-arrow-down icon-white"></i></span>
              <input type="text" name="country" id="country" placeholder="Country" value="<?php echo $_smarty_tpl->tpl_vars['input_country']->value;?>
" class="validate[required]"/>
              </div>
          </div>
          
          <div class="row-form">
              <div class="span3">Pincode:</div>
              <div class="span9 input-prepend">
              <span class="add-on blue"><i class="icon-arrow-down icon-white"></i></span>
              <input type="text" name="pincode" id="pincode" placeholder="Pincode" value="<?php echo $_smarty_tpl->tpl_vars['input_pincode']->value;?>
" class="validate[required]"/>
              </div>
          </div>
          
          <div class="row-form">
              <div class="span3">Phone:</div>
              <div class="span9 input-prepend">
              <span class="add-on blue"><i class="icon-arrow-down icon-white"></i></span>
              <input type="text" name="phone" id="phone" placeholder="Phone" value="<?php echo $_smarty_tpl->tpl_vars['input_phone']->value;?>
"/>
              </div>
          </div>
          
          <div class="row-form">
              <div class="span3">Mobile:</div>
              <div class="span9 input-prepend">
              <span class="add-on blue"><i class="icon-arrow-down icon-white"></i></span>
              <input type="text" name="mobile" id="mobile" placeholder="Mobile" value="<?php echo $_smarty_tpl->tpl_vars['input_mobile']->value;?>
"/>
              </div>
          </div>
          
          
          <div class="row-form">
              <div class="span3">Mobile 2:</div>
              <div class="span9 input-prepend">
              <span class="add-on blue"><i class="icon-arrow-down icon-white"></i></span>
              <input type="text" name="mobile2" id="mobile2" placeholder="Mobile 2" value="<?php echo $_smarty_tpl->tpl_vars['input_mobile2']->value;?>
"/>
              </div>
          </div>
          
           <div class="row-form">
              <hr/>              
          </div>
          
          <div class="row-form">
              <div class="span3">Credit:</div>
              <div class="span9 input-prepend">
              <span class="add-on blue"><i class="icon-arrow-down icon-white"></i></span>
              <input type="text" name="credit" id="credit" placeholder="Credit Amount" value="" />
              </div>
          </div>
          
          
          <div class="row-form">
              <div class="span3">Debit:</div>
              <div class="span9 input-prepend">
              <span class="add-on blue"><i class="icon-arrow-down icon-white"></i></span>
              <input type="text" name="debit" id="debit" placeholder="Debit Amount" value="" />
              </div>
          </div>
          
          <div class="row-form">
              <div class="span3">Comments:</div>
              <div class="span9 input-prepend">
              <span class="add-on blue"><i class="icon-arrow-down icon-white"></i></span>
              <input type="text" name="comments" id="comments" placeholder="Comments" value="" />
              </div>
          </div>
         
          <div class="row-form">
              <div class="span10  pagination-centered">
                <input type="hidden" name="user_id" value="<?php echo $_smarty_tpl->tpl_vars['user_id']->value;?>
" />
                <button class="btn" type="submit">Submit</button>
                <button class="btn" type="reset">Reset</button>
                <button class="btn btn-info" type="button" onClick="$('#validate').validationEngine('hide');">Hide prompts</button>
              </div>
          </div>

    <input type="hidden" name="noofimgbox" id="noofimgbox" value="1" />
 </form>
</div>

<div class="span8">
	<div class="block">
        <div class="head dblue">
            <div class="icon"><span class="ico-layout-9"></span></div>
            <h2><?php echo $_smarty_tpl->tpl_vars['tbl_title']->value;?>
</h2>
            <ul class="buttons">
                <li><a href="#" onClick="source('table_sort_pagination'); return false;"><div class="icon"><span class="ico-info"></span></div></a></li>
            </ul>                                                        
        </div>                
            <div class="data-fluid">
                <table class="table fpTable lcnp" cellpadding="0" cellspacing="0" width="100%">
                    <thead>
                        <tr>
                            <th width="2%"><input type="checkbox" class="checkall"/></th>                           
                            <th width="10%"><?php echo $_smarty_tpl->tpl_vars['tbl_th_transid']->value;?>
</th>
                            <th width="15%"><?php echo $_smarty_tpl->tpl_vars['tbl_th_date']->value;?>
</th>
                            <th width="15%"><?php echo $_smarty_tpl->tpl_vars['tbl_th_credit']->value;?>
</th>
                            <th width="15%"><?php echo $_smarty_tpl->tpl_vars['tbl_th_debit']->value;?>
</th> 
                            <th width="10%"><?php echo $_smarty_tpl->tpl_vars['tbl_th_balance']->value;?>
</th>
                            <th width="20%"><?php echo $_smarty_tpl->tpl_vars['tbl_th_comments']->value;?>
</th>
                            <th width="10%"><?php echo $_smarty_tpl->tpl_vars['tbl_th_invoice']->value;?>
</th>
                            <!--<th width="80" class="TAC">Actions</th>-->
                        </tr>
                    </thead>
                    <tbody>  <?php }} ?>