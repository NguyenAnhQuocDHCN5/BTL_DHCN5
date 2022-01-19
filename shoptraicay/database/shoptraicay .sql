-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1
-- Thời gian đã tạo: Th1 16, 2022 lúc 10:43 AM
-- Phiên bản máy phục vụ: 10.4.21-MariaDB
-- Phiên bản PHP: 7.3.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Cơ sở dữ liệu: `shoptraicay`
--

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `adm`
--

CREATE TABLE `adm` (
  `ma_adm` int(11) NOT NULL,
  `ten_dn` char(15) DEFAULT NULL,
  `mat_khau` char(15) DEFAULT NULL,
  `ten_adm` char(50) DEFAULT NULL,
  `sdt` char(15) DEFAULT NULL,
  `dia_chi` char(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `adm`
--

INSERT INTO `adm` (`ma_adm`, `ten_dn`, `mat_khau`, `ten_adm`, `sdt`, `dia_chi`) VALUES
(1, 'admin1', '123456', 'Anh Quoc', '1234567892', '101 abc xyz'),
(2, 'admin2', '123456', 'Quoc Hung', '1234567892', '05 xyz abc'),
(3, 'Hung ne', '012894265', 'hungrunglegit', '012894265', NULL);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `binh_luan`
--

CREATE TABLE `binh_luan` (
  `ma_binhluan` int(11) NOT NULL,
  `binhluan_ten` varchar(200) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `binhluan_email` varchar(200) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `binhluan_noidung` text NOT NULL,
  `ma_qua` int(11) NOT NULL,
  `binhluan_ngay` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `chi_tiet_dat_hang`
--

CREATE TABLE `chi_tiet_dat_hang` (
  `ma_qua` int(11) NOT NULL,
  `ma_don_dat_hang` int(11) NOT NULL,
  `so_luong` char(10) NOT NULL,
  `gia` varchar(50) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `thanh_tien` varchar(100) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `chi_tiet_dat_hang`
--

INSERT INTO `chi_tiet_dat_hang` (`ma_qua`, `ma_don_dat_hang`, `so_luong`, `gia`, `thanh_tien`) VALUES
(1, 8, '4', '75000', '300000'),
(1, 9, '1', '75000', '75000'),
(2, 6, '1', '50000', '50000'),
(2, 7, '1', '50000', '50000'),
(2, 9, '3', '50000', '150000');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `don_dat_hang`
--

CREATE TABLE `don_dat_hang` (
  `ma_don_dat_hang` int(11) NOT NULL,
  `ten_nguoi_nhan` varchar(100) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `email_nguoi_nhan` varchar(100) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `sdt_nguoi_nhan` char(20) NOT NULL,
  `dia_chi_nguoi_nhan` varchar(200) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `ghi_chu_dat_hang` varchar(600) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `tong_tien` varchar(100) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `tinh_trang_dat_hang` varchar(11) CHARACTER SET utf8 COLLATE utf8_unicode_ci DEFAULT NULL,
  `hinhthuc_thanhtoan` varchar(50) CHARACTER SET utf8 COLLATE utf8_unicode_ci DEFAULT NULL,
  `ngay_dat` datetime DEFAULT NULL,
  `ngay_giao` datetime DEFAULT NULL,
  `ma_khach_hang` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `don_dat_hang`
--

INSERT INTO `don_dat_hang` (`ma_don_dat_hang`, `ten_nguoi_nhan`, `email_nguoi_nhan`, `sdt_nguoi_nhan`, `dia_chi_nguoi_nhan`, `ghi_chu_dat_hang`, `tong_tien`, `tinh_trang_dat_hang`, `hinhthuc_thanhtoan`, `ngay_dat`, `ngay_giao`, `ma_khach_hang`) VALUES
(1, 'nguyenanh', 'nhokchuot004@gmail.com', '012894265', '012894265', '123213123', '750,000', NULL, '', NULL, NULL, NULL),
(2, 'nguyenanh', 'nhoz12h@gmail.com', '12312312312', '12312312', '312321321', '750,000', NULL, '', NULL, NULL, NULL),
(3, 'nguyenanh', 'nhoz12h@gmail.com', '123123123', '12312321312', '3123123123', '75,000', NULL, NULL, NULL, NULL, NULL),
(4, 'nguyenanh', 'nhoz12h@gmail.com', '123123123', '12312321312', '3123123123', '75,000', NULL, NULL, NULL, NULL, NULL),
(5, '12312312', 'nhoz12h@gmail.com', '123123', '12312312', '23123123', '50,000', NULL, NULL, NULL, NULL, NULL),
(6, '12312312', 'nhoz12h@gmail.com', '123123', '12312312', '23123123', '50,000', NULL, NULL, NULL, NULL, NULL),
(7, '12312312', 'nhoz12h@gmail.com', '123123', '12312312', '23123123', '50,000', NULL, NULL, NULL, NULL, NULL),
(8, '1231231', 'nhoz12h@gmail.com', '123123', '123123', '123123123', '300,000', NULL, NULL, NULL, NULL, NULL),
(9, '123123', 'nhoz12h@gmail.com', '12312312', '123123213', '123213213', '225,000', NULL, NULL, NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `khachhang`
--

CREATE TABLE `khachhang` (
  `ma_khach_hang` int(11) NOT NULL,
  `kh_email` char(60) NOT NULL,
  `kh_matkhau` char(20) NOT NULL,
  `kh_ten` varchar(50) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `kh_sdt` char(15) NOT NULL,
  `kh_diachi` varchar(100) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `khachhang`
--

INSERT INTO `khachhang` (`ma_khach_hang`, `kh_email`, `kh_matkhau`, `kh_ten`, `kh_sdt`, `kh_diachi`) VALUES
(1, 'nhoz12h@gmail.com', '012894265', 'nguyen anh quoc', '012894265', '101 huy nhan'),
(4, 'nhokchuot004@gmail.com', '012894265', 'nguyen anh quoc', '012894265', '101 huy can'),
(5, 'nhokchuot4004@gmail.com', '012894265', '012894265', '012894265', '012894265'),
(6, 'truongnguyenquochung@gmail.com', '012894265', 'Truong Nguyen Quoc Hung', '012894265', '102 mai xuan thuong');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `lien_he`
--

CREATE TABLE `lien_he` (
  `ma_lien_he` int(11) NOT NULL,
  `ten_nguoi_lien_he` varchar(100) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `sdt_nguoi_lien_he` char(20) NOT NULL,
  `email_nguoi_lien_he` varchar(100) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `dia_chi_nguoi_lien_he` varchar(200) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `noi_dung` varchar(600) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `ngay_lien_he` datetime NOT NULL,
  `ma_khach_hang` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `loai_qua`
--

CREATE TABLE `loai_qua` (
  `ma_loai` int(11) NOT NULL,
  `ten_loai` varchar(100) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `loai_qua`
--

INSERT INTO `loai_qua` (`ma_loai`, `ten_loai`) VALUES
(1, 'Quả miền bắc'),
(7, 'Quả miền trung'),
(8, 'Quả miền nam');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `qua`
--

CREATE TABLE `qua` (
  `ma_qua` int(11) NOT NULL,
  `ma_loai` int(11) NOT NULL,
  `ten_qua` varchar(100) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `gia_qua` varchar(100) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `hinh_anh_qua` varchar(200) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `mo_ta_qua` varchar(200) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `ngay_dang_qua` timestamp NULL DEFAULT NULL,
  `tinh_trang_qua` varchar(50) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `qua`
--

INSERT INTO `qua` (`ma_qua`, `ma_loai`, `ten_qua`, `gia_qua`, `hinh_anh_qua`, `mo_ta_qua`, `ngay_dang_qua`, `tinh_trang_qua`) VALUES
(1, 1, 'Bưởi da xanh', '75000', 'buoi_mien_trung.jpg', 'Bưởi da xanh loại 1 có khối lượng từ 1,2kg-1,6kg. Da mỏng, vị thơm hương bưởi, múi bưởi căng mọng, ngọt pha chút vị chua thanh\r\nTrái bưởi da xanh có dạng hình cầu, nặng trung bình từ 1,2 -2.5 kg/trái.', NULL, ''),
(2, 1, 'Mận Bắc', '50000', 'man_bac.jpg', 'Mận không chỉ là thứ quả ngọt ngon, mà còn có tác dụng bồi bổ sức khoẻ sau lao động mệt nhọc bởi cứ 100g mận sẽ mang lại cho người dùng 23Kcal. Đó là chưa kể tới trong quả mận có khá nhiều sinh tố B1,', NULL, ''),
(3, 8, 'kiwi', '75000', 'kiwi.jpg', 'ngon', '2022-01-04 09:03:29', ''),
(4, 7, 'tao', '75000', 'táo.jpg', 'ngon', NULL, ''),
(5, 1, 'chom chom', '50000', 'na.jpg', 'ngon', NULL, '');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `tin_tuc`
--

CREATE TABLE `tin_tuc` (
  `ma_tin_tuc` int(11) NOT NULL,
  `nguoi_dang` varchar(100) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `tieu_de` varchar(200) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `hinh_anh_tin_tuc` varchar(200) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `noi_dung_tin_tuc` text CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `ngay_dang_tin_tuc` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `tin_tuc`
--

INSERT INTO `tin_tuc` (`ma_tin_tuc`, `nguoi_dang`, `tieu_de`, `hinh_anh_tin_tuc`, `noi_dung_tin_tuc`, `ngay_dang_tin_tuc`) VALUES
(1, '', 'Công dụng đáng kinh ngạc từ trái ổi.', 'cayoidailoan.jpg', '<p style=\"margin-top:0cm;margin-right:0cm;margin-bottom:15.0pt;margin-left:\n							0cm;line-height:13.15pt;background:white\">&nbsp;Không chỉ là một loại hoa quả\n							thông thường mà ổi còn có thể được xem là một loại thuốc để chừa bệnh, một\n							nguồn cung cấp chất dinh dưỡng cho cơ thể người. Nhiều bộ phận trên cây ổi đều\n							có thể dùng để làm nguyên liệu ngăn ngừa và chữa bệnh: lá, quả chín, quả non,\n							hạt,...</p>\n\n							<p style=\"margin-top:0cm;margin-right:0cm;margin-bottom:15.0pt;margin-left:\n							0cm;text-align:justify;line-height:13.15pt;background:white\"><strong', '2022-01-15 14:16:12'),
(2, '', 'CÔNG DỤNG ĐÁNG KINH NGẠC TỪ TRÁI ỔI.', 'cayoidailoan.jpg', '<p>Kh&ocirc;ng chỉ l&agrave; một loại hoa quả th&ocirc;ng thường m&agrave; ổi c&ograve;n c&oacute; thể được xem l&agrave; một loại thuốc để chừa bệnh, một nguồn cung cấp chất dinh dưỡng cho cơ thể người. Nhiều bộ phận tr&ecirc;n c&acirc;y ổi đều c&oacute; thể d&ugrave;ng để l&agrave;m nguy&ecirc;n liệu ngăn ngừa v&agrave; chữa bệnh: l&aacute;, quả ch&iacute;n, quả non, hạt,...</p>\r\n\r\n<p><strong><em>Ngăn ngừa ung thư</em></strong></p>\r\n\r\n<p>Qua c&aacute;c nghi&ecirc;n cứu y học cho thấy th&agrave;nh phần chiết xuất từ l&aacute; ổi c&oacute; thể gi&uacute;p ngăn ngừa bệnh ung thư. Hơn nữa, ruột quả ổi cũng chứa chất lypocene cao, t&aacute;c dụng chống ung thư. Folate trong ổi cũng gi&uacute;p ngăn ngừa ung thư dạ d&agrave;y.</p>\r\n\r\n<p><strong><em>Ngăn ngừa t&aacute;o b&oacute;n</em></strong></p>\r\n\r\n<p>Quả ổi c&oacute; chứa nhiều chất xơ n&ecirc;n c&oacute; t&aacute;c dụng ph&ograve;ng ngừa bệnh t&aacute;o b&oacute;n. Hạt của quả ổi cũng c&oacute; t&aacute;c dụng hiệu quả trong việc nhuận tr&agrave;ng v&agrave; l&agrave;m sạch hệ thống đường ruột.</p>\r\n\r\n<p><strong><em>Điều trị bệnh tiểu đường</em></strong></p>\r\n\r\n<p>Nghi&ecirc;n cứu của c&aacute;c nh&agrave; khoa học Ấn Độ cho thấy l&aacute; v&agrave; quả ổi c&oacute; khả năng giảm thiểu lượng đường gluco trong m&aacute;u.</p>\r\n\r\n<p><strong><em>Điều trị bệnh cao huyết &aacute;p</em></strong></p>\r\n\r\n<p>Quả ổi chứa chất hypoglycemic tự nhi&ecirc;n v&agrave; gi&agrave;u chất xơ. Ổi c&oacute; t&aacute;c dụng hạ huyết &aacute;p v&agrave; cholesterol trong m&aacute;u.V&igrave; vậy, ổi rất c&oacute; &iacute;ch đối với những người c&oacute; nguy cơ mắc bệnh tim v&agrave; cao huyết &aacute;p.</p>\r\n\r\n<p><strong><em>Giảm đau, chống vi&ecirc;m</em></strong></p>', '2022-01-11 17:00:00'),
(3, '', 'CÔNG DỤNG ĐÁNG KINH NGẠC TỪ TRÁI ỔI.', 'tintuc1.jpg', '<p>12312321321313213213213231231313</p>', '2022-01-16 17:00:00'),
(4, '', 'CÔNG DỤNG ĐÁNG KINH NGẠC TỪ TRÁI ỔI.', 'tintuc3.jpg', '<p>1231231232132313</p>', '2022-01-02 17:00:00');

--
-- Chỉ mục cho các bảng đã đổ
--

--
-- Chỉ mục cho bảng `adm`
--
ALTER TABLE `adm`
  ADD PRIMARY KEY (`ma_adm`);

--
-- Chỉ mục cho bảng `binh_luan`
--
ALTER TABLE `binh_luan`
  ADD PRIMARY KEY (`ma_binhluan`),
  ADD KEY `binhluan_qua_foreign` (`ma_qua`);

--
-- Chỉ mục cho bảng `chi_tiet_dat_hang`
--
ALTER TABLE `chi_tiet_dat_hang`
  ADD PRIMARY KEY (`ma_qua`,`ma_don_dat_hang`) USING BTREE,
  ADD KEY `ctdh_mddh_foreign` (`ma_don_dat_hang`);

--
-- Chỉ mục cho bảng `don_dat_hang`
--
ALTER TABLE `don_dat_hang`
  ADD PRIMARY KEY (`ma_don_dat_hang`),
  ADD KEY `ddh_mkh_foreign` (`ma_khach_hang`);

--
-- Chỉ mục cho bảng `khachhang`
--
ALTER TABLE `khachhang`
  ADD PRIMARY KEY (`ma_khach_hang`);

--
-- Chỉ mục cho bảng `lien_he`
--
ALTER TABLE `lien_he`
  ADD PRIMARY KEY (`ma_lien_he`),
  ADD KEY `lh_mkh_foreign` (`ma_khach_hang`);

--
-- Chỉ mục cho bảng `loai_qua`
--
ALTER TABLE `loai_qua`
  ADD PRIMARY KEY (`ma_loai`);

--
-- Chỉ mục cho bảng `qua`
--
ALTER TABLE `qua`
  ADD PRIMARY KEY (`ma_qua`),
  ADD KEY `qua_maloai_foreign` (`ma_loai`);

--
-- Chỉ mục cho bảng `tin_tuc`
--
ALTER TABLE `tin_tuc`
  ADD PRIMARY KEY (`ma_tin_tuc`);

--
-- AUTO_INCREMENT cho các bảng đã đổ
--

--
-- AUTO_INCREMENT cho bảng `adm`
--
ALTER TABLE `adm`
  MODIFY `ma_adm` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT cho bảng `binh_luan`
--
ALTER TABLE `binh_luan`
  MODIFY `ma_binhluan` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT cho bảng `don_dat_hang`
--
ALTER TABLE `don_dat_hang`
  MODIFY `ma_don_dat_hang` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT cho bảng `khachhang`
--
ALTER TABLE `khachhang`
  MODIFY `ma_khach_hang` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT cho bảng `lien_he`
--
ALTER TABLE `lien_he`
  MODIFY `ma_lien_he` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT cho bảng `loai_qua`
--
ALTER TABLE `loai_qua`
  MODIFY `ma_loai` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT cho bảng `qua`
--
ALTER TABLE `qua`
  MODIFY `ma_qua` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT cho bảng `tin_tuc`
--
ALTER TABLE `tin_tuc`
  MODIFY `ma_tin_tuc` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- Các ràng buộc cho các bảng đã đổ
--

--
-- Các ràng buộc cho bảng `binh_luan`
--
ALTER TABLE `binh_luan`
  ADD CONSTRAINT `binhluan_qua_foreign` FOREIGN KEY (`ma_qua`) REFERENCES `qua` (`ma_qua`);

--
-- Các ràng buộc cho bảng `chi_tiet_dat_hang`
--
ALTER TABLE `chi_tiet_dat_hang`
  ADD CONSTRAINT `ctdh_ma_qua_foreign` FOREIGN KEY (`ma_qua`) REFERENCES `qua` (`ma_qua`),
  ADD CONSTRAINT `ctdh_mddh_foreign` FOREIGN KEY (`ma_don_dat_hang`) REFERENCES `don_dat_hang` (`ma_don_dat_hang`);

--
-- Các ràng buộc cho bảng `don_dat_hang`
--
ALTER TABLE `don_dat_hang`
  ADD CONSTRAINT `ddh_mkh_foreign` FOREIGN KEY (`ma_khach_hang`) REFERENCES `khachhang` (`ma_khach_hang`);

--
-- Các ràng buộc cho bảng `lien_he`
--
ALTER TABLE `lien_he`
  ADD CONSTRAINT `lh_mkh_foreign` FOREIGN KEY (`ma_khach_hang`) REFERENCES `khachhang` (`ma_khach_hang`);

--
-- Các ràng buộc cho bảng `qua`
--
ALTER TABLE `qua`
  ADD CONSTRAINT `qua_maloai_foreign` FOREIGN KEY (`ma_loai`) REFERENCES `loai_qua` (`ma_loai`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
