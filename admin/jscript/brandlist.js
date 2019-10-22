
		
function removeBrand(id){
	$.ajax({
		url:'php/ajax_removeitem.php',
		data:{id:id,tbl:'brandpartner',pri_column:'id'},
		type:'POST',
		async:true,
		success: function(data){
			if(data == 'success'){
				alert('Brand Partner removed successfully');
				window.location.href="brandlist.php";
				//window.location.href="tourpacklist.php";
			}
			else if(data == 'failed'){
				alert('Brand Partner not removed');
			}
		}
	});	
	
//	$.ajax({
//		url:'php/ajax_removeitem.php',
//		data:{id:id,tbl:'gallery_image',pri_column:'gallery_id'},
//		type:'POST',
//		async:true,
//		success: function(data){
//			window.location.href="gallerylist.php";
//		}
//	});		
}


function editBrand(id){
	$.ajax({
		url:'php/redirectPost.php',
		data:{id:id,tbl:'brandpartner',pri_column:'id'},
		type:'POST',
		async:true,
		success: function(data){
			window.location.href="brandpartner.php";
		}
	});		
}


//function checkStatus(id){
//	$.ajax({
//		url:'php/ajax_changestatus.php',
//		data:{id:id,post:'jobs'},
//		type:'POST',
//		async:true,
//		success: function(data){
//			/*if(data == 'success'){
//				alert('Job Post removed successfully');
//				window.location.href="lstjobspost.php";
//			}
//			else if(data == 'failed'){
//				alert('Job Post not removed');
//			}*/
//			window.location.href="lstjobspost.php";
//		}
//	});		
//}

function removeLogo(num,pid,img_url){
	$.ajax({
		url:'php/ajax_removebrandlogo.php',
		data:{id:pid,img_url:img_url},
		type:'POST',
		async:true,
		success: function(data){
			$("#imgdisplay_logo").remove();
			$("#display_logo_main").css('display','block'); // prop block to diskplay the tag. none to invisiable the tag
		}
	});	
}	