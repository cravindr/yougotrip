<?php /* Smarty version Smarty-3.1.14, created on 2014-03-06 18:16:47
         compiled from "templates\agent_tab_body.tpl" */ ?>
<?php /*%%SmartyHeaderCode:2596753186e37139818-28696400%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'f815968fd433244d97acd3a0a49eec3338f401f5' => 
    array (
      0 => 'templates\\agent_tab_body.tpl',
      1 => 1380350628,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2596753186e37139818-28696400',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'tbl_row_first_name' => 0,
    'tbl_row_city' => 0,
    'tbl_row_country' => 0,
    'tbl_row_company' => 0,
    'tbl_row_email' => 0,
    'tbl_row_mobile' => 0,
    'tbl_row_cdate' => 0,
    'agent_id' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_53186e371f0cd1_20095461',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_53186e371f0cd1_20095461')) {function content_53186e371f0cd1_20095461($_smarty_tpl) {?>                                    
                           
            <tr>
                <td><input type="checkbox" name="order[]" value="528"/></td>
                <td><a href="#"><?php echo $_smarty_tpl->tpl_vars['tbl_row_first_name']->value;?>
</a></td>
                <td><?php echo $_smarty_tpl->tpl_vars['tbl_row_city']->value;?>
</td>
                <td><?php echo $_smarty_tpl->tpl_vars['tbl_row_country']->value;?>
</td>                
                <td><?php echo $_smarty_tpl->tpl_vars['tbl_row_company']->value;?>
</td>
                <td><?php echo $_smarty_tpl->tpl_vars['tbl_row_email']->value;?>
</td>
                <td><?php echo $_smarty_tpl->tpl_vars['tbl_row_mobile']->value;?>
</td>
                <td><?php echo $_smarty_tpl->tpl_vars['tbl_row_cdate']->value;?>
</td>

                <td>
                    <a href="#" onclick="editAgent(<?php echo $_smarty_tpl->tpl_vars['agent_id']->value;?>
)" class="button green">
                        <div class="icon"><span class="ico-pencil"></span></div>
                    </a>
                    <a href="#" onclick="removeAgent(<?php echo $_smarty_tpl->tpl_vars['agent_id']->value;?>
,'<?php echo $_smarty_tpl->tpl_vars['tbl_row_first_name']->value;?>
')" class="button red">
                        <div class="icon"><span class="ico-remove"></span></div>
                    </a>                                              
                </td>
            </tr>     <?php }} ?>