-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 04, 2022 at 06:54 PM
-- Server version: 10.4.22-MariaDB
-- PHP Version: 7.4.26

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `20212_wp2_412020012`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` int(10) NOT NULL,
  `name` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `name`, `email`, `password`) VALUES
(1, 'musicgo', 'officialmusicgo@gmail.com', 'ofcmusicgo123'),
(2, 'musicgo', 'officialmusicgo02@gmail.com', 'ofcmusicgo123'),
(3, 'musicgo', 'officialmusicgo03@gmail.com', 'ofcmusicgo123');

-- --------------------------------------------------------

--
-- Table structure for table `andmesh`
--

CREATE TABLE `andmesh` (
  `id` int(11) NOT NULL,
  `name_artist` varchar(50) NOT NULL,
  `name_music` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `andmesh`
--

INSERT INTO `andmesh` (`id`, `name_artist`, `name_music`) VALUES
(1, 'Andmesh Kamelang', 'Hanya Rindu'),
(2, 'Andmesh Kamelang', 'Cinta Luar Biasa'),
(3, 'Andmesh Kamelang', 'Nyaman'),
(6, '', '');

-- --------------------------------------------------------

--
-- Table structure for table `ariana`
--

CREATE TABLE `ariana` (
  `id` int(11) NOT NULL,
  `name_artist` varchar(50) NOT NULL,
  `name_music` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `ariana`
--

INSERT INTO `ariana` (`id`, `name_artist`, `name_music`) VALUES
(1, 'Ariana Grande', 'One Last Time '),
(2, 'Ariana Grande', 'Side To Side'),
(3, 'Ariana Grande', 'Stuck With You');

-- --------------------------------------------------------

--
-- Table structure for table `authors`
--

CREATE TABLE `authors` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `authors`
--

INSERT INTO `authors` (`id`, `name`) VALUES
(1, 'Sir Benisius Anu'),
(2, 'Sir Fredicia'),
(3, 'Mis Rita Wiryasaputra\r\n');

-- --------------------------------------------------------

--
-- Table structure for table `contact_us`
--

CREATE TABLE `contact_us` (
  `id` int(100) NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `phone` varchar(50) NOT NULL,
  `message` text NOT NULL,
  `datetime` datetime NOT NULL DEFAULT current_timestamp(),
  `feedback` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `contact_us`
--

INSERT INTO `contact_us` (`id`, `name`, `email`, `phone`, `message`, `datetime`, `feedback`) VALUES
(1, 'test', 'albertzeb07@gmail.com', '081219300633', 'Upload Lagu-Lagu nya', '2022-06-28 14:35:42', 'mager, pankapan aja'),
(2, 'test(2)', 'albertzeb07@gmail.com', '081219300633', 'upload album Lewis Capaldi', '2022-06-29 11:15:11', 'kalo inget'),
(3, 'Euodia Anggita', 'euodiagita10@gmail.com', '081219300633', 'Upload lagu-lagu nya lagi', '2022-07-03 18:54:32', 'diusahakan');

-- --------------------------------------------------------

--
-- Table structure for table `dean`
--

CREATE TABLE `dean` (
  `id` int(11) NOT NULL,
  `name_artist` varchar(50) NOT NULL,
  `name_music` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `dean`
--

INSERT INTO `dean` (`id`, `name_artist`, `name_music`) VALUES
(1, 'Dean Lewis', 'Be Alright'),
(2, 'Dean Lewis', 'Waves'),
(3, 'Dean Lewis', 'Half A Man');

-- --------------------------------------------------------

--
-- Table structure for table `fiersa`
--

CREATE TABLE `fiersa` (
  `id` int(11) NOT NULL,
  `name_artist` varchar(50) NOT NULL,
  `name_music` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `fiersa`
--

INSERT INTO `fiersa` (`id`, `name_artist`, `name_music`) VALUES
(1, 'Fiersa Besari', 'Celengan Rindu'),
(2, 'Fiersa Besari', 'Waktu Yang Salah'),
(3, 'Fiersa Besari', 'April'),
(4, 'test', 'test'),
(5, 'Lewis Capaldi', 'Someone You Loved'),
(6, 'Lewis Capaldi', 'Someone You Loved');

-- --------------------------------------------------------

--
-- Table structure for table `jason`
--

CREATE TABLE `jason` (
  `id` int(11) NOT NULL,
  `name_artist` varchar(50) NOT NULL,
  `name_music` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `jason`
--

INSERT INTO `jason` (`id`, `name_artist`, `name_music`) VALUES
(1, 'Jason Mraz', 'Im Yours'),
(2, 'Jason Mraz', 'Lucky'),
(3, 'Jason Mraz', 'I Wont Give Up');

-- --------------------------------------------------------

--
-- Table structure for table `justin`
--

CREATE TABLE `justin` (
  `id` int(11) NOT NULL,
  `name_artist` varchar(50) NOT NULL,
  `name_music` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `justin`
--

INSERT INTO `justin` (`id`, `name_artist`, `name_music`) VALUES
(1, 'Justin Bieber', 'Love Yourself'),
(2, 'Justin Bieber', 'Ghost'),
(3, 'Justin Bieber', 'Attention');

-- --------------------------------------------------------

--
-- Table structure for table `lewis`
--

CREATE TABLE `lewis` (
  `id` int(11) NOT NULL,
  `name_artist` varchar(50) NOT NULL,
  `name_music` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `lewis`
--

INSERT INTO `lewis` (`id`, `name_artist`, `name_music`) VALUES
(1, 'Lewis Capaldi', 'Someone You Loved'),
(2, 'Lewis Capaldi', 'Before You Go'),
(3, 'Lewis Capaldi', 'Bruisess');

-- --------------------------------------------------------

--
-- Table structure for table `news`
--

CREATE TABLE `news` (
  `id` int(11) NOT NULL,
  `title` varchar(255) NOT NULL,
  `datepublished` date NOT NULL DEFAULT current_timestamp(),
  `content` mediumtext NOT NULL,
  `authors_id` int(11) NOT NULL,
  `image` varchar(255) NOT NULL DEFAULT 'defaultnews.jpg'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `news`
--

INSERT INTO `news` (`id`, `title`, `datepublished`, `content`, `authors_id`, `image`) VALUES
(2, 'Lirik Lagu It\'ll Be Okay, Curahan Hati Shawn Mendes', '2022-07-03', ' Shawn Mendes, tengah patah hati usai putus cinta dari sang kekasih, Camila Cabello. Tak mau terus larut, ia pun memilih untuk mencurahkan melalui sebuah lagu.  Dan Shawn Mendes, meluncurkan single bertajuk \"It\'ll Be Okay\". Lagu ini mengungkapkan gejolak hatinya saat hubungan yang dibangun runtuh.', 2, '62c15a58ebf9a.jpg'),
(3, 'MusicGo', '2022-07-03', 'Website ini tentang Music yang terdiri dari beberapa album yang dimana lagu nya sesuai artist-artistnya.', 3, '62c142e173ae3.png');

-- --------------------------------------------------------

--
-- Table structure for table `shawn`
--

CREATE TABLE `shawn` (
  `id` int(11) NOT NULL,
  `name_artist` varchar(50) NOT NULL,
  `name_music` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `tulus`
--

CREATE TABLE `tulus` (
  `id` int(11) NOT NULL,
  `name_artist` varchar(50) NOT NULL,
  `name_music` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tulus`
