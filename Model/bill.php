<?php
    class Bill{
        var $sohd=null;
        var $makh=null;
        var $ngaylap=null;
        var $tongtien=0;
        var $mahh=null;
        public function __construct(){

        }
        function insertOrder($makh){
            $date = new DateTime('now');
            $ngay=$date->format('Y-m-d');
            $query="insert into hoadon(mahd,makh,ngaylap,tongtien)values(Null,$makh,'$ngay',0)";
            $db=new connect();
            $db->exec($query);
            $select="select mahd from hoadon order by mahd DESC limit 1";
            $sohd=$db->getInstance($select);
            return $sohd[0];
        }
        function insertOrderDetail($sohd,$masp,$soluong,$size,$thanhtien){
            $query="insert into chitiethoadon(mahd,masp,soluong,size,thanhtien,trangthai)
            values($sohd,$masp,$soluong,'$size',$thanhtien,0)";
            $db= new connect();
            $db->exec($query);
        }
        function updateOrderTotal($sohd,$tongtien){
            $query="update hoadon set tongtien=$tongtien where mahd=$sohd";
            $db=new connect();
            $db->exec($query);
        }
        function getBillUserInfor($mahd){
            $select="select b.mahd,b.ngaylap,a.tenkh,a.diachi,a.phone FROM khachhang a INNER join hoadon b on a.makh=b.makh WHERE b.mahd=$mahd";
            $db = new connect();
            $result = $db->getInstance($select);
            return $result;
        }
        function getBillItemInfor($mahd){
            $select="select a.tensp,a.size,a.dongia,b.soluong,a.khuyenmai FROM sanpham a INNER join chitiethoadon b on a.masp=b.masp WHERE b.mahd=$mahd";
            $db = new connect();
            $result = $db->getList($select);
            return $result;
        }
        function checkBill($makh){
            $select = "SELECT b.mahd,b.ngaylap FROM khachhang a,hoadon b WHERE a.makh=b.makh and a.makh=$makh order by b.mahd DESC";
            $db = new connect();
            $result = $db->getList($select);
            return $result;
        }
    }
?>