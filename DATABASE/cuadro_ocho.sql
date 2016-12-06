-- phpMyAdmin SQL Dump
-- version 4.1.12
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Dec 05, 2016 at 04:04 PM
-- Server version: 5.6.16
-- PHP Version: 5.5.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `cuadro_ocho`
--

-- --------------------------------------------------------

--
-- Table structure for table `accounts`
--

CREATE TABLE IF NOT EXISTS `accounts` (
  `account_id` int(11) NOT NULL AUTO_INCREMENT,
  `account_name` varchar(300) NOT NULL,
  `person_of_contact` int(11) NOT NULL,
  `contact_number` int(11) NOT NULL,
  `credit_limit` int(11) NOT NULL,
  PRIMARY KEY (`account_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `inventory`
--

CREATE TABLE IF NOT EXISTS `inventory` (
  `product_id` int(11) NOT NULL AUTO_INCREMENT,
  `product_qty` int(11) NOT NULL,
  `product_name` varchar(500) NOT NULL,
  `product_fraight_cost` int(11) NOT NULL,
  `product_actual_cost` int(11) NOT NULL,
  `product_unit_cost` int(11) NOT NULL,
  `product_evaluation_cost` int(11) NOT NULL,
  `product_date` date NOT NULL,
  `product_desc` varchar(800) NOT NULL,
  `product_supplier` varchar(500) NOT NULL,
  PRIMARY KEY (`product_id`),
  KEY `product_name` (`product_name`),
  KEY `product_supplier` (`product_supplier`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `sales`
--

CREATE TABLE IF NOT EXISTS `sales` (
  `sales_id` int(11) NOT NULL AUTO_INCREMENT,
  `sales_category` varchar(300) NOT NULL,
  `sales_date` datetime NOT NULL,
  `sales_receipt_num` int(11) NOT NULL,
  `sales_name` varchar(500) NOT NULL,
  `sales_product_code` int(11) NOT NULL,
  `sales_qty` int(11) NOT NULL,
  `sales_delivery_charge` int(11) NOT NULL,
  `sales_mop` int(11) NOT NULL,
  `sales_prod_name` varchar(500) NOT NULL,
  `sales_supplier` varchar(500) NOT NULL,
  `sales_price` int(11) NOT NULL,
  PRIMARY KEY (`sales_id`),
  KEY `sales_product_code` (`sales_product_code`),
  KEY `sales_product_code_2` (`sales_product_code`),
  KEY `sales_prod_name` (`sales_prod_name`),
  KEY `sales_supplier` (`sales_supplier`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `supplier`
--

CREATE TABLE IF NOT EXISTS `supplier` (
  `supplier_id` int(11) NOT NULL AUTO_INCREMENT,
  `supplier_name` varchar(300) NOT NULL,
  `supplier_poc` varchar(300) NOT NULL,
  `supplier_contact` int(11) NOT NULL,
  `supplier_address` int(11) NOT NULL,
  PRIMARY KEY (`supplier_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE IF NOT EXISTS `users` (
  `user_id` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(20) NOT NULL,
  `password` varchar(50) NOT NULL,
  `firstname` varchar(30) NOT NULL,
  `lastname` varchar(30) NOT NULL,
  `type` int(11) NOT NULL,
  PRIMARY KEY (`user_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`user_id`, `username`, `password`, `firstname`, `lastname`, `type`) VALUES
(1, 'admin', '21232f297a57a5a743894a0e4a801fc3', 'John', 'Doe', 0),
(2, 'user', 'ee11cbb19052e40b07aac0ca060c23ee', 'John', 'Does', 1);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
