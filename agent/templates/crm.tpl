            
<form id="validate" method="POST" action="{$addnewurl}" enctype="multipart/form-data">
<div class="data-fluid">
<!-- Option Selection start -->
    
    
         <div class="row-form">
            <div class="span2">Title</div>
            <div class="span4 input-prepend">
              <span class="add-on blue"><i class="icon-signal icon-white"></i></span>
              <input type="text" name="title" id="title" placeholder="Mr / Ms / Miss / Baby / Master" value="{$title}" class="validate[required,maxSize[256]]"/>
            </div>
          	<div class="span2">First Name</div>
            <div class="span4 input-prepend">
              <span class="add-on blue"><i class="icon-signal icon-white"></i></span>
              <input type="text" name="fname" id="fname" placeholder="First Name.." value="{$first_name}" class="validate[required,maxSize[256]]"/>
            </div>
          </div>
          
          <div class="row-form">
            <div class="span2">Last Name</div>
            <div class="span4 input-prepend">
              <span class="add-on blue"><i class="icon-signal icon-white"></i></span>
              <input type="text" name="lname" id="lname" placeholder="Last Name" value="{$last_name}" class="validate[maxSize[256]]"/>
            </div>
          	<div class="span2">Company Name</div>
            <div class="span4 input-prepend">
              <span class="add-on blue"><i class="icon-signal icon-white"></i></span>
              <input type="text" name="company" id="company" placeholder="Company Name.." value="{$company}" class="validate[maxSize[256]]"/>
            </div>
          </div>
          
          <div class="row-form">
            <div class="span2">Passport Number</div>
            <div class="span4 input-prepend">
              <span class="add-on blue"><i class="icon-signal icon-white"></i></span>
              <input type="text" name="passportno" id="passportno" placeholder="Passport No" value="{$passportno}" class="validate[maxSize[20]]"/>
            </div>
          	<div class="span1">Issue Date</div>
            <div class="span2 ">
            <input type="text" name="idate" id="idate" placeholder="eg.2013/12/30" value="{$issue_date}" class="validate[custom[date]]"/>
            </div>
            <div class="span1">Exp Date</div>
            <div class="span2 ">
              
              <input type="text" name="edate" id="edate" placeholder="eg.2013/12/30" value="{$exp_date}" class="validate[custom[date]]"/>
            </div>
          </div>
          
          
          <div class="row-form">
            <div class="span2">Industries</div>
            <div class="span4 input-prepend">
              <span class="add-on blue"><i class="icon-signal icon-white"></i></span>
              <input type="text" name="industries" id="industries" placeholder="Software / Mills / Dying" value="{$industries}" class="validate[maxSize[256]]"/>
            </div>
          	<div class="span2">Address</div>
            <div class="span4 input-prepend">
              <textarea name="addresss" id="address" placeholder="Address...">{$address}</textarea></div>
            </div>
          </div>
          
           <div class="row-form">
            <div class="span2">City</div>
            <div class="span4 input-prepend">
              <span class="add-on blue"><i class="icon-signal icon-white"></i></span>
              <input type="text" name="city" id="city" placeholder="City.." value="{$city}" class="validate[maxSize[100]]"/>
            </div>
          	<div class="span2">Pin / Zip</div>
            <div class="span4 input-prepend">
              <span class="add-on blue"><i class="icon-signal icon-white"></i></span>
              <input type="text" name="zip" id="zip" placeholder="Pin / Zip Code.." value="{$zip}" class="validate[maxSize[100]]"/>
            </div>
          </div>
          <div class="row-form">
            <div class="span2">State</div>
            <div class="span4 input-prepend">
              <span class="add-on blue"><i class="icon-signal icon-white"></i></span>
              <input type="text" name="state" id="state" placeholder="State.." value="{$state}" class="validate[maxSize[100]]"/>
            </div>
          	<div class="span2">Country</div>
            <div class="span4 input-prepend">
              <span class="add-on blue"><i class="icon-signal icon-white"></i></span>
              <input type="text" name="country" id="country" placeholder="Country.." value="{$country}" class="validate[maxSize[100]]"/>
            </div>
          </div>
          <div class="row-form">
            <div class="span2">Annual Income Rs..</div>
            <div class="span4 input-prepend">
              <span class="add-on blue"><i class="icon-signal icon-white"></i></span>
              <input type="text" name="income" id="income" placeholder="eg. 150000.00" value="{$income}" class="validate[maxSize[10]]"/>
            </div>
          	<div class="span2">Phone</div>
            <div class="span4 input-prepend">
              <span class="add-on blue"><i class="icon-signal icon-white"></i></span>
              <input type="text" name="phone" id="phone" placeholder="eg. 0422 3210982" value="{$phone}" class="validate[maxSize[15]]"/>
            </div>
          </div>
          <div class="row-form">
            <div class="span2">Mobile</div>
            <div class="span4 input-prepend">
              <span class="add-on blue"><i class="icon-signal icon-white"></i></span>
              <input type="text" name="mobile" id="mobile" placeholder="eg. 9787616123" value="{$mobile}" class="validate[maxSize[15]]"/>
            </div>
          	<div class="span2">Mobile 2</div>
            <div class="span4 input-prepend">
              <span class="add-on blue"><i class="icon-signal icon-white"></i></span>
              <input type="text" name="mobile2" id="mobile2" placeholder="eg. 9787616123" value="{$mobile2}" class="validate[maxSize[15]]"/>
            </div>
          </div>
          <div class="row-form">
            <div class="span2">Fax</div>
            <div class="span4 input-prepend">
              <span class="add-on blue"><i class="icon-signal icon-white"></i></span>
              <input type="text" name="fax" id="fax" placeholder="eg.0422 4218415" value="{$fax}" class="validate[maxSize[15]]"/>
            </div>
          	<div class="span2">E-Mail</div>
            <div class="span4 input-prepend">
              <span class="add-on blue"><i class="icon-signal icon-white"></i></span>
              <input type="text" name="email" id="email" placeholder="eg.info@yougotrio.com" value="{$email}" class="validate[maxSize[100]]"/>
            </div>
          </div>
          <div class="row-form">
                <div class="span2">Website</div>
                <div class="span4 input-prepend">
                  <span class="add-on blue"><i class="icon-signal icon-white"></i></span>
                  <input type="text" name="website" id="website" placeholder="eg.0422 4218415" value="{$website}" class="validate[maxSize[100]]"/>
                </div>
                 <div class="span2">Next Calling Date</div>
                <div class="span4 input-prepend">
                  <span class="add-on blue"><i class="icon-signal icon-white"></i></span>
                  <input type="text" name="ncdate" id="ncdate" placeholder="eg.01/12/2013" value="{$ncdate}" class="validate[maxSize[11],custom[date]]"/>
                </div>
                
          </div>



          
          
          <div class="row-form">
          <div class="span2">Lead Source</div>
                <div class="span4 input-prepend">
                  <span class="add-on blue"><i class="icon-signal icon-white"></i></span>
                  <input type="text" name="lsource" id="lsource" placeholder="eg. News paper / TV Ads / Search " value="{$lead_source}" class="validate[maxSize[100]]"/>
                </div>
          	 <div class="span2">Comments</div>
             <div class="span4 input-prepend">
              <textarea name="desc" id="desc" placeholder="Comments...">{$desc}</textarea>
              </div>
              
          </div>          
          
          
          
          
          
         <div class="row-form">
          <div class="span6  pagination-centered">

            <button class="btn" type="submit">Submit</button>
            <button class="btn" type="reset">Reset</button>
            <button class="btn btn-info" type="button" onClick="$('#validate').validationEngine('hide');">Hide prompts</button>
          </div>
      </div>
  </div>
<input type="hidden" id="datep" name="datep" value="" />
</form>
  
