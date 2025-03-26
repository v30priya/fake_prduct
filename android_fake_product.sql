-- phpMyAdmin SQL Dump
-- version 2.11.6
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Apr 01, 2024 at 08:47 AM
-- Server version: 5.0.51
-- PHP Version: 5.2.6

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `android_fake_product`
--

-- --------------------------------------------------------

--
-- Table structure for table `customer_details`
--

CREATE TABLE `customer_details` (
  `id` int(100) NOT NULL,
  `name` varchar(100) NOT NULL,
  `contact` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `area` varchar(100) NOT NULL,
  `address` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `status` varchar(100) NOT NULL,
  `report` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `customer_details`
--


-- --------------------------------------------------------

--
-- Table structure for table `health_inspector_details`
--

CREATE TABLE `health_inspector_details` (
  `id` int(100) NOT NULL,
  `name` varchar(100) NOT NULL,
  `contact` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `area` varchar(100) NOT NULL,
  `address` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `status` varchar(100) NOT NULL,
  `report` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `health_inspector_details`
--


-- --------------------------------------------------------

--
-- Table structure for table `manufacturer_details`
--

CREATE TABLE `manufacturer_details` (
  `id` int(100) NOT NULL,
  `company_name` varchar(100) NOT NULL,
  `manufacturer_name` varchar(100) NOT NULL,
  `company_description` varchar(100) NOT NULL,
  `contact` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `area` varchar(100) NOT NULL,
  `address` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `iosid` varchar(100) NOT NULL,
  `iso_status` varchar(100) NOT NULL,
  `status` varchar(100) NOT NULL,
  `report` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `manufacturer_details`
--


-- --------------------------------------------------------

--
-- Table structure for table `product_details`
--

CREATE TABLE `product_details` (
  `id` int(100) NOT NULL,
  `manufacturer` varchar(100) NOT NULL,
  `product_name` varchar(100) NOT NULL,
  `description` varchar(100) NOT NULL,
  `quantity` varchar(100) NOT NULL,
  `price` varchar(100) NOT NULL,
  `iso_status` varchar(100) NOT NULL,
  `status` varchar(100) NOT NULL,
  `report` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `product_details`
--


-- --------------------------------------------------------

--
-- Table structure for table `purchase_details`
--

CREATE TABLE `purchase_details` (
  `id` int(100) NOT NULL,
  `name` varchar(100) NOT NULL,
  `pid` varchar(100) NOT NULL,
  `manufacturer` varchar(100) NOT NULL,
  `product_name` varchar(100) NOT NULL,
  `description` varchar(100) NOT NULL,
  `quantity` varchar(100) NOT NULL,
  `price` varchar(100) NOT NULL,
  `iso_status` varchar(100) NOT NULL,
  `rdate` varchar(100) NOT NULL,
  `reseller` varchar(100) NOT NULL,
  `status` varchar(100) NOT NULL,
  `report` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `purchase_details`
--


-- --------------------------------------------------------

--
-- Table structure for table `retailer_details`
--

CREATE TABLE `retailer_details` (
  `id` int(100) NOT NULL,
  `name` varchar(100) NOT NULL,
  `contact` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `address` varchar(100) NOT NULL,
  `area` varchar(100) NOT NULL,
  `pass` varchar(100) NOT NULL,
  `status` varchar(100) NOT NULL,
  `report` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `retailer_details`
--

