<h4>4. Viết PHP script để xử lý một class để sắp xếp một mảng số nguyên  </h4>
<form method="post" action="">
<input type="text" placeholder="Nhập các phần tử mảng" name="txt_input_Bai4" value=""/>
<input type="submit" value="Submit" name="btn_gt"/>
</form>
<?php
    class Mang{
        public  $str=" ";
        public function __construct($str)
        {
            $this->str=$str;
        }
        public function tachchuoi($str)
        {
            $mang=array();
            $index=0;
            $l=strlen($str);
            for($i=0;$i<$l;$i++){
                if(substr($str,$i,1)!=" "){
                    $mang[$index]=substr($str,$i,1);
                    $index++;
                }
            }
            return $mang;
        }
        function tangdan(&$mang){
            $t=0;
            foreach($mang as $index1=>$value1){
                foreach($mang as $index2=>$value2){
                    if($mang[$index1]<$mang[$index2]){
                        $t=$mang[$index1];
                        $mang[$index1]=$mang[$index2];
                        $mang[$index2]=$t;
                    }
                }
            }
        }
        function giamdan(&$mang){
            $t=0;
            foreach($mang as $index1=>$value1){
                foreach($mang as $index2=>$value2){
                    if($mang[$index1]>$mang[$index2]){
                        $t=$mang[$index1];
                        $mang[$index1]=$mang[$index2];
                        $mang[$index2]=$t;
                    }
                }
            }
        }
    }
    if (!isset($_POST["txt_input_Bai4"]))
    {
        $_POST["txt_input_Bai4"] = "";
    }
    $mangObject =new Mang($_POST["txt_input_Bai4"]);
    $mang=$mangObject->tachchuoi($mangObject->str);
    $mangObject->tangdan(($mang));
    echo "Mảng tăng dần: ";
    foreach($mang as $value){
        echo $value." "; 
    }
    echo "<br>";
    $mangObject->giamdan(($mang));
    echo "Mảng giảm dần: ";
    foreach($mang as $value){
        echo $value." "; 
    }
?>