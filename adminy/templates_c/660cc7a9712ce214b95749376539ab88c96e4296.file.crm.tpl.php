<?php /* Smarty version Smarty-3.1.14, created on 2013-09-28 14:10:48
         compiled from "templates\crm.tpl" */ ?>
<?php /*%%SmartyHeaderCode:18909524696101ad097-96524294%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '660cc7a9712ce214b95749376539ab88c96e4296' => 
    array (
      0 => 'templates\\crm.tpl',
      1 => 1380099729,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '18909524696101ad097-96524294',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'addnewurl' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_52469610275515_80194658',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_52469610275515_80194658')) {function content_52469610275515_80194658($_smarty_tpl) {?>            
<form id="validate" method="POST" action="<?php echo $_smarty_tpl->tpl_vars['addnewurl']->value;?>
" enctype="multipart/form-data">
<div class="data-fluid">
<!-- Option Selection start -->
    
    
         <div class="row-form">
            <div class="span2">Title</div>
            <div class="span4 input-prepend">
              <span class="add-on blue"><i class="icon-signal icon-white"></i></span>
              <input type="text" name="title" id="title" placeholder="Mr / Ms / Miss / Baby / Master" value="" class="validate[required,maxSize[256]]"/>
            </div>
          	<div class="span2">First Name</div>
            <div class="span4 input-prepend">
              <span class="add-on blue"><i class="icon-signal icon-white"></i></span>
              <input type="text" name="fname" id="fname" placeholder="First Name.." value="" class="validate[required,maxSize[256]]"/>
            </div>
          </div>
          
          <div class="row-form">
            <div class="span2">Last Name</div>
            <div class="span4 input-prepend">
              <span class="add-on blue"><i class="icon-signal icon-white"></i></span>
              <input type="text" name="lname" id="lname" placeholder="Last Name" value="" class="validate[required,maxSize[256]]"/>
            </div>
          	<div class="span2">Company Name</div>
            <div class="span4 input-prepend">
              <span class="add-on blue"><i class="icon-signal icon-white"></i></span>
              <input type="text" name="company" id="company" placeholder="Company Name.." value="" class="validate[maxSize[256]]"/>
            </div>
          </div>
          
          <div class="row-form">
            <div class="span2">Passport Number</div>
            <div class="span4 input-prepend">
              <span class="add-on blue"><i class="icon-signal icon-white"></i></span>
              <input type="text" name="passportno" id="passportno" placeholder="Passport No" value="" class="validate[maxSize[20]]"/>
            </div>
          	<div class="span1">Issue Date</div>
            <div class="span2 ">
            <input type="text" name="idate" id="idate" placeholder="eg.2013/12/30" value="" class="validate[custom[date]]"/>
            </div>
            <div class="span1">Exp Date</div>
            <div class="span2 ">
              
              <input type="text" name="edate" id="edate" placeholder="eg.2013/12/30" value="" class="validate[custom[date]]"/>
            </div>
          </div>
          
          
          <div class="row-form">
            <div class="span2">Industries</div>
            <div class="span4 input-prepend">
              <span class="add-on blue"><i class="icon-signal icon-white"></i></span>
              <input type="text" name="industries" id="industries" placeholder="Software / Mills / Dying" value="" class="validate[maxSize[256]]"/>
            </div>
          	<div class="span2">Address</div>
            <div class="span4 input-prepend">
              <textarea name="addresss" id="address" placeholder="Address..."></textarea></div>
            </div>
          </div>
          
           <div class="row-form">
            <div class="span2">City</div>
            <div class="span4 input-prepend">
              <span class="add-on blue"><i class="icon-signal icon-white"></i></span>
              <input type="text" name="city" id="city" placeholder="City.." value="" class="validate[maxSize[100]]"/>
            </div>
          	<div class="span2">Pin / Zip</div>
            <div class="span4 input-prepend">
              <span class="add-on blue"><i class="icon-signal icon-white"></i></span>
              <input type="text" name="zip" id="zip" placeholder="Pin / Zip Code.." value="" class="validate[maxSize[100]]"/>
            </div>
          </div>
          <div class="row-form">
            <div class="span2">State</div>
            <div class="span4 input-prepend">
              <span class="add-on blue"><i class="icon-signal icon-white"></i></span>
              <input type="text" name="state" id="state" placeholder="State.." value="" class="validate[maxSize[100]]"/>
            </div>
          	<div class="span2">Country</div>
            <div class="span4 input-prepend">
              <span class="add-on blue"><i class="icon-signal icon-white"></i></span>
              <input type="text" name="country" id="country" placeholder="Country.." value="" class="validate[maxSize[100]]"/>
            </div>
          </div>
          <div class="row-form">
            <div class="span2">Annual Income Rs..</div>
            <div class="span4 input-prepend">
              <span class="add-on blue"><i class="icon-signal icon-white"></i></span>
              <input type="text" name="income" id="income" placeholder="eg. 150000.00" value="" class="validate[maxSize[10]]"/>
            </div>
          	<div class="span2">Phone</div>
            <div class="span4 input-prepend">
              <span class="add-on blue"><i class="icon-signal icon-white"></i></span>
              <input type="text" name="phone" id="phone" placeholder="eg. 0422 3210982" value="" class="validate[maxSize[15]]"/>
            </div>
          </div>
          <div class="row-form">
            <div class="span2">Mobile</div>
            <div class="span4 input-prepend">
              <span class="add-on blue"><i class="icon-signal icon-white"></i></span>
              <input type="text" name="mobile" id="mobile" placeholder="eg. 9787616123" value="" class="validate[maxSize[15]]"/>
            </div>
          	<div class="span2">Mobile 2</div>
            <div class="span4 input-prepend">
              <span class="add-on blue"><i class="icon-signal icon-white"></i></span>
              <input type="text" name="mobile2" id="mobile2" placeholder="eg. 9787616123" value="" class="validate[maxSize[15]]"/>
            </div>
          </div>
          <div class="row-form">
            <div class="span2">Fax</div>
            <div class="span4 input-prepend">
              <span class="add-on blue"><i class="icon-signal icon-white"></i></span>
              <input type="text" name="fax" id="fax" placeholder="eg.0422 4218415" value="" class="validate[maxSize[15]]"/>
            </div>
          	<div class="span2">E-Mail</div>
            <div class="span4 input-prepend">
              <span class="add-on blue"><i class="icon-signal icon-white"></i></span>
              <input type="text" name="email" id="email" placeholder="eg.info@yougotrio.com" value="" class="validate[maxSize[100]]"/>
            </div>
          </div>
          <div class="row-form">
                <div class="span2">Website</div>
                <div class="span4 input-prepend">
                  <span class="add-on blue"><i class="icon-signal icon-white"></i></span>
                  <input type="text" name="website" id="website" placeholder="eg.0422 4218415" value="" class="validate[maxSize[100]]"/>
                </div>
                 <div class="span2">Next Calling Date</div>
                <div class="span4 input-prepend">
                  <span class="add-on blue"><i class="icon-signal icon-white"></i></span>
                  <input type="text" name="ncdate" id="ncdate" placeholder="eg.01/12/2013" value="" class="validate[maxSize[11],custom[date]]"/>
                </div>
                
          </div>



          
          
          <div class="row-form">
          <div class="span2">Lead Source</div>
                <div class="span4 input-prepend">
                  <span class="add-on blue"><i class="icon-signal icon-white"></i></span>
                  <input type="text" name="lsource" id="lsource" placeholder="eg. News paper / TV Ads / Search " value="" class="validate[maxSize[100]]"/>
                </div>
          	 <div class="span2">Comments</div>
             <div class="span4 input-prepend">
              <textarea name="desc" id="desc" placeholder="Comments..."></textarea>
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