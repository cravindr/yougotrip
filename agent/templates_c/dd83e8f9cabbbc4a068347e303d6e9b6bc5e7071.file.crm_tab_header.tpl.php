<?php /* Smarty version Smarty-3.1.14, created on 2013-10-12 13:10:59
         compiled from "templates\crm_tab_header.tpl" */ ?>
<?php /*%%SmartyHeaderCode:228575258fd0b2479c3-93029142%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'dd83e8f9cabbbc4a068347e303d6e9b6bc5e7071' => 
    array (
      0 => 'templates\\crm_tab_header.tpl',
      1 => 1380262903,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '228575258fd0b2479c3-93029142',
  'function' => 
  array (
  ),
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
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_5258fd0b4cc621_52566348',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5258fd0b4cc621_52566348')) {function content_5258fd0b4cc621_52566348($_smarty_tpl) {?><script src="jscript/crmlist.js" type="text/javascript"></script>
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