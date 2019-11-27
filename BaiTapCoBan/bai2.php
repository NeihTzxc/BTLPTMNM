
   <h4>2. Viết PHP Lấy địa chỉ Client IP  trong PHP </h4>
       <?php
         //Kiểm tra xem IP có phải là từ Share Internet  
		if (!empty($_SERVER['HTTP_CLIENT_IP']))     
		  {  
			$ip_address = $_SERVER['HTTP_CLIENT_IP'];  
		  }  
		//Kiểm tra xem IP có phải là từ Proxy  
		elseif (!empty($_SERVER['HTTP_X_FORWARDED_FOR']))    
		  {  
			$ip_address = $_SERVER['HTTP_X_FORWARDED_FOR'];  
		  }  
		//Kiểm tra xem IP có phải là từ Remote Address  
		else  
		  {  
			$ip_address = $_SERVER['REMOTE_ADDR'];  
		  }  
		echo "Địa chỉ Client IP là: $ip_address"; 
       ?>
       
