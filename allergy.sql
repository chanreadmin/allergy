-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 21, 2024 at 10:08 AM
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
(1, 'Shamim', '12345', 24, 'Male', 'none', 'rajajinagar', '9856876212', 'webdesigner@chanrejournals.com', 'Shamim', 'CRICR', '1002', '2024-01-04 09:58:59'),
(4, 'Rohit Sharma', '12222', 25, 'Male', 'Dr Smitha', 'Rajajinagar', '9876543210', 'rohit@gmail.com', 'Shamim', 'CRICR', '1002', '2024-01-13 09:19:32'),
(7, 'Rishab Sharma', '61001', 23, 'Male', 'Dr Smitha Singh', 'Rajajinagar', '9876543210', 'rishabh@gmail.com', 'Shamim', 'CRICR', '1002', '2024-01-27 10:59:59'),
(11, 'Rahul', '10018', 23, 'Male', 'Rishab', 'Rajajinagar, Bangalroe', '9856876212', 'rahul@gmail.com', 'rishab', 'CRICR', '1001', '2024-02-08 06:53:02'),
(12, 'Tridip', '100212', 23, 'Male', '', 'RT Nagar', '9998887771', 'mhsdigitalhub@gmail.com', 'shamim', 'Narayana Hospital', '1002', '2024-02-20 09:36:42');

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
  `ent` text DEFAULT NULL,
  `centerCode` varchar(55) NOT NULL,
  `centerName` varchar(255) NOT NULL,
  `patient_id` varchar(55) NOT NULL,
  `updatedBy` text NOT NULL,
  `createdAt` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tbl_allergic_rhinitis`
--

INSERT INTO `tbl_allergic_rhinitis` (`id`, `sneezing`, `rnose`, `congestion`, `itchynose`, `pns`, `tns`, `eyesymptoms`, `throatsymptoms`, `chronic`, `earsymptoms`, `headache`, `mental`, `tnns`, `quality`, `nnsymptoms`, `medicationns`, `antihistamine`, `othermedication`, `ent`, `centerCode`, `centerName`, `patient_id`, `updatedBy`, `createdAt`) VALUES
(4, 4, 4, 4, 4, 4, 20, 4, 4, 4, 4, 4, 4, 24, '4', 'test', 'test', 'test', 'test', 'test', '1001', 'CRICR', '12345', 'Shamim', '2024-01-13 06:23:07'),
(5, 3, 4, 5, 1, 6, 19, 4, 2, 5, 4, 5, 5, 25, '5', 'test', 'test', 'test', 'test', 'test', '1001', 'CRICR', '12345', 'Shamim', '2024-01-13 08:50:52'),
(6, 1, 4, 4, 4, 4, 17, 3, 5, 3, 2, 6, 2, 21, '3', 'test', 'test', 'test', 'hello test ', 'test', '1001', 'cricr', '13234', 'admin', '2024-01-13 09:33:33'),
(7, 5, 5, 5, 5, 5, 25, 5, 3, 4, 5, 3, 6, 26, '4', 'test', 'test', 'test', 'test', 'test', '1001', 'cricr', '13234', 'admin', '2024-01-13 11:11:07'),
(8, 4, 4, 3, 5, 3, 19, 3, 5, 2, 4, 2, 4, 20, '4', 'test', 'test', 'test', 'hello test ', 'test', '1001', 'cricr', '13235', 'admin', '2024-01-13 11:13:51'),
(9, 3, 3, 4, 4, 4, 18, 4, 4, 4, 4, 4, 4, 24, '4', 'test', 'test', 'test', 'test', 'test', '1001', 'CRICR', '12222', 'Shamim', '2024-01-18 06:33:17'),
(10, 3, 3, 3, 4, 4, 17, 4, 5, 5, 4, 4, 4, 26, '4', 'test', 'test', 'test', 'test', 'test', '1001', 'CRICR', '12222', 'Shamim', '2024-01-24 11:57:07'),
(12, 1, 2, 2, 3, 3, 11, 2, 3, 4, 4, 3, 4, 20, '4', 'test', 'test', 'test', 'test', 'test', '1001', 'CRICR', '12222', 'Shamim Sheikh', '2024-01-27 10:10:53'),
(13, 4, 4, 5, 5, 5, 23, 5, 5, 3, 5, 5, 5, 28, '5', 'Test', 'test', 'test', 'test', '3', '1001', 'CRICR', '100110', 'Shamim Sheikh', '2024-01-30 12:04:26'),
(14, 4, 4, 4, 4, 4, 20, 4, 4, 4, 4, 4, 4, 24, '4', 'Test', 'test', 'test', 'test', '3', '1001', 'CRICR', '61001', 'Shamim Sheikh', '2024-01-30 12:06:08'),
(15, 4, 5, 5, 5, 5, 24, 5, 5, 5, 5, 5, 5, 30, '5', 'Test', 'test', 'test', '', '3', '1001', 'CRICR', '81001', 'Shamim Sheikh', '2024-01-31 08:39:17'),
(16, 4, 3, 3, 3, 3, 16, 3, 3, 3, 3, 3, 3, 18, '2', 'Test', 'test', 'test', 'test', 'test', '1002', 'testhospital', '10018', '', '2024-02-14 06:07:57'),
(17, 2, 2, 3, 3, 3, 13, 4, 4, 3, 3, 3, 3, 20, '3', 'Test', 'test', 'test', 'test', 'test', '1002', 'Narayana Hospital', '12222', '', '2024-02-20 08:32:56');

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
  `skinexam` text DEFAULT NULL,
  `centerCode` text DEFAULT NULL,
  `centerName` text DEFAULT NULL,
  `patient_id` text DEFAULT NULL,
  `updatedBy` text DEFAULT NULL,
  `createdAt` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tbl_atopic`
