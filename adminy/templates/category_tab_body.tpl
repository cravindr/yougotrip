                                    
                           
            <tr>
                <td><input type="checkbox" name="order[]" value="528"/></td>
                <td><a href="#">{$tbl_row_title}</a></td>
                <td><a href="#" onclick="checkDisplay({$category_id},{$current_display})"><span class="label {$tbl_display_label}">{$tbl_row_display}</span></a></td>
                <td>
                    <a href="#" onclick="editCategory({$category_id})" class="button green">
                        <div class="icon"><span class="ico-pencil"></span></div>
                    </a>
                    <a href="#" onclick="removeCategory({$category_id},'{$tbl_row_title}')" class="button red">
                        <div class="icon"><span class="ico-remove"></span></div>
                    </a>                                              
                </td>
            </tr>     