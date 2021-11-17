<?php
    class User{
        var $makh=0;
        var $tenkh=null;
        var $user=null;
        var $pass=null;
        var $email=null;
        var $diachi=null;
        var $phone=null;
        var $vaitro=0;

        public function __construct(){

        }

        public function insertUser($tenkh,$user,$pass,$email,$diachi,$phone){
            $query="insert into khachhang(makh,tenkh,user,pass,email,diachi,phone,vaitro)
            values(NULL,'$tenkh','$user','$pass','$email','$diachi','$phone',DEFAULT)";
            $db = new connect();
            $stm = $db->exec($query);
        }
        public function loginUser($user,$pass){
            $select = "SELECT * From khachhang where user='$user' and pass='$pass'";
            $db = new connect();
            $result=$db->getList($select);
            $set=$result->fetch();
            return $set;
        }
        function getInforuser($makh){
            $select="select * from khachhang";
            $db = new connect();
            $result = $db->getInstance($select);
            return $result;
        }
        public function checkPass($makh,$pass){
            $select = "SELECT * From khachhang where makh=$makh and pass='$pass'";
            $db = new connect();
            $result=$db->getList($select);
            $set=$result->fetch();
            return $set;
        }
        public function updatePass($makh,$newpass){
            $query="UPDATE khachhang SET pass='$newpass' WHERE makh=$makh";
            $db = new connect();
            $stm = $db->exec($query);
        }
        public function updateProfile($makh,$upname,$upuser,$upphone,$upemail,$upaddress){
            $query="UPDATE khachhang SET tenkh='$upname', user='$upuser', email='$upemail', diachi='$upaddress', phone='$upphone' WHERE makh=$makh";
            $db = new connect();
            $stm = $db->exec($query);
        }
        function getEmail($email){
            $select="select email,pass from khachhang where email='$email'";
            $db=new connect();
            $result=$db->getInstance($select);
            return $result;
        }
        function getPassEmail($email,$pass){
            $select="select email,pass from khachhang where md5(email)='$email' and md5(pass)='$pass'";
            $db=new connect();
            $result=$db->getInstance($select);
            return $result;
        }
        function updateEmail($emailold,$passnew){
            $query="update khachhang set pass='$passnew' where email='$emailold'";
            $db=new connect();
            $db->exec($query);
        }
    }
?>