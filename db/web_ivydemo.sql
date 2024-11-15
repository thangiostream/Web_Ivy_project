-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1
-- Thời gian đã tạo: Th5 02, 2023 lúc 08:13 AM
-- Phiên bản máy phục vụ: 10.4.28-MariaDB
-- Phiên bản PHP: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Cơ sở dữ liệu: `web_ivydemo`
--

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `tbl_brand`
--

CREATE TABLE `tbl_brand` (
  `brand_id` int(11) NOT NULL,
  `cartegory_id` int(11) NOT NULL,
  `brand_name` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `tbl_brand`
--

INSERT INTO `tbl_brand` (`brand_id`, `cartegory_id`, `brand_name`) VALUES
(6, 1, 'ÁO'),
(8, 1, 'ÁO KHOÁC'),
(10, 1, 'QUẦN '),
(12, 1, 'ĐẦM'),
(15, 2, 'ÁO '),
(16, 2, 'QUẦN NAM'),
(20, 3, 'BÉ GÁI'),
(21, 3, 'BÉ TRAI');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `tbl_cartegory`
--

CREATE TABLE `tbl_cartegory` (
  `cartegory_id` int(11) NOT NULL,
  `cartegory_name` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `tbl_cartegory`
--

INSERT INTO `tbl_cartegory` (`cartegory_id`, `cartegory_name`) VALUES
(1, 'NỮ'),
(2, 'NAM'),
(3, 'TRẺ EM'),
(4, 'BỘ SƯU TẬP'),
(5, 'LIFESTYLE'),
(6, 'VỀ CHÚNG TÔI');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `tbl_product`
--

CREATE TABLE `tbl_product` (
  `product_id` int(11) NOT NULL,
  `brand_id` int(11) NOT NULL,
  `cartegory_id` int(11) NOT NULL,
  `product_name` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `tbl_product`
--

INSERT INTO `tbl_product` (`product_id`, `brand_id`, `cartegory_id`, `product_name`) VALUES
(1, 6, 1, 'Áo sơ mi'),
(2, 6, 1, 'Áo thun'),
(3, 6, 1, 'Áo kiểu'),
(8, 7, 1, 'Túi/ví'),
(9, 7, 1, 'Giày/dép&Sandals'),
(10, 8, 1, 'Áo khoác'),
(11, 8, 1, 'Áo dạ'),
(20, 10, 1, 'Quần jeans'),
(21, 10, 1, 'Quần dài'),
(29, 12, 1, 'Đầm maxi/voan'),
(30, 12, 1, 'Đầm thun'),
(31, 12, 1, 'Senora-Đầm dạ hội'),
(35, 15, 2, 'Áo thun'),
(36, 15, 2, 'Áo khoác'),
(37, 15, 2, 'Áo polo'),
(42, 16, 2, 'Quần jeans'),
(43, 16, 2, 'Quần lửng/short'),
(52, 20, 3, 'Quần bé gái'),
(53, 20, 3, 'Áo bé gái'),
(58, 21, 3, 'Quần bé trai'),
(59, 21, 3, 'Áo bé trai'),
(62, 24, 3, 'Sale 30%'),
(63, 24, 3, 'Sale 50%'),
(64, 24, 3, 'Sale 60%');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `tbl_product_details`
--

CREATE TABLE `tbl_product_details` (
  `product_details_id` int(11) NOT NULL,
  `product_details_name` varchar(255) NOT NULL,
  `cartegory_id` int(11) NOT NULL,
  `brand_id` int(11) NOT NULL,
  `product_id` int(11) NOT NULL,
  `product_details_price` varchar(255) NOT NULL,
  `product_details_desc` varchar(255) NOT NULL,
  `product_details_img` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `tbl_product_details`
--

INSERT INTO `tbl_product_details` (`product_details_id`, `product_details_name`, `cartegory_id`, `brand_id`, `product_id`, `product_details_price`, `product_details_desc`, `product_details_img`) VALUES
(45, 'Áo sơ mi Tencel dây rút eo', 1, 6, 1, '990.000 đ', '<p>&Aacute;o sơ mi tay ngắn. Eo chiết d&aacute;ng peplum c&oacute; d&acirc;y k&eacute;o r&uacute;t dễ d&agrave;ng điều chỉnh.&nbsp;</p>\r\n\r\n<p>Chất liệu lụa mang lại cảm gi&aacute;c tho&aacute;ng m&aacute;t, thoải m&aacute;i cho người mặc bởi khả năng h&ua', 'asm1.jpg'),
(46, 'Áo sơ mi Tencel dây rút eo', 1, 6, 1, '990.000 đ', '<p>&Aacute;o sơ mi tay ngắn. Eo chiết d&aacute;ng peplum c&oacute; d&acirc;y k&eacute;o r&uacute;t dễ d&agrave;ng điều chỉnh.&nbsp;</p>\r\n\r\n<p>Chất liệu lụa mang lại cảm gi&aacute;c tho&aacute;ng m&aacute;t, thoải m&aacute;i cho người mặc bởi khả năng h&ua', 'asm2.jpg'),
(48, 'Áo sơ mi phối dây rút eo', 1, 6, 1, '1.190.000 đ', '<p>Với&nbsp; thiết kế&nbsp;cổ đức d&agrave;i tay c&ugrave;ng d&aacute;ng su&ocirc;ng v&agrave; chất liệu th&ocirc; mềm, gi&uacute;p&nbsp;mang lại cho người diện cảm gi&aacute;c thoải m&aacute;i v&agrave; ph&oacute;ng kho&aacute;ng. Đặc biệt,&nbsp;điểm nhấ', 'asm4.jpg'),
(50, 'Áo sơ mi Tencel dáng Oversize', 1, 6, 1, '1.090.000 đ', '<p>&Aacute;o sơ mi cổ đức, d&aacute;ng oversize với thiết kế tay ngắn k&egrave;m d&acirc;y buộc nơ tạo kiểu. Dọc th&acirc;n &aacute;o l&agrave;&nbsp;khuy c&agrave;i kim loại thanh lịch. &Aacute;o xẻ t&agrave; 2 b&ecirc;n.&nbsp;Ph&iacute;a trước c&oacute; ', 'asm6.jpg'),
(51, 'Áo sơ mi Tencel dáng Oversize', 1, 6, 1, '1.590.000 đ', '<p>&Aacute;o sơ mi cổ đức, d&aacute;ng oversize với thiết kế tay ngắn k&egrave;m d&acirc;y buộc nơ tạo kiểu. Dọc th&acirc;n &aacute;o l&agrave;&nbsp;khuy c&agrave;i kim loại thanh lịch. &Aacute;o xẻ t&agrave; 2 b&ecirc;n.&nbsp;Ph&iacute;a trước c&oacute; ', 'asm7.jpg'),
(53, 'Áo sơ mi Tay lửng thắt nơ', 1, 6, 1, '950.000 đ', '<p>&Aacute;o kiểu d&aacute;ng su&ocirc;ng, tay lỡ, cổ đức c&agrave;i khuy. Điểm nhấn l&agrave; thiết kế tay &aacute;o may nh&uacute;m tạo phồng, phối c&ugrave;ng d&acirc;y nơ thắt nữ t&iacute;nh.</p>\r\n\r\n<p>Thiết kế trẻ trung&nbsp;n&agrave;y chắc chắn sẽ k', 'asm9.jpg'),
(54, 'Áo sơ mi Tay lửng thắt nơ', 1, 6, 1, '950.000 đ', '<p>&Aacute;o kiểu d&aacute;ng su&ocirc;ng, tay lỡ, cổ đức c&agrave;i khuy. Điểm nhấn l&agrave; thiết kế tay &aacute;o may nh&uacute;m tạo phồng, phối c&ugrave;ng d&acirc;y nơ thắt nữ t&iacute;nh.</p>\r\n\r\n<p>Thiết kế trẻ trung&nbsp;n&agrave;y chắc chắn sẽ k', 'asm10.jpg'),
(55, 'Áo sơ mi lụa may viền nổi', 1, 6, 1, '1.290.000 đ', '<p>&Aacute;o kiểu d&aacute;ng su&ocirc;ng, tay lỡ, cổ đức c&agrave;i khuy. Điểm nhấn l&agrave; thiết kế tay &aacute;o may nh&uacute;m tạo phồng, phối c&ugrave;ng d&acirc;y nơ thắt nữ t&iacute;nh.</p>\r\n\r\n<p>Thiết kế trẻ trung&nbsp;n&agrave;y chắc chắn sẽ k', 'asm11.jpg'),
(56, 'Áo sơ mi lụa dáng suông', 1, 6, 1, '1.150.000 đ', '<p>&Aacute;o sơ mi d&aacute;ng su&ocirc;ng, cổ đức, ống tay d&agrave;i, phối t&uacute;i vu&ocirc;ng ph&iacute;a trước. &Aacute;o c&agrave;i bằng h&agrave;ng khuy kim loại đ&aacute; sang trọng. Chất liệu vải lụa cao cấp, thoải m&aacute;i, kh&ocirc;ng nhăn,', 'asm12.jpg'),
(57, 'Áo sơ mi lụa may viền nổi', 1, 6, 1, '1.290.000 đ', '<p>&Aacute;o sơ mi d&aacute;ng su&ocirc;ng, cổ đức, ống tay d&agrave;i, phối t&uacute;i vu&ocirc;ng ph&iacute;a trước. &Aacute;o c&agrave;i bằng h&agrave;ng khuy kim loại đ&aacute; sang trọng. Chất liệu vải lụa cao cấp, thoải m&aacute;i, kh&ocirc;ng nhăn,', 'asm13.jpg'),
(58, 'Áo sơ mi lụa dáng suông', 1, 6, 1, '1.150.000 đ', '<p>&Aacute;o sơ mi d&aacute;ng su&ocirc;ng, cổ đức, ống tay d&agrave;i, phối t&uacute;i vu&ocirc;ng ph&iacute;a trước. &Aacute;o c&agrave;i bằng h&agrave;ng khuy kim loại đ&aacute; sang trọng. Chất liệu vải lụa cao cấp, thoải m&aacute;i, kh&ocirc;ng nhăn,', 'asm14.jpg'),
(59, 'Áo sơ mi Tencel dáng suông', 1, 6, 1, '1.150.000 đ', '<p>&Aacute;o sơ mi d&aacute;ng su&ocirc;ng, cổ đức, ống tay d&agrave;i, phối t&uacute;i vu&ocirc;ng ph&iacute;a trước. &Aacute;o c&agrave;i bằng h&agrave;ng khuy kim loại đ&aacute; sang trọng. Chất liệu vải lụa cao cấp, thoải m&aacute;i, kh&ocirc;ng nhăn,', 'asm15.jpg'),
(61, 'Áo sơ mi tay lửng', 1, 6, 1, '1.190.000đ', '<p>&Aacute;o sơ mi d&aacute;ng su&ocirc;ng, cổ đức, ống tay d&agrave;i, phối t&uacute;i vu&ocirc;ng ph&iacute;a trước. &Aacute;o c&agrave;i bằng h&agrave;ng khuy kim loại đ&aacute; sang trọng. Chất liệu vải lụa cao cấp, thoải m&aacute;i, kh&ocirc;ng nhăn,', 'asm16.jpg'),
(62, 'Set áo sơ mi lụa và chân váy xếp ly', 1, 6, 1, '952.000 đ', '<p>&Aacute;o sơ mi d&aacute;ng su&ocirc;ng, cổ đức, ống tay d&agrave;i, phối t&uacute;i vu&ocirc;ng ph&iacute;a trước. &Aacute;o c&agrave;i bằng h&agrave;ng khuy kim loại đ&aacute; sang trọng. Chất liệu vải lụa cao cấp, thoải m&aacute;i, kh&ocirc;ng nhăn,', 'asm17.jpg'),
(63, 'Set áo sơ mi lụa và chân váy xếp ly', 1, 6, 1, '952.000 đ', '<p>&Aacute;o sơ mi d&aacute;ng su&ocirc;ng, cổ đức, ống tay d&agrave;i, phối t&uacute;i vu&ocirc;ng ph&iacute;a trước. &Aacute;o c&agrave;i bằng h&agrave;ng khuy kim loại đ&aacute; sang trọng. Chất liệu vải lụa cao cấp, thoải m&aacute;i, kh&ocirc;ng nhăn,', 'asm18.jpg'),
(64, 'Áo sơ mi thêu hoa dập lỗ', 1, 6, 1, '1.190.000 đ', '<p>&Aacute;o sơ mi d&aacute;ng su&ocirc;ng, cổ đức, ống tay d&agrave;i, phối t&uacute;i vu&ocirc;ng ph&iacute;a trước. &Aacute;o c&agrave;i bằng h&agrave;ng khuy kim loại đ&aacute; sang trọng. Chất liệu vải lụa cao cấp, thoải m&aacute;i, kh&ocirc;ng nhăn,', 'asm19.jpg'),
(65, 'Set áo sơ mi lụa và chân váy xếp ly', 1, 6, 1, '952.000 đ', '<p>&Aacute;o sơ mi d&aacute;ng su&ocirc;ng, cổ đức, ống tay d&agrave;i, phối t&uacute;i vu&ocirc;ng ph&iacute;a trước. &Aacute;o c&agrave;i bằng h&agrave;ng khuy kim loại đ&aacute; sang trọng. Chất liệu vải lụa cao cấp, thoải m&aacute;i, kh&ocirc;ng nhăn,', 'asm20.jpg'),
(66, 'Áo len ngắn tay phối kẻ ngang', 1, 6, 2, '1.090.000 đ', '<p>&Aacute;o len&nbsp;ngắn tay được thiết kế với chất liệu len chọn lọc cao cấp, tạo n&ecirc;n h&igrave;nh ảnh&nbsp;mềm mại v&agrave; sang trọng. Điểm nhấn nằm ở họa tiết kẻ ngang đầy ấn tượng tr&ecirc;n nền m&agrave;u &aacute;o đổi lập. Sự kết hợp tinh t', 'at1.jpg'),
(67, 'Áo len ngắn tay phối kẻ ngang', 1, 6, 2, '1.190.000 đ', '<p>&Aacute;o len&nbsp;ngắn tay được thiết kế với chất liệu len chọn lọc cao cấp, tạo n&ecirc;n h&igrave;nh ảnh&nbsp;mềm mại v&agrave; sang trọng. Điểm nhấn nằm ở họa tiết kẻ ngang đầy ấn tượng tr&ecirc;n nền m&agrave;u &aacute;o đổi lập. Sự kết hợp tinh t', 'at2.jpg'),
(68, 'Áo thun thêu họa tiết', 1, 6, 2, '590.000 đ', '<p>&Aacute;o len&nbsp;ngắn tay được thiết kế với chất liệu len chọn lọc cao cấp, tạo n&ecirc;n h&igrave;nh ảnh&nbsp;mềm mại v&agrave; sang trọng. Điểm nhấn nằm ở họa tiết kẻ ngang đầy ấn tượng tr&ecirc;n nền m&agrave;u &aacute;o đổi lập. Sự kết hợp tinh t', 'at3.jpg'),
(69, 'Áo thun vai chờm', 1, 6, 2, '550.000 đ', '<p>&Aacute;o len&nbsp;ngắn tay được thiết kế với chất liệu len chọn lọc cao cấp, tạo n&ecirc;n h&igrave;nh ảnh&nbsp;mềm mại v&agrave; sang trọng. Điểm nhấn nằm ở họa tiết kẻ ngang đầy ấn tượng tr&ecirc;n nền m&agrave;u &aacute;o đổi lập. Sự kết hợp tinh t', 'at4.jpg'),
(70, 'Áo thun vai chờm', 1, 6, 2, '550.000 đ', '<p>&Aacute;o len&nbsp;ngắn tay được thiết kế với chất liệu len chọn lọc cao cấp, tạo n&ecirc;n h&igrave;nh ảnh&nbsp;mềm mại v&agrave; sang trọng. Điểm nhấn nằm ở họa tiết kẻ ngang đầy ấn tượng tr&ecirc;n nền m&agrave;u &aacute;o đổi lập. Sự kết hợp tinh t', 'at5.jpg'),
(71, 'Áo thun cổ đổ', 1, 6, 1, '690.000 đ', '<p>&Aacute;o len&nbsp;ngắn tay được thiết kế với chất liệu len chọn lọc cao cấp, tạo n&ecirc;n h&igrave;nh ảnh&nbsp;mềm mại v&agrave; sang trọng. Điểm nhấn nằm ở họa tiết kẻ ngang đầy ấn tượng tr&ecirc;n nền m&agrave;u &aacute;o đổi lập. Sự kết hợp tinh t', 'at6.jpg'),
(72, 'Áo thun cổ đổ', 1, 6, 2, '690.000 đ', '<p>&Aacute;o len&nbsp;ngắn tay được thiết kế với chất liệu len chọn lọc cao cấp, tạo n&ecirc;n h&igrave;nh ảnh&nbsp;mềm mại v&agrave; sang trọng. Điểm nhấn nằm ở họa tiết kẻ ngang đầy ấn tượng tr&ecirc;n nền m&agrave;u &aacute;o đổi lập. Sự kết hợp tinh t', 'at7.jpg'),
(73, 'Áo croptop Bo chun gấu', 1, 6, 2, '750.000 đ', '<p>&Aacute;o len&nbsp;ngắn tay được thiết kế với chất liệu len chọn lọc cao cấp, tạo n&ecirc;n h&igrave;nh ảnh&nbsp;mềm mại v&agrave; sang trọng. Điểm nhấn nằm ở họa tiết kẻ ngang đầy ấn tượng tr&ecirc;n nền m&agrave;u &aacute;o đổi lập. Sự kết hợp tinh t', 'at8.jpg'),
(74, 'Áo thun họa tiết nổi', 1, 6, 2, '650.000 đ', '<p>&Aacute;o len&nbsp;ngắn tay được thiết kế với chất liệu len chọn lọc cao cấp, tạo n&ecirc;n h&igrave;nh ảnh&nbsp;mềm mại v&agrave; sang trọng. Điểm nhấn nằm ở họa tiết kẻ ngang đầy ấn tượng tr&ecirc;n nền m&agrave;u &aacute;o đổi lập. Sự kết hợp tinh t', 'at9.jpg'),
(75, 'Áo sơ mi họa tiết nổi', 1, 6, 2, '650.000 đ', '<p>&Aacute;o len&nbsp;ngắn tay được thiết kế với chất liệu len chọn lọc cao cấp, tạo n&ecirc;n h&igrave;nh ảnh&nbsp;mềm mại v&agrave; sang trọng. Điểm nhấn nằm ở họa tiết kẻ ngang đầy ấn tượng tr&ecirc;n nền m&agrave;u &aacute;o đổi lập. Sự kết hợp tinh t', 'at10.jpg'),
(76, 'Áo thun dây rút 2 bên eo', 1, 6, 2, '590.000 đ', '<p>&Aacute;o len&nbsp;ngắn tay được thiết kế với chất liệu len chọn lọc cao cấp, tạo n&ecirc;n h&igrave;nh ảnh&nbsp;mềm mại v&agrave; sang trọng. Điểm nhấn nằm ở họa tiết kẻ ngang đầy ấn tượng tr&ecirc;n nền m&agrave;u &aacute;o đổi lập. Sự kết hợp tinh t', 'at11.jpg'),
(77, 'Áo thun dây rút hai bên eo', 1, 6, 2, '590.000 đ', '<p>&Aacute;o len&nbsp;ngắn tay được thiết kế với chất liệu len chọn lọc cao cấp, tạo n&ecirc;n h&igrave;nh ảnh&nbsp;mềm mại v&agrave; sang trọng. Điểm nhấn nằm ở họa tiết kẻ ngang đầy ấn tượng tr&ecirc;n nền m&agrave;u &aacute;o đổi lập. Sự kết hợp tinh t', 'at12.jpg'),
(78, 'Áo thun be cool', 1, 6, 2, '590.000 đ', '<p>&Aacute;o len&nbsp;ngắn tay được thiết kế với chất liệu len chọn lọc cao cấp, tạo n&ecirc;n h&igrave;nh ảnh&nbsp;mềm mại v&agrave; sang trọng. Điểm nhấn nằm ở họa tiết kẻ ngang đầy ấn tượng tr&ecirc;n nền m&agrave;u &aacute;o đổi lập. Sự kết hợp tinh t', 'at13.jpg'),
(79, 'Áo croptop dáng ôm', 1, 6, 2, '396.000 đ', '<p>&Aacute;o len&nbsp;ngắn tay được thiết kế với chất liệu len chọn lọc cao cấp, tạo n&ecirc;n h&igrave;nh ảnh&nbsp;mềm mại v&agrave; sang trọng. Điểm nhấn nằm ở họa tiết kẻ ngang đầy ấn tượng tr&ecirc;n nền m&agrave;u &aacute;o đổi lập. Sự kết hợp tinh t', 'at14.jpg'),
(80, 'Áo croptop dáng ôm', 1, 6, 2, '396.000đ', '<p>&Aacute;o len&nbsp;ngắn tay được thiết kế với chất liệu len chọn lọc cao cấp, tạo n&ecirc;n h&igrave;nh ảnh&nbsp;mềm mại v&agrave; sang trọng. Điểm nhấn nằm ở họa tiết kẻ ngang đầy ấn tượng tr&ecirc;n nền m&agrave;u &aacute;o đổi lập. Sự kết hợp tinh t', 'at15.jpg'),
(81, 'Áo thun Cest Pouvoir', 1, 6, 2, '990.000 đ', '<p>Thiết kế &aacute;o sơ mi d&agrave;i tay, cổ peter pan c&aacute;ch điệu mang phong c&aacute;ch tiểu thư phối&nbsp;c&ugrave;ng&nbsp;2 t&uacute;i vu&ocirc;ng&nbsp;trẻ trung ph&iacute;a trước. Ch&acirc;n v&aacute;y&nbsp;xếp ly độ&nbsp;d&agrave;i qua đầu gố', 'at16.jpg'),
(82, 'Áo Thun Họa Tiết Nổi', 1, 6, 2, '1.190.000 đ', '<p>&Aacute;o thun cổ tr&ograve;n, tay ngắn. D&aacute;ng &aacute;o su&ocirc;ng. Thiết kế &aacute;o được nhấn nh&aacute; với chi tiết&nbsp;nổi, chất liệu thun bền m&agrave;u gi&uacute;p điều h&ograve;a nhiệt độ cơ thể hiệu quả trong những ng&agrave;y h&egra', 'at17.jpg'),
(83, 'Áo Thun Good Vibes Good Life', 1, 6, 2, '1.190.000 đ', '<p>&Aacute;o thun form rộng, độ d&agrave;i vừa phải, cổ tr&ograve;n. Phần cổ được viền in. Ph&iacute;a trước l&agrave; th&ecirc;u d&ograve;ng chữ Good Vibes Good Life.&nbsp;</p>\r\n\r\n<p>Một mẫu &aacute;o thun năng động nhưng kh&ocirc;ng k&eacute;m phần nữ t', 'at18.jpg'),
(84, 'Áo thun hoa nổi', 1, 6, 2, '1.190.000 đ', '<p>&Aacute;o thun form rộng, độ d&agrave;i vừa phải, cổ tr&ograve;n. Phần cổ được viền in. Ph&iacute;a trước l&agrave; th&ecirc;u d&ograve;ng chữ Good Vibes Good Life.&nbsp;</p>\r\n\r\n<p>Một mẫu &aacute;o thun năng động nhưng kh&ocirc;ng k&eacute;m phần nữ t', 'at19.jpg'),
(85, 'Áo thun trễ vai dáng ôm', 1, 6, 2, '1.150.000 đ', '<p>&Aacute;o thun form rộng, độ d&agrave;i vừa phải, cổ tr&ograve;n. Phần cổ được viền in. Ph&iacute;a trước l&agrave; th&ecirc;u d&ograve;ng chữ Good Vibes Good Life.&nbsp;</p>\r\n\r\n<p>Một mẫu &aacute;o thun năng động nhưng kh&ocirc;ng k&eacute;m phần nữ t', 'at20.jpg'),
(86, 'Áo hai dây dáng xòe', 1, 6, 3, '1.150.000 đ', '<p>- &Aacute;o 2 d&acirc;y 1 lớp&nbsp;d&aacute;ng x&ograve;e rộng, độ d&agrave;i qua m&ocirc;ng.</p>\r\n\r\n<p>- Phần ngực may qu&acirc;y&nbsp;phối đỉa, ph&iacute;a sau c&oacute; chun co gi&atilde;n.</p>\r\n\r\n<p>- Chất liệu vải th&ocirc; mềm m&aacute;t, nhăn nh', 'aknu1.jpg'),
(87, 'Áo hai dây dáng xòe', 1, 6, 3, '590.000 đ', '<p>- &Aacute;o 2 d&acirc;y 1 lớp&nbsp;d&aacute;ng x&ograve;e rộng, độ d&agrave;i qua m&ocirc;ng.</p>\r\n\r\n<p>- Phần ngực may qu&acirc;y&nbsp;phối đỉa, ph&iacute;a sau c&oacute; chun co gi&atilde;n.</p>\r\n\r\n<p>- Chất liệu vải th&ocirc; mềm m&aacute;t, nhăn nh', 'aknu2.jpg'),
(88, 'Áo hai dây dáng xòe', 1, 6, 3, '590.000 đ', '<p>- &Aacute;o 2 d&acirc;y 1 lớp&nbsp;d&aacute;ng x&ograve;e rộng, độ d&agrave;i qua m&ocirc;ng.</p>\r\n\r\n<p>- Phần ngực may qu&acirc;y&nbsp;phối đỉa, ph&iacute;a sau c&oacute; chun co gi&atilde;n.</p>\r\n\r\n<p>- Chất liệu vải th&ocirc; mềm m&aacute;t, nhăn nh', 'aknu3.jpg'),
(90, 'Áo hai dây dáng xòe', 1, 6, 3, '590.000 đ', '<p>- &Aacute;o 2 d&acirc;y 1 lớp&nbsp;d&aacute;ng x&ograve;e rộng, độ d&agrave;i qua m&ocirc;ng.</p>\r\n\r\n<p>- Phần ngực may qu&acirc;y&nbsp;phối đỉa, ph&iacute;a sau c&oacute; chun co gi&atilde;n.</p>\r\n\r\n<p>- Chất liệu vải th&ocirc; mềm m&aacute;t, nhăn nh', 'aknu5.jpg'),
(92, 'Áo hai dây dáng xòe', 1, 6, 3, '1.150.000 đ', '<p>- &Aacute;o 2 d&acirc;y 1 lớp&nbsp;d&aacute;ng x&ograve;e rộng, độ d&agrave;i qua m&ocirc;ng.</p>\r\n\r\n<p>- Phần ngực may qu&acirc;y&nbsp;phối đỉa, ph&iacute;a sau c&oacute; chun co gi&atilde;n.</p>\r\n\r\n<p>- Chất liệu vải th&ocirc; mềm m&aacute;t, nhăn nh', 'aknu4.jpg'),
(93, 'Áo khoác len cổ V', 1, 8, 10, '357.000 đ', '<p>&Aacute;o kho&aacute;c len cổ V, t&agrave; trước đ&aacute;p ch&eacute;o. Tay d&agrave;i bo gấu. D&aacute;ng &aacute;o bo gấu, đ&iacute;nh 4 khuy trang tr&iacute;. Viền bằng len g&acirc;n co gi&atilde;n. C&oacute; thể&nbsp;mix c&ugrave;ng ch&acirc;n zu&', 'akhoacnu1.jpg'),
(94, 'Áo măng tô kẻ', 1, 8, 10, '590.000 đ', '<p>&Aacute;o kho&aacute;c len cổ V, t&agrave; trước đ&aacute;p ch&eacute;o. Tay d&agrave;i bo gấu. D&aacute;ng &aacute;o bo gấu, đ&iacute;nh 4 khuy trang tr&iacute;. Viền bằng len g&acirc;n co gi&atilde;n. C&oacute; thể&nbsp;mix c&ugrave;ng ch&acirc;n zu&', 'akhoacnu2.jpg'),
(95, 'Áo khoác kẻ cổ tròn', 1, 8, 10, '590.000 đ', '<p>&Aacute;o kho&aacute;c len cổ V, t&agrave; trước đ&aacute;p ch&eacute;o. Tay d&agrave;i bo gấu. D&aacute;ng &aacute;o bo gấu, đ&iacute;nh 4 khuy trang tr&iacute;. Viền bằng len g&acirc;n co gi&atilde;n. C&oacute; thể&nbsp;mix c&ugrave;ng ch&acirc;n zu&', 'akhoacnu3.jpg'),
(96, 'Áo khoác dạ khuy cài móc', 1, 8, 10, '590.000 đ', '<p>&Aacute;o kho&aacute;c len cổ V, t&agrave; trước đ&aacute;p ch&eacute;o. Tay d&agrave;i bo gấu. D&aacute;ng &aacute;o bo gấu, đ&iacute;nh 4 khuy trang tr&iacute;. Viền bằng len g&acirc;n co gi&atilde;n. C&oacute; thể&nbsp;mix c&ugrave;ng ch&acirc;n zu&', 'akhoacnu4.jpg'),
(97, 'Áo Khoác Da Lộn Dáng Dài', 1, 8, 10, '990.000 đ', '<p>&Aacute;o kho&aacute;c da lộn cổ 2 ve kho&eacute;t chữ K. Vạt trước đắp ch&eacute;o. Tay d&agrave;i. Eo chiết. 2 t&uacute;i ch&eacute;o c&oacute; d&acirc;y k&eacute;o kh&oacute;a. B&ecirc;n trong &aacute;o l&oacute;t lớp vải lụa đồng m&agrave;u. C&agra', 'akhoacnu5.jpg'),
(98, 'Áo khoác dạ dáng dài', 1, 8, 11, '1.190.000 đ', '<p>&Aacute;o kho&aacute;c dạ cổ 2 ve d&agrave;i kho&eacute;t chữ K. Tay &aacute;o d&agrave;i đ&iacute;nh 3 khuy trang tr&iacute;. C&oacute; h&agrave;ng khuy đ&ocirc;i 2 b&ecirc;n t&agrave;. 2 t&uacute;i ch&eacute;o ph&iacute;a trước.</p>\r\n\r\n<p>Với chất li', 'adanu1.jpg'),
(99, 'Áo khoác dạ dáng dài', 1, 8, 11, '1.150.000 đ', '<p>&Aacute;o kho&aacute;c dạ cổ 2 ve d&agrave;i kho&eacute;t chữ K. Tay &aacute;o d&agrave;i đ&iacute;nh 3 khuy trang tr&iacute;. C&oacute; h&agrave;ng khuy đ&ocirc;i 2 b&ecirc;n t&agrave;. 2 t&uacute;i ch&eacute;o ph&iacute;a trước.</p>\r\n\r\n<p>Với chất li', 'adanu2.jpg'),
(100, 'Blazer dạ 4 khuy', 1, 8, 11, '837.000 đ', '<p>&Aacute;o kho&aacute;c dạ cổ 2 ve d&agrave;i kho&eacute;t chữ K. Tay &aacute;o d&agrave;i đ&iacute;nh 3 khuy trang tr&iacute;. C&oacute; h&agrave;ng khuy đ&ocirc;i 2 b&ecirc;n t&agrave;. 2 t&uacute;i ch&eacute;o ph&iacute;a trước.</p>\r\n\r\n<p>Với chất li', 'adanu3.jpg'),
(101, 'Blazer dạ 4 khuy', 1, 8, 11, '1.190.000 đ', '<p>&Aacute;o kho&aacute;c dạ cổ 2 ve d&agrave;i kho&eacute;t chữ K. Tay &aacute;o d&agrave;i đ&iacute;nh 3 khuy trang tr&iacute;. C&oacute; h&agrave;ng khuy đ&ocirc;i 2 b&ecirc;n t&agrave;. 2 t&uacute;i ch&eacute;o ph&iacute;a trước.</p>\r\n\r\n<p>Với chất li', 'adanu4.jpg'),
(102, 'Áo khoác dạ dáng dài', 1, 8, 11, '990.000 đ', '<p>&Aacute;o kho&aacute;c dạ cổ 2 ve d&agrave;i kho&eacute;t chữ K. Tay &aacute;o d&agrave;i đ&iacute;nh 3 khuy trang tr&iacute;. C&oacute; h&agrave;ng khuy đ&ocirc;i 2 b&ecirc;n t&agrave;. 2 t&uacute;i ch&eacute;o ph&iacute;a trước.</p>\r\n\r\n<p>Với chất li', 'adanu5.jpg'),
(103, 'Quần jeans dáng suông', 1, 10, 20, '763.000 đ', '<p>Quần jeans nữ d&aacute;ng baggy được thiết kế với kiểu d&aacute;ng su&ocirc;ng&nbsp;rộng, mang đến sự thoải m&aacute;i cho người mặc. Chất liệu vải denim cao cấp mang đến độ bền cao, gi&uacute;p sản phẩm kh&ocirc;ng bị bai nh&atilde;o hay sờn r&aacute;', 'qjeannu1.jpg'),
(104, 'Quần jeans dáng suông', 1, 10, 20, '590.000 đ', '<p>Quần jeans nữ d&aacute;ng baggy được thiết kế với kiểu d&aacute;ng su&ocirc;ng&nbsp;rộng, mang đến sự thoải m&aacute;i cho người mặc. Chất liệu vải denim cao cấp mang đến độ bền cao, gi&uacute;p sản phẩm kh&ocirc;ng bị bai nh&atilde;o hay sờn r&aacute;', 'qjeannu2.jpg'),
(105, 'Quần jeans ống đứng', 1, 10, 20, '590.000 đ', '<p>Quần jeans nữ d&aacute;ng baggy được thiết kế với kiểu d&aacute;ng su&ocirc;ng&nbsp;rộng, mang đến sự thoải m&aacute;i cho người mặc. Chất liệu vải denim cao cấp mang đến độ bền cao, gi&uacute;p sản phẩm kh&ocirc;ng bị bai nh&atilde;o hay sờn r&aacute;', 'qjeannu3.jpg'),
(106, 'Quần jeans ống loe', 1, 10, 20, '590.000 đ', '<p>Quần jeans nữ d&aacute;ng baggy được thiết kế với kiểu d&aacute;ng su&ocirc;ng&nbsp;rộng, mang đến sự thoải m&aacute;i cho người mặc. Chất liệu vải denim cao cấp mang đến độ bền cao, gi&uacute;p sản phẩm kh&ocirc;ng bị bai nh&atilde;o hay sờn r&aacute;', 'qjeannu4.jpg'),
(107, 'Quần jeans ống đứng', 1, 10, 20, '990.000 đ', '<p>Quần jeans nữ d&aacute;ng baggy được thiết kế với kiểu d&aacute;ng su&ocirc;ng&nbsp;rộng, mang đến sự thoải m&aacute;i cho người mặc. Chất liệu vải denim cao cấp mang đến độ bền cao, gi&uacute;p sản phẩm kh&ocirc;ng bị bai nh&atilde;o hay sờn r&aacute;', 'qjeannu5.jpg'),
(108, 'Frenh set', 1, 10, 21, '1.190.000 đ', '<p>Set đồ&nbsp;bao gồm một &aacute;o blazer cộc tay, &aacute;o qu&acirc;y 2 d&acirc;y v&agrave; một chiếc quần su&ocirc;ng d&agrave;i xếp ly eo, tạo n&ecirc;n một bộ trang phục ho&agrave;n hảo cho c&aacute;c buổi hẹn h&ograve;, tiệc t&ugrave;ng hay đi l&a', 'qdainu1.jpg'),
(109, 'Frenh set', 1, 10, 21, '1.190.000 đ', '<p>Set đồ&nbsp;bao gồm một &aacute;o blazer cộc tay, &aacute;o qu&acirc;y 2 d&acirc;y v&agrave; một chiếc quần su&ocirc;ng d&agrave;i xếp ly eo, tạo n&ecirc;n một bộ trang phục ho&agrave;n hảo cho c&aacute;c buổi hẹn h&ograve;, tiệc t&ugrave;ng hay đi l&a', 'qdainu2.jpg'),
(110, 'Frenh set', 1, 10, 21, '1.150.000 đ', '<p>Set đồ&nbsp;bao gồm một &aacute;o blazer cộc tay, &aacute;o qu&acirc;y 2 d&acirc;y v&agrave; một chiếc quần su&ocirc;ng d&agrave;i xếp ly eo, tạo n&ecirc;n một bộ trang phục ho&agrave;n hảo cho c&aacute;c buổi hẹn h&ograve;, tiệc t&ugrave;ng hay đi l&a', 'qdainu3.jpg'),
(111, 'Quần baggy phối phụ kiện', 1, 10, 21, '990.000 đ', '<p>Set đồ&nbsp;bao gồm một &aacute;o blazer cộc tay, &aacute;o qu&acirc;y 2 d&acirc;y v&agrave; một chiếc quần su&ocirc;ng d&agrave;i xếp ly eo, tạo n&ecirc;n một bộ trang phục ho&agrave;n hảo cho c&aacute;c buổi hẹn h&ograve;, tiệc t&ugrave;ng hay đi l&a', 'qdainu4.jpg'),
(112, 'Quần baggy phối phụ kiện', 1, 10, 21, '590.000 đ', '<p>Set đồ&nbsp;bao gồm một &aacute;o blazer cộc tay, &aacute;o qu&acirc;y 2 d&acirc;y v&agrave; một chiếc quần su&ocirc;ng d&agrave;i xếp ly eo, tạo n&ecirc;n một bộ trang phục ho&agrave;n hảo cho c&aacute;c buổi hẹn h&ograve;, tiệc t&ugrave;ng hay đi l&a', 'qdainu5.jpg'),
(113, 'Đầm linen dáng maxin ', 1, 12, 29, '1.150.000 đ', '<p>Đầm kh&ocirc;ng tay d&aacute;ng maxi x&ograve;e nhẹ. Phần vai nh&uacute;m chun buộc nơ th&ecirc;m phần nữ t&iacute;nh. Phần ngực phối ren Tạo kiểu chữ IVY moda ấn tượng, tạo điểm nhấn cho bộ trang phục. Chất liệu linen cao cấp mang đến cảm gi&aacute;c ', 'dmaxinu1.jpg'),
(114, 'Đầm linen dáng maxin ', 1, 12, 29, '1.150.000 đ', '<p>Đầm kh&ocirc;ng tay d&aacute;ng maxi x&ograve;e nhẹ. Phần vai nh&uacute;m chun buộc nơ th&ecirc;m phần nữ t&iacute;nh. Phần ngực phối ren Tạo kiểu chữ IVY moda ấn tượng, tạo điểm nhấn cho bộ trang phục. Chất liệu linen cao cấp mang đến cảm gi&aacute;c ', 'dmaxinu2.jpg'),
(115, 'Đầm lụa hai dây', 1, 12, 29, '1.150.000 đ', '<p>Đầm kh&ocirc;ng tay d&aacute;ng maxi x&ograve;e nhẹ. Phần vai nh&uacute;m chun buộc nơ th&ecirc;m phần nữ t&iacute;nh. Phần ngực phối ren Tạo kiểu chữ IVY moda ấn tượng, tạo điểm nhấn cho bộ trang phục. Chất liệu linen cao cấp mang đến cảm gi&aacute;c ', 'dmaxinnu3.jpg'),
(116, 'Đầm maxin tay hến', 1, 12, 29, '990.000 đ', '<p>Đầm kh&ocirc;ng tay d&aacute;ng maxi x&ograve;e nhẹ. Phần vai nh&uacute;m chun buộc nơ th&ecirc;m phần nữ t&iacute;nh. Phần ngực phối ren Tạo kiểu chữ IVY moda ấn tượng, tạo điểm nhấn cho bộ trang phục. Chất liệu linen cao cấp mang đến cảm gi&aacute;c ', 'dmaxinu4.jpg'),
(117, 'Đầm lụa xòe xếp nếp', 1, 12, 29, '1.150.000 đ', '<p>Đầm kh&ocirc;ng tay d&aacute;ng maxi x&ograve;e nhẹ. Phần vai nh&uacute;m chun buộc nơ th&ecirc;m phần nữ t&iacute;nh. Phần ngực phối ren Tạo kiểu chữ IVY moda ấn tượng, tạo điểm nhấn cho bộ trang phục. Chất liệu linen cao cấp mang đến cảm gi&aacute;c ', 'dmaxinu5.jpg'),
(118, 'Đầm thun suông dáng dài', 1, 12, 30, '590.000 đ', '<p>Đầm thun cổ mũ c&oacute; d&acirc;y k&eacute;o r&uacute;t. Tay d&agrave;i bo gấu bằng thun g&acirc;n co gi&atilde;n. D&aacute;ng su&ocirc;ng d&agrave;i qua gối. 2 t&uacute;i ch&eacute;o. Xẻ t&agrave; dưới gấu 2 b&ecirc;n. In chữ nhiều m&agrave;u mặt trư', 'dthunnu1.jpg'),
(119, 'Đầm thun suông dáng dài', 1, 12, 30, '590.000 đ', '<p>Đầm thun cổ mũ c&oacute; d&acirc;y k&eacute;o r&uacute;t. Tay d&agrave;i bo gấu bằng thun g&acirc;n co gi&atilde;n. D&aacute;ng su&ocirc;ng d&agrave;i qua gối. 2 t&uacute;i ch&eacute;o. Xẻ t&agrave; dưới gấu 2 b&ecirc;n. In chữ nhiều m&agrave;u mặt trư', 'dthunnu2.jpg'),
(120, 'Đầm thun dáng suông', 1, 12, 30, '690.000 đ', '<p>Đầm thun cổ mũ c&oacute; d&acirc;y k&eacute;o r&uacute;t. Tay d&agrave;i bo gấu bằng thun g&acirc;n co gi&atilde;n. D&aacute;ng su&ocirc;ng d&agrave;i qua gối. 2 t&uacute;i ch&eacute;o. Xẻ t&agrave; dưới gấu 2 b&ecirc;n. In chữ nhiều m&agrave;u mặt trư', 'dthunnu3.jpg'),
(121, 'Đầm thun dáng suông', 1, 12, 30, '690.000 đ', '<p>Đầm thun cổ mũ c&oacute; d&acirc;y k&eacute;o r&uacute;t. Tay d&agrave;i bo gấu bằng thun g&acirc;n co gi&atilde;n. D&aacute;ng su&ocirc;ng d&agrave;i qua gối. 2 t&uacute;i ch&eacute;o. Xẻ t&agrave; dưới gấu 2 b&ecirc;n. In chữ nhiều m&agrave;u mặt trư', 'dthunnu4.jpg'),
(122, 'Đầm thun dáng ôm', 1, 12, 30, '990.000 đ', '<p>Đầm thun cổ mũ c&oacute; d&acirc;y k&eacute;o r&uacute;t. Tay d&agrave;i bo gấu bằng thun g&acirc;n co gi&atilde;n. D&aacute;ng su&ocirc;ng d&agrave;i qua gối. 2 t&uacute;i ch&eacute;o. Xẻ t&agrave; dưới gấu 2 b&ecirc;n. In chữ nhiều m&agrave;u mặt trư', 'dthunnu5.jpg'),
(123, 'Đầm trễ vai dáng xòa ', 1, 12, 31, '2.443.000 đ', '<p>Đầm 2 d&acirc;y trễ vai d&aacute;ng x&ograve;e,&nbsp;phần ch&acirc;n may nh&uacute;n 2 lớp tạo phồng. Điểm nhấn l&agrave; chi&nbsp;tiết viền cổ hạt. Chất vải tuytsi đứng phom, &iacute;t nhăn ph&ugrave; hợp diện m&ugrave;a h&egrave;.&nbsp;Một thiết kế đ', 'ddahoi1.jpg'),
(124, 'Đầm dạ hội vai lưới phối đen', 1, 12, 31, '1.890.000 đ', '<p>Đầm 2 d&acirc;y trễ vai d&aacute;ng x&ograve;e,&nbsp;phần ch&acirc;n may nh&uacute;n 2 lớp tạo phồng. Điểm nhấn l&agrave; chi&nbsp;tiết viền cổ hạt. Chất vải tuytsi đứng phom, &iacute;t nhăn ph&ugrave; hợp diện m&ugrave;a h&egrave;.&nbsp;Một thiết kế đ', 'ddahoi2.jpg'),
(125, 'Bella dress ', 1, 12, 29, '1.890.000 đ', '<p>Đầm 2 d&acirc;y trễ vai d&aacute;ng x&ograve;e,&nbsp;phần ch&acirc;n may nh&uacute;n 2 lớp tạo phồng. Điểm nhấn l&agrave; chi&nbsp;tiết viền cổ hạt. Chất vải tuytsi đứng phom, &iacute;t nhăn ph&ugrave; hợp diện m&ugrave;a h&egrave;.&nbsp;Một thiết kế đ', 'ddahoi3.jpg'),
(126, 'Cali dress', 1, 12, 31, '1.890.000 đ', '<p>Đầm 2 d&acirc;y trễ vai d&aacute;ng x&ograve;e,&nbsp;phần ch&acirc;n may nh&uacute;n 2 lớp tạo phồng. Điểm nhấn l&agrave; chi&nbsp;tiết viền cổ hạt. Chất vải tuytsi đứng phom, &iacute;t nhăn ph&ugrave; hợp diện m&ugrave;a h&egrave;.&nbsp;Một thiết kế đ', 'ddahoi4.jpg'),
(127, 'Roxy dress', 1, 12, 31, '1.953.000 đ', '<p>Đầm 2 d&acirc;y trễ vai d&aacute;ng x&ograve;e,&nbsp;phần ch&acirc;n may nh&uacute;n 2 lớp tạo phồng. Điểm nhấn l&agrave; chi&nbsp;tiết viền cổ hạt. Chất vải tuytsi đứng phom, &iacute;t nhăn ph&ugrave; hợp diện m&ugrave;a h&egrave;.&nbsp;Một thiết kế đ', 'ddahoi5.jpg'),
(128, 'Áo thun phối túi hộp', 2, 15, 35, '590.000 đ', '<p>&Aacute;o polo m&agrave;u trơn bắt mắt c&ugrave;ng họa tiết 2 đường sọc c&ugrave;ng m&agrave;u từ cầu vai xuống giữa &aacute;o v&agrave; đường viền dọc theo đường cổ &aacute;o tạo cảm gi&aacute;c thu h&uacute;t cho người đối diện.</p>\r\n', 'atnam1.jpg'),
(129, 'Áo thun phối túi hộp', 2, 15, 35, '590.000 đ', '<p>&Aacute;o polo m&agrave;u trơn bắt mắt c&ugrave;ng họa tiết 2 đường sọc c&ugrave;ng m&agrave;u từ cầu vai xuống giữa &aacute;o v&agrave; đường viền dọc theo đường cổ &aacute;o tạo cảm gi&aacute;c thu h&uacute;t cho người đối diện.</p>\r\n', 'atnam2.jpg'),
(131, 'Áo thun positive', 2, 15, 35, '590.000 đ', '<p>&Aacute;o polo m&agrave;u trơn bắt mắt c&ugrave;ng họa tiết 2 đường sọc c&ugrave;ng m&agrave;u từ cầu vai xuống giữa &aacute;o v&agrave; đường viền dọc theo đường cổ &aacute;o tạo cảm gi&aacute;c thu h&uacute;t cho người đối diện.</p>\r\n', 'atnam4.jpg'),
(132, 'Áo thun thêu Science', 2, 15, 35, '590.000 đ', '<p>&Aacute;o polo m&agrave;u trơn bắt mắt c&ugrave;ng họa tiết 2 đường sọc c&ugrave;ng m&agrave;u từ cầu vai xuống giữa &aacute;o v&agrave; đường viền dọc theo đường cổ &aacute;o tạo cảm gi&aacute;c thu h&uacute;t cho người đối diện.</p>\r\n', 'atnam5.jpg'),
(133, 'Áo khoác nam', 2, 15, 36, '590.000 đ', '<p>&Aacute;o kho&aacute;c nam vải vinilon&nbsp;phom su&ocirc;ng, gi&uacute;p người mặc thoải m&aacute;i trong từng cử động, nhưng đồng thời vẫn đảm bảo vừa vặn về số đo vai, độ d&agrave;i tay, &aacute;o.</p>\r\n\r\n<p>Thiết kế tỉ mỉ đến từng chi tiết đem đến ', 'akn1.jpg'),
(134, 'Áo khoác nam', 2, 15, 36, '990.000 đ', '<p>&Aacute;o kho&aacute;c nam vải vinilon&nbsp;phom su&ocirc;ng, gi&uacute;p người mặc thoải m&aacute;i trong từng cử động, nhưng đồng thời vẫn đảm bảo vừa vặn về số đo vai, độ d&agrave;i tay, &aacute;o.</p>\r\n\r\n<p>Thiết kế tỉ mỉ đến từng chi tiết đem đến ', 'akn2.jpg'),
(135, 'Áo khoác jeans đen', 2, 15, 36, '990.000 đ', '<p>&Aacute;o kho&aacute;c nam vải vinilon&nbsp;phom su&ocirc;ng, gi&uacute;p người mặc thoải m&aacute;i trong từng cử động, nhưng đồng thời vẫn đảm bảo vừa vặn về số đo vai, độ d&agrave;i tay, &aacute;o.</p>\r\n\r\n<p>Thiết kế tỉ mỉ đến từng chi tiết đem đến ', 'akn3.jpg'),
(136, 'Áo khoác gió cổ mũ', 2, 15, 36, '590.000 đ', '<p>&Aacute;o kho&aacute;c nam vải vinilon&nbsp;phom su&ocirc;ng, gi&uacute;p người mặc thoải m&aacute;i trong từng cử động, nhưng đồng thời vẫn đảm bảo vừa vặn về số đo vai, độ d&agrave;i tay, &aacute;o.</p>\r\n\r\n<p>Thiết kế tỉ mỉ đến từng chi tiết đem đến ', 'akn4.jpg'),
(137, 'Áo khoác jeans ', 2, 15, 36, '990.000 đ', '<p>&Aacute;o kho&aacute;c nam vải vinilon&nbsp;phom su&ocirc;ng, gi&uacute;p người mặc thoải m&aacute;i trong từng cử động, nhưng đồng thời vẫn đảm bảo vừa vặn về số đo vai, độ d&agrave;i tay, &aacute;o.</p>\r\n\r\n<p>Thiết kế tỉ mỉ đến từng chi tiết đem đến ', 'akn5.jpg'),
(138, 'Áo polo viền cổ', 2, 15, 37, '345.000 đ', '<p>&Aacute;o polo m&agrave;u trơn bắt mắt c&ugrave;ng họa tiết 2 đường sọc c&ugrave;ng m&agrave;u từ cầu vai xuống giữa &aacute;o v&agrave; đường viền dọc theo đường cổ &aacute;o tạo cảm gi&aacute;c thu h&uacute;t cho người đối diện.</p>\r\n', 'apln1.jpg'),
(139, 'Áo polo viền cổ', 2, 15, 37, '345.000 đ', '<p>&Aacute;o polo m&agrave;u trơn bắt mắt c&ugrave;ng họa tiết 2 đường sọc c&ugrave;ng m&agrave;u từ cầu vai xuống giữa &aacute;o v&agrave; đường viền dọc theo đường cổ &aacute;o tạo cảm gi&aacute;c thu h&uacute;t cho người đối diện.</p>\r\n', 'apln2.jpg'),
(140, 'Áo polo viền cổ', 2, 15, 37, '345.000 đ', '<p>&Aacute;o polo m&agrave;u trơn bắt mắt c&ugrave;ng họa tiết 2 đường sọc c&ugrave;ng m&agrave;u từ cầu vai xuống giữa &aacute;o v&agrave; đường viền dọc theo đường cổ &aacute;o tạo cảm gi&aacute;c thu h&uacute;t cho người đối diện.</p>\r\n', 'apln3.jpg'),
(141, 'Áo polo viền cổ', 2, 15, 37, '345.000 đ', '<p>&Aacute;o polo m&agrave;u trơn bắt mắt c&ugrave;ng họa tiết 2 đường sọc c&ugrave;ng m&agrave;u từ cầu vai xuống giữa &aacute;o v&agrave; đường viền dọc theo đường cổ &aacute;o tạo cảm gi&aacute;c thu h&uacute;t cho người đối diện.</p>\r\n', 'apln4.jpg'),
(142, 'Áo polo viền cổ', 2, 15, 37, '345.000 đ', '<p>&Aacute;o polo m&agrave;u trơn bắt mắt c&ugrave;ng họa tiết 2 đường sọc c&ugrave;ng m&agrave;u từ cầu vai xuống giữa &aacute;o v&agrave; đường viền dọc theo đường cổ &aacute;o tạo cảm gi&aacute;c thu h&uacute;t cho người đối diện.</p>\r\n', 'apln5.jpg'),
(143, 'Quần shinny jeans', 2, 16, 42, '595.000 đ', '<p>Quần b&ograve; form d&agrave;i chạm mắt c&aacute; ch&acirc;n, chất liệu thoải m&aacute;i dễ vận động.</p>\r\n\r\n<p>Thiết kế trẻ trung năng động của thiết kế d&aacute;ng slim fit c&oacute; t&uacute;i hộp may đằng sau v&agrave; 2 t&uacute;i ch&eacute;o 2 b&', 'qjeannam1.jpg'),
(144, 'Quần shinny jeans', 2, 16, 42, '595.000 đ', '<p>Quần b&ograve; form d&agrave;i chạm mắt c&aacute; ch&acirc;n, chất liệu thoải m&aacute;i dễ vận động.</p>\r\n\r\n<p>Thiết kế trẻ trung năng động của thiết kế d&aacute;ng slim fit c&oacute; t&uacute;i hộp may đằng sau v&agrave; 2 t&uacute;i ch&eacute;o 2 b&', 'qjeannam2.jpg'),
(145, 'Quần Denim trơn', 2, 16, 42, '590.000 đ', '<p>Quần b&ograve; form d&agrave;i chạm mắt c&aacute; ch&acirc;n, chất liệu thoải m&aacute;i dễ vận động.</p>\r\n\r\n<p>Thiết kế trẻ trung năng động của thiết kế d&aacute;ng slim fit c&oacute; t&uacute;i hộp may đằng sau v&agrave; 2 t&uacute;i ch&eacute;o 2 b&', 'qjeannam3.jpg'),
(146, 'Quần bò vải sáng', 2, 16, 42, '590.000 đ', '<p>Quần b&ograve; form d&agrave;i chạm mắt c&aacute; ch&acirc;n, chất liệu thoải m&aacute;i dễ vận động.</p>\r\n\r\n<p>Thiết kế trẻ trung năng động của thiết kế d&aacute;ng slim fit c&oacute; t&uacute;i hộp may đằng sau v&agrave; 2 t&uacute;i ch&eacute;o 2 b&', 'qjeannam4.jpg'),
(147, 'Quần bò vải sáng', 2, 16, 42, '590.000 đ', '<p>Quần b&ograve; form d&agrave;i chạm mắt c&aacute; ch&acirc;n, chất liệu thoải m&aacute;i dễ vận động.</p>\r\n\r\n<p>Thiết kế trẻ trung năng động của thiết kế d&aacute;ng slim fit c&oacute; t&uacute;i hộp may đằng sau v&agrave; 2 t&uacute;i ch&eacute;o 2 b&', 'qjeannam5.jpg'),
(148, 'Quần lửng nam Kaki', 2, 16, 43, '495.000 đ', '<p>Quần lửng khaki ngang gối. Cạp c&oacute; đỉa.&nbsp;C&oacute; 2 t&uacute;i ph&iacute;a trước v&agrave; 2 t&uacute;i c&oacute; khuy c&agrave;i ph&iacute;a sau. Th&ecirc;u chữ IVY men 1 b&ecirc;n viền t&uacute;i.&nbsp;C&agrave;i ph&iacute;a trước bằng kh&', 'qlnam1.jpg'),
(149, 'Quần lửng nam Kaki', 2, 16, 43, '590.000 đ', '<p>Quần lửng khaki ngang gối. Cạp c&oacute; đỉa.&nbsp;C&oacute; 2 t&uacute;i ph&iacute;a trước v&agrave; 2 t&uacute;i c&oacute; khuy c&agrave;i ph&iacute;a sau. Th&ecirc;u chữ IVY men 1 b&ecirc;n viền t&uacute;i.&nbsp;C&agrave;i ph&iacute;a trước bằng kh&', 'qlnam2.jpg'),
(150, 'Quần lửng nam Kaki', 2, 16, 43, '495.000 đ', '<p>Quần lửng khaki ngang gối. Cạp c&oacute; đỉa.&nbsp;C&oacute; 2 t&uacute;i ph&iacute;a trước v&agrave; 2 t&uacute;i c&oacute; khuy c&agrave;i ph&iacute;a sau. Th&ecirc;u chữ IVY men 1 b&ecirc;n viền t&uacute;i.&nbsp;C&agrave;i ph&iacute;a trước bằng kh&', 'qlnam3.jpg'),
(151, 'Quần lửng nam Kaki', 2, 16, 43, '590.000 đ', '<p>Quần lửng khaki ngang gối. Cạp c&oacute; đỉa.&nbsp;C&oacute; 2 t&uacute;i ph&iacute;a trước v&agrave; 2 t&uacute;i c&oacute; khuy c&agrave;i ph&iacute;a sau. Th&ecirc;u chữ IVY men 1 b&ecirc;n viền t&uacute;i.&nbsp;C&agrave;i ph&iacute;a trước bằng kh&', 'qlnam4.jpg'),
(152, 'Quần lửng nam Kaki', 2, 16, 43, '590.000 đ', '<p>Quần lửng khaki ngang gối. Cạp c&oacute; đỉa.&nbsp;C&oacute; 2 t&uacute;i ph&iacute;a trước v&agrave; 2 t&uacute;i c&oacute; khuy c&agrave;i ph&iacute;a sau. Th&ecirc;u chữ IVY men 1 b&ecirc;n viền t&uacute;i.&nbsp;C&agrave;i ph&iacute;a trước bằng kh&', 'qlnam5.jpg'),
(153, 'Áo thô nhún chung phồng', 3, 20, 52, '245.000 đ', '<p>&Aacute;o cổ tr&ograve;n c&oacute; d&acirc;y thắt nơ điệu đ&agrave;, phần th&acirc;n v&agrave; tay nh&uacute;n chun co gi&atilde;n tạo độ phồng nhẹ. H&atilde;y&nbsp;mix &aacute;o c&ugrave;ng ch&acirc;n v&aacute;y hoặc quần short để&nbsp;ho&agrave;n thi', 'abegai1.jpg'),
(154, 'Set đồ bé gái', 3, 20, 52, '245.000 đ', '<p>&Aacute;o cổ tr&ograve;n c&oacute; d&acirc;y thắt nơ điệu đ&agrave;, phần th&acirc;n v&agrave; tay nh&uacute;n chun co gi&atilde;n tạo độ phồng nhẹ. H&atilde;y&nbsp;mix &aacute;o c&ugrave;ng ch&acirc;n v&aacute;y hoặc quần short để&nbsp;ho&agrave;n thi', 'abegai2.jpg'),
(155, 'Set đồ bé gái', 3, 20, 52, '345.000 đ', '<p>&Aacute;o cổ tr&ograve;n c&oacute; d&acirc;y thắt nơ điệu đ&agrave;, phần th&acirc;n v&agrave; tay nh&uacute;n chun co gi&atilde;n tạo độ phồng nhẹ. H&atilde;y&nbsp;mix &aacute;o c&ugrave;ng ch&acirc;n v&aacute;y hoặc quần short để&nbsp;ho&agrave;n thi', 'abegai3.jpg'),
(156, 'Set đồ con hạc', 3, 20, 52, '274.000 đ', '<p>&Aacute;o cổ tr&ograve;n c&oacute; d&acirc;y thắt nơ điệu đ&agrave;, phần th&acirc;n v&agrave; tay nh&uacute;n chun co gi&atilde;n tạo độ phồng nhẹ. H&atilde;y&nbsp;mix &aacute;o c&ugrave;ng ch&acirc;n v&aacute;y hoặc quần short để&nbsp;ho&agrave;n thi', 'abegai4.jpg'),
(157, 'Set đồ bé gái', 3, 20, 52, '345.000 đ', '<p>&Aacute;o cổ tr&ograve;n c&oacute; d&acirc;y thắt nơ điệu đ&agrave;, phần th&acirc;n v&agrave; tay nh&uacute;n chun co gi&atilde;n tạo độ phồng nhẹ. H&atilde;y&nbsp;mix &aacute;o c&ugrave;ng ch&acirc;n v&aacute;y hoặc quần short để&nbsp;ho&agrave;n thi', 'abegai5.jpg'),
(159, 'set áo thun', 3, 20, 53, '590.000 đ', '<p>Quần b&ograve;&nbsp;ống&nbsp;đứng. C&oacute; 5 t&uacute;i. Cạp c&oacute;&nbsp;đỉa. C&agrave;i bằng d&acirc;y k&eacute;o v&agrave; kh&oacute;a kim loại ph&iacute;a trước. Bo gấu.</p>\r\n', 'qbegai1.jpg'),
(160, 'Bộ pijama họa tiết', 3, 20, 53, '390.000', '<p>Bộ Pyjama bao gồm &aacute;o cổ 2 ve v&agrave; quần ngắn. Chất liệu ch&iacute;nh l&agrave; lụa mềm mịn, tho&aacute;ng m&aacute;t, thấm h&uacute;t mồ h&ocirc;i tốt. Ph&iacute;a trước &aacute;o c&oacute; t&uacute;i vu&ocirc;ng.&nbsp;Viền &aacute;o v&agrav', 'aobegai1.jpg'),
(161, 'Set thun', 3, 20, 53, '590.000 đ', '<p>Bộ thun gồm &aacute;o v&agrave; quần ngắn. Chất liệu mềm mại, thấm h&uacute;t mồ h&ocirc;i tốt. &Aacute;o được in h&igrave;nh ngộ nghĩnh ph&iacute;a trước. Thiết kế quần bao gồm họa tiết bắt mắt. Cạp quần chun c&oacute; d&atilde;n tốt, ph&iacute;a trướ', 'aobegai2.jpg'),
(162, 'Set thun', 3, 20, 53, '590.000 đ', '<p>Bộ thun gồm &aacute;o v&agrave; quần ngắn. Chất liệu mềm mại, thấm h&uacute;t mồ h&ocirc;i tốt. &Aacute;o được in h&igrave;nh ngộ nghĩnh ph&iacute;a trước. Thiết kế quần bao gồm họa tiết bắt mắt. Cạp quần chun c&oacute; d&atilde;n tốt, ph&iacute;a trướ', 'aobegai3.jpg'),
(163, 'Áo trễ vai hoa nhí', 3, 20, 53, '345.000 đ', '<p>Bộ thun gồm &aacute;o v&agrave; quần ngắn. Chất liệu mềm mại, thấm h&uacute;t mồ h&ocirc;i tốt. &Aacute;o được in h&igrave;nh ngộ nghĩnh ph&iacute;a trước. Thiết kế quần bao gồm họa tiết bắt mắt. Cạp quần chun c&oacute; d&atilde;n tốt, ph&iacute;a trướ', 'aobegai4.jpg'),
(164, 'Quần dài kaki', 3, 21, 58, '345.000 đ', '<p>Quần d&agrave;i khaki cạp chun co gi&atilde;n, 2 t&uacute;i ch&eacute;o 2 b&ecirc;n - 2 viền t&uacute;i giả ph&iacute;a sau. Gấu bo chun co gi&atilde;n.</p>\r\n', 'qbetrai1.jpg'),
(165, 'Bộ thun phối sọc ', 3, 21, 58, '299.000 đ', '<p>Quần d&agrave;i khaki cạp chun co gi&atilde;n, 2 t&uacute;i ch&eacute;o 2 b&ecirc;n - 2 viền t&uacute;i giả ph&iacute;a sau. Gấu bo chun co gi&atilde;n.</p>\r\n', 'qbetrai2.jpg'),
(166, 'Set đồ bé trai', 3, 21, 58, '590.000 đ', '<p>Quần d&agrave;i khaki cạp chun co gi&atilde;n, 2 t&uacute;i ch&eacute;o 2 b&ecirc;n - 2 viền t&uacute;i giả ph&iacute;a sau. Gấu bo chun co gi&atilde;n.</p>\r\n', 'qbetrai3.jpg'),
(167, 'Set đồ bé trai', 3, 21, 58, '590.000 đ', '<p>Quần d&agrave;i khaki cạp chun co gi&atilde;n, 2 t&uacute;i ch&eacute;o 2 b&ecirc;n - 2 viền t&uacute;i giả ph&iacute;a sau. Gấu bo chun co gi&atilde;n.</p>\r\n', 'qbetrai4.jpg'),
(168, 'Set thun baby shark', 3, 21, 58, '590.000 đ', '<p>Set thun Baby Shark l&agrave; một thiết kế tiện &iacute;ch&nbsp;cho b&eacute; trai với chất liệu vải thun tho&aacute;ng&nbsp;m&aacute;t, thấm h&uacute;t mồ h&ocirc;i, gi&uacute;p b&eacute; thoải m&aacute;i v&agrave; dễ chịu khi mặc. Bộ set gồm &aacute;', 'qbetrai5.jpg'),
(169, 'Áo thun bé trai ngắn tay', 3, 21, 59, '244.000 đ', '<p>&Aacute;o thun được l&agrave;m từ chất liệu thấm h&uacute;t, kh&ocirc;ng g&acirc;y k&iacute;ch ứng cho da b&eacute;, gi&uacute;p b&eacute; lu&ocirc;n cảm thấy thoải m&aacute;i v&agrave; kh&ocirc; r&aacute;o suốt cả ng&agrave;y.</p>\r\n', 'abetrai1.jpg'),
(170, 'Áo thun thêu chữ', 3, 21, 59, '245.000 đ', '<p>&Aacute;o thun được l&agrave;m từ chất liệu thấm h&uacute;t, kh&ocirc;ng g&acirc;y k&iacute;ch ứng cho da b&eacute;, gi&uacute;p b&eacute; lu&ocirc;n cảm thấy thoải m&aacute;i v&agrave; kh&ocirc; r&aacute;o suốt cả ng&agrave;y.</p>\r\n', 'abetrai2.jpg'),
(171, 'Áo polo thêu hình', 3, 21, 59, '345.000 đ', '<p>&Aacute;o thun được l&agrave;m từ chất liệu thấm h&uacute;t, kh&ocirc;ng g&acirc;y k&iacute;ch ứng cho da b&eacute;, gi&uacute;p b&eacute; lu&ocirc;n cảm thấy thoải m&aacute;i v&agrave; kh&ocirc; r&aacute;o suốt cả ng&agrave;y.</p>\r\n', 'abetrai3.jpg'),
(172, 'Áo thun Dino saur', 3, 21, 59, '209.000 đ', '<p>&Aacute;o thun được l&agrave;m từ chất liệu thấm h&uacute;t, kh&ocirc;ng g&acirc;y k&iacute;ch ứng cho da b&eacute;, gi&uacute;p b&eacute; lu&ocirc;n cảm thấy thoải m&aacute;i v&agrave; kh&ocirc; r&aacute;o suốt cả ng&agrave;y.</p>\r\n', 'abetrai4.jpg'),
(173, 'Set thun ', 3, 21, 59, '590.000 đ', '<p>&Aacute;o thun được l&agrave;m từ chất liệu thấm h&uacute;t, kh&ocirc;ng g&acirc;y k&iacute;ch ứng cho da b&eacute;, gi&uacute;p b&eacute; lu&ocirc;n cảm thấy thoải m&aacute;i v&agrave; kh&ocirc; r&aacute;o suốt cả ng&agrave;y.</p>\r\n', 'abetrai5.jpg');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `tbl_user`
--

CREATE TABLE `tbl_user` (
  `user_id` int(11) NOT NULL,
  `user_name` varchar(255) NOT NULL,
  `user_password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `tbl_user`
--

INSERT INTO `tbl_user` (`user_id`, `user_name`, `user_password`) VALUES
(1, 'longnhat', '123456'),
(5, 'mykieu', '111111'),
(6, 'kimphuong', '000000'),
(7, '486512', '111111'),
(8, 'df', '0000'),
(9, '77777', '1111');

--
-- Chỉ mục cho các bảng đã đổ
--

--
-- Chỉ mục cho bảng `tbl_brand`
--
ALTER TABLE `tbl_brand`
  ADD PRIMARY KEY (`brand_id`);

--
-- Chỉ mục cho bảng `tbl_cartegory`
--
ALTER TABLE `tbl_cartegory`
  ADD PRIMARY KEY (`cartegory_id`);

--
-- Chỉ mục cho bảng `tbl_product`
--
ALTER TABLE `tbl_product`
  ADD PRIMARY KEY (`product_id`);

--
-- Chỉ mục cho bảng `tbl_product_details`
--
ALTER TABLE `tbl_product_details`
  ADD PRIMARY KEY (`product_details_id`);

--
-- Chỉ mục cho bảng `tbl_user`
--
ALTER TABLE `tbl_user`
  ADD PRIMARY KEY (`user_id`);

--
-- AUTO_INCREMENT cho các bảng đã đổ
--

--
-- AUTO_INCREMENT cho bảng `tbl_brand`
--
ALTER TABLE `tbl_brand`
  MODIFY `brand_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=31;

--
-- AUTO_INCREMENT cho bảng `tbl_cartegory`
--
ALTER TABLE `tbl_cartegory`
  MODIFY `cartegory_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT cho bảng `tbl_product`
--
ALTER TABLE `tbl_product`
  MODIFY `product_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=79;

--
-- AUTO_INCREMENT cho bảng `tbl_product_details`
--
ALTER TABLE `tbl_product_details`
  MODIFY `product_details_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=174;

--
-- AUTO_INCREMENT cho bảng `tbl_user`
--
ALTER TABLE `tbl_user`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
