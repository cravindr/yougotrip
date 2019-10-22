<?php /* Smarty version Smarty-3.1.14, created on 2015-12-08 09:18:36
         compiled from "templates\crm.tpl" */ ?>
<?php /*%%SmartyHeaderCode:240125666925c693932-72159900%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '660cc7a9712ce214b95749376539ab88c96e4296' => 
    array (
      0 => 'templates\\crm.tpl',
      1 => 1387532979,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '240125666925c693932-72159900',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'addnewurl' => 0,
    'crmid' => 0,
    'title' => 0,
    'first_name' => 0,
    'last_name' => 0,
    'company' => 0,
    'passportno' => 0,
    'issue_date' => 0,
    'exp_date' => 0,
    'industries' => 0,
    'address' => 0,
    'city' => 0,
    'zip' => 0,
    'state' => 0,
    'country' => 0,
    'income' => 0,
    'phone' => 0,
    'mobile' => 0,
    'mobile2' => 0,
    'fax' => 0,
    'email' => 0,
    'website' => 0,
    'ncdate' => 0,
    'lead_source' => 0,
    'package' => 0,
    'desc' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_5666925c7833d7_15580501',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5666925c7833d7_15580501')) {function content_5666925c7833d7_15580501($_smarty_tpl) {?>            
<form id="validate" method="POST" action="<?php echo $_smarty_tpl->tpl_vars['addnewurl']->value;?>
" enctype="multipart/form-data">
<div class="data-fluid">
<!-- Option Selection start -->
    
    <input type="hidden" name="crmid" value="<?php echo $_smarty_tpl->tpl_vars['crmid']->value;?>
"  />
         <div class="row-form">
         
            <div class="span2">Title</div>
            <div class="span4 input-prepend">
              <span class="add-on blue"><i class="icon-signal icon-white"></i></span>
              <input type="text" name="title" id="title" placeholder="Mr / Ms / Miss / Baby / Master" value="<?php echo $_smarty_tpl->tpl_vars['title']->value;?>
" class="validate[required,maxSize[256]]"/>
            </div>
          	<div class="span2">First Name</div>
            <div class="span4 input-prepend">
              <span class="add-on blue"><i class="icon-signal icon-white"></i></span>
              <input type="text" name="fname" id="fname" placeholder="First Name.." value="<?php echo $_smarty_tpl->tpl_vars['first_name']->value;?>
" class="validate[required,maxSize[256]]"/>
            </div>
          </div>
          
          <div class="row-form">
            <div class="span2">Last Name</div>
            <div class="span4 input-prepend">
              <span class="add-on blue"><i class="icon-signal icon-white"></i></span>
              <input type="text" name="lname" id="lname" placeholder="Last Name" value="<?php echo $_smarty_tpl->tpl_vars['last_name']->value;?>
" class="validate[maxSize[256]]"/>
            </div>
          	<div class="span2">Company Name</div>
            <div class="span4 input-prepend">
              <span class="add-on blue"><i class="icon-signal icon-white"></i></span>
              <input type="text" name="company" id="company" placeholder="Company Name.." value="<?php echo $_smarty_tpl->tpl_vars['company']->value;?>
" class="validate[maxSize[256]]"/>
            </div>
          </div>
          
          <div class="row-form">
            <div class="span2">Passport Number</div>
            <div class="span4 input-prepend">
              <span class="add-on blue"><i class="icon-signal icon-white"></i></span>
              <input type="text" name="passportno" id="passportno" placeholder="Passport No" value="<?php echo $_smarty_tpl->tpl_vars['passportno']->value;?>
" class="validate[maxSize[20]]"/>
            </div>
          	<div class="span1">Issue Date</div>
            <div class="span2 ">
            <input type="text" name="idate" id="idate" placeholder="eg.2013/12/30" value="<?php echo $_smarty_tpl->tpl_vars['issue_date']->value;?>
" class="datepicker validate[custom[date]]"/>
            </div>
            <div class="span1">Exp Date</div>
            <div class="span2 ">
              
              <input type="text" name="edate" id="edate" placeholder="eg.2013/12/30" value="<?php echo $_smarty_tpl->tpl_vars['exp_date']->value;?>
" class="datepicker validate[custom[date]]"/>
            </div>
          </div>
          
          
          <div class="row-form">
            <div class="span2">Industries</div>
            <div class="span4 input-prepend">
              <span class="add-on blue"><i class="icon-signal icon-white"></i></span>
              <input type="text" name="industries" id="industries" placeholder="Software / Mills / Dying" value="<?php echo $_smarty_tpl->tpl_vars['industries']->value;?>
" class="validate[maxSize[256]]"/>
            </div>
          	<div class="span2">Address</div>
            <div class="span4 input-prepend">
              <textarea name="addresss" id="address" placeholder="Address..."><?php echo $_smarty_tpl->tpl_vars['address']->value;?>
</textarea></div>
            </div>
          </div>
          
           <div class="row-form">
            <div class="span2">City</div>
            <div class="span4 input-prepend">
              <span class="add-on blue"><i class="icon-signal icon-white"></i></span>
              <input type="text" name="city" id="city" placeholder="City.." value="<?php echo $_smarty_tpl->tpl_vars['city']->value;?>
" class="validate[maxSize[100]]"/>
            </div>
          	<div class="span2">Pin / Zip</div>
            <div class="span4 input-prepend">
              <span class="add-on blue"><i class="icon-signal icon-white"></i></span>
              <input type="text" name="zip" id="zip" placeholder="Pin / Zip Code.." value="<?php echo $_smarty_tpl->tpl_vars['zip']->value;?>
" class="validate[maxSize[100]]"/>
            </div>
          </div>
          <div class="row-form">
            <div class="span2">State</div>
            <div class="span4 input-prepend">
              <span class="add-on blue"><i class="icon-signal icon-white"></i></span>
              <input type="text" name="state" id="state" placeholder="State.." value="<?php echo $_smarty_tpl->tpl_vars['state']->value;?>
" class="validate[maxSize[100]]"/>
            </div>
          	<div class="span2">Country</div>
            <div class="span4 input-prepend">
              <span class="add-on blue"><i class="icon-signal icon-white"></i></span>
              <input type="text" name="country" id="country" placeholder="Country.." value="<?php echo $_smarty_tpl->tpl_vars['country']->value;?>
" class="validate[maxSize[100]]"/>
            </div>
          </div>
          <div class="row-form">
            <div class="span2">Annual Income Rs..</div>
            <div class="span4 input-prepend">
              <span class="add-on blue"><i class="icon-signal icon-white"></i></span>
              <input type="text" name="income" id="income" placeholder="eg. 150000.00" value="<?php echo $_smarty_tpl->tpl_vars['income']->value;?>
" class="validate[maxSize[10]]"/>
            </div>
          	<div class="span2">Phone</div>
            <div class="span4 input-prepend">
              <span class="add-on blue"><i class="icon-signal icon-white"></i></span>
              <input type="text" name="phone" id="phone" placeholder="eg. 0422 3210982" value="<?php echo $_smarty_tpl->tpl_vars['phone']->value;?>
" class="validate[maxSize[15]]"/>
            </div>
          </div>
          <div class="row-form">
            <div class="span2">Mobile</div>
            <div class="span4 input-prepend">
              <span class="add-on blue"><i class="icon-signal icon-white"></i></span>
              <input type="text" name="mobile" id="mobile" placeholder="eg. 9787616123" value="<?php echo $_smarty_tpl->tpl_vars['mobile']->value;?>
" class="validate[maxSize[15]]"/>
            </div>
          	<div class="span2">Mobile 2</div>
            <div class="span4 input-prepend">
              <span class="add-on blue"><i class="icon-signal icon-white"></i></span>
              <input type="text" name="mobile2" id="mobile2" placeholder="eg. 9787616123" value="<?php echo $_smarty_tpl->tpl_vars['mobile2']->value;?>
" class="validate[maxSize[15]]"/>
            </div>
          </div>
          <div class="row-form">
            <div class="span2">Fax</div>
            <div class="span4 input-prepend">
              <span class="add-on blue"><i class="icon-signal icon-white"></i></span>
              <input type="text" name="fax" id="fax" placeholder="eg.0422 4218415" value="<?php echo $_smarty_tpl->tpl_vars['fax']->value;?>
" class="validate[maxSize[15]]"/>
            </div>
          	<div class="span2">E-Mail</div>
            <div class="span4 input-prepend">
              <span class="add-on blue"><i class="icon-signal icon-white"></i></span>
              <input type="text" name="email" id="email" placeholder="eg.info@yougotrio.com" value="<?php echo $_smarty_tpl->tpl_vars['email']->value;?>
" class="validate[maxSize[100]]"/>
            </div>
          </div>
          <div class="row-form">
                <div class="span2">Website</div>
                <div class="span4 input-prepend">
                  <span class="add-on blue"><i class="icon-signal icon-white"></i></span>
                  <input type="text" name="website" id="website" placeholder="eg.0422 4218415" value="<?php echo $_smarty_tpl->tpl_vars['website']->value;?>
" class="validate[maxSize[100]]"/>
                </div>
                 <div class="span2">Next Calling Date</div>
                <div class="span4 input-prepend">
                  <span class="add-on blue"><i class="icon-signal icon-white"></i></span>
                  <input type="text" name="ncdate" id="ncdate" placeholder="eg.01/12/2013" value="<?php echo $_smarty_tpl->tpl_vars['ncdate']->value;?>
" class=" datepicker validate[maxSize[11],custom[date]]"/>
                </div>
                
          </div>



          
          
          <div class="row-form">
          <div class="span2">Lead Source</div>
                <div class="span4 input-prepend">
                  <span class="add-on blue"><i class="icon-signal icon-white"></i></span>
                  <input type="text" name="lsource" id="lsource" placeholder="eg. News paper / TV Ads / Search " value="<?php echo $_smarty_tpl->tpl_vars['lead_source']->value;?>
" class="validate[maxSize[100]]"/>
                </div>
          	 	<div class="span2">Pack Interested</div>
                <div class="span4 input-prepend">
                  <span class="add-on blue"><i class="icon-signal icon-white"></i></span>
                  <input type="text" name="pack" id="pack" placeholder="Interested Package" value="<?php echo $_smarty_tpl->tpl_vars['package']->value;?>
" class="validate[maxSize[200]]"/>
                </div>
              
          </div>    
          
          <div class="row-form">
          
          	 <div class="span2">Comments</div>
             <div class="span4 input-prepend">
              <textarea name="desc" id="desc" placeholder="Comments..."><?php echo $_smarty_tpl->tpl_vars['desc']->value;?>
</textarea>
              </div>
              
          </div>       
          
          
          
          
          
         <div class="row-form">
          <div class="span6  pagination-centered">

            <button class="btn" type="submit">Submit</button>
            <button class="btn" type="reset">Reset</button>
            <button class="btn btn-info" type="button" onClick="$('#validate').validationEngine('hide');">Hide prompts</button>
          </div>
      </div>
  </div>
<input type="hidden" id="datep" name="datep" value="" />
</form>
  
<?php }} ?>