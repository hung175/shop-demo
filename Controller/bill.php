<?php
    $action = "bill";
    switch($action){
        case "bill":
            if(isset($_SESSION['makh'])){
                $makh=$_SESSION['makh'];
                $db= new Bill();
                $sohd=$db->insertOrder($makh);
                $_SESSION['sohd']=$sohd;
                $tongtien=0;
                foreach($_SESSION['cart'] as $key => $item){
                    $db->insertOrderDetail($sohd,$item['masp'],$item['sl'],$item['size'],$item['tongtien']);
                    $tongtien+=$item['tongtien'];
                }
                $db->updateOrderTotal($sohd,$tongtien);
                unset($_SESSION['cart']);
                echo "<script>alert('Xác nhận đơn hàng thành công!');</script>";
            }
            include "View/bill.php";
            break;
    }
?>