-- phpMyAdmin SQL Dump
-- version 4.9.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Jun 20, 2021 at 01:49 PM
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
  `Hinh_Anh` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `Anh_Trinh_Chieu` tinyint(1) NOT NULL,
  `Trang_Thai` tinyint(1) NOT NULL,
  PRIMARY KEY (`Id`),
  KEY `Id_Sach` (`Id_Sach`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

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
  `Tg_Bat_Dau` datetime NOT NULL,
  `Tg_Ket_Thuc` datetime NOT NULL,
  `Link_Chi _Tiet` varchar(30) COLLATE utf8_unicode_ci NOT NULL,
  `Trang_Thai` tinyint(1) NOT NULL,
  PRIMARY KEY (`Id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

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
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

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
  PRIMARY KEY (`Id`),
  KEY `Id_NXB` (`Nha_Xuat_Ban`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `sach`
--

INSERT INTO `sach` (`Id`, `Ten_Sach`, `Tac_Gia`, `Anh_Bia`, `Nha_Xuat_Ban`, `Phien_Ban`, `Loai_Bia`, `So_Trang`, `SKU`, `Gia_Tien`, `Mo_Ta`, `The_Loai`, `Trang_Thai`, `So_Luong`) VALUES
(1, 'ABC', 'ABC', '/Images/AnhBia.png', 1, 0, 2, 98, 'OdQgBqwdwY', 90000, 'AAAAAAAA', 1, 2, 20);

-- --------------------------------------------------------

--
-- Table structure for table `sach_khuyen_mai`
--

DROP TABLE IF EXISTS `sach_khuyen_mai`;
CREATE TABLE IF NOT EXISTS `sach_khuyen_mai` (
  `Id` int(11) NOT NULL AUTO_INCREMENT,
  `Id_Sach` int(11) NOT NULL,
  `Id_Khuyen_Mai` int(11) NOT NULL,
  `Gia_Khuyen_Mai` int(11) NOT NULL,
  `Trang_Thai` tinyint(1) NOT NULL,
  PRIMARY KEY (`Id`),
  KEY `Id_Sach` (`Id_Sach`),
  KEY `Id_KM` (`Id_Khuyen_Mai`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

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
  PRIMARY KEY (`Id`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `tai_khoan`
--

INSERT INTO `tai_khoan` (`Id`, `Ho_Ten`, `Gioi_Tinh`, `Mat_Khau`, `Email`, `So_Dien_Thoai`, `Dia_Chi`, `Loai_TK`, `Anh_Dai_Dien`, `Trang_Thai`, `updated_at`, `created_at`) VALUES
(1, 'Ngô Phong', 0, 'Phong147', 'ngophong030700@gmail.com', '0933809731', '800 Nguyễn Văn Linh, Phường Tân Phú, Quận 7', 0, '/images/avt.png', 0, '2021-06-19 18:07:21', '0000-00-00 00:00:00'),
(2, 'Ly Lê', 1, 'LyLe1608', 'lyle160801@gmail.com', '0933811315', '70A Lê Văn Lương, Phường Tân Kiểng, Quận 7', 1, '/images/avt.png', 0, '2021-06-19 18:07:21', '0000-00-00 00:00:00'),
(3, NULL, NULL, '123', 'phong.ngo@naansolution.com', NULL, NULL, 1, NULL, 1, '2021-06-19 11:09:54', '2021-06-19 11:09:54');

-- --------------------------------------------------------

--
-- Table structure for table `the_loai`
--

DROP TABLE IF EXISTS `the_loai`;
CREATE TABLE IF NOT EXISTS `the_loai` (
  `Id` int(11) NOT NULL AUTO_INCREMENT,
  `The_Loai` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`Id`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `the_loai`
--

INSERT INTO `the_loai` (`Id`, `The_Loai`) VALUES
(1, 'Truyện Tranh');

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
-- Constraints for table `nha_xuat_ban`
--
ALTER TABLE `nha_xuat_ban`
  ADD CONSTRAINT `nha_xuat_ban_ibfk_1` FOREIGN KEY (`Id`) REFERENCES `sach` (`Nha_Xuat_Ban`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `sach_khuyen_mai`
--
ALTER TABLE `sach_khuyen_mai`
  ADD CONSTRAINT `sach_khuyen_mai_ibfk_1` FOREIGN KEY (`Id_Sach`) REFERENCES `sach` (`Id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `sach_khuyen_mai_ibfk_2` FOREIGN KEY (`Id_Khuyen_Mai`) REFERENCES `khuyen_mai` (`Id`) ON DELETE CASCADE ON UPDATE CASCADE;

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
