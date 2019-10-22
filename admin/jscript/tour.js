// JavaScript Document

    var ckeditor = CKEDITOR.replace('description');
	CKEDITOR.disableAutoInline = true;
	
	var place_desc = CKEDITOR.replace('place_desc');
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
	
	
	// for loading theme list from database at run time
	 var items="";
 	 $.getJSON("search/theme.php",function(data){
	 $.each(data,function(index,item) 
    	{
      	//items+="<option value='"+item.ID+"'>"+item.Name+"</option>";
		items+="<option value='"+item.Name+"'>"+item.Name+"</option>";
    	});
    $("#theme").html(items); 
  });
	
	
	// assign selected value from records
	$.ajax({url:"search/selectedtheme.php",success:function(result){
   	var valoresArea=result; // it has the multiple values to set, separated by comma
    var arrayArea = valoresArea.split(',');
	//alert(arrayArea);
    $('#theme').val(arrayArea);
  }});
	
	
	
	

	
	
	
	
	

	

	
	
	
	
 
	
	
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
			$("#imgl"+num).remove();
			$("#display_logo_main").css('display','block');
		}
	});	
}	