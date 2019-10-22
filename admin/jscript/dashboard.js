// JavaScript Document

$(function(){

	if($("#main_chart").length > 0){
				
		var visits = [[1, 1235], [2, 1245], [3, 1590], [4, 1420], [5,1713], [6,1921], [7,1869], [8, 1790], [9,2314], [10,2490], [11,2175], [12,1989]];
		var unique = [[1, 140], [2, 246], [3, 530], [4, 788], [5,832], [6,962], [7,1280], [8, 1299], [9,1410], [10,1569], [11,1492], [12,1350]];
		var sales = [[1, 50], [2, 100], [3, 140], [4, 190], [5,250], [6,360], [7,440], [8, 650], [9,750], [10,810], [11,980], [12,1102]];
		$.plot($("#main_chart"), [ { data: visits, label: "visits"}, { data: unique, label: "unique"}, {data: sales, label: "sales"} ], {
			
		series: {lines: { show: true }, points: { show: true }},
		grid: { hoverable: true, clickable: true },
		yaxis: { min: 1, max: 3000, tickLength: 0 },
		xaxis: { labelWidth: 30, tickLength: 0 }
		});
	} 


	$('#place').typeahead({
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
	
	//--------------------- country--------------------
		/*$('#country').typeahead({
		source: function(query,process){
			$.ajax({
				url:'search/country.php',
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
	});*/
	//-----------------------------------------------
//-------------------- email id registred or not check--------------
	
		$('#emailid').typeahead({
		source: function(query,process){
			$.ajax({
			url:'search/user.php',
				type:'POST',
				data:'query='+ query,
				dataType:"JSON",
				async:true,
				success: function(data){

                        if(data==0){
                            $("#message").html("<img src='bootstrap/jq/tick.png' /> ");
							 }
						 else
						 {
                          $("#message").html("<img src='bootstrap/jq/cross.png' /> ");
							 }
                    }
                 });
		}
	});
//-----------------------------------------------------------------------------------------
}); 