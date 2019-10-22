
		
function removeGallery(id,title){
	
	var r=confirm('Are you sure want to delete this gallery : '+title);
	if (r==true)
	  {
			$.ajax({
				url:'php/ajax_removeitem.php',
				data:{id:id,tbl:'gallery',pri_column:'gallery_id'},
				type:'POST',
				async:true,
				success: function(data){
					if(data == 'success'){						
						//window.location.href="tourpacklist.php";
					}
					else if(data == 'failed'){
						alert('Gallery not removed');
					}
				}
			});	
			
			$.ajax({
				url:'php/ajax_removeitem.php',
				data:{id:id,tbl:'gallery_image',pri_column:'gallery_id'},
				type:'POST',
				async:true,
				success: function(data){
					alert('Gallery removed successfully');
					window.location.href="gallerylist.php";
				}
			});		
	 }
}


function editGallery(id){
	$.ajax({
		url:'php/redirectPost.php',
		data:{id:id,tbl:'gallery',pri_column:'gallery_id'},
		type:'POST',
		async:true,
		success: function(data){
			window.location.href="gallery.php";
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