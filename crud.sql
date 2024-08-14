-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Dec 31, 2023 at 04:56 PM
-- Server version: 5.7.36
-- PHP Version: 7.4.26

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `crud`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

DROP TABLE IF EXISTS `admin`;
CREATE TABLE IF NOT EXISTS `admin` (
  `user_id` int(11) NOT NULL AUTO_INCREMENT,
  `user_name` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `password` int(20) NOT NULL,
  PRIMARY KEY (`user_id`)
) ENGINE=MyISAM AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`user_id`, `user_name`, `email`, `password`) VALUES
(1, 'Hammad Hayat', 'hammadhayat682@gmail.com', 1234),
(2, 'Hammad Hayat', 'Hammad@gmail.com', 1234);

-- --------------------------------------------------------

--
-- Table structure for table `appointment`
--

DROP TABLE IF EXISTS `appointment`;
CREATE TABLE IF NOT EXISTS `appointment` (
  `ap_id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(50) NOT NULL,
  `age` int(50) NOT NULL,
  `gender` varchar(50) NOT NULL,
  `cnic` varchar(50) NOT NULL,
  `department` varchar(50) NOT NULL,
  `dr_id` int(50) NOT NULL,
  `fees` int(50) NOT NULL,
  `phone` varchar(15) NOT NULL,
  `address` varchar(50) NOT NULL,
  `date` date DEFAULT NULL,
  `time` time DEFAULT NULL,
  `status` int(6) NOT NULL,
  PRIMARY KEY (`ap_id`)
) ENGINE=MyISAM AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `appointment`
--

INSERT INTO `appointment` (`ap_id`, `name`, `age`, `gender`, `cnic`, `department`, `dr_id`, `fees`, `phone`, `address`, `date`, `time`, `status`) VALUES
(1, 'Hammad Hayat', 24, 'Male', '36501-4867982-9', 'Eye', 1, 2000, '03493945120', 'Chak no.45/12.L Firdous', '2023-12-26', '11:47:00', 1),
(2, 'Talha rasheed', 20, 'Male', '3310696017183', ' ', 2, 3000, '03493945120', 'Chak no.48/12.L ', '2023-12-26', '11:48:00', 1),
(3, 'Farman', 22, 'Male', '3650148679829', 'Eye', 1, 2000, '03493945120', 'Chak no.45/12.L Firdous', '2023-12-29', '11:12:00', 0);

-- --------------------------------------------------------

--
-- Table structure for table `book`
--

DROP TABLE IF EXISTS `book`;
CREATE TABLE IF NOT EXISTS `book` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `user_id` int(50) NOT NULL,
  `book_name` varchar(50) NOT NULL,
  `author_name` varchar(50) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=25 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `book`
--

INSERT INTO `book` (`id`, `user_id`, `book_name`, `author_name`) VALUES
(14, 1, 'physics', 'hammadppppppppp'),
(10, 1, 'english', 'talha2'),
(12, 1, 'poetry', 'Allama iqbal'),
(13, 1, 'physics', 'hammad'),
(15, 1, 'physics', 'Allama iqbal'),
(16, 1, 'physics', 'falak'),
(17, 1, 'math', 'hammad'),
(18, 1, 'poetry', 'Allama iqbal'),
(19, 1, 'physics', 'kamran'),
(20, 2, 'poetry', 'Allama iqbal'),
(21, 2, 'physics', 'talha5'),
(23, 2, 'english', 'farman'),
(24, 1, 'chemistery', 'farman');

-- --------------------------------------------------------

--
-- Table structure for table `cart`
--

DROP TABLE IF EXISTS `cart`;
CREATE TABLE IF NOT EXISTS `cart` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `user_id` int(50) NOT NULL,
  `product_id` int(50) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `cart`
--

INSERT INTO `cart` (`id`, `user_id`, `product_id`) VALUES
(1, 3, 5);

-- --------------------------------------------------------

--
-- Table structure for table `category`
--

DROP TABLE IF EXISTS `category`;
CREATE TABLE IF NOT EXISTS `category` (
  `c_id` int(11) NOT NULL AUTO_INCREMENT,
  `c_name` varchar(50) NOT NULL,
  PRIMARY KEY (`c_id`)
) ENGINE=MyISAM AUTO_INCREMENT=10 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `category`
--

INSERT INTO `category` (`c_id`, `c_name`) VALUES
(1, 'honda'),
(2, 'china'),
(3, 'china'),
(4, 'tv'),
(5, 'bike'),
(6, 'mobile'),
(7, 'pump'),
(8, 'lights'),
(9, 'electrical');

-- --------------------------------------------------------

--
-- Table structure for table `content`
--

DROP TABLE IF EXISTS `content`;
CREATE TABLE IF NOT EXISTS `content` (
  `c_id` int(11) NOT NULL AUTO_INCREMENT,
  `pg_name` varchar(50) NOT NULL,
  `h1` varchar(255) NOT NULL,
  `h2` varchar(255) NOT NULL,
  `image` varchar(255) NOT NULL,
  `description` varchar(255) NOT NULL,
  `keyword` varchar(255) NOT NULL,
  `title` varchar(250) NOT NULL,
  PRIMARY KEY (`c_id`)
) ENGINE=MyISAM AUTO_INCREMENT=14 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `content`
--

INSERT INTO `content` (`c_id`, `pg_name`, `h1`, `h2`, `image`, `description`, `keyword`, `title`) VALUES
(11, 'Doctor ', 'Doctors team', 'Great doctor if you need your family member to get effective immediate assistance, emergency treatment or a simple consultation.', '', 'Great doctor if you need your family member to get effective immediate assistance, emergency treatment or a simple consultation.', 'Doctors team', 'Doctors team'),
(10, 'Home', 'Booking Your Appointments', 'Booking Your Appointments', '', 'Booking Your Appointments at home', 'Booking Your Appointments at home page', 'Home Page Booking Your Appointments '),
(12, 'Contact Us ', 'Contact Us', 'Contact Us', '', 'Contact Us', 'Contact Us', 'Contact Us'),
(13, 'Book Appointment', 'book appointment', 'Book Appointment', 'Book Appointment', 'Book Appointment', 'Book Appointment', 'Book Appointment');

-- --------------------------------------------------------

--
-- Table structure for table `customer`
--

DROP TABLE IF EXISTS `customer`;
CREATE TABLE IF NOT EXISTS `customer` (
  `user_id` int(11) NOT NULL AUTO_INCREMENT,
  `user_name` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `password` int(20) NOT NULL,
  PRIMARY KEY (`user_id`)
) ENGINE=MyISAM AUTO_INCREMENT=6 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `customer`
--

INSERT INTO `customer` (`user_id`, `user_name`, `email`, `password`) VALUES
(1, 'Hammad Hayat', 'Hammad@gmail.com', 1234),
(2, 'Hammad Hayat', 'Hammad@gmail.com', 1234),
(3, 'Waleed', 'waleed@gmail.com', 1234),
(4, 'khaliq', 'khalid@gmail.com', 1234),
(5, 'riyaz', 'riyaz@gmail.com', 1234);

-- --------------------------------------------------------

--
-- Table structure for table `doctor`
--

DROP TABLE IF EXISTS `doctor`;
CREATE TABLE IF NOT EXISTS `doctor` (
  `dr_id` int(11) NOT NULL AUTO_INCREMENT,
  `fname` varchar(50) NOT NULL,
  `lname` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `phone` varchar(15) NOT NULL,
  `department` varchar(22) NOT NULL,
  `bio` varchar(100) NOT NULL,
  `image` varchar(500) NOT NULL,
  `fees` varchar(50) NOT NULL,
  `gender` varchar(50) NOT NULL,
  `stime` varchar(50) NOT NULL,
  `etime` varchar(50) NOT NULL,
  `day` varchar(50) NOT NULL,
  `address` varchar(150) NOT NULL,
  PRIMARY KEY (`dr_id`)
) ENGINE=MyISAM AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `doctor`
--

INSERT INTO `doctor` (`dr_id`, `fname`, `lname`, `email`, `phone`, `department`, `bio`, `image`, `fees`, `gender`, `stime`, `etime`, `day`, `address`) VALUES
(1, 'Hammad', 'Hayat', 'hammadhayat682@gmail.com', '03493945120', 'Eye', 'An experienced doctor with 10 years of practise', '665ca56c70d85b0f8e8e8822ade75a92.jpg', '2000', 'Male', '9:00 am', '12:00 am', 'Monady', 'Chak no.45/12.L Firdous'),
(2, 'Aleena', 'Siddique', 'hammadhayat682@gmail.com', '03493945120', 'Heart', 'An experienced doctor with 10 years of curing heart in learning hospital', 'fdee309373b0f1d5c90809a40a337ec5.jpg', '3000', 'Female', '1:00 am', '11:00 am', 'Friday', 'Chak no.45/12.L Firdous'),
(3, 'Aliza ', 'Safdar', 'aliza@gmail.com', '03493945120', 'Mind', 'An experienced doctor with 10 years of taking care in mental hospital patient', '1971f697a67c53595afa14e33856b281.jpg', '5000', 'Female', '5:00 pm', '12:00 am', 'Sunday', 'Chak no.45/12.L Firdous'),
(4, 'Talha', 'Rasheed', 'talha@gmail.com', '03493945120', 'Dentist', 'An experienced doctor with 10 years of practise in bone care', '7e39477155b391012c62d853e5e802f7.jpg', '2000', 'Male', '2:00 pm', '6:00 pm', 'Wednesday', 'Chak no.48/12.L Firdous');

-- --------------------------------------------------------

--
-- Table structure for table `employee`
--

DROP TABLE IF EXISTS `employee`;
CREATE TABLE IF NOT EXISTS `employee` (
  `user_id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `gender` varchar(20) NOT NULL,
  PRIMARY KEY (`user_id`)
) ENGINE=MyISAM AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `employee`
--

