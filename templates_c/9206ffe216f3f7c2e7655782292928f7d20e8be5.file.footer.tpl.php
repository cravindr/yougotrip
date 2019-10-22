<?php /* Smarty version Smarty-3.1.14, created on 2019-10-22 07:33:59
         compiled from "templates/footer.tpl" */ ?>
<?php /*%%SmartyHeaderCode:4527381415dae94c73e5cd4-60162462%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '9206ffe216f3f7c2e7655782292928f7d20e8be5' => 
    array (
      0 => 'templates/footer.tpl',
      1 => 1385369392,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '4527381415dae94c73e5cd4-60162462',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'about_us' => 0,
    'stay_connected' => 0,
    'feed' => 0,
    'facebook' => 0,
    'twitter' => 0,
    'googleplus' => 0,
    'pinterest' => 0,
    'linkedin' => 0,
    'vimeo' => 0,
    'address' => 0,
    'phone' => 0,
    'fax' => 0,
    'email' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_5dae94c73f7d43_01405817',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5dae94c73f7d43_01405817')) {function content_5dae94c73f7d43_01405817($_smarty_tpl) {?></div><!--/row-fluid-->
</div><!--/container-->		
<!--=== End Content Part ===-->
        <!--############################## Right Part End########################################--->

<!--=== Footer ===-->
<div class="footer">
	<div class="container">
		<div class="row-fluid">
			<div class="span3">
                <!-- About -->
		        <div class="headline"><h3>About</h3></div>
				<p class="margin-bottom-25"><?php echo $_smarty_tpl->tpl_vars['about_us']->value;?>
</p>

	            
			</div><!--/span3-->
			<div class="span3">
            <!-- Stay Connected -->
		        <div class="headline"><h3>Stay Connected</h3></div>
                <?php echo $_smarty_tpl->tpl_vars['stay_connected']->value;?>

                <ul class="social-icons">

			<!--<li><a href="<?php echo $_smarty_tpl->tpl_vars['feed']->value;?>
" data-original-title="Feed" class="social_rss"></a></li>-->
            <li><a href="<?php echo $_smarty_tpl->tpl_vars['facebook']->value;?>
" data-original-title="Facebook" class="social_facebook"></a></li>
            <li><a href="<?php echo $_smarty_tpl->tpl_vars['twitter']->value;?>
" data-original-title="Twitter" class="social_twitter"></a></li>
            <li><a href="<?php echo $_smarty_tpl->tpl_vars['googleplus']->value;?>
" data-original-title="Goole Plus" class="social_googleplus"></a></li>
           <!-- <li><a href="<?php echo $_smarty_tpl->tpl_vars['pinterest']->value;?>
" data-original-title="Pinterest" class="social_pintrest"></a></li>-->
            <!--<li><a href="<?php echo $_smarty_tpl->tpl_vars['linkedin']->value;?>
" data-original-title="Linkedin" class="social_linkedin"></a></li>-->
           <!-- <li><a href="<?php echo $_smarty_tpl->tpl_vars['vimeo']->value;?>
" data-original-title="Vimeo" class="social_vimeo"></a></li>-->
                </ul>
            </div>
			

			
            <div class="span3">
	            <!-- Monthly Newsletter -->
		        <div class="headline"><h3>Contact Us</h3></div>
                <address>
					<?php echo $_smarty_tpl->tpl_vars['address']->value;?>
 <br />
					Phone: <?php echo $_smarty_tpl->tpl_vars['phone']->value;?>
 <br />
					Fax: <?php echo $_smarty_tpl->tpl_vars['fax']->value;?>
 <br />
					Email: <a href="<?php echo $_smarty_tpl->tpl_vars['email']->value;?>
" class=""><?php echo $_smarty_tpl->tpl_vars['email']->value;?>
</a>
                </address>

                
			</div><!--/span3-->
            
            <div class="span3">
            <!-- Monthly Newsletter -->
		        <div class="headline"><h3>Monthly Newsletter</h3></div>
				<p>Subscribe to our newsletter and stay up to date with the latest news and deals!</p>
				<form class="form-inline">
					<div class="input-append">
						<input type="text" placeholder="Email Address" class="input-medium">
						<button class="btn-u">Subscribe</button>
					</div>
				</form>
            </div><!--/span3-->
		</div><!--/row-fluid-->	
	</div><!--/container-->	
</div><!--/footer-->	
<!--=== End Footer ===-->

<!--=== Copyright ===-->
<div class="copyright">
	<div class="container">
		<div class="row-fluid">
			<div class="span8">						
	            <p>2013 &copy; Yougotrip. ALL Rights Reserved. <a href="#">Privacy Policy</a> | <a href="#">Terms of Service</a></p>
			</div>
			<div class="span4">	
				<a href="http://b2borange.com"><img id="logo-footer" src="assets/images/oom_logo.png" class="pull-right" alt="" /></a>
			</div>
		</div><!--/row-fluid-->
	</div><!--/container-->	
</div><!--/copyright-->	
<!--=== End Copyright ===-->

		      <!-- JS Global Compulsory -->           
			<script type="text/javascript" src="assets/js/jquery-1.8.2.min.js"></script>
			<script type="text/javascript" src="assets/js/modernizr.custom.js"></script>        
			<script type="text/javascript" src="assets/plugins/bootstrap/js/bootstrap.min.js"></script> 
            <script type="text/javascript" src="jscript/Analytics.js"></script>  
            
	</body>
</html> <?php }} ?>