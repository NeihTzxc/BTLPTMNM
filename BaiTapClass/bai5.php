<!DOCTYPE <!DOCTYPE html>
<html>
<h4>5. Viết PHP script để xử lý một class để cộng, trừ, nhân hoặc chia hai giá trị </h4>
<form method="post" action ="">
   <input type="number" placeholder="Nhập một số" name="txt_input_" value="" />
   <input type="number" placeholder="Nhập một số" name="txt_input2_" value="" />

   <input type="submit" value="Tinh" name="btn_submit"/>
   
   </form>
<body>
<?php
  class MyCalculator {  
		  private $_fval, $_sval;  
		  
		  public function __construct( $fval, $sval ) {  
		    $this->_fval = $fval;  
		    $this->_sval = $sval;  
		  }  
		  
		  public function add() {  
		    return $this->_fval + $this->_sval;  
		  }  
		  
		  public function subtract() {  
		    return $this->_fval - $this->_sval;  
		  }  
		  
		  public function multiply() {  
		    return $this->_fval * $this->_sval;  
		  }  
		
		  public function divide() {  
        if($this->_fval==0){
          return 0;
        }
        else if($this->_sval==0)  echo "Mẫu số không hợp lệ";
              else return $this->_fval / $this->_sval;  

		  }  
  }  
        if (!isset($_POST["txt_input_"]))
    {
    //If not isset -> set with dumy value
        $_POST["txt_input_"] = 0;
    }
    $input=$_POST['txt_input_'];
    if (!isset($_POST["txt_input2_"]))
    {
    //If not isset -> set with dumy value
        $_POST["txt_input2_"] = 0;
    }
    $input2=$_POST['txt_input2_'];
		$mycalc = new MyCalculator($input, $input2);   
         echo 'Cong';
         echo "<br>";
            echo  $mycalc-> add();
         
     echo "<br>";
     echo 'Nhan';
     echo "<br>";
		 echo $mycalc-> multiply(); 
     echo "<br>";
     echo 'Tru';
     echo "<br>";
		 echo $mycalc-> subtract(); 
     echo "<br>";
     echo 'Chia';
     echo "<br>";
         echo $mycalc-> divide();
        
       ?>
       
</body>

</html>