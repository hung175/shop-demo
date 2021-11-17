<?php
    $action="login";
    if(isset($_GET['act'])){
        $action=$_GET['act'];
    }
    switch($action){
        case "login":
            include "View/login.php";
            break;
        case "loginuser":
            $user=$_POST['txtusername'];
            $passedit=$_POST['txtpassword'];
            $pass=md5($passedit);
            $db = new User();
            $user=$db->loginUser($user,$pass);
            if($user != 'false'){
                $_SESSION['makh']=$user[0];
                $_SESSION['tenkh']=$user[1];
                $_SESSION['user']=$user[2];
                $_SESSION['pass']=$user[3];
                $_SESSION['email']=$user[4];
                $_SESSION['diachi']=$user[5];
                $_SESSION['phone']=$user[6];
                if(isset($_SESSION['makh'])){
                    echo '<script> alert("Đăng nhập tài khoản thành công!");</script>';
                    echo '<meta http-equiv="refresh" content="0;url=../index.php?action=home&act=home"/>';
                }
                else{
                    echo '<script> alert("Tài khoản hoặc mật khẩu không chính xác!");</script>';
                    echo '<meta http-equiv="refresh" content="0;url=../index.php?action=login"/>';
                }
            }
            break;
        case "logout":
            if(isset($_SESSION['makh'])){
                unset($_SESSION['makh']);
                unset($_SESSION['tenkh']);
                unset($_SESSION['user']);
                unset($_SESSION['pass']);
                unset($_SESSION['email']);
                unset($_SESSION['diachi']);
                unset($_SESSION['phone']);
            }
            echo '<meta http-equiv="refresh" content="0;url=../index.php?action=home&act=home"/>';
            break;
        case "logout_login":
            if(isset($_SESSION['makh'])){
                unset($_SESSION['makh']);
                unset($_SESSION['tenkh']);
                unset($_SESSION['user']);
                unset($_SESSION['pass']);
                unset($_SESSION['email']);
                unset($_SESSION['diachi']);
                unset($_SESSION['phone']);
            }
            echo '<meta http-equiv="refresh" content="0;url=../index.php?action=login"/>';
            break;
    }
?>