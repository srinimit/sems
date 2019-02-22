-- phpMyAdmin SQL Dump
-- version 4.8.4
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Feb 22, 2019 at 08:38 AM
-- Server version: 10.1.37-MariaDB
-- PHP Version: 5.6.39

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `ctmit`
--

-- --------------------------------------------------------

--
-- Table structure for table `3557`
--

CREATE TABLE `3557` (
  `ccode` varchar(10) NOT NULL,
  `cname` varchar(100) NOT NULL,
  `credits` int(10) NOT NULL,
  `grade` varchar(10) NOT NULL,
  `sem` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `3557`
--

INSERT INTO `3557` (`ccode`, `cname`, `credits`, `grade`, `sem`) VALUES
('BS7161', 'Basic Sciences Laboratory', 2, 'A+', 1),
('CS1234', 'ORAL', 1, 'O', 2),
('CS7001', 'Adhoc and Sensor Networks', 3, 'O', 1),
('CS7001', 'Adhoc and Sensor Networks', 3, 'O', 2),
('CS7002', 'Advanced Topics on Databases', 3, 'A', 2),
('CS7005', 'Big Data Analytics', 3, 'O', 1),
('CS7008', 'Database Tuning', 3, 'A+', 2);

-- --------------------------------------------------------

--
-- Table structure for table `2015503013`
--

CREATE TABLE `2015503013` (
  `ccode` varchar(100) NOT NULL,
  `cname` varchar(100) NOT NULL,
  `credits` int(11) NOT NULL,
  `grade` varchar(50) NOT NULL,
  `sem` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `2015503013`
--

INSERT INTO `2015503013` (`ccode`, `cname`, `credits`, `grade`, `sem`) VALUES
('CS7003', 'Agile Methodologies', 3, '#RA', 1),
('CS7008', 'Database Tuning', 3, 'RA', 1),
('CS7015', 'Mobile Communications', 3, 'O', 1),
('EC1234', 'Corrosion', 3, 'B+', 1),
('CS7016', 'Natural Language Processing', 3, 'RA', 2),
('AE1234', 'AUTOMOBILE', 2, '#RA', 2),
('BS7161', 'Basic Sciences Laboratory', 2, 'O', 2),
('CS7005', 'Big Data Analytics', 3, 'A+', 2),
('CS7001', 'Adhoc and Sensor Networks', 3, 'O', 3);

-- --------------------------------------------------------

--
-- Table structure for table `2015503557`
--

CREATE TABLE `2015503557` (
  `ccode` varchar(100) NOT NULL,
  `cname` varchar(100) NOT NULL,
  `credits` int(11) NOT NULL,
  `grade` varchar(50) NOT NULL,
  `sem` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `2015503557`
--

INSERT INTO `2015503557` (`ccode`, `cname`, `credits`, `grade`, `sem`) VALUES
('AE1234', 'Aerospace', 2, '#RA', 1),
('BS7161', 'Basic Sciences Laboratory', 2, 'O', 1),
('CS7005', 'Big Data Analytics', 3, 'RA', 1),
('CS7008', 'Database Tuning', 3, 'A+', 1);

-- --------------------------------------------------------

--
-- Table structure for table `cbcs`
--

CREATE TABLE `cbcs` (
  `ccode` varchar(30) NOT NULL,
  `cname` varchar(300) NOT NULL,
  `credits` int(30) NOT NULL,
  `sem` int(8) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `cbcs`
--

INSERT INTO `cbcs` (`ccode`, `cname`, `credits`, `sem`) VALUES
('BS7161', 'Basic Sciences Laboratory', 2, 1),
('CS7001', 'Adhoc and Sensor Networks', 3, 1),
('CS7002', 'Advanced Topics on Databases', 3, 1),
('CS7003', 'Agile Methodologies', 3, 1),
('CS7004', 'Artificial Intelligence', 3, 2),
('CS7005', 'Big Data Analytics', 3, 2),
('CS7006', 'Computer Graphics Theory and Practice', 3, 2),
('CS7007', 'Cyber Forensics', 3, 3),
('CS7008', 'Database Tuning', 3, 0),
('CS7009', 'Game Theory', 3, 8),
('CS7010', 'GPU Architecture and Programming', 3, 8),
('CS7011', 'Green Computing', 3, 8),
('CS7012', 'Information Retrieval Techniques', 3, 8),
('CS7013', 'Information Visualization Techniques', 3, 8),
('CS7014', 'Microprocessors and Interfacing', 3, 8),
('CS7015', 'Mobile Communications', 3, 1),
('CS7016', 'Natural Language Processing', 3, 0),
('CS7017', 'Programming Paradigms', 3, 2),
('CS7018', 'Project Management', 3, 8),
('CS7019', 'Python Programming', 3, 8),
('CS7020', 'Software Agents', 3, 8),
('CS7021', 'Software Defined Networks', 3, 8),
('CS7022', 'Software Quality and Testing', 3, 8),
('CS7071', 'Data Warehousing and Data Mining', 3, 8),
('CS7072', 'Graph Theory', 3, 8),
('CS7073', 'Multimedia Tools and Techniques', 3, 8),
('CS7074', 'Soft Computing', 3, 8),
('CS7075', 'Web Design and Management', 3, 8),
('CS7211', 'Programming and Data Structures I Laboratory', 2, 8),
('CS7251', 'Programming and Data Structures I', 3, 8),
('CS7301', 'Object oriented Programming', 3, 8),
('CS7302', 'Programming and Data Structures II', 3, 8),
('CS7311', 'Digital Laboratory', 2, 8),
('CS7312', 'Programming and Data Structures II Laboratory', 2, 8),
('CS7351', 'Software Engineering', 3, 8),
('CS7401', 'Database Management Systems', 3, 8),
('CS7402', 'Design and Analysis of Algorithms', 3, 8),
('CS7411', 'Database Management Systems Laboratory', 2, 8),
('CS7412', 'Operating Systems Laboratory', 2, 8),
('CS7451', 'Computer Architecture', 4, 8),
('CS7452', 'Operating Systems', 3, 8),
('CS7501', 'Data Communication and Computer Networks', 3, 8),
('CS7502', 'Embedded System Design', 4, 8),
('CS7503', 'Object Oriented Analysis and Design', 3, 8),
('CS7504', 'Theory of Computation', 3, 8),
('CS7511', 'Case Tools Laboratory', 2, 8),
('CS7512', 'Computer Networks Laboratory', 2, 8),
('CS7551', 'Digital Signal Processing', 3, 8),
('CS7601', 'Compiler Design', 3, 8),
('CS7602', 'Machine Learning Techniques', 3, 8),
('CS7603', 'Parallel and Distributed Computing', 3, 8),
('CS7604', 'Web Programming', 3, 8),
('CS7611', 'Compiler Laboratory', 2, 8),
('CS7612', 'Web Technology Laboratory', 2, 8),
('CS7701', 'Cloud Computing Techniques', 4, 8),
('CS7702', 'Security in Computing', 3, 8),
('CS7703', 'Wireless Networks', 3, 8),
('CS7711', 'Creative and Innovative Project', 2, 8),
('CS7712', 'Security Laboratory', 2, 8),
('CS7713', 'Comprehension and Technical Report', 1, 8),
('CS7811', 'Project Work', 10, 8),
('CY7151', 'Engineering Chemistry', 3, 8),
('EC7253', 'Electronic Devices and Circuits for Computer Engineers', 3, 8),
('EE7306', 'Electrical Engineering and Control Systems', 3, 8),
('GE7071', 'Disaster Management', 3, 8),
('GE7072', 'Foundation Skills in Integrated Product Development', 3, 8),
('GE7074', 'Human Rights', 3, 8),
('GE7151', 'Computing Techniques', 3, 8),
('GE7152', 'Engineering Graphics', 4, 8),
('GE7161', 'Computer Practices Laboratory', 2, 8),
('GE7162', 'Engineering Practices Laboratory', 2, 8),
('GE7251', 'Environmental Science and Engineering', 3, 8),
('GE7351', 'Engineering Ethics and Human Values', 3, 8),
('GE7652', 'Total Quality Management', 3, 8),
('HS7151', 'Foundational English', 4, 8),
('HS7251', 'Technical English', 4, 8),
('IT7071', 'Digital Image Processing', 3, 8),
('IT7072', 'TCP/IP Design and Implementation', 3, 8),
('IT7351', 'Digital Principles and Design', 3, 8),
('IT7551', 'Unix Internals', 3, 8),
('MA7151', 'Mathematics I', 4, 8),
('MA7251', 'Mathematics II', 4, 8),
('MA7355', 'Probability and Queueing Theory', 4, 8),
('MA7359', 'Algebra and Number Theory', 4, 8),
('MG7451', 'Principles of Management', 3, 8),
('PH7151', 'Engineering Physics', 3, 8);

-- --------------------------------------------------------

--
-- Table structure for table `falist`
--

CREATE TABLE `falist` (
  `staffid` int(11) NOT NULL,
  `sname` varchar(50) NOT NULL,
  `sprofession` varchar(50) NOT NULL,
  `pass` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `falist`
--

INSERT INTO `falist` (`staffid`, `sname`, `sprofession`, `pass`) VALUES
(12345, 'Dr. Selvam', 'Professor', 'srini');

-- --------------------------------------------------------

--
-- Table structure for table `student`
--

CREATE TABLE `student` (
  `regno` int(10) NOT NULL,
  `type` varchar(40) NOT NULL,
  `name` varchar(100) NOT NULL,
  `pass` varchar(11) NOT NULL,
  `sem` int(10) NOT NULL,
  `update` int(11) NOT NULL,
  `fa` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `student`
--

INSERT INTO `student` (`regno`, `type`, `name`, `pass`, `sem`, `update`, `fa`) VALUES
(3557, 'cbcs', '', '3557', 3, 1, 12345),
(2015503013, 'cbcs', 'Girinathaprasad B', 'utbjo20h', 4, 1, 12345),
(2015503557, 'cbcs', 'Srinivas', 'w5knvsfl', 2, 0, 12345);

-- --------------------------------------------------------

--
-- Table structure for table `StudentDetails`
--

CREATE TABLE `StudentDetails` (
  `reg_no` varchar(10) NOT NULL DEFAULT '',
  `name` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `gender` varchar(6) NOT NULL,
  `dob` varchar(10) NOT NULL,
  `graduation` varchar(2) NOT NULL,
  `batch_no` varchar(3) DEFAULT NULL,
  `address` varchar(200) DEFAULT NULL,
  `city` varchar(50) DEFAULT NULL,
  `postal_code` varchar(10) DEFAULT NULL,
  `state` varchar(50) DEFAULT NULL,
  `country` varchar(50) DEFAULT NULL,
  `mobile` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `StudentDetails`
--

INSERT INTO `StudentDetails` (`reg_no`, `name`, `email`, `gender`, `dob`, `graduation`, `batch_no`, `address`, `city`, `postal_code`, `state`, `country`, `mobile`) VALUES
('2015503001', 'Abarna T', 'abarna.thangasamy@gmail.com', 'Female', '28/07/1998', 'UG', '15', '8/242,south street,pillaiyarkudieruppu', 'Tirunelveli', '627114', 'Tamilnadu', 'India', '8940735817'),
('2015503003', 'Abilash B', 'iasabilash@gmail.com', 'Male', '08/06/1998', 'UG', '15', 'No.10, Mathperkhanpura street, Kalavai road, Arcot', 'Vellore', '632503', 'Tamil Nadu', 'India', '7871615411'),
('2015503005', 'V Akshay', 'akshayred@gmail.com', 'Male', '08/12/1997', 'UG', '15', 'Flat Number 4, Park Venue Apts, 60 Luz Avenue, Mylapore', 'Chennai', '600004', 'Tamil Nadu', 'India', '8056027690'),
('2015503006', 'AMARNATH D', 'amarnathdevraj@gmail.com', 'Male', '02/11/1997', 'UG', '15', '61,Amarjothi Garden,15 - Velampalayam', 'Tiruppur', '641652', 'TAMILNADU', 'INDIA', '9003284939'),
('2015503008', 'Bharanidharan S', 'bharanidharan485@gmail.com', 'Male', '09/07/1998', 'UG', '15', '97/2, Pallakkadu, Periyavettuvapalayam(po), Perundurai, Erode(dt)', 'Erode', '638052', 'Tamilnadu', 'India', '9698907530'),
('2015503010', 'Deepthi', 'mdeepthi098@gmail.com', 'Female', '24/03/1998', 'UG', '15', 'D.no 4/8, Edayanellur village, Mathigiri HCF post', 'Hosur', '635110', 'Tamil Nadu', 'India', '9500414307'),
('2015503011', 'Dharshna Mala B', 'dharshna410@gmail.com', 'Female', '04/10/ 199', 'UG', '15', '33,Kaliamman Kovil Street, Theni', 'Theni', '625531', 'TamilNadu', 'India', '9500759938'),
('2015503012', 'Elakkiya', 'ilakkiya2697@gmail.com', 'Female', '26/10/1997', 'UG', '15', '3/230, South mudaliyar street,ulkottai', 'Ariyalur', '612 901', 'Tamil Nadu', 'India', '9486129566'),
('2015503013', 'Girinathaprasad B', 'giriprasad391@gmail.com', 'Male', '12/07/1998', 'UG', '15', '15/A namakkal road Thathiengarpet', 'Trichy', '621214', 'TamilNadu', 'India', '9994931468'),
('2015503015', 'Gomathy N', 'abirami.nagarajan1997@gmail.com', 'Female', '24/09/1997', 'UG', '15', '2G/565, Rajiv Nagar 9th street, north', 'Thoothukudi', '628008', 'Tamil Nadu', 'India', '8870079228'),
('2015503017', 'Gowtham Yuvaraj', 'gowthamyuvaraj2981997@gmail.com', 'Male', '29/08/1997', 'UG', '15', '53-A, Kalathukadu, Chennimalai', 'Erode', '638051', 'Tamilnadu', 'India', '+917708636721'),
('2015503019', 'Harshavardhan R', 'harshahj97@gmail.com', 'Male', '09/08/1997', 'UG', '15', 'No.16/36, 16th Cross Street, New Colony, Chromepet.', 'Chennai', '600044', 'Tamil Nadu', 'India', '9566033904'),
('2015503020', 'S.Kalaiyarasi', 'kalaiyarasisamannan@gmail.com', 'Female', '17/05/1998', 'PG', '15', 'Velakalnatham', 'Vellore', '635854', 'Tamilnadu', 'India', '7397384228'),
('2015503022', 'Karthikeyan J', 'karthicse98@gmail.com', 'Male', '15/11/1998', 'UG', '15', '32, thangasamy teacher street, Muhavoor', 'Rajapalayam', '626111', 'Tamilnadu', 'India', '7845171754'),
('2015503023', 'Karthikeyan M L', 'mlkarthik2378@gmail.com', 'Male', '03/06/1997', 'UG', '15', '520/4,near sakthi mariyamman kovil,new udaiyampatti', 'Attur', '636108', 'Tamilnadu', 'India', '8667807709'),
('2015503044', 'Sathiyadevi R', 'sathiya28598@gmail.com', 'Female', '28/05/1998', 'UG', '15', 'No:3/146,Dr.RJR Nagar,2nd Street,Nerkundram', 'Chennai', '600107', 'TamilNadu', 'India', '971048479'),
('2015503046', 'Sowmiya R', 'rsowmiya08@gmail.com', 'Female', '09/08/1998', 'UG', '15', 'Chinna Atthuraar Thottam, Ulagankathan (Po), Kallakurichi (Tk)', 'Villupuram (Dt)', '606202', 'Tamilnadu ', 'India', '9962983346'),
('2015503054', 'Vignesh K', 'vigneshkandavel97@gmail.com', 'Male', '19/10/1997', 'UG', '15', '4/104(B),Kamatchiamman Nagar,, Palappalayam,K.V.Pudur(PO),Rasipuram(TK)', 'Namakkal', '637401', 'Tamilnadu', 'India', '8428497090'),
('2015503511', 'Darwin Thamil JE', 'darwin.thamil@gmail.com', 'Male', '26/07/1998', 'UG', '15', 'No. 45, Periyar Socrates illam, NR Samy nagar, Railway Feeder Road, near old GH', 'Karaikudi', '630001', 'Tamilnadu', 'India', '9655268440'),
('2015503514', 'Gayathri R', 'gaya16nov97@gmail.com', 'Female', '16/11/1997', 'PG', '15', 'No, 65 Royar thoppu 2nd street sriramapuram, SRIRANGAM - 620006', 'Trichy', '620006', 'TamilNadu', 'INDIA', '9487410469 '),
('2015503517', 'Gowtham V', 'gowthamv441@gmail.com', 'Male', '19/11/1997', 'UG', '15', '96, A.S. Pettai, Main street', 'Namakkal', '637001', 'Tamil Nadu', 'India', '9487685854'),
('2015503527', 'Manikandan G', 'manikandangd1998@gmail.com', 'Male', '11/06/1998', 'UG', '15', '4/20,middle street,thiruvalanthurai', 'Perambalur', '621117', 'Tamilnadu', 'India ', '9585035647'),
('2015503537', 'S.Pooja Sri', 'poojasundar54@gmail.com', 'Female', '04/06/1998', 'UG', '15', 'No 39,sai dwarka,thiruvalluvarpuram 2nd street,gill nagar,choolaimedu, chennai-94', 'Chennai ', '600094', 'TAMIL NADU', 'India', '9840498564'),
('2015503538', 'Pradeepa Ann Varghese', 'pradeepaav22@gmail.com', 'Female', '22/05/1998', 'UG', '15', 'No.2, Plot no.10, Rajaji Nagar , 1st cross st, Camp Road, Selaiyur', 'Chennai ', '600073', 'Tamil nadu', 'India', '7358547119'),
('2015503539', 'Pradheep S', 'pradheepsomasekar97@gmail.com', 'Male', '02/12/1997', 'UG', '15', '12-2 Karunanidhi nagar 3rd street', 'Kovilpatti', '628501', 'Tamilnadu', 'India', '9500504137'),
('2015503557', 'Srinivas', 'srinivasbenten1998@gmail.com', 'Male', '20/06/1998', 'UG', '15', '51,14th Cross Anna Nagar', 'Puducherry', '605005', 'Puducherry', 'India', '9442248023'),
('2015503560', 'THIRUNAVUKKARASU P K', 'thirunavukkarasupk@gmail.com', 'Male', '22/01/1998', 'UG', '15', '142,Bazaar street, Podaturpet', 'Thiruvallur', '631208', 'TamilNadu', 'India', '9444791772'),
('2015503561', 'Timothy Jones Thomas J', 'jeyadosstimothy@gmail.com', 'Male', '27/01/1998', 'UG', '15', '605, Suruthi block, Chitra Avenue, Choolaimedu High road, Choolaimedu', 'Chennai', '600094', 'Tamil Nadu', 'India', '9677207736'),
('2015503562', 'Varun S', 'stvarun11@gmail.com', 'Male', '11/11/1997', 'UG', '15', '14, Second Block, Vishal Apartments, Ramakrishna Street, Chromepet', 'Chennai', '600044', 'Tamil Nadu', 'India', '8682010423');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `3557`
--
ALTER TABLE `3557`
  ADD PRIMARY KEY (`ccode`,`sem`);

--
-- Indexes for table `2015503557`
--
ALTER TABLE `2015503557`
  ADD PRIMARY KEY (`ccode`,`sem`);

--
-- Indexes for table `cbcs`
--
ALTER TABLE `cbcs`
  ADD PRIMARY KEY (`ccode`);

--
-- Indexes for table `falist`
--
ALTER TABLE `falist`
  ADD PRIMARY KEY (`staffid`);

--
-- Indexes for table `student`
--
ALTER TABLE `student`
  ADD PRIMARY KEY (`regno`);

--
-- Indexes for table `StudentDetails`
--
ALTER TABLE `StudentDetails`
  ADD PRIMARY KEY (`reg_no`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
