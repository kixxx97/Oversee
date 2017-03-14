-- phpMyAdmin SQL Dump
-- version 4.6.5.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 08, 2017 at 04:13 PM
-- Server version: 10.1.21-MariaDB
-- PHP Version: 5.6.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `oversee`
--

-- --------------------------------------------------------

--
-- Table structure for table `attendance`
--

CREATE TABLE `attendance` (
  `attendanceID` int(11) NOT NULL,
  `employeeID` int(11) NOT NULL,
  `timeDatein` datetime NOT NULL,
  `timeDateout` datetime NOT NULL,
  `status` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `customer`
--

CREATE TABLE `customer` (
  `customerID` int(11) NOT NULL,
  `firstName` text NOT NULL,
  `lastName` text NOT NULL,
  `middleInitial` text NOT NULL,
  `gender` text NOT NULL,
  `status` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `customer_paypal`
--

CREATE TABLE `customer_paypal` (
  `customerPaypalID` int(11) NOT NULL,
  `customerID` int(11) NOT NULL,
  `status` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `employee`
--

CREATE TABLE `employee` (
  `employeeID` int(11) NOT NULL,
  `firstName` text NOT NULL,
  `lastName` text NOT NULL,
  `middleInitial` text NOT NULL,
  `gender` text NOT NULL,
  `birthdate` datetime NOT NULL,
  `hiredate` datetime NOT NULL,
  `civilStatus` text NOT NULL,
  `TIN` text NOT NULL,
  `SSS` text NOT NULL,
  `philHealth` text NOT NULL,
  `status` text NOT NULL,
  `userID` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `employee_assigned_workflow`
--

CREATE TABLE `employee_assigned_workflow` (
  `employeeAssignedWorkflowID` int(11) NOT NULL,
  `employeeID` int(11) NOT NULL,
  `workFlowID` int(11) NOT NULL,
  `status` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `job_order`
--

CREATE TABLE `job_order` (
  `joborderID` int(11) NOT NULL,
  `customerID` int(11) NOT NULL,
  `employeeID` int(11) NOT NULL,
  `orderDateTime` datetime NOT NULL,
  `deliveryDateTime` datetime NOT NULL,
  `grandTotalAmount` decimal(10,0) NOT NULL,
  `taxValue` decimal(10,0) NOT NULL,
  `status` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `job_order_details`
--

CREATE TABLE `job_order_details` (
  `jobOrderDetailsID` int(4) NOT NULL,
  `jobOrderID` int(11) NOT NULL,
  `productID` int(11) NOT NULL,
  `quantityOrdered` bigint(20) NOT NULL,
  `totalAmount` decimal(10,0) NOT NULL,
  `dateTimeFinished` datetime NOT NULL,
  `status` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `product`
--

CREATE TABLE `product` (
  `productID` int(11) NOT NULL,
  `productName` varchar(30) NOT NULL,
  `productDescription` varchar(30) NOT NULL,
  `unitPrice` decimal(10,0) NOT NULL,
  `quantityAvailable` bigint(20) NOT NULL,
  `status` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `productivity`
--

CREATE TABLE `productivity` (
  `productivityID` int(11) NOT NULL,
  `jobOrderDetailsID` int(11) NOT NULL,
  `employeeAssignedWorkFlowID` int(11) NOT NULL,
  `startDateTime` datetime NOT NULL,
  `accomplishedDateTime` datetime NOT NULL,
  `productionQuantity` bigint(20) NOT NULL,
  `status` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `raw_materials`
--

CREATE TABLE `raw_materials` (
  `rawMaterialsID` int(11) NOT NULL,
  `rawMaterialName` varchar(30) NOT NULL,
  `rawMaterialDescription` varchar(30) NOT NULL,
  `reOrderPoint` varchar(20) NOT NULL,
  `quantityAvailable` bigint(20) NOT NULL,
  `status` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `replenish_stock`
--

CREATE TABLE `replenish_stock` (
  `replenishStockID` int(11) NOT NULL,
  `requestedEmpID` int(11) NOT NULL,
  `receivedEmpID` int(11) NOT NULL,
  `supplierID` int(11) NOT NULL,
  `requestedDateTime` datetime NOT NULL,
  `receivedDateTime` datetime NOT NULL,
  `taxValue` decimal(10,0) NOT NULL,
  `grandAmountTotal` decimal(10,0) NOT NULL,
  `status` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `replenish_stock_details`
--

CREATE TABLE `replenish_stock_details` (
  `replenishStockDetailsID` int(11) NOT NULL,
  `replenishSotckID` int(11) NOT NULL,
  `rawMaterialsID` int(11) NOT NULL,
  `unitPrice` decimal(19,2) NOT NULL,
  `quantity` bigint(20) NOT NULL,
  `totalAmount` decimal(19,2) NOT NULL,
  `status` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `supplier`
--

CREATE TABLE `supplier` (
  `supplierID` int(11) NOT NULL,
  `supplierEmail` varchar(30) NOT NULL,
  `supplierAddress` varchar(30) NOT NULL,
  `supplierContactNum` bigint(20) NOT NULL,
  `supplierDatePartnered` datetime NOT NULL,
  `contactPersonFname` varchar(30) NOT NULL,
  `contactPersonLname` varchar(30) NOT NULL,
  `contactPersonMiddleI` varchar(30) NOT NULL,
  `contactPersonContactNum` bigint(20) NOT NULL,
  `contactPersonEmail` varchar(30) NOT NULL,
  `status` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `userID` int(11) NOT NULL,
  `fname` varchar(40) NOT NULL,
  `lname` varchar(90) NOT NULL,
  `username` varchar(90) NOT NULL,
  `password` varchar(254) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`userID`, `fname`, `lname`, `username`, `password`) VALUES
(1, 'cherry', '0', 'cher', '123'),
(2, 'cherry', '0', 'cher', '1234'),
(3, 'cherry', 'retuya', 'cher', '123'),
(4, 'cherry', 'ret', '', ''),
(5, 'cherry', 'retuy', '123', '123'),
(6, 'cherry', 'retuy', '123', '123'),
(7, 'ch', '', '', ''),
(8, 'cherry', 'retuya', 'rits', '123'),
(9, 'cherry', 'retuya', 'rits', '123'),
(10, 'cherry', 'anne', 'retuya', '123'),
(11, 'cherry', 'anne', 'retuya', '123'),
(12, 'a', 'b', 'c', 'd'),
(13, 'c', 'c', 'c', 'c'),
(14, 'c', 'c', 'c', 'c'),
(15, 's', 's', 's', 's'),
(16, 's', 's', 's', '$2y$10$8U143CwtL5uIRWF96aVLqeYgzPoCIXlDlX8frS4lQe1t64zD7Eavu'),
(17, 's', 's', 's', '$2y$10$dsoRLvD3724AcVXFYzpt3OSb29Z8NzW6TFqcuQTODCahUIU5ABDrS'),
(18, 's', 's', 's', '$2y$10$c9M751G.SbI7iy7IWKr0L.8PlwcT0rxSOSXjkaxeeMKarPpFiEDYq'),
(19, '1', '1', '1', '$2y$10$WxF62Xdvr8Ign1sMAuEh4ut7X4leDZo5qzUidr.EW5NF1HKQWFAVK');

-- --------------------------------------------------------

--
-- Table structure for table `work_flow`
--

CREATE TABLE `work_flow` (
  `workFlowID` int(11) NOT NULL,
  `productID` int(11) NOT NULL,
  `prequisiteWorkFlowID` int(11) NOT NULL,
  `workFlowTitle` varchar(30) NOT NULL,
  `workFlowDescription` varchar(30) NOT NULL,
  `catergory` varchar(30) NOT NULL,
  `stepNumber` bigint(20) NOT NULL,
  `duration` datetime NOT NULL,
  `status` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `work_flow_details`
--

CREATE TABLE `work_flow_details` (
  `workFlowDetailsID` int(11) NOT NULL,
  `workFlowID` int(11) NOT NULL,
  `rawMaterialsID` int(11) NOT NULL,
  `manHours` bigint(20) NOT NULL,
  `status` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `attendance`
--
ALTER TABLE `attendance`
  ADD PRIMARY KEY (`attendanceID`),
  ADD KEY `employeeID` (`employeeID`);

--
-- Indexes for table `customer`
--
ALTER TABLE `customer`
  ADD PRIMARY KEY (`customerID`);

--
-- Indexes for table `customer_paypal`
--
ALTER TABLE `customer_paypal`
  ADD PRIMARY KEY (`customerPaypalID`),
  ADD KEY `customerID` (`customerID`);

--
-- Indexes for table `employee`
--
ALTER TABLE `employee`
  ADD PRIMARY KEY (`employeeID`),
  ADD KEY `userID` (`userID`);

--
-- Indexes for table `employee_assigned_workflow`
--
ALTER TABLE `employee_assigned_workflow`
  ADD PRIMARY KEY (`employeeAssignedWorkflowID`),
  ADD UNIQUE KEY `employeeID` (`employeeID`),
  ADD KEY `workFlowID` (`workFlowID`);

--
-- Indexes for table `job_order`
--
ALTER TABLE `job_order`
  ADD PRIMARY KEY (`joborderID`),
  ADD KEY `customerID` (`customerID`),
  ADD KEY `employeeID` (`employeeID`);

--
-- Indexes for table `job_order_details`
--
ALTER TABLE `job_order_details`
  ADD PRIMARY KEY (`jobOrderDetailsID`),
  ADD KEY `jobOrderID` (`jobOrderID`),
  ADD KEY `productID` (`productID`);

--
-- Indexes for table `product`
--
ALTER TABLE `product`
  ADD PRIMARY KEY (`productID`);

--
-- Indexes for table `productivity`
--
ALTER TABLE `productivity`
  ADD PRIMARY KEY (`productivityID`),
  ADD KEY `jobOrderDetailsID` (`jobOrderDetailsID`),
  ADD KEY `employeeAssignedWorkFlowID` (`employeeAssignedWorkFlowID`);

--
-- Indexes for table `raw_materials`
--
ALTER TABLE `raw_materials`
  ADD PRIMARY KEY (`rawMaterialsID`);

--
-- Indexes for table `replenish_stock`
--
ALTER TABLE `replenish_stock`
  ADD PRIMARY KEY (`replenishStockID`),
  ADD KEY `supplierID` (`supplierID`),
  ADD KEY `requestedEmpID` (`requestedEmpID`),
  ADD KEY `receivedEmpID` (`receivedEmpID`);

--
-- Indexes for table `replenish_stock_details`
--
ALTER TABLE `replenish_stock_details`
  ADD PRIMARY KEY (`replenishStockDetailsID`),
  ADD KEY `replenishSotckID` (`replenishSotckID`),
  ADD KEY `rawMaterialsID` (`rawMaterialsID`);

--
-- Indexes for table `supplier`
--
ALTER TABLE `supplier`
  ADD PRIMARY KEY (`supplierID`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`userID`);

--
-- Indexes for table `work_flow`
--
ALTER TABLE `work_flow`
  ADD PRIMARY KEY (`workFlowID`),
  ADD KEY `productID` (`productID`),
  ADD KEY `prequisiteWorkFlowID` (`prequisiteWorkFlowID`);

--
-- Indexes for table `work_flow_details`
--
ALTER TABLE `work_flow_details`
  ADD PRIMARY KEY (`workFlowDetailsID`),
  ADD KEY `workFlowID` (`workFlowID`),
  ADD KEY `rawMaterialsID` (`rawMaterialsID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `userID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;
--
-- Constraints for dumped tables
--

--
-- Constraints for table `attendance`
--
ALTER TABLE `attendance`
  ADD CONSTRAINT `attendance_ibfk_1` FOREIGN KEY (`employeeID`) REFERENCES `employee` (`employeeID`);

--
-- Constraints for table `customer_paypal`
--
ALTER TABLE `customer_paypal`
  ADD CONSTRAINT `customer_paypal_ibfk_1` FOREIGN KEY (`customerID`) REFERENCES `customer` (`customerID`);

--
-- Constraints for table `employee`
--
ALTER TABLE `employee`
  ADD CONSTRAINT `employee_ibfk_1` FOREIGN KEY (`userID`) REFERENCES `user` (`userID`);

--
-- Constraints for table `employee_assigned_workflow`
--
ALTER TABLE `employee_assigned_workflow`
  ADD CONSTRAINT `employee_assigned_workflow_ibfk_1` FOREIGN KEY (`employeeID`) REFERENCES `employee` (`employeeID`),
  ADD CONSTRAINT `employee_assigned_workflow_ibfk_2` FOREIGN KEY (`workFlowID`) REFERENCES `work_flow` (`workFlowID`);

--
-- Constraints for table `job_order`
--
ALTER TABLE `job_order`
  ADD CONSTRAINT `job_order_ibfk_1` FOREIGN KEY (`customerID`) REFERENCES `customer` (`customerID`),
  ADD CONSTRAINT `job_order_ibfk_2` FOREIGN KEY (`employeeID`) REFERENCES `employee` (`employeeID`);

--
-- Constraints for table `job_order_details`
--
ALTER TABLE `job_order_details`
  ADD CONSTRAINT `job_order_details_ibfk_1` FOREIGN KEY (`jobOrderID`) REFERENCES `job_order` (`joborderID`),
  ADD CONSTRAINT `job_order_details_ibfk_2` FOREIGN KEY (`productID`) REFERENCES `product` (`productID`);

--
-- Constraints for table `productivity`
--
ALTER TABLE `productivity`
  ADD CONSTRAINT `productivity_ibfk_1` FOREIGN KEY (`jobOrderDetailsID`) REFERENCES `job_order_details` (`jobOrderDetailsID`),
  ADD CONSTRAINT `productivity_ibfk_2` FOREIGN KEY (`employeeAssignedWorkFlowID`) REFERENCES `employee_assigned_workflow` (`employeeAssignedWorkflowID`);

--
-- Constraints for table `replenish_stock`
--
ALTER TABLE `replenish_stock`
  ADD CONSTRAINT `replenish_stock_ibfk_1` FOREIGN KEY (`supplierID`) REFERENCES `supplier` (`supplierID`),
  ADD CONSTRAINT `replenish_stock_ibfk_2` FOREIGN KEY (`requestedEmpID`) REFERENCES `employee` (`employeeID`),
  ADD CONSTRAINT `replenish_stock_ibfk_3` FOREIGN KEY (`receivedEmpID`) REFERENCES `employee` (`employeeID`);

--
-- Constraints for table `replenish_stock_details`
--
ALTER TABLE `replenish_stock_details`
  ADD CONSTRAINT `replenish_stock_details_ibfk_1` FOREIGN KEY (`replenishSotckID`) REFERENCES `replenish_stock` (`replenishStockID`),
  ADD CONSTRAINT `replenish_stock_details_ibfk_2` FOREIGN KEY (`rawMaterialsID`) REFERENCES `raw_materials` (`rawMaterialsID`);

--
-- Constraints for table `work_flow`
--
ALTER TABLE `work_flow`
  ADD CONSTRAINT `work_flow_ibfk_1` FOREIGN KEY (`productID`) REFERENCES `product` (`productID`),
  ADD CONSTRAINT `work_flow_ibfk_2` FOREIGN KEY (`prequisiteWorkFlowID`) REFERENCES `work_flow` (`workFlowID`);

--
-- Constraints for table `work_flow_details`
--
ALTER TABLE `work_flow_details`
  ADD CONSTRAINT `work_flow_details_ibfk_1` FOREIGN KEY (`workFlowID`) REFERENCES `work_flow` (`workFlowID`),
  ADD CONSTRAINT `work_flow_details_ibfk_2` FOREIGN KEY (`rawMaterialsID`) REFERENCES `raw_materials` (`rawMaterialsID`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
