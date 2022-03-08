-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 08, 2022 at 07:41 PM
-- Server version: 10.4.22-MariaDB
-- PHP Version: 8.1.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `inventory`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` int(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `pass` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `name`, `email`, `pass`) VALUES
(1, 'root', 'chebiama@gmail.com', ''),
(2, 'root', 'mary@gmail.com', ''),
(3, 'root', 'zippy@gmail.com', ''),
(4, 'Debra', 'debra@gmail.com', 'debra');

-- --------------------------------------------------------

--
-- Table structure for table `admin_page`
--

CREATE TABLE `admin_page` (
  `id` int(255) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `admin_page`
--

INSERT INTO `admin_page` (`id`, `username`, `password`) VALUES
(4, 'root', ''),
(5, 'root', ''),
(6, 'root', '');

-- --------------------------------------------------------

--
-- Table structure for table `contact`
--

CREATE TABLE `contact` (
  `c_id` int(255) NOT NULL,
  `c_name` varchar(255) NOT NULL,
  `c_email` varchar(255) NOT NULL,
  `c_phone` int(255) NOT NULL,
  `c_message` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `contact`
--

INSERT INTO `contact` (`c_id`, `c_name`, `c_email`, `c_phone`, `c_message`) VALUES
(1, 'Anastacia Muthoni', 'anastacia@gmail.com', 0, 'efefg'),
(2, 'Faith Angela', 'angela@gmailcom', 725858585, 'Requesting internet connection'),
(3, 'Faith Angela', 'angela@gmailcom', 725858585, 'Requesting internet connection'),
(4, 'Faith Angela', 'angela@gmailcom', 725858585, 'Requesting internet connection'),
(5, 'Faith Angela', 'angela@gmailcom', 725858585, 'Requesting internet connection'),
(6, 'Faith Angela', 'angela@gmailcom', 725858585, 'Requesting internet connection'),
(7, 'Faith Angela', 'angela@gmailcom', 725858585, 'Requesting internet connection'),
(8, 'Faith Angela', 'angela@gmailcom', 725858585, 'Requesting internet connection');

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `p_id` int(255) NOT NULL,
  `p_name` varchar(255) NOT NULL,
  `p_type` varchar(255) NOT NULL,
  `p_serial_no` varchar(255) NOT NULL,
  `p_date` date NOT NULL,
  `p_quantity` varchar(255) NOT NULL,
  `p_description` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`p_id`, `p_name`, `p_type`, `p_serial_no`, `p_date`, `p_quantity`, `p_description`) VALUES
(1, 'Hp Laptop', 'hardware', 'P45R6677', '2022-03-01', '1', 'Good condition.\r\nHp Pavilion'),
(2, 'desktop', 'hardware', '257888522P', '2022-03-01', 'Good', 'Good condition'),
(3, 'Headsets', 'accessories', 'NA', '2022-03-08', '20 pieces', 'Good condition'),
(4, 'Headsets', 'accessories', 'NA', '2022-03-08', '20 pieces', 'Good condition'),
(5, 'Mouse', 'accessories', 'NA', '2022-03-08', '50', 'Hp mouse. In good condition'),
(6, 'Mouse', 'accessories', 'NA', '2022-03-08', '50', 'Hp mouse. In good condition'),
(7, 'Mouse', 'accessories', 'NA', '2022-03-08', '50', 'Hp mouse. In good condition'),
(8, 'Router', 'network', 'P47855GTDE', '2022-03-08', '2', 'Gateway routers'),
(9, 'Router', 'network', 'P47855GTDE', '2022-03-08', '2', 'Gateway routers'),
(10, 'Router', 'network', 'P47855GTDE', '2022-03-08', '2', 'Gateway routers'),
(11, 'Keyboard', 'hardware', '475624PHTD', '2022-03-08', '70', 'Good condition.Hp');

-- --------------------------------------------------------

--
-- Table structure for table `register_db`
--

CREATE TABLE `register_db` (
  `id` int(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `gender` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `id_number` int(255) NOT NULL,
  `phone` int(255) NOT NULL,
  `designation` varchar(255) NOT NULL,
  `department` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `register_db`
--

INSERT INTO `register_db` (`id`, `name`, `email`, `gender`, `password`, `id_number`, `phone`, `designation`, `department`) VALUES
(1, 'admin', 'admin@test.com', 'female', 'admin123', 252525, 7474747, 'Manager', 'ICT'),
(2, 'gerger', 'ggygy@uiiu.com', 'female', 'gtrhtrh', 5858, 858, 'kyhj', 'Audit'),
(3, 'admin', 'admin@test.com', 'female', 'admin', 252525, 36363636, 'Administrator', 'Human Resource'),
(4, 'David', 'david@gmail.com', 'male', 'david', 25252525, 25335666, 'cs', 'Procurement'),
(5, 'Mary', 'wanjiku@gmail.com', 'female', 'mary12345', 4562665, 6565665, 'assistant', 'Human Resource'),
(6, 'Daniel Sifuna', 'danielsif@gmail.com', 'male', 'daniel', 25856963, 745858968, 'Accountant', 'Finance'),
(7, 'Vannesa Mdee', 'vannessamdee@gmail.com', 'female', 'Vannessa', 25365859, 745879658, 'Sales Manager', 'Marketing'),
(8, 'Vivian Nyongesa', 'viviannyongesa@gmail.com', 'female', 'Nyongesa', 25857896, 758962356, 'Assistant', 'Procurement');

-- --------------------------------------------------------

--
-- Table structure for table `requests`
--

CREATE TABLE `requests` (
  `req_id` int(255) NOT NULL,
  `req_name` varchar(255) NOT NULL,
  `req_email` varchar(255) NOT NULL,
  `req_item` varchar(255) NOT NULL,
  `req_department` varchar(255) NOT NULL,
  `req_designation` varchar(255) NOT NULL,
  `req_date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `requests`
--

INSERT INTO `requests` (`req_id`, `req_name`, `req_email`, `req_item`, `req_department`, `req_designation`, `req_date`) VALUES
(1, 'Bethwel Mutai', 'bethwelmutai@gmail.com', 'Laptop', 'Human Resource', 'Assistant manager', '2022-03-01'),
(2, 'Customer service', 'cs@gmail.com', 'Desktop computer', 'Customer Service', 'Secretary', '2022-03-04'),
(3, 'Vannessa Mdee', 'vannessamdee@gmail.com', 'Desktop computer', 'Marketing', 'Sales Manager', '2022-03-07');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `admin_page`
--
ALTER TABLE `admin_page`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `contact`
--
ALTER TABLE `contact`
  ADD PRIMARY KEY (`c_id`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`p_id`);

--
-- Indexes for table `register_db`
--
ALTER TABLE `register_db`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `requests`
--
ALTER TABLE `requests`
  ADD PRIMARY KEY (`req_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `admin_page`
--
ALTER TABLE `admin_page`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `contact`
--
ALTER TABLE `contact`
  MODIFY `c_id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `p_id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `register_db`
--
ALTER TABLE `register_db`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `requests`
--
ALTER TABLE `requests`
  MODIFY `req_id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
