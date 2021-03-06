-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: mysql.ct.mitindia.edu
-- Generation Time: Mar 06, 2019 at 10:43 AM
-- Server version: 5.6.38-log
-- PHP Version: 7.1.22

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `ctalumni`
--

-- --------------------------------------------------------

--
-- Table structure for table `cbcs`
--

CREATE TABLE `cbcs` (
  `ccode` varchar(100) NOT NULL,
  `cname` varchar(100) NOT NULL,
  `credits` int(11) NOT NULL,
  `sem` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `cbcs`
--

INSERT INTO `cbcs` (`ccode`, `cname`, `credits`, `sem`) VALUES
('BS7161', 'Basic Sciences Laboratory', 2, 1),
('CS7001', 'Adhoc and Sensor Networks', 3, 0),
('CS7002', 'Advanced Topics on Databases', 3, 0),
('CS7003', 'Agile Methodologies', 3, 0),
('CS7004', 'Artificial Intelligence', 3, 0),
('CS7005', 'Big Data Analytics', 3, 0),
('CS7006', 'Computer Graphics Theory and Practice', 3, 0),
('CS7007', 'Cyber Forensics', 3, 0),
('CS7008', 'Database Tuning', 3, 0),
('CS7009', 'Game Theory', 3, 0),
('CS7010', 'GPU Architecture and Programming', 3, 0),
('CS7011', 'Green Computing', 3, 0),
('CS7012', 'Information Retrieval Techniques', 3, 0),
('CS7013', 'Information Visualization Techniques', 3, 0),
('CS7014', 'Microprocessors and Interfacing', 3, 0),
('CS7015', 'Mobile Communications', 3, 0),
('CS7016', 'Natural Language Processing', 3, 0),
('CS7017', 'Programming Paradigms', 3, 0),
('CS7018', 'Project Management', 3, 0),
('CS7019', 'Python Programming', 3, 0),
('CS7020', 'Software Agents', 3, 0),
('CS7021', 'Software Defined Networks', 3, 0),
('CS7022', 'Software Quality and Testing', 3, 0),
('CS7071', 'Data Warehousing and Data Mining', 3, 0),
('CS7072', 'Graph Theory', 3, 0),
('CS7073', 'Multimedia Tools and Techniques', 3, 0),
('CS7074', 'Soft Computing', 3, 0),
('CS7075', 'Web Design and Management', 3, 0),
('CS7211', 'Programming and Data Structures I Laboratory', 2, 2),
('CS7251', 'Programming and Data Structures I', 3, 2),
('CS7301', 'Object oriented Programming', 3, 3),
('CS7302', 'Programming and Data Structures II', 3, 3),
('CS7311', 'Digital Laboratory', 2, 3),
('CS7312', 'Programming and Data Structures II Laboratory', 2, 3),
('CS7351', 'Software Engineering', 3, 3),
('CS7401', 'Database Management Systems', 3, 4),
('CS7402', 'Design and Analysis of Algorithms', 3, 4),
('CS7411', 'Database Management Systems Laboratory', 2, 4),
('CS7412', 'Operating Systems Laboratory', 2, 4),
('CS7451', 'Computer Architecture', 4, 4),
('CS7452', 'Operating Systems', 3, 4),
('CS7501', 'Data Communication and Computer Networks', 3, 5),
('CS7502', 'Embedded System Design', 4, 5),
('CS7503', 'Object Oriented Analysis and Design', 3, 5),
('CS7504', 'Theory of Computation', 3, 5),
('CS7511', 'Case Tools Laboratory', 2, 5),
('CS7512', 'Computer Networks Laboratory', 2, 5),
('CS7551', 'Digital Signal Processing', 3, 5),
('CS7601', 'Compiler Design', 3, 6),
('CS7602', 'Machine Learning Techniques', 3, 6),
('CS7603', 'Parallel and Distributed Computing', 3, 6),
('CS7604', 'Web Programming', 3, 6),
('CS7611', 'Compiler Laboratory', 2, 6),
('CS7612', 'Web Technology Laboratory', 2, 6),
('CS7701', 'Cloud Computing Techniques', 4, 7),
('CS7702', 'Security in Computing', 3, 7),
('CS7703', 'Wireless Networks', 3, 7),
('CS7711', 'Creative and Innovative Project', 2, 7),
('CS7712', 'Security Laboratory', 2, 7),
('CS7713', 'Comprehension and Technical Report', 1, 7),
('CS7811', 'Project Work', 10, 8),
('CY7151', 'Engineering Chemistry', 3, 1),
('EC7253', 'Electronic Devices and Circuits for Computer Engineers', 3, 2),
('EE7306', 'Electrical Engineering and Control Systems', 3, 3),
('GE7071', 'Disaster Management', 3, 0),
('GE7072', 'Foundation Skills in Integrated Product Development', 3, 0),
('GE7074', 'Human Rights', 3, 0),
('GE7151', 'Computing Techniques', 3, 1),
('GE7152', 'Engineering Graphics', 4, 2),
('GE7161', 'Computer Practices Laboratory', 2, 1),
('GE7162', 'Engineering Practices Laboratory', 2, 2),
('GE7251', 'Environmental Science and Engineering', 3, 2),
('GE7351', 'Engineering Ethics and Human Values', 3, 0),
('GE7652', 'Total Quality Management', 3, 0),
('HS7151', 'Foundational English', 4, 1),
('HS7251', 'Technical English', 4, 2),
('IT7071', 'Digital Image Processing', 3, 0),
('IT7072', 'TCP/IP Design and Implementation', 3, 0),
('IT7351', 'Digital Principles and Design', 3, 3),
('IT7551', 'Unix Internals', 3, 0),
('MA7151', 'Mathematics I', 4, 1),
('MA7251', 'Mathematics II', 4, 2),
('MA7355', 'Probability and Queueing Theory', 4, 4),
('MA7359', 'Algebra and Number Theory', 4, 3),
('MG7451', 'Principles of Management', 3, 4),
('PH7151', 'Engineering Physics', 3, 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `cbcs`
--
ALTER TABLE `cbcs`
  ADD PRIMARY KEY (`ccode`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
