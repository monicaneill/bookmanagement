-- phpMyAdmin SQL Dump
-- version 5.0.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 24, 2020 at 03:45 PM
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
-- Database: `bookmanagementdatabase`
--

-- --------------------------------------------------------

--
-- Table structure for table `books`
--

CREATE TABLE `books` (
  `ID` int(10) NOT NULL,
  `title` varchar(50) NOT NULL,
  `author` varchar(50) NOT NULL,
  `genre` varchar(50) NOT NULL,
  `Date Added` date NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `books`
--

INSERT INTO `books` (`ID`, `title`, `author`, `genre`, `Date Added`) VALUES
(1, 'Harry Potter', 'J.K Rowling', 'Fantasy', '2020-10-16'),
(2, 'Game of Thrones', 'George R.R. Martin', 'Fantasy', '2020-10-19'),
(3, 'Call of the Wild', 'Jack London', 'Adventure', '2020-10-19'),
(4, 'White Fang', 'Jack London', 'Adventure', '2020-10-19'),
(5, 'Animal Farm', 'George Orwell', 'Dystopian', '2020-10-19'),
(6, 'Life of Pi', 'Yann Martel', 'Philosophical fiction', '2020-10-19'),
(8, 'My Secret Unicorn', 'Linda Chapman', 'Fiction', '2020-10-21'),
(9, 'The Gruffalo', 'Julia Donaldson', 'Picture Book', '2020-10-21'),
(18, 'My Magical Pony', 'Jenny Oldfield', 'Children\'s Literature', '2020-10-24');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `books`
--
ALTER TABLE `books`
  ADD PRIMARY KEY (`ID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `books`
--
ALTER TABLE `books`
  MODIFY `ID` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
