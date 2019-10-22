<?php /* Smarty version Smarty-3.1.14, created on 2015-12-11 10:02:04
         compiled from "templates\changepassword.tpl" */ ?>
<?php /*%%SmartyHeaderCode:11594566a910c104560-84700473%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '4724d312e8719728f3476a0093c13644f76e29eb' => 
    array (
      0 => 'templates\\changepassword.tpl',
      1 => 1378799780,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '11594566a910c104560-84700473',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_566a910c13baa9_56961760',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_566a910c13baa9_56961760')) {function content_566a910c13baa9_56961760($_smarty_tpl) {?>
           
<form id="validate" method="POST" action="password_upd.php">
    <div class="data-fluid">
                                
  
   	  <div class="row-form">
          <div class="span2">Enter Current Password:</div>
          <div class="span4 input-prepend">
          <span class="add-on blue"><i class="icon-briefcase icon-white"></i></span>
          <input type="password" name="currentpassword" id="currentpassword"  class="validate[required,minSize[5]],maxSize[200]]"/></div>
      </div>
      
      <div class="row-form">
          <div class="span2">Enter New Password:</div>
          <div class="span4 input-prepend">
          <span class="add-on blue"><i class="icon-briefcase icon-white"></i></span>
          <input type="password" name="password" id="password"  class="validate[required,minSize[5]],maxSize[200]]"/></div>
      </div>
      <div class="row-form">
          <div class="span2">Conform Password:</div>
          <div class="span4 input-prepend">
          <span class="add-on blue"><i class="icon-briefcase icon-white"></i></span>
          <input type="password" name="cpassword"  class="validate[required,minSize[5]],maxSize[200],equals[password]]"/></div>
      </div>
   
      
      <div class="row-form">
          <div class="span6  pagination-centered">
            <button class="btn btn-info" type="button" onClick="$('#validate').validationEngine('hide');">Hide prompts</button>
            <button class="btn" type="submit" name="submit" id="submit">Submit</button>
            <button class="btn" type="reset">Reset</button>

          </div>

      </div>
  </div>     

      </form>
</div>
</div>
</div>
</div>
</div>

<script src="jscript/register.js"></script>

  
<?php }} ?>