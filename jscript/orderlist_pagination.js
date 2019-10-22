// JavaScript Document



function pagination(id){
	
	
		$.ajax({
			url:'php/ajax_pagination.php',
			data:{id:id},
			type:'POST',
			async:true,
			success: function(data){
					window.location.href="orderlist.php";
				
			}
		});	
	
}


