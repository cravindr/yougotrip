                                    
                           
            <tr>
                <td><input type="checkbox" name="order[]" value="528"/></td>
                <td><a onclick="crmView({$customer_id})" data-toggle="modal" href="#customerModal" >{$tbl_row_name}</a></td>
                <td>{$tbl_row_company}</td>
                <td>{$tbl_row_city}</td>
                <td>{$tbl_row_mobile}</td>
                 <!--  <td><a href="#" onclick="checkStatus({$gallery_id})"><span class="label {$tbl_status_label}">{$tbl_row_status}</span></a></td>
                	-->
                <td>
                    <a href="#" onclick="editCRM({$crm_id})" class="button green">
                        <div class="icon"><span class="ico-pencil"></span></div>
                    </a>
                    <a href="#" onclick="removeCRM({$crm_id},'{$tbl_row_name}')" class="button red">
                        <div class="icon"><span class="ico-remove"></span></div>
                    </a>                                              
                </td>
            </tr>     