<?php /* Smarty version Smarty-3.1.14, created on 2013-12-26 10:52:12
         compiled from "templates\content.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1687452bbbd04518569-09993198%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '248e4346579b80fe6f0e4fbc69e3edc28d0f9e0f' => 
    array (
      0 => 'templates\\content.tpl',
      1 => 1380196116,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1687452bbbd04518569-09993198',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'home_link' => 0,
    'about_us' => 0,
    'services' => 0,
    'contact' => 0,
    'terms_conditions' => 0,
    'return_policy' => 0,
    'welcome_message' => 0,
    'invoice_message' => 0,
    'forgot_password' => 0,
    'activation' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_52bbbd04660d74_32984693',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_52bbbd04660d74_32984693')) {function content_52bbbd04660d74_32984693($_smarty_tpl) {?><form action="content_upd.php" method="post" name="content">
<div class="block">
        <div class="head">                                
            <h2>Describe Page</h2>                          
        </div>  
        <div class="data-fluid tabbable tabs-left">                    
            <ul class="nav nav-tabs">
                <li class="active"><a href="#home" data-toggle="tab">Home</a></li>
                <li><a href="#abt" data-toggle="tab">About Us</a></li>
                <li><a href="#ser" data-toggle="tab">Services Us</a></li>
                <li><a href="#cu" data-toggle="tab">Contact Us</a></li>
                <li><a href="#tc" data-toggle="tab">Terms & Conditions</a></li>
                <li><a href="#rp" data-toggle="tab">Return Policy</a></li>                
                <li><a href="#wm" data-toggle="tab">Welcome Message</a></li>
                <li><a href="#wwa" data-toggle="tab">Invoice Text</a></li>
                <li><a href="#fp" data-toggle="tab">Forgot Password</a></li>
                <li><a href="#act" data-toggle="tab">Activation</a></li>
            </ul>
            <div class="tab-content">
                <div class="tab-pane active" id="home">
                <h4>Describe Home page content</h4>
                    <div class="data-fluid editor">
                     <textarea id="homecont"  name="homecont" style="height: 400px;"><?php echo $_smarty_tpl->tpl_vars['home_link']->value;?>
</textarea>
                    </div>
                </div>
                <div class="tab-pane" id="abt">
                <h4>Describe About Us page content</h4>
                    <div class="data-fluid editor">
                     <textarea id="aboutus"  name="aboutus" style="height: 300px;"><?php echo $_smarty_tpl->tpl_vars['about_us']->value;?>
</textarea>
                    </div>
                </div>
                <div class="tab-pane" id="ser">
                <h4>Describe Service page content</h4>
                    <div class="data-fluid editor">
                     <textarea id="services"  name="services" style="height: 300px;"><?php echo $_smarty_tpl->tpl_vars['services']->value;?>
</textarea>
                    </div>
                </div>
                <div class="tab-pane" id="cu">
                    <h4>Describe Contact content</h4>
                    <div class="data-fluid editor">
                     <textarea id="contactus"  name="contactus" style="height: 300px;"><?php echo $_smarty_tpl->tpl_vars['contact']->value;?>
</textarea>
                    </div>
                </div>
                <div class="tab-pane" id="tc">
                    <h4>Describe Terms and Condition</h4>
                    <div class="data-fluid editor">
                     <textarea id="termsandcondition"  name="termsandcondition" style="height: 300px;"><?php echo $_smarty_tpl->tpl_vars['terms_conditions']->value;?>
</textarea>
                    </div>
                </div>
                <div class="tab-pane" id="rp">
                <h4>Describe Return Policy Contents</h4>
                    <div class="data-fluid editor">
                     <textarea id="returnpol"  name="returnpol" style="height: 300px;"><?php echo $_smarty_tpl->tpl_vars['return_policy']->value;?>
</textarea>
                    </div>
                </div>
                 
                <div class="tab-pane" id="wm">
                <h4>Describe Welcome email Message </h4>
                    <div class="data-fluid editor">
                     <textarea id="welcome"  name="welcome" style="height: 300px;"><?php echo $_smarty_tpl->tpl_vars['welcome_message']->value;?>
</textarea>
                    </div>
                </div>
               <div class="tab-pane" id="wwa">
                <h4>Describe Invoice Mail Message</h4>
                    <div class="data-fluid editor">
                     <textarea id="invoice_message"  name="invoice_message" style="height: 300px;"><?php echo $_smarty_tpl->tpl_vars['invoice_message']->value;?>
</textarea>
                    </div>
                </div>
                
                <div class="tab-pane" id="fp">
                <h4>Describe forget password Contents</h4>
                    <div class="data-fluid editor">
                     <textarea id="forgetpass"  name="forgetpass" style="height: 300px;"><?php echo $_smarty_tpl->tpl_vars['forgot_password']->value;?>
</textarea>
                    </div>
                </div>
                <div class="tab-pane" id="act">
                <h4>Describe Activation Message Content</h4>
                    <div class="data-fluid editor">
                     <textarea id="activationmessage"  name="activationmessage" style="height: 300px;"><?php echo $_smarty_tpl->tpl_vars['activation']->value;?>
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
 <script type='text/javascript' src='jscript/content.js'></script><?php }} ?>