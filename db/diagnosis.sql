-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 01, 2021 at 12:16 AM
-- Server version: 10.4.11-MariaDB
-- PHP Version: 7.4.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `diagnosis`
--

-- --------------------------------------------------------

--
-- Table structure for table `history`
--

CREATE TABLE `history` (
  `diagnosis_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `anemia` int(11) NOT NULL,
  `nausea` int(11) NOT NULL,
  `dizziness` int(11) NOT NULL,
  `fever` int(11) NOT NULL,
  `jaundice` int(11) NOT NULL,
  `body_weekness` int(11) NOT NULL,
  `liver_enlarge` int(11) NOT NULL,
  `headache` int(11) NOT NULL,
  `vomitting` int(11) NOT NULL,
  `joint_pain` int(11) NOT NULL,
  `appatite_loss` int(11) NOT NULL,
  `result` int(11) NOT NULL,
  `prescription` text NOT NULL,
  `date` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `history`
--

INSERT INTO `history` (`diagnosis_id`, `user_id`, `anemia`, `nausea`, `dizziness`, `fever`, `jaundice`, `body_weekness`, `liver_enlarge`, `headache`, `vomitting`, `joint_pain`, `appatite_loss`, `result`, `prescription`, `date`) VALUES
(1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 0, 1, 0, '', '2021-01-31 16:58:05'),
(2, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 0, 1, 0, '', '2021-01-31 16:58:17'),
(3, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 0, '', '2021-01-31 17:07:59'),
(4, 2, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 0, '', '2021-01-31 17:56:14'),
(5, 2, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 0, '', '2021-01-31 17:57:01'),
(6, 2, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 0, '', '2021-01-31 17:59:22'),
(7, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, '', '2021-01-31 23:53:41'),
(8, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, '', '2021-01-31 23:56:02'),
(9, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, '', '2021-02-01 00:05:52'),
(10, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, '', '2021-02-01 00:07:13'),
(11, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, '', '2021-02-01 00:08:12'),
(12, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, '', '2021-02-01 00:09:25'),
(13, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, '', '2021-02-01 00:09:48'),
(14, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, '', '2021-02-01 00:10:34'),
(15, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, '', '2021-02-01 00:11:13'),
(16, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, '', '2021-02-01 00:11:39');

-- --------------------------------------------------------

--
-- Table structure for table `knowledge_base`
--

CREATE TABLE `knowledge_base` (
  `knowledge_id` int(11) NOT NULL,
  `anemia` int(11) NOT NULL,
  `nausea` int(11) NOT NULL,
  `dizziness` int(11) NOT NULL,
  `fever` int(11) NOT NULL,
  `jaundice` int(11) NOT NULL,
  `body_weekness` int(11) NOT NULL,
  `liver_enlarge` int(11) NOT NULL,
  `headache` int(11) NOT NULL,
  `vomitting` int(11) NOT NULL,
  `joint_pain` int(11) NOT NULL,
  `appatite_loss` int(11) NOT NULL,
  `result` int(11) NOT NULL,
  `prescription` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `knowledge_base`
--

INSERT INTO `knowledge_base` (`knowledge_id`, `anemia`, `nausea`, `dizziness`, `fever`, `jaundice`, `body_weekness`, `liver_enlarge`, `headache`, `vomitting`, `joint_pain`, `appatite_loss`, `result`, `prescription`) VALUES
(1, 2, 3, 3, 4, 3, 3, 3, 3, 3, 3, 3, 4, 'Fansider 500mg'),
(2, 2, 1, 3, 3, 1, 3, 1, 2, 1, 1, 3, 3, ''),
(3, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 'Moderna JAB vaccine\r\n                              '),
(4, 1, 1, 3, 1, 1, 1, 1, 1, 1, 2, 1, 1, ''),
(5, 2, 2, 4, 1, 1, 2, 2, 4, 2, 1, 1, 4, '                              Astrazeneca'),
(6, 2, 1, 2, 2, 1, 2, 1, 1, 2, 2, 1, 2, ''),
(7, 1, 2, 1, 1, 1, 2, 2, 1, 2, 1, 1, 1, ''),
(8, 2, 2, 2, 2, 1, 2, 1, 2, 2, 2, 2, 2, ''),
(9, 2, 2, 2, 1, 1, 3, 1, 2, 1, 2, 2, 3, ''),
(10, 2, 2, 2, 2, 2, 2, 2, 2, 2, 2, 2, 4, ''),
(11, 1, 2, 1, 1, 1, 1, 2, 1, 2, 1, 2, 1, ''),
(12, 3, 4, 4, 2, 3, 3, 3, 4, 1, 2, 3, 4, ''),
(13, 2, 2, 4, 1, 1, 2, 2, 4, 2, 1, 1, 4, ''),
(14, 2, 1, 3, 4, 3, 4, 2, 2, 2, 1, 1, 4, ''),
(15, 2, 1, 1, 1, 1, 3, 1, 1, 2, 1, 3, 3, ''),
(16, 3, 2, 2, 3, 3, 3, 3, 3, 3, 3, 2, 4, ''),
(17, 2, 1, 1, 1, 1, 2, 1, 2, 2, 1, 2, 2, ''),
(18, 2, 2, 1, 1, 2, 3, 3, 3, 3, 2, 2, 3, ''),
(19, 2, 3, 3, 3, 3, 3, 3, 3, 3, 3, 3, 4, ''),
(20, 2, 2, 3, 2, 1, 2, 3, 1, 2, 2, 2, 2, ''),
(23, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 'PCM 500mg');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `user_id` int(11) NOT NULL,
  `username` varchar(75) NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `phone` varchar(15) NOT NULL,
  `password` varchar(155) NOT NULL,
  `access_level` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`user_id`, `username`, `name`, `email`, `phone`, `password`, `access_level`) VALUES
(1, 'ds', 'Khalid Bako', 'admin@simplerentng.com', '08038070373', '81dc9bdb52d04dc20036dbd8313ed055', 0),
(2, 'admin', 'Salisu Yusuf Bako', 'sybako03@gmail.com', '08038070373', 'b59c67bf196a4758191e42f76670ceba', 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `history`
--
ALTER TABLE `history`
  ADD PRIMARY KEY (`diagnosis_id`);

--
-- Indexes for table `knowledge_base`
--
ALTER TABLE `knowledge_base`
  ADD PRIMARY KEY (`knowledge_id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`user_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `history`
--
ALTER TABLE `history`
  MODIFY `diagnosis_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `knowledge_base`
--
ALTER TABLE `knowledge_base`
  MODIFY `knowledge_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