INSERT INTO `employee` (`user_id`, `name`, `email`, `gender`) VALUES
(1, 'hammad', 'hammad@gmail.com', 'male'),
(2, 'irfan', 'hammad@gmail.com', 'male'),
(3, 'talha', 'talha@gmail.com', 'male'),
(4, 'Hammad Hayat', 'hammadhayat682@gmail.com', 'male');

-- --------------------------------------------------------

--
-- Table structure for table `inquiry`
--

DROP TABLE IF EXISTS `inquiry`;
CREATE TABLE IF NOT EXISTS `inquiry` (
  `in_id` int(11) NOT NULL AUTO_INCREMENT,
  `in_name` varchar(50) NOT NULL,
  `in_email` varchar(50) NOT NULL,
  `in_comments` varchar(255) NOT NULL,
  `in_subject` varchar(255) NOT NULL,
  PRIMARY KEY (`in_id`)
) ENGINE=MyISAM AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `inquiry`
--

INSERT INTO `inquiry` (`in_id`, `in_name`, `in_email`, `in_comments`, `in_subject`) VALUES
(1, 'Hammad', 'hammadhayat682@gmail.com', 'sxbajjsha', 'djhasdsahbdjsh'),
(2, 'Talha', 'talha@gmail.com', 'wdwdw', 'wdwewq');

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

