-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1
-- Thời gian đã tạo: Th10 14, 2020 lúc 02:51 PM
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
-- Cơ sở dữ liệu: `hoangig`
--

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `countsize`
--

CREATE TABLE `countsize` (
  `id` int(11) NOT NULL,
  `sizeproduct_id` int(11) NOT NULL,
  `product_id` int(11) NOT NULL,
  `count` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_vietnamese_ci;

--
-- Đang đổ dữ liệu cho bảng `countsize`
--

INSERT INTO `countsize` (`id`, `sizeproduct_id`, `product_id`, `count`) VALUES
(5, 1, 12, 100),
(6, 2, 12, 520),
(7, 3, 12, 270),
(8, 5, 12, 39),
(9, 1, 13, 111),
(10, 2, 13, 111),
(11, 3, 13, 111),
(12, 4, 13, 111),
(13, 5, 13, 111),
(14, 1, 14, 1000),
(15, 2, 14, 1000),
(16, 1, 15, 12232),
(17, 2, 15, 11111),
(18, 3, 15, 1234),
(19, 1, 16, 11111),
(20, 2, 16, 11111),
(21, 3, 16, 11111),
(22, 4, 16, 11111),
(23, 5, 16, 11111),
(24, 1, 17, 11111),
(25, 2, 17, 11111),
(26, 3, 17, 111111),
(27, 4, 17, 11111111),
(28, 5, 17, 1111),
(29, 1, 18, 11111),
(30, 2, 18, 11111),
(31, 3, 18, 111111),
(32, 4, 18, 11111),
(33, 1, 19, 12342),
(34, 2, 19, 11111),
(35, 3, 19, 11111),
(36, 4, 19, 11111),
(37, 5, 19, 11111);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `forgotpassword`
--

CREATE TABLE `forgotpassword` (
  `id` int(11) NOT NULL,
  `id_user` int(11) NOT NULL,
  `code` text COLLATE utf8_vietnamese_ci NOT NULL,
  `updated_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_vietnamese_ci;

--
-- Đang đổ dữ liệu cho bảng `forgotpassword`
--

INSERT INTO `forgotpassword` (`id`, `id_user`, `code`, `updated_at`) VALUES
(1, 2, 'Yvvj7ABCV01swZC1776oStOL9I2GdjxB', '2020-09-27 10:19:58');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `imageproduct`
--

CREATE TABLE `imageproduct` (
  `id_image` int(11) NOT NULL,
  `name_image` text COLLATE utf8_vietnamese_ci NOT NULL,
  `id_product` int(11) NOT NULL,
  `avatar` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_vietnamese_ci;

--
-- Đang đổ dữ liệu cho bảng `imageproduct`
--

INSERT INTO `imageproduct` (`id_image`, `name_image`, `id_product`, `avatar`) VALUES
(25, '20201009160658-713c12eb5f990e1ae82477d343e6335c-baby-groot-you-are-my-sunshine-shirt-Vneck-den.jpg', 12, 0),
(26, '20201009160658-638dfb3cf3daf2e5d96045c8abfcc551-baby-groot-you-are-my-sunshine-shirt-Sweater-den.jpg', 12, 0),
(27, '20201009160658-2f9b7483b1fa0bb975bf56628ed6ea7d-baby-groot-you-are-my-sunshine-shirt-Ladies-den.jpg', 12, 0),
(28, '20201009160658-c509acb190822fca4eedacfc26e7d89a-baby-groot-you-are-my-sunshine-shirt-Hoodie-den.jpg', 12, 0),
(29, '20201009160658-dbac40637775afd55589545cf393c62e-baby-groot-you-are-my-sunshine-shirt-Shirt-den.jpg', 12, 1),
(30, '20201009160835-fa58478a564d210e88a9c8374a991c88-amoskeag-lake-fish-shirts-V-neck-trang.jpg', 13, 0),
(31, '20201009160836-d2d8862c2ceb49603e9b80f63863b214-amoskeag-lake-fish-shirts-Sweater-trang.jpg', 13, 0),
(32, '20201009160836-e88f0b928ab41d8febdc09862b64a0c1-amoskeag-lake-fish-shirts-Hoodie-trang.jpg', 13, 0),
(33, '20201009160836-13c98544886ec9f9f2a2fc443d0ea52c-amoskeag-lake-fish-shirts-Shirt-trang.jpg', 13, 1),
(34, '20201009161038-7b3bc9406dcdea0ebbe31bf9fe330b6c-pig-in-october-we-wear-halloween-pink-shirt-Sweater-trang (1).jpg', 14, 0),
(35, '20201009161038-98c5b573c2bbd652eaa29865a7ff0774-pig-in-october-we-wear-halloween-pink-shirt-Ladies-trang (1).jpg', 14, 0),
(36, '20201009161038-105f9c7db58765466ac5fc0e5955d01b-pig-in-october-we-wear-halloween-pink-shirt-Hoodie-trang (1).jpg', 14, 0),
(37, '20201009161038-0c00b1a2f0ddcfee60a660dc75fba9f0-pig-in-october-we-wear-halloween-pink-shirt-Shirt-trang (1).jpg', 14, 1),
(38, '20201009161317-2db27f12a12111bcfc902fb66d8e5e54-weed-native-power-shirt-Sweater-trang.jpg', 15, 0),
(39, '20201009161317-2007aeb8b0f05cf881b432b9996b76d6-weed-native-power-shirt-Ladies-trang.jpg', 15, 0),
(40, '20201009161317-0d338e57c610ea492e3075f3a79812e7-weed-native-power-shirt-Hoodie-trang.jpg', 15, 0),
(41, '20201009161317-d8b7cb72874cebde95a3496a63c169c3-weed-native-power-shirt-Shirt-trang.jpg', 15, 1),
(42, '20201009161458-97a4b61cdb65f9ba70c00c91b2356d80-snoopy-and-woodstock-driving-peace-bus-shirt-Sweater-trang.jpg', 16, 0),
(43, '20201009161458-f5cb80d2f73d8ddaf3207352787fe5c0-snoopy-and-woodstock-driving-peace-bus-shirt-Ladies-trang.jpg', 16, 0),
(44, '20201009161458-78a4fc3d3006aa864c258b52aa21f45c-snoopy-and-woodstock-driving-peace-bus-shirt-Hoodie-trang.jpg', 16, 0),
(45, '20201009161458-a1878cb52537f89a34c3bbb1c636ffab-snoopy-and-woodstock-driving-peace-bus-shirt-Shirt-trang.jpg', 16, 1),
(46, '20201009161626-4462713ad3e59fc8425e99f04475d18e-suicide-awarenes-no-story-should-end-to-soon-breast-cancer-heart-shirt-Sweater-den.jpg', 17, 0),
(47, '20201009161626-d2b350178f0e5c1888ddc2b9eaf5282d-suicide-awarenes-no-story-should-end-to-soon-breast-cancer-heart-shirt-Ladies-den.jpg', 17, 0),
(48, '20201009161626-466c7662b044dc55ecc6d02b17a4b2f9-suicide-awarenes-no-story-should-end-to-soon-breast-cancer-heart-shirt-Hoodie-den.jpg', 17, 0),
(49, '20201009161626-e1c96c11cf79bee322c83bca8aff094e-suicide-awarenes-no-story-should-end-to-soon-breast-cancer-heart-shirt-Shirt-den.jpg', 17, 1),
(50, '20201009161756-c12f62a0d65b6e4d91342e1c19bed57c-queen-black-is-beautiful-strong-willed-black-lives-matter-diamond-shirt-Sweater-den.jpg', 18, 0),
(51, '20201009161756-f7ea521671ee739ee64f731a4832a5af-queen-black-is-beautiful-strong-willed-black-lives-matter-diamond-shirt-Ladies-den.jpg', 18, 0),
(52, '20201009161756-641d2f428b34b80722856e99e747bcd4-queen-black-is-beautiful-strong-willed-black-lives-matter-diamond-shirt-Hoodie-den.jpg', 18, 0),
(53, '20201009161756-8e56a118247d27051abeb385ee3174a0-queen-black-is-beautiful-strong-willed-black-lives-matter-diamond-shirt-Shirt-den.jpg', 18, 1),
(54, '20201009161916-dca9c3fcda71f1dcc4f57185dd8ab40b-tough-enough-to-be-a-dad-and-step-dad-crazy-enough-to-rock-them-both-fathers-day-shirt-Sweater-den.jpg', 19, 0),
(55, '20201009161916-b6902965eec69d63beebea712815513a-tough-enough-to-be-a-dad-and-step-dad-crazy-enough-to-rock-them-both-fathers-day-shirt-Ladies-den.jpg', 19, 0),
(56, '20201009161916-b576c74b296c5fab80ac5518b6507d96-tough-enough-to-be-a-dad-and-step-dad-crazy-enough-to-rock-them-both-fathers-day-shirt-Hoodie-den.jpg', 19, 0),
(57, '20201009161916-c45f7846cd130ad7dfc6e0791faf9712-tough-enough-to-be-a-dad-and-step-dad-crazy-enough-to-rock-them-both-fathers-day-shirt-Shirt-den.jpg', 19, 1);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `infouser`
--

CREATE TABLE `infouser` (
  `id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `address` text COLLATE utf8_vietnamese_ci NOT NULL,
  `phone` varchar(255) COLLATE utf8_vietnamese_ci NOT NULL,
  `note` text COLLATE utf8_vietnamese_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_vietnamese_ci;

--
-- Đang đổ dữ liệu cho bảng `infouser`
--

INSERT INTO `infouser` (`id`, `user_id`, `address`, `phone`, `note`) VALUES
(2, 11, 'bmt - daklak', '0359461689', 'Giao hàng vào buổi chiều nhé'),
(3, 12, 'bmt - daklak', '0359461689', 'Giao hàng vào buổi chiều nhé'),
(4, 13, 'bmt - daklak', '0359461689', 'Giao hàng vào buổi chiều nhé'),
(5, 14, 'asddsđ@gmail.com', 'asddsđ@gmail.com', 'asddsđ@gmail.com'),
(6, 15, 'BMt - daklak đóaa', '0359461686', 'giao hàng vào buổi sáng nhé'),
(7, 16, 'khunglongbaochua@gmail.com', 'khunglongbaochua@gmail.com', 'khunglongbaochua@gmail.com');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `introorderproduct`
--

CREATE TABLE `introorderproduct` (
  `id` int(11) NOT NULL,
  `orderproduct_id` int(11) NOT NULL,
  `product_id` int(11) NOT NULL,
  `count` int(11) NOT NULL,
  `price` int(11) NOT NULL,
  `size` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_vietnamese_ci;

--
-- Đang đổ dữ liệu cho bảng `introorderproduct`
--

INSERT INTO `introorderproduct` (`id`, `orderproduct_id`, `product_id`, `count`, `price`, `size`) VALUES
(1, 0, 12, 3, 450000, 2),
(2, 0, 13, 1, 320000, 2),
(3, 0, 12, 3, 450000, 2),
(4, 0, 13, 1, 320000, 2),
(5, 0, 12, 3, 450000, 2),
(6, 0, 13, 1, 320000, 2),
(7, 0, 12, 3, 450000, 2),
(8, 0, 13, 1, 320000, 2),
(9, 0, 12, 3, 450000, 2),
(10, 0, 13, 1, 320000, 2),
(11, 0, 12, 3, 450000, 2),
(12, 0, 13, 1, 320000, 2),
(13, 0, 12, 3, 450000, 2),
(14, 0, 13, 1, 320000, 2),
(15, 0, 12, 3, 450000, 2),
(16, 0, 13, 1, 320000, 2),
(17, 0, 12, 3, 450000, 2),
(18, 0, 13, 1, 320000, 2),
(19, 0, 12, 3, 450000, 2),
(20, 0, 13, 1, 320000, 2),
(21, 0, 12, 3, 450000, 2),
(22, 0, 13, 1, 320000, 2),
(23, 0, 12, 3, 450000, 2),
(24, 0, 13, 1, 320000, 2),
(25, 0, 12, 3, 450000, 2),
(26, 0, 13, 1, 320000, 2),
(27, 0, 13, 1, 320000, 1),
(28, 0, 13, 1, 320000, 2),
(29, 0, 13, 10, 320000, 2),
(30, 0, 13, 15, 320000, 2),
(31, 0, 14, 2, 120000, 2),
(32, 0, 15, 1, 100000, 2),
(33, 0, 13, 9, 320000, 2),
(34, 19, 12, 3, 450000, 2),
(35, 19, 14, 1, 120000, 2),
(36, 20, 13, 1, 320000, 2),
(37, 20, 14, 1, 120000, 2),
(38, 21, 13, 1, 320000, 2),
(39, 21, 14, 1, 120000, 2);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `orderproduct`
--

CREATE TABLE `orderproduct` (
  `id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `admin_id` int(11) DEFAULT NULL,
  `created_at` datetime NOT NULL,
  `updated_at` datetime NOT NULL,
  `status` int(11) NOT NULL,
  `sale` text COLLATE utf8_vietnamese_ci DEFAULT NULL,
  `lastprice` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_vietnamese_ci;

--
-- Đang đổ dữ liệu cho bảng `orderproduct`
--

INSERT INTO `orderproduct` (`id`, `user_id`, `admin_id`, `created_at`, `updated_at`, `status`, `sale`, `lastprice`) VALUES
(1, 15, NULL, '2020-10-12 14:25:04', '2020-10-12 14:25:04', 0, '0', 0),
(2, 15, NULL, '2020-10-12 14:26:15', '2020-10-12 14:26:15', 0, NULL, 0),
(3, 15, NULL, '2020-10-12 14:28:57', '2020-10-12 14:28:57', 0, NULL, 0),
(4, 15, NULL, '2020-10-12 14:29:09', '2020-10-12 14:29:09', 0, NULL, 0),
(5, 15, NULL, '2020-10-12 14:29:17', '2020-10-12 14:29:17', 0, NULL, 0),
(6, 15, NULL, '2020-10-12 14:33:00', '2020-10-12 14:33:00', 0, NULL, 0),
(7, 15, NULL, '2020-10-12 14:38:20', '2020-10-12 14:38:20', 0, NULL, 0),
(8, 15, NULL, '2020-10-12 14:38:32', '2020-10-12 14:38:32', 0, NULL, 0),
(9, 15, NULL, '2020-10-12 14:39:00', '2020-10-12 14:39:00', 0, NULL, 0),
(10, 15, NULL, '2020-10-12 14:39:48', '2020-10-12 14:39:48', 0, NULL, 0),
(11, 15, NULL, '2020-10-12 14:40:44', '2020-10-12 14:40:44', 0, NULL, 0),
(12, 15, NULL, '2020-10-12 14:42:09', '2020-10-12 14:42:09', 0, NULL, 0),
(13, 15, NULL, '2020-10-12 14:45:30', '2020-10-12 14:45:30', 0, NULL, 0),
(14, 15, NULL, '2020-10-12 14:46:54', '2020-10-12 14:46:54', 0, NULL, 0),
(15, 15, NULL, '2020-10-13 07:43:13', '2020-10-13 07:43:13', 0, NULL, 0),
(16, 15, NULL, '2020-10-13 07:43:51', '2020-10-13 07:43:51', 0, NULL, 0),
(17, 15, NULL, '2020-10-13 07:48:53', '2020-10-13 07:48:53', 0, NULL, 0),
(18, 15, NULL, '2020-10-13 07:49:32', '2020-10-13 07:49:32', 0, NULL, 0),
(19, 15, NULL, '2020-10-13 08:28:33', '2020-10-13 08:28:33', 1, NULL, 0),
(20, 15, NULL, '2020-10-13 08:33:36', '2020-10-13 08:33:36', 0, 'dk giam % rồi nhé', 440000),
(21, 16, NULL, '2020-10-13 10:51:19', '2020-10-13 10:51:19', 0, NULL, 440000);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `password_resets`
--

CREATE TABLE `password_resets` (
  `id` int(11) NOT NULL,
  `email` varchar(255) COLLATE utf8_vietnamese_ci NOT NULL,
  `token` text COLLATE utf8_vietnamese_ci NOT NULL,
  `created_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_vietnamese_ci;

--
-- Đang đổ dữ liệu cho bảng `password_resets`
--

INSERT INTO `password_resets` (`id`, `email`, `token`, `created_at`) VALUES
(1, 'hoang@gmail.com', '$2y$10$scFIJNzqCPzMnxgCow4L8OW8Gez4paKWSJAQyqiUwCXSOLo5N6MzG', '2020-10-12 01:55:33');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `post`
--

CREATE TABLE `post` (
  `id` int(11) NOT NULL,
  `name` text COLLATE utf8_vietnamese_ci NOT NULL,
  `content` text COLLATE utf8_vietnamese_ci NOT NULL,
  `typepost_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `avatar` text COLLATE utf8_vietnamese_ci NOT NULL,
  `created_at` datetime NOT NULL,
  `updated_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_vietnamese_ci;

--
-- Đang đổ dữ liệu cho bảng `post`
--

INSERT INTO `post` (`id`, `name`, `content`, `typepost_id`, `user_id`, `avatar`, `created_at`, `updated_at`) VALUES
(3, 'SHOULD YOU USE A SHAVE CREAM OR SHAVE GEL?', '<p>The first thing you need to do is sit down and set your goals. Diana Scharf Hunt said &ldquo;Goals are dreams with deadlines.&rdquo; A lot of times, people are thrown off by the idea of taking the time to set their goals.<br />\r\nFull-coverage panties aren&rsquo;t usually considered the most come-hither of underpinnings. Dorky preteen you probably loved them. Your grandma still loves them.<br />\r\nThey are loose. They reveal nothing, except for seams. But, like other pieces, such as the modest cardigan, there is a subversive sex appeal embedded in those packs of $8 high-cut panties. Another benefit? They are great to lounge in during those hot summer months. Look to Cameron Diaz in Charlie&rsquo;s Angels (2000), who does a rise-and-shine, cheek-shaking dance in underwear boasting a Spiderman cartoon on the butt.</p>', 1, 16, '1602606297_3942419_c60ee007c0e69f25bdd12d20a4edad21.jpg', '2020-10-13 16:24:57', '2020-10-13 16:24:57'),
(4, 'FACE THE NEW YEAR WITH THE REAL SHAVING COMPANY!', '<p>The first thing you need to do is sit down and set your goals. Diana Scharf Hunt said &ldquo;Goals are dreams with deadlines.&rdquo; A lot of times, people are thrown off by the idea of taking the time to set their goals.<br />\r\nFull-coverage panties aren&rsquo;t usually considered the most come-hither of underpinnings. Dorky preteen you probably loved them. Your grandma still loves them.</p>\r\n\r\n<p>They are loose. They reveal nothing, except for seams. But, like other pieces, such as the modest cardigan, there is a subversive sex appeal embedded in those packs of $8 high-cut panties. Another benefit? They are great to lounge in during those hot summer months. Look to Cameron Diaz in Charlie&rsquo;s Angels (2000), who does a rise-and-shine, cheek-shaking dance in underwear boasting a Spiderman cartoon on the butt.</p>\r\n\r\n<p>Options abound. &ldquo;<strong>Luckily, lingerie brands caught on to ladies stealing from their men and started</strong> making inspired sets,&rdquo; says Vogue Market Editor Alexandra Gurvitch. Here, the best options for summer, from a navel-skimming pair by Lonely Lingerie to classic Calvin Klein logo boy shorts. After all, who wants to spend a lazy Sunday in a G-string, anyway?</p>', 1, 16, '1602606436_242224_2530c84b8d94852a97fb9d72ae8d2380.jpg', '2020-10-13 16:27:16', '2020-10-13 16:27:16'),
(5, 'FACE THE NEW YEAR WITH THE REAL SHAVING COMPANY!', '<p>The first thing you need to do is sit down and set your goals. Diana Scharf Hunt said &ldquo;Goals are dreams with deadlines.&rdquo; A lot of times, people are thrown off by the idea of taking the time to set their goals.<br />\r\nFull-coverage panties aren&rsquo;t usually considered the most come-hither of underpinnings. Dorky preteen you probably loved them. Your grandma still loves them.</p>\r\n\r\n<p>They are loose. They reveal nothing, except for seams. But, like other pieces, such as the modest cardigan, there is a subversive sex appeal embedded in those packs of $8 high-cut panties. Another benefit? They are great to lounge in during those hot summer months. Look to Cameron Diaz in Charlie&rsquo;s Angels (2000), who does a rise-and-shine, cheek-shaking dance in underwear boasting a Spiderman cartoon on the butt.</p>\r\n\r\n<p>&nbsp;</p>', 1, 16, '1602606476_9335124_d36990dd13bf147fa72ef88704c3e6d3.jpg', '2020-10-13 16:27:56', '2020-10-13 16:27:56');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `product`
--

CREATE TABLE `product` (
  `id` int(11) NOT NULL,
  `name_product` text COLLATE utf8_vietnamese_ci NOT NULL,
  `price` int(11) NOT NULL,
  `id_type` int(11) NOT NULL,
  `content` text COLLATE utf8_vietnamese_ci NOT NULL,
  `created_at` datetime NOT NULL,
  `updated_at` datetime NOT NULL,
  `status` int(11) NOT NULL,
  `user_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_vietnamese_ci;

--
-- Đang đổ dữ liệu cho bảng `product`
--

INSERT INTO `product` (`id`, `name_product`, `price`, `id_type`, `content`, `created_at`, `updated_at`, `status`, `user_id`) VALUES
(12, 'Dog don’t eat me shirts', 450000, 1, '<p>Viral videos of Brooklyn rooftop flirtation aside, being in quarantine hasn&rsquo;t exactly been a romantic time for most. For those quarantining solo, it&rsquo;s been weeks since their last IRL interaction with a lover or partner the&nbsp;<strong>Dog don&rsquo;t eat me shirts</strong>&nbsp;In addition,I will do this message from New York&rsquo;s health department, at least, is that you are your safest sex partner right now. But even for the couples in quarantine, more time together hasn&rsquo;t necessarily translated to more sex. When psychologist and author of Loving Bravely and Taking Sexy Back Dr. Alexandra Solomon posed that very question to her 50,000-plus Instagram followers, 60% reported experiencing an erotic nosedive.</p>\r\n\r\n<h2>Dog don&rsquo;t eat me shirts, hoodie, tank top, sweater and long sleeve t-shirt</h2>\r\n\r\n<p>Since New York&rsquo;s &lsquo;stay home&rsquo; order went into effect, our wine consumption has gone way up, but the&nbsp;<strong>Dog don&rsquo;t eat me shirts</strong>&nbsp;In addition,I will do this frequency that we&rsquo;re having sex has gone way down, says Nicholas, 27, a publicist, who&rsquo;s going on five years with his boyfriend. It&rsquo;s a sentiment echoed by Nicky, a 38-year-old creative director, in her fifth year of marriage. I thought my husband and I were going to have a ton of sex with all the time we were spending together and being un- and underemployed, but we&rsquo;ve probably had sex twice since this all started, she says. We&rsquo;re definitely staying close and cuddling, but not a lot of action. So, what gives.</p>', '2020-10-09 16:06:58', '2020-10-09 16:06:58', 1, 4),
(13, 'Amoskeag lake fish shirts', 320000, 1, '<p>Ivan Pol, aka The Beauty Sandwich, stresses the&nbsp;<strong>Amoskeag lake fish shirts</strong>&nbsp;moreover I will buy this importance of circulation in the body, and likes to begin his day with a facial stimulation tool. I take the Sarah Chapman facial lift tool and start at the jawline for 5 to 10 minutes, then work towards the cheeks to get rid of that morning puffiness. Next, the pro sloughs off dead skin cells with a pair of exfoliating gloves. I start from the bottom up, always in upward strokes, he explains. This will help get your lymphatic system going and help move the excess fluids out that can sometimes build up as you sleep. Pol&rsquo;s top skincare secret lies in the fridge: I take 1 tsp of yogurt goat or sheep and spread it over my face, he says. Yogurt is naturally rich in lactic acid, which helps to exfoliate dead skin cells and help with cell turnover. The pro rinses it off in the shower after 10 to 15 minutes and always rinses underneath a T-3 shower head. I find it very important to use a shower filter to help remove chlorine and sediments that soften your water, he says. Your hair will thank you for it. Last step is a layer of Hana Nai&rsquo;a&rsquo;s SPF. Just because we&rsquo;re indoors doesn&rsquo;t mean we don&rsquo;t need sunscreen, he says.</p>\r\n\r\n<h2>Amoskeag lake fish shirts, hoodie, tank top, sweater and long sleeve t-shirt</h2>\r\n\r\n<p>I actually like doing a facial while I&rsquo;m soaking in the&nbsp;<strong>Amoskeag lake fish shirts</strong>&nbsp;moreover I will buy this bathtub, says celebrity facialist Joanna Vargas, who regularly tends to the skin of Emma Roberts and Elizabeth Moss. It feels super luxe. Plus, music is a must. Her routine begins with a cleanser and a quick face massage, followed by an exfoliating mask. This will stimulate collagen production, remove dead skin cells, brighten the skin and products will penetrate better into the skin, she says. Next, a face mask session is followed by some lymphatic drainage. Downward circles will depuff, while upwards ones will bring nutrients to the skin. After the soak, Vargas slathers on Jordan Samuels&rsquo; moisturizing body oil:It&rsquo;s super hydrating and is loaded for antioxidants that repair the skin while I sleep.</p>', '2020-10-09 16:08:35', '2020-10-09 16:08:35', 1, 4),
(14, 'Pig in october we wear Halloween pink shirt', 120000, 1, '<p>This is the&nbsp;<strong>Official Pig in october we wear Halloween pink shirt</strong>, and this is a premium shirt, tank top, ladies, woman v-neck, long-sleeved tee, sweater, hoodie (printed in the US) For birthdays, Valentine&#39;s Day, Father&#39;s Day, Halloween, Thanksgiving or Christmas presents! Wonderful Valentine&#39;s day gift for your boyfriend. Humorous and sarcastic sayings and quotes new graphic T-shirts make a great gift if your dad is the best or greatest dad in the world, great tees for Hubby, Boyfriend, Partner, Pops, Pawpaw, Papi. Unique men&#39;s retirement, dad&#39;s day, Christmas, or a birthday present for a dad or husband, that doesn&#39;t matter if you&#39;re a proud grandfather, dad, papa, grandfather or stepfather. This T-shirt gift can be from your spouse, wife, son, daughter-in-law. Perfect birthday gift ideas for boys/girls/children. Giving gifts to dad, dad, mom, brother, uncle, husband, wife, adult, son, youth, boy, girl, baby, teenager, a friend on birthday / Christmas.</p>', '2020-10-09 16:10:38', '2020-10-09 16:10:38', 1, 4),
(15, 'Weed Native Power Shirt', 100000, 1, '<p>But could sex actually help alleviate growing fears. I&rsquo;ve begun to wonder if we were having more sex, if it would help me feel a bit more relaxed, Iris shares. According to psychologists, she&rsquo;s right: while doing it may be the&nbsp;<strong>Weed Native Power Shirt</strong>&nbsp;in other words I will buy this last thing you want to do right now, sex and masturbation can in fact help mitigate some of the stress. The bad thing about anxiety is that it&rsquo;s preoccupying, while the good thing about sex is that it&rsquo;s regulating, says Dr. Laurie Watson, a certified sex therapist and host of Foreplay Radio. Anxiety is this existential terror of the unknown, and love and sex and orgasm is a way to mitigate that, and be here now. It physiologically releases hormones that give us a sense of being grounded and connected.</p>\r\n\r\n<h2>Weed Native Power Shirt, hoodie, tank top, sweater and long sleeve t-shirt</h2>\r\n\r\n<p>The biggest challenge may be getting back into a groove. Watson&rsquo;s suggestion is to ease into it. Start with skin-on-skin contact and holding each other so you can melt into being sexual versus a cold start, she explains. Solomon points out that mutual acceptance is another big step in the&nbsp;<strong>Weed Native Power Shirt</strong>&nbsp;in other words I will buy this right direction. I think one of the best things couples can do is just say to each other, &lsquo;What the hell; this is killing our sex life,&rsquo; because then you&rsquo;re accepting and sharing this WTF experience, she explains. The worst thing that can happen is couples feeling badly and becoming panicked about how long it&rsquo;s been, or going silent about it. One silver lining about being quarantined together 24/7 is that sex can also happen at untraditional times. What I would say is better now is just being able to have sex whenever, says Louisa, 35, an editor who got married last summer. It&rsquo;s actually opened up the window to more sex-having. So while whatever sadness my husband and I may feel day to day is probably cutting back on &lsquo;feeling sexy,&rsquo; we&rsquo;re just about breaking even.</p>', '2020-10-09 16:13:17', '2020-10-09 16:13:17', 1, 4),
(16, 'Snoopy And Woodstock Driving Peace Bus Shirt', 500000, 1, '<p>For skin care, Valentine continues to hydrate with a hyaluronic acid serum. With the&nbsp;<strong>Snoopy And Woodstock Driving Peace Bus Shirt</strong>&nbsp;Additionally,I will love this uptick in Zoom calls, the pro has been trying out different foundations for a glowing on-screen appearance. I am really loving the Koh Gen Do Moisture Foundation, which hydrates and is packed with vitamins, he says. [It] was recommended to me by Juliane Moore&rsquo;s makeup artist, Elaine Offers, and I love it. I&rsquo;m so used to working in the treatment room every day, but now I have the opportunity to give treatments to myself, says facialist Tammy Fender. The pro&rsquo;s at home remedy includes an at-home herbal steam treatment. It&rsquo;s so old-fashioned, she jokes. To make, select some herbs Fender likes gathering eucalyptus, rosemary and mint then place them in a big bowl and cover with several inches of steaming hot water and inhale, allowing the steam to gently open your pores and bring the herbal benefits to your lungs. After, Fender likes to rinse her hair with the herbal brew and mist her face with her signature rose water spray.</p>\r\n\r\n<h2>Snoopy And Woodstock Driving Peace Bus Shirt, hoodie, tank top, sweater and long sleeve t-shirt</h2>\r\n\r\n<p>It-Brit facialist Teresa Tarmey believes in the&nbsp;<strong>Snoopy And Woodstock Driving Peace Bus Shirt</strong>&nbsp;Additionally,I will love this healing power of microneedling: It&rsquo;s why I created an at-home, easy to use and very effective 12 week program, she says. This is a perfect time to be trying something like this whilst stuck at home. First, the pro applies a lactic acid to gently exfoliate before rolling the short needles over her skin. There&rsquo;s no pain, just a little tingle, Tarmey says. Next, she applies a series of hydrating serums Emepelle and Neostrata Tri-Therapy in addition to her daily SPF, and drinks loads of water. It keeps the skin internally hydrated, she explains.</p>', '2020-10-09 16:14:58', '2020-10-09 16:14:58', 1, 4),
(17, 'Suicide awarenes no story should end to soon Breast cancer heart shirt', 450000, 2, '<p>For skin care, Valentine continues to hydrate with a hyaluronic acid serum. With the&nbsp;<strong>Suicide awarenes no story should end to soon Breast cancer heart shirt</strong>&nbsp;Apart from&hellip;,I will love this uptick in Zoom calls, the pro has been trying out different foundations for a glowing on-screen appearance. I am really loving the Koh Gen Do Moisture Foundation, which hydrates and is packed with vitamins, he says. [It] was recommended to me by Juliane Moore&rsquo;s makeup artist, Elaine Offers, and I love it. I&rsquo;m so used to working in the treatment room every day, but now I have the opportunity to give treatments to myself, says facialist Tammy Fender. The pro&rsquo;s at home remedy includes an at-home herbal steam treatment. It&rsquo;s so old-fashioned, she jokes. To make, select some herbs Fender likes gathering eucalyptus, rosemary and mint then place them in a big bowl and cover with several inches of steaming hot water and inhale, allowing the steam to gently open your pores and bring the herbal benefits to your lungs. After, Fender likes to rinse her hair with the herbal brew and mist her face with her signature rose water spray.</p>\r\n\r\n<h2>Suicide awarenes no story should end to soon Breast cancer heart shirt, hoodie, tank top, sweater and long sleeve t-shirt</h2>\r\n\r\n<p>It-Brit facialist Teresa Tarmey believes in the&nbsp;<strong>Suicide awarenes no story should end to soon Breast cancer heart shirt</strong>&nbsp;Apart from&hellip;,I will love this healing power of microneedling: It&rsquo;s why I created an at-home, easy to use and very effective 12 week program, she says. This is a perfect time to be trying something like this whilst stuck at home. First, the pro applies a lactic acid to gently exfoliate before rolling the short needles over her skin. There&rsquo;s no pain, just a little tingle, Tarmey says. Next, she applies a series of hydrating serums Emepelle and Neostrata Tri-Therapy in addition to her daily SPF, and drinks loads of water. It keeps the skin internally hydrated, she explains.</p>', '2020-10-09 16:16:26', '2020-10-09 16:16:26', 1, 4),
(18, 'Queen black is beautiful strong willed black lives matter diamond shirt', 120000, 1, '<p>I don&rsquo;t think I could ever forgive myself if I transmitted it to him, Villavicencio tells Vogue. So I&rsquo;m doing everything I can to keep him safe.</p>\r\n\r\n<h2>Queen black is beautiful strong willed black lives matter diamond shirt, hoodie, tank top, sweater and long sleeve t-shirt</h2>\r\n\r\n<p>Villavicencio works at an outpatient clinic affiliated with a local hospital, so she provides a wide range of reproductive-health services. Today, in my clinic, I saw someone who is 39 weeks [pregnant], 35 weeks [pregnant], counseled someone about a C-section, saw a non-pregnant patient for abnormal bleeding, another patient for an IUD, and then I did a medication abortion, she says. When I&rsquo;m on labor and delivery, I&rsquo;m primarily delivering babies, but occasionally when someone comes in with an emergency they&rsquo;re bleeding or infected and they need an emergency abortion, I can do that as well. I also go to other clinics that are not affiliated with my hospital and provide abortions. In two weeks, Villavicencio will begin what she and her coworkers have labeled the&nbsp;<strong>Queen black is beautiful strong willed black lives matter diamond shirt</strong>&nbsp;Additionally,I will love this COVID schedule: Doctors are split into two or three teams; one team will be on for two weeks straight, come off, and then another team will come on. What that allows for is if you get sick, you can be quarantined for the two weeks that you&rsquo;re off, Villavicencio explains. And there are also people waiting in the wings if someone gets sick during a shift.</p>', '2020-10-09 16:17:56', '2020-10-09 16:17:56', 1, 4),
(19, 'Tough enough to be a dad and step dad crazy enough to rock them both fathers day shirt', 750000, 1, '<p>I think it&rsquo;s gonna transition me really smoothly from day to night, Woods says of the&nbsp;<strong>Tough enough to be a dad and step dad crazy enough to rock them both fathers day shirt</strong>&nbsp;and I will buy this shape-eliminating &rsquo;80s-era Victorian fairytale bridesmaid dress that she altered into one of her favorite babydoll shapes and donned for the occasion. It&rsquo;s definitely my go-to silhouette because I like my shoulders. Plus, the more volume, the better. I want to look like Princess Diana at her wedding every time I&rsquo;m wearing a dress. On her way out the door, Woods pulls on a pair of watchband-embellished flats, a design that came to her in a dream. Offering up a hoarders guide to Glasgow, Wood&rsquo;s destination is Randall&rsquo;s Antiques and Vintage Centre, a decades-old market. Spinning through aisles, perching on chaise lounges and grasping at crystal baubles with a pair of rhinestone-dotted gloves, Woods looks right at home. How we dress, how we present, the person we see when we look in the mirror and why that person is different than the person everyone else sees these are important things that really affect our mental health and how we function as a society, says Woods, adding: You&rsquo;re only setting yourself up for a fall if you take yourself too seriously.</p>\r\n\r\n<h2>Tough enough to be a dad and step dad crazy enough to rock them both fathers day shirt, hoodie, tank top, sweater and long sleeve t-shirt</h2>\r\n\r\n<p>Dr. Jen Villavicencio, an ob-gyn and abortion provider in Michigan, sits six feet away from her husband in her living room after another grueling shift. In a small corner by the&nbsp;<strong>Tough enough to be a dad and step dad crazy enough to rock them both fathers day shirt</strong>&nbsp;and I will buy this door lie her work clothes, which she took off as soon as she got home and before immediately showering. She no longer kisses her husband, touches her husband, or sleeps in the same bed as her husband. They use separate bathrooms and try not to occupy the same room at the same time, and she no longer goes into their kitchen. As the coronavirus pandemic worsens, this is her new normal.</p>', '2020-10-09 16:19:16', '2020-10-09 16:19:16', 1, 4);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `sizeproduct`
--

CREATE TABLE `sizeproduct` (
  `id` int(11) NOT NULL,
  `name` varchar(255) COLLATE utf8_vietnamese_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_vietnamese_ci;

--
-- Đang đổ dữ liệu cho bảng `sizeproduct`
--

INSERT INTO `sizeproduct` (`id`, `name`) VALUES
(1, 'S'),
(2, 'M'),
(3, 'L'),
(4, 'XL'),
(5, 'XXL');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `typepost`
--

CREATE TABLE `typepost` (
  `id` int(11) NOT NULL,
  `name` varchar(255) COLLATE utf8_vietnamese_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_vietnamese_ci;

--
-- Đang đổ dữ liệu cho bảng `typepost`
--

INSERT INTO `typepost` (`id`, `name`) VALUES
(1, 'Fashion'),
(2, 'Healthy');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `typeproduct`
--

CREATE TABLE `typeproduct` (
  `id_type` int(11) NOT NULL,
  `name_type` varchar(255) COLLATE utf8_vietnamese_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_vietnamese_ci;

--
-- Đang đổ dữ liệu cho bảng `typeproduct`
--

INSERT INTO `typeproduct` (`id_type`, `name_type`) VALUES
(1, 'Trendings Shirts'),
(2, 'Halloween Shirt'),
(3, 'Chritmas Shirt');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `name` varchar(255) COLLATE utf8_vietnamese_ci NOT NULL,
  `password` varchar(255) COLLATE utf8_vietnamese_ci NOT NULL,
  `email` varchar(255) COLLATE utf8_vietnamese_ci NOT NULL,
  `level` int(11) NOT NULL,
  `point` int(11) DEFAULT NULL,
  `created_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL,
  `remember_token` text COLLATE utf8_vietnamese_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_vietnamese_ci;

--
-- Đang đổ dữ liệu cho bảng `user`
--

INSERT INTO `user` (`id`, `name`, `password`, `email`, `level`, `point`, `created_at`, `updated_at`, `remember_token`) VALUES
(4, 'hoang', '$2y$10$mxxZ0MwH0fd7Y6wC4Yj8/.RXYEZoEpIw6Swz32xs0HdS0LQN79h4S', 'hoang01659461686@gmail.com', 1, NULL, NULL, '2020-10-13 23:58:48', 'lx5CTELPuiknjSsfP7ia3EahHTQdfqHmeSNkQ8SPbtZni9kt3u5lRCymBwvo'),
(5, 'qqqq', '', '', 0, NULL, NULL, NULL, ''),
(13, 'Siêu nhân gao', '$2y$10$aTXtJr8f8eqrAqk9uv69AuooXSZvXjCWokDybsn7uE6uhbHlSsoUq', 'gaodoo@gmail.com', 2, NULL, '2020-10-11 15:23:38', '2020-10-11 15:23:38', ''),
(14, 'asddsđ@gmail.com', '$2y$10$f/KtjNCetXQ5cR4TAMBkke2JXF4/Kh8WMqyKbd6tYfS.7MgvAfyUm', 'asdds@gmail.com', 2, NULL, '2020-10-12 00:49:29', '2020-10-12 00:49:29', ''),
(15, 'hồ viết hoàng', '$2y$10$SEpE6X8SaTCAESQlf5tObOg1jxeM9.Xd/MWLX.8VxrEEm83hLS116', 'hoanglunlam02@gmail.com', 1, 100, '2020-10-12 03:58:10', '2020-10-13 07:49:32', 'ZipFcWPljuo5FZiStWE32JiU5YUFKIVdtnLFt33huMnXsl3VUoSGewzzDi7D'),
(16, 'Admin', '$2y$10$kYomd5U.QtKboI/78XhYl.v9ZiDKoyZSNFVPBjSHSnLguSOxQTLum', 'khunglongbaochua@gmail.com', 1, 0, '2020-10-13 10:30:40', '2020-10-13 10:30:40', NULL);

--
-- Chỉ mục cho các bảng đã đổ
--

--
-- Chỉ mục cho bảng `countsize`
--
ALTER TABLE `countsize`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `forgotpassword`
--
ALTER TABLE `forgotpassword`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `imageproduct`
--
ALTER TABLE `imageproduct`
  ADD PRIMARY KEY (`id_image`);

--
-- Chỉ mục cho bảng `infouser`
--
ALTER TABLE `infouser`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `introorderproduct`
--
ALTER TABLE `introorderproduct`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `orderproduct`
--
ALTER TABLE `orderproduct`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `password_resets`
--
ALTER TABLE `password_resets`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `post`
--
ALTER TABLE `post`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `product`
--
ALTER TABLE `product`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `sizeproduct`
--
ALTER TABLE `sizeproduct`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `typepost`
--
ALTER TABLE `typepost`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `typeproduct`
--
ALTER TABLE `typeproduct`
  ADD PRIMARY KEY (`id_type`);

--
-- Chỉ mục cho bảng `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT cho các bảng đã đổ
--

--
-- AUTO_INCREMENT cho bảng `countsize`
--
ALTER TABLE `countsize`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=38;

--
-- AUTO_INCREMENT cho bảng `forgotpassword`
--
ALTER TABLE `forgotpassword`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT cho bảng `imageproduct`
--
ALTER TABLE `imageproduct`
  MODIFY `id_image` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=58;

--
-- AUTO_INCREMENT cho bảng `infouser`
--
ALTER TABLE `infouser`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT cho bảng `introorderproduct`
--
ALTER TABLE `introorderproduct`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=40;

--
-- AUTO_INCREMENT cho bảng `orderproduct`
--
ALTER TABLE `orderproduct`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT cho bảng `password_resets`
--
ALTER TABLE `password_resets`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT cho bảng `post`
--
ALTER TABLE `post`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT cho bảng `product`
--
ALTER TABLE `product`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT cho bảng `sizeproduct`
--
ALTER TABLE `sizeproduct`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT cho bảng `typepost`
--
ALTER TABLE `typepost`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT cho bảng `typeproduct`
--
ALTER TABLE `typeproduct`
  MODIFY `id_type` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT cho bảng `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
