-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 31, 2021 at 06:51 PM
-- Server version: 10.4.19-MariaDB
-- PHP Version: 8.0.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `optrs`
--

-- --------------------------------------------------------

--
-- Table structure for table `account`
--

CREATE TABLE `account` (
  `account_id` int(5) NOT NULL,
  `user_type` char(1) NOT NULL,
  `user_name` varchar(20) NOT NULL,
  `password` varchar(20) NOT NULL,
  `status` int(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `account`
--

INSERT INTO `account` (`account_id`, `user_type`, `user_name`, `password`, `status`) VALUES
(0, '', '', '', 0),
(10012, 'C', 'STephen@13', '@nsghh#2', 0),
(10013, 'C', 'Hashini213', 'sjhb3js', 0),
(10014, 'E', 'Ravith2@3', 'hello23s@', 0),
(10015, 'E', 'Sahan@!2', 'smdjnj@!', 0),
(10016, 'E', 'Malith332', 'world@!!', 0),
(10017, 'E', 'Shehanx21', 'Shnndg12!', 0),
(10019, 'C', 'mohanj21', '@sDDj2@', 0),
(10020, 'E', 'Hirushaj21', 'sn#njj2@', 0),
(10021, 'E', 'Mayanthaj2', 'sdmkj2@', 0),
(10022, 'E', 'Rvishaj21', 'sn#jj2@', 0),
(10023, 'E', 'Thusithj21', 'sdhsjj2@', 0),
(10024, 'E', 'praveenj21', 'skmjk2@', 0),
(10025, 'E', 'kaveenj21', 'kdjmf2@', 0),
(10026, 'E', 'Isiwaraj21', '4djdkd@', 0),
(10027, 'E', 'Deshithaj2', 'dfjfm2@', 0),
(10028, 'E', 'Nimalj21', 'skdjdm@', 0),
(10029, 'E', 'Kamlaj21', 'kddm(km', 0),
(10030, 'E', 'Amalj21', 'smkdn))', 0),
(10031, 'E', 'Sunilj21', 'jmdkdm&', 0),
(10032, 'E', 'Channaj21', 'mdkdkf#', 0),
(10033, 'E', 'Udayaj21', 'dmkfn@@', 0),
(10034, 'E', 'Supunj21', 'nmvjj#', 0),
(10035, 'E', 'Akilaj21', 'mkdolf', 0),
(10036, 'E', 'Erandaj21', 'mciikk2@', 0),
(10037, 'E', 'Asankaj21', 'mclnk!', 0),
(10038, 'E', 'Madushanka', 'mcod!!', 0),
(10039, 'E', 'shamila', 'mcod!sd!', 0),
(10040, 'C', 'Hello', '233ssd', 0),
(10041, 'C', 'jagath232', '@snhdjs', 0),
(10042, 'C', 'shehan', 'hello', 0),
(10043, 'C', 'shehanx15', 'password', 0);

-- --------------------------------------------------------

--
-- Table structure for table `bus`
--

CREATE TABLE `bus` (
  `b_id` int(5) NOT NULL,
  `bs_id` int(5) NOT NULL,
  `d_id` int(5) NOT NULL,
  `c_id` int(5) NOT NULL,
  `nos` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `bus`
--

INSERT INTO `bus` (`b_id`, `bs_id`, `d_id`, `c_id`, `nos`) VALUES
(40001, 30001, 20002, 20003, 56),
(40002, 30001, 20015, 20006, 56),
(40003, 30002, 20016, 20007, 34),
(40004, 30002, 20017, 20008, 34),
(40005, 30003, 20018, 20009, 56),
(40006, 30003, 20019, 20010, 56),
(40007, 30004, 20020, 20011, 34),
(40008, 30004, 20021, 20012, 34),
(40009, 30005, 20022, 20013, 56),
(40010, 30005, 20023, 20014, 56);

-- --------------------------------------------------------

--
-- Table structure for table `bus_station`
--

CREATE TABLE `bus_station` (
  `bs_id` int(5) NOT NULL,
  `manager_id` int(5) NOT NULL,
  `city` varchar(16) NOT NULL,
  `nob` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `bus_station`
--

INSERT INTO `bus_station` (`bs_id`, `manager_id`, `city`, `nob`) VALUES
(30001, 20001, 'Kegalle', 2),
(30002, 20001, 'Colombo', 2),
(30003, 20001, 'Kandy', 2),
(30004, 20005, 'Jaffna', 2),
(30005, 20005, 'Galle', 2);

-- --------------------------------------------------------

--
-- Table structure for table `customer`
--

CREATE TABLE `customer` (
  `NIC` varchar(13) NOT NULL,
  `fname` varchar(30) NOT NULL,
  `lname` varchar(30) NOT NULL,
  `account_id` int(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `customer`
--

INSERT INTO `customer` (`NIC`, `fname`, `lname`, `account_id`) VALUES
('', '', '', 0),
('200000500968', 'shehan', 'chanuka', 10043),
('2030306721v', 'Stephen', 'Hawk', 10012),
('3024306453v', 'Hashini', 'perera', 10013),
('3524306453v', 'Mohan', 'Showdy', 10019);

-- --------------------------------------------------------

--
-- Table structure for table `customer_email`
--

CREATE TABLE `customer_email` (
  `NIC` varchar(13) NOT NULL,
  `email` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `customer_email`
--

INSERT INTO `customer_email` (`NIC`, `email`) VALUES
('200000500968', 'shehanx15@gmail.com'),
('2030306721v', 'Johncc@gmail.com'),
('3024306453v', 'Johncc@gmail.com'),
('3524306453v', 'Johncc@gmail.com');

-- --------------------------------------------------------

--
-- Table structure for table `custoomer_purchase`
--

CREATE TABLE `custoomer_purchase` (
  `ID` int(11) NOT NULL,
  `NIC` varchar(20) NOT NULL,
  `price` int(11) NOT NULL,
  `destination` varchar(20) NOT NULL,
  `departure` varchar(20) NOT NULL,
  `bus_id` varchar(20) NOT NULL,
  `date` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `custoomer_purchase`
--

INSERT INTO `custoomer_purchase` (`ID`, `NIC`, `price`, `destination`, `departure`, `bus_id`, `date`) VALUES
(1, '715532450V', 300, 'To:-kegalle', 'From:-galle', 'Bus_ID:-40001', 'Date:-2021-10-01'),
(2, '715532450V', 300, 'To:-kegalle', 'From:-galle', 'Bus_ID:-40001', 'Date:-2021-10-01'),
(4, '200000500968', 300, 'To:-kegalle', 'From:-galle', 'Bus_ID:-40001', 'Date:-2021-10-01'),
(8, '200000500968', 300, 'To:-kegalle', 'From:-galle', 'Bus_ID:-40001', 'Date:-2021-10-01'),
(9, '715532450V', 750, 'To:-kegalle', 'From:-galle', 'Bus_ID:-40001', 'Date:-2021-10-02'),
(10, '200000500968', 1050, 'To:-kegalle', 'From:-galle', 'Bus_ID:-40001', 'Date:-2021-10-02'),
(11, '200000500968', 1050, 'To:-kegalle', 'From:-galle', 'Bus_ID:-40001', 'Date:-2021-10-02');

-- --------------------------------------------------------

--
-- Table structure for table `employee`
--

CREATE TABLE `employee` (
  `emp_id` int(5) NOT NULL,
  `role` varchar(2) NOT NULL,
  `account_id` int(5) NOT NULL,
  `fname` varchar(30) NOT NULL,
  `lname` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `employee`
--

INSERT INTO `employee` (`emp_id`, `role`, `account_id`, `fname`, `lname`) VALUES
(20001, 'MA', 10014, 'Ravith', 'Herath'),
(20002, 'DR', 10015, 'Shana', 'Randika'),
(20003, 'CO', 10016, 'Malith', 'Janaranjana'),
(20004, 'DE', 10017, 'Shehan', 'Chanuka'),
(20005, 'MA', 10020, 'Hiruusha', 'Nandipaala'),
(20006, 'CO', 10021, 'mayantha', 'jasighne'),
(20007, 'CO', 10022, 'Ravisha', 'showdy'),
(20008, 'CO', 10023, 'Tushith', 'bandara'),
(20009, 'CO', 10024, 'praveen', 'sandaru'),
(20010, 'CO', 10025, 'kaveen', 'singh'),
(20011, 'CO', 10026, 'isiwara', 'perera'),
(20012, 'CO', 10027, 'deshitha', 'bandara'),
(20013, 'CO', 10028, 'Nimal', 'soysa'),
(20014, 'CO', 10029, 'Kamal', 'perera'),
(20015, 'DR', 10030, 'Amal', 'perera'),
(20016, 'DR', 10031, 'sunil', 'jayantha'),
(20017, 'DR', 10032, 'channa', 'subash'),
(20018, 'DR', 10033, 'udaya', 'gammanpila'),
(20019, 'DR', 10034, 'supun', 'sangeeth'),
(20020, 'DR', 10035, 'Akila', 'sahan'),
(20021, 'DR', 10036, 'eranda', 'Nimesh'),
(20022, 'DR', 10037, 'Asanka', 'perera'),
(20023, 'DR', 10038, 'madusanka', 'kosala');

-- --------------------------------------------------------

--
-- Table structure for table `sales`
--

CREATE TABLE `sales` (
  `sales_id` int(5) NOT NULL,
  `scedule_id` int(5) NOT NULL,
  `value` float NOT NULL,
  `dop` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `sales`
--

INSERT INTO `sales` (`sales_id`, `scedule_id`, `value`, `dop`) VALUES
(60001, 50001, 200, '2021-10-01'),
(60002, 50002, 600, '2021-10-02'),
(60003, 50003, 300, '2021-10-03'),
(60004, 50007, 700, '2021-10-02'),
(60005, 50006, 100, '2021-10-04');

-- --------------------------------------------------------

--
-- Table structure for table `schedule`
--

CREATE TABLE `schedule` (
  `s_id` int(5) NOT NULL,
  `b_id` int(5) NOT NULL,
  `arrival_place` varchar(20) NOT NULL,
  `departure_place` varchar(20) NOT NULL,
  `nos` int(11) NOT NULL,
  `d_time` time NOT NULL,
  `a_timr` time NOT NULL,
  `date` date NOT NULL,
  `tvalue` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `schedule`
--

INSERT INTO `schedule` (`s_id`, `b_id`, `arrival_place`, `departure_place`, `nos`, `d_time`, `a_timr`, `date`, `tvalue`) VALUES
(50001, 40001, 'kegalle', 'galle', 56, '12:00:00', '07:00:00', '2021-10-01', 300),
(50002, 40002, 'colombo', 'galle', 56, '03:00:00', '00:00:00', '2021-10-02', 200),
(50003, 40003, 'kandy', 'colombo', 34, '11:00:00', '08:00:00', '2021-10-03', 200),
(50004, 40001, 'kandy', 'galle', 56, '13:00:00', '08:00:00', '2021-10-02', 400),
(50005, 40004, 'colombo', 'jaffna', 34, '12:00:00', '04:00:00', '2021-10-01', 800),
(50006, 40005, 'jaffna', 'colombo', 56, '23:00:00', '15:00:00', '2021-10-04', 800),
(50007, 40007, 'kegalle', 'kandy', 34, '08:00:00', '06:00:00', '2021-10-02', 100),
(50008, 40009, 'jaffna', 'galle', 56, '12:00:00', '03:00:00', '2021-10-05', 1300),
(50009, 40001, 'kegalle', 'galle', 56, '12:00:00', '07:00:00', '2021-10-02', 300),
(50010, 40001, 'kegalle', 'galle', 56, '12:00:00', '07:00:00', '2021-10-01', 300),
(50011, 40003, 'colombo', 'kandy', 56, '03:00:00', '05:00:00', '2021-10-05', 200),
(50012, 40003, 'panadura', 'kandy', 56, '18:00:00', '20:00:00', '2021-10-07', 250),
(50013, 40003, 'panadura', 'kandy', 56, '18:00:00', '20:00:00', '2021-10-07', 250);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `account`
--
ALTER TABLE `account`
  ADD PRIMARY KEY (`account_id`);

--
-- Indexes for table `bus`
--
ALTER TABLE `bus`
  ADD PRIMARY KEY (`b_id`),
  ADD KEY `b_fk1` (`bs_id`),
  ADD KEY `b_fk2` (`d_id`),
  ADD KEY `b_fk3` (`c_id`);

--
-- Indexes for table `bus_station`
--
ALTER TABLE `bus_station`
  ADD PRIMARY KEY (`bs_id`),
  ADD KEY `bs_fk` (`manager_id`);

--
-- Indexes for table `customer`
--
ALTER TABLE `customer`
  ADD PRIMARY KEY (`NIC`),
  ADD KEY `c_fk` (`account_id`);

--
-- Indexes for table `customer_email`
--
ALTER TABLE `customer_email`
  ADD PRIMARY KEY (`NIC`,`email`);

--
-- Indexes for table `custoomer_purchase`
--
ALTER TABLE `custoomer_purchase`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `employee`
--
ALTER TABLE `employee`
  ADD PRIMARY KEY (`emp_id`),
  ADD KEY `e_fk` (`account_id`);

--
-- Indexes for table `sales`
--
ALTER TABLE `sales`
  ADD PRIMARY KEY (`sales_id`),
  ADD KEY `sale_fk` (`scedule_id`);

--
-- Indexes for table `schedule`
--
ALTER TABLE `schedule`
  ADD PRIMARY KEY (`s_id`),
  ADD KEY `s_fk1` (`arrival_place`),
  ADD KEY `s_fk2` (`departure_place`),
  ADD KEY `s_fk3` (`b_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `custoomer_purchase`
--
ALTER TABLE `custoomer_purchase`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `bus`
--
ALTER TABLE `bus`
  ADD CONSTRAINT `b_fk1` FOREIGN KEY (`bs_id`) REFERENCES `bus_station` (`bs_id`),
  ADD CONSTRAINT `b_fk2` FOREIGN KEY (`d_id`) REFERENCES `employee` (`emp_id`),
  ADD CONSTRAINT `b_fk3` FOREIGN KEY (`c_id`) REFERENCES `employee` (`emp_id`);

--
-- Constraints for table `bus_station`
--
ALTER TABLE `bus_station`
  ADD CONSTRAINT `bs_fk` FOREIGN KEY (`manager_id`) REFERENCES `employee` (`emp_id`);

--
-- Constraints for table `customer`
--
ALTER TABLE `customer`
  ADD CONSTRAINT `c_fk` FOREIGN KEY (`account_id`) REFERENCES `account` (`account_id`);

--
-- Constraints for table `customer_email`
--
ALTER TABLE `customer_email`
  ADD CONSTRAINT `ce_fk` FOREIGN KEY (`NIC`) REFERENCES `customer` (`NIC`);

--
-- Constraints for table `employee`
--
ALTER TABLE `employee`
  ADD CONSTRAINT `e_fk` FOREIGN KEY (`account_id`) REFERENCES `account` (`account_id`);

--
-- Constraints for table `sales`
--
ALTER TABLE `sales`
  ADD CONSTRAINT `sale_fk` FOREIGN KEY (`scedule_id`) REFERENCES `schedule` (`s_id`);

--
-- Constraints for table `schedule`
--
ALTER TABLE `schedule`
  ADD CONSTRAINT `s_fk3` FOREIGN KEY (`b_id`) REFERENCES `bus` (`b_id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
