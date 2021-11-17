<?php
    $action = "cart";
    if(!isset($_SESSION['cart'])){
        $_SESSION['cart']=array();
    }
    if(isset($_GET['act'])){
        $action = $_GET['act'];
    }
    switch($action){
        case "cart":
            include "View/cart.php";
            break;
        case "addcart":
            $nhom = $_POST['nhom'];
            $size = $_POST['size'];
            $prosize = find_product_size($nhom,$size);
            $masp=$prosize[0];
            $size=$prosize[1];
            
            $sl = $_POST['soluong'];
            add_item($masp,$size,$sl);
            echo '<script> alert("Đã thêm vào giỏ hàng!");</script>';
            echo '<meta http-equiv="refresh" content="0;url=../index.php?action=home&act=productdetails&id='.$masp.'"/>';
            break;
        case "update_item":
            $upsl=$_POST['upsl'];
            foreach($upsl as $key => $sl){
                if($_SESSION['cart'][$key]['sl']!=$sl)
                {
                    update_item($key,$sl);
                }
            }
            echo '<script> alert("Đã cập nhật!");</script>';
            echo '<meta http-equiv="refresh" content="0;url=../index.php?action=cart&act=cart"/>';
            break;
        case "delete_item":
            if(isset($_GET['id'])){
                $masp=$_GET['id'];
                unset($_SESSION['cart'][$masp]);        
            }
            echo '<meta http-equiv="refresh" content="0;url=../index.php?action=cart&act=cart"/>';
            break;
    }
?>
