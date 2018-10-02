-- phpMyAdmin SQL Dump
-- version 4.1.14
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Oct 02, 2018 at 08:00 AM
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
  PRIMARY KEY (`loan_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

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
  `lga_file` varchar(255) NOT NULL,
  `mid_file` varchar(255) NOT NULL,
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

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
