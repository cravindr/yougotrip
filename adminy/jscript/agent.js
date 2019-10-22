
function removeLogo(num,pid,img_url){
	$.ajax({
		url:'php/ajax_removelogo.php',
		data:{id:pid,img_url:img_url},
		type:'POST',
		async:true,
		success: function(data){
			$("#img"+num).remove();
			$("#display_logo_main").css('display','block');
		}
	});	
}	