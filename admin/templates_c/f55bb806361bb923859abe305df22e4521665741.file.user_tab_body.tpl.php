<?php /* Smarty version Smarty-3.1.14, created on 2015-12-08 09:19:38
         compiled from "templates\user_tab_body.tpl" */ ?>
<?php /*%%SmartyHeaderCode:304285666929af3fef5-46718265%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'f55bb806361bb923859abe305df22e4521665741' => 
    array (
      0 => 'templates\\user_tab_body.tpl',
      1 => 1380087804,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '304285666929af3fef5-46718265',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'tbl_row_transid' => 0,
    'tbl_row_date' => 0,
    'tbl_row_credit' => 0,
    'tbl_row_debit' => 0,
    'tbl_row_balance' => 0,
    'tbl_row_comments' => 0,
    'tbl_row_invoice' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_5666929b01b6e2_28103145',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5666929b01b6e2_28103145')) {function content_5666929b01b6e2_28103145($_smarty_tpl) {?>                                    
                           
            <tr>
                <td><input type="checkbox" name="order[]" value="528"/></td>
                <td><a href="#"><?php echo $_smarty_tpl->tpl_vars['tbl_row_transid']->value;?>
</a></td>
                <td><?php echo $_smarty_tpl->tpl_vars['tbl_row_date']->value;?>
</td>
                <td><?php echo $_smarty_tpl->tpl_vars['tbl_row_credit']->value;?>
</td>
                <td><?php echo $_smarty_tpl->tpl_vars['tbl_row_debit']->value;?>
</td>
                <td><?php echo $_smarty_tpl->tpl_vars['tbl_row_balance']->value;?>
</td>
                
                <td><?php echo $_smarty_tpl->tpl_vars['tbl_row_comments']->value;?>
</td>
                <td><?php echo $_smarty_tpl->tpl_vars['tbl_row_invoice']->value;?>
</td>
               <!-- <td>
                    <a href="#" onclick="editTrans(<?php echo $_smarty_tpl->tpl_vars['tbl_row_transid']->value;?>
)" class="button green">
                        <div class="icon"><span class="ico-pencil"></span></div>
                    </a>
                                            
                </td> -->
            </tr>     <?php }} ?>