--

INSERT INTO `tbl_atopic` (`id`, `symptoms`, `affected_area`, `erythema`, `oedema`, `swl`, `oozing`, `crusting`, `excoration`, `lichenification`, `dryness`, `redness`, `swelling`, `ooz`, `scratching`, `thickend`, `itching`, `sleep`, `pmedications`, `lapplication`, `othermedications`, `skinexam`, `centerCode`, `centerName`, `patient_id`, `updatedBy`, `createdAt`) VALUES
(1, 'test', 'test', 'Yes', 'Yes', 'No', 'No', 'No', 'Yes', 'No', 'No', 'No', 'Slight', 'Moderate', 'Dry', 'Dry', '6', '9', '  this is just a test for present medications', 'this is just a test gds     ', 'this is just a test , please read it carefully', 'test', '1001', 'CRICR', '12222', 'Shamim', '2024-01-18 05:52:14'),
(2, 'test', 'test', 'Yes', 'Yes', 'Yes', 'Yes', 'Yes', 'Yes', 'Yes', 'Dry', 'Slight', 'Moderate', 'Dry', 'Dry', 'Moderate', '4', '7', 'This is just a test', 'This is just a test', 'This is just a test', NULL, '1001', 'CRICR', '12345', 'Shamim', '2024-01-18 05:58:28'),
(3, 'test', 'test', 'No', 'No', 'No', 'No', 'No', 'No', 'Yes', 'No', 'Slight', 'Slight', 'Slight', 'Slight', 'Slight', '2', '1', 'test', 'test', 'test', 'test', '1002', 'testhospital', '10018', '', '2024-02-17 06:55:10');

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
  `resexam` text DEFAULT NULL,
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

