<?php /* Smarty version Smarty-3.1.14, created on 2019-10-22 07:48:36
         compiled from "templates/rspan3.tpl" */ ?>
<?php /*%%SmartyHeaderCode:9899931945dae9834acd460-47195913%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '7b9405423b5c1682027c73fb4ff2da66b9eca664' => 
    array (
      0 => 'templates/rspan3.tpl',
      1 => 1397199050,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '9899931945dae9834acd460-47195913',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'packagetitle' => 0,
    'business_hours' => 0,
    'why_we_are' => 0,
    'address' => 0,
    'email' => 0,
    'phone' => 0,
    'domainname' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_5dae9834ad30c0_94264918',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5dae9834ad30c0_94264918')) {function content_5dae9834ad30c0_94264918($_smarty_tpl) {?> <!--############################## Right Part Start########################################--->
		<div class="span4 bg_mild_oom" style="background:#FAFAFA; padding-left:2; padding-right:2; padding-top:2px"> 
        
            
            <!--<div class="headline"><h3>Enquiry</h3></div>-->
            <!--<div class="headline " style="background:#F2F2F2; padding:0px; margin:0px"> <h1><center>Enquiry</center></h1></div>-->
            <div class="headline " style="background:#E2E2E2; ;height:37px"> <h1><center> <strong> Enquiry</strong></center></h1></div>
            <p>
                    <form id="validate"  action="enquiry_save.php" method="post">
                    <input type="hidden" name="packtitle" value="<?php echo $_smarty_tpl->tpl_vars['packagetitle']->value;?>
" />
                        <div class="controls span12">    
                            <label>Name <span class="color-red">*</span></label>
                            <input type="text" name="name" placeholder="eg. Mr. Ms." class="span10 validate[required,maxSize[100]]" />
                            <label>Email Address <span class="color-red">*</span></label>
                            <input type="text" name="email" placeholder="eg. example@gmail.com" class="span10 validate[required,maxSize[100]]" />
                            <label>Phone <span class="color-red">*</span></label>
                            <input type="text" name="phone" class="span10 validate[required,maxSize[100]]" />
                            <label>City</label>
                            <input type="text" name="city" class="span10" />
                            <label>Comments</label>
                            <textarea name="comments" class="span10"></textarea>
                            <input type="hidden" name="concat_tour" value="Tour Package Enquiry : " /></div>
                            <div style="padding-right:9px">
                        <button class="btn-u pull-right" type="submit">Send</button>
                        </div>
                        <br />
                        <p>&nbsp; </p>
                    </form>
                    </p>
            <p></p>
            	

        	 <!--Business Hours 
            <div class="headline"><h3>Business Hours</h3></div>
            <?php echo $_smarty_tpl->tpl_vars['business_hours']->value;?>
-->
            
            

        	<!-- Why we are? -->
           <!-- <div class="headline"><h3>Why we are?</h3></div>
            <?php echo $_smarty_tpl->tpl_vars['why_we_are']->value;?>
-->
            
            
        </div><!--/span4-->  
       <div ><p>&nbsp; </p></div>
        
        <div  class="span4 bg_mild_oom" style="background:#FAFAFA;  padding-left:2; padding-right:2; padding-top:2px" >
        <!-- Contacts -->
          
         <!--<div class="headline " style="background:#F2F2F2; padding:0px; margin:0px"> <h1><center>Contacts</center></h1></div>-->
         <div class="headline " style="background:#E2E2E2;  height:37px"> <h1><center> <strong> Contacts</strong></center></h1></div>
          <!--  <div class="headline"><h3>Contacts</h3></div>-->
          <div style="padding-left:10px"> <!--for align address text-->
            <ul class="unstyled who margin-bottom-20">
                <li><a href="#"><i class="icon-home"></i><?php echo $_smarty_tpl->tpl_vars['address']->value;?>
</a></li>
                <li><a href="#"><i class="icon-envelope-alt"></i><?php echo $_smarty_tpl->tpl_vars['email']->value;?>
</a></li>
                <li><a href="#"><i class="icon-phone-sign"></i><?php echo $_smarty_tpl->tpl_vars['phone']->value;?>
</a></li>
                <li><a href="#"><i class="icon-globe"></i><?php echo $_smarty_tpl->tpl_vars['domainname']->value;?>
</a></li>
            </ul>
            </div><!--/for align address text-->
        </div>          		
    </div><!--/row-fluid-->
</div><!--/container-->		
<!--=== End Content Part ===-->
        <!--############################## Right Part End########################################---><?php }} ?>