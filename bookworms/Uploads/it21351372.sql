-- phpMyAdmin SQL Dump
-- version 4.9.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3308
-- Generation Time: Oct 21, 2022 at 10:39 AM
-- Server version: 8.0.18
-- PHP Version: 7.3.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `it21351372`
--

-- --------------------------------------------------------

--
-- Table structure for table `tbladvertisement`
--

DROP TABLE IF EXISTS `tbladvertisement`;
CREATE TABLE IF NOT EXISTS `tbladvertisement` (
  `advertisementID` int(11) NOT NULL AUTO_INCREMENT,
  `productName` varchar(50) NOT NULL,
  `description` varchar(3000) NOT NULL,
  `publish` int(11) NOT NULL,
  `imagePath` varchar(500) NOT NULL,
  `contactNumber` varchar(15) NOT NULL,
  `category` varchar(20) NOT NULL,
  `email` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  PRIMARY KEY (`advertisementID`)
) ENGINE=MyISAM AUTO_INCREMENT=10 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `tbladvertisement`
--

INSERT INTO `tbladvertisement` (`advertisementID`, `productName`, `description`, `publish`, `imagePath`, `contactNumber`, `category`, `email`) VALUES
(6, 'Boxes', 'Carboard Boxes', 1, 'uploads/1.jpg', '0783439022', 'cardboard', 'akashmusix01@gmail.com'),
(9, 'Wine Glasses', 'Wine glasses', 1, 'uploads/2.jpg', '0781234778', 'glass', 'akashmusix01@gmail.com'),
(8, 'Metal Bulks', 'Metal items', 1, 'uploads/4.jpg', '0783439022', 'metal', 'akashmusix01@gmail.com');

-- --------------------------------------------------------

--
-- Table structure for table `tblinquiry`
--

DROP TABLE IF EXISTS `tblinquiry`;
CREATE TABLE IF NOT EXISTS `tblinquiry` (
  `inquiryID` int(11) NOT NULL,
  `inquiry` varchar(3000) NOT NULL,
  `date` varchar(50) NOT NULL,
  `advertisementID` int(11) NOT NULL,
  `email` varchar(20) NOT NULL,
  PRIMARY KEY (`inquiryID`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- --------------------------------------------------------

--
-- Table structure for table `tbluser`
--

DROP TABLE IF EXISTS `tbluser`;
CREATE TABLE IF NOT EXISTS `tbluser` (
  `email` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `name` varchar(50) NOT NULL,
  `contactNumber` varchar(15) NOT NULL,
  `password` varchar(20) NOT NULL,
  PRIMARY KEY (`email`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `tbluser`
--

INSERT INTO `tbluser` (`email`, `name`, `contactNumber`, `password`) VALUES
('akashmusix01@gmail.com', 'Sachin', '0773439022', '152221'),
('sachinakash@gmail.com', 'Akash', '0772168498', '123456'),
('sachin@gmail.com', 'Sachin Akash', '071234567', '789456');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