INSERT INTO `tbl_bronchitis` (`id`, `symptoms`, `types`, `daytime`, `limitation`, `nocturnal`, `rescue`, `lf`, `ex`, `controlled`, `partially`, `uncontrolled`, `resexam`, `pftgrading`, `habits`, `centerCode`, `centerName`, `patient_id`, `updatedBy`, `createdAt`) VALUES
(1, 'test', 'Cough <3 weeks', '1', '1', '0', '0', '0', '1', '', 'Partially Controlled', '', NULL, 'Moderate', 'Non Smoker', '1001', 'CRICR', '12222', 'Shamim', '2024-01-24 05:28:45'),
(2, 'test', 'Cough <3 weeks', '1', '1', '1', '1', '1', '1', '', '', 'Uncontrolled', NULL, 'Very Severe', 'Non Smoker', '1001', 'CRICR', '12222', 'Shamim', '2024-01-24 08:42:37'),
(3, 'none', 'Cough <3 weeks', '0', '0', '0', '0', '0', '0', 'Controlled', '', '', NULL, 'Moderate', 'Non Smoker', '1001', 'CRICR', '12222', 'Shamim Sheikh', '2024-01-27 10:46:56'),
(4, 'test', 'Cough <3 weeks', '0', '0', '0', '0', '0', '1', '', 'Partially Controlled', '', 'This is test', 'Moderate', 'Smoker', '1002', 'testhospital', '10018', '', '2024-02-17 08:49:20');

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
  `opthalexam` text DEFAULT NULL,
  `centerCode` varchar(100) DEFAULT NULL,
  `centerName` varchar(100) DEFAULT NULL,
  `patient_id` varchar(100) DEFAULT NULL,
  `updatedBy` varchar(100) DEFAULT NULL,
  `createdAt` timestamp NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tbl_conjunctivities`
--

INSERT INTO `tbl_conjunctivities` (`id`, `itching`, `tearing`, `redness`, `discomfort`, `discharge`, `photophobia`, `seasonal`, `perinneal`, `intermittent`, `persistent`, `bothersome`, `vision`, `interference`, `activities`, `opthalexam`, `centerCode`, `centerName`, `patient_id`, `updatedBy`, `createdAt`) VALUES
(1, 'Itching', 'Tearing', 'Redness', 'Discomfort', '', '', '', 'perinneal', 'intermittent', '', 'Moderate', 'Moderate', 'Moderate', 'Moderate', NULL, '1001', 'CRICR', '12222', 'Shamim', '2024-01-22 10:17:11'),
(2, 'Itching', '', '', '', '', '', 'seasonal', '', '', '', 'Mild', 'Mild', 'Mild', 'Mild', NULL, '1001', 'CRICR', '12222', 'Shamim Sheikh', '2024-01-27 10:26:49'),
(3, 'Itching', '', '', '', '', '', 'seasonal', '', '', '', 'Mild', 'Mild', 'Moderate', 'Moderate', 'this is just', '1002', 'testhospital', '10018', '', '2024-02-17 08:40:25'),
(4, 'Itching', 'Tearing', 'Redness', 'Discomfort', 'Discharge', 'Photophobia', 'seasonal', 'perinneal', 'intermittent', 'Persistent', 'Mild', 'Mild', 'Mild', 'Mild', 'This is just a test', '1002', 'testhospital', '10018', '', '2024-02-17 08:41:21');

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
(4, 2, 2, 2, 2, 2, 2, 'test', 'test', 'test', 'test', 'test', 'test', 'test', 'test', 'test', '1001', 'CRICR', '12222', 'Shamim Sheikh', '2024-01-27 10:47:39'),
(5, 2, 2, 2, 2, 2, 2, 'test', 'test', 'test', 'test', 'teat', 'test', 'test', 'test', 'test', '1002', 'testhospital', '10018', '', '2024-02-17 08:53:34');

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
(11, NULL, NULL, NULL, NULL, 'Yes', 'Yes', 'Yes', 'Yes', 'Yes', 'Yes', 'Yes', 'Yes', 'Yes', 'Yes', 'Yes', 'Mild', '', 'test', 'test', 'Yes', 'test', 'Yes', 'test', 'Yes', 'test', 'Yes', 'test', 'Yes', 'test', 'Yes', 'test', 'Yes', 'test', 'Yes', 'test', 'Yes', 'test', 'Yes', 'test', 'Yes', 'test', 'URTIs', 'test', 'Mild', 'Mild', 'Mod', 'Mod', 'Mod', 'Mild', 'Severe', 'Mod', 'Mild', 'Not So Much', 'Mild', 'Yes', 'Face', 'No', 'Extremities,Right Hand', 'Yes', 'Right Legs', 'Yes', 'Extremities', 'Yes', 'Left Legs', 'No', 'No', 'No', 'No', 'test', 'test', 'test', 'test', 'test', 'Urban', 'test', 'test', 'test', 'test', 'test', 'test', 'test', 'test', 'test', 'test', '280a9ac11b2598d35426d471a898ef1f.pdf', '1001', 'CRICR', '12222', 'Shamim', '2024-01-25 05:44:11'),
(12, NULL, NULL, NULL, NULL, 'Yes', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'Moderate', 'Yes', 'test', 'test', 'Yes', 'test', 'Yes', 'test', 'Yes', 'test', 'No', '', 'No', '', 'No', '', 'No', '', 'No', '', 'No', '', 'No', '', 'No', '', 'Smoke', '', 'Not So Much', 'Mild', 'Mild', 'Mild', 'Mild', 'Mod', 'Mod', 'Mod', 'Mod', 'Mod', 'Mod', 'Yes', 'Face', 'Yes', 'Right Legs', 'Yes', 'Left Hand', '', 'Left Hand', 'Yes', 'Extremities', 'Yes', 'Yes', 'Yes', 'Yes', 'test', 'test', 'test', 'test', 'test', 'Rural', 'test', 'test', 'test', 'test', 'test', 'test', 'test', 'test', 'test', 'test', '206c124a043bee70c991f38e80f06b6b.pdf', '1001', 'CRICR', '61001', 'Shamim Sheikh', '2024-01-31 08:56:35');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_investigation`
--

