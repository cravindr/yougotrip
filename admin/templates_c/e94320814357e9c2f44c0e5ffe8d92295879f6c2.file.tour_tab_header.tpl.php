<?php /* Smarty version Smarty-3.1.14, created on 2013-12-26 14:41:51
         compiled from "templates\tour_tab_header.tpl" */ ?>
<?php /*%%SmartyHeaderCode:26452bbf2d7646c55-65500201%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'e94320814357e9c2f44c0e5ffe8d92295879f6c2' => 
    array (
      0 => 'templates\\tour_tab_header.tpl',
      1 => 1382169272,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '26452bbf2d7646c55-65500201',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'tbl_title' => 0,
    'tbl_th_title' => 0,
    'tbl_th_desc' => 0,
    'tbl_th_cat' => 0,
    'tbl_th_display' => 0,
    'tbl_th_adult' => 0,
    'tbl_th_child' => 0,
    'tbl_th_child_wob' => 0,
    'tbl_th_status' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_52bbf2d7938676_15108022',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_52bbf2d7938676_15108022')) {function content_52bbf2d7938676_15108022($_smarty_tpl) {?><script src="jscript/tourpacklist.js" type="text/javascript"></script>
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
                            <th width="25%"><?php echo $_smarty_tpl->tpl_vars['tbl_th_title']->value;?>
</th>
                            <!--<th width="20%"><?php echo $_smarty_tpl->tpl_vars['tbl_th_desc']->value;?>
</th>-->
                            <th width="15"><?php echo $_smarty_tpl->tpl_vars['tbl_th_cat']->value;?>
</th>
                            <th width="7%"><?php echo $_smarty_tpl->tpl_vars['tbl_th_display']->value;?>
</th>
                            <th width="10%"><?php echo $_smarty_tpl->tpl_vars['tbl_th_adult']->value;?>
</th>
                            <th width="10%"><?php echo $_smarty_tpl->tpl_vars['tbl_th_child']->value;?>
</th>          
                            <th width="10%"><?php echo $_smarty_tpl->tpl_vars['tbl_th_child_wob']->value;?>
</th>
                            <th width="7%"><?php echo $_smarty_tpl->tpl_vars['tbl_th_status']->value;?>
</th>
                            
                            <th width="80" class="TAC">Actions</th>
                        </tr>
                    </thead>
                    <tbody>  <?php }} ?>