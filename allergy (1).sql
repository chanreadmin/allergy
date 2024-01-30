-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 30, 2024 at 01:30 PM
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
-- Table structure for table `patients`
--

CREATE TABLE `patients` (
  `id` int(11) NOT NULL,
  `patient_name` varchar(255) NOT NULL,
  `patient_id` varchar(50) DEFAULT NULL,
  `age` int(11) DEFAULT NULL,
  `sex` varchar(25) DEFAULT NULL,
  `physician` varchar(255) DEFAULT NULL,
  `address` varchar(255) DEFAULT NULL,
  `mobile` varchar(15) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `updatedBy` varchar(255) DEFAULT NULL,
  `centerName` varchar(255) DEFAULT NULL,
  `centerCode` varchar(10) DEFAULT NULL,
  `createdAt` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `patients`
--

INSERT INTO `patients` (`id`, `patient_name`, `patient_id`, `age`, `sex`, `physician`, `address`, `mobile`, `email`, `updatedBy`, `centerName`, `centerCode`, `createdAt`) VALUES
(1, 'Shamim', '12345', 24, 'Male', 'none', 'rajajinagar', '9856876212', 'webdesigner@chanrejournals.com', 'Shamim', 'CRICR', '1001', '2024-01-04 09:58:59'),
(4, 'Rohit Sharma', '12222', 25, 'Male', 'Dr Smitha', 'Rajajinagar', '9876543210', 'rohit@gmail.com', 'Shamim', 'CRICR', '1001', '2024-01-13 09:19:32'),
(5, 'Rakesh', '13234', 26, 'Male', 'Dr Smitha', 'Basaveshwara', '9876543210', 'rakesh@gmail.com', 'admin', 'cricr', '1001', '2024-01-13 09:24:26'),
(6, 'Nadir', '13235', 28, 'Male', 'Dr Smitha', 'Rajajinagar', '9876543210', 'webdesigner@chanrejournals.com', 'admin', 'cricr', '1001', '2024-01-13 11:12:55'),
(7, 'Rishab Sharma', '61001', 23, 'Male', 'Dr Smitha Singh', 'Rajajinagar', '9876543210', 'rishabh@gmail.com', 'Shamim', 'CRICR', '1001', '2024-01-27 10:59:59'),
(8, 'Rishab S', '71001', 23, 'Male', 'Dr Smitha Singh', 'Malleshwaram, Bangalore', '9876543212', 'rishabhs@gmail.com', 'Shamim', 'CRICR', '1001', '2024-01-27 11:09:20'),
(9, 'Rishab Sh', '81001', 23, 'Male', 'Dr Smitha Singh', 'RT Nagar. Bangalore', '9876543210', 'rishabhsh@gmail.com', 'shamim', 'CRICR', '1001', '2024-01-27 11:11:08'),
(10, 'Paras k', '100110', 23, 'Male', 'Dr Smitha Singh', 'Rajajajinagar, Bengaluru', '9876543210', 'paras@gmail.com', 'shamim', 'CRICR', '1001', '2024-01-27 11:37:47');

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
  `centerName` varchar(255) DEFAULT NULL,
  `mobile` int(20) DEFAULT NULL,
  `isActive` int(11) DEFAULT NULL,
  `status` int(11) DEFAULT NULL,
  `occupation` varchar(100) DEFAULT NULL,
  `createdAt` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tbl_admin`
--

INSERT INTO `tbl_admin` (`id`, `adminName`, `centerCode`, `adminUsername`, `adminPassword`, `adminImage`, `admin_email`, `centerName`, `mobile`, `isActive`, `status`, `occupation`, `createdAt`) VALUES
(1, 'Shamim Sheikh', 1001, 'shamim', '$2y$10$muxD0T56IzzY5/HQf8jEp.iu9OP8h6TqdmLeMEv6mOPeRUbORjBr2', NULL, 'webdesigner@chanrejournals.com', 'CRICR', NULL, 1, NULL, NULL, '2023-12-26 11:02:00'),
(2, 'Test User', 1001, 'testuser', '$2y$10$muxD0T56IzzY5/HQf8jEp.iu9OP8h6TqdmLeMEv6mOPeRUbORjBr2', NULL, 'webdesigner@chanrejournals.com', '', NULL, 1, NULL, NULL, '2023-12-26 11:04:50'),
(3, 'admin', 1001, 'admin', '$2y$10$muxD0T56IzzY5/HQf8jEp.iu9OP8h6TqdmLeMEv6mOPeRUbORjBr2', NULL, 'webdesigner@chanrejournals.com', 'cricr', NULL, 1, NULL, NULL, '2023-12-26 11:21:26'),
(4, 'admin', 1001, 'testuser2', '$2y$10$DRVdzYdLGO0Bw8CD/zTpju6YDxtUr.SC/MxRjx/IVkeVauzpw9acW', NULL, 'webdesigner@chanrejournals.com', '', NULL, 1, NULL, NULL, '2023-12-26 11:22:05');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_allergic_rhinitis`
--

CREATE TABLE `tbl_allergic_rhinitis` (
  `id` int(11) NOT NULL,
  `sneezing` int(11) DEFAULT NULL,
  `rnose` int(11) DEFAULT NULL,
  `congestion` int(11) DEFAULT NULL,
  `itchynose` int(11) DEFAULT NULL,
  `pns` int(11) DEFAULT NULL,
  `tns` int(11) DEFAULT NULL,
  `eyesymptoms` int(11) DEFAULT NULL,
  `throatsymptoms` int(11) DEFAULT NULL,
  `chronic` int(11) DEFAULT NULL,
  `earsymptoms` int(11) DEFAULT NULL,
  `headache` int(11) DEFAULT NULL,
  `mental` int(11) DEFAULT NULL,
  `tnns` int(11) DEFAULT NULL,
  `quality` text DEFAULT NULL,
  `nnsymptoms` text DEFAULT NULL,
  `medicationns` text DEFAULT NULL,
  `antihistamine` text DEFAULT NULL,
  `othermedication` text DEFAULT NULL,
  `weight` int(11) DEFAULT NULL,
  `pulse` int(11) DEFAULT NULL,
  `bp` int(11) DEFAULT NULL,
  `rr` int(11) DEFAULT NULL,
  `temp` int(11) DEFAULT NULL,
  `spo` int(11) DEFAULT NULL,
  `ent` text DEFAULT NULL,
  `cns` text DEFAULT NULL,
  `cvs` text DEFAULT NULL,
  `rs` text DEFAULT NULL,
  `pa` text DEFAULT NULL,
  `drugadverse` text DEFAULT NULL,
  `drugcomp` text DEFAULT NULL,
  `advise` text DEFAULT NULL,
  `centerCode` varchar(55) NOT NULL,
  `centerName` varchar(255) NOT NULL,
  `patient_id` varchar(55) NOT NULL,
  `updatedBy` text NOT NULL,
  `createdAt` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tbl_allergic_rhinitis`
--

INSERT INTO `tbl_allergic_rhinitis` (`id`, `sneezing`, `rnose`, `congestion`, `itchynose`, `pns`, `tns`, `eyesymptoms`, `throatsymptoms`, `chronic`, `earsymptoms`, `headache`, `mental`, `tnns`, `quality`, `nnsymptoms`, `medicationns`, `antihistamine`, `othermedication`, `weight`, `pulse`, `bp`, `rr`, `temp`, `spo`, `ent`, `cns`, `cvs`, `rs`, `pa`, `drugadverse`, `drugcomp`, `advise`, `centerCode`, `centerName`, `patient_id`, `updatedBy`, `createdAt`) VALUES
(4, 4, 4, 4, 4, 4, 20, 4, 4, 4, 4, 4, 4, 24, '4', 'test', 'test', 'test', 'test', 12, 12, 12, 12, 12, 12, 'test', 'test', 'test', 'test', 'test', 'test', 'test', 'test', '1001', 'CRICR', '12345', 'Shamim', '2024-01-13 06:23:07'),
(5, 3, 4, 5, 1, 6, 19, 4, 2, 5, 4, 5, 5, 25, '5', 'test', 'test', 'test', 'test', 12, 12, 12, 12, 12, 12, 'test', 'test', 'test', 'test', 'test', 'test', 'test', 'test', '1001', 'CRICR', '12345', 'Shamim', '2024-01-13 08:50:52'),
(6, 1, 4, 4, 4, 4, 17, 3, 5, 3, 2, 6, 2, 21, '3', 'test', 'test', 'test', 'hello test ', 12, 12, 12, 12, 12, 12, 'test', 'test', 'test test', 'test', 'test', 'test', 'test', 'test', '1001', 'cricr', '13234', 'admin', '2024-01-13 09:33:33'),
(7, 5, 5, 5, 5, 5, 25, 5, 3, 4, 5, 3, 6, 26, '4', 'test', 'test', 'test', 'test', 12, 12, 12, 12, 12, 12, 'test', 'test', 'test', 'test', 'test', 'test', 'test', 'test', '1001', 'cricr', '13234', 'admin', '2024-01-13 11:11:07'),
(8, 4, 4, 3, 5, 3, 19, 3, 5, 2, 4, 2, 4, 20, '4', 'test', 'test', 'test', 'hello test ', 12, 12, 12, 12, 12, 12, 'test', 'test', 'test', 'test', 'test', 'test', 'test', 'test', '1001', 'cricr', '13235', 'admin', '2024-01-13 11:13:51'),
(9, 3, 3, 4, 4, 4, 18, 4, 4, 4, 4, 4, 4, 24, '4', 'test', 'test', 'test', 'test', 12, 12, 12, 12, 12, 12, 'test', 'test', 'test test', 'test', 'test', 'test', 'test', 'test', '1001', 'CRICR', '12222', 'Shamim', '2024-01-18 06:33:17'),
(10, 3, 3, 3, 4, 4, 17, 4, 5, 5, 4, 4, 4, 26, '4', 'test', 'test', 'test', 'test', 12, 12, 12, 12, 12, 12, 'test', 'test', 'test', 'test', 'test', 'test', 'test', 'test', '1001', 'CRICR', '12222', 'Shamim', '2024-01-24 11:57:07'),
(12, 1, 2, 2, 3, 3, 11, 2, 3, 4, 4, 3, 4, 20, '4', 'test', 'test', 'test', 'test', 2, 2, 2, 2, 2, 2, 'test', 'test', 'test', 'test', 'test', 'test', 'test', 'test', '1001', 'CRICR', '12222', 'Shamim Sheikh', '2024-01-27 10:10:53'),
(13, 4, 4, 5, 5, 5, 23, 5, 5, 3, 5, 5, 5, 28, '5', 'Test', 'test', 'test', 'test', 3, 3, 3, 3, 3, 3, '3', 'test', 'test', 'test', 'teat', 'test', 'test', 'test', '1001', 'CRICR', '100110', 'Shamim Sheikh', '2024-01-30 12:04:26'),
(14, 4, 4, 4, 4, 4, 20, 4, 4, 4, 4, 4, 4, 24, '4', 'Test', 'test', 'test', 'test', 3, 3, 3, 3, 3, 3, '3', 'test', 'test', 'test', 'teat', 'test', 'test', 'test', '1001', 'CRICR', '61001', 'Shamim Sheikh', '2024-01-30 12:06:08');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_atopic`
--

CREATE TABLE `tbl_atopic` (
  `id` int(11) NOT NULL,
  `symptoms` text DEFAULT NULL,
  `affected_area` text DEFAULT NULL,
  `erythema` varchar(55) DEFAULT NULL,
  `oedema` varchar(55) DEFAULT NULL,
  `swl` varchar(55) DEFAULT NULL,
  `oozing` varchar(55) DEFAULT NULL,
  `crusting` varchar(55) DEFAULT NULL,
  `excoration` varchar(55) DEFAULT NULL,
  `lichenification` varchar(55) DEFAULT NULL,
  `dryness` varchar(25) DEFAULT NULL,
  `redness` varchar(25) DEFAULT NULL,
  `swelling` varchar(25) DEFAULT NULL,
  `ooz` varchar(22) DEFAULT NULL,
  `scratching` varchar(25) DEFAULT NULL,
  `thickend` varchar(25) DEFAULT NULL,
  `itching` varchar(25) DEFAULT NULL,
  `sleep` varchar(25) DEFAULT NULL,
  `pmedications` text DEFAULT NULL,
  `lapplication` text DEFAULT NULL,
  `othermedications` text DEFAULT NULL,
  `centerCode` text DEFAULT NULL,
  `centerName` text DEFAULT NULL,
  `patient_id` text DEFAULT NULL,
  `updatedBy` text DEFAULT NULL,
  `createdAt` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tbl_atopic`
--

INSERT INTO `tbl_atopic` (`id`, `symptoms`, `affected_area`, `erythema`, `oedema`, `swl`, `oozing`, `crusting`, `excoration`, `lichenification`, `dryness`, `redness`, `swelling`, `ooz`, `scratching`, `thickend`, `itching`, `sleep`, `pmedications`, `lapplication`, `othermedications`, `centerCode`, `centerName`, `patient_id`, `updatedBy`, `createdAt`) VALUES
(1, 'test', 'test', 'Yes', 'Yes', 'No', 'No', 'No', 'Yes', 'No', 'No', 'No', 'Slight', 'Moderate', 'Dry', 'Dry', '6', '9', ' this is just a test for present medications', 'this is just a test gds    ', 'this is just a test , please read it carefully', '1001', 'CRICR', '12222', 'Shamim', '2024-01-18 05:52:14'),
(2, 'test', 'test', 'Yes', 'Yes', 'Yes', 'Yes', 'Yes', 'Yes', 'Yes', 'Dry', 'Slight', 'Moderate', 'Dry', 'Dry', 'Moderate', '4', '7', 'This is just a test', 'This is just a test', 'This is just a test', '1001', 'CRICR', '12345', 'Shamim', '2024-01-18 05:58:28');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_bronchitis`
--

CREATE TABLE `tbl_bronchitis` (
  `id` int(11) NOT NULL,
  `symptoms` text DEFAULT NULL,
  `types` varchar(255) DEFAULT NULL,
  `daytime` varchar(255) DEFAULT NULL,
  `limitation` varchar(55) DEFAULT NULL,
  `nocturnal` varchar(55) DEFAULT NULL,
  `rescue` varchar(55) DEFAULT NULL,
  `lf` varchar(55) DEFAULT NULL,
  `ex` varchar(55) DEFAULT NULL,
  `controlled` varchar(55) DEFAULT NULL,
  `partially` varchar(55) DEFAULT NULL,
  `uncontrolled` varchar(55) DEFAULT NULL,
  `pftgrading` varchar(55) DEFAULT NULL,
  `habits` varchar(55) DEFAULT NULL,
  `centerCode` varchar(55) DEFAULT NULL,
  `centerName` varchar(55) DEFAULT NULL,
  `patient_id` varchar(55) DEFAULT NULL,
  `updatedBy` varchar(55) DEFAULT NULL,
  `createdAt` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tbl_bronchitis`
--

INSERT INTO `tbl_bronchitis` (`id`, `symptoms`, `types`, `daytime`, `limitation`, `nocturnal`, `rescue`, `lf`, `ex`, `controlled`, `partially`, `uncontrolled`, `pftgrading`, `habits`, `centerCode`, `centerName`, `patient_id`, `updatedBy`, `createdAt`) VALUES
(1, 'test', 'Cough <3 weeks', '1', '1', '0', '0', '0', '1', '', 'Partially Controlled', '', 'Moderate', 'Non Smoker', '1001', 'CRICR', '12222', 'Shamim', '2024-01-24 05:28:45'),
(2, 'test', 'Cough <3 weeks', '1', '1', '1', '1', '1', '1', '', '', 'Uncontrolled', 'Very Severe', 'Non Smoker', '1001', 'CRICR', '12222', 'Shamim', '2024-01-24 08:42:37'),
(3, 'none', 'Cough <3 weeks', '0', '0', '0', '0', '0', '0', 'Controlled', '', '', 'Moderate', 'Non Smoker', '1001', 'CRICR', '12222', 'Shamim Sheikh', '2024-01-27 10:46:56');

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
(9, 'Manipal Hospital Bangalore', 1003, '2023-12-30 11:13:50', 'gemail@email.com', '$2y$10$g8i8KrSSZa6BDIg95Ke7luWeIuMHnMbANssFSjwELDGS5B2ZWMr0O', '9876543210', 'manipal', NULL, NULL, NULL),
(10, 'Diacon', 1004, '2024-01-01 04:28:07', 'diacon@email.com', '$2y$10$A/a/YxV63FpT5XYmtTW1fOqznopCUV0nvoeNpcZNzJVAbhJv3sOTq', '9876543210', 'diacon', NULL, '9856876212', 'diacon1@email.com');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_conjunctivities`
--

CREATE TABLE `tbl_conjunctivities` (
  `id` int(11) NOT NULL,
  `itching` varchar(30) DEFAULT NULL,
  `tearing` varchar(30) DEFAULT NULL,
  `redness` varchar(30) DEFAULT NULL,
  `discomfort` varchar(30) DEFAULT NULL,
  `discharge` varchar(30) DEFAULT NULL,
  `photophobia` varchar(30) DEFAULT NULL,
  `seasonal` varchar(30) DEFAULT NULL,
  `perinneal` varchar(30) DEFAULT NULL,
  `intermittent` varchar(30) DEFAULT NULL,
  `persistent` varchar(30) DEFAULT NULL,
  `bothersome` varchar(30) DEFAULT NULL,
  `vision` varchar(30) DEFAULT NULL,
  `interference` varchar(30) DEFAULT NULL,
  `activities` varchar(30) DEFAULT NULL,
  `centerCode` varchar(100) DEFAULT NULL,
  `centerName` varchar(100) DEFAULT NULL,
  `patient_id` varchar(100) DEFAULT NULL,
  `updatedBy` varchar(100) DEFAULT NULL,
  `createdAt` timestamp NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tbl_conjunctivities`
--

INSERT INTO `tbl_conjunctivities` (`id`, `itching`, `tearing`, `redness`, `discomfort`, `discharge`, `photophobia`, `seasonal`, `perinneal`, `intermittent`, `persistent`, `bothersome`, `vision`, `interference`, `activities`, `centerCode`, `centerName`, `patient_id`, `updatedBy`, `createdAt`) VALUES
(1, 'Itching', 'Tearing', 'Redness', 'Discomfort', '', '', '', 'perinneal', 'intermittent', '', 'Moderate', 'Moderate', 'Moderate', 'Moderate', '1001', 'CRICR', '12222', 'Shamim', '2024-01-22 10:17:11'),
(2, 'Itching', '', '', '', '', '', 'seasonal', '', '', '', 'Mild', 'Mild', 'Mild', 'Mild', '1001', 'CRICR', '12222', 'Shamim Sheikh', '2024-01-27 10:26:49');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_gpe`
--

CREATE TABLE `tbl_gpe` (
  `id` int(11) NOT NULL,
  `weights` int(11) DEFAULT NULL,
  `pulse` int(11) DEFAULT NULL,
  `bp` int(11) DEFAULT NULL,
  `rr` int(11) DEFAULT NULL,
  `temp` int(11) DEFAULT NULL,
  `spo` int(11) DEFAULT NULL,
  `ent` text DEFAULT NULL,
  `cns` text DEFAULT NULL,
  `cvs` text DEFAULT NULL,
  `rs` text DEFAULT NULL,
  `pa` text DEFAULT NULL,
  `drugadverse` text DEFAULT NULL,
  `drugcomp` text DEFAULT NULL,
  `advise` text DEFAULT NULL,
  `eyemeds` text NOT NULL,
  `centerCode` varchar(55) NOT NULL,
  `centerName` varchar(255) NOT NULL,
  `patient_id` varchar(55) NOT NULL,
  `updatedBy` text NOT NULL,
  `createdAt` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tbl_gpe`
--

INSERT INTO `tbl_gpe` (`id`, `weights`, `pulse`, `bp`, `rr`, `temp`, `spo`, `ent`, `cns`, `cvs`, `rs`, `pa`, `drugadverse`, `drugcomp`, `advise`, `eyemeds`, `centerCode`, `centerName`, `patient_id`, `updatedBy`, `createdAt`) VALUES
(2, 2, 2, 2, 2, 2, 2, 'test', 'test', 'test', 'test', 'test', 'test', 'test', 'test', '', '1001', 'CRICR', '12222', 'Shamim', '2024-01-25 08:47:24'),
(3, 2, 2, 2, 2, 2, 2, 'test', 'test', 'test', 'test', 'test', 'test', 'test', 'test', '', '1001', 'CRICR', '12222', 'Shamim', '2024-01-25 08:48:06'),
(4, 2, 2, 2, 2, 2, 2, 'test', 'test', 'test', 'test', 'test', 'test', 'test', 'test', 'test', '1001', 'CRICR', '12222', 'Shamim Sheikh', '2024-01-27 10:47:39');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_history`
--

CREATE TABLE `tbl_history` (
  `id` int(11) NOT NULL,
  `physician` text DEFAULT NULL,
  `address` text DEFAULT NULL,
  `mobile` varchar(20) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `hayfever` varchar(30) DEFAULT NULL,
  `asthma` varchar(30) DEFAULT NULL,
  `breath` varchar(30) DEFAULT NULL,
  `hives` varchar(30) DEFAULT NULL,
  `sinus` varchar(30) DEFAULT NULL,
  `eczema_oak` varchar(30) DEFAULT NULL,
  `foodallergy` varchar(30) DEFAULT NULL,
  `arthritisdiseases` varchar(30) DEFAULT NULL,
  `immune` varchar(30) DEFAULT NULL,
  `drugallergy` varchar(30) DEFAULT NULL,
  `beesting` varchar(30) DEFAULT NULL,
  `fevergrade` text DEFAULT NULL,
  `itchingsore` varchar(30) DEFAULT NULL,
  `cycleoffever` text DEFAULT NULL,
  `exacerbations` text DEFAULT NULL,
  `admhospital` varchar(30) DEFAULT NULL,
  `admhospital_yes` text DEFAULT NULL,
  `gp` varchar(30) DEFAULT NULL,
  `gp_yes` text DEFAULT NULL,
  `ae` varchar(30) DEFAULT NULL,
  `ae_yes` text DEFAULT NULL,
  `itu` varchar(30) DEFAULT NULL,
  `itu_yes` text DEFAULT NULL,
  `coughwhz` varchar(30) DEFAULT NULL,
  `coughwhz_yes` text DEFAULT NULL,
  `intervals` varchar(30) DEFAULT NULL,
  `intervals_yes` text DEFAULT NULL,
  `cough_night` varchar(30) DEFAULT NULL,
  `cough_night_yes` text DEFAULT NULL,
  `morningCough` varchar(30) DEFAULT NULL,
  `morningCough_yes` text DEFAULT NULL,
  `exercise_symptom` varchar(30) DEFAULT NULL,
  `exercise_yes` text DEFAULT NULL,
  `smoke` varchar(30) DEFAULT NULL,
  `smoke_yes` text DEFAULT NULL,
  `pets` varchar(30) DEFAULT NULL,
  `pets_yes` text DEFAULT NULL,
  `triggers` text DEFAULT NULL,
  `triggers_other` text DEFAULT NULL,
  `Sneezing` varchar(25) DEFAULT NULL,
  `nasal` varchar(30) DEFAULT NULL,
  `runningnose` varchar(30) DEFAULT NULL,
  `itching` varchar(30) DEFAULT NULL,
  `itchingeyes` varchar(30) DEFAULT NULL,
  `coughing1` varchar(30) DEFAULT NULL,
  `Wheezing` varchar(30) DEFAULT NULL,
  `coughingorwheezing` varchar(30) DEFAULT NULL,
  `withexcercise` varchar(30) DEFAULT NULL,
  `headaches` varchar(30) DEFAULT NULL,
  `nasaldrop` varchar(30) DEFAULT NULL,
  `heaves` varchar(30) DEFAULT NULL,
  `hd` text DEFAULT NULL,
  `eczema` varchar(30) DEFAULT NULL,
  `eczemad` text DEFAULT NULL,
  `ulcer` varchar(30) DEFAULT NULL,
  `ulcerd` text DEFAULT NULL,
  `papaulo` varchar(30) DEFAULT NULL,
  `papaulod` text DEFAULT NULL,
  `norashes` varchar(30) DEFAULT NULL,
  `norashesd` text DEFAULT NULL,
  `hypertension` varchar(30) DEFAULT NULL,
  `diabetes` varchar(30) DEFAULT NULL,
  `epilepsy` varchar(30) DEFAULT NULL,
  `ihd` varchar(30) DEFAULT NULL,
  `dak` varchar(30) DEFAULT NULL,
  `pro` varchar(30) DEFAULT NULL,
  `def` varchar(30) DEFAULT NULL,
  `occupation` text DEFAULT NULL,
  `pce` text DEFAULT NULL,
  `location` text DEFAULT NULL,
  `fhistory` text DEFAULT NULL,
  `ocavity` text DEFAULT NULL,
  `skin` text DEFAULT NULL,
  `ent` text DEFAULT NULL,
  `eye` text DEFAULT NULL,
  `rs` text DEFAULT NULL,
  `cvs` text DEFAULT NULL,
  `cns` text DEFAULT NULL,
  `abdomen` text DEFAULT NULL,
  `anyother` text DEFAULT NULL,
  `pdfreport` text DEFAULT NULL,
  `centerCode` text DEFAULT NULL,
  `centerName` text DEFAULT NULL,
  `patient_id` varchar(55) NOT NULL,
  `updatedBy` text DEFAULT NULL,
  `createdAt` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tbl_history`
--

INSERT INTO `tbl_history` (`id`, `physician`, `address`, `mobile`, `email`, `hayfever`, `asthma`, `breath`, `hives`, `sinus`, `eczema_oak`, `foodallergy`, `arthritisdiseases`, `immune`, `drugallergy`, `beesting`, `fevergrade`, `itchingsore`, `cycleoffever`, `exacerbations`, `admhospital`, `admhospital_yes`, `gp`, `gp_yes`, `ae`, `ae_yes`, `itu`, `itu_yes`, `coughwhz`, `coughwhz_yes`, `intervals`, `intervals_yes`, `cough_night`, `cough_night_yes`, `morningCough`, `morningCough_yes`, `exercise_symptom`, `exercise_yes`, `smoke`, `smoke_yes`, `pets`, `pets_yes`, `triggers`, `triggers_other`, `Sneezing`, `nasal`, `runningnose`, `itching`, `itchingeyes`, `coughing1`, `Wheezing`, `coughingorwheezing`, `withexcercise`, `headaches`, `nasaldrop`, `heaves`, `hd`, `eczema`, `eczemad`, `ulcer`, `ulcerd`, `papaulo`, `papaulod`, `norashes`, `norashesd`, `hypertension`, `diabetes`, `epilepsy`, `ihd`, `dak`, `pro`, `def`, `occupation`, `pce`, `location`, `fhistory`, `ocavity`, `skin`, `ent`, `eye`, `rs`, `cvs`, `cns`, `abdomen`, `anyother`, `pdfreport`, `centerCode`, `centerName`, `patient_id`, `updatedBy`, `createdAt`) VALUES
(1, 'Dr Smitha', 'Rajajinagar, Bangalore', '9856876212', 'webdesigner@chanrejournals.com', 'Yes', 'Yes', 'Yes', 'Yes', 'Yes', 'Yes', 'Yes', 'Yes', 'Yes', 'Yes', 'Yes', 'Mild', 'Yes', 'test', 'q', 'Yes', 'This is just a test', 'Yes', 'This is just a test', 'Yes', 'This is just a test', 'Yes', 'This is just a test', 'Yes', 'This is just a test', 'Yes', 'This is just a test', 'Yes', 'This is just a test', 'Yes', 'This is just a test', 'Yes', 'This is just a test', 'Yes', 'This is just a test', 'Yes', 'This is just a test', 'URTIs', '', 'Mil', 'Mil', 'Mil', 'Mil', 'Mil', 'Mil', 'Mil', 'Mil', 'Mil', 'Mil', 'Mil', 'No', 'Face', 'No', 'Left Hand', 'No', 'Left Legs', 'No', 'Face', 'No', 'Right Legs', 'No', 'Yes', 'No', 'No', 'w', 'e', 'e', 'e', 'e', 'Urban', 'e', 'e', 'e', 'e', 'e', 'e', 'e', 'e', 'e', 'e', '305e0035d68bde381b8418ac6340485e.pdf', '1001', '', '', 'Shamim', '2024-01-04 08:17:11'),
(10, NULL, NULL, NULL, NULL, 'Yes', 'Yes', 'Yes', 'Yes', 'Yes', 'Yes', 'Yes', 'Yes', 'Yes', 'Yes', 'Yes', 'Mild', 'Yes', 'test', 'test', 'Yes', 'test', 'Yes', 'test', 'Yes', 'test', 'Yes', 'test', 'Yes', 'test', 'Yes', 'test', 'Yes', 'test', 'Yes', 'test', 'Yes', 'test', 'Yes', 'test', 'Yes', 'test', 'Pollen', '', 'Mild', 'Mild', 'Mild', 'Mild', 'Mild', 'Mild', 'Mild', 'Mild', 'Mild', 'Mild', 'Mild', 'Yes', 'Extremities', 'No', 'Extremities', 'Yes', 'Right Legs', 'Yes', 'Extremities', 'Yes', 'Extremities', 'Yes', 'Yes', 'Yes', 'Yes', 'test', 'test', 'test', 'test', 'test', 'Urban', 'test', 'test', 'test', 'test', 'test', 'test', 'test', 'test', 'test', 'test', '7f108fcdf767ea24a16a94fa5ca17b3e.pdf', '1001', 'CRICR', '12345', 'Shamim', '2024-01-24 12:16:14'),
(11, NULL, NULL, NULL, NULL, 'Yes', 'Yes', 'Yes', 'Yes', 'Yes', 'Yes', 'Yes', 'Yes', 'Yes', 'Yes', 'Yes', 'Mild', '', 'test', 'test', 'Yes', 'test', 'Yes', 'test', 'Yes', 'test', 'Yes', 'test', 'Yes', 'test', 'Yes', 'test', 'Yes', 'test', 'Yes', 'test', 'Yes', 'test', 'Yes', 'test', 'Yes', 'test', 'URTIs', 'test', 'Mild', 'Mild', 'Mod', 'Mod', 'Mod', 'Mild', 'Severe', 'Mod', 'Mild', 'Not So Much', 'Mild', 'Yes', 'Face', 'No', 'Extremities,Right Hand', 'Yes', 'Right Legs', 'Yes', 'Extremities', 'Yes', 'Left Legs', 'No', 'No', 'No', 'No', 'test', 'test', 'test', 'test', 'test', 'Urban', 'test', 'test', 'test', 'test', 'test', 'test', 'test', 'test', 'test', 'test', '280a9ac11b2598d35426d471a898ef1f.pdf', '1001', 'CRICR', '12222', 'Shamim', '2024-01-25 05:44:11');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_investigation`
--

CREATE TABLE `tbl_investigation` (
  `id` int(11) NOT NULL,
  `cbc` text DEFAULT NULL,
  `hb` text DEFAULT NULL,
  `tc` text DEFAULT NULL,
  `dc` text DEFAULT NULL,
  `neutrophils` text DEFAULT NULL,
  `eosinophil` text DEFAULT NULL,
  `lymphocytes` text DEFAULT NULL,
  `monocytes` text DEFAULT NULL,
  `platelets` text DEFAULT NULL,
  `esr` text DEFAULT NULL,
  `serum_creatinine` text DEFAULT NULL,
  `serumig` text DEFAULT NULL,
  `clevel` text DEFAULT NULL,
  `ana` text DEFAULT NULL,
  `urine_routine` text DEFAULT NULL,
  `allergy_panel` text DEFAULT NULL,
  `centerCode` text NOT NULL,
  `centerName` text NOT NULL,
  `patient_id` text NOT NULL,
  `updatedBy` text NOT NULL,
  `createdAt` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tbl_investigation`
--

INSERT INTO `tbl_investigation` (`id`, `cbc`, `hb`, `tc`, `dc`, `neutrophils`, `eosinophil`, `lymphocytes`, `monocytes`, `platelets`, `esr`, `serum_creatinine`, `serumig`, `clevel`, `ana`, `urine_routine`, `allergy_panel`, `centerCode`, `centerName`, `patient_id`, `updatedBy`, `createdAt`) VALUES
(3, '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1001', 'cricr', '13234', 'admin', '2024-01-13 12:01:53'),
(4, '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1001', 'CRICR', '12222', 'Shamim', '2024-01-24 09:50:41'),
(5, '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1001', 'CRICR', '12345', 'Shamim', '2024-01-24 12:19:44');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_medication`
--

CREATE TABLE `tbl_medication` (
  `id` int(11) NOT NULL,
  `drug_name` varchar(255) NOT NULL,
  `dose` varchar(255) NOT NULL,
  `duration` varchar(255) NOT NULL,
  `adverse` text NOT NULL,
  `centerCode` text NOT NULL,
  `centerName` text NOT NULL,
  `patient_id` text NOT NULL,
  `updatedBy` text NOT NULL,
  `createdAt` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tbl_medication`
--

INSERT INTO `tbl_medication` (`id`, `drug_name`, `dose`, `duration`, `adverse`, `centerCode`, `centerName`, `patient_id`, `updatedBy`, `createdAt`) VALUES
(2, 'test3', 'Dose 2', '3', 'This is just a text', '1001', '1001', '12345', 'shamim', '2024-01-08 10:21:54'),
(3, 'test2', 'Dose 2', '3', 'This is just a text', '1001', '1001', '12345', 'shamim', '2024-01-08 10:22:08'),
(4, 'test 1', 'Dose 1', '3', 'This is just a text', '1001', 'cricr', '13235', 'admin', '2024-01-13 11:37:17'),
(5, 'test2', 'Dose 2', '3', 'This is just a text', '1001', 'cricr', '13235', 'admin', '2024-01-13 11:37:26'),
(6, 'test3', 'Dose 3', '3', 'This is just a text', '1001', 'cricr', '13235', 'admin', '2024-01-13 11:37:33'),
(7, 'test 1', 'Dose 1', '3', 'This is just a text', '1001', 'CRICR', '12222', 'shamim', '2024-01-16 10:23:35');

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
-- Table structure for table `tbl_prescription`
--

CREATE TABLE `tbl_prescription` (
  `id` int(11) NOT NULL,
  `drug_name` varchar(255) DEFAULT NULL,
  `dose` varchar(255) DEFAULT NULL,
  `duration` varchar(255) DEFAULT NULL,
  `instruction` text DEFAULT NULL,
  `centerCode` text DEFAULT NULL,
  `centerName` text DEFAULT NULL,
  `patient_id` text DEFAULT NULL,
  `updatedBy` text DEFAULT NULL,
  `visit` int(11) DEFAULT NULL,
  `createdAt` timestamp NOT NULL DEFAULT current_timestamp(),
  `isActive` int(2) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tbl_prescription`
--

INSERT INTO `tbl_prescription` (`id`, `drug_name`, `dose`, `duration`, `instruction`, `centerCode`, `centerName`, `patient_id`, `updatedBy`, `visit`, `createdAt`, `isActive`) VALUES
(23, 'paracetamol', '1-0-1', '3', 'this is just a text', '1001', 'CRICR', '12222', 'Shamim Sheikh', 1, '2024-01-30 10:22:12', 1),
(24, 'Dolo 650', '1-0-1', '3', 'test', '1001', 'CRICR', '12222', 'Shamim Sheikh', 1, '2024-01-30 10:22:12', 1),
(25, 'Paracetamol', '1-0-1', '3', 'test', '1001', 'CRICR', '12222', 'Shamim Sheikh', 1, '2024-01-30 10:22:12', 1),
(26, 'drug1', '1-0-1', '3', '', '1001', 'CRICR', '12222', 'Shamim Sheikh', 1, '2024-01-30 10:24:30', 1),
(27, 'drug2', '1-0-1', '3', '', '1001', 'CRICR', '12222', 'Shamim Sheikh', 1, '2024-01-30 10:24:30', 1),
(28, 'paracetamol', '1-0-1', '3', '', '1001', 'CRICR', '71001', 'Shamim Sheikh', 1, '2024-01-30 12:00:22', 1),
(29, 'Dolo 650', '1-0-1', '3', '', '1001', 'CRICR', '71001', 'Shamim Sheikh', 1, '2024-01-30 12:00:22', 1),
(30, 'Strepsils', '1-0-1', '3', '', '1001', 'CRICR', '71001', 'Shamim Sheikh', 1, '2024-01-30 12:00:22', 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `patients`
--
ALTER TABLE `patients`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_admin`
--
ALTER TABLE `tbl_admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_allergic_rhinitis`
--
ALTER TABLE `tbl_allergic_rhinitis`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_atopic`
--
ALTER TABLE `tbl_atopic`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_bronchitis`
--
ALTER TABLE `tbl_bronchitis`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_center`
--
ALTER TABLE `tbl_center`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_conjunctivities`
--
ALTER TABLE `tbl_conjunctivities`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_gpe`
--
ALTER TABLE `tbl_gpe`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_history`
--
ALTER TABLE `tbl_history`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_investigation`
--
ALTER TABLE `tbl_investigation`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_medication`
--
ALTER TABLE `tbl_medication`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_patient`
--
ALTER TABLE `tbl_patient`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_prescription`
--
ALTER TABLE `tbl_prescription`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `patients`
--
ALTER TABLE `patients`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `tbl_admin`
--
ALTER TABLE `tbl_admin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `tbl_allergic_rhinitis`
--
ALTER TABLE `tbl_allergic_rhinitis`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `tbl_atopic`
--
ALTER TABLE `tbl_atopic`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `tbl_bronchitis`
--
ALTER TABLE `tbl_bronchitis`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `tbl_center`
--
ALTER TABLE `tbl_center`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `tbl_conjunctivities`
--
ALTER TABLE `tbl_conjunctivities`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `tbl_gpe`
--
ALTER TABLE `tbl_gpe`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `tbl_history`
--
ALTER TABLE `tbl_history`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `tbl_investigation`
--
ALTER TABLE `tbl_investigation`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `tbl_medication`
--
ALTER TABLE `tbl_medication`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `tbl_patient`
--
ALTER TABLE `tbl_patient`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tbl_prescription`
--
ALTER TABLE `tbl_prescription`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=31;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
