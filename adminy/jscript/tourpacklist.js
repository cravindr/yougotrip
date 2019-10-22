
		
function removeTourPackage(id,title){

	var r=confirm('Are you sure want to delete this package : '+title);
	if (r==true)
	  {
	  		$.ajax({
				url:'php/ajax_removeitem.php',
				data:{id:id,tbl:'package',pri_column:'pack_id'},
				type:'POST',
				async:true,
				success: function(data){
					if(data == 'success'){				
						//window.location.href="tourpacklist.php";
					}
					else if(data == 'failed'){
						alert('Tour Package not removed');
					}
				}
			});	
			
			$.ajax({
				url:'php/ajax_removeitem.php',
				data:{id:id,tbl:'package_image',pri_column:'pack_id'},
				type:'POST',
				async:true,
				success: function(data){
					alert('Tour Package removed successfully');
					window.location.href="tourpacklist.php";
				}
			});		
	  }

}


function editTourPackage(id){
	$.ajax({
		url:'php/redirectPost.php',
		data:{id:id,tbl:'package',pri_column:'pack_id'},
		type:'POST',
		async:true,
		success: function(data){
			window.location.href="tourpack.php";
		}
	});		
}


function checkDisplay(id,dis){
	$.ajax({
		url:'php/ajax_changedisplay_tour.php',
		data:{id:id,tbl:'package',pri:'pack_id',dis:dis},
		type:'POST',
		async:true,
		success: function(data){
			window.location.href="tourpacklist.php";
		}
	});		
}


function checkStatus(id){
	$.ajax({
		url:'php/ajax_changestatus.php',
		data:{id:id,tbl:'package',pri:'pack_id'},
		type:'POST',
		async:true,
		success: function(data){
			window.location.href="tourpacklist.php";
		}
	});		
}