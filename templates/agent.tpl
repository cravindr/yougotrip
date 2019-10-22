<div class="container"><!--container-->
<div class="row-fluid"><!--row-fluid-->
<!--POST TREDE OFFERS--->
<form id="validate" method="POST" action="{$user_post_url}" enctype="multipart/form-data">
<div class="span6"><!--span6 starts-->

    <div class="data-fluid">
    <!--Header -->
        <div>
			<h4> <a>Agent Details</a> </h4>
            <hr/>
        </div>
        
        <!--Title-->
         <div class="row-form">
             <div class="span4">Title</div>
               <div class="span8">
              <input type="text" name="title" id="title" placeholder="Title"  class="validate[required,maxSize[100]]"/>
               </div>
         </div><!--end of title-->
         
       <!--First Name-->  
        <div class="row-form">
              <div class="span4">Sur Name</div>
              <div class="span8 ">
              <input type="text" name="firstname"  id="firstname" placeholder="First Name"   class="validate[required]"/>
              </div>
        </div><!--end of First Name-->
                
         
          <!--Last Name-->
          <div class="row-form">
              <div class="span4">Given Name</div>
              <div class="span8">
              <input type="text" name="lastname" id="lastname" placeholder="Last Name"   class="validate[required]"/>
              </div>
          </div><!--end of Last Name-->
          
          <!--Address-->
          <div class="row-form">
              <div class="span4">Address</div>
              <div class="span8">
              <textarea name="address" id="address" value="{$input_address}" class="validate[required]"></textarea>
              <!--<input type="text" name="address" id="address" placeholder="Address" value="{$input_address}" class="validate[required]"/>-->
              </div>
          </div><!--end Address-->
          
          <!--City-->
          <div class="row-form">
              <div class="span4">City</div>
              <div class="span8">
              <input type="text" name="city" id="city" placeholder="City"  class="validate[required]"/>
              </div>
          </div><!--end of City-->
          
          <!--State-->
          <div class="row-form">
              <div class="span4">State</div>
              <div class="span8">
              <input type="text" name="state" id="state" placeholder="State"  class="validate[required]"/>
              </div>
          </div><!----end of State-->
          
          <!--Country-->
          <div class="row-form">
              <div class="span4">Country</div>
              <div class="span8">
              <input type="text" name="country" id="country" placeholder="Country"  class="validate[required]"/>
              </div>
          </div><!--end of Country-->
          
          <!--Pincode-->
          <div class="row-form">
              <div class="span4">Pincode</div>
              <div class="span8">
              <input type="text" name="pincode" id="pincode" placeholder="Pincode"  class="validate[required]"/>
              </div>
          </div><!--end of Pincode-->
          
          <!--Email-->
          <div class="row-form">
              <div class="span4">Email</div>
              <div class="span8">

              <input type="email" name="email" id="email" placeholder="Email"   class=" validate[required,maxSize[100]],ajax[ajaxAgentCallPhp]"/>
              </div>
          </div><!--end of Email-->
          
          <!--Income-->
          <div class="row-form">
              <div class="span4">Income</div>
              <div class="span8">
              <input type="text" name="income" id="income" placeholder="eg.500000"  />
              </div>
          </div><!--end of Income-->
          
          <!--phone-->
          <div class="row-form">
              <div class="span4">Phone</div>
              <div class="span8">
              <input type="text" name="phone" id="phone" placeholder="Phone" />
              </div>
          </div><!--end of Income-->
          
          <!--Mobile-->
          <div class="row-form">
              <div class="span4">Mobile</div>
              <div class="span8">
              <input type="text" name="mobile" id="mobile" placeholder="Mobile"  />
              </div>
          </div><!--end of Mobile-->
          
          <!--Mobile2-->
          <div class="row-form">
              <div class="span4">Mobile 2</div>
              <div class="span8">
              <input type="text" name="mobile2" id="mobile2" placeholder="Mobile 2"  />
              </div>
          </div>
          <!--end of Mobile2-->
          
          <!--Fax-->
          <div class="row-form">
              <div class="span4">Fax</div>
              <div class="span8">
              <input type="text" name="fax" id="fax" placeholder="Fax"  />
              </div>
          </div><!--end of Fax-->
          
          <!--Pan Card Number-->
           <div class="row-form">
              <div class="span4">PAN Card Number</div>
              <div class="span8">
              <input type="text" name="pan" id="pan" placeholder="Pan Card Number"  />
              </div>
          </div><!--end of Pan Card Number-->
          
          <!--Website-->
           <div class="row-form">
              <div class="span4">Website</div>
              <div class="span8">
              <input type="url" name="website" id="website" placeholder="Website"  />
              </div>
          </div><!--end of Website-->
          
          </div><!--end of data fluid-->
         
   </div><!--end of span6-->

