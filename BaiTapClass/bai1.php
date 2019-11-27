<!DOCTYPE html>
<html>


<h4>1. Viết PHP script để xử lý một class để hiện thị chuỗi "Class đã được khởi tạo" </h4>
<form method="post" action ="">
   <input type="text" placeholder="Nhập một chuỗi" name="txt_input_bai1" value="" />
   <input type="submit" value="Xuat" name="btn_gt"/>
   </form>
<body>
    <?php
    if (!isset($_POST["txt_input_bai1"]))
    {
    //If not isset -> set with dumy value
        $_POST["txt_input_bai1"] = "";
    }
    
   
        class MyClass {  
		  public function __construct()   
		  {  
            $input=$_POST['txt_input_bai1'];   
            
           echo $input."<br";
		  }  
		}  
		$userclass = new MyClass;
       ?>
    
    
</body>
</html>