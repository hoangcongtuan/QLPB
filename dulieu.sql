-- phpMyAdmin SQL Dump
-- version 4.8.0.1
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1
-- Thời gian đã tạo: Th12 13, 2018 lúc 08:55 AM
-- Phiên bản máy phục vụ: 10.1.32-MariaDB
-- Phiên bản PHP: 7.2.5

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Cơ sở dữ liệu: `dulieu`
--

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `nhan_vien`
--

CREATE TABLE `nhan_vien` (
  `Id_NV` int(11) NOT NULL,
  `Hoten` varchar(150) COLLATE utf8_bin NOT NULL,
  `Id_PB` int(11) NOT NULL,
  `Diachi` varchar(255) COLLATE utf8_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Đang đổ dữ liệu cho bảng `nhan_vien`
--

INSERT INTO `nhan_vien` (`Id_NV`, `Hoten`, `Id_PB`, `Diachi`) VALUES
(1, 'Nguyễn Văn Đức', 2, 'Đà Nẵng'),
(2, 'Nguyễn Văn Biển', 3, 'Hà Tĩnh'),
(4, 'Nguyễn Đức Vũ', 2, 'Hà Tĩnh'),
(6, 'Trịnh Quốc Khánh', 1, 'Hà Tĩnh'),
(7, 'Nguyễn Quang Hải', 3, 'Hà Nội'),
(8, 'Lương Xuân Trường', 4, 'Thái Bình'),
(9, 'Nguyễn Công Phượng', 5, 'Nghệ An');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `phong_ban`
--

CREATE TABLE `phong_ban` (
  `Id_PB` int(11) NOT NULL,
  `Tenpb` varchar(150) COLLATE utf8_bin NOT NULL,
  `mota` varchar(150) COLLATE utf8_bin NOT NULL,
  `Time` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Đang đổ dữ liệu cho bảng `phong_ban`
--

INSERT INTO `phong_ban` (`Id_PB`, `Tenpb`, `mota`, `Time`) VALUES
(1, 'Phòng tài chính', 'Giải quyết các vấn đề về học phí', '2018-12-15 06:11:00'),
(2, 'Phòng đào tạo', 'Các vấn đề về học tập, đăng ký tín chỉ', '2018-12-14 07:17:00'),
(3, 'Phòng công tác SV', 'Các vấn đề khác (giấy tờ, thủ tục)', '2018-12-13 07:11:00'),
(4, 'Phòng nhân sự', 'tiếp nhận nhân sự, ban cán sự, thêm nhân viên, phỏng vấn', '2018-12-16 02:14:00'),
(5, 'Phòng kế toán', 'kiểm toán, kiểm soát hồ sơ, giấy tờ.', '2018-12-13 00:43:12');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `username` varchar(150) COLLATE utf8_bin NOT NULL,
  `password` varchar(150) COLLATE utf8_bin NOT NULL,
  `fullname` varchar(150) COLLATE utf8_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Đang đổ dữ liệu cho bảng `users`
--

INSERT INTO `users` (`id`, `username`, `password`, `fullname`) VALUES
(1, 'admin', '827ccb0eea8a706c4c34a16891f84e7b', 'Đức Vũ'),
(2, 'ducvu', '827ccb0eea8a706c4c34a16891f84e7b', 'Nguyễn Đức Vũ Thu Mai');

--
-- Chỉ mục cho các bảng đã đổ
--

--
-- Chỉ mục cho bảng `nhan_vien`
--
ALTER TABLE `nhan_vien`
  ADD PRIMARY KEY (`Id_NV`);

--
-- Chỉ mục cho bảng `phong_ban`
--
ALTER TABLE `phong_ban`
  ADD PRIMARY KEY (`Id_PB`);

--
-- Chỉ mục cho bảng `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT cho các bảng đã đổ
--

--
-- AUTO_INCREMENT cho bảng `nhan_vien`
--
ALTER TABLE `nhan_vien`
  MODIFY `Id_NV` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT cho bảng `phong_ban`
--
ALTER TABLE `phong_ban`
  MODIFY `Id_PB` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT cho bảng `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
