// JavaScript Document

function displayPackDetails(id,cat){
	$.ajax({
		url:'php/redirectPost.php',
		data:{id:id,pack:cat},
		type:'POST',
		async:true,
		success: function(data){
			window.location.href="packagedetail.php";
		}
	});		
}





	
	// for loading theme list from database at run time
	 var itemstheme="";
	 var varall="All";
		itemstheme+="<option value='"+varall+"'>"+varall+"</option>";
 	 $.getJSON("search/theme.php",function(data){

	 $.each(data,function(index,item) 
	 
    	{
      	//items+="<option value='"+item.ID+"'>"+item.Name+"</option>";
		itemstheme+="<option value='"+item.Name+"'>"+item.Name+"</option>";
    	});
		data='';
    $("#theme").html(itemstheme); 
  });
  
  
  	// for loading Pack list from database at run time
	 var items="";
	 items+="<option value='"+varall+"'>"+varall+"</option>";
 	 $.getJSON("search/catagory.php",function(data){
	 $.each(data,function(index,item) 
    	{
      	//items+="<option value='"+item.ID+"'>"+item.Name+"</option>";
		items+="<option value='"+item.Name+"'>"+item.Name+"</option>";
    	});
		data='';
    $("#packtype").html(items); 
  });
  
	
	

	