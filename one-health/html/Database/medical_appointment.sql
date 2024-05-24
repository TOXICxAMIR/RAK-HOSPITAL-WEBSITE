-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 24, 2023 at 09:30 PM
-- Server version: 10.1.38-MariaDB
-- PHP Version: 7.2.16

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `medical_appointment`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`username`, `password`) VALUES
('admin', '1234');

-- --------------------------------------------------------

--
-- Table structure for table `appointment`
--

CREATE TABLE `appointment` (
  `id` int(11) NOT NULL,
  `patient_no` varchar(255) NOT NULL,
  `doctor_speciality` varchar(255) NOT NULL,
  `doctor_name` varchar(255) NOT NULL,
  `appdate` varchar(255) NOT NULL,
  `apptime` time NOT NULL,
  `symptoms` varchar(255) NOT NULL,
  `date_registered` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `appointment`
--

INSERT INTO `appointment` (`id`, `patient_no`, `doctor_speciality`, `doctor_name`, `appdate`, `apptime`, `symptoms`, `date_registered`) VALUES
(9, 'RAK567', 'Cardiology', 'Dr Santhini John', '2019-05-22', '14:12:00', 'OK', '2019-05-26 12:12:21'),
(17, 'RAK234', 'Dentist', 'Dr Magdy Thelad', '2019-05-31', '11:27:00', 'dizy', '2019-05-28 09:27:48'),
(18, 'RAK234', 'Accidents', 'Dr Magdy Thelad', '2019-05-15', '18:24:00', 'TEST', '2019-05-28 18:25:34'),
(19, 'RAK234', 'Dentist', 'Dr Abdurrahman Maihula', '2023-02-17', '12:49:00', 'SDHDSHJ', '2023-02-11 19:50:01'),
(21, '', 'Cardiology', 'Dr Abdurrahman Maihula ', '2023-04-18', '11:08:00', 'Sleeeep', '2023-04-18 09:08:52'),
(22, 'ww', 'Cardiology', 'Dr Abdurrahman Maihula ', '2023-04-13', '11:15:00', 'gym', '2023-04-18 09:15:25'),
(24, 'Maihula', 'Dentist', 'Dr Abdurrahman Maihula ', '2023-04-25', '16:20:00', 'Homw', '2023-04-19 16:21:12'),
(26, 'Maihula', 'Dentist', 'Dr Santhini John', '2023-04-24', '21:27:00', 'walk', '2023-04-24 19:27:48');

-- --------------------------------------------------------

--
-- Table structure for table `doctors`
--

CREATE TABLE `doctors` (
  `id` int(11) NOT NULL,
  `fullname` varchar(255) NOT NULL,
  `speciality` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `phone_number` int(11) NOT NULL,
  `profile` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `image` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `doctors`
--

INSERT INTO `doctors` (`id`, `fullname`, `speciality`, `email`, `phone_number`, `profile`, `password`, `image`) VALUES
(1, 'Dr Abdurrahman Maihula ', 'Cardiology', 'waleedmaihula@gmail.com', 563037724, 'A specialized doctor with 10 years of experience in the medical industry.', '1234', 'images/pi_image1_19959598.png'),
(2, 'Dr Santhini John', 'Dentist', 'snt@yahoo.com', 23455677, '10 years of experience', '12345', 'images/Dr-Santhini-John.jpg'),
(3, 'Dr Magdy Thelad', 'Accidents', 'ss@gmail.com', 9712233, '20 Years of experience ', '1234', 'images/mag.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `drug`
--

CREATE TABLE `drug` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `barcode` int(11) NOT NULL,
  `insured` varchar(255) NOT NULL,
  `status` varchar(255) NOT NULL,
  `price` int(11) NOT NULL,
  `quantity` int(11) NOT NULL,
  `Registered_By` varchar(255) NOT NULL,
  `date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `drug`
--

INSERT INTO `drug` (`id`, `name`, `barcode`, `insured`, `status`, `price`, `quantity`, `Registered_By`, `date`) VALUES
(2, 'Amoxil', 33333, 'yes', 'Available', 230, 400, 'Aisha Salisu', '2019-05-09'),
(3, 'VitaminC', 4444, 'No', 'Available', 30, 500, 'Halima Alliyu', '2019-05-09'),
(4, 'Amalar', 3333, 'Yes', 'Available', 200, 100, 'Aisha Salisu', '2019-05-26'),
(5, 'ccc', 444, 'No', 'unAvailable', 90, 600, 'Aisha Salisu', '2019-05-28');

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE `orders` (
  `id` int(11) NOT NULL,
  `drug_name` varchar(255) NOT NULL,
  `quantity` int(11) NOT NULL,
  `address` varchar(255) NOT NULL,
  `patient` varchar(255) NOT NULL,
  `date` date NOT NULL,
  `status` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `orders`
--

INSERT INTO `orders` (`id`, `drug_name`, `quantity`, `address`, `patient`, `date`, `status`) VALUES
(1, 'BB', 77, 'FF', 'EE', '2019-05-08', ''),
(2, 'GHB', 556, 'RFGTHYJ', 'RAK234', '2019-05-16', ''),
(3, 'Ttt', 22, 'Ffff', 'RAK234', '2019-05-16', ''),
(4, 'Vitamin C', 20, 'RAK', 'RAK234', '2019-05-17', ''),
(5, 'panadol', 50, 'RAK', 'RAK567', '2019-05-26', ''),
(7, 'NNN', 30, 'NNN', 'RAK234', '2019-05-27', ''),
(8, 'vitamin', 50, 'Dubai', 'RAK234', '2019-05-28', ''),
(9, 'panadol', 80, 'RAK MALL', 'RAK234', '2019-05-28', ''),
(10, 'BBBB', 22, 'DD', 'RAK234', '2020-05-31', ''),
(11, 'VITAMIN C', 20, 'RAK', 'ww', '2023-04-18', ''),
(12, 'VITAMIN', 3, 'jjj', 'Maihula', '2023-04-24', ''),
(13, 'AMALAR', 3, 'RAK', 'Maihula', '2023-04-24', '');

-- --------------------------------------------------------

--
-- Table structure for table `patient`
--

CREATE TABLE `patient` (
  `id` int(11) NOT NULL,
  `rak_no` varchar(255) NOT NULL,
  `fullname` varchar(255) NOT NULL,
  `phone_number` int(11) NOT NULL,
  `email` varchar(255) NOT NULL,
  `address` varchar(255) NOT NULL,
  `gender` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `patient`
--

INSERT INTO `patient` (`id`, `rak_no`, `fullname`, `phone_number`, `email`, `address`, `gender`) VALUES
(1, 'RAK123', 'Musa Nuhu', 2147483647, 'aam@gmail.com', 'Rak', 'Male'),
(6, 'RAK234', 'Aliyu Hamisu', 223344, 'aas@gmail.com', 'KD', 'Male'),
(7, 'RAK567', 'Ibrahim Salis', 223344, 'ib3@gmail.com', 'JOS', 'Male');

-- --------------------------------------------------------

--
-- Table structure for table `pharmacist`
--

CREATE TABLE `pharmacist` (
  `id` int(11) NOT NULL,
  `fullname` varchar(255) NOT NULL,
  `phone_number` int(11) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `pharmacist`
--

INSERT INTO `pharmacist` (`id`, `fullname`, `phone_number`, `email`, `password`) VALUES
(1, 'Aisha Salisu', 234998822, 'aas@yahoo.com', '1234'),
(2, 'Halima Alliyu', 22334455, 'ahh@gmail.com', '1234'),
(3, 'Ahmad Khairi', 563680, 'ghu@gmail.com', '1234');

-- --------------------------------------------------------

--
-- Table structure for table `report`
--

CREATE TABLE `report` (
  `id` int(11) NOT NULL,
  `patient_no` varchar(255) NOT NULL,
  `doctor_name` varchar(255) NOT NULL,
  `diagnosis` varchar(255) NOT NULL,
  `psyc_status` varchar(255) NOT NULL,
  `chronic_disease` varchar(255) NOT NULL,
  `medications` varchar(255) NOT NULL,
  `advice` varchar(255) NOT NULL,
  `date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `report`
--

INSERT INTO `report` (`id`, `patient_no`, `doctor_name`, `diagnosis`, `psyc_status`, `chronic_disease`, `medications`, `advice`, `date`) VALUES
(1, 'RAK234', 'Dr Abdurrahman Maihula', 'Frequent Eating', 'Cooperative', 'None', 'Panadol, DOSAGE 100ml', 'Sleep Properly', '2019-05-08'),
(2, 'RAK234', 'Dr Magdy Thelad', 'Diabetis', 'Cooperative', 'None', 'palmol', 'Take proper diet', '2019-05-28'),
(3, 'RAK234', 'Dr Magdy Thelad', 'Cancer', 'Cooperative', 'None', 'Vitamin', 'work properly', '2019-05-28'),
(4, 'ww', 'Dr Abdurrahman Maihula ', 'yy', 'good', 'no', 'vitamin', 'sleep well', '2023-04-18'),
(5, 'maihula', 'Dr Abdurrahman Maihula ', 'cancer', 'positive', 'no', 'Vitamin and amalar', 'Please sleep at least 6 hours day and night', '2023-04-24');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `password`, `email`) VALUES
(3, 'RAK234', '81dc9bdb52d04dc20036dbd8313ed055', 'aas@gmail.com'),
(4, 'RAK567', '81dc9bdb52d04dc20036dbd8313ed055', 'ib3@gmail.com'),
(6, 'RAK123', '81dc9bdb52d04dc20036dbd8313ed055', 'aam@gmail.com'),
(7, 'ww', '1234', 'qq@gmail.com'),
(8, 'Maihula', '1234', 'waleedmaihula@gmail.com');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `appointment`
--
ALTER TABLE `appointment`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `doctors`
--
ALTER TABLE `doctors`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `drug`
--
ALTER TABLE `drug`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `patient`
--
ALTER TABLE `patient`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `pat_no` (`rak_no`);

--
-- Indexes for table `pharmacist`
--
ALTER TABLE `pharmacist`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `report`
--
ALTER TABLE `report`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `username` (`username`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `appointment`
--
ALTER TABLE `appointment`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;

--
-- AUTO_INCREMENT for table `doctors`
--
ALTER TABLE `doctors`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `drug`
--
ALTER TABLE `drug`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `orders`
--
ALTER TABLE `orders`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `patient`
--
ALTER TABLE `patient`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `pharmacist`
--
ALTER TABLE `pharmacist`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `report`
--
ALTER TABLE `report`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
