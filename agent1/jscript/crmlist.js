
		
function removeCRM(id){
	$.ajax({
		url:'php/ajax_removeitem.php',
		data:{id:id,tbl:'crm',pri_column:'crm_id'},
		type:'POST',
		async:true,
		success: function(data){
			if(data == 'success'){
				alert('Enquery removed successfully');
				window.location.href="crmlist.php";
				//window.location.href="tourpacklist.php";
			}
			else if(data == 'failed'){
				alert('Enquery not removed');
			}
		}
	});	
}


function editCRM(id){
	$.ajax({
		url:'php/redirectPost.php',
		data:{id:id,tbl:'crm',pri_column:'crm_id'},
		type:'POST',
		async:true,
		success: function(data){
			window.location.href="crm.php";
		}
	});		
}

