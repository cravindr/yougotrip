<?php /* Smarty version Smarty-3.1.14, created on 2019-10-22 07:47:47
         compiled from "templates/list_style3.tpl" */ ?>
<?php /*%%SmartyHeaderCode:12470023985dae94c73d7a69-35201365%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '725f60b9c94ef55b773da5be460a7658e6263724' => 
    array (
      0 => 'templates/list_style3.tpl',
      1 => 1571723239,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '12470023985dae94c73d7a69-35201365',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_5dae94c73df568_93519648',
  'variables' => 
  array (
    'img_src' => 0,
    'pack_title' => 0,
    'pack_id' => 0,
    'pack_category' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5dae94c73df568_93519648')) {function content_5dae94c73df568_93519648($_smarty_tpl) {?><!--</div>--><!--/row-->
	<!-- //End Recent Works -->
    
    <!-- Transform Thumbnail -->
 <!--   <div class="row-fluid">
        <div class="headline"><h3>Indian Tour</h3></div>
        <ul class="thumbnails"> -->
        
        
            <li class="span3 thumbnail-style thumbnail-kenburn">
                <div class="overflow-hidden"><img src="<?php echo $_smarty_tpl->tpl_vars['img_src']->value;?>
" alt="" /></div>
                <strong><a href="#"><?php echo $_smarty_tpl->tpl_vars['pack_title']->value;?>
</a></strong>
               
                <p><a class="btn-u btn-u-small" onclick="displayPackDetails(<?php echo $_smarty_tpl->tpl_vars['pack_id']->value;?>
,'<?php echo $_smarty_tpl->tpl_vars['pack_category']->value;?>
')">Read more</a></p>
                
            </li>
       <!--</ul>--><!--/thumbnails-->
    <!--</div>--><!--/row-fluid-->
<?php }} ?>