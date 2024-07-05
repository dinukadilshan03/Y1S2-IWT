-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 06, 2024 at 04:23 PM
-- Server version: 10.4.21-MariaDB
-- PHP Version: 7.3.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `smartdoc`
--

-- --------------------------------------------------------

--
-- Table structure for table `appointment`
--

CREATE TABLE `appointment` (
  `TokenID` int(3) NOT NULL,
  `FullName` varchar(25) DEFAULT NULL,
  `Gender` enum('Male','Female') DEFAULT NULL,
  `ContactNumber` int(10) DEFAULT NULL,
  `DateOfBirth` date NOT NULL,
  `Email` varchar(25) DEFAULT NULL,
  `procedure_type` enum('Initial Consultation','Follow-up Appointment','Routine Check-up','Surgical Procedure') DEFAULT NULL,
  `appointment_Datetime` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `appointment`
--

INSERT INTO `appointment` (`TokenID`, `FullName`, `Gender`, `ContactNumber`, `DateOfBirth`, `Email`, `procedure_type`, `appointment_Datetime`) VALUES
(53, 'Naveethaaa', 'Male', 774491253, '2024-05-04', 'nnaviya96@gmail.com', 'Follow-up Appointment', '2024-05-06 17:06:00'),
(54, 'asinu', 'Male', 2345657, '2024-06-06', 'Asinu012@gmail.com', 'Follow-up Appointment', '2024-06-06 22:54:00'),
(55, 'lakshith', 'Male', 8654322, '2024-06-01', 'emoxy909@gmail.com', 'Routine Check-up', '2024-06-08 00:53:00'),
(56, 'lakshith', 'Male', 1111111111, '2024-05-02', 'emoxy909@gmail', 'Follow-up Appointment', '2024-06-08 04:18:00'),
(59, 'diwayuru', 'Male', 6767678, '2024-05-14', 'ewhw@gmail.com', 'Routine Check-up', '2024-05-31 13:20:00'),
(60, 'diwayuru', 'Male', 2147483647, '2024-05-14', 'ewhw@gmail.com', 'Follow-up Appointment', '2024-06-05 13:22:00'),
(61, 'asinu', 'Male', 67442, '2024-05-31', 'ishara@gmail.com', 'Initial Consultation', '2024-06-01 14:49:00');

-- --------------------------------------------------------

--
-- Table structure for table `client`
--

CREATE TABLE `client` (
  `ID` int(100) NOT NULL,
  `FName` varchar(10) NOT NULL,
  `LName` varchar(10) NOT NULL,
  `Email` varchar(20) NOT NULL,
  `Message` varchar(100) NOT NULL,
  `Status` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `client`
--

INSERT INTO `client` (`ID`, `FName`, `LName`, `Email`, `Message`, `Status`) VALUES
(8, 'Chamalka', 'Lakshan', 'chamalkalakshan123@g', 'a verbal, written, or recorded communication sent to or left for a recipient who cannot be contacted', 'Pending'),
(9, 'Kamal', 'Perera', 'KP97@gmail.com', 'Musician', 'pending'),
(10, 'aaa', 'aaa', 'aa@gmsil.com', 'aaaaaa', 'pending');

-- --------------------------------------------------------

--
-- Table structure for table `clientlist`
--

CREATE TABLE `clientlist` (
  `Client_Name` varchar(20) NOT NULL,
  `Client_Id` int(10) NOT NULL,
  `email` varchar(20) NOT NULL,
  `Medical_Details` varchar(200) NOT NULL,
  `Telephone` int(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `clientlist`
--

INSERT INTO `clientlist` (`Client_Name`, `Client_Id`, `email`, `Medical_Details`, `Telephone`) VALUES
('Imesh Lakviru', 1, 'imesh@example.com', 'Report1', 111),
('Dehara Lakshan', 2, 'dehara@example.com', 'Report2', 333),
('Ann Almeda', 3, 'ann@example.com', 'Report3', 444),
('Madushani Wijesinghe', 4, 'madushani@example.co', 'Report4', 777),
('Tharindu Perera', 5, 'harindu@example.com', 'Report5', 444);

-- --------------------------------------------------------

--
-- Table structure for table `doctor_details`
--

CREATE TABLE `doctor_details` (
  `ID` int(10) NOT NULL,
  `Name` varchar(10) NOT NULL,
  `Specialization` varchar(20) NOT NULL,
  `Experience` int(10) NOT NULL,
  `Email` varchar(20) NOT NULL,
  `Contact` int(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `doctor_details`
--

INSERT INTO `doctor_details` (`ID`, `Name`, `Specialization`, `Experience`, `Email`, `Contact`) VALUES
(1, 'devinda', 'cardiology', 8, 'devinda@gmail.com', 772236958),
(3, 'nethum', 'Dematology', 12, 'nethum@gmail.com', 2345678),
(4, 'Ashini', 'cardiology', 8, 'ashini@gmail.com', 12345678),
(5, 'devinda', 'Dematology', 5, 'kalum@gmail.com', 758692354),
(6, 'kalum', 'cardiology', 5, 'kalum@gmail.com', 7255582),
(7, 'kalum', 'dietician', 10, 'kalum@gmail.com', 7255582),
(10, 'devinda', 'cardiology', 8, 'devinda@gmail.com', 772236958),
(11, 'devinda', 'cardiology', 8, 'devinda@gmail.com', 772236958),
(12, 'kalum', 'dietician', 12, 'devinda@gmail.com', 758692354),
(18, 'kalum', 'dietician', 12, 'devinda@gmail.com', 758692354),
(20, 'devinda', 'cardiology', 8, 'devinda@gmail.com', 772236958);

-- --------------------------------------------------------

--
-- Table structure for table `user_form`
--

CREATE TABLE `user_form` (
  `u_name` varchar(40) NOT NULL,
  `u_email` varchar(40) NOT NULL,
  `u_password` varchar(40) NOT NULL,
  `u_gender` enum('Male','Female') NOT NULL,
  `u_type` enum('User','Admin') NOT NULL,
  `u_ID` int(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user_form`
--

INSERT INTO `user_form` (`u_name`, `u_email`, `u_password`, `u_gender`, `u_type`, `u_ID`) VALUES
('Dinuka', 'dinuka@test.com', '1234', 'Male', 'Admin', 1),
('new11', 'user@mail.com', '111', 'Male', 'User', 2);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `appointment`
--
ALTER TABLE `appointment`
  ADD PRIMARY KEY (`TokenID`);

--
-- Indexes for table `client`
--
ALTER TABLE `client`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `clientlist`
--
ALTER TABLE `clientlist`
  ADD PRIMARY KEY (`Client_Id`);

--
-- Indexes for table `doctor_details`
--
ALTER TABLE `doctor_details`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `user_form`
--
ALTER TABLE `user_form`
  ADD PRIMARY KEY (`u_ID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `appointment`
--
ALTER TABLE `appointment`
  MODIFY `TokenID` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=64;

--
-- AUTO_INCREMENT for table `client`
--
ALTER TABLE `client`
  MODIFY `ID` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `user_form`
--
ALTER TABLE `user_form`
  MODIFY `u_ID` int(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
