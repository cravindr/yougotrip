
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
		<form action="{$form_post_url}" method="post" name="validate" id="validate">
        <div class="span5 log-page">
      		<label>Enter Amount to Pay now</label>
            <input type="text" name="amount" id="amount" placeholder="Enter Amount eg.{$maxinvamount}" class="validate[required,custom[number],max[{$maxinvamount}]]" />
            
       <input type="submit" name="submit" value="Continue.." class="btn-u pull-right" />
        </div>
        
        </form>
		</div>
	</div>
</div>
                        


