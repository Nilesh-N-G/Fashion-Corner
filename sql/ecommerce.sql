-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 18, 2024 at 04:08 AM
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
-- Database: `ecommerce`
--

-- --------------------------------------------------------

--
-- Table structure for table `product_details`
--

CREATE TABLE `product_details` (
  `product_id` int(11) NOT NULL,
  `product_name` varchar(255) NOT NULL,
  `product_type` int(11) NOT NULL,
  `product_price` int(11) NOT NULL,
  `product_image` varchar(255) NOT NULL,
  `product_desc` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `product_details`
--

INSERT INTO `product_details` (`product_id`, `product_name`, `product_type`, `product_price`, `product_image`, `product_desc`) VALUES
(1, 'Raymond Blue Shirt', 1, 450, 'shirt1.jpg', 'Material : Polyester<br/>\r\nStyle : Formal<br/>\r\nNeck Style : Button-down<br/>\r\nPattern : Striped<br/>\r\nCountry of Origin : Bharat<br/>'),
(2, 'Arrow Men\'s Shirt', 1, 580, 'shirt2.jpg', '</br> Material : Polyester </br>\r\nStyle : Western </br>\r\nNeck Style : Collared neck</br>\r\nPattern : Printed </br>\r\nCountry of Origin : Bharat </br>'),
(3, 'Backberrys Men\'s Shirt', 1, 400, 'shirt3.jpg', '</br> Material: Cotton Blend </br>\r\nStyle: Men casual shirt </br>\r\nNeck Style: Shawl Collar </br>\r\nPattern : Printed </br>\r\nCountry of Origin: Bharat </br>'),
(4, 'Peter England Shirt', 1, 800, 'shirt4.jpg', ' </br> Material: Printed Shirt </br>\r\nStyle: Western </br>\r\nNeck Style: Button-down Collar </br>\r\nPattern : Striped </br>\r\nCountry of Origin: Bharat </br>'),
(5, 'Allen Solly Shirt', 1, 320, 'shirt5.jpg', '</br> Material: Lycra </br>\r\nStyle: Formal </br>\r\nNeck Style: Classic </br>\r\nPattern : Solid </br>\r\nCountry of Origin: Bharat </br>'),
(6, 'Gucci Shirt', 1, 1000, 'shirt6.jpg', '</br> Material: Polyester </br>\r\nStyle: Slim fit </br>\r\nNeck Style: Spread Collar </br>\r\nPattern : Printed </br>\r\nCountry of Origin: Bharat </br>'),
(7, 'Neem London Shirt', 1, 520, 'shirt7.jpg', '</br> Material: Viscose </br>\r\nStyle: Regular </br>\r\nNeck Style: State </br>\r\nPattern : Short Sleeve </br>\r\nCountry of Origin: Bharat </br>'),
(8, 'Luca Faloni Shirt', 1, 800, 'shirt8.jpg', '</br> Material: Printed Shirt </br>\r\nStyle: Formal </br>\r\nNeck Style: Button-down </br> \r\nPattern : Floral </br>\r\nCountry of Origin: Bharat </br>'),
(9, 'Kanjeevaram Saree', 4, 720, 'saree1.jpg', '</br> Material: Assam Cotton silk </br>\r\nSaree Color: Green  </br>\r\nSaree Length : 5.5 Meter </br>\r\nCountry of Origin: Bharat </br>'),
(10, 'Chiffon Saree', 4, 950, 'saree2.jpg', ' </br> Material: Art silk </br>\r\nSaree Color: Golden Yellow </br>\r\nSaree Length : 5.5 Meter </br>\r\nCountry of Origin: Bharat </br>'),
(11, 'Taant Saree', 4, 1000, 'saree3.jpg', '</br> Material: Poly silk </br>\r\nSaree Color: Peacock color </br>\r\nSaree Length : 5.5 Meter </br>\r\nCountry of Origin: Bharat </br>'),
(12, 'Kalyani Silk Saree', 4, 800, 'saree4.jpg', '</br> Material: Art Silk </br>\r\nSaree Color: Pink </br>\r\nSaree Length : 5.5 Meter </br>\r\nCountry of Origin: Bharat  </br>'),
(13, 'Sidhidata Saree', 4, 1050, 'saree5.jpg', ' </br> Material: Banarasi Silk </br>\r\nSaree Color: Yellowish </br>\r\nSaree Length : 5.5 Meter </br>\r\nCountry of Origin: Bharat </br>'),
(14, 'Anarva Saree', 4, 650, 'saree6.jpg', '</br> Material: Silk Blend </br>\r\nSaree Color: Maroon </br>\r\nSaree Length : 5.5 Meter </br>\r\nCountry of Origin: Bharat </br>'),
(15, 'Pratham Saree', 4, 580, 'saree7.jpg', '</br> Material: Georgette </br>\r\nSaree Color: Green </br>\r\nSaree Length : 5.5 Meter </br>\r\nCountry of Origin: Bharat </br>'),
(16, 'Tereza Saree', 4, 400, 'saree8.jpg', '</br> Material: Pure silk </br>\r\nSaree Color: Coffee </br>\r\nSaree Length : 5.5 Meter </br>\r\nCountry of Origin: Bharat </br>'),
(19, 'BEN MARTIN', 2, 1000, 'jean2.jpg', '</br> Material: Fabric cotton Lycra </br>\r\nStyle: Jeans </br>\r\nPattern : Solid </br>\r\nCountry of Origin: Bharat </br>'),
(20, 'BILLFORD', 2, 1200, 'jean3.jpg', '</br> Material: Cotton Blend </br>\r\nStyle: Jeans</br>\r\nPattern : Classic </br>\r\nCountry of Origin: Bharat </br>'),
(21, 'PETER ENGLAND', 2, 500, 'jean4.jpg', '</br>Material: Cotton</br>\r\nStyle: Slim</br>\r\nPattern : Solid</br>\r\nCountry of Origin: Bharat</br>'),
(22, 'DENIM', 2, 500, 'jean5.jpg', '</br>Material: Cotton</br>\r\nStyle: Casual</br>\r\nPattern : Solid</br>\r\nCountry of Origin: Bharat</br>'),
(23, 'KARGINS', 2, 800, 'jean6.jpg', '</br>Material: Cotton Blend</br>\r\nStyle: Classic</br>\r\nPattern : Solid</br>\r\nCountry of Origin: Bharat</br>'),
(24, 'KETCH', 2, 900, 'jean7.jpg', '</br>Material: Cotton Blend</br>\r\nStyle: Jeans</br>\r\nPattern : Solid</br>\r\nCountry of Origin: Bharat</br>'),
(25, 'ALLEN SOLLY', 2, 100, 'jean8.jpg', '</br>Material: Cotton</br>\r\nStyle: Jeans</br>\r\nPattern : Zipper</br>\r\nCountry of Origin: Bharat</br>'),
(26, 'RAGZO', 2, 900, 'jean9.jpg', '</br>Material: Fabric</br>\r\nStyle: Jeans</br>\r\nPattern : Solid</br>\r\nCountry of Origin: Bharat</br>'),
(27, 'DEN MARTINI', 7, 800, 'jack1.jpg', '</br>Material: Nylon</br>\r\nStyle: Jacket</br>\r\nPattern : Quilted</br>\r\nCountry of Origin: Bharat</br>'),
(28, 'FOREST CLUB', 7, 1200, 'jack2.jpg', '</br>Material: Bomber</br>\r\nStyle: Bomber Jacket</br>\r\nPattern : Regular</br>\r\nCountry of Origin: Bharat</br>'),
(29, 'COTTY', 7, 1200, 'jack3.jpg', '</br>Material: Cotton</br>\r\nStyle: Jacket</br>\r\nPattern : Solid</br>\r\nCountry of Origin: Bharat</br>'),
(30, 'ALLEN SOLLY', 7, 2000, 'jack4.jpg', '</br>Material: Cotton Fleece</br>\r\nStyle: Camoufage </br>\r\nPattern : Solid </br>\r\nCountry of Origin: Bharat</br>'),
(31, 'BOLD FIT', 7, 2500, 'jack5.jpg', '</br>Material: Blended Cotton</br>\r\nStyle: Blouson</br>\r\nPattern : All print</br>\r\nCountry of Origin: Bharat</br>'),
(32, 'LONDON HILLS', 7, 800, 'jack6.jpg', '</br>Material: Bomber</br>\r\nStyle: Regular Fit</br>\r\nPattern : Camouflage</br>\r\nCountry of Origin: Bharat</br>'),
(33, 'RED TAPE', 7, 2000, 'jack7.jpg', '</br>Material: Polyester</br>\r\nStyle: Regular jacket</br>\r\nPattern : Solid</br>\r\nCountry of Origin: Bharat</br>'),
(34, 'DOLLAR', 7, 1200, 'jack8.jpg', '</br>Material: Polyester</br>\r\nStyle: Casual jacket</br>\r\nPattern : Regular Solid</br>\r\nCountry of Origin: Bharat</br>'),
(35, 'LYMIO', 8, 500, 'kurti1.jpg', '</br>Material: Cotton Blend</br>\r\nStyle: Regular</br>\r\nPattern : Embroidered</br>\r\nCountry of Origin: Bharat</br>'),
(36, 'RYTRAS', 8, 395, 'kurti2.jpg', '</br>Material: Cotton Blend</br>\r\nStyle: Regular</br>\r\nPattern : Embroidered</br>\r\nCountry of Origin: Bharat</br>'),
(37, 'BOLLYCLUES', 8, 800, 'kurti3.jpg', '</br>Material: Cotton </br>\r\nStyle: Regular</br>\r\nPattern : Floral</br>\r\nCountry of Origin: Bharat</br>'),
(38, 'GOSRIKI', 8, 900, 'kurti4.jpg', '</br>Material: Cotton Blend</br>\r\nStyle: Regular</br>\r\nPattern : Embroidered</br>\r\nCountry of Origin: Bharat</br>'),
(39, 'ANNI', 8, 500, 'kurti5.jpg', '</br>Material: Cotton Blend</br>\r\nStyle: Regular Fit</br>\r\nPattern : Embroidered</br>\r\nCountry of Origin: Bharat</br>'),
(40, 'FASHIONWEAR', 8, 435, 'kurti6.jpg', '</br>Material: Fabric</br>\r\nStyle: Regular Fit</br>\r\nPattern : Embroidered</br>\r\nCountry of Origin: Bharat</br>'),
(41, 'STYLUM', 8, 600, 'kurti7.jpg', '</br>Material: Cotton Blend</br>\r\nStyle: Regular</br>\r\nPattern : Embroidered</br>\r\nCountry of Origin: Bharat</br>'),
(42, 'GALWIZ', 8, 550, 'kurti8.jpg', '<br/>Material: Cotton<br/>\r\nStyle: Regular<br/>\r\nPattern : Embroidered<br/>\r\nCountry of Origin: Bharat<br/>'),
(43, 'JB FASHION', 5, 300, 'top1.jpg', '<br/>Material: Polyester<br/>\r\nStyle: Scoop<br/>\r\nPattern : Solid<br/>\r\nCountry of Origin: Bharat<br/>'),
(44, 'HSR', 5, 450, 'top2.jpg', '<br/>Material: Polyester<br/>\r\nStyle: Scoop<br/>\r\nPattern : Solid<br/>\r\nCountry of Origin: Bharat<br/>'),
(45, 'LYMIO', 5, 350, 'top3.jpg', '<br/>Material: Polyester<br/>\r\nStyle: Scoop<br/>\r\nPattern : Printed<br/>\r\nCountry of Origin: Bharat<br/>'),
(46, 'FNOCKS', 5, 400, 'top4.jpg', '<br/>Material: Polyester<br/>\r\nStyle: Scoop<br/>\r\nPattern : Solid<br/>\r\nCountry of Origin: Bharat<br/>'),
(47, 'SELVIA', 5, 350, 'top5.jpg', '<br/>Material: Cotton<br/>\r\nStyle: Regular<br/>\r\nPattern : Solid<br/>\r\nCountry of Origin: Bharat<br/>'),
(48, 'SIRIL', 5, 500, 'top6.jpg', '<br/>Material: Polyester<br/>\r\nStyle: Scoop<br/>\r\nPattern : Solid<br/>\r\nCountry of Origin: Bharat<br/>'),
(49, 'WEDANI', 5, 450, 'top7.jpg', '<br/>Material: Cotton<br/>\r\nStyle: Scoop<br/>\r\nPattern : Solid<br/>\r\nCountry of Origin: Bharat<br/>'),
(50, 'TAGAS', 5, 550, 'top8.jpg', '<br/>Material: Polyester<br/>\r\nStyle: Scoop<br/>\r\nPattern : Printed<br/>\r\nCountry of Origin: Bharat<br/>');

-- --------------------------------------------------------

--
-- Table structure for table `product_type`
--

CREATE TABLE `product_type` (
  `product_type` int(11) NOT NULL,
  `product_gender` int(11) NOT NULL,
  `product_name` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `product_type`
--

INSERT INTO `product_type` (`product_type`, `product_gender`, `product_name`) VALUES
(1, 1, 'Shirt'),
(2, 1, 'Pants'),
(4, 2, 'Saree'),
(5, 2, 'Tops'),
(7, 1, 'Jackets'),
(8, 2, 'Kurti');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `username` varchar(250) NOT NULL,
  `password` varchar(250) NOT NULL,
  `utype` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`username`, `password`, `utype`) VALUES
('Admin123', 'Admin123', 1),
('User123', 'User123', 0);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `product_details`
--
ALTER TABLE `product_details`
  ADD PRIMARY KEY (`product_id`),
  ADD KEY `product_type` (`product_type`);

--
-- Indexes for table `product_type`
--
ALTER TABLE `product_type`
  ADD PRIMARY KEY (`product_type`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `product_details`
--
ALTER TABLE `product_details`
  MODIFY `product_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=51;

--
-- AUTO_INCREMENT for table `product_type`
--
ALTER TABLE `product_type`
  MODIFY `product_type` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `product_details`
--
ALTER TABLE `product_details`
  ADD CONSTRAINT `product_details_ibfk_1` FOREIGN KEY (`product_type`) REFERENCES `product_type` (`product_type`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
