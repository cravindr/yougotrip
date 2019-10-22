
<div class="container">		
	<div class="row-fluid">
            <div class="span2">
            <strong> {$user_name}</strong>
            <hr />
            <a href="userinfo.php"> Profile </a><br>
            <a href="#"> Booked History </a><br>
            <a href="creditbalance.php"> Credit Balance </a><br>
            <a href="transaction.php"> Transaction Detail </a><br>
        </div>
        
		<div class="span10 row-fluid">
		<br />
        <div class="span7 log-page ">
            <div class="span4">
             	 Your Current Balance:
            </div>
            <div class="span3">
            	<strong>{$balance}</strong>
           </div>
       </div>
       
       

        <div class="span7 log-page ">
            <div class="span4">
             	Your purchased:
            </div>
            <div class="span3">
            	<strong>{$gross_total}</strong>
           </div>
       </div>

        <div class="span7 log-page ">
            <div class="span4">
             	Avaliable Balance:
            </div>
            <div class="span3">
            	<strong>{$net_total}</strong>
           </div>
       </div>
		<div class="span7 log-page ">
        <form action="complete_order.php" method="post" >
        <input type="submit" value="Complete Order" class="btn-u pull-right" />
        </form>
        </div>

       
        </div>
		</div>
	</div>

                        


