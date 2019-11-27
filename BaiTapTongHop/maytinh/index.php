<?php session_start(); ?>
<?php require __DIR__."/header.php"?>
<?php 
?>
<div class="display_text">
    <p>
    <?php

        if(empty($_SESSION['toantu'])){
            $_SESSION['toantu']=false;
        }
        if(empty($_SESSION['a'])){
            $_SESSION['a']="";
        }
        if(empty($_SESSION['b'])){
            $_SESSION['b']="";
        }
        if($_SESSION['toantu']){
            nhap_b();
        }
        else {
            nhap_a();
        }
        if(isset($_POST['del'])){
            if($_SESSION['toantu']==false){
                $_SESSION['a'] =  substr( $_SESSION['a'],0,strlen( $_SESSION['a'] )-1);
                echo  $_SESSION['a'] ;
            }
            else {
                $_SESSION['b'] =  substr( $_SESSION['b'],0,strlen( $_SESSION['b'] )-1);
                echo  $_SESSION['b'] ;
            }
        }
        if(isset($_POST['ac'])){
         
            $_SESSION['a']="";
            $_SESSION['b']="";
            echo  "00";
        }
        // cộng
        if(isset($_POST['cong'])){
           echo "+";
           $_SESSION['bt']="+";
            $_SESSION['toantu']=true;
        }
        // trừ
        if(isset($_POST['tru'])){
            echo "-";
            $_SESSION['bt']="-";
             $_SESSION['toantu']=true;
         }
        //  nhân
         if(isset($_POST['nhan'])){
            echo "x";
            $_SESSION['bt']="x";
             $_SESSION['toantu']=true;
         }
         //chia
         if(isset($_POST['chia'])){
            echo "/";
            $_SESSION['bt']="/";
             $_SESSION['toantu']=true;
         }
        if(isset($_POST['bang'])){
            if(empty($_SESSION['a'])||empty($_SESSION['b'])){
                echo "chưa nhập a hoặc b";
            }
            else {
                 //cộng
            if(  $_SESSION['bt']=="+"){
                echo $_SESSION['a']+$_SESSION['b']; 
            }
            //trừ
            if(  $_SESSION['bt']=="-"){
                echo $_SESSION['a']-$_SESSION['b']; 
            }
            //nhân
            if(  $_SESSION['bt']=="x"){
                echo $_SESSION['a']*$_SESSION['b']; 
            }
            //chia
            if(  $_SESSION['bt']=="/"){
                if($_SESSION['a']==0){
                    echo "0";
                }
                else {
                    if(($_SESSION['b']==0)) echo "Không thể tính";
                    else {
                        echo $_SESSION['a']/$_SESSION['b']; ;
                    }
                }
               
            }
            }
          
            $_SESSION['toantu']=false;
            $_SESSION['a']="";
            $_SESSION['b']="";
        }
    
    ?>
    </p>

</div>                   
<div class="content" > 
<form method="post" action="">
    <input type="submit" value="1" name="mot"/>
    <input type="submit" value="2" name="hai">
    <input type="submit" value="3" name="ba" >
    <input type="submit" value="4" name="bon" >
    <input type="submit" value="5" name="nam" >
    <input type="submit" value="6" name="sau">
    <input type="submit" value="7" name="bay" >
    <input type="submit" value="8" name="tam" >
    <input type="submit" value="9" name="chin" >
    <input type="submit" value="0" name="khong" >
    <input type="submit" value="+" name="cong" >
    <input type="submit" value="-" name="tru" >
    <input type="submit" value="x" name="nhan" >
    <input type="submit" value="/" name="chia" >
    <input type="submit" value="." name="cham" >
    <input type="submit" value="=" name="bang" >
    <input type="submit" value="DEL" name="del" >
    <input type="submit" value="ON" name="ac" >
</form>                  
</div>
<?php 
 function nhap_a(){
    if(isset($_POST['mot'])){
        $_SESSION['a'] =   $_SESSION['a'] ."1";
        echo   $_SESSION['a'] ;
    }
    if(isset($_POST['hai'])){
        $_SESSION['a'] =   $_SESSION['a'] ."2";
        echo   $_SESSION['a'] ;
    }
    if(isset($_POST['ba'])){
        $_SESSION['a'] =   $_SESSION['a'] ."3";
        echo   $_SESSION['a'] ;
    }
    if(isset($_POST['bon'])){
        $_SESSION['a'] =   $_SESSION['a'] ."4";
        echo   $_SESSION['a'] ;
    }
    if(isset($_POST['nam'])){
        $_SESSION['a'] =   $_SESSION['a']."5";
        echo   $_SESSION['a'] ;
    }
    if(isset($_POST['sau'])){
        $_SESSION['a'] =   $_SESSION['a']."6";
        echo   $_SESSION['a'] ;
    }
    if(isset($_POST['bay'])){
        $_SESSION['a'] =   $_SESSION['a'] ."7";
        echo   $_SESSION['a'] ;
    }
    if(isset($_POST['tam'])){
        $_SESSION['a'] =   $_SESSION['a'] ."8";
        echo   $_SESSION['a'] ;
    }
    if(isset($_POST['chin'])){
        $_SESSION['a'] =   $_SESSION['a'] ."9";
        echo   $_SESSION['a'] ;
    }
    if(isset($_POST['khong'])){
        $_SESSION['a'] =   $_SESSION['a']."0";
        echo   $_SESSION['a'] ;
    }
    if(isset($_POST['cham'])){
        $_SESSION['a'] =   $_SESSION['a'].".";
        echo   $_SESSION['a'] ;
    }
 }  
 function nhap_b(){
    if(isset($_POST['mot'])){
        $_SESSION['b'] =   $_SESSION['b'] ."1";
        echo   $_SESSION['b'] ;
    }
    if(isset($_POST['hai'])){
        $_SESSION['b'] =   $_SESSION['b'] ."2";
        echo   $_SESSION['b'] ;
    }
    if(isset($_POST['ba'])){
        $_SESSION['b'] =   $_SESSION['b'] ."3";
        echo   $_SESSION['b'] ;
    }
    if(isset($_POST['bon'])){
        $_SESSION['b'] =   $_SESSION['b'] ."4";
        echo   $_SESSION['b'] ;
    }
    if(isset($_POST['nam'])){
        $_SESSION['b'] =   $_SESSION['b']."5";
        echo   $_SESSION['b'] ;
    }
    if(isset($_POST['sau'])){
        $_SESSION['b'] =   $_SESSION['b']."6";
        echo   $_SESSION['b'] ;
    }
    if(isset($_POST['bay'])){
        $_SESSION['b'] =   $_SESSION['b'] ."7";
        echo   $_SESSION['b'] ;
    }
    if(isset($_POST['tam'])){
        $_SESSION['b'] =   $_SESSION['b'] ."8";
        echo   $_SESSION['b'] ;
    }
    if(isset($_POST['chin'])){
        $_SESSION['b'] =   $_SESSION['b'] ."9";
        echo   $_SESSION['b'] ;
    }
    if(isset($_POST['khong'])){
        $_SESSION['b'] =   $_SESSION['b']."0";
        echo   $_SESSION['b'] ;
    }
    if(isset($_POST['cham'])){
        $_SESSION['b'] =   $_SESSION['b'].".";
        echo   $_SESSION['b'] ;
    }
}  
 ?> 
 
 
<?php require __DIR__."/footer.php"?>