DROP TABLE IF EXISTS `orders`;
CREATE TABLE IF NOT EXISTS `orders` (
  `id` int(50) NOT NULL AUTO_INCREMENT,
  `user_id` int(50) NOT NULL,
  `product_id` int(50) NOT NULL,
  `status` int(50) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=21 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `orders`
--

INSERT INTO `orders` (`id`, `user_id`, `product_id`, `status`) VALUES
(1, 1, 1, 1),
(2, 1, 3, 1),
(3, 1, 4, 1),
(4, 1, 8, 1),
(5, 3, 8, 0),
(6, 3, 6, 0),
(7, 3, 4, 0),
(8, 3, 5, 0),
(9, 3, 2, 0),
(10, 3, 3, 1),
(11, 3, 8, 0),
(12, 3, 8, 0),
(13, 1, 1, 1),
(14, 1, 3, 1),
(15, 1, 10, 1),
(16, 1, 9, 1),
(17, 1, 1, 1),
(18, 1, 12, 1),
(19, 1, 1, 0),
(20, 1, 12, 0);

-- --------------------------------------------------------

--
-- Table structure for table `pages`
--

DROP TABLE IF EXISTS `pages`;
CREATE TABLE IF NOT EXISTS `pages` (
  `pg_id` int(11) NOT NULL AUTO_INCREMENT,
  `pg_name` varchar(50) NOT NULL,
  `slug` varchar(200) NOT NULL,
  PRIMARY KEY (`pg_id`)
) ENGINE=MyISAM AUTO_INCREMENT=9 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `pages`
--

INSERT INTO `pages` (`pg_id`, `pg_name`, `slug`) VALUES
(4, 'Home', 'home'),
(5, 'Doctor ', 'doctor-team'),
(6, 'Book Appointment', 'booking-appointment'),
(7, 'Department', 'department'),
(8, 'Contact Us ', 'contact-us');

-- --------------------------------------------------------

--
-- Table structure for table `patient`
--

DROP TABLE IF EXISTS `patient`;
CREATE TABLE IF NOT EXISTS `patient` (
  `pt_id` int(11) NOT NULL AUTO_INCREMENT,
  `pt_name` varchar(50) NOT NULL,
  `pt_age` int(50) NOT NULL,
  `pt_gender` varchar(50) NOT NULL,
  `pt_phone` varchar(15) NOT NULL,
  `pt_address` varchar(50) NOT NULL,
  `pt_department` varchar(50) NOT NULL,
  `pt_date` date DEFAULT NULL,
  `pt_time` time DEFAULT NULL,
  `image` varchar(100) NOT NULL,
  PRIMARY KEY (`pt_id`)
) ENGINE=MyISAM AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `patient`
--

INSERT INTO `patient` (`pt_id`, `pt_name`, `pt_age`, `pt_gender`, `pt_phone`, `pt_address`, `pt_department`, `pt_date`, `pt_time`, `image`) VALUES
(1, 'Hammad', 24, 'Female', '03493945120', '45', 'Heart', '2023-12-08', '15:12:00', '86d92a83b25828a182f866ea2d6da501.jpg'),
(2, 'Hammad', 22, 'Male', '03493945120', '22', '4', '2023-12-08', '15:16:00', '9507539ce9331357149e78a4199ff98f.jpg'),
(3, 'talha', 3, 'Female', '03493945120', '48', 'Dentist', '2023-12-28', '14:12:00', '');

-- --------------------------------------------------------

--
-- Table structure for table `pricetable`
--

DROP TABLE IF EXISTS `pricetable`;
CREATE TABLE IF NOT EXISTS `pricetable` (
  `p_id` int(50) NOT NULL,
  `price` int(50) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `pricetable`
--

INSERT INTO `pricetable` (`p_id`, `price`) VALUES
(1, 170000),
(1, 100000);

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

DROP TABLE IF EXISTS `products`;
CREATE TABLE IF NOT EXISTS `products` (
  `product_id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(50) NOT NULL,
  `image` varchar(100) NOT NULL,
  `color` varchar(20) NOT NULL,
  `price` int(22) NOT NULL,
  `description` varchar(100) NOT NULL,
  PRIMARY KEY (`product_id`)
) ENGINE=MyISAM AUTO_INCREMENT=13 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`product_id`, `name`, `image`, `color`, `price`, `description`) VALUES
(1, 'Headphone', 'bca7ba0c074983e30a33152cd79a8c42.avif', 'black', 999, 'Audionic '),
(3, 'Iphone max', 'd6e1160c436bd67063c697cf0b0ecec8.avif', 'Silver', 50000, 'Brand Iphone'),
(12, 'shoes', '283fb4dea747681041e93ff23cba64bc.avif', 'Blue', 4999, 'Brand Nike'),
(9, 'shoes', 'c380f5b460ea581a94616375af5eb232.avif', 'red', 2500, 'Brand Nike'),
(10, 'Apple Watch', 'f804ca43ab423880c563e06298ac22be.avif', 'white', 3000, 'Brand Led Watches of Apple'),
(11, 'Glasses', '3b398de36456c4a6a78676811e8462bb.avif', 'black', 1999, 'Brand');

-- --------------------------------------------------------

--
-- Table structure for table `services`
--

DROP TABLE IF EXISTS `services`;
CREATE TABLE IF NOT EXISTS `services` (
  `sr_id` int(11) NOT NULL AUTO_INCREMENT,
  `image` varchar(255) NOT NULL,
  `department` varchar(11) NOT NULL,
  `content` varchar(122) NOT NULL,
  PRIMARY KEY (`sr_id`)
) ENGINE=MyISAM AUTO_INCREMENT=9 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `services`
--

INSERT INTO `services` (`sr_id`, `image`, `department`, `content`) VALUES
(1, 'fb33ea9e61dd6510c3366359a77ca3e5.png', 'Eye', 'we cure your eyes and you feel better as you feel first'),
(2, '8e4d3664edc571a19801cf403191a855.png', 'Heart', 'we repair your hearts that broken after '),
(3, '445c9a0c81e8099ec76fb64e9700d206.png', 'Mind', 'we cure your mind that was fully disturbed by your wife'),
(4, '77a829d957274e2659691ac3b6d4018d.png', 'Dentist', 'Best curing center to provide comfortable and punctual staff that cares with full constration '),
(8, '18c94d01fa55a6e1e3f2f77ce05e9ba7.png', 'legs check', 'dsfrdsfaws');

-- --------------------------------------------------------

--
-- Table structure for table `things`
--

DROP TABLE IF EXISTS `things`;
CREATE TABLE IF NOT EXISTS `things` (
  `t_id` int(11) NOT NULL AUTO_INCREMENT,
  `c_id` int(11) NOT NULL,
  `t_name` varchar(11) NOT NULL,
  PRIMARY KEY (`t_id`)
) ENGINE=MyISAM AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `things`
--

INSERT INTO `things` (`t_id`, `c_id`, `t_name`) VALUES
(1, 1, 'honda70'),
(2, 1, 'honda125'),
(3, 2, 'roadprince'),
(4, 2, 'united');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

DROP TABLE IF EXISTS `user`;
CREATE TABLE IF NOT EXISTS `user` (
  `user_id` int(11) NOT NULL AUTO_INCREMENT,
  `fname` varchar(50) NOT NULL,
  `lname` varchar(50) NOT NULL,
  `email` varchar(20) NOT NULL,
  `password` int(22) NOT NULL,
  `status` int(50) NOT NULL,
  PRIMARY KEY (`user_id`)
) ENGINE=MyISAM AUTO_INCREMENT=11 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`user_id`, `fname`, `lname`, `email`, `password`, `status`) VALUES
(1, 'Hammad', 'Hayat', 'Hammad@gmail.com', 1111, 1),
(2, 'Arslan', 'Naseer', 'arslan@gmail.com', 1234, 0),
(3, 'Hammad', 'Hayat', 'Hammad@gmail.com', 121, 1),
(4, 'Hammad', 'Hayat', 'Hammad@gmail.com', 12, 0),
(5, 'Hammad', 'Hayat', 'Hammad@gmail.com', 123, 1),
(6, '', '', 'Hammad@gmail.com', 1234, 0),
(7, 'talha', 'talha', 'talha1234@gmail.com', 12344321, 1),
(8, '', '', '', 0, 1),
(9, 'Hammad', 'Hayat', 'Hammad@lkjkjllkgmail', 1234888888, 1),
(10, 'Hammad', 'Hayat', 'Hammad@lkjkjllkgmail', 1234888888, 1);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

DROP TABLE IF EXISTS `users`;
CREATE TABLE IF NOT EXISTS `users` (
  `user_id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `password` int(50) NOT NULL,
  PRIMARY KEY (`user_id`)
) ENGINE=MyISAM AUTO_INCREMENT=7 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`user_id`, `name`, `email`, `password`) VALUES
(1, 'Hammad Hayat', 'Hammad@gmail.com', 1234),
(2, 'talha', 'talha@gmail.com', 1234),
(3, 'Hammad Hayat', 'Hammad@gmail.com', 1234),
(4, 'Hammad Hayat', 'Hammad@gmail.com', 1234),
(5, '', 'Hammad@gmail.com', 1234),
(6, 'Hammad Hayat', 'Hammad@gmail.com', 1234);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
