<h4>2. Viết PHP script để hiển thị tổng dãy số nguyên từ 1 đến 200.  </h4>
<?php
    $s=0;
    for($i=1;$i<=200;$i++){
        $s=$s+$i;
    }
    echo "<h4>Tổng là: </h4>".$s;
?>