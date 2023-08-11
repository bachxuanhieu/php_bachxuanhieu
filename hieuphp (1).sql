-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1
-- Thời gian đã tạo: Th8 11, 2023 lúc 06:17 AM
-- Phiên bản máy phục vụ: 10.4.27-MariaDB
-- Phiên bản PHP: 8.0.25

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Cơ sở dữ liệu: `hieuphp`
--

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `tbl_admin`
--

CREATE TABLE `tbl_admin` (
  `admin_id` int(11) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Đang đổ dữ liệu cho bảng `tbl_admin`
--

INSERT INTO `tbl_admin` (`admin_id`, `username`, `password`) VALUES
(1, 'hieuadmin', 'e10adc3949ba59abbe56e057f20f883e'),
(2, 'hieuuser', 'e10adc3949ba59abbe56e057f20f883e');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `tbl_category_post`
--

CREATE TABLE `tbl_category_post` (
  `id_category_post` int(11) UNSIGNED NOT NULL,
  `title_category_post` varchar(200) NOT NULL,
  `desc_category_post` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Đang đổ dữ liệu cho bảng `tbl_category_post`
--

INSERT INTO `tbl_category_post` (`id_category_post`, `title_category_post`, `desc_category_post`) VALUES
(1, 'hieu dep trai so 1', 'hieu pro');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `tbl_category_product`
--

CREATE TABLE `tbl_category_product` (
  `id_category_product` int(11) UNSIGNED NOT NULL,
  `title_category_product` varchar(255) DEFAULT NULL,
  `desc_category_product` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Đang đổ dữ liệu cho bảng `tbl_category_product`
--

INSERT INTO `tbl_category_product` (`id_category_product`, `title_category_product`, `desc_category_product`) VALUES
(1, 'Điên thoại', 'Điện thoại chính hãng'),
(46, 'Laptop', 'Laptop chính hãng'),
(47, 'Tablet', 'Tablet chính hãng'),
(48, 'Phụ kiện', 'Phụ kiện chính hãng');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `tbl_customers`
--

CREATE TABLE `tbl_customers` (
  `customers_id` int(11) NOT NULL,
  `customers_name` varchar(150) NOT NULL,
  `customers_phone` varchar(100) NOT NULL,
  `customers_email` varchar(150) NOT NULL,
  `customers_password` varchar(100) NOT NULL,
  `customers_address` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Đang đổ dữ liệu cho bảng `tbl_customers`
--

INSERT INTO `tbl_customers` (`customers_id`, `customers_name`, `customers_phone`, `customers_email`, `customers_password`, `customers_address`) VALUES
(1, 'Bach Xuan Hieu', '0815663667', 'hieupro', 'e10adc3949ba59abbe56e057f20f883e', '12 trịnh đình Thảo'),
(3, 'Nguyen Thi Mo', '0363403203', 'mo@gmail.com', 'e10adc3949ba59abbe56e057f20f883e', '47/1 Nguyen Huu tien'),
(4, '123456', '123456', '123456', 'e10adc3949ba59abbe56e057f20f883e', '123456'),
(5, 'abc', 'Abc', 'Abc', '35593b7ce5020eae3ca68fd5b6f3e031', 'Abc');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `tbl_order`
--

CREATE TABLE `tbl_order` (
  `order_id` int(11) NOT NULL,
  `order_code` varchar(100) NOT NULL,
  `order_date` varchar(100) NOT NULL,
  `order_status` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Đang đổ dữ liệu cho bảng `tbl_order`
--

INSERT INTO `tbl_order` (`order_id`, `order_code`, `order_date`, `order_status`) VALUES
(1, '1333', '27/07/2023 06:40:30pm', 0),
(2, '134', '27/07/2023 06:59:11pm', 0),
(3, '5003', '27/07/2023 07:09:10pm', 0),
(4, '3745', '27/07/2023 07:11:32pm', 1),
(5, '1162', '27/07/2023 07:12:56pm', 0),
(6, '9569', '28/07/2023 06:41:44pm', 0),
(7, '3969', '31/07/2023 06:49:41pm', 0),
(8, '1349', '31/07/2023 07:09:20pm', 0),
(9, '7114', '31/07/2023 07:09:42pm', 0);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `tbl_order_details`
--

CREATE TABLE `tbl_order_details` (
  `order_details_id` int(11) NOT NULL,
  `order_code` varchar(100) NOT NULL,
  `product_id` int(11) UNSIGNED NOT NULL,
  `product_quanlity` int(11) NOT NULL,
  `name` varchar(150) NOT NULL,
  `sodienthoai` varchar(150) NOT NULL,
  `email` varchar(150) NOT NULL,
  `diachi` varchar(150) NOT NULL,
  `noidung` varchar(150) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Đang đổ dữ liệu cho bảng `tbl_order_details`
--

INSERT INTO `tbl_order_details` (`order_details_id`, `order_code`, `product_id`, `product_quanlity`, `name`, `sodienthoai`, `email`, `diachi`, `noidung`) VALUES
(1, '134', 4, 1, 'Bach xuân hiếu', '0815663667', 'hieupro@gmail.com', '12 huỳnh văn bánh', 'mua về sài chứ gì'),
(2, '134', 5, 1, 'Bach xuân hiếu', '0815663667', 'hieupro@gmail.com', '12 huỳnh văn bánh', 'mua về sài chứ gì'),
(3, '134', 8, 2, 'Bach xuân hiếu', '0815663667', 'hieupro@gmail.com', '12 huỳnh văn bánh', 'mua về sài chứ gì'),
(4, '5003', 4, 1, 'Nguyễn Thị Mơ', '0363403203', 'mo@gmail.com', '47/1 Nguyễn đình tiến', 'mua cho hieu'),
(5, '5003', 8, 1, 'Nguyễn Thị Mơ', '0363403203', 'mo@gmail.com', '47/1 Nguyễn đình tiến', 'mua cho hieu'),
(6, '3745', 4, 1, 'mơ', 'sad', 'ád', 'ád', 'ád'),
(7, '1162', 4, 1, 'fsa', 'ádf', 'ádf', 'ádf', 'ádf'),
(8, '9569', 8, 3, '', '', '', '', ''),
(9, '3969', 13, 1, '12345', '12345', '12345', '12345', '12345'),
(10, '3969', 10, 1, '12345', '12345', '12345', '12345', '12345'),
(11, '1349', 10, 4, '', '', '', '', ''),
(12, '7114', 10, 1, '', '', '', '', '');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `tbl_post`
--

CREATE TABLE `tbl_post` (
  `id_post` int(11) NOT NULL,
  `title_post` varchar(255) NOT NULL,
  `content_post` text NOT NULL,
  `image_post` varchar(200) NOT NULL,
  `id_category_post` int(11) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Đang đổ dữ liệu cho bảng `tbl_post`
--

INSERT INTO `tbl_post` (`id_post`, `title_post`, `content_post`, `image_post`, `id_category_post`) VALUES
(2, 'bài viết số 1', '<p>Mo bluetooth</p>', '90129769_635074860618406_3931805494473129984_n1690777667.jpg', 1),
(3, 'bài viết số 2', '<p>hieu pro</p>', '90129769_635074860618406_3931805494473129984_n1690777709.jpg', 1);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `tbl_product`
--

CREATE TABLE `tbl_product` (
  `id_product` int(11) UNSIGNED NOT NULL,
  `title_product` varchar(200) DEFAULT NULL,
  `price_product` varchar(100) DEFAULT NULL,
  `desc_product` text NOT NULL,
  `quanlity_product` int(11) DEFAULT NULL,
  `image_product` varchar(100) DEFAULT NULL,
  `id_category_product` int(11) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Đang đổ dữ liệu cho bảng `tbl_product`
--

INSERT INTO `tbl_product` (`id_product`, `title_product`, `price_product`, `desc_product`, `quanlity_product`, `image_product`, `id_category_product`) VALUES
(4, 'Điện thoại iPhone 14 Pro Max 128GB', '14000000', 'iPhone 14 Pro Max một siêu phẩm trong giới smartphone được nhà Táo tung ra thị trường vào tháng 09/2022. Máy trang bị con chip Apple A16 Bionic vô cùng mạnh mẽ, đi kèm theo đó là thiết kế hình màn hình mới, hứa hẹn mang lại những trải nghiệm đầy mới mẻ cho người dùng iPhone.', 5, 'iphone-14.jpg', 1),
(5, 'Laptop Apple MacBook Air 13 ', '16700000', 'Laptop Apple MacBook Air M1 2020 thuộc dòng laptop cao cấp sang trọng có cấu hình mạnh mẽ, chinh phục được các tính năng văn phòng lẫn đồ hoạ mà bạn mong muốn, thời lượng pin dài, thiết kế mỏng nhẹ sẽ đáp ứng tốt các nhu cầu làm việc của bạn.', 10, 'laptop-dell1690183325.jpg', 46),
(6, 'Samsung Galaxy Tab A8 (2022)', '9000000', 'Máy tính bảng Samsung Galaxy Tab A8 (2022) có kích thước màn hình 10.5 inch, tỉ lệ 16:10 cho không gian hiển thị rộng hơn, rất lý tưởng cho người dùng trải nghiệm xem phim, live stream, chơi game. \r\n\r\nMàn hình TFT LCD có độ phân giải 1200 x 1920 Pixels tái hiện hình ảnh khá chi tiết, màu sắc trung thực, phong phú. Tận hưởng âm thanh sống động đến từ hệ thống 4 loa hỗ trợ công nghệ Dolby Atmos cung cấp âm thanh vòm bùng nổ, nghe nhạc rất đã tai. ', 20, 'ipad-pro1690183387.jpg', 47),
(8, 'Tai nghe Bluetooth True Wireless', '400000', 'Tai nghe Bluetooth True Wireless AVA+ FreeGo W26 với màu sắc đẹp mắt, diện mạo sang trọng, âm thanh sôi động, đáp ứng mọi nhu cầu từ giải trí đến làm việc, mang đến cho người dùng những trải nghiệm tốt nhất.\r\n', 20, 'tainghe16901834221690278315.jpg', 48),
(9, 'SamSung Galaxy A54', '15000000', '<p>SamSung Galaxy A54</p>', 10, 'samsung541690778578.jpg', 1),
(10, 'Samsung A33', '11999000', '<p>Samsung A33&nbsp;</p>', 10, 'SamsungA331690778758.jpg', 1),
(11, 'Laptop Dell USA', '24500000', '<p>Laptop Dell USA</p>', 15, 'laptop21690778930.jpg', 46),
(12, 'HP LapTop', '17365000', '<p>HP LapTop Go I5</p>', 15, 'laptop31690779144.jpg', 46),
(13, 'Daureu bluetooth', '350000', '<p>Daureu bluetooth</p>', 50, 'chuot1690779392.jpg', 48),
(14, 'asdasd', 'asdas', '<p>asda</p>', 0, 'iphone-141690805515.jpg', 48);

--
-- Chỉ mục cho các bảng đã đổ
--

--
-- Chỉ mục cho bảng `tbl_admin`
--
ALTER TABLE `tbl_admin`
  ADD PRIMARY KEY (`admin_id`);

--
-- Chỉ mục cho bảng `tbl_category_post`
--
ALTER TABLE `tbl_category_post`
  ADD PRIMARY KEY (`id_category_post`);

--
-- Chỉ mục cho bảng `tbl_category_product`
--
ALTER TABLE `tbl_category_product`
  ADD PRIMARY KEY (`id_category_product`);

--
-- Chỉ mục cho bảng `tbl_customers`
--
ALTER TABLE `tbl_customers`
  ADD PRIMARY KEY (`customers_id`);

--
-- Chỉ mục cho bảng `tbl_order`
--
ALTER TABLE `tbl_order`
  ADD PRIMARY KEY (`order_id`);

--
-- Chỉ mục cho bảng `tbl_order_details`
--
ALTER TABLE `tbl_order_details`
  ADD PRIMARY KEY (`order_details_id`),
  ADD KEY `product_id` (`product_id`);

--
-- Chỉ mục cho bảng `tbl_post`
--
ALTER TABLE `tbl_post`
  ADD PRIMARY KEY (`id_post`),
  ADD KEY `image_post` (`image_post`),
  ADD KEY `image_post_2` (`image_post`),
  ADD KEY `id_category_post` (`id_category_post`),
  ADD KEY `image_post_3` (`image_post`);

--
-- Chỉ mục cho bảng `tbl_product`
--
ALTER TABLE `tbl_product`
  ADD PRIMARY KEY (`id_product`),
  ADD KEY `id_category_product` (`id_category_product`);

--
-- AUTO_INCREMENT cho các bảng đã đổ
--

--
-- AUTO_INCREMENT cho bảng `tbl_admin`
--
ALTER TABLE `tbl_admin`
  MODIFY `admin_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT cho bảng `tbl_category_post`
--
ALTER TABLE `tbl_category_post`
  MODIFY `id_category_post` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT cho bảng `tbl_category_product`
--
ALTER TABLE `tbl_category_product`
  MODIFY `id_category_product` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=49;

--
-- AUTO_INCREMENT cho bảng `tbl_customers`
--
ALTER TABLE `tbl_customers`
  MODIFY `customers_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT cho bảng `tbl_order`
--
ALTER TABLE `tbl_order`
  MODIFY `order_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT cho bảng `tbl_order_details`
--
ALTER TABLE `tbl_order_details`
  MODIFY `order_details_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT cho bảng `tbl_post`
--
ALTER TABLE `tbl_post`
  MODIFY `id_post` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT cho bảng `tbl_product`
--
ALTER TABLE `tbl_product`
  MODIFY `id_product` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- Các ràng buộc cho các bảng đã đổ
--

--
-- Các ràng buộc cho bảng `tbl_order_details`
--
ALTER TABLE `tbl_order_details`
  ADD CONSTRAINT `tbl_order_details_ibfk_1` FOREIGN KEY (`product_id`) REFERENCES `tbl_product` (`id_product`);

--
-- Các ràng buộc cho bảng `tbl_post`
--
ALTER TABLE `tbl_post`
  ADD CONSTRAINT `tbl_post_ibfk_1` FOREIGN KEY (`id_category_post`) REFERENCES `tbl_category_post` (`id_category_post`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Các ràng buộc cho bảng `tbl_product`
--
ALTER TABLE `tbl_product`
  ADD CONSTRAINT `tbl_product_ibfk_1` FOREIGN KEY (`id_category_product`) REFERENCES `tbl_category_product` (`id_category_product`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
