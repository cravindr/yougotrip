<div class="container">		
	<div class="row-fluid margin-bottom-30">
    	<div class="span6">
        	<form action="checkout.php" method="post" onsubmit="return validatebuy()">
                  <div class="row-fluid">
                  		<div class="span3"> No of Adult Person :<span class="label label-warning">{$adult}</span></div>
                   		<div class="span3"><input type="text" name="adult" id="adult" placeholder="eg. 2"></div>
                   </div>
                 <div class="row-fluid">  
                   <div class="span3"> No of Childern :<span class="label label-warning">{$child}</span> </div>
                   <div class="span3"><input type="text" name="child" id="child" placeholder="eg. 2"></div>
                  </div>
                 <div class="row-fluid">  
                   <div class="span3"> No of Childern with Out Bed :<span class="label label-warning text-right">{$child_wob}</span> </div>
                   <div class="span3"><input type="text" name="childwob" id="childwob" placeholder="eg. 2"></div>
                  </div>
                  <div class="row-fluid">  
                   		<a href="login.php" {$redirect_style_login} class="btn-u pull-right" >Login to Continue Booking</a>
                        <input type="hidden" name="pack_image" value="{$pack_image}" />
                        <input type="hidden" name="tour_pack_id" value="{$tour_pack_id}" />
                        <input type="submit" {$redirect_style_checkout} class="btn-u pull-right" value="Continue Booking" />
                  </div>
			</form>
            <br />

            <!-- Blockquotes -->
            <blockquote>
                <p>{$quote}</p>
            </blockquote>
        </div>
    	<div class="span6">
            <img src="{$pack_image}" width="100%" height="300" />
        </div>
    </div><!--/row-fluid-->


</div>