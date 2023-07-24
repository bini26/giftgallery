<?php
session_start();
$_SESSION['carthandler']=true;
if(isset($_GET["action"]))
{    
    if($_GET["action"]=="add-to-cart"){
        if(isset($_SESSION['cart'])){
            $cartdata = $_SESSION['cart'];
           
            $checker=array_column($cartdata,'p_id');
            if(in_array($_GET['cart_id'],$checker)){
                echo "<script>
                alert('Product is already in cart');
                window.location.href='product.php';
                </script>";
                
            }else{
                $cartdataCount = count($cartdata);
                $cartdata[$cartdataCount] = array('p_id'=>$_GET['cart_id'],'name'=>$_GET['cart_name'],'price'=>$_GET['cart_price'],'image'=>$_GET['cart_img'],'stock'=>$_GET['cart_stock']);
                $_SESSION['cart'] = $cartdata;
           
            echo "<script> alert('Product Added');
            window.location.href='product.php';
            </script>";
            }
        }
        else{
            $_SESSION['cart']=array(array('p_id'=>$_GET['cart_id'],'name'=>$_GET['cart_name'],'price'=>$_GET['cart_price'],'image'=>$_GET['cart_img'],'stock'=>$_GET['cart_stock']));
            echo "<script> alert('Product Added');
            window.location.href='product.php';</script>";
        } 

    }
}

if(isset($_GET["action"])){
    if($_GET["action"]=="delete"){
    
    
    foreach($_SESSION['cart'] as $key => $value){
        
        if($value['p_id']==$_GET['id']){
            unset($_SESSION['cart'][$key]);
            echo "<script>
            alert('Item Removed');
            window.location.href='cart.php';</script>";
        }
    }
    
}
}

?>