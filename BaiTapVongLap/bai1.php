<h4>1. Viết PHP script để hiển thị 1-2-3-4-5-6-7-8-9-…-100 trên một dòng thông qua vòng lặp for, while</h4>
<h4>Vòng for</h4>
<?php
    for($i=1;$i<=100;$i++){
        if($i==100){
            echo $i;
            break;
        } 
        echo $i."-"; 
        
    }
?>
<h4>Vòng while</h4>
<?php
    $i=1;
    while($i<=100){
        if($i==100){
            echo $i;
            break;
        } 
        echo $i."-"; 
        $i++;
    }
?>