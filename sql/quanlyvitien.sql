-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1
-- Thời gian đã tạo: Th2 24, 2021 lúc 06:32 PM
-- Phiên bản máy phục vụ: 10.4.14-MariaDB
-- Phiên bản PHP: 7.4.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Cơ sở dữ liệu: `quanlyvitien`
--

-- --------------------------------------------------------

--
-- Cấu trúc đóng vai cho view `sumtongchithangnay`
-- (See below for the actual view)
--
CREATE TABLE `sumtongchithangnay` (
`SUM(sotienchi)` double
);

-- --------------------------------------------------------

--
-- Cấu trúc đóng vai cho view `sumtongthuthangnay`
-- (See below for the actual view)
--
CREATE TABLE `sumtongthuthangnay` (
`SUM(sotienthu)` double
);

-- --------------------------------------------------------

--
-- Cấu trúc đóng vai cho view `sumtongtienvi`
-- (See below for the actual view)
--
CREATE TABLE `sumtongtienvi` (
`SUM(sodu)` double
);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `t_chitien`
--

CREATE TABLE `t_chitien` (
  `machitien` varchar(16) NOT NULL,
  `sotienchi` varchar(255) NOT NULL,
  `ngaychi` date NOT NULL,
  `mavi` int(5) NOT NULL,
  `matk` int(5) NOT NULL,
  `mamucchi` int(5) NOT NULL,
  `ghichu` varchar(255) NOT NULL,
  `sukien` varchar(255) NOT NULL,
  `chichoai` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `t_chitien`
--

INSERT INTO `t_chitien` (`machitien`, `sotienchi`, `ngaychi`, `mavi`, `matk`, `mamucchi`, `ghichu`, `sukien`, `chichoai`) VALUES
('05ae32c4ea7390ed', '70000', '2021-01-06', 23, 2, 111, 'Đi grap ', '', 'Grap'),
('61e2c7b6118c7075', '2324234', '2021-02-24', 27, 9994, 122, '34234', '2342', '2342'),
('62a44fc9257840a7', '1554000', '2021-01-06', 23, 2, 110, 'Đóng tiền internet VNPT năm 2021 6 tháng', 'Đóng tiền internet', 'VNPT'),
('7d927747ca5a51d5', '222333', '2021-02-24', 27, 9994, 122, 'sdasd', 'sdasd', ''),
('bc26bffdbdca689d', '4000000', '2021-01-06', 23, 2, 116, 'Khám sức khoẻ định kỳ lần 1 năm 2021', 'Khám sức khoẻ định kỳ.', 'Bệnh viện Đa khoa'),
('d8754697733d2a19', '1813000', '2021-01-06', 25, 2, 110, 'Mua MÀN HÌNH MÁY TÍNH LG 23MP67HQ-P.ATV full viền cũ đẹp.', '', 'Shoppe'),
('e2b07b76c562bde4', '120000', '2021-01-06', 23, 2, 112, 'Ăn lẩu', 'Liên hoan công ty đầu năm', ''),
('eaca5bb8f82706c5', '50000', '2021-01-07', 27, 9994, 123, 'Đi grap', '', 'Grap');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `t_loaivi`
--

CREATE TABLE `t_loaivi` (
  `maloaivi` int(5) NOT NULL,
  `tenloaivi` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `t_loaivi`
--

INSERT INTO `t_loaivi` (`maloaivi`, `tenloaivi`) VALUES
(1, 'Tiền mặt'),
(2, 'Sổ tiết kiệm'),
(3, 'Thẻ tín dụng'),
(4, 'Tài khoản đầu tư'),
(5, 'Khác');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `t_mucchi`
--

CREATE TABLE `t_mucchi` (
  `mamucchi` int(5) NOT NULL,
  `tenmucchi` varchar(255) NOT NULL,
  `hangchi` int(5) NOT NULL,
  `matk` int(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `t_mucchi`
--

INSERT INTO `t_mucchi` (`mamucchi`, `tenmucchi`, `hangchi`, `matk`) VALUES
(110, 'Dịch vụ sinh hoạt', 1, 2),
(111, 'Đi lại', 1, 2),
(112, 'Ăn uống', 1, 2),
(113, 'Con cái', 1, 2),
(114, 'Trang phục', 1, 2),
(115, 'Hiếu hỉ', 1, 2),
(116, 'Sức khoẻ', 1, 2),
(117, 'Nhà cửa', 1, 2),
(118, 'Hưởng thụ', 1, 2),
(119, 'Phát triển bản thân', 1, 2),
(120, 'Cho vay', 2, 2),
(121, 'Trả nợ', 2, 2),
(122, 'Dịch vụ sinh hoạt', 1, 9994),
(123, 'Đi lại', 1, 9994),
(124, 'Ăn uống', 1, 9994),
(125, 'Con cái', 1, 9994),
(126, 'Trang phục', 1, 9994),
(127, 'Hiếu hỉ', 1, 9994),
(128, 'Sức khoẻ', 1, 9994),
(129, 'Nhà cửa', 1, 9994),
(130, 'Hưởng thụ', 1, 9994),
(131, 'Phát triển bản thân', 1, 9994),
(132, 'Cho vay', 2, 9994),
(133, 'Trả nợ', 2, 9994);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `t_mucthu`
--

CREATE TABLE `t_mucthu` (
  `mamucthu` int(5) NOT NULL,
  `tenmucthu` varchar(255) NOT NULL,
  `hangthu` int(5) NOT NULL,
  `matk` int(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `t_mucthu`
--

INSERT INTO `t_mucthu` (`mamucthu`, `tenmucthu`, `hangthu`, `matk`) VALUES
(39, 'Đi làm', 1, 2),
(40, 'Được tặng/cho', 1, 2),
(41, 'Lương', 1, 2),
(42, 'Lãi tiết kiệm', 1, 2),
(43, 'Thưởng', 1, 2),
(44, 'Tiền lãi', 1, 2),
(45, 'Đi làm', 1, 9994),
(46, 'Được tặng/cho', 1, 9994),
(47, 'Lương', 1, 9994),
(48, 'Lãi tiết kiệm', 1, 9994),
(49, 'Thưởng', 1, 9994),
(50, 'Tiền lãi', 1, 9994);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `t_taikhoan`
--

CREATE TABLE `t_taikhoan` (
  `matk` int(5) NOT NULL,
  `tendangnhap` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `matkhau` varchar(255) NOT NULL,
  `quyen` int(11) NOT NULL DEFAULT 0,
  `anh` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `t_taikhoan`
--

INSERT INTO `t_taikhoan` (`matk`, `tendangnhap`, `email`, `matkhau`, `quyen`, `anh`) VALUES
(2, 'quan', 'quankieu99@gmail.com', '123', 0, '5ff6b4375eee17.18138123.jpg'),
(9994, 'quan1', 'quankieu88@gmail.com', '123', 0, '5ff6b426344609.60756442.jpg');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `t_thutien`
--

CREATE TABLE `t_thutien` (
  `mathutien` varchar(16) NOT NULL,
  `sotienthu` varchar(255) NOT NULL,
  `ngaythu` date NOT NULL,
  `mavi` int(5) NOT NULL,
  `matk` int(5) NOT NULL,
  `mamucthu` int(5) NOT NULL,
  `ghichu` varchar(255) NOT NULL,
  `sukien` varchar(255) NOT NULL,
  `thuboiai` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `t_thutien`
--

INSERT INTO `t_thutien` (`mathutien`, `sotienthu`, `ngaythu`, `mavi`, `matk`, `mamucthu`, `ghichu`, `sukien`, `thuboiai`) VALUES
('58d90e0e0df867d2', '40000000', '2021-01-06', 26, 2, 40, 'Bố cho tiền đâu tư', '', 'Bố '),
('b4f68a1f5e6c10be', '3000000', '2021-01-07', 28, 9994, 47, 'Lương công ty', '', 'sếp'),
('d27a4a56a811acbc', '33212321', '2021-02-24', 27, 9994, 46, '1231', '13132', ''),
('df3c817920923044', '1700000', '2021-01-06', 23, 2, 42, 'Lãi sau 6 tháng ngân hàng.', '', 'Ngân hàng BIDV');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `t_vitien`
--

CREATE TABLE `t_vitien` (
  `mavi` int(5) NOT NULL,
  `matk` int(5) NOT NULL,
  `tenvi` varchar(255) NOT NULL,
  `maloaivi` int(5) NOT NULL,
  `sodu` varchar(255) NOT NULL DEFAULT '0',
  `ghichu` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `t_vitien`
--

INSERT INTO `t_vitien` (`mavi`, `matk`, `tenvi`, `maloaivi`, `sodu`, `ghichu`) VALUES
(23, 2, 'Tiền mặt', 1, '15956000', 'Tiêu hàng ngày.'),
(24, 2, 'Tiết kiệm tiêu tết', 2, '30000000', 'Tiêu tết cho hết'),
(25, 2, 'Shoppe', 3, '8187000', 'Mua hàng online'),
(26, 2, 'Mở shop', 4, '80000000', 'Mở shop bán hàng online nhỏ 1-2 sản phẩm.'),
(27, 9994, 'Tiền mặt', 3, '31115754', 'Tiền mặt'),
(28, 9994, 'Tiền tiết kiệm', 2, '3400000', 'Tiền mặt tiết kiệm');

-- --------------------------------------------------------

--
-- Cấu trúc cho view `sumtongchithangnay`
--
DROP TABLE IF EXISTS `sumtongchithangnay`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `sumtongchithangnay`  AS  select sum(`t_chitien`.`sotienchi`) AS `SUM(sotienchi)` from `t_chitien` where month(`t_chitien`.`ngaychi`) = month(current_timestamp()) ;

-- --------------------------------------------------------

--
-- Cấu trúc cho view `sumtongthuthangnay`
--
DROP TABLE IF EXISTS `sumtongthuthangnay`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `sumtongthuthangnay`  AS  select sum(`t_thutien`.`sotienthu`) AS `SUM(sotienthu)` from `t_thutien` where month(`t_thutien`.`ngaythu`) = month(current_timestamp()) ;

-- --------------------------------------------------------

--
-- Cấu trúc cho view `sumtongtienvi`
--
DROP TABLE IF EXISTS `sumtongtienvi`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `sumtongtienvi`  AS  select sum(`t_vitien`.`sodu`) AS `SUM(sodu)` from `t_vitien` where `t_vitien`.`sodu` > 0 ;

--
-- Chỉ mục cho các bảng đã đổ
--

--
-- Chỉ mục cho bảng `t_chitien`
--
ALTER TABLE `t_chitien`
  ADD PRIMARY KEY (`machitien`),
  ADD KEY `matk` (`matk`),
  ADD KEY `mavi` (`mavi`),
  ADD KEY `mamucchi` (`mamucchi`);

--
-- Chỉ mục cho bảng `t_loaivi`
--
ALTER TABLE `t_loaivi`
  ADD PRIMARY KEY (`maloaivi`);

--
-- Chỉ mục cho bảng `t_mucchi`
--
ALTER TABLE `t_mucchi`
  ADD PRIMARY KEY (`mamucchi`),
  ADD KEY `matk` (`matk`);

--
-- Chỉ mục cho bảng `t_mucthu`
--
ALTER TABLE `t_mucthu`
  ADD PRIMARY KEY (`mamucthu`),
  ADD KEY `matk` (`matk`);

--
-- Chỉ mục cho bảng `t_taikhoan`
--
ALTER TABLE `t_taikhoan`
  ADD PRIMARY KEY (`matk`);

--
-- Chỉ mục cho bảng `t_thutien`
--
ALTER TABLE `t_thutien`
  ADD PRIMARY KEY (`mathutien`),
  ADD KEY `matk` (`matk`),
  ADD KEY `mavi` (`mavi`),
  ADD KEY `mamucthu` (`mamucthu`);

--
-- Chỉ mục cho bảng `t_vitien`
--
ALTER TABLE `t_vitien`
  ADD PRIMARY KEY (`mavi`),
  ADD KEY `maloaivi` (`maloaivi`),
  ADD KEY `matk` (`matk`);

--
-- AUTO_INCREMENT cho các bảng đã đổ
--

--
-- AUTO_INCREMENT cho bảng `t_loaivi`
--
ALTER TABLE `t_loaivi`
  MODIFY `maloaivi` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT cho bảng `t_mucchi`
--
ALTER TABLE `t_mucchi`
  MODIFY `mamucchi` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=134;

--
-- AUTO_INCREMENT cho bảng `t_mucthu`
--
ALTER TABLE `t_mucthu`
  MODIFY `mamucthu` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=51;

--
-- AUTO_INCREMENT cho bảng `t_taikhoan`
--
ALTER TABLE `t_taikhoan`
  MODIFY `matk` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9995;

--
-- AUTO_INCREMENT cho bảng `t_vitien`
--
ALTER TABLE `t_vitien`
  MODIFY `mavi` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=29;

--
-- Các ràng buộc cho các bảng đã đổ
--

--
-- Các ràng buộc cho bảng `t_chitien`
--
ALTER TABLE `t_chitien`
  ADD CONSTRAINT `t_chitien_ibfk_1` FOREIGN KEY (`matk`) REFERENCES `t_taikhoan` (`matk`) ON UPDATE CASCADE,
  ADD CONSTRAINT `t_chitien_ibfk_2` FOREIGN KEY (`mavi`) REFERENCES `t_vitien` (`mavi`) ON UPDATE CASCADE,
  ADD CONSTRAINT `t_chitien_ibfk_3` FOREIGN KEY (`mamucchi`) REFERENCES `t_mucchi` (`mamucchi`) ON UPDATE CASCADE;

--
-- Các ràng buộc cho bảng `t_mucchi`
--
ALTER TABLE `t_mucchi`
  ADD CONSTRAINT `t_mucchi_ibfk_1` FOREIGN KEY (`matk`) REFERENCES `t_taikhoan` (`matk`) ON UPDATE CASCADE;

--
-- Các ràng buộc cho bảng `t_mucthu`
--
ALTER TABLE `t_mucthu`
  ADD CONSTRAINT `t_mucthu_ibfk_1` FOREIGN KEY (`matk`) REFERENCES `t_taikhoan` (`matk`) ON UPDATE CASCADE;

--
-- Các ràng buộc cho bảng `t_thutien`
--
ALTER TABLE `t_thutien`
  ADD CONSTRAINT `t_thutien_ibfk_1` FOREIGN KEY (`matk`) REFERENCES `t_taikhoan` (`matk`) ON UPDATE CASCADE,
  ADD CONSTRAINT `t_thutien_ibfk_2` FOREIGN KEY (`mavi`) REFERENCES `t_vitien` (`mavi`) ON UPDATE CASCADE,
  ADD CONSTRAINT `t_thutien_ibfk_3` FOREIGN KEY (`mamucthu`) REFERENCES `t_mucthu` (`mamucthu`) ON UPDATE CASCADE;

--
-- Các ràng buộc cho bảng `t_vitien`
--
ALTER TABLE `t_vitien`
  ADD CONSTRAINT `t_vitien_ibfk_2` FOREIGN KEY (`maloaivi`) REFERENCES `t_loaivi` (`maloaivi`) ON UPDATE CASCADE,
  ADD CONSTRAINT `t_vitien_ibfk_3` FOREIGN KEY (`matk`) REFERENCES `t_taikhoan` (`matk`) ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
