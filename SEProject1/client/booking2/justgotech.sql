-- phpMyAdmin SQL Dump
-- version 4.9.2
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Feb 28, 2021 at 10:30 PM
-- Server version: 10.4.11-MariaDB
-- PHP Version: 7.4.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `justgotech`
--

-- --------------------------------------------------------

--
-- Table structure for table `booking`
--

CREATE TABLE `booking` (
  `BID` int(10) NOT NULL,
  `Appointment` date NOT NULL,
  `Department` enum('Counselling','Gyneacology','Optics','Dentistry','Pediatrics','Covid-19','Surgery','Specialist','Nutrition/Diet','Dermatology','Blood','Emergency Care Unit') NOT NULL,
  `Reason` text NOT NULL,
  `Insurance` enum('Yes','No') NOT NULL,
  `Insurance_Name` varchar(255) DEFAULT NULL,
  `Insurance_ID` varchar(255) DEFAULT NULL,
  `Image` varchar(255) DEFAULT NULL,
  `Doctor` int(11) NOT NULL,
  `ApTime` varchar(255) NOT NULL,
  `Person` enum('Self','Other') NOT NULL,
  `PatientID` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `contact`
--

CREATE TABLE `contact` (
  `ConID` int(10) NOT NULL,
  `Contact` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `contact`
--

INSERT INTO `contact` (`ConID`, `Contact`) VALUES
(1, 'I lived with someone with COVID-19'),
(2, 'I cared for someone with Covid-19'),
(3, ' I was within 6 feet of someone with Covid-19 for about 15 minutes'),
(4, 'I might have been exposed to Covid-19'),
(5, 'I have no exposure of Covid-19');

-- --------------------------------------------------------

--
-- Table structure for table `contactus`
--

CREATE TABLE `contactus` (
  `ContactID` int(11) NOT NULL,
  `Name` varchar(255) NOT NULL,
  `Email` varchar(255) NOT NULL,
  `Message` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------
--
-- Table structure for table `covid`
--

CREATE TABLE `covid` (
  `disease_id` varchar(10) NOT NULL,
  `disease_name` varchar(255) NOT NULL,
  `disease_desc` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `covid`
--

INSERT INTO `covid` (`disease_id`, `disease_name`, `disease_desc`) VALUES
('SARS-COV2', 'Coronavirus', 'The Coronavirus also known as the COVID-19 was first identified in human in December 2019 in Wuhan,China. \r\n');

-- --------------------------------------------------------

--
-- Table structure for table `customer`
--

CREATE TABLE `customer` (
  `PatientID` int(10) NOT NULL,
  `firstname` varchar(500) NOT NULL,
  `lastname` varchar(500) NOT NULL,
  `username` varchar(500) NOT NULL,
  `email` varchar(500) NOT NULL,
  `gender` enum('Male','Female','Other') NOT NULL,
  `dob` date NOT NULL,
  `nationality` varchar(500) NOT NULL,
  `phonenumber` varchar(500) NOT NULL,
  `userpassword` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------
--
-- Table structure for table `diseases`
--

CREATE TABLE `diseases` (
  `ResponseID` int(10) NOT NULL,
  `age_bracket` enum('Under 18','Between 18-55','Between 56-64','More than 64') NOT NULL,
  `symptom` varchar(255) NOT NULL,
  `testing` enum('Tested and result was positive','Tested but result was negative','Tested and awaiting results','Not tested') NOT NULL,
  `disease_id` varchar(10) NOT NULL,
  `PatientID` int(10) NOT NULL,
  `Region` enum('Greater Accra Region','Central Region','Ashanti Region','Eastern Region','Volta Region','Western Region','Western North Region','Oti Region','Savannah Region','Upper West Region','Upper East Region','Bono Region','Ahafo Region','Northern Region') NOT NULL,
  `precon` varchar(255) NOT NULL,
  `ConID` int(10) NOT NULL,
  `Time` datetime NOT NULL,
  `Status` enum('Not exposed','Not Likely Exposed','Likely Exposed','Exposed') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------
--
-- Table structure for table `Doctor`
--

CREATE TABLE `Doctor` (
  `DocID` int(11) NOT NULL,
  `DocFname` varchar(255) NOT NULL,
  `DocLname` varchar(255) NOT NULL,
  `Department` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `Doctor`
--
INSERT INTO `Doctor` (`DocID`, `DocFname`, `DocLname`, `Department`) VALUES
(1, 'Rita', 'Osei', 'Surgery');

-- --------------------------------------------------------
--
-- Table structure for table `Doctor_Time`
--

CREATE TABLE `Doctor_Time` (
  `TID` int(3) NOT NULL,
  `DocID` int(11) NOT NULL,
  `Time_Available` time NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `Doctor_Time`
--

INSERT INTO `Doctor_Time` (`TID`, `DocID`, `Time_Available`) VALUES
(1, 1, '09:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `drugs`
--

CREATE TABLE `drugs` (
  `DID` int(10) NOT NULL,
  `DName` varchar(255) NOT NULL,
  `Quantity` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `preconditions`
--

CREATE TABLE `preconditions` (
  `PID` int(10) NOT NULL,
  `PName` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `preconditions`
--

INSERT INTO `preconditions` (`PID`, `PName`) VALUES
(1, 'Diabetes, High Blood Pressure'),
(2, 'Anaemia'),
(3, 'Obesity'),
(4, 'Neurological conditions such as Stroke'),
(5, 'Smoking'),
(6, 'Heart condition'),
(7, 'Weakened Immune system '),
(8, 'Asthma');

-- --------------------------------------------------------
--
-- Table structure for table `symptoms`
--

CREATE TABLE `symptoms` (
  `SID` int(3) NOT NULL,
  `Sname` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `symptoms`
--

INSERT INTO `symptoms` (`SID`, `Sname`) VALUES
(1, 'Fever or Chills'),
(2, 'Diarrhoea'),
(3, 'Sore Throat'),
(4, 'New or worsening cough'),
(5, 'Loss of Smell'),
(6, 'Vomiting'),
(7, 'Fatigue'),
(8, 'Mild or difficult breathing');

-- --------------------------------------------------------
--
-- Table structure for table `testing_centre`
--

CREATE TABLE `testing_centre` (
  `CID` int(10) NOT NULL,
  `CName` varchar(255) NOT NULL,
  `Location` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `testing_centre`
--

INSERT INTO `testing_centre` (`CID`, `CName`, `Location`) VALUES
(1, 'Noguchi Medical Center', 'Legon,Accra'),
(2, 'Legon Hospital', 'Legon,Accra'),
(3, 'Akai Clinic', 'Cantonments,Accra'),
(4, 'Nyaho Medical Centre', 'Airport West, Accra');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `booking`
--
ALTER TABLE `booking`
  ADD PRIMARY KEY (`BID`),
  ADD KEY `Doctor` (`Doctor`),
  ADD KEY `PatientID` (`PatientID`);

--
-- Indexes for table `contact`
--
ALTER TABLE `contact`
  ADD PRIMARY KEY (`ConID`);

--
-- Indexes for table `contactus`
--
ALTER TABLE `contactus`
  ADD PRIMARY KEY (`ContactID`);

--
-- Indexes for table `covid`
--
ALTER TABLE `covid`
  ADD PRIMARY KEY (`disease_id`) USING BTREE;

--
-- Indexes for table `customer`
--
ALTER TABLE `customer`
  ADD PRIMARY KEY (`PatientID`),
  ADD UNIQUE KEY `username` (`username`);

--
-- Indexes for table `diseases`
--
ALTER TABLE `diseases`
  ADD PRIMARY KEY (`ResponseID`),
  ADD KEY `Disease` (`disease_id`) USING BTREE,
  ADD KEY `PatientID` (`PatientID`),
  ADD KEY `ConID` (`ConID`);

--
-- Indexes for table `Doctor`
--
ALTER TABLE `Doctor`
  ADD PRIMARY KEY (`DocID`);

--
-- Indexes for table `Doctor_Time`
--
ALTER TABLE `Doctor_Time`
  ADD PRIMARY KEY (`TID`),
  ADD KEY `DocID` (`DocID`);

--
-- Indexes for table `drugs`
--
ALTER TABLE `drugs`
  ADD PRIMARY KEY (`DID`);

--
-- Indexes for table `preconditions`
--
ALTER TABLE `preconditions`
  ADD PRIMARY KEY (`PID`);

--
-- Indexes for table `symptoms`
--
ALTER TABLE `symptoms`
  ADD PRIMARY KEY (`SID`);

--
-- Indexes for table `testing_centre`
--
ALTER TABLE `testing_centre`
  ADD PRIMARY KEY (`CID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `booking`
--
ALTER TABLE `booking`
  MODIFY `BID` int(10) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `contact`
--
ALTER TABLE `contact`
  MODIFY `ConID` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `contactus`
--
ALTER TABLE `contactus`
  MODIFY `ContactID` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `customer`
--
ALTER TABLE `customer`
  MODIFY `PatientID` int(10) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `diseases`
--
ALTER TABLE `diseases`
  MODIFY `ResponseID` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `Doctor`
--
ALTER TABLE `Doctor`
  MODIFY `DocID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `Doctor_Time`
--
ALTER TABLE `Doctor_Time`
  MODIFY `TID` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `drugs`
--
ALTER TABLE `drugs`
  MODIFY `DID` int(10) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `preconditions`
--
ALTER TABLE `preconditions`
  MODIFY `PID` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `symptoms`
--
ALTER TABLE `symptoms`
  MODIFY `SID` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `testing_centre`
--
ALTER TABLE `testing_centre`
  MODIFY `CID` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `booking`
--
ALTER TABLE `booking`
  ADD CONSTRAINT `booking_ibfk_1` FOREIGN KEY (`Doctor`) REFERENCES `Doctor` (`DocID`);

--
-- Constraints for table `diseases`
--
ALTER TABLE `diseases`
  ADD CONSTRAINT `diseases_ibfk_2` FOREIGN KEY (`ConID`) REFERENCES `contact` (`ConID`),
  ADD CONSTRAINT `foreign key` FOREIGN KEY (`disease_id`) REFERENCES `covid` (`disease_id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `Doctor_Time`
--
ALTER TABLE `Doctor_Time`
  ADD CONSTRAINT `doctor_time_ibfk_1` FOREIGN KEY (`DocID`) REFERENCES `Doctor` (`DocID`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
