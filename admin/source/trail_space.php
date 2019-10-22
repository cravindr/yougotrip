<?php
/*
 * Usage : If a line has minimum words than we need then this function adds spaces to a line at the end and makes letters count as even
 *
 * Args : $line ---------- the line which we need to add spaces at end
 *		  $total_char ---- Total number of letter that line must contain
 *
 *
 * Return Value : returns the string after adding spaces at the end
 *
 */
 

function addTrialSpaceToLine($line,$total_char){
	$value .= $line;
	$space = "&nbsp;";
	
	$length = strlen($value);
	if($length < $total_char){
		$space_bal = $total_char - $length;
		$space_add = str_repeat($space,$space_bal);
		$value .= $space_add;
	}
 return $value;
}


function addBR($line){
	
	return str_replace(";","<br>&nbsp;",$line);
	
}

 /*
function addTrialSpaceToLine($line,$total_char){
	$value .= $line;
	$space = "&nbsp;";
	
	for($i=1;$i<=$total_char;$i++){
		$space = $space."&nbsp;";	
	}
	
	$line = $line.$space;	
	return substr($line,0,$total_char);
	

}
*/

//echo addTrialSpaceToLine("yuva",5);  // Test this function by uncommenting this line and see page source of html display,
										// because spaces will not be displayed in html

?>