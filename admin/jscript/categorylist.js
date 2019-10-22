
		
function removeCategory(id,title){
	
	var r=confirm('Are you sure want to delete this category : '+title);
	if (r==true)
	{
		$.ajax({
			url:'php/ajax_removeitem.php',
			data:{id:id,tbl:'category',pri_column:'category_id'},
			type:'POST',
			async:true,
			success: function(data){
				if(data == 'success'){
					alert('Category removed successfully');
					window.location.href="categorylist.php";
				}
				else if(data == 'failed'){
					alert('Category not removed');
				}
			}
		});	
	}
}



		
function editCategory(id){
	$.ajax({
		url:'php/redirectPost.php',
		data:{id:id},
		type:'POST',
		async:true,
		success: function(data){
			window.location.href="category.php";
		}
	});		
}

function checkDisplay(id,dis){
	$.ajax({
		url:'php/ajax_changedisplay_category.php',
		data:{id:id,tbl:'category',pri:'category_id',dis:dis},
		type:'POST',
		async:true,
		success: function(data){
			window.location.href="categorylist.php";
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