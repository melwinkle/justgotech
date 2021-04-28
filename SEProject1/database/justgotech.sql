-- phpMyAdmin SQL Dump
-- version 4.9.2
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Apr 29, 2021 at 01:11 AM
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
-- Table structure for table `admin_one`
--

CREATE TABLE `admin_one` (
  `AdminID` int(11) NOT NULL,
  `AdminFName` varchar(255) NOT NULL,
  `AdminLName` varchar(255) NOT NULL,
  `AdminNick` varchar(255) NOT NULL,
  `AdminPass` varchar(255) NOT NULL,
  `AdminLocation` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

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
  `Doctor` int(11) NOT NULL,
  `ApTime` varchar(255) NOT NULL,
  `Person` enum('Self','Other') NOT NULL,
  `PatientID` int(10) NOT NULL,
  `STATUS` enum('BOOKED','PENDING','COMPLETED','') NOT NULL DEFAULT 'PENDING'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `booking`
--

INSERT INTO `booking` (`BID`, `Appointment`, `Department`, `Reason`, `Insurance`, `Insurance_Name`, `Insurance_ID`, `Doctor`, `ApTime`, `Person`, `PatientID`, `STATUS`) VALUES
(1, '2021-04-10', 'Specialist', 'Sick', 'No', '', '', 1, '10:00', 'Self', 3, 'PENDING'),
(2, '2021-04-10', 'Surgery', 'sick', 'No', '', '', 1, '10:00', 'Self', 3, 'PENDING'),
(3, '2021-04-10', 'Dentistry', 'My teeth', 'Yes', 'Medifem', '1243', 1, '12:00', 'Self', 4, 'PENDING'),
(4, '2021-04-13', 'Specialist', 'I have a tummy ache and i feel nauseous', 'No', '', '', 1, '09:00', 'Self', 3, 'PENDING'),
(5, '2021-04-15', 'Dentistry', 'Tooth ache', 'No', '', '', 1, '11:00', 'Self', 3, 'PENDING');

-- --------------------------------------------------------

--
-- Table structure for table `chatbot`
--

CREATE TABLE `chatbot` (
  `MID` int(11) NOT NULL,
  `Queries` varchar(300) NOT NULL,
  `Replies` varchar(300) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `chatbot`
--

INSERT INTO `chatbot` (`MID`, `Queries`, `Replies`) VALUES
(1, 'Hello|Hi|Hy|Hey|hello|hi|hy|hey', 'Hi there,'),
(2, 'What is your name|What is your name?|What\'s your name', 'My name is my JustGo bot!'),
(3, 'help|services|MM|mm|menu|main', 'Here is the Main Menu:\r\n1. General Screening(GS)\r\n2. Pharmacy(PT)\r\n3. Consultation(CT)\r\n4. About JustGo Tech Healthcare(AJ)\r\n\r\nPlease reply with the abbreviations in bracket'),
(4, 'GS|gs|General Screening|general screening', 'General Screening Menu\r\n1.View Reports(VR)\r\n2.Take a test(TT)                              3.About General Screening(AGS)\r\n0.Main Menu(MM)'),
(5, 'PT|pt|pharmacy|Pharmacy|PHARMACY', 'Pharmacy Menu\r\n1.Search for drug(SD)\r\n2.View Page(VP)\r\n3.About Pharmacy(AP)\r\n0.Main Menu(MM)'),
(6, 'CT|ct|consultation', 'Consulation Menu:\r\n1.Book Appointment(BA)\r\n2.Manage Bookings(MB)\r\n0.Main Menu(MM)'),
(7, 'AJ|aj|About|about', 'JustGo Tech Digital Healthcare is tailored to provide healthcare to all social groups. '),
(8, 'TT|Test|test|tt', 'Use the link below to access the test. All the best!!'),
(9, 'VR|vr|view reports|View reports|', 'Find your statistics and analysis for your tests. To view more, click the link below.'),
(10, 'AGS', 'The general screening is tailored to help you to analyze your symptoms for a particular disease and give an on-the spot diagnosis. The model will soon be powered by AI model.'),
(11, 'AP', 'The pharmacy service is tailored to help you find the nearest partner pharmacy with the best price for a drug you are searching for.The component is currently under review.'),
(12, 'BA|ba|Book|book|Book Appointment|book appointment', 'Get in touch with our renowned doctors. Click the button below to get the best treatment'),
(13, 'MB|mb|manage|manage bookings|Manage Bookings', 'You have got access to the best services. Now you can manage the bookings. Click below to view more. ');

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

--
-- Dumping data for table `customer`
--

INSERT INTO `customer` (`PatientID`, `firstname`, `lastname`, `username`, `email`, `gender`, `dob`, `nationality`, `phonenumber`, `userpassword`) VALUES
(1, 'Mark', 'Zoiku', 'mzoiku', 'jzoiku@gmail.com', 'Male', '2021-02-28', 'Ghana', '0555777803', 'a7f57ac5f16536d452fc407ee22dee1c'),
(2, 'Aileen', 'Akpalu', 'aileenlisa', 'adzo.lisa@gmail.com', 'Female', '2000-03-20', 'Ghana', '0245673212', 'a452d4423a20c686a13ce3131a7ae7ef'),
(3, 'Mela', 'Zayn', 'melzy', 'melzay@gmail.com', 'Female', '1985-04-09', 'Ghana', '0245673214', 'de06a11cbec10d19a26d21bf64cfcf8e'),
(4, 'Pete', 'Rug', 'prug', 'peterug@gmail.com', 'Male', '1996-04-10', 'Ghana', '0245673234', '4da30385ca2ecc83cb90262860ba62fc');

-- --------------------------------------------------------

--
-- Table structure for table `Delivery`
--

CREATE TABLE `Delivery` (
  `DelID` int(11) NOT NULL,
  `DelFName` varchar(255) NOT NULL,
  `DelLName` varchar(255) NOT NULL,
  `DelImage` varchar(255) NOT NULL,
  `DelNum` varchar(10) NOT NULL
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

--
-- Dumping data for table `diseases`
--

INSERT INTO `diseases` (`ResponseID`, `age_bracket`, `symptom`, `testing`, `disease_id`, `PatientID`, `Region`, `precon`, `ConID`, `Time`, `Status`) VALUES
(7, 'Between 18-55', 'Sore Throat', 'Tested but result was negative', 'SARS-COV2', 2, 'Greater Accra Region', 'Anaemia', 3, '2021-02-28 22:35:54', 'Exposed'),
(8, 'Between 18-55', 'None of the above', 'Not tested', 'SARS-COV2', 2, 'Greater Accra Region', 'None of the above', 5, '2021-02-28 22:45:53', 'Not exposed'),
(9, 'Between 18-55', 'Fatigue', 'Tested but result was negative', 'SARS-COV2', 3, 'Central Region', 'None of the above', 5, '2021-04-08 23:33:34', 'Not Likely Exposed'),
(10, 'Between 18-55', 'None of the above', 'Tested and awaiting results', 'SARS-COV2', 4, 'Ashanti Region', 'None of the above', 4, '2021-04-10 11:14:50', 'Not Likely Exposed'),
(11, 'Between 18-55', 'None of the above', 'Not tested', 'SARS-COV2', 3, 'Greater Accra Region', 'None of the above', 4, '2021-04-14 21:07:26', 'Not Likely Exposed');

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
  `Drug_type` enum('Antibiotic','Antidepressants','Antiretroviral','Vitamin') NOT NULL,
  `Queries` varchar(255) NOT NULL,
  `Description` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `drugs`
--

INSERT INTO `drugs` (`DID`, `DName`, `Drug_type`, `Queries`, `Description`) VALUES
(1, 'Panadol Plus', 'Antibiotic', 'Panadol|Paracetamol|Panadol Plus|panadol|paracetamol', '12 tablets per Single strip'),
(2, 'Andorin Paracetamol', 'Antibiotic', 'paracetamol|Paracetamol', '10 tablets per strip');

-- --------------------------------------------------------

--
-- Table structure for table `perm_cart`
--

CREATE TABLE `perm_cart` (
  `PC` int(11) NOT NULL,
  `POID` int(11) NOT NULL,
  `TC` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `perm_cart`
--

INSERT INTO `perm_cart` (`PC`, `POID`, `TC`) VALUES
(1, 2, 1),
(2, 2, 2),
(3, 3, 13);

-- --------------------------------------------------------

--
-- Table structure for table `pharmacists`
--

CREATE TABLE `pharmacists` (
  `PharmID` int(11) NOT NULL,
  `Pharm_Name` varchar(255) NOT NULL,
  `Location` varchar(255) NOT NULL,
  `Location_queries` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `pharmacists`
--

INSERT INTO `pharmacists` (`PharmID`, `Pharm_Name`, `Location`, `Location_queries`) VALUES
(1, 'Linux Pharmacy', 'Airport Residential Area', 'Airport|airport|Ridge|ridge|');

-- --------------------------------------------------------

--
-- Table structure for table `pharm_drugs`
--

CREATE TABLE `pharm_drugs` (
  `PHD` int(11) NOT NULL,
  `PharmID` int(11) NOT NULL,
  `DID` int(10) NOT NULL,
  `Quantity` int(11) NOT NULL,
  `Price` int(11) NOT NULL,
  `M_date` date NOT NULL,
  `E_date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `pharm_drugs`
--

INSERT INTO `pharm_drugs` (`PHD`, `PharmID`, `DID`, `Quantity`, `Price`, `M_date`, `E_date`) VALUES
(1, 1, 1, 100, 10, '2020-09-15', '2024-05-08'),
(2, 1, 2, 100, 12, '2020-10-13', '2025-02-13');

-- --------------------------------------------------------

--
-- Table structure for table `pharm_orders`
--

CREATE TABLE `pharm_orders` (
  `POID` int(11) NOT NULL,
  `P_Bill` double NOT NULL,
  `Order_Date` date NOT NULL,
  `Pickup_Mode` enum('Delivery','Pickup') NOT NULL,
  `Payment` varchar(255) DEFAULT 'Mobile Money',
  `Network` enum('MTN','Vodafone','AirtelTigo') NOT NULL,
  `Momo_num` varchar(10) NOT NULL,
  `Location` varchar(255) NOT NULL,
  `Special_notes` text NOT NULL,
  `Nickname` varchar(255) NOT NULL,
  `PatientID` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `pharm_orders`
--

INSERT INTO `pharm_orders` (`POID`, `P_Bill`, `Order_Date`, `Pickup_Mode`, `Payment`, `Network`, `Momo_num`, `Location`, `Special_notes`, `Nickname`, `PatientID`) VALUES
(2, 26.2, '2021-04-28', 'Delivery', 'Mobile Money', 'MTN', '0240000000', 'airport mirage', 'Yellow House', 'Mely', 3),
(3, 46, '2021-04-29', 'Delivery', 'Mobile Money', 'MTN', '0240000000', 'Association International', 'Gray gate next to blue kiosk', 'Mela', 3);

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
-- Table structure for table `temp_bill`
--

CREATE TABLE `temp_bill` (
  `TB` int(11) NOT NULL,
  `Nick` varchar(255) NOT NULL,
  `Address` varchar(255) NOT NULL,
  `Pickup` enum('Pickup','Delivery') NOT NULL,
  `Network` enum('MTN','Vodafone','AirtelTigo') NOT NULL,
  `Momo_num` varchar(10) NOT NULL,
  `Snotes` text NOT NULL,
  `Bill` double NOT NULL,
  `Order_date` date NOT NULL,
  `PatientID` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `temp_bill`
--

INSERT INTO `temp_bill` (`TB`, `Nick`, `Address`, `Pickup`, `Network`, `Momo_num`, `Snotes`, `Bill`, `Order_date`, `PatientID`) VALUES
(12, 'Mely', 'airport mirage', 'Delivery', 'MTN', '0240000000', 'Yellow House', 26.2, '2021-04-28', 3),
(13, 'Mela', 'Association International', 'Delivery', 'MTN', '0240000000', 'Gray gate next to blue kiosk', 46, '2021-04-29', 3);

-- --------------------------------------------------------

--
-- Table structure for table `temp_cart`
--

CREATE TABLE `temp_cart` (
  `TC` int(11) NOT NULL,
  `PHD` int(11) NOT NULL,
  `PatientID` int(11) NOT NULL,
  `DATE` date NOT NULL,
  `Item_quantity` int(100) NOT NULL,
  `status` enum('Basket','Purchased') NOT NULL DEFAULT 'Basket'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `temp_cart`
--

INSERT INTO `temp_cart` (`TC`, `PHD`, `PatientID`, `DATE`, `Item_quantity`, `status`) VALUES
(1, 1, 3, '2021-04-27', 1, 'Purchased'),
(2, 2, 3, '2021-04-27', 1, 'Purchased'),
(13, 1, 3, '2021-04-29', 4, 'Purchased');

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

-- --------------------------------------------------------

--
-- Table structure for table `track_order`
--

CREATE TABLE `track_order` (
  `TID` int(11) NOT NULL,
  `POID` int(11) NOT NULL,
  `DelID` int(11) DEFAULT NULL,
  `Progress` enum('Pending','Processed','Picked','Route','Rejected','Delivered') NOT NULL DEFAULT 'Pending'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `track_order`
--

INSERT INTO `track_order` (`TID`, `POID`, `DelID`, `Progress`) VALUES
(1, 2, NULL, 'Pending'),
(3, 3, NULL, 'Pending');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin_one`
--
ALTER TABLE `admin_one`
  ADD PRIMARY KEY (`AdminID`),
  ADD UNIQUE KEY `nadmin` (`AdminNick`);

--
-- Indexes for table `booking`
--
ALTER TABLE `booking`
  ADD PRIMARY KEY (`BID`),
  ADD KEY `Doctor` (`Doctor`),
  ADD KEY `PatientID` (`PatientID`);

--
-- Indexes for table `chatbot`
--
ALTER TABLE `chatbot`
  ADD PRIMARY KEY (`MID`);

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
-- Indexes for table `Delivery`
--
ALTER TABLE `Delivery`
  ADD PRIMARY KEY (`DelID`);

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
-- Indexes for table `perm_cart`
--
ALTER TABLE `perm_cart`
  ADD PRIMARY KEY (`PC`),
  ADD KEY `POID` (`POID`),
  ADD KEY `TC` (`TC`);

--
-- Indexes for table `pharmacists`
--
ALTER TABLE `pharmacists`
  ADD PRIMARY KEY (`PharmID`);

--
-- Indexes for table `pharm_drugs`
--
ALTER TABLE `pharm_drugs`
  ADD PRIMARY KEY (`PHD`),
  ADD KEY `DID` (`DID`),
  ADD KEY `PharmID` (`PharmID`);

--
-- Indexes for table `pharm_orders`
--
ALTER TABLE `pharm_orders`
  ADD PRIMARY KEY (`POID`),
  ADD KEY `PatientID` (`PatientID`);

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
-- Indexes for table `temp_bill`
--
ALTER TABLE `temp_bill`
  ADD PRIMARY KEY (`TB`),
  ADD KEY `PatientID` (`PatientID`);

--
-- Indexes for table `temp_cart`
--
ALTER TABLE `temp_cart`
  ADD PRIMARY KEY (`TC`),
  ADD KEY `PHD` (`PHD`),
  ADD KEY `PatientID` (`PatientID`);

--
-- Indexes for table `testing_centre`
--
ALTER TABLE `testing_centre`
  ADD PRIMARY KEY (`CID`);

--
-- Indexes for table `track_order`
--
ALTER TABLE `track_order`
  ADD PRIMARY KEY (`TID`),
  ADD KEY `POID` (`POID`),
  ADD KEY `DelID` (`DelID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin_one`
--
ALTER TABLE `admin_one`
  MODIFY `AdminID` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `booking`
--
ALTER TABLE `booking`
  MODIFY `BID` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `chatbot`
--
ALTER TABLE `chatbot`
  MODIFY `MID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

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
  MODIFY `PatientID` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `Delivery`
--
ALTER TABLE `Delivery`
  MODIFY `DelID` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `diseases`
--
ALTER TABLE `diseases`
  MODIFY `ResponseID` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

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
  MODIFY `DID` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `perm_cart`
--
ALTER TABLE `perm_cart`
  MODIFY `PC` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `pharmacists`
--
ALTER TABLE `pharmacists`
  MODIFY `PharmID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `pharm_drugs`
--
ALTER TABLE `pharm_drugs`
  MODIFY `PHD` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `pharm_orders`
--
ALTER TABLE `pharm_orders`
  MODIFY `POID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

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
-- AUTO_INCREMENT for table `temp_bill`
--
ALTER TABLE `temp_bill`
  MODIFY `TB` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `temp_cart`
--
ALTER TABLE `temp_cart`
  MODIFY `TC` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `testing_centre`
--
ALTER TABLE `testing_centre`
  MODIFY `CID` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `track_order`
--
ALTER TABLE `track_order`
  MODIFY `TID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

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

--
-- Constraints for table `perm_cart`
--
ALTER TABLE `perm_cart`
  ADD CONSTRAINT `perm_cart_ibfk_1` FOREIGN KEY (`POID`) REFERENCES `pharm_orders` (`POID`),
  ADD CONSTRAINT `perm_cart_ibfk_2` FOREIGN KEY (`TC`) REFERENCES `temp_cart` (`TC`);

--
-- Constraints for table `pharm_drugs`
--
ALTER TABLE `pharm_drugs`
  ADD CONSTRAINT `pharm_drugs_ibfk_1` FOREIGN KEY (`DID`) REFERENCES `drugs` (`DID`),
  ADD CONSTRAINT `pharm_drugs_ibfk_2` FOREIGN KEY (`PharmID`) REFERENCES `pharmacists` (`PharmID`);

--
-- Constraints for table `pharm_orders`
--
ALTER TABLE `pharm_orders`
  ADD CONSTRAINT `pharm_orders_ibfk_1` FOREIGN KEY (`PatientID`) REFERENCES `customer` (`PatientID`);

--
-- Constraints for table `temp_bill`
--
ALTER TABLE `temp_bill`
  ADD CONSTRAINT `temp_bill_ibfk_1` FOREIGN KEY (`PatientID`) REFERENCES `customer` (`PatientID`);

--
-- Constraints for table `temp_cart`
--
ALTER TABLE `temp_cart`
  ADD CONSTRAINT `temp_cart_ibfk_1` FOREIGN KEY (`PHD`) REFERENCES `pharm_drugs` (`PHD`),
  ADD CONSTRAINT `temp_cart_ibfk_2` FOREIGN KEY (`PatientID`) REFERENCES `customer` (`PatientID`);

--
-- Constraints for table `track_order`
--
ALTER TABLE `track_order`
  ADD CONSTRAINT `track_order_ibfk_1` FOREIGN KEY (`POID`) REFERENCES `pharm_orders` (`POID`),
  ADD CONSTRAINT `track_order_ibfk_2` FOREIGN KEY (`DelID`) REFERENCES `Delivery` (`DelID`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