CREATE TABLE `tbl_investigation` (
  `id` int(11) NOT NULL,
  `hb` text DEFAULT NULL,
  `tc` text DEFAULT NULL,
  `neutrophils` text DEFAULT NULL,
  `eosinophil` text DEFAULT NULL,
  `lymphocytes` text DEFAULT NULL,
  `monocytes` text DEFAULT NULL,
  `platelets` text DEFAULT NULL,
  `esr` text DEFAULT NULL,
  `serum_creatinine` text DEFAULT NULL,
  `serumig` text DEFAULT NULL,
  `clevel` text DEFAULT NULL,
  `clevel4` text DEFAULT NULL,
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

INSERT INTO `tbl_investigation` (`id`, `hb`, `tc`, `neutrophils`, `eosinophil`, `lymphocytes`, `monocytes`, `platelets`, `esr`, `serum_creatinine`, `serumig`, `clevel`, `clevel4`, `ana`, `urine_routine`, `allergy_panel`, `centerCode`, `centerName`, `patient_id`, `updatedBy`, `createdAt`) VALUES
(3, '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', NULL, '1', '1', '1', '1001', 'cricr', '13234', 'admin', '2024-01-13 12:01:53'),
(4, '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', NULL, '1', '1', '1', '1001', 'CRICR', '12222', 'Shamim', '2024-01-24 09:50:41'),
(5, '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', NULL, '1', '1', '1', '1001', 'CRICR', '12345', 'Shamim', '2024-01-24 12:19:44'),
(6, '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1002', 'testhospital', '10018', 'rishab', '2024-02-14 05:47:37');

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
(30, 'Strepsils', '1-0-1', '3', '', '1001', 'CRICR', '71001', 'Shamim Sheikh', 1, '2024-01-30 12:00:22', 1),
(31, 'paracetamol', '1-0-1', '3', '', '1001', 'CRICR', '12222', 'Shamim Sheikh', 2, '2024-01-31 06:28:33', 1),
(32, 'Aciloc', '1-0-1', '3', '', '1001', 'CRICR', '12222', 'Shamim Sheikh', 2, '2024-01-31 06:28:33', 1),
(33, 'Dolo 650', '1-0-1', '3', '', '1001', 'CRICR', '12222', 'Shamim Sheikh', 2, '2024-01-31 06:28:33', 1),
(34, 'paracetamol', '1-0-1', '3', '', '1001', 'CRICR', '81001', 'Shamim Sheikh', 1, '2024-01-31 08:29:54', 1),
(35, 'Aciloc', '1-0-1', '3', '', '1001', 'CRICR', '81001', 'Shamim Sheikh', 1, '2024-01-31 08:29:54', 1),
(36, 'paracetamol', '1-0-1', '3', '', '1001', 'CRICR', '12222', 'Shamim Sheikh', 3, '2024-02-03 08:30:36', 1),
(37, 'medicine 2', '1-0-1', '3', '', '1001', 'CRICR', '12222', 'Shamim Sheikh', 3, '2024-02-03 08:30:36', 1),
(38, 'medicine 3', '1-0-1', '3', '', '1001', 'CRICR', '12222', 'Shamim Sheikh', 3, '2024-02-03 08:30:36', 1),
(39, 'medicine 4', '1-0-1', '3', '', '1001', 'CRICR', '12222', 'Shamim Sheikh', 3, '2024-02-03 08:30:36', 1),
(40, 'medicine 5', '1-0-1', '3', '', '1001', 'CRICR', '12222', 'Shamim Sheikh', 3, '2024-02-03 08:30:36', 1),
(41, 'medicine 6', '1-0-1', '3', '', '1001', 'CRICR', '12222', 'Shamim Sheikh', 3, '2024-02-03 08:30:36', 1),
(42, 'paracetamol', '1-0-1', '3', '', '1001', 'CRICR', '12222', 'Shamim Sheikh', 4, '2024-02-03 08:51:27', 1),
(43, 'medicine 2', '1-0-1', '3', '', '1001', 'CRICR', '12222', 'Shamim Sheikh', 4, '2024-02-03 08:51:27', 1),
(44, 'medicine 3', '1-0-1', '3', '', '1001', 'CRICR', '12222', 'Shamim Sheikh', 4, '2024-02-03 08:51:27', 1),
(45, 'medicine 4', '1-0-1', '3', '', '1001', 'CRICR', '12222', 'Shamim Sheikh', 4, '2024-02-03 08:51:27', 1),
(46, 'medicine 5', '1-0-1', '3', '', '1001', 'CRICR', '12222', 'Shamim Sheikh', 4, '2024-02-03 08:51:27', 1),
(47, 'medicine 6', '1-0-1', '3', '', '1001', 'CRICR', '12222', 'Shamim Sheikh', 4, '2024-02-03 08:51:27', 1),
(56, 'paracetamol', '1-0-1', '3', '', '1001', 'CRICR', '10018', 'rishab', 1, '2024-02-08 07:02:56', 1),
(57, 'Dolo 650', '1-0-1', '3', '', '1001', 'CRICR', '10018', 'rishab', 1, '2024-02-08 07:02:56', 1),
(58, 'Citrizine', '1-0-1', '3', '', '1001', 'CRICR', '10018', 'rishab', 1, '2024-02-08 07:02:56', 1),
(59, 'Aciloc', '1-0-1', '3', '', '1001', 'CRICR', '10018', 'rishab', 1, '2024-02-08 07:02:56', 1);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_staff`
--

CREATE TABLE `tbl_staff` (
  `id` int(11) NOT NULL,
  `empName` text DEFAULT NULL,
  `empQualification` text DEFAULT NULL,
  `empDesignation` text DEFAULT NULL,
  `empkmc` varchar(55) DEFAULT NULL,
  `empUsername` varchar(255) DEFAULT NULL,
  `empPassword` varchar(255) DEFAULT NULL,
  `centerName` varchar(255) DEFAULT NULL,
  `centerCode` varchar(50) DEFAULT NULL,
  `empImage` text DEFAULT NULL,
  `useremail` varchar(255) DEFAULT NULL,
  `usermobile` varchar(11) DEFAULT NULL,
  `role` varchar(55) DEFAULT NULL,
  `isActive` int(2) DEFAULT NULL,
  `createdAt` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tbl_staff`
--

INSERT INTO `tbl_staff` (`id`, `empName`, `empQualification`, `empDesignation`, `empkmc`, `empUsername`, `empPassword`, `centerName`, `centerCode`, `empImage`, `useremail`, `usermobile`, `role`, `isActive`, `createdAt`) VALUES
(2, 'Rishab', 'MBBS', 'Doctor', '12345', 'rishab', '$2y$10$muxD0T56IzzY5/HQf8jEp.iu9OP8h6TqdmLeMEv6mOPeRUbORjBr2', 'testhospital', '1002', '', 'rishab@gmail.com', '1234567890', 'Doctor', 1, '2024-02-07 05:43:30'),
(3, 'John Doe', 'MCA', 'Receptionist', '0000', 'johndoe', '$2y$10$.eypmzO7Xzz7/MDcV3g5r.iwc9w9MzZyG/tBIUdxaAKeI2yDZmtrK', 'testhospital', '1002', '', 'johndoe@gmail.com', '1234567890', 'Receptionist', 1, '2024-02-08 09:03:40');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_users`
--

CREATE TABLE `tbl_users` (
  `id` int(11) NOT NULL,
  `empName` varchar(255) NOT NULL,
  `empQualification` varchar(255) NOT NULL,
  `empDesignation` varchar(255) NOT NULL,
  `empkmc` varchar(50) NOT NULL,
  `center_username` varchar(255) NOT NULL,
  `center_password` varchar(255) NOT NULL,
  `centerName` varchar(255) NOT NULL,
  `centerCode` varchar(100) NOT NULL,
  `center_email` varchar(255) NOT NULL,
  `center_contact` varchar(15) NOT NULL,
  `usertype` varchar(55) NOT NULL,
  `isActive` int(11) DEFAULT NULL,
  `createdAt` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tbl_users`
--

INSERT INTO `tbl_users` (`id`, `empName`, `empQualification`, `empDesignation`, `empkmc`, `center_username`, `center_password`, `centerName`, `centerCode`, `center_email`, `center_contact`, `usertype`, `isActive`, `createdAt`) VALUES
(1, 'shamim', 'MCA', 'Doctor', '12345', 'shamim', '$2y$10$muxD0T56IzzY5/HQf8jEp.iu9OP8h6TqdmLeMEv6mOPeRUbORjBr2', 'Narayana Hospital', '1002', 'testhospital@gmail.com', '9988776655', '1', 1, '2024-02-20 07:01:35'),
(3, 'Raju S', 'MD, DM', 'Doctor', '12321', 'raju', '$2y$10$/qdGpxULZxHF2g3uLUeoduxruyARahnmdCdeMEnmzVrp8gu7tm.3W', 'Fortis Hospital', '1005', 'raju@gmail.com', '9876567890', '2', NULL, '2024-02-20 10:31:18'),
(4, 'Harish', 'MBBS', 'Doctor', '12344', 'harish', '$2y$10$8P1Le3UAsu.ibUZIVryH9u7AizMnHtOgEaiYTWtwEYn1Dyr56gofe', 'Lotus Hospital', '2002', 'harish@gmail.com', '1234567890', '1', NULL, '2024-02-21 08:18:07'),
(5, 'Rosy s', 'BA', 'Receptionist', '0000', 'rosy', '$2y$10$NuNPSFb5DL2yawDnuZWFC.c.XwrFSbIAX8l2WXucRiWfblJOuEL2u', 'Lotus Hospital', '2002', 'rosy@gmail.com', '9988776655', '3', NULL, '2024-02-21 08:22:04'),
(6, 'Dr Ranjit Roy', 'MD, DM', 'Doctor', '12142', 'ranjit', '$2y$10$IwIHtBcFxCmeLGAK7rcAIO6vVmG8M70FNArgB.8G2n4v/co3QrISu', 'Lotus Hospital', '2002', 'ranjit@gmail.com', '1212121212', '2', NULL, '2024-02-21 08:27:44');

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
-- Indexes for table `tbl_staff`
--
ALTER TABLE `tbl_staff`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_users`
--
ALTER TABLE `tbl_users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `patients`
--
ALTER TABLE `patients`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `tbl_admin`
--
ALTER TABLE `tbl_admin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `tbl_allergic_rhinitis`
--
ALTER TABLE `tbl_allergic_rhinitis`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `tbl_atopic`
--
ALTER TABLE `tbl_atopic`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `tbl_bronchitis`
--
ALTER TABLE `tbl_bronchitis`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `tbl_conjunctivities`
--
ALTER TABLE `tbl_conjunctivities`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `tbl_gpe`
--
ALTER TABLE `tbl_gpe`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `tbl_history`
--
ALTER TABLE `tbl_history`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `tbl_investigation`
--
ALTER TABLE `tbl_investigation`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

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
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=60;

--
-- AUTO_INCREMENT for table `tbl_staff`
--
ALTER TABLE `tbl_staff`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `tbl_users`
--
ALTER TABLE `tbl_users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
