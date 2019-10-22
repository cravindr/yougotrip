// Datepicker
    $(".ncdate").datepicker({dateFormat: 'yy-mm-dd'});
    
    if($("#ncdate").length > 0){
        
        $( "#ncdate" ).datepicker({dateFormat: 'yy-mm-dd',
                                       onSelect: function(date){
                                            //action
											$("#datep").val(date);
											alert(date);
                                     }});
    }