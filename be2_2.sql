-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1
-- Thời gian đã tạo: Th10 24, 2021 lúc 05:16 PM
-- Phiên bản máy phục vụ: 10.4.21-MariaDB
-- Phiên bản PHP: 8.0.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Cơ sở dữ liệu: `be2_2`
--

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `banner`
--

CREATE TABLE `banner` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `slide` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `slide1` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `ads` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `banner`
--

INSERT INTO `banner` (`id`, `slide`, `slide1`, `ads`, `created_at`, `updated_at`) VALUES
(3, 'backgroud.jpg', 'ad62f1055677adbd3a17f1a4acffd4dc.jpg', NULL, '2021-11-15 19:51:16', '2021-11-15 19:51:16'),
(29, NULL, '636638758716655000_C1.png', NULL, '2021-11-18 08:01:58', '2021-11-18 08:01:58'),
(30, NULL, 'banner.jpg', NULL, '2021-11-18 08:17:53', '2021-11-18 08:17:53');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `categories`
--

CREATE TABLE `categories` (
  `id` int(11) NOT NULL,
  `category_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `categories`
--

INSERT INTO `categories` (`id`, `category_name`) VALUES
(1, 'Máy tính bảng'),
(2, 'Điện thoại'),
(3, 'Apple');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `category_product`
--

CREATE TABLE `category_product` (
  `product_id` int(11) NOT NULL,
  `category_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `category_product`
--

INSERT INTO `category_product` (`product_id`, `category_id`) VALUES
(1, 1),
(1, 3),
(2, 1),
(3, 1),
(3, 3),
(4, 2),
(4, 3),
(5, 2),
(5, 3),
(6, 2),
(7, 2),
(8, 1),
(9, 1),
(9, 2),
(9, 3);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `comments`
--

CREATE TABLE `comments` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `comment_content` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `product_id` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `comments`
--

INSERT INTO `comments` (`id`, `created_at`, `updated_at`, `comment_content`, `product_id`) VALUES
(1, '2021-09-25 08:30:10', '2021-09-25 08:30:10', 'láo', 1),
(2, '2021-09-25 08:45:08', '2021-09-25 08:45:08', 'Ngon', 5);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2019_11_21_062255_create_comments_table', 1);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `password_resets`
--

INSERT INTO `password_resets` (`email`, `token`, `created_at`) VALUES
('truongviethoang.tdc2018@gmail.com', '$2y$10$7Zq0Rj44pcwSJOt3SuIMOOl2N9KN2KMirkkltJ.C9polGjl4zDZIK', '2021-10-31 07:19:33');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `products`
--

CREATE TABLE `products` (
  `id` int(11) NOT NULL,
  `product_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `product_price` decimal(10,2) NOT NULL,
  `product_description` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `product_image` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `products`
--

INSERT INTO `products` (`id`, `product_name`, `product_price`, `product_description`, `product_image`) VALUES
(1, 'Máy tính bảng iPad WiFi 32GB New 2018 - Hàng Chính Hãng', '6980000.00', 'Thần thái của tablet cao cấp bên mức giá vừa phải\r\niPad WiFi 32GB New 2018 vẫn giữ phong cách thiết kế quen thuộc như phiên bản tiền nhiệm 2017 với chất liệu nhôm nguyên khối cao cấp, các cạnh được bo cong mềm mại, tạo cảm giác cầm nắm thoải mái và chắc tay. Bên cạnh đó các chi tiết đều được gia công một cách tỉ mỉ và tinh tế, bạn sẽ phải \"Wow\" lên vì sức hút mãnh liệt từ vẻ đẹp bên ngoài của nó.', 'iPadWiFi32GB.jpg'),
(2, 'Máy đọc sách Kindle PaperWhite 2018 gen 4 (10th) - Bản 8GB 2019 - Hàng chính hãng', '2887000.00', 'Thiết kế mỏng nhẹ\r\nMáy đọc sách Kindle PaperWhite 2018 gen 4 (10th) - Bản 8 GB - Hàng chính hãng được thiết kế cực kỳ mỏng, nhẹ và màn hình sáng hơn. Trọng lượng của máy là 182 gram và dày 8,18 mm, so với phiên bản trước là 200 gram và 9 mm. Màn hình của Paperwhite vẫn là 6 inch và 300 ppi, được Vergeđánh giá xuất sắc và không có gì để phàn nàn.', 'KindlePaperWhite.jpg'),
(3, 'Máy tính bảng iPad Mini 5 Wi-Fi 64GB - Hàng Chính Hãng', '9350000.00', 'Thiết kế mỏng, gọn nhẹ\r\niPad Mini 5 Wi-Fi 64GB được thiết kế tinh tế, sang trọng với vỏ nhôm tạo cảm giác cầm chắc tay. Máy tính bảng có kích thước siêu mỏng với độ dày chỉ 6.1mm và trọng lượng siêu nhẹ khoảng 300g giúp bạn dễ dàng bỏ vào túi xách để mang theo mọi lúc mọi nơi, đáp ứng đủ các nhu cầu cho cuộc sống không ngừng chuyển động của bạn.', 'ipadmini.jpg'),
(4, 'Điện Thoại iPhone 7 Plus 32GB - Hàng Chính Hãng', '11990000.00', 'Thiết kế kim loại nguyên khối sang trọng\r\nĐiện Thoại iPhone 7 Plus 32GB - Hàng Chính Hãng FPT với kích thước 158.2 x 77.9 x 7.3 mm mỏng nhẹ và thiết kế tương tự như bộ đôi iPhone 6s/6s Plus, tuy nhiên phần dải nhựa bắt sóng không cắt ngang mặt lưng như phiên bản cũ mà được chuyển sang phần cạnh trên của sản phẩm. Phím Home vật lý trên điện thoại cũng được thay thế bằng phím cảm ứng nhờ vào sự kết hợp Taptic Engine mới và liên kết với 3D Touch tiện lợi và đẹp mắt.', 'iphone7plus.jpg'),
(5, 'Điện Thoại iPhone X 64GB VN/A - Hàng Chính Hãng', '20190000.00', 'Thiết kế lạ mắt không nút Home cứng\r\nĐiện Thoại iPhone X 64GB là chiếc điện thoại hoàn toàn mới của Apple vừa mới ra mắt tuần vừa qua. Trên cơ bản, iPhone X vẫn có những tính năng như những dòng iPhone khác nhưng thiết kế bên ngoài lạ mắt hơn, không trang bị nút Home cứng, viền kim loại sang trọng và đặc biệt là cụm camera sau được trang bị theo chiều dọc tạo điểm nhấn cho chiếc điện thoại.', 'iphonex.jpg'),
(6, 'Điện Thoại Samsung Galaxy A70 (128GB/6GB) - Hàng Chính Hãng', '7189000.00', 'Điện Thoại Samsung Galaxy A70 (128GB/6GB) - Hàng Chính Hãng (Đã Kích Hoạt) Bảo Hành 12 Tháng sản phẩm vẫn được làm bằng chất liệu nhựa giả thủy tinh nhưng là nhựa cao cấp với tên gọi 3D Graffitistic, mang đến sự cứng cáp và chắc chắn khi cầm nắm.\r\n\r\nBên cạnh đó, màu sắc trên lưng máy được trang bị thêm hiệu ứng lấp lánh nên khi nhìn theo góc nghiêng sẽ rất đẹp mắt. Đáng tiếc là A70 vẫn bị bám mồ hôi và dấu vân tay. Ngoài ra, viền bezel của máy cũng được làm rất mỏng, so với các máy thuộc dòng Galaxy A thì A70 là mỏng nhất.', 'SamsungGalaxyA70.jpg'),
(7, 'Điện thoại Samsung Galaxy M10 Ram 2GB 16GB - Hàng chính hãng', '2580000.00', 'Màn hình: PLS TFT LCD, 6.2\", HD+ • Hệ điều hành: Android 8.1 (Oreo) • Camera sau: Chính 13 MP & Phụ 5 MP • Camera trước: 5 MP • CPU: Exynos 7870 8 nhân 64-bit • RAM: 2 GB • Bộ nhớ trong: 16 GB • Thẻ nhớ: MicroSD • Thẻ SIM: 2 SIM Nano (SIM 2 chung khe thẻ nhớ) • Dung lượng pin: 3400 mAh', 'SamsungGalaxyM10.png'),
(8, 'll', '44.00', 'ff', 'ypxgS0BGBeyAhRG1tKCUPct9Ac0e6cmFNMSdcC06.jpeg'),
(9, 'jjjjjjjjj', '88776.00', 'mmmm', 'w9JhYFeAqQnYSpdrj4o4Ne8NZMRnVCRtpSw3tGkA.jpeg');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `phonenumber` int(50) DEFAULT NULL,
  `address` varchar(200) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `role` int(11) NOT NULL DEFAULT 0
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `phonenumber`, `address`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`, `role`) VALUES
(9, 'lm ba121', 'admin@gmail.com', 337208815, 'A16 đường số 18, P. Hiệp Bình Chánh, Q. Thủ Đức', NULL, '$2y$10$vReT32rQTByLE9y5a9TfJ.WU5xeX6t2oEmb8OUkZIWEnkq7TdniWu', NULL, '2021-10-07 12:18:20', '2021-11-15 18:47:29', 1),
(10, 'lm ba', 'truongviethoang.tdc2018@gmail.com', NULL, NULL, NULL, '$2y$10$eUZLqeKxiilt6NflFxR0k.e/5yLLUyZZKKUQnsrWETgrc7yHnFJFe', NULL, '2021-10-31 09:20:15', '2021-10-31 09:23:06', 1),
(11, 'lm', 'admin123@gmail.com', NULL, NULL, NULL, '$2y$10$YUX0VBxtB3wLCz9jOUKdyey1QUFItyoW6dpoX6ktqgKRmIPn6XvtK', NULL, '2021-11-11 23:32:13', '2021-11-11 23:32:13', 0);

--
-- Chỉ mục cho các bảng đã đổ
--

--
-- Chỉ mục cho bảng `banner`
--
ALTER TABLE `banner`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `category_product`
--
ALTER TABLE `category_product`
  ADD PRIMARY KEY (`product_id`,`category_id`);

--
-- Chỉ mục cho bảng `comments`
--
ALTER TABLE `comments`
  ADD PRIMARY KEY (`id`),
  ADD KEY `comments_product_id_foreign` (`product_id`);

--
-- Chỉ mục cho bảng `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Chỉ mục cho bảng `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- AUTO_INCREMENT cho các bảng đã đổ
--

--
-- AUTO_INCREMENT cho bảng `banner`
--
ALTER TABLE `banner`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=31;

--
-- AUTO_INCREMENT cho bảng `categories`
--
ALTER TABLE `categories`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT cho bảng `comments`
--
ALTER TABLE `comments`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT cho bảng `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT cho bảng `products`
--
ALTER TABLE `products`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT cho bảng `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
