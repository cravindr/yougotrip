  <div class="container">		
	<div class="row-fluid custom-padding-package-detail"> 
    <p>
        <form id="validate" class="reg-page" action="enquiry_save.php" method="post">
        <input type="hidden" name="packtitle" value="{$package}" />
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
                                      
            	<button class="btn-u pull-right" type="submit">Send</button>
            </div>
        </form>
        </p>  
    </div>
  </div>