// JavaScript Document

$(function(){
	
	
	$('#btnpiccount').on('click',function(){
		piccount=$('#piccount').val();
		noofimgbox=$("#noofimgbox").val();

		totalnoofimgbox=parseInt(piccount)+parseInt(noofimgbox);
		$("#noofimgbox").val(totalnoofimgbox);
		
		data='piccount='+ encodeURIComponent(piccount) + '&noofbox='+ encodeURIComponent(totalnoofimgbox);

		$.ajax({url:'image_upload_btn.php',
		type:'GET',
		// data:'piccount=' +piccount + '&noofbox=' +noofimgbox,
		data:data,
		
		async:true,
		success: function(data){
						
			if(data==''){
				$("#imgupload").append(data);
				//console.log(data);
			} 
			else{
			$("#imgupload").append(data);
			//console.log(data);

			}
		}
			
		});
	});
		
	
});