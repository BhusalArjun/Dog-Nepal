-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 14, 2022 at 12:51 PM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 8.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `dog`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` int(11) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `email`, `password`) VALUES
(1, 'samunatamang@gmail.com', '3fb820a6c818c0f666f1d4ff75034653');

-- --------------------------------------------------------

--
-- Table structure for table `adopter`
--

CREATE TABLE `adopter` (
  `id` int(255) NOT NULL,
  `name` text NOT NULL,
  `email` varchar(255) NOT NULL,
  `contactnumber` int(255) NOT NULL,
  `location` varchar(255) NOT NULL,
  `message` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `adopter`
--

INSERT INTO `adopter` (`id`, `name`, `email`, `contactnumber`, `location`, `message`) VALUES
(17, 'Arjun Bhusal', 'rhythemechristthelion@gmail.com', 2147483647, 'Kapan', '            Why you want to adopt..\r\n      ');

-- --------------------------------------------------------

--
-- Table structure for table `donor`
--

CREATE TABLE `donor` (
  `id` int(11) NOT NULL,
  `dog_name` varchar(255) NOT NULL,
  `dog_breed` varchar(255) NOT NULL,
  `dog_age` int(255) NOT NULL,
  `dog_gender` text NOT NULL,
  `describ` varchar(255) NOT NULL,
  `location` varchar(255) NOT NULL,
  `owner_name` varchar(255) NOT NULL,
  `owner_email` varchar(255) NOT NULL,
  `owner_number` int(255) NOT NULL,
  `dog_image1` varchar(255) NOT NULL,
  `dog_image2` varchar(255) NOT NULL,
  `dog_image3` varchar(255) NOT NULL,
  `status` enum('REQUEST','APPROVE') DEFAULT NULL,
  `remarks` enum('AVAILABLE','PENDING') DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `donor`
--

INSERT INTO `donor` (`id`, `dog_name`, `dog_breed`, `dog_age`, `dog_gender`, `describ`, `location`, `owner_name`, `owner_email`, `owner_number`, `dog_image1`, `dog_image2`, `dog_image3`, `status`, `remarks`) VALUES
(17, 'i amd og', 'Spitz', 2, 'Male', ' Hi is helpful ', 'Chabahil', 'Milan Parajuli', 'milan@gmail.com', 2147483647, '9.1.jpg', '9.2.jpg', '9.3.jpg', 'APPROVE', 'PENDING'),
(18, 'Kali', 'Laborder', 2, 'Male', ' c zxcxzcxzc zx', 'Kapan', 'Thapa Bhai', 'rhythemechristthelion@gmail.com', 2147483647, '6.1.jpg', '6.2.jpg', '6.3.jpg', 'APPROVE', 'PENDING'),
(19, 'Seti', 'Laborder', 2, 'Male', ' the dog is sometimes helful', 'Chakrapath', 'Sanjay Khatri', 'sanjay@gmail.com', 2147483647, '10.1.jpg', '10.2.jpg', '10.3.jpg', 'APPROVE', 'PENDING'),
(20, 'Kali', 'Spitz', 2, 'Male', ' i want to give for donation', 'Kapan', 'Samuna', 'samina@gmail.com', 2147483647, '1.1.jpg', '1.2.jpg', '1.3.jpg', 'APPROVE', 'PENDING');

-- --------------------------------------------------------

--
-- Table structure for table `finderlostdog`
--

CREATE TABLE `finderlostdog` (
  `id` int(255) NOT NULL,
  `name` text NOT NULL,
  `email` varchar(255) NOT NULL,
  `contactnumber` int(255) NOT NULL,
  `location` varchar(255) NOT NULL,
  `message` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `finderlostdog`
--

INSERT INTO `finderlostdog` (`id`, `name`, `email`, `contactnumber`, `location`, `message`) VALUES
(1, '[arjun]', '[arjun@gmail.com]', 0, '[chunikhel]', '[yeah i have find it acually]');

-- --------------------------------------------------------

--
-- Table structure for table `lostdogowner`
--

CREATE TABLE `lostdogowner` (
  `id` int(11) NOT NULL,
  `dog_name` text NOT NULL,
  `dog_breed` text NOT NULL,
  `dog_age` int(255) NOT NULL,
  `dog_gender` text NOT NULL,
  `describ` varchar(255) NOT NULL,
  `location` varchar(255) NOT NULL,
  `reward` varchar(255) NOT NULL,
  `owner_name` text NOT NULL,
  `owner_email` varchar(255) NOT NULL,
  `owner_number` int(255) NOT NULL,
  `dog_image1` varchar(255) NOT NULL,
  `dog_image2` varchar(255) NOT NULL,
  `dog_image3` varchar(255) NOT NULL,
  `remarks` enum('AVAILABLE','PENDING') DEFAULT NULL,
  `status` enum('REQUEST','APPROVE') DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `lostdogowner`
--

INSERT INTO `lostdogowner` (`id`, `dog_name`, `dog_breed`, `dog_age`, `dog_gender`, `describ`, `location`, `reward`, `owner_name`, `owner_email`, `owner_number`, `dog_image1`, `dog_image2`, `dog_image3`, `remarks`, `status`) VALUES
(4, 'Kali', 'Laborder', 2, 'Male', 'he has wear white belt.Please contact me', 'Kapan', '1000', 'Arjun Bhusal', 'rhythemechristthelion@gmail.com', 2147483647, '10.1.jpg', '10.2.jpg', '10.3.jpg', 'AVAILABLE', 'APPROVE');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `adopter`
--
ALTER TABLE `adopter`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `donor`
--
ALTER TABLE `donor`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `finderlostdog`
--
ALTER TABLE `finderlostdog`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `lostdogowner`
--
ALTER TABLE `lostdogowner`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `donor`
--
ALTER TABLE `donor`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT for table `lostdogowner`
--
ALTER TABLE `lostdogowner`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `finderlostdog`
--
ALTER TABLE `finderlostdog`
  ADD CONSTRAINT `finderlostdog_ibfk_1` FOREIGN KEY (`id`) REFERENCES `admin` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
