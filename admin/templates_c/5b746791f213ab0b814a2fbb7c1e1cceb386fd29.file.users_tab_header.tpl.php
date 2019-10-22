<?php /* Smarty version Smarty-3.1.14, created on 2015-12-08 09:18:47
         compiled from "templates\users_tab_header.tpl" */ ?>
<?php /*%%SmartyHeaderCode:18453566692678f3488-54240273%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '5b746791f213ab0b814a2fbb7c1e1cceb386fd29' => 
    array (
      0 => 'templates\\users_tab_header.tpl',
      1 => 1380019112,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '18453566692678f3488-54240273',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'tbl_title' => 0,
    'tbl_th_first' => 0,
    'tbl_th_last' => 0,
    'tbl_th_place' => 0,
    'tbl_th_country' => 0,
    'tbl_th_status' => 0,
    'tbl_th_date' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_566692679469a0_37213810',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_566692679469a0_37213810')) {function content_566692679469a0_37213810($_smarty_tpl) {?><script src="jscript/manageusers.js" type="text/javascript"></script>
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
                            <th width="15%"><?php echo $_smarty_tpl->tpl_vars['tbl_th_first']->value;?>
</th>
                            <th width="15%"><?php echo $_smarty_tpl->tpl_vars['tbl_th_last']->value;?>
</th>
                            <th width="15%"><?php echo $_smarty_tpl->tpl_vars['tbl_th_place']->value;?>
</th>
                            <th width="15%"><?php echo $_smarty_tpl->tpl_vars['tbl_th_country']->value;?>
</th> 
                            <th width="10%"><?php echo $_smarty_tpl->tpl_vars['tbl_th_status']->value;?>
</th>
                            <th width="15%"><?php echo $_smarty_tpl->tpl_vars['tbl_th_date']->value;?>
</th>
                            <th width="80" class="TAC">Actions</th>
                        </tr>
                    </thead>
                    <tbody>  <?php }} ?>