--

INSERT INTO `tulus` (`id`, `name_artist`, `name_music`) VALUES
(1, 'Tulus', 'Hati-Hati Di Jalan'),
(2, 'Tulus', 'Manusia Kuat'),
(3, 'Tulus', 'Ingkar'),
(4, '', ''),
(5, '', ''),
(6, 'tes', 'test');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(100) NOT NULL,
  `name` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `password` varchar(255) NOT NULL,
  `gender` varchar(255) NOT NULL,
  `date_of_birth` date NOT NULL,
  `datetime` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `password`, `gender`, `date_of_birth`, `datetime`) VALUES
(1, 'oke', 'oke@gmail.com', 'oke1234', 'Laki-Laki', '2022-06-28', '2022-06-28 10:42:36'),
(2, 'albert', 'albert', '12345', 'laki-laki', '0000-00-00', '2022-06-28 10:52:16'),
(3, 'UKRIDA01', 'ukrida01@gmail.com', 'ukrida01', 'Perempuan', '0000-00-00', '2022-06-28 10:53:04'),
(4, 'albert', 'albert', '12345', 'laki-laki', '2018-07-15', '2022-06-28 10:53:45'),
(5, 'Albert Saputra Zebua', 'albertzeb07@gmail.com', 'AlbertZeb07', 'Laki-Laki', '2002-10-28', '2022-06-28 10:54:42'),
(6, 'Albert Ardiansyah', 'albert.412020033@civitas.ukrida.ac.id', '12345', 'Laki-Laki', '2002-10-28', '2022-06-28 11:10:03'),
(7, 'Ester Febiola', 'ester@gmail.com', '12345', 'Perempuan', '2001-02-13', '2022-06-28 11:12:57'),
(8, 'Yohanes Stefanus', 'yohanes@gmail.com', '12345', 'Laki-Laki', '2002-07-16', '2022-06-28 11:27:51'),
(9, 'Euodia Anggita', 'euodiagita10@gmail.com', 'Gita12345', 'Perempuan', '2001-06-13', '2022-06-28 15:20:17');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `andmesh`
--
ALTER TABLE `andmesh`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `ariana`
--
ALTER TABLE `ariana`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `authors`
--
ALTER TABLE `authors`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `contact_us`
--
ALTER TABLE `contact_us`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `dean`
--
ALTER TABLE `dean`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `fiersa`
--
ALTER TABLE `fiersa`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `jason`
--
ALTER TABLE `jason`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `justin`
--
ALTER TABLE `justin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `lewis`
--
ALTER TABLE `lewis`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `news`
--
ALTER TABLE `news`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `shawn`
--
ALTER TABLE `shawn`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tulus`
--
ALTER TABLE `tulus`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `andmesh`
--
ALTER TABLE `andmesh`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `ariana`
--
ALTER TABLE `ariana`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `authors`
--
ALTER TABLE `authors`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `contact_us`
--
ALTER TABLE `contact_us`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `dean`
--
ALTER TABLE `dean`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `fiersa`
--
ALTER TABLE `fiersa`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `jason`
--
ALTER TABLE `jason`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `justin`
--
ALTER TABLE `justin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `lewis`
--
ALTER TABLE `lewis`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `news`
--
ALTER TABLE `news`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `shawn`
--
ALTER TABLE `shawn`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tulus`
--
ALTER TABLE `tulus`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
