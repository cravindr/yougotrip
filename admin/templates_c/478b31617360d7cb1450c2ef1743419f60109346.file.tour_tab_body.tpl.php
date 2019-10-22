<?php /* Smarty version Smarty-3.1.14, created on 2013-12-26 14:41:51
         compiled from "templates\tour_tab_body.tpl" */ ?>
<?php /*%%SmartyHeaderCode:425752bbf2d7a24039-58416292%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '478b31617360d7cb1450c2ef1743419f60109346' => 
    array (
      0 => 'templates\\tour_tab_body.tpl',
      1 => 1382169202,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '425752bbf2d7a24039-58416292',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'tbl_row_title' => 0,
    'tbl_row_desc' => 0,
    'tbl_row_cat' => 0,
    'pack_id' => 0,
    'current_display' => 0,
    'tbl_display_label' => 0,
    'tbl_row_display' => 0,
    'tbl_row_adult_price' => 0,
    'tbl_row_child_price' => 0,
    'tbl_row_child_wob' => 0,
    'tbl_status_label' => 0,
    'tbl_row_status' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_52bbf2d7b13f41_46985598',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_52bbf2d7b13f41_46985598')) {function content_52bbf2d7b13f41_46985598($_smarty_tpl) {?>                                    
                           
            <tr>
                <td><input type="checkbox" name="order[]" value="528"/></td>
                <td><a href="#"><?php echo $_smarty_tpl->tpl_vars['tbl_row_title']->value;?>
</a></td>
                <!--<td><?php echo $_smarty_tpl->tpl_vars['tbl_row_desc']->value;?>
</td>-->
                <td><?php echo $_smarty_tpl->tpl_vars['tbl_row_cat']->value;?>
</td>
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