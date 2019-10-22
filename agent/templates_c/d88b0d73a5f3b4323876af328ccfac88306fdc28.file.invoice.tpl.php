<?php /* Smarty version Smarty-3.1.14, created on 2016-06-09 12:16:25
         compiled from "templates\invoice.tpl" */ ?>
<?php /*%%SmartyHeaderCode:90485258fa0615adf4-86311919%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'd88b0d73a5f3b4323876af328ccfac88306fdc28' => 
    array (
      0 => 'templates\\invoice.tpl',
      1 => 1381823062,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '90485258fa0615adf4-86311919',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_5258fa0630d587_71043699',
  'variables' => 
  array (
    'post_url' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5258fa0630d587_71043699')) {function content_5258fa0630d587_71043699($_smarty_tpl) {?>            
<form id="validate" method="POST" action="<?php echo $_smarty_tpl->tpl_vars['post_url']->value;?>
" enctype="multipart/form-data">

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
 <?php }} ?>