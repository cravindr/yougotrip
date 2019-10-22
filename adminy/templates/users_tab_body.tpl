                                    
                           
            <tr>
                <td><input type="checkbox" name="order[]" value="528"/></td>
                <td><a href="#">{$tbl_row_first}</a></td>
                <td>{$tbl_row_last}</td>
                <td>{$tbl_row_place}</td>
                <td>{$tbl_row_country}</td>
                
                <td><a href="#" onclick="checkStatus({$userid})"><span class="label {$tbl_status_label}">{$tbl_row_status}</span></a></td>
                <td>{$tbl_row_date}</td>
                <td>
                    <a href="#" onclick="editUser({$userid})" class="button green">
                        <div class="icon"><span class="ico-pencil"></span></div>
                    </a>
                                            
                </td>
            </tr>     