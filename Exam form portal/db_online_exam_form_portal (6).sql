-- phpMyAdmin SQL Dump
-- version 4.8.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 23, 2018 at 10:11 AM
-- Server version: 10.1.33-MariaDB
-- PHP Version: 7.2.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_online_exam_form_portal`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin_registration`
--

CREATE TABLE `admin_registration` (
  `id` int(4) NOT NULL,
  `college` varchar(60) NOT NULL,
  `university` varchar(40) NOT NULL,
  `email` varchar(30) NOT NULL,
  `password` varchar(30) NOT NULL,
  `website` varchar(30) NOT NULL,
  `city` varchar(20) NOT NULL,
  `state` varchar(20) NOT NULL,
  `mobile` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin_registration`
--

INSERT INTO `admin_registration` (`id`, `college`, `university`, `email`, `password`, `website`, `city`, `state`, `mobile`) VALUES
(17, 'NIT, Nagpur', 'rtmnu', 'anshu32123@gmail.com', '1234', 'www.nit.com', 'nagpur', 'MahÄrÄshtra', '7028870790'),
(18, 'nit', 'rtnu', 'rahul@gmail.com', '123456', 'www.nit.com', 'hydearabad', 'andhrapradesh', '1234567890'),
(19, 'rdbec', 'msbte', 'gk@gmail.com', '1234567', 'www.rr.com', 'nagpur', 'MahÄrÄshtra', '7028870790'),
(24, 'YCCE,Nagpur', 'RTMNU,Nagpur', 'kumargautam11gk@gmail.com', 'ycce', 'www.ycce.in', 'nagpur', 'Maharastra', '7028870790');

-- --------------------------------------------------------

--
-- Table structure for table `admission_to_next_sem`
--

CREATE TABLE `admission_to_next_sem` (
  `id` int(7) NOT NULL,
  `student_id` int(7) NOT NULL,
  `session_id` int(7) NOT NULL,
  `semester_id` int(7) NOT NULL,
  `year` varchar(12) NOT NULL,
  `college_id` int(7) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `course`
--

CREATE TABLE `course` (
  `id` int(4) NOT NULL,
  `course_name` varchar(70) NOT NULL,
  `course_short_name` varchar(10) NOT NULL,
  `course_code` varchar(20) NOT NULL,
  `credit` int(2) NOT NULL,
  `department_id` varchar(20) NOT NULL,
  `semester_id` varchar(20) NOT NULL,
  `session_id` varchar(20) NOT NULL,
  `year` varchar(10) NOT NULL,
  `elective_status` varchar(30) NOT NULL,
  `course_type` varchar(30) NOT NULL,
  `college_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `course`
--

INSERT INTO `course` (`id`, `course_name`, `course_short_name`, `course_code`, `credit`, `department_id`, `semester_id`, `session_id`, `year`, `elective_status`, `course_type`, `college_id`) VALUES
(9, 'Mathematics', 'm3', 'IT123', 3, '11', '9', '2', '2', 'Regular', 'Theory', 17),
(13, 'chemistry', 'chem', 'IT909', 3, '13', '10', '4', '4', 'Professional Elective(PE)', 'Practical-Lab', 17),
(14, 'Engineering Mathematics - III', 'M3', 'GE1201', 4, '16', '14', '11', 'Second', 'Regular', 'Theory', 24),
(15, 'Introduction to Information Technology', 'ITIT', 'IT1201', 3, '16', '14', '11', 'Second', 'Regular', 'Theory', 24),
(16, 'Microprocessor Based System Design', 'MBSD', 'IT1206', 4, '16', '14', '11', 'Second', 'Regular', 'Theory', 24),
(17, 'Lab: Microprocessor Based System Design', 'Lab: MBSD', 'IT1207', 1, '16', '14', '11', 'Second', 'Regular', 'Practical-Lab', 24),
(18, 'Algorithms & Data Structures ', 'ADS', 'IT1204', 4, '16', '14', '11', 'second', 'Regular', 'Theory', 24),
(19, 'Lab: Algorithms & Data Structures', 'Lab: ADS', 'IT1205', 1, '16', '14', '11', 'second', 'Regular', 'Practical-Lab', 24),
(20, 'Digital Circuits & Switching Theory', 'DCST', 'EE1213', 4, '16', '14', '11', 'second', 'Regular', 'Theory', 24),
(21, 'Lab: Digital Circuits & Switching Theory', 'Lab: DCST', 'EE1214', 1, '16', '14', '11', 'second', 'Regular', 'Practical-Lab', 24),
(22, 'Discrete Mathematics & Graph Theory ', 'dmgt', 'GE1206', 4, '16', '15', '11', 'Second', 'Regular', 'Theory', 24),
(23, 'Computer Architecture & Organization', 'cao', 'IT1208', 4, '16', '15', '11', 'Second', 'Regular', 'Theory', 24),
(24, 'Object Oriented Programming ', 'OOP', 'IT1202', 4, '16', '15', '11', 'Second', 'Regular', 'Theory', 24),
(25, 'Lab: Object Oriented Programming', 'OOP', 'IT1203', 1, '16', '15', '11', 'Second', 'Regular', 'Practical-Lab', 24),
(26, 'Theory of Computation', 'TOC', 'IT1209', 4, '16', '15', '11', 'Second', 'Regular', 'Theory', 24),
(27, 'Lab: Computer Workshop', 'Lab: CW', 'IT1210', 1, '16', '15', '11', 'Second', 'Regular', 'Practical-Lab', 24),
(28, 'Information Theory and Communication', 'ITC', 'ET1215', 4, '16', '15', '11', 'Second', 'Regular', 'Theory', 24),
(29, 'Lab: Information Theory and Communication', 'Lab: ITC', 'ET1216', 1, '16', '15', '11', 'Second', 'Regular', 'Practical-Lab', 24),
(30, 'Fundamental of Economics', 'FOM', 'GE1312', 3, '16', '16', '11', 'Third', 'Regular', 'Theory', 24),
(31, 'Operating Systems', 'OS', 'IT1303', 4, '16', '16', '11', 'Third', 'Regular', 'Theory', 24),
(32, 'Lab: Operating Systems', 'Lab: OS', 'IT1304', 1, '16', '16', '11', 'Third', 'Regular', 'Practical-Lab', 24),
(33, 'Software Engineering', 'SE', 'IT1305', 4, '16', '16', '11', 'Third', 'Regular', 'Theory', 24),
(34, 'Lab: Software Engineering', 'Lab: SE', 'IT1306', 1, '16', '16', '11', 'Third', 'Regular', 'Practical-Lab', 24),
(35, 'Data Base Management Systems', 'DBMS', 'IT1316', 4, '16', '16', '11', 'Third', 'Regular', 'Theory', 24),
(36, 'Lab: Data Base Management Systems', 'Lab: DBMS', 'IT1317', 1, '16', '16', '11', 'Third', 'Regular', 'Practical-Lab', 24),
(37, 'PE I :Computer Graphics', 'CG', 'IT1307', 4, '16', '16', '11', 'Third', 'Professional Elective I', 'Theory', 24),
(38, 'PE I :Embedded System', 'PE I :ES', 'IT1309', 4, '16', '16', '11', 'Third', 'Professional Elective I', 'Theory', 24),
(39, 'PE I :Digital Signal Processing', 'PE I :DSP', 'IT1326', 4, '16', '16', '11', 'Third', 'Professional Elective I', 'Theory', 24),
(40, 'PE I :Web Programming', 'PE I :WP', 'IT1327', 4, '16', '16', '11', 'Third', 'Professional Elective I', 'Theory', 24),
(41, 'PE I : Data Analysis & Statistics', 'PE I : DAS', 'IT1328', 4, '16', '16', '11', 'Second', 'Professional Elective I', 'Theory', 24),
(42, 'OE I: Web Technology', 'OE I: WT', 'IT1322', 3, '16', '16', '11', 'Third', 'Open Elective I', 'Theory', 24),
(43, 'OE I: Object oriented programming (Java)', 'OE I: OOP', 'IT1325', 3, '16', '16', '11', 'Third', 'Open Elective I', 'Theory', 24),
(44, 'Seminar', 'Seminar', 'IT1313', 1, '16', '16', '11', 'Third', 'Open Elective I', 'Theory', 24),
(45, 'Engineering Mathematics I', 'EM I', 'GE1101', 4, '16', '12', '11', 'First', 'Regular', 'Theory', 24),
(46, 'Engineering Physics', 'Physics', 'GE1105', 4, '16', '12', '11', 'First', 'Regular', 'Theory', 24),
(47, 'Engineering Physics Lab', 'Physics la', 'GE1106', 1, '16', '12', '11', 'First', 'Regular', 'Practical-Lab', 24),
(48, 'Communications Skills', 'CS', 'GE1107', 3, '16', '12', '11', 'First', 'Regular', 'Theory', 24),
(49, 'Engineering Mechanics', 'Emech', 'CV1101', 4, '16', '12', '11', 'First', 'Regular', 'Theory', 24),
(50, 'Engineering Mechanics Lab', '', 'CV1102', 1, '16', '12', '11', 'First', 'Regular', 'Practical-Lab', 24),
(51, 'Basic Electronics', 'BEL', 'EE1101', 4, '16', '12', '11', 'First', 'Regular', 'Theory', 24),
(52, 'Introduction to Computer Programing', 'ITCP', 'IT1101', 4, '16', '12', '11', 'First', 'Regular', 'Theory', 24),
(53, 'Introduction to Computer Programing Lab', 'Lab- ITCP', 'IT1102', 1, '16', '12', '11', 'First', 'Regular', 'Practical-Lab', 24),
(54, 'Engineering Mathematics II', 'EM II', 'GE1102', 4, '16', '13', '11', 'Second', 'Regular', 'Theory', 24),
(55, 'Engineering Chemistry', 'Chemistry', 'GE1103', 4, '16', '13', '11', 'Second', 'Regular', 'Theory', 24),
(56, 'Engineering Chemistry Lab', 'Lab-chomes', 'GE1104', 1, '16', '13', '11', 'Second', 'Regular', 'Practical-Lab', 24),
(57, 'Social Sciences', 'SS', 'GE1108', 3, '16', '13', '11', 'Second', 'Regular', 'Theory', 24),
(58, 'Electrical Engineering', 'EE', 'EL1101', 4, '16', '13', '11', 'Second', 'Regular', 'Theory', 24),
(59, 'Electrical Engineering Lab', 'Lab-EE', 'EL1102', 1, '16', '13', '11', 'Second', 'Regular', 'Practical-Lab', 24),
(60, 'Engineering Graphics', 'EG', 'ME1101', 1, '16', '13', '11', 'Second', 'Regular', 'Theory', 24),
(61, 'Engineering Graphics Lab', 'Lab-EG', 'ME1102', 2, '16', '13', '10', 'Second', 'Regular', 'Practical-Lab', 24),
(62, 'Workshop Practice', 'WP', 'ME1103', 1, '16', '13', '11', 'Second', 'Regular', 'Theory', 24);

-- --------------------------------------------------------

--
-- Table structure for table `department`
--

CREATE TABLE `department` (
  `id` int(4) NOT NULL,
  `department_name` varchar(70) NOT NULL,
  `department_short_name` varchar(20) NOT NULL,
  `department_hod_email` varchar(70) NOT NULL,
  `department_hod_name` varchar(50) NOT NULL,
  `department_mobile_number` varchar(14) NOT NULL,
  `department_start_date` varchar(20) NOT NULL,
  `student_capacity` varchar(8) NOT NULL,
  `college_id` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `department`
--

INSERT INTO `department` (`id`, `department_name`, `department_short_name`, `department_hod_email`, `department_hod_name`, `department_mobile_number`, `department_start_date`, `student_capacity`, `college_id`) VALUES
(11, 'Information Technology', 'IT', 'rahu@gmail.com', 'Dharmik sir', '789456123', '2018-09-23', '500', '17'),
(15, 'Electrical', '', 'department@gmail.com', 'deo', '07028870790', '2018-09-25', '1000', '17'),
(16, 'Information Technology', 'IT', 'itdepartment@gmail.com', 'Dharmik sir', '07028870799', '2018-09-26', 'nagpur', '24'),
(17, 'Civil Engineering', 'civil', '', '', '', '', '', '24'),
(18, 'Mechanical Engineering', 'mech', '', '', '', '', '', '24'),
(19, 'Electronics Engineering', 'EE', '', '', '', '', '', '24'),
(20, 'Electronics & Telecommunication', 'ETC', '', '', '', '', '', '24');

-- --------------------------------------------------------

--
-- Table structure for table `examination`
--

CREATE TABLE `examination` (
  `id` int(8) NOT NULL,
  `exam_name` varchar(40) NOT NULL,
  `session_id` int(8) NOT NULL,
  `semester_id` int(8) NOT NULL,
  `college_id` int(8) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `examination`
--

INSERT INTO `examination` (`id`, `exam_name`, `session_id`, `semester_id`, `college_id`) VALUES
(16, 'ODD', 14, 12, 24),
(17, 'ODD-RESET', 14, 12, 24);

-- --------------------------------------------------------

--
-- Table structure for table `exam_form`
--

CREATE TABLE `exam_form` (
  `id` int(4) NOT NULL,
  `student_id` int(8) NOT NULL,
  `student_type` varchar(20) NOT NULL,
  `course_id` int(8) NOT NULL,
  `reasons_for_unticked` varchar(100) NOT NULL,
  `form_filling_date` varchar(20) NOT NULL,
  `college_id` int(8) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `exam_form_date`
--

CREATE TABLE `exam_form_date` (
  `id` int(7) NOT NULL,
  `startdate` date NOT NULL,
  `enddate` date NOT NULL,
  `latedate` date NOT NULL,
  `latefees` varchar(20) NOT NULL,
  `college_id` int(7) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `exam_form_date`
--

INSERT INTO `exam_form_date` (`id`, `startdate`, `enddate`, `latedate`, `latefees`, `college_id`) VALUES
(2, '2018-10-26', '2018-10-31', '2018-11-05', '10', 24);

-- --------------------------------------------------------

--
-- Table structure for table `payment`
--

CREATE TABLE `payment` (
  `id` int(4) NOT NULL,
  `merchant_id` varchar(20) NOT NULL,
  `order_id` int(11) NOT NULL,
  `status` varchar(40) NOT NULL,
  `status_id` int(11) NOT NULL,
  `amount` float NOT NULL,
  `refunded` float NOT NULL,
  `amount_refunded` float NOT NULL,
  `return_url` tinytext NOT NULL,
  `txn_id` varchar(50) NOT NULL,
  `gateway_id` int(11) NOT NULL,
  `bank_error_code` varchar(50) NOT NULL,
  `bank_error_message` varchar(100) NOT NULL,
  `ip_address` varchar(30) NOT NULL,
  `dat_time` varchar(20) NOT NULL,
  `currency` varchar(30) NOT NULL,
  `bank_tnx_id` varchar(200) NOT NULL,
  `bank_name` varchar(50) NOT NULL,
  `hash_key` varchar(155) NOT NULL,
  `payment_mode` varchar(50) NOT NULL,
  `college_id` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `receipt_generate`
--

CREATE TABLE `receipt_generate` (
  `id` int(4) NOT NULL,
  `registration_id` varchar(20) NOT NULL,
  `department _id` varchar(30) NOT NULL,
  `semester` varchar(10) NOT NULL,
  `receipt_no` varchar(20) NOT NULL,
  `category` varchar(20) NOT NULL,
  `year` varchar(20) NOT NULL,
  `receipt_from` varchar(20) NOT NULL,
  `session` varchar(10) NOT NULL,
  `date` date NOT NULL,
  `admission_batch` varchar(10) NOT NULL,
  `student_type` varchar(10) NOT NULL,
  `college_id` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `result`
--

CREATE TABLE `result` (
  `id` int(4) NOT NULL,
  `registration_id` varchar(50) NOT NULL,
  `total_mark` int(11) NOT NULL,
  `cutoff_mark` varchar(50) NOT NULL,
  `obtain_mark` float NOT NULL,
  `grade` varchar(11) NOT NULL,
  `course_code` varchar(40) NOT NULL,
  `course_name` varchar(60) NOT NULL,
  `num_of_attempt` int(4) NOT NULL,
  `student_type` varchar(10) NOT NULL,
  `sgpa` float NOT NULL,
  `cgpa` float NOT NULL,
  `college_id` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `result`
--

INSERT INTO `result` (`id`, `registration_id`, `total_mark`, `cutoff_mark`, `obtain_mark`, `grade`, `course_code`, `course_name`, `num_of_attempt`, `student_type`, `sgpa`, `cgpa`, `college_id`) VALUES
(10, '15010063', 200, '80', 150, 'A++', 'CCT123', 'm3', 3, 'ex', 0, 8.1, '17'),
(11, '15010068', 100, '40', 60, 'B++', 'IT123', 'math', 1, 'EX-Student', 0, 7.1, '17'),
(13, '15010068', 100, '40', 30, '0', 'IT123', 'math', 1, 'EX-Student', 0, 7.1, '17'),
(14, '15010068', 100, '40', 30, '0', 'IT123', 'math', 1, 'EX-Student', 0, 7.1, '17'),
(15, '15010068', 100, '40', 30, '0', 'IT123', 'math', 1, 'EX-Student', 0, 7.1, '17'),
(16, '15010068', 100, '40', 30, '0', 'IT123', 'math', 1, 'EX-Student', 0, 7.1, '17'),
(17, '15010068', 100, '40', 30, '0', 'IT123', 'math', 1, 'EX-Student', 0, 7.1, '17'),
(18, '15010068', 100, '40', 30, '0', 'IT123', 'math', 1, 'EX-Student', 0, 7.1, '17'),
(19, '15010068', 100, '40', 30, '0', 'IT123', 'math', 1, 'EX-Student', 0, 7.1, '17'),
(22, '15010068', 100, '40', 60, 'B++', 'IT123', 'math', 1, 'EX-Student', 0, 7.1, '17'),
(23, '15010068', 100, '40', 60, 'B++', 'IT123', 'math', 1, 'EX-Student', 0, 7.1, '17');

-- --------------------------------------------------------

--
-- Table structure for table `result_csv_table`
--

CREATE TABLE `result_csv_table` (
  `id` int(7) NOT NULL,
  `result_name` varchar(50) NOT NULL,
  `session` varchar(20) NOT NULL,
  `course_code` varchar(15) NOT NULL,
  `registration_id` varchar(20) NOT NULL,
  `semester_name` varchar(20) NOT NULL,
  `grade` varchar(20) NOT NULL,
  `date_of_result_declaration` varchar(20) NOT NULL,
  `college_id` int(7) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `result_csv_table`
--

INSERT INTO `result_csv_table` (`id`, `result_name`, `session`, `course_code`, `registration_id`, `semester_name`, `grade`, `date_of_result_declaration`, `college_id`) VALUES
(127, 'ODD', '2015-16', 'GE1101', '15010063', 'I', 'F', '09-10-2018', 24),
(128, 'ODD', '2015-16', 'GE1105', '15010063', 'I', 'B', '09-10-2018', 24),
(129, 'ODD', '2015-16', 'GE1106', '15010063', 'I', 'F', '09-10-2018', 24),
(130, 'ODD', '2015-16', 'GE1107', '15010063', 'I', 'C', '09-10-2018', 24),
(131, 'ODD', '2015-16', 'CV1101', '15010063', 'I', 'F', '09-10-2018', 24),
(132, 'ODD', '2015-16', 'CV1102', '15010063', 'I', 'F', '09-10-2018', 24),
(133, 'ODD', '2015-16', 'EE1101', '15010063', 'I', 'A', '09-10-2018', 24),
(134, 'ODD', '2015-16', 'IT1101', '15010063', 'I', 'F', '09-10-2018', 24),
(135, 'ODD', '2015-16', 'IT1102', '15010063', 'I', 'B', '09-10-2018', 24);

-- --------------------------------------------------------

--
-- Table structure for table `result_table`
--

CREATE TABLE `result_table` (
  `id` int(8) NOT NULL,
  `result_name` varchar(40) NOT NULL,
  `session_id` varchar(20) NOT NULL,
  `student_id` int(8) NOT NULL,
  `semester_id` int(8) NOT NULL,
  `mse1` float NOT NULL,
  `mse2` float NOT NULL,
  `teacher_assessment` float NOT NULL,
  `total_internal_marks` float NOT NULL,
  `external_marks` float NOT NULL,
  `total_obtained_marks` float NOT NULL,
  `grade` varchar(5) NOT NULL,
  `sgpa` float NOT NULL,
  `cgpa` float NOT NULL,
  `college_id` int(8) NOT NULL,
  `date_of_updating_data` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `semester`
--

CREATE TABLE `semester` (
  `id` int(4) NOT NULL,
  `semester_name` varchar(20) NOT NULL,
  `term` varchar(10) NOT NULL,
  `college_id` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `semester`
--

INSERT INTO `semester` (`id`, `semester_name`, `term`, `college_id`) VALUES
(9, 'first', 'odd', '17'),
(10, 'second', 'even', '17'),
(12, 'I', 'odd', '24'),
(13, 'II', 'even', '24'),
(14, 'III', 'odd', '24'),
(15, 'IV', 'even', '24'),
(16, 'V', 'odd', '24'),
(17, 'VI', 'even', '24'),
(18, 'VII', 'odd', '24'),
(19, 'VIII', 'even', '24');

-- --------------------------------------------------------

--
-- Table structure for table `session`
--

CREATE TABLE `session` (
  `id` int(4) NOT NULL,
  `session` varchar(20) NOT NULL,
  `college_id` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `session`
--

INSERT INTO `session` (`id`, `session`, `college_id`) VALUES
(2, '2015-16', '17'),
(4, '2017-19', '17'),
(14, '2015-16', '24'),
(15, '2016-17', '24'),
(16, '2017-18', '24'),
(17, '2018-19', '24');

-- --------------------------------------------------------

--
-- Table structure for table `student_registration`
--

CREATE TABLE `student_registration` (
  `id` int(4) NOT NULL,
  `name` varchar(40) NOT NULL,
  `registration_id` varchar(50) NOT NULL,
  `email` varchar(60) NOT NULL,
  `password` varchar(50) NOT NULL,
  `college_id` varchar(10) NOT NULL,
  `gender` varchar(10) NOT NULL,
  `dob` varchar(10) NOT NULL,
  `category` varchar(30) NOT NULL,
  `blood_group` varchar(6) NOT NULL,
  `program_name` varchar(60) NOT NULL,
  `session` varchar(12) DEFAULT NULL,
  `department` varchar(60) NOT NULL,
  `semester` varchar(20) NOT NULL,
  `section` varchar(3) DEFAULT NULL,
  `mobile` varchar(14) NOT NULL,
  `parents_name` varchar(50) DEFAULT NULL,
  `parents_number` varchar(14) DEFAULT NULL,
  `registration_date` varchar(20) NOT NULL,
  `address` varchar(80) NOT NULL,
  `profile_pic` longblob
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `student_registration`
--

INSERT INTO `student_registration` (`id`, `name`, `registration_id`, `email`, `password`, `college_id`, `gender`, `dob`, `category`, `blood_group`, `program_name`, `session`, `department`, `semester`, `section`, `mobile`, `parents_name`, `parents_number`, `registration_date`, `address`, `profile_pic`) VALUES
(12, 'Gautam Kumar', '16030120', 'anshu32123@gmail.com', '123', '17', 'male', '2015-09-22', 'open', 'o', 'B.E', '2013-2014', 'Information Technology', 'first', 'A', '7028870790', 'Gautam Kumar', '07028870790', '2018-09-22', 'Zingabai Takli\r\nopp. oasis nusingh home .', ''),
(13, 'Gautam Kumar', '15010068', 'anshu3@gmail.com', '1234', '17', 'male', '2018-09-22', 'obc', 'A+', 'B.E', '2012-2013', 'Information Technology', 'first', 'A', '7028870790', 'Gautam Kumar', '07028870790', '2018-09-22', 'Zingabai Takli\r\nopp. oasis nusingh home .', ''),
(14, 'Gautam Kumar', '15010063', 'gautam@gmail.com', 'gautam', '24', 'male', '1998-11-11', 'obc', 'A+', 'B.E', '2015-16', 'Information Technology', 'I', 'A', '7028870790', 'Vijay Kumar singh', '07028870790', '2015-06-26', 'Zingabai Takli\r\nopp. oasis nusingh home .', 0x75706c6f61642f494d475f303039352e4a5047),
(15, 'Pooja nakhale', '15030128', 'poojanakhale20@gmail.com', '1234', '24', 'female', '2018-09-10', 'obc', 'A', 'B.E', '2015-16', 'Information Technology', 'I', 'A', '9834331201', 'janarao nakhale', '9665273868', '2015-06-28', 'at-parseoni', ''),
(16, 'kalyani gaidhane', '15030129', 'kallu@123', '12345', '24', 'female', '2018-09-28', 'obc', 'A', 'B.E', '2015-16', 'Information Technology', 'I', 'A', '8412921170', 'saraj gaidhane', '11222334455', '2015-06-28', 'nagpur', ''),
(17, 'Amruta Tarke', '15030130', 'amrutatarke@gmail.com', '123456', '24', 'female', '2018-09-28', 'open', 'B', 'B.E', '2015-16', 'Information Technology', 'I', 'A', '9665197078', 'aman', '9665273868', '2015-06-28', 'at-nagpur', ''),
(18, 'Rakesh Kumar', '15010093', 'rakesh@gmail.com', 'rakesh', '24', 'male', '1998-09-28', 'obc', 'A+', 'B.E', '2015-16', 'Information Technology', 'I', 'A', '789456123', 'Rky', '123456789', '2015-06-28', 'bihar', 0x75706c6f61642f),
(24, 'rahul', '15010093', 'rahul@gmail.com', 'rahul', '24', 'male', '1998-10-02', 'obc', 'A', 'B.E', '2015-16', 'Information Technology', 'I', 'A', '1234560789', 'asdfg', '123456789', '2015-10-02', 'qwertyuiop', 0x75706c6f61642f323830576174422e6a7067),
(25, 'sonu', '15010099', 'sonu@gmail.com', 'sonu', '24', 'male', '1998-10-02', 'obc', 'A', 'B.E', '2015-16', 'Information Technology', 'I', 'A', '789455613', 'asdfghj', '123456789', '2015-10-02', 'qwertyuiopdfghjkl', 0x2e2e2f75706c6f61642f323830576174422e6a7067);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin_registration`
--
ALTER TABLE `admin_registration`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `admission_to_next_sem`
--
ALTER TABLE `admission_to_next_sem`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `course`
--
ALTER TABLE `course`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `department`
--
ALTER TABLE `department`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `examination`
--
ALTER TABLE `examination`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `exam_form`
--
ALTER TABLE `exam_form`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `exam_form_date`
--
ALTER TABLE `exam_form_date`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `payment`
--
ALTER TABLE `payment`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `receipt_generate`
--
ALTER TABLE `receipt_generate`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `result`
--
ALTER TABLE `result`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `result_csv_table`
--
ALTER TABLE `result_csv_table`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `result_table`
--
ALTER TABLE `result_table`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `semester`
--
ALTER TABLE `semester`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `session`
--
ALTER TABLE `session`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `student_registration`
--
ALTER TABLE `student_registration`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin_registration`
--
ALTER TABLE `admin_registration`
  MODIFY `id` int(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;

--
-- AUTO_INCREMENT for table `admission_to_next_sem`
--
ALTER TABLE `admission_to_next_sem`
  MODIFY `id` int(7) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `course`
--
ALTER TABLE `course`
  MODIFY `id` int(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=63;

--
-- AUTO_INCREMENT for table `department`
--
ALTER TABLE `department`
  MODIFY `id` int(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT for table `examination`
--
ALTER TABLE `examination`
  MODIFY `id` int(8) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `exam_form`
--
ALTER TABLE `exam_form`
  MODIFY `id` int(4) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `exam_form_date`
--
ALTER TABLE `exam_form_date`
  MODIFY `id` int(7) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `payment`
--
ALTER TABLE `payment`
  MODIFY `id` int(4) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `receipt_generate`
--
ALTER TABLE `receipt_generate`
  MODIFY `id` int(4) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `result`
--
ALTER TABLE `result`
  MODIFY `id` int(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- AUTO_INCREMENT for table `result_csv_table`
--
ALTER TABLE `result_csv_table`
  MODIFY `id` int(7) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=136;

--
-- AUTO_INCREMENT for table `result_table`
--
ALTER TABLE `result_table`
  MODIFY `id` int(8) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `semester`
--
ALTER TABLE `semester`
  MODIFY `id` int(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT for table `session`
--
ALTER TABLE `session`
  MODIFY `id` int(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `student_registration`
--
ALTER TABLE `student_registration`
  MODIFY `id` int(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
