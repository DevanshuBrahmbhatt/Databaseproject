-- phpMyAdmin SQL Dump
-- version 4.8.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 24, 2019 at 05:55 AM
-- Server version: 10.1.34-MariaDB
-- PHP Version: 7.2.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `database`
--

-- --------------------------------------------------------

--
-- Table structure for table `contact`
--

CREATE TABLE `contact` (
  `contact_id` int(11) NOT NULL,
  `firstname` varchar(100) NOT NULL,
  `lastname` varchar(100) NOT NULL,
  `number` int(10) NOT NULL,
  `email` varchar(100) NOT NULL,
  `message` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `contact`
--

INSERT INTO `contact` (`contact_id`, `firstname`, `lastname`, `number`, `email`, `message`) VALUES
(1, 'Devanshu', 'Brahmbhatt', 2147483647, 'update@gmail.com', 'great work jay siya ram'),
(2, 'Devanshu', 'brahmbhatt', 1231313, 'update@gmail.com', 'fsdmfsgms'),
(3, 'Devanshu', 'dsf', 122222222, 'update@gmail.com', 'svdddd'),
(4, 'Devanshu', 'sdfs', 2147483647, 'update@gmail.com', 'fsssssssssss'),
(5, 'Devanshu', 'sdfs', 2147483647, 'update@gmail.com', 'fsssssssssss'),
(6, 'Devanshu', 'sdfs', 2147483647, 'update@gmail.com', 'fsssssssssss'),
(7, 'Devanshu', 'dddddddddddd', 2333333, 'update@gmail.com', 'vssssssssssssss');

-- --------------------------------------------------------

--
-- Table structure for table `demo`
--

CREATE TABLE `demo` (
  `id` int(11) NOT NULL,
  `department` varchar(100) NOT NULL,
  `semester` varchar(100) NOT NULL,
  `subject` varchar(100) NOT NULL,
  `exam_type` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `demo`
--

INSERT INTO `demo` (`id`, `department`, `semester`, `subject`, `exam_type`) VALUES
(1, '1', '1', '2', ''),
(2, '1', '1', '3', '1');

-- --------------------------------------------------------

--
-- Table structure for table `department`
--

CREATE TABLE `department` (
  `d_no` int(11) NOT NULL,
  `d_name` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `department`
--

INSERT INTO `department` (`d_no`, `d_name`) VALUES
(1, 'ce'),
(2, 'it'),
(3, 'chem'),
(4, 'mech'),
(5, 'ic'),
(6, 'ec');

-- --------------------------------------------------------

--
-- Table structure for table `exam_type`
--

CREATE TABLE `exam_type` (
  `exam_id` int(11) NOT NULL,
  `exam_type` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `exam_type`
--

INSERT INTO `exam_type` (`exam_id`, `exam_type`) VALUES
(1, 'sessional_1'),
(2, 'sessional_2'),
(3, 'sessional_3'),
(4, 'remedial'),
(5, 're-remedial');

-- --------------------------------------------------------

--
-- Table structure for table `papers`
--

CREATE TABLE `papers` (
  `paper_id` int(11) NOT NULL,
  `subsemdept` int(11) NOT NULL,
  `exam_type` int(11) NOT NULL,
  `pdf` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `papers`
--

INSERT INTO `papers` (`paper_id`, `subsemdept`, `exam_type`, `pdf`) VALUES
(1, 1, 1, 'soon');

-- --------------------------------------------------------

--
-- Table structure for table `pdf`
--

CREATE TABLE `pdf` (
  `pdf_id` int(11) NOT NULL,
  `sub_id` int(11) NOT NULL,
  `exam_id` int(11) NOT NULL,
  `pdf` blob NOT NULL,
  `year` year(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `pdf`
--

INSERT INTO `pdf` (`pdf_id`, `sub_id`, `exam_id`, `pdf`, `year`) VALUES
(1, 1, 1, 0x61, 2015),
(2, 1, 1, 0x62, 2016),
(3, 1, 1, 0x63, 2017),
(4, 1, 1, 0x64, 2018),
(5, 2, 1, 0x3c3f7068700a0a2f2f726571756972655f6f6e636520272e2e2f646174612f646174616261736568656c7065722e706870273b0a726571756972655f6f6e636520272e2e2f646174612f717565727966756e6374696f6e732e706870273b0a0a2f2f24646174616261736568656c7065722d3e6765745f6c675f456d706c6f79656528245f504f53545b2775275d2c20245f504f53545b2770275d293b0a24717565727966756e6374696f6e732d3e636865636b4c6f67696e28245f504f53545b27756e6d275d2c20245f504f53545b27706173275d293b0a3f3e0a, 2015);

-- --------------------------------------------------------

--
-- Table structure for table `semester`
--

CREATE TABLE `semester` (
  `sem_no` int(11) NOT NULL,
  `semester` varchar(100) NOT NULL,
  `d_no` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `semester`
--

INSERT INTO `semester` (`sem_no`, `semester`, `d_no`) VALUES
(1, '1sem', 1),
(2, '2sem', 1),
(3, '3sem', 1),
(4, '4sem', 1),
(5, '5sem', 1),
(6, '6sem', 1),
(7, '7sem', 1),
(8, '1sem', 2),
(9, '2sem', 2),
(10, '3sem', 2),
(11, '4sem', 2),
(12, '5sem', 2),
(13, '6sem', 2),
(14, '7sem', 2);

-- --------------------------------------------------------

--
-- Table structure for table `signup`
--

CREATE TABLE `signup` (
  `user_id` int(11) NOT NULL,
  `username` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `collegeId` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `d_no` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `signup`
--

INSERT INTO `signup` (`user_id`, `username`, `email`, `collegeId`, `password`, `d_no`) VALUES
(1, 'Devanshu', 'devanshu.vguj@gmail.com', '17itubs050', '1234567', 2),
(2, 'devnshu', 'update@gmail.com', '12itubse34', '12345678', 2),
(3, 'ramya', 'update@gmail.com', '17ceuos23i', '12345678', 1);

-- --------------------------------------------------------

--
-- Table structure for table `subject`
--

CREATE TABLE `subject` (
  `sub_id` int(11) NOT NULL,
  `sem_no` int(11) NOT NULL,
  `subname` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `subject`
--

INSERT INTO `subject` (`sub_id`, `sem_no`, `subname`) VALUES
(1, 1, 'elcp'),
(2, 1, 'maths'),
(3, 1, 'eg'),
(4, 1, 'em'),
(5, 1, 'beee');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `contact`
--
ALTER TABLE `contact`
  ADD PRIMARY KEY (`contact_id`);

--
-- Indexes for table `demo`
--
ALTER TABLE `demo`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `department`
--
ALTER TABLE `department`
  ADD PRIMARY KEY (`d_no`);

--
-- Indexes for table `exam_type`
--
ALTER TABLE `exam_type`
  ADD PRIMARY KEY (`exam_id`);

--
-- Indexes for table `papers`
--
ALTER TABLE `papers`
  ADD PRIMARY KEY (`paper_id`),
  ADD KEY `fk_deptsemsub` (`subsemdept`),
  ADD KEY `fk_exam_type` (`exam_type`);

--
-- Indexes for table `pdf`
--
ALTER TABLE `pdf`
  ADD PRIMARY KEY (`pdf_id`),
  ADD KEY `fk_sub_id` (`sub_id`),
  ADD KEY `fk_exam_id` (`exam_id`);

--
-- Indexes for table `semester`
--
ALTER TABLE `semester`
  ADD PRIMARY KEY (`sem_no`),
  ADD KEY `fk_d_no` (`d_no`);

--
-- Indexes for table `signup`
--
ALTER TABLE `signup`
  ADD PRIMARY KEY (`user_id`),
  ADD KEY `fk_dno` (`d_no`);

--
-- Indexes for table `subject`
--
ALTER TABLE `subject`
  ADD PRIMARY KEY (`sub_id`),
  ADD KEY `fk_semdept` (`sem_no`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `contact`
--
ALTER TABLE `contact`
  MODIFY `contact_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `demo`
--
ALTER TABLE `demo`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `department`
--
ALTER TABLE `department`
  MODIFY `d_no` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `exam_type`
--
ALTER TABLE `exam_type`
  MODIFY `exam_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `papers`
--
ALTER TABLE `papers`
  MODIFY `paper_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `pdf`
--
ALTER TABLE `pdf`
  MODIFY `pdf_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `semester`
--
ALTER TABLE `semester`
  MODIFY `sem_no` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `signup`
--
ALTER TABLE `signup`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `subject`
--
ALTER TABLE `subject`
  MODIFY `sub_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `papers`
--
ALTER TABLE `papers`
  ADD CONSTRAINT `fk_deptsemsub` FOREIGN KEY (`subsemdept`) REFERENCES `subject` (`sub_id`),
  ADD CONSTRAINT `fk_exam_type` FOREIGN KEY (`exam_type`) REFERENCES `exam_type` (`exam_id`);

--
-- Constraints for table `pdf`
--
ALTER TABLE `pdf`
  ADD CONSTRAINT `fk_exam_id` FOREIGN KEY (`exam_id`) REFERENCES `exam_type` (`exam_id`),
  ADD CONSTRAINT `fk_sub_id` FOREIGN KEY (`sub_id`) REFERENCES `subject` (`sub_id`);

--
-- Constraints for table `semester`
--
ALTER TABLE `semester`
  ADD CONSTRAINT `fk_d_no` FOREIGN KEY (`d_no`) REFERENCES `department` (`d_no`);

--
-- Constraints for table `signup`
--
ALTER TABLE `signup`
  ADD CONSTRAINT `fk_dno` FOREIGN KEY (`d_no`) REFERENCES `department` (`d_no`);

--
-- Constraints for table `subject`
--
ALTER TABLE `subject`
  ADD CONSTRAINT `fk_semdept` FOREIGN KEY (`sem_no`) REFERENCES `semester` (`sem_no`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
