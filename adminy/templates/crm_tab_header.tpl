<script src="jscript/brandlist.js" type="text/javascript"></script>
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
                            <th width="20%">{$tbl_th_company}</th>
                            <th width="20%">{$tbl_th_desc}</th>
                            <th width="20%">{$tbl_th_meta_desc}</th>
                            <!-- <th width="20%">{$tbl_th_status}</th>  -->
                            <th width="20%">{$tbl_th_meta_keyword}</th>  
                            <th width="80" class="TAC">Actions</th>
                        </tr>
                    </thead>
                    <tbody>  