// JavaScript Document

  



$('#customername').typeahead({
        source: function (query, process) {
			objects = [];
        	map = {};
            $.ajax({
                url: 'search/customer.php',
                type: 'POST',
                dataType: 'JSON',
                data:'query='+ query,
                success: function(data)
                {		
				$.each(data, function(i, object) {
					map[object.fname] = object;
					objects.push(object.fname);
					});
					
				process(objects);
				}
            });
        },
        minLength: 1,
		
        updater: function(item) {
			 $('#custid').val(map[item].id);
        	
			
        return item;
			
			
        return item;
    },
	
	template: function (data) {
                return '<h1>{{fname}}</h1><h2>{{lname}}</h2>'.replace('{{fname}}', data.fname).replace('{{lname}}', data.lname);
            }
	
	
    });
	

/*
	$('#customername').typeahead({
		
		source: function(query,process){
			objects = [];
        	map = {};
			$.ajax({
				url:'search/customer.php',
				type:'POST',
				data:'query='+ query,
				dataType:"JSON",
				async:true,
				success: function(data){
					//console.log(data);
					//process(data);
					$.each(data, function(i, object) {
					map[object.fullname] = object;
					objects.push(object.fullname);
					});
					
				process(objects);
				}
			});
		}
		
	});*/
	
