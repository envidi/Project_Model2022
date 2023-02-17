-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1
-- Thời gian đã tạo: Th2 17, 2023 lúc 09:00 AM
-- Phiên bản máy phục vụ: 10.4.25-MariaDB
-- Phiên bản PHP: 8.1.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Cơ sở dữ liệu: `model_project`
--

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `bill`
--

CREATE TABLE `bill` (
  `id` int(11) NOT NULL,
  `id_user` int(11) DEFAULT NULL,
  `bill_name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `bill_address` varchar(255) NOT NULL,
  `bill_tele` int(11) NOT NULL,
  `payment_method` tinyint(11) NOT NULL DEFAULT 1 COMMENT '1 : Thanh toán trực tiếp\r\n2 : Chuyển khoản\r\n3 : Thanh toán online',
  `bill_date` varchar(255) NOT NULL,
  `total` int(11) NOT NULL,
  `bill_status` tinyint(11) NOT NULL DEFAULT 0 COMMENT '0 : Đơn hàng mới\r\n1 : Đang xử lý\r\n2 : Đang giao hàng\r\n3 : Đã giao hàng',
  `receive_name` varchar(255) DEFAULT NULL,
  `receive_address` varchar(255) DEFAULT NULL,
  `receive_tele` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `bill`
--

INSERT INTO `bill` (`id`, `id_user`, `bill_name`, `email`, `bill_address`, `bill_tele`, `payment_method`, `bill_date`, `total`, `bill_status`, `receive_name`, `receive_address`, `receive_tele`) VALUES
(37, 3, 'envidi98625', 'phanm711996@gmail.com', 'Tổ 5 cơ thạch hà nội', 363128962, 1, '15:54:52pm 15/02/2023', 270000000, 0, NULL, NULL, NULL),
(38, 3, 'envidi98625', 'phanm711996@gmail.com', 'Tổ 5 cơ thạch hà nội', 363128962, 1, '15:55:34pm 15/02/2023', 190000000, 2, NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `cart`
--

CREATE TABLE `cart` (
  `id` int(11) NOT NULL,
  `id_user` int(11) NOT NULL,
  `id_pro` int(11) NOT NULL,
  `image` varchar(255) DEFAULT NULL,
  `name` varchar(255) DEFAULT NULL,
  `price` int(11) NOT NULL,
  `quantity` int(10) NOT NULL,
  `cash` int(10) NOT NULL,
  `id_bill` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `cart`
--

INSERT INTO `cart` (`id`, `id_user`, `id_pro`, `image`, `name`, `price`, `quantity`, `cash`, `id_bill`) VALUES
(68, 3, 10, 'upload/638018700298075854_lenovo-gaming.jpg', 'Laptop lenovo', 25000000, 1, 25000000, 31),
(69, 3, 8, 'upload/oppo-a77.png', 'Oppo', 14990000, 7, 104930000, 31),
(70, 3, 7, 'upload/637703258653853689_tai-nghe-airp.jpg', 'Air pod', 10000000, 1, 10000000, 31),
(71, 3, 10, 'upload/638018700298075854_lenovo-gaming.jpg', 'Laptop lenovo', 25000000, 1, 25000000, 32),
(72, 3, 8, 'upload/oppo-a77.png', 'Oppo', 14990000, 7, 104930000, 32),
(81, 3, 10, 'upload/638018700298075854_lenovo-gaming.jpg', 'Laptop lenovo', 25000000, 7, 175000000, 37),
(82, 3, 9, 'upload/iphone-11.png', 'Iphone 11', 19000000, 5, 95000000, 37),
(83, 3, 7, 'upload/637703258653853689_tai-nghe-airp.jpg', 'Air pod', 10000000, 4, 40000000, 38),
(84, 3, 2, 'upload/638007285202545738_iphone-14-pro.jpg', 'Iphone 13', 30000000, 5, 150000000, 38);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `category`
--

CREATE TABLE `category` (
  `id` int(11) NOT NULL,
  `category_name` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `category`
--

INSERT INTO `category` (`id`, `category_name`) VALUES
(1, 'Samsung'),
(2, 'Vivo'),
(3, 'Apple'),
(4, 'Huwei'),
(5, 'Oppo'),
(6, 'Xiaomi'),
(7, 'Oneplus');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `comment`
--

CREATE TABLE `comment` (
  `id` int(11) NOT NULL,
  `content` varchar(255) NOT NULL,
  `product_id` int(11) NOT NULL,
  `customer_id` int(11) NOT NULL,
  `date` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `comment`
--

INSERT INTO `comment` (`id`, `content`, `product_id`, `customer_id`, `date`) VALUES
(10, 'hello my friend', 9, 1, '06:07:35am 09/02/2023'),
(13, 'wedf', 9, 1, '08:30:30am 09/02/2023'),
(14, 'tyu', 9, 1, '08:30:48am 09/02/2023'),
(15, 'sfds', 9, 1, '08:43:39 09/02/2023'),
(16, 'xcvcvb', 9, 1, '08:44:23am 09/02/2023'),
(17, 'first comment', 9, 1, '09:53:02am 09/02/2023'),
(18, 'first comment', 9, 1, '09:54:08am 09/02/2023'),
(19, 'first comment', 9, 1, '09:54:51am 09/02/2023'),
(20, 'first comment', 9, 1, '09:55:58am 09/02/2023'),
(21, 'first comment', 9, 1, '09:56:18am 09/02/2023'),
(22, 'fgdfg', 9, 1, '09:56:59am 09/02/2023'),
(23, 'fgdfg', 9, 1, '09:57:11am 09/02/2023'),
(24, 'second comment', 9, 1, '09:58:23am 09/02/2023'),
(25, 'first comment', 9, 2, '13:23:24pm 09/02/2023'),
(26, 'hello', 7, 2, '13:40:19pm 09/02/2023'),
(30, 'hello\r\n', 6, 1, '12:31:49pm 12/02/2023');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `customer`
--

CREATE TABLE `customer` (
  `id` int(11) NOT NULL,
  `user` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `address` varchar(255) NOT NULL,
  `tele` int(15) NOT NULL,
  `role` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `customer`
--

INSERT INTO `customer` (`id`, `user`, `password`, `email`, `address`, `tele`, `role`) VALUES
(1, 'we', '12345', 'ducnvph24098@fpt.edu.vn', '', 0, ''),
(2, 'Fassgh', '12345', 'lale07305@gmail.com', 'Tổ 5 cơ thạch hà nội', 363128962, 'Editor'),
(3, 'envidi98625', '12345', 'phanm711996@gmail.com', 'Tổ 5 cơ thạch hà nội', 363128962, 'Author'),
(4, 'admin', 'admin', 'admin123@gmail.com', 'nono', 0, 'admin');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `product`
--

CREATE TABLE `product` (
  `id` int(11) NOT NULL,
  `product_name` varchar(255) NOT NULL,
  `price` int(11) NOT NULL,
  `sale` int(11) NOT NULL,
  `image` varchar(255) NOT NULL,
  `date` date NOT NULL,
  `description` varchar(255) NOT NULL,
  `special` int(11) NOT NULL,
  `view` int(11) NOT NULL,
  `category_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `product`
--

INSERT INTO `product` (`id`, `product_name`, `price`, `sale`, `image`, `date`, `description`, `special`, `view`, `category_id`) VALUES
(1, 'Samsung', 20000000, 122, '637835361843548009_samsung-galax.jpg', '2009-12-23', 'Good', 0, 12, 1),
(2, 'Iphone 13', 30000000, 127, '638007285202545738_iphone-14-pro.jpg', '2016-02-02', 'Good', 12, 56, 3),
(3, 'Vivo', 32000000, 56, 'vivo.jpg', '2019-04-05', 'Good', 12, 23, 2),
(4, 'Xiaomi', 18000000, 28, 'xiaomi.jpg', '2021-09-07', 'Good', 12, 100, 6),
(5, 'Xiao mi redmi 10', 20000000, 10, 'xiaomi-redmi-10.png', '2018-05-10', 'delicious', 1, 34, 6),
(6, 'Samsung s22', 17999000, 12, 'samsung-galax-s22.png', '2022-07-10', 'Good', 1, 15, 1),
(7, 'Air pod', 10000000, 10, '637703258653853689_tai-nghe-airp.jpg', '2021-10-12', 'Good', 1, 8, 3),
(8, 'Oppo', 14990000, 6, 'oppo-a77.png', '0000-00-00', 'Good', 1, 17, 5),
(9, 'Iphone 11', 19000000, 6, 'iphone-11.png', '2020-03-19', 'Good', 1, 26, 3),
(10, 'Laptop lenovo', 25000000, 3, '638018700298075854_lenovo-gaming.jpg', '2022-02-12', 'Good', 8, 28, 1);

--
-- Chỉ mục cho các bảng đã đổ
--

--
-- Chỉ mục cho bảng `bill`
--
ALTER TABLE `bill`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `cart`
--
ALTER TABLE `cart`
  ADD PRIMARY KEY (`id`),
  ADD KEY `lk_cart_pro` (`id_pro`),
  ADD KEY `lk_cart_customer` (`id_user`);

--
-- Chỉ mục cho bảng `category`
--
ALTER TABLE `category`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `comment`
--
ALTER TABLE `comment`
  ADD PRIMARY KEY (`id`),
  ADD KEY `lk_comment_customer` (`customer_id`),
  ADD KEY `lk_comment_product` (`product_id`);

--
-- Chỉ mục cho bảng `customer`
--
ALTER TABLE `customer`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `email` (`email`);

--
-- Chỉ mục cho bảng `product`
--
ALTER TABLE `product`
  ADD PRIMARY KEY (`id`),
  ADD KEY `lk_product_category` (`category_id`);

--
-- AUTO_INCREMENT cho các bảng đã đổ
--

--
-- AUTO_INCREMENT cho bảng `bill`
--
ALTER TABLE `bill`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=39;

--
-- AUTO_INCREMENT cho bảng `cart`
--
ALTER TABLE `cart`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=85;

--
-- AUTO_INCREMENT cho bảng `category`
--
ALTER TABLE `category`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT cho bảng `comment`
--
ALTER TABLE `comment`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=31;

--
-- AUTO_INCREMENT cho bảng `customer`
--
ALTER TABLE `customer`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT cho bảng `product`
--
ALTER TABLE `product`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- Các ràng buộc cho các bảng đã đổ
--

--
-- Các ràng buộc cho bảng `cart`
--
ALTER TABLE `cart`
  ADD CONSTRAINT `lk_cart_customer` FOREIGN KEY (`id_user`) REFERENCES `customer` (`id`),
  ADD CONSTRAINT `lk_cart_pro` FOREIGN KEY (`id_pro`) REFERENCES `product` (`id`);

--
-- Các ràng buộc cho bảng `comment`
--
ALTER TABLE `comment`
  ADD CONSTRAINT `lk_comment_product` FOREIGN KEY (`product_id`) REFERENCES `product` (`id`);

--
-- Các ràng buộc cho bảng `product`
--
ALTER TABLE `product`
  ADD CONSTRAINT `lk_product_category` FOREIGN KEY (`category_id`) REFERENCES `category` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
