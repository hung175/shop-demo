<?php
    function find_product_size($nhom,$size){
        $select = "select masp,size from sanpham where nhom=$nhom and size='$size'";
        $db = new connect();
        $result = $db->getInstance($select);
        return $result;
    }
    function add_item($masp,$size,$sl){
        if(isset($_SESSION['cart'][$masp])){
            $sl += $_SESSION['cart'][$masp]['sl'];
            update_item($masp,$sl);
            return;
        }
        $cartpro = new SanPham();
        $product = $cartpro->getProductDetail($masp);
        $khuyenmai=$product['khuyenmai'];
        if($khuyenmai<=0){
            $dongia = $product['dongia'];
        }
        else {
            $dongia = $khuyenmai;
        }
        $tensp = $product['tensp'];
        $mota = $product['mota'];
        $hinhanh = $product['hinhanh'];
        $tongtien = $sl*$dongia;
        $item = array(
            'masp'=>$masp,
            'hinhanh'=>$hinhanh,
            'tensp'=>$tensp,
            'size'=>$size,
            'dongia'=>$dongia,
            'mota'=>$mota,
            'sl'=>$sl,
            'tongtien'=>$tongtien
        );
        $_SESSION['cart'][$masp]=$item;
    }
    function total_cart(){
        $tong=0;
        foreach($_SESSION['cart'] as $item)
        {
            $tong+=$item['tongtien'];
        }
        $tong =number_format($tong,0);
        return $tong;
    }
    function update_item($masp,$sl){
        if($sl<=0){
            unset($_SESSION['cart'][$masp]);
        }
        else{
            $_SESSION['cart'][$masp]['sl']=$sl;
            $totalnew=$_SESSION['cart'][$masp]['sl']*$_SESSION['cart'][$masp]['dongia'];
            $_SESSION['cart'][$masp]['tongtien']=$totalnew;
        }
    }
?>