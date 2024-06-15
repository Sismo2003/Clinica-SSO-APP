-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Jun 15, 2024 at 01:53 AM
-- Server version: 8.2.0
-- PHP Version: 8.3.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `ClinicaSSO`
--

-- --------------------------------------------------------

--
-- Table structure for table `colposcopicos`
--

CREATE TABLE `colposcopicos` (
  `ID` int NOT NULL,
  `CERVIX` varchar(255) DEFAULT NULL,
  `PATRON_VASCULAR` varchar(255) DEFAULT NULL,
  `ZONA_DE_TRANSFORMACION` varchar(255) DEFAULT NULL,
  `UNION_ESCAMOCILINDRICA` varchar(255) DEFAULT NULL,
  `EPITELIO_ESCAMOSO` varchar(255) DEFAULT NULL,
  `EPITELIO_CILINDRICO` varchar(255) DEFAULT NULL,
  `TEST_DE_HINSELMAN` varchar(255) DEFAULT NULL,
  `TEST_DE_SCHILLER` varchar(255) DEFAULT NULL,
  `COLPOSCOPIA` varchar(255) DEFAULT NULL,
  `DIAGNOSTICO_COLPOSCOPICO` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- --------------------------------------------------------

--
-- Table structure for table `comentarios`
--

CREATE TABLE `comentarios` (
  `ID` int NOT NULL,
  `VULVA_Y_VAGINA` varchar(750) DEFAULT NULL,
  `HALLAZGOS_COLPOSCOPICOS_ANORMALES` varchar(750) DEFAULT NULL,
  `PLAN_TERAPEUTICO` varchar(750) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- --------------------------------------------------------

--
-- Table structure for table `gineco_obstetricos`
--

CREATE TABLE `gineco_obstetricos` (
  `ID` int NOT NULL,
  `EMBARAZOS` int DEFAULT '0',
  `PARTOS` int DEFAULT '0',
  `ABORTOS` int DEFAULT '0',
  `CESARIAS` int DEFAULT '0',
  `FUM` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- --------------------------------------------------------

--
-- Table structure for table `paciente`
--

CREATE TABLE `paciente` (
  `ID` int NOT NULL,
  `NOMBRE` varchar(255) NOT NULL,
  `EDAD` int DEFAULT NULL,
  `FECHA_DE_ESTUDIOS` varchar(255) NOT NULL,
  `FECHA_DE_NACIMIENTO` date DEFAULT NULL,
  `FECHA` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `DGO_ID` int DEFAULT NULL,
  `COLPOS_ID` int DEFAULT NULL,
  `COMENTARIOS_ID` int DEFAULT NULL,
  `RESPONSABLE_ID` int DEFAULT NULL,
  `STATUS` int NOT NULL DEFAULT '1'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- --------------------------------------------------------

--
-- Table structure for table `responsable`
--

CREATE TABLE `responsable` (
  `ID` int NOT NULL,
  `NOMBRE` varchar(255) DEFAULT NULL,
  `CED_PROFESIONAL` varchar(15) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int NOT NULL,
  `fullname` varchar(255) NOT NULL,
  `user_type` int NOT NULL,
  `username` varchar(50) NOT NULL,
  `pass` varchar(255) NOT NULL,
  `status` int NOT NULL DEFAULT '1',
  `deleted` int NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `colposcopicos`
--
ALTER TABLE `colposcopicos`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `comentarios`
--
ALTER TABLE `comentarios`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `gineco_obstetricos`
--
ALTER TABLE `gineco_obstetricos`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `paciente`
--
ALTER TABLE `paciente`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `responsable`
--
ALTER TABLE `responsable`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `colposcopicos`
--
ALTER TABLE `colposcopicos`
  MODIFY `ID` int NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `comentarios`
--
ALTER TABLE `comentarios`
  MODIFY `ID` int NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `gineco_obstetricos`
--
ALTER TABLE `gineco_obstetricos`
  MODIFY `ID` int NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `paciente`
--
ALTER TABLE `paciente`
  MODIFY `ID` int NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `responsable`
--
ALTER TABLE `responsable`
  MODIFY `ID` int NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
