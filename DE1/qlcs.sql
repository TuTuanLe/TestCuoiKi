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
-- Database: `qlcs`
--

-- --------------------------------------------------------

--
-- Table structure for table `baihat`
--

CREATE TABLE `baihat` (
  `mabaihat` varchar(50) NOT NULL,
  `tenbaihat` varchar(50) NOT NULL,
  `theloai` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `baihat`
--

INSERT INTO `baihat` (`mabaihat`, `tenbaihat`, `theloai`) VALUES
('1', 'babadasd', '2'),
('123', '1', '1');

-- --------------------------------------------------------

--
-- Table structure for table `casi`
--

CREATE TABLE `casi` (
  `macasi` varchar(50) NOT NULL,
  `tencasi` varchar(50) NOT NULL,
  `gioitinh` int(11) NOT NULL,
  `namsinh` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `casi`
--

INSERT INTO `casi` (`macasi`, `tencasi`, `gioitinh`, `namsinh`) VALUES
('1', 'Son Tung', 1, '2020-12-14'),
('2', 'LTT', 1, '2020-12-25'),
('3', 'Le Tu Tuan', 1, '2000-01-22'),
('4', 'Hieu', 1, '2020-01-01');

-- --------------------------------------------------------

--
-- Table structure for table `casi_baihat`
--

CREATE TABLE `casi_baihat` (
  `macasi` varchar(50) NOT NULL,
  `mabaihat` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `casi_baihat`
--

INSERT INTO `casi_baihat` (`macasi`, `mabaihat`) VALUES
('1', '123'),
('2', '1'),
('2', '123');

-- --------------------------------------------------------

--
-- Table structure for table `nguoinghe`
--

CREATE TABLE `nguoinghe` (
  `mann` varchar(50) NOT NULL,
  `tennn` varchar(50) NOT NULL,
  `gioitinh` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `nguoinghe`
--

INSERT INTO `nguoinghe` (`mann`, `tennn`, `gioitinh`) VALUES
('1', 'Tu Tuan Le', 1),
('2', 'Phạm Tiến Sỹ', 1),
('3', 'Đỗ Thanh Quyền', 1),
('4', 'Chu Nam Thắng', 1);

-- --------------------------------------------------------

--
-- Table structure for table `playlist`
--

CREATE TABLE `playlist` (
  `maplaylist` varchar(50) NOT NULL,
  `tenplaylist` varchar(50) NOT NULL,
  `soluong` int(11) NOT NULL,
  `manguoinghe` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `playlist`
--

INSERT INTO `playlist` (`maplaylist`, `tenplaylist`, `soluong`, `manguoinghe`) VALUES
('1', 'Nhạc Tiếng Anh', 2, '1'),
('2', 'aa', 2, '4'),
('3', 'bbb', 2, '3'),
('4', 'Nhạc Tiếng Anh', 1, '2');

-- --------------------------------------------------------

--
-- Table structure for table `playlist_baihat`
--

CREATE TABLE `playlist_baihat` (
  `maplaylist` varchar(50) NOT NULL,
  `mabaihat` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `playlist_baihat`
--

INSERT INTO `playlist_baihat` (`maplaylist`, `mabaihat`) VALUES
('1', '1'),
('1', '123'),
('4', '1'),
('2', '1'),
('3', '1');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `baihat`
--
ALTER TABLE `baihat`
  ADD PRIMARY KEY (`mabaihat`);

--
-- Indexes for table `casi`
--
ALTER TABLE `casi`
  ADD PRIMARY KEY (`macasi`);

--
-- Indexes for table `casi_baihat`
--
ALTER TABLE `casi_baihat`
  ADD PRIMARY KEY (`macasi`,`mabaihat`),
  ADD KEY `casi_bh_` (`mabaihat`);

--
-- Indexes for table `nguoinghe`
--
ALTER TABLE `nguoinghe`
  ADD PRIMARY KEY (`mann`);

--
-- Indexes for table `playlist`
--
ALTER TABLE `playlist`
  ADD PRIMARY KEY (`maplaylist`),
  ADD KEY `conty_chinhanh` (`manguoinghe`);

--
-- Indexes for table `playlist_baihat`
--
ALTER TABLE `playlist_baihat`
  ADD KEY `pll_` (`mabaihat`),
  ADD KEY `casi_bh__` (`maplaylist`);

--
-- Constraints for dumped tables
--

--
-- Constraints for table `casi_baihat`
--
ALTER TABLE `casi_baihat`
  ADD CONSTRAINT `casi_bh` FOREIGN KEY (`macasi`) REFERENCES `casi` (`macasi`),
  ADD CONSTRAINT `casi_bh_` FOREIGN KEY (`mabaihat`) REFERENCES `baihat` (`mabaihat`);

--
-- Constraints for table `playlist`
--
ALTER TABLE `playlist`
  ADD CONSTRAINT `conty_chinhanh` FOREIGN KEY (`manguoinghe`) REFERENCES `nguoinghe` (`mann`);

--
-- Constraints for table `playlist_baihat`
--
ALTER TABLE `playlist_baihat`
  ADD CONSTRAINT `casi_bh__` FOREIGN KEY (`maplaylist`) REFERENCES `playlist` (`maplaylist`),
  ADD CONSTRAINT `pll_` FOREIGN KEY (`mabaihat`) REFERENCES `baihat` (`mabaihat`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
