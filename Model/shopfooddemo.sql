-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3307
-- Generation Time: Nov 17, 2021 at 03:36 PM
-- Server version: 5.7.24
-- PHP Version: 7.4.16

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `shopfooddemo`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `user` varchar(30) NOT NULL,
  `pass` varchar(150) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`user`, `pass`) VALUES
('admin1', '202cb962ac59075b964b07152d234b70');

-- --------------------------------------------------------

--
-- Table structure for table `binhluan`
--

CREATE TABLE `binhluan` (
  `mabl` int(10) NOT NULL,
  `masp` int(10) NOT NULL,
  `makh` int(10) NOT NULL,
  `noidung` text NOT NULL,
  `ngay` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `binhluan`
--

INSERT INTO `binhluan` (`mabl`, `masp`, `makh`, `noidung`, `ngay`) VALUES
(1, 23, 3, 'Hơi bị ngon nha', '2021-10-14'),
(2, 23, 3, 'T thấy dở mà', '2021-10-14'),
(3, 23, 3, 'Món này cũng ngon á', '2021-10-14'),
(4, 23, 3, 'Ngon vãi chưởng', '2021-10-14'),
(5, 31, 3, 'Món này ngon quá', '2021-11-16'),
(6, 6, 3, 'Hấp dẫn', '2021-11-16'),
(7, 6, 3, 'Hấp dẫn', '2021-11-16'),
(8, 6, 5, 'Ngon', '2021-11-17');

-- --------------------------------------------------------

--
-- Table structure for table `chitiethoadon`
--

CREATE TABLE `chitiethoadon` (
  `mahd` int(10) NOT NULL,
  `masp` int(10) NOT NULL,
  `soluong` int(10) NOT NULL,
  `size` varchar(10) NOT NULL,
  `thanhtien` int(10) NOT NULL,
  `trangthai` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `chitiethoadon`
--

INSERT INTO `chitiethoadon` (`mahd`, `masp`, `soluong`, `size`, `thanhtien`, `trangthai`) VALUES
(1, 31, 4, 'Vừa', 156000, 0),
(2, 49, 6, 'Vừa', 114000, 0),
(2, 52, 1, 'Vừa', 37000, 0),
(3, 37, 3, 'Vừa', 207000, 0),
(3, 43, 1, 'Vừa', 19000, 0),
(4, 5, 1, 'Nhỏ', 69000, 0),
(4, 6, 1, 'Vừa', 85000, 0),
(4, 10, 1, 'Vừa', 99000, 0),
(4, 11, 1, 'Lớn', 139000, 0),
(4, 31, 1, 'Vừa', 39000, 0),
(5, 7, 1, 'Nhỏ', 105000, 0),
(5, 19, 1, 'Nhỏ', 60000, 0),
(6, 50, 1, 'Nhỏ', 17000, 0),
(6, 51, 1, 'Vừa', 28000, 0),
(7, 6, 1, 'Vừa', 85000, 0),
(8, 25, 1, 'Vừa', 25000, 0),
(9, 52, 1, 'Vừa', 37000, 0);

-- --------------------------------------------------------

--
-- Table structure for table `hoadon`
--

CREATE TABLE `hoadon` (
  `mahd` int(10) NOT NULL,
  `makh` int(10) NOT NULL,
  `ngaylap` date NOT NULL,
  `tongtien` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `hoadon`
--

INSERT INTO `hoadon` (`mahd`, `makh`, `ngaylap`, `tongtien`) VALUES
(1, 3, '2021-11-16', 156000),
(2, 3, '2021-11-16', 151000),
(3, 3, '2021-11-16', 226000),
(4, 5, '2021-11-17', 431000),
(5, 3, '2021-11-17', 165000),
(6, 3, '2021-11-17', 45000),
(7, 3, '2021-11-17', 85000),
(8, 3, '2021-11-17', 25000),
(9, 3, '2021-11-17', 37000);

-- --------------------------------------------------------

--
-- Table structure for table `khachhang`
--

CREATE TABLE `khachhang` (
  `makh` int(10) NOT NULL,
  `tenkh` varchar(30) NOT NULL,
  `user` varchar(20) NOT NULL,
  `pass` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `diachi` text NOT NULL,
  `phone` varchar(12) NOT NULL,
  `vaitro` int(1) DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `khachhang`
--

INSERT INTO `khachhang` (`makh`, `tenkh`, `user`, `pass`, `email`, `diachi`, `phone`, `vaitro`) VALUES
(1, 'Nguyễn Thánh Tôn', 'thanhton123', '123', 'thanhton@gmail.com', '135/5 đường Cao Minh quận 12 TP HCM', '0367725866', 0),
(2, 'Gia Cát Lượng', 'hoalongphuongso', '123', 'hoalongtiensinh@gmail.com', '135/5 đường Cao Minh quận 12 TP HCM', '0388247642', 0),
(3, 'Đổng Trác', 'dongtrac', '202cb962ac59075b964b07152d234b70', 'phplytest20@gmail.com', '105/2 phường 7 quận 1 Tp.hcm', '0903778824', 0),
(5, 'Lý Na Tra', 'natra', '202cb962ac59075b964b07152d234b70', 'natra@gmail.com', '23 ấp Trung quận Gò Vấp Tp.hcm', '0903778222', 0);

-- --------------------------------------------------------

--
-- Table structure for table `loai`
--

CREATE TABLE `loai` (
  `maloai` int(10) NOT NULL,
  `tenloai` varchar(30) CHARACTER SET utf8mb4 NOT NULL,
  `mamenu` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `loai`
--

INSERT INTO `loai` (`maloai`, `tenloai`, `mamenu`) VALUES
(1, 'Bò', 1),
(2, 'Gà', 1),
(3, 'Heo', 1),
(4, 'Tôm', 2),
(5, 'Mực', 2),
(6, 'Bò viên', 2),
(7, 'Lạp xưởng', 2),
(8, 'Chay', 2),
(9, 'Cay', 3),
(10, 'Không cay', 3),
(11, 'Gà', 4),
(12, 'Sườn', 4),
(13, 'Nước uống kèm', 5),
(14, 'Khoai tây chiên', 6),
(15, 'Phô mai', 6),
(16, 'Gà', 6);

-- --------------------------------------------------------

--
-- Table structure for table `menu`
--

CREATE TABLE `menu` (
  `mamenu` int(10) NOT NULL,
  `tenmenu` varchar(30) NOT NULL,
  `imgmenu` varchar(150) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `menu`
--

INSERT INTO `menu` (`mamenu`, `tenmenu`, `imgmenu`) VALUES
(1, 'Hamburger', '49.jpg'),
(2, 'Pizza', '21.jpg'),
(3, 'Gà', '9.jpg'),
(4, 'Cơm', '14.jpg'),
(5, 'Nước uống', '33.jpg'),
(6, 'Món ăn kèm', '24.jpg'),
(7, 'Tất cả', 'logo16.png');

-- --------------------------------------------------------

--
-- Table structure for table `menuheader`
--

CREATE TABLE `menuheader` (
  `id` int(10) NOT NULL,
  `name` varchar(30) NOT NULL,
  `link` varchar(150) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `menuheader`
--

INSERT INTO `menuheader` (`id`, `name`, `link`) VALUES
(1, 'logo16.png', 'index.php?action=home'),
(2, 'TÌM MÓN ĂN', '#'),
(3, 'Mã E-VOUCHER', '#'),
(4, 'KHUYẾN MÃI', '#'),
(5, 'PHẢN HỒI', '#'),
(6, 'GIỎ HÀNG', 'index.php?action=cart'),
(7, 'TÀI KHOẢN', '#');

-- --------------------------------------------------------

--
-- Table structure for table `sanpham`
--

CREATE TABLE `sanpham` (
  `masp` int(10) NOT NULL,
  `tensp` varchar(50) NOT NULL,
  `dongia` float NOT NULL,
  `khuyenmai` float NOT NULL,
  `hinhanh` varchar(30) NOT NULL,
  `nhom` int(3) NOT NULL,
  `maloai` int(10) NOT NULL,
  `ngay` date NOT NULL,
  `mota` varchar(2000) NOT NULL,
  `size` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `sanpham`
--

INSERT INTO `sanpham` (`masp`, `tensp`, `dongia`, `khuyenmai`, `hinhanh`, `nhom`, `maloai`, `ngay`, `mota`, `size`) VALUES
(1, 'Burger Siêu Phô Mai', 49000, 0, '38.jpg', 0, 1, '2021-10-11', 'Nhân bánh tràn đầy vị thơm của phô mai', 'Nhỏ'),
(2, 'Burger Whopper Bò Siêu Pho Mai', 99000, 0, '39.jpg', 1, 1, '2021-10-11', 'Nhân gồm 1 lớp bò và 1 lớp phô mai', 'Nhỏ'),
(3, 'Burger Whopper Bò Siêu Pho Mai', 129000, 0, '40.jpg', 1, 1, '2021-10-11', 'Nhân gồm 1 lớp bò và 1 lớp phô mai lớn', 'Vừa'),
(4, 'Burger Bò Nướng Khoai Tây', 60000, 0, '41.jpg', 2, 1, '2021-10-11', 'Nhân gồm 1 lớp bò và 1 lớp khoai tây lát', 'Nhỏ'),
(5, 'Burger Bò Nướng Tắm Phô Mai', 69000, 0, '42.jpg', 3, 1, '2021-10-11', 'Nhân gồm bò, phô mai, cà chua, rau xanh...', 'Nhỏ'),
(6, 'Burger Bò Nướng Tắm Phô Mai', 99000, 85000, '43.jpg', 3, 1, '2021-10-11', 'Nhân gồm bò, phô mai, cà chua, rau xanh...', 'Vừa'),
(7, 'Burger Bò Nướng Whopper', 105000, 0, '44.jpg', 4, 1, '2021-10-11', 'Nhân là miếng bò Whopper chất lượng cùng rau củ', 'Nhỏ'),
(8, 'Burger Bò Nướng Hành Chiên', 49000, 0, '45.jpg', 5, 1, '2021-10-11', 'Nhân là lớp bò cùng với hành chiên', 'Nhỏ'),
(9, 'Burger Bò Khoai Giòn Tràn Phô Mai', 60000, 0, '46.jpg', 6, 1, '2021-10-11', 'Nhân gồm miếng bò vừa và lớp phô mai tràn viền bánh', 'Nhỏ'),
(10, 'Burger Bò Khoai Giòn Tràn Phô Mai', 99000, 0, '47.jpg', 6, 1, '2021-10-11', 'Nhân gồm 2 miếng bò vừa và lớp phô mai tràn viền bánh', 'Vừa'),
(11, 'Burger Bò Khoai Giòn Tràn Phô Mai', 139000, 0, '48.jpg', 6, 1, '2021-10-11', 'Nhân gồm miếng bò to và lớp phô mai tràn viền bánh', 'Lớn'),
(12, 'Burger Bò Nướng Siêu Đặc Biệt', 150000, 0, '49.jpg', 7, 1, '2021-10-11', 'Lớp nhân là 2 miếng bò siêu to và nhiều phần phụ khác', 'Lớn'),
(13, 'Burger Bò Nướng Whopper American', 60000, 0, '50.jpg', 8, 1, '2021-10-11', 'Phần chính của nhân bánh là miếng bò nướng Wopper chính hiệu American', 'Nhỏ'),
(14, 'Burger Bò Nướng Whopper American', 99000, 0, '51.jpg', 8, 1, '2021-10-11', 'Phần chính của nhân bánh là 2 miếng bò nướng Wopper chính hiệu American', 'Vừa'),
(15, 'Burger Heo Xông Khói', 39000, 0, '52.jpg', 9, 3, '2021-10-11', 'Nhân gồm miếng heo xông khói và rau củ khác', 'Nhỏ'),
(16, 'Burger Heo Xông Khói', 59000, 0, '53.jpg', 9, 3, '2021-10-11', 'Nhân gồm 2 miếng heo xông khói và rau củ khác', 'Vừa'),
(17, 'Burger Heo Xông Khói Pho Mai', 49000, 0, '54.jpg', 10, 3, '2021-10-11', 'Nhân gồm 1 miếng thịt heo xông khói, 1 lớp phô mai béo và rau củ khác', 'Nhỏ'),
(18, 'Burger Heo Xông Khói Pho Mai', 99000, 0, '55.jpg', 10, 3, '2021-10-11', 'Nhân gồm 2 miếng thịt heo xông khói, 1 lớp phô mai béo và rau củ khác', 'Vừa'),
(19, 'Burger Gà Phô Mai ', 60000, 0, '56.jpg', 11, 2, '2021-10-11', 'Nhân chính của bánh gồm 1 miếng gà giòn và lớp phô mai', 'Nhỏ'),
(20, 'Burger Gà Nướng', 60000, 0, '57.jpg', 12, 2, '2021-10-11', 'Nhân của bánh gồm 1 miếng gà nướng và rau củ khác', 'Nhỏ'),
(21, 'Burger Gà Giòn Cay ', 60000, 0, '58.jpg', 13, 2, '2021-10-11', 'Nhân của bánh gồm 1 miếng gà giòn cay và rau củ khác', 'Nhỏ'),
(22, 'Burger Heo Nướng Xí Muội Phô Mai', 99000, 0, '59.jpg', 14, 3, '2021-10-11', 'Nhân bánh gồm thịt heo, phô mai và rau củ rất đa dạng', 'Vừa'),
(23, 'Burger Heo Nướng Xí Muội Phô Mai', 129000, 0, '60.jpg', 14, 3, '2021-10-11', 'Nhân bánh gồm 2 miếng thịt heo, phô mai và rau củ rất đa dạng', 'Lớn'),
(24, 'Burger Gà Hầm Tiêu Đen', 79000, 0, '61.jpg', 15, 2, '2021-10-11', 'Nhân gồm 2 miếng gà hầm tiêu đen và các loại rau củ khác', 'Vừa'),
(25, 'Gà Giòn Không Cay', 29000, 25000, '1.jpg', 16, 9, '2021-10-11', '1 Miếng đùi gà giòn không cay', 'Vừa'),
(26, 'Gà Rán Giòn Cay', 29000, 0, '2.jpg', 17, 10, '2021-10-11', '1 Miếng đùi gà giòn cay', 'Vừa'),
(27, 'Gà Rán BBQ', 35000, 0, '3.jpg', 18, 9, '2021-10-11', '1 Miếng đùi gà giòn BBQ', 'Vừa'),
(28, 'Cơm Gà Nugget', 39000, 0, '10.jpg', 19, 11, '2021-10-11', 'Gồm cơm, gà Nugget cùng các  rau củ khác', 'Vừa'),
(29, 'Cơm Gà CNC Nugget', 45000, 0, '11.jpg', 20, 11, '2021-10-11', 'Gồm cơm, gà Nugget, gà CNC cùng các  rau củ khác', 'Vừa'),
(30, 'Cơm Gà Chiên Không Xương', 35000, 0, '13.jpg', 21, 11, '2021-10-11', 'Gồm cơm, gà 1 miếng chiên giòn và rau củ khác', 'Vừa'),
(31, 'Cơm Cánh Gà BBQ', 45000, 39000, '16.jpg', 22, 11, '2021-10-11', 'Gồm cơm, cách gà BBQ, sốt và rau xanh khác', 'Vừa'),
(32, 'Cơm Bò Nướng Cùng Nugget', 43000, 0, '12.jpg', 23, 12, '2021-10-11', 'Gồm cơm, bò 1 miếng, Nugget và rau củ khác', 'Vừa'),
(33, 'Cơm Bò Nướng Sốt BBQ', 49000, 0, '14.jpg', 24, 12, '2021-10-11', 'Gồm cơm, 1 miếng bò nướng sốt BBQ thơm ngon và rau xanh', 'Vừa'),
(34, 'Cơm Bò Nướng Sốt Xả Ớt', 49000, 0, '15.jpg', 25, 12, '2021-10-11', 'Gồm cơm, 1 miếng bò nướng sốt Xả Ớt cay nồng thơm ngon và rau xanh', 'Vừa'),
(35, 'Cơm Bò Nướng Sốt Phô Mai Ý', 49000, 0, '17.jpg', 26, 12, '2021-10-11', 'Gồm cơm, 1 miếng bò nướng sốt phô mai ý thơm ngon và rau xanh', 'Vừa'),
(36, 'Pizza Hải Sản Tôm', 69000, 0, '18.jpg', 27, 4, '2021-10-11', 'Pizza loại vừa rất nhiều tôm to và mực', 'Vừa'),
(37, 'Pizza Bò Viên Chiên', 69000, 0, '19.jpg', 28, 6, '2021-10-11', 'Pizza loại vừa rất nhiều bò viên to và kèm theo ít lạp xưởng', 'Vừa'),
(38, 'Pizza Lạp Xưởng Nướng', 39000, 0, '20.jpg', 29, 7, '2021-10-11', 'Pizza loại vừa nhân lạp xưởng', 'Vừa'),
(39, 'Pizza Chay Rau Củ Quả', 29000, 0, '21.jpg', 30, 8, '2021-10-11', 'Pizza chay có nhiều rau củ quả dành cho người ăn kiêng hoặc dị ứng hải sản', 'Vừa'),
(40, 'Pizza Hải Sản Mực', 69000, 0, '22.jpg', 31, 5, '2021-10-11', 'Pizza hải sản rất nhiều mực và kèm theo tôm', 'Vừa'),
(41, 'Chanh Dây', 19000, 0, '29.jpeg', 32, 13, '2021-10-11', 'Nước chanh dây', 'Vừa'),
(42, 'Cocacola Lon', 19000, 0, '30.jpg', 33, 13, '2021-10-11', 'Lon nước Cocacola', 'Vừa'),
(43, 'Sữa Milo', 19000, 0, '31.jpg', 34, 13, '2021-10-11', 'Sữa Milo Lúa Mạch', 'Vừa'),
(44, 'Nước Suối Tinh Khiết', 10000, 0, '32.jpg', 35, 13, '2021-10-11', 'Nước suối đóng chai tinh khiết', 'Vừa'),
(45, 'Trà Lipton', 19000, 0, '33.jpg', 36, 13, '2021-10-11', 'Trà Lipton mát lạnh', 'Vừa'),
(46, 'Cocacola Chai Nhựa', 19000, 0, '34.jpg', 37, 13, '2021-10-11', 'Cocacola đóng chai', 'Vừa'),
(47, 'Cam Vắt Teppy', 19000, 0, '35.jpg', 38, 13, '2021-10-11', 'Cam vắt đóng chai hiệu Teppy', 'Vừa'),
(48, 'Sprite', 19000, 0, '36.jpg', 39, 13, '2021-10-11', 'Nước giải khát có ga Sprite', 'Vừa'),
(49, 'Nước Cam Fanta', 19000, 0, '37.jpg', 40, 13, '2021-10-11', 'Nước cam đóng chai hiệu Fanta mát lạnh', 'Vừa'),
(50, 'Khoai Tây Chiên Truyền Thống', 17000, 0, '23.png', 41, 14, '2021-11-15', '1 phần 150g khoai tây chiên giòn rụm thơm ngon.', 'Nhỏ'),
(51, 'Khoai Tây Chiên Truyền Thống', 28000, 0, '24.jpg', 41, 14, '2021-11-15', '1 phần 250g khoai tây chiên giòn rụm thơm ngon.', 'Vừa'),
(52, 'Khoai Tây Chiên Sốt Cà Ri', 45000, 37000, '25.jpg', 42, 14, '2021-11-15', '1 phần 500g khoai tây chiên sốt cà ri béo ngậy cay nồng.', 'Vừa'),
(53, 'Vòng Phô Mai', 35000, 0, '62.jpg', 43, 15, '2021-11-15', '1 vòng phô mai thơm béo, thích hợp ăn kèm với gà rán.', 'Vừa'),
(54, 'Phô Mai Que', 21000, 0, '27.jpg', 44, 15, '2021-11-15', '1 thanh phô mai que chiên không dầu giòn béo siêu ngon.', 'Vừa'),
(55, 'Mix Wing', 70000, 0, '26.jpg', 45, 16, '2021-11-15', '1 phần ăn gồm 4 miếng cánh gà rim khói kiểu Ý cực ngon.', 'Vừa'),
(56, 'Gà Nuggets', 29000, 0, '28.jpg', 46, 16, '2021-11-15', '1 phần ăn gồm những miếng gà Nuggets chiên không xương béo thơm.', 'Vừa');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `binhluan`
--
ALTER TABLE `binhluan`
  ADD PRIMARY KEY (`mabl`) USING BTREE,
  ADD KEY `FK_binhluan_masp` (`masp`) USING BTREE,
  ADD KEY `FK_binhluan_makh` (`makh`) USING BTREE;

--
-- Indexes for table `chitiethoadon`
--
ALTER TABLE `chitiethoadon`
  ADD PRIMARY KEY (`mahd`,`masp`) USING BTREE,
  ADD KEY `FK_chitiethoadon_masp` (`masp`) USING BTREE;

--
-- Indexes for table `hoadon`
--
ALTER TABLE `hoadon`
  ADD PRIMARY KEY (`mahd`) USING BTREE,
  ADD KEY `FK_hoadon_khachhang` (`makh`) USING BTREE;

--
-- Indexes for table `khachhang`
--
ALTER TABLE `khachhang`
  ADD PRIMARY KEY (`makh`) USING BTREE;

--
-- Indexes for table `loai`
--
ALTER TABLE `loai`
  ADD PRIMARY KEY (`maloai`) USING BTREE,
  ADD KEY `FK_loai_mamenu` (`mamenu`) USING BTREE;

--
-- Indexes for table `menu`
--
ALTER TABLE `menu`
  ADD PRIMARY KEY (`mamenu`) USING BTREE;

--
-- Indexes for table `menuheader`
--
ALTER TABLE `menuheader`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `sanpham`
--
ALTER TABLE `sanpham`
  ADD PRIMARY KEY (`masp`),
  ADD KEY `FK_sp_maloai` (`maloai`) USING BTREE;

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `binhluan`
--
ALTER TABLE `binhluan`
  MODIFY `mabl` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `hoadon`
--
ALTER TABLE `hoadon`
  MODIFY `mahd` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `khachhang`
--
ALTER TABLE `khachhang`
  MODIFY `makh` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `loai`
--
ALTER TABLE `loai`
  MODIFY `maloai` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `menu`
--
ALTER TABLE `menu`
  MODIFY `mamenu` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `menuheader`
--
ALTER TABLE `menuheader`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `sanpham`
--
ALTER TABLE `sanpham`
  MODIFY `masp` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=61;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
