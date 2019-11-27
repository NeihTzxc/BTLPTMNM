

<h4>3. Viết PHP script để xử lý Lấy Username từ địa chỉ email đã cho  </h4>
<html>
   <form method="post" action ="">
   <input type="text" placeholder="Nhập một chuỗi" name="txt_input" value="" />
   <input type="submit" value="Xuat" name="btn_gt"/>
   </form>
   
   <body>
   
       <?php
       if (!isset($_POST["txt_input"]))
       {
       //If not isset -> set with dumy value
           $_POST["txt_input"] = "undefine";
       }
       
       $input=$_POST['txt_input'];
       function lay_user($dia_chi_mail='a')
       {
          
		$user = strstr($dia_chi_mail, '@', true);  
		echo $user."<br>";
       }
        lay_user($input);
       ?>
       
   </body>
</html>
   