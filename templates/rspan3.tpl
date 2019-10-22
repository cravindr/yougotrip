 <!--############################## Right Part Start########################################--->
		<div class="span4 bg_mild_oom" style="background:#FAFAFA; padding-left:2; padding-right:2; padding-top:2px"> 
        
            
            <!--<div class="headline"><h3>Enquiry</h3></div>-->
            <!--<div class="headline " style="background:#F2F2F2; padding:0px; margin:0px"> <h1><center>Enquiry</center></h1></div>-->
            <div class="headline " style="background:#E2E2E2; ;height:37px"> <h1><center> <strong> Enquiry</strong></center></h1></div>
            <p>
                    <form id="validate"  action="enquiry_save.php" method="post">
                    <input type="hidden" name="packtitle" value="{$packagetitle}" />
                        <div class="controls span12">    
                            <label>Name <span class="color-red">*</span></label>
                            <input type="text" name="name" placeholder="eg. Mr. Ms." class="span10 validate[required,maxSize[100]]" />
                            <label>Email Address <span class="color-red">*</span></label>
                            <input type="text" name="email" placeholder="eg. example@gmail.com" class="span10 validate[required,maxSize[100]]" />
                            <label>Phone <span class="color-red">*</span></label>
                            <input type="text" name="phone" class="span10 validate[required,maxSize[100]]" />
                            <label>City</label>
                            <input type="text" name="city" class="span10" />
                            <label>Comments</label>
                            <textarea name="comments" class="span10"></textarea>
                            <input type="hidden" name="concat_tour" value="Tour Package Enquiry : " /></div>
                            <div style="padding-right:9px">
                        <button class="btn-u pull-right" type="submit">Send</button>
                        </div>
                        <br />
                        <p>&nbsp; </p>
                    </form>
                    </p>
            <p></p>
            	

        	 <!--Business Hours 
            <div class="headline"><h3>Business Hours</h3></div>
            {$business_hours}-->
            
            

        	<!-- Why we are? -->
           <!-- <div class="headline"><h3>Why we are?</h3></div>
            {$why_we_are}-->
            
            
        </div><!--/span4-->  
       <div ><p>&nbsp; </p></div>
        
        <div  class="span4 bg_mild_oom" style="background:#FAFAFA;  padding-left:2; padding-right:2; padding-top:2px" >
        <!-- Contacts -->
          
         <!--<div class="headline " style="background:#F2F2F2; padding:0px; margin:0px"> <h1><center>Contacts</center></h1></div>-->
         <div class="headline " style="background:#E2E2E2;  height:37px"> <h1><center> <strong> Contacts</strong></center></h1></div>
          <!--  <div class="headline"><h3>Contacts</h3></div>-->
          <div style="padding-left:10px"> <!--for align address text-->
            <ul class="unstyled who margin-bottom-20">
                <li><a href="#"><i class="icon-home"></i>{$address}</a></li>
                <li><a href="#"><i class="icon-envelope-alt"></i>{$email}</a></li>
                <li><a href="#"><i class="icon-phone-sign"></i>{$phone}</a></li>
                <li><a href="#"><i class="icon-globe"></i>{$domainname}</a></li>
            </ul>
            </div><!--/for align address text-->
        </div>          		
    </div><!--/row-fluid-->
</div><!--/container-->		
<!--=== End Content Part ===-->
        <!--############################## Right Part End########################################--->