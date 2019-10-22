                                    
                           
            <tr>
                <td>{$tbl_row_sno}</td>
                <td><a href="#" onclick="agentBooked({$agent_id})">{$tbl_row_first_name}</a></td>
                <td>{$tbl_row_city}</td>
                <td>{$tbl_row_country}</td>                
                <td>{$tbl_row_company}</td>
                <td>{$tbl_row_email}</td>
                <td>{$tbl_row_mobile}</td>
                <td>{$tbl_row_cdate}</td>

                <td>
                    <a href="#" onclick="agentBooked({$agent_id})" class="button yellow">
                        <div class="icon"><span class="ico-chart-4"></span></div>
                    </a>
                    <!--<a href="#" onclick="agentCancled({$agent_id}')" class="button purple">
                        <div class="icon"><span class="ico-remove"></span></div>
                    </a>-->                                              
                </td>
            </tr>     