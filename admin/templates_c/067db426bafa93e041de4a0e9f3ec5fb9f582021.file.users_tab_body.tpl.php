<?php /* Smarty version Smarty-3.1.14, created on 2015-12-11 12:10:16
         compiled from "templates\users_tab_body.tpl" */ ?>
<?php /*%%SmartyHeaderCode:182185666926795c4c6-15125722%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '067db426bafa93e041de4a0e9f3ec5fb9f582021' => 
    array (
      0 => 'templates\\users_tab_body.tpl',
      1 => 1380019196,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '182185666926795c4c6-15125722',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_56669267991766_13750013',
  'variables' => 
  array (
    'tbl_row_first' => 0,
    'tbl_row_last' => 0,
    'tbl_row_place' => 0,
    'tbl_row_country' => 0,
    'userid' => 0,
    'tbl_status_label' => 0,
    'tbl_row_status' => 0,
    'tbl_row_date' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_56669267991766_13750013')) {function content_56669267991766_13750013($_smarty_tpl) {?>                                    
                           
            <tr>
                <td><input type="checkbox" name="order[]" value="528"/></td>
                <td><a href="#"><?php echo $_smarty_tpl->tpl_vars['tbl_row_first']->value;?>
</a></td>
                <td><?php echo $_smarty_tpl->tpl_vars['tbl_row_last']->value;?>
</td>
                <td><?php echo $_smarty_tpl->tpl_vars['tbl_row_place']->value;?>
</td>
                <td><?php echo $_smarty_tpl->tpl_vars['tbl_row_country']->value;?>
</td>
                
                <td><a href="#" onclick="checkStatus(<?php echo $_smarty_tpl->tpl_vars['userid']->value;?>
)"><span class="label <?php echo $_smarty_tpl->tpl_vars['tbl_status_label']->value;?>
"><?php echo $_smarty_tpl->tpl_vars['tbl_row_status']->value;?>
</span></a></td>
                <td><?php echo $_smarty_tpl->tpl_vars['tbl_row_date']->value;?>
</td>
                <td>
                    <a href="#" onclick="editUser(<?php echo $_smarty_tpl->tpl_vars['userid']->value;?>
)" class="button green">
                        <div class="icon"><span class="ico-pencil"></span></div>
                    </a>
                                            
                </td>
            </tr>     <?php }} ?>