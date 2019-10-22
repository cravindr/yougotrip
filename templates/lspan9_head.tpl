                <!--############################## Left Part Start ########################################--->
<!--=== Content Part ===-->
<div class="container">		
	<div class="row-fluid custom-padding-package-detail">            
        <div class="span8">
			<!-- Other Questions -->
            <div class="bg_title_oom">
            
            <!--######################################## tab start #############################################-->
            
            
    	<!-- Tabs -->

			<div class="headline " style="background:#E2E2E2; padding-left:9; padding-right:9; margin:0px; height:35px"> <h1><center> <strong> {$packagetitle}</strong></center></h1></div>
            
            <div class="headline"><h4>{$packagetype}</h4>  </div>
            <div class="headline">
            <form action="buynow_session.php" method="post">
            	<input type="hidden" name="tour_pack_id" value="{$tour_pack_id}" />
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
                    <h4>{$desc_head}</h4>
                    <p>{$desc_body}</p>
                </div>
                <div class="tab-pane custom-content-package-detail" id="inc">
                 	<h4>{$includes_head}</h4>
                    <p>{$includes_body}</p>	
                </div>
                <div class="tab-pane custom-content-package-detail" id="exc">
                    <h4>{$excludes_head}</h4>
                    <p>{$excludes_body}</p>
                </div>
                <div class="tab-pane custom-content-package-detail" id="ite">
                	<h4>{$itinerary_head}</h4>
                    <p>{$itinerary_body}</p>
                </div>
                <div class="tab-pane custom-content-package-detail" id="dac">
                	<h4>{$date_head}</h4>
                    <p>{$date_body}</p>
                </div>
                 <div class="tab-pane custom-content-package-detail" id="enq">                   
                    <p>
                    <form id="validate" class="reg-page" action="enquiry_save.php" method="post">
                    <input type="hidden" name="packtitle" value="{$packagetitle}" />
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
            <div class="bg_mild_oom"><p>{$place_desc}</p></div>
            
        <div class="row-fluid gallery">
       