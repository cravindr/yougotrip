
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
		<form action="{$form_post_url}" method="post">
        <div class="span5 log-page">
      		 <label class="checkbox">
            <input type="radio" name="paymode" value="account" checked="checked" /><strong> Account</strong>
            </label>
            <hr />
            <label class="checkbox">
            <input type="radio" name="paymode" value="gateway" /><strong>Payment Gateway </strong>
            </label>
            
            
       <input type="submit" name="submit" value="Continue.." class="btn-u pull-right" />
        </div>
        
        </form>
		</div>
	</div>
</div>
                        


