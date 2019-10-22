// JavaScript Document

    var ckeditor = CKEDITOR.replace('description');
	CKEDITOR.disableAutoInline = true;
	
	var includes = CKEDITOR.replace('includes');
	CKEDITOR.disableAutoInline = true;
	
	var excludes = CKEDITOR.replace('excludes');
	CKEDITOR.disableAutoInline = true;
	
	var itinerary = CKEDITOR.replace('itinerary');
	CKEDITOR.disableAutoInline = true;
	
	var dac = CKEDITOR.replace('dac');
	CKEDITOR.disableAutoInline = true;
  

$(function(){
	
	
	$('#packagetype').typeahead({
		source: function(query,process){
			$.ajax({
				url:'search/packagetype.php',
				type:'POST',
				data:'query='+ query,
				dataType:"JSON",
				async:true,
				success: function(data){
					//console.log(data);
					process(data);
				}
			});
		}
	});
	
	$('#location').typeahead({
		source: function(query,process){
			$.ajax({
				url:'search/place.php',
				type:'POST',
				data:'query='+ query,
				dataType:"JSON",
				async:true,
				success: function(data){
					//console.log(data);
					process(data);
				}
			});
		}
	});
	
	//ajax function to load subcategory-jobs from database to multi select box

});
		
	
function removeImg(num,pid,img_url){
	$.ajax({
		url:'php/ajax_removeimg.php',
		data:{id:pid,img_url:img_url},
		type:'POST',
		async:true,
		success: function(data){
			$("#img"+num).remove();
		}
	});	
}
	
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