-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 19, 2019 at 03:58 PM
-- Server version: 10.1.29-MariaDB
-- PHP Version: 7.2.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `moviesdb`
--

-- --------------------------------------------------------

--
-- Table structure for table `moviestbl`
--

CREATE TABLE `moviestbl` (
  `id` int(11) NOT NULL,
  `movie_name` varchar(20) NOT NULL,
  `duration` varchar(10) NOT NULL,
  `status` varchar(1) NOT NULL,
  `release_yr` varchar(4) NOT NULL,
  `imdb_rating` varchar(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `moviestbl`
--

INSERT INTO `moviestbl` (`id`, `movie_name`, `duration`, `status`, `release_yr`, `imdb_rating`) VALUES
(1, 'aquaman', '01:00:00', 'a', '2019', '5'),
(2, 'superman', '01:23:43', 'a', '2018', '5'),
(3, 'infinity wars', '01:24:13', 'a', '2018', '5'),
(4, 'kobo and the two str', '02:56:04', 'a', '2017', '5'),
(5, '3 idiots', '01:23:43', 'a', '2017', '5'),
(6, 'like stars on earth', '01:23:43', 'a', '2017', '5'),
(7, 'queen of katwe', '01:23:43', 'a', '2018', '5'),
(8, 'wonder', '01:23:43', 'a', '2018', '5'),
(9, 'game of thrones', '01:23:43', 'a', '2014', '5'),
(10, 'the originals', '01:23:43', 'a', '2017', '5'),
(11, 'shazam', '01:23:43', 'a', '2019', '5'),
(12, 'wonder woman', '01:23:43', 'a', '2017', '5'),
(13, 'guardians of the gal', '01:23:43', 'a', '2018', '5'),
(14, 'lions heart', '01:23:43', 'a', '2019', '5'),
(15, 'orphan black', '01:23:43', 'a', '2017', '5'),
(16, 'a thousand words', '01:23:43', 'a', '2017', '5'),
(17, 'lie to me', '01:23:43', 'a', '2017', '5'),
(18, 'koko', '01:23:43', 'a', '2017', '5'),
(19, 'the greatest showman', '01:23:43', 'a', '2018', '5'),
(20, 'venom', '01:23:43', 'a', '2019', '5');

-- --------------------------------------------------------

--
-- Table structure for table `userstbl`
--

CREATE TABLE `userstbl` (
  `id` int(11) NOT NULL,
  `fname` varchar(20) NOT NULL,
  `lname` varchar(20) NOT NULL,
  `email` varchar(50) NOT NULL,
  `password` varchar(20) NOT NULL,
  `username` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `userstbl`
--

INSERT INTO `userstbl` (`id`, `fname`, `lname`, `email`, `password`, `username`) VALUES
(1, 'Aghwotu', 'Ovuoke', 'aghwotuovuoke@gmail.com', 'pwd', 'ediri'),
(2, 'Aghwotu', 'Ovuoke', 'aghwotuovuoke@gmail.com', 'pwd', 'ediri');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `moviestbl`
--
ALTER TABLE `moviestbl`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `userstbl`
--
ALTER TABLE `userstbl`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `moviestbl`
--
ALTER TABLE `moviestbl`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT for table `userstbl`
--
ALTER TABLE `userstbl`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
