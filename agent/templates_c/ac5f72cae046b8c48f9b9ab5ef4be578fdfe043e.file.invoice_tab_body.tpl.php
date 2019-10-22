<?php /* Smarty version Smarty-3.1.14, created on 2013-10-15 16:56:51
         compiled from "templates\invoice_tab_body.tpl" */ ?>
<?php /*%%SmartyHeaderCode:13523525d25d7e17278-64441457%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'ac5f72cae046b8c48f9b9ab5ef4be578fdfe043e' => 
    array (
      0 => 'templates\\invoice_tab_body.tpl',
      1 => 1381836408,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '13523525d25d7e17278-64441457',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_525d25d7efb861_82795795',
  'variables' => 
  array (
    'invoice_id' => 0,
    'cusomer_id' => 0,
    'customer_name' => 0,
    'inv_date' => 0,
    'amount' => 0,
    'discount' => 0,
    'totalamount' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_525d25d7efb861_82795795')) {function content_525d25d7efb861_82795795($_smarty_tpl) {?>                                    
                           
            <tr>
                <td><input type="checkbox" name="order[]" value="528"/></td>
                <td><a href="#"><?php echo $_smarty_tpl->tpl_vars['invoice_id']->value;?>
</a></td>
                <td><a href="#"><?php echo $_smarty_tpl->tpl_vars['cusomer_id']->value;?>
</a></td>
                <td><a href="#"><?php echo $_smarty_tpl->tpl_vars['customer_name']->value;?>
</a></td>
                <td><a href="#"><?php echo $_smarty_tpl->tpl_vars['inv_date']->value;?>
</a></td>
                <td><a href="#"><?php echo $_smarty_tpl->tpl_vars['amount']->value;?>
</a></td>
                <td><a href="#"><?php echo $_smarty_tpl->tpl_vars['discount']->value;?>
</a></td>
                <td><a href="#"><?php echo $_smarty_tpl->tpl_vars['totalamount']->value;?>
</a></td>
                <td>
                    
                    <a href="#" onclick="removeInvoice(<?php echo $_smarty_tpl->tpl_vars['invoice_id']->value;?>
)" class="button red">
                        <div class="icon"><span class="ico-remove"></span></div>
                    </a>                                              
                </td>
            </tr>                                <?php }} ?>