<div class="span6"><!--start span6-->
  
  <div class="data-fluid">
   <!--start header-->
	  <div>
        <h4> <a>Company Details </a></h4>
        <hr/>
      </div>
      
      <!--Name-->
	  <div class="row-form">
          <div class="span4">Name</div>
          <div class="span8">
          <input type="text" name="cmp_name" id="cmp_name" placeholder="Company Name"  class="validate[required,maxSize[100]]"/>
          </div>
       
      </div><!--end of Name-->
    
    <!---Logo-->
       
       
      <div class="row-form">
          <div class="span4">
           Logo
          </div>
      <div class="span8" id="display_logo_main" >
            <div class="fileupload fileupload-new" data-provides="fileupload">
              
                               <div class="fileupload-preview fileupload-exists thumbnail" style="max-width: 200px;                                     max-height: 150px; line-height: 20px;">
                              </div>
              <div>
                <span class="btn btn-file btn-info"><span class="fileupload-new">Select image</span><span class="fileupload-exists">Change                </span>
                <input type="file" name="pro_image1" id="pro_image1" /></span>
                <a href="#" class="btn fileupload-exists btn-info" data-dismiss="fileupload">Remove</a>
                </div>
            </div>
           </div>
       </div> <!--end of Logo-->
            
            <!--Register Number-->
      <div class="row-form">
          <div class="span4">Register Number</div>
          <div class="span8">
          <input type="text" name="cmp_reg_no" id="cmp_reg_no" placeholder="Company Register Number"   />
          </div>
      </div><!----end of Register Number--->
      
      <!--Vat Number-->
      <div class="row-form">
          <div class="span4">VAT Number</div>
          <div class="span8">          
          <input type="text" name="cmp_vat_no" id="cmp_vat_no" placeholder="Compatny VAT Number"  />
          </div>
      </div><!--end of Vat Number------>
      
      <!--Service Tax Number-->
      <div class="row-form">
          <div class="span4">Service Tax No</div>
          <div class="span7">          
          <input type="text" name="cmp_service_tax" id="cmp_service_tax" placeholder="Service Tax Number"  />
          </div>
      </div><!--end of Service Tax Number-->
      
      <!--Address-->
      <div class="row-form">
          <div class="span4">Address</div>
          <div class="span8 "> 
          <textarea name="cmp_address" id="cmp_address"  class="validate[required]"></textarea> 
                  
<!--          <input type="text" name="cmp_address" id="cmp_address" placeholder="Company Address" value="{$input_cmp_address}" class="validate[required]"/>-->
          </div>
      </div><!--end of Service---->
      
      <!--Bank Details-->
      <div class="row-form">
          <div class="span4">Bank Details</div>
          <div class="span8">         
          <input type="text" name="cmp_bank_details" id="cmp_bank_details" placeholder="Company Bank Details"  />
          </div>
      </div><!--end of Bank Details-->
      
      <!--Pan Card Number-->
      <div class="row-form">
          <div class="span4">PAN Card Number</div>
          <div class="span8 ">
          <input type="text" name="cmp_pan_no" id="cmp_pan_no" placeholder="PAN Card Number" value="{$input_cmp_pan}" />
          </div>
      </div><!---end of Pan Card Number---->
      
      <hr>
      
      <!--Password-->
       <div class="row-form">
       	      
          <div class="span4">Password</div>
          <div class="span8 ">
            <input type="password" name="pass" id="pass" placeholder="Password" value="" class="validate[required]" />
          </div>
       </div><!--end of Password-->
      
      <hr>
      
      
      <!--Confirm Password-->
      <div class="row-form">
         <div class="span4">Confirm Password</div>
           <div class="span8 ">
          
           <input type="password" name="credit" id="credit" class="validate[required],equals[pass] " placeholder="Confirm Password" />
           </div>
        </div><!--end of Confirm Password-->
      
     
       </div><!--end of data-fluid-->
      
</div><!--end of span6-->

<br><br>

<div class="row-form">
      <div class="span10  pagination-centered">
    
    <div class="controls form-inline offset4">
                <label class="checkbox span4">
                <input type="checkbox" name="termscheck"  id="termscheck" class="validate[required]"/>&nbsp; I read <a href="#">Terms and Conditions</a>                </label>
	</div>
    
	<br><br>

        <button class="btn-u" type="submit">Submit</button>
        <button class="btn-u" type="reset">Reset</button>
        
      </div>
  </div>

 </form>
	

  </div>
  </div>

  


 