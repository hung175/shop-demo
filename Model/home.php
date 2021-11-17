<?php
    class SanPham{
        var $masp=0;
        var $tensp=null;
        var $dongia=0;
        var $khuyenmai=0;
        var $hinhanh=null;
        var $nhom=0;
        var $maloai=0;
        var $ngay=null;
        var $mota=null;
        var $size=null;
        public function __construct(){

        }
        public function getProductSale(){
            $select="SELECT * FROM sanpham WHERE khuyenmai>0 limit 4";
            $db = new connect();
            $results = $db->getList($select);
            return $results;
        }

        public function getProductAll(){
            $select="select * from sanpham";
            $db= new connect();
            $results = $db->getList($select);
            return $results;
        }
        //lấy sản phẩm chi tiết
        public function getProductDetail($masp){
            $select = "select * from sanpham where masp=$masp";
            $db= new connect();
            $results = $db->getInstance($select);
            return $results;
        }
        public function getProductPage($start,$limit){
            $select="select * from sanpham limit ".$start.",".$limit;
            $db= new connect();
            $results = $db->getList($select);
            return $results;
        }
        //lấy nhóm sản phẩm
        public function getProductDetailGroup($nhom){
            $select = "select * from sanpham where nhom=:nhom";
            $db=new connect();
            $stm = $db->getListP($select);
            $stm->bindParam(':nhom',$nhom);
            $stm->execute();
            return $stm;
        }
        //lay size
        public function getProductDetailGroupSize($nhom){
            $select = "select distinct(size) from sanpham where nhom=:nhom order by size";
            $db=new connect();
            $stm = $db->getListP($select);
            $stm->bindParam(':nhom',$nhom);
            $stm->execute();
            return $stm;
        }
        public function insertComment($masp,$makh,$noidung)
        {
            $date=new DateTime("now");
            $ngay=$date->format("Y-m-d");
            $query="insert into binhluan(mabl,masp,makh,noidung,ngay)values(Null,'$masp','$makh','$noidung','$ngay')";
            $db=new connect();
            $db->exec($query);
        }
        public function countComment($masp)
        {
            $select="select count(mabl) from binhluan where masp='$masp'";
            $db=new connect();
            $result=$db->getInstance($select);
            return $result;
        }
        public function showComment($masp){
            $select="select a.tenkh,b.noidung  FROM khachhang a INNER join binhluan b 
            on a.makh=b.makh WHERE b.masp='$masp'";
            $db=new connect();
            $results=$db->getList($select);
            return $results;
        }
        public function searchProduct($txtsearch){
            $select="select * from sanpham where tensp like :tensp";
            $db= new connect();
            $stm = $db->getListP($select);
            $stm ->bindValue(':tensp',"%".$txtsearch."%");
            $stm->execute();
            return $stm;
        }
        public function getimgMenu(){
            $select = "select mamenu, imgmenu from menu limit 7";
            $db = new connect();
            $result = $db->getList($select);
            return $result;
        }
        public function getnameMenu(){
            $select = "select mamenu, tenmenu from menu limit 7";
            $db = new connect();
            $result = $db->getList($select);
            return $result;
        }
        public function getProductMenu($mamenu){
            $select = "select a.* from sanpham a,loai b,menu c where a.maloai=b.maloai and b.mamenu=c.mamenu and c.mamenu=$mamenu";
            $db = new connect();
            $result = $db->getList($select);
            return $result;
        }
        function getNameMenuHeader(){
            $select = "SELECT name FROM menuheader LIMIT 7";
            $db= new connect();
            $result = $db->getList($select);
            return $result;
        }
        function getLinkMenuHeader(){
            $select = "SELECT link FROM menuheader LIMIT 7";
            $db= new connect();
            $result = $db->getList($select);
            return $result;
        }
    }
?>