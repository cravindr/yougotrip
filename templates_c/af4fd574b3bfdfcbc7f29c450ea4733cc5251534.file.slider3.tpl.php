<?php /* Smarty version Smarty-3.1.14, created on 2019-10-22 07:33:59
         compiled from "templates/slider3.tpl" */ ?>
<?php /*%%SmartyHeaderCode:19019873095dae94c73cdcc2-33165279%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'af4fd574b3bfdfcbc7f29c450ea4733cc5251534' => 
    array (
      0 => 'templates/slider3.tpl',
      1 => 1397197768,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '19019873095dae94c73cdcc2-33165279',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_5dae94c73ce663_06610694',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5dae94c73ce663_06610694')) {function content_5dae94c73ce663_06610694($_smarty_tpl) {?><!--=== Slider ===-->
<div class="container">
 
<div class="row-fluid " style="background:#FCFCFC" >

<div class="span7" >
	<div class="row-fluid" >
        <form  class="bg_thick_oom" action="searchtour.php" method="post" style=" padding-top:0px; padding-left:9px; padding-right:9px; ">
        	
          <!-- <p  style="color:#F60;font-size:20px;" > Search Tour Packages</p>-->
          <!--<img src="image/search_trour_packages.jpg"  />-->
          <div class="headline " style="background:#E2E2E2; padding:0px; margin:0px; height:37px; vertical-align:middle"> <h1><center><strong>SEARCH & BOOK</strong> </center></h1></div>
          <div style="background-color:#F60">
          </div>
           
        <div>
        <br>
        <h4>
        <input type="radio" name="tourtype" value="international" /> <strong>International</strong>
        <input type="radio" name="tourtype" value="domestioc" /> <strong>Domestic</strong>
        </h4>
        </div>
        <HR />
        <br>
      <p></p>
        <br>
       
        
        <div class="row-fluid ">
         <div class="span6" >
         
          		<input type="radio" name="searchtype" value="country" />
              <strong> City/Country</strong>
         
         	  
              <input type="text"  name="country" id="country" placeholder="City / Country" />
             
         </div>
         <div class="span6" >
         
         		<input type="radio" name="searchtype" value="packcode" />
             <strong>   Package Code</strong>
         
              <input type="text"  name="packcode" id="packcode" placeholder="Pack Code" />
             
         </div>
            </div>
            
                
            <!--<div >
                <label><strong>Package Type</strong></label>
                <select name="packtype" id="packtype" >
				</select>
            </div>-->
            
            <!--<div >
               <label><strong>Location</strong></label>
                <input class=" validate[required,maxSize[100]]" type="text" name="city" placeholder="city">
            </div>-->
            
            <hr />
           <!-- <div>
            <h4>
            <strong>Theme</strong></h4>
            <select name="theme" id="theme" >
        	</select>
            </div> -->
         
         <div class="controls form-inline" >

               <button class="btn-u pull-right" type="submit">Search</button>
               
         </div>
         <p>&nbsp;</p>
         
       </form>
       
            
    </div><!--/row-fluid-->

</div>

<div class="span5 row-form  bg_thick_oom " style="padding:0px">
<div class="slider-inner">
    <div id="da-slider" class="da-slider">
        <div class="da-slide">
            <img src="image/yougotrip-slide1.jpg" alt="" />
        </div>
        <div class="da-slide">
            <img src="image/yougotrip-slide2.jpg" alt="" />
        </div>
        <div class="da-slide">
            <img src="image/yougotrip-slide3.jpg" alt="" />
        </div>
        
        
        <nav class="da-arrows">
            <span class="da-arrows-prev"></span>
            <span class="da-arrows-next"></span>        
        </nav>
    </div><!--/da-slider-->
</div><!--/slider-->
<!--=== End Slider ===-->
</div>
</div>
</div>
</div><?php }} ?>