-- phpMyAdmin SQL Dump
-- version 4.6.5.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 03, 2018 at 04:56 PM
-- Server version: 10.1.21-MariaDB
-- PHP Version: 5.6.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `ban_hang_duc`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id_admin` int(11) NOT NULL,
  `username` varchar(60) NOT NULL,
  `password` varchar(60) NOT NULL,
  `email` varchar(60) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id_admin`, `username`, `password`, `email`) VALUES
(1, 'admin', 'admin', 'admin@gmail.com');

-- --------------------------------------------------------

--
-- Table structure for table `khuyen_mai`
--

CREATE TABLE `khuyen_mai` (
  `id_khuyen_mai` int(11) NOT NULL,
  `tieu_de` varchar(200) NOT NULL,
  `noi_dung` text NOT NULL,
  `hinh_anh` varchar(500) NOT NULL,
  `thu_tu` int(11) NOT NULL,
  `thoi_gian_bat_dau` date NOT NULL,
  `thoi_gian_ket_thuc` date NOT NULL,
  `tinh_trang` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `loai_sp`
--

CREATE TABLE `loai_sp` (
  `id_loai_sp` int(11) NOT NULL,
  `ten_loai_sp` varchar(200) NOT NULL,
  `thu_tu` int(11) NOT NULL,
  `tinh_trang` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `san_pham`
--

CREATE TABLE `san_pham` (
  `id_san_pham` int(11) NOT NULL,
  `ma_san_pham` varchar(200) NOT NULL,
  `ten_san_pham` int(11) NOT NULL,
  `hinh_anh_tieu_de` int(11) NOT NULL,
  `hinh_anh_sp` int(11) NOT NULL,
  `gia_de_xuat` int(11) NOT NULL,
  `gia_ban` int(11) NOT NULL,
  `so_luong` int(11) NOT NULL,
  `tinh_trang` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `thuong_hieu`
--

CREATE TABLE `thuong_hieu` (
  `id_thuong_hieu` int(11) NOT NULL,
  `ten_thuong_hieu` varchar(200) NOT NULL,
  `thu_tu` int(11) NOT NULL,
  `tinh_trang` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `tin_tuc`
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
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id_admin`);

--
-- Indexes for table `khuyen_mai`
--
ALTER TABLE `khuyen_mai`
  ADD PRIMARY KEY (`id_khuyen_mai`);

--
-- Indexes for table `loai_sp`
--
ALTER TABLE `loai_sp`
  ADD PRIMARY KEY (`id_loai_sp`);

--
-- Indexes for table `san_pham`
--
ALTER TABLE `san_pham`
  ADD PRIMARY KEY (`id_san_pham`);

--
-- Indexes for table `thuong_hieu`
--
ALTER TABLE `thuong_hieu`
  ADD PRIMARY KEY (`id_thuong_hieu`);

--
-- Indexes for table `tin_tuc`
--
ALTER TABLE `tin_tuc`
  ADD PRIMARY KEY (`id_tin_tuc`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id_admin` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `khuyen_mai`
--
ALTER TABLE `khuyen_mai`
  MODIFY `id_khuyen_mai` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `loai_sp`
--
ALTER TABLE `loai_sp`
  MODIFY `id_loai_sp` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `thuong_hieu`
--
ALTER TABLE `thuong_hieu`
  MODIFY `id_thuong_hieu` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `tin_tuc`
--
ALTER TABLE `tin_tuc`
  MODIFY `id_tin_tuc` int(11) NOT NULL AUTO_INCREMENT;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
