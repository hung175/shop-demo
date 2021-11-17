<?php
$action="getnewpass";
if(isset($_GET['act']))
{
    $action=$_GET['act'];
}
switch($action)
{
    case "getnewpass_action":
        // gửi qua đây là địa chỉ email mà người dùng nhập vào, điah chỉ email dc đăng ký trong database
        if(isset($_POST['submit_email']))
        {
            $getemail=$_POST['email'];
            // lấy địa chỉ emmail xem có tồn tại trong database hay không, nếu có thì hiển thị ra địa chỉ mail và mật khẩu
            $ur=new User();
            $result=$ur->getEmail($getemail);
            if($result==true)
            {
                $email=md5($result['email']);
                $pass=md5($result['pass']);
                // tạo đường link http://localhost/index.php?action=home&act=home
                $link="<a href='http://localhost/index.php?action=getnewpass&act=resetps&key=".$email."&reset=".$pass."'>Click To Reset password</a>";
                // tiến hành gửi mail
                $mail = new PHPMailer();
                $mail->CharSet =  "utf-8";
                $mail->IsSMTP();
                // enable SMTP authentication
                $mail->SMTPAuth = true;                  
                // GMAIL username
                $mail->Username = "phplytest20@gmail.com";
                // GMAIL password
                $mail->Password = "Phplytest20@php";
                $mail->SMTPSecure = "tls";  
                // sets GMAIL as the SMTP server
                $mail->Host = "smtp.gmail.com";
                // set the SMTP port for the GMAIL server
                $mail->Port = "587";
                $mail->From='phplytest20@gmail.com';
                $mail->FromName='Admin';
                $mail->AddAddress($getemail, 'reciever_name');
                $mail->Subject  =  'Reset Password';
                $mail->IsHTML(true);
                $mail->Body    = 'Nhấn vào đây để thay đổi mật khẩu mới '.$link.'';
                if($mail->Send())
                {
                    echo '<script> alert("Hãy kiểm tra liên kết được gửi tới email của bạn!");</script>';
                    echo '<meta http-equiv="refresh" content="0;url=../index.php?action=home"/>';
                }
                else
                {
                echo "Mail Error - >".$mail->ErrorInfo;
                }
            }
        }
        break;
    case "resetps":
        include "View/resetpw.php";
        break;
    case "submit_new":
        if(isset($_POST['submit_password'])){
            $emailold=$_POST['email'];
            $passnew=md5($_POST['password']);
            $ur = new User();
            $ur->updateEmail($emailold,$passnew);
            echo '<script>alert("Mật khẩu mới đã được cập nhật thành công!");</script>';
        }
        include "View/login.php";
        break;
}
?>