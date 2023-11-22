-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 14, 2023 at 12:35 AM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.0.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `kpumstb`
--

-- --------------------------------------------------------

--
-- Table structure for table `data_induk_pemilih`
--

CREATE TABLE `data_induk_pemilih` (
  `id_voter` int(4) NOT NULL,
  `nim` varchar(13) NOT NULL,
  `name` varchar(60) NOT NULL,
  `grade` int(2) NOT NULL,
  `email` varchar(50) NOT NULL,
  `voter_token` varchar(30) NOT NULL,
  `activation_status` int(1) NOT NULL DEFAULT 0,
  `is_voted` int(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `data_induk_pemilih`
--

INSERT INTO `data_induk_pemilih` (`id_voter`, `nim`, `name`, `grade`, `email`, `voter_token`, `activation_status`, `is_voted`) VALUES
(1, 'S1TIS210400', 'Ahmad Ismail Kanabawi', 3, 'user@gmail.com', 'Laazj7m', 1, 1),
(2, 'S1TIS210401', 'Khalid Kasmiri', 3, 'user2@gmail.com', '5yAK9jK', 1, 1);

-- --------------------------------------------------------

--
-- Table structure for table `data_registrasi_pemilih`
--

CREATE TABLE `data_registrasi_pemilih` (
  `id` int(11) NOT NULL,
  `nim` varchar(13) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `data_registrasi_pemilih`
--

INSERT INTO `data_registrasi_pemilih` (`id`, `nim`) VALUES
(1, 'S1TIS210400'),
(5, 'S1TIS210401');

-- --------------------------------------------------------

--
-- Table structure for table `grades`
--

CREATE TABLE `grades` (
  `id` int(2) NOT NULL,
  `grade` varchar(2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `grades`
--

INSERT INTO `grades` (`id`, `grade`) VALUES
(1, '1'),
(2, '3'),
(3, '5'),
(4, '7'),
(5, '9');

-- --------------------------------------------------------

--
-- Table structure for table `votes`
--

CREATE TABLE `votes` (
  `id_vote` int(3) NOT NULL,
  `id_voter` int(13) NOT NULL,
  `candidate_selected` int(2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `votes`
--

INSERT INTO `votes` (`id_vote`, `id_voter`, `candidate_selected`) VALUES
(1, 1, 1),
(2, 2, 2);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `data_induk_pemilih`
--
ALTER TABLE `data_induk_pemilih`
  ADD PRIMARY KEY (`id_voter`),
  ADD UNIQUE KEY `email` (`email`),
  ADD UNIQUE KEY `nim` (`nim`);

--
-- Indexes for table `data_registrasi_pemilih`
--
ALTER TABLE `data_registrasi_pemilih`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `nim` (`nim`);

--
-- Indexes for table `grades`
--
ALTER TABLE `grades`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `grade` (`grade`);

--
-- Indexes for table `votes`
--
ALTER TABLE `votes`
  ADD PRIMARY KEY (`id_vote`),
  ADD KEY `id_voter` (`id_voter`),
  ADD KEY `candidate_selected` (`candidate_selected`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `data_induk_pemilih`
--
ALTER TABLE `data_induk_pemilih`
  MODIFY `id_voter` int(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `data_registrasi_pemilih`
--
ALTER TABLE `data_registrasi_pemilih`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `grades`
--
ALTER TABLE `grades`
  MODIFY `id` int(2) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `votes`
--
ALTER TABLE `votes`
  MODIFY `id_vote` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `votes`
--
ALTER TABLE `votes`
  ADD CONSTRAINT `votes_ibfk_1` FOREIGN KEY (`id_voter`) REFERENCES `data_induk_pemilih` (`id_voter`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
