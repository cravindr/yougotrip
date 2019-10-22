<script src="jscript/tourpacklist.js" type="text/javascript"></script>
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
                            <th width="5%"><input type="checkbox" class="checkall"/></th>                           
                            <th width="25%">{$tbl_th_title}</th>
                            <!--<th width="20%">{$tbl_th_desc}</th>-->
                            <th width="15">{$tbl_th_cat}</th>
                            <th width="7%">{$tbl_th_display}</th>
                            <th width="10%">{$tbl_th_adult}</th>
                            <th width="10%">{$tbl_th_child}</th>          
                            <th width="10%">{$tbl_th_child_wob}</th>
                            <th width="7%">{$tbl_th_status}</th>
                            
                            <th width="80" class="TAC">Actions</th>
                        </tr>
                    </thead>
                    <tbody>  