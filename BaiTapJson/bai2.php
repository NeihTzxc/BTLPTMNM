<h4>    2. Lấy biểu diễn dưới dạng JSON của một giá trị trong một mảng  </h4>
<form method="post" action="">
<input type="text" placeholder="Nhập các phần tử mảng" name="txt_input" value=""/>
<input type="text" placeholder="Nhập vị trí của phần tử" name="input" value=""/>
<input type="submit" value="Submit" name="btn_gt"/>
</form>
<?php
    if (!isset($_POST["txt_input"]))
    {
    //If not isset -> set with dumy value
        $_POST["txt_input"] = "";
    }
    if (!isset($_POST["input"]))
    {
        //If not isset -> set with dumy value
         $_POST["input"]= "";
    }
    $str=$_POST["txt_input"];
    $indext=$_POST["input"];
    $mangt=array();
    if(isset($_POST["btn_gt"])){
        $mang=array();
        $index=0;
        $l=strlen($str);
        for($i=0;$i<$l;$i++){
            if(substr($str,$i,1)!=" "){
                $mang[$index]=substr($str,$i,1);
              
                $index++;
                
            }
        }
        for($i=0;$i<$l;$i++){
            if($indext==$i){
                $mangt[$indext]=$mang[$i];
                $indext=$i;
            }
        }
        var_dump($mangt);
       
    }
?>