-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 18, 2022 at 10:02 PM
-- Server version: 10.4.22-MariaDB
-- PHP Version: 8.1.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `phpdasar`
--

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `password`) VALUES
(1, 'admin', '$2y$10$fgGh1G.n2fN6NpQAB7Lk3e/3H4r4psQR8KqFBY.qUCNFfrsFXTmIS'),
(5, 'dikdns', '$2y$10$OpHVClWhBOUPAVpx5jk4.ui3w/MP6eKC68ITHtG9AD5tilSiUvMa.');

-- --------------------------------------------------------

--
-- Table structure for table `videogames`
--

CREATE TABLE `videogames` (
  `id` int(11) NOT NULL,
  `title` varchar(200) NOT NULL,
  `year` int(11) NOT NULL,
  `developer` varchar(200) NOT NULL,
  `platform` varchar(200) NOT NULL,
  `genre` varchar(200) NOT NULL,
  `mode` varchar(200) NOT NULL,
  `image` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `videogames`
--

INSERT INTO `videogames` (`id`, `title`, `year`, `developer`, `platform`, `genre`, `mode`, `image`) VALUES
(8, 'Genshin Impact', 2020, 'miHoYo', 'Windows, PlayStation, Android, iOS', 'Action, Role-playing', 'Single-player, Multiplayer', '61e20d12c6316.png'),
(9, 'The Last of Us', 2013, 'Naughty Dog', 'PlayStation', 'Action, Adventure', 'Single-player', '61e20d341373f.png'),
(10, 'Unravel', 2016, 'Coldwood Interactive', 'Windows, PlayStation', 'Puzzle, Platform', 'Single-player', '61e20d5f0ef00.png'),
(11, 'Subnautica', 2018, 'Unknown Worlds Entertainment', 'Windows, MacOS, PlayStation', 'Survival, Action, Adventure', 'Single-player', '61e20d9421bdc.png'),
(12, 'Detroit: Become Human', 2018, 'Quantic Dream', 'Windows, PlayStation', 'Adventure, Sci-Fi', 'Single-player', '61e20db397bee.png'),
(13, 'It Takes Two', 2021, 'Hazelight Studios', 'Windows, PlayStation', 'Adventure, Platform', 'Multiplayer', '61e20dd4d841a.png'),
(14, 'Little Nightmares', 2017, 'Tarsier Studios', 'Windows, PlayStation', 'Horror, Puzzle, Platform', 'Single-player', '61e20e022c370.png'),
(15, 'Roblox', 2006, 'Roblox Corporation', 'Windows, MacOS, PlayStation, Android, iOS', 'Game Creation System, Massively Multiplayer Online', 'Single-player, Multiplayer', '61e20e3c05598.png'),
(16, 'Minecraft Bedrock Edition', 2017, 'Mojang Studios', 'Windows, PlayStation, Android, iOS', 'Sandbox, Survival', 'Single-player, Multiplayer', '61e20e5d02785.png'),
(17, 'Among Us', 2018, 'Innersloth', 'Windows, PlayStation, Android, iOS', 'Party', 'Multiplayer', '61e20e74bea92.png');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `videogames`
--
ALTER TABLE `videogames`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `videogames`
--
ALTER TABLE `videogames`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
