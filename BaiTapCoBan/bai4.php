<h4>4. Viết PHP script để lấy thư mục gốc, hiện thị toàn bộ nội dung cây thư mục </h4>
<?php
    $rd = getenv('DOCUMENT_ROOT');  
    echo $rd."<br>";
?>