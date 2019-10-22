            

<div class="span6">
  <form id="validate" method="POST" action="{$user_post_url}" enctype="multipart/form-data">
    <div class="data-fluid">
    <!-- Option Selection start -->
        <div>
			<h4> Agent Details </h4>
            <hr/>
        </div>
      
         <div class="row-form">
              <div class="span3">Title:</div>
              <div class="span9 input-prepend">
              <span class="add-on blue"><i class="icon-signal icon-white"></i></span>
              <input type="text" name="title" id="title" placeholder="Title" value="{$input_title}" class="validate[required,maxSize[100]]"/></div>
           
          </div>
    
          <div class="row-form">
              <div class="span3">First Name:</div>
              <div class="span9 input-prepend">
              <span class="add-on blue"><i class="icon-map-marker icon-white"></i></span>
              <input type="text" name="firstname"  id="firstname" placeholder="First Name" value="{$input_firstname}"   class="validate[required]"/></div>
          </div>
                
          </div>
          
          
          <div class="row-form">
              <div class="span3">Last Name:</div>
              <div class="span9 input-prepend">
              <span class="add-on blue"><i class="icon-arrow-down icon-white"></i></span>
              <input type="text" name="lastname" id="lastname" placeholder="Last Name" value="{$input_lastname}"  class="validate[required]"/>
              </div>
          </div>
          
          <div class="row-form">
              <div class="span3">Address:</div>
              <div class="span9 input-prepend">
              <span class="add-on blue"><i class="icon-arrow-down icon-white"></i></span>
              <input type="text" name="address" id="address" placeholder="Address" value="{$input_address}" class="validate[required]"/>
              </div>
          </div>
          
          <div class="row-form">
              <div class="span3">City:</div>
              <div class="span9 input-prepend">
              <span class="add-on blue"><i class="icon-arrow-down icon-white"></i></span>
              <input type="text" name="city" id="city" placeholder="City" value="{$input_city}" class="validate[required]"/>
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
              <div class="span3">Email:</div>
              <div class="span9 input-prepend">
              <span class="add-on blue"><i class="icon-arrow-down icon-white"></i></span>
              <input type="text" name="email" id="email" placeholder="Email" value="{$input_email}"  class="validate[required]"/>
              </div>
          </div>
          
          <div class="row-form">
              <div class="span3">Income:</div>
              <div class="span9 input-prepend">
              <span class="add-on blue"><i class="icon-arrow-down icon-white"></i></span>
              <input type="text" name="income" id="income" placeholder="Credit Amount" value="{$input_income}" />
              </div>
          </div>
          
          
          <div class="row-form">
              <div class="span3">Phone:</div>
              <div class="span9 input-prepend">
              <span class="add-on blue"><i class="icon-arrow-down icon-white"></i></span>
              <input type="text" name="phone" id="phone" placeholder="Phone" value="{$input_phone}" />
              </div>
          </div>
          
          <div class="row-form">
              <div class="span3">Mobile:</div>
              <div class="span9 input-prepend">
              <span class="add-on blue"><i class="icon-arrow-down icon-white"></i></span>
              <input type="text" name="mobile" id="mobile" placeholder="Mobile" value="{$input_mobile}" />
              </div>
          </div>
          
          <div class="row-form">
              <div class="span3">Mobile 2:</div>
              <div class="span9 input-prepend">
              <span class="add-on blue"><i class="icon-arrow-down icon-white"></i></span>
              <input type="text" name="mobile2" id="mobile2" placeholder="Mobile" value="{$input_mobile2}" />
              </div>
          </div>
          
          <div class="row-form">
              <div class="span3">Fax:</div>
              <div class="span9 input-prepend">
              <span class="add-on blue"><i class="icon-arrow-down icon-white"></i></span>
              <input type="text" name="fax" id="fax" placeholder="Fax" value="{$input_fax}" />
              </div>
          </div>
          
           <div class="row-form">
              <div class="span3">PAN Card Number:</div>
              <div class="span9 input-prepend">
              <span class="add-on blue"><i class="icon-arrow-down icon-white"></i></span>
              <input type="text" name="pan" id="pan" placeholder="Pan Card Number" value="{$input_pan}" />
              </div>
          </div>
          
           <div class="row-form">
              <div class="span3">Website:</div>
              <div class="span9 input-prepend">
              <span class="add-on blue"><i class="icon-arrow-down icon-white"></i></span>
              <input type="text" name="website" id="website" placeholder="Website" value="{$input_website}" />
              </div>
          </div>
         
</div>

