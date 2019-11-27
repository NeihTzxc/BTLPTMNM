<h4>1. Viết PHP script để xử lý hàm để tính giai thừa của một số </h4>
<form method="post" action="">
    <input type="text" placeholder="Nhập một số nguyên dương" name="txt_n" value="" style="width:300px;"/>
    <input type="submit" value="Tính" name="btn_gt"/>
</form>
<?php
    if (!isset($_POST["txt_n"]))
    {
    //If not isset -> set with dumy value
        $_POST["txt_n"] = "undefine";
    }
    $n=$_POST['txt_n'];
    $n=$n;
    
    function giaithua($n){
        $s=1;
        for($i=1;$i<=$n;$i++){
            $s=$s*$i;
           
        }
        return $s;
    }
    if(isset($_POST['btn_gt'])){
        echo giaithua($n);
    }
?>