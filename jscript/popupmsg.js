// JavaScript Document
//window.open("popup.html","_blank","toolbar=no, scrollbars=no, resizable=no, top=500, left=500, width=400, height=400");

$.ajax({
 url: 'index.php',
 data: 'your image',
 success: function(){window.open("popup.html","_blank","toolbar=no, scrollbars=no, resizable=no, top=500, left=500, width=400, height=400");},
 async: false
});
