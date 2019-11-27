<h4>3. Viết PHP Lấy URL trong PHP</h4>
   
       <?php
         $url = 'http://localhost:8888/php/BaiTapPHP/BaiTapCoBan/bai3.php';  
		 $url=parse_url($url);  
		 echo 'Scheme : '.$url['scheme']."<br>";  
		 echo 'Host : '.$url['host']."<br>";  
		 echo 'Path : '.$url['path']."<br>";
       ?>
