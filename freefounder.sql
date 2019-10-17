-- phpMyAdmin SQL Dump
-- version 4.2.11
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Sep 02, 2016 at 06:05 AM
-- Server version: 5.6.21
-- PHP Version: 5.6.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `freefounder`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE IF NOT EXISTS `admin` (
`id` int(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `email`, `password`) VALUES
(1, 'luqman@gmail.com', 'luqman'),
(2, 'waqas@gmail.com', 'waqas'),
(3, 'shehzad@gmail.com', 'shehzad'),
(4, 'imran@gmail.com', 'imran');

-- --------------------------------------------------------

--
-- Table structure for table `car_company`
--

CREATE TABLE IF NOT EXISTS `car_company` (
`car_company_id` int(11) NOT NULL,
  `car_company_name` varchar(30) DEFAULT NULL,
  `category_id` int(11) DEFAULT NULL
) ENGINE=MyISAM AUTO_INCREMENT=8 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `car_company`
--

INSERT INTO `car_company` (`car_company_id`, `car_company_name`, `category_id`) VALUES
(1, 'Honda', 3),
(2, 'BMW', 3),
(3, 'SUZUKI', 3),
(6, 'TOYOTA', 3),
(7, 'MERCEDES', 3);

-- --------------------------------------------------------

--
-- Table structure for table `car_specification`
--

CREATE TABLE IF NOT EXISTS `car_specification` (
`id` int(11) NOT NULL,
  `company` varchar(100) DEFAULT NULL,
  `modelName` varchar(30) DEFAULT NULL,
  `engine_type` varchar(30) DEFAULT NULL,
  `image` varchar(1000) DEFAULT NULL,
  `price` int(100) NOT NULL,
  `body_type` varchar(30) DEFAULT NULL,
  `orientation` varchar(30) DEFAULT NULL,
  `fourwd_or_awd` varchar(1000) DEFAULT NULL,
  `torque` varchar(30) DEFAULT NULL,
  `safety` varchar(30) DEFAULT NULL,
  `displacement` varchar(30) DEFAULT NULL,
  `size` varchar(30) DEFAULT NULL,
  `doors` int(100) NOT NULL,
  `per_liter_mile` varchar(30) DEFAULT NULL,
  `video` varchar(1000) DEFAULT NULL
) ENGINE=MyISAM AUTO_INCREMENT=36 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `car_specification`
--

INSERT INTO `car_specification` (`id`, `company`, `modelName`, `engine_type`, `image`, `price`, `body_type`, `orientation`, `fourwd_or_awd`, `torque`, `safety`, `displacement`, `size`, `doors`, `per_liter_mile`, `video`) VALUES
(17, 'HONDA', 'HONDA', '120 hp @ 6000 RPM', 'Honda_CR-Z_2012.jpg', 3400000, 'Automatic', 'Petrol', 'Front: Discs, Rear: Drums', '173 Nm @ 4500 RPM', '220 KM/H', '1300 cc', 'Alloy Wheels', 2, '11 KM/LITER', '2012 Honda CR-Z Test Drive & Hybrid Car Review.mp4'),
(16, 'HONDA', 'HONDA', '180 hp @ 6800 RPM', 'Honda_CR-V_2012.jpg', 7900000, 'Automatic', 'Petrol', 'Front: Ventilated Disks, Rear:', '173 Nm @ 4500 RPM', '220 KM/H', '2354 cc', 'Alloy Wheels', 4, '11 KM/LITER', '---2016 Honda CR-V - Review and Road Test - YouTube.mp4'),
(15, 'HONDA', 'Accord VTi 2.4', '175 hp @ 6200 RPM', 'Honda_Accord_9th_2012.jpg', 10650000, 'Automatic', 'Petrol', 'Front: Ventilated Discs, Rear:', '173 Nm @ 4500 RPM', '220 KM/H', '2354 cc', 'Steel Rims with Wheels Caps', 4, '11 KM/LITER', ''),
(14, 'HONDA', 'City i-VTEC Prosmatec', '100 hp @ 6200 RPM', 'Honda-city_2008.jpg', 1500000, 'Automatic', 'Petrol', 'Front: Discs, Rear: Drums', '173 Nm @ 4500 RPM', '220 KM/H', '1300 cc', 'Steel Rims with Wheels Caps', 4, '11 KM/LITER', 'Honda-city_2008.jpg'),
(18, 'HONDA', 'HR-V CVT', '118 hp @ 6600 RPM', 'Honda-HRV-2016.jpg', 340000, 'Automatic', 'Petrol', 'Front: Ventilated Discs, Rear:', '173 Nm @ 4500 RPM', '220 KM/H', '1489 cc', 'Steel Rims with Wheels Caps', 4, '11 KM/LITER', ''),
(19, 'SUZUKI', 'SUZUKI', '40 hp @ 5500 RPM', 'Suzuki_Mehran_2012.jpg', 630000, 'Manual', 'Petrol', 'Front: Discs, Rear: Drums', '78 Nm @ 3000 RPM', '140 KM/H', '796 cc', 'Alloy Wheels', 4, '11 KM/LITER', '---Suzuki Mehran.mp4'),
(20, 'SUZUKI', 'Wagon R VXL', '67 hp @ 6200 RPM', '1.PNG', 1000000, 'Manual', 'Petrol', 'Front: Discs, Rear: Drums', '66 Nm @ 3500 RPM', '140 KM/H', '796 cc', 'Alloy Wheels', 4, '11 KM/LITER', ''),
(21, 'SUZUKI', 'Cultus EURO II', '40 hp @ 5500 RPM', 'Suzuki_Cultus_2nd.jpg', 1000000, 'Manual', 'Petrol', 'Front: Discs, Rear: Drums', '66 Nm @ 3500 RPM', '150 KM/H', '796 cc', 'Alloy Wheels', 4, '11 KM/LITER', ''),
(22, 'SUZUKI', 'Swift DLX Automatic 1.', '92 hp @ 5600 RPM', 'Suzuki_Swift_2010.jpg', 1400000, 'Automatic', 'Petrol', 'Front: Discs, Rear: Drums', '78 Nm @ 3000 RPM', '150 KM/H', '1300 cc', 'Alloy Wheels', 4, '11 KM/LITER', ''),
(23, 'SUZUKI', 'SUZUKI', '2393 cc', '2.jpg', 5000000, 'Automatic', 'Petrol', 'Front: Ventilated Disks, Rear:', '173 Nm @ 4500 RPM', '220 KM/H', '2354 cc', 'Steel Rims with Wheels Caps', 4, '11 KM/LITER', '---2012 Suzuki Kizashi - Drive Time Review with Steve Hammes - YouTube.mp4'),
(24, 'TOYOTA', 'TOYOTA', '118 hp @ 6600 RPM', '2015_Toyota_Corolla_Grande.jpg', 2000000, 'Automatic', 'Petrol', 'Front: Discs, Rear: Drums', '78 Nm @ 3000 RPM', '220 KM/H', '1798 cc', 'Alloy Wheels', 4, '12 KM/LITER', '---Toyota Corolla Altis Review.mp4'),
(25, 'TOYOTA', 'Corolla GLi 1.3 VVTi', '84 hp @ 6000 RPM', 'Toyota_Corolla_11th.jpg', 1700000, 'Automatic', 'Petrol', 'Front: Discs, Rear: Drums', '78 Nm @ 3000 RPM', '150 KM/H', '1489 cc', 'Alloy Wheels', 4, '12 KM/LITER', ''),
(26, 'TOYOTA', 'Prado VX 3.0', '172 hp @ 3400 RPM', 'a1.jpg', 19100000, 'Manual', 'Petrol', 'Front: Ventilated Discs, Rear:', '173 Nm @ 4500 RPM', '180 KM/H', '2982 cc', 'Steel Rims with Wheels Caps', 4, '11 KM/LITER', ''),
(27, 'TOYOTA', ' Fortuner 2.7 VVTi', '160 hp @ 5200 RPM', 'for.jpg', 4800000, 'Automatic', 'Petrol', 'Front: Ventilated Discs, Rear:', '78 Nm @ 3000 RPM', '150 KM/H', '2694 cc', 'Steel Rims with Wheels Caps', 4, '11 KM/LITER', ''),
(28, 'TOYOTA', 'Hilux 4X2 Single', '118 hp @ 6600 RPM', '1.jpg', 1700000, 'Manual', 'Diesel', 'Front: Discs, Rear: Drums', '78 Nm @ 3000 RPM', '200 KM/H', '2694 cc', 'Steel Rims with Wheels Caps', 4, '9 KM/LITER', ''),
(29, 'BMW', 'BMW', '340 hp @ 5800 RPM', 'BMW_5_Series_2010.jpg', 12500000, 'Automatic', 'Petrol', 'Front: Ventilated Discs, Rear:', '173 Nm @ 4500 RPM', '250 KM/H', '2982 cc', 'Steel Rims with Wheels Caps', 4, '11 KM/LITER', '---2013 BMW ActiveHybrid 5 Test Drive - 5-Series Hybrid Luxury Car Video Review - YouTube.mp4'),
(30, 'BMW', 'Series 318i', '118 hp @ 6600 RPM', 'BMW_3_Series_2012.jpg', 13000000, 'Automatic', 'Petrol', 'Front: Ventilated Discs, Rear:', '173 Nm @ 4500 RPM', '220 KM/H', '2354 cc', 'Steel Rims with Wheels Caps', 4, '11 KM/LITER', ''),
(31, 'BMW', 'X5 Series xDrive35i', '118 hp @ 6600 RPM', 'BMW_X5_2013.jpg', 12000000, 'Automatic', 'Petrol', 'Front: Ventilated Discs, Rear:', '173 Nm @ 4500 RPM', '250 KM/H', '2982 cc', 'Steel Rims with Wheels Caps', 4, '11 KM/LITER', ''),
(32, 'MERCEDES', 'MERCEDES', '156 hp @ 5300 RPM', 'Mercedes_Benz_C_Class_4th_Gen_(2014-Present).jpg', 6250000, 'Automatic', 'Petrol', 'Front: Ventilated Discs, Rear:', '173 Nm @ 4500 RPM', '220 KM/H', '2354 cc', 'Steel Rims with Wheels Caps', 4, '11 KM/LITER', '---Mercedes C-Class saloon (2011-2014) review - CarBuyer - YouTube.mp4'),
(33, 'MERCEDES', 'Benz E Class E200', '118 hp @ 6600 RPM', 'front_end_facelift.jpg', 12200000, 'Automatic', 'Petrol', 'Front: Ventilated Discs, Rear:', '173 Nm @ 4500 RPM', '250 KM/H', '2354 cc', 'Steel Rims with Wheels Caps', 4, '11 KM/LITER', ''),
(34, 'MERCEDES', 'Benz S Class S400', '306 hp @ 6500 RPM', 'Mercedes_S_class-2014.jpg', 17500000, 'Automatic', 'Petrol', 'Front: Ventilated Discs, Rear:', '173 Nm @ 4500 RPM', '220 KM/H', '3476 CC', 'Steel Rims with Wheels Caps', 4, '9 KM/LITER', ''),
(35, 'MERCEDES', ' Benz CLA Class', '120 hp @ 6000 RPM', 'MER.jpg', 7500000, 'Automatic', 'Petrol', 'Front: Ventilated Discs, Rear:', '173 Nm @ 4500 RPM', '220 KM/H', '2354 cc', 'Steel Rims with Wheels Caps', 4, '9 KM/LITER', '');

-- --------------------------------------------------------

--
-- Table structure for table `cell_phone_company`
--

CREATE TABLE IF NOT EXISTS `cell_phone_company` (
`cell_phone_company_id` int(11) NOT NULL,
  `cell_phone_company_name` varchar(30) DEFAULT NULL,
  `category_id` int(11) DEFAULT NULL
) ENGINE=MyISAM AUTO_INCREMENT=8 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `cell_phone_company`
--

INSERT INTO `cell_phone_company` (`cell_phone_company_id`, `cell_phone_company_name`, `category_id`) VALUES
(1, 'SAMSUNG', 1),
(2, 'IPHONES', 1),
(3, 'MOTOROLLA', 1),
(4, 'NOKIA', 1),
(5, 'QMOBILE', 1),
(6, 'SONY', 1),
(7, 'HTC', 1);

-- --------------------------------------------------------

--
-- Table structure for table `cell_phone_specification`
--

CREATE TABLE IF NOT EXISTS `cell_phone_specification` (
`id` int(11) NOT NULL,
  `company` varchar(30) DEFAULT NULL,
  `model` varchar(30) DEFAULT NULL,
  `image` varchar(1000) DEFAULT NULL,
  `price` varchar(30) DEFAULT NULL,
  `size` varchar(30) DEFAULT NULL,
  `camera` varchar(30) DEFAULT NULL,
  `battery_power` varchar(30) DEFAULT NULL,
  `processor` varchar(30) DEFAULT NULL,
  `ram` varchar(30) DEFAULT NULL,
  `memory` varchar(30) DEFAULT NULL,
  `sim` varchar(30) DEFAULT NULL,
  `sd_card` varchar(30) DEFAULT NULL,
  `video` text
) ENGINE=MyISAM AUTO_INCREMENT=80 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `cell_phone_specification`
--

INSERT INTO `cell_phone_specification` (`id`, `company`, `model`, `image`, `price`, `size`, `camera`, `battery_power`, `processor`, `ram`, `memory`, `sim`, `sd_card`, `video`) VALUES
(4, 'IPHONES', 'Iphone 6 Plus', 'apple-iphone-6-plus-1.jpg', '70000', '5.5 inches', '8 MP', 'Non-removable Li-Po 2915 mAh b', 'Dual-core 1.4 GHz Typhoon', '1 GB', '16/64/128 GB', 'single sim', 'not supported', '---iPhone 6s Plus Review! - YouTube.mp4'),
(54, 'SONY', 'Xperia E5', 'sony-xperia-e5r.jpg', '20000', '5.0 inches', '13 MP', 'Non-removable Li-Ion 2900 mAh ', 'Dual-core 1.4 GHz Typhoon', '2 GB', '16/32/64 GB', 'single sim', 'not supported', '---Sony Xperia E5 review- Xperia on a budget.mp4'),
(69, 'HTC', 'Butterfly 3', 'htc-butterfly-3-2.jpg', '30000', '5.2 inches', '13 MP', 'removable Li-Po 1517 mAh batte', 'Quad-core 2.7 GHz Krait 450', '2 GB', '16/64/128 GB', 'single sim', 'supported', '---HTC J Butterfly 3 - Insane Camera Smartphone (REVIEW   MY OPINION) 2015.mp4'),
(38, 'NOKIA', 'Lumia 530', 'nokia-lumia-530-1.jpg', '15000', '4.0 inches', '5 MP', 'removable Li-Po 1517 mAh batte', 'Dual-core 1.3 GHz', '1 GB', '8 GB', 'dual sim', 'supported', '---Nokia Lumia 530 review not a powerful quad core!.mp4'),
(62, 'HTC', 'Desire 825', 'htc-a56-desire-825-5.jpg', '26000', '5.2 inches', '12 MP', 'removable Li-Po 1517 mAh batte', 'Quad-core 2.7 GHz Krait 450', '2 GB RAM', '16/32/64 GB', 'single sim', 'supported', '---HTC Desire 825 Hands on, Camera, Features.mp4'),
(30, 'IPHONES', 'Iphone 6', 'apple-iphone-6-1.jpg', '54000', '4.7 inches', '8 MP', 'Non-removable Li-Po 2915 mAh b', 'Dual-core 1.4 GHz Typhoon', '1 GB', '16/64/128 GB', 'single sim', 'not supported', 'iPhone 6 Review- Now Fewer Reasons to Get an Android.mp4'),
(20, 'SAMSUNG', 'Galaxy S7', 'samsung-galaxy-s7-1.jpg', '65000', '5.7 inches', '12 MP', '3600 MAh', 'Quad-core 2.3 GHz Mongoose + q', '4 GB', '32/64 GB', 'single sim', 'supported', '---Samsung Galaxy S7 Long-Term Re-Review - YouTube.mp4'),
(21, 'SAMSUNG', ' Galaxy A7', 'samsung-galaxy-a7-2016-1.jpg', '45000', '5.5 inches', '13 MP', 'Non-removable Li-Ion 3300 mAh ', 'Octa-core 1.6 GHz Cortex-A53', '3 GB', '16 GB', 'single sim', 'supported', '---Samsung Galaxy A7 2016 [Review] - TecMundo - YouTube.mp4'),
(22, 'SAMSUNG', 'Galaxy S7 Edge', 'samsung-galaxy-s7-edge-1.jpg', '70000', '5.5 inches', '12 MP', 'Non-removable Li-Ion 3600 mAh ', 'Quad-core 2.3 GHz Mongoose', '4 GB', '32/64 GB', 'single sim', 'supported', '---Samsung Galaxy S7 edge Review - YouTube.mp4'),
(23, 'SAMSUNG', 'Galaxy A9(2016)', 'samsung-galaxy-a9-2016-6.jpg', '55000', '6.0 inches', '13 MP', 'Non-removable Li-Ion 4000 mAh ', 'Quad-core 1.8 GHz Cortex-A72', '3 GB', '16 GB', 'single sim', 'supported', '---Samsung Galaxy A9 (2016) review - YouTube.mp4'),
(24, 'SAMSUNG', 'Galaxy A5', 'samsung-galaxy-a5-2016-1.jpg', '43000', '5.2 inches', '13 MP', 'Non-removable Li-Ion 2900 mAh ', 'Octa-core 1.6 GHz Cortex-A53', '2 GB RAM', '16 GB', 'single sim', 'supported', '---Samsung Galaxy A5 (2016) review - YouTube_2.mp4'),
(25, 'SAMSUNG', 'Galaxy J5(2016)', 'sams-j5-6.jpg', '20000', '5.2 inches ', '13 MP', 'Non-removable Li-Ion 2900 mAh ', 'Quad-core 1.2 GHz Cortex-A53', '2 GB ', '8 GB', 'single sim', 'supported', '---Samsung Galaxy A5 (2016) review - YouTube.mp4'),
(26, 'SAMSUNG', 'Galaxy J7(2016)', 'samsung-galaxy-j7-2016-1.jpg', '26000', '5.5 inches', '13 MP', 'Non-removable Li-Ion 2900 mAh ', 'Octa-core 1.6 GHz Cortex-A53', '3 GB', '16 GB', 'single sim', 'supported', '---Samsung Galaxy J7 (2016) Review.mp4'),
(27, 'SAMSUNG', 'Galaxy On7 Pro', 'samsung-galaxy-on7-1.jpg', '18000', '5.5 inches', '13 MP', 'Non-removable Li-Ion 2900 mAh ', 'Quad-core 1.2 GHz Cortex-A53', '2 GB', '16 GB', 'dual sim', 'supported upto 265GB', '---Samsung Galaxy On7 Pro Unboxing -u0026 Quick Overview.mp4'),
(28, 'SAMSUNG', 'Galaxy S6 Edge plus', 'samsung-galaxy-s6-edge-plus-5.jpg', '58000', '5.7 inches', '16 MP', 'Non-removable Li-Ion 3600 mAh ', 'Exynos 7420 Octa-Core', '4 GB', '32/64 GB', 'single sim', 'supported', '---Samsung Galaxy S6 Edge Plus Hands On - YouTube.mp4'),
(29, 'SAMSUNG', 'Galaxy S6', 'samsung-galaxy-s6-1.jpg', '43000', '5.5 inches', '16 MP', 'Non-removable Li-Ion 2900 mAh ', 'Exynos 7420 Octa-Core', '3 GB', '32/64 GB', 'single sim', 'supported', '---Samsung Galaxy S6 Review.mp4'),
(31, 'IPHONES', 'Iphone 5s', 'apple-iphone-5s-ofic.jpg', '33000', '4.7 inches', '8 MP', 'Non-removable Li-Po 2915 mAh b', 'Dual-core 1.4 GHz Typhoon', '1 GB', '16/64/128 GB', 'single sim', 'not supported', '---iPhone 5S review.mp4'),
(32, 'IPHONES', 'Iphone 5c', 'apple-iphone-5c-ofic.jpg', '30000', '4.0 inches', '8 MP', 'Non-removable Li-Po 1517 mAh b', 'Dual-core 1.3 GHz Swift', '1 GB', '16/64/128 GB', 'single sim', 'not supported', '---iPhone 5c Review - YouTube.mp4'),
(33, 'IPHONES', 'IPad mini 4', 'ipad-mini-4-mobile-15.jpg', '36000', '7.9 inches', '8 MP', 'Non-removable Li-Po 2915 mAh b', 'Dual-core 1.3 GHz Swift', '1 GB', '16/64/128 GB', 'single sim', 'not supported', '---iPad Mini 4 Review.mp4'),
(34, 'IPHONES', 'iPhone 6s Plus', 'iphone6-plus-gris-sideral-prix.jpg', '75000', '5.5 inches', '16 MP', 'Non-removable Li-Po 2915 mAh b', 'Dual-core 1.84 GHz Twister', '2 GB', '16/64/128 GB', 'single sim', 'not supported', 'iPhone 6 Review- Now Fewer Reasons to Get an Android.mp4'),
(36, 'IPHONES', 'iPad pro', 'ipad-pro-spacegray-witb-201603.jpg', '85000', '12.9 inches', '8 MP', 'Non-removable Li-Ion 2900 mAh ', 'Dual-core 1.4 GHz Typhoon', '4 GB', '32/64/128 GB', 'no sim', 'not supported', '---iPad Pro review.mp4'),
(37, 'IPHONES', 'Iphone 5', 'apple-iphone-5-white.jpg', '34000', '4.0 inches', '8 MP', 'Non-removable Li-Po 1517 mAh b', 'Dual-core 1.3 GHz Swift', '1 GB', '16/64/128 GB', 'single sim', 'not supported', 'iPhone 5 Review!.mp4'),
(39, 'NOKIA', 'Nokia X2', 'Nokia-X2-Dual-SIM-2.jpg', '13000', '4.0 inches', '5 MP', 'removable Li-Po 1517 mAh batte', 'Dual-core 1.3 GHz', '1 GB', '8 GB', 'dual sim', 'supported', '---Nokia X2 Review.mp4'),
(40, 'NOKIA', 'Lumia 735', 'lumia-735-1.jpg', '16000', '4.0 inches', '8 MP', 'removable Li-Po 1517 mAh batte', 'Dual-core 1.4 GHz Typhoon', '1 GB', '16 GB', 'dual sim', 'supported', '---Microsoft Lumia 735 after couple days - YouTube.mp4'),
(41, 'NOKIA', 'Lumia 730', 'lumia-730-1.jpg', '13000', '4.0 inches', '6.7 MP', 'removable Li-Po 1517 mAh batte', 'Dual-core 1.3 GHz Swift', '1 GB', '8 GB', 'single sim', 'supported', '---Microsoft Lumia 735 after couple days - YouTube.mp4'),
(42, 'NOKIA', 'Lumia 830', 'nokia-lumia-830-1.jpg', '18000', '4.7 inches', '8 MP', 'removable Li-Po 1517 mAh batte', 'Dual-core 1.4 GHz Typhoon', '1 GB', '16 GB', 'single sim', 'supported', '---Nokia Lumia 530 review not a powerful quad core!.mp4'),
(43, 'NOKIA', 'Lumia 720', 'nokia-lumia-720-2.jpg', '20000', '4.7 inches', '6.7 MP', 'removable Li-Po 1517 mAh batte', 'Dual-core 1.4 GHz Typhoon', '1 GB', '16 GB', 'single sim', 'supported', ''),
(44, 'MOTOROLLA', 'DROID Turbo', 'motorola-droid-turbo-2.jpg', '54000', '5.2 inches', '21 MP', 'Non-removable Li-Po 3900 mAh b', 'Quad-core 2.7 GHz Krait 450', '3 GB', '32/64 GB', 'single sim', 'not supported', ''),
(45, 'MOTOROLLA', ' Nexus 6', 'motorola-nexus-6-1.jpg', '42000', '5.7 inches', '13 MP', 'Non-removable Li-Ion 3600 mAh ', 'Quad-core 2.7 GHz Krait 450', '3 GB', '16/64/128 GB', 'single sim', 'supported', ''),
(46, 'MOTOROLLA', 'DROID Turbo', 'motorola-droid-turbo-2.jpg', '54000', '5.2 inches', '21 MP', 'Non-removable Li-Po 3900 mAh b', 'Quad-core 2.7 GHz Krait 450', '3 GB', '32/64 GB', 'single sim', 'not supported', ''),
(47, 'MOTOROLLA', 'DROID Maxx', 'motorola-droid-maxx2.jpg', '51000', '5.2 inches', '12 MP', 'Non-removable Li-Ion 2900 mAh ', 'Quad-core 2.7 GHz Krait 450', '2 GB', '16/32/64 GB', 'single sim', 'not supported', ''),
(48, 'MOTOROLLA', 'DROID Ultra', 'motorola-droid-ultra-1.jpg', '44000', '5.2 inches', '12 MP', 'Non-removable Li-Ion 2900 mAh ', 'Dual-core 1.3 GHz Swift', '2 GB', '16/32/64 GB', 'single sim', 'supported', ''),
(49, 'MOTOROLLA', 'Moto X', 'motorola-moto-x-1.jpg', '25000', '4.7 inches', '8 MP', 'Non-removable Li-Ion 2900 mAh ', 'Quad-core 1.2 GHz Cortex-A53', '2 GB', '16/32/64 GB', 'single sim', 'supported', ''),
(50, 'MOTOROLLA', 'DROID RAZR MAXX HD', 'motorola-droid-razr-maxx-hd.jpg', '15000', '4.0 inches', '8 MP', 'removable Li-Po 1517 mAh batte', 'Dual-core 1.3 GHz Swift', '1 GB', '16/32/64 GB', 'single sim', 'supported', ''),
(51, 'MOTOROLLA', 'RAZR HD XT925', 'motorla-razr-hd.jpg', '29000', '4.7 inches', '8 MP', 'Non-removable Li-Ion 3600 mAh ', 'Octa-core 1.6 GHz Cortex-A53', '2 GB', '16/64/128 GB', 'single sim', 'supported', ''),
(52, 'MOTOROLLA', 'Droid Maxx 2', 'motorola-droid-maxx-2.jpg', '35000', '5.7 inches', '21 MP', 'Non-removable Li-Ion 2900 mAh ', 'Quad-core 2.7 GHz Krait 450', '2 GB', '16/32/64 GB', 'single sim', 'not supported', ''),
(53, 'MOTOROLLA', 'RAZR XT912', 'motorola-droid-razr-white.jpg', '22000', '4.7 inches', '8 MP', 'Non-removable Li-Ion 2900 mAh ', 'Dual-core 1.3 GHz Swift', '1 GB', '16 GB', 'single sim', 'supported', ''),
(55, 'SONY', 'Xperia Z5', 'sony-z5-1.jpg', '51000', '5.2 inches', '13 MP', 'Non-removable Li-Ion 2900 mAh ', 'Quad-core 2.7 GHz Krait 450', '3 GB', '16/32/64 GB', 'single sim', 'supported', ''),
(56, 'SONY', 'Xperia XA', 'sony-xperia-x-1.jpg', '30000', '5.0 inches', '13 MP', 'Non-removable Li-Ion 2900 mAh ', 'Dual-core 1.3 GHz Swift', '2 GB', '16/64/128 GB', 'single sim', 'supported', ''),
(57, 'SONY', 'Xperia X Performance', 'sony-xperia-x-performance-1.jpg', '70000', '5.0 inches', '21 MP', 'Non-removable Li-Ion 2900 mAh ', 'Exynos 7420 Octa-Core', '3 GB', '16/64/128 GB', 'single sim', 'supported', ''),
(58, 'SONY', 'Xperia M5', 'sony-xperia-m5-1.jpg', '46000', '5.2 inches', '13 MP', 'removable Li-Po 1517 mAh batte', 'Dual-core 1.4 GHz Typhoon', '2 GB', '32/64 GB', 'dual sim', 'supported', ''),
(59, 'SONY', 'Xperia C5 Ultra Dual', 'sony-xperia-c5-ultra-2.jpg', '40000', '4.7 inches', '12 MP', 'removable Li-Po 1517 mAh batte', 'Dual-core 1.3 GHz Swift', '3 GB', '16/32/64 GB', 'dual sim', 'supported', ''),
(60, 'SONY', 'Xperia C5 Ultra', 'sony-xperia-c5-ultra-1.jpg', '30000', '4.7 inches', '13 MP', 'Non-removable Li-Po 2915 mAh b', 'Dual-core 1.4 GHz Typhoon', '4 GB', '32/64/128 GB', 'single sim', 'supported', ''),
(61, 'SONY', 'Xperia XA Ultra', 'sony-xperia-c5-ultra-2.jpg', '50000', '5.7 inches', '13 MP', 'Non-removable Li-Ion 3600 mAh ', 'Dual-core 1.4 GHz Typhoon', '4 GB', '16/32/64 GB', 'dual sim', 'supported', ''),
(63, 'HTC', 'Desire 630', 'htc-a16-desire-530-2.jpg', '25000', '5.5 inches', '8 MP', 'Non-removable Li-Ion 3600 mAh ', 'Dual-core 1.3 GHz Swift', '4 GB', '16/64/128 GB', 'dual sim', 'supported', ''),
(64, 'HTC', 'One X9', 'htc-one-x9-1.jpg', '25000', '5.2 inches', '13 MP', 'Non-removable Li-Po 1517 mAh b', 'Dual-core 1.3 GHz Swift', '3 GB', '16/64/128 GB', 'single sim', 'supported', ''),
(65, 'HTC', '10', 'htc-10-5.jpg', '35000', '5.2 inches', '12 MP', 'removable Li-Po 1517 mAh batte', 'Dual-core 1.4 GHz Typhoon', '2 GB', '16 GB', 'single sim', 'supported', ''),
(66, 'HTC', 'One A9', 'htc-one-a9-new1.jpg', '36000', '5.5 inches', '8 MP', 'Non-removable Li-Po 2915 mAh b', 'Dual-core 1.84 GHz Twister', '3 GB', '16/32/64 GB', 'dual sim', 'not supported', ''),
(67, 'HTC', 'One M9', 'htc-one-m9-1.jpg', '36000', '5.7 inches', '21 MP', 'Non-removable Li-Po 2915 mAh b', 'Quad-core 2.7 GHz Krait 450', '2 GB', '16 GB', 'dual sim', 'supported', ''),
(68, 'HTC', 'One (M8 Eye)', 'htc-one-m8-eye.jpg', '25000', '4.0 inches', '21 MP', 'Non-removable Li-Ion 2900 mAh ', 'Dual-core 1.4 GHz Typhoon', '1 GB', '16 GB', 'dual sim', 'supported', ''),
(70, 'IPHONES', 'iPad Air 2', 'apple-ipad-air-2-1.jpg', '30000', '7.9 inches', '12 MP', 'Non-removable Li-Po 1517 mAh b', 'Octa-core 1.6 GHz Cortex-A53', '2 GB', '16/32/64 GB', 'no sim', 'not supported', ''),
(71, 'NOKIA', 'Asha 503', 'nokia-asha-503.jpg', '10000', '4.0 inches', '8 MP', 'Non-removable Li-Ion 2900 mAh ', 'Dual-core 1.3 GHz Swift', '2 GB', '16 GB', 'dual sim', 'supported', ''),
(72, 'NOKIA', '230 Dual SIM', 'nokia-230-1.jpg', '5000', '3.0 inches', '5 MP', 'removable Li-Po 1517 mAh batte', 'Dual-core 1.4 GHz Typhoon', '1 GB', '16/64/128 GB', 'single sim', 'supported', ''),
(73, 'NOKIA', 'Lumia 830 ', 'nokia-lumia-830-1.jpg', '12000', '4.0 inches', '8 MP', 'Non-removable Li-Ion 2900 mAh ', 'Dual-core 1.4 GHz Typhoon', '1 GB', '8 GB', 'single sim', 'supported', ''),
(74, 'QMOBILE', 'QMobile Noir S9', 'qmobile-noir-z9-plus-1.jpg', '30000', '5.5 inches', '13 MP', 'Non-removable Li-Ion 2900 mAh ', 'Octa-core 1.6 GHz Cortex-A53', '3 GB', '16/32/64 GB', 'single sim', 'supported', ''),
(75, 'QMOBILE', 'Noir Z9', 'qmobile-noir-z9-plus-2.jpg', '26000', '5.2 inches', '13 MP', 'removable Li-Po 1517 mAh batte', 'Octa-core 1.6 GHz Cortex-A53', '3 GB', '16/64/128 GB', 'single sim', 'supported', ''),
(76, 'QMOBILE', ' Noir Z12', 'qmobile-noir-z12.jpg', '31000', '5.5 inches', '13 MP', 'Non-removable Li-Ion 2900 mAh ', 'Octa-core 1.6 GHz Cortex-A53', '3 GB', '16/32/64 GB', 'single sim', 'supported', ''),
(77, 'QMOBILE', 'Noir Z10', 'qmobile-noir-z10.jpg', '22000', '5.2 inches', '13 MP', 'Non-removable Li-Ion 3600 mAh ', 'Octa-core 1.6 GHz Cortex-A53', '3 GB', '16/32/64 GB', 'single sim', 'supported', ''),
(78, 'QMOBILE', 'Noir E8', 'qmobile-noir-e8.jpg', '32000', '6.0 inches', '24 MP', 'Non-removable Li-Ion 3600 mAh ', 'Octa-core 1.6 GHz Cortex-A53', '3 GB', '16/32/64 GB', 'single sim', 'supported', ''),
(79, 'QMOBILE', 'Noir S2', 'qmobile-noir-s2.jpg', '11000', '4.7 inches', '8 MP', 'Non-removable Li-Ion 2900 mAh ', 'Quad-core 1.2 GHz Cortex-A53', '1 GB', '16 GB', 'dual sim', 'supported', '');

-- --------------------------------------------------------

--
-- Table structure for table `laptop_company`
--

CREATE TABLE IF NOT EXISTS `laptop_company` (
`laptop_company_id` int(11) NOT NULL,
  `laptop_company_name` varchar(30) DEFAULT NULL,
  `category_id` int(11) DEFAULT NULL
) ENGINE=MyISAM AUTO_INCREMENT=9 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `laptop_company`
--

INSERT INTO `laptop_company` (`laptop_company_id`, `laptop_company_name`, `category_id`) VALUES
(1, 'DELL', 2),
(2, 'HP', 2),
(3, 'LENOVO', 2),
(4, 'TOSHIBA', 2),
(5, 'ACER', 2),
(7, 'APPLE', 2);

-- --------------------------------------------------------

--
-- Table structure for table `laptop_specification`
--

CREATE TABLE IF NOT EXISTS `laptop_specification` (
`id` int(11) NOT NULL,
  `company` varchar(30) DEFAULT NULL,
  `model` varchar(30) DEFAULT NULL,
  `image` varchar(1000) DEFAULT NULL,
  `price` varchar(30) DEFAULT NULL,
  `size` varchar(30) DEFAULT NULL,
  `camera` varchar(30) DEFAULT NULL,
  `battery_power` varchar(30) DEFAULT NULL,
  `processor` varchar(30) DEFAULT NULL,
  `ram` varchar(30) DEFAULT NULL,
  `memory` varchar(30) DEFAULT NULL,
  `resolution` varchar(30) DEFAULT NULL,
  `pixel` varchar(30) DEFAULT NULL,
  `cache` varchar(30) DEFAULT NULL,
  `graphic_card` varchar(30) DEFAULT NULL,
  `video` varchar(1000) DEFAULT NULL
) ENGINE=MyISAM AUTO_INCREMENT=52 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `laptop_specification`
--

INSERT INTO `laptop_specification` (`id`, `company`, `model`, `image`, `price`, `size`, `camera`, `battery_power`, `processor`, `ram`, `memory`, `resolution`, `pixel`, `cache`, `graphic_card`, `video`) VALUES
(35, 'ACER', 'Aspire F5-571', 'u_10137492.jpg', '30000', '15.6 inches', 'Integrated HD webcam', 'Up to 7.5 hours', 'IntelÂ® Coreâ„¢ i5-5200U Proce', '8 GB', '1 TB', '1366 x 768', 'Full hd', '2 MB', 'Intel HD graphics', '---Acer F5-571-39F Laptop Review - Intel Core i3-5005U 4GB 1TB Windows 10 15.6-- Laptop - Red.mp4'),
(21, 'DELL', 'Dell - Inspiron', '5296508_sd.jpg;canvasHeight=550;canvasWidth=642.jpg', '60000', '15.6 inches', 'Integrated HD webcam', 'Up to 6 hours battery life', 'IntelÂ® Coreâ„¢ i5-5200U Proce', '8 GB', '1 TB', '1366 x 768', 'Full hd', '4mb', 'Intel HD graphics', '---Dell Inspiron 11 3000 2016 Review $199 Windows 10 Laptop.mp4'),
(34, 'LENOVO', 'LENOVO IdeaPad 100S', 'u_10139238.jpg', '15000', '15.6 inches', 'Integrated HD webcam', 'upto 5-hours', 'IntelÂ® Atomâ„¢ Processor Z373', '2 GB', '32 GB eMMC', '1366 x 768', 'Full hd', '3 mB', 'Intel HD graphics', '---Lenovo IdeaPad 100s 11.6-- Laptop review - YouTube.mp4'),
(15, 'DELL', 'DELL XPS 15 with InfinityEdge', 'l_10146262.jpg', '140000', '15 inches', 'HD', '11 hour battery life', 'IntelÂ® Coreâ„¢ i7-6700HQ Proc', '16 GB', '512 GB SSD', '1920 x 1080', 'Full hd', '4mb', 'Nvidia Gtx 960m', '---Dell Skylake XPS 15 9550 Review- Best Windows Laptop- (4K-_Infinity Edge) - YouTube.mp4'),
(16, 'DELL', 'DELL Inspiron 11-3162', 'u_10146125.jpg', '70000', '11.6 inches', 'Integrated HD webcam', 'upto 9-hours', 'IntelÂ® CeleronÂ® N3050 Proces', '2 GB', '32 GB eMMC', '1366 x 768', 'Full hd', '4mb', 'intel 5600 hd 1gb', '---Dell Inspiron 11 3000 2016 Review $199 Windows 10 Laptop.mp4'),
(33, 'LENOVO', 'LENOVO YOGA 510', 'u_10146249.jpg', '75000', '14 inches', 'Integrated HD webcam', 'upto 9-hours', 'IntelÂ® Coreâ„¢ i7-6500U Proce', '8 GB', '512 GB SSD', '1920 x 1080', 'Full hd', '4mb', 'AMD Radeon R9 M380', '---Lenovo Yoga 510 overview, specifications. 14 and 15.6 inch. - YouTube.mp4'),
(18, 'DELL', 'DELL XPS 13 with Touchscreen Q', 'u_10146135.jpg', '130000', '13 inches', 'Integrated HD webcam', 'upto 9-hours', 'IntelÂ® Coreâ„¢ i7-6560U proce', '16 GB', '512 GB SSD', '1920 x 1080', 'Full hd', '4mb', 'IntelÂ® Irisâ„¢', '---Dell XPS 13 XPS Ultrabook Touchscreen Review - Intel Core i5 i5-4210U 1.70 GHz - YouTube.mp4'),
(19, 'DELL', 'DELL Inspiron 15-3558', 'u_10146139.jpg', '32000', '60000', 'Integrated HD webcam', 'Up to 6 hours battery life', 'IntelÂ® Coreâ„¢ i5-5200U Proce', '8 GB', '1 TB', '1366 x 768', 'Full hd', '4mb', 'intel 5600 hd 1gb', '---Dell Inspiron 13 7000 Review (Early 2016).mp4'),
(20, 'DELL', 'Inspiron 2-in-1', '4453900_sd.jpg;canvasHeight=550;canvasWidth=642.jpg', '62000', '13.3 inches', 'Integrated HD webcam', 'upto 9-hours', 'Intel Core i5', '8 GB', '128 GB SSD', '1920 x 1080', 'Full hd', '4mb', 'Intel HD graphics', '---Dell Inspiron 17 7000 2-in-1- World''s First 17-inch Convertible - YouTube.mp4'),
(22, 'HP', 'HP Pavilion 15-ab270sa', 'u_10138120.jpg', '33000', '15.6 inches', 'Integrated HD webcam', 'Up to 7.5 hours', 'IntelÂ® Coreâ„¢ i3-5157U', '8 GB', '1 TB', '1366 x 768', 'Full hd', '4mb', 'IntelÂ® Irisâ„¢ Graphics 6100', '---Dell Inspiron 11 3000 2016 Review $199 Windows 10 Laptop.mp4'),
(23, 'HP', 'HP Stream 11-r050sa', 'u_10137770.jpg', '15000', '11.6 inches', 'Integrated HD webcam', 'upto 5-hours', 'IntelÂ® Celeronâ„¢ Processor N', '2 GB', '32 GB eMMC', '1366 x 768', 'Full hd', NULL, 'Intel HD graphics', ''),
(24, 'HP', 'HP Spectre 13-v001na', 'u_10146247.jpg', '130000', '13.3 inches', 'Integrated HD webcam', 'upto 9-hours', 'IntelÂ® Coreâ„¢ i7-6500U Proce', '8 GB', '512 GB SSD', '1920 x 1080', 'Full hd', '4 MB', 'Intel HD graphics', ''),
(25, 'HP', 'HP 15-af153sa', 'u_10137892.jpg', '25000', '15.6 inches', 'Integrated HD webcam', 'upto 9-hours', 'AMD A6-6310 APU', '8 GB', '512 GB SSD', '1366 x 768', 'Full hd', NULL, 'intel 5600 hd 1gb', ''),
(26, 'HP', 'HP ENVY x360', 'u_10147541.jpg', '90000', '15.6 inches', '12 MP', 'upto 9-hours', 'IntelÂ® Coreâ„¢ i7-6560U proce', '8 GB', '1 TB HDD & 128 GB SSD', '1920 x 1080', 'Full hd', '4 MB', 'Intel HD graphics', ''),
(29, 'LENOVO', 'LENOVO G50', 'u_10137559.jpg', '25000', '15.6 inches', 'Integrated HD webcam', 'Up to 7.5 hours', 'IntelÂ® Coreâ„¢ i3-5005U Proce', '8 GB', '500 GB', '1366 x 768', 'Full hd', '4 MB', 'Intel HD graphics', ''),
(28, 'HP', 'HP Pavilion 15-ab155sa', 'u_10142268.jpg', '38000', '15.6 inches', 'Integrated HD webcam', 'upto 5-hours', 'IntelÂ® Coreâ„¢ i3-5157U', '8 GB', '1 TB', '1366 x 768', 'Full hd', NULL, 'Intel HD graphics', ''),
(30, 'LENOVO', 'LENOVO YOGA 500', 'u_10137561.jpg', '50000', '15 inches', 'Integrated HD webcam', 'upto 9-hours', 'IntelÂ® Coreâ„¢ i5-6200U Proce', '8 GB', '1 TB SSD HD', '1920 x 1080', 'Full hd', NULL, 'Intel HD graphics', ''),
(31, 'LENOVO', 'LENOVO IdeaPad 100S', 'u_10139239.jpg', '15000', '11.6 inches', 'Integrated HD webcam', 'upto 9-hours', 'IntelÂ® Atomâ„¢ Processor Z373', '2 GB', '32 GB eMMC', '1366 x 768', 'Full hd', NULL, 'Intel HD graphics', ''),
(32, 'LENOVO', 'LENOVO IdeaPad 100S', 'u_10139236.jpg', '15000', '11.6 inches', 'Integrated HD webcam', 'upto 9-hours', 'IntelÂ® Atomâ„¢ Processor Z373', '2 GB', '32 GB eMMC', '1366 x 768', 'Full hd', '1 MB', 'Intel HD graphics', ''),
(36, 'ACER', 'ACER CB3-111', 'u_10071506.jpg', '15000', '13 inches', 'Integrated HD webcam', '11 hour battery life', 'IntelÂ® CeleronÂ® N3050 Proces', '2 GB', '32 GB eMMC', '1366 x 768', 'Full hd', NULL, 'Intel HD graphics', ''),
(37, 'ACER', 'ACER Chromebook 13', 'u_10138558.jpg', '20000', '11.6 inches', 'Integrated HD webcam', 'upto 9-hours', 'IntelÂ® Celeronâ„¢ Processor N', '2 GB', '500 GB', '1366 x 768', 'Full hd', '1 MB', 'Intel HD graphics', ''),
(38, 'ACER', 'ACER Chromebook R ', 'u_10138557.jpg', '20000', '11.6 inches', 'Integrated HD webcam', 'upto 9-hours', 'IntelÂ® Atomâ„¢ Processor Z373', '2 GB', '32 GB eMMC', '1920 x 1080', 'Full hd', NULL, 'Intel HD graphics', ''),
(39, 'ACER', 'ACER R7', 'R7-product-series-main.png', '50000', '15.6 inches', 'Integrated HD webcam', 'upto 9-hours', 'IntelÂ® Coreâ„¢ i5-5200U Proce', '8 GB', '512 GB SSD', '1920 x 1080', 'Full hd', '4 MB', 'Intel HD graphics', ''),
(40, 'ACER', 'ACER Predator G9-791', 'u_10141293.jpg', '150000', '15.6 inches', 'Integrated HD webcam', 'upto 9-hours', 'IntelÂ® Coreâ„¢ i7-6700HQ Proc', '16 GB', '1 TB', '1920 x 1080', 'Full hd', '8 MB', 'Nvidia Gtx 970m', ''),
(41, 'APPLE', 'APPLE MacBook Air ', 'l_21962977_001.jpg', '85000', '13 inches', 'Integrated HD webcam', 'upto 9-hours', 'IntelÂ® Coreâ„¢ i5-6200U Proce', '8 GB', '128 GB SSD', '1920 x 1080', 'Full hd', '4 MB', 'Intel HD graphics', ''),
(42, 'APPLE', 'APPLE MacBook Pro', 'u_13730045.jpg', '85000', '15.6 inches', 'Integrated HD webcam', 'upto 9-hours', 'IntelÂ® Coreâ„¢ i5-5200U Proce', '8 GB', '512 GB SSD', '1920 x 1080', 'Full hd', '4 MB', 'Intel HD graphics', ''),
(43, 'APPLE', 'APPLE MacBook 12', 'u_10118362.jpg', '70000', '11.6 inches', 'Integrated HD webcam', 'upto 9-hours', 'IntelÂ® Coreâ„¢ i5-5200U Proce', '8 GB', '512 GB SSD', '1920 x 1080', 'Full hd', '4 MB', 'Intel HD graphics', ''),
(44, 'APPLE', 'APPLE MacBook Pro Retina Displ', 'u_10133142.jpg', '200000', '15.6 inches', 'Integrated HD webcam', 'upto 9-hours', 'IntelÂ® Coreâ„¢ i7 processor', '16 GB', '512 GB SSD', '1920 x 1080', 'Full hd', NULL, 'Intel HD graphics', ''),
(45, 'APPLE', ' APPLE MacBook Air 13.3', 'u_10025191.jpg', '50000', '11.6 inches', 'Integrated HD webcam', 'upto 9-hours', 'IntelÂ® Coreâ„¢ i5-5200U Proce', '8 GB', '512 GB SSD', '1920 x 1080', 'Full hd', '4 MB', 'Intel HD graphics', ''),
(46, 'APPLE', 'Apple MacBook Air A1466', 'apple-macbook-air-ultrabook-400x400-imaej85fzwdh4etq.jpeg', '62000', '15.6 inches', 'Integrated HD webcam', 'upto 9-hours', 'IntelÂ® Coreâ„¢ i5-5200U Proce', '8 GB', '128 GB SSD', '1920 x 1080', 'Full hd', '4 MB', 'Intel HD graphics', ''),
(47, 'TOSHIBA', 'Toshiba Tecra Z40t-B', 'toshiba-tecra-z40t-nw-g02.jpg', '150000', '15.6 inches', 'Integrated HD webcam', 'upto 5-hours', '2.6-GHz Intel Core i7-5600U ', '8 GB', '500 GB', '1920 x 1080', 'Full hd', '4 MB', 'Intel HD Graphics 5500 ', ''),
(48, 'TOSHIBA', 'Toshiba Kirabook', 'toshiba-kirabook-2015-wm-g03.jpg', '150000', '15.6 inches', 'Integrated HD webcam', 'upto 9-hours', '2.6-GHz Intel Core i7-5600U', '8 GB', '500 GB', '1920 x 1080', 'Full hd', NULL, 'Intel HD Graphics 5500', ''),
(49, 'TOSHIBA', 'Toshiba Chromebook 2 ', 'toshiba-chromebook-2-nw-g02.jpg', '100000', '15.6 inches', 'Integrated HD webcam', 'upto 9-hours', 'IntelÂ® Coreâ„¢ i5-6200U Proce', '8 GB', '512 GB SSD', '1920 x 1080', 'Full hd', '4 MB', 'Intel HD Graphics 5500', ''),
(50, 'TOSHIBA', 'Toshiba Satellite Radius P55', 'toshiba-satellite-p55d-w-g02.jpg', '130000', '15.6 inches', 'Integrated HD webcam', 'upto 9-hours', '2.6-GHz Intel Core i7-5600U', '8 GB', '1 TB', '4K', 'Full hd', '4 MB', 'Intel HD graphics', ''),
(51, 'TOSHIBA', 'oshiba - Satellite Radius 2-in', '4203500_sd.jpg;canvasHeight=550;canvasWidth=642.jpg', '75000', '15.6 inches', 'Integrated HD webcam', 'upto 9-hours', 'IntelÂ® Coreâ„¢ i5-6200U Proce', '8 GB', '1 TB', '1920 x 1080', 'Full hd', '4 MB', 'Intel HD Graphics 5500', '');

-- --------------------------------------------------------

--
-- Table structure for table `porduct_location`
--

CREATE TABLE IF NOT EXISTS `porduct_location` (
`id` int(11) NOT NULL,
  `product` varchar(1000) NOT NULL,
  `city` varchar(1000) NOT NULL,
  `address` mediumtext
) ENGINE=MyISAM AUTO_INCREMENT=14 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `porduct_location`
--

INSERT INTO `porduct_location` (`id`, `product`, `city`, `address`) VALUES
(1, 'CELL PHONES', 'Gujranwala', 'https://www.google.com/maps/embed?pb=!1m16!1m12!1m3!1d52204.32203948188!2d74.17447781536688!3d32.154838095787426!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!2m1!1scell+phone+stores+near+gujranwala+punjab+pakistan!5e0!3m2!1sen!2s!4v1469451223818'),
(2, 'CELL PHONES', 'Lahore', 'https://www.google.com/maps/embed?pb=!1m16!1m12!1m3!1d54409.69217567006!2d74.27666699852894!3d31.534986208192993!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!2m1!1scell+phones+in+lahore!5e0!3m2!1sen!2s!4v1469452510706'),
(3, 'CELL PHONES', 'Islamabad', 'https://www.google.com/maps/embed?pb=!1m16!1m12!1m3!1d71728.4524076817!2d73.04497929557485!3d33.685646430535634!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!2m1!1scell+phones+near+islamabad!5e0!3m2!1sen!2s!4v1469452854933'),
(4, 'LAPTOP', 'Gujranwala', 'https://www.google.com/maps/embed?pb=!1m16!1m12!1m3!1d33915.76396512114!2d74.17952868984062!3d32.1542612629194!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!2m1!1slaptop+store+near+Gujranwala%2C+Punjab%2C+Pakistan!5e0!3m2!1sen!2s!4v1469455009071'),
(5, 'LAPTOP', 'Lahore', 'https://www.google.com/maps/embed?pb=!1m16!1m12!1m3!1d108842.77336921528!2d74.27506486001015!3d31.514912020995535!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!2m1!1slaptop+store+near+Lahore%2C+Punjab%2C+Pakistan!5e0!3m2!1sen!2s!4v1469456968280'),
(6, 'LAPTOP', 'Islamabad', 'https://www.google.com/maps/embed?pb=!1m16!1m12!1m3!1d119227.83603075375!2d73.00443331864835!3d33.699312093564835!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!2m1!1slaptop+store+near+ISLAMABAD!5e0!3m2!1sen!2s!4v1469457099868'),
(8, 'CAR', 'Gujranwala', 'https://www.google.com/maps/embed?pb=!1m16!1m12!1m3!1d99688.7313941758!2d74.12891677154097!3d32.15939434641462!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!2m1!1scar+showroom+near+gujranwala!5e0!3m2!1sen!2s!4v1469459095625'),
(10, 'CAR', 'Lahore', 'https://www.google.com/maps/embed?pb=!1m16!1m12!1m3!1d82479.52493836707!2d74.27987201971732!3d31.523832434228215!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!2m1!1scar+showroom+near+lahore!5e0!3m2!1sen!2s!4v1469460330269'),
(11, 'CAR', 'Islamabad', 'https://www.google.com/maps/embed?pb=!1m16!1m12!1m3!1d106260.47708330824!2d73.00581224676202!3d33.66649109788199!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!2m1!1scar+showroom+near+islamabad!5e0!3m2!1sen!2s!4v1469460483643');

-- --------------------------------------------------------

--
-- Table structure for table `product_category`
--

CREATE TABLE IF NOT EXISTS `product_category` (
`category_id` int(11) NOT NULL,
  `category_name` varchar(30) DEFAULT NULL
) ENGINE=MyISAM AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `product_category`
--

INSERT INTO `product_category` (`category_id`, `category_name`) VALUES
(1, 'Cell Phones'),
(2, 'Laptops'),
(3, 'Cars');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE IF NOT EXISTS `users` (
`user_id` int(11) NOT NULL,
  `fullname` varchar(200) NOT NULL,
  `email` varchar(30) DEFAULT NULL,
  `password` varchar(200) NOT NULL,
  `address` varchar(300) DEFAULT NULL,
  `city` varchar(200) DEFAULT NULL,
  `country` varchar(200) NOT NULL,
  `phone` varchar(10000) DEFAULT NULL
) ENGINE=MyISAM AUTO_INCREMENT=13 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`user_id`, `fullname`, `email`, `password`, `address`, `city`, `country`, `phone`) VALUES
(5, 'luqman', 'luqman@gmail.com', 'luqman', 'gujranwala', 'Gujranwala', 'pakistan', '03237446032'),
(7, 'Shehzad Abbas', '13140031@gmail.com', 'gujrat', 'gujranwala', 'gujrat', 'pakistan', '0336871314'),
(8, 'imran', 'imran@gmail.com', 'imran', 'Gujrat', 'Gujrat', 'pakistan', '03237446032'),
(10, 'waqas', 'waqas@gmail.com', 'waqas', 'Gujranwala, Punjab, Pakistan', 'Gujranwala', 'pakistan', '03237446032'),
(11, 'tayaba', 'tayaba@gmail.com', 'tayaba', 'Gujranwala, Punjab, Pakistan', 'Gujranwala', 'pakistan', '03227446021'),
(12, 'tayba', 'tayba@gift.edu.pk', 'admin', 'Gujranwala, Punjab, Pakistan', 'Gujranwala', 'pakistan', '0333111111111');

