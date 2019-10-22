// JavaScript Document

$(function(){
	
	
	// for loading theme list from database at run time
	 var items="";
	 items+="<option value=''>"+"Please Select Country"+"</option>";
 	 $.getJSON("search/country_list.php",function(data){
		 
	 $.each(data,function(index,item) 
    	{
      	//items+="<option value='"+item.ID+"'>"+item.Name+"</option>";
		items+="<option value='"+item.Name+"'>"+item.Name+"</option>";
    	});
		
    $("#country").html(items); 
  });
	
	
	
	// assign selected value from records
	$.ajax({url:"search/selectedcountry.php",success:function(result){
   	var valoresArea= result; // it has the multiple values to set, separated by comma
    var arrayArea = valoresArea.split(',');
	
    $("#country").val(arrayArea);
	
	
  }});
	
});