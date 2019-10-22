
		
function cancelInvoice(id){
	var r=confirm('Are you sure want to Cancle this Order : ' + id);
	if (r==true)
	{
	$.ajax({
		url:'php/ajax_cancel_invoice.php',
		data:{id:id,tbl:'invoice',pri_column:'invoiceno'},
		type:'POST',
		async:true,
		success: function(data){
			if(data == 'success'){
				alert('Invoice Cancled  successfully');
				window.location.href="invoicelist.php";
			}
			else if(data == 'failed'){
				alert('Category not removed');
			}
		}
	});		
}

}

		
function payInvoice(id){
	$.ajax({
		url:'php/assign_invoiceno.php',
		data:{id:id},
		type:'POST',
		async:true,
		success: function(data){
			window.location.href="paymentoption.php";
		}
	});		
}


function previewInvoice(id){
	$.ajax({
		url:'php/assign_invoiceno.php',
		data:{id:id},
		type:'POST',
		async:true,
		success: function(data){
			//window.location.href="invoice_preview.php";
			window.open("invoice_preview.php","_blank","toolbar=no, scrollbars=yes, resizable=yes, top=50, left=50, width=800, height=600");
		}
	});		
}

function transInvoice(id){
	$.ajax({
		url:'php/assign_invoiceno.php',
		data:{id:id},
		type:'POST',
		async:true,
		success: function(data){
			//window.location.href="invoice_preview.php";
			window.open("trans_preview.php","_blank","toolbar=no, scrollbars=yes, resizable=yes, top=50, left=50, width=800, height=600");
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