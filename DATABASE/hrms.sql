-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Aug 19, 2024 at 02:14 PM
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
-- Database: `hrms`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` int(11) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `firstname` varchar(255) NOT NULL,
  `middlename` varchar(255) NOT NULL,
  `lastname` varchar(255) NOT NULL,
  `birthdate` varchar(255) NOT NULL,
  `gender` varchar(255) NOT NULL,
  `bloodgroup` varchar(255) NOT NULL,
  `number` bigint(11) NOT NULL,
  `address` varchar(255) NOT NULL,
  `city` varchar(255) NOT NULL,
  `bio` varchar(255) NOT NULL,
  `skill` varchar(255) NOT NULL,
  `education_experience` varchar(255) NOT NULL,
  `website` varchar(255) NOT NULL,
  `language` varchar(255) NOT NULL,
  `profile_pic` varchar(255) NOT NULL,
  `tagline` varchar(255) NOT NULL,
  `username` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `email`, `password`, `firstname`, `middlename`, `lastname`, `birthdate`, `gender`, `bloodgroup`, `number`, `address`, `city`, `bio`, `skill`, `education_experience`, `website`, `language`, `profile_pic`, `tagline`, `username`) VALUES
(34, 'admin@gmail.com', 'Admin123', 'Pratik', 'J.', 'Mehta', '', 'Male', 'A+', 9712117087, 'Rajkot', 'rajkot', 'Learner', 'Developer', '2Year', 'pm.titanslab.in', 'English', 'user.png', 'web dev ', 'admin@2205');

-- --------------------------------------------------------

--
-- Table structure for table `attendance`
--

CREATE TABLE `attendance` (
  `Attendance_Id` int(11) NOT NULL,
  `Date` varchar(255) NOT NULL,
  `Employee` int(11) NOT NULL,
  `Attendance` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `attendance`
--

INSERT INTO `attendance` (`Attendance_Id`, `Date`, `Employee`, `Attendance`) VALUES
(12, '2023-03-27', 76, 'present');

-- --------------------------------------------------------

--
-- Table structure for table `department`
--

CREATE TABLE `department` (
  `Department_Id` int(11) NOT NULL,
  `Department_Name` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `department`
--

INSERT INTO `department` (`Department_Id`, `Department_Name`) VALUES
(11, 'Andriod'),
(12, 'ios'),
(13, '.net'),
(14, 'web devlopment ');

-- --------------------------------------------------------

--
-- Table structure for table `employee`
--

CREATE TABLE `employee` (
  `Employee_Id` int(10) NOT NULL,
  `Employee_Name` varchar(100) NOT NULL,
  `Email` varchar(50) NOT NULL,
  `Mobile_Number` varchar(10) NOT NULL,
  `Birthdate` varchar(50) NOT NULL,
  `Gender` varchar(10) NOT NULL,
  `Department` int(11) NOT NULL,
  `Password` varchar(10) NOT NULL,
  `Joinning_Date` varchar(50) NOT NULL,
  `Address` varchar(100) NOT NULL,
  `Employee_Username` varchar(50) NOT NULL,
  `Education_Experience` varchar(100) NOT NULL,
  `Parents_Number` varchar(15) NOT NULL,
  `Salary` varchar(10) NOT NULL,
  `Employee_Photo` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `employee`
--

INSERT INTO `employee` (`Employee_Id`, `Employee_Name`, `Email`, `Mobile_Number`, `Birthdate`, `Gender`, `Department`, `Password`, `Joinning_Date`, `Address`, `Employee_Username`, `Education_Experience`, `Parents_Number`, `Salary`, `Employee_Photo`) VALUES
(76, 'pratik', 'premmehta7607@gmail.com', '9724862003', '2002-05-22', 'Male', 14, 'pratik@123', '2023-04-01', 'rajkot', 'Pratik_02', ' b.tech in computer IT', '9724862003', '40000', 'user.png');

-- --------------------------------------------------------

--
-- Table structure for table `employee_bank_detail`
--

CREATE TABLE `employee_bank_detail` (
  `Bank_id` int(11) NOT NULL,
  `Bank_Holder_Name` varchar(250) NOT NULL,
  `Bank_Acc_Number` varchar(250) NOT NULL,
  `Bank_IFSC_Code` varchar(250) NOT NULL,
  `Employee_Id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `employee_bank_detail`
--

INSERT INTO `employee_bank_detail` (`Bank_id`, `Bank_Holder_Name`, `Bank_Acc_Number`, `Bank_IFSC_Code`, `Employee_Id`) VALUES
(9, 'Pratik  ', '1023456789  ', '10101010  ', 76);

-- --------------------------------------------------------

--
-- Table structure for table `employee_document`
--

