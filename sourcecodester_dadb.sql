

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";

--
-- Database: `db_healthcare`
--

-- --------------------------------------------------------

--
-- Table structure for table `appointment`
--

CREATE TABLE `appointment` (
  `appId` int(3) NOT NULL,
  `patientId` bigint(12) NOT NULL,
  `scheduleId` int(10) NOT NULL,
  `appSymptom` varchar(100) NOT NULL
  `status` varchar(10) NOT NULL DEFAULT 'process'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `appointment`
--

INSERT INTO `appointment` (`appId`, `patientId`, `scheduleId`, `appSymptom`, `status`) VALUES
(86, 1, 40, 'fever','done'),
(86, 2, 41, 'diarheaa','done'),
(86, 3, 42, 'tuberculosis','done'),
(86, 4, 43, 'cancer','done'),
(86, 5, 44, 'HIV AIDS','done');

-- --------------------------------------------------------

--
-- Table structure for table `doctor`
--

CREATE TABLE `doctor` (
`doctorId` int(3) NOT NULL,
  `password` varchar(20) NOT NULL,
  
  `doctortName` varchar(50) NOT NULL,
  
  `doctorAddress` varchar(100) NOT NULL,
  `doctorPhone` varchar(15) NOT NULL,
  `doctorEmail` varchar(20) NOT NULL,
  `doctorDOB` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `doctor`
--

INSERT INTO `doctor` (`doctorId`,`password`,  `doctorFirstName`,`doctorAddress`, `doctorPhone`, `doctorEmail`, `doctorDOB`) VALUES
('123', 123,'Sehgal', 'amritsar', '0173567758', 'dsehgal@gmail.com', '1990-04-10');
                      
-- --------------------------------------------------------

--
-- Table structure for table `doctorschedule`
--

CREATE TABLE `doctorschedule` (
  `scheduleId` int(11) NOT NULL,
  `scheduleDate` date NOT NULL,
  `startTime` time NOT NULL,
  `endTime` time NOT NULL,
  `bookAvail` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `doctorschedule`
--

INSERT INTO `doctorschedule` (`scheduleId`, `scheduleDate`, `scheduleDay`, `startTime`, `endTime`, `bookAvail`) VALUES
(40, '2015-12-13', '09:00:00', '10:00:00', 'notavail'),
(41, '2015-12-13', '10:00:00', '11:00:00', 'available'),
(42, '2015-12-13', '11:00:00', '12:00:00', 'available'),
(43, '2015-12-14', '11:00:00', '12:00:00', 'available'),
(44, '2015-12-13', '01:00:00', '02:00:00', 'available');

-- --------------------------------------------------------

--
-- Table structure for table `patient`
--

CREATE TABLE `patient` (
  `Patientid` bigint(12) NOT NULL,
  `password` varchar(20) NOT NULL,
  `patientName` varchar(20) NOT NULL,
  `patientDOB` date NOT NULL,
  `patientGender` varchar(10) NOT NULL,
  `patientAddress` varchar(100) NOT NULL,
  `patientPhone` varchar(15) NOT NULL,
  `patientEmail` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `patient`
--

INSERT INTO `patient` (`Patientid`, `password`, `patientName`, `patientDOB`, `patientGender`, `patientAddress`, `patientPhone`, `patientEmail`) VALUES
(1, '123', 'Mohamad',  '1992-05-17', 'male', 'mysore', '173567758', 'lan.psis@gmail.com'),
(2, '124', 'avi',  '1992-05-23', 'male', 'mysore', '173567759', 'san.psis@gmail.com'),
(3, '125', 'shilpa',  '1992-03-27', 'female', 'bang', '173567790', 'sil.psis@gmail.com'),
(4, '126', 'sreya',  '1998-05-07', 'female', 'mysore', '173566648', 'sre.psis@gmail.com'),
(5, '127', 'priya',  '1999-07-14', 'female', 'mysore', '173566758', 'pri.psis@gmail.com');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `appointment`
--
ALTER TABLE `appointment`
  ADD PRIMARY KEY (`appId`),
  ADD UNIQUE KEY `scheduleId_2` (`scheduleId`),
  ADD KEY `patientId` (`patientId`),
  ADD KEY `scheduleId` (`scheduleId`);

--
-- Indexes for table `doctor`
--
ALTER TABLE `doctor`
  ADD PRIMARY KEY (`Doctorid`);

--
-- Indexes for table `doctorschedule`
--
ALTER TABLE `doctorschedule`
  ADD PRIMARY KEY (`scheduleId`);

--
-- Indexes for table `patient`
--
ALTER TABLE `patient`
  ADD PRIMARY KEY (`Patientid`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `appointment`
--
--ALTER TABLE `appointment`
--MODIFY `appId` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=87;

--
-- AUTO_INCREMENT for table `doctorschedule`
--
--ALTER TABLE `doctorschedule`
--  MODIFY `scheduleId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=45;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `appointment`
--
ALTER TABLE `appointment`
  ADD CONSTRAINT `appointment_ibfk_4` FOREIGN KEY (`patientId`) REFERENCES `patient` (`idPatient`),
  ADD CONSTRAINT `appointment_ibfk_5` FOREIGN KEY (`scheduleId`) REFERENCES `doctorschedule` (`scheduleId`);
COMMIT;

