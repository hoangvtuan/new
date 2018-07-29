-- phpMyAdmin SQL Dump
-- version 4.8.0
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1
-- Thời gian đã tạo: Th7 28, 2018 lúc 03:37 PM
-- Phiên bản máy phục vụ: 10.1.31-MariaDB
-- Phiên bản PHP: 7.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Cơ sở dữ liệu: `todolist`
--

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `work`
--

CREATE TABLE `work` (
  `Id` int(200) UNSIGNED NOT NULL,
  `Workname` varchar(250) COLLATE utf8_vietnamese_ci NOT NULL,
  `Startingdate` date NOT NULL,
  `Endingdate` date NOT NULL,
  `Status` varchar(250) COLLATE utf8_vietnamese_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_vietnamese_ci;

--
-- Đang đổ dữ liệu cho bảng `work`
--

INSERT INTO `work` (`Id`, `Workname`, `Startingdate`, `Endingdate`, `Status`) VALUES
(1, 'aaaaaaaaa', '1999-12-12', '2018-10-20', 'Complete'),
(2, 'teacher', '2018-12-12', '2018-12-31', 'Planning'),
(4, 'bcdfg', '2018-12-12', '2018-12-20', 'Planning'),
(5, 'lkjhg', '1999-10-10', '1999-11-11', 'Complete'),
(6, 'abcxyz', '2014-02-12', '2018-12-26', 'Doing'),
(7, 'hjdhjchcdjhc', '1999-12-12', '2018-02-21', 'Planning');

--
-- Chỉ mục cho các bảng đã đổ
--

--
-- Chỉ mục cho bảng `work`
--
ALTER TABLE `work`
  ADD PRIMARY KEY (`Id`);

--
-- AUTO_INCREMENT cho các bảng đã đổ
--

--
-- AUTO_INCREMENT cho bảng `work`
--
ALTER TABLE `work`
  MODIFY `Id` int(200) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
