<script src="jscript/invoicelist.js" type="text/javascript"></script>
	<div class="block">
        <div class="head dblue">
            <div class="icon"><span class="ico-layout-9"></span></div>
            <h2>{$tbl_title}</h2>
            <ul class="buttons">
                <li><a href="#" onClick="source('table_sort_pagination'); return false;"><div class="icon"><span class="ico-info"></span></div></a></li>
            </ul>                                                        
        </div>                
            <div class="data-fluid">
                <table class="table fpTable lcnp" cellpadding="0" cellspacing="0" width="100%">
                    <thead>
                        <tr>
                            <th width="10%"><input type="checkbox" class="checkall"/></th>                           
                            <th width="5%">{$invoiceno}</th>
                            <th width="5%">{$cusomer_id}</th>
                            <th width="20%">{$customer_name}</th>
                            <th width="10%">{$inv_date}</th>
                            <th width="10%">{$amount}</th>
                            <th width="10%">{$discount}</th>
                            <th width="10%">{$totalamount}</th>
                            <th width="90" class="TAC">Actions</th>
                        </tr>
                    </thead>
                    <tbody>  