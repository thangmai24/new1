-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1
-- Thời gian đã tạo: Th10 02, 2024 lúc 11:00 AM
-- Phiên bản máy phục vụ: 10.4.32-MariaDB
-- Phiên bản PHP: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Cơ sở dữ liệu: `tuan7`
--
CREATE DATABASE IF NOT EXISTS `tuan7` DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci;
USE `tuan7`;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `category`
--

CREATE TABLE `category` (
  `id` int(12) NOT NULL,
  `name` varchar(35) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `category`
--

INSERT INTO `category` (`id`, `name`) VALUES
(1, 'samsung'),
(2, 'sony'),
(3, 'oppo');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `product`
--

CREATE TABLE `product` (
  `id` int(12) NOT NULL,
  `name` varchar(35) NOT NULL,
  `price` int(12) NOT NULL,
  `desc_product` varchar(750) NOT NULL,
  `image` varchar(25) NOT NULL,
  `category_id` int(12) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `product`
--

INSERT INTO `product` (`id`, `name`, `price`, `desc_product`, `image`, `category_id`) VALUES
(1, 'Samsung Galaxy S24 FE', 16990000, 'Samsung Galaxy S24 FE là bước nhảy vọt với hiệu suất và trải nghiệm người dùng được nâng cấp toàn diện. Với vi xử lý Exynos 2400e, không chỉ mạnh mẽ cho mọi tác vụ mà còn xuất sắc trong việc tối ưu AI. Bên cạnh đó, màn hình mở rộng và camera chất lượ', 'samsungs24fe.jpg', 1),
(2, 'Samsung Galaxy A06', 31900000, 'Samsung Galaxy A06 4GB/64GB mang đến sự kết hợp hoàn hảo giữa thiết kế tinh tế, hiệu năng mạnh mẽ và bảo mật cao cấp. Với màn hình 6.7 inch, camera 50 MP, pin bền bỉ cùng nhiều cải tiến vượt trội, Galaxy A06 là lựa chọn lý tưởng cho mọi nhu cầu sử dụ', 'samsunga06.jpg', 1),
(3, 'Samsung Galaxy M55 5G', 10190000, 'Trong thời đại công nghệ số, sở hữu một chiếc điện thoại thông minh không chỉ là phương tiện liên lạc mà còn hỗ trợ công việc, giải trí và lưu giữ khoảnh khắc. Samsung Galaxy M55 5G, với thiết kế tinh tế và hiệu năng mạnh mẽ, là lựa chọn hoàn hảo cho những ai tìm kiếm thiết bị đa năng, hiện đại và đầy đủ tính năng.', 'samsungm55.jpg', 1),
(4, 'Sony Xperia 5 III (5 Mark 3) 5G', 7950000, 'Siêu phẩm Sony Xperia 5 III ra mắt vào tháng 4 năm 2021, máy sở hữu cấu hình cao cấp với chip Qualcomm siêu mạnh, màn hình OLED siêu đẹp, pin trâu, camera tuyệt đỉnh và nhiều tính năng hấp dẫn khác. Với những điểm nổi bật đó, khiến cho máy trở thành chiếc máy nhỏ gọn mạnh mẽ nhất thế giới', 'sonyxperia5.jpg', 2),
(5, 'Sony Xperia 10 VI (10 Mark 6) 5G', 10150000, 'Sản phẩm Sony Xperia 10 VI 5G sở hữu màn hình OLED chất lượng cao, khả năng hiển thị 1 tỷ màu rất ấn tượng. Máy có hiệu năng mạnh mẽ với chip Snapdragon 6 Gen 1 tích hợp 5G tốc độ cao.', 'sonyxperia10.jpg', 2);

--
-- Chỉ mục cho các bảng đã đổ
--

--
-- Chỉ mục cho bảng `category`
--
ALTER TABLE `category`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `product`
--
ALTER TABLE `product`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT cho các bảng đã đổ
--

--
-- AUTO_INCREMENT cho bảng `category`
--
ALTER TABLE `category`
  MODIFY `id` int(12) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT cho bảng `product`
--
ALTER TABLE `product`
  MODIFY `id` int(12) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
