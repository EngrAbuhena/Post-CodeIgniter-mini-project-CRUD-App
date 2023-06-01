-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Jan 04, 2018 at 05:55 PM
-- Server version: 5.7.19
-- PHP Version: 5.6.31

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `codeigniter`
--

-- --------------------------------------------------------

--
-- Table structure for table `tbl_posts`
--

DROP TABLE IF EXISTS `tbl_posts`;
CREATE TABLE IF NOT EXISTS `tbl_posts` (
  `id` int(100) NOT NULL AUTO_INCREMENT,
  `title` varchar(200) NOT NULL,
  `description` text NOT NULL,
  `date_created` date NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=8 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_posts`
--

INSERT INTO `tbl_posts` (`id`, `title`, `description`, `date_created`) VALUES
(5, 'Wordpress', 'wordpress tutorials', '2018-01-04'),
(2, 'Codeigniter', 'codeigniter tutorials', '2018-01-04'),
(3, 'Joomla', 'joomla tutorials', '2018-01-04'),
(4, 'Laravel', 'laravel tutorials', '2018-01-04'),
(7, 'Magento', 'magento tutorials', '2018-01-04');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
