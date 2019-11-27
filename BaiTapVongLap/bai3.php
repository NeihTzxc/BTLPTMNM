<h4>3. Viết PHP script để hiển thị giai thừa của một số trong PHP </h4>
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
    $s=1;
    if(isset($_POST['btn_gt'])){
        for($i=1;$i<=$n;$i++){
            $s=$s*$i;
            
        }
        echo $s;
    }
?>