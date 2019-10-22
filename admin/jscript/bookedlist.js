
		



function agentBooked(id){
	$.ajax({
		url:'php/assignAgentid.php',
		data:{id:id,operation:'book'},
		type:'POST',
		async:true,
		success: function(data){
			window.location.href="agent_booked_list.php";
		}
	});		
}

function agentCancled(id){
	$.ajax({
		url:'php/assignAgentid.php',
		data:{id:id,operation:'cancel'},
		type:'POST',
		async:true,
		success: function(data){
			window.location.href="agent_booked_list.php";
		}
	});		
}

