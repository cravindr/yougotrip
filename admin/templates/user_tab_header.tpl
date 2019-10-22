            

<div class="span4">
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
              <div class="span3">Email:</div>
              <div class="span9 input-prepend">
              <span class="add-on blue"><i class="icon-arrow-down icon-white"></i></span>
              <input type="text" name="email" id="email" placeholder="Email" value="{$input_email}"  class="validate[required]"/>
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
              <div class="span3">Credit:</div>
              <div class="span9 input-prepend">
              <span class="add-on blue"><i class="icon-arrow-down icon-white"></i></span>
              <input type="text" name="credit" id="credit" placeholder="Credit Amount" value="" />
              </div>
          </div>
          
          
          <div class="row-form">
              <div class="span3">Debit:</div>
              <div class="span9 input-prepend">
              <span class="add-on blue"><i class="icon-arrow-down icon-white"></i></span>
              <input type="text" name="debit" id="debit" placeholder="Debit Amount" value="" />
              </div>
          </div>
          
          <div class="row-form">
              <div class="span3">Comments:</div>
              <div class="span9 input-prepend">
              <span class="add-on blue"><i class="icon-arrow-down icon-white"></i></span>
              <input type="text" name="comments" id="comments" placeholder="Comments" value="" />
              </div>
          </div>
         
          <div class="row-form">
              <div class="span10  pagination-centered">
                <input type="hidden" name="user_id" value="{$user_id}" />
                <button class="btn" type="submit">Submit</button>
                <button class="btn" type="reset">Reset</button>
                <button class="btn btn-info" type="button" onClick="$('#validate').validationEngine('hide');">Hide prompts</button>
              </div>
          </div>

    <input type="hidden" name="noofimgbox" id="noofimgbox" value="1" />
 </form>
</div>

<div class="span8">
	<div class="block">
        <div class="head dblue">
            <div class="icon"><span class="ico-layout-9"></span></div>
            <h2>{$tbl_title}</h2>
            <ul class="buttons">
                <li><a href="#" onClick="source('table_sort_pagination'); return false;"><div class="icon"><span class="ico-info"></span></div></a></li>
            </ul>                                                        
        </div>                
            <div class="data-fluid">
                <table class="table fpTable lcnp" cellpadding="0" cellspacing="0" width="100%">
                    <thead>
                        <tr>
                            <th width="2%"><input type="checkbox" class="checkall"/></th>                           
                            <th width="10%">{$tbl_th_transid}</th>
                            <th width="15%">{$tbl_th_date}</th>
                            <th width="15%">{$tbl_th_credit}</th>
                            <th width="15%">{$tbl_th_debit}</th> 
                            <th width="10%">{$tbl_th_balance}</th>
                            <th width="20%">{$tbl_th_comments}</th>
                            <th width="10%">{$tbl_th_invoice}</th>
                            <!--<th width="80" class="TAC">Actions</th>-->
                        </tr>
                    </thead>
                    <tbody>  