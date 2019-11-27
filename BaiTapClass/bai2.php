<h4>2. Viết PHP script để xử lý một class có chứa một thuộc tính và tham số </h4>
<form method="post" action="">
<input type="text" placeholder="Nhập chuỗi" name="txt_input" value=""/>
<input type="submit" value="Submit" name="btn_gt"/>
</form>
<?php
    if(!isset($_POST['txt_input'])){
        $_POST['txt_input']="undefine";
    }
   
    class Student{
        public $name=" ";
        public function __construct($name)
        {
            $this->name=$name;
        }
        public function read($act){
            echo $act;
        }
    }
    $student=new Student($_POST['txt_input']);
    $student->read($student->name);
?>