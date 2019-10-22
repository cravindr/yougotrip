<?php /* Smarty version Smarty-3.1.14, created on 2013-09-27 13:55:20
         compiled from "templates\layout_desc.tpl" */ ?>
<?php /*%%SmartyHeaderCode:29251524540f0c1acc1-59050585%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '66a6f17f8aa998f32850854f9531e739a715dfef' => 
    array (
      0 => 'templates\\layout_desc.tpl',
      1 => 1380178199,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '29251524540f0c1acc1-59050585',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'posturl' => 0,
    'business_hours' => 0,
    'stayconnected' => 0,
    'visa_process' => 0,
    'ticket_booking' => 0,
    'why_we_are' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_524540f0ce29a3_96737328',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_524540f0ce29a3_96737328')) {function content_524540f0ce29a3_96737328($_smarty_tpl) {?><form action="<?php echo $_smarty_tpl->tpl_vars['posturl']->value;?>
" method="post" name="content">
<div class="block">
        <div class="head">                                
            <h2>Describe Page</h2>                          
        </div>  
        <div class="data-fluid tabbable tabs-left">                    
            <ul class="nav nav-tabs">
                <li class="active"><a href="#bh" data-toggle="tab">Business Hours</a></li>
                <li><a href="#sc" data-toggle="tab">Stay Connected</a></li>
                <li><a href="#vp" data-toggle="tab">Visa Processs</a></li>
                <li><a href="#tb" data-toggle="tab">Ticket Booking</a></li>
                <li><a href="#wwa" data-toggle="tab">Why We are</a></li>
            </ul>
            <div class="tab-content">
                <div class="tab-pane active" id="bh">
                <h4>Describe Your Business Hours</h4>
                    <div class="data-fluid editor">
                     <textarea id="businesshour"  name="businesshour" style="height: 400px;"><?php echo $_smarty_tpl->tpl_vars['business_hours']->value;?>
</textarea>
                    </div>
                </div>
                <div class="tab-pane" id="sc">
                <h4>Describe Stay Connected</h4>
                    <div class="data-fluid editor">
                     <textarea id="stayconnected"  name="stayconnected" style="height: 300px;"><?php echo $_smarty_tpl->tpl_vars['stayconnected']->value;?>
</textarea>
                    </div>
                </div>
                <div class="tab-pane" id="vp">
                <h4>Describe Visa Processing</h4>
                    <div class="data-fluid editor">
                     <textarea id="visaprocessing"  name="visaprocessing" style="height: 300px;"><?php echo $_smarty_tpl->tpl_vars['visa_process']->value;?>
</textarea>
                    </div>
                </div>
                <div class="tab-pane" id="tb">
                    <h4>Describe Ticket Booking</h4>
                    <div class="data-fluid editor">
                     <textarea id="ticketbooking"  name="ticketbooking" style="height: 300px;"><?php echo $_smarty_tpl->tpl_vars['ticket_booking']->value;?>
</textarea>
                    </div>
                </div>
                <div class="tab-pane" id="wwa">
                <h4>Describe Why we are</h4>
                    <div class="data-fluid editor">
                     <textarea id="whyweare"  name="whyweare" style="height: 300px;"><?php echo $_smarty_tpl->tpl_vars['why_we_are']->value;?>
</textarea>
                    </div>
                </div>
                
                
                
            </div>
        </div>
</div>
		<div class="row-form">
          <div class="span6  pagination-centered">
          <!--  <button class="btn btn-info" type="button" onClick="$('#validate').validationEngine('hide');">Hide prompts</button>-->
            <button class="btn" type="submit" name="submit" id="submit">Save..</button>
            <!--<button class="btn" type="reset">Reset</button>-->

          </div>

      </div>
</form>
 <script type='text/javascript' src='jscript/layout_desc.js'></script><?php }} ?>