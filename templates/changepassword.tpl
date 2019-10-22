
<div class="container">		
	<div class="row-fluid">
            <div class="span2">
            <strong> Name</strong>
            <hr />
            <a href="userinfo.php"> Profile </a><br>
            <a href="orderlist.php"> Booked History </a><br>
            <a href="creditbalance.php"> Credit Balance </a><br>
            <a href="transaction.php"> Transaction Detail </a><br>
        </div>
        
		<div class="span10">
		
        <div class="span7 log-page">
        <form action="{$form_post_url}" name="validate" id="validate" method="post">
        <label>Enter Current Password</label>
        <input type="password" name="cpass" id="cpass" placeholder="Current Password" class="validate[required]" />
        <label>Enter New Password</label>
        <input type="password" name="npass" id="npass" placeholder="New Password" class="validate[required]" />
        <label>Enter Conform Password</label>
        <input type="password" name="cnpass" id="cnpass"  placeholder="Conform new Password" class="validate[required,equals[npass]]" />
        <input type="submit" class="btn-u" value="Change" />
        </form>
      
        </div>
		</div>
	</div>
</div>
                        


