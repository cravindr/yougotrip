
		
function removeCustomer(id){
	$.ajax({
		url:'php/ajax_removeitem.php',
		data:{id:id,tbl:'customer',pri_column:'customer_id'},
		type:'POST',
		async:true,
		success: function(data){
			if(data == 'success'){
				alert('Enquery removed successfully');
				window.location.href="customerlist.php";
				//window.location.href="tourpacklist.php";
			}
			else if(data == 'failed'){
				alert('Enquery not removed');
			}
		}
	});	
}


function editCustomer(id){
	$.ajax({
		url:'php/redirectPost.php',
		data:{id:id,tbl:'customer',pri_column:'customer_id'},
		type:'POST',
		async:true,
		success: function(data){
			window.location.href="customer.php";
		}
	});		
}

