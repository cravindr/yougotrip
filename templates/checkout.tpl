<div class="container">		
	<div class="row-fluid">
    	
        <div class="span4">
            <img src="{$pack_image}" width="100%" height="200" />
        </div>
        <form id="validate" class="log-page span8" action="{$form_post_url}" method="post">
        	
            <h3>Check Out</h3>    
            <hr/>
            
            <div class="span12">
            	<div class="span4">
            		
                </div>
                <div class="span3">
                	<h4>Unit Price</h4>
                     <hr/>
                </div>
                <div class="span2">
                	<h4>No</h4>
                     <hr/>
                </div>
                <div class="span3">
                	<h4>Total</h4>
                     <hr/>
                </div>
               
            </div>

            <div class="span12" {$adult_display}>
            	<div class="span4">
            		<h4>Adult</h4>
                </div>
                <div class="span3">
                	{$unit_price_adult}
                </div>
                <div class="span2">
                	{$no_adult}
                </div>
                <div class="span3">
                	{$adult_total}
                </div>
            </div>
           
            <div class="span12" {$child_display}>
           		<div class="span4">
            		<h4>Child</h4>
                </div>
                <div class="span3">
                	{$unit_price_child}
                </div>
                <div class="span2">
              	  {$no_child}
                </div>
                <div class="span3">
                	{$child_total}
                </div>
             </div>
            
            <div class="span12" {$childwob_display}>
            	<div class="span4">
            		<h4>Child With Out Bed</h4>
                </div>
                <div class="span3">
                	{$unit_price_childwob}
                </div>
                <div class="span2">
                	{$no_childwob}
                </div>
                <div class="span3">
                	{$childwob_total}
                </div>
             </div>
             
            <div class="span12">
             
            	<div class="span4">
            		<h4>Total Amount</h4>
                </div>
                <div class="span3">
                	
                </div>
                <div class="span2">
                	
                </div>
               
                <div class="span3">
                <h4>	{$gross_total}</h4>
                </div>
             </div>
            
            
            <input type="submit" class="btn-u pull-right" value="Continue" />
       
        </form>
        
    </div><!--/row-fluid-->
</div>