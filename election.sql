-- phpMyAdmin SQL Dump
-- version 4.1.14
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Feb 08, 2019 at 05:28 PM
-- Server version: 5.6.17
-- PHP Version: 5.6.37

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `election`
--

-- --------------------------------------------------------

--
-- Table structure for table `election_lgas`
--

CREATE TABLE IF NOT EXISTS `election_lgas` (
  `lga_id` varchar(10) NOT NULL,
  `state_id` varchar(10) NOT NULL,
  `lga_name` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `election_lgas`
--

INSERT INTO `election_lgas` (`lga_id`, `state_id`, `lga_name`) VALUES
('01', '09', 'Abi'),
('02', '09', 'Akamkpa'),
('03', '09', 'Akpabuyo'),
('04', '09', 'Bakassi'),
('05', '09', 'Bekwara'),
('06', '09', 'Biase'),
('07', '09', 'Boki'),
('08', '09', 'Calabar Municipality'),
('09', '09', 'Calabar South'),
('10', '09', 'Etung'),
('11', '09', 'Ikom'),
('12', '09', 'Obanliku'),
('13', '09', 'Obubra'),
('14', '09', 'Obudu'),
('15', '09', 'Odukpani'),
('16', '09', 'Ogoja'),
('17', '09', 'Yakurr'),
('18', '09', 'Yala'),
('01', '06', 'Brass'),
('02', '06', 'Ekeremor'),
('03', '06', 'Kolokuma/opokuma'),
('04', '06', 'Nembe'),
('05', '06', 'Ogbia'),
('06', '06', 'Sagbama'),
('07', '06', 'Southern ijaw'),
('08', '06', 'Yenagoa');

-- --------------------------------------------------------

--
-- Table structure for table `election_pus`
--

CREATE TABLE IF NOT EXISTS `election_pus` (
  `pu_id` varchar(10) NOT NULL,
  `ward_id` varchar(10) NOT NULL,
  `lga_id` varchar(10) NOT NULL,
  `state_id` varchar(10) NOT NULL,
  `pu_name` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `election_pus`
--

INSERT INTO `election_pus` (`pu_id`, `ward_id`, `lga_id`, `state_id`, `pu_name`) VALUES
('001', '09', '07', '09', 'Obumotang/Kashie Nkwaya'),
('002', '09', '07', '09', 'Playground Ekumba'),
('003', '09', '07', '09', 'Playground Ashang'),
('004', '09', '07', '09', 'Playground Ekagbe'),
('005', '09', '07', '09', 'Playground Russia'),
('006', '09', '07', '09', 'Playground Dishishua'),
('007', '09', '07', '09', 'Playground Effigbu'),
('008', '09', '07', '09', 'Playground Bawop I'),
('009', '09', '07', '09', 'Playground Bawop II'),
('010', '09', '07', '09', 'Playground Bawop Central'),
('011', '09', '07', '09', 'Playground Effiayong'),
('012', '09', '07', '09', 'Playground Orunghe I'),
('013', '09', '07', '09', 'Playground Orunghe II'),
('014', '09', '07', '09', 'Playground Nkpat'),
('015', '09', '07', '09', 'Playground Begbo'),
('007', '12', '02', '06', 'Akebiri compound'),
('005', '12', '02', '06', 'Akpass ware qtrs.'),
('002', '12', '02', '06', 'Ayamabiri compound'),
('015', '12', '02', '06', 'Banware compound'),
('001', '12', '02', '06', 'Benitengha qtrs.'),
('019', '12', '02', '06', 'Boudubuku qtrs'),
('006', '12', '02', '06', 'Edisibou compound'),
('016', '12', '02', '06', 'Egbewari qtrs.'),
('014', '12', '02', '06', 'Egboinwari/ayamabiri compound'),
('013', '12', '02', '06', 'Fuobiri compound'),
('012', '12', '02', '06', 'Gbainwari town hall'),
('008', '12', '02', '06', 'Harama centre zion'),
('009', '12', '02', '06', 'Health centre qtrs.'),
('010', '12', '02', '06', 'Larama zion town square'),
('004', '12', '02', '06', 'Obrienware qtrs.'),
('003', '12', '02', '06', 'Ogbeinbiri qtrs'),
('020', '12', '02', '06', 'Ogboyour qtrs'),
('017', '12', '02', '06', 'Sukulukiri compound'),
('011', '12', '02', '06', 'Tamobiri qtrs'),
('018', '12', '02', '06', 'Titiberi compound'),
('021', '12', '02', '06', 'Zideware zide qtrs');

-- --------------------------------------------------------

--
-- Table structure for table `election_states`
--

CREATE TABLE IF NOT EXISTS `election_states` (
  `state_id` varchar(10) NOT NULL,
  `state_name` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `election_states`
--

INSERT INTO `election_states` (`state_id`, `state_name`) VALUES
('01', 'Abia'),
('02', 'Adamawa'),
('03', 'Akwa ibom'),
('04', 'Anambra'),
('05', 'Bauchi'),
('06', 'Bayelsa'),
('07', 'Benue'),
('08', 'Borno'),
('09', 'Cross river'),
('10', 'Delta'),
('11', 'Ebonyi'),
('12', 'Edo'),
('13', 'Ekiti'),
('14', 'Enugu'),
('15', 'Fct'),
('16', 'Gombe'),
('17', 'Imo'),
('18', 'Jigawa'),
('19', 'Kaduna'),
('20', 'Kano'),
('21', 'Katsina'),
('22', 'Kebbi'),
('23', 'Kogi'),
('24', 'Kwara'),
('25', 'Lagos'),
('26', 'Nasarawa'),
('27', 'Niger'),
('28', 'Ogun'),
('29', 'Ondo'),
('30', 'Osun'),
('31', 'Oyo'),
('32', 'Plateau'),
('33', 'Rivers'),
('34', 'Sokoto'),
('35', 'Taraba'),
('36', 'Yobe'),
('37', 'Zamfara');

-- --------------------------------------------------------

--
-- Table structure for table `election_type`
--

CREATE TABLE IF NOT EXISTS `election_type` (
  `etype_id` varchar(10) NOT NULL,
  `etype_name` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `election_type`
--

INSERT INTO `election_type` (`etype_id`, `etype_name`) VALUES
('001', 'Presidential Elections'),
('002', 'Senatorial Elections'),
('003', 'House of Reps Elections'),
('004', 'Gubernatorial Elections'),
('005', 'State House of Assembly Elections');

-- --------------------------------------------------------

--
-- Table structure for table `election_wards`
--

CREATE TABLE IF NOT EXISTS `election_wards` (
  `ward_id` varchar(10) NOT NULL,
  `lga_id` varchar(10) NOT NULL,
  `state_id` varchar(10) NOT NULL,
  `ward_name` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `election_wards`
--

INSERT INTO `election_wards` (`ward_id`, `lga_id`, `state_id`, `ward_name`) VALUES
('01', '07', '09', 'Abo'),
('02', '07', '09', 'Alankwo'),
('03', '07', '09', 'Beebo/Bumaji'),
('04', '07', '09', 'Boje'),
('05', '07', '09', 'Buda'),
('06', '07', '09', 'Buentsebe'),
('07', '07', '09', 'Bunyia/Okubuchi'),
('08', '07', '09', 'Ekpashi'),
('09', '07', '09', 'Kakwagom/Bawop'),
('10', '07', '09', 'Ugep/Osokom'),
('11', '07', '09', 'Oku/Borum/Njua'),
('01', '02', '06', 'Eduwini i'),
('02', '02', '06', 'Eduwini ii'),
('03', '02', '06', 'Oporomor i'),
('04', '02', '06', 'Oporomor ii'),
('05', '02', '06', 'Oporomor iii'),
('06', '02', '06', 'Oporomor iv'),
('07', '02', '06', 'Oporomor v'),
('08', '02', '06', 'Oyiakiri i'),
('09', '02', '06', 'Oyiakiri ii'),
('10', '02', '06', 'Oyiakiri iii'),
('11', '02', '06', 'Oyiakiri iv'),
('12', '02', '06', 'Tarakiri');

-- --------------------------------------------------------

--
-- Table structure for table `results`
--

CREATE TABLE IF NOT EXISTS `results` (
  `rid` int(11) NOT NULL AUTO_INCREMENT,
  `election_year` varchar(255) NOT NULL,
  `election_type` varchar(255) NOT NULL,
  `election_state` varchar(255) NOT NULL,
  `election_lga` varchar(255) NOT NULL,
  `election_ward` varchar(255) NOT NULL,
  `election_pu` varchar(255) NOT NULL,
  `registered_voters` int(11) NOT NULL,
  `accredited_voters` int(11) NOT NULL,
  `adc` int(11) NOT NULL,
  `ann` int(11) NOT NULL,
  `adp` int(11) NOT NULL,
  `sdp` int(11) NOT NULL,
  `apc` int(11) NOT NULL,
  `upn` int(11) NOT NULL,
  `lp` int(11) NOT NULL,
  `pdp` int(11) NOT NULL,
  `ngp` int(11) NOT NULL,
  `pdm` int(11) NOT NULL,
  `gpn` int(11) NOT NULL,
  `apga` int(11) NOT NULL,
  `spn` int(11) NOT NULL,
  `ydp` int(11) NOT NULL,
  `valid_votes` int(11) NOT NULL,
  `invalid_votes` int(11) NOT NULL,
  `date_time` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`rid`),
  UNIQUE KEY `election_res` (`election_year`,`election_type`,`election_state`,`election_lga`,`election_ward`,`election_pu`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=7 ;

--
-- Dumping data for table `results`
--

INSERT INTO `results` (`rid`, `election_year`, `election_type`, `election_state`, `election_lga`, `election_ward`, `election_pu`, `registered_voters`, `accredited_voters`, `adc`, `ann`, `adp`, `sdp`, `apc`, `upn`, `lp`, `pdp`, `ngp`, `pdm`, `gpn`, `apga`, `spn`, `ydp`, `valid_votes`, `invalid_votes`, `date_time`) VALUES
(1, '2019', '01', '09', '07', '09', '003', 1349134, 442538, 448, 315, 569, 1046, 13394, 2194, 2766, 368303, 125, 173, 745, 368, 424, 213, 391045, 10334, '2019-02-08 10:58:01');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
