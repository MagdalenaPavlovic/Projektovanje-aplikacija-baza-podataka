-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 24, 2024 at 07:49 PM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.0.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `biblioteka`
--

-- --------------------------------------------------------

--
-- Table structure for table `books`
--

CREATE TABLE `books` (
  `id` int(11) NOT NULL,
  `isbn` varchar(13) NOT NULL,
  `autor` varchar(64) NOT NULL,
  `name` varchar(64) NOT NULL,
  `genre` varchar(32) NOT NULL,
  `year` varchar(5) NOT NULL,
  `user_id` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `books`
--

INSERT INTO `books` (`id`, `isbn`, `autor`, `name`, `genre`, `year`, `user_id`) VALUES
(6, '156254', 'Oskar Vajld', 'Slika Dorijana Greja', 'Goticki roman / klasici sv. knj.', '1890', 10),
(14, '168843', 'Carls Dikens', 'Velika ocekivanja', 'Realisticko-psiholoski roman', '1861', 0),
(22, '547121', 'Harper Li', 'Ubiti pticu rugalicu', 'Goticki roman', '1960', 0),
(13, '157265', 'Harper Li', 'Ponos i predrasude', 'Ljubavni roman', '1960', 0),
(3, '645123', 'J. D. Salinger', 'Lovac u zitu', 'Bildunsroman', '1951', 0);

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `ime` varchar(32) NOT NULL,
  `prezime` varchar(32) NOT NULL,
  `email` varchar(50) NOT NULL,
  `password` varchar(32) NOT NULL,
  `about` text NOT NULL,
  `priv` varchar(10) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `ime`, `prezime`, `email`, `password`, `about`, `priv`) VALUES
(10, 'Magdalena', 'Pavlovic', 'pavlovicmag0@gmail.com', '99ca0ce97014289f5372782e1d920b8c', '', '0'),
(9, 'David', 'S', 'davis@gmail.com', '624c9f0a5c8699804e354286cf840f89', '', '0'),
(11, 'Daca', 'P', 'dacap@gmail.com', 'b1d9dbeaabd3b684538e3e8a51a86d6e', '', '0');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `books`
--
ALTER TABLE `books`
  ADD PRIMARY KEY (`id`,`user_id`),
  ADD UNIQUE KEY `isbn` (`isbn`),
  ADD KEY `fk_books_user_idx` (`user_id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `books`
--
ALTER TABLE `books`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
