<?php
$action="home";
if(isset($_GET['act']))
{
    $action=$_GET['act'];
}
switch($action){
    case "home":
        include "View/home.php";
        break;
    case "product":
        include "View/product.php";
        break;
    case "productdetails":
        include "View/productdetails.php";
        break;
    case "comment":
        $masp = $_POST['txtmasp'];
        $makh = $_SESSION['makh'];
        $noidung = $_POST['usercmt'];
        $db = new SanPham();
        $db->insertComment($masp,$makh,$noidung);
        include "View/productdetails.php";
        break;
    case "search":
        include "View/product.php";
        break;
    case "1":
        include "View/product.php";
        break;
    case "2":
        include "View/product.php";
        break;
    case "3":
        include "View/product.php";
        break;
    case "4":
        include "View/product.php";
        break;
    case "5":
        include "View/product.php";
        break;
    case "6":
        include "View/product.php";
        break;
    case "7":
        include "View/product.php";
        break;
}
?>