-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 03, 2022 at 03:22 PM
-- Server version: 10.4.19-MariaDB
-- PHP Version: 7.4.20

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `webquan2`
--

-- --------------------------------------------------------

--
-- Table structure for table `comments`
--

CREATE TABLE `comments` (
  `commentID` int(11) NOT NULL,
  `productID` int(11) NOT NULL,
  `userID` int(11) NOT NULL,
  `content` varchar(255) NOT NULL,
  `dateCreated` date NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_category_product`
--

CREATE TABLE `tbl_category_product` (
  `category_id` int(10) UNSIGNED NOT NULL,
  `category_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `category_desc` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `category_status` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `tbl_category_product`
--

INSERT INTO `tbl_category_product` (`category_id`, `category_name`, `category_desc`, `category_status`, `created_at`, `updated_at`) VALUES
(0, 'Món ăn nhẹ', 'ccldcb', 4, '2022-03-31 13:29:02', '2022-03-31 13:29:02'),
(1, 'Món Việt', 'Reprehenderit qui a dolor ratione omnis sunt voluptas laborum vero cupiditate ut vitae vitae', 1, NULL, NULL),
(2, 'Món Thái', 'Eos sit quis distinctio iusto consequatur fugiat temporibus modi earum dignissimos est tempora illum iusto et optio aut possimus.', 2, NULL, NULL),
(3, 'Món Trung', 'Hic sit asperiores unde est autem perspiciatis non iure at voluptas sint ipsum illum deleniti ratione est esse at.', 3, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_images`
--

CREATE TABLE `tbl_images` (
  `id` int(11) NOT NULL,
  `image_url` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_images`
--

INSERT INTO `tbl_images` (`id`, `image_url`) VALUES
(1, 'https://beptueu.vn/hinhanh/tintuc/top-15-hinh-anh-mon-an-ngon-viet-nam-khien-ban-khong-the-roi-mat-1.jpg'),
(2, 'https://anh.24h.com.vn/upload/3-2016/images/2016-09-06/1473149955-thuc-an-nhanh.jpg'),
(3, 'https://cdn.tgdd.vn/Files/2017/01/10/936043/6-cach-ham-nong-thuc-an-ngon-nhu-moi-nau-2.png'),
(4, 'https://sohanews.sohacdn.com/thumb_w/660/160588918557773824/2021/12/12/photo1639304544019-1639304544151580619120.jpeg\r\n'),
(5, 'https://thucthan.com/media/2018/07/beefsteak/cach-lam-beefsteak.jpg'),
(6, 'https://www.vacationtravel.com.vn/CustomFolder/images/amthuc/Tom-Yum-Goong2.jpg'),
(7, 'https://media.cooky.vn/recipe/g3/21397/s/recipe21397-prepare-step7-636402104150346923.jpg'),
(8, 'https://dulichvietnam.com.vn/du-lich-trung-quoc/wp-content/uploads/2020/03/mon-an-trung-quoc-noi-tieng-mien-chua-trung-khanh-1.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_order`
--

CREATE TABLE `tbl_order` (
  `order_id` int(10) NOT NULL,
  `user_id` int(11) NOT NULL DEFAULT 0,
  `shipping_id` int(11) DEFAULT NULL,
  `order_total` double(8,2) NOT NULL,
  `NguoiNhan` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `SDT` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL,
  `DiaChi` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `order_status` int(11) NOT NULL DEFAULT 1,
  `created_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `tbl_order`
--

INSERT INTO `tbl_order` (`order_id`, `user_id`, `shipping_id`, `order_total`, `NguoiNhan`, `SDT`, `DiaChi`, `order_status`, `created_at`) VALUES
(26, 23, NULL, 90000.00, 'sdasd', '00000000', 'dasadas', 1, '2022-03-30 10:53:13'),
(27, 23, NULL, 220000.00, 'hung', '1655646655', 'gầm cầu vượt quốc oai', 3, '2022-03-31 21:45:15'),
(28, 24, NULL, 150000.00, '1', '0365265059', '2', 1, '2022-03-31 21:48:16');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_order_details`
--

CREATE TABLE `tbl_order_details` (
  `order_id` int(11) NOT NULL,
  `product_id` int(11) NOT NULL,
  `product_num` int(255) NOT NULL,
  `product_price` double(8,2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `tbl_order_details`
--

INSERT INTO `tbl_order_details` (`order_id`, `product_id`, `product_num`, `product_price`) VALUES
(27, 20, 2, 100000.00),
(27, 16, 1, 20000.00),
(28, 23, 5, 30000.00);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_payment`
--

CREATE TABLE `tbl_payment` (
  `payment_id` int(10) UNSIGNED NOT NULL,
  `payment_method` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `payment_status` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_product`
--

CREATE TABLE `tbl_product` (
  `product_id` int(10) NOT NULL,
  `category_id` int(11) NOT NULL,
  `product_name` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `product_desc` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `product_content` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `product_price` double NOT NULL,
  `product_image` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `product_status` int(11) NOT NULL DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `tbl_product`
--

INSERT INTO `tbl_product` (`product_id`, `category_id`, `product_name`, `product_desc`, `product_content`, `product_price`, `product_image`, `product_status`) VALUES
(16, 1, 'Mì tôm', 'mì tôm chua cay', 'chua chua cay cay', 20000, 'https://vinmec-prod.s3.amazonaws.com/images/20201228_032224_820684_mitoms.max-800x800.jpg', 1),
(17, 1, 'Bánh mì pate trứng', ' Là quốc hồn ẩm thực Việt Nam', 'đang giảm giá 51%', 9900, 'https://cdn.jamja.vn/blog/wp-content/uploads/2017/09/cach-lam-banh-mi-pate-trung-8.jpg', 1),
(18, 2, 'Gà Sốt Cay', ' Làm nóng  lòng trái tim chúng ta mỗi khi đông về', 'mua 2 tặng 1', 50000, 'https://songkhoe.medplus.vn/wp-content/uploads/2020/04/cach-lam-ga-sot-cay-ngot-han-quoc.png', 1),
(19, 0, 'pan cake', 'mềm mại và ngọt ngào', 'mua 3 giảm 25% giá sản phẩm', 700000, 'https://cdn.tgdd.vn/2021/04/CookProductThumb/2-620x620-46.jpg', 1),
(20, 1, 'Cơm  Gà', 'Khi mua 3 tặng thêm phần gà giá trị 20000đ\r\n', 'Khi mua 3 tặng thêm phần gà\r\nBạn sẽ càng thích thú hơn bởi hương vị mới mẻ, đầy hấp dẫn của nó. Hạt cơm được chiên vàng, tơi xốp, mềm mịn, không quá khô, không quá béo nên khi ăn không bị ngán. Thịt gà được tuyển chọn từ những phần ngon nhất của con gà như đùi, má đùi, góc tư được chiên khéo léo sao cho lớp vỏ ngoài giòn tan, thịt bên trong chắc, ngọt, vẫn còn ứ nước. Ăn kèm với cơm gà là dưa leo, đồ chua, nước tương, tương ớt. Tất cả cùng hòa quyện, tạo nên một hương vị khó cưỡng.', 100000, 'https://i-giadinh.vnecdn.net/2021/01/29/com2-1611892464-7028-1611892596.jpg', 1),
(21, 2, 'Lẩu Thái', 'Đặc trưng của Lẩu Thái không thể thiếu vị cay của ớt, vị thơm của gừng, sả cùng lá chanh, kết hợp với vị ngọt của nước hầm xương, những nguyên liệu tươi sống của hải sản như cua, mực, tôm, sò, cá,… và đặc biệt không thể thiếu những món rau tươi ăn kèm như nấm, rau muống, rau cải,…Nước lẩu Thái là sự kết hợp của nhiều hương vị nồng nàn và đậm đà: vị chua đặc trưng của lẩu, vị ngọt từ nước hầm và vị cay tinh tế …', 'Đặc trưng của Lẩu Thái không thể thiếu vị cay của ớt, vị thơm của gừng, sả cùng lá chanh, kết hợp với vị ngọt của nước hầm xương, những nguyên liệu tươi sống của hải sản như cua, mực, tôm, sò, cá,… và đặc biệt không thể thiếu những món rau tươi ăn kèm như nấm, rau muống, rau cải,…Nước lẩu Thái là sự kết hợp của nhiều hương vị nồng nàn và đậm đà: vị chua đặc trưng của lẩu, vị ngọt từ nước hầm và vị cay tinh tế …', 2564620, 'https://cdn.nguyenkimmall.com/images/companies/_1/tin-tuc/kinh-nghiem-meo-hay/n%E1%BA%A5u%20%C4%83n/nau-lau-thai-chuan-vi-ngon-nhu-the-nao.jpg', 1),
(22, 0, ' Gà Kung Pao Tứ Xuyên', 'Ra đời từ tỉnh Tứ Xuyên, gà Kung Pao nổi tiếng với vị cay nồng và thơm béo đặc trưng, do được nấu cùng ớt và đậu phộng. Món ăn này được người dân Trung Quốc chế biến rất công phu. Các nguyên liệu cần có món ăn này gồm có: thịt ức gà; dầu chiên; Đậu phộng rang; ớt đỏ khô; tỏi băm nhỏ; gừng tươi băm nhỏ; hành lá thái nhỏ; nguyên liệu cho gia vị ướp: nước tương, rượu gạo, bột bắp; nguyên liệu cho phần nước sốt: dấm đen Trung Quốc; nước tương; dầu mè; đường trắng; tương đen; bột bắp.', 'Ra đời từ tỉnh Tứ Xuyên, gà Kung Pao nổi tiếng với vị cay nồng và thơm béo đặc trưng, do được nấu cùng ớt và đậu phộng. Món ăn này được người dân Trung Quốc chế biến rất công phu. Các nguyên liệu cần có món ăn này gồm có: thịt ức gà; dầu chiên; Đậu phộng rang; ớt đỏ khô; tỏi băm nhỏ; gừng tươi băm nhỏ; hành lá thái nhỏ; nguyên liệu cho gia vị ướp: nước tương, rượu gạo, bột bắp; nguyên liệu cho phần nước sốt: dấm đen Trung Quốc; nước tương; dầu mè; đường trắng; tương đen; bột bắp.', 5000000, 'https://www.tourtrungquoc.net.vn/images/am-thuc/Ga-Kung-Pao-2.jpg', 1),
(23, 0, 'Tiết canh', 'Tiết canh là món ăn tươi sống sử dụng nguyên liệu là tiết động vật tươi được pha với chút nước mắm hoặc nước muối nhạt hãm cho khỏi đông trước khi trộn với những phần thịt, sụn động vật băm nhỏ để làm đông tiết.', 'Tiết canh là món ăn tươi sống sử dụng nguyên liệu là tiết động vật tươi được pha với chút nước mắm hoặc nước muối nhạt hãm cho khỏi đông trước khi trộn với những phần thịt, sụn động vật băm nhỏ để làm đông tiết.', 30000, 'https://cdn.tgdd.vn/2021/10/CookDish/cach-lam-tiet-canh-de-voi-vi-ngon-hap-dan-don-gian-ngay-tai-avt-1200x676.jpg', 1),
(24, 0, 'Gỏi Cuốn', ' Gỏi cuốn là một món ăn ngon, nổi tiếng của nước ta. Nguyên liệu chế biến món này khá nhiều nhưng cũng đều là những nguyên liệu đơn giản. Gồm thịt băm, trứng gà hoặc trứng vịt, hành tây, hành lá, cà rốt, su hào, giá đỗ, rau mùi, rau thơm, mộc nhĩ, mì hoặc miến,...và một số loại gia vị như mì chính, bột canh, hạt tiêu, nước mắm,...  Và một thứ không thể thiếu để cuốn ngoài đó chính là bánh đa nem.', ' Gỏi cuốn là một món ăn ngon, nổi tiếng của nước ta. Nguyên liệu chế biến món này khá nhiều nhưng cũng đều là những nguyên liệu đơn giản. Gồm thịt băm, trứng gà hoặc trứng vịt, hành tây, hành lá, cà rốt, su hào, giá đỗ, rau mùi, rau thơm, mộc nhĩ, mì hoặc miến,...và một số loại gia vị như mì chính, bột canh, hạt tiêu, nước mắm,...  Và một thứ không thể thiếu để cuốn ngoài đó chính là bánh đa nem.', 50000, 'https://cdn.cet.edu.vn/wp-content/uploads/2018/11/goi-cuon-tom-thit.jpg', 1),
(25, 1, 'Phở Gà', 'Phở gà có hương vị riêng ngon không kém phở bò. Quay lại món phở gà vừa nói. Nước dùng bằng xương gà tất nhiên là đứng đầu bảng trong tất cả các loại nước dùng. Nó vừa ngọt, vừa thanh lại điểm những ánh vàng óng ánh của mỡ gà làm cho bát phở thêm ngon mắt.', 'Phở gà có hương vị riêng ngon không kém phở bò. Quay lại món phở gà vừa nói. Nước dùng bằng xương gà tất nhiên là đứng đầu bảng trong tất cả các loại nước dùng. Nó vừa ngọt, vừa thanh lại điểm những ánh vàng óng ánh của mỡ gà làm cho bát phở thêm ngon mắt.', 100000, 'https://trivietphat.net/wp-content/uploads/2021/08/pho-ga1-1.jpg', 1),
(26, 1, 'Bún Bò', 'Bún bò Huế là một đặc sản của ẩm thực Huế, tùy là bún bò nhưng ngoài thịt bò còn có thịt heo. Hương vị đặc biệt của món ăn này chủ yếu là ở vị cay nồng, mùi sả đặc trưng của nước lèo. Vốn là một hương vị Huế không lẫn vào đâu được và chính điều đó khiến người ăn cứ nhớ mãi về món ăn này.', 'Bún bò Huế là một đặc sản của ẩm thực Huế, tùy là bún bò nhưng ngoài thịt bò còn có thịt heo. Hương vị đặc biệt của món ăn này chủ yếu là ở vị cay nồng, mùi sả đặc trưng của nước lèo. Vốn là một hương vị Huế không lẫn vào đâu được và chính điều đó khiến người ăn cứ nhớ mãi về món ăn này.', 100000, 'https://saigonangi.com/wp-content/uploads/2020/10/5-1-15.png', 1);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_role`
--

CREATE TABLE `tbl_role` (
  `role_id` int(10) NOT NULL,
  `role_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `role_detail` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `tbl_role`
--

INSERT INTO `tbl_role` (`role_id`, `role_name`, `role_detail`) VALUES
(1, 'admin', 'admin'),
(2, 'user', 'user');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_shipping`
--

CREATE TABLE `tbl_shipping` (
  `shipping_id` int(10) UNSIGNED NOT NULL,
  `shipping_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `shipping_address` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `shipping_phone` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `shipping_payment` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `shipping_email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `shipping_note` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_subimageproduct`
--

CREATE TABLE `tbl_subimageproduct` (
  `idImg` int(11) NOT NULL,
  `idProduct` int(11) NOT NULL,
  `URL` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_subimageproduct`
--

INSERT INTO `tbl_subimageproduct` (`idImg`, `idProduct`, `URL`) VALUES
(1, 16, 'https://cdn.tgdd.vn/Files/2017/02/28/955496/an-mi-tom-co-tot-khong-1_730x471.jpg'),
(2, 16, 'https://s.meta.com.vn/img/thumb.ashx/Data/Image/2020/03/30/thung-30-goi-mi-tom-chua-cay-hao-hao-t2.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_user`
--

CREATE TABLE `tbl_user` (
  `user_id` int(11) NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `username` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `role_id` int(10) DEFAULT 2,
  `user_sex` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `user_tel` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `user_address` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `user_email` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `tbl_user`
--

INSERT INTO `tbl_user` (`user_id`, `name`, `username`, `user_verified_at`, `password`, `role_id`, `user_sex`, `user_tel`, `user_address`, `user_email`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'admin', 'admin', NULL, 'admin', 1, 'Nam', '0192929292', 'admin', 'admin@email.com', NULL, NULL, NULL),
(2, 'user', 'user', NULL, 'user', 2, 'Nữ', '0192929292', 'a', 'user@email.com', NULL, NULL, NULL),
(23, 'hung', 'user1', NULL, '123456', 2, 'Nam', '1655646655', 'gầm cầu vượt quốc oai', 'hung@gmail.com', NULL, NULL, NULL),
(24, '', 'user2', NULL, '123456', 2, NULL, NULL, NULL, 'hung@gmail.com', NULL, NULL, NULL);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `comments`
--
ALTER TABLE `comments`
  ADD PRIMARY KEY (`commentID`),
  ADD KEY `productID` (`productID`),
  ADD KEY `userID` (`userID`);

--
-- Indexes for table `tbl_category_product`
--
ALTER TABLE `tbl_category_product`
  ADD PRIMARY KEY (`category_id`);

--
-- Indexes for table `tbl_images`
--
ALTER TABLE `tbl_images`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_order`
--
ALTER TABLE `tbl_order`
  ADD PRIMARY KEY (`order_id`);

--
-- Indexes for table `tbl_order_details`
--
ALTER TABLE `tbl_order_details`
  ADD KEY `product_id` (`product_id`),
  ADD KEY `order_id` (`order_id`);

--
-- Indexes for table `tbl_product`
--
ALTER TABLE `tbl_product`
  ADD PRIMARY KEY (`product_id`);

--
-- Indexes for table `tbl_role`
--
ALTER TABLE `tbl_role`
  ADD PRIMARY KEY (`role_id`);

--
-- Indexes for table `tbl_subimageproduct`
--
ALTER TABLE `tbl_subimageproduct`
  ADD PRIMARY KEY (`idImg`),
  ADD KEY `idProduct` (`idProduct`);

--
-- Indexes for table `tbl_user`
--
ALTER TABLE `tbl_user`
  ADD PRIMARY KEY (`user_id`),
  ADD KEY `role_id` (`role_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `comments`
--
ALTER TABLE `comments`
  MODIFY `commentID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=40;

--
-- AUTO_INCREMENT for table `tbl_images`
--
ALTER TABLE `tbl_images`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `tbl_order`
--
ALTER TABLE `tbl_order`
  MODIFY `order_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=29;

--
-- AUTO_INCREMENT for table `tbl_product`
--
ALTER TABLE `tbl_product`
  MODIFY `product_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;

--
-- AUTO_INCREMENT for table `tbl_subimageproduct`
--
ALTER TABLE `tbl_subimageproduct`
  MODIFY `idImg` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `tbl_user`
--
ALTER TABLE `tbl_user`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `comments`
--
ALTER TABLE `comments`
  ADD CONSTRAINT `comments_ibfk_1` FOREIGN KEY (`productID`) REFERENCES `tbl_product` (`product_id`),
  ADD CONSTRAINT `comments_ibfk_2` FOREIGN KEY (`userID`) REFERENCES `tbl_user` (`user_id`);

--
-- Constraints for table `tbl_order_details`
--
ALTER TABLE `tbl_order_details`
  ADD CONSTRAINT `tbl_order_details_ibfk_1` FOREIGN KEY (`product_id`) REFERENCES `tbl_product` (`product_id`),
  ADD CONSTRAINT `tbl_order_details_ibfk_2` FOREIGN KEY (`order_id`) REFERENCES `tbl_order` (`order_id`);

--
-- Constraints for table `tbl_subimageproduct`
--
ALTER TABLE `tbl_subimageproduct`
  ADD CONSTRAINT `tbl_subimageproduct_ibfk_1` FOREIGN KEY (`idProduct`) REFERENCES `tbl_product` (`product_id`);

--
-- Constraints for table `tbl_user`
--
ALTER TABLE `tbl_user`
  ADD CONSTRAINT `tbl_user_ibfk_1` FOREIGN KEY (`role_id`) REFERENCES `tbl_role` (`role_id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
