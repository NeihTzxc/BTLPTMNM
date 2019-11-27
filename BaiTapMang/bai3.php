
<h4>
Viết PHP script để hiện thi văn bản Chuyển đổi mảng thành chữ hoa
 - chữ thường và ngược lại thông qua button html: 
</h4>
<?php
        $mang=array('A','b','C','d','E','A','b','C','d','E','A','b','C','d','E','A','b','C','d','E');
        $mangB=$mang;?>
<h4>Cho mảng: 
    <?php
        foreach($mang as $key=>$value){
            echo  $value." ";
        }
    ?>
</h4>

<form method="post" action="">
    
    <input type="submit" value="Upper" name="btn_upper"/>

    <input  type="submit" value="Lower" name="btn_lower"/>
</form>

 <h4>Mảng sau khi chuyển đổi:  
    <?php
        if(isset($_POST['btn_upper']))
        {
            foreach($mang as $key=>$value){
                echo strtoupper($value)." ";  
               
            }
            
        }
        if(isset($_POST['btn_lower']))
        {
            foreach($mang as $key=>$value){
                echo strtolower($value)." ";  
         
             }
        }
      
    ?>
</h4>