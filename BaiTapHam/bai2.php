<h4>2. Viết PHP script để xử lý hàm để đảo ngược chuỗi </h4>
<form method="post" action="">
    <input type="text" placeholder="Nhập một chuỗi" name="txt_input" value=""/>
  
    <input type="submit" value="Chuyển đổi" name="btn_cd"/>
</form>
<?php
    if (!isset($_POST["txt_input"]))
    {
    //If not isset -> set with dumy value
        $_POST["txt_input"] = "undefine";
    }
    function daonguoc(){
        $str_i=$_POST['txt_input'];
        $str_t=" ";
        $l=strlen($str_i);
        if(isset($_POST['btn_cd'])){
            echo "Chuỗi gốc: ".$str_i."<br>";
            for($i=$l-1;$i>=0;$i--){
                $str_t=$str_t.substr($str_i,$i,1);
            }
            echo "Chuỗi đảo ngược là: ".$str_t;
        }
        else{
            $_POST['btn_cd'] = "undefine";
        }
    }
    daonguoc();
  
?>