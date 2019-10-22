                                    
                           
            <tr>
                <td><input type="checkbox" name="order[]" value="528"/></td>
                <td><a href="#">{$tbl_row_title}</a></td>
                <!--<td>{$tbl_row_desc}</td>-->
                <td>{$tbl_row_cat}</td>
                <td><a href="#" onclick="checkDisplay({$pack_id},{$current_display})"><span class="label {$tbl_display_label}">{$tbl_row_display}</span></a></td>
                <td>{$tbl_row_adult_price}</td>
                <td>{$tbl_row_child_price}</td>
                <td>{$tbl_row_child_wob}</td>
                
                <td><a href="#" onclick="checkStatus({$pack_id})"><span class="label {$tbl_status_label}">{$tbl_row_status}</span></a></td>
                
                <td>
                    <a href="#" onclick="editTourPackage({$pack_id})" class="button green">
                        <div class="icon"><span class="ico-pencil"></span></div>
                    </a>
                    <a href="#" onclick="removeTourPackage({$pack_id},'{$tbl_row_title}')" class="button red">
                        <div class="icon"><span class="ico-remove"></span></div>
                    </a>                                              
                </td>
            </tr>     