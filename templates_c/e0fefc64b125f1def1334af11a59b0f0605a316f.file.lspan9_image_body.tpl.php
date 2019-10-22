<?php /* Smarty version Smarty-3.1.14, created on 2019-10-22 07:48:36
         compiled from "templates/lspan9_image_body.tpl" */ ?>
<?php /*%%SmartyHeaderCode:14039207075dae9834ac1aa4-25936700%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'e0fefc64b125f1def1334af11a59b0f0605a316f' => 
    array (
      0 => 'templates/lspan9_image_body.tpl',
      1 => 1379661658,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '14039207075dae9834ac1aa4-25936700',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'img_src' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_5dae9834ac5be1_73644565',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5dae9834ac5be1_73644565')) {function content_5dae9834ac5be1_73644565($_smarty_tpl) {?>
    

            <li class="span3">
                <a class="thumbnail fancybox-button zoomer" data-rel="fancybox-button" title="Project #1" href="<?php echo $_smarty_tpl->tpl_vars['img_src']->value;?>
">
                    <div class="overlay-zoom">	
                        <img src="<?php echo $_smarty_tpl->tpl_vars['img_src']->value;?>
" alt="" />
                        <div class="zoom-icon"></div>					
                    </div>												
                </a>
            </li>

        
  <?php }} ?>