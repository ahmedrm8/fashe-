-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: 28 نوفمبر 2024 الساعة 22:45
-- إصدار الخادم: 10.4.28-MariaDB
-- PHP Version: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `admin_project`
--

-- --------------------------------------------------------

--
-- بنية الجدول `categories`
--

CREATE TABLE `categories` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- إرجاع أو استيراد بيانات الجدول `categories`
--

INSERT INTO `categories` (`id`, `name`) VALUES
(1, 'Mobiles'),
(2, 'Clothes'),
(3, 'Computers'),
(4, 'Laptop');

-- --------------------------------------------------------

--
-- بنية الجدول `message`
--

CREATE TABLE `message` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `phone` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `message` text NOT NULL,
  `view` int(11) NOT NULL,
  `mes_data` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- إرجاع أو استيراد بيانات الجدول `message`
--

INSERT INTO `message` (`id`, `name`, `phone`, `email`, `message`, `view`, `mes_data`) VALUES
(1, 'aa', '01556665555', 'ah@gmail.com', 'aa', 0, '2023-11-26 10:22:13'),
(16, 's', 's', 'a@gmail.com', 'l', 0, '2023-11-26 10:22:13'),
(17, 's', 's', 'a@gmail.com', 'll', 0, '2023-11-26 10:22:13'),
(18, 's', 's', 'a@gmail.com', 'lla', 0, '2023-11-26 10:22:13'),
(19, 'ahmed', '01555', 'll@gmail.com', 'man', 0, '2023-11-26 10:22:13'),
(21, 'mo', '02200000', 'a@gmail.com', 'mo', 0, '2023-11-26 14:54:15'),
(22, 'ahmed', '525555', 'ah@gmail.com', 'aa', 0, '2024-03-05 17:32:32'),
(23, 'a', 'aa', 'aada@gmail.com', 'aa', 0, '2024-03-05 17:49:16'),
(24, 'aaaaaaaa', 'aa', 'aada@gmail.com', 'aa', 0, '2024-03-05 17:49:25'),
(25, 'aaaaaaaa', 'aa', 'aada@gmail.com', 'aa', 0, '2024-03-05 18:00:37');

-- --------------------------------------------------------

--
-- بنية الجدول `products`
--

CREATE TABLE `products` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `price` varchar(10) NOT NULL,
  `sale` varchar(10) NOT NULL,
  `stock` int(11) NOT NULL,
  `img` varchar(255) NOT NULL,
  `cat_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- إرجاع أو استيراد بيانات الجدول `products`
--

INSERT INTO `products` (`id`, `name`, `price`, `sale`, `stock`, `img`, `cat_id`) VALUES
(10, 'samsung a 50', '32312', '555', 12, '6113ba28bde650ee006a52fdcfb6effa.jpg', 1),
(11, 'iphone', '1236', '555', 10, 'b3bbcb10a6ecf4c1c8a1fae07648962f.jpg', 1),
(12, 'jacket', '333', '44', 55, '3a884ff6be6343652edb636e7c13c426.jpg', 2),
(13, 'tshirt', '4444', '55', 99, 'c6de76824cf9211e4e9d1b72ba7fafa3.jpg', 2),
(14, 'asus', '3333', '44', 44, '1ef951c3899edddae9528e12215ed9ae.jpg', 3),
(15, 'Dell', '333', '57', 989, '8eff6ceb0e85e5032d9a0c4e29db12e6.jpg', 3);

-- --------------------------------------------------------

--
-- بنية الجدول `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `address` varchar(255) NOT NULL,
  `phone` varchar(20) NOT NULL,
  `gender` tinyint(4) NOT NULL,
  `priv` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- إرجاع أو استيراد بيانات الجدول `users`
--

INSERT INTO `users` (`id`, `username`, `password`, `email`, `address`, `phone`, `gender`, `priv`) VALUES
(1, 'ahmed', '123', 'ahmed@gmail.com', 'mansoura', '2323435', 0, 1),
(2, 'eman', '202cb962ac59075b964b07152d234b70', 'eman_mostafa@e.cm', 'Cairo', '2314545', 1, 1),
(5, 'emanddd', '', 'eman@e.cm', 'tanta', '', 1, 0),
(8, 'ahmed', '202cb962ac59075b964b07152d234b70', 'dvfsef@gmail.com', 'asdwd', '', 1, 1),
(9, 'alii', '202cb962ac59075b964b07152d234b70', 'wkfjrowi@gmail.com', 'fa', '', 0, 1),
(12, 'mariam', '202cb962ac59075b964b07152d234b70', 'mariam@gmial.com', 'mansoura', '', 1, 0),
(13, 'yasser', '202cb962ac59075b964b07152d234b70', 'yasser@gmail.com', 'm', '', 0, 0);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `message`
--
ALTER TABLE `message`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`),
  ADD KEY `cat_id` (`cat_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `message`
--
ALTER TABLE `message`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=35;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- قيود الجداول المُلقاة.
--

--
-- قيود الجداول `products`
--
ALTER TABLE `products`
  ADD CONSTRAINT `products_ibfk_1` FOREIGN KEY (`cat_id`) REFERENCES `categories` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
