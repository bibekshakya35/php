-- phpMyAdmin SQL Dump
-- version 4.1.14
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Dec 30, 2015 at 07:10 AM
-- Server version: 5.6.17
-- PHP Version: 5.5.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `bullock`
--

-- --------------------------------------------------------

--
-- Table structure for table `invoice`
--

CREATE TABLE IF NOT EXISTS `invoice` (
  `INO` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(50) NOT NULL,
  `PCODE` varchar(50) NOT NULL,
  `productname` varchar(50) NOT NULL,
  `price` double NOT NULL,
  `date` varchar(50) NOT NULL,
  `place` varchar(50) NOT NULL,
  `contactnumber` decimal(15,0) NOT NULL,
  PRIMARY KEY (`INO`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=20 ;

--
-- Dumping data for table `invoice`
--

INSERT INTO `invoice` (`INO`, `username`, `PCODE`, `productname`, `price`, `date`, `place`, `contactnumber`) VALUES
(1, 'Selena Gomez', 'pc10', 'm', 20000, '13/12/2015', 'ktm', '9843598726'),
(2, 'MILEY', 'PC10', 'm', 2000, '20/11/2015', 'ktm', '9843050505'),
(3, 'Demi', 'PC3', 'The Lavaah Shoe', 20000, '13/12/2015', 'ktm', '9843598726'),
(4, 'Keri Hilson', 'PC1', 'Brokyln Tshirt', 6000, '13/12/2015', 'ktm', '9843598726'),
(5, 'Beck G', 'PC3', 'The Lavaah Shoe', 20000, '13/12/2015', 'Ktm', '984300251'),
(6, 'Adele', 'PC4', 'Lafayette Sunglasses', 4000, '13/12/2015', 'ktm', '984578787'),
(7, 'Adele', 'PC4', 'Lafayette Sunglasses', 4000, '13/12/2015', 'ktm', '15215'),
(8, 'Cherly lyoid', 'PC7', 'Blue Evolution', 40000, '13/12/2015', 'ktm', '9845787878'),
(9, 'Skylark', 'PC4', 'Lafayette Sunglasses', 4000, '13/12/2015', 'ktm', '987546587'),
(10, 'Beyonce', 'PC4', 'Lafayette Sunglasses', 4000, '13/01/2015', 'ktm', '98788788'),
(11, 'Ronda', 'PC4', 'Lafayette Sunglasses', 4000, '13/12/2015', 'ktm', '98754897'),
(12, 'Ne-yo', 'PC3', 'The Lavaah Shoe', 20000, '13/12/2015', 'balaju', '987548785'),
(13, 'Ne-YO', 'PC1', 'Brokyln Tshirt', 6000, '13/12/2015', 'ktm', '987845455'),
(14, 'Ne-yo', 'PC3', 'The Lavaah Shoe', 20000, '13/12/2015', 'ktm', '9845484515'),
(15, 'Neyo', 'PC9', 'MNWATCHES', 4000, '13/12/2015', 'ktm', '982544511'),
(16, 'chris', 'PC9', 'MNWATCHES', 4000, '12/13/2015', 'ktm', '9843598726'),
(17, 'rihanna', 'PC4', 'Lafayette Sunglasses', 4000, '12/12/2015', 'ktm', '984352145'),
(18, 'Justin Bieber', 'PC8', 'Nixon', 4000, '12/12/2015', 'ktm', '981515151'),
(19, 'Jb', 'PC4', 'Lafayette Sunglasses', 4000, '12/12/2015', 'ktm', '9842251252');

-- --------------------------------------------------------

--
-- Table structure for table `orderplacement`
--

CREATE TABLE IF NOT EXISTS `orderplacement` (
  `ONO` tinyint(4) NOT NULL AUTO_INCREMENT,
  `PCODE` varchar(50) NOT NULL,
  `QTY` tinyint(11) NOT NULL,
  `username` varchar(50) NOT NULL,
  `contactnumber` varchar(50) NOT NULL,
  `image` varchar(50) NOT NULL,
  `productname` varchar(50) NOT NULL,
  `color` varchar(50) NOT NULL,
  `size` varchar(50) NOT NULL,
  `price` double NOT NULL,
  PRIMARY KEY (`ONO`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=84 ;

--
-- Dumping data for table `orderplacement`
--

INSERT INTO `orderplacement` (`ONO`, `PCODE`, `QTY`, `username`, `contactnumber`, `image`, `productname`, `color`, `size`, `price`) VALUES
(32, 'PC3', 1, 'Niha Shrestha', '9843049922', 'image/footwear.JPG', 'The Lavaah Shoe', 'Black', 'xl', 20000),
(34, 'PC7', 1, 'Niha Shrestha', '9843049922', 'image/dress2.JPG', 'Blue Evolution', 'Black', 'xxl', 40000),
(71, 'PC13', 1, 'Niha Shrestha', '9843049922', 'image/ROIALENCOREEYEWEAR.JPG', 'ROIALENCORE', 'Black', '', 4000),
(78, 'PC7', 1, 'Niha Shrestha', '9843049922', 'image/dress2.JPG', 'Blue Evolution', 'Black', 'xxl', 40000),
(81, 'PC8', 1, 'Niha Shrestha', '9843049922', 'image/NixonWatch.JPG', 'Nixon', 'gold', '', 4000),
(82, 'PC8', 1, 'Niha Shrestha', '9843049922', 'image/NixonWatch.JPG', 'Nixon', 'gold', '', 4000),
(83, 'PC13', 1, 'Niha Shrestha', '9843049922', 'image/ROIALENCOREEYEWEAR.JPG', 'ROIALENCORE', 'Black', '', 4000);

-- --------------------------------------------------------

--
-- Table structure for table `product`
--

CREATE TABLE IF NOT EXISTS `product` (
  `PID` tinyint(4) NOT NULL AUTO_INCREMENT,
  `PCODE` varchar(10) NOT NULL,
  `productname` varchar(50) NOT NULL,
  `color` varchar(50) NOT NULL,
  `size` varchar(50) NOT NULL,
  `stock` int(11) NOT NULL,
  `price` double NOT NULL,
  `image` varchar(50) NOT NULL,
  `date` varchar(50) NOT NULL,
  `review` text NOT NULL,
  `made` varchar(50) NOT NULL,
  `type` varchar(50) NOT NULL,
  `altimage` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`PID`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=15 ;

--
-- Dumping data for table `product`
--

INSERT INTO `product` (`PID`, `PCODE`, `productname`, `color`, `size`, `stock`, `price`, `image`, `date`, `review`, `made`, `type`, `altimage`) VALUES
(1, 'PC1', 'Brokyln Tshirt', 'white', 'xxl', 20, 6000, 'image/broklyn.JPG', '12/4/2015', 'MADE IN USA', 'MADE IN USA', 'cloth', ''),
(2, 'PC2', 'Lilly (Gold)', 'gold', '', 20, 40000, 'image/watch.JPG', '12/4/2015', 'Made in USa', 'MADE IN USA', 'watch', ''),
(3, 'PC3', 'The Lavaah Shoe', 'Black', 'xl', 20, 20000, 'image/footwear.JPG', '12/4/2015', '', 'Made in Italy', 'footwear', ''),
(4, 'PC4', 'Lafayette Sunglasses', 'Brown', '', 20, 4000, 'image/eyewear.JPG', '12/4/2015', '', 'Made in Italy', 'eyewear', ''),
(5, 'PC5', 'lira', 'Black', 'xxl', 20, 40000, 'image/dress.JPG', '12/4/2015', '', 'Made In Vietnam', 'cloth', ''),
(6, 'PC6', 'Gag Threads', 'Black', 'xxl', 20, 40000, 'image/dress3.JPG', '12/4/2015', 'Made In german', 'Made In german', 'cloth', ''),
(7, 'PC7', 'Blue Evolution', 'Black', 'xxl', 20, 40000, 'image/dress2.JPG', '12/4/2015', '', 'Made In german', 'cloth', ''),
(8, 'PC8', 'Nixon', 'gold', '', 20, 4000, 'image/NixonWatch.JPG', '12/4/2015', '\r\n\r\nVersion: The Re-Run Watch in Gold<br><br>\r\n\r\nDETAILS\r\nThe Nixon Re-Run Watch in Gold\r\nWhat time is it? Time to get a new watch. What time is it? Time to get a new watch... Re-Run!\r\nCustom four-function digital movement with calendar\r\nDual time, alarm, countdown timer and light\r\nCustom 100 meter polycarbonate with polyurethane pushers and hardened mineral crystal case\r\nCustom steel band\r\nImported\r\nBy Nixon\r\n', 'Made in Usa', 'watch', ''),
(9, 'PC9', 'MNWATCHES', 'white', '', 20, 4000, 'image/MNWATCHES.JPG', '12/4/2015', 'Detail:\r\nCase Size: 36mm\r\nPlating: Silver\r\nFace: Embossed Rose in Silver\r\nStrap: Lace Covered PU Leather Strap\r\nMovement: Japanese\r\nClasp: Jewelry Style Buckle\r\nBack: Stainless Steel\r\nCrystal: Mineral', 'Made in Usa', 'watch', ''),
(10, 'PC10', 'GSHOCKWATCH', 'white', '', 20, 4000, 'image/GSHOCKWATCH.JPG', '12/4/2015', 'Detail:\r\nThe G-SHOCK GDX-6900 Watch in White\r\nAlpha gel\r\nShock resistant\r\n200M water resistant\r\nImported\r\nBy G-SHOCK', 'Made in Usa', 'watch', ''),
(11, 'PC11', 'FLUDWATCH', 'red', '', 20, 4000, 'image/FLUDWATCH.JPG', '12/4/2015', 'The Flud Watches Bun B x Flud Pantone Watch\r\n44 MM\r\nPVC band\r\nAnalog movement\r\nImported\r\nBy Flud Watches', 'Made in Usa', 'watch', ''),
(12, 'PC12', 'ROIALEYEWEAR', 'black', '', 20, 4000, 'image/ROIALEYEWEAR.JPG', '12/4/2015', 'Detail\r\n-Metal Frame\r\n-Leatherette Accents\r\n-Lens Width: 4.7cm\r\n-Lens Height: 5.3cm\r\nThis item ships directly from the vendor.', 'Made in Usa', 'eyewear', ''),
(13, 'PC13', 'ROIALENCORE', 'Black', '', 20, 4000, 'image/ROIALENCOREEYEWEAR.JPG', '12/4/2015', 'Premium Glasses\r\n\r\nRectangle Alloy Frame\r\n\r\n55mm Width\r\n\r\n42mm Height\r\n\r\nUVA UVB', 'Made in Usa', 'eyewear', ''),
(14, 'PC14', 'ROIAL20GOLD', 'red', '', 20, 4000, 'image/ROIAL20GOLDEYEWEAR.JPG', '12/4/2015', 'Round Alloy Frame\r\n\r\nReflective Lens\r\n\r\n5.1 cm Width\r\n\r\n5.1 cm Height\r\n\r\nUVA UVB', 'Made in Usa', 'eyewear', '');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
