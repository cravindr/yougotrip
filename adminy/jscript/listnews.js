
		
function removeNews(id,language){
	$.ajax({
		url:'php/ajax_removenews.php',
		data:{id:id},
		type:'POST',
		async:true,
		success: function(data){
			if(data == 'success'){
				alert('News removed successfully');
			
			if(language=='tamil')
			window.location.href="tnewslist.php";
			if(language=='telugu')
			window.location.href="tenewslist.php";
			if(language=='hindi')
			window.location.href="hnewslist.php";
			}
			else if(data == 'failed'){
				alert('News not removed');
			}
		}
	});		
}



		
function editNews(id){
	$.ajax({
		url:'php/redirectPost.php',
		data:{id:id},
		type:'POST',
		async:true,
		success: function(data){
			window.location.href="editnews.php";
		}
	});		
}

function checkActive(id,language){
	$.ajax({
		url:'php/ajax_changeActive.php',
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
			
/*	        if(language=='tamil')
			window.location.href="tnewslist.php";
			if(language=='telugu')
			window.location.href="tenewslist.php";
			if(language=='hindi')
			window.location.href="hnewslist.php";*/
			
				$.ajax({
		url:'tab_news_body.php',
		data:{id:id,post:'jobs'},
		type:'POST',
		async:true,
		success: function(data){
//$("#bodystart").html(data);
$("#tablebody").html(data);
$("#dytable").fnInit();

		}
	});
			
			
		}
	});		
}


function addNews(id,language){
	$.ajax({
		url:'php/ajax_addNews.php',
		data:{id:id,language:language},
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
			alert("News Succesfully posted for Display");
			if(language=='tamil')
			window.location.href="tnewslist.php";
			if(language=='telugu')
			window.location.href="tenewslist.php";
			if(language=='hindi')
			window.location.href="hnewslist.php";
		}
	});		
}