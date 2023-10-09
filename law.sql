-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 16, 2023 at 07:40 PM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.0.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `law`
--

-- --------------------------------------------------------

--
-- Table structure for table `affidavit`
--

CREATE TABLE `affidavit` (
  `id` int(11) NOT NULL,
  `date1` varchar(255) DEFAULT NULL,
  `affiant_name` varchar(255) DEFAULT NULL,
  `age` varchar(255) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `address` varchar(255) DEFAULT NULL,
  `statement` varchar(255) DEFAULT NULL,
  `city` varchar(255) DEFAULT NULL,
  `country` varchar(255) DEFAULT NULL,
  `date_of_submission_to_lawyer` varchar(255) DEFAULT NULL,
  `country1` varchar(255) DEFAULT NULL,
  `signature_image` longtext DEFAULT NULL,
  `signature_image1` longtext DEFAULT NULL,
  `date_of_submission_to_court` varchar(255) DEFAULT NULL,
  `lawyerName` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `contactus`
--

CREATE TABLE `contactus` (
  `Id` int(200) NOT NULL,
  `Name` varchar(300) NOT NULL,
  `What would you like` varchar(300) NOT NULL,
  `Phone` varchar(300) NOT NULL,
  `email` varchar(255) DEFAULT NULL,
  `Area` varchar(300) NOT NULL,
  `Message` varchar(300) NOT NULL,
  `About Us` varchar(300) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `criminallawyer`
--

CREATE TABLE `criminallawyer` (
  `id` int(11) NOT NULL,
  `Name` varchar(255) DEFAULT NULL,
  `type` varchar(255) DEFAULT NULL,
  `bstatus` varchar(255) DEFAULT NULL,
  `bwork` varchar(255) DEFAULT NULL,
  `beducation` varchar(255) DEFAULT NULL,
  `btel` varchar(255) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `Image` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `edit`
--

CREATE TABLE `edit` (
  `LawyerSignature` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `lawyerreg`
--

CREATE TABLE `lawyerreg` (
  `id` int(255) NOT NULL,
  `Image` varchar(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `DOB` date NOT NULL,
  `f_hname` varchar(255) NOT NULL,
  `nationality` varchar(255) NOT NULL,
  `enroll_date` date NOT NULL,
  `type` varchar(255) NOT NULL,
  `status` varchar(255) NOT NULL,
  `work` varchar(255) NOT NULL,
  `education` varchar(255) NOT NULL,
  `certificate1` varchar(255) DEFAULT NULL,
  `certificate2` varchar(255) DEFAULT NULL,
  `further_edu` varchar(300) NOT NULL,
  `fee_voucher` varchar(255) DEFAULT NULL,
  `contact` varchar(255) NOT NULL,
  `email` varchar(255) DEFAULT NULL,
  `city` varchar(255) NOT NULL,
  `cnic_no` varchar(255) NOT NULL,
  `approval_status` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `lawyerreg`
--

INSERT INTO `lawyerreg` (`id`, `Image`, `name`, `DOB`, `f_hname`, `nationality`, `enroll_date`, `type`, `status`, `work`, `education`, `certificate1`, `certificate2`, `further_edu`, `fee_voucher`, `contact`, `email`, `city`, `cnic_no`, `approval_status`) VALUES
(1, 'image/lawyer9.jpg', 'Marya Rao', '1970-01-01', 'Rao', 'Canadian', '1970-01-01', 'criminal lawyer', 'Partner', 'High Court Lawyer', 'LLM (UK)', 'image/certificate.jpeg', 'image/certificate.jpeg', 'Mon, Tue', 'image/voucher.jpeg', '03253508909', 'maryarao@gmail.com', 'Islamabad', '82404-8887378-7', NULL),
(2, 'image/lawyer7.jpg.jpg', 'Zayn Malik', '1970-01-01', 'Malik', 'Canadian', '1970-01-01', 'criminal lawyer', 'Partner', 'Adocate', 'LLb', 'image/certificate.jpeg', 'image/certificate.jpeg', '', 'image/voucher.jpeg', '09802847424', 'zayyn@gmail.com', 'Lahore', '82404-8887378-7', NULL),
(3, 'image/lawyer.6jpg.jpg', 'Jhonny English', '1970-01-01', 'English', 'American', '1970-01-01', 'criminal lawyer', 'Partner', 'Adocate', 'LLb', 'image/certificate.jpeg', 'image/certificate.jpeg', 'Mon, Tue', 'image/voucher.jpeg', '09802847424', 'jhonny@gmail.com', 'Karachi', '82404-8887378-7', NULL),
(4, 'image/lawyer8.jpg.jpg', 'Humayl Khan', '1970-01-01', 'Adnan Khan', 'Pakistan', '1970-01-01', 'criminal lawyer', 'Partner', 'Adocate', 'Nothing', 'image/certificate.jpeg', 'image/certificate.jpeg', 'Mon, Fri', 'image/voucher.jpeg', '09802847424', 'hk@gmail.com', 'Lahore', '82404-8887378-7', NULL),
(5, 'image/lawyer10.jpg', 'Salena Gomez', '1970-01-01', 'Gomez', 'Canadian', '1970-01-01', 'divorce lawyer', 'Partner', 'High Court Lawyer', 'LLM (UK)', 'image/certificate.jpeg', 'image/certificate.jpeg', 'Mon, Tue, Wed', 'image/voucher.jpeg', '09802847424', 'salen@gmail.com', 'Islamabad', '82404-8887378-7', NULL),
(7, 'image/lawyer7.jpg', 'Shabana Malik', '1970-01-01', 'Malik', 'Canadian', '1970-01-01', 'divorce lawyer', 'Partner', 'Adocate', 'LLb', 'image/certificate.jpeg', 'image/certificate.jpeg', 'Mon, Wed', 'image/voucher.jpeg', '09802847424', 'shabana@gmail.com', 'Hyderabad', '82404-8887378-7', NULL),
(8, 'image/lawyer9.jpg', 'Fizza Hyder', '1970-01-01', 'Hyder', 'Pakistan', '1970-01-01', 'divorce lawyer', 'Partner', 'Adocate', 'LLb', 'image/certificate.jpeg', 'image/certificate.jpeg', 'Mon, Tue', 'image/voucher.jpeg', '09802847424', 'fizza@gmail.com', 'Karachi', '82404-8887378-7', NULL),
(9, 'image/lawyer4.jpg', 'Farzana Khan', '1970-01-01', 'Khan', 'Pakistan', '1970-01-01', 'divorce lawyer', 'Partner', 'Adocate', 'LLM (UK)', 'image/certificate.jpeg', 'image/certificate.jpeg', 'Tue, Wed', 'image/voucher.jpeg', '03253508909', 'farzana@gmail.com', 'Lahore', '82404-8887378-7', NULL),
(10, 'image/lawyer16.jpg', 'Jhon Ibraham', '1970-01-01', 'Ibraham', 'Indian', '1970-01-01', 'criminal lawyer', 'Partner', 'Advocate', 'LLM (UK)', 'image/certificate.jpeg', 'image/certificate.jpeg', 'Tue, Wed', 'image/voucher.jpeg', '03253508909', 'john@gmail.com', 'Lahore', '82404-8887378-7', NULL),
(11, 'image/lawyer1.jpg', 'Wahab Iqbal', '1970-01-01', 'Iqbal Memon', 'Pakistan', '1970-01-01', 'criminal lawyer', 'Partner', 'Adocate', 'LLM (UK)', 'image/certificate.jpeg', 'image/certificate.jpeg', 'Tue, Wed', 'image/voucher.jpeg', '09802847424', 'wahab@gmail.com', 'Islamabad', '82404-8887378-7', NULL),
(12, 'image/lawyer5.jpg', 'George Bush', '1970-01-01', 'Bush', 'Canadian', '1970-01-01', 'criminal lawyer', 'Partner', 'Adocate', 'LLb', 'image/certificate.jpeg', 'image/certificate.jpeg', 'Tue, Thurs', 'image/voucher.jpeg', '09802847424', 'george@gmail.com', 'Hyderabad', '82404-8887378-7', NULL),
(13, 'image/lawyer17.jpg', 'Furqan Khanzada', '1970-01-01', 'Khanzada', 'Canadian', '1970-01-01', 'criminal lawyer', 'Partner', 'High Court Lawyer', 'LLM (UK)', 'image/certificate.jpeg', 'image/certificate.jpeg', 'Mon, Thurs, Fri', 'image/voucher.jpeg', '03253508909', 'furqan@gmail.com', 'Karachi', '82404-8887378-7', NULL),
(14, 'image/lawyer11.jpg', 'Arbab', '1970-01-01', 'Riaz', 'Canadian', '1970-01-01', 'criminal lawyer', 'Partner', 'Adocate', 'LLM (UK)', 'image/certificate.jpeg', 'image/certificate.jpeg', 'Tue, Wed, Thurs', 'image/voucher.jpeg', '03253508909', 'arbab@gmail.com', 'Hyderabad', '82404-8887378-7', NULL),
(15, 'image/lawyer2.jpg', 'Jason Statham', '1970-01-01', 'Statham', 'Pakistan', '1970-01-01', 'criminal lawyer', 'Partner', 'High Court Lawyer', 'LLM (UK)', 'image/certificate.jpeg', 'image/certificate.jpeg', 'Mon, Wed', 'image/voucher.jpeg', '03253508909', 'jason@gmail.com', 'Karachi', '82404-8887378-7', NULL),
(16, 'image/vipLawyer.jfif', 'Altaf Hussain', '1970-01-01', 'Hussain', 'Pakistan', '1970-01-01', 'divorce lawyer', 'Partner', 'High Court Lawyer', 'LLM (UK)', 'image/certificate.jpeg', 'image/certificate.jpeg', 'Mon, Tue, Wed, Thurs, Fri', 'image/voucher.jpeg', '03253508909', 'altaf@gmail.com', 'Karachi', '82404-8887378-7', NULL),
(17, 'image/lawyer13.jpg', 'Danish Taimoor ', '1970-01-01', 'Taimoor', 'Pakistan', '1970-01-01', 'divorce lawyer', 'Partner', 'Adocate', 'LLM (UK)', 'image/certificate.jpeg', 'image/certificate.jpeg', 'Mon, Wed', 'image/voucher.jpeg', '03253508909', 'danish@gmail.com', 'Hyderabad', '82404-8887378-7', NULL),
(18, 'image/lawyer5.jpg', 'Salman Iqbal', '1970-01-01', 'Iqbal', 'Pakistan', '1970-01-01', 'divorce lawyer', 'Partner', 'Adocate', 'LLM (UK)', 'image/certificate.jpeg', 'image/certificate.jpeg', 'Mon, Tue', 'image/voucher.jpeg', '03253508909', 'salman@gmail.com', 'Islamabad', '82404-8887378-7', NULL),
(19, 'image/lawyer20.jpg', 'Shakeel Alam', '1970-01-01', 'Alam', 'Pakistan', '1970-01-01', 'divorce lawyer', 'Partner', 'High Court Lawyer', 'LLM (UK)', 'image/certificate.jpeg', 'image/certificate.jpeg', 'Mon, Tue, Wed', 'image/voucher.jpeg', '03253508909', 'shakeel@gmail.com', 'Lahore', '82404-8887378-7', NULL),
(20, 'image/lawyer15.jpg', 'Nehal Usman', '1970-01-01', 'Usman', 'Pakistan', '1970-01-01', 'divorce lawyer', 'Partner', 'Adocate', 'LLM (UK)', 'image/certificate.jpeg', 'image/certificate.jpeg', 'Mon, Tue, Wed', 'image/voucher.jpeg', '03253508909', 'nehal@gmail.com', 'Islamabad', '82404-8887378-7', NULL),
(21, 'image/lawyer16.jpg', 'Usman Malik', '1970-01-01', 'Malik', 'Pakistan', '1970-01-01', 'commercial lawyer', 'Partner', 'Adocate', 'LLM (UK)', 'image/certificate.jpeg', 'image/certificate.jpeg', 'Mon, Fri', 'image/voucher.jpeg', '03253508909', 'usman1@gmail.com', 'Lahore', '82404-8887378-7', NULL),
(22, 'image/lawyer19.jpg', 'Mehmood Qureshi', '1970-01-01', 'Qureshi', 'Canadian', '1970-01-01', 'commercial lawyer', 'Partner', 'Adocate', 'LLM (UK)', 'image/certificate.jpeg', 'image/certificate.jpeg', 'Tue, Wed', 'image/voucher.jpeg', '03253508909', 'mehmood@gmail.com', 'Karachi', '82404-8887378-7', NULL),
(23, 'image/lawyer7.jpg', 'Nimra Waseem', '1970-01-01', 'Waseem', 'Pakistan', '1970-01-01', 'commercial lawyer', 'Partner', 'Adocate', 'LLM (UK)', 'image/certificate.jpeg', 'image/certificate.jpeg', 'Tue, Fri', 'image/voucher.jpeg', '03253508909', 'nimra@gmail.com', 'Islamabad', '82404-8887378-7', NULL),
(24, 'image/lawyer.jpg', 'Sanaullah Khan', '1970-01-01', 'Humayl Khan', 'Pakistan', '1970-01-01', 'commercial lawyer', 'Partner', 'High Court Lawyer', 'LLM (UK)', 'image/certificate.jpeg', 'image/certificate.jpeg', 'Mon, Wed, Thurs', 'image/voucher.jpeg', '03253508909', 'sanaullah@gmail.com', 'Hyderabad', '82404-8887378-7', NULL),
(25, 'image/lawyer5.jpg', 'Ahad Ahmed', '1970-01-01', 'Ahmed', 'Canadian', '1970-01-01', 'commercial lawyer', 'Partner', 'Adocate', 'LLb', 'image/certificate.jpeg', 'image/certificate.jpeg', 'Tue, Wed', 'image/voucher.jpeg', '03253508909', 'ahad@gmail.com', 'Karachi', '82404-8887378-7', NULL),
(26, 'image/crlaw-1.jpg', 'Zameer', '1970-01-01', 'Ansari', 'Pakistani', '1970-01-01', 'real estate lawyer', 'partner', 'advocate, High Courts of Pakistan', 'LL.M(Bristol),LLB(ku)', 'image/LLb certificate.jpg', 'image/', 'Mon, Wed', 'image/lawyer_voucher.jpg', '02123674345', 'zameer@gmail.com', 'Karachi', '42000-2801123-2', NULL),
(27, 'image/lawyer8.jpg.jpg', 'Ansab', '1970-01-01', 'Jahangir', 'Pakistani', '1970-01-01', 'real estate lawyer', 'Managing partner', 'advocate, High Courts of Pakistan', 'LLM (UK),LLB', 'image/LLb certificate.jpg', 'image/LLb certificate.jpg', 'Tue, Wed, Fri', 'image/lawyer_voucher.jpg', '02123674345', 'ansab@gmail.com', 'Lahore', '42000-2801123-2', NULL),
(28, 'image/lawyer10.jpg', 'Minhal', '1970-01-01', 'Khan', 'Pakistani', '1970-01-01', 'real estate lawyer', 'Managing partner', 'advocate, High Courts of Pakistan', 'LL.M(Bristol), LLB', 'image/LLb certificate.jpg', 'image/LLb certificate.jpg', 'Mon, Wed', 'image/lawyer_voucher.jpg', '02123674345', 'minhal@gmail.com', 'Lahore', '42000-2801123-2', NULL),
(29, 'image/lawyer20.jpg', 'Raja', '1970-01-01', 'Adil', 'Pakistani', '1970-01-01', 'real estate lawyer', 'Partner', 'advocate, Supreme Courts of Pakistan', 'LL.M(Bristol),LL.B(hons)(London)', 'image/LLb certificate.jpg', 'image/LLb certificate.jpg', 'Tue, Thurs', 'image/lawyer_voucher.jpg', '02123674345', 'raja@gmail.com', 'Islamabad', '42000-2801123-2', NULL),
(30, 'image/lawyer14.jpg', 'Faizan', '1970-01-01', 'Farooq', 'Pakistani', '1970-01-01', 'real estate lawyer', ' partner', 'advocate, High Courts of Pakistan', 'LLB', 'image/LLb certificate.jpg', 'image/', 'Tue, Fri', 'image/lawyer_voucher.jpg', '02123674345', 'faizan@gmail.com', 'Hyderabad', '42000-2801123-2', NULL),
(31, 'image/lawyer7.jpg', 'Khashaar', '1970-01-01', 'Patel', 'Pakistani', '1970-01-01', 'taxation lawyer', 'partner', 'advocate, High Courts of Pakistan', 'LLB,LLM(ku)', 'image/LLb certificate.jpg', 'image/', 'Mon, Wed', 'image/lawyer_voucher.jpg', '02123674345', 'khashaar@gmail.com', 'Lahore', '42000-2801123-2', NULL),
(32, 'image/lawyer7.jpg.jpg', 'Ahmed', '1970-01-01', 'Raza', 'Pakistani', '1970-01-01', 'taxation lawyer', ' partner', 'advocate, High Courts of Pakistan', 'LL.M(Bristol), LLB', 'image/LLb certificate.jpg', 'image/', 'Mon, Wed, Fri', 'image/lawyer_voucher.jpg', '02123674345', 'ahmed@gmail.com', 'Karachi', '42000-2801123-2', NULL),
(33, 'image/lawyer4.jpg', 'Faiza', '1970-01-01', 'Saqlain', 'Pakistani', '1970-01-01', 'taxation lawyer', 'Managing partner', 'Lawyer, High Courts of Pakistan', 'LLB (UK)', 'image/LLb certificate.jpg', 'image/', 'Mon, Wed', 'image/lawyer_voucher.jpg', '02123674345', 'faiza@gmail.com', 'Islamabad', '42000-2801123-2', NULL),
(34, 'image/lawyer9.jpg', 'Kinza', '1970-01-01', 'Alam', 'Pakistani', '1970-01-01', 'taxation lawyer', 'partner', 'advocate, High Courts of Pakistan', 'LLB(Bristol)', 'image/LLb certificate.jpg', 'image/', 'Tue, Wed', 'image/lawyer_voucher.jpg', '02123674345', 'kinza@gmail.com', 'Hyderabad', '42000-2801123-2', NULL),
(35, 'image/lawyer16.jpg', 'Maaz', '1970-01-01', 'Ahmer', 'Pakistani', '1970-01-01', 'family lawyer', 'Founder & Managing Partner', 'Lawyer, High Courts of Pakistan', 'LL.M(Bristol),LL.B(hons)(London)', 'image/LLb certificate.jpg', 'image/', 'Mon, Thurs', 'image/lawyer_voucher.jpg', '02123674345', 'maaz@gmail.com', 'Karachi', '42000-2801123-2', NULL),
(36, 'image/lawyer12.jpg', 'Usman', '1970-01-01', 'Qadir', 'Pakistani', '1970-01-01', 'family lawyer', 'partner', 'advocate, High Courts of Pakistan', 'LLB', 'image/LLb certificate.jpg', 'image/', 'Wed, Thurs', 'image/lawyer_voucher.jpg', '02123674345', 'usman@gmail.com', 'Lahore', '42000-2801123-2', NULL),
(37, 'image/lawyer7.jpg.jpg', 'Ahsan', '1970-01-01', 'Nohsin', 'Pakistani', '1970-01-01', 'family lawyer', ' partner', 'advocate, High Courts of Pakistan', 'LLB', 'image/LLb certificate.jpg', 'image/', 'Tue, Fri', 'image/lawyer_voucher.jpg', '02123674345', 'ahsan@gmail.com', 'Lahore', '42000-2801123-2', NULL),
(38, 'image/lawyer9.jpg', 'Aaliya', '1970-01-01', 'Ahmed', 'Pakistani', '1970-01-01', 'family lawyer', 'working partner', 'advocate, High Courts of Pakistan', 'LLB', 'image/LLb certificate.jpg', 'image/LLb certificate.jpg', 'Wed, Thurs', 'image/lawyer_voucher.jpg', '02123674345', 'aliya@gmail.com', 'Islamabad', '42000-2801123-2', NULL),
(39, 'image/lawyer10.jpg', 'Arwa', '1970-01-01', 'Hussain', 'Pakistani', '1970-01-01', 'family lawyer', 'Founder & Managing Partner', 'Advocate, High Courts of Pakistan', 'LL.M(Bristol), LLB', 'image/LLb certificate.jpg', 'image/', 'Tue, Wed', 'image/lawyer_voucher.jpg', '02123674345', 'arwa@gmail.com', 'Hyderabad', '42000-2801123-2', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `lawyerregistration`
--

CREATE TABLE `lawyerregistration` (
  `id` int(255) NOT NULL,
  `Image` varchar(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `DOB` date NOT NULL,
  `f_hname` varchar(255) NOT NULL,
  `nationality` varchar(255) NOT NULL,
  `enroll_date` date NOT NULL,
  `type` varchar(255) NOT NULL,
  `status` varchar(255) NOT NULL,
  `work` varchar(255) NOT NULL,
  `education` varchar(255) NOT NULL,
  `certificate1` varchar(255) DEFAULT NULL,
  `certificate2` varchar(255) DEFAULT NULL,
  `further_edu` varchar(300) NOT NULL,
  `fee_voucher` varchar(255) DEFAULT NULL,
  `contact` int(11) NOT NULL,
  `email` varchar(255) DEFAULT NULL,
  `city` varchar(255) NOT NULL,
  `cnic_no` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `lawyerregistration`
--

INSERT INTO `lawyerregistration` (`id`, `Image`, `name`, `DOB`, `f_hname`, `nationality`, `enroll_date`, `type`, `status`, `work`, `education`, `certificate1`, `certificate2`, `further_edu`, `fee_voucher`, `contact`, `email`, `city`, `cnic_no`) VALUES
(1, '../admin panel/image/lawyer9.jpg', 'Marya Rao', '1970-01-01', 'Rao', 'Canadian', '1970-01-01', 'criminal lawyer', 'Partner', 'High Court Lawyer', 'Mon, Tue', '../admin panel/image/certificate.jpeg', '../admin panel/image/certificate.jpeg', 'LLM (UK)', '../admin panel/image/voucher.jpeg', 2147483647, 'maryarao05@gmail.com', 'Islamabad', '82404-8887378-7'),
(2, '../admin panel/image/lawyer7.jpg.jpg', 'Zayn Malik', '1970-01-01', 'Malik', 'Canadian', '1970-01-01', 'criminal lawyer', 'Partner', 'Adocate', 'Mon, Tue', '../admin panel/image/certificate.jpeg', '../admin panel/image/certificate.jpeg', 'LLb', '../admin panel/image/voucher.jpeg', 2147483647, 'zayn@gmail.com', 'Lahore', '82404-8887378-7'),
(3, '../admin panel/image/lawyer.6jpg.jpg', 'Jhonny English', '1970-01-01', 'English', 'American', '1970-01-01', 'criminal lawyer', 'Partner', 'Adocate', 'Mon, Tue', '../admin panel/image/certificate.jpeg', '../admin panel/image/certificate.jpeg', 'LLb', '../admin panel/image/voucher.jpeg', 2147483647, 'jhonny@gmail.com', 'Karachi', '82404-8887378-7'),
(4, '../admin panel/image/lawyer8.jpg.jpg', 'Humayl Khan', '1970-01-01', 'Adnan Khan', 'Pakistan', '1970-01-01', 'criminal lawyer', 'Partner', 'Adocate', 'Mon, Fri', '../admin panel/image/certificate.jpeg', '../admin panel/image/certificate.jpeg', 'Nothing', '../admin panel/image/voucher.jpeg', 2147483647, 'hk@gmail.com', 'Lahore', '82404-8887378-7'),
(5, '../admin panel/image/crlaw-1.jpg', 'Ali', '1970-01-01', 'ahmed', 'Pakistani', '1970-01-01', 'family lawyer', 'Managing partner', 'advocate, High Courts of Pakistan', 'Thurs, Fri', '../admin panel/image/LLb certificate.jpg', '../admin panel/image/', 'LLB', '../admin panel/image/lawyer_voucher.jpg', 2123674345, 'ali123@gmail.com', 'Hyderabad', '42000-2801123-2');

-- --------------------------------------------------------

--
-- Table structure for table `toplawyer`
--

CREATE TABLE `toplawyer` (
  `id` int(11) NOT NULL,
  `Name` varchar(255) DEFAULT NULL,
  `type` varchar(255) DEFAULT NULL,
  `bstatus` varchar(255) DEFAULT NULL,
  `bwork` varchar(255) DEFAULT NULL,
  `beducation` varchar(255) DEFAULT NULL,
  `btel` varchar(255) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `Image` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `userreview`
--

CREATE TABLE `userreview` (
  `id` int(11) NOT NULL,
  `name` varchar(255) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `rating` varchar(300) NOT NULL,
  `review` text DEFAULT NULL,
  `user_image` varchar(300) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `userreview`
--

INSERT INTO `userreview` (`id`, `name`, `email`, `rating`, `review`, `user_image`) VALUES
(3, 'Hafiz Mohammed Ali Siddiqui', 'hafizali_00@gmail.com', '5', 'Hello my name is Mohammed Ali...', '../admin panel/image/IMG-20230630-WA0004.jpg'),
(5, 'Mohammed Ali', 'mohammedali@gmail.com', '2', 'hoh3c3uch3cb3c 3vbcvu3gc 3gdc37gh', '../admin panel/image/lawyer2.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `user_log_sign`
--

CREATE TABLE `user_log_sign` (
  `Id` int(11) NOT NULL,
  `Username` varchar(300) NOT NULL,
  `email` varchar(255) DEFAULT NULL,
  `Password` varchar(300) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `user_log_sign`
--

INSERT INTO `user_log_sign` (`Id`, `Username`, `email`, `Password`) VALUES
(1, 'Hafiz Mohammed Ali ', 'hafizmohammedali@gmail.com', '$2y$10$xHE.Bpp4Qj1QnNwZ9YSH1uhb/77Lq2TRL5lytoKnCseGikhTSXa4y'),
(2, 'Ali', 'ali@gmail.com', '$2y$10$rnzeko8J.wxVjEgnKXarKeqpM4uknGSRhX8hMJgbAnGPW9U9g5Ila');

-- --------------------------------------------------------

--
-- Table structure for table `user_registration`
--

CREATE TABLE `user_registration` (
  `id` int(11) NOT NULL,
  `name` varchar(255) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `gender` varchar(255) DEFAULT NULL,
  `address` varchar(255) DEFAULT NULL,
  `city` varchar(255) DEFAULT NULL,
  `tel` varchar(255) DEFAULT NULL,
  `matter` varchar(300) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `user_registration`
--

INSERT INTO `user_registration` (`id`, `name`, `email`, `gender`, `address`, `city`, `tel`, `matter`) VALUES
(2, 'Mohammed Ali', 'mohammedali@gmail.com', 'Male', 'Garden City', 'Karachi', '03253508909', 'Hellobuvbwui'),
(3, 'Anus', 'anus@gmail.com', 'Male', 'gulberg town', 'Islamabad', '02112345671', 'abcd'),
(4, 'Bilal', 'bilal@gmail.com', 'Male', 'Garden West', 'Karachi', '02112367896', 'abcd'),
(5, 'Marya', 'marya@gmail.com', 'Female', 'f.b area blk 3', 'Karachi', '02134567891', 'gdy'),
(6, 'Minha', 'minha@gmail.com', 'Female', 'Gulberg', 'Islamabad', '02134567891', 'ghs'),
(7, 'marya', 'maryarao30@gmail.com', '', 'plot no 1617. porbander colony fb area block3', 'Karachi', '12345678901', 'wehd');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `affidavit`
--
ALTER TABLE `affidavit`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `email` (`email`);

--
-- Indexes for table `contactus`
--
ALTER TABLE `contactus`
  ADD PRIMARY KEY (`Id`),
  ADD UNIQUE KEY `email` (`email`);

--
-- Indexes for table `criminallawyer`
--
ALTER TABLE `criminallawyer`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `lawyerreg`
--
ALTER TABLE `lawyerreg`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `email` (`email`);

--
-- Indexes for table `lawyerregistration`
--
ALTER TABLE `lawyerregistration`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `email` (`email`);

--
-- Indexes for table `toplawyer`
--
ALTER TABLE `toplawyer`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `userreview`
--
ALTER TABLE `userreview`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `email` (`email`);

--
-- Indexes for table `user_log_sign`
--
ALTER TABLE `user_log_sign`
  ADD PRIMARY KEY (`Id`),
  ADD UNIQUE KEY `email` (`email`);

--
-- Indexes for table `user_registration`
--
ALTER TABLE `user_registration`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `email` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `affidavit`
--
ALTER TABLE `affidavit`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `contactus`
--
ALTER TABLE `contactus`
  MODIFY `Id` int(200) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `criminallawyer`
--
ALTER TABLE `criminallawyer`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `lawyerreg`
--
ALTER TABLE `lawyerreg`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=40;

--
-- AUTO_INCREMENT for table `lawyerregistration`
--
ALTER TABLE `lawyerregistration`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `toplawyer`
--
ALTER TABLE `toplawyer`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `userreview`
--
ALTER TABLE `userreview`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `user_log_sign`
--
ALTER TABLE `user_log_sign`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `user_registration`
--
ALTER TABLE `user_registration`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
