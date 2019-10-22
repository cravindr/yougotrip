                                    
                           
            <tr>
                
                <td><a onclick="crmView({$customer_id})" data-toggle="modal" href="#customerModal">{$tbl_row_name}</a></td>
                <td>{$tbl_row_city}</td>
                <td>{$tbl_row_mobile}</td>
                <td>{$tbl_row_packages}</td>
                <td>{$tbl_row_comments}</td>
                <td>
                    <a href="#" onclick="editEnquery({$pack_id})" class="button green">
                        <div class="icon"><span class="ico-pencil"></span></div>
                    </a>
                    <a href="#" onclick="removeEnqery({$pack_id},'{$tbl_row_title}')" class="button red">
                        <div class="icon"><span class="ico-remove"></span></div>
                    </a>                                              
                </td>
            </tr>     