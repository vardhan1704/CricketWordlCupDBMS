-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 21, 2023 at 12:53 AM
-- Server version: 10.4.27-MariaDB
-- PHP Version: 7.4.33

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `cricket`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `username` varchar(50) NOT NULL,
  `password` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`username`, `password`) VALUES
('admin', '1111');

-- --------------------------------------------------------

--
-- Table structure for table `cricket_boards`
--

CREATE TABLE `cricket_boards` (
  `board_name` varchar(50) NOT NULL,
  `chairman` varchar(20) NOT NULL,
  `team` varchar(30) NOT NULL,
  `DOA` date NOT NULL,
  `flag` varchar(40) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `cricket_boards`
--

INSERT INTO `cricket_boards` (`board_name`, `chairman`, `team`, `DOA`, `flag`) VALUES
('Board of Control for Cricket in India', 'Roger Binny', 'INDIA', '1926-05-31', 'img/India.png'),
('Cricket Australia', 'Shane Watson', 'AUSTRALIA', '1909-07-15', 'img/australia.png'),
('Cricket South Africa', 'Chris Nenzani', 'SOUTH AFRICA', '1909-07-15', 'img/SA.png'),
('Cricket West Indies', 'Richard Skerritt', 'WEST INDIES', '1926-05-31', 'img/West_indies.png'),
('England and Wales Cricket Board', 'Giles Clarke', 'ENGLAND', '1909-07-15', 'img/england.jpg'),
('New Zealand Cricket', 'Debbie Hockley', 'NEW ZEALAND', '1926-05-31', 'img/Newzealand.png'),
('Pakistan Cricket Board', 'Najam Sethi', 'PAKISTAN', '1952-07-28', 'img/pakistan.png'),
('Sri Lanka Cricket', ' Shammi Silva', 'SRI LANKA', '1981-07-21', 'img/srilanka.png');

-- --------------------------------------------------------

--
-- Table structure for table `login`
--

CREATE TABLE `login` (
  `username` varchar(50) NOT NULL,
  `password` varchar(20) NOT NULL,
  `email` varchar(70) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `login`
--

INSERT INTO `login` (`username`, `password`, `email`) VALUES
('shreyas', '1234', 'abcd@gmail.com'),
('Siddharth', 'Siddharth', ''),
('user', '123', ''),
('user2', '1234', 'abc@gmail');

-- --------------------------------------------------------

--
-- Table structure for table `player`
--

CREATE TABLE `player` (
  `cap_no` decimal(4,0) NOT NULL,
  `age` decimal(2,0) NOT NULL,
  `dob` date NOT NULL,
  `runs` decimal(5,0) NOT NULL,
  `wickets` decimal(3,0) NOT NULL,
  `type` varchar(20) NOT NULL,
  `no_of_matches` decimal(3,0) NOT NULL,
  `rank` decimal(3,0) NOT NULL,
  `batting_best` varchar(10) NOT NULL,
  `bowling_best` varchar(10) NOT NULL,
  `playername` varchar(30) NOT NULL,
  `image` varchar(30) NOT NULL,
  `teamname` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `player`
--

INSERT INTO `player` (`cap_no`, `age`, `dob`, `runs`, `wickets`, `type`, `no_of_matches`, `rank`, `batting_best`, `bowling_best`, `playername`, `image`, `teamname`) VALUES
('1', '35', '1987-04-30', '9454', '8', 'Batsman', '235', '2', '212', '2/25', 'Rohit Sharma', 'ph/1.png', 'INDIA'),
('2', '23', '1999-09-08', '1011', '0', 'Batsman', '19', '40', '130', '0', 'Shubham Gill', 'ph/2.png', 'INDIA'),
('3', '32', '1990-09-14', '384', '0', 'Batsman', '16', '46', '64', '0', 'SuryaKumar Yadav', 'ph/3.png', 'INDIA'),
('4', '34', '1988-11-05', '13508', '5', 'Batsman', '256', '1', '183', '1/15', 'Virat Kohli', 'img/kholi.jpg', 'INDIA'),
('5', '28', '1994-12-06', '1537', '0', 'Batsman', '39', '35', '113', '0', 'Shreyas Iyer', 'ph/5.png', 'INDIA'),
('6', '24', '1998-07-18', '477', '0', 'Batsman', '10', '43', '210', '0', 'Ishan Kishan', 'ph/6.png', 'INDIA'),
('7', '25', '1997-10-04', '865', '0', 'Batsman', '30', '41', '125', '0', 'Rishab Pant', 'ph/7.png', 'INDIA'),
('8', '30', '1992-04-18', '1760', '0', 'Batsman', '48', '32', '112', '0', 'KL Rahul', 'ph/8.png', 'INDIA'),
('9', '28', '1994-11-11', '330', '0', 'Batsman', '11', '47', '86', '0', 'Sanju Samson', 'ph/9.png', 'INDIA'),
('10', '29', '1993-10-11', '1386', '63', 'All Rounder', '66', '17', '92', '4/24', 'Hardik Pandya', 'ph/10.png', 'INDIA'),
('11', '34', '1988-12-06', '2447', '189', 'All Rounder', '171', '13', '87', '5/36', 'Ravindra Jadeja', 'ph/11.png', 'INDIA'),
('12', '28', '1994-01-20', '349', '55', 'All Rounder', '46', '23', '64', '3/24', 'Axar Patel', 'ph/12.png', 'INDIA'),
('13', '23', '1999-10-05', '212', '14', 'All Rounder', '12', '26', '51', '3/30', 'Washington Sundar', 'ph/13.png', 'INDIA'),
('14', '32', '1990-07-23', '77', '118', 'Bowler', '70', '4', '18', '6/42', 'Yuzvendra Chahal', 'ph/14.png', 'INDIA'),
('15', '29', '1993-12-06', '47', '121', 'Bowler', '70', '3', '14', '6/19', 'Jasprit Bumrah', 'ph/15.png', 'INDIA'),
('16', '32', '1990-09-03', '184', '152', 'Bowler', '82', '2', '25', '5/69', 'Mohammed Shami', 'ph/16.png', 'INDIA'),
('17', '28', '1994-03-13', '20', '24', 'Bowler', '16', '17', '9', '3/29', 'Mohammed Siraj', 'ph/17.png', 'INDIA'),
('18', '23', '1990-02-05', '9', '0', 'Bowler', '3', '23', '9', '0', 'Arshdeep Singh', 'ph/18.png', 'INDIA'),
('19', '23', '1999-11-22', '0', '7', 'Bowler', '5', '20', '0', '2/43', 'Umran Malik', 'ph/19.png', 'INDIA'),
('21', '32', '1990-09-08', '4275', '0', 'Batsman', '159', '27', '162', '0', 'Jos Buttler', 'p.png', 'ENGLAND'),
('22', '35', '1987-06-18', '2051', '95', 'All Rounder', '123', '15', '128', '4/46', 'Moeen Ali', 'p.png', 'ENGLAND'),
('23', '27', '1995-05-01', '27', '30', 'Bowler', '17', '14', '8', '3/27', 'Jofra Archer', 'p.png', 'ENGLAND'),
('24', '23', '1999-02-22', '25', '0', 'Batsman', '0', '51', '0', '0', 'Harry Brook', 'p.png', 'ENGLAND'),
('25', '24', '1998-06-03', '206', '16', 'All Rounder', '18', '27', '95', '5/48', 'Sam Curran', 'p.png', 'ENGLAND'),
('26', '28', '1994-10-17', '123', '0', 'Batsman', '3', '48', '63', '0', 'Ben Duckett', 'p.png', 'ENGLAND'),
('27', '35', '1987-09-03', '455', '1', 'Batsman', '12', '44', '134', '1/5', 'Dawid malan', 'p.png', 'ENGLAND'),
('28', '34', '1988-02-17', '678', '169', 'Bowler', '119', '1', '69', '5/27', 'Adil Rashid', 'p.png', 'ENGLAND'),
('29', '32', '1990-07-21', '3993', '0', 'Batsman', '110', '28', '180', '0', 'Jason Roy', 'ph/29.png', 'ENGLAND'),
('30', '26', '1996-08-23', '406', '0', 'Batsman', '11', '45', '307', '0', 'Philip Salt', 'ph/salt.png', 'ENGLAND'),
('31', '29', '1993-10-09', '13', '5', 'Bowler', '6', '22', '12', '4-85', 'Olly Stone', 'ph/stone.png', 'ENGLAND'),
('32', '28', '1994-02-21', '18', '33', 'Bowler', '20', '12', '60*', '6-24', 'Reece Topley', 'ph/topley.png', 'ENGLAND'),
('33', '32', '1990-02-28', '530', '84', 'Allrounder', '63', '24', '5-30', '4-43', 'David Wiley', 'p.png', 'ENGLAND'),
('34', '26', '1994-07-01', '4700', '190', 'All-rounder', '120', '7', '100*', '4-50', 'Chris Woakes', 'ph/woakes.png', 'ENGLAND'),
('41', '26', '1994-03-25', '7000', '100', 'Batsman', '120', '10', '250*', '0', 'Steve Smith', 'ph/smith.png', 'AUSTRALIA'),
('42', '29', '1991-08-05', '7300', '160', 'Batsman', '130', '8', '190*', '0', 'David Warner', 'ph/warner.png', 'AUSTRALIA'),
('43', '25', '1995-09-15', '5100', '170', 'Batsman', '100', '25', '160*', '0', 'Marnus Labuschagne', 'ph/labuschagne.png', 'AUSTRALIA'),
('44', '27', '1993-04-30', '5800', '180', 'Batsman', '110', '19', '180*', '0', 'Usman Khawaja', 'ph/khawaja.png', 'AUSTRALIA'),
('45', '28', '1992-05-15', '6500', '120', 'Batsman', '140', '16', '220*', '0', 'Cameron Bancroft', 'ph/bancroft.png', 'AUSTRALIA'),
('46', '30', '1990-06-01', '4800', '200', 'All rounder', '160', '3', '120*', '6/50', 'Marcus Stoinis', 'ph/stoinis.png', 'AUSTRALIA'),
('47', '24', '1996-07-10', '4200', '130', 'All rounder', '90', '11', '80*', '4/40', 'Ashton Agar', 'ph/agar.png', 'AUSTRALIA'),
('48', '29', '1991-08-05', '7300', '160', 'Batsman', '130', '7', '190*', ' 0', 'Travis Head', 'ph/head.png', 'AUSTRALIA'),
('49', '25', '1995-09-15', '5100', '170', 'Batsman', '100', '23', '160*', '0', 'Matthew Wade', 'ph/wade.png', 'AUSTRALIA'),
('50', '27', '1993-10-20', '6700', '180', 'Batsman', '120', '12', '210*', '0', 'Joe Burns', 'ph/burns.png', 'AUSTRALIA'),
('51', '28', '1992-11-01', '4500', '190', 'All rounder', '140', '6', '110*', '5-30', 'Mitchell Starc', 'ph/starc.png', 'AUSTRALIA'),
('52', '24', '1997-12-10', '4300', '150', 'All rounder', '90', '9', '70*', '4-40', 'Patrick Cummins', 'ph/cummins.png', 'AUSTRALIA'),
('61', '27', '1993-04-30', '5800', '180', 'Batsman', '110', '18', '180*', '0', 'Quinton de Kock', 'ph/dekock.png', 'SOUTH AFRICA'),
('62', '29', '1991-08-05', '7300', '160', 'Batsman', '130', '6', '190*', '0', 'Faf du Plessis', 'ph/duplessis.png', 'SOUTH AFRICA'),
('63', '25', '1995-09-15', '5100', '170', 'Batsman', '100', '21', '160*', '0', 'Temba Bavuma', 'ph/bavuma.png', 'SOUTH AFRICA'),
('64', '26', '1994-03-25', '7000', '100', 'Batsman', '120', '9', '250*', '0', 'Rassie van der Dussen', 'ph/vanderdussen.png', 'SOUTH AFRICA'),
('65', '28', '1992-05-15', '6500', '120', 'Batsman', '140', '14', '220*', '0', 'Aiden Markram', 'ph/markram.png', 'SOUTH AFRICA'),
('66', '30', '1990-06-01', '4800', '200', 'All rounder', '160', '2', '120*', '6-50', 'Andile Phehlukwayo', 'ph/phehlukwayo.png', 'SOUTH AFRICA'),
('67', '24', '1996-07-10', '4200', '130', 'All rounder', '90', '10', '80*', '4-40', 'Kagiso Rabada', 'ph/rabada.png', 'SOUTH AFRICA'),
('68', '29', '1991-08-05', '7300', '160', 'Batsman', '130', '5', '190*', '0', 'Dwaine Pretorius', 'ph/pretorius.png', 'SOUTH AFRICA'),
('69', '25', '1995-09-15', '5100', '180', 'Batsman', '120', '22', '210*', '0', 'Heinrich Klaasen', 'ph/klaasen.png', 'SOUTH AFRICA'),
('71', '28', '1992-11-01', '4500', '190', 'All rounder', '140', '5', '110*', '5-30', 'Lungi Ngidi', 'ph/ngidi.png', 'SOUTH AFRICA'),
('72', '24', '1997-12-10', '4300', '150', 'All rounder', '90', '8', '70*', '4-40', 'Anrich Nortje', 'ph/nortje.png', 'SOUTH AFRICA'),
('81', '27', '1993-04-30', '5800', '180', 'batsman', '110', '17', '180*', ' 0', 'Kane Williamson', 'ph/williamson.png', 'NEW ZEALAND'),
('82', '29', '1991-08-05', '7300', '160', 'batsman', '130', '4', '190*', '0', 'Ross Taylor', 'ph/taylor.png', 'NEW ZEALAND'),
('83', '25', '1995-09-15', '5100', '170', 'batsman', '100', '24', '160*', ' 0', 'Tom Latham', 'ph/latham.png', 'NEW ZEALAND'),
('84', '26', '1994-03-25', '7000', '100', 'batsman', '120', '11', '250*', '0', 'Henry Nicholls', 'ph/nicholls.png', 'NEW ZEALAND'),
('85', '28', '1992-05-15', '6500', '120', 'batsman', '140', '15', '220*', '0', 'Martin Guptill', 'ph/guptill.png', 'NEW ZEALAND'),
('86', '30', '1990-06-01', '4800', '200', 'all rounder', '160', '1', '120*', '6-50', 'James Neesham', 'ph/neesham.png', 'NEW ZEALAND'),
('87', '24', '1996-07-10', '4200', '130', 'all rounder', '90', '12', '80*', '4-40', 'Colin de Grandhomme', 'ph/degrandhomme.png', 'NEW ZEALAND'),
('88', '29', '1991-08-05', '7300', '160', 'batsman', '130', '3', '190*', '0', 'Tom Blundell', 'ph/blundell.png', 'NEW ZEALAND'),
('89', '25', '1995-09-15', '5100', '170', 'batsman', '100', '20', '160*', '0', 'BJ Watling', 'ph/watling.png', 'NEW ZEALAND'),
('90', '27', '1993-10-20', '6700', '180', 'batsman', '120', '13', '210*', '0', 'Daryl Mitchell', 'ph/mitchell.png', 'NEW ZEALAND'),
('91', '28', '1992-11-01', '4500', '190', 'all rounder', '140', '4', '110*', '5-30', 'Trent Boult', 'ph/boult.png', 'NEW ZEALAND'),
('92', '24', '1997-12-10', '4300', '150', 'all rounder', '90', '7', '70*', '4-40', 'Tim Southee', 'ph/southee.png', 'NEW ZEALAND'),
('101', '27', '1995-12-12', '2528', '0', 'Batsman', '55', '31', '151', '0', 'Imam ul haq', 'ph/101.png', 'PAKISTAN'),
('102', '32', '1990-04-10', '2628', '1', 'Batsman', '63', '29', '210', '1', 'Fakhar Zaman', 'ph/102.png', 'PAKISTAN'),
('103', '33', '1989-08-14', '111', '2', 'Batsman', '5', '49', '50', '0', 'Shan masood', 'ph/103.png', 'PAKISTAN'),
('104', '23', '1999-11-20', '0', '0', 'Batsman', '1', '52', '2', '0', 'Abdullah Shafique', 'p.png', 'PAKISTAN'),
('105', '28', '1994-08-15', '4664', '0', 'Batsman', '93', '26', '158', '0', 'Babar Azam', 'ph/104.png', 'PAKISTAN'),
('106', '30', '1992-06-01', '1065', '0', 'All rounder', '50', '21', '115', '0', 'Mohammad Rizwan', 'ph/105.png', 'PAKISTAN'),
('107', '30', '2001-03-30', '104', '0', 'Batsman', '4', '50', '6', '0', 'Mohammad haris', 'ph/106.png', 'PAKISTAN'),
('108', '24', '1998-08-04', '596', '70', 'All rounder', '53', '22', '86', '5/70', 'Shadab Khan ', 'ph/107.png', 'PAKISTAN'),
('109', '27', '1994-07-21', '2546', '5', 'All rounder', '40', '14', '87', '6/67', 'Mohammad Nawaz', 'ph/108.png', 'PAKISTAN'),
('110', '32', '1990-09-03', '256', '6', 'All rounder', '10', '24', '60', '4/21', 'Iftikhar Ahmed', 'ph/109.png', 'PAKISTAN'),
('111', '22', '2000-04-06', '102', '62', 'Bowler', '32', '7', '19', '6/35', 'Shaheen afridi', 'ph/110.png', 'PAKISTAN'),
('112', '19', '2003-02-15', '3', '15', 'Bowler', '4', '18', '4', '5/34', 'Naseem shah', 'ph/112.png', 'PAKISTAN'),
('113', '29', '1993-11-07', '9', '29', 'Bowler', '16', '15', '9', '4/35', 'Haris rauf', 'ph/113.png', 'PAKISTAN'),
('114', '22', '2000-04-05', '10', '6', 'Bowler', '35', '21', '6', '3/25', 'Mohammad hasnain', 'ph/114.png', 'PAKISTAN'),
('115', '24', '1998-08-14', '12', '8', 'Bowler', '16', '19', '12', '4/26', 'Mohammad zahid', 'p.png', 'PAKISTAN'),
('121', '31', '1991-09-09', '1321', '14', 'Batsman', '45', '37', '102', '5/43', 'Dasun shanaka', 'ph/121.png', 'SRI LANKA'),
('122', '27', '1995-08-24', '2616', '1', 'Batsman', '90', '30', '119', '1', 'Kusal mendis', 'ph/122.png', 'SRI LANKA'),
('123', '28', '1994-11-26', '1256', '1', 'Batsman', '45', '38', '100', '1', 'Charith asalanka', 'ph/123.png', 'SRI LANKA'),
('124', '29', '1993-12-29', '1354', '60', 'All rounder', '34', '18', '80', '4/43', 'Wanindu Hasaranga', 'ph/124.png', 'SRI LANKA'),
('125', '27', '1995-05-16', '1245', '35', 'All rounder', '45', '20', '82', '3/32', 'Dhananjaya de Silva', 'ph/125.png', 'SRI LANKA'),
('126', '28', '1994-08-15', '800', '14', 'Batsman', '5', '42', '8', '0', 'Ashen Bandara', 'ph/126.png', 'SRI LANKA'),
('127', '29', '1993-06-26', '235', '16', 'All rounder', '18', '25', '75', '3/47', 'Chamika Karunaratne', 'ph/127.png', 'SRI LANKA'),
('128', '30', '1992-07-27', '245', '27', 'Bowler', '45', '16', '102', '5/43', 'Lahiru Kumara', 'ph/128.png', 'SRI LANKA'),
('129', '31', '1991-03-30', '10', '30', 'Bowler', '45', '13', '102', '5/43', 'Dilshan Madushanka', 'ph/129.png', 'SRI LANKA'),
('130', '27', '1995-01-31', '16', '55', 'Bowler', '45', '10', '102', '5/43', 'Pathum Nissanka', 'ph/130.png', 'SRI LANKA'),
('131', '29', '1993-02-25', '18', '45', 'Bowler', '45', '11', '102', '5/43', 'Kasun Rajitha', 'ph/131.png', 'SRI LANKA'),
('141', '27', '1995-10-02', '1555', '0', 'Batsman', '52', '34', '118', '0', 'Nicholas Pooran', 'ph/141.png', 'WEST INDIES'),
('142', '28', '1994-08-26', '1625', '1', 'Batsman', '45', '33', '126', '1', 'Shai Hope', 'ph/142.png', 'WEST INDIES'),
('143', '30', '1992-02-24', '1256', '2', 'Batsman', '26', '39', '100', '2', 'Shamarh Brooks', 'ph/143.png', 'WEST INDIES'),
('144', '28', '1994-06-20', '1425', '1', 'Batsman', '36', '36', '98', '1', 'Keacy carty', 'p.png', 'WEST INDIES'),
('145', '29', '1993-11-12', '1412', '2', 'All rounder', '25', '19', '136', '2', 'Jason Holder', 'ph/145.png', 'WEST INDIES'),
('146', '30', '1992-12-11', '1568', '25', 'All rounder', '45', '16', '118', '4/25', 'Kyle Mayers', 'ph/146.png', 'WEST INDIES'),
('147', '27', '1995-07-16', '125', '36', 'All rounder', '46', '28', '118', '5/39', 'Keemo Paul', 'ph/147.png', 'WEST INDIES'),
('148', '25', '1997-01-26', '144', '55', 'Bowler', '15', '9', '10', '3/25', 'Akeal Hosein', 'ph/148.png', 'WEST INDIES'),
('149', '24', '1998-05-30', '188', '58', 'Bowler', '24', '8', '19', '4/45', 'Alzarri Joseph', 'ph/149.png', 'WEST INDIES'),
('150', '23', '1999-09-15', '124', '77', 'Bowler', '25', '6', '20', '3/26', 'Jayden Seales', 'ph/150.png', 'WEST INDIES'),
('151', '22', '2000-12-24', '122', '85', 'Bowler', '19', '5', '09', '4/35', 'Romario shepherd', 'ph/151.png', 'WEST INDIES'),
('1000', '0', '0000-00-00', '0', '0', 'Batsman', '0', '53', '', '', 'delete7', '', 'AUSTRALIA');

--
-- Triggers `player`
--
DELIMITER $$
CREATE TRIGGER `update` BEFORE UPDATE ON `player` FOR EACH ROW BEGIN
IF (new.runs<old.runs) THEN SET new.runs=old.runs;
IF (new.wickets<old.wickets) THEN SET new.wickets=old.wickets;
END IF;
IF (new.no_of_matches<old.no_of_matches) THEN SET new.no_of_matches=old.no_of_matches;
END IF;
END IF;
END
$$
DELIMITER ;

-- --------------------------------------------------------

--
-- Table structure for table `schedules`
--

CREATE TABLE `schedules` (
  `match_no` decimal(3,0) NOT NULL,
  `date` date NOT NULL,
  `team1` varchar(30) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `team2` varchar(30) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `stadium_name` varchar(50) CHARACTER SET latin1 COLLATE latin1_swedish_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `schedules`
--

INSERT INTO `schedules` (`match_no`, `date`, `team1`, `team2`, `stadium_name`) VALUES
('5', '2023-02-20', 'INDIA', 'AUSTRALIA', 'chinnaswamy'),
('23', '2020-10-10', 'AUSTRALIA', 'PAKISTAN', 'chinnaswamy');

-- --------------------------------------------------------

--
-- Table structure for table `stadiums`
--

CREATE TABLE `stadiums` (
  `stadium_name` varchar(50) NOT NULL,
  `capacity` decimal(6,0) NOT NULL,
  `DOI` date NOT NULL,
  `board_name` varchar(50) NOT NULL,
  `team` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `stadiums`
--

INSERT INTO `stadiums` (`stadium_name`, `capacity`, `DOI`, `board_name`, `team`) VALUES
('chinnaswamy', '45000', '2023-01-11', 'Board of Control for Cricket in India', 'INDIA'),
('Eden Garden Stadium', '70000', '2023-01-09', 'Board of Control for Cricket in India', 'INDIA'),
('Narendra modi stadium', '55000', '2023-01-20', 'Board of Control for Cricket in India', 'INDIA'),
('Rajeev Gandhi International Stadium', '55000', '2023-01-09', 'Board of Control for Cricket in India', 'INDIA'),
('wankade', '45000', '2023-01-09', 'Board of Control for Cricket in India', 'INDIA');

--
-- Triggers `stadiums`
--
DELIMITER $$
CREATE TRIGGER `default_date` BEFORE INSERT ON `stadiums` FOR EACH ROW set new.DOI=CURRENT_DATE()
$$
DELIMITER ;

-- --------------------------------------------------------

--
-- Table structure for table `team`
--

CREATE TABLE `team` (
  `name` varchar(30) NOT NULL,
  `rank` decimal(5,0) NOT NULL,
  `rating` int(11) NOT NULL,
  `flag` varchar(40) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `team`
--

INSERT INTO `team` (`name`, `rank`, `rating`, `flag`) VALUES
('AUSTRALIA', '2', 130, 'img/australia.png'),
('ENGLAND', '4', 100, 'img/england.jpg'),
('INDIA', '1', 150, 'img/india.png'),
('NEW ZEALAND', '7', 90, 'img/Newzealand.png'),
('PAKISTAN', '3', 125, 'img/Pakistan.png'),
('SOUTH AFRICA', '6', 95, 'img/SA.png'),
('SRI LANKA', '8', 85, 'img/srilanka.png'),
('WEST INDIES', '5', 100, 'img/West_indies.png');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`username`);

--
-- Indexes for table `cricket_boards`
--
ALTER TABLE `cricket_boards`
  ADD PRIMARY KEY (`board_name`,`team`),
  ADD KEY `team` (`team`);

--
-- Indexes for table `login`
--
ALTER TABLE `login`
  ADD PRIMARY KEY (`username`);

--
-- Indexes for table `player`
--
ALTER TABLE `player`
  ADD PRIMARY KEY (`cap_no`,`teamname`,`playername`) USING BTREE,
  ADD KEY `name` (`teamname`);

--
-- Indexes for table `schedules`
--
ALTER TABLE `schedules`
  ADD PRIMARY KEY (`match_no`,`date`),
  ADD KEY `team` (`team1`),
  ADD KEY `team2` (`team2`),
  ADD KEY `stadium` (`stadium_name`);

--
-- Indexes for table `stadiums`
--
ALTER TABLE `stadiums`
  ADD PRIMARY KEY (`stadium_name`,`board_name`,`team`),
  ADD KEY `board_name` (`board_name`),
  ADD KEY `team` (`team`);

--
-- Indexes for table `team`
--
ALTER TABLE `team`
  ADD PRIMARY KEY (`name`,`flag`);

--
-- Constraints for dumped tables
--

--
-- Constraints for table `cricket_boards`
--
ALTER TABLE `cricket_boards`
  ADD CONSTRAINT `cricket_boards_ibfk_1` FOREIGN KEY (`team`) REFERENCES `team` (`name`);

--
-- Constraints for table `player`
--
ALTER TABLE `player`
  ADD CONSTRAINT `player_ibfk_1` FOREIGN KEY (`teamname`) REFERENCES `team` (`name`) ON DELETE CASCADE;

--
-- Constraints for table `schedules`
--
ALTER TABLE `schedules`
  ADD CONSTRAINT `stadium` FOREIGN KEY (`stadium_name`) REFERENCES `stadiums` (`stadium_name`) ON DELETE SET NULL,
  ADD CONSTRAINT `team2` FOREIGN KEY (`team2`) REFERENCES `team` (`name`) ON DELETE CASCADE;

--
-- Constraints for table `stadiums`
--
ALTER TABLE `stadiums`
  ADD CONSTRAINT `stadiums_ibfk_1` FOREIGN KEY (`board_name`) REFERENCES `cricket_boards` (`board_name`),
  ADD CONSTRAINT `stadiums_ibfk_2` FOREIGN KEY (`team`) REFERENCES `team` (`name`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
