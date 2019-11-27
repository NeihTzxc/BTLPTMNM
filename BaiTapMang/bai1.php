<h4>1. Viết PHP script để tạo mảng liên hợp hiển thị tên các quốc gia và thủ đô trên danh sách. Dữ liệu được khai báo trực tiếp trong file. </h4>
<?php
            //khai báo và tạo mảng liên hợp
    $mang_lien_hop = array( "Italy"=>"Rome", "Luxembourg"=>"Luxembourg",  
    "Belgium"=> "Brussels", "Denmark"=>"Copenhagen",  
    "Finland"=>"Helsinki", "France" => "Paris",  
    "Slovakia"=>"Bratislava", "Slovenia"=>"Ljubljana",  
    "Germany" => "Berlin", "Greece" => "Athens",  
    "Ireland"=>"Dublin", "Netherlands"=>"Amsterdam",
    "VietNam"=>"HaNoi","Thailand"=>"Bangkok",
    "England"=>"LonDon","China"=>"Beijing",
    "Austria" => "Vienna", "Poland"=>"Warsaw");  
    
    //sắp xếp mảng liên hợp
    asort($mang_lien_hop); 
    
    //lặp qua các phần tử mảng 
    foreach($mang_lien_hop as $country => $capital)  
    {  
        echo "Thủ đô của $country là $capital"."<br>" ;  
    }  
?>