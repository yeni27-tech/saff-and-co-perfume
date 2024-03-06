-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 06, 2024 at 04:13 PM
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
-- Database: `db_parfume`
--

-- --------------------------------------------------------

--
-- Table structure for table `tb_customer`
--

CREATE TABLE `tb_customer` (
  `customer_id` varchar(12) NOT NULL,
  `nama` text NOT NULL,
  `email` varchar(90) NOT NULL,
  `alamat` varchar(100) NOT NULL,
  `no_telp` int(13) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `tb_order`
--

CREATE TABLE `tb_order` (
  `order_id` varchar(12) NOT NULL,
  `order_date` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `customer_id` varchar(12) NOT NULL,
  `total_amount` int(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `tb_order_detail`
--

CREATE TABLE `tb_order_detail` (
  `order_detail_id` varchar(12) NOT NULL,
  `order_id` varchar(12) NOT NULL,
  `product_id` varchar(12) NOT NULL,
  `quantity` char(11) NOT NULL,
  `subtotal` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `tb_product`
--

CREATE TABLE `tb_product` (
  `product_id` int(12) NOT NULL,
  `name` text NOT NULL,
  `price` varchar(30) NOT NULL,
  `quantity` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tb_product`
--

INSERT INTO `tb_product` (`product_id`, `name`, `price`, `quantity`) VALUES
(30219, 'CASCAVEL', 'IDR 199.000,-', '212 pcs'),
(50317, 'COCO', 'IDR 189.000,-', '167 pcs'),
(50604, 'S.O.T.B', 'IDR 299.000,-', '255 pcs'),
(60302, 'XOCOLATL', 'IDR 299.000,-', '134 pcs '),
(60708, 'MINOUET', 'IDR 179.000,-', '212 pcs '),
(62021, 'LOUI', 'IDR 189.000,-', '278 pcs '),
(90310, 'MALEALI', 'IDR 239.000,-', '132 pcs '),
(110604, 'ILIAD', 'IDR 209.000,-', '178 pcs'),
(121113, 'OSTARA', 'IDR 129.000,-', '234 pcs'),
(122211, 'TROUPE', 'IDR 140.000,-', '243 pcs'),
(141015, 'SAFF', 'IDR 79.000,-', '331 pcs'),
(161217, 'CHNO', 'IDR 249.000,-', '213 pcs '),
(181210, 'OMNIA', 'IDR 170.000,-', '155 pcs '),
(1020304, 'LAS POZAS', 'IDR 179.000,-', '255 pcs'),
(5060903, 'SOLARIS', 'IDR 189.000,-', '198 pcs');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tb_customer`
--
ALTER TABLE `tb_customer`
  ADD PRIMARY KEY (`customer_id`);

--
-- Indexes for table `tb_order`
--
ALTER TABLE `tb_order`
  ADD PRIMARY KEY (`order_id`),
  ADD UNIQUE KEY `customer_id` (`customer_id`);

--
-- Indexes for table `tb_order_detail`
--
ALTER TABLE `tb_order_detail`
  ADD PRIMARY KEY (`order_detail_id`),
  ADD UNIQUE KEY `order_id` (`order_id`,`product_id`);

--
-- Indexes for table `tb_product`
--
ALTER TABLE `tb_product`
  ADD PRIMARY KEY (`product_id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
