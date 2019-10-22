<?php /* Smarty version Smarty-3.1.14, created on 2016-06-09 12:16:43
         compiled from "templates\paymentoption.tpl" */ ?>
<?php /*%%SmartyHeaderCode:29966525d2af4e5aa90-79111872%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '6616d72e208d33bdaf1ede4ccc18ac127be1f820' => 
    array (
      0 => 'templates\\paymentoption.tpl',
      1 => 1381838412,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '29966525d2af4e5aa90-79111872',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_525d2af50f9ff3_76432213',
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_525d2af50f9ff3_76432213')) {function content_525d2af50f9ff3_76432213($_smarty_tpl) {?><div class="span9">
<form action="paymentmethod.php" method="post">
    <div class="offset5 span4" style="background:#CCC">
    <strong>Please Chose Payment Option</strong><br>
    <hr />
     <input type="radio" name="payment"  value="account" checked >Account<br>
   <input type="radio" name="payment" value="gateway" > Payment gateway 
    <br>
 
   <input class="btn btn-primary pull-right"  type="submit" value="Proceed..." >
    
   
    </div>
    </form>
</div><?php }} ?>