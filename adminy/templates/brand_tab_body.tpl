                                    
                           
            <tr>
                <td><input type="checkbox" name="order[]" value="528"/></td>
                <td><a href="#">{$tbl_row_company}</a></td>
                <td>{$tbl_row_desc}</td>
                <td>{$tbl_row_meta_desc}</td>
                <td>{$tbl_row_meta_keyword}</td>
                 <!--  <td><a href="#" onclick="checkStatus({$gallery_id})"><span class="label {$tbl_status_label}">{$tbl_row_status}</span></a></td>
                	-->
                <td>
                    <a href="#" onclick="editBrand({$brand_id})" class="button green">
                        <div class="icon"><span class="ico-pencil"></span></div>
                    </a>
                    <a href="#" onclick="removeBrand({$brand_id})" class="button red">
                        <div class="icon"><span class="ico-remove"></span></div>
                    </a>                                              
                </td>
            </tr>     