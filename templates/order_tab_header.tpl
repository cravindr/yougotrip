
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
                            <th width="2%">S.No</th>                           
                            <th width="10%">{$tbl_th_invoiceid}</th>
                            <th width="10%">{$tbl_th_date}</th>
                            <th width="10%">{$tbl_th_packtype}</th>
                            <th width="10%">{$tbl_th_packname}</th>
                            <th width="15%">{$tbl_th_totalamount}</th> 
                            <th width="15%">{$tbl_th_balanceamount}</th>
                            <th width="10%">{$tbl_th_status}</th>
                            <th width="20%">{$tbl_th_comments}</th>
                            
                            <!--<th width="80" class="TAC">Actions</th>-->
                        </tr>
                    </thead>
                    <tbody>
                        


