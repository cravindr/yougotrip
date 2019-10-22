
		
function removeAgent(id,title){

	var r=confirm('Are you sure want to delete this agent details : '+title);
	if (r==true)
	  {
	  		$.ajax({
				url:'php/ajax_removeitem.php',
				data:{id:id,tbl:'agent',pri_column:'agent_id'},
				type:'POST',
				async:true,
				success: function(data){
					if(data == 'success'){		
						alert('Agent Details removed successfully');		
						window.location.href="agentslist.php";
					}
					else if(data == 'failed'){
						alert('Agent Details not removed');
					}
				}
			});		
	  }

}


function editAgent(id){
	$.ajax({
		url:'php/redirectPost.php',
		data:{id:id,tbl:'agent',pri_column:'agent_id'},
		type:'POST',
		async:true,
		success: function(data){
			window.location.href="agent.php";
		}
	});		
}
