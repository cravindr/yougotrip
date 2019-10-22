<?php /* Smarty version Smarty-3.1.14, created on 2013-10-12 13:10:59
         compiled from "templates\crm_tab_body.tpl" */ ?>
<?php /*%%SmartyHeaderCode:292625258fd0b5794c8-98648611%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '1c813b324f8f229af84cb2dd15f86ee5473adf21' => 
    array (
      0 => 'templates\\crm_tab_body.tpl',
      1 => 1380263076,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '292625258fd0b5794c8-98648611',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'tbl_row_name' => 0,
    'tbl_row_company' => 0,
    'tbl_row_city' => 0,
    'tbl_row_mobile' => 0,
    'gallery_id' => 0,
    'tbl_status_label' => 0,
    'tbl_row_status' => 0,
    'crm_id' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_5258fd0b688774_29083074',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5258fd0b688774_29083074')) {function content_5258fd0b688774_29083074($_smarty_tpl) {?>                                    
                           
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
                    <a href="#" onclick="editCRM(<?php echo $_smarty_tpl->tpl_vars['crm_id']->value;?>
)" class="button green">
                        <div class="icon"><span class="ico-pencil"></span></div>
                    </a>
                    <a href="#" onclick="removeCRM(<?php echo $_smarty_tpl->tpl_vars['crm_id']->value;?>
)" class="button red">
                        <div class="icon"><span class="ico-remove"></span></div>
                    </a>                                              
                </td>
            </tr>     <?php }} ?>