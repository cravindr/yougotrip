<?php /* Smarty version Smarty-3.1.14, created on 2014-02-27 13:26:18
         compiled from "templates\invoice_tab_body.tpl" */ ?>
<?php /*%%SmartyHeaderCode:32635530eefa2293381-37995429%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'ac5f72cae046b8c48f9b9ab5ef4be578fdfe043e' => 
    array (
      0 => 'templates\\invoice_tab_body.tpl',
      1 => 1386247148,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '32635530eefa2293381-37995429',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'invoice_id' => 0,
    'fnView' => 0,
    'customer_id' => 0,
    'customer_name' => 0,
    'inv_date' => 0,
    'amount' => 0,
    'discount' => 0,
    'totalamount' => 0,
    'balance' => 0,
    'status' => 0,
    'action' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_530eefa23b4817_27696569',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_530eefa23b4817_27696569')) {function content_530eefa23b4817_27696569($_smarty_tpl) {?>                                    
                           
            <tr>
                <td><a href="#"></a></td>
                <td><a onclick="previewInvoice(<?php echo $_smarty_tpl->tpl_vars['invoice_id']->value;?>
)" href="#" ><?php echo $_smarty_tpl->tpl_vars['invoice_id']->value;?>
</a></td>
                <td><a onclick="<?php echo $_smarty_tpl->tpl_vars['fnView']->value;?>
" data-toggle="modal" href="#customerModal"><?php echo $_smarty_tpl->tpl_vars['customer_id']->value;?>
</a></td>
                <!--<td><a onclick="customerView(<?php echo $_smarty_tpl->tpl_vars['customer_id']->value;?>
)" data-toggle="modal" href="#customerModal"><?php echo $_smarty_tpl->tpl_vars['customer_name']->value;?>
</a></td>-->
                <td><a onclick="<?php echo $_smarty_tpl->tpl_vars['fnView']->value;?>
" data-toggle="modal" href="#customerModal"><?php echo $_smarty_tpl->tpl_vars['customer_name']->value;?>
</a></td>
                <td><?php echo $_smarty_tpl->tpl_vars['inv_date']->value;?>
</td>
                <td><?php echo $_smarty_tpl->tpl_vars['amount']->value;?>
</td>
                <td><?php echo $_smarty_tpl->tpl_vars['discount']->value;?>
</td>
                <td><?php echo $_smarty_tpl->tpl_vars['totalamount']->value;?>
</td>
                <td><?php echo $_smarty_tpl->tpl_vars['balance']->value;?>
</td>
               <td><a href="#"><?php echo $_smarty_tpl->tpl_vars['status']->value;?>
</a></td>
                <td>
                <?php echo $_smarty_tpl->tpl_vars['action']->value;?>

	                <!--<input type='button' class='btn' onclick='payInvoice(<?php echo $_smarty_tpl->tpl_vars['invoice_id']->value;?>
)' value='Pay Now' />
                    <input type='button' class='btn-warning ' onclick='cancelInvoice(<?php echo $_smarty_tpl->tpl_vars['invoice_id']->value;?>
)' value='Cancel' />-->
                                                                  
                </td>
            </tr>                                <?php }} ?>