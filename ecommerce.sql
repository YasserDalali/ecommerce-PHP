-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 06, 2024 at 06:47 PM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.0.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `ecommerce`
--

-- --------------------------------------------------------

--
-- Table structure for table `category`
--

CREATE TABLE `category` (
  `id` int(255) NOT NULL,
  `label` varchar(255) DEFAULT NULL,
  `description` text DEFAULT NULL,
  `date_creation` datetime DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE `orders` (
  `order_id` int(11) NOT NULL,
  `product_id` int(11) DEFAULT NULL,
  `client_id` int(11) DEFAULT NULL,
  `quantity` int(11) DEFAULT NULL,
  `order_date` date DEFAULT NULL,
  `total_amount` decimal(10,2) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `orders`
--

INSERT INTO `orders` (`order_id`, `product_id`, `client_id`, `quantity`, `order_date`, `total_amount`) VALUES
(1, 1, 15, 2, '2024-07-06', 39.98),
(2, 3, 16, 1, '2024-03-21', 498.99),
(3, 5, 17, 1, '2024-07-06', 99.99),
(4, 8, 18, 1, '2024-05-02', 59.99),
(5, 10, 19, 3, '2024-07-06', 149.97),
(6, 1, 15, 2, '2024-07-06', 39.98),
(7, 2, 16, 1, '2024-06-21', 498.99),
(8, 3, 17, 1, '2024-07-05', 99.99),
(9, 4, 18, 1, '2024-06-02', 59.99),
(10, 5, 19, 3, '2024-07-03', 149.97),
(11, 6, 20, 2, '2024-07-01', 198.00),
(12, 7, 21, 1, '2024-06-28', 99.00),
(13, 8, 15, 1, '2024-06-25', 99.00),
(14, 9, 16, 1, '2024-07-04', 99.00),
(15, 10, 17, 2, '2024-06-30', 198.00),
(16, 1, 18, 1, '2024-06-27', 99.00),
(17, 2, 19, 1, '2024-07-02', 99.00),
(18, 3, 20, 3, '2024-06-29', 297.00),
(19, 4, 21, 1, '2024-06-26', 99.00),
(20, 5, 15, 2, '2024-06-23', 198.00),
(21, 6, 16, 1, '2024-07-01', 99.00),
(22, 7, 17, 1, '2024-06-24', 99.00),
(23, 8, 18, 1, '2024-06-21', 99.00),
(24, 9, 19, 2, '2024-06-28', 198.00),
(25, 10, 20, 1, '2024-06-30', 99.00),
(26, 1, 21, 1, '2024-06-22', 99.00),
(27, 2, 15, 3, '2024-06-24', 297.00),
(28, 3, 16, 1, '2024-06-25', 99.00),
(29, 4, 17, 1, '2024-06-26', 99.00),
(30, 5, 18, 1, '2024-06-27', 99.00);

-- --------------------------------------------------------

--
-- Table structure for table `product`
--

CREATE TABLE `product` (
  `id` int(255) NOT NULL,
  `label` varchar(255) DEFAULT NULL,
  `prix` decimal(2,0) DEFAULT NULL,
  `discount` int(255) DEFAULT NULL,
  `id_category` int(255) DEFAULT NULL,
  `date_creation` datetime DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `product`
--

INSERT INTO `product` (`id`, `label`, `prix`, `discount`, `id_category`, `date_creation`) VALUES
(1, 'Laptop', 99, 10, NULL, '2024-07-06 13:17:26'),
(2, 'Smartphone', 99, 5, NULL, '2024-07-06 13:17:26'),
(3, 'Tablet', 99, 15, NULL, '2024-07-06 13:17:26'),
(4, 'Headphones', 99, 20, NULL, '2024-07-06 13:17:26'),
(5, 'Smartwatch', 99, 10, NULL, '2024-07-06 13:17:26'),
(6, 'Camera', 99, 8, NULL, '2024-07-06 13:17:26'),
(7, 'Printer', 99, 12, NULL, '2024-07-06 13:17:26'),
(8, 'Monitor', 99, 10, NULL, '2024-07-06 13:17:26'),
(9, 'Keyboard', 50, 5, NULL, '2024-07-06 13:17:26'),
(10, 'Mouse', 25, 10, NULL, '2024-07-06 13:17:26');

-- --------------------------------------------------------

--
-- Table structure for table `util`
--

CREATE TABLE `util` (
  `id` int(255) NOT NULL,
  `username` varchar(255) DEFAULT NULL,
  `password` varchar(255) DEFAULT NULL,
  `date_creation` datetime DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `util`
--

INSERT INTO `util` (`id`, `username`, `password`, `date_creation`) VALUES
(15, 'yasser.dalali.personal@gmail.com', '$2y$10$tx8phvm6Anw0f5SSKFFeLeSjVvqlUb158xVEpRFKV/lc3eh3VEDz6', '2024-07-06 00:06:37'),
(16, 'yasser.methods.store@gmail.com', '$2y$10$/NRHzyb1nVFMvv2w0DVgJ.Qb1a5p1F64bS0z1qD/q6yPGAOsblzja', '2024-07-06 00:10:34'),
(17, 'idan.nagar@gmail.com', '$2y$10$xNYPejLu7rZ5gzXNNWolLuQZ1ySxOoP04zCpKvyemCUEyrYqRvEGK', '2024-07-06 00:11:07'),
(18, 'yas@gf.com', '$2y$10$ZSKw4Cs4ooBeTcczJOg26.YBUMDtrOXe3jLrP/myR9uPqV.uqr/52', '2024-07-06 00:12:01'),
(19, '323dfd2015@gmail.com', '$2y$10$biL3wJAE6/JPhW975jGuVugv/w3To1zz/tjCC9apGvZZnSP2Qx2Bi', '2024-07-06 00:13:39'),
(20, 'abrahalhabachi@ja.cap', '$2y$10$I4iLl7RhFdM11X5GRNCf4uqoFwVlxQ3UNPeeo.G3SpN6mVqE9LJK6', '2024-07-06 16:26:33'),
(21, 'abululu@ira.js', '$2y$10$DMmvcYhPp4hXnJRiwHoTl.smhphH3tWn5haoy234JQzrGcqgkhuD2', '2024-07-06 16:28:03'),
(22, 'user1@example.com', '$2y$10$tx8phvm6Anw0f5SSKFFeLeSjVvqlUb158xVEpRFKV/lc3eh3VEDz6', '2024-06-01 00:06:37'),
(23, 'user2@example.com', '$2y$10$/NRHzyb1nVFMvv2w0DVgJ.Qb1a5p1F64bS0z1qD/q6yPGAOsblzja', '2024-06-05 00:10:34'),
(24, 'user3@example.com', '$2y$10$xNYPejLu7rZ5gzXNNWolLuQZ1ySxOoP04zCpKvyemCUEyrYqRvEGK', '2024-06-10 00:11:07'),
(25, 'user4@example.com', '$2y$10$ZSKw4Cs4ooBeTcczJOg26.YBUMDtrOXe3jLrP/myR9uPqV.uqr/52', '2024-06-15 00:12:01'),
(26, 'user5@example.com', '$2y$10$biL3wJAE6/JPhW975jGuVugv/w3To1zz/tjCC9apGvZZnSP2Qx2Bi', '2024-06-20 00:13:39'),
(27, 'user6@example.com', '$2y$10$I4iLl7RhFdM11X5GRNCf4uqoFwVlxQ3UNPeeo.G3SpN6mVqE9LJK6', '2024-07-01 16:26:33'),
(28, 'user7@example.com', '$2y$10$DMmvcYhPp4hXnJRiwHoTl.smhphH3tWn5haoy234JQzrGcqgkhuD2', '2024-07-02 16:28:03'),
(29, 'user8@example.com', '$2y$10$JvD6CPntUz6csDbg/SpTou/RdGGwvL1Vv/cCqL1QH0Y7t51mHfXxq', '2024-07-03 16:29:26'),
(30, 'user9@example.com', '$2y$10$AqlS77yP1R5H8aSdGpeCsuJACWc94V0kz45Ap2nEY1BPTe8cgZ9L2', '2024-07-04 16:30:14'),
(31, 'user10@example.com', '$2y$10$uFQCEZG92HJFm3K9IKs1BeNogXYyMhJnTjSsVT/rk.s7r/4u0mGiW', '2024-07-05 16:31:08'),
(32, 'user11@example.com', '$2y$10$Lw0eEgCFrChDDM5C7tLM4Or29lZksX11rUmNtDMlOxGcS', '2024-07-06 16:32:21');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `category`
--
ALTER TABLE `category`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`order_id`),
  ADD KEY `product_id` (`product_id`),
  ADD KEY `client_id` (`client_id`);

--
-- Indexes for table `product`
--
ALTER TABLE `product`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_category` (`id_category`);

--
-- Indexes for table `util`
--
ALTER TABLE `util`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `category`
--
ALTER TABLE `category`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `orders`
--
ALTER TABLE `orders`
  MODIFY `order_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=31;

--
-- AUTO_INCREMENT for table `product`
--
ALTER TABLE `product`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=101;

--
-- AUTO_INCREMENT for table `util`
--
ALTER TABLE `util`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=33;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `orders`
--
ALTER TABLE `orders`
  ADD CONSTRAINT `orders_ibfk_1` FOREIGN KEY (`product_id`) REFERENCES `product` (`id`),
  ADD CONSTRAINT `orders_ibfk_2` FOREIGN KEY (`client_id`) REFERENCES `util` (`id`);

--
-- Constraints for table `product`
--
ALTER TABLE `product`
  ADD CONSTRAINT `product_ibfk_1` FOREIGN KEY (`id_category`) REFERENCES `category` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