<div class="span6">
	  <div>
		<h4> Company Details </h4>
        <hr/>
      </div>
	  <div class="row-form">
          <div class="span3">Name:</div>
          <div class="span9 input-prepend">
          <span class="add-on blue"><i class="icon-signal icon-white"></i></span>
          <input type="text" name="cmp_name" id="cmp_name" placeholder="Company Name" value="{$input_cmp_name}" class="validate[required,maxSize[100]]"/></div>
       
      </div>
    
      <div class="row-form">
          <div class="span3"></div>
          <div class="span9">
            <div  id="imgdisplay_logo" name="imgdisplay_logo" {$display_img_lo}>
                    {$display_img_logo}
            </div>
          </div>
       </div>
      <div class="row-form">
          <div class="span3"> Logo:</div>
          <div class="span9" id="display_logo_main" {$display_logo_main}>
            <div class="fileupload fileupload-new" data-provides="fileupload">
                <div class="fileupload-new thumbnail span2" >
                <img src="{$input_img1}" name="asd.jpg" width="100%"/>
                </div>
                <div class="fileupload-preview fileupload-exists thumbnail" style="max-width: 200px; max-height: 150px; line-height: 20px;"></div>
                <div>
                <span class="btn btn-file"><span class="fileupload-new">Select image</span><span class="fileupload-exists">Change</span>
                <input type="file" name="pro_image1" id="pro_image1" /></span>
                <a href="#" class="btn fileupload-exists" data-dismiss="fileupload">Remove</a>
                </div>
            </div>
           </div>
       </div> 
            
      <div class="row-form">
          <div class="span3">Register Number:</div>
          <div class="span9 input-prepend">
          <span class="add-on blue"><i class="icon-arrow-down icon-white"></i></span>
          <input type="text" name="cmp_reg_no" id="cmp_reg_no" placeholder="Company Register Number" value="{$input_cmp_reg_no}"  class="validate[required]"/>
          </div>
      </div>
      
      <div class="row-form">
          <div class="span3">VAT Number:</div>
          <div class="span9 input-prepend">
          <span class="add-on blue"><i class="icon-arrow-down icon-white"></i></span>
          <input type="text" name="cmp_vat_no" id="cmp_vat_no" placeholder="Compatny VAT Number" value="{$input_cmp_vat}" class="validate[required]"/>
          </div>
      </div>
      
      <div class="row-form">
          <div class="span3">Service Tax Number:</div>
          <div class="span9 input-prepend">
          <span class="add-on blue"><i class="icon-arrow-down icon-white"></i></span>
          <input type="text" name="cmp_service_tax" id="cmp_service_tax" placeholder="Service Tax Number" value="{$input_cmp_service_tax}" class="validate[required]"/>
          </div>
      </div>
      
      <div class="row-form">
          <div class="span3">Address:</div>
          <div class="span9 input-prepend">
          <span class="add-on blue"><i class="icon-arrow-down icon-white"></i></span>
          <input type="text" name="cmp_address" id="cmp_address" placeholder="Company Address" value="{$input_cmp_address}" class="validate[required]"/>
          </div>
      </div>
      
      <div class="row-form">
          <div class="span3">Bank Details:</div>
          <div class="span9 input-prepend">
          <span class="add-on blue"><i class="icon-arrow-down icon-white"></i></span>
          <input type="text" name="cmp_bank_details" id="cmp_bank_details" placeholder="Company Bank Details" value="{$input_cmp_bank_details}" class="validate[required]"/>
          </div>
      </div>
      
      <div class="row-form">
          <div class="span3">PAN Card Number:</div>
          <div class="span9 input-prepend">
          <span class="add-on blue"><i class="icon-arrow-down icon-white"></i></span>
          <input type="text" name="cmp_pan_no" id="cmp_pan_no" placeholder="PAN Card Number" value="{$input_cmp_pan}" class="validate[required]"/>
          </div>
      </div>
      
       <div class="row-form">
       	<hr/>
          <div class="span3">Password:</div>
          <div class="span9 input-prepend">
          <span class="add-on blue"><i class="icon-arrow-down icon-white"></i></span>
          <input type="text" name="pass" id="pass" placeholder="Password" value="" class="validate[required]"/>
          </div>
      </div>
      
</div>

<div class="row-form">
      <div class="span10  pagination-centered">
        <input type="hidden" name="agent_id" value="{$agent_id}" />
        <button class="btn" type="submit">Submit</button>
        <button class="btn" type="reset">Reset</button>
        <button class="btn btn-info" type="button" onClick="$('#validate').validationEngine('hide');">Hide prompts</button>
      </div>
  </div>

 </form>
 
 <script type='text/javascript' src='jscript/agent.js'></script>