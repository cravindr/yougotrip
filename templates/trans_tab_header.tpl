
<div class="container">		
	<div class="row-fluid">
            <div class="span2">
            <strong>{$name}</strong>
            <hr />
            <a href="userinfo.php"> Profile </a><br>
            <a href="orderlist.php"> Booked History </a><br>
            <a href="creditbalance.php"> Credit Balance </a><br>
            <a href="transaction.php"> Transaction Detail </a><br>
        </div>
		<div class="span10">

			<table class="table table-hover table-bordered">
                    <thead>
                        <tr>
                            <th width="2%"><input type="checkbox" class="checkall"/></th>                           
                            <th width="10%">{$tbl_th_transid}</th>
                            <th width="15%">{$tbl_th_date}</th>
                            <th width="10%">{$tbl_th_invoice}</th>
                            <th width="15%">{$tbl_th_credit}</th>
                            <th width="15%">{$tbl_th_debit}</th> 
                            <th width="10%">{$tbl_th_balance}</th>
                            <th width="20%">{$tbl_th_comments}</th>
                            
                            <!--<th width="80" class="TAC">Actions</th>-->
                        </tr>
                    </thead>
                    <tbody>
                        


