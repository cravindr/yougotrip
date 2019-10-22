<?php /* Smarty version Smarty-3.1.14, created on 2013-09-28 12:11:40
         compiled from "templates\tour_tab_body.tpl" */ ?>
<?php /*%%SmartyHeaderCode:489252467a241bb2f0-30268961%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '478b31617360d7cb1450c2ef1743419f60109346' => 
    array (
      0 => 'templates\\tour_tab_body.tpl',
      1 => 1379762486,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '489252467a241bb2f0-30268961',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'tbl_row_title' => 0,
    'tbl_row_desc' => 0,
    'pack_id' => 0,
    'current_display' => 0,
    'tbl_display_label' => 0,
    'tbl_row_display' => 0,
    'tbl_row_adult_price' => 0,
    'tbl_row_child_price' => 0,
    'tbl_row_child_wob' => 0,
    'tbl_status_label' => 0,
    'tbl_row_status' => 0,
    'tbl_row_date' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_52467a242f4fc2_14198979',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_52467a242f4fc2_14198979')) {function content_52467a242f4fc2_14198979($_smarty_tpl) {?>                                    
                           
            <tr>
                <td><input type="checkbox" name="order[]" value="528"/></td>
                <td><a href="#"><?php echo $_smarty_tpl->tpl_vars['tbl_row_title']->value;?>
</a></td>
                <!--<td><?php echo $_smarty_tpl->tpl_vars['tbl_row_desc']->value;?>
</td>-->
                <td><a href="#" onclick="checkDisplay(<?php echo $_smarty_tpl->tpl_vars['pack_id']->value;?>
,<?php echo $_smarty_tpl->tpl_vars['current_display']->value;?>
)"><span class="label <?php echo $_smarty_tpl->tpl_vars['tbl_display_label']->value;?>
"><?php echo $_smarty_tpl->tpl_vars['tbl_row_display']->value;?>
</span></a></td>
                <td><?php echo $_smarty_tpl->tpl_vars['tbl_row_adult_price']->value;?>
</td>
                <td><?php echo $_smarty_tpl->tpl_vars['tbl_row_child_price']->value;?>
</td>
                <td><?php echo $_smarty_tpl->tpl_vars['tbl_row_child_wob']->value;?>
</td>
                
                <td><a href="#" onclick="checkStatus(<?php echo $_smarty_tpl->tpl_vars['pack_id']->value;?>
)"><span class="label <?php echo $_smarty_tpl->tpl_vars['tbl_status_label']->value;?>
"><?php echo $_smarty_tpl->tpl_vars['tbl_row_status']->value;?>
</span></a></td>
                <td><?php echo $_smarty_tpl->tpl_vars['tbl_row_date']->value;?>
</td>
                <td>
                    <a href="#" onclick="editTourPackage(<?php echo $_smarty_tpl->tpl_vars['pack_id']->value;?>
)" class="button green">
                        <div class="icon"><span class="ico-pencil"></span></div>
                    </a>
                    <a href="#" onclick="removeTourPackage(<?php echo $_smarty_tpl->tpl_vars['pack_id']->value;?>
,'<?php echo $_smarty_tpl->tpl_vars['tbl_row_title']->value;?>
')" class="button red">
                        <div class="icon"><span class="ico-remove"></span></div>
                    </a>                                              
                </td>
            </tr>     <?php }} ?>