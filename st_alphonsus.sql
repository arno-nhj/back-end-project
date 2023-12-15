-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 15, 2023 at 01:21 PM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `st_alphonsus`
--

-- --------------------------------------------------------

--
-- Table structure for table `class`
--

CREATE TABLE `class` (
  `CLASS_ID` varchar(10) NOT NULL,
  `CLASS_NAME` varchar(20) NOT NULL,
  `CLASS_CAPACITY` int(3) NOT NULL,
  `TEACHER_ID` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `class`
--

INSERT INTO `class` (`CLASS_ID`, `CLASS_NAME`, `CLASS_CAPACITY`, `TEACHER_ID`) VALUES
('class001', 'Reception Year', 50, 'T001'),
('class002', 'Year One', 50, 'T002'),
('class003', 'Year Two', 50, 'T003'),
('class004', 'Year Three', 50, 'T004'),
('class005', 'Year Four', 50, 'T005'),
('class006', 'Year Five', 50, 'T006'),
('class007', 'Year Six', 50, 'T007');

-- --------------------------------------------------------

--
-- Table structure for table `login`
--

CREATE TABLE `login` (
  `username` varchar(50) NOT NULL,
  `pass` varchar(255) DEFAULT NULL,
  `level` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `login`
--

INSERT INTO `login` (`username`, `pass`, `level`) VALUES
('123', '123', 1),
('abc', 'abc', 2),
('qwer', 'qwer', 3);

-- --------------------------------------------------------

--
-- Table structure for table `pg`
--

CREATE TABLE `pg` (
  `PG_ID` varchar(10) NOT NULL,
  `PG_NAME` varchar(20) NOT NULL,
  `PG_ADDRESS` varchar(50) NOT NULL,
  `PG_EMAIL` varchar(20) DEFAULT NULL,
  `PG_PHONE` int(15) NOT NULL,
  `P_ID` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `pg`
--

INSERT INTO `pg` (`PG_ID`, `PG_NAME`, `PG_ADDRESS`, `PG_EMAIL`, `PG_PHONE`, `P_ID`) VALUES
('G001', 'Chloe', 'Deansgate', 'Chloe@gmail.com', 2147483647, '000001'),
('G002', 'Annie', 'Deansgate', 'Annie@gmail.com', 2147483647, '000001'),
('P001', 'Samantha', 'Deansgate', 'Samantha@gmail.com', 2147483647, '000001'),
('P003', 'Ash', '2 Stranmillis Street', '2@ac.uk', 0, '000003');

-- --------------------------------------------------------

--
-- Table structure for table `pupil`
--

CREATE TABLE `pupil` (
  `P_ID` varchar(10) NOT NULL,
  `P_NAME` varchar(20) NOT NULL,
  `P_AGE` int(3) NOT NULL,
  `P_ADDRESS` char(100) NOT NULL,
  `M_INFO` varchar(200) DEFAULT NULL,
  `P_EMAIL` varchar(20) DEFAULT NULL,
  `P_PHONE` int(15) DEFAULT NULL,
  `CLASS_ID` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `pupil`
--

INSERT INTO `pupil` (`P_ID`, `P_NAME`, `P_AGE`, `P_ADDRESS`, `M_INFO`, `P_EMAIL`, `P_PHONE`, `CLASS_ID`) VALUES
('000001', 'Arno', 7, 'Deansgate', 'Unknown', '1158220973@qq.com', 2147483647, 'class001'),
('000002', 'Bravo', 8, 'Chorlton', 'Unknown', 'Bravo@gmail.com', 2147483647, 'class001'),
('000003', 'Dickson', 6, 'Didsbury', 'Broken legs', 'Dickson@gmail.com', 2147483647, 'class002'),
('000004', 'Christian', 9, 'Old Trafford', 'Coughing', 'Christian@gmail.com', 2147483647, 'class005'),
('000005', 'Taha', 6, 'Unknown', 'Unknown', 'Taha@gmail.com', 753, 'class001');

-- --------------------------------------------------------

--
-- Table structure for table `teacher`
--

CREATE TABLE `teacher` (
  `TEACHER_ID` varchar(10) NOT NULL,
  `TEAHCER_NAME` varchar(20) NOT NULL,
  `TEACHER_ADDRESS` varchar(100) NOT NULL,
  `TEACHER_SALARY` int(10) DEFAULT NULL,
  `TEACHER_BG` varchar(200) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `teacher`
--

INSERT INTO `teacher` (`TEACHER_ID`, `TEAHCER_NAME`, `TEACHER_ADDRESS`, `TEACHER_SALARY`, `TEACHER_BG`) VALUES
('T001', 'Asma', 'aaa', 100, ''),
('T002', 'Brown', 'bbb', 100, 'Unknown'),
('T003', 'Chirs', 'ccc', 100, ''),
('T004', 'Daisy', 'ddd', 100, ''),
('T005', 'Eric', 'eee', 100, ''),
('T006', 'Frank', 'Unknown', 100, 'Unknown'),
('T007', 'Gillan', 'Leeds', 100, 'Student of UoM');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `class`
--
ALTER TABLE `class`
  ADD PRIMARY KEY (`CLASS_ID`),
  ADD KEY `TEACHER_ID` (`TEACHER_ID`);

--
-- Indexes for table `login`
--
ALTER TABLE `login`
  ADD PRIMARY KEY (`username`);

--
-- Indexes for table `pg`
--
ALTER TABLE `pg`
  ADD PRIMARY KEY (`PG_ID`),
  ADD KEY `P_ID` (`P_ID`);

--
-- Indexes for table `pupil`
--
ALTER TABLE `pupil`
  ADD PRIMARY KEY (`P_ID`),
  ADD KEY `CLASS_ID` (`CLASS_ID`);

--
-- Indexes for table `teacher`
--
ALTER TABLE `teacher`
  ADD PRIMARY KEY (`TEACHER_ID`);

--
-- Constraints for dumped tables
--

--
-- Constraints for table `class`
--
ALTER TABLE `class`
  ADD CONSTRAINT `class_ibfk_1` FOREIGN KEY (`TEACHER_ID`) REFERENCES `teacher` (`TEACHER_ID`);

--
-- Constraints for table `pg`
--
ALTER TABLE `pg`
  ADD CONSTRAINT `pg_ibfk_1` FOREIGN KEY (`P_ID`) REFERENCES `pupil` (`P_ID`);

--
-- Constraints for table `pupil`
--
ALTER TABLE `pupil`
  ADD CONSTRAINT `pupil_ibfk_1` FOREIGN KEY (`CLASS_ID`) REFERENCES `class` (`CLASS_ID`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
