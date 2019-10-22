
		
function removeCRM(id,name){
	var title=name;
	var r=confirm('Are you sure want to delete this Enquiry : '+title);
	if (r==true)
	  {
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

function crmView(id){
	$.ajax({
		url:'php/crmview.php',
		data:{id:id},
		type:'POST',
		async:true,
		success: function(data){
			//window.location.href="invoice_preview.php";
			$('#customerModal').html(data);
		}
	});		
}
