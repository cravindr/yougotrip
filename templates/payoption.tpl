
<div class="container">		
	<div class="row-fluid">
            <div class="span2">
            <strong> {$name}</strong>
            <hr />
            <a href="userinfo.php"> Profile </a><br>
            <a href="orderlist.php"> Booked History </a><br>
            <a href="creditbalance.php"> Credit Balance </a><br>
            <a href="transaction.php"> Transaction Detail </a><br>
        </div>
        
		<div class="span10">
		<form action="{$form_post_url}" method="post" id="validate" >
        <div class="span7 log-page">
      		 <label class="checkbox">
            <input type="radio" name="payoption" value="advance" class="validate[required]" checked="checked" /><strong> Rs 1000.00</strong> (Advance amount)
            </label>
            <hr />
            <label class="checkbox">
            <input type="radio" name="payoption" value="half" class="validate[required]" /><strong>50% Pay [Rs.{$halfamount}.00] </strong>
            <br />(Your getting Rs.500.00 Discount)
            </label>
            
            <hr />
            <label class="checkbox">
            <input type="radio" name="payoption" value="full" class="validate[required]" /><strong>100% Pay [Rs.{$amount}]</strong>
            <br />(Your getting Rs.1000.00 Discount)
            
            </label> 
       <input type="submit" name="submit" value="Continue.." class="btn-u pull-right" />
        </div>
        
        </form>
		</div>
	</div>
</div>
                        


