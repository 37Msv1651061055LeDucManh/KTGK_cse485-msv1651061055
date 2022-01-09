-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1
-- Thời gian đã tạo: Th1 09, 2022 lúc 05:17 AM
-- Phiên bản máy phục vụ: 10.4.20-MariaDB
-- Phiên bản PHP: 7.3.29

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Cơ sở dữ liệu: `1651061055_libraries`
--

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `thanhvien`
--

CREATE TABLE `thanhvien` (
  `madg` int(11) NOT NULL,
  `hovaten` varchar(255) NOT NULL,
  `gioitinh` varchar(255) NOT NULL,
  `namsinh` varchar(255) NOT NULL,
  `nghenghiep` varchar(255) NOT NULL,
  `ngaycapthe` varchar(255) NOT NULL,
  `ngayhethan` varchar(255) NOT NULL,
  `diachi` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `thanhvien`
--

INSERT INTO `thanhvien` (`madg`, `hovaten`, `gioitinh`, `namsinh`, `nghenghiep`, `ngaycapthe`, `ngayhethan`, `diachi`) VALUES
(1, 'Nguyễn Văn A', 'Nam', '1997', 'Giáo Viên', '22/12/2021', '1997', 'Hà Nội'),
(2, 'Nguyễn Văn B', 'Nam', '1998', 'bác sĩ', '22/12/2021', '1997', 'Hà Nội'),
(3, 'Nguyễn Thị Quỳnh', 'Nữ', '2000', 'Giáo Viên', '22/12/2021', '1997', 'Hà Nội'),
(4, 'Nguyễn Văn Hùng', 'Nam', '1981', 'Nông Dân', '22/12/2021', '2000', 'Hải Phòng'),
(5, 'Nguyễn Văn Thắng', 'Nam', '1932', 'Nông Dân', '22/12/2021', '1995', 'Thanh Hóa'),
(6, 'Nguyễn Văn A', 'Nam', '1997', 'Giáo Viên', '22/12/2021', '1997', 'Hà Nội');

--
-- Chỉ mục cho các bảng đã đổ
--

--
-- Chỉ mục cho bảng `thanhvien`
--
ALTER TABLE `thanhvien`
  ADD PRIMARY KEY (`madg`);

--
-- AUTO_INCREMENT cho các bảng đã đổ
--

--
-- AUTO_INCREMENT cho bảng `thanhvien`
--
ALTER TABLE `thanhvien`
  MODIFY `madg` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
