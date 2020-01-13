-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Jan 13, 2020 at 01:30 AM
-- Server version: 10.1.43-MariaDB-cll-lve
-- PHP Version: 7.2.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `anikncnm_affable`
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
  `password` varchar(255) NOT NULL,
  `timestamp` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `name`, `email`, `cell`, `password`, `timestamp`) VALUES
(1, 'Noor Mohammed Anik', 'noormohammedanik@gmail.com', '01672902634', '131051', '2019-02-25 08:33:35');

-- --------------------------------------------------------

--
-- Table structure for table `news`
--

CREATE TABLE `news` (
  `id` int(11) NOT NULL,
  `title` varchar(255) NOT NULL,
  `description` text NOT NULL,
  `link` varchar(255) NOT NULL,
  `mode` int(5) NOT NULL,
  `timestamp` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `news`
--

INSERT INTO `news` (`id`, `title`, `description`, `link`, `mode`, `timestamp`) VALUES
(1, 'Affable Technology developed doctorsinfo24.com website', 'DoctorsInfo24.com is a online platforms where you can easily find specialist doctors,hospital information,ambulance information,emergency blood donors, doctor advice etc.', 'https://affabletechnology.com/works/doctorsinfo24-com-website/', 1, '2019-04-29 08:21:18');

-- --------------------------------------------------------

--
-- Table structure for table `students`
--

CREATE TABLE `students` (
  `id` int(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `fathers_name` varchar(255) NOT NULL,
  `mothers_name` varchar(255) NOT NULL,
  `gender` varchar(20) NOT NULL,
  `institution` varchar(255) NOT NULL,
  `cell` varchar(20) NOT NULL,
  `email` varchar(255) NOT NULL,
  `address` varchar(255) NOT NULL,
  `course_name` varchar(255) NOT NULL,
  `course_code` varchar(20) NOT NULL,
  `batch_no` varchar(20) NOT NULL,
  `password` varchar(255) NOT NULL,
  `mode` int(2) NOT NULL,
  `timestamp` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `students`
--

INSERT INTO `students` (`id`, `name`, `fathers_name`, `mothers_name`, `gender`, `institution`, `cell`, `email`, `address`, `course_name`, `course_code`, `batch_no`, `password`, `mode`, `timestamp`) VALUES
(1, 'Anik', 'Akhter Hossain', 'Shaheen Akter', 'Male', 'IIUC', '01889193509', 'noormohammedanik@gmail.com', 'Eidgah,Chittagong ', 'Professional Android Apps Development', '101', '01', '1234', 1, '2019-04-29 08:21:18'),
(2, 'Ummey Hani Tanin', 'N/A', 'N/A', 'Female', 'IIUC', '01857436468', 'uh6468tanin@gmail.com', 'Chawkbazar', 'Professional Android Apps Development', '101', '01', '1234', 1, '2019-02-25 14:38:34'),
(3, 'Atia Jahan', 'N/A', 'N/A', 'Female', 'IIUC', '01683094724', 'atiahuny@gmail.com', 'Chandagao,Chittagong', 'Professional Android Apps Development', '101', '01', '1244', 1, '2019-02-25 14:33:34'),
(4, 'Sajib Chakraborty', 'N/A', 'N/A', 'Male', 'IIUC', '01866602715', 'sajibchajrabort24@gmail.com', 'Katalgonj, Chittagong', 'Professional Android Apps Development', '101', '01', '1234', 1, '2019-02-25 14:33:39'),
(5, 'Motaharin Rova', 'N/A', 'N/A', 'Female', 'IIUC', '01831758799', 'riva@gmail.com', 'GEC', 'Professional Android Apps Development', '101', '01', '1234', 1, '2019-03-23 16:11:08'),
(6, 'Mahamuda Akter', 'N/A', 'N/A', 'Female', 'IIUC', '01831758777', 'mahamuda@gmail.com', 'Dewanhat,Chittagong', 'Professional Android Apps Development', '101', '01', '1234', 1, '2019-02-25 14:33:49'),
(7, 'Ahaduzzaman Chowdhury', 'n/a', 'n/a', 'Male', 'IIUC', '01992375827', 'ahad@gmail.com', 'Chittagong', 'Professional Android Apps Development', '101', '01', '1234', 1, '2019-02-25 14:33:53'),
(8, 'Md. Ahasan Habib', 'Md. Abdul Awal', 'Mrs. Hazera Yesmin', 'Male', 'Port City International University', '01625925155', 'habibcse009@gmail.com', 'Steel Mills Housing Colony, Patenga, Chittagong', 'Professional Android Apps Development', '101', '08', 'KingHabib3d', 1, '2019-02-26 09:41:16'),
(9, 'Nasmin Sultana', 'Md: Abdul Sabur', 'Shahin Akter', 'Female', 'Port City International  University', '01960520403', 'nasmin.pciu@gmail.com', 'Noapara,Raozan,Chittagong', 'Professional Android Apps Development', '101', '08', '108726cse', 1, '2019-02-26 09:43:19'),
(10, 'Abdul Kader Zilani', 'Abdus Salam', 'Ambia Begum', 'Male', 'port city international university', '01764408168', 'jilaneesandwip133@gmail.com', 'Halishahar', 'Professional Android Apps Development', '101', '08', 'cse00905604', 1, '2019-02-26 09:43:32'),
(11, 'Satyajit Sen', 'Subrata Kumar Sen', 'Sanchita Dey', 'Male', 'Port City International University', '01782384689', 'satyajitsen107@gmail.com', 'South Khulshi, chittagong', 'Professional Android Apps Development', '101', '08', '01553601075', 1, '2019-04-04 14:50:27'),
(12, 'S.B Joy Kumar Shill.', 'Prabir kumar shill.', 'Mukta rani shill.', 'Male', 'International Islamic University Chittagong.', '01836776063', 'kumarjoy273@gmail.com', '49,South nalapara, Chittagong.', 'Professional Android Apps Development', '101', '04', 'Anik bhai.', 1, '2019-03-09 07:43:01'),
(13, 'Abu Majed Md Faisal', 'Mohammad Abu Jar Gifary', 'Morjia Gifary', 'Male', 'USTC', '01812346818', 'Majed.Faisal@gmail.com', 'katalgonj', 'Professional Android Apps Development', '101', '09', '12345', 1, '2019-04-29 19:14:16'),
(14, 'Sweety Bhattacharjee', 'Babul Bhattacharjee', 'Bulbul Bhattacharjee', 'Female', 'Premier University', '01837550791', 'sweetybhatt00007@gmail.com', 'mirzarpul', 'Professional Android Apps Development', '101', '09', 'Shayaan12', 1, '2019-04-04 14:50:46'),
(15, 'Ariful Islam', 'Nurul Islam', 'Shahnaj Begum', 'Male', 'Premier University', '01833282300', 'arifulislam747630@gmail.com', 'Boalkhali,Chittagong', 'Professional Android Apps Development', '101', '09', '931769', 1, '2019-04-04 14:49:46'),
(16, 'Atanu Barua', 'Pradip Barua', 'Krishna Barua', 'Male', 'Premier University', '01515682746', 'niloy.barua74 @gmail.com', 'Ashkar Dighi', 'Professional Android Apps Development', '101', '09', '2866154', 1, '2019-03-24 10:26:29'),
(17, 'Sawrup Dhar', 'Narayan Dhar', 'Rakhi Dhar', 'Male', 'Premier University', '01829175350', 'sawrupdhar6789@gmail.com', 'Chawkbazar,Chittagong', 'Professional Android Apps Development', '101', '09', '0167589', 1, '2019-03-24 10:26:11'),
(18, 'Dhiman Nath', 'Dr.Anadi Sankar Nath', 'Bina Pani Deby', 'Male', 'Premier University  Chittagong', '01832355230', 'dhiman.nath.cse@gmail.com', 'Saru apartment, 49,south nalapara Sadarghat Chattogram', 'Professional Android Apps Development', '101', '09', 'dhiman123', 1, '2019-03-24 10:25:54'),
(19, 'Sharmin Akter', 'Md.Mokshed Ali', 'Rokeya Begum', 'Female', 'Port City Internatinal University', '01856710171', 'sharmin.bsc1997@gmail.com', 'Shagorika, Pahartali,  Chittagong', 'Professional Android Apps Development', '101', '08', 'golu00905661', 1, '2019-03-24 08:29:42'),
(21, 'Forhada Akther Ruhi', 'Md. Ibrahim Khan', 'Munni Akther', 'Female', 'International Islamic University Chittagong', '01682147676', 'forhadaruhi@gmail.com', '203, DC road, south bakalia, miakhannagar chittagong', 'Professional Android Apps Development', '101', '07', 'ruhi1234', 1, '2019-05-12 08:18:36'),
(22, 'FARIA BINTA RAFIQ', 'MD.RAFIQUL ALAM', 'ROKEYA BEGUM', 'Female', 'AFFABLE TECHNOLOGY', '01670423583', 'FARIA.binta.rafiq@gmail.com', 'ZAKIR HOSSAIN LANE,KHULSHI', 'Field Work and Industrial Training', '104', '07', 'NUDULBUDUL', 1, '2019-05-12 08:18:48'),
(23, 'Shahinoor Razia', 'Mohammed Omar Faruque', 'Sultana Razia', 'Female', 'International Islamic University Chittagong', '01623742847', 'shahinoorfarah@gmail.com', 'CDA no :04,,Agrabaad', 'Field Work and Industrial Training', '104', '07', 'f1234567', 1, '2019-05-12 12:57:54'),
(24, 'Tajnim Jahan Fariha', 'Absar khan', 'Rawshon Akther', 'Female', 'IIUC', '01845804632', 'tajnimjahanfariha93@gmail.com', 'Bakolia, Chawk Bazar', 'Field Work and Industrial Training', '104', '09', 'greatfari.*', 1, '2019-05-27 09:09:52'),
(25, 'Sadia Afroz', 'Rafique chy', 'Fatema  Begum', 'Female', 'IIUC', '01846282010', 'afrozsadia434@gmail.com', 'middle madarsha hathazari,Chittagong', 'Professional Android Apps Development', '101', '10', 'rj463748', 0, '2019-07-04 07:07:28'),
(26, 'Tasfia Alam Chowdhury', 'Jane Alam Chowdhury', 'Dilroba Begum', 'Female', 'IIUC', '01881399885', 'tasfiachy786@gmail.com', 'Anderkilla', 'Professional Android Apps Development', '101', '10', '01881399885', 0, '2019-07-04 14:40:54');

-- --------------------------------------------------------

--
-- Table structure for table `team`
--

CREATE TABLE `team` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `gender` varchar(255) NOT NULL,
  `position` varchar(255) NOT NULL,
  `cell` varchar(20) NOT NULL,
  `email` varchar(255) NOT NULL,
  `fb` varchar(20) NOT NULL,
  `degree` varchar(255) NOT NULL,
  `order_by` int(11) NOT NULL,
  `image` varchar(255) NOT NULL,
  `mode` int(5) NOT NULL,
  `timestamp` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `team`
--

INSERT INTO `team` (`id`, `name`, `gender`, `position`, `cell`, `email`, `fb`, `degree`, `order_by`, `image`, `mode`, `timestamp`) VALUES
(1, 'Md. Helal Uddin', 'Male', 'Director', '', 'helalmohammad92@gmail.com', '', 'B.Sc in ETE', 1, 'N/A', 1, '2019-02-16 05:53:34'),
(2, 'Engr. Didarul Islam Rana', 'Male', 'Director', '', 'rana93ctg@gmail.com', '', 'B.Sc in CSE', 2, 'N/A', 1, '2019-02-16 05:54:45'),
(3, 'Md. Ridwan Ullah', 'Male', 'Director', '', 'rid1ullah@gmail.com', '', '', 3, 'N/A', 1, '2019-02-16 05:56:12'),
(4, 'Noor Mohammed Anik', 'Male', 'Director', '01672902634', 'noormohammedanik@gmail.com', 'Noor016', 'B.Sc in CSE', 4, 'N/A', 1, '2019-02-16 05:57:44'),
(5, 'S.B Joy Kumar Shill', 'Male', 'Jr. Android Developer', '', 'kumarjoy@gmail.com', '', 'B.Sc in CSE', 5, '', 1, '2019-04-29 19:12:52');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `news`
--
ALTER TABLE `news`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `students`
--
ALTER TABLE `students`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `team`
--
ALTER TABLE `team`
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
-- AUTO_INCREMENT for table `news`
--
ALTER TABLE `news`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `students`
--
ALTER TABLE `students`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;

--
-- AUTO_INCREMENT for table `team`
--
ALTER TABLE `team`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
