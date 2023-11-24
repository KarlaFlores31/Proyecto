-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 23, 2023 at 07:01 PM
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
-- Database: `equipo1`
--

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `ID` int(11) NOT NULL,
  `CUENTASIE` varchar(30) DEFAULT NULL,
  `PASSWORD` varchar(20) DEFAULT NULL,
  `NOMBRE` varchar(70) DEFAULT NULL,
  `IDIEST` decimal(10,0) DEFAULT NULL,
  `CARRERA` varchar(50) DEFAULT NULL,
  `SEMESTRE` varchar(20) DEFAULT NULL,
  `ROLES` varchar(10) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`ID`, `CUENTASIE`, `PASSWORD`, `NOMBRE`, `IDIEST`, `CARRERA`, `SEMESTRE`, `ROLES`) VALUES
(1, 'edna.sanchez', '12345', 'Edna Carolina Sanchez Gutierrez', 22498, 'ISND', 'Cuarto Semestre', 'Estudiante'),
(2, 'Karla.Flores', '123456', 'Karla Valeria Flores Ochoa', 22698, 'ISND', 'Cuarto Semestre', 'Estudiante'),
(3, 'juanpablo.salinas', '1234567', 'Juan Pablo Salinas Barreda', 22789, 'ISND', 'Cuarto Semestre', 'Estudiante'),
(4, 'jose.molina', 'krfu72590', 'Jose Roberto Molina Duran', 22436, 'ISND', 'Cuarto Semestre', 'Estudiante'),
(5, 'guillermo.asad', '1234567', 'Victor Guillermo Asad', 23251, 'ISND', 'Otro', 'Empleado');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`ID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
