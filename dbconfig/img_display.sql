-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 02, 2017 at 05:29 PM
-- Server version: 10.1.28-MariaDB
-- PHP Version: 7.1.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `logint`
--

-- --------------------------------------------------------

--
-- Table structure for table `img_display`
--

CREATE TABLE `img_display` (
  `id` int(11) NOT NULL,
  `name` varchar(200) DEFAULT NULL,
  `artist` varchar(50) NOT NULL,
  `type` varchar(50) NOT NULL,
  `img` varchar(200) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `img_display`
--

INSERT INTO `img_display` (`id`, `name`, `artist`, `type`, `img`) VALUES
(1, 'Bass Rani', 'Nucleya', 'album', 'imgs/nucleya.jpg'),
(2, 'Divide', 'Ed Sheeran', 'album', 'imgs/divide.jpg'),
(3, 'Eminem', '', 'artist', 'imgs/eminem.jpg'),
(5, 'Selena Gomez', '', 'artist', 'imgs/selenagomez.jpg'),
(6, 'Atif Aslam', '', 'artist', 'imgs/atifaslam.jpg'),
(7, 'Arijit Singh', '', 'artist', 'imgs/arijitsingh.jpg'),
(9, 'Rihanna', '', 'artist', 'imgs/rihanna.jpg'),
(11, 'International Villager', 'Honey Singh', 'album', 'imgs/internationalvillager.jpg'),
(12, 'Marshall Mathers LP', 'Eminem', 'album', 'imgs/mmlp.jpg'),
(13, 'Jhoomo re', 'Kailash Kher', 'album', 'imgs/kailasa.jpg'),
(14, 'Katyar Kaljat Ghusli', 'many', 'album', 'imgs/katyar.jpg'),
(15, 'Aashqui 2', 'Arijit Singh', 'album', 'imgs/aashqui2.jpg'),
(16, 'Freedom', 'Akon', 'album', 'imgs/freedom.jpg'),
(20, 'Honey Singh', '', 'artist', 'imgs/honeysingh.jpg'),
(21, 'Badshah', '', 'artist', 'imgs/badshah.jpg'),
(22, 'Ed Sheeran', '', 'artist', 'imgs/edsheeran.jpg'),
(30, 'Dj Wale Babu', 'Badshah', 'single', 'imgs/djwalebabu.jpg'),
(31, 'Lose Yourself', 'Eminem', 'single', 'imgs/loseyourself.jpg');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `img_display`
--
ALTER TABLE `img_display`
  ADD PRIMARY KEY (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
