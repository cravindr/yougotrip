<?php /* Smarty version Smarty-3.1.14, created on 2016-06-09 12:14:18
         compiled from "templates\agent_trans_tab_header.tpl" */ ?>
<?php /*%%SmartyHeaderCode:299025759417a1ae068-18964353%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '566f4a0941a6ec99914fda8359738122f9b4324b' => 
    array (
      0 => 'templates\\agent_trans_tab_header.tpl',
      1 => 1385541804,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '299025759417a1ae068-18964353',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'tbl_title' => 0,
    'tbl_th_sno' => 0,
    'tbl_th_pay_id' => 0,
    'tbl_th_date' => 0,
    'tbl_th_credit' => 0,
    'tbl_th_debit' => 0,
    'tbl_th_balance' => 0,
    'tbl_th_comments' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_5759417a3554f1_04733587',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5759417a3554f1_04733587')) {function content_5759417a3554f1_04733587($_smarty_tpl) {?>
	<div class="block">
        <div class="head dblue">
            <div class="icon"><span class="ico-layout-9"></span></div>
            <h2><?php echo $_smarty_tpl->tpl_vars['tbl_title']->value;?>
</h2>
            <ul class="buttons">
                <li><a href="#" onClick="source('table_sort_pagination'); return false;"><div class="icon"><span class="ico-info"></span></div></a></li>
            </ul>                                                        
        </div>                
            <div class="data-fluid">
                <table class="table fpTable lcnp" cellpadding="0" cellspacing="0" width="100%">
                    <thead>
                        <tr>
                            <th width="15%"><?php echo $_smarty_tpl->tpl_vars['tbl_th_sno']->value;?>
</th>                         
                            <th width="15%"><?php echo $_smarty_tpl->tpl_vars['tbl_th_pay_id']->value;?>
</th>
                            <th width="10%"><?php echo $_smarty_tpl->tpl_vars['tbl_th_date']->value;?>
</th>
                            <th width="10%"><?php echo $_smarty_tpl->tpl_vars['tbl_th_credit']->value;?>
</th>                            
                            <th width="15%"><?php echo $_smarty_tpl->tpl_vars['tbl_th_debit']->value;?>
</th> 
                            <th width="15%"><?php echo $_smarty_tpl->tpl_vars['tbl_th_balance']->value;?>
</th> 
                            <th width="15%"><?php echo $_smarty_tpl->tpl_vars['tbl_th_comments']->value;?>
</th>
                            
                        </tr>
                    </thead>
                    <tbody>  <?php }} ?>