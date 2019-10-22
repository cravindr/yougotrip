<?php /* Smarty version Smarty-3.1.14, created on 2013-09-28 14:06:19
         compiled from "templates\gallery_tab_header.tpl" */ ?>
<?php /*%%SmartyHeaderCode:3052752469503903e95-94193247%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '19335c9b61b5de70b72b895d31f8b901f4771bf7' => 
    array (
      0 => 'templates\\gallery_tab_header.tpl',
      1 => 1379666219,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '3052752469503903e95-94193247',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'tbl_title' => 0,
    'tbl_th_title' => 0,
    'tbl_th_desc' => 0,
    'tbl_th_meta_desc' => 0,
    'tbl_th_status' => 0,
    'tbl_th_meta_keyword' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_52469503b22946_13886700',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_52469503b22946_13886700')) {function content_52469503b22946_13886700($_smarty_tpl) {?><script src="jscript/gallerylist.js" type="text/javascript"></script>
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
                            <th width="20%"><?php echo $_smarty_tpl->tpl_vars['tbl_th_title']->value;?>
</th>
                            <th width="20%"><?php echo $_smarty_tpl->tpl_vars['tbl_th_desc']->value;?>
</th>
                            <th width="20%"><?php echo $_smarty_tpl->tpl_vars['tbl_th_meta_desc']->value;?>
</th>
                            <!-- <th width="20%"><?php echo $_smarty_tpl->tpl_vars['tbl_th_status']->value;?>
</th>  -->
                            <th width="20%"><?php echo $_smarty_tpl->tpl_vars['tbl_th_meta_keyword']->value;?>
</th>  
                            <th width="80" class="TAC">Actions</th>
                        </tr>
                    </thead>
                    <tbody>  <?php }} ?>