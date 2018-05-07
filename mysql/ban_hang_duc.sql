-- phpMyAdmin SQL Dump
-- version 4.6.5.2
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1
-- Thời gian đã tạo: Th5 07, 2018 lúc 07:11 SA
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
(8, 'Khuyến mãi 50%', '<p>Khuyến m&atilde;i 50%</p>', '2531250.jpg', 0, '2018-05-05', '2018-05-06', 1);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `loai_sp`
--

CREATE TABLE `loai_sp` (
  `id_loai_sp` int(11) NOT NULL,
  `ten_loai_sp` varchar(200) NOT NULL,
  `thu_tu` int(11) NOT NULL,
  `tinh_trang` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

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
(1, 'Quân-Áo', 2, 1),
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
(1, 4, 'Quần Short123', 52, 1),
(2, 1, 'Áo Thể thao', 5, 1),
(3, 4, '123', 5, 1),
(14, 2, 'Giày thể thao', 0, 1);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `san_pham`
--

CREATE TABLE `san_pham` (
  `id_san_pham` int(11) NOT NULL,
  `ma_san_pham` varchar(200) NOT NULL,
  `ten_san_pham` varchar(500) NOT NULL,
  `chi_tiet_san_pham` text NOT NULL,
  `hinh_anh_tieu_de` int(11) NOT NULL,
  `hinh_anh_sp` int(11) NOT NULL,
  `gia_de_xuat` int(11) NOT NULL,
  `gia_ban` int(11) NOT NULL,
  `so_luong` int(11) NOT NULL,
  `thu_tu` int(11) NOT NULL,
  `tinh_trang` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

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
(1, 'Tommy123', 1, 0),
(2, 'Gucci', 6, 1),
(3, 'Tommy', 0, 0);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `tin_tuc`
--

CREATE TABLE `tin_tuc` (
  `id_tin_tuc` int(11) NOT NULL,
  `tieu_de` varchar(200) NOT NULL,
  `hinh_anh` varchar(500) NOT NULL,
  `noi_dung` text NOT NULL,
  `thoi_gian_dang` date NOT NULL,
  `tinh_trang` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

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
-- Chỉ mục cho bảng `khuyen_mai`
--
ALTER TABLE `khuyen_mai`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `loai_sp`
--
ALTER TABLE `loai_sp`
  ADD PRIMARY KEY (`id_loai_sp`);

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
-- AUTO_INCREMENT cho bảng `khuyen_mai`
--
ALTER TABLE `khuyen_mai`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
--
-- AUTO_INCREMENT cho bảng `loai_sp`
--
ALTER TABLE `loai_sp`
  MODIFY `id_loai_sp` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT cho bảng `phan_loai_lon`
--
ALTER TABLE `phan_loai_lon`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
--
-- AUTO_INCREMENT cho bảng `phan_loai_nho`
--
ALTER TABLE `phan_loai_nho`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;
--
-- AUTO_INCREMENT cho bảng `thuong_hieu`
--
ALTER TABLE `thuong_hieu`
  MODIFY `id_thuong_hieu` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
--
-- AUTO_INCREMENT cho bảng `tin_tuc`
--
ALTER TABLE `tin_tuc`
  MODIFY `id_tin_tuc` int(11) NOT NULL AUTO_INCREMENT;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
