<?php /* Smarty version Smarty-3.1.14, created on 2019-10-22 07:48:36
         compiled from "templates/lspan9_head.tpl" */ ?>
<?php /*%%SmartyHeaderCode:14953117145dae9834aacb51-36716343%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '11bfb0cf04a551c300ae37c3178f59540ca70fea' => 
    array (
      0 => 'templates/lspan9_head.tpl',
      1 => 1397198388,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '14953117145dae9834aacb51-36716343',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'packagetitle' => 0,
    'packagetype' => 0,
    'tour_pack_id' => 0,
    'desc_head' => 0,
    'desc_body' => 0,
    'includes_head' => 0,
    'includes_body' => 0,
    'excludes_head' => 0,
    'excludes_body' => 0,
    'itinerary_head' => 0,
    'itinerary_body' => 0,
    'date_head' => 0,
    'date_body' => 0,
    'place_desc' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_5dae9834ab8134_95699244',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5dae9834ab8134_95699244')) {function content_5dae9834ab8134_95699244($_smarty_tpl) {?>                <!--############################## Left Part Start ########################################--->
<!--=== Content Part ===-->
<div class="container">		
	<div class="row-fluid custom-padding-package-detail">            
        <div class="span8">
			<!-- Other Questions -->
            <div class="bg_title_oom">
            
            <!--######################################## tab start #############################################-->
            
            
    	<!-- Tabs -->

			<div class="headline " style="background:#E2E2E2; padding-left:9; padding-right:9; margin:0px; height:35px"> <h1><center> <strong> <?php echo $_smarty_tpl->tpl_vars['packagetitle']->value;?>
</strong></center></h1></div>
            
            <div class="headline"><h4><?php echo $_smarty_tpl->tpl_vars['packagetype']->value;?>
</h4>  </div>
            <div class="headline">
            <form action="buynow_session.php" method="post">
            	<input type="hidden" name="tour_pack_id" value="<?php echo $_smarty_tpl->tpl_vars['tour_pack_id']->value;?>
" />
            	<input type="submit" value="Buy Now" class="btn-u btn-large pull-right"> 
            </form>
            </div>
    </div>
    
 <div class="bg_mild_oom " style="background:#F2F2F2; padding:0px; margin:0px">  <!-- Border for Tab-->
            <ul class="nav nav-tabs tabs" >
                <li class="active"><a href="#desc" class="btn-u"  data-toggle="tab">Description</a></li>
                <li><a href="#inc" class="btn-u" data-toggle="tab">Includes</a></li>
                <li><a href="#ite" class="btn-u"  data-toggle="tab">Itinerary</a></li>
                <li><a href="#dac" class="btn-u"  data-toggle="tab">Date & Cost</a></li>
                <li><a href="#exc" class="btn-u"  data-toggle="tab">More Info</a></li>
                <!--<li><a href="#enq" class="btn btn-info"  data-toggle="tab">Enquery</a></li>-->
            </ul>
            <!--/tabs-->
            

            
            <div class="tab-content ">
                <div class="tab-pane active custom-content-package-detail" id="desc">                    
                    <h4><?php echo $_smarty_tpl->tpl_vars['desc_head']->value;?>
</h4>
                    <p><?php echo $_smarty_tpl->tpl_vars['desc_body']->value;?>
</p>
                </div>
                <div class="tab-pane custom-content-package-detail" id="inc">
                 	<h4><?php echo $_smarty_tpl->tpl_vars['includes_head']->value;?>
</h4>
                    <p><?php echo $_smarty_tpl->tpl_vars['includes_body']->value;?>
</p>	
                </div>
                <div class="tab-pane custom-content-package-detail" id="exc">
                    <h4><?php echo $_smarty_tpl->tpl_vars['excludes_head']->value;?>
</h4>
                    <p><?php echo $_smarty_tpl->tpl_vars['excludes_body']->value;?>
</p>
                </div>
                <div class="tab-pane custom-content-package-detail" id="ite">
                	<h4><?php echo $_smarty_tpl->tpl_vars['itinerary_head']->value;?>
</h4>
                    <p><?php echo $_smarty_tpl->tpl_vars['itinerary_body']->value;?>
</p>
                </div>
                <div class="tab-pane custom-content-package-detail" id="dac">
                	<h4><?php echo $_smarty_tpl->tpl_vars['date_head']->value;?>
</h4>
                    <p><?php echo $_smarty_tpl->tpl_vars['date_body']->value;?>
</p>
                </div>
                 <div class="tab-pane custom-content-package-detail" id="enq">                   
                    <p>
                    <form id="validate" class="reg-page" action="enquiry_save.php" method="post">
                    <input type="hidden" name="packtitle" value="<?php echo $_smarty_tpl->tpl_vars['packagetitle']->value;?>
" />
                        <div class="controls span12">    
                            <label>Name <span class="color-red">*</span></label>
                            <input type="text" name="name" placeholder="eg. Mr. Ms." class="span12 validate[required,maxSize[100]]" />
                            <label>Email Address <span class="color-red">*</span></label>
                            <input type="text" name="email" placeholder="eg. example@gmail.com" class="span12 validate[required,maxSize[100]]" />
                            <label>Phone <span class="color-red">*</span></label>
                            <input type="text" name="phone" class="span12 validate[required,maxSize[100]]" />
                            <label>City</label>
                            <input type="text" name="city" class="span12" />
                            <label>Comments</label>
                            <textarea name="comments" class="span12"></textarea>
                            <input type="hidden" name="concat_tour" value="Tour Package Enquiry : " /></div>
                        <button class="btn-u pull-right" type="submit">Send</button>
                    </form>
                    </p>                   
                </div>
                <div class="headline"></div>
            </div><!--/tab-content-->
</div><!-- /Border for Tab-->
            
            <!--######################################## tab End #############################################-->
          <!--######################################## Gallary Start #############################################-->
          <p></p>
            <div class="bg_mild_oom"><p><?php echo $_smarty_tpl->tpl_vars['place_desc']->value;?>
</p></div>
            
        <div class="row-fluid gallery">
       <?php }} ?>