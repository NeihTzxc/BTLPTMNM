<h4>1. Decode một chuỗi JSON trong PHP </h4>
<pre>
'{  
    "name": "Nguyen Van A"  
    ,"diachi": "NhaTrang"  
    ,"gioitinh": "nam" 
}'
</pre>
<?php
        $json =   
		'{  
		"name": "Nguyen Van A"  
		, "diachi": "NhaTrang"  
		, "gioi": "nam" 
		}';  
		var_dump(json_decode($json));  
		echo "<br>";  
		echo "<br>";  
		var_dump(json_decode($json, true));
?>