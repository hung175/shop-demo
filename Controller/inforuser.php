<?php
    $action = "inforuser";
    if(isset($_GET['act'])){
        $action=$_GET['act'];
    }
    switch($action){
        case "inforuser":
            include "View/inforuser.php";
            break;
        case "updatepass":
            if(isset($_SESSION['makh'])){
                $makh=$_SESSION['makh'];
            }
            $passedit=$_POST['txtpass'];
            $newpassedit = $_POST['txtnewpass'];
            $newpasscheckedit = $_POST['txtretypenewpass'];
            $pass=md5($passedit);
            $newpass=md5($newpassedit);
            $newpasscheck=md5($newpasscheckedit);
            if(strcasecmp($pass,$newpass)==0){
                echo '<script> alert("Mật khẩu mới của bạn đang giống mật khẩu cũ!");</script>';
                echo '<meta http-equiv="refresh" content="0;url=../index.php?action=inforuser"/>';
                break;
            }
            if(strcasecmp($newpass,$newpasscheck)!=0){
                echo '<script> alert("Mật khẩu mới phải nhập giống nhau!");</script>';
                echo '<meta http-equiv="refresh" content="0;url=../index.php?action=inforuser"/>';
                break;
            }
            $db = new User();
            $checkpass = $db->checkPass($makh,$pass);
            if(empty($checkpass)){
                echo '<script> alert("Mật khẩu bạn nhập không đúng!");</script>';
                echo '<meta http-equiv="refresh" content="0;url=../index.php?action=inforuser"/>';
            }
            else if($checkpass != 'false'){
                $db->updatePass($makh,$newpass);
                $_SESSION['pass']=$newpass;
                echo '<script> alert("Đổi mật khẩu thành Công!");</script>';
                echo '<meta http-equiv="refresh" content="0;url=../index.php?action=inforuser"/>';
            }
            break;
        case "updateprofile":
            if(isset($_SESSION['makh'])){
                $makh=$_SESSION['makh'];
            }
            $upname=$_POST['txtupname'];
            $upuser=$_POST['txtupuser'];
            $upphone=$_POST['txtupphone'];
            $upemail=$_POST['txtupemail'];
            $upaddress=$_POST['txtupaddress'];
            $db = new User();
            $db->updateProfile($makh,$upname,$upuser,$upphone,$upemail,$upaddress);
                $_SESSION['tenkh']=$upname;
                $_SESSION['user']=$upuser;
                $_SESSION['email']=$upemail;
                $_SESSION['diachi']=$upaddress;
                $_SESSION['phone']=$upphone;
            echo '<script> alert("Cập nhật thành công!");</script>';
            echo '<meta http-equiv="refresh" content="0;url=../index.php?action=inforuser"/>';
            break;
    }
?>