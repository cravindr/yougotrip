<div class="container">		
    <div class="row-fluid margin-bottom-30 offset1 span6">
        <form id="validate" class="reg-page" action="register_save.php" method="post">
            <div class="controls">    
            	<label>Title</label>
                <input type="text" name="title" placeholder="eg. Mr. Ms." class="span12 validate[required,maxSize[100]]" />
                <label>First Name</label>
                <input type="text" name="firstname" class="span12 validate[required,maxSize[100]]" />
                <label>Last Name</label>
                <input type="text" name="lastname" class="span12" />
                <label>Email Address <span class="color-red">*</span></label>
                <input type="text" name="email" placeholder="eg. example@gmail.com" class="span12 validate[required,maxSize[100]]" />
            </div>
            <div class="controls">
                <div class="span6">
                    <label>Password <span class="color-red">*</span></label>
                    <input type="password" name="password" class="span12 validate[required,maxSize[100]]" />
                </div>
                <div class="span6">
                    <label>Confirm Password <span class="color-red">*</span></label>
                    <input type="password" name="confirmpassword" class="span12 validate[required,maxSize[100]]" />
                </div>
            </div>
            <label>Address</label>
                <textarea class="span12" name="address"></textarea>
            <label>Place</label>
                <input type="text" name="place" class="span12" />
            <label>State</label>
                <input type="text" name="state" class="span12" />
            <label>Country</label>
                <input type="text" name="country" placeholder="eg. India" class="span12" />
            <label>Pincode</label>
                <input type="text" name="pincode" placeholder="eg. 641654" class="span12" />
            <label>Phone</label>
                <input type="text" name="phone" placeholder="eg. 0422 - 233456" class="span12" />
            <label>Mobile </label>
                <input type="text" name="mobile" placeholder="eg. 9942023734" class="span12" />
            <label>Mobile 2</label>
                <input type="text" name="mobile2" placeholder="eg. 9967345623" class="span12" />   
             
            <div class="controls form-inline">
            	 <br /> <br />
                <label class="checkbox span8"><input type="checkbox" class=""/>&nbsp; I read <a href="#">Terms and Conditions</a></label>
                <button class="btn pull-right" type="submit">Register</button>
            </div>
            <br />
             <br /> <br /> <br />
            
        </form>
    </div><!--/row-fluid-->
</div>