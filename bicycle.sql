-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1
-- Thời gian đã tạo: Th1 15, 2022 lúc 10:41 AM
-- Phiên bản máy phục vụ: 10.4.22-MariaDB
-- Phiên bản PHP: 8.0.13

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Cơ sở dữ liệu: `chain_gang`
--

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `bicycle`
--

CREATE TABLE `bicycle` (
  `id` int(11) NOT NULL,
  `brand` varchar(255) NOT NULL,
  `model` varchar(255) NOT NULL,
  `year` year(4) NOT NULL,
  `category` varchar(255) NOT NULL,
  `gender` int(11) NOT NULL,
  `color` varchar(255) NOT NULL,
  `weight` float NOT NULL,
  `condition_id` int(11) NOT NULL,
  `price` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `bicycle`
--

INSERT INTO `bicycle` (`id`, `brand`, `model`, `year`, `category`, `gender`, `color`, `weight`, `condition_id`, `price`) VALUES
(1, 'Trek', 'Emonda', 2017, 'Hybrid', 3, 'Black', 1.5, 5, 1495),
(2, 'Cannondale', 'Synapse', 2016, 'Road', 3, 'matte black', 1, 5, 1999),
(5, 'Schwinn', 'Cutter', 2016, 'City', 3, 'White', 18, 4, 450),
(6, 'Mongoose', 'Switchback Sport', 2015, 'Moutant', 1, 'blue', 24, 2, 399),
(9, 'werqwerqwe', 'werqwerqwer', 2143, 'Sdasfsdf', 3, 'asdfasdasd', 0, 1, 322354),
(16, 'asd', 'werqwerqwer', 2143, 'Sdasfsdf', 1, 'asdfasdasd', 0, 1, 322354),
(17, 'a', 'a', 2001, 'a', 1, 'asdfasdasd', 1, 1, 1),
(26, 'asdfvxcxfz', 'erdfxczvxc', 1901, 'zdvdsa', 1, 'asfdfd', 123, 1, 21343);

--
-- Chỉ mục cho các bảng đã đổ
--

--
-- Chỉ mục cho bảng `bicycle`
--
ALTER TABLE `bicycle`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT cho các bảng đã đổ
--

--
-- AUTO_INCREMENT cho bảng `bicycle`
--
ALTER TABLE `bicycle`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
