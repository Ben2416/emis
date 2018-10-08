-- phpMyAdmin SQL Dump
-- version 4.1.14
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Oct 08, 2018 at 12:15 PM
-- Server version: 5.6.17
-- PHP Version: 5.6.37

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `loans`
--

-- --------------------------------------------------------

--
-- Table structure for table `accounts`
--

CREATE TABLE IF NOT EXISTS `accounts` (
  `acid` int(11) NOT NULL AUTO_INCREMENT,
  `account_name` varchar(255) NOT NULL,
  `account_number` varchar(255) NOT NULL,
  `bank_name` varchar(255) NOT NULL,
  `account_officer` varchar(255) NOT NULL,
  `account_phone_number` varchar(255) NOT NULL,
  `account_notes` varchar(255) NOT NULL,
  `added` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `addedby` int(11) NOT NULL,
  `status` int(11) NOT NULL DEFAULT '0',
  PRIMARY KEY (`acid`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `accounts`
--

INSERT INTO `accounts` (`acid`, `account_name`, `account_number`, `bank_name`, `account_officer`, `account_phone_number`, `account_notes`, `added`, `addedby`, `status`) VALUES
(1, 'Bayelsa State Higer Education Student Loan Board', '0158380086', 'GTB', 'Mr. Banker', '08022342342', 'fasddfasodifajfjaso jfoasdjfoia sdf', '2018-10-05 10:04:24', 0, 0);

-- --------------------------------------------------------

--
-- Table structure for table `admin_users`
--

CREATE TABLE IF NOT EXISTS `admin_users` (
  `user_id` int(11) NOT NULL AUTO_INCREMENT,
  `firstname` varchar(255) NOT NULL,
  `lastname` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `phone` varchar(255) NOT NULL,
  `sex` varchar(255) NOT NULL,
  `clearpass` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `passport` varchar(255) NOT NULL,
  `address` longtext NOT NULL,
  `status` int(11) NOT NULL DEFAULT '-1',
  `datetime` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`user_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `admin_users`
--

INSERT INTO `admin_users` (`user_id`, `firstname`, `lastname`, `email`, `phone`, `sex`, `clearpass`, `password`, `passport`, `address`, `status`, `datetime`) VALUES
(1, 'Benedict', 'Onabe', 'realbenten@gmail.com', '07035484893', 'Male', 'password', '5baa61e4c9b93f3f0682250b6cf8331b7ee68fd8', 'BenedictOnabe07035484893.jpg', 'Pasali, Kuje, FCT', 1, '2018-09-23 22:14:15');

-- --------------------------------------------------------

--
-- Table structure for table `batches`
--

CREATE TABLE IF NOT EXISTS `batches` (
  `bid` int(11) NOT NULL AUTO_INCREMENT,
  `batch_year` varchar(255) NOT NULL,
  `added` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `status` int(11) NOT NULL DEFAULT '0',
  PRIMARY KEY (`bid`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `batches`
--

INSERT INTO `batches` (`bid`, `batch_year`, `added`, `status`) VALUES
(1, '2018/2019', '2018-10-08 08:33:57', 0);

-- --------------------------------------------------------

--
-- Table structure for table `expenses`
--

CREATE TABLE IF NOT EXISTS `expenses` (
  `eid` int(11) NOT NULL AUTO_INCREMENT,
  `expense_type` varchar(255) NOT NULL,
  `expense_recurring` varchar(255) NOT NULL,
  `expense_invoice` varchar(255) NOT NULL,
  `expense_note` text NOT NULL,
  `addedby` int(11) NOT NULL,
  `added` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `status` int(11) NOT NULL DEFAULT '0',
  PRIMARY KEY (`eid`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `expenses`
--

INSERT INTO `expenses` (`eid`, `expense_type`, `expense_recurring`, `expense_invoice`, `expense_note`, `addedby`, `added`, `status`) VALUES
(1, 'Office Stationaries', 'yes', 'invoice_1538941698.jpg', 'dsfasdf fasdf', 1, '2018-10-07 19:50:25', 0);

-- --------------------------------------------------------

--
-- Table structure for table `funds`
--

CREATE TABLE IF NOT EXISTS `funds` (
  `fid` int(11) NOT NULL AUTO_INCREMENT,
  `account` int(11) NOT NULL,
  `amount` varchar(255) NOT NULL,
  `fund_source` varchar(255) NOT NULL,
  `fund_approval` varchar(255) NOT NULL,
  `addedby` int(11) NOT NULL,
  `added` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `status` int(11) NOT NULL DEFAULT '0',
  PRIMARY KEY (`fid`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `funds`
--

INSERT INTO `funds` (`fid`, `account`, `amount`, `fund_source`, `fund_approval`, `addedby`, `added`, `status`) VALUES
(1, 1, '70000000', 'State Government', 'fund_approval_1538738867.png', 1, '2018-10-05 11:27:47', 0);

-- --------------------------------------------------------

--
-- Table structure for table `loan_applications`
--

CREATE TABLE IF NOT EXISTS `loan_applications` (
  `loan_id` int(11) NOT NULL AUTO_INCREMENT,
  `user_id` int(11) NOT NULL,
  `loan_type` varchar(255) NOT NULL,
  `loan_amount` varchar(255) NOT NULL,
  `batch` int(11) NOT NULL,
  `guarantor_title` varchar(255) NOT NULL,
  `guarantor_fname` varchar(255) NOT NULL,
  `guarantor_lname` varchar(255) NOT NULL,
  `guarantor_phone` varchar(255) NOT NULL,
  `guarantor_altphone` varchar(255) NOT NULL,
  `guarantor_address` varchar(255) NOT NULL,
  `guarantor_state` varchar(255) NOT NULL,
  `guarantor_occupation` varchar(255) NOT NULL,
  `guarantor_emp` varchar(255) NOT NULL,
  `guarantor_position` varchar(255) NOT NULL,
  `guarantor_relatn` varchar(255) NOT NULL,
  `added` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `status` int(11) NOT NULL DEFAULT '0',
  `academic_year` varchar(255) NOT NULL,
  `semester_level` varchar(255) NOT NULL,
  `programme_start_date` varchar(255) NOT NULL,
  `programme_end_date` varchar(255) NOT NULL,
  PRIMARY KEY (`loan_id`),
  UNIQUE KEY `user_id` (`user_id`,`batch`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- Dumping data for table `loan_applications`
--

INSERT INTO `loan_applications` (`loan_id`, `user_id`, `loan_type`, `loan_amount`, `batch`, `guarantor_title`, `guarantor_fname`, `guarantor_lname`, `guarantor_phone`, `guarantor_altphone`, `guarantor_address`, `guarantor_state`, `guarantor_occupation`, `guarantor_emp`, `guarantor_position`, `guarantor_relatn`, `added`, `status`, `academic_year`, `semester_level`, `programme_start_date`, `programme_end_date`) VALUES
(3, 1, 'Postgraduate', '75000', 1, 'Mr', 'Thomas', 'Ben', '8748392877', '83374839289', '41 road', 'Bayelsa', 'Public Servant', 'Federal Government', 'Senator', 'Employee', '2018-10-07 21:47:29', 1, '2017/2018', 'Semester 1', '2014-09-01', '2019-09-09');

-- --------------------------------------------------------

--
-- Table structure for table `loan_details`
--

CREATE TABLE IF NOT EXISTS `loan_details` (
  `loan_id` int(11) NOT NULL AUTO_INCREMENT,
  `user_id` int(11) NOT NULL,
  `first_name` varchar(255) NOT NULL,
  `last_name` varchar(255) NOT NULL,
  `email_add` varchar(255) NOT NULL,
  `phone_number` varchar(255) NOT NULL,
  `state_of_origin` varchar(255) NOT NULL,
  `lga` varchar(255) NOT NULL,
  `mode_identity` varchar(255) NOT NULL,
  `dob` varchar(255) NOT NULL,
  `bvn` varchar(255) NOT NULL,
  `matric_number` varchar(255) NOT NULL,
  `student_id_number` varchar(255) NOT NULL,
  `university_name` varchar(255) NOT NULL,
  `course_of_study` varchar(255) NOT NULL,
  `program_start_date` varchar(255) NOT NULL,
  `program_end_date` varchar(255) NOT NULL,
  `uni_contact_person` varchar(255) NOT NULL,
  `uni_contact_person_phone` varchar(255) NOT NULL,
  `loan_type` varchar(255) NOT NULL,
  `loan_amount` varchar(255) NOT NULL,
  `added` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `dob_file` varchar(255) NOT NULL,
  `lga_file` varchar(255) NOT NULL,
  `mid_file` varchar(255) NOT NULL,
  `ref_file` varchar(255) NOT NULL,
  `adl_file` varchar(255) NOT NULL,
  `csr_file` varchar(255) NOT NULL,
  `status` int(11) NOT NULL DEFAULT '0',
  `address` varchar(255) NOT NULL,
  `state_of_residence` varchar(255) NOT NULL,
  `senatorial_district` varchar(255) NOT NULL,
  `town_of_origin` varchar(255) NOT NULL,
  `village_of_origin` varchar(255) NOT NULL,
  `father_name` varchar(255) NOT NULL,
  `mother_name` varchar(255) NOT NULL,
  `father_phone` varchar(255) NOT NULL,
  `mother_phone` varchar(255) NOT NULL,
  `father_state_of_origin` varchar(255) NOT NULL,
  `mother_state_of_origin` varchar(255) NOT NULL,
  `bank_name` varchar(255) NOT NULL,
  `account_number` varchar(255) NOT NULL,
  `university_state` varchar(255) NOT NULL,
  `other_university` varchar(255) NOT NULL,
  `university_city` varchar(255) NOT NULL,
  `anticipated_degree` varchar(255) NOT NULL,
  `university_level` varchar(255) NOT NULL,
  `semester_level` varchar(255) NOT NULL,
  `current_result` varchar(255) NOT NULL,
  `std_housing` varchar(255) NOT NULL,
  `std_address` varchar(255) NOT NULL,
  PRIMARY KEY (`loan_id`),
  UNIQUE KEY `user_id` (`user_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `loan_details`
--

INSERT INTO `loan_details` (`loan_id`, `user_id`, `first_name`, `last_name`, `email_add`, `phone_number`, `state_of_origin`, `lga`, `mode_identity`, `dob`, `bvn`, `matric_number`, `student_id_number`, `university_name`, `course_of_study`, `program_start_date`, `program_end_date`, `uni_contact_person`, `uni_contact_person_phone`, `loan_type`, `loan_amount`, `added`, `dob_file`, `lga_file`, `mid_file`, `ref_file`, `adl_file`, `csr_file`, `status`, `address`, `state_of_residence`, `senatorial_district`, `town_of_origin`, `village_of_origin`, `father_name`, `mother_name`, `father_phone`, `mother_phone`, `father_state_of_origin`, `mother_state_of_origin`, `bank_name`, `account_number`, `university_state`, `other_university`, `university_city`, `anticipated_degree`, `university_level`, `semester_level`, `current_result`, `std_housing`, `std_address`) VALUES
(1, 1, 'Benedict', 'Onabe', 'realbenten@gmail.com', '07035484893', 'CROSS RIVER', 'Brass', 'International Passport', '2018-10-10', '23408209432', '243213', '242342', 'Niger Delta University', 'Computer Science', '2018-10-01', '2018-10-31', 'Mr Onah Mike', '0803923423', 'Postgraduate', '', '2018-10-03 22:46:44', '', 'BenedictBenedict1538606803', 'BenedictBenedict1538606803', '', 'BenedictBenedict1538606803', 'BenedictBenedict1538606803', 1, 'Pasali, Kuje, FCT', 'CROSS RIVER', 'Bayelsa Central', 'Constituency II', 'Bamankiri', 'Francis Onabe', 'Maria Onabe', '08062562770', '08169878654', 'CROSS RIVER', 'CROSS RIVER', 'Diamond Bank', '0022963973', 'Bayelsa', 'Cross River University of Technology', 'Calabar', 'Bachelor of Science', 'Year 7', 'Semester 2', 'Semester Result', 'Hostel (off campus)', 'Pasali, Kuje');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE IF NOT EXISTS `users` (
  `user_id` int(11) NOT NULL AUTO_INCREMENT,
  `firstname` varchar(255) NOT NULL,
  `lastname` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `phone` varchar(255) NOT NULL,
  `sex` varchar(255) NOT NULL,
  `clearpass` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `passport` varchar(255) NOT NULL,
  `address` longtext NOT NULL,
  `loan_type` varchar(255) NOT NULL,
  `status` int(11) NOT NULL DEFAULT '-1',
  `datetime` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`user_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`user_id`, `firstname`, `lastname`, `email`, `phone`, `sex`, `clearpass`, `password`, `passport`, `address`, `loan_type`, `status`, `datetime`) VALUES
(1, 'Benedict', 'Onabe', 'realbenten@gmail.com', '07035484893', 'Male', 'password', '5baa61e4c9b93f3f0682250b6cf8331b7ee68fd8', 'EbiOkpongu07034767623.jpg', 'Pasali, Kuje, FCT', 'Postgraduate', 3, '2018-09-23 22:14:15');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
