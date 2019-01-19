-- phpMyAdmin SQL Dump
-- version 4.3.11
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Mar 22, 2017 at 09:25 PM
-- Server version: 5.6.24
-- PHP Version: 5.6.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `taskmanager`
--

-- --------------------------------------------------------

--
-- Table structure for table `tasks`
--

CREATE TABLE IF NOT EXISTS `tasks` (
  `id` int(20) NOT NULL,
  `names` varchar(100) NOT NULL,
  `description` varchar(100) NOT NULL,
  `date_entered` date NOT NULL,
  `date_due` date NOT NULL,
  `status` varchar(25) NOT NULL DEFAULT 'Pending',
  `users` varchar(100) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=29 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tasks`
--

INSERT INTO `tasks` (`id`, `names`, `description`, `date_entered`, `date_due`, `status`, `users`) VALUES
(7, 'Add search', 'Add search funtionality', '2017-03-12', '2017-03-13', 'Completed', 'Just Me'),
(13, 'Fetch tasks', 'Figure out fetch.', '2017-03-14', '2017-03-14', 'Pending', 'Just Me'),
(14, 'just testing', 'test 1', '2017-03-14', '2017-03-14', 'Pending', 'Still Me'),
(15, 'still testing', 'lorem ipsum', '2017-03-14', '2017-03-14', 'Pending', 'Yet Again'),
(27, 'Kuku!', 'Eat some chicken.', '2017-03-14', '2017-04-14', 'Pending', 'Innocent Wafla'),
(28, 'still a test', 'test 3', '2017-03-22', '2017-03-23', 'Pending', 'Innocent Wanaswa');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE IF NOT EXISTS `users` (
  `id` int(20) NOT NULL,
  `names` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` varchar(50) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=16 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `names`, `email`, `password`) VALUES
(1, 'Just Me', 'justme@mail.com', 'qwertyui'),
(5, 'Still Me', 'stillme@mail.com', 'qwertyui'),
(6, 'Yet Again', 'yetagain@mail.com', 'qwertyui'),
(7, 'Innocent Wafla', 'wafla@mail.com', 'password'),
(8, 'Marvin Mark', 'agutu@mail.com', 'password');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tasks`
--
ALTER TABLE `tasks`
  ADD UNIQUE KEY `id` (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD UNIQUE KEY `id` (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tasks`
--
ALTER TABLE `tasks`
  MODIFY `id` int(20) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=29;
--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(20) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=16;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
