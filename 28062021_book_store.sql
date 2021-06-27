-- phpMyAdmin SQL Dump
-- version 4.9.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Jun 27, 2021 at 06:32 PM
-- Server version: 10.4.10-MariaDB
-- PHP Version: 7.3.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `book_store`
--

-- --------------------------------------------------------

--
-- Table structure for table `anh_sach`
--

DROP TABLE IF EXISTS `anh_sach`;
CREATE TABLE IF NOT EXISTS `anh_sach` (
  `Id` int(11) NOT NULL AUTO_INCREMENT,
  `Id_Sach` int(11) NOT NULL,
  `Anh_Sach` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `Loai_Anh` int(1) NOT NULL,
  `Trang_Thai` tinyint(1) NOT NULL,
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `deleted_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`Id`),
  KEY `Id_Sach` (`Id_Sach`)
) ENGINE=InnoDB AUTO_INCREMENT=13 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `anh_sach`
--

INSERT INTO `anh_sach` (`Id`, `Id_Sach`, `Anh_Sach`, `Loai_Anh`, `Trang_Thai`, `updated_at`, `created_at`, `deleted_at`) VALUES
(1, 2, '/user/images/book/tu-duy-sau-thumbnail.png', 0, 0, '2021-06-27 04:49:09', '2021-06-23 06:17:39', NULL),
(3, 5, '/user/images/book/dung-de-mat-bo-thumbnail.png', 0, 1, '2021-06-23 10:35:57', '2021-06-23 06:53:56', NULL),
(4, 10, '/user/images/book/lau-dai-cua-howl-thumbnail.png', 1, 0, '2021-06-23 06:56:56', '2021-06-23 06:56:56', NULL),
(6, 2, '/user/images/book/tu-duy-sau-thumbnail-1.png', 2, 0, '2021-06-27 04:50:12', '2021-06-23 19:37:32', NULL),
(10, 12, '/user/images/book/bat-den-thumbnail.png', 0, 0, '2021-06-23 22:55:42', '2021-06-23 22:55:42', NULL),
(11, 12, '/user/images/book/bat-den-thumbnail-1.png', 2, 1, '2021-06-23 23:25:53', '2021-06-23 23:25:47', NULL),
(12, 6, '/user/images/book/10-van-cau-hoi-vi-sao-thumbnail.png', 0, 0, '2021-06-27 04:50:59', '2021-06-27 04:50:59', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `binh_luan`
--

DROP TABLE IF EXISTS `binh_luan`;
CREATE TABLE IF NOT EXISTS `binh_luan` (
  `Id` int(11) NOT NULL AUTO_INCREMENT,
  `Id_Sach` int(11) NOT NULL,
  `Id_TK` int(11) NOT NULL,
  `Noi_Dung` varchar(300) COLLATE utf8_unicode_ci NOT NULL,
  `Thoi_Gian` timestamp NOT NULL DEFAULT current_timestamp(),
  `Trang_Thai` tinyint(1) NOT NULL,
  PRIMARY KEY (`Id`),
  KEY `Id_Sach` (`Id_Sach`),
  KEY `Id_TK` (`Id_TK`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `chi_tiet_don_hang`
--

DROP TABLE IF EXISTS `chi_tiet_don_hang`;
CREATE TABLE IF NOT EXISTS `chi_tiet_don_hang` (
  `Id` int(11) NOT NULL AUTO_INCREMENT,
  `Id_Sach` int(11) NOT NULL,
  `Id_DH` int(11) NOT NULL,
  `So_Luong` int(11) NOT NULL,
  `Trang_Thai` tinyint(1) NOT NULL,
  PRIMARY KEY (`Id`),
  KEY `Id_Sach` (`Id_Sach`),
  KEY `Id_DH` (`Id_DH`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `don_hang`
--

DROP TABLE IF EXISTS `don_hang`;
CREATE TABLE IF NOT EXISTS `don_hang` (
  `Id` int(11) NOT NULL AUTO_INCREMENT,
  `Id_KH` int(11) NOT NULL,
  `Id_NV` int(11) NOT NULL,
  `Ngay_Lap` timestamp NOT NULL DEFAULT current_timestamp(),
  `Dia_Chi_Giao_Hang` varchar(30) COLLATE utf8_unicode_ci NOT NULL,
  `Tong_Tien` int(11) NOT NULL,
  `Trang_Thai` int(11) NOT NULL,
  PRIMARY KEY (`Id`),
  KEY `Id_KH` (`Id_KH`),
  KEY `Id_NV` (`Id_NV`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `gio_hang`
--

DROP TABLE IF EXISTS `gio_hang`;
CREATE TABLE IF NOT EXISTS `gio_hang` (
  `Id` int(11) NOT NULL AUTO_INCREMENT,
  `Id_Sach` int(11) NOT NULL,
  `Id_TK` int(11) NOT NULL,
  `So_Luong` int(11) NOT NULL,
  `Trang_Thai` tinyint(1) NOT NULL,
  PRIMARY KEY (`Id`),
  KEY `Id_Sach` (`Id_Sach`),
  KEY `Id_TK` (`Id_TK`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `khuyen_mai`
--

DROP TABLE IF EXISTS `khuyen_mai`;
CREATE TABLE IF NOT EXISTS `khuyen_mai` (
  `Id` int(11) NOT NULL AUTO_INCREMENT,
  `Ten_CTKM` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `Banner` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `Tg_Bat_Dau` date NOT NULL,
  `Tg_Ket_Thuc` date NOT NULL,
  `Noi_Dung` varchar(300) COLLATE utf8_unicode_ci DEFAULT NULL,
  `Link_Chi_Tiet` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `Trang_Thai` tinyint(1) NOT NULL,
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `is_deleted` tinyint(1) NOT NULL DEFAULT 0,
  PRIMARY KEY (`Id`)
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `khuyen_mai`
--

INSERT INTO `khuyen_mai` (`Id`, `Ten_CTKM`, `Banner`, `Tg_Bat_Dau`, `Tg_Ket_Thuc`, `Noi_Dung`, `Link_Chi_Tiet`, `Trang_Thai`, `updated_at`, `created_at`, `is_deleted`) VALUES
(1, 'Tủ sách mùa hè', '/admin/images/promotion/banner-promotion.jpg', '2021-05-15', '2021-05-28', 'Chào mùa hè với những quyển sách đến từ Y&P.', '/tin-tuc/chao-he', 1, '2021-06-26 12:15:27', '2021-06-26 12:09:51', 0),
(2, 'Hội sách thiếu nhi chào mừng 1-6', '/admin/images/promotion/banner-promotion.jpg', '2021-06-01', '2021-06-30', 'Nhân dịp lế quốc tế thiếu nhi 1-6 Y&P giảm đến 50% cho các loại sách thiếu nhi, 20% cho các loại sách còn lại.', '/tin-tuc/chuong-trinh-khuyen-mai-1-6', 0, '2021-06-27 04:30:18', '0000-00-00 00:00:00', 0),
(3, 'Hội sách tháng 7', '/admin/images/promotion/banner-promotion.jpg', '2021-07-01', '2021-07-10', 'Chào mừng tháng 7 Y&P mở các sự kiện sale sách với giá ưu đãi', '/tin-tuc/hoi-sach-thang-7', 2, '2021-06-26 13:45:01', '2021-06-26 11:52:58', 0),
(7, 'Ngày hội khai trường', '/admin/images/promotion/banner-promotion.jpg', '2021-08-01', '2021-08-15', 'Nhân dịp khai trường Y&P giảm giá các sản phẩm SGK từ tiểu học đến trung học phổ thông.', '/tin-tuc/su-kien-khai-truong', 2, '2021-06-26 21:28:46', '2021-06-26 12:36:38', 1);

-- --------------------------------------------------------

--
-- Table structure for table `nha_xuat_ban`
--

DROP TABLE IF EXISTS `nha_xuat_ban`;
CREATE TABLE IF NOT EXISTS `nha_xuat_ban` (
  `Id` int(11) NOT NULL AUTO_INCREMENT,
  `Ten_NXB` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `Dia_Chi` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `So_Dien_Thoai` char(10) COLLATE utf8_unicode_ci DEFAULT NULL,
  `Email` varchar(30) COLLATE utf8_unicode_ci DEFAULT NULL,
  `Trang_Thai` tinyint(1) NOT NULL,
  PRIMARY KEY (`Id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `nha_xuat_ban`
--

INSERT INTO `nha_xuat_ban` (`Id`, `Ten_NXB`, `Dia_Chi`, `So_Dien_Thoai`, `Email`, `Trang_Thai`) VALUES
(1, 'SkyBook', '10A Trường Chinh, Phường 18, Quận Tân Phú', '0287222322', 'SkyBookTC@gmail.com', 1),
(2, 'NXB Kim Đồng', '15/8C Nguyễn Đình Chiểu, Phường 6, Quận 3', '0913353344', 'NXBKimDong@gmail.com', 1);

-- --------------------------------------------------------

--
-- Table structure for table `noi_dung_khuyen_mai`
--

DROP TABLE IF EXISTS `noi_dung_khuyen_mai`;
CREATE TABLE IF NOT EXISTS `noi_dung_khuyen_mai` (
  `Id` int(11) NOT NULL AUTO_INCREMENT,
  `Id_The_Loai` int(11) NOT NULL,
  `Id_Khuyen_Mai` int(11) NOT NULL,
  `Banner` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `Gia_Tri_Khuyen_Mai` int(11) NOT NULL,
  `Kich_Hoat` int(11) NOT NULL,
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  PRIMARY KEY (`Id`),
  KEY `Id_Khuyen_Mai` (`Id_Khuyen_Mai`),
  KEY `Id_The_Loai` (`Id_The_Loai`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `noi_dung_khuyen_mai`
--

INSERT INTO `noi_dung_khuyen_mai` (`Id`, `Id_The_Loai`, `Id_Khuyen_Mai`, `Banner`, `Gia_Tri_Khuyen_Mai`, `Kich_Hoat`, `updated_at`, `created_at`) VALUES
(1, 1, 2, '/admin/images/promotion/banner-promotion.jpg', 50, 0, '2021-06-27 11:06:30', '2021-06-27 04:23:22'),
(2, 2, 2, '/admin/images/promotion/71-thoi-quen-thumbnail-1.png', 40, 0, '2021-06-27 11:08:27', '2021-06-27 10:55:32'),
(4, 1, 1, '/admin/images/promotion/71-thoi-quen.png', 10, 0, '2021-06-27 11:19:31', '2021-06-27 11:19:26');

-- --------------------------------------------------------

--
-- Table structure for table `sach`
--

DROP TABLE IF EXISTS `sach`;
CREATE TABLE IF NOT EXISTS `sach` (
  `Id` int(11) NOT NULL AUTO_INCREMENT,
  `Ten_Sach` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `Tac_Gia` varchar(30) COLLATE utf8_unicode_ci NOT NULL,
  `Anh_Bia` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `Nha_Xuat_Ban` int(11) NOT NULL,
  `Phien_Ban` int(11) NOT NULL,
  `Loai_Bia` int(11) NOT NULL,
  `So_Trang` int(11) NOT NULL,
  `SKU` char(10) COLLATE utf8_unicode_ci NOT NULL,
  `Gia_Tien` int(11) NOT NULL,
  `Mo_Ta` varchar(300) COLLATE utf8_unicode_ci DEFAULT NULL,
  `The_Loai` int(11) NOT NULL,
  `Trang_Thai` int(11) NOT NULL,
  `So_Luong` int(11) NOT NULL,
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `is_deleted` tinyint(1) NOT NULL DEFAULT 0,
  PRIMARY KEY (`Id`),
  KEY `Nha_Xuat_Ban` (`Nha_Xuat_Ban`),
  KEY `The_Loai` (`The_Loai`)
) ENGINE=InnoDB AUTO_INCREMENT=13 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `sach`
--

INSERT INTO `sach` (`Id`, `Ten_Sach`, `Tac_Gia`, `Anh_Bia`, `Nha_Xuat_Ban`, `Phien_Ban`, `Loai_Bia`, `So_Trang`, `SKU`, `Gia_Tien`, `Mo_Ta`, `The_Loai`, `Trang_Thai`, `So_Luong`, `updated_at`, `created_at`, `is_deleted`) VALUES
(2, 'Tư Duy Sâu', 'Diệp Tu', '/user/images/book/tu-duy-sau.png', 2, 0, 2, 75, 'xkzMQdSXJK', 89000, 'Sách \"Tư Duy Sâu\" của nhà văn Diệp Tu', 3, 2, 10, '2021-06-21 16:55:12', '2021-06-21 07:53:21', 0),
(5, 'Đừng Để Mất Bò', 'Trần Thanh Phong', '/user/images/book/dung-de-mat-bo.png', 1, 1, 0, 66, 'R99Gss9EWm', 95000, 'Mô tả sách \"Đừng để mất bò\".', 4, 1, 0, '2021-06-23 05:19:18', '2021-06-21 08:18:46', 0),
(6, '10 Vạn Câu Hỏi Vì Sao?', 'Nguyễn Đồng', '/user/images/book/10-van-cau-hoi-vi-sao.png', 2, 0, 1, 83, 'hhRbOfu32l', 125000, 'Trọn bộ 5 cuốn 10 vạn câu hỏi vì sao?', 2, 2, 12, '2021-06-23 12:04:01', '2021-06-21 08:46:54', 0),
(9, 'Hoàng Tử Bé', 'Albert Smith', '/user/images/book/hoang-tu-be.png', 2, 1, 0, 88, 'NuPvIZ5BQs', 160000, 'Bản đặc biệt của sách Hoàng Tử Bé', 1, 2, 5, '2021-06-23 07:17:43', '2021-06-22 10:05:54', 0),
(10, 'Lâu Đài Bay Của Pháp Sư Howl', 'D.Wynne Jones', '/user/images/book/lau-dai-cua-howl.png', 1, 0, 0, 105, 'eqH012NTSA', 205000, 'Lâu đài bay của pháp sư Howl, còn dịch nghĩa khác là Lâu đài di động của Howl, ra mắt năm 2004, được biên kịch và đạo diễn bởi Miyazaki Hayao của Studio Ghibli, dựa trên một tiểu thuyết cùng tên của Diana Wynne Jones.', 1, 2, 20, '2021-06-23 12:03:56', '2021-06-22 12:17:34', 0),
(11, '71 Thói Quen', 'Diệp Tu', '/user/images/book/71-thoi-quen.png', 1, 0, 2, 98, 'QYtGpXsTHz', 89000, 'Mô tả sách', 3, 2, 10, '2021-06-22 22:52:28', '2021-06-22 22:52:28', 0),
(12, 'Bật Đèn', 'FuJuSu', '/user/images/book/bat-den.png', 1, 0, 2, 54, 'ttFAXbEmot', 72000, 'Tác phẩm Bật đèn của nhà văn FuJu', 3, 2, 5, '2021-06-23 05:17:51', '2021-06-23 05:17:51', 0);

-- --------------------------------------------------------

--
-- Table structure for table `sach_yeu_thich`
--

DROP TABLE IF EXISTS `sach_yeu_thich`;
CREATE TABLE IF NOT EXISTS `sach_yeu_thich` (
  `Id` int(11) NOT NULL AUTO_INCREMENT,
  `Id_Sach` int(11) NOT NULL,
  `Id_TK` int(11) NOT NULL,
  `Trang_Thai` tinyint(1) NOT NULL,
  PRIMARY KEY (`Id`),
  KEY `Id_Sach` (`Id_Sach`),
  KEY `Id_TK` (`Id_TK`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `tai_khoan`
--

DROP TABLE IF EXISTS `tai_khoan`;
CREATE TABLE IF NOT EXISTS `tai_khoan` (
  `Id` int(11) NOT NULL AUTO_INCREMENT,
  `Ho_Ten` varchar(50) COLLATE utf8_unicode_ci DEFAULT NULL,
  `Gioi_Tinh` tinyint(1) DEFAULT NULL,
  `Mat_Khau` char(16) COLLATE utf8_unicode_ci NOT NULL,
  `Email` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `So_Dien_Thoai` char(10) COLLATE utf8_unicode_ci DEFAULT NULL,
  `Dia_Chi` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `Loai_TK` tinyint(1) NOT NULL,
  `Anh_Dai_Dien` varchar(50) COLLATE utf8_unicode_ci DEFAULT NULL,
  `Trang_Thai` tinyint(1) NOT NULL,
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `is_deleted` tinyint(1) NOT NULL DEFAULT 0,
  PRIMARY KEY (`Id`)
) ENGINE=InnoDB AUTO_INCREMENT=13 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `tai_khoan`
--

INSERT INTO `tai_khoan` (`Id`, `Ho_Ten`, `Gioi_Tinh`, `Mat_Khau`, `Email`, `So_Dien_Thoai`, `Dia_Chi`, `Loai_TK`, `Anh_Dai_Dien`, `Trang_Thai`, `updated_at`, `created_at`, `is_deleted`) VALUES
(1, 'Ngô Phong', 0, 'Phong147', 'ngophong030700@gmail.com', '0933809731', '800 Nguyễn Văn Linh, Phường Tân Phú, Quận 7', 0, '/images/avt.png', 0, '2021-06-19 18:07:21', '0000-00-00 00:00:00', 0),
(2, 'Ly Lê', 1, 'LyLe1608', 'lyle160801@gmail.com', '0933811315', '70A Lê Văn Lương, Phường Tân Kiểng, Quận 7', 1, '/images/avt.png', 0, '2021-06-22 10:38:39', '0000-00-00 00:00:00', 1),
(3, 'Phong NAAN', 0, '123456', 'phong.ngo@naansolution.com', NULL, NULL, 1, NULL, 0, '2021-06-22 11:55:26', '2021-06-19 11:09:54', 0),
(6, 'Admin', 0, 'a@123456', 'admin@domain.com', '0909057733', '800 Nguyễn Văn Linh, Phường Tân Phú, Quận 7', 0, NULL, 1, '2021-06-23 00:15:55', '2021-06-22 10:03:47', 0),
(12, 'Phong CT', 0, 'a@123456', '0306181351@caothang.edu.vn', '0933811315', 'Phước Lại, Cần Giuộc, Long An', 1, NULL, 1, '2021-06-23 05:15:26', '2021-06-23 05:15:26', 0);

-- --------------------------------------------------------

--
-- Table structure for table `the_loai`
--

DROP TABLE IF EXISTS `the_loai`;
CREATE TABLE IF NOT EXISTS `the_loai` (
  `Id` int(11) NOT NULL AUTO_INCREMENT,
  `The_Loai` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`Id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `the_loai`
--

INSERT INTO `the_loai` (`Id`, `The_Loai`) VALUES
(1, 'Truyện tranh'),
(2, 'Sách thiếu nhi'),
(3, 'Sách kỹ năng sống'),
(4, 'Sách kinh tế');

--
-- Constraints for dumped tables
--

--
-- Constraints for table `anh_sach`
--
ALTER TABLE `anh_sach`
  ADD CONSTRAINT `anh_sach_ibfk_1` FOREIGN KEY (`Id_Sach`) REFERENCES `sach` (`Id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `binh_luan`
--
ALTER TABLE `binh_luan`
  ADD CONSTRAINT `binh_luan_ibfk_1` FOREIGN KEY (`Id_Sach`) REFERENCES `sach` (`Id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `binh_luan_ibfk_2` FOREIGN KEY (`Id_TK`) REFERENCES `tai_khoan` (`Id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `chi_tiet_don_hang`
--
ALTER TABLE `chi_tiet_don_hang`
  ADD CONSTRAINT `chi_tiet_don_hang_ibfk_1` FOREIGN KEY (`Id_Sach`) REFERENCES `sach` (`Id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `chi_tiet_don_hang_ibfk_2` FOREIGN KEY (`Id_DH`) REFERENCES `don_hang` (`Id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `gio_hang`
--
ALTER TABLE `gio_hang`
  ADD CONSTRAINT `gio_hang_ibfk_1` FOREIGN KEY (`Id_Sach`) REFERENCES `sach` (`Id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `gio_hang_ibfk_2` FOREIGN KEY (`Id_TK`) REFERENCES `tai_khoan` (`Id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `noi_dung_khuyen_mai`
--
ALTER TABLE `noi_dung_khuyen_mai`
  ADD CONSTRAINT `noi_dung_khuyen_mai_ibfk_1` FOREIGN KEY (`Id_The_Loai`) REFERENCES `the_loai` (`Id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `noi_dung_khuyen_mai_ibfk_2` FOREIGN KEY (`Id_Khuyen_Mai`) REFERENCES `khuyen_mai` (`Id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `sach`
--
ALTER TABLE `sach`
  ADD CONSTRAINT `sach_ibfk_1` FOREIGN KEY (`Nha_Xuat_Ban`) REFERENCES `nha_xuat_ban` (`Id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `sach_ibfk_2` FOREIGN KEY (`The_Loai`) REFERENCES `the_loai` (`Id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `sach_yeu_thich`
--
ALTER TABLE `sach_yeu_thich`
  ADD CONSTRAINT `sach_yeu_thich_ibfk_1` FOREIGN KEY (`Id_TK`) REFERENCES `tai_khoan` (`Id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `sach_yeu_thich_ibfk_2` FOREIGN KEY (`Id_Sach`) REFERENCES `sach` (`Id`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