/*	$('#customername').typeahead({
		source: function(query,process){
			$.ajax({
				url:'search/customer.php',
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
	

		
		
		
		
	
$('#packagetype').typeahead({
        source: function (query, process) {
			$('#aprice').val(0);
        	$('#cprice').val(0);
			$('#cwbprice').val(0);
			objects = [];
        	map = {};
				
            $.ajax({
                url: 'search/package.php',
                type: 'POST',
                dataType: 'JSON',
                data:'query='+ query,
                success: function(data)
                {		
				$.each(data, function(i, object) {
					map[object.pname] = object;
					objects.push(object.pname);
					});
					
				process(objects);
				}
            });
        },
        minLength: 1,
		
        updater: function(item) {
        $('#aprice').val(map[item].aprice);
        $('#cprice').val(map[item].cprice);
		$('#cwbprice').val(map[item].cwbprice);
        return item;
    }
    });
	
	
	
	////////////////////////////////////////////////////////////////////////////////////////
	
	
	
	function calc(idx) {

  var aprice = parseFloat(document.getElementById("acost"+idx).value)*
              parseFloat(document.getElementById("aqty"+idx).value);
  var cprice = parseFloat(document.getElementById("ccost"+idx).value)*
              parseFloat(document.getElementById("cqty"+idx).value);
  var cwbprice = parseFloat(document.getElementById("cwbcost"+idx).value)*
              parseFloat(document.getElementById("cwbqty"+idx).value);
			  
  aprice=isNaN(aprice)?"0.00":aprice.toFixed(2);
  cprice=isNaN(cprice)?"0.00":cprice.toFixed(2);
  cwbprice=isNaN(cwbprice)?"0.00":cwbprice.toFixed(2);
  var price=	 parseFloat(aprice)+ parseFloat(cprice) + parseFloat(cwbprice);
  document.getElementById("price"+idx).value= isNaN(price)?"0.00":price.toFixed(2);

}

function totalIt() {
  var qtys = document.getElementsByName("aqty[]");
  var total=0;
  for (var i=1;i<=qtys.length;i++) {
    calc(i);  
    var price = parseFloat(document.getElementById("price"+i).value);
    total += isNaN(price)?0:price;
  }
  document.getElementById("total").value=isNaN(total)?"0.00":total.toFixed(2);                        
}      

window.onload=function() {
  document.getElementsByName("aqty[]")[0].onkeyup=function() {calc(1)};
  document.getElementsByName("acost[]")[0].onkeyup=function() {calc(1)};
  document.getElementsByName("cqty[]")[0].onkeyup=function() {calc(1)};
  document.getElementsByName("ccost[]")[0].onkeyup=function() {calc(1)};
  document.getElementsByName("cwbqty[]")[0].onkeyup=function() {calc(1)};
  document.getElementsByName("cwbcost[]")[0].onkeyup=function() {calc(1)};
}

var rowCount =0;
var firstrow=1;
    function addRow(tableID) {
		
		var pak=$('#packagetype').val(); // check blank data is addede ?
		if(pak=="") return;
		
		var table = document.getElementById(tableID);
		var rowCount = table.rows.length;
		
		
		if(firstrow==1)  // manualy defined first row 
		{
			var idx=1;
			var pak=$('#packagetype').val();
			if(pak=="") return;
			var aprice=$('#aprice').val();
			var aqty=$('#aqty').val();
			var cprice=$('#cprice').val();
			var cqty=$('#cqty').val();
			var cwbprice=$('#cwbprice').val();
			var cwbqty=$('#cwbqty').val();
			
			// assign value
			
			$('#item'+idx).val(pak);
			$('#acost'+idx).val(aprice);
			$('#aqty'+idx).val(aqty);
			$('#ccost'+idx).val(cprice);
			$('#cqty'+idx).val(cqty);
			$('#cwbcost'+idx).val(cwbprice);
			$('#cwbqty'+idx).val(cwbqty);
			
			/*aprice=isNaN(aprice)?"0.00":aprice;
			aqty=isNaN(aqty)?"0.00":aqty;
			cprice=isNaN(cprice)?"0.00":cprice;
			cqty=isNaN(cqty)?"0.00":cqty;
 			cwbprice=isNaN(cwbprice)?"0.00":cwbprice;
			cwbqty=isNaN(cwbqty)?"0.00":cwbqty;
			*/
			
			if(aprice=="") aprice=0; else aprice=aprice;
			if(aqty=="") aqty=0; else aqty=aqty;
			if(cprice=="") cprice=0; else cprice=cprice;
			if(cqty=="") cqty=0; else cqty=cqty;
			if(cwbprice=="") cwbprice=0; else cwbprice=cwbprice;
			if(cwbqty=="") cwbqty=0; else cwbqty=cwbqty;
			/*		
		    var atotal=( parseFloat(aprice) * parseFloat(aqty) );
			var ctotal=(parseFloat(cprice) * parseFloat(cqty) );
			var cwbtotal=(parseFloat(cwbprice) * parseFloat(cwbqty));
			*/
			
 			var price=	( parseFloat(aprice) * parseFloat(aqty) )+ 
			(parseFloat(cprice) * parseFloat(cqty) )+ 
			(parseFloat(cwbprice) * parseFloat(cwbqty));
			
			$('#price'+idx).val(price);
			
			// reset all controls
			$('#packagetype').val('');			
			$('#aprice').val('');
			$('#aqty').val('');
			$('#cprice').val('');
			$('#cqty').val('');
			$('#cwbprice').val('');
			$('#cwbqty').val('');
			$('#totalpack').val(1); // assign no of package item invoiced
			totalIt();

			
			firstrow=firstrow+1;
			
			return ;
		} // manualy defined first row Block End.
		
		
		// create dynamic fields
        var table = document.getElementById(tableID);
		var rowCount = table.rows.length;
		var row = table.insertRow(rowCount);
        var cell1 = row.insertCell(0);
        var element1 = document.createElement("input");
        element1.type = "checkbox";
        element1.name = "chk[]";
        cell1.appendChild(element1);

        var cell2 = row.insertCell(1);
        cell2.innerHTML = rowCount;

        var cell3 = row.insertCell(2);
        var element3 = document.createElement("input");
        element3.type = "text";
        element3.name = "item[]";
		element3.id = "item"+rowCount;
		element3.readOnly="readonly";
        element3.required = "required";
        cell3.appendChild(element3);

        var cell4 = row.insertCell(3);
        var element4 = document.createElement("input");
        element4.type = "text";
        element4.name = "aqty[]";
        element4.id = "aqty"+rowCount;
        element4.onkeyup=function() {calc(rowCount);}
        cell4.appendChild(element4);

        var cell5 = row.insertCell(4);
        var element5 = document.createElement("input");
        element5.type = "text";
        element5.name = "acost[]";
        element5.id = "acost"+rowCount;
        element5.onkeyup=function() {calc(rowCount);}
        cell5.appendChild(element5);
		
		var cell6 = row.insertCell(5);
        var element6 = document.createElement("input");
        element6.type = "text";
        element6.name = "cqty[]";
        element6.id = "cqty"+rowCount;
        element6.onkeyup=function() {calc(rowCount);}
        cell6.appendChild(element6);

        var cell7 = row.insertCell(6);
        var element7 = document.createElement("input");
        element7.type = "text";
        element7.name = "ccost[]";
        element7.id = "ccost"+rowCount;
        element7.onkeyup=function() {calc(rowCount);}
        cell7.appendChild(element7);
		
		
		var cell8 = row.insertCell(7);
        var element8 = document.createElement("input");
        element8.type = "text";
        element8.name = "cwbqty[]";
        element8.id = "cwbqty"+rowCount;
        element8.onkeyup=function() {calc(rowCount);}
        cell8.appendChild(element8);
		
		var cell9 = row.insertCell(8);
        var element9 = document.createElement("input");
        element9.type = "text";
        element9.name = "cwbcost[]";
        element9.id = "cwbcost"+rowCount;
        element9.onkeyup=function() {calc(rowCount);}
        cell9.appendChild(element9);
		
		var cell10 = row.insertCell(9);
        var element10 = document.createElement("input");
        element10.type = "text";
        element10.name = "price[]";
        element10.id = "price"+rowCount
		element10.readOnly="readonly";
        cell10.appendChild(element10);
		
		
		// Assign value to the  dynamic fields
		
		if(rowCount >1)  
		{
			var idx=rowCount;
			var pak=$('#packagetype').val();
			if(pak=="") return;
			var aprice=$('#aprice').val();
			var aqty=$('#aqty').val();
			var cprice=$('#cprice').val();
			var cqty=$('#cqty').val();
			var cwbprice=$('#cwbprice').val();
			var cwbqty=$('#cwbqty').val();
			
			// assign value
			
			$('#item'+idx).val(pak);
			$('#acost'+idx).val(aprice);
			$('#aqty'+idx).val(aqty);
			$('#ccost'+idx).val(cprice);
			$('#cqty'+idx).val(cqty);
			$('#cwbcost'+idx).val(cwbprice);
			$('#cwbqty'+idx).val(cwbqty);
			// check blank data is returned ?
			if(aprice=="") aprice=0; else aprice=aprice;
			if(aqty=="") aqty=0; else aqty=aqty;
			if(cprice=="") cprice=0; else cprice=cprice;
			if(cqty=="") cqty=0; else cqty=cqty;
			if(cwbprice=="") cwbprice=0; else cwbprice=cwbprice;
			if(cwbqty=="") cwbqty=0; else cwbqty=cwbqty;
						
 			var price=	( parseFloat(aprice) * parseFloat(aqty) )+ 
			(parseFloat(cprice) * parseFloat(cqty) )+ 
			(parseFloat(cwbprice) * parseFloat(cwbqty));
			
			$('#price'+idx).val(price);
			
			// reset all controls
			$('#packagetype').val('');			
			$('#aprice').val('');
			$('#aqty').val('');
			$('#cprice').val('');
			$('#cqty').val('');
			$('#cwbprice').val('');
			$('#cwbqty').val('');
			$('#totalpack').val(idx); // assign no of package item invoiced
			totalIt();
		}
		



    }

    function deleteRow(tableID) {
        try {
        var table = document.getElementById(tableID);
        var rowCount = table.rows.length;

        for(var i=0; i<rowCount; i++) {
            var row = table.rows[i];
            var chkbox = row.cells[0].childNodes[0];
            if(null != chkbox && true == chkbox.checked) {
                table.deleteRow(i);
                rowCount--;
                i--;
            }


        }
		totalIt();
        }catch(e) {
            alert(e);
        }
    }

	
