-- phpMyAdmin SQL Dump
-- version 4.2.10
-- http://www.phpmyadmin.net
--
-- Host: localhost:8889
-- Generation Time: Jul 16, 2017 at 04:57 AM
-- Server version: 5.5.38
-- PHP Version: 5.6.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `eco_form`
--

-- --------------------------------------------------------

--
-- Table structure for table `ecoForm1`
--

CREATE TABLE `ecoForm1` (
`id` int(11) NOT NULL,
  `firstname` varchar(20) NOT NULL,
  `lastname` varchar(20) NOT NULL,
  `email` varchar(30) NOT NULL,
  `comments` text NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `ecoForm1`
--

INSERT INTO `ecoForm1` (`id`, `firstname`, `lastname`, `email`, `comments`) VALUES
(1, 'francoise', 'studer', 'francoise.studer1@gmail.com', 'reihruievhur'),
(2, 'Marc', 'Ben', 'fr@me.com', 'gryueigvy'),
(3, 'Marc', 'Ben', 'fr@me.com', 'gryueigvy'),
(4, 'Marcela', 'Augura', 'mara@me.com', 'this some sample text for Marcela');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `ecoForm1`
--
ALTER TABLE `ecoForm1`
 ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `ecoForm1`
--
ALTER TABLE `ecoForm1`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=5;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