-- --------------------------------------------------------

--
-- Table structure for table `user_product_ads`
--

CREATE TABLE IF NOT EXISTS `user_product_ads` (
`ads_id` int(100) NOT NULL,
  `product_type` varchar(100) NOT NULL,
  `product_category` varchar(30) DEFAULT NULL,
  `product_model` varchar(30) DEFAULT NULL,
  `image` varchar(100) NOT NULL,
  `product_price` varchar(30) DEFAULT NULL,
  `user_id` int(11) DEFAULT NULL
) ENGINE=MyISAM AUTO_INCREMENT=39 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user_product_ads`
--

INSERT INTO `user_product_ads` (`ads_id`, `product_type`, `product_category`, `product_model`, `image`, `product_price`, `user_id`) VALUES
(37, 'CELL PHONE', 'MOTOROLLA', 'Motorolla XT926', 'motorola-droid-razr-hd.jpg', '10000', 5),
(38, 'LAPTOP', 'LENOVO', 'Lenovo T420', 'Lenovo_T420_3.jpg', '22000', 5),
(35, 'CELL PHONE', 'SAMSUNG', 'Galaxy J5(2016)', 'samsung-galaxy-j5-sm-j500f-1.jpg', '15000', 7),
(36, 'LAPTOP', 'ACER', 'Nitro v7', 'Acer_Aspire_VN7_791G_759Q_5_von_41.jpg', '125000', 7);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `car_company`
--
ALTER TABLE `car_company`
 ADD PRIMARY KEY (`car_company_id`), ADD KEY `category_id` (`category_id`);

--
-- Indexes for table `car_specification`
--
ALTER TABLE `car_specification`
 ADD PRIMARY KEY (`id`), ADD KEY `car_company_id` (`company`);

--
-- Indexes for table `cell_phone_company`
--
ALTER TABLE `cell_phone_company`
 ADD PRIMARY KEY (`cell_phone_company_id`), ADD KEY `category_id` (`category_id`);

--
-- Indexes for table `cell_phone_specification`
--
ALTER TABLE `cell_phone_specification`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `laptop_company`
--
ALTER TABLE `laptop_company`
 ADD PRIMARY KEY (`laptop_company_id`), ADD KEY `category_id` (`category_id`);

--
-- Indexes for table `laptop_specification`
--
ALTER TABLE `laptop_specification`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `porduct_location`
--
ALTER TABLE `porduct_location`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `product_category`
--
ALTER TABLE `product_category`
 ADD PRIMARY KEY (`category_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
 ADD PRIMARY KEY (`user_id`);

