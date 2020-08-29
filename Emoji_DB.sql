-- phpMyAdmin SQL Dump
-- version 4.9.5
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Aug 29, 2020 at 05:55 PM
-- Server version: 5.7.30
-- PHP Version: 7.2.33

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `coversion_emoji`
--

-- --------------------------------------------------------

--
-- Table structure for table `Emoji`
--

CREATE TABLE `Emoji` (
  `EmojiID` double NOT NULL,
  `StreamID` double NOT NULL,
  `Fire` double NOT NULL,
  `Heart` double NOT NULL,
  `Laugh` double NOT NULL,
  `CLAP` double NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `Emoji`
--

INSERT INTO `Emoji` (`EmojiID`, `StreamID`, `Fire`, `Heart`, `Laugh`, `CLAP`) VALUES
(1, 456223, 7, 6, 1, 15);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `Emoji`
--
ALTER TABLE `Emoji`
  ADD PRIMARY KEY (`EmojiID`),
  ADD UNIQUE KEY `StreamID` (`StreamID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `Emoji`
--
ALTER TABLE `Emoji`
  MODIFY `EmojiID` double NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
