<div class="container">		
	<div class="row-fluid">
    	
        <div class="span2">
            <strong>{$name}</strong>
            <hr />
            <a href="userinfo.php"> Profile </a><br>
            <a href="orderlist.php"> Booked History </a><br>
            <a href="creditbalance.php"> Credit Balance </a><br>
            <a href="transaction.php"> Transaction Detail </a><br>
        </div>

        <div class="span10 log-page">

  <form id="validate" method="POST" action="{$user_post_url}">
    <div class="data-fluid">
    <!-- Option Selection start -->
        
         <div class="row-form">
              <div class="span3">Title:</div>
              <div class="span9 input-prepend">
              <span class="add-on blue"><i class="icon-signal icon-white"></i></span>
              <input type="text" name="title" id="title" placeholder="Title" value="{$input_title}" class="validate[required,maxSize[100]]"/></div>
           
          </div>
    
          <div class="row-form">
              <div class="span3">Sur Name:</div>
              <div class="span9 input-prepend">
              <span class="add-on blue"><i class="icon-map-marker icon-white"></i></span>
              <input type="text" name="firstname"  id="firstname" placeholder="First Name" value="{$input_firstname}"   class="validate[required,ajax[ajaxUserCallPhp]]"/></div>
          </div>
                
          </div>
          
          
          <div class="row-form">
              <div class="span3">Given Name:</div>
              <div class="span9 input-prepend">
              <span class="add-on blue"><i class="icon-arrow-down icon-white"></i></span>
              <input type="text" name="lastname" id="lastname" placeholder="Last Name" value="{$input_lastname}"  class="validate[required]"/>
              </div>
          </div>
          
          <div class="row-form">
              <div class="span3">Email:</div>
              <div class="span9 input-prepend">
              <span class="add-on blue"><i class="icon-arrow-down icon-white"></i></span>
              <input type="email" name="email" id="email" placeholder="Email" value="{$input_email}"  class="validate[required]"/>
              </div>
          </div>
          <div class="row-form">
              <div class="span3">Address:</div>
              <div class="span9 input-prepend">
              <!-- <input type="text" name="address" id="address" placeholder="Address" value="{$input_address}" class="validate[required]"/>-->
             <textarea name="address" id="address" rows="4" cols="50"  placeholder="Address" class="validate[required]" >{$input_address}</textarea>
              </div>
          </div>
          
          <div class="row-form">
              <div class="span3">Place:</div>
              <div class="span9 input-prepend">
              <span class="add-on blue"><i class="icon-arrow-down icon-white"></i></span>
              <input type="text" name="place" id="place" placeholder="Place" value="{$input_place}" class="validate[required]"/>
              </div>
          </div>
          
          <div class="row-form">
              <div class="span3">State:</div>
              <div class="span9 input-prepend">
              <span class="add-on blue"><i class="icon-arrow-down icon-white"></i></span>
              <input type="text" name="state" id="state" placeholder="State" value="{$input_state}" class="validate[required]"/>
              </div>
          </div>
          
          <div class="row-form">
              <div class="span3">Country:</div>
              <div class="span9 input-prepend">
              <span class="add-on blue"><i class="icon-arrow-down icon-white"></i></span>
              <input type="text" name="country" id="country" placeholder="Country" value="{$input_country}" class="validate[required]"/>
              </div>
          </div>
          
          <div class="row-form">
              <div class="span3">Pincode:</div>
              <div class="span9 input-prepend">
              <span class="add-on blue"><i class="icon-arrow-down icon-white"></i></span>
              <input type="text" name="pincode" id="pincode" placeholder="Pincode" value="{$input_pincode}" class="validate[required]"/>
              </div>
          </div>
          
          <div class="row-form">
              <div class="span3">PAN:</div>
              <div class="span9 input-prepend">
              <span class="add-on blue"><i class="icon-arrow-down icon-white"></i></span>
              <input type="text" name="pan" id="pan" placeholder="PAN Card No" value="{$input_pan}"/>
              </div>
          </div>
          
          
          <div class="row-form">
              <div class="span3">Phone:</div>
              <div class="span9 input-prepend">
              <span class="add-on blue"><i class="icon-arrow-down icon-white"></i></span>
              <input type="text" name="phone" id="phone" placeholder="Phone" value="{$input_phone}"/>
              </div>
          </div>
          
          <div class="row-form">
              <div class="span3">Mobile:</div>
              <div class="span9 input-prepend">
              <span class="add-on blue"><i class="icon-arrow-down icon-white"></i></span>
              <input type="text" name="mobile" id="mobile" placeholder="Mobile" value="{$input_mobile}"/>
              </div>
          </div>
          
          
          <div class="row-form">
              <div class="span3">Mobile 2:</div>
              <div class="span9 input-prepend">
              <span class="add-on blue"><i class="icon-arrow-down icon-white"></i></span>
              <input type="text" name="mobile2" id="mobile2" placeholder="Mobile 2" value="{$input_mobile2}"/>
              </div>
          </div>
          
           <div class="row-form">
              <hr/>              
          </div>
          
          
          
          
          
          
          
         
          <div class="row-form">
              <div class="span10  pagination-centered">
                <input type="hidden" name="user_id" value="{$user_id}" />
                <button class="btn" type="submit">Save</button>
                <button class="btn" type="reset">Cancel</button>
                
              </div>
          </div>

    <input type="hidden" name="noofimgbox" id="noofimgbox" value="1" />
 </form>

 </div><!--/span10-->
        
    </div><!--/row-fluid-->
</div><!--/container-->