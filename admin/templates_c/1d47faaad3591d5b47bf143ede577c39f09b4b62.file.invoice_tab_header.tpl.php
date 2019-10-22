<?php /* Smarty version Smarty-3.1.14, created on 2014-02-27 13:26:17
         compiled from "templates\invoice_tab_header.tpl" */ ?>
<?php /*%%SmartyHeaderCode:23306530eefa176b2e9-96629791%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '1d47faaad3591d5b47bf143ede577c39f09b4b62' => 
    array (
      0 => 'templates\\invoice_tab_header.tpl',
      1 => 1385963229,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '23306530eefa176b2e9-96629791',
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
    'balance' => 0,
    'status' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_530eefa1bb7aa4_24876022',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_530eefa1bb7aa4_24876022')) {function content_530eefa1bb7aa4_24876022($_smarty_tpl) {?><script src="jscript/invoicelist.js" type="text/javascript"></script>
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
                            <th width="5%"></th>
                            <th width="5%"><?php echo $_smarty_tpl->tpl_vars['invoiceno']->value;?>
</th>
                            <th width="5%"><?php echo $_smarty_tpl->tpl_vars['cusomer_id']->value;?>
</th>
                            <th width="15%"><?php echo $_smarty_tpl->tpl_vars['customer_name']->value;?>
</th>
                            <th width="8%"><?php echo $_smarty_tpl->tpl_vars['inv_date']->value;?>
</th>
                            <th width="8%"><?php echo $_smarty_tpl->tpl_vars['amount']->value;?>
</th>
                            <th width="8%"><?php echo $_smarty_tpl->tpl_vars['discount']->value;?>
</th>
                            <th width="8%"><?php echo $_smarty_tpl->tpl_vars['totalamount']->value;?>
</th>
                            <th width="8%"><?php echo $_smarty_tpl->tpl_vars['balance']->value;?>
</th>
                            <th width="5%"><?php echo $_smarty_tpl->tpl_vars['status']->value;?>
</th>
                            <th width="90" class="TAC">Actions</th>
                        </tr>
                    </thead>
                    <tbody>  
                    
             <?php }} ?>