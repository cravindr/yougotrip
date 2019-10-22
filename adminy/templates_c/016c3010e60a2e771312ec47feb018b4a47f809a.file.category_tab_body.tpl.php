<?php /* Smarty version Smarty-3.1.14, created on 2013-09-28 14:06:14
         compiled from "templates\category_tab_body.tpl" */ ?>
<?php /*%%SmartyHeaderCode:22681524694fe677287-51771648%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '016c3010e60a2e771312ec47feb018b4a47f809a' => 
    array (
      0 => 'templates\\category_tab_body.tpl',
      1 => 1379762923,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '22681524694fe677287-51771648',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'tbl_row_title' => 0,
    'category_id' => 0,
    'current_display' => 0,
    'tbl_display_label' => 0,
    'tbl_row_display' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_524694fe6c2be6_05564874',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_524694fe6c2be6_05564874')) {function content_524694fe6c2be6_05564874($_smarty_tpl) {?>                                    
                           
            <tr>
                <td><input type="checkbox" name="order[]" value="528"/></td>
                <td><a href="#"><?php echo $_smarty_tpl->tpl_vars['tbl_row_title']->value;?>
</a></td>
                <td><a href="#" onclick="checkDisplay(<?php echo $_smarty_tpl->tpl_vars['category_id']->value;?>
,<?php echo $_smarty_tpl->tpl_vars['current_display']->value;?>
)"><span class="label <?php echo $_smarty_tpl->tpl_vars['tbl_display_label']->value;?>
"><?php echo $_smarty_tpl->tpl_vars['tbl_row_display']->value;?>
</span></a></td>
                <td>
                    <a href="#" onclick="editCategory(<?php echo $_smarty_tpl->tpl_vars['category_id']->value;?>
)" class="button green">
                        <div class="icon"><span class="ico-pencil"></span></div>
                    </a>
                    <a href="#" onclick="removeCategory(<?php echo $_smarty_tpl->tpl_vars['category_id']->value;?>
,'<?php echo $_smarty_tpl->tpl_vars['tbl_row_title']->value;?>
')" class="button red">
                        <div class="icon"><span class="ico-remove"></span></div>
                    </a>                                              
                </td>
            </tr>     <?php }} ?>