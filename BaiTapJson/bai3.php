<h4>3. Viết PHP script để hiển thị các lỗi trong quá trình decode JSON </h4>
<?php
        function json_error_message($json_str)  
		{  
		  $json[] = $json_str;  
		  echo $json;  
		  foreach ($json as $string)  
		  {  
		    echo 'Decoding: ' . $string."<br>";  
		    json_decode($string);  
		  
		    switch (json_last_error())  
		     {  
		       case JSON_ERROR_NONE:  
		         echo ' - No errors'."<br>";  
		         break;  
		       case JSON_ERROR_DEPTH:  
		         echo ' - Maximum stack depth exceeded'."<br>";  
		         break;  
		       case JSON_ERROR_STATE_MISMATCH:  
		         echo ' - Underflow or the modes mismatch'."<br>";  
		         break;  
		       case JSON_ERROR_CTRL_CHAR:  
		         echo ' - Unexpected control character found'."<br>";  
		         break;  
		       case JSON_ERROR_SYNTAX:  
		         echo ' - Syntax error, malformed JSON'."<br>";  
		         break;  
		       case JSON_ERROR_UTF8:  
		         echo ' - Malformed UTF-8 characters, possibly incorrectly encoded'."<br>";  
		         break;  
		       default:  
		         echo ' - Unknown error'."<br>";  
		         break;  
		      }  
		  }  
		}  
		json_error_message('{"color1": "Red Color"}');
?>