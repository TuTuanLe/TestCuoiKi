-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 25, 2020 at 02:21 PM
-- Server version: 10.4.11-MariaDB
-- PHP Version: 7.4.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `quanlithuvien`
--

-- --------------------------------------------------------

--
-- Table structure for table `docgia`
--

CREATE TABLE `docgia` (
  `madocgia` varchar(50) NOT NULL,
  `tendocgia` varchar(50) NOT NULL,
  `sodienthoai` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `docgia`
--

INSERT INTO `docgia` (`madocgia`, `tendocgia`, `sodienthoai`) VALUES
('m1', 'Le Tu Tuan', '0396694769'),
('m2', 'Pham Tien Sy', '046418694');

-- --------------------------------------------------------

--
-- Table structure for table `muonsach`
--

CREATE TABLE `muonsach` (
  `madocgia` varchar(50) NOT NULL,
  `masach` varchar(50) NOT NULL,
  `ngaymuon` date NOT NULL,
  `ngaytra` date NOT NULL,
  `id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `muonsach`
--

INSERT INTO `muonsach` (`madocgia`, `masach`, `ngaymuon`, `ngaytra`, `id`) VALUES
('m1', 'MS01', '2020-12-16', '2020-12-16', 6),
('m1', 'MS02', '2020-12-08', '2020-12-14', 8),
('m1', 'MS03', '2020-12-17', '2020-12-21', 9),
('m2', 'MS01', '2020-12-21', '2020-12-24', 10);

-- --------------------------------------------------------

--
-- Table structure for table `sach`
--

CREATE TABLE `sach` (
  `masach` varchar(50) NOT NULL,
  `tuade` varchar(50) NOT NULL,
  `gia` int(11) NOT NULL,
  `namxb` date NOT NULL,
  `trangthai` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `sach`
--

INSERT INTO `sach` (`masach`, `tuade`, `gia`, `namxb`, `trangthai`) VALUES
('MS01', 'toeic', 300, '2010-01-22', 1),
('MS02', 'english vb1', 100, '2010-01-22', 1),
('MS03', 'Tieng Viet', 1234, '2020-11-11', 1),
('MS04', 'KINH Code', 100000, '2000-01-22', 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `docgia`
--
ALTER TABLE `docgia`
  ADD PRIMARY KEY (`madocgia`);

--
-- Indexes for table `muonsach`
--
ALTER TABLE `muonsach`
  ADD PRIMARY KEY (`id`),
  ADD KEY `muonsach_docgia` (`madocgia`),
  ADD KEY `muonsach_sach` (`masach`);

--
-- Indexes for table `sach`
--
ALTER TABLE `sach`
  ADD PRIMARY KEY (`masach`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `muonsach`
--
ALTER TABLE `muonsach`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `muonsach`
--
ALTER TABLE `muonsach`
  ADD CONSTRAINT `muonsach_docgia` FOREIGN KEY (`madocgia`) REFERENCES `docgia` (`madocgia`),
  ADD CONSTRAINT `muonsach_sach` FOREIGN KEY (`masach`) REFERENCES `sach` (`masach`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
