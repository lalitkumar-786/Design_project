-- phpMyAdmin SQL Dump
-- version 4.6.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 05, 2018 at 11:52 AM
-- Server version: 5.7.14
-- PHP Version: 5.6.25

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `design`
--

-- --------------------------------------------------------

--
-- Table structure for table `doctor`
--

CREATE TABLE `doctor` (
  `doc_id` int(11) NOT NULL,
  `doc_name` varchar(30) NOT NULL,
  `doc_city` varchar(30) NOT NULL,
  `doc_specialization` varchar(30) NOT NULL,
  `doc_gender` varchar(30) NOT NULL,
  `doc_phno` varchar(13) NOT NULL,
  `doc_yrsofexp` int(3) NOT NULL,
  `doc_add` varchar(50) NOT NULL,
  `doc_photo` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `doctor`
--

INSERT INTO `doctor` (`doc_id`, `doc_name`, `doc_city`, `doc_specialization`, `doc_gender`, `doc_phno`, `doc_yrsofexp`, `doc_add`, `doc_photo`) VALUES
(1, 'Aamod Rao', 'Mumbai', 'ENT', 'Male', '9010203040', 5, 'Apollo Hospital , Mumbai - 400008', '18.jpeg'),
(2, 'Ashok Mehta', 'Jaipur', 'Oncologist', 'Male', '+(91)-2162-23', 8, 'Powai Naka, Sadar Bazar, Satara City, Satara - 415', '19.jpeg'),
(4, 'Ashok Kumar', 'Jabalpur', 'Oncologist', 'Male', '+(91)-2162-23', 10, 'Powai Naka, Sadar Bazar, Satara City, Satara - 415', '20.jpeg'),
(5, 'Ashish Yadav', 'Jabalpur', 'Gynecologist', 'Male', '095758 01200', 9, 'Plot B, Scheme No 5, Ahinsa Chowk, Kanchnar City R', '21.jpeg'),
(7, 'Shubham Pawar', 'Jabalpur', 'Oncologist', 'Male', '+(91)-2162-23', 8, 'Powai Naka, Sadar Bazar, Satara City, Satara - 415', '22.jpeg'),
(8, 'Rakesh Mishra', 'Jabalpur', 'Oncologist', 'Male', '076124 50762', 17, 'Russel Crossing, Napier Town ', '43.jpeg'),
(9, 'Ritu Singh', 'Jabalpur', 'Gynecologist', 'Female', '+(91)-2162-23', 12, 'Powai Naka, Sadar Bazar, Satara City, Satara - 415', '5.jpeg'),
(10, 'Laveena Singh', 'Jabalpur', 'ENT', 'Female', '076124 50762', 15, 'Russel Crossing, Napier Town ', '38.jpeg'),
(11, 'Sandhu Singh', 'Jabalpur', 'Oncologist', 'Male', '076124 50762', 5, 'Russel Crossing, Napier Town ', '23.jpeg'),
(12, 'Rashi Bohra', 'Jabalpur', 'Gynecologist', 'Female', '+(91)-2162-23', 19, 'Powai Naka, Sadar Bazar, Satara City, Satara - 415', '42.jpeg'),
(14, 'Anamika Dubey', 'Jabalpur', 'ENT', 'Female', '095758 01200', 5, 'Plot B, Scheme No 5, Ahinsa Chowk, Kanchnar City R', '49.jpeg'),
(15, 'Saket Dubey', 'Jabalpur', 'Oncologist', 'Male', '+(91)-2162-23', 13, 'Powai Naka, Sadar Bazar, Satara City, Satara - 415', '24.jpeg'),
(16, 'Raghu Mukherjee', 'Jabalpur', 'Gynecologist', 'Male', '076124 50762', 11, 'Russel Crossing, Napier Town ', '25.jpeg'),
(17, 'Rina Mehta', 'Jabalpur', 'Gynecologist', 'Female', '076124 50762', 18, 'Russel Crossing, Napier Town ', '71.jpeg'),
(21, 'A.K. Agarwal', 'Jabalpur', 'ENT', 'Male', '095758 01200', 7, 'Plot B, Scheme No 5, Ahinsa Chowk, Kanchnar City R', '10.jpeg'),
(24, 'Ranjeet Dubey', 'Mumbai', 'Oncologist', 'Male', '+(91)-2162-23', 25, 'Apollo Hospital , Mumbai - 400008', '11.jpeg'),
(25, 'M.D. Sinha', 'Mumbai', 'Oncologist', 'Male', '+(91)-2162-23', 21, 'Apollo Hospitals , Mumbai - 400017', '12.jpeg'),
(26, 'Naman Yadav', 'Mumbai', 'Oncologist', 'Male', '+(91)-2162-23', 6, 'Kamineni Hospitals, Mumbai - 400017', '13.jpeg'),
(27, 'Antriksh Singh', 'Mumbai', 'Oncologist', 'Male', '076124 50762', 19, 'Kamineni Hospitals, Mumbai - 400017', '14.jpeg'),
(28, 'Sparsh Jain', 'Mumbai', 'Oncologist', 'Male', '+(91)-2162-23', 17, 'Kamineni Hospitals, Mumbai - 400017', '15.jpeg'),
(29, 'Ranshi Yadav', 'Mumbai', 'Oncologist', 'Male', '+(91)-2162-23', 16, 'Kamineni Hospitals, Mumbai - 400017', '16.jpeg'),
(30, 'Akshilesh Yadav', 'Mumbai', 'Oncologist', 'Male', '9475231203', 21, 'Kamineni Hospitals, Mumbai - 400017', '17.jpeg'),
(31, 'Nivedhita Kumaran', 'Mumbai', 'Gynacologist', 'Female', '9407464298', 17, 'Kamineni Hospitals, Mumbai - 400008', '5.jpeg'),
(32, 'Aishwarya Yadav', 'Mumbai', 'Gynacologist', 'Female', '9407464299', 16, 'Kamineni Hospitals, Mumbai - 400008', '38.jpeg'),
(33, 'Neha Singh', 'Mumbai', 'Gynacologist', 'Female', '789456123', 17, 'Kamineni Hospitals, Mumbai - 400008', '42.jpeg'),
(34, 'Dhita Singh', 'Mumbai', 'Gynacologist', 'Female', '9407464298', 16, 'Apollo Hospitals , Mumbai - 482005', '49.jpeg'),
(35, 'Anamika Di', 'Mumbai', 'Gynacologist', 'Female', '9876543210', 31, 'Apollo Hospital , Mumbai - 400017', '71.jpeg'),
(37, 'Avanthika Rana', 'Mumbai', 'Gynacologist', 'Female', '845698721', 16, 'Apollo Hospital , Mumbai - 400017', '72.jpeg'),
(38, 'Umesh Yadav', 'Mumbai', 'ENT', 'Male', '9876543210', 14, 'Apollo Hospital , Mumbai - 400017', '26.jpeg'),
(40, 'Ranjeet Kumar', 'Mumbai', 'ENT', 'Male', '845698721', 16, 'Apollo Hospital , Mumbai - 400017', '27.jpeg'),
(41, 'Gunjan Kumar', 'Mumbai', 'ENT', 'Male', '845698721', 17, 'Apollo Hospital , Mumbai - 400017', '28.jpeg'),
(42, 'Hakim Yadav', 'Mumbai', 'ENT', 'Male', '9876543210', 23, 'Apollo Hospital , Mumbai - 400017', '29.jpeg'),
(43, 'Abhishek Chuadhary', 'Mumbai', 'ENT', 'Male', '9407469983', 11, 'Apollo Hospital , Mumbai - 400017', '30.jpeg'),
(44, 'Anamika Gupta', 'Mumbai', 'ENT', 'Female', '9876543210', 14, 'Apollo Hospital , Mumbai - 400017', '73.jpg'),
(48, 'Kajal Tandon', 'Delhi', 'Oncologist', 'Female', '9876543210', 23, 'Apollo Hospital , Delhi- 400017', '74.jpg'),
(49, 'Shubhami Singhania ', 'Delhi', 'Oncologist', 'Female', '9865432107', 24, 'Apollo Hospital , Delhi- 400017', '71.jpg'),
(50, 'Arushi Malhotra', 'Delhi', 'Oncologist', 'Female', '+(91)-2162-23', 25, 'Apollo Hospital , Delhi- 400017', '72.jpg'),
(54, 'Surendra M', 'Delhi', 'Gynacologist', 'Female', '8976543210', 24, 'Apollo Hospital , Delhi- 400017', '73.jpeg'),
(55, 'Dimple Kaur', 'Delhi', 'Gynacologist', 'Female', '845698721', 6, 'Kamineni Hospitals , Delhi -500018', '49.jpeg'),
(56, 'Ani', 'Delhi', 'Gynacologist', 'Female', '845698721', 3, 'Apollo Hospital , Delhi- 400017', '5.jpeg'),
(57, 'Ashu Ranu', 'Delhi', 'Gynacologist', 'Female', '845698721', 10, 'Apollo Hospital , Delhi- 400017', '38.jpeg'),
(58, 'Rani Mukharane', 'Delhi', 'Gynacologist', 'Female', '9407468316', 7, 'Apollo Hospital , Delhi- 400017', '42.jpeg'),
(59, 'Ranjeet Joshi', 'Delhi', 'ENT', 'Male', '845698721', 4, 'Kamineni Hospital , Delhi- 400017', '31.jpeg'),
(60, 'Vallabh Joshi', 'Delhi', 'ENT', 'Male', '987653210', 16, 'Apollo Hospital , Delhi- 400017', '32.jpeg'),
(61, 'Vallabh Yadav', 'Delhi', 'ENT', 'Male', '9407469983', 21, 'Apollo Hospital , Delhi- 400017', '33.jpeg');

-- --------------------------------------------------------

--
-- Table structure for table `login`
--

CREATE TABLE `login` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `firstname` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `lastname` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `login`
--

INSERT INTO `login` (`email`, `password`, `firstname`, `lastname`, `remember_token`, `created_at`, `updated_at`) VALUES
('a@gmail.com', '1', 'a', 'a', NULL, '2017-03-27 01:11:11', '2017-03-27 01:11:11'),
('ashish@iiitdmj.ac.in', '123', 'Ashish', 'Dubey', NULL, '2017-04-14 23:25:48', '2017-04-14 23:25:48'),
('fads@gmail.com', '123', 'dfas', 'dfas', NULL, '2017-03-25 23:05:09', '2017-03-25 23:05:09'),
('fda@gmail.com', '1', 'dsfa', 'dfsa', NULL, '2017-03-27 01:18:29', '2017-03-27 01:18:29'),
('hacker@gmail.com', 'hacker123', 'Anonymous', 'Hacker', NULL, '2017-05-01 23:57:17', '2017-05-01 23:57:17'),
('lalitkumar@iiitdmj.ac.in', '123', 'Lalit', 'Kumar', NULL, '2017-03-25 23:02:30', '2017-03-25 23:02:30'),
('manish@iiitdmj.ac.in', '12', 'Manish', 'singh', NULL, '2017-04-02 13:22:15', '2017-04-02 13:22:15'),
('mohan@gmail.com', '123', 'lunawat', 'mohan', NULL, '2017-05-02 00:00:32', '2017-05-02 00:00:32'),
('q@gmail.com', 'q', 'q', 'q', NULL, '2017-04-02 13:34:40', '2017-04-02 13:34:40'),
('s@gmail.com', 's', 's', 's', NULL, '2017-05-01 08:47:59', '2017-05-01 08:47:59'),
('sai@gmail.com', 'sai', 'sai', 'teja', NULL, '2017-04-07 04:27:04', '2017-04-07 04:27:04'),
('test@iiitdmj.ac.in', '123', 'test', 'test', NULL, NULL, NULL),
('test1@iiitdmj.ac.in', '123', 'test1', 'test1', NULL, NULL, NULL),
('test3@iiitdmj.ac.in', '123', 'test3', 'test3', NULL, NULL, NULL),
('vallabh@gmail.com', '123', 'Vallabh', 'Remani', NULL, '2017-03-27 03:02:29', '2017-03-27 03:02:29'),
('w@gmail.com', 'w', 'w', 'w', NULL, '2017-04-14 08:40:45', '2017-04-14 08:40:45'),
('z@gmail.com', 'z', 'z', 'z', NULL, '2017-05-01 07:40:48', '2017-05-01 08:40:48');

-- --------------------------------------------------------

--
-- Table structure for table `medi_taken`
--

CREATE TABLE `medi_taken` (
  `email` varchar(50) NOT NULL,
  `medi_name` varchar(20) NOT NULL,
  `created_at` timestamp NOT NULL,
  `updated_at` timestamp NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `medi_taken`
--

INSERT INTO `medi_taken` (`email`, `medi_name`, `created_at`, `updated_at`) VALUES
('manish@iiitdmj.ac.in', 'Paracetamol', '2017-04-02 13:26:49', '2017-04-02 13:26:49'),
('manish@iiitdmj.ac.in', 'Paracetamol', '2017-04-02 13:30:19', '2017-04-02 13:30:19'),
('lalitkumar@iiitdmj.ac.in', 'Paracetamol', '2017-04-02 13:33:40', '2017-04-02 13:33:40'),
('q@gmail.com', 'Advil', '2017-04-02 13:38:23', '2017-04-02 13:38:23'),
('q@gmail.com', 'Advil', '2017-04-02 13:38:58', '2017-04-02 13:38:58'),
('lalitkumar@iiitdmj.ac.in', 'Paracetamol', '2017-04-03 04:16:05', '2017-04-03 04:16:05'),
('lalitkumar@iiitdmj.ac.in', 'Paracetamol', '2017-04-03 05:06:25', '2017-04-03 05:06:25'),
('lalitkumar@iiitdmj.ac.in', 'Tylenol', '2017-04-03 05:07:02', '2017-04-03 05:07:02'),
('lalitkumar@iiitdmj.ac.in', 'Paracetamol', '2017-04-14 23:20:28', '2017-04-14 23:20:28'),
('lalitkumar@iiitdmj.ac.in', 'Paracetamol', '2017-04-14 23:21:18', '2017-04-14 23:21:18'),
('lalitkumar@iiitdmj.ac.in', 'Paracetamol', '2017-04-14 23:21:33', '2017-04-14 23:21:33'),
('lalitkumar@iiitdmj.ac.in', 'Paracetamol', '2017-04-14 23:22:09', '2017-04-14 23:22:09'),
('lalitkumar@iiitdmj.ac.in', 'Tylenol', '2017-04-14 23:22:53', '2017-04-14 23:22:53'),
('ashish@iiitdmj.ac.in', 'Paracetamol', '2017-04-14 23:27:23', '2017-04-14 23:27:23'),
('lalitkumar@iiitdmj.ac.in', 'Paracetamol', '2017-05-01 05:36:08', '2017-05-01 05:36:08'),
('lalitkumar@iiitdmj.ac.in', 'Paracetamol', '2017-05-01 05:37:06', '2017-05-01 05:37:06'),
('lalitkumar@iiitdmj.ac.in', 'Paracetamol', '2017-05-01 05:40:12', '2017-05-01 05:40:12'),
('lalitkumar@iiitdmj.ac.in', 'Paracetamol', '2017-05-01 05:42:08', '2017-05-01 05:42:08'),
('lalitkumar@iiitdmj.ac.in', 'Paracetamol', '2017-05-01 05:42:20', '2017-05-01 05:42:20'),
('lalitkumar@iiitdmj.ac.in', 'Paracetamol', '2017-05-01 05:42:44', '2017-05-01 05:42:44'),
('lalitkumar@iiitdmj.ac.in', 'ibuprofen', '2017-05-01 06:59:10', '2017-05-01 06:59:10'),
('lalitkumar@iiitdmj.ac.in', 'afrin', '2017-05-01 06:59:18', '2017-05-01 06:59:18'),
('lalitkumar@iiitdmj.ac.in', 'afrin', '2017-05-01 07:06:59', '2017-05-01 07:06:59'),
('lalitkumar@iiitdmj.ac.in', 'afrin', '2017-05-01 07:07:12', '2017-05-01 07:07:12'),
('lalitkumar@iiitdmj.ac.in', 'afrin', '2017-05-01 07:10:16', '2017-05-01 07:10:16'),
('lalitkumar@iiitdmj.ac.in', 'Loperamide', '2017-05-01 07:13:30', '2017-05-01 07:13:30'),
('lalitkumar@iiitdmj.ac.in', 'Co-phenotrope', '2017-05-01 07:13:37', '2017-05-01 07:13:37'),
('lalitkumar@iiitdmj.ac.in', 'Acetaminophen', '2017-05-01 07:23:04', '2017-05-01 07:23:04'),
('lalitkumar@iiitdmj.ac.in', 'Aspirin', '2017-05-01 07:27:50', '2017-05-01 07:27:50'),
('lalitkumar@iiitdmj.ac.in', 'Liquiprin', '2017-05-01 07:29:47', '2017-05-01 07:29:47'),
('lalitkumar@iiitdmj.ac.in', 'Paracetamol', '2017-05-01 07:30:30', '2017-05-01 07:30:30'),
('lalitkumar@iiitdmj.ac.in', 'Panadol', '2017-05-01 08:50:41', '2017-05-01 08:50:41'),
('lalitkumar@iiitdmj.ac.in', 'Liquiprin', '2017-05-01 08:58:48', '2017-05-01 08:58:48'),
('lalitkumar@iiitdmj.ac.in', 'Liquiprin', '2017-05-01 09:28:47', '2017-05-01 09:28:47'),
('lalitkumar@iiitdmj.ac.in', 'Paracetamol', '2017-05-01 23:20:39', '2017-05-01 23:20:39'),
('lalitkumar@iiitdmj.ac.in', 'Paracetamol', '2017-05-01 23:21:04', '2017-05-01 23:21:04'),
('lalitkumar@iiitdmj.ac.in', 'Paracetamol', '2017-05-01 23:21:35', '2017-05-01 23:21:35'),
('lalitkumar@iiitdmj.ac.in', 'Paracetamol', '2017-05-01 23:22:29', '2017-05-01 23:22:29'),
('lalitkumar@iiitdmj.ac.in', 'Paracetamol', '2017-05-01 23:22:31', '2017-05-01 23:22:31'),
('lalitkumar@iiitdmj.ac.in', 'Paracetamol', '2017-05-01 23:22:39', '2017-05-01 23:22:39'),
('lalitkumar@iiitdmj.ac.in', 'Paracetamol', '2017-05-01 23:23:20', '2017-05-01 23:23:20'),
('lalitkumar@iiitdmj.ac.in', 'Aspirin', '2017-05-01 23:27:46', '2017-05-01 23:27:46'),
('lalitkumar@iiitdmj.ac.in', 'Pholcodine', '2017-05-01 23:29:38', '2017-05-01 23:29:38'),
('lalitkumar@iiitdmj.ac.in', 'Pholcodine', '2017-05-01 23:30:16', '2017-05-01 23:30:16'),
('lalitkumar@iiitdmj.ac.in', 'Pholcodine', '2017-05-01 23:30:55', '2017-05-01 23:30:55'),
('lalitkumar@iiitdmj.ac.in', 'Pholcodine', '2017-05-01 23:31:18', '2017-05-01 23:31:18'),
('lalitkumar@iiitdmj.ac.in', 'Ibuprofen', '2017-05-01 23:31:31', '2017-05-01 23:31:31'),
('lalitkumar@iiitdmj.ac.in', 'Loperamide', '2017-05-01 23:31:44', '2017-05-01 23:31:44'),
('lalitkumar@iiitdmj.ac.in', 'Aspirin', '2017-05-01 23:31:57', '2017-05-01 23:31:57'),
('lalitkumar@iiitdmj.ac.in', 'Panadol', '2017-05-01 23:32:20', '2017-05-01 23:32:20'),
('mohan@gmail.com', 'Panadol', '2017-05-02 00:01:10', '2017-05-02 00:01:10'),
('lalitkumar@iiitdmj.ac.in', 'Paracetamol', '2017-05-02 00:21:47', '2017-05-02 00:21:47'),
('lalitkumar@iiitdmj.ac.in', 'Paracetamol', '2017-05-02 00:49:56', '2017-05-02 00:49:56'),
('lalitkumar@iiitdmj.ac.in', 'Paracetamol', '2017-05-02 01:09:17', '2017-05-02 01:09:17'),
('lalitkumar@iiitdmj.ac.in', 'Paracetamol', '2017-05-02 01:14:40', '2017-05-02 01:14:40'),
('lalitkumar@iiitdmj.ac.in', 'Paracetamol', '2017-05-02 01:22:24', '2017-05-02 01:22:24'),
('lalitkumar@iiitdmj.ac.in', 'Paracetamol', '2017-05-02 01:38:54', '2017-05-02 01:38:54'),
('lalitkumar@iiitdmj.ac.in', 'Paracetamol', '2017-05-02 01:45:18', '2017-05-02 01:45:18'),
('lalitkumar@iiitdmj.ac.in', 'Paracetamol', '2017-05-02 01:54:13', '2017-05-02 01:54:13'),
('lalitkumar@iiitdmj.ac.in', 'Paracetamol', '2017-05-02 02:18:05', '2017-05-02 02:18:05'),
('lalitkumar@iiitdmj.ac.in', 'Pholcodine', '2018-01-05 06:17:57', '2018-01-05 06:17:57');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `doctor`
--
ALTER TABLE `doctor`
  ADD PRIMARY KEY (`doc_id`);

--
-- Indexes for table `login`
--
ALTER TABLE `login`
  ADD PRIMARY KEY (`email`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
