// JavaScript Document



function cancelorder(id){
	
	var r=confirm('Are you sure want to Cancle this Order : ' + id);
	if (r==true)
	{
		$.ajax({
			url:'php/ajax_cancelorder.php',
			data:{id:id,tbl:'invoice',pri_column:'invoiceno'},
			type:'POST',
			async:true,
			success: function(data){
				if(data == 'success'){
					alert('Order Cancled successfully');
					window.location.href="orderlist.php";
				}
				else if(data == 'failed'){
					alert('Order Not Cancled ');
					window.location.href="orderlist.php";
				}
			}
		});	
	}
}


function paynow(id){
	
	var r=confirm('Are you want to Pay this Order : ' + id);
	if (r==true)
	{
		$.ajax({
			url:'php/ajax_assign_order_no.php',
			data:{id:id,tbl:'invoice',pri_column:'invoiceno'},
			type:'POST',
			async:true,
			success: function(data){
				
					window.location.href="payoption.php";
				
				
			}
		});	
	}
}


function paynowpart(id){
	
	var r=confirm('Are you want to Pay this Order : ' + id);
	if (r==true)
	{
		$.ajax({
			url:'php/ajax_assign_order_no.php',
			data:{id:id,type:'part'},
			type:'POST',
			async:true,
			success: function(data){
				
					window.location.href="paycustomeamount.php";
				
				
			}
		});	
	}
}


/*function paynow(id){
	
	var r=confirm('Are you want to Pay this Order : ' + id);
	if (r==true)
	{
		$.ajax({
			url:'php/ajax_payorder.php',
			data:{id:id,tbl:'invoice',pri_column:'invoiceno'},
			type:'POST',
			async:true,
			success: function(data){
				if(data == 'success'){
					alert('Payment has been done successfully');
					window.location.href="orderlist.php";
				}
				else if(data == 'insufficient'){
					alert('Insufficient fund in your Account');
					window.location.href="orderlist.php";
				}
			}
		});	
	}
}


*/