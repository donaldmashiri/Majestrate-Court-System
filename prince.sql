-- phpMyAdmin SQL Dump
-- version 5.0.3
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Apr 16, 2021 at 02:56 PM
-- Server version: 10.4.14-MariaDB
-- PHP Version: 7.4.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `prince`
--

-- --------------------------------------------------------

--
-- Table structure for table `cases`
--

CREATE TABLE `cases` (
  `case_id` int(11) NOT NULL,
  `names` varchar(255) NOT NULL,
  `case_name` varchar(255) NOT NULL,
  `user_case` varchar(255) NOT NULL,
  `description` text NOT NULL,
  `court` varchar(255) NOT NULL,
  `city` varchar(255) NOT NULL,
  `case_date` date NOT NULL,
  `case_status` varchar(255) NOT NULL DEFAULT 'pending',
  `judgement` varchar(500) NOT NULL DEFAULT 'not send'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `cases`
--

INSERT INTO `cases` (`case_id`, `names`, `case_name`, `user_case`, `description`, `court`, `city`, `case_date`, `case_status`, `judgement`) VALUES
(2, 'DonaldTonderai Mashiri', 'Fraud of 1 million dollars', 'Criminal Cases', 'the majority have suffered alteration in some form, by injected humour, or randomised words which don\'t look even slightly believable. If you are going to use a passage of Lorem Ipsum, you need to be', 'Supreme Court', 'Chegutu', '2021-04-29', 'pending', 'Apinda mujeri akabuda'),
(3, 'John Doe', 'Stolen Money from bank', 'Family Cases', 'ome form by injected humour or randomised words which dont look even slightly believable. If you are going to use a passage of Lorem Ipsum you need to be', 'District Courts', 'Harare', '2021-04-25', 'Postponded', 'yeag'),
(4, 'Donald Angel', 'Public drinking', 'Family Cases', 'Magistrates courts are divided into regional courts and provincial courts.  Regional courts are the more senior.  All magistrates are appointed by the Judicial Service Commission.', 'Bankruptcy Courts', 'Hwange', '2021-04-25', 'pending', 'not send');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `user_id` int(11) NOT NULL,
  `firstName` varchar(255) NOT NULL,
  `lastName` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `phoneNo` int(11) NOT NULL,
  `gender` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`user_id`, `firstName`, `lastName`, `email`, `phoneNo`, `gender`, `password`) VALUES
(1, 'DonaldTonderai', 'Mashiri', 'donaldtondemashiri@gmail.com', 779400263, 'male', 'donnie'),
(2, 'prince', 'nyamuranga', 'princenyamuranga@gmail.com', 784815394, 'male', 'prince');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `cases`
--
ALTER TABLE `cases`
  ADD PRIMARY KEY (`case_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`user_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `cases`
--
ALTER TABLE `cases`
  MODIFY `case_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
