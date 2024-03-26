-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 25, 2024 at 02:36 PM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `dominko_sk`
--

-- --------------------------------------------------------

--
-- Table structure for table `t_user`
--

CREATE TABLE `t_user` (
  `ID` bigint(20) NOT NULL,
  `username` varchar(100) NOT NULL,
  `password` varchar(200) NOT NULL,
  `email` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `t_user`
--

INSERT INTO `t_user` (`ID`, `username`, `password`, `email`) VALUES
(1, 'admin', 'ASD13f', 'no email'),
(2, 'anicka', '$2y$10$muo/wEHbCqu7V.jFvl5/CuZDFMfTLOa38XoTsi1rKdpnEPMzAypuq', 'anicka@a.sk'),
(25, 'Bob', 'Bob11', 'BobBob@Bob.Bob'),
(26, 'LudovitStur', 'Slovencina', 'LudovitStur@gmail.com'),
(34, 'Jozko', '123', 'JozkoFerko@gmail.com'),
(36, 'fero', 'jozko', 'ahoj@dfdfs.com'),
(37, 'robo', '123', '123@gmail.com'),
(54, 'AlbertEinstein', 'AlbertIsTheBest777', 'AlbertEinstein@gmail.com'),
(56, 'Petra', 'Petra123', 'Petra@hotmail.com'),
(62, 'Tom', 'Tom12', 'Tom551@gmail.com'),
(64, 'Ben', 'Ben8', 'LittleBigBen@gmail.com'),
(66, 'Veronika', 'Veronika852', 'V3R0N1K4@gmail.com'),
(67, 'Mozart', 'ILoveMusic', 'TheRealMozart@gmail.com'),
(69, 'Vin Diesel', 'Diesel60', 'VinDiesel@gmail.com'),
(70, 'yxc', 'yxcyxc', 'ycxcxycxycxyc'),
(72, 'ascxy', 'acxy', 'asfeewycx'),
(74, 'adbsfgvc', 'eavsfc', 'wrsfvcas'),
(76, 'egdbfv', 'ehnbds', 'rtjgmdngcn'),
(77, 'egdbfv', 'ehnbds', 'rtjgmdngcn'),
(79, 'asc', 'vfscqe', 'wevwvdsveqa'),
(81, 'arzsjtfngxc', 'awhrdfbvcx', 'erthdgbncv'),
(83, 'Samuel Jozef Nad', 'blbec', 'jozo@gmail.com');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `t_user`
--
ALTER TABLE `t_user`
  ADD PRIMARY KEY (`ID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `t_user`
--
ALTER TABLE `t_user`
  MODIFY `ID` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=84;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
