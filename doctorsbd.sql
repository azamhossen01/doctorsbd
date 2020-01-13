-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 14, 2018 at 04:30 PM
-- Server version: 10.1.37-MariaDB
-- PHP Version: 7.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `doctorsbd`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `cell` varchar(20) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `name`, `email`, `cell`, `password`) VALUES
(1, 'Admin', 'admin@gmail.com', '01672902634', '1234');

-- --------------------------------------------------------

--
-- Table structure for table `ambulance`
--

CREATE TABLE `ambulance` (
  `id` int(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `address` varchar(255) NOT NULL,
  `division` varchar(255) NOT NULL,
  `cell` varchar(20) NOT NULL,
  `type` varchar(255) NOT NULL,
  `ambulance_type` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `ambulance`
--

INSERT INTO `ambulance` (`id`, `name`, `address`, `division`, `cell`, `type`, `ambulance_type`) VALUES
(1, 'National Amulance Service', 'O.R Nizam Road,Chittagong', 'Chittagong', '01833078600', 'Private', 'AC'),
(2, 'Metro Amulance Service', 'O.R Nizam Road,Chittagong', 'Chittagong', '01833078600', 'Private', 'NON-AC'),
(3, 'Dhaka Metro Ambulance', 'Firmgate, Dhaka', 'Dhaka', '1778001401', 'Public', 'AC');

-- --------------------------------------------------------

--
-- Table structure for table `blood_donor`
--

CREATE TABLE `blood_donor` (
  `id` int(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `gender` varchar(20) NOT NULL,
  `address` varchar(255) NOT NULL,
  `division` varchar(255) NOT NULL,
  `blood_group` varchar(20) NOT NULL,
  `cell` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `blood_donor`
--

INSERT INTO `blood_donor` (`id`, `name`, `gender`, `address`, `division`, `blood_group`, `cell`) VALUES
(1, 'Noor Mohammed Anik', 'Male', 'Agrabad,Chittagong', 'Chittagong', 'A+', '01778001401'),
(2, 'Abu Naser', 'Male', 'Firmgate,Dhaka', 'Dhaka', 'A+', '01751966056'),
(3, 'Rakib Uddin', 'Male', 'Chwak Bazar,Chittagong', 'Chittagong', 'B+', '01751966057'),
(4, 'Anik', 'Male', '7th Floor,Chowdhury Center,Muradpur', 'Chittagong', 'A+', '01672902634');

-- --------------------------------------------------------

--
-- Table structure for table `contact`
--

CREATE TABLE `contact` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `cell_1` varchar(20) NOT NULL,
  `cell_2` varchar(20) NOT NULL,
  `email` varchar(255) NOT NULL,
  `address` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `doctors`
--

CREATE TABLE `doctors` (
  `id` int(255) NOT NULL,
  `first_name` varchar(255) NOT NULL,
  `last_name` varchar(255) NOT NULL,
  `gender` varchar(20) NOT NULL,
  `speciality` varchar(255) NOT NULL,
  `category_id` int(255) NOT NULL,
  `degree` varchar(255) NOT NULL,
  `days` varchar(255) NOT NULL,
  `schedule` varchar(255) NOT NULL,
  `general_fee` int(20) NOT NULL,
  `new_fee` int(20) NOT NULL,
  `description` text NOT NULL,
  `division` varchar(20) NOT NULL,
  `country` varchar(255) NOT NULL,
  `address` varchar(255) NOT NULL,
  `cell` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `is_featured` int(10) NOT NULL,
  `status` int(2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `doctors`
--

INSERT INTO `doctors` (`id`, `first_name`, `last_name`, `gender`, `speciality`, `category_id`, `degree`, `days`, `schedule`, `general_fee`, `new_fee`, `description`, `division`, `country`, `address`, `cell`, `email`, `password`, `is_featured`, `status`) VALUES
(1, 'Noor Mohammed', 'Anik', 'Male', 'Medicine', 101, 'MBBS,FCFS', 'Sun Day To Thurs Day', '7PM-10PM', 500, 700, 'Sed pretium, ligula sollicitudin laoreet viverra, tortor libero sodales leo, eget blandit nunc tortor eu nibh. Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Phasellus hendrerit. Pellentesque aliquet nibh nec urna. In nisi neque, aliquet vel, dapibus id, mattis vel, nisi. Nullam mollis. Phasellus hendrerit. Pellentesque aliquet nibh nec urna. In nisi neque, aliquet vel, dapi.', 'Chittagong', 'Bangladesh', 'Eidgah,Dewanhat,Chittagong', '01672902634', 'noormohammedanik@gmail.com', '1234', 1, 0),
(2, 'Md. Rakib', 'Uddin', 'Male', 'Dental', 106, 'BDS', 'Sun Day To Thurs Day', '6PM-11PM', 600, 1000, 'Sed pretium, ligula sollicitudin laoreet viverra, tortor libero sodales leo, eget blandit nunc tortor eu nibh. Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Phasellus hendrerit. Pellentesque aliquet nibh nec urna. In nisi neque, aliquet vel, dapibus id, mattis vel, nisi. Nullam mollis. Phasellus hendrerit. Pellentesque aliquet nibh nec urna. In nisi neque, aliquet vel, dapi.', 'Chittagong', 'Bangladesh', 'O.R Nizam Road,GEC,Chittagong', '01778001401', 'noormohammedanik@gmail.com', '1234', 0, 0),
(3, 'M.A Hasan', 'Mahamud', 'Male', 'Medicine', 101, 'MBBS,FCPS', 'Sun Day To Thurs Day', '6PM-11PM', 500, 700, 'Sed pretium, ligula sollicitudin laoreet viverra, tortor libero sodales leo, eget blandit nunc tortor eu nibh. Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Phasellus hendrerit. Pellentesque aliquet nibh nec urna. In nisi neque, aliquet vel, dapibus id, mattis vel, nisi. Nullam mollis. Phasellus hendrerit. Pellentesque aliquet nibh nec urna. In nisi neque, aliquet vel, dapi.', 'Chittagong', 'Bangladesh', 'Eidgah,Dewanhat,Chittagong', '01672902634', 'noormohammedanik@gmail.com', '1234', 0, 0),
(4, 'Sunny Deb', 'Nath', 'Male', 'Dental', 106, 'BDS', 'Sun Day To Thurs Day', '6PM-11PM', 500, 700, 'Sed pretium, ligula sollicitudin laoreet viverra, tortor libero sodales leo, eget blandit nunc tortor eu nibh. Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Phasellus hendrerit. Pellentesque aliquet nibh nec urna. In nisi neque, aliquet vel, dapibus id, mattis vel, nisi. Nullam mollis. Phasellus hendrerit. Pellentesque aliquet nibh nec urna. In nisi neque, aliquet vel, dapi.', 'Chittagong', 'Bangladesh', 'O.R Nizam Road,GEC,Chittagong', '01778001401', 'noormohammedanik@gmail.com', '1234', 1, 0),
(6, 'Rakib', 'Hassan', 'Male', 'Dental', 106, 'BDS', 'Sun Day To Thurs Day', '6PM-11PM', 500, 600, 'Sed pretium, ligula sollicitudin laoreet viverra, tortor libero sodales leo, eget blandit nunc tortor eu nibh. Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Phasellus hendrerit. Pellentesque aliquet nibh nec urna. In nisi neque, aliquet vel, dapibus id, mattis vel, nisi. Nullam mollis. Phasellus hendrerit. Pellentesque aliquet nibh nec urna. In nisi neque, aliquet vel, dapi.', 'Chittagong', 'Bangladesh', 'O.R Nizam Road,GEC,Chittagong', '01778001401', 'noormohammedanik@gmail.com', '1234', 1, 0),
(7, 'Mohammad', 'Shahid', 'Male', 'Medicine', 101, 'MBBS', 'Sun Day To Thurs Day', '6PM-11PM', 500, 700, 'Sed pretium, ligula sollicitudin laoreet viverra, tortor libero sodales leo, eget blandit nunc tortor eu nibh. Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Phasellus hendrerit. Pellentesque aliquet nibh nec urna. In nisi neque, aliquet vel, dapibus id, mattis vel, nisi. Nullam mollis. Phasellus hendrerit. Pellentesque aliquet nibh nec urna. In nisi neque, aliquet vel, dapi.', 'Chittagong', 'Bangladesh', 'Eidgah,Dewanhat,Chittagong', '01672902634', 'noormohammedanik@gmail.com', '1234', 0, 0),
(8, 'Imtiaz', 'Hassan', 'Male', 'Dental', 106, 'BDS', 'Sun Day To Thurs Day', '6PM-11PM', 500, 700, 'Sed pretium, ligula sollicitudin laoreet viverra, tortor libero sodales leo, eget blandit nunc tortor eu nibh. Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Phasellus hendrerit. Pellentesque aliquet nibh nec urna. In nisi neque, aliquet vel, dapibus id, mattis vel, nisi. Nullam mollis. Phasellus hendrerit. Pellentesque aliquet nibh nec urna. In nisi neque, aliquet vel, dapi.', 'Chittagong', 'Bangladesh', 'O.R Nizam Road,GEC,Chittagong', '01778001401', 'noormohammedanik@gmail.com', '1234', 0, 0),
(9, 'Najifa ', 'Anjum', 'Female', 'Medicine', 101, 'MBBS,FCFS', 'Sun Day To Thurs Day', '6PM-11PM', 500, 800, 'Sed pretium, ligula sollicitudin laoreet viverra, tortor libero sodales leo, eget blandit nunc tortor eu nibh. Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Phasellus hendrerit. Pellentesque aliquet nibh nec urna. In nisi neque, aliquet vel, dapibus id, mattis vel, nisi. Nullam mollis. Phasellus hendrerit. Pellentesque aliquet nibh nec urna. In nisi neque, aliquet vel, dapi.', 'Chittagong', 'Bangladesh', 'Eidgah,Dewanhat,Chittagong', '01672902634', 'najifa.anjum@gmail.com', '1234', 1, 0),
(12, 'Noor', 'Anik', 'Male', 'Medicinne', 101, 'MBBS', 'SAT-THURS Day', '7PM-10PM', 400, 500, 'Description', 'Chittagong', 'Bangladesh', 'Agrabad', '01672902634', 'noormohammedanik@gmail.com', '', 0, 0);

-- --------------------------------------------------------

--
-- Table structure for table `doctor_advice`
--

CREATE TABLE `doctor_advice` (
  `id` int(255) NOT NULL,
  `doctor_name` varchar(255) NOT NULL,
  `speciality` varchar(255) NOT NULL,
  `title` text NOT NULL,
  `description` text NOT NULL,
  `date` date NOT NULL,
  `time` time NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `doctor_advice`
--

INSERT INTO `doctor_advice` (`id`, `doctor_name`, `speciality`, `title`, `description`, `date`, `time`) VALUES
(1, 'Noor Mohammed Anik', 'Medicine', 'How to get Balanced Health', 'Sed pretium, ligula sollicitudin laoreet viverra, tortor libero sodales leo, eget blandit nunc tortor eu nibh. Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Phasellus hendrerit. Pellentesque aliquet nibh nec urna. In nisi neque, aliquet vel, dapibus id, mattis vel, nisi. Nullam mollis. Phasellus hendrerit. Pellentesque aliquet nibh nec urna. In nisi neque, aliquet vel, dapi.', '2018-11-30', '01:06:00'),
(2, 'Noor Mohammed Anik', 'Medicine', 'How to get Balanced Health', 'Sed pretium, ligula sollicitudin laoreet viverra, tortor libero sodales leo, eget blandit nunc tortor eu nibh. Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Phasellus hendrerit. Pellentesque aliquet nibh nec urna. In nisi neque, aliquet vel, dapibus id, mattis vel, nisi. Nullam mollis. Phasellus hendrerit. Pellentesque aliquet nibh nec urna. In nisi neque, aliquet vel, dapi.', '2018-11-30', '01:06:00');

-- --------------------------------------------------------

--
-- Table structure for table `doctor_category`
--

CREATE TABLE `doctor_category` (
  `id` int(255) NOT NULL,
  `category_name` varchar(255) NOT NULL,
  `category_id` int(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `doctor_category`
--

INSERT INTO `doctor_category` (`id`, `category_name`, `category_id`) VALUES
(1, 'Medicine', 101),
(2, 'Cardiologist', 102),
(3, 'Orthopedis', 103),
(4, 'Blood Specialist', 104),
(5, 'Eye Specialist', 105),
(6, 'Dentist', 106),
(7, 'Surgery', 107),
(8, 'Piscologist', 108),
(9, 'Others', 109);

-- --------------------------------------------------------

--
-- Table structure for table `hospitals`
--

CREATE TABLE `hospitals` (
  `id` int(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `address` varchar(255) NOT NULL,
  `division` varchar(255) NOT NULL,
  `cell` varchar(20) NOT NULL,
  `email` varchar(255) NOT NULL,
  `type` varchar(255) NOT NULL,
  `description` text NOT NULL,
  `facility` text NOT NULL,
  `time` varchar(255) NOT NULL,
  `days` varchar(255) NOT NULL,
  `general_bed` int(202) NOT NULL,
  `cabin` int(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `hospitals`
--

INSERT INTO `hospitals` (`id`, `name`, `address`, `division`, `cell`, `email`, `type`, `description`, `facility`, `time`, `days`, `general_bed`, `cabin`) VALUES
(1, 'National Hospital', 'O.R Nizam Road, Chittagong', 'Chittagong', '01778001401', 'national@gmail.com', 'Private', 'Sed pretium, ligula sollicitudin laoreet viverra, tortor libero sodales leo, eget blandit nunc tortor eu nibh. Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Phasellus hendrerit. Pellentesque aliquet nibh nec urna. In nisi neque, aliquet vel, dapibus id, mattis vel, nisi. Nullam mollis. Phasellus hendrerit. Pellentesque aliquet nibh nec urna. In nisi neque, aliquet vel, dapi.', 'Sed pretium, ligula sollicitudin laoreet viverra, tortor libero sodales leo, eget blandit nunc tortor eu nibh. Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Phasellus hendrerit. Pellentesque aliquet nibh nec urna. In nisi neque, aliquet vel, dapibus id, mattis vel, nisi. Nullam mollis. Phasellus hendrerit. Pellentesque aliquet nibh nec urna. In nisi neque, aliquet vel, dapi.', '9AM-10PM', 'Sun -Wed Day', 50, 100),
(2, 'Metropoliton Hospital', 'O.R Nizam Road, Chittagong', 'Chittagong', '01778001401', 'national@gmail.com', 'Private', 'Sed pretium, ligula sollicitudin laoreet viverra, tortor libero sodales leo, eget blandit nunc tortor eu nibh. Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Phasellus hendrerit. Pellentesque aliquet nibh nec urna. In nisi neque, aliquet vel, dapibus id, mattis vel, nisi. Nullam mollis. Phasellus hendrerit. Pellentesque aliquet nibh nec urna. In nisi neque, aliquet vel, dapi.', 'Sed pretium, ligula sollicitudin laoreet viverra, tortor libero sodales leo, eget blandit nunc tortor eu nibh. Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Phasellus hendrerit. Pellentesque aliquet nibh nec urna. In nisi neque, aliquet vel, dapibus id, mattis vel, nisi. Nullam mollis. Phasellus hendrerit. Pellentesque aliquet nibh nec urna. In nisi neque, aliquet vel, dapi.', '9AM-10PM', 'Sun -Wed Day', 40, 20),
(3, 'Chittagong Medical', 'Chawk Bazar, Chittagong', 'Chittagong', '01778001401', 'national@gmail.com', 'Public', 'Sed pretium, ligula sollicitudin laoreet viverra, tortor libero sodales leo, eget blandit nunc tortor eu nibh. Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Phasellus hendrerit. Pellentesque aliquet nibh nec urna. In nisi neque, aliquet vel, dapibus id, mattis vel, nisi. Nullam mollis. Phasellus hendrerit. Pellentesque aliquet nibh nec urna. In nisi neque, aliquet vel, dapi.', 'Sed pretium, ligula sollicitudin laoreet viverra, tortor libero sodales leo, eget blandit nunc tortor eu nibh. Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Phasellus hendrerit. Pellentesque aliquet nibh nec urna. In nisi neque, aliquet vel, dapibus id, mattis vel, nisi. Nullam mollis. Phasellus hendrerit. Pellentesque aliquet nibh nec urna. In nisi neque, aliquet vel, dapi.', '9AM-10PM', 'Sun -Wed Day', 60, 30),
(5, 'Dhaka Hospital Ltd', 'Firmgate, Dhaka', 'Dhaka', '01672902634', 'noormohammedanik@gmail.com', 'Private', 'Description', 'Facility', '10AM-11AM', 'SAT-THURS Day', 30, 20);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `ambulance`
--
ALTER TABLE `ambulance`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `blood_donor`
--
ALTER TABLE `blood_donor`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `doctors`
--
ALTER TABLE `doctors`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `doctor_advice`
--
ALTER TABLE `doctor_advice`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `doctor_category`
--
ALTER TABLE `doctor_category`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `category_id` (`category_id`);

--
-- Indexes for table `hospitals`
--
ALTER TABLE `hospitals`
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
-- AUTO_INCREMENT for table `ambulance`
--
ALTER TABLE `ambulance`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `blood_donor`
--
ALTER TABLE `blood_donor`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `doctors`
--
ALTER TABLE `doctors`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `doctor_advice`
--
ALTER TABLE `doctor_advice`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `doctor_category`
--
ALTER TABLE `doctor_category`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `hospitals`
--
ALTER TABLE `hospitals`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