--
-- Indexes for table `user_product_ads`
--
ALTER TABLE `user_product_ads`
 ADD PRIMARY KEY (`ads_id`), ADD KEY `user_id` (`user_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
MODIFY `id` int(100) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `car_company`
--
ALTER TABLE `car_company`
MODIFY `car_company_id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=8;
--
-- AUTO_INCREMENT for table `car_specification`
--
ALTER TABLE `car_specification`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=36;
--
-- AUTO_INCREMENT for table `cell_phone_company`
--
ALTER TABLE `cell_phone_company`
MODIFY `cell_phone_company_id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=8;
--
-- AUTO_INCREMENT for table `cell_phone_specification`
--
ALTER TABLE `cell_phone_specification`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=80;
--
-- AUTO_INCREMENT for table `laptop_company`
--
ALTER TABLE `laptop_company`
MODIFY `laptop_company_id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=9;
--
-- AUTO_INCREMENT for table `laptop_specification`
--
ALTER TABLE `laptop_specification`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=52;
--
-- AUTO_INCREMENT for table `porduct_location`
--
ALTER TABLE `porduct_location`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=14;
--
-- AUTO_INCREMENT for table `product_category`
--
ALTER TABLE `product_category`
MODIFY `category_id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=13;
--
-- AUTO_INCREMENT for table `user_product_ads`
--
ALTER TABLE `user_product_ads`
MODIFY `ads_id` int(100) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=39;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
