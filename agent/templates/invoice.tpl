            
<form id="validate" method="POST" action="{$post_url}" enctype="multipart/form-data">

<div class="data-fluid">
<!-- Option Selection start -->
		<div class="row-form">
              <div class="span2">Customer Name:</div>
              <div class="span4 input-prepend">
              <span class="add-on blue"><i class="icon-signal icon-white"></i></span>
              <input type="text" name="customername" id="customername" placeholder="customername" auto-complete="false"  data-provide="typeahead" /></div>
        </div>
    
     <div class="row-form">
          <div class="span2">Tour Packages:</div>
          <div class="span4 input-prepend">
          <span class="add-on blue"><i class="icon-signal icon-white"></i></span>
          <input type="text" name="packagetype" id="packagetype" placeholder="Package" auto-complete="false"  data-provide="typeahead" /></div>

          </div>
          
          
          
          
      
     
      <div class="row-form">
          <div class="span2">Adult Quantity:</div>
          <div class="span4 input-prepend">
          <span class="add-on blue"><i class="icon-signal icon-white"></i></span>
          <input type="hidden" name="aprice" id="aprice" placeholder="Package" auto-complete="false"  />
          <input type="text" name="aqty" id="aqty" placeholder="No.of Adult " auto-complete="false"  />
          </div>
      </div>
       <div class="row-form">
          <div class="span2">Child Quantity:</div>
          <div class="span4 input-prepend">
          <span class="add-on blue"><i class="icon-signal icon-white"></i></span>
          <input type="hidden" name="cprice" id="cprice" placeholder="Package" auto-complete="false"  />
          <input type="text" name="cqty" id="cqty" placeholder="No.of Child" auto-complete="false"  />
          </div>
      </div>
      <div class="row-form">
          <div class="span2">Child WOB Quantity:</div>
          <div class="span4 input-prepend">
          <span class="add-on blue"><i class="icon-signal icon-white"></i></span>
          <input type="hidden" name="cwbprice" id="cwbprice" placeholder="Package" auto-complete="false"  />
          <input type="text" name="cwbqty" id="cwbqty" placeholder="No.of Child WOB" auto-complete="false"  />
          </div>
      </div>
      
      <div class="row-form">
          <div class="span6  pagination-centered">
            <button class="btn" type="button" onclick="addRow('dataTable')" >Add</button>
            <button class="btn" type="button" onclick="deleteRow('dataTable')">Delete</button>
            
            <button class="btn btn-info" type="button" onClick="$('#validate').validationEngine('hide');">Hide prompts</button>
          </div>
      </div>
    
     
    
            <TABLE id="dataTable" border="1" style="border-collapse:collapse;">
        <TR>
        <TH>Select</TH>
        <TH>Sr. No.</TH>
        <TH>Item</TH>
        <TH>Adult Qty</TH>
        <TH>Adult Cost</TH>
        <TH>Child Qty</TH>
        <TH>Child Cost</TH>
        <TH>Child WOB Qty</TH>
        <TH>Child WOB Cost</TH>
        <TH formula="cost*qty" summary="sum" >Price</TH>
        </TR>
                <TR>
                    <TD><INPUT type="checkbox" name="chk[]"/></TD>
                    <TD> 1 </TD>
                    <TD> <INPUT type="text" id="item1" name="item[]"  readonly="readonly"  /> </TD>
                    <TD> <INPUT type="text" id="aqty1" name="aqty[]"/> </TD>
                    <TD> <INPUT type="text" id="acost1" name="acost[]" readonly="readonly" /> </TD>
                    <TD> <INPUT type="text" id="cqty1" name="cqty[]"/> </TD>
                    <TD> <INPUT type="text" id="ccost1" name="ccost[]" readonly="readonly" /> </TD>
                    <TD> <INPUT type="text" id="cwbqty1" name="cwbqty[]"/> </TD>
                    <TD> <INPUT type="text" id="cwbcost1" name="cwbcost[]" readonly="readonly" /> </TD>
                    <TD> <INPUT type="text" id="price1" name="price[]" readonly="readonly" /> </TD>
                </TR>

            </TABLE>
            
 	<div class="row-form">
          <div class="span2">Total:</div>
          <div class="span4 input-prepend">
          <span class="add-on blue"><i class="icon-signal icon-white"></i></span>
          <input type="text" name="total" id="total" placeholder="Total Amount" auto-complete="false" readonly="readonly"   />
          </div>
      </div>

</div>


<div class="row-form">
          <div class="span6  pagination-centered">
            <button class="btn" type="button" onclick="totalIt()" >Total</button>
            <button class="btn" type="submit" >Creat Invoice</button>
           </div>
      </div>


<input  type="hidden" name="custid" id="custid" value="" />
<input type="hidden" name="totalpack" id="totalpack" value="0"  />
</form>

  
  <script type='text/javascript' src='jscript/image_upload_btn.js'></script>
  <script type='text/javascript' src='jscript/invoice.js'></script>
 