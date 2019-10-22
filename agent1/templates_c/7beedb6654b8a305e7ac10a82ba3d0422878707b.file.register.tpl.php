<?php /* Smarty version Smarty-3.1.14, created on 2013-09-28 17:45:59
         compiled from "templates\register.tpl" */ ?>
<?php /*%%SmartyHeaderCode:98015246c1f92b4ed2-70183610%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '7beedb6654b8a305e7ac10a82ba3d0422878707b' => 
    array (
      0 => 'templates\\register.tpl',
      1 => 1380370556,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '98015246c1f92b4ed2-70183610',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_5246c1f93608c3_16253634',
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5246c1f93608c3_16253634')) {function content_5246c1f93608c3_16253634($_smarty_tpl) {?><div class="container">		
    <div class="row-fluid margin-bottom-30 offset1 span6">
        <form id="validate" class="reg-page" action="register_save.php" method="post">
            <div class="controls">    
            	<label>Title</label>
                <input type="text" name="title" placeholder="eg. Mr. Ms." class="span12 validate[required,maxSize[100]]" />
                <label>First Name</label>
                <input type="text" name="firstname" class="span12 validate[required,maxSize[100]]" />
                <label>Last Name</label>
                <input type="text" name="lastname" class="span12" />
                <label>Email Address <span class="color-red">*</span></label>
                <input type="text" name="email" placeholder="eg. example@gmail.com" class="span12 validate[required,maxSize[100]]" />
            </div>
            <div class="controls">
                <div class="span6">
                    <label>Password <span class="color-red">*</span></label>
                    <input type="password" name="password" class="span12 validate[required,maxSize[100]]" />
                </div>
                <div class="span6">
                    <label>Confirm Password <span class="color-red">*</span></label>
                    <input type="password" name="confirmpassword" class="span12 validate[required,maxSize[100]]" />
                </div>
            </div>
            <label>Address</label>
                <textarea class="span12" name="address"></textarea>
            <label>Place</label>
                <input type="text" name="place" class="span12" />
            <label>State</label>
                <input type="text" name="state" class="span12" />
            <label>Country</label>
                <input type="text" name="country" placeholder="eg. India" class="span12" />
            <label>Pincode</label>
                <input type="text" name="pincode" placeholder="eg. 641654" class="span12" />
            <label>Phone</label>
                <input type="text" name="phone" placeholder="eg. 0422 - 233456" class="span12" />
            <label>Mobile </label>
                <input type="text" name="mobile" placeholder="eg. 9942023734" class="span12" />
            <label>Mobile 2</label>
                <input type="text" name="mobile2" placeholder="eg. 9967345623" class="span12" />   
             
            <div class="controls form-inline">
            	 <br /> <br />
                <label class="checkbox span8"><input type="checkbox" class=""/>&nbsp; I read <a href="#">Terms and Conditions</a></label>
                <button class="btn pull-right" type="submit">Register</button>
            </div>
            <br />
             <br /> <br /> <br />
            
        </form>
    </div><!--/row-fluid-->
</div><?php }} ?>