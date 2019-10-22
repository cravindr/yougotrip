<?php /* Smarty version Smarty-3.1.14, created on 2015-12-11 13:01:24
         compiled from "templates\category_tab_header.tpl" */ ?>
<?php /*%%SmartyHeaderCode:90795321522ed30720-78082336%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'ffe786a1aa4fd931b725c6cd79cc0988b8a6ff56' => 
    array (
      0 => 'templates\\category_tab_header.tpl',
      1 => 1379764476,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '90795321522ed30720-78082336',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_5321522ee671a5_76108591',
  'variables' => 
  array (
    'tbl_title' => 0,
    'tbl_th_title' => 0,
    'tbl_th_display' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5321522ee671a5_76108591')) {function content_5321522ee671a5_76108591($_smarty_tpl) {?><script src="jscript/categorylist.js" type="text/javascript"></script>
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
                            <th width="15%"><input type="checkbox" class="checkall"/></th>                           
                            <th width="60%"><?php echo $_smarty_tpl->tpl_vars['tbl_th_title']->value;?>
</th>
                            <th width="10%"><?php echo $_smarty_tpl->tpl_vars['tbl_th_display']->value;?>
</th>
                            <th width="80" class="TAC">Actions</th>
                        </tr>
                    </thead>
                    <tbody>  <?php }} ?>