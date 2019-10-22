<?php /* Smarty version Smarty-3.1.14, created on 2015-12-09 13:26:42
         compiled from "templates\social.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1624756681e02339c20-42848115%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'd50033954d223ddd6ec45531e0dd04b0aeff4c37' => 
    array (
      0 => 'templates\\social.tpl',
      1 => 1379593584,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1624756681e02339c20-42848115',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'callus' => 0,
    'feed' => 0,
    'facebook' => 0,
    'twitter' => 0,
    'googleplus' => 0,
    'pinterest' => 0,
    'linkedin' => 0,
    'vimeo' => 0,
    'youtube' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_56681e0241da42_12300398',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_56681e0241da42_12300398')) {function content_56681e0241da42_12300398($_smarty_tpl) {?>

<form action="social_upd.php" method="post" name="social">
    <div class="data-fluid">
         <div class="row-form">
              <div class="span2">Call Us:</div>
              <div class="span4 input-prepend">
              <span class="add-on blue"><i class="icon-signal icon-white"></i></span>
              <input type="text" name="callus" id="callus" placeholder="Call Us" value="<?php echo $_smarty_tpl->tpl_vars['callus']->value;?>
"   /></div>
          </div>
          <div class="row-form">
              <div class="span2">Feed:</div>
              <div class="span4 input-prepend">
              <span class="add-on blue"><i class="icon-signal icon-white"></i></span>
              <input type="text" name="feed" id="feed" placeholder="Feed"  value="<?php echo $_smarty_tpl->tpl_vars['feed']->value;?>
"    /></div>
          </div>
          <div class="row-form">
              <div class="span2">Facebook:</div>
              <div class="span4 input-prepend">
              <span class="add-on blue"><i class="icon-signal icon-white"></i></span>
              <input type="text" name="facebook" id="facebook" placeholder="Facebook"  value="<?php echo $_smarty_tpl->tpl_vars['facebook']->value;?>
"    /></div>
          </div>
          <div class="row-form">
              <div class="span2">Twitter:</div>
              <div class="span4 input-prepend">
              <span class="add-on blue"><i class="icon-signal icon-white"></i></span>
              <input type="text" name="twitter" id="twitter" placeholder="Twitter"  value="<?php echo $_smarty_tpl->tpl_vars['twitter']->value;?>
"    /></div>
          </div>
          <div class="row-form">
              <div class="span2">Goole Plus:</div>
              <div class="span4 input-prepend">
              <span class="add-on blue"><i class="icon-signal icon-white"></i></span>
              <input type="text" name="googleplus" id="googleplus" placeholder="Goole Plus" value="<?php echo $_smarty_tpl->tpl_vars['googleplus']->value;?>
"     /></div>
          </div>
          <div class="row-form">
              <div class="span2">Pinterest:</div>
              <div class="span4 input-prepend">
              <span class="add-on blue"><i class="icon-signal icon-white"></i></span>
              <input type="text" name="pinterest" id="pinterest" placeholder="Pinterest" value="<?php echo $_smarty_tpl->tpl_vars['pinterest']->value;?>
"     /></div>
          </div>
          <div class="row-form">
              <div class="span2">Linkedin:</div>
              <div class="span4 input-prepend">
              <span class="add-on blue"><i class="icon-signal icon-white"></i></span>
              <input type="text" name="linkedin" id="linkedin" placeholder="Linkedin"  value="<?php echo $_smarty_tpl->tpl_vars['linkedin']->value;?>
"    /></div>
          </div>
          
          <div class="row-form">
              <div class="span2">Vimeo:</div>
              <div class="span4 input-prepend">
              <span class="add-on blue"><i class="icon-signal icon-white"></i></span>
              <input type="text" name="vimeo" id="vimeo" placeholder="Vimeo"  value="<?php echo $_smarty_tpl->tpl_vars['vimeo']->value;?>
"    /></div>
          </div>
          
          <div class="row-form">
            <div class="span2">Youtube:</div>
              <div class="span4 input-prepend">
              <span class="add-on blue"><i class="icon-signal icon-white"></i></span>
              <input type="text" name="youtube" id="youtube" placeholder="Youtube" value="<?php echo $_smarty_tpl->tpl_vars['youtube']->value;?>
"     /></div>
          </div>
          
           
</div>
</div>
           
      <div class="row-form">
          <div class="span6  pagination-centered">
            <button class="btn" type="submit">Save</button>
            
          </div>
      </div>
  </div>

</form><?php }} ?>