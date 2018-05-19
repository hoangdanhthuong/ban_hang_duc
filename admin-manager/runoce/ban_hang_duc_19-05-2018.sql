-- phpMyAdmin SQL Dump
-- version 4.6.5.2
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1
-- Thời gian đã tạo: Th5 19, 2018 lúc 03:36 SA
-- Phiên bản máy phục vụ: 10.1.21-MariaDB
-- Phiên bản PHP: 5.6.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Cơ sở dữ liệu: `ban_hang_duc`
--

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `admin`
--

CREATE TABLE `admin` (
  `id_admin` int(11) NOT NULL,
  `username` varchar(60) NOT NULL,
  `password` varchar(60) NOT NULL,
  `email` varchar(60) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Đang đổ dữ liệu cho bảng `admin`
--

INSERT INTO `admin` (`id_admin`, `username`, `password`, `email`) VALUES
(1, 'admin', 'admin', 'admin@gmail.com');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `bai_viet_san_pham`
--

CREATE TABLE `bai_viet_san_pham` (
  `id` int(11) NOT NULL,
  `id_san_pham` int(11) NOT NULL,
  `noi_dung` text NOT NULL,
  `hinh_anh` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `binh_luan`
--

CREATE TABLE `binh_luan` (
  `id` int(11) NOT NULL,
  `noi_dung` varchar(500) NOT NULL,
  `id_san_pham` int(11) NOT NULL,
  `ten_dang_nhap` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Đang đổ dữ liệu cho bảng `binh_luan`
--

INSERT INTO `binh_luan` (`id`, `noi_dung`, `id_san_pham`, `ten_dang_nhap`) VALUES
(10, 'Đẹp quá', 1, 'ducdeptrai'),
(11, 'Quá đẹp', 1, 'ducdeptrai');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `chi_tiet_don_hang`
--

CREATE TABLE `chi_tiet_don_hang` (
  `id` int(11) NOT NULL,
  `id_don_hang` int(11) NOT NULL,
  `id_san_pham` int(11) NOT NULL,
  `so_luong` int(11) NOT NULL,
  `don_gia` int(11) NOT NULL,
  `thanh_tien` int(11) NOT NULL,
  `tinh_trang` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 ROW_FORMAT=COMPACT;

--
-- Đang đổ dữ liệu cho bảng `chi_tiet_don_hang`
--

INSERT INTO `chi_tiet_don_hang` (`id`, `id_don_hang`, `id_san_pham`, `so_luong`, `don_gia`, `thanh_tien`, `tinh_trang`) VALUES
(1, 1, 1, 1, 400000, 400000, 1),
(2, 1, 3, 1, 120000, 120000, 1),
(3, 1, 4, 1, 100000, 100000, 1);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `don_hang`
--

CREATE TABLE `don_hang` (
  `id` int(11) NOT NULL,
  `ten_dang_nhap` varchar(255) NOT NULL,
  `thoi_gian_mua` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `tongtien` int(11) NOT NULL,
  `dia_chi` varchar(500) NOT NULL,
  `tong_sp` int(11) NOT NULL,
  `tinh_trang` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 ROW_FORMAT=COMPACT;

--
-- Đang đổ dữ liệu cho bảng `don_hang`
--

INSERT INTO `don_hang` (`id`, `ten_dang_nhap`, `thoi_gian_mua`, `tongtien`, `dia_chi`, `tong_sp`, `tinh_trang`) VALUES
(1, 'ducdeptrai', '2018-05-19 01:33:59', 620000, 'Xã Hưng Long, huyện Hưng Nguyên, Nghệ An', 3, 1);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `hinhanhsp`
--

CREATE TABLE `hinhanhsp` (
  `id` int(11) NOT NULL,
  `hinh_anh` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `khuyen_mai`
--

CREATE TABLE `khuyen_mai` (
  `id` int(11) NOT NULL,
  `tieu_de` varchar(200) NOT NULL,
  `noi_dung` text NOT NULL,
  `hinh_anh` varchar(500) NOT NULL,
  `thu_tu` int(11) NOT NULL,
  `thoi_gian_bat_dau` date NOT NULL,
  `thoi_gian_ket_thuc` date NOT NULL,
  `tinh_trang` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Đang đổ dữ liệu cho bảng `khuyen_mai`
--

INSERT INTO `khuyen_mai` (`id`, `tieu_de`, `noi_dung`, `hinh_anh`, `thu_tu`, `thoi_gian_bat_dau`, `thoi_gian_ket_thuc`, `tinh_trang`) VALUES
(1, 'Khuyến mại 50%123', '<p>Khuyến mại cho kh&aacute;ch h&agrave;ng th&acirc;n thiết123</p>', '1123657.jpg', 0, '2018-01-06', '2018-03-12', 1),
(2, 'Khuyến mại cho khách hàng thân thiết', '<p>Khuyến mại 50%</p>', '1173095.jpg', 0, '1970-01-01', '1970-01-01', 1),
(3, 'Khuyến mãi', '<p>Khuyến m&atilde;i</p>', '1551513.jpg', 2, '1970-01-01', '1970-01-01', 1),
(4, 'Khuyến mãi 50%', '<p>Khuyến m&atilde;i 50%</p>', '2486816.jpg', 5, '1970-01-01', '1970-01-01', 1),
(5, 'cvsvdv', '<p>vdsd</p>', '1749389.jpg', 0, '1970-01-01', '1970-01-01', 0),
(8, 'Khuyến mãi 50%', '<p>Khuyến m&atilde;i 50%</p>', '2531250.jpg', 0, '2018-05-05', '2018-05-06', 1),
(9, 'sdfsdf', '<p>sdfffff</p>', '3470093.jpg', 1, '2018-05-11', '2018-05-11', 1),
(10, 'Công Vinh thất thủ tại thành phố Hồ Chí Minh', '<p>22-05-2015</p>\r\n<p>C&ocirc;ng Vinh Thất thủ trước đội nh&agrave; . Ra đi trong hai b&agrave;n tay trắng</p>', '1401733.jpg', 0, '2018-05-16', '2018-05-16', 1);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `nhan_ma_giam`
--

CREATE TABLE `nhan_ma_giam` (
  `id` int(11) NOT NULL,
  `email` varchar(255) NOT NULL,
  `ma_giam` varchar(255) NOT NULL,
  `gia_giam` int(11) NOT NULL,
  `tinh_trang` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Đang đổ dữ liệu cho bảng `nhan_ma_giam`
--

INSERT INTO `nhan_ma_giam` (`id`, `email`, `ma_giam`, `gia_giam`, `tinh_trang`) VALUES
(3, 'duc1321651@gmail.com', '', 0, 0),
(4, 'duc1321651@gmail.com', '', 0, 0),
(5, 'thuonggacon95@gmail.com', '', 0, 0);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `phan_loai_lon`
--

CREATE TABLE `phan_loai_lon` (
  `id` int(11) NOT NULL,
  `ten` varchar(255) NOT NULL,
  `thu_tu` int(11) NOT NULL,
  `tinh_trang` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Đang đổ dữ liệu cho bảng `phan_loai_lon`
--

INSERT INTO `phan_loai_lon` (`id`, `ten`, `thu_tu`, `tinh_trang`) VALUES
(1, 'Quần áo thể thao', 2, 1),
(2, 'Giày', 2, 1),
(4, 'Dụng - cụ', 3, 1);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `phan_loai_nho`
--

CREATE TABLE `phan_loai_nho` (
  `id` int(11) NOT NULL,
  `id_phan_loai_lon` int(11) NOT NULL,
  `ten` varchar(255) NOT NULL,
  `thu_tu` int(11) NOT NULL,
  `tinh_trang` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Đang đổ dữ liệu cho bảng `phan_loai_nho`
--

INSERT INTO `phan_loai_nho` (`id`, `id_phan_loai_lon`, `ten`, `thu_tu`, `tinh_trang`) VALUES
(1, 1, 'Quần thể thao ống dài', 2, 1),
(2, 1, 'Áo Thể thao', 5, 1),
(3, 4, 'Vợt cầu lông', 5, 1),
(14, 2, 'Giày thể thao', 0, 1),
(15, 4, 'Máy tập gym', 2, 1);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `san_pham`
--

CREATE TABLE `san_pham` (
  `id_san_pham` int(11) NOT NULL,
  `ma_san_pham` varchar(200) NOT NULL,
  `ten_san_pham` varchar(500) NOT NULL,
  `tieu_de` varchar(500) NOT NULL,
  `chi_tiet_san_pham` text NOT NULL,
  `hinh_anh_tieu_de` varchar(500) NOT NULL,
  `hinh_anh_sp` varchar(500) NOT NULL,
  `gia_de_xuat` int(11) NOT NULL,
  `gia_ban` int(11) NOT NULL,
  `so_luong` int(11) NOT NULL,
  `id_loai_sp` int(11) NOT NULL,
  `id_hieu_sp` int(11) NOT NULL,
  `thu_tu` int(11) NOT NULL,
  `kich_thuoc` varchar(255) NOT NULL,
  `tinh_trang` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Đang đổ dữ liệu cho bảng `san_pham`
--

INSERT INTO `san_pham` (`id_san_pham`, `ma_san_pham`, `ten_san_pham`, `tieu_de`, `chi_tiet_san_pham`, `hinh_anh_tieu_de`, `hinh_anh_sp`, `gia_de_xuat`, `gia_ban`, `so_luong`, `id_loai_sp`, `id_hieu_sp`, `thu_tu`, `kich_thuoc`, `tinh_trang`) VALUES
(1, 'Quần thể thao', 'Quần ống dài thoáng mát', '123456aa', '<p>Quần ph&ugrave; hợp với mọi lứa tu&ocirc;i</p>\r\n<p>+ Full size</p>\r\n<p>+ Kh&ocirc;ng phụ thuộc v&agrave;o người</p>\r\n<p>&nbsp;</p>', '2018-05-122391143.jpg', '2018-05-127384705.jpg:2018-05-123104706.jpg:2018-05-125569214.jpg:2018-05-123497467.jpg', 500000, 400000, 250, 1, 3, 0, 'M XL XXL', 1),
(3, 'AO_THE_THAO_002', 'ĐỒ ĐÁ BANH ', 'Áo đá banh đội tuyển Việt Nam', '<p>hjhgjhj</p>', '2018-05-114043701.jpg', '2018-05-112895386.jpg:2018-05-114166504.jpg:2018-05-114405884.jpg', 105000, 120000, 0, 2, 1, 1, 'M XS', 1),
(4, 'Q_CI_00215', 'Quần đẹp nhất', 'Loại quần vừa đẹp vừa rẻ vừa mát', '<h4><strong>Đặc điểm nổi bật mẫu &aacute;o b&oacute;ng đa của ĐỨC SPORT cung cấp</strong></h4>\r\n<p>Thoải m&aacute;i trong hoạt động</p>\r\n<p>Bộ đồ thể thao ĐỨC SPORT được may từ chất liệu thun cotton co gi&atilde;n tốt, tạo điều kiện để bạn c&oacute; thể v&ocirc; tư trong mọi tư thế kh&aacute;c nhau khi chơi thể thao.</p>\r\n<p>&nbsp;</p>\r\n<p>Khả năng thấm h&uacute;t tốt, kh&ocirc; tho&aacute;ng khi mặc.</p>', '2018-05-124761444.jpg', '2018-05-123903686.jpg:2018-05-128704987.jpg:2018-05-125406067.jpg:2018-05-123995697.jpg:2018-05-121999755.jpg', 800000, 100000, 0, 2, 2, 0, 'L XL', 1),
(5, 'AO-TT-002', 'Áo thể thao', 'Áo mặc đẹp', '<ul style=\"font-family: Tahoma, Geneva, sans-serif; font-size: 12px;\">\r\n<li>\r\n<h4>Vải thun lạnh tho&aacute;ng m&aacute;t, thấm h&uacute;t mồ h&ocirc;i</h4>\r\n</li>\r\n<li>\r\n<h4>Logo được th&ecirc;u sắc n&eacute;t, chất lượng cao</h4>\r\n</li>\r\n<li>\r\n<h4>Phom &aacute;o đẹp, đủ size S, M, L, XL</h4>\r\n</li>\r\n</ul>', '2018-05-162948700.jpg', '2018-05-165439575.jpg:2018-05-161741851.jpg:2018-05-163549377.jpg:2018-05-165241547.jpg', 250000, 150000, 1, 2, 5, 0, 'M XL XXL', 1),
(6, 'MAY_01', 'Máy tập Gym', 'Máy tập Gym nhập khẩu', '<h2 style=\"box-sizing: border-box; font-size: 17px; font-family: Arial, Helvetica, sans-serif;\"><span style=\"box-sizing: border-box; font-size: 16px;\">Sản phẩm m&aacute;y tập cơ bụng Fitness</span></h2>\r\n<h3 style=\"box-sizing: border-box; font-size: 15px; font-family: Arial, Helvetica, sans-serif;\">1. Th&ocirc;ng tin m&aacute;y tập cơ bụng Fitness</h3>\r\n<p style=\"box-sizing: border-box; font-family: Arial, Helvetica, sans-serif; font-size: 13.4px;\">- M&atilde; sản phẩm: Fitness.</p>\r\n<p style=\"box-sizing: border-box; font-family: Arial, Helvetica, sans-serif; font-size: 13.4px;\">- Xuất xứ: Trung Quốc.</p>\r\n<p style=\"box-sizing: border-box; font-family: Arial, Helvetica, sans-serif; font-size: 13.4px;\">-&nbsp;<strong style=\"box-sizing: border-box;\">M&aacute;y tập cơ bụng Fitness</strong>&nbsp;được thiết kế chắc chắn từ khung th&eacute;p d&agrave;y sơn tĩnh điện, cao su, xốp, nhựa v&agrave; l&ograve; xo.</p>\r\n<p style=\"box-sizing: border-box; font-family: Arial, Helvetica, sans-serif; font-size: 13.4px;\">- Diện t&iacute;ch sử dụng sản phẩm: 72 x 74 x 55 cm.</p>\r\n<p style=\"box-sizing: border-box; font-family: Arial, Helvetica, sans-serif; font-size: 13.4px;\">- M&aacute;y tập bụng Fitness hỗ trợ c&aacute;c b&agrave;i tập d&agrave;nh cho v&ugrave;ng tay, ch&acirc;n, ngực, vai, bụng, h&ocirc;ng v&agrave; eo hiệu quả.</p>\r\n<p style=\"box-sizing: border-box; font-family: Arial, Helvetica, sans-serif; font-size: 13.4px;\">- Bộ sản phẩm m&aacute;y tập bụng bao gồm:</p>\r\n<p style=\"box-sizing: border-box; font-family: Arial, Helvetica, sans-serif; font-size: 13.4px;\">+ 01 m&aacute;y tập bụng.</p>\r\n<p style=\"box-sizing: border-box; font-family: Arial, Helvetica, sans-serif; font-size: 13.4px;\">+ 01 đĩa VCD hướng dẫn tập.</p>\r\n<p style=\"box-sizing: border-box; font-family: Arial, Helvetica, sans-serif; font-size: 13.4px;\">+ 01 đồng hồ đếm thời gian, lượng calo ti&ecirc;u thụ, đếm số lần v&agrave; vận tốc ngả lưng.</p>\r\n<p style=\"box-sizing: border-box; font-family: Arial, Helvetica, sans-serif; font-size: 13.4px;\">- Bảo h&agrave;nh: 6 th&aacute;ng.</p>\r\n<p style=\"box-sizing: border-box; font-family: Arial, Helvetica, sans-serif; font-size: 13.4px;\">- Gi&aacute; b&aacute;n: 870.000 đ.</p>\r\n<h4 style=\"box-sizing: border-box; font-family: Arial, Helvetica, sans-serif;\">Đặc điểm nổi bật của m&aacute;y tập cơ bụng Fitness.</h4>', '2018-05-163922363.jpg', '2018-05-165678253.jpg:2018-05-165679626.jpg:2018-05-166251190.jpg:2018-05-166536011.jpg:2018-05-169878327.jpg:2018-05-169550110.jpg', 1500000, 1250000, 1, 15, 5, 2, '', 1),
(7, 'GIAY-0023', 'Giày thể thao tập gym', 'Giày đi siêu nhẹ siêu thoáng mát', '<p>Gi&agrave;y Si&ecirc;u Nhẹ</p>\r\n<p>+ Ph&ugrave; hợp với mọi lứa tuổi</p>\r\n<p>+ Đi tốt trong mọi địa h&igrave;nh</p>\r\n<p>+ Đi &ecirc;m ch&acirc;n</p>\r\n<p>+ Kh&ocirc;ng ảnh hưởng cho da</p>', '2018-05-166325073.jpg', '2018-05-164886139.jpg:2018-05-165401672.jpg:2018-05-165766693.jpg:2018-05-168288330.jpg:2018-05-161193634.jpg', 120000, 110000, 260, 14, 4, 3, '39 40 41 43', 1),
(8, 'DSFAS', 'AFA', 'asdfas', '<p>ASDFA</p>', '2018-05-177459412.jpg', '2018-05-178997773.jpg:2018-05-176663452.jpg:2018-05-173519439.jpg:2018-05-177181458.jpg:2018-05-178513275.jpg:2018-05-178415772.jpg:2018-05-173834747.jpg:2018-05-171612487.jpg:2018-05-177308075.jpg:2018-05-173611450.jpg', 255005, 20000, 1, 1, 1, 12, 'X', 1);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `thanh_vien`
--

CREATE TABLE `thanh_vien` (
  `id` int(11) NOT NULL,
  `ten_dang_nhap` varchar(255) NOT NULL,
  `mat_khau` varchar(255) NOT NULL,
  `ho_ten` varchar(255) NOT NULL,
  `dia_chi` varchar(500) NOT NULL,
  `dien_thoai` varchar(15) NOT NULL,
  `email` varchar(255) NOT NULL,
  `tinh_trang` int(11) NOT NULL DEFAULT '1'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Đang đổ dữ liệu cho bảng `thanh_vien`
--

INSERT INTO `thanh_vien` (`id`, `ten_dang_nhap`, `mat_khau`, `ho_ten`, `dia_chi`, `dien_thoai`, `email`, `tinh_trang`) VALUES
(1, 'buiduc', '12345', 'Bùi Đình Đức', 'Vinh - Nghệ An', '03216516516', 'duc@gmail.com', 1),
(2, 'duc123', '12345', 'asdfasdf', 'adfasdf', '13514605165', 'adfafdsaf@gmail.com', 1),
(3, 'ducdexom', '12345', 'Đức dê xồm', 'Hưng nguyên, Nghệ An', '01234567899', 'ducdexom@gmail.com', 1),
(4, 'ducdeptrai', '12345', 'Bùi như Lạc', 'Xã Hưng Long, huyện Hưng Nguyên, Nghệ An', '02165165', 'lactroi@gmail.com', 1);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `thuong_hieu`
--

CREATE TABLE `thuong_hieu` (
  `id_thuong_hieu` int(11) NOT NULL,
  `ten_thuong_hieu` varchar(200) NOT NULL,
  `thu_tu` int(11) NOT NULL,
  `tinh_trang` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Đang đổ dữ liệu cho bảng `thuong_hieu`
--

INSERT INTO `thuong_hieu` (`id_thuong_hieu`, `ten_thuong_hieu`, `thu_tu`, `tinh_trang`) VALUES
(1, 'Tommy123', 1, 1),
(2, 'Gucci', 6, 1),
(3, 'Tommy', 0, 1),
(4, 'Nike', 3, 1),
(5, 'GESS', 2, 1),
(6, 'DUNLOP', 5, 1),
(7, 'Động lực', 6, 1);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `tin_tuc`
--

CREATE TABLE `tin_tuc` (
  `id_tin_tuc` int(11) NOT NULL,
  `tieu_de` varchar(200) NOT NULL,
  `hinh_anh` varchar(500) NOT NULL,
  `noi_dung` text NOT NULL,
  `thoi_gian_dang` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `tinh_trang` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Đang đổ dữ liệu cho bảng `tin_tuc`
--

INSERT INTO `tin_tuc` (`id_tin_tuc`, `tieu_de`, `hinh_anh`, `noi_dung`, `thoi_gian_dang`, `tinh_trang`) VALUES
(1, 'Công Vinh thất thủ tại thành phố Hồ Chí Minh', '4108399.jpg', '<p>22-05-2015&nbsp;</p>\r\n<p>C&ocirc;ng Vinh thất thủ trước đội nh&agrave;.</p>\r\n<p>Rời khỏi th&agrave;nh phố với hai b&agrave;n tay trắng</p>', '2018-05-16 09:11:21', 1),
(2, 'Chealse vô địch WolrdCup', '1865112.jpg', '<p>Chealse đ&atilde; đạt th&agrave;nh t&iacute;ch tốt trong m&agrave;u giải vừa qua.</p>', '2018-05-16 09:21:02', 1);

--
-- Chỉ mục cho các bảng đã đổ
--

--
-- Chỉ mục cho bảng `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id_admin`);

--
-- Chỉ mục cho bảng `bai_viet_san_pham`
--
ALTER TABLE `bai_viet_san_pham`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `binh_luan`
--
ALTER TABLE `binh_luan`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `chi_tiet_don_hang`
--
ALTER TABLE `chi_tiet_don_hang`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `don_hang`
--
ALTER TABLE `don_hang`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `hinhanhsp`
--
ALTER TABLE `hinhanhsp`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `khuyen_mai`
--
ALTER TABLE `khuyen_mai`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `nhan_ma_giam`
--
ALTER TABLE `nhan_ma_giam`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `phan_loai_lon`
--
ALTER TABLE `phan_loai_lon`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `phan_loai_nho`
--
ALTER TABLE `phan_loai_nho`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `san_pham`
--
ALTER TABLE `san_pham`
  ADD PRIMARY KEY (`id_san_pham`);

--
-- Chỉ mục cho bảng `thanh_vien`
--
ALTER TABLE `thanh_vien`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `thuong_hieu`
--
ALTER TABLE `thuong_hieu`
  ADD PRIMARY KEY (`id_thuong_hieu`);

--
-- Chỉ mục cho bảng `tin_tuc`
--
ALTER TABLE `tin_tuc`
  ADD PRIMARY KEY (`id_tin_tuc`);

--
-- AUTO_INCREMENT cho các bảng đã đổ
--

--
-- AUTO_INCREMENT cho bảng `admin`
--
ALTER TABLE `admin`
  MODIFY `id_admin` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT cho bảng `bai_viet_san_pham`
--
ALTER TABLE `bai_viet_san_pham`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT cho bảng `binh_luan`
--
ALTER TABLE `binh_luan`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
--
-- AUTO_INCREMENT cho bảng `chi_tiet_don_hang`
--
ALTER TABLE `chi_tiet_don_hang`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT cho bảng `don_hang`
--
ALTER TABLE `don_hang`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT cho bảng `hinhanhsp`
--
ALTER TABLE `hinhanhsp`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT cho bảng `khuyen_mai`
--
ALTER TABLE `khuyen_mai`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
--
-- AUTO_INCREMENT cho bảng `nhan_ma_giam`
--
ALTER TABLE `nhan_ma_giam`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT cho bảng `phan_loai_lon`
--
ALTER TABLE `phan_loai_lon`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT cho bảng `phan_loai_nho`
--
ALTER TABLE `phan_loai_nho`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;
--
-- AUTO_INCREMENT cho bảng `san_pham`
--
ALTER TABLE `san_pham`
  MODIFY `id_san_pham` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
--
-- AUTO_INCREMENT cho bảng `thanh_vien`
--
ALTER TABLE `thanh_vien`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT cho bảng `thuong_hieu`
--
ALTER TABLE `thuong_hieu`
  MODIFY `id_thuong_hieu` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
--
-- AUTO_INCREMENT cho bảng `tin_tuc`
--
ALTER TABLE `tin_tuc`
  MODIFY `id_tin_tuc` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
