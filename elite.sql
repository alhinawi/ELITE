-- phpMyAdmin SQL Dump
-- version 5.1.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 16, 2022 at 01:51 PM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 7.4.29

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `elite`
--

-- --------------------------------------------------------

--
-- Table structure for table `cart`
--

CREATE TABLE `cart` (
  `username` varchar(25) NOT NULL,
  `id` int(5) NOT NULL,
  `name` varchar(20) NOT NULL,
  `imagePath` varchar(50) NOT NULL,
  `quantity` int(5) NOT NULL,
  `price` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `cart`
--

INSERT INTO `cart` (`username`, `id`, `name`, `imagePath`, `quantity`, `price`) VALUES
('3asfuur', 4, 'Round Neck T-Shirt', 'theme/img/p-5.jpg', 2, 350);

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `Product_Name` varchar(30) NOT NULL,
  `Quantity` int(5) NOT NULL,
  `Price` float NOT NULL,
  `Product Description` varchar(60) NOT NULL,
  `Path` varchar(50) NOT NULL,
  `ID` int(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`Product_Name`, `Quantity`, `Price`, `Product Description`, `Path`, `ID`) VALUES
('Cardigan ', 20, 650, 'Front Opening\r\nHood Neck\r\nFull Sleeve\r\nSoft Touch Cotton Fab', 'theme/img/shrugBlue.jpg', 1),
('V-Neck T-Shirt', 20, 350, '80% Cotton and 20% polyester\r\nV-Neck T-Shirt\r\nSlim Fit\r\nHalf', 'theme/img/vneckBlack.jpg', 2),
('V-Neck T-Shirt', 20, 350, '80% Cotton and 20% polyester\r\nRound Neck \r\nSlim Fit\r\nHalf Sl', 'theme/img/men/vneckWhite.jpg', 3),
('Round Neck T-Shirt', 20, 350, 'Round Neck T-Shirt', 'theme/img/roundneckBlack.jpg', 4),
('Round Neck T-Shirt', 20, 350, '80% Cotton and 20% polyester Round Neck Slim Fit Half Sleeve', 'theme/img/roundneckBlue.jpg', 5),
('Collar T-Shirt', 20, 500, '60% Cotton and 40% polyester Collar Neck Slim Fit Half Sleev', 'theme/img/collarblack.jpg', 6),
('Collar T-Shirt', 20, 500, '60% Cotton and 40% polyester Collar Neck Slim Fit Half Sleev', 'theme/img/collarBlue.jpg', 7),
('Half Sleeve Shirt', 20, 500, '80% Cotton and 20% polyester \r\nRegular Fit \r\nHalf Sleeve \r\nM', 'theme/img/halfsleeveshirtGreen.jpg', 8),
('Half Sleeve Shirt', 20, 500, '80% Cotton and 20% polyester \r\nRegular Fit \r\nHalf Sleeve \r\nM', 'theme/img/halfsleeveshirtWhite.jpg', 9),
('Full Sleeve Shirt', 20, 650, '80% Cotton and 20% polyester\r\nSlim Fit \r\nFull Sleeve \r\nMachi', 'theme/img/fullsleeveBlue.jpg', 10),
('Full Sleeve Shirt', 20, 650, '80% Cotton and 20% polyester\r\nSlim Fit \r\nFull Sleeve \r\nMachi', 'theme/img/fullsleeveRed.jpg', 11),
('Joggers Tracks', 20, 700, '97% cotton and 3% elastane\r\nSlim Fit\r\nCold Water Machine Was', 'theme/img/joggertracksBlack.jpg', 12),
('Joggers Tracks', 20, 700, '97% cotton and 3% elastane\r\nSlim Fit\r\nCold Water Machine Was', 'theme/img/joggertracksGrey.jpg', 13),
('Jogger Jeans', 20, 800, 'Material:- Denim Jeans\r\nSlim Fit\r\nCold Water Machine Wash\r\nM', 'theme/img/joggerjeansBlack.jpg', 14),
('Jogger Jeans', 20, 800, 'Material:- Denim Jeans\r\nSlim Fit\r\nCold Water Machine Wash\r\nM', 'theme/img/joggerjeansBlue.jpg', 15),
('Jeans', 20, 1000, '\r\nDenim Jeans\r\nSlim Fit\r\nCold Water Machine Wash\r\nMade in In', 'theme/img/jeansBlack.jpg', 16),
('Jeans', 20, 1000, '\r\nDenim Jeans\r\nSlim Fit\r\nCold Water Machine Wash\r\nMade in In', 'theme/img/jeansBlue.jpg', 17),
('Shorts', 20, 450, '100% combed Cotton\r\nBillabong Shorts\r\nMachine Wash\r\nMade In ', 'theme/img/shortsBlack.jpg', 18),
('Shorts', 20, 450, '100% combed Cotton\r\nBillabong Shorts\r\nMachine Wash\r\nMade In ', 'theme/img/shortsCargo.jpg', 19),
('Black Croptop', 20, 500, 'Black CropTop', 'theme/img/croptopBlack.jpg', 20),
('Pink CropTop', 20, 600, 'Pink CropTop', 'theme/img/croptopPink.jpg', 21),
('Blue Gown', 30, 3000, 'Blue Gown', 'theme/img/gownBlue.jpg', 22),
('Red Gown', 30, 4000, 'Red Gown', 'theme/img/gownRed.jpg', 23),
('Black Jeans', 25, 1500, 'Black Jeans', 'theme/img/jeansBlack.jpg', 24),
('Blue Jeans', 15, 1400, 'Blue Jeans', 'theme/img/jeansblue.jpg', 25),
('Black Leggings', 20, 600, 'Black Leggings', 'theme/img/leggingsBlack.jpg', 26),
('Grey Leggings', 40, 700, 'Grey Leggings', 'theme/img/leggingsGrey.jpg', 27),
('Black One Piece', 20, 3500, 'Black One Piece', 'theme/img/onepieceBlack.jpg', 28),
('Blue One Piece', 25, 3750, 'Blue One Piece', 'theme/img/onepieceBlue.jpg', 29),
('Black & White Ringtees', 20, 900, 'Black & White Ringtees', 'theme/img/ringteesBlackWhite.jpg', 30),
('Red & White Ringtees', 30, 1799, 'Red & White Ringtees', 'theme/img/ringteesRedWhite.jpg', 31),
('Blue Shirt', 50, 1500, 'Blue Shirt', 'theme/img/shirtBlue.jpg', 32),
('Maroon Shirt', 40, 1600, 'Maroon Shirt', 'theme/img/shirtMaroon.jpg', 33),
('Black Shorts', 30, 700, 'Black Shorts', 'theme/img/shortsBlack.jpg', 34),
('Blue Shorts', 30, 900, 'Blue Shorts', 'theme/img/shortsBlue.jpg', 35),
('Black Skirt', 20, 1300, 'Black Skirt', 'theme/img/skirtBlack.jpg', 36),
('Blue Skirt', 35, 1500, 'Blue Skirt', 'theme/img/skirtBlue.jpg', 37),
('Blue Top', 40, 1500, 'Blue Top', 'theme/img/topBlue.jpg', 38),
('Pink Top', 50, 1200, 'Pink Top', 'theme/img/topPink.jpg', 39),
('Black Collar T-Shirt', 20, 500, 'Black Collar T-Shirt', 'assets/products/kids/collartshirtBlack.jpg', 40),
('White Collar T-Shirt', 25, 700, 'White Collar T-Shirt', 'assets/products/kids/collartshirtWhite.jpg', 41),
('Red Full Sleeve Shirt', 25, 1200, 'Red Full Sleeve Shirt', 'assets/products/kids/fullsleeveRedBlack.jpg', 42),
('White Full Sleeve Shirt', 20, 1300, 'White Full Sleeve Shirt', 'assets/products/kids/fullsleeveWhite.jpg', 43),
('White Half Sleeve Shirt', 25, 1500, 'White Half Sleeve Shirt', 'assets/products/kids/halfsleeveBlackWhite.jpg', 44),
('Red & White Half Sleeve Shirt', 25, 1400, 'Red & White Half Sleeve Shirt', 'assets/products/kids/halfsleeveWhiteRed.jpg', 45),
('Black Jeans', 25, 1700, 'Black Jeans', 'assets/products/kids/jeansBlack.jpg', 46),
('Blue Jeans', 25, 1800, 'Blue Jeans', 'assets/products/kids/jeansBlue.jpg', 47),
('Black Jogger Jeans', 25, 1600, 'Black Jogger Jeans', 'assets/products/kids/joggerjeansBlack.jpg', 48),
('Blue Jogger Jeans', 50, 900, 'Blue Jogger Jeans', 'assets/products/kids/joggerjeansBlue.jpg', 49),
('Black Round Neck T-Shirt', 50, 600, 'Black Round Neck T-Shirt', 'assets/products/kids/roundneckBlack.jpg', 50),
('Red Round Neck T-Shirt', 50, 700, 'Red Round Neck T-Shirt', 'assets/products/kids/roundneckRed.jpg', 51),
('Blue Shorts', 50, 300, 'Blue Shorts', 'assets/products/kids/shortsBlue.jpg', 52),
('Green Shorts', 25, 350, 'Green Shorts', 'assets/products/kids/shortsGreen.jpg', 53),
('Black Skirt', 25, 600, 'Black Skirt', 'assets/products/kids/skirtBlack.jpg', 54),
('Pink Skirt', 25, 700, 'Pink Skirt', 'assets/products/kids/skirtPink.jpg', 55),
('Black Track Pant', 25, 900, 'Black Track Pant', 'assets/products/kids/trackpantBlack.jpg', 56),
('Grey Track Pant', 30, 800, 'Grey Track Pant', 'assets/products/kids/trackpantGrey.jpg', 57),
('Black V-Neck T-Shirt', 35, 1300, 'Black V-Neck T-Shirt', 'assets/products/kids/vneckBlack.jpg', 58),
('Green Top for Girls', 35, 1000, 'Green Top for Girls', 'assets/products/kids/vneckGreen.jpg', 59);

-- --------------------------------------------------------

--
-- Table structure for table `shipping_details`
--

CREATE TABLE `shipping_details` (
  `email` varchar(40) CHARACTER SET utf8mb4 NOT NULL,
  `name` varchar(40) CHARACTER SET utf8mb4 NOT NULL,
  `address` varchar(80) CHARACTER SET utf8mb4 NOT NULL,
  `pin` int(5) NOT NULL,
  `mobile` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `shipping_details`
--

INSERT INTO `shipping_details` (`email`, `name`, `address`, `pin`, `mobile`) VALUES
('3asfuur@gmail.com', '3asfuur', 'Minyet Sandoub - Mansoura - Egypt', 35796, 1206400472),
('mostafaragab99@gmail.com', 'Mostafa Ragab', 'nabrouh - mansoura - egypt', 35685, 1003236616),
('nadamohamed@gmail.com', 'nada mohamed', 'mansoura - egypt', 48596, 1067803284),
('rayanhawas@gmail.com', 'rayan hawas', 'Minyet Sandoub - Mansoura- Egypt', 35796, 1211675600),
('zahra@gmail.com', 'Zahra ', 'Mit Ghamr - Mansoura - Egypt', 35612, 1013438000);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `UserID` int(11) NOT NULL COMMENT 'To Identify user',
  `Username` varchar(255) NOT NULL COMMENT 'username to login',
  `Password` varchar(255) CHARACTER SET utf8 NOT NULL COMMENT 'password to login',
  `Email` varchar(255) NOT NULL,
  `FullName` varchar(255) NOT NULL,
  `GroupID` int(11) NOT NULL DEFAULT 0 COMMENT 'identify user group',
  `TrustStatus` int(11) NOT NULL DEFAULT 0 COMMENT 'seller rank',
  `RegStatus` int(11) NOT NULL DEFAULT 0 COMMENT 'user approval'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`UserID`, `Username`, `Password`, `Email`, `FullName`, `GroupID`, `TrustStatus`, `RegStatus`) VALUES
(1, '3asfuur', '40bd001563085fc35165329ea1ff5c5ecbdbbeef', '3asfuur@gmail.com', 'Mohamed Alhinawi', 1, 1, 1),
(2, 'mostafa', '40bd001563085fc35165329ea1ff5c5ecbdbbeef', 'mostafaragab99@gmail.com', 'Mostafa Ragab', 1, 1, 1),
(3, 'rayan', '40bd001563085fc35165329ea1ff5c5ecbdbbeef', 'rayanhawas@gmail.com', 'Rayan Hawas', 0, 0, 1),
(4, 'Nada ', '40bd001563085fc35165329ea1ff5c5ecbdbbeef', 'nadamohamed@gmail.com', 'Nada Mohamed', 0, 0, 0),
(5, 'merna', '40bd001563085fc35165329ea1ff5c5ecbdbbeef', 'merna@gmail.com', 'merna', 0, 0, 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `cart`
--
ALTER TABLE `cart`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `shipping_details`
--
ALTER TABLE `shipping_details`
  ADD PRIMARY KEY (`email`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`UserID`),
  ADD UNIQUE KEY `Username` (`Username`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `ID` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=60;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `UserID` int(11) NOT NULL AUTO_INCREMENT COMMENT 'To Identify user', AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
