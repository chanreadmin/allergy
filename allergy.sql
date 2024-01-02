-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 02, 2024 at 12:57 PM
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
-- Database: `allergy`
--

-- --------------------------------------------------------

--
-- Table structure for table `tbl_admin`
--

CREATE TABLE `tbl_admin` (
  `id` int(11) NOT NULL,
  `adminName` varchar(255) DEFAULT NULL,
  `centerCode` int(55) DEFAULT NULL,
  `adminUsername` varchar(255) DEFAULT NULL,
  `adminPassword` varchar(255) DEFAULT NULL,
  `adminImage` text DEFAULT NULL,
  `admin_email` varchar(255) DEFAULT NULL,
  `mobile` int(20) DEFAULT NULL,
  `isActive` int(11) DEFAULT NULL,
  `status` int(11) DEFAULT NULL,
  `occupation` varchar(100) DEFAULT NULL,
  `createdAt` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tbl_admin`
--

INSERT INTO `tbl_admin` (`id`, `adminName`, `centerCode`, `adminUsername`, `adminPassword`, `adminImage`, `admin_email`, `mobile`, `isActive`, `status`, `occupation`, `createdAt`) VALUES
(1, 'Shamim', 1001, 'shamim', '$2y$10$muxD0T56IzzY5/HQf8jEp.iu9OP8h6TqdmLeMEv6mOPeRUbORjBr2', NULL, 'webdesigner@chanrejournals.com', NULL, 1, NULL, NULL, '2023-12-26 11:02:00'),
(2, 'Test User', 1001, 'testuser', '$2y$10$8WmLjEG6uUu2yEwg0uNukeKWN7rmzdIPsF0LailsZXlDAOMVv0qIK', NULL, 'webdesigner@chanrejournals.com', NULL, 1, NULL, NULL, '2023-12-26 11:04:50'),
(3, 'admin', 1001, 'testuser2', '$2y$10$5uYu4Vup4BJ4g5FBdbgEau89iHfbxZlgiZR24EQuk/eZ0Kjnympze', NULL, 'webdesigner@chanrejournals.com', NULL, 1, NULL, NULL, '2023-12-26 11:21:26'),
(4, 'admin', 1001, 'testuser2', '$2y$10$DRVdzYdLGO0Bw8CD/zTpju6YDxtUr.SC/MxRjx/IVkeVauzpw9acW', NULL, 'webdesigner@chanrejournals.com', NULL, 1, NULL, NULL, '2023-12-26 11:22:05');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_center`
--

CREATE TABLE `tbl_center` (
  `id` int(11) NOT NULL,
  `centerName` varchar(255) NOT NULL,
  `centerCode` int(11) NOT NULL,
  `createdAt` timestamp NOT NULL DEFAULT current_timestamp(),
  `center_email` varchar(255) DEFAULT NULL,
  `center_password` varchar(255) DEFAULT NULL,
  `center_contact` varchar(55) DEFAULT NULL,
  `center_username` varchar(100) NOT NULL,
  `isActive` int(11) DEFAULT NULL,
  `alt_contact` varchar(55) DEFAULT NULL,
  `alt_center_email` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tbl_center`
--

INSERT INTO `tbl_center` (`id`, `centerName`, `centerCode`, `createdAt`, `center_email`, `center_password`, `center_contact`, `center_username`, `isActive`, `alt_contact`, `alt_center_email`) VALUES
(6, 'Microlab Hospital', 1001, '2023-12-30 10:41:40', 'microlabemail@email.com', '$2y$10$XrOn3I1gwHKIeWROnrcX2ul9lRJwh06LomIEfCQWwTWFPgHsMpWMG', '9876543210', 'microlab', NULL, NULL, NULL),
(8, 'St Johns', 1002, '2023-12-30 11:11:44', 'stjohns@email.com', '$2y$10$2PQq8b1KTrMRsZW5UJehXuOjKJ.VJCrejkNqktFjPENE5Qr0QDlV.', '9876543210', 'admin', NULL, NULL, NULL),
(9, 'Manipal Hospital Bangalore', 1003, '2023-12-30 11:13:50', 'gemail@email.com', '$2y$10$g8i8KrSSZa6BDIg95Ke7luWeIuMHnMbANssFSjwELDGS5B2ZWMr0O', '9876543210', 'manipal', NULL, NULL, NULL),
(10, 'Diacon', 1004, '2024-01-01 04:28:07', 'diacon@email.com', '$2y$10$A/a/YxV63FpT5XYmtTW1fOqznopCUV0nvoeNpcZNzJVAbhJv3sOTq', '9876543210', 'diacon', NULL, '9856876212', 'diacon1@email.com');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_patient`
--

CREATE TABLE `tbl_patient` (
  `id` int(11) NOT NULL,
  `patient_name` varchar(255) DEFAULT NULL,
  `age` int(11) DEFAULT NULL,
  `sex` varchar(55) DEFAULT NULL,
  `physician` varchar(255) DEFAULT NULL,
  `address` text DEFAULT NULL,
  `contact` varchar(20) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `hospital_id` varchar(255) DEFAULT NULL,
  `createdAt` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_patients`
--

CREATE TABLE `tbl_patients` (
  `id` int(11) NOT NULL,
  `patient_id` int(11) DEFAULT NULL,
  `patient_name` varchar(255) DEFAULT NULL,
  `age` int(11) DEFAULT NULL,
  `sex` varchar(10) DEFAULT NULL,
  `physician` varchar(255) DEFAULT NULL,
  `address` text DEFAULT NULL,
  `mobile` varchar(20) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `hayfever` varchar(3) DEFAULT NULL,
  `asthma` varchar(3) DEFAULT NULL,
  `breath` varchar(3) DEFAULT NULL,
  `hives` varchar(3) DEFAULT NULL,
  `sinus` varchar(3) DEFAULT NULL,
  `eczema` varchar(3) DEFAULT NULL,
  `foodallergy` varchar(3) DEFAULT NULL,
  `arthritisdiseases` varchar(3) DEFAULT NULL,
  `immune` varchar(3) DEFAULT NULL,
  `drugallergy` varchar(3) DEFAULT NULL,
  `beesting` varchar(3) DEFAULT NULL,
  `fevergrade` varchar(255) DEFAULT NULL,
  `itchingsore` varchar(3) DEFAULT NULL,
  `cycleoffever` varchar(255) DEFAULT NULL,
  `exacerbations` varchar(255) DEFAULT NULL,
  `admhospital` varchar(3) DEFAULT NULL,
  `admhospital_yes` varchar(255) DEFAULT NULL,
  `gp` varchar(3) DEFAULT NULL,
  `gp_yes` varchar(255) DEFAULT NULL,
  `ae` varchar(3) DEFAULT NULL,
  `ae_yes` varchar(255) DEFAULT NULL,
  `itu` varchar(3) DEFAULT NULL,
  `itu_yes` varchar(255) DEFAULT NULL,
  `coughwhz` varchar(3) DEFAULT NULL,
  `coughwhz_yes` varchar(255) DEFAULT NULL,
  `intervals` varchar(3) DEFAULT NULL,
  `intervals_yes` varchar(255) DEFAULT NULL,
  `cough_night` varchar(3) DEFAULT NULL,
  `cough_night_yes` varchar(255) DEFAULT NULL,
  `morningCough` varchar(3) DEFAULT NULL,
  `morningCough_yes` varchar(255) DEFAULT NULL,
  `exercise_symptom` varchar(3) DEFAULT NULL,
  `exercise_yes` varchar(255) DEFAULT NULL,
  `smoke` varchar(3) DEFAULT NULL,
  `smoke_yes` varchar(255) DEFAULT NULL,
  `pets` varchar(3) DEFAULT NULL,
  `pets_yes` varchar(255) DEFAULT NULL,
  `triggers` varchar(255) DEFAULT NULL,
  `triggers_other` varchar(255) DEFAULT NULL,
  `Sneezing` varchar(3) DEFAULT NULL,
  `nasal` varchar(3) DEFAULT NULL,
  `runningnose` varchar(3) DEFAULT NULL,
  `itching` varchar(3) DEFAULT NULL,
  `itchingeyes` varchar(3) DEFAULT NULL,
  `coughing1` varchar(3) DEFAULT NULL,
  `Wheezing` varchar(3) DEFAULT NULL,
  `coughingorwheezing` varchar(3) DEFAULT NULL,
  `withexcercise` varchar(3) DEFAULT NULL,
  `headaches` varchar(3) DEFAULT NULL,
  `nasaldrop` varchar(3) DEFAULT NULL,
  `heaves` varchar(3) DEFAULT NULL,
  `hd` varchar(3) DEFAULT NULL,
  `eczema_2` varchar(3) DEFAULT NULL,
  `ulcer` varchar(3) DEFAULT NULL,
  `ulcerd` varchar(3) DEFAULT NULL,
  `papaulo` varchar(3) DEFAULT NULL,
  `papaulod` varchar(3) DEFAULT NULL,
  `norashes` varchar(3) DEFAULT NULL,
  `norashesd` varchar(3) DEFAULT NULL,
  `hypertension` varchar(3) DEFAULT NULL,
  `diabetes` varchar(3) DEFAULT NULL,
  `epilepsy` varchar(3) DEFAULT NULL,
  `ihd` varchar(3) DEFAULT NULL,
  `dak` varchar(3) DEFAULT NULL,
  `pro` varchar(3) DEFAULT NULL,
  `def` varchar(3) DEFAULT NULL,
  `occupation` varchar(255) DEFAULT NULL,
  `pce` varchar(255) DEFAULT NULL,
  `location` varchar(255) DEFAULT NULL,
  `fhistory` varchar(255) DEFAULT NULL,
  `ocavity` varchar(255) DEFAULT NULL,
  `skin` varchar(255) DEFAULT NULL,
  `ent` varchar(255) DEFAULT NULL,
  `eye` varchar(255) DEFAULT NULL,
  `rs` varchar(255) DEFAULT NULL,
  `cvs` varchar(255) DEFAULT NULL,
  `cns` varchar(255) DEFAULT NULL,
  `abdomen` varchar(255) DEFAULT NULL,
  `anyother` varchar(255) DEFAULT NULL,
  `sctest` varchar(255) DEFAULT NULL,
  `apanel` varchar(255) DEFAULT NULL,
  `pdfreport` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tbl_admin`
--
ALTER TABLE `tbl_admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_center`
--
ALTER TABLE `tbl_center`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_patient`
--
ALTER TABLE `tbl_patient`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_patients`
--
ALTER TABLE `tbl_patients`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tbl_admin`
--
ALTER TABLE `tbl_admin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `tbl_center`
--
ALTER TABLE `tbl_center`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `tbl_patient`
--
ALTER TABLE `tbl_patient`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tbl_patients`
--
ALTER TABLE `tbl_patients`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
