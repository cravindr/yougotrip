                                    
                           
            <tr>
                <td><input type="checkbox" name="order[]" value="528"/></td>
                <td><a href="#">{$tbl_row_first_name}</a></td>
                <td>{$tbl_row_city}</td>
                <td>{$tbl_row_country}</td>                
                <td>{$tbl_row_company}</td>
                <td>{$tbl_row_email}</td>
                <td>{$tbl_row_mobile}</td>
                <td>{$tbl_row_cdate}</td>

                <td>
                    <a href="#" onclick="editAgent({$agent_id})" class="button green">
                        <div class="icon"><span class="ico-pencil"></span></div>
                    </a>
                    <a href="#" onclick="removeAgent({$agent_id},'{$tbl_row_first_name}')" class="button red">
                        <div class="icon"><span class="ico-remove"></span></div>
                    </a>                                              
                </td>
            </tr>     