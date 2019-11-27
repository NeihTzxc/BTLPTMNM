<h4>4. Viết PHP script để xử lý Lấy từ đầu tiên của một câu</h4>
<form method="post" action="">
<input type="text" placeholder="Nhập một câu" name="txt_input" value=""/>
<input type="submit" value="Submit" name="btn_gt"/>
</form>
<?php                                 
    if (!isset($_POST["txt_input"]))
    {
    //If not isset -> set with dumy value
        $_POST["txt_input"] = "";
    }
    function bai4(){
        $txt=$_POST["txt_input"];
  
        $txt_s=" ";
        $l=strlen($txt);
        for($i=0;$i<$l;$i++){
            if(substr($txt,$i,1)==" "){
                break;
            }
            $txt_s.=substr($txt,$i,1);
        }
        echo $txt_s;
    }
    bai4();

?>