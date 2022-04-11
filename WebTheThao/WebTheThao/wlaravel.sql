-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1:3306
-- Thời gian đã tạo: Th3 31, 2022 lúc 02:42 PM
-- Phiên bản máy phục vụ: 5.7.31
-- Phiên bản PHP: 7.3.21

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Cơ sở dữ liệu: `wlaravel`
--

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `migrations`
--

DROP TABLE IF EXISTS `migrations`;
CREATE TABLE IF NOT EXISTS `migrations` (
  `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=7 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2022_03_08_040530_create_tbl_admin_table', 1),
(4, '2022_03_09_105731_create_tbl_category_product', 1),
(5, '2022_03_10_054348_create_tbl_product', 1),
(6, '2022_03_18_084855_create_tbl_customer', 1);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `password_resets`
--

DROP TABLE IF EXISTS `password_resets`;
CREATE TABLE IF NOT EXISTS `password_resets` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `personal_access_tokens`
--

DROP TABLE IF EXISTS `personal_access_tokens`;
CREATE TABLE IF NOT EXISTS `personal_access_tokens` (
  `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `tokenable_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tokenable_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(64) COLLATE utf8mb4_unicode_ci NOT NULL,
  `abilities` text COLLATE utf8mb4_unicode_ci,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `tbl_admin`
--

DROP TABLE IF EXISTS `tbl_admin`;
CREATE TABLE IF NOT EXISTS `tbl_admin` (
  `admin_id` int(11) NOT NULL AUTO_INCREMENT,
  `admin_email` varchar(200) NOT NULL,
  `admin_password` varchar(255) NOT NULL,
  `admin_name` varchar(255) NOT NULL,
  `admin_phone` varchar(255) NOT NULL,
  PRIMARY KEY (`admin_id`)
) ENGINE=MyISAM AUTO_INCREMENT=5 DEFAULT CHARSET=utf8;

--
-- Đang đổ dữ liệu cho bảng `tbl_admin`
--

INSERT INTO `tbl_admin` (`admin_id`, `admin_email`, `admin_password`, `admin_name`, `admin_phone`) VALUES
(1, 'nam@gmail.com', '827ccb0eea8a706c4c34a16891f84e7b', 'nam', '0763813829'),
(2, 'nghia@gmail.com', '827ccb0eea8a706c4c34a16891f84e7b', 'nghiavu', '090908074'),
(3, 'phu2303@gmail.com', '202cb962ac59075b964b07152d234b70', 'phunek2303', '080700900'),
(4, 'nhat@gmail.com', 'e10adc3949ba59abbe56e057f20f883e', 'Nhat', '0377648490');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `tbl_category_product`
--

DROP TABLE IF EXISTS `tbl_category_product`;
CREATE TABLE IF NOT EXISTS `tbl_category_product` (
  `category_id` int(11) NOT NULL AUTO_INCREMENT,
  `category_name` varchar(255) NOT NULL,
  `category_status` int(11) NOT NULL,
  PRIMARY KEY (`category_id`)
) ENGINE=MyISAM AUTO_INCREMENT=15 DEFAULT CHARSET=utf8;

--
-- Đang đổ dữ liệu cho bảng `tbl_category_product`
--

INSERT INTO `tbl_category_product` (`category_id`, `category_name`, `category_status`) VALUES
(10, 'Bong da nam', 0),
(11, 'Bong Da Nu', 0),
(12, 'aa', 0);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `tbl_customer`
--

DROP TABLE IF EXISTS `tbl_customer`;
CREATE TABLE IF NOT EXISTS `tbl_customer` (
  `customer_id` int(11) NOT NULL AUTO_INCREMENT,
  `customer_name` varchar(255) NOT NULL,
  `customer_email` varchar(255) NOT NULL,
  `customer_password` varchar(200) NOT NULL,
  `customer_cart` varchar(255) NOT NULL,
  `customer_sl` int(11) NOT NULL,
  PRIMARY KEY (`customer_id`),
  UNIQUE KEY `customer_sl` (`customer_id`)
) ENGINE=MyISAM AUTO_INCREMENT=214 DEFAULT CHARSET=utf8;

--
-- Đang đổ dữ liệu cho bảng `tbl_customer`
--

INSERT INTO `tbl_customer` (`customer_id`, `customer_name`, `customer_email`, `customer_password`, `customer_cart`, `customer_sl`) VALUES
(9, 'huynh tan phu', 'phuhuynh570@gmail.com', '202cb962ac59075b964b07152d234b70', 'Đặt không thành công', 3),
(213, 'Nghia', 'Nghia12@gmail.com', '202cb962ac59075b964b07152d234b70', 'Đặt hàng thành công', 2);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `tbl_product`
--

DROP TABLE IF EXISTS `tbl_product`;
CREATE TABLE IF NOT EXISTS `tbl_product` (
  `product_id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT,
  `category_id` int(11) NOT NULL,
  `product_name` varchar(255) NOT NULL,
  `product_desc` text NOT NULL,
  `product_content` text NOT NULL,
  `product_price` varchar(255) NOT NULL,
  `product_image` varchar(255) NOT NULL,
  `product_status` int(11) NOT NULL,
  `product_quantity` int(50) NOT NULL,
  PRIMARY KEY (`product_id`)
) ENGINE=MyISAM AUTO_INCREMENT=13 DEFAULT CHARSET=utf8;

--
-- Đang đổ dữ liệu cho bảng `tbl_product`
--

INSERT INTO `tbl_product` (`product_id`, `category_id`, `product_name`, `product_desc`, `product_content`, `product_price`, `product_image`, `product_status`, `product_quantity`) VALUES
(8, 11, 'Nam cam', 'adasdsad', 'đâsd', '122222', 'apple-watch-se-44mm-vien-nhom-day-cao-su-den-thumb-600x6001623.jpg', 1, 1),
(4, 11, 'Ao Bar', 'afaf', 'asfasf', '1333333', 'Ao-barca-san-khach-mau-ba-2-400x4003.jpg', 0, 0),
(5, 11, 'Ao AC', 'fsaasdf', 'adfaf', '1333333', '1641023498AoAcMilan83.jpg', 0, 0),
(6, 10, 'Ao Asernal', '324234', '42343', '1333333', '1641029241Ao-bayern-munich-san-nha-40-300x30088.jpg', 0, 0),
(9, 11, 'Nam pro', 'sấdsaf', 'àasfsaf', '122222', 'airtag244.jpg', 1, 100),
(10, 10, 'adsad', 'qwqeq', 'qeqweq', '123123', '247215660_596847428006273_1009663830277813320_n78.jpg', 2, 2),
(11, 11, 'Áo đẹp', 'asds', 'asdsad', '500000', '171999679_2774880059491558_6626684424927061838_n76.jpg', 2, 8),
(12, 12, 'nhat', 'tt', 'tt', '5000', 'Ao-arsenal-san-nha-40-300x300387.jpg', 2, 55);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
