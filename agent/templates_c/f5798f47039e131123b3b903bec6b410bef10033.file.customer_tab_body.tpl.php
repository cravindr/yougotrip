<?php /* Smarty version Smarty-3.1.14, created on 2016-06-10 09:54:07
         compiled from "templates\customer_tab_body.tpl" */ ?>
<?php /*%%SmartyHeaderCode:30161525906e9e77447-56535199%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'f5798f47039e131123b3b903bec6b410bef10033' => 
    array (
      0 => 'templates\\customer_tab_body.tpl',
      1 => 1381565996,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '30161525906e9e77447-56535199',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_525906ea5729c1_41435953',
  'variables' => 
  array (
    'tbl_row_name' => 0,
    'tbl_row_company' => 0,
    'tbl_row_city' => 0,
    'tbl_row_mobile' => 0,
    'gallery_id' => 0,
    'tbl_status_label' => 0,
    'tbl_row_status' => 0,
    'customer_id' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_525906ea5729c1_41435953')) {function content_525906ea5729c1_41435953($_smarty_tpl) {?>                                    
                           
            <tr>
                <td><input type="checkbox" name="order[]" value="528"/></td>
                <td><a href="#"><?php echo $_smarty_tpl->tpl_vars['tbl_row_name']->value;?>
</a></td>
                <td><?php echo $_smarty_tpl->tpl_vars['tbl_row_company']->value;?>
</td>
                <td><?php echo $_smarty_tpl->tpl_vars['tbl_row_city']->value;?>
</td>
                <td><?php echo $_smarty_tpl->tpl_vars['tbl_row_mobile']->value;?>
</td>
                 <!--  <td><a href="#" onclick="checkStatus(<?php echo $_smarty_tpl->tpl_vars['gallery_id']->value;?>
)"><span class="label <?php echo $_smarty_tpl->tpl_vars['tbl_status_label']->value;?>
"><?php echo $_smarty_tpl->tpl_vars['tbl_row_status']->value;?>
</span></a></td>
                	-->
                <td>
                    <a href="#" onclick="editCustomer(<?php echo $_smarty_tpl->tpl_vars['customer_id']->value;?>
)" class="button green">
                        <div class="icon"><span class="ico-pencil"></span></div>
                    </a>
                    <a href="#" onclick="removeCustomer(<?php echo $_smarty_tpl->tpl_vars['customer_id']->value;?>
)" class="button red">
                        <div class="icon"><span class="ico-remove"></span></div>
                    </a>                                              
                </td>
            </tr>     <?php }} ?>