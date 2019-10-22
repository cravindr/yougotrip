
		
function removeInvoice(id){
	$.ajax({
		url:'php/ajax_removeinvoice.php',
		data:{id:id,tbl:'invoice',pri_column:'invoiceno'},
		type:'POST',
		async:true,
		success: function(data){
			if(data == 'success'){
				alert('Category removed successfully');
				window.location.href="invoicelist.php";
			}
			else if(data == 'failed'){
				alert('Category not removed');
			}
		}
	});		
}



		
function editInvoice(id){
	$.ajax({
		url:'php/redirectPost.php',
		data:{id:id},
		type:'POST',
		async:true,
		success: function(data){
			window.location.href="invoiceedit.php";
		}
	});		
}


function checkStatus(id){
	$.ajax({
		url:'php/ajax_changestatus.php',
		data:{id:id,post:'jobs'},
		type:'POST',
		async:true,
		success: function(data){
			/*if(data == 'success'){
				alert('Job Post removed successfully');
				window.location.href="lstjobspost.php";
			}
			else if(data == 'failed'){
				alert('Job Post not removed');
			}*/
			window.location.href="lstjobspost.php";
		}
	});		
}