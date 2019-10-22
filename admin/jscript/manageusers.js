
function editUser(id){
	$.ajax({
		url:'php/redirectPost.php',
		data:{id:id,tbl:'users',pri_column:'user_id'},
		type:'POST',
		async:true,
		success: function(data){
			window.location.href="user.php";
		}
	});		
}


function checkStatus(id){
	$.ajax({
		url:'php/ajax_changestatus.php',
		data:{id:id,tbl:'users',pri:'user_id'},
		type:'POST',
		async:true,
		success: function(data){
			window.location.href="manageusers.php";
		}
	});		
}