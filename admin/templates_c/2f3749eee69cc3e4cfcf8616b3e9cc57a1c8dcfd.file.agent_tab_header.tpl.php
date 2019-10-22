<?php /* Smarty version Smarty-3.1.14, created on 2014-03-06 18:16:46
         compiled from "templates\agent_tab_header.tpl" */ ?>
<?php /*%%SmartyHeaderCode:417453186e36d83550-67701373%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '2f3749eee69cc3e4cfcf8616b3e9cc57a1c8dcfd' => 
    array (
      0 => 'templates\\agent_tab_header.tpl',
      1 => 1380350536,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '417453186e36d83550-67701373',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'tbl_title' => 0,
    'tbl_th_name' => 0,
    'tbl_th_city' => 0,
    'tbl_th_country' => 0,
    'tbl_th_company' => 0,
    'tbl_th_email' => 0,
    'tbl_th_mobile' => 0,
    'tbl_th_date' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_53186e370bfd64_77826027',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_53186e370bfd64_77826027')) {function content_53186e370bfd64_77826027($_smarty_tpl) {?><script src="jscript/agentslist.js" type="text/javascript"></script>
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
                            <th width="15%"><?php echo $_smarty_tpl->tpl_vars['tbl_th_name']->value;?>
</th>
                            <th width="10%"><?php echo $_smarty_tpl->tpl_vars['tbl_th_city']->value;?>
</th>
                            <th width="10%"><?php echo $_smarty_tpl->tpl_vars['tbl_th_country']->value;?>
</th>                            
                            <th width="15%"><?php echo $_smarty_tpl->tpl_vars['tbl_th_company']->value;?>
</th> 
                            <th width="15%"><?php echo $_smarty_tpl->tpl_vars['tbl_th_email']->value;?>
</th>
                            <th width="10%"><?php echo $_smarty_tpl->tpl_vars['tbl_th_mobile']->value;?>
</th>
                            <th width="7%"><?php echo $_smarty_tpl->tpl_vars['tbl_th_date']->value;?>
</th>
                            <th width="80" class="TAC">Actions</th>
                        </tr>
                    </thead>
                    <tbody>  <?php }} ?>