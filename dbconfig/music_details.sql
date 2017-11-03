-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 03, 2017 at 03:57 PM
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
-- Table structure for table `music_details`
--

CREATE TABLE `music_details` (
  `id` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `text` text NOT NULL,
  `link` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `music_details`
--

INSERT INTO `music_details` (`id`, `name`, `text`, `link`) VALUES
(1, 'Bass Rani', 'Udyan Sagar, better known by his stage name Nucleya or NUCLEYA, is an Indian music producer. He co-founded Bandish Projekt with Mayur Narvekar in 1998. He is noted for his genre bending productions, combining EDM along with traditional Indian musical instruments & ambient sounds. He has been frequently featured on BBC Radio 1\'s playlists.', '<iframe width=\"560\" height=\"315\" src=\"https://www.youtube.com/embed/slNebO7Yips\" frameborder=\"0\" allowfullscreen></iframe>'),
(2, 'Divide', 'Divide is the third studio album by English singer-songwriter Ed Sheeran. It was released on 3 March 2017 through Asylum Records and Atlantic Records. \"Castle on the Hill\" and \"Shape of You\" were released as the album\'s lead singles on 6 January 2017.\r\n\r\nThe album debuted at number one in the United Kingdom, selling 672,000 units in its first week, making it the fastest-selling album by a male artist there and the third-highest opening behind Adele\'s 25 and Oasis\' Be Here Now. It also topped the charts in 14 countries, including the United States, Canada, and Australia. All the tracks on the album reached the top 20 of the UK Singles Chart in the week of the album\'s release, due mainly to heavy streaming.', '<iframe width=\"560\" height=\"315\" src=\"https://www.youtube.com/embed/ObeARIU6Vb4\" frameborder=\"0\" allowfullscreen></iframe>');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `music_details`
--
ALTER TABLE `music_details`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `music_details`
--
ALTER TABLE `music_details`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
