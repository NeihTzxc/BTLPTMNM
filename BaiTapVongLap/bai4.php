<h4>4. Viết PHP script để hiển thị số lượng một ký tự bất kì trong chuỗi </h4>
<form method="post" action="">
    <input type="text" placeholder="Nhập một chuỗi" name="txt_input" value=""/>
    <input type="text" placeholder="Nhập kí cần tìm" name="txt_kitu" value=""/>
    <input type="submit" value="Tìm" name="btn_gt"/>
</form>
<?php                                       
    if (!isset($_POST["txt_input"]))
    {
    //If not isset -> set with dumy value
        $_POST["txt_input"] = "undefine";
    }
    if (!isset($_POST["txt_kitu"]))
    {
    //If not isset -> set with dumy value
        $_POST["txt_kitu"] = "undefine";
    }
    $count="0"; 
    $input=$_POST['txt_input'];
    $kitu=$_POST['txt_kitu'];
    if(isset($_POST['btn_gt'])){
        for($x="0"; $x < strlen($input); $x++)  
        {   
          if(substr($input,$x,1) ==$kitu)  // với $x là vị trí băt đầu, 1 là độ dài chuỗi
          {  
          $count = $count+1;  
           }  
        }  
      echo "Có " .$count. " kí tự " .$kitu. " trong chuỗi '" .  $input. "'";
    }
    else {
    }
?>
