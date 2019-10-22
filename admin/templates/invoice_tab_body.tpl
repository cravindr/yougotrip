                                    
                           
            <tr>
                <td><a href="#"></a></td>
                <td><a onclick="previewInvoice({$invoice_id})" href="#" >{$invoice_id}</a></td>
                <td><a onclick="{$fnView}" data-toggle="modal" href="#customerModal">{$customer_id}</a></td>
                <!--<td><a onclick="customerView({$customer_id})" data-toggle="modal" href="#customerModal">{$customer_name}</a></td>-->
                <td><a onclick="{$fnView}" data-toggle="modal" href="#customerModal">{$customer_name}</a></td>
                <td>{$inv_date}</td>
                <td>{$amount}</td>
                <td>{$discount}</td>
                <td>{$totalamount}</td>
                <td>{$balance}</td>
               <td><a href="#">{$status}</a></td>
                <td>
                {$action}
	                <!--<input type='button' class='btn' onclick='payInvoice({$invoice_id})' value='Pay Now' />
                    <input type='button' class='btn-warning ' onclick='cancelInvoice({$invoice_id})' value='Cancel' />-->
                                                                  
                </td>
            </tr>                                