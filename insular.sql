-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Jan 04, 2017 at 03:31 AM
-- Server version: 10.1.19-MariaDB
-- PHP Version: 5.6.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `insular`
--

-- --------------------------------------------------------

--
-- Table structure for table `agent`
--

CREATE TABLE `agent` (
  `id` int(11) NOT NULL,
  `agentcode` text NOT NULL,
  `a_date` text NOT NULL,
  `fname` text NOT NULL,
  `mname` text NOT NULL,
  `lname` text NOT NULL,
  `team` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `agent`
--

INSERT INTO `agent` (`id`, `agentcode`, `a_date`, `fname`, `mname`, `lname`, `team`) VALUES
(1, 'A00234', '12/09/2016', 'Kevin Rey', 'Mahipos', 'Arela', '1'),
(2, 'a000544', '12/09/2016', 'Kevin Rey', 'Mahipos', 'Arela', '1'),
(3, 'aaaaa', '12/19/2016', 'ewqeqw', 'eqwewq', 'asdas', '2'),
(4, 'wewqeqwe', '12/15/2016', 'qweqw', 'ewqewqeqwe', 'wqewqeqw', '1'),
(5, 'qwasadsad', '12/18/2016', 'weqwrqw', 'ewqewqewqewq', 'ewqwqe', '3'),
(6, 'sadsa', '01/04/2017', 'sadsadsad', 'sadsadsadsa', 'dsadsadsa', '1'),
(7, 'sadsad', '01/04/2017', 'asdsad', 'asdasd', 'asdsa', '3'),
(8, '123214', '01/04/2017', 'kevinret', 'm', 'arela', '1');

-- --------------------------------------------------------

--
-- Table structure for table `plan`
--

CREATE TABLE `plan` (
  `id` int(11) NOT NULL,
  `plan_name` text NOT NULL,
  `acronym` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `plan`
--

INSERT INTO `plan` (`id`, `plan_name`, `acronym`) VALUES
(1, 'Wealth Secure', 'Ws'),
(2, 'Wealth Builder', 'WB'),
(3, '', ''),
(4, 'Wealth Assure', 'WA');

-- --------------------------------------------------------

--
-- Table structure for table `product`
--

CREATE TABLE `product` (
  `id` int(11) NOT NULL,
  `tdate` text NOT NULL,
  `policy_no` text NOT NULL,
  `or_no` text NOT NULL,
  `lname` text NOT NULL,
  `fname` text NOT NULL,
  `famount` text NOT NULL,
  `premium` text NOT NULL,
  `agent` text NOT NULL,
  `plan` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `product`
--

INSERT INTO `product` (`id`, `tdate`, `policy_no`, `or_no`, `lname`, `fname`, `famount`, `premium`, `agent`, `plan`) VALUES
(2, '01/04/2017', 'r', '123', 'w', 'e', '456', '7890', '1', '2'),
(3, '01/04/2017', 'zxc', '1234', 'asd', 'sdf', '124123', '50000', '5', '2'),
(4, '01/04/2017', 'zxc', '1234', 'asd', 'sdf', '124123', '50000', '5', '2'),
(5, '01/05/2017', 'sadsadasdas', 'dsadsad', 'dasdsad', 'sadsadasd', 'dsadsad', 'sadsadas', '3', '2'),
(6, '01/05/2017', 'ewqewqewqe', 'ewqewqewq', 'ewqewqe', 'wqewqewq', 'eqwewq', 'wqewqe', '5', '2'),
(7, '01/06/2017', 'dsadsadasd', 'sadsa', 'sdsa', 'dsadsa', 'dsadsa', 'dsadsad', '3', '2'),
(8, '01/04/2017', '213213123', '21321312321', '213123', '213213213', '321312', '3123123', '3', '2'),
(9, '01/05/2017', 'wqeqweqweqw', 'eqweqw', 'ewqewqe', 'wqeqwe', 'eqwewqe', 'eqweqw', '1', '2'),
(10, '01/05/2017', 'wqeqweqweqw', 'eqweqw', 'ewqewqe', 'wqeqwe', 'eqwewqe', 'eqweqw', '1', '2'),
(11, '01/05/2017', 'dsadsadas', 'asdsad', 'asd', 'sadasd', 'sadasd', 'sadasdas', '5', '2'),
(12, '01/05/2017', 'dsadsadas', 'asdsad', 'asd', 'sadasd', 'sadasd', 'sadasdas', '5', '2'),
(13, '01/05/2017', 'dsadsadas', 'asdsad', 'asd', 'sadasd', 'sadasd', 'sadasdas', '5', '2'),
(14, '01/05/2017', 'dsadsadas', 'asdsad', 'asd', 'sadasd', 'sadasd', 'sadasdas', '5', '2'),
(15, '01/05/2017', 'dsadsadas', 'asdsad', 'asd', 'sadasd', 'sadasd', 'sadasdas', '5', '2'),
(16, '01/05/2017', 'dsadsadas', 'asdsad', 'asd', 'sadasd', 'sadasd', 'sadasdas', '5', '2'),
(17, '01/05/2017', 'dsadsadas', 'asdsad', 'asd', 'sadasd', 'sadasd', 'sadasdas', '5', '2'),
(18, '01/04/2017', '312321312', '3123123', '12312', '321321321312', '12321', '123123', '1', '2'),
(19, '01/04/2017', '312321312', '3123123', '12312', '321321321312', '12321', '123123', '1', '2'),
(20, '01/04/2017', '312321312', '3123123', '12312', '321321321312', '12321', '123123', '1', '2'),
(21, '01/04/2017', '312321312', '3123123', '12312', '321321321312', '12321', '123123', '1', '2'),
(22, '01/04/2017', '312321312', '3123123', '12312', '321321321312', '12321', '123123', '1', '2'),
(23, '01/04/2017', '312321312', '3123123', '12312', '321321321312', '12321', '123123', '1', '2'),
(24, '01/04/2017', '312321312', '3123123', '12312', '321321321312', '12321', '123123', '1', '2'),
(25, '01/04/2017', '312321312', '3123123', '12312', '321321321312', '12321', '123123', '1', '2'),
(26, '01/04/2017', '312321312', '3123123', '12312', '321321321312', '12321', '123123', '1', '2'),
(27, '01/04/2017', '312321312', '3123123', '12312', '321321321312', '12321', '123123', '1', '2'),
(28, '01/04/2017', '312321312', '3123123', '12312', '321321321312', '12321', '123123', '1', '2'),
(29, '01/04/2017', '312321312', '3123123', '12312', '321321321312', '12321', '123123', '1', '2'),
(30, '01/04/2017', '312321312', '3123123', '12312', '321321321312', '12321', '123123', '1', '2'),
(31, '01/04/2017', '312321312', '3123123', '12312', '321321321312', '12321', '123123', '1', '2'),
(32, '01/04/2017', '312321312', '3123123', '12312', '321321321312', '12321', '123123', '1', '2'),
(33, '01/04/2017', '312321312', '3123123', '12312', '321321321312', '12321', '123123', '1', '2'),
(34, '01/04/2017', '312321312', '3123123', '12312', '321321321312', '12321', '123123', '1', '2'),
(35, '01/04/2017', '312321312', '3123123', '12312', '321321321312', '12321', '123123', '1', '2'),
(36, '01/04/2017', '312321312', '3123123', '12312', '321321321312', '12321', '123123', '1', '2'),
(37, '01/04/2017', '312321312', '3123123', '12312', '321321321312', '12321', '123123', '1', '2'),
(38, '01/04/2017', '312321312', '3123123', '12312', '321321321312', '12321', '123123', '1', '2'),
(39, '01/04/2017', '312321312', '3123123', '12312', '321321321312', '12321', '123123', '1', '2'),
(40, '01/04/2017', '312321312', '3123123', '12312', '321321321312', '12321', '123123', '1', '2'),
(41, '01/04/2017', '312321312', '3123123', '12312', '321321321312', '12321', '123123', '1', '2'),
(42, '01/04/2017', '312321312', '3123123', '12312', '321321321312', '12321', '123123', '1', '2'),
(43, '01/04/2017', '312321312', '3123123', '12312', '321321321312', '12321', '123123', '1', '2'),
(44, '01/04/2017', '312321312', '3123123', '12312', '321321321312', '12321', '123123', '1', '2'),
(45, '01/04/2017', '312321312', '3123123', '12312', '321321321312', '12321', '123123', '1', '2'),
(46, '01/04/2017', 'sadsadsadsadsad', 'sasadsadsad', 'dasdsad', 'dsadas', 'sadsadasd', 'sadsadsad', '5', '2'),
(47, '01/05/2017', 'dsadsadsad', 'sadsa', 'ddsadsadsa', 'sadsadsad', 'dasdsa', 'dsadsad', '5', '2'),
(48, '01/04/2017', 'dasdasdsa', 'dsadsad', 'sadasdsad', 'sadasdsa', 'sadsad', 'sadsadas', '1', '2'),
(49, '01/04/2017', 'sadsadsadsadsad', 'sadsadsa', 'sdsadsadsad', 'sadsadsa', 'dsadasdsa', 'dasdsadsadsad', '5', '2'),
(50, '01/12/2017', 'sadsadsadsa', 'sadsadsad', 'ds', 'adsad', 'sadsadsa', 'dsadasd', '1', '2'),
(51, '01/04/2017', 'wqewqeqwe', 'qweqwe', 'wqewqe', 'wqewqeqwe', 'wqewqewqewq', 'wqeqwewq', '3', '2');

-- --------------------------------------------------------

--
-- Table structure for table `team`
--

CREATE TABLE `team` (
  `id` int(11) NOT NULL,
  `team_name` text NOT NULL,
  `manager` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `team`
--

INSERT INTO `team` (`id`, `team_name`, `manager`) VALUES
(1, 'Kevin Team', 'Kevin Rey Arela'),
(2, 'T.R.U Access', 'Emelee Arela'),
(3, 'aqweq', 'sdsadsa');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `username` text NOT NULL,
  `password` text NOT NULL,
  `user_type` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `username`, `password`, `user_type`) VALUES
(1, 'administrator', 'administrator', 'admin'),
(2, 'kevin', 'kevin', 'secretary'),
(4, 'KEVINREY', '123456789', 'admin'),
(5, 'KEVINREY', '123456789', ''),
(6, 'KEVINREYs', '12345678s9', 'admin');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `agent`
--
ALTER TABLE `agent`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `plan`
--
ALTER TABLE `plan`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `product`
--
ALTER TABLE `product`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `team`
--
ALTER TABLE `team`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `agent`
--
ALTER TABLE `agent`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
--
-- AUTO_INCREMENT for table `plan`
--
ALTER TABLE `plan`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `product`
--
ALTER TABLE `product`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=52;
--
-- AUTO_INCREMENT for table `team`
--
ALTER TABLE `team`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
