-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 06, 2023 at 03:45 AM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `basic_crud`
--

DELIMITER $$
--
-- Procedures
--
CREATE DEFINER=`root`@`localhost` PROCEDURE `create_users` (IN `_users_name` VARCHAR(45))   BEGIN
    INSERT INTO users (users_name) VALUES (_users_name);
END$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `delete_users` (IN `_idusers` INT(11))   BEGIN
    DELETE FROM users WHERE idusers=_idusers;
END$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `update_users` (IN `_users_name` VARCHAR(45), IN `_idusers` INT(11))   BEGIN
    UPDATE users SET users_name=_users_name WHERE idusers=_idusers;
END$$

DELIMITER ;

-- --------------------------------------------------------

--
-- Stand-in structure for view `read_users`
-- (See below for the actual view)
--
CREATE TABLE `read_users` (
`idusers` int(11)
,`users_name` varchar(45)
);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `idusers` int(11) NOT NULL,
  `users_name` varchar(45) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

-- --------------------------------------------------------

--
-- Structure for view `read_users`
--
DROP TABLE IF EXISTS `read_users`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `read_users`  AS SELECT `users`.`idusers` AS `idusers`, `users`.`users_name` AS `users_name` FROM `users` ;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`idusers`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `idusers` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
