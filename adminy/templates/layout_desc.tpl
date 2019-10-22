<form action="{$posturl}" method="post" name="content">
<div class="block">
        <div class="head">                                
            <h2>Describe Page</h2>                          
        </div>  
        <div class="data-fluid tabbable tabs-left">                    
            <ul class="nav nav-tabs">
                <li class="active"><a href="#bh" data-toggle="tab">Business Hours</a></li>
                <li><a href="#sc" data-toggle="tab">Stay Connected</a></li>
                <li><a href="#vp" data-toggle="tab">Visa Processs</a></li>
                <li><a href="#tb" data-toggle="tab">Ticket Booking</a></li>
                <li><a href="#wwa" data-toggle="tab">Why We are</a></li>
            </ul>
            <div class="tab-content">
                <div class="tab-pane active" id="bh">
                <h4>Describe Your Business Hours</h4>
                    <div class="data-fluid editor">
                     <textarea id="businesshour"  name="businesshour" style="height: 400px;">{$business_hours}</textarea>
                    </div>
                </div>
                <div class="tab-pane" id="sc">
                <h4>Describe Stay Connected</h4>
                    <div class="data-fluid editor">
                     <textarea id="stayconnected"  name="stayconnected" style="height: 300px;">{$stayconnected}</textarea>
                    </div>
                </div>
                <div class="tab-pane" id="vp">
                <h4>Describe Visa Processing</h4>
                    <div class="data-fluid editor">
                     <textarea id="visaprocessing"  name="visaprocessing" style="height: 300px;">{$visa_process}</textarea>
                    </div>
                </div>
                <div class="tab-pane" id="tb">
                    <h4>Describe Ticket Booking</h4>
                    <div class="data-fluid editor">
                     <textarea id="ticketbooking"  name="ticketbooking" style="height: 300px;">{$ticket_booking}</textarea>
                    </div>
                </div>
                <div class="tab-pane" id="wwa">
                <h4>Describe Why we are</h4>
                    <div class="data-fluid editor">
                     <textarea id="whyweare"  name="whyweare" style="height: 300px;">{$why_we_are}</textarea>
                    </div>
                </div>
                
                
                
            </div>
        </div>
</div>
		<div class="row-form">
          <div class="span6  pagination-centered">
          <!--  <button class="btn btn-info" type="button" onClick="$('#validate').validationEngine('hide');">Hide prompts</button>-->
            <button class="btn" type="submit" name="submit" id="submit">Save..</button>
            <!--<button class="btn" type="reset">Reset</button>-->

          </div>

      </div>
</form>
 <script type='text/javascript' src='jscript/layout_desc.js'></script>