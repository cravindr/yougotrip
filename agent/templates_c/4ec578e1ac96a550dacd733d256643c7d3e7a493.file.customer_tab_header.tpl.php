<?php /* Smarty version Smarty-3.1.14, created on 2016-06-10 09:54:07
         compiled from "templates\customer_tab_header.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1729152590679119317-61697192%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '4ec578e1ac96a550dacd733d256643c7d3e7a493' => 
    array (
      0 => 'templates\\customer_tab_header.tpl',
      1 => 1381565514,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1729152590679119317-61697192',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_5259067935d2f9_93608178',
  'variables' => 
  array (
    'tbl_title' => 0,
    'tbl_th_name' => 0,
    'tbl_th_company' => 0,
    'tbl_th_meta_city' => 0,
    'tbl_th_status' => 0,
    'tbl_th_meta_mobile' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5259067935d2f9_93608178')) {function content_5259067935d2f9_93608178($_smarty_tpl) {?><script src="jscript/customerlist.js" type="text/javascript"></script>
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
                            <th width="5%"><input type="checkbox" class="checkall"/></th>                           
                            <th width="20%"><?php echo $_smarty_tpl->tpl_vars['tbl_th_name']->value;?>
</th>
                            <th width="20%"><?php echo $_smarty_tpl->tpl_vars['tbl_th_company']->value;?>
</th>
                            <th width="20%"><?php echo $_smarty_tpl->tpl_vars['tbl_th_meta_city']->value;?>
</th>
                            <!-- <th width="20%"><?php echo $_smarty_tpl->tpl_vars['tbl_th_status']->value;?>
</th>  -->
                            <th width="20%"><?php echo $_smarty_tpl->tpl_vars['tbl_th_meta_mobile']->value;?>
</th>  
                            <th width="80" class="TAC">Actions</th>
                        </tr>
                    </thead>
                    <tbody>  <?php }} ?>