CREATE TABLE `employee_document` (
  `Document_Id` int(100) NOT NULL,
  `Resume` varchar(250) NOT NULL,
  `Aadhar_Card` varchar(250) NOT NULL,
  `Joinning_Letter` varchar(250) NOT NULL,
  `Pan_Card` varchar(250) NOT NULL,
  `Employee_Id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `employee_document`
--

INSERT INTO `employee_document` (`Document_Id`, `Resume`, `Aadhar_Card`, `Joinning_Letter`, `Pan_Card`, `Employee_Id`) VALUES
(39, 'Screenshot (119).png', 'Screenshot (116).png', 'Screenshot (184).png', 'Screenshot (183).png', 76);

-- --------------------------------------------------------

--
-- Table structure for table `employee_leave`
--

CREATE TABLE `employee_leave` (
  `Leave_Id` int(11) NOT NULL,
  `Leave_Discription` varchar(250) NOT NULL,
  `Leave_Date` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `employee_leave`
--

INSERT INTO `employee_leave` (`Leave_Id`, `Leave_Discription`, `Leave_Date`) VALUES
(7, 'Makar Sankrati', '2023-01-14'),
(8, 'Republic Day', '2023-01-26'),
(9, 'Holi', '2023-03-08'),
(10, 'Independance Day', '2023-08-15'),
(11, 'Raksha Bandhan', '2023-08-30'),
(12, 'Janmashtami', '2023-09-07'),
(13, 'Mahatma Gandhi Jayanti', '2023-10-02'),
(14, 'Dussehra', '2023-10-24'),
(15, 'Dipavali', '2023-11-12'),
(16, 'Chirstmas', '2023-12-25');

-- --------------------------------------------------------

--
-- Table structure for table `employee_tax`
--

CREATE TABLE `employee_tax` (
  `Tax_Id` int(11) NOT NULL,
  `From_Salary` varchar(250) NOT NULL,
  `To_Salary` varchar(250) NOT NULL,
  `Tax` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `employee_tax`
--

INSERT INTO `employee_tax` (`Tax_Id`, `From_Salary`, `To_Salary`, `Tax`) VALUES
(9, '10000', '20000', '10%'),
(10, '21000', '40000', '12%');

-- --------------------------------------------------------

--
-- Table structure for table `leaves`
--

CREATE TABLE `leaves` (
  `id` int(11) NOT NULL,
  `eid` int(11) NOT NULL COMMENT 'Employee Id',
  `ename` varchar(255) NOT NULL COMMENT 'Employee''s Username',
  `descr` varchar(255) NOT NULL COMMENT 'Leave  Reason',
  `formdate` varchar(255) NOT NULL,
  `todate` varchar(255) NOT NULL,
  `status` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `payroll_management`
--

CREATE TABLE `payroll_management` (
  `id` int(11) NOT NULL,
  `Employee_Id` varchar(255) NOT NULL,
  `Salary` varchar(255) NOT NULL,
  `Salary_month` varchar(255) NOT NULL,
  `tax` varchar(255) NOT NULL,
  `Total_Amount` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `payroll_management`
--

INSERT INTO `payroll_management` (`id`, `Employee_Id`, `Salary`, `Salary_month`, `tax`, `Total_Amount`) VALUES
(26, '77', '32000', '2023-03', '12%', '28160'),
(27, '76', '40000', '2023-01', '12%', '35200'),
(28, '77', '32000', '2023-02', '12%', '28160'),
(29, '77', '35000', '2023-02', '12%', '30800'),
(32, '76', '12000', '2023-03', '10%', '10800'),
(33, '76', '40000', '2023-06', '12%', '35200'),
(34, '77', '32000', '2023-09', '12%', '28160'),
(35, '76', '40000', '2023-01', '12%', '35200'),
(36, '76', '40000', '2023-01', '12%', '35200'),
(37, '76', '40000', '2023-10', '12%', '35200'),
(38, '76', '40000', '2023-10', '12%', '35200'),
(39, '76', '40000', '2023-09', '12%', '35200');

-- --------------------------------------------------------

--
-- Table structure for table `project`
--

CREATE TABLE `project` (
  `project_Id` int(11) NOT NULL,
  `project_name` varchar(255) NOT NULL,
  `project_start_date` varchar(255) NOT NULL,
  `project_end_date` varchar(255) NOT NULL,
  `project_details` varchar(255) NOT NULL,
  `project_status` varchar(255) NOT NULL,
  `Department` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `project`
--

INSERT INTO `project` (`project_Id`, `project_name`, `project_start_date`, `project_end_date`, `project_details`, `project_status`, `Department`) VALUES
(15, 'hms', '2023-03-01', '2023-03-31', 'hospital management ', 'running', 11),
(16, 'hotel booking app', '2023-04-01', '2023-04-30', 'hotel mobile app', 'upcoming', 12),
(17, 'hotel booking app', '2023-04-01', '2023-04-30', 'hotel mobile app', 'upcoming', 12),
(19, 'job protfolio 30', '2023-03-23', '2023-04-06', 'app', 'running', 14);

-- --------------------------------------------------------

--
-- Table structure for table `project_task`
--

CREATE TABLE `project_task` (
  `Task_Id` int(11) NOT NULL,
  `Task_Name` varchar(255) NOT NULL,
  `Task_Start_Date` varchar(255) NOT NULL,
  `Task_End_Date` varchar(255) NOT NULL,
  `Task_Details` varchar(255) NOT NULL,
  `Task_Status` varchar(255) NOT NULL,
  `project` int(11) NOT NULL,
  `Employee_Id` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `project_task`
--

INSERT INTO `project_task` (`Task_Id`, `Task_Name`, `Task_Start_Date`, `Task_End_Date`, `Task_Details`, `Task_Status`, `project`, `Employee_Id`) VALUES
(14, 'user panel designnig', '2023-01-01', '2023-04-10', 'make user panel design atractive and responsive', 'running', 15, '77'),
(16, 'tttt', '2024-08-07', '2024-08-29', 'tttt', 'running', 16, '76');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `attendance`
--
ALTER TABLE `attendance`
  ADD PRIMARY KEY (`Attendance_Id`),
  ADD KEY `Employee` (`Employee`);

--
-- Indexes for table `department`
--
ALTER TABLE `department`
  ADD PRIMARY KEY (`Department_Id`) USING BTREE;

--
-- Indexes for table `employee`
--
ALTER TABLE `employee`
  ADD PRIMARY KEY (`Employee_Id`),
  ADD KEY `demo` (`Department`);

--
-- Indexes for table `employee_bank_detail`
--
ALTER TABLE `employee_bank_detail`
  ADD PRIMARY KEY (`Bank_id`),
  ADD KEY `Employee_Id` (`Employee_Id`);

--
-- Indexes for table `employee_document`
--
ALTER TABLE `employee_document`
  ADD PRIMARY KEY (`Document_Id`),
  ADD KEY `Employee_Id` (`Employee_Id`);

--
-- Indexes for table `employee_leave`
--
ALTER TABLE `employee_leave`
  ADD PRIMARY KEY (`Leave_Id`);

--
-- Indexes for table `employee_tax`
--
ALTER TABLE `employee_tax`
  ADD PRIMARY KEY (`Tax_Id`);

--
-- Indexes for table `leaves`
--
ALTER TABLE `leaves`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `payroll_management`
--
ALTER TABLE `payroll_management`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `project`
--
ALTER TABLE `project`
  ADD PRIMARY KEY (`project_Id`),
  ADD KEY `Department` (`Department`);

--
-- Indexes for table `project_task`
--
ALTER TABLE `project_task`
  ADD PRIMARY KEY (`Task_Id`),
  ADD KEY `project` (`project`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=35;

--
-- AUTO_INCREMENT for table `attendance`
--
ALTER TABLE `attendance`
  MODIFY `Attendance_Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `department`
--
ALTER TABLE `department`
  MODIFY `Department_Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `employee`
--
ALTER TABLE `employee`
  MODIFY `Employee_Id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=84;

--
-- AUTO_INCREMENT for table `employee_bank_detail`
--
ALTER TABLE `employee_bank_detail`
  MODIFY `Bank_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `employee_document`
--
ALTER TABLE `employee_document`
  MODIFY `Document_Id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=40;

--
-- AUTO_INCREMENT for table `employee_leave`
--
ALTER TABLE `employee_leave`
  MODIFY `Leave_Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `employee_tax`
--
ALTER TABLE `employee_tax`
  MODIFY `Tax_Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `leaves`
--
ALTER TABLE `leaves`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `payroll_management`
--
ALTER TABLE `payroll_management`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=40;

--
-- AUTO_INCREMENT for table `project`
--
ALTER TABLE `project`
  MODIFY `project_Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT for table `project_task`
--
ALTER TABLE `project_task`
  MODIFY `Task_Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `attendance`
--
ALTER TABLE `attendance`
  ADD CONSTRAINT `attendance_ibfk_1` FOREIGN KEY (`Employee`) REFERENCES `employee` (`Employee_Id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `employee`
--
ALTER TABLE `employee`
  ADD CONSTRAINT `demo` FOREIGN KEY (`Department`) REFERENCES `department` (`Department_Id`) ON UPDATE CASCADE;

--
-- Constraints for table `employee_bank_detail`
--
ALTER TABLE `employee_bank_detail`
  ADD CONSTRAINT `employee_bank_detail_ibfk_1` FOREIGN KEY (`Employee_Id`) REFERENCES `employee` (`Employee_Id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `employee_document`
--
ALTER TABLE `employee_document`
  ADD CONSTRAINT `employee_document_ibfk_1` FOREIGN KEY (`Employee_Id`) REFERENCES `employee` (`Employee_Id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `project`
--
ALTER TABLE `project`
  ADD CONSTRAINT `project_ibfk_1` FOREIGN KEY (`Department`) REFERENCES `department` (`Department_Id`) ON UPDATE CASCADE;

--
-- Constraints for table `project_task`
--
ALTER TABLE `project_task`
  ADD CONSTRAINT `project_task_ibfk_1` FOREIGN KEY (`project`) REFERENCES `project` (`project_Id`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
