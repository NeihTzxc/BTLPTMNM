<!DOCTYPE <!DOCTYPE html>
<html>
<h4>3. Viết PHP script để xử lý một class để tính giai thừa của một số </h4>
<form method="post" action ="">
   <input type="text" placeholder="Nhập một chuỗi" name="txt_input_bai3" value="" />
   <input type="submit" value="Xuat" name="btn_gt"/>
   </form>
<body>
    <?php
    if (!isset($_POST["txt_input_bai3"]))
    {
    //If not isset -> set with dumy value
        $_POST["txt_input_bai3"] = "";
    }
    class tinh_giai_thua  
		{  
		  protected $_n;  
		  public function __construct($n)  
		   {  
			 if (!is_int($n))  
			   {  
				  throw new InvalidArgumentException('Không phải tham số!');  
			   }  
			$this->_n = $n;  
			}  
		  public function result()  
			{  
			 $giai_thua = 1;  
			 for ($i = 1; $i <= $this->_n; $i++)  
			  {  
				$giai_thua *= $i;  
			  }  
			   return $giai_thua;  
			 }  
         }  
         
         if (!isset($_POST["txt_input_bai3"]))
    {
    //If not isset -> set with dumy value
        $_POST["txt_input_bai3"] = "undefine";
    }
         $input=$_POST['txt_input_bai3']; 
         $input=(int)$input;
		$ket_qua = New tinh_giai_thua($input);  
		echo $ket_qua->result();
    ?>
</body>
</html>