<?php /* Smarty version Smarty-3.1.14, created on 2015-12-11 12:10:24
         compiled from "templates\agent.tpl" */ ?>
<?php /*%%SmartyHeaderCode:29365566a8f6b899400-91093609%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '272bb6e38025f2b40dbb9c2a8f2b67193b7d11d0' => 
    array (
      0 => 'templates\\agent.tpl',
      1 => 1387616532,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '29365566a8f6b899400-91093609',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_566a8f6b9834c4_18462969',
  'variables' => 
  array (
    'user_post_url' => 0,
    'input_title' => 0,
    'input_firstname' => 0,
    'input_lastname' => 0,
    'input_address' => 0,
    'input_city' => 0,
    'input_state' => 0,
    'input_country' => 0,
    'input_pincode' => 0,
    'input_email' => 0,
    'emailvalidate' => 0,
    'input_income' => 0,
    'input_phone' => 0,
    'input_mobile' => 0,
    'input_mobile2' => 0,
    'input_fax' => 0,
    'input_pan' => 0,
    'input_website' => 0,
    'input_cmp_name' => 0,
    'display_img_lo' => 0,
    'display_img_logo' => 0,
    'display_logo_main' => 0,
    'input_img1' => 0,
    'input_cmp_reg_no' => 0,
    'input_cmp_vat' => 0,
    'input_cmp_service_tax' => 0,
    'input_cmp_address' => 0,
    'input_cmp_bank_details' => 0,
    'input_cmp_pan' => 0,
    'agent_id' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_566a8f6b9834c4_18462969')) {function content_566a8f6b9834c4_18462969($_smarty_tpl) {?>            
  <form id="validate" method="POST" action="<?php echo $_smarty_tpl->tpl_vars['user_post_url']->value;?>
" enctype="multipart/form-data">
<div class="span6">

    <div class="data-fluid">
    <!-- Option Selection start -->
        <div>
			<h4> Agent Details </h4>
            <hr/>
        </div>
      
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
              <div class="span3">Address:</div>
              <div class="span9 ">
              
<!--              <input type="text" name="address" id="address" placeholder="Address" value="<?php echo $_smarty_tpl->tpl_vars['input_address']->value;?>
" class="validate[required]"/>-->
              <textarea name="address" id="address" placeholder="Address" class="validate[required]"><?php echo $_smarty_tpl->tpl_vars['input_address']->value;?>
</textarea>
              </div>
          </div>
          
          <div class="row-form">
              <div class="span3">City:</div>
              <div class="span9 input-prepend">
              <span class="add-on blue"><i class="icon-arrow-down icon-white"></i></span>
              <input type="text" name="city" id="city" placeholder="City" value="<?php echo $_smarty_tpl->tpl_vars['input_city']->value;?>
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
          
          
          
        <!--  <div class="row-form">
             <div class="span3">Country:</div>
              <div class="span9">
              
              <select name="country[]" id="country" class="validate[required,min[1]]"  placeholder="Select Country"  style="width: 100%;">
              </select>
              </div>
          </div>-->
          
          
          
          <div class="row-form">
              <div class="span3">Pincode:</div>
              <div class="span9 input-prepend">
              <span class="add-on blue"><i class="icon-arrow-down icon-white"></i></span>
              <input type="text" name="pincode" id="pincode" placeholder="Pincode" value="<?php echo $_smarty_tpl->tpl_vars['input_pincode']->value;?>
" class="validate[required]"/>
              </div>
          </div>
          
          <div class="row-form">
              <div class="span3">Email:</div>
              <div class="span9 input-prepend">
              <span class="add-on blue"><i class="icon-arrow-down icon-white"></i></span>
              <input type="email" name="email" id="email"  placeholder="Email"  value="<?php echo $_smarty_tpl->tpl_vars['input_email']->value;?>
"  <?php echo $_smarty_tpl->tpl_vars['emailvalidate']->value;?>
/>
              </div>
          </div>
          
          <div class="row-form">
              <div class="span3">Income:</div>
              <div class="span9 input-prepend">
              <span class="add-on blue"><i class="icon-arrow-down icon-white"></i></span>
              <input type="text" name="income" id="income" placeholder="Credit Amount" value="<?php echo $_smarty_tpl->tpl_vars['input_income']->value;?>
" />
              </div>
          </div>
          
          
          <div class="row-form">
              <div class="span3">Phone:</div>
              <div class="span9 input-prepend">
              <span class="add-on blue"><i class="icon-arrow-down icon-white"></i></span>
              <input type="text" name="phone" id="phone" placeholder="Phone" value="<?php echo $_smarty_tpl->tpl_vars['input_phone']->value;?>
" />
              </div>
          </div>
          
          <div class="row-form">
              <div class="span3">Mobile:</div>
              <div class="span9 input-prepend">
              <span class="add-on blue"><i class="icon-arrow-down icon-white"></i></span>
              <input type="text" name="mobile" id="mobile" placeholder="Mobile" value="<?php echo $_smarty_tpl->tpl_vars['input_mobile']->value;?>
" />
              </div>
          </div>
          
          <div class="row-form">
              <div class="span3">Mobile 2:</div>
              <div class="span9 input-prepend">
              <span class="add-on blue"><i class="icon-arrow-down icon-white"></i></span>
              <input type="text" name="mobile2" id="mobile2" placeholder="Mobile" value="<?php echo $_smarty_tpl->tpl_vars['input_mobile2']->value;?>
" />
              </div>
          </div>
          
          <div class="row-form">
              <div class="span3">Fax:</div>
              <div class="span9 input-prepend">
              <span class="add-on blue"><i class="icon-arrow-down icon-white"></i></span>
              <input type="text" name="fax" id="fax" placeholder="Fax" value="<?php echo $_smarty_tpl->tpl_vars['input_fax']->value;?>
" />
              </div>
          </div>
          
           <div class="row-form">
              <div class="span3">PAN Card Number:</div>
              <div class="span9 input-prepend">
              <span class="add-on blue"><i class="icon-arrow-down icon-white"></i></span>
              <input type="text" name="pan" id="pan" placeholder="Pan Card Number" value="<?php echo $_smarty_tpl->tpl_vars['input_pan']->value;?>
" />
              </div>
          </div>
          
           <div class="row-form">
              <div class="span3">Website:</div>
              <div class="span9 input-prepend">
              <span class="add-on blue"><i class="icon-arrow-down icon-white"></i></span>
              <input type="text" name="website" id="website" placeholder="Website" value="<?php echo $_smarty_tpl->tpl_vars['input_website']->value;?>
" />
              </div>
          </div>
         
</div>

<div class="span6">
	  <div>
		<h4> Company Details </h4>
        <hr/>
      </div>
	  <div class="row-form">
          <div class="span3">Name:</div>
          <div class="span9 input-prepend">
          <span class="add-on blue"><i class="icon-signal icon-white"></i></span>
          <input type="text" name="cmp_name" id="cmp_name" placeholder="Company Name" value="<?php echo $_smarty_tpl->tpl_vars['input_cmp_name']->value;?>
" class="validate[required,maxSize[100]]"/></div>
       
      </div>
    
      <div class="row-form">
          <div class="span3"></div>
          <div class="span9">
            <div  id="imgdisplay_logo" name="imgdisplay_logo" <?php echo $_smarty_tpl->tpl_vars['display_img_lo']->value;?>
>
                    <?php echo $_smarty_tpl->tpl_vars['display_img_logo']->value;?>

            </div>
          </div>
       </div>
      <div class="row-form">
          <div class="span3"> Logo:</div>
          <div class="span9" id="display_logo_main" <?php echo $_smarty_tpl->tpl_vars['display_logo_main']->value;?>
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
            
      <div class="row-form">
          <div class="span3">Register Number:</div>
          <div class="span9 input-prepend">
          <span class="add-on blue"><i class="icon-arrow-down icon-white"></i></span>
          <input type="text" name="cmp_reg_no" id="cmp_reg_no" placeholder="Company Register Number" value="<?php echo $_smarty_tpl->tpl_vars['input_cmp_reg_no']->value;?>
"  />
          </div>
      </div>
      
      <div class="row-form">
          <div class="span3">VAT Number:</div>
          <div class="span9 input-prepend">
          <span class="add-on blue"><i class="icon-arrow-down icon-white"></i></span>
          <input type="text" name="cmp_vat_no" id="cmp_vat_no" placeholder="Compatny VAT Number" value="<?php echo $_smarty_tpl->tpl_vars['input_cmp_vat']->value;?>
" />
          </div>
      </div>
      
      <div class="row-form">
          <div class="span3">Service Tax Number:</div>
          <div class="span9 input-prepend">
          <span class="add-on blue"><i class="icon-arrow-down icon-white"></i></span>
          <input type="text" name="cmp_service_tax" id="cmp_service_tax" placeholder="Service Tax Number" value="<?php echo $_smarty_tpl->tpl_vars['input_cmp_service_tax']->value;?>
" />
          </div>
      </div>
      
      <div class="row-form">
          <div class="span3">Address:</div>
          <div class="span9 ">
          
          <!--<input type="text" name="cmp_address" id="cmp_address" placeholder="Company Address" value="<?php echo $_smarty_tpl->tpl_vars['input_cmp_address']->value;?>
" class="validate[required]"/>-->
          <textarea name="cmp_address" id="cmp_address" placeholder="Company Address" class="validate[required]"><?php echo $_smarty_tpl->tpl_vars['input_cmp_address']->value;?>
</textarea>
          </div>
      </div>
      
      <div class="row-form">
          <div class="span3">Bank Details:</div>
          <div class="span9 input-prepend">
          <span class="add-on blue"><i class="icon-arrow-down icon-white"></i></span>
          <input type="text" name="cmp_bank_details" id="cmp_bank_details" placeholder="Company Bank Details" value="<?php echo $_smarty_tpl->tpl_vars['input_cmp_bank_details']->value;?>
" />
          </div>
      </div>
      
      <div class="row-form">
          <div class="span3">PAN Card Number:</div>
          <div class="span9 input-prepend">
          <span class="add-on blue"><i class="icon-arrow-down icon-white"></i></span>
          <input type="text" name="cmp_pan_no" id="cmp_pan_no" placeholder="PAN Card Number" value="<?php echo $_smarty_tpl->tpl_vars['input_cmp_pan']->value;?>
" />
          </div>
      </div>
      <hr />
       <div class="row-form">
       	
          <div class="span3">Password:</div>
          <div class="span9 input-prepend">
          <span class="add-on blue"><i class="icon-arrow-down icon-white"></i></span>
          <input type="text" name="pass" id="pass" placeholder="Password" value="" />
          </div>
      </div>
      <hr />
      
      <div class="row-form">
      
          <div class="span3">Credit:</div>
          <div class="span9 input-prepend">
          <span class="add-on blue"><i class="icon-arrow-down icon-white"></i></span>
          <input type="text" name="credit" id="credit" placeholder="Credit Amount" value="" class="validate[custom[number]]"/>
          </div>
      </div>
      <div class="row-form">
      
          <div class="span3">Debit:</div>
          <div class="span9 input-prepend">
          <span class="add-on blue"><i class="icon-arrow-down icon-white"></i></span>
          <input type="text" name="debit" id="debit" placeholder="Debit Amount" value="" class="validate[custom[number]]"/>
          </div>
      </div>
      <div class="row-form">
      
          <div class="span3">Comments:</div>
          <div class="span9 input-prepend">
          
          <textarea name="comments" id="comments"></textarea>
          </div>
      </div>
      
      
</div>

<div class="row-form">
      <div class="span10  pagination-centered">
        <input type="hidden" name="agent_id" value="<?php echo $_smarty_tpl->tpl_vars['agent_id']->value;?>
" />
        <button class="btn" type="submit">Submit</button>
        <button class="btn" type="reset">Reset</button>
        <button class="btn btn-info" type="button" onClick="$('#validate').validationEngine('hide');">Hide prompts</button>
      </div>
  </div>

 </form>
 
 <script type='text/javascript' src='jscript/agent.js'></script>
<!-- <script type='text/javascript' src='jscript/country.js'></script>-->
<?php }} ?>