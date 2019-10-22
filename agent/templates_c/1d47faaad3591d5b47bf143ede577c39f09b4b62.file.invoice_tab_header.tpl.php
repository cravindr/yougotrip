<?php /* Smarty version Smarty-3.1.14, created on 2013-10-15 16:54:07
         compiled from "templates\invoice_tab_header.tpl" */ ?>
<?php /*%%SmartyHeaderCode:11970525d25d7866640-09740021%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '1d47faaad3591d5b47bf143ede577c39f09b4b62' => 
    array (
      0 => 'templates\\invoice_tab_header.tpl',
      1 => 1381835750,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '11970525d25d7866640-09740021',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'tbl_title' => 0,
    'invoiceno' => 0,
    'cusomer_id' => 0,
    'customer_name' => 0,
    'inv_date' => 0,
    'amount' => 0,
    'discount' => 0,
    'totalamount' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_525d25d7b305b2_61525773',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_525d25d7b305b2_61525773')) {function content_525d25d7b305b2_61525773($_smarty_tpl) {?><script src="jscript/invoicelist.js" type="text/javascript"></script>
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
                            <th width="10%"><input type="checkbox" class="checkall"/></th>                           
                            <th width="5%"><?php echo $_smarty_tpl->tpl_vars['invoiceno']->value;?>
</th>
                            <th width="5%"><?php echo $_smarty_tpl->tpl_vars['cusomer_id']->value;?>
</th>
                            <th width="20%"><?php echo $_smarty_tpl->tpl_vars['customer_name']->value;?>
</th>
                            <th width="10%"><?php echo $_smarty_tpl->tpl_vars['inv_date']->value;?>
</th>
                            <th width="10%"><?php echo $_smarty_tpl->tpl_vars['amount']->value;?>
</th>
                            <th width="10%"><?php echo $_smarty_tpl->tpl_vars['discount']->value;?>
</th>
                            <th width="10%"><?php echo $_smarty_tpl->tpl_vars['totalamount']->value;?>
</th>
                            <th width="90" class="TAC">Actions</th>
                        </tr>
                    </thead>
                    <tbody>  <?php }} ?>