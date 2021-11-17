<?php
    $action="registration";
    if(isset($_GET['act'])){
        $action=$_GET['act'];
    }
    switch($action){
        case "registration":
            include "View/registration.php";
            break;
        case "insertuser":
            $tenkh=$_POST['txttenkh'];
            $user=$_POST['txtusername'];
            $passedit=$_POST['txtpass'];
            $pass=md5($passedit);
            $email=$_POST['txtemail'];
            $diachi=$_POST['txtdiachi'];
            $phone=$_POST['txtsodt'];
            $db= new User();
            $db->insertUser($tenkh,$user,$pass,$email,$diachi,$phone);
            echo '<script> alert("Đăng Ký tài khoản thành Công!");</script>';
            echo '<meta http-equiv="refresh" content="0;url=../index.php?action=home&act=home"/>';
            break;
    }
?>