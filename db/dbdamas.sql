-- phpMyAdmin SQL Dump
-- version 3.3.9
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Oct 30, 2018 at 07:03 PM
-- Server version: 5.5.8
-- PHP Version: 5.3.5

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `dbdamas`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE IF NOT EXISTS `admin` (
  `admin_id` int(11) NOT NULL AUTO_INCREMENT,
  `admin_loginid` varchar(50) NOT NULL,
  `admin_pass` varchar(100) NOT NULL,
  PRIMARY KEY (`admin_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=7 ;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`admin_id`, `admin_loginid`, `admin_pass`) VALUES
(1, 'adminn', '209d5fae8b2ba427d30650dd0250942af944a0c9'),
(3, 'saleem', '50235dc82b862c60896311ef39fb46c70b26edac'),
(4, 'test', 'a94a8fe5ccb19ba61c4c0873d391e987982fbbd3'),
(5, 'jafar', 'a09cc4cccc0885f6aaa35c3a181174b4'),
(6, 'admin', '7110eda4d09e062aa5e4a390b0a572ac0d2c0220');

-- --------------------------------------------------------

--
-- Table structure for table `advertise`
--

CREATE TABLE IF NOT EXISTS `advertise` (
  `ID` int(11) NOT NULL AUTO_INCREMENT,
  `Link` varchar(50) NOT NULL,
  `Image` varchar(50) NOT NULL,
  `IsActive` varchar(2) NOT NULL,
  PRIMARY KEY (`ID`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=5 ;

--
-- Dumping data for table `advertise`
--

INSERT INTO `advertise` (`ID`, `Link`, `Image`, `IsActive`) VALUES
(1, 'http://www.heritagejewels.com.pk/', 'images/advertisment/her.jpg', 'N'),
(2, 'http://www.damasjewellery.com/', 'images/advertisment/img1.jpg', 'Y'),
(4, 'https://www.patialadiamonds.com/', 'images/advertisment/patialaaa.jpg', 'N');

-- --------------------------------------------------------

--
-- Table structure for table `category`
--

CREATE TABLE IF NOT EXISTS `category` (
  `category_id` int(11) NOT NULL AUTO_INCREMENT,
  `category_name` varchar(150) NOT NULL,
  `category_image` varchar(40) NOT NULL,
  PRIMARY KEY (`category_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=7 ;

--
-- Dumping data for table `category`
--

INSERT INTO `category` (`category_id`, `category_name`, `category_image`) VALUES
(1, 'NECKLACE', 'images/home/sdddd.jpg'),
(2, 'BRACELET', 'images/home/img5.jpg'),
(3, 'BANGLES', 'images/home/img4.jpg'),
(4, 'EARRINGS', 'images/home/earing.jpg'),
(5, 'RING', 'images/home/img2.jpg'),
(6, 'PENDANT', 'images/home/pend5.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `customer`
--

CREATE TABLE IF NOT EXISTS `customer` (
  `customer_id` int(11) NOT NULL AUTO_INCREMENT,
  `customer_firstname` varchar(50) NOT NULL,
  `customer_lastname` varchar(50) NOT NULL,
  `customer_email` varchar(50) NOT NULL,
  `customer_loginid` varchar(50) NOT NULL,
  `customer_mobile` varchar(20) NOT NULL,
  `customer_pass` varchar(50) NOT NULL,
  `customer_Address` varchar(100) NOT NULL,
  PRIMARY KEY (`customer_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- Dumping data for table `customer`
--

INSERT INTO `customer` (`customer_id`, `customer_firstname`, `customer_lastname`, `customer_email`, `customer_loginid`, `customer_mobile`, `customer_pass`, `customer_Address`) VALUES
(1, 'saleem', 'khan', 'saleem.duh@gmail.com', 'saleem', '03402117563', '1234', 'Supper Highway karachi Pakistan'),
(2, 'Javed', 'khan', 'saleem.duhs@gmail.com', 'javed', '0340216677', '1234', 'Lahore D chock pakistan'),
(3, 'Aleem', 'Khan', 'Aleem@gmail.com', 'aleem', '987466575858', '123', 'Karachi pakistan ffdd');

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE IF NOT EXISTS `orders` (
  `ord_id` int(11) NOT NULL AUTO_INCREMENT,
  `user_id` int(11) NOT NULL,
  `rid` int(11) NOT NULL,
  `total_amount` float(10,2) NOT NULL,
  PRIMARY KEY (`ord_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `orders`
--

INSERT INTO `orders` (`ord_id`, `user_id`, `rid`, `total_amount`) VALUES
(1, 3, 0, 30000.00),
(2, 3, 0, 3700.00);

-- --------------------------------------------------------

--
-- Table structure for table `order_detail`
--

CREATE TABLE IF NOT EXISTS `order_detail` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `oid` int(11) NOT NULL,
  `product_id` int(24) NOT NULL,
  `qty` int(50) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- Dumping data for table `order_detail`
--

INSERT INTO `order_detail` (`id`, `oid`, `product_id`, `qty`) VALUES
(1, 1, 8, 2),
(2, 1, 9, 1),
(3, 2, 14, 1);

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE IF NOT EXISTS `products` (
  `product_id` int(11) NOT NULL AUTO_INCREMENT,
  `product_name` varchar(150) NOT NULL,
  `image` varchar(100) NOT NULL,
  `price` int(11) NOT NULL,
  `category_id` int(11) NOT NULL,
  `active` varchar(1) NOT NULL,
  PRIMARY KEY (`product_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=41 ;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`product_id`, `product_name`, `image`, `price`, `category_id`, `active`) VALUES
(1, 'Africa Bangle', 'images/products/bang.jpg', 5800, 3, 'Y'),
(2, 'Marrakech Bangle', 'images/products/ban2.jpg', 5000, 3, 'Y'),
(3, 'Mira Bangle', 'images/products/ban3.jpg', 9200, 3, 'Y'),
(4, 'Ananya Bangle', 'images/products/ban4.jpg', 5500, 3, 'Y'),
(5, 'Mira Bangle		', 'images/products/ban5.jpg', 8500, 3, 'Y'),
(6, 'Pois Moi Bangle		', 'images/products/ban6.jpg', 11450, 3, 'Y'),
(7, 'Striking Pearl Necklace Set	', 'images/products/neck1.jpg', 9000, 1, 'Y'),
(8, 'Rangoli Necklace Set	', 'images/products/neck2.jpg', 15000, 1, 'Y'),
(9, 'Mira Necklace Set	', 'images/products/neck3.jpg', 15000, 1, 'Y'),
(10, 'Liberty Necklace	', 'images/products/neck4.jpg', 14000, 1, 'Y'),
(11, 'Bon Ton Necklace	', 'images/products/neck5.jpg', 10000, 1, 'Y'),
(12, 'Rangoli Necklace Set	', 'images/products/neck6.jpg', 10000, 1, 'Y'),
(13, 'Baraka Kabala Bracelet	', 'images/products/brace1.jpg', 2500, 2, 'Y'),
(14, 'Baraka Space Run Bracelet	', 'images/products/brace2.jpg', 3700, 2, 'Y'),
(15, 'Baraka Space Run Bracelet	', 'images/products/brace3.jpg', 3000, 2, 'Y'),
(16, 'Baraka Space Run Bracelet	', 'images/products/brace4.jpg', 2999, 2, 'Y'),
(17, 'Baraka Vortex Bracelet	', 'images/products/brace5.jpg', 2000, 2, 'Y'),
(19, 'Baron Bracelet	', 'images/products/brace7.jpg', 5500, 2, 'Y'),
(20, 'OneSixEight Earrings	', 'images/products/ear1.jpg', 9000, 4, 'Y'),
(21, 'Avani Earring	', 'images/products/ear2.jpg', 12000, 4, 'Y'),
(22, 'Avani Earring	', 'images/products/ear3.jpg', 13000, 4, 'Y'),
(23, 'Harmony Earring	', 'images/products/ear4.jpg', 5600, 4, 'Y'),
(24, 'Harmony Earring	', 'images/products/ear5.jpg', 14500, 4, 'Y'),
(25, 'Harmony Earring	', 'images/products/ear6.jpg', 13000, 4, 'Y'),
(26, 'One Six Eight Pendant	', 'images/products/pend1.jpg', 12500, 6, 'Y'),
(27, 'One Six Eight Pendant	', 'images/products/pend2.jpg', 15000, 6, 'Y'),
(28, 'Al Manthourah Necklace	', 'images/products/pend3.jpg', 12999, 6, 'Y'),
(29, 'One Six Eight Pendant	', 'images/products/pend4.jpg', 8500, 6, 'Y'),
(30, 'Vera Pendant	', 'images/products/pend5.jpg', 6950, 6, 'Y'),
(31, 'Faberge Heritage Pendant	', 'images/products/pend6.jpg', 5500, 6, 'Y'),
(32, 'OneSixEight Ring	', 'images/products/ring1.jpg', 9500, 5, 'Y'),
(33, 'Avani Ring	', 'images/products/ring2.jpg', 12500, 5, 'Y'),
(34, 'Avani Ring	', 'images/products/ring3.jpg', 20000, 5, 'Y'),
(35, 'Al Manthourah Ring	', 'images/products/ring4.jpg', 25600, 5, 'Y'),
(36, 'Avani Ring	', 'images/products/ring5.jpg', 10500, 5, 'Y'),
(38, 'Peacock Feather Ring', 'images/products/ring12.jpg', 6500, 5, 'Y'),
(39, 'Rajasthani Bali ', 'images/products/raghistani.jpg', 2500, 4, 'Y'),
(40, 'Riwaayat Elegant Genuine', 'images/products/Newpnadant.jpg', 3999, 6, 'Y');

-- --------------------------------------------------------

--
-- Table structure for table `tblmenus`
--

CREATE TABLE IF NOT EXISTS `tblmenus` (
  `mId` int(11) NOT NULL AUTO_INCREMENT,
  `mName` varchar(20) NOT NULL,
  `mLink` varchar(40) NOT NULL,
  `mStatus` int(11) NOT NULL,
  PRIMARY KEY (`mId`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=7 ;

--
-- Dumping data for table `tblmenus`
--

INSERT INTO `tblmenus` (`mId`, `mName`, `mLink`, `mStatus`) VALUES
(1, 'Home', 'Home.php', 1),
(2, 'Products', 'products.php', 1),
(5, 'Contact us', 'Contact.php', 1),
(6, 'My Profile', 'account.php', 1);

-- --------------------------------------------------------

--
-- Table structure for table `temporder`
--

CREATE TABLE IF NOT EXISTS `temporder` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `ProductId` int(11) NOT NULL,
  `ProductName` varchar(56) NOT NULL,
  `Price` float NOT NULL,
  `Qty` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=19 ;

--
-- Dumping data for table `temporder`
--

