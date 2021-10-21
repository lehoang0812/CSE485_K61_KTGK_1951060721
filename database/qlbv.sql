-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1
-- Thời gian đã tạo: Th10 21, 2021 lúc 10:10 AM
-- Phiên bản máy phục vụ: 10.4.21-MariaDB
-- Phiên bản PHP: 8.0.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Cơ sở dữ liệu: `qlbv`
--

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `patient`
--

CREATE TABLE `patient` (
  `patientid` int(50) NOT NULL,
  `firstname` varchar(50) DEFAULT NULL,
  `lastname` varchar(50) DEFAULT NULL,
  `dateofbirth` date DEFAULT NULL,
  `gender` varchar(3) DEFAULT NULL,
  `mobile` varchar(13) DEFAULT NULL,
  `email` varchar(50) DEFAULT NULL,
  `height` int(11) DEFAULT NULL,
  `weight` int(11) DEFAULT NULL,
  `blood_type` varchar(5) DEFAULT NULL,
  `created_on` date DEFAULT NULL,
  `modified_on` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `patient`
--

INSERT INTO `patient` (`patientid`, `firstname`, `lastname`, `dateofbirth`, `gender`, `mobile`, `email`, `height`, `weight`, `blood_type`, `created_on`, `modified_on`) VALUES
(1, 'Huang', 'Nguyễn', '2001-12-08', 'Nam', '0123465479', 'hoangn@gmail.com', 173, 56, 'AB', '2021-10-20', '2021-10-21'),
(3, 'Ther', 'Huang', '2001-06-27', 'Nữ', '068546320', 'Weedflyhigh@gmail.com', 160, 65, 'O', '2021-10-20', '2021-10-21'),
(4, 'Vinh', 'Lợn', '2001-06-08', 'Nữ', '0498218632', 'Vinhngu@gmail.com', 180, 54, 'B', '2020-06-02', '2021-10-21');

--
-- Chỉ mục cho các bảng đã đổ
--

--
-- Chỉ mục cho bảng `patient`
--
ALTER TABLE `patient`
  ADD PRIMARY KEY (`patientid`);

--
-- AUTO_INCREMENT cho các bảng đã đổ
--

--
-- AUTO_INCREMENT cho bảng `patient`
--
ALTER TABLE `patient`
  MODIFY `patientid` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
