<?php

		function fnMail($to,$subject,$message){
			$headers  = 'MIME-Version: 1.0' . "\r\n";
			$headers .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";
			
			$headers .= "From:info@yougotrip.com \r\n";
			$headers .= 'Cc: ' . "\r\n";
			$headers .= 'Bcc: ' . "\r\n";
			$headers .= "Reply-To: info@yougotrip.com \r\n";
			error_reporting(E_ERROR | E_PARSE);
			mail($to, $subject, $message, $headers);
			error_reporting(E_ERROR | E_PARSE);
		}
?>