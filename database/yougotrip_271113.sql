-- phpMyAdmin SQL Dump
-- version 3.2.4
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Nov 27, 2013 at 03:19 PM
-- Server version: 5.1.41
-- PHP Version: 5.3.1

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `yougotrip`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin_profile`
--

CREATE TABLE IF NOT EXISTS `admin_profile` (
  `uid` int(11) NOT NULL AUTO_INCREMENT,
  `user_name` varchar(128) NOT NULL,
  `password` varchar(128) NOT NULL,
  `name` varchar(128) NOT NULL,
  `roll` varchar(128) NOT NULL,
  `active` int(11) NOT NULL,
  PRIMARY KEY (`uid`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `admin_profile`
--

INSERT INTO `admin_profile` (`uid`, `user_name`, `password`, `name`, `roll`, `active`) VALUES
(1, 'admin', '21232f297a57a5a743894a0e4a801fc3', 'Ravindran', 'Administrator', 1);

-- --------------------------------------------------------

--
-- Table structure for table `agent`
--

CREATE TABLE IF NOT EXISTS `agent` (
  `agent_id` int(11) NOT NULL AUTO_INCREMENT,
  `title` varchar(8) NOT NULL,
  `first_name` varchar(256) NOT NULL,
  `last_name` varchar(256) NOT NULL,
  `reference` varchar(256) NOT NULL,
  `industries` varchar(256) NOT NULL,
  `address` varchar(512) NOT NULL,
  `city` varchar(100) NOT NULL,
  `zip` varchar(100) NOT NULL,
  `state` varchar(100) NOT NULL,
  `country` varchar(100) NOT NULL,
  `income` decimal(10,2) NOT NULL,
  `phone` varchar(15) NOT NULL,
  `mobile` varchar(15) NOT NULL,
  `mobile2` varchar(15) NOT NULL,
  `fax` varchar(15) NOT NULL,
  `email` varchar(256) NOT NULL,
  `password` varchar(200) NOT NULL,
  `pan_card_no` varchar(50) NOT NULL,
  `website` varchar(256) NOT NULL,
  `company` varchar(255) NOT NULL,
  `company_logo` varchar(100) NOT NULL,
  `company_reg_no` varchar(50) NOT NULL,
  `company_vat_no` varchar(50) NOT NULL,
  `company_service_tax_no` varchar(50) NOT NULL,
  `company_address` text NOT NULL,
  `company_bank_details` text NOT NULL,
  `company_pan_card_no` varchar(50) NOT NULL,
  `ncdate` date NOT NULL,
  `cdate` date NOT NULL,
  `mdate` date NOT NULL,
  `desc` varchar(256) NOT NULL,
  `active` int(8) NOT NULL DEFAULT '1',
  PRIMARY KEY (`agent_id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=8 ;

--
-- Dumping data for table `agent`
--

INSERT INTO `agent` (`agent_id`, `title`, `first_name`, `last_name`, `reference`, `industries`, `address`, `city`, `zip`, `state`, `country`, `income`, `phone`, `mobile`, `mobile2`, `fax`, `email`, `password`, `pan_card_no`, `website`, `company`, `company_logo`, `company_reg_no`, `company_vat_no`, `company_service_tax_no`, `company_address`, `company_bank_details`, `company_pan_card_no`, `ncdate`, `cdate`, `mdate`, `desc`, `active`) VALUES
(2, 'Mr', 'yuva', 'raj', 'reference', 'industris', 'add', 'avinashi', '641654', 'tamilnadu', 'india', '1111111.00', '04296 272909', '8122715049', '9044423456', 'asd', 'box2@gmail.com', '1a1dc91c907325c69271ddf0c944bc72', 'ASDFGH', 'yougotrip.com', 'c name', '', 'reg123', 'vat123', 'tax123', 'address', 'bank details', 'ASSDFGH', '2013-09-28', '2013-09-28', '0000-00-00', 'this is desc', 1),
(3, 'Mr', 'yuva', 'raj', '', '', 'ada', 'avinashi', '641654', 'tamilnadu', 'india', '1312.00', '0422', '8778787456', '', 'fax', 'box2@gmail.com', '', '', '', 'c anem', '../user_image/airtel.png', '', '', '', '', '', '', '0000-00-00', '2013-09-28', '2013-09-28', '', 1),
(4, 'MR', 'Ravi', 'Indain', '', '', '29,30', 'Coimbatore', '641002', 'Tamil Nadu', 'India', '0.00', '', '', '', '', 'cravindr', 'f8d078086010b1275cabe18979ad7199', '', '', 'Home', '../user_image/99poster.jpg', 'TIN123456', '', '', '', '', '', '0000-00-00', '2013-11-18', '2013-11-19', '', 1),
(5, 'MS', 'Suresh', 'Babu', '', '', '33 AKE', 'Tiruchengode', '637211', 'Tamil Nadu', 'India', '1500000.00', '04288252175', '9898989898', '', '', 'suresh@gmail.com', '40be4e59b9a2a2b5dffb918c0e86b3d7', 'ACD123456', '', 'Suresh Travels', '99poster0.jpg', 'TIN123456', 'NO', '123458', '', '', '', '0000-00-00', '2013-11-19', '0000-00-00', '', 1),
(6, 'Mr', 'Ravindran', 'Chinnaiyan', '', '', '29,30', 'Coimbatore', '641002', 'Tamil Nadu', 'India', '0.00', '', '', '', '', 'cravindr', 'd41d8cd98f00b204e9800998ecf8427e', '', '', 'Ravi', '0', '', '', '', '29,30 DB Road', '', '', '0000-00-00', '2013-11-19', '2013-11-27', '', 1);

-- --------------------------------------------------------

--
-- Table structure for table `agent_payment`
--

CREATE TABLE IF NOT EXISTS `agent_payment` (
  `payment_id` int(8) NOT NULL AUTO_INCREMENT,
  `agent_id` int(8) NOT NULL,
  `credit` decimal(10,2) NOT NULL,
  `debit` decimal(10,2) NOT NULL,
  `balance` decimal(10,2) NOT NULL,
  `cdate` datetime NOT NULL,
  `comments` text NOT NULL,
  `invoice_id` int(8) NOT NULL,
  `admin_id` int(4) NOT NULL,
  PRIMARY KEY (`payment_id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `agent_payment`
--

INSERT INTO `agent_payment` (`payment_id`, `agent_id`, `credit`, `debit`, `balance`, `cdate`, `comments`, `invoice_id`, `admin_id`) VALUES
(1, 6, '5000.00', '0.00', '5000.00', '2013-11-27 00:00:00', 'bank deposit', 0, 1),
(2, 6, '0.00', '100.00', '4900.00', '2013-11-27 00:00:00', 'Postal Charge', 0, 1);

-- --------------------------------------------------------

--
-- Table structure for table `brandpartner`
--

CREATE TABLE IF NOT EXISTS `brandpartner` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `companyname` varchar(256) NOT NULL,
  `image` varchar(256) NOT NULL,
  `desc` text NOT NULL,
  `url` varchar(256) NOT NULL,
  `meta_desc` varchar(256) NOT NULL,
  `meta_keyword` varchar(256) NOT NULL,
  `cdate` date NOT NULL,
  `active` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=8 ;

--
-- Dumping data for table `brandpartner`
--

INSERT INTO `brandpartner` (`id`, `companyname`, `image`, `desc`, `url`, `meta_desc`, `meta_keyword`, `cdate`, `active`) VALUES
(4, 'Orange Online Media', 'user_image/logo1.png', 'Welcome to Orange Online media', 'orangeonlinemedia.com', 'Sofware developement', 'Software,website,developemnt', '2013-09-24', 1),
(6, 'test', 'user_image/CCP_logo1.jpg', 'welcome', 'orangeonlinemedia.com', 'Sofware developement', 'Software,website,developemnt', '2013-09-24', 1),
(7, 'OOM', 'user_image/CCP_logo2.jpg', 'OOM', 'orangeonlinemedia.com', 'Sofware developement', 'Software,website,developemnt', '2013-09-24', 1);

-- --------------------------------------------------------

--
-- Table structure for table `category`
--

CREATE TABLE IF NOT EXISTS `category` (
  `category_id` int(11) NOT NULL AUTO_INCREMENT,
  `category_desc` varchar(256) NOT NULL,
  PRIMARY KEY (`category_id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=9 ;

--
-- Dumping data for table `category`
--

INSERT INTO `category` (`category_id`, `category_desc`) VALUES
(1, 'International Pack'),
(2, 'Indian Tour'),
(3, 'Malaysia Singapore'),
(4, 'Europ');

-- --------------------------------------------------------

--
-- Table structure for table `category_display`
--

CREATE TABLE IF NOT EXISTS `category_display` (
  `category_id` int(11) NOT NULL DEFAULT '0',
  `category_desc` varchar(256) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `category_display`
--

INSERT INTO `category_display` (`category_id`, `category_desc`) VALUES
(1, 'International Pack'),
(3, 'Malaysia Singapore'),
(4, 'Europ');

-- --------------------------------------------------------

--
-- Table structure for table `content_detail`
--

CREATE TABLE IF NOT EXISTS `content_detail` (
  `home_link` text NOT NULL,
  `about_us` text NOT NULL,
  `services` text NOT NULL,
  `contact` text NOT NULL,
  `terms_conditions` text NOT NULL,
  `return_policy` text NOT NULL,
  `invoice_text` text NOT NULL,
  `welcome_message` text NOT NULL,
  `forgot_password` text NOT NULL,
  `activation` text NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `content_detail`
--

INSERT INTO `content_detail` (`home_link`, `about_us`, `services`, `contact`, `terms_conditions`, `return_policy`, `invoice_text`, `welcome_message`, `forgot_password`, `activation`) VALUES
('<p>home</p>\r\n', '<p>Transform is an incredibly beautiful <strong>responsive Bootstrap template</strong> for corporate and creative professionals.</p>\r\n', '', '', '', '', '<p>Dear {#name},</p>\r\n\r\n<p>Thanks for selecting Yougotrip.com.&nbsp; Your transaction details are as follows:</p>\r\n\r\n<p>Package Name: {#package_name}</p>\r\n\r\n<p><br />\r\nThanks and regards</p>\r\n\r\n<div>\r\n<p>Yougotrip.com</p>\r\n</div>\r\n', '<p>Welcome to Yougotrip</p>\r\n\r\n<p>Thanks for registering in Yougotrip.com&nbsp;&nbsp; Your account details are as follows:</p>\r\n\r\n<p>Username:&nbsp; {#username}<br />\r\nPassword: Not Shown</p>\r\n\r\n<p>Thanks and regards</p>\r\n\r\n<div>\r\n<p>Yougotrip.com</p>\r\n</div>\r\n', '<p>Dear #username</p>\r\n\r\n<p>your password has been changed.&nbsp; new password is #newpassword</p>\r\n', '');

-- --------------------------------------------------------

--
-- Table structure for table `crm`
--

CREATE TABLE IF NOT EXISTS `crm` (
  `crm_id` int(11) NOT NULL AUTO_INCREMENT,
  `lead_owner` int(11) NOT NULL,
  `title` varchar(8) NOT NULL,
  `first_name` varchar(256) NOT NULL,
  `last_name` varchar(256) NOT NULL,
  `company` varchar(256) NOT NULL,
  `passportno` varchar(20) NOT NULL,
  `issue_date` date NOT NULL,
  `exp_date` date NOT NULL,
  `lead_source` varchar(256) NOT NULL,
  `industries` varchar(256) NOT NULL,
  `address` varchar(512) NOT NULL,
  `city` varchar(100) NOT NULL,
  `zip` varchar(15) NOT NULL,
  `state` varchar(100) NOT NULL,
  `country` varchar(100) NOT NULL,
  `income` decimal(10,2) NOT NULL,
  `phone` varchar(15) NOT NULL,
  `mobile` varchar(15) NOT NULL,
  `mobile2` varchar(15) NOT NULL,
  `fax` varchar(15) NOT NULL,
  `email` varchar(256) NOT NULL,
  `website` varchar(256) NOT NULL,
  `ncdate` date NOT NULL,
  `cdate` date NOT NULL,
  `mdate` date NOT NULL,
  `desc` text NOT NULL,
  PRIMARY KEY (`crm_id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=6 ;

--
-- Dumping data for table `crm`
--

INSERT INTO `crm` (`crm_id`, `lead_owner`, `title`, `first_name`, `last_name`, `company`, `passportno`, `issue_date`, `exp_date`, `lead_source`, `industries`, `address`, `city`, `zip`, `state`, `country`, `income`, `phone`, `mobile`, `mobile2`, `fax`, `email`, `website`, `ncdate`, `cdate`, `mdate`, `desc`) VALUES
(1, 1, 'test', 'test', 'test', 'test', 'test', '2013-09-25', '2013-09-25', 'test', 'test', 'test', 'test', 'test', 'test', 'test', '10.00', 'test', 'test', 'test', 'test', 'test', 'test', '2013-09-25', '2013-09-25', '2013-09-25', 'test'),
(2, 1, 'Mr.', 'Ravindran', 'Chinnaiyan', 'Orange ', '1234568', '2009-11-15', '2023-09-12', 'TV', 'Software', '29,30 DB Road\r\nRS Puram', 'Coimbatore', '641002', 'Tamil Nadu', 'India', '1500000.00', '04223210982', '99444416123', '9787616123', '04224218415', 'cravindr@gmail.com', 'orangeonlinemedia.com', '2013-11-27', '2013-09-25', '2013-09-25', 'NO comments'),
(3, 0, '', 'yuva', '', '', '', '0000-00-00', '0000-00-00', '', '', '', 'avinashi', '', '', '', '0.00', '', '8122715049', '', '', 'my@gmail.com', '', '0000-00-00', '2013-09-27', '0000-00-00', 'try'),
(4, 0, '', 'yuva', '', '', '', '0000-00-00', '0000-00-00', '', '', '', 'avinashi', '', '', '', '0.00', '', '8122715049', '', '', 'raj@gmail.com', '', '0000-00-00', '2013-09-27', '0000-00-00', 'try2'),
(5, 0, '', 'yuva', '', '', '', '0000-00-00', '0000-00-00', '', '', '', 'avinashi', '', '', '', '0.00', '', '8122715049', '', '', 'box2@gmail.com', '', '0000-00-00', '2013-09-27', '0000-00-00', 'Tour Package Enquiry :asd');

-- --------------------------------------------------------

--
-- Table structure for table `customer`
--

CREATE TABLE IF NOT EXISTS `customer` (
  `customer_id` int(11) NOT NULL AUTO_INCREMENT,
  `lead_owner` int(11) NOT NULL,
  `title` varchar(8) NOT NULL,
  `first_name` varchar(256) NOT NULL,
  `last_name` varchar(256) NOT NULL,
  `company` varchar(256) NOT NULL,
  `passportno` varchar(20) NOT NULL,
  `issue_date` date NOT NULL,
  `exp_date` date NOT NULL,
  `lead_source` varchar(256) NOT NULL,
  `industries` varchar(256) NOT NULL,
  `address` varchar(512) NOT NULL,
  `city` varchar(100) NOT NULL,
  `zip` varchar(15) NOT NULL,
  `state` varchar(100) NOT NULL,
  `country` varchar(100) NOT NULL,
  `income` decimal(10,2) NOT NULL,
  `phone` varchar(15) NOT NULL,
  `mobile` varchar(15) NOT NULL,
  `mobile2` varchar(15) NOT NULL,
  `fax` varchar(15) NOT NULL,
  `email` varchar(256) NOT NULL,
  `website` varchar(256) NOT NULL,
  `ncdate` date NOT NULL,
  `cdate` date NOT NULL,
  `mdate` date NOT NULL,
  `desc` varchar(256) NOT NULL,
  `agent_id` int(11) NOT NULL,
  PRIMARY KEY (`customer_id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=7 ;

--
-- Dumping data for table `customer`
--

INSERT INTO `customer` (`customer_id`, `lead_owner`, `title`, `first_name`, `last_name`, `company`, `passportno`, `issue_date`, `exp_date`, `lead_source`, `industries`, `address`, `city`, `zip`, `state`, `country`, `income`, `phone`, `mobile`, `mobile2`, `fax`, `email`, `website`, `ncdate`, `cdate`, `mdate`, `desc`, `agent_id`) VALUES
(1, 0, 'Mr.', 'Ravindran', 'Chinnaiyan', 'Orange', '1234568', '2009-11-15', '2013-09-28', '', 'Software', '25', 'Coimbatore', '641002', '', 'India', '0.00', '', '99444416123', '', '', '', '', '0000-00-00', '2013-10-12', '2013-10-12', '', 2),
(4, 0, 'Mr.', 'Ramkumar', 'Chinnaiyan', 'Orange', '1234568', '2009-11-15', '2013-09-28', '', 'Software', '25', 'Coimbatore', '641002', '', 'India', '0.00', '', '99444416123', '', '', '', '', '0000-00-00', '2013-10-12', '2013-10-12', '', 2),
(3, 0, 'Mr.', 'Ravichandran', '', '', '', '0000-00-00', '0000-00-00', '', '', '', '', '', '', '', '0.00', '', '', '', '', 'rav@gmail.com', '', '0000-00-00', '2013-10-12', '2013-10-12', '', 2),
(5, 0, 'Mr.', 'Praveen', 'C', 'XXX', '', '0000-00-00', '0000-00-00', '', '', '', '', '', '', '', '0.00', '', '', '', '', '', '', '0000-00-00', '2013-10-15', '2013-10-15', '', 2),
(6, 1, 'Mr', 'Ravindran', 'C', 'Home', '123456', '0000-00-00', '0000-00-00', 'Online', 'Software Developer', '29,30 DB Road', 'Coimbatore', '641002', 'Tamil Nadu', 'India', '150000.00', '', '9944416123', '', '', 'cravi@gmail.com', '', '0000-00-00', '2013-11-19', '2013-11-19', '', 4);

-- --------------------------------------------------------

--
-- Table structure for table `display`
--

CREATE TABLE IF NOT EXISTS `display` (
  `pack_id` int(11) NOT NULL DEFAULT '0',
  `category_desc` varchar(256) NOT NULL,
  `pack_title` varchar(256) NOT NULL,
  `pack_desc` text NOT NULL,
  `pack_includes` text NOT NULL,
  `pack_excludes` text NOT NULL,
  `itinerary` text NOT NULL,
  `dateandcost` text NOT NULL,
  `adult_price` int(11) NOT NULL,
  `child_price` int(11) NOT NULL,
  `child_wob_price` double NOT NULL,
  `pack_image` varchar(255) NOT NULL,
  `status` int(11) NOT NULL,
  `createdby` int(2) NOT NULL,
  `cdate` date NOT NULL,
  `mdate` date NOT NULL,
  `modifyby` int(11) NOT NULL,
  `meta_desc` varchar(255) NOT NULL,
  `meta_keyword` varchar(255) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `display`
--

INSERT INTO `display` (`pack_id`, `category_desc`, `pack_title`, `pack_desc`, `pack_includes`, `pack_excludes`, `itinerary`, `dateandcost`, `adult_price`, `child_price`, `child_wob_price`, `pack_image`, `status`, `createdby`, `cdate`, `mdate`, `modifyby`, `meta_desc`, `meta_keyword`) VALUES
(15, 'Indian Tour', 'Tamil Nadu ', '<p><strong style="color: #135cae; font-family: Helvetica, Arial, sans-serif; font-size: 13px; line-height: 1.3em;">Package Overview </strong></p>\r\n\r\n<ul>\r\n	<li>2 Nights in Kulalumpur</li>\r\n	<li>2 Nights in Singapore</li>\r\n	<li>Economy Airfare</li>\r\n	<li><span style="line-height: 1.3em;">Important sight seeing </span></li>\r\n	<li>Malaysia &amp; Singapore Visa</li>\r\n	<li><span style="line-height: 1.3em;">All meals</span></li>\r\n</ul>\r\n', '<p><span style="color: #135cae; font-family: Helvetica, Arial, sans-serif; font-size: 13px; font-weight: bold; line-height: 1.3em;">Package Includes</span></p>\r\n\r\n<ul>\r\n	<li>2 Nights Accommodation with Breakfast at My Hotel or similar in Kulalumpur</li>\r\n	<li>Airport &ndash; Kulalumpur &ndash; Genting &ndash; Singapore Transfers in Kulalumpur</li>\r\n	<li>1 Arrival Breakfast, 3 Lunch &amp; 2 Dinners in Malaysia</li>\r\n	<li>Putra Jaya Tour</li>\r\n	<li>Half a Day Kulalumpur City Tour</li>\r\n	<li>Day Trip to Genting</li>\r\n	<li>Battu Caves</li>\r\n	<li>One Way Cable Car Ride at Genting</li>\r\n	<li><span style="line-height: 1.3em;">2 Nights Accommodation with Breakfast at Grand C Hotel or similar in Singapore</span></li>\r\n	<li>Airport &ndash; Hotel &ndash; Coach Station Transfers in Singapore</li>\r\n	<li>2 Lunch &amp; 3 Dinners in Singapore</li>\r\n	<li><span style="line-height: 1.3em;">Half a Day City Tour in Singapore</span></li>\r\n	<li>Sunset Sentosa with Admission, Under Water World, Dolphin Lagoon &amp; Songs of the Sea</li>\r\n	<li><span style="line-height: 1.3em;"><span style="line-height: 1.3em;">Singapore - Kulalumpur - Singapore by A/c Coach</span></span></li>\r\n	<li><span style="line-height: 1.3em;">All Transfers on Private Basis with the Service of Tamil/English Speaking Guide</span></li>\r\n	<li>Malaysia &amp; Singapore Visa</li>\r\n	<li>Economy Airfare</li>\r\n</ul>\r\n', '<ul>\r\n	<li>Passport Services</li>\r\n	<li>Any Increase in the Air Fare&nbsp;</li>\r\n	<li>Any Increase in Dollar Rate&nbsp;</li>\r\n	<li>Optional Tours if any</li>\r\n	<li>Expenses like Tips, Laundry, Porte rages etc.</li>\r\n	<li>Expenses due to Change of Itinerary / Flight Timing / Natural Disturbances etc.</li>\r\n	<li>Early Check In and Late Check Out</li>\r\n	<li>Any Surcharges due to High Season / Block out Dates / Festivals / Public Holidays</li>\r\n	<li>Any Other Expenses not mentioned in the Tour Cost</li>\r\n</ul>\r\n', '<p><strong>Day 1&nbsp;</strong><br />\r\nArrival at Singapore Airport<br />\r\nRefresh yourself in Airport<br />\r\nMeet &amp; Greet<br />\r\nTransfer to Kulalumpur by A/c Coach<br />\r\nEnroute Breakfast &amp; Lunch&nbsp;<br />\r\n<span style="line-height: 1.3em;">14.00 Hrs &ndash; Check In at the Kulalumpur Hotel</span><br />\r\n15.00 Hrs &ndash; Proceed to Half a Day Kulalumpur City Tour<br />\r\n20.00 Hrs &ndash; Dinner at Indian Restaurant<br />\r\nOvernight Stay in the Hotel</p>\r\n\r\n<p><strong>Day 2&nbsp;</strong><br />\r\n07.30 Hrs &ndash; Breakfast at the Hotel<br />\r\n09.00 Hrs &ndash; Proceed to Day Trip to Genting<br />\r\nEnroute Batu Caves Visit (Murugan Temple)<br />\r\nOne Way Cable Car Ride at Genting<br />\r\n13.00 Hrs &ndash; Lunch at First World Cafe<br />\r\nExplore Genting &amp; Evening Return Back to Kulalumpur<br />\r\n20.00 Hrs &ndash; Dinner at Indian Restaurant<br />\r\nOvernight Stay in the Hotel</p>\r\n\r\n<p><strong style="line-height: 1.3em;">Day 3&nbsp;</strong><br />\r\n07.30 Hrs &ndash; Breakfast at the Hotel<br />\r\n08.00 Hrs &ndash; Check Out of the Hotel &amp; Proceed to Singapore<br />\r\nEnroute Putra Jaya Tour<br />\r\nEnroute LUNCH<br />\r\n15.00 Hrs &ndash; Arrival at Singapore<br />\r\nMeet &amp; Greet<br />\r\nTransfer to the Hotel<br />\r\nCheck In at the Hotel<br />\r\nEvening is Free for Shopping<br />\r\nOvernight Stay in the Hotel</p>\r\n\r\n<p><strong>Day 4</strong><br />\r\n07.30 Hrs &ndash; Breakfast at the Hotel<br />\r\n09.30 Hrs &ndash;&nbsp;Proceed to Half a Day Singapore City Tour<br />\r\n13.00 Hrs &ndash; Lunch at Indian Restaurant<br />\r\n14.30 Hrs &ndash; Proceed to Sunset Sentosa<br />\r\n20.00 Hrs &ndash; Dinner at Indian Restaurant<br />\r\nOvernight Stay in the Hotel</p>\r\n\r\n<p><strong>Day 5</strong><br />\r\n07.30 Hrs &ndash; Breakfast at the Hotel<br />\r\nDay is Free for Shopping<br />\r\n12.00 Hrs &ndash; Check Out of the Hotel &amp; Keep the Luggage in the Hotel Lobby<br />\r\n13.00 Hrs &ndash; Lunch at Indian Restaurant<br />\r\n21.30 Hrs &ndash; Dinner at Indian Restaurant<br />\r\n23.00 Hrs &ndash; Drop at Singapore Airport</p>\r\n\r\n<p>Tour Ends</p>\r\n', '<table border="1" cellpadding="5" cellspacing="0" width="650">\r\n	<tbody>\r\n		<tr>\r\n			<th scope="col"><strong>Departure Date</strong></th>\r\n			<th scope="col"><strong>20-29 pax</strong></th>\r\n			<th scope="col"><strong>30-35 pax</strong></th>\r\n			<th scope="col"><strong>36-42 pax</strong></th>\r\n		</tr>\r\n		<tr>\r\n			<td valign="top"><strong>29th Sep to<br />\r\n			05th Oct 2013</strong><br />\r\n			<span style="background: #00F; color: #fff;">Booking Open</span></td>\r\n			<td align="left">Rs.56,900/- per adult<br />\r\n			Rs.55,400/- per child WB<br />\r\n			Rs.50,900/- per child NB</td>\r\n			<td align="left">Rs.55,900/- per adult<br />\r\n			Rs.54,400/- per child WB<br />\r\n			Rs.49,900/- per child NB</td>\r\n			<td align="left">Rs.54,900/- per adult<br />\r\n			Rs.53,400/- per child WB<br />\r\n			Rs.48,900/- per child NB</td>\r\n		</tr>\r\n		<tr>\r\n			<td valign="top"><strong>19th to 25th<br />\r\n			Oct 2013</strong><br />\r\n			<span style="background: #00F; color: #fff;">Booking Open</span></td>\r\n			<td align="left">Rs.56,900/- per adult<br />\r\n			Rs.56,400/- per child WB<br />\r\n			Rs.50,900/- per child NB</td>\r\n			<td align="left">Rs.55,900/- per adult<br />\r\n			Rs.54,400/- per child WB<br />\r\n			Rs.49,900/- per child NB</td>\r\n			<td align="left">Rs.54,900/- per adult<br />\r\n			Rs.53,400/- per child WB<br />\r\n			Rs.48,900/- per child NB</td>\r\n		</tr>\r\n		<tr>\r\n			<td valign="top"><strong>16th to 22nd&nbsp;<br />\r\n			Nov 2013</strong><br />\r\n			<span style="background: #00F; color: #fff;">Booking Open</span></td>\r\n			<td align="left">Rs.56,900/- per adult<br />\r\n			Rs.56,400/- per child WB<br />\r\n			Rs.50,900/- per child NB</td>\r\n			<td align="left">Rs.55,900/- per adult<br />\r\n			Rs.54,400/- per child WB<br />\r\n			Rs.49,900/- per child NB</td>\r\n			<td align="left">Rs.54,900/- per adult<br />\r\n			Rs.53,400/- per child WB<br />\r\n			Rs.48,900/- per child NB</td>\r\n		</tr>\r\n		<tr>\r\n			<td valign="top"><strong>21st to 27th<br />\r\n			Dec 2013</strong><br />\r\n			<span style="background: #00F; color: #fff;">Booking Open</span></td>\r\n			<td align="left">Rs.58,900/- per adult<br />\r\n			Rs.57,400/- per child WB<br />\r\n			Rs.52,900/- per child NB</td>\r\n			<td align="left">Rs.57,900/- per adult<br />\r\n			Rs.56,400/- per child WB<br />\r\n			Rs.51,900/- per child NB</td>\r\n			<td align="left">Rs.56,900/- per adult<br />\r\n			Rs.56,400/- per child WB<br />\r\n			Rs.50,900/- per child NB</td>\r\n		</tr>\r\n		<tr>\r\n			<td valign="top"><strong>12th to 18th<br />\r\n			Jan 2014</strong><br />\r\n			<span style="background: #00F; color: #fff;">Booking Open</span></td>\r\n			<td align="left">Rs.58,900/- per adult<br />\r\n			Rs.57,400/- per child WB<br />\r\n			Rs.52,900/- per child NB</td>\r\n			<td align="left">Rs.57,900/- per adult<br />\r\n			Rs.56,400/- per child WB<br />\r\n			Rs.51,900/- per child NB</td>\r\n			<td align="left">Rs.56,900/- per adult<br />\r\n			Rs.56,400/- per child WB<br />\r\n			Rs.50,900/- per child NB</td>\r\n		</tr>\r\n	</tbody>\r\n</table>\r\n\r\n<h3><span style="line-height: 1.3em;">Important Note</span></h3>\r\n\r\n<ul>\r\n	<li>All Group Tours would be conducted with Min 20 pax. &nbsp;If the Group size is below 20 pax means, the Guest would be transferred to the next available Group. &nbsp;If they want to go on the given dates means, it would be treated as SIC (Seat in Coach) basis with additional supplement cost.</li>\r\n	<li>We are not holding any confirmed seat in the flight and rooms. &nbsp;Flight seats and rooms are subject to availability.</li>\r\n	<li>Airfare and Exchange Rate&nbsp;&nbsp;(1 US$ = Rs. 60)&nbsp;are calculated as on 17th August 2013, any increase in airfare and exchange rate should be borne by the customer.</li>\r\n</ul>\r\n\r\n<h3><span style="line-height: 1.3em;">Booking Terms</span></h3>\r\n\r\n<ul>\r\n	<li>To Confirm this booking, pls Send us the SCANNED COPY of ALL THE TRAVELING GUESTS (Pls see Minimum 6 Months Validity of Passport is required for any International Travel) to <a href="mailto:sales@yougotrip.com">sales@yougotrip.com</a>&nbsp;<span style="line-height: 1.3em;">and deposit Rs.25,000/- (Non Refundable) in the below given bank and mail us the Scanned copy of the Deposit Chelan.</span></li>\r\n	<li>Balance Full Amount is Payable before 45 Days of the Travel Date</li>\r\n</ul>\r\n\r\n<h3><span style="font-family: Arial, Helvetica, sans-serif; font-size: 1em; font-weight: bold; line-height: 1.3em;">Cancelation Policy</span></h3>\r\n\r\n<ul>\r\n	<li>If booking is cancelled before 30 Days, 30% of the PACKAGE AMOUNT would be deducted</li>\r\n	<li>If booking is cancelled before 15 Days, 50% of the PACKAGE AMOUNT would be deducted</li>\r\n	<li>If booking is cancelled before 10 Days, NO REFUND WOULD BE GIVEN.</li>\r\n</ul>\r\n', 5000, 4500, 4000, '../user_image/madurai-meenakshi-amman-temple-at-dark-.jpg', 1, 0, '2013-10-30', '0000-00-00', 0, 'Madurai,Meenakshi', 'Tamil Nadu Tour,Madurai Tour'),
(8, 'Malaysia Singapore', ' Singapore (4 Nights & 5 Days) ', '<p><strong style="color: #135cae; font-family: Helvetica, Arial, sans-serif; font-size: 13px; line-height: 1.3em;">Package Overview </strong></p>\r\n\r\n<ul>\r\n	<li>2 Nights in Kulalumpur</li>\r\n	<li>2 Nights in Singapore</li>\r\n	<li>Economy Airfare</li>\r\n	<li><span style="line-height: 1.3em;">Important sight seeing </span></li>\r\n	<li>Malaysia &amp; Singapore Visa</li>\r\n	<li><span style="line-height: 1.3em;">All meals</span></li>\r\n</ul>\r\n', '<p><span style="color: #135cae; font-family: Helvetica, Arial, sans-serif; font-size: 13px; font-weight: bold; line-height: 1.3em;">Package Includes</span></p>\r\n\r\n<ul>\r\n	<li>2 Nights Accommodation with Breakfast at My Hotel or similar in Kulalumpur</li>\r\n	<li>Airport &ndash; Kulalumpur &ndash; Genting &ndash; Singapore Transfers in Kulalumpur</li>\r\n	<li>1 Arrival Breakfast, 3 Lunch &amp; 2 Dinners in Malaysia</li>\r\n	<li>Putra Jaya Tour</li>\r\n	<li>Half a Day Kulalumpur City Tour</li>\r\n	<li>Day Trip to Genting</li>\r\n	<li>Battu Caves</li>\r\n	<li>One Way Cable Car Ride at Genting</li>\r\n	<li><span style="line-height: 1.3em;">2 Nights Accommodation with Breakfast at Grand C Hotel or similar in Singapore</span></li>\r\n	<li>Airport &ndash; Hotel &ndash; Coach Station Transfers in Singapore</li>\r\n	<li>2 Lunch &amp; 3 Dinners in Singapore</li>\r\n	<li><span style="line-height: 1.3em;">Half a Day City Tour in Singapore</span></li>\r\n	<li>Sunset Sentosa with Admission, Under Water World, Dolphin Lagoon &amp; Songs of the Sea</li>\r\n	<li><span style="line-height: 1.3em;"><span style="line-height: 1.3em;">Singapore - Kulalumpur - Singapore by A/c Coach</span></span></li>\r\n	<li><span style="line-height: 1.3em;">All Transfers on Private Basis with the Service of Tamil/English Speaking Guide</span></li>\r\n	<li>Malaysia &amp; Singapore Visa</li>\r\n	<li>Economy Airfare</li>\r\n</ul>\r\n', '<h3>Package Excludes</h3>\r\n\r\n<ul>\r\n	<li>Passport Services</li>\r\n	<li>Any Increase in the Air Fare&nbsp;</li>\r\n	<li>Any Increase in Dollar Rate&nbsp;</li>\r\n	<li>Optional Tours if any</li>\r\n	<li>Expenses like Tips, Laundry, Porte rages etc.</li>\r\n	<li>Expenses due to Change of Itinerary / Flight Timing / Natural Disturbances etc.</li>\r\n	<li>Early Check In and Late Check Out</li>\r\n	<li>Any Surcharges due to High Season / Block out Dates / Festivals / Public Holidays</li>\r\n	<li>Any Other Expenses not mentioned in the Tour Cost</li>\r\n</ul>\r\n', '<h3><span style="text-decoration: underline;">DAYWISE ITINERARY :</span></h3>\r\n\r\n<p><strong>Day 1&nbsp;</strong><br />\r\nArrival at Singapore Airport<br />\r\nRefresh yourself in Airport<br />\r\nMeet &amp; Greet<br />\r\nTransfer to Kulalumpur by A/c Coach<br />\r\nEnroute Breakfast &amp; Lunch&nbsp;<br />\r\n<span style="line-height: 1.3em;">14.00 Hrs &ndash; Check In at the Kulalumpur Hotel</span><br />\r\n15.00 Hrs &ndash; Proceed to Half a Day Kulalumpur City Tour<br />\r\n20.00 Hrs &ndash; Dinner at Indian Restaurant<br />\r\nOvernight Stay in the Hotel</p>\r\n\r\n<p><strong>Day 2&nbsp;</strong><br />\r\n07.30 Hrs &ndash; Breakfast at the Hotel<br />\r\n09.00 Hrs &ndash; Proceed to Day Trip to Genting<br />\r\nEnroute Batu Caves Visit (Murugan Temple)<br />\r\nOne Way Cable Car Ride at Genting<br />\r\n13.00 Hrs &ndash; Lunch at First World Cafe<br />\r\nExplore Genting &amp; Evening Return Back to Kulalumpur<br />\r\n20.00 Hrs &ndash; Dinner at Indian Restaurant<br />\r\nOvernight Stay in the Hotel</p>\r\n\r\n<p><strong style="line-height: 1.3em;">Day 3&nbsp;</strong><br />\r\n07.30 Hrs &ndash; Breakfast at the Hotel<br />\r\n08.00 Hrs &ndash; Check Out of the Hotel &amp; Proceed to Singapore<br />\r\nEnroute Putra Jaya Tour<br />\r\nEnroute LUNCH<br />\r\n15.00 Hrs &ndash; Arrival at Singapore<br />\r\nMeet &amp; Greet<br />\r\nTransfer to the Hotel<br />\r\nCheck In at the Hotel<br />\r\nEvening is Free for Shopping<br />\r\nOvernight Stay in the Hotel</p>\r\n\r\n<p><strong>Day 4</strong><br />\r\n07.30 Hrs &ndash; Breakfast at the Hotel<br />\r\n09.30 Hrs &ndash;&nbsp;Proceed to Half a Day Singapore City Tour<br />\r\n13.00 Hrs &ndash; Lunch at Indian Restaurant<br />\r\n14.30 Hrs &ndash; Proceed to Sunset Sentosa<br />\r\n20.00 Hrs &ndash; Dinner at Indian Restaurant<br />\r\nOvernight Stay in the Hotel</p>\r\n\r\n<p><strong>Day 5</strong><br />\r\n07.30 Hrs &ndash; Breakfast at the Hotel<br />\r\nDay is Free for Shopping<br />\r\n12.00 Hrs &ndash; Check Out of the Hotel &amp; Keep the Luggage in the Hotel Lobby<br />\r\n13.00 Hrs &ndash; Lunch at Indian Restaurant<br />\r\n21.30 Hrs &ndash; Dinner at Indian Restaurant<br />\r\n23.00 Hrs &ndash; Drop at Singapore Airport</p>\r\n\r\n<p>Tour Ends</p>\r\n', '<table border="1" cellpadding="5" cellspacing="0" width="650">\r\n	<tbody>\r\n		<tr>\r\n			<th scope="col"><strong>Departure Date</strong></th>\r\n			<th scope="col"><strong>20-29 pax</strong></th>\r\n			<th scope="col"><strong>30-35 pax</strong></th>\r\n			<th scope="col"><strong>36-42 pax</strong></th>\r\n		</tr>\r\n		<tr>\r\n			<td valign="top"><strong>29th Sep to<br />\r\n			05th Oct 2013</strong><br />\r\n			<span style="background: #00F; color: #fff;">Booking Open</span></td>\r\n			<td align="left">Rs.56,900/- per adult<br />\r\n			Rs.55,400/- per child WB<br />\r\n			Rs.50,900/- per child NB</td>\r\n			<td align="left">Rs.55,900/- per adult<br />\r\n			Rs.54,400/- per child WB<br />\r\n			Rs.49,900/- per child NB</td>\r\n			<td align="left">Rs.54,900/- per adult<br />\r\n			Rs.53,400/- per child WB<br />\r\n			Rs.48,900/- per child NB</td>\r\n		</tr>\r\n		<tr>\r\n			<td valign="top"><strong>19th to 25th<br />\r\n			Oct 2013</strong><br />\r\n			<span style="background: #00F; color: #fff;">Booking Open</span></td>\r\n			<td align="left">Rs.56,900/- per adult<br />\r\n			Rs.56,400/- per child WB<br />\r\n			Rs.50,900/- per child NB</td>\r\n			<td align="left">Rs.55,900/- per adult<br />\r\n			Rs.54,400/- per child WB<br />\r\n			Rs.49,900/- per child NB</td>\r\n			<td align="left">Rs.54,900/- per adult<br />\r\n			Rs.53,400/- per child WB<br />\r\n			Rs.48,900/- per child NB</td>\r\n		</tr>\r\n		<tr>\r\n			<td valign="top"><strong>16th to 22nd&nbsp;<br />\r\n			Nov 2013</strong><br />\r\n			<span style="background: #00F; color: #fff;">Booking Open</span></td>\r\n			<td align="left">Rs.56,900/- per adult<br />\r\n			Rs.56,400/- per child WB<br />\r\n			Rs.50,900/- per child NB</td>\r\n			<td align="left">Rs.55,900/- per adult<br />\r\n			Rs.54,400/- per child WB<br />\r\n			Rs.49,900/- per child NB</td>\r\n			<td align="left">Rs.54,900/- per adult<br />\r\n			Rs.53,400/- per child WB<br />\r\n			Rs.48,900/- per child NB</td>\r\n		</tr>\r\n		<tr>\r\n			<td valign="top"><strong>21st to 27th<br />\r\n			Dec 2013</strong><br />\r\n			<span style="background: #00F; color: #fff;">Booking Open</span></td>\r\n			<td align="left">Rs.58,900/- per adult<br />\r\n			Rs.57,400/- per child WB<br />\r\n			Rs.52,900/- per child NB</td>\r\n			<td align="left">Rs.57,900/- per adult<br />\r\n			Rs.56,400/- per child WB<br />\r\n			Rs.51,900/- per child NB</td>\r\n			<td align="left">Rs.56,900/- per adult<br />\r\n			Rs.56,400/- per child WB<br />\r\n			Rs.50,900/- per child NB</td>\r\n		</tr>\r\n		<tr>\r\n			<td valign="top"><strong>12th to 18th<br />\r\n			Jan 2014</strong><br />\r\n			<span style="background: #00F; color: #fff;">Booking Open</span></td>\r\n			<td align="left">Rs.58,900/- per adult<br />\r\n			Rs.57,400/- per child WB<br />\r\n			Rs.52,900/- per child NB</td>\r\n			<td align="left">Rs.57,900/- per adult<br />\r\n			Rs.56,400/- per child WB<br />\r\n			Rs.51,900/- per child NB</td>\r\n			<td align="left">Rs.56,900/- per adult<br />\r\n			Rs.56,400/- per child WB<br />\r\n			Rs.50,900/- per child NB</td>\r\n		</tr>\r\n	</tbody>\r\n</table>\r\n\r\n<h3><span style="line-height: 1.3em;">Important Note</span></h3>\r\n\r\n<ul>\r\n	<li>All Group Tours would be conducted with Min 20 pax. &nbsp;If the Group size is below 20 pax means, the Guest would be transferred to the next available Group. &nbsp;If they want to go on the given dates means, it would be treated as SIC (Seat in Coach) basis with additional supplement cost.</li>\r\n	<li>We are not holding any confirmed seat in the flight and rooms. &nbsp;Flight seats and rooms are subject to availability.</li>\r\n	<li>Airfare and Exchange Rate&nbsp;&nbsp;(1 US$ = Rs. 60)&nbsp;are calculated as on 17th August 2013, any increase in airfare and exchange rate should be borne by the customer.</li>\r\n</ul>\r\n\r\n<h3><span style="line-height: 1.3em;">Booking Terms</span></h3>\r\n\r\n<ul>\r\n	<li>To Confirm this booking, pls Send us the SCANNED COPY of ALL THE TRAVELING GUESTS (Pls see Minimum 6 Months Validity of Passport is required for any International Travel) to <a href="mailto:sales@yougotrip.com">sales@yougotrip.com</a>&nbsp;<span style="line-height: 1.3em;">and deposit Rs.25,000/- (Non Refundable) in the below given bank and mail us the Scanned copy of the Deposit Chelan.</span></li>\r\n	<li>Balance Full Amount is Payable before 45 Days of the Travel Date</li>\r\n</ul>\r\n\r\n<h3><span style="font-family: Arial, Helvetica, sans-serif; font-size: 1em; font-weight: bold; line-height: 1.3em;">Cancelation Policy</span></h3>\r\n\r\n<ul>\r\n	<li>If booking is cancelled before 30 Days, 30% of the PACKAGE AMOUNT would be deducted</li>\r\n	<li>If booking is cancelled before 15 Days, 50% of the PACKAGE AMOUNT would be deducted</li>\r\n	<li>If booking is cancelled before 10 Days, NO REFUND WOULD BE GIVEN.</li>\r\n</ul>\r\n', 59800, 57400, 52900, 'user_image/singapore0.jpg', 1, 0, '2013-09-21', '0000-00-00', 0, 'Sinagpore Tour', 'Singapore tour'),
(6, 'Malaysia Singapore', 'Malaysia & Singapore (6 Nights & 7 Days) ', '<p><strong style="color: #135cae; font-family: Helvetica, Arial, sans-serif; font-size: 13px; line-height: 1.3em;">Package Overview </strong></p>\r\n\r\n<ul>\r\n	<li>3 Nights in Kulalumpur</li>\r\n	<li>2 Nights in Singapore</li>\r\n	<li>1 Night in Star Cruise</li>\r\n	<li>Economy Airfare</li>\r\n	<li><span style="line-height: 1.3em;">Important sight seeing </span></li>\r\n	<li>Malaysia &amp; Singapore Visa</li>\r\n	<li><span style="line-height: 1.3em;">All meals</span></li>\r\n</ul>\r\n', '<p><span style="color: #135cae; font-family: Helvetica, Arial, sans-serif; font-size: 13px; font-weight: bold; line-height: 1.3em;">Package Includes</span></p>\r\n\r\n<ul>\r\n	<li>3 Nights Accommodation with Breakfast at Arenna Stars Hotel or similar in Kulalumpur</li>\r\n	<li>Airport &ndash; Kulalumpur &ndash; Genting &ndash; Singapore Transfers in Kulalumpur</li>\r\n	<li>1 Arrival Breakfast, 4 Lunch &amp; 3 Dinners in Malaysia</li>\r\n	<li>Putra Jaya Tour</li>\r\n	<li>Half a Day Kulalumpur City Tour</li>\r\n	<li>Day Trip to Genting</li>\r\n	<li>Battu Caves</li>\r\n	<li>One Way Cable Car Ride at Genting</li>\r\n	<li>1 Night Star Cruise with Breakfast and Dinner</li>\r\n	<li>Half a day Penang City Tour with Lunch</li>\r\n	<li><span style="line-height: 1.3em;">2 Nights Accommodation with Breakfast at Grand Chancellor Hotel or similar in Singapore</span></li>\r\n	<li>Airport &ndash; Hotel &ndash; Coach Station Transfers in Singapore</li>\r\n	<li>2 Lunch &amp; 3 Dinners in Singapore</li>\r\n	<li>Jurong Bird Park</li>\r\n	<li>Half a Day City Tour in Singapore</li>\r\n	<li>Sunset Sentosa with Admission, Under Water World, Dolphin Lagoon &amp; Songs of the Sea</li>\r\n	<li>Visit to Marina Bay Sands</li>\r\n	<li>Watch Wonderful Light &amp; Sound Show</li>\r\n	<li>Singapore - Kulalumpur - Singapore by A/c Coach</li>\r\n	<li><span style="line-height: 1.3em;">All Transfers on Private Basis with the Service of Tamil/English Speaking Guide</span></li>\r\n	<li>Malaysia &amp; Singapore Visa</li>\r\n	<li>Economy Airfare</li>\r\n</ul>\r\n', '<h3>Package Excludes</h3>\r\n\r\n<ul>\r\n	<li>Passport Services</li>\r\n	<li>Any Increase in the Air Fare&nbsp;</li>\r\n	<li>Any Increase in Dollar Rate&nbsp;</li>\r\n	<li>Optional Tours if any</li>\r\n	<li>Expenses like Tips, Laundry, Porte rages etc.</li>\r\n	<li>Expenses due to Change of Itinerary / Flight Timing / Natural Disturbances etc.</li>\r\n	<li>Early Check In and Late Check Out</li>\r\n	<li>Any Surcharges due to High Season / Block out Dates / Festivals / Public Holidays</li>\r\n	<li>Any Other Expenses not mentioned in the Tour Cost</li>\r\n</ul>\r\n', '<h3><span style="text-decoration: underline;">DAYWISE ITINERARY :</span></h3>\r\n\r\n<p><strong>Day 1&nbsp;</strong><br />\r\nArrival at Singapore Airport<br />\r\nRefresh yourself in Airport<br />\r\nMeet &amp; Greet<br />\r\nTransfer to Kulalumpur by A/c Coach<br />\r\nEnroute Breakfast &amp; Lunch&nbsp;<br />\r\nEnroute Putra Jaya Tour<br />\r\n15.00 Hrs &ndash; Check In at the Kulalumpur Hotel<br />\r\n20.00 Hrs &ndash; Dinner at Indian Restaurant<br />\r\nOvernight Stay in the Hotel</p>\r\n\r\n<p><strong>Day 2&nbsp;</strong><br />\r\n07.30 Hrs &ndash; Breakfast at the Hotel<br />\r\n09.00 Hrs &ndash; Proceed to Day Trip to Genting<br />\r\nEnroute Batu Caves Visit (Murugan Temple)<br />\r\nOne Way Cable Car Ride at Genting<br />\r\n13.00 Hrs &ndash; Lunch at First World Cafe<br />\r\nExplore Genting &amp; Evening Return Back to Kulalumpur<br />\r\n20.00 Hrs &ndash; Dinner at Indian Restaurant<br />\r\nOvernight Stay in the Hotel</p>\r\n\r\n<p><strong>Day 3&nbsp;</strong><br />\r\n07.30 Hrs &ndash; Breakfast at the Hotel<br />\r\n10.00 Hrs &ndash; Proceed to Half a Day Kulalumpur City Tour<br />\r\n13.00 Hrs &ndash; Lunch at Indian Restaurant<br />\r\nNoon is Free for Shopping<br />\r\n20.00 Hrs &ndash; Dinner at Indian Restaurant<br />\r\nOvernight Stay in the Hotel</p>\r\n\r\n<p><strong>Day 4&nbsp;</strong><br />\r\n07.30 Hrs &ndash; Breakfast at the Hotel<br />\r\n08.00 Hrs &ndash; Check Out of the Hotel &amp; Proceed to Penang<br />\r\nEnroute LUNCH<br />\r\n14.00 Hrs &ndash; Proceed to Half a day Penang City Tour<br />\r\n17.00 Hrs &ndash; Proceed to Check in at Star Cruise<br />\r\n20.00 Hrs &ndash; Star Cruise Saling begins<br />\r\n20.30 Hrs &ndash; Dinner at Star Cruise<br />\r\nOvernight Stay in the Star Cruise</p>\r\n\r\n<p><strong>Day 5</strong><br />\r\n07.00 Hrs &ndash; Breakfast at the Star Cruise<br />\r\n08.00 Hrs &ndash; Check Out of the Star Cruise &amp; Proceed to Singapore<br />\r\nEnroute LUNCH<br />\r\n18.00 Hrs &ndash; Arrival at Singapore<br />\r\nMeet &amp; Greet<br />\r\nTransfer to the Hotel<br />\r\nCheck In at the Hotel<br />\r\nEvening is Free for Shopping<br />\r\nOvernight Stay in the Hotel</p>\r\n\r\n<p><strong>Day 6</strong><br />\r\n07.30 Hrs &ndash; Breakfast at the Hotel<br />\r\n09.30 Hrs &ndash; Proceed to Jurong Bird Park<br />\r\n13.00 Hrs &ndash; Lunch at Indian Restaurant<br />\r\n14.30 Hrs &ndash; Proceed to Sunset Sentosa<br />\r\n20.00 Hrs &ndash; Dinner at Indian Restaurant<br />\r\nOvernight Stay in the Hotel</p>\r\n\r\n<p><strong>Day 7</strong><br />\r\n07.30 Hrs &ndash; Breakfast at the Hotel<br />\r\nMorning is Free for Shopping<br />\r\n12.00 Hrs &ndash; Check Out of the Hotel &amp; Keep the Luggage in the Hotel Lobby<br />\r\n13.00 Hrs &ndash; Lunch at Indian Restaurant<br />\r\n14.30 Hrs &ndash; Proceed to Half a Day Singapore City Tour<br />\r\n18.00 Hrs &ndash; Visit to Marina Bay Sands<br />\r\n20.00 Hrs &ndash; Watch Wonderful Light &amp; Sound Show<br />\r\n21.30 Hrs &ndash; Dinner at Indian Restaurant<br />\r\n23.00 Hrs &ndash; Drop at Singapore Airport</p>\r\n\r\n<p>Tour Ends</p>\r\n', '<table border="1" cellpadding="5" cellspacing="0" width="650">\r\n	<tbody>\r\n		<tr>\r\n			<th scope="col"><strong>Departure Date</strong></th>\r\n			<th scope="col"><strong>20-29 pax</strong></th>\r\n			<th scope="col"><strong>30-35 pax</strong></th>\r\n			<th scope="col"><strong>36-42 pax</strong></th>\r\n		</tr>\r\n		<tr>\r\n			<td valign="top"><strong>29th Sep to<br />\r\n			07th Oct 2013</strong><br />\r\n			<span style="background: #00F; color: #fff;">Booking Open</span></td>\r\n			<td align="left">Rs.74,000/- per adult<br />\r\n			Rs.72,000/- per child WB<br />\r\n			Rs.67,000/- per child NB</td>\r\n			<td align="left">Rs.72,000/- per adult<br />\r\n			Rs.70,000/- per child WB<br />\r\n			Rs.65,000/- per child NB</td>\r\n			<td align="left">Rs.71,000/- per adult<br />\r\n			Rs.69,000/- per child WB<br />\r\n			Rs.64,000/- per child NB</td>\r\n		</tr>\r\n		<tr>\r\n			<td valign="top"><strong>19th to 27th<br />\r\n			Oct 2013</strong><br />\r\n			<span style="background: #00F; color: #fff;">Booking Open</span></td>\r\n			<td align="left">Rs.74,000/- per adult<br />\r\n			Rs.72,000/- per child WB<br />\r\n			Rs.67,000/- per child NB</td>\r\n			<td align="left">Rs.72,000/- per adult<br />\r\n			Rs.70,000/- per child WB<br />\r\n			Rs.65,000/- per child NB</td>\r\n			<td align="left">Rs.71,000/- per adult<br />\r\n			Rs.69,000/- per child WB<br />\r\n			Rs.64,000/- per child NB</td>\r\n		</tr>\r\n		<tr>\r\n			<td valign="top"><strong>16th to 24th&nbsp;<br />\r\n			Nov 2013</strong><br />\r\n			<span style="background: #00F; color: #fff;">Booking Open</span></td>\r\n			<td align="left">Rs.74,000/- per adult<br />\r\n			Rs.72,000/- per child WB<br />\r\n			Rs.67,000/- per child NB</td>\r\n			<td align="left">Rs.72,000/- per adult<br />\r\n			Rs.70,000/- per child WB<br />\r\n			Rs.65,000/- per child NB</td>\r\n			<td align="left">Rs.71,000/- per adult<br />\r\n			Rs.69,000/- per child WB<br />\r\n			Rs.64,000/- per child NB</td>\r\n		</tr>\r\n		<tr>\r\n			<td valign="top"><strong>21st to 29th<br />\r\n			Dec 2013</strong><br />\r\n			<span style="background: #00F; color: #fff;">Booking Open</span></td>\r\n			<td align="left">Rs.74,000/- per adult<br />\r\n			Rs.74,000/- per child WB<br />\r\n			Rs.69,000/- per child NB</td>\r\n			<td align="left">Rs.74,000/- per adult<br />\r\n			Rs.72,000/- per child WB<br />\r\n			Rs.67,000/- per child NB</td>\r\n			<td align="left">Rs.73,000/- per adult<br />\r\n			Rs.71,000/- per child WB<br />\r\n			Rs.66,000/- per child NB</td>\r\n		</tr>\r\n		<tr>\r\n			<td valign="top"><strong>11th to 19th<br />\r\n			Jan 2014</strong><br />\r\n			<span style="background: #ff0000; color: #fff;">Booking Closed</span></td>\r\n			<td align="left">Rs.74,000/- per adult<br />\r\n			Rs.72,000/- per child WB<br />\r\n			Rs.67,000/- per child NB</td>\r\n			<td align="left">Rs.72,000/- per adult<br />\r\n			Rs.70,000/- per child WB<br />\r\n			Rs.65,000/- per child NB</td>\r\n			<td align="left">Rs.71,000/- per adult<br />\r\n			Rs.69,000/- per child WB<br />\r\n			Rs.64,000/- per child NB</td>\r\n		</tr>\r\n	</tbody>\r\n</table>\r\n\r\n<h3><span style="line-height: 1.3em;">Important Note</span></h3>\r\n\r\n<ul>\r\n	<li>All Group Tours would be conducted with Min 20 pax. &nbsp;If the Group size is below 20 pax means, the Guest would be transferred to the next available Group. &nbsp;If they want to go on the given dates means, it would be treated as SIC (Seat in Coach) basis with additional supplement cost.</li>\r\n	<li>We are not holding any confirmed seat in the flight and rooms. &nbsp;Flight seats and rooms are subject to availability.</li>\r\n	<li>Airfare and Exchange Rate&nbsp;&nbsp;(1 US$ = Rs. 60)&nbsp;are calculated as on 17th August 2013, any increase in airfare and exchange rate should be borne by the customer.</li>\r\n</ul>\r\n\r\n<h3><span style="line-height: 1.3em;">Booking Terms</span></h3>\r\n\r\n<ul>\r\n	<li>To Confirm this booking, pls Send us the SCANNED COPY of ALL THE TRAVELING GUESTS (Pls see Minimum 6 Months Validity of Passport is required for any International Travel) to <a href="mailto:sales@yougotrip.com">sales@yougotrip.com</a>&nbsp;<span style="line-height: 1.3em;">and deposit Rs.25,000/- (Non Refundable) in the below given bank and mail us the Scanned copy of the Deposit Chelan.</span></li>\r\n	<li>Balance Full Amount is Payable before 45 Days of the Travel Date</li>\r\n</ul>\r\n\r\n<h3><span style="font-family: Arial, Helvetica, sans-serif; font-size: 1em; font-weight: bold; line-height: 1.3em;">Cancelation Policy</span></h3>\r\n\r\n<ul>\r\n	<li>If booking is cancelled before 30 Days, 30% of the PACKAGE AMOUNT would be deducted</li>\r\n	<li>If booking is cancelled before 15 Days, 50% of the PACKAGE AMOUNT would be deducted</li>\r\n	<li>If booking is cancelled before 10 Days, NO REFUND WOULD BE GIVEN.</li>\r\n</ul>\r\n', 74000, 74000, 69000, 'user_image/Malaysia4.jpg', 1, 0, '2013-09-21', '2013-09-21', 0, 'malaysia,singapore tour', 'malaysia singapore'),
(7, 'Malaysia Singapore', 'Singapore (5 Nights & 6 Days) ', '<p><strong style="color: #135cae; font-family: Helvetica, Arial, sans-serif; font-size: 13px; line-height: 1.3em;">Package Overview </strong></p>\r\n\r\n<ul>\r\n	<li>3 Nights in Kulalumpur</li>\r\n	<li>2 Nights in Singapore</li>\r\n	<li>Economy Airfare</li>\r\n	<li><span style="line-height: 1.3em;">Important sight seeing </span></li>\r\n	<li>Malaysia &amp; Singapore Visa</li>\r\n	<li><span style="line-height: 1.3em;">All meals</span></li>\r\n</ul>\r\n', '<p><span style="color: #135cae; font-family: Helvetica, Arial, sans-serif; font-size: 13px; font-weight: bold; line-height: 1.3em;">Package Includes</span></p>\r\n\r\n<ul>\r\n	<li>3 Nights Accommodation with Breakfast at Arenna Stars Hotel or similar in Kulalumpur</li>\r\n	<li>Airport &ndash; Kulalumpur &ndash; Genting &ndash; Singapore Transfers in Kulalumpur</li>\r\n	<li>1 Arrival Breakfast, 4 Lunch &amp; 3 Dinners in Malaysia</li>\r\n	<li>Putra Jaya Tour</li>\r\n	<li>Half a Day Kulalumpur City Tour</li>\r\n	<li>Day Trip to Genting</li>\r\n	<li>Battu Caves</li>\r\n	<li>One Way Cable Car Ride at Genting</li>\r\n	<li><span style="line-height: 1.3em;">2 Nights Accommodation with Breakfast at Grand Chancellor Hotel or similar in Singapore</span></li>\r\n	<li>Airport &ndash; Hotel &ndash; Coach Station Transfers in Singapore</li>\r\n	<li>2 Lunch &amp; 3 Dinners in Singapore</li>\r\n	<li>Jurong Bird Park</li>\r\n	<li>Half a Day City Tour in Singapore</li>\r\n	<li>Sunset Sentosa with Admission, Under Water World, Dolphin Lagoon &amp; Songs of the Sea</li>\r\n	<li>Visit to Marina Bay Sands</li>\r\n	<li>Watch Wonderful Light &amp; Sound Show</li>\r\n	<li>Singapore - Kulalumpur - Singapore by A/c Coach</li>\r\n	<li><span style="line-height: 1.3em;">All Transfers on Private Basis with the Service of Tamil/English Speaking Guide</span></li>\r\n	<li>Malaysia &amp; Singapore Visa</li>\r\n	<li>Economy Airfare</li>\r\n</ul>\r\n', '<h3>Package Excludes</h3>\r\n\r\n<ul>\r\n	<li>Passport Services</li>\r\n	<li>Any Increase in the Air Fare&nbsp;</li>\r\n	<li>Any Increase in Dollar Rate&nbsp;</li>\r\n	<li>Optional Tours if any</li>\r\n	<li>Expenses like Tips, Laundry, Porte rages etc.</li>\r\n	<li>Expenses due to Change of Itinerary / Flight Timing / Natural Disturbances etc.</li>\r\n	<li>Early Check In and Late Check Out</li>\r\n	<li>Any Surcharges due to High Season / Block out Dates / Festivals / Public Holidays</li>\r\n	<li>Any Other Expenses not mentioned in the Tour Cost</li>\r\n</ul>\r\n', '<h3><span style="text-decoration: underline;">DAYWISE ITINERARY :</span></h3>\r\n\r\n<p><strong>Day 1&nbsp;</strong><br />\r\nArrival at Singapore Airport<br />\r\nRefresh yourself in Airport<br />\r\nMeet &amp; Greet<br />\r\nTransfer to Kulalumpur by A/c Coach<br />\r\nEnroute Breakfast &amp; Lunch&nbsp;<br />\r\nEnroute Putra Jaya Tour<br />\r\n15.00 Hrs &ndash; Check In at the Kulalumpur Hotel<br />\r\n20.00 Hrs &ndash; Dinner at Indian Restaurant<br />\r\nOvernight Stay in the Hotel</p>\r\n\r\n<p><strong>Day 2&nbsp;</strong><br />\r\n07.30 Hrs &ndash; Breakfast at the Hotel<br />\r\n09.00 Hrs &ndash; Proceed to Day Trip to Genting<br />\r\nEnroute Batu Caves Visit (Murugan Temple)<br />\r\nOne Way Cable Car Ride at Genting<br />\r\n13.00 Hrs &ndash; Lunch at First World Cafe<br />\r\nExplore Genting &amp; Evening Return Back to Kulalumpur<br />\r\n20.00 Hrs &ndash; Dinner at Indian Restaurant<br />\r\nOvernight Stay in the Hotel</p>\r\n\r\n<p><strong>Day 3&nbsp;</strong><br />\r\n07.30 Hrs &ndash; Breakfast at the Hotel<br />\r\n10.00 Hrs &ndash; Proceed to Half a Day Kulalumpur City Tour<br />\r\n13.00 Hrs &ndash; Lunch at Indian Restaurant<br />\r\nNoon is Free for Shopping<br />\r\n20.00 Hrs &ndash; Dinner at Indian Restaurant<br />\r\nOvernight Stay in the Hotel</p>\r\n\r\n<p><strong>Day 4&nbsp;</strong><br />\r\n07.30 Hrs &ndash; Breakfast at the Hotel<br />\r\n08.00 Hrs &ndash; Check Out of the Hotel &amp; Proceed to Singapore<br />\r\nEnroute LUNCH<br />\r\n15.00 Hrs &ndash; Arrival at Singapore<br />\r\nMeet &amp; Greet<br />\r\nTransfer to the Hotel<br />\r\nCheck In at the Hotel<br />\r\nEvening is Free for Shopping<br />\r\nOvernight Stay in the Hotel</p>\r\n\r\n<p><strong>Day 5</strong><br />\r\n07.30 Hrs &ndash; Breakfast at the Hotel<br />\r\n09.30 Hrs &ndash; Proceed to Jurong Bird Park<br />\r\n13.00 Hrs &ndash; Lunch at Indian Restaurant<br />\r\n14.30 Hrs &ndash; Proceed to Sunset Sentosa<br />\r\n20.00 Hrs &ndash; Dinner at Indian Restaurant<br />\r\nOvernight Stay in the Hotel</p>\r\n\r\n<p><strong>Day 6</strong><br />\r\n07.30 Hrs &ndash; Breakfast at the Hotel<br />\r\nMorning is Free for Shopping<br />\r\n12.00 Hrs &ndash; Check Out of the Hotel &amp; Keep the Luggage in the Hotel Lobby<br />\r\n13.00 Hrs &ndash; Lunch at Indian Restaurant<br />\r\n14.30 Hrs &ndash; Proceed to Half a Day Singapore City Tour<br />\r\n18.00 Hrs &ndash; Visit to Marina Bay Sands<br />\r\n20.00 Hrs &ndash; Watch Wonderful Light &amp; Sound Show<br />\r\n21.30 Hrs &ndash; Dinner at Indian Restaurant<br />\r\n23.00 Hrs &ndash; Drop at Singapore Airport</p>\r\n\r\n<p>Tour Ends</p>\r\n', '<table border="1" cellpadding="5" cellspacing="0" width="650">\r\n	<tbody>\r\n		<tr>\r\n			<th scope="col"><strong>Departure Date</strong></th>\r\n			<th scope="col"><strong>20-29 pax</strong></th>\r\n			<th scope="col"><strong>30-35 pax</strong></th>\r\n			<th scope="col"><strong>36-42 pax</strong></th>\r\n		</tr>\r\n		<tr>\r\n			<td valign="top"><strong>29th Sep to<br />\r\n			06th Oct 2013</strong><br />\r\n			<span style="background: #00F; color: #fff;">Booking Open</span></td>\r\n			<td align="left">Rs.64,000/- per adult<br />\r\n			Rs.62,000/- per child WB<br />\r\n			Rs.57,000/- per child NB</td>\r\n			<td align="left">Rs.62,000/- per adult<br />\r\n			Rs.60,000/- per child WB<br />\r\n			Rs.55,000/- per child NB</td>\r\n			<td align="left">Rs.61,000/- per adult<br />\r\n			Rs.59,000/- per child WB<br />\r\n			Rs.54,000/- per child NB</td>\r\n		</tr>\r\n		<tr>\r\n			<td valign="top"><strong>19th to 26th&nbsp;<br />\r\n			Oct 2013</strong><br />\r\n			<span style="background: #00F; color: #fff;">Booking Open</span></td>\r\n			<td align="left">Rs.64,000/- per adult<br />\r\n			Rs.62,000/- per child WB<br />\r\n			Rs.57,000/- per child NB</td>\r\n			<td align="left">Rs.62,000/- per adult<br />\r\n			Rs.60,000/- per child WB<br />\r\n			Rs.55,000/- per child NB</td>\r\n			<td align="left">Rs.61,000/- per adult<br />\r\n			Rs.59,000/- per child WB<br />\r\n			Rs.54,000/- per child NB</td>\r\n		</tr>\r\n		<tr>\r\n			<td valign="top"><strong>16th to 23rd<br />\r\n			Nov 2013</strong><br />\r\n			<span style="background: #00F; color: #fff;">Booking Open</span></td>\r\n			<td align="left">Rs.64,000/- per adult<br />\r\n			Rs.62,000/- per child WB<br />\r\n			Rs.57,000/- per child NB</td>\r\n			<td align="left">Rs.62,000/- per adult<br />\r\n			Rs.60,000/- per child WB<br />\r\n			Rs.55,000/- per child NB</td>\r\n			<td align="left">Rs.61,000/- per adult<br />\r\n			Rs.59,000/- per child WB<br />\r\n			Rs.54,000/- per child NB</td>\r\n		</tr>\r\n		<tr>\r\n			<td valign="top"><strong>21st to 28th<br />\r\n			Dec 2013</strong><br />\r\n			<span style="background: #00F; color: #fff;">Booking Open</span></td>\r\n			<td align="left">Rs.66,000/- per adult<br />\r\n			Rs.64,000/- per child WB<br />\r\n			Rs.59,000/- per child NB</td>\r\n			<td align="left">Rs.64,000/- per adult<br />\r\n			Rs.62,000/- per child WB<br />\r\n			Rs.57,000/- per child NB</td>\r\n			<td align="left">Rs.63,000/- per adult<br />\r\n			Rs.59,000/- per child WB<br />\r\n			Rs.56,000/- per child NB</td>\r\n		</tr>\r\n		<tr>\r\n			<td valign="top"><strong>13th to 20th<br />\r\n			Jan 2014</strong><br />\r\n			<span style="background: #00F; color: #fff;">Booking Open</span></td>\r\n			<td align="left">Rs.66,000/- per adult<br />\r\n			Rs.64,000/- per child WB<br />\r\n			Rs.59,000/- per child NB</td>\r\n			<td align="left">Rs.64,000/- per adult<br />\r\n			Rs.62,000/- per child WB<br />\r\n			Rs.57,000/- per child NB</td>\r\n			<td align="left">Rs.63,000/- per adult<br />\r\n			Rs.59,000/- per child WB<br />\r\n			Rs.56,000/- per child NB</td>\r\n		</tr>\r\n	</tbody>\r\n</table>\r\n\r\n<h3><span style="line-height: 1.3em;">Important Note</span></h3>\r\n\r\n<ul>\r\n	<li>All Group Tours would be conducted with Min 20 pax. &nbsp;If the Group size is below 20 pax means, the Guest would be transferred to the next available Group. &nbsp;If they want to go on the given dates means, it would be treated as SIC (Seat in Coach) basis with additional supplement cost.</li>\r\n	<li>We are not holding any confirmed seat in the flight and rooms. &nbsp;Flight seats and rooms are subject to availability.</li>\r\n	<li>Airfare and Exchange Rate&nbsp;&nbsp;(1 US$ = Rs. 60)&nbsp;are calculated as on 17th August 2013, any increase in airfare and exchange rate should be borne by the customer.</li>\r\n</ul>\r\n\r\n<h3><span style="line-height: 1.3em;">Booking Terms</span></h3>\r\n\r\n<ul>\r\n	<li>To Confirm this booking, pls Send us the SCANNED COPY of ALL THE TRAVELING GUESTS (Pls see Minimum 6 Months Validity of Passport is required for any International Travel) to <a href="mailto:sales@yougotrip.com">sales@yougotrip.com</a>&nbsp;<span style="line-height: 1.3em;">and deposit Rs.25,000/- (Non Refundable) in the below given bank and mail us the Scanned copy of the Deposit Chelan.</span></li>\r\n	<li>Balance Full Amount is Payable before 45 Days of the Travel Date</li>\r\n</ul>\r\n\r\n<h3><span style="font-family: Arial, Helvetica, sans-serif; font-size: 1em; font-weight: bold; line-height: 1.3em;">Cancelation Policy</span></h3>\r\n\r\n<ul>\r\n	<li>If booking is cancelled before 30 Days, 30% of the PACKAGE AMOUNT would be deducted</li>\r\n	<li>If booking is cancelled before 15 Days, 50% of the PACKAGE AMOUNT would be deducted</li>\r\n	<li>If booking is cancelled before 10 Days, NO REFUND WOULD BE GIVEN.</li>\r\n</ul>\r\n', 66000, 64000, 59000, 'user_image/singapore.jpg', 1, 0, '2013-09-21', '0000-00-00', 0, 'Singapore Tour', 'Singapore tour');
INSERT INTO `display` (`pack_id`, `category_desc`, `pack_title`, `pack_desc`, `pack_includes`, `pack_excludes`, `itinerary`, `dateandcost`, `adult_price`, `child_price`, `child_wob_price`, `pack_image`, `status`, `createdby`, `cdate`, `mdate`, `modifyby`, `meta_desc`, `meta_keyword`) VALUES
(5, 'Malaysia Singapore', 'Malaysia & Singapore (5 Nights & 6 Days) ', '<p><strong style="color: #135cae; font-family: Helvetica, Arial, sans-serif; font-size: 13px; line-height: 1.3em;">Package Overview </strong></p>\r\n\r\n<ul>\r\n	<li>3 Nights in Kulalumpur</li>\r\n	<li>2 Nights in Singapore</li>\r\n	<li>Economy Airfare</li>\r\n	<li><span style="line-height: 1.3em;">Important sight seeing </span></li>\r\n	<li>Malaysia &amp; Singapore Visa</li>\r\n	<li><span style="line-height: 1.3em;">All meals</span></li>\r\n</ul>\r\n', '<p><span style="color: #135cae; font-family: Helvetica, Arial, sans-serif; font-size: 13px; font-weight: bold; line-height: 1.3em;">Package Includes</span></p>\r\n\r\n<ul>\r\n	<li>3 Nights Accommodation with Breakfast at Arenna Stars Hotel or similar in Kulalumpur</li>\r\n	<li>Airport &ndash; Kulalumpur &ndash; Genting &ndash; Singapore Transfers in Kulalumpur</li>\r\n	<li>1 Arrival Breakfast, 4 Lunch &amp; 3 Dinners in Malaysia</li>\r\n	<li>Putra Jaya Tour</li>\r\n	<li>Half a Day Kulalumpur City Tour</li>\r\n	<li>Day Trip to Genting</li>\r\n	<li>Battu Caves</li>\r\n	<li>One Way Cable Car Ride at Genting</li>\r\n	<li><span style="line-height: 1.3em;">2 Nights Accommodation with Breakfast at Grand Chancellor Hotel or similar in Singapore</span></li>\r\n	<li>Airport &ndash; Hotel &ndash; Coach Station Transfers in Singapore</li>\r\n	<li>2 Lunch &amp; 3 Dinners in Singapore</li>\r\n	<li>Jurong Bird Park</li>\r\n	<li>Half a Day City Tour in Singapore</li>\r\n	<li>Sunset Sentosa with Admission, Under Water World, Dolphin Lagoon &amp; Songs of the Sea</li>\r\n	<li>Visit to Marina Bay Sands</li>\r\n	<li>Watch Wonderful Light &amp; Sound Show</li>\r\n	<li>Singapore - Kulalumpur - Singapore by A/c Coach</li>\r\n	<li><span style="line-height: 1.3em;">All Transfers on Private Basis with the Service of Tamil/English Speaking Guide</span></li>\r\n	<li>Malaysia &amp; Singapore Visa</li>\r\n	<li>Economy Airfare</li>\r\n</ul>\r\n', '<h3>Package Excludes</h3>\r\n\r\n<ul>\r\n	<li>Passport Services</li>\r\n	<li>Any Increase in the Air Fare&nbsp;</li>\r\n	<li>Any Increase in Dollar Rate&nbsp;</li>\r\n	<li>Optional Tours if any</li>\r\n	<li>Expenses like Tips, Laundry, Porte rages etc.</li>\r\n	<li>Expenses due to Change of Itinerary / Flight Timing / Natural Disturbances etc.</li>\r\n	<li>Early Check In and Late Check Out</li>\r\n	<li>Any Surcharges due to High Season / Block out Dates / Festivals / Public Holidays</li>\r\n	<li>Any Other Expenses not mentioned in the Tour Cost</li>\r\n</ul>\r\n', '<h3><span style="text-decoration: underline;">DAYWISE ITINERARY :</span></h3>\r\n\r\n<p><strong>Day 1&nbsp;</strong><br />\r\nArrival at Singapore Airport<br />\r\nRefresh yourself in Airport<br />\r\nMeet &amp; Greet<br />\r\nTransfer to Kulalumpur by A/c Coach<br />\r\nEnroute Breakfast &amp; Lunch&nbsp;<br />\r\nEnroute Putra Jaya Tour<br />\r\n15.00 Hrs &ndash; Check In at the Kulalumpur Hotel<br />\r\n20.00 Hrs &ndash; Dinner at Indian Restaurant<br />\r\nOvernight Stay in the Hotel</p>\r\n\r\n<p><strong>Day 2&nbsp;</strong><br />\r\n07.30 Hrs &ndash; Breakfast at the Hotel<br />\r\n09.00 Hrs &ndash; Proceed to Day Trip to Genting<br />\r\nEnroute Batu Caves Visit (Murugan Temple)<br />\r\nOne Way Cable Car Ride at Genting<br />\r\n13.00 Hrs &ndash; Lunch at First World Cafe<br />\r\nExplore Genting &amp; Evening Return Back to Kulalumpur<br />\r\n20.00 Hrs &ndash; Dinner at Indian Restaurant<br />\r\nOvernight Stay in the Hotel</p>\r\n\r\n<p><strong>Day 3&nbsp;</strong><br />\r\n07.30 Hrs &ndash; Breakfast at the Hotel<br />\r\n10.00 Hrs &ndash; Proceed to Half a Day Kulalumpur City Tour<br />\r\n13.00 Hrs &ndash; Lunch at Indian Restaurant<br />\r\nNoon is Free for Shopping<br />\r\n20.00 Hrs &ndash; Dinner at Indian Restaurant<br />\r\nOvernight Stay in the Hotel</p>\r\n\r\n<p><strong>Day 4&nbsp;</strong><br />\r\n07.30 Hrs &ndash; Breakfast at the Hotel<br />\r\n08.00 Hrs &ndash; Check Out of the Hotel &amp; Proceed to Singapore<br />\r\nEnroute LUNCH<br />\r\n15.00 Hrs &ndash; Arrival at Singapore<br />\r\nMeet &amp; Greet<br />\r\nTransfer to the Hotel<br />\r\nCheck In at the Hotel<br />\r\nEvening is Free for Shopping<br />\r\nOvernight Stay in the Hotel</p>\r\n\r\n<p><strong>Day 5</strong><br />\r\n07.30 Hrs &ndash; Breakfast at the Hotel<br />\r\n09.30 Hrs &ndash; Proceed to Jurong Bird Park<br />\r\n13.00 Hrs &ndash; Lunch at Indian Restaurant<br />\r\n14.30 Hrs &ndash; Proceed to Sunset Sentosa<br />\r\n20.00 Hrs &ndash; Dinner at Indian Restaurant<br />\r\nOvernight Stay in the Hotel</p>\r\n\r\n<p><strong>Day 6</strong><br />\r\n07.30 Hrs &ndash; Breakfast at the Hotel<br />\r\nMorning is Free for Shopping<br />\r\n12.00 Hrs &ndash; Check Out of the Hotel &amp; Keep the Luggage in the Hotel Lobby<br />\r\n13.00 Hrs &ndash; Lunch at Indian Restaurant<br />\r\n14.30 Hrs &ndash; Proceed to Half a Day Singapore City Tour<br />\r\n18.00 Hrs &ndash; Visit to Marina Bay Sands<br />\r\n20.00 Hrs &ndash; Watch Wonderful Light &amp; Sound Show<br />\r\n21.30 Hrs &ndash; Dinner at Indian Restaurant<br />\r\n23.00 Hrs &ndash; Drop at Singapore Airport</p>\r\n\r\n<p>Tour Ends</p>\r\n', '<table border="1" cellpadding="5" cellspacing="0" width="650">\r\n	<tbody>\r\n		<tr>\r\n			<th scope="col"><strong>Departure Date</strong></th>\r\n			<th scope="col"><strong>20-29 pax</strong></th>\r\n			<th scope="col"><strong>30-35 pax</strong></th>\r\n			<th scope="col"><strong>36-42 pax</strong></th>\r\n		</tr>\r\n		<tr>\r\n			<td valign="top"><strong>29th Sep to<br />\r\n			06th Oct 2013</strong><br />\r\n			<span style="background: #00F; color: #fff;">Booking Open</span></td>\r\n			<td align="left">Rs.64,000/- per adult<br />\r\n			Rs.62,000/- per child WB<br />\r\n			Rs.57,000/- per child NB</td>\r\n			<td align="left">Rs.62,000/- per adult<br />\r\n			Rs.60,000/- per child WB<br />\r\n			Rs.55,000/- per child NB</td>\r\n			<td align="left">Rs.61,000/- per adult<br />\r\n			Rs.59,000/- per child WB<br />\r\n			Rs.54,000/- per child NB</td>\r\n		</tr>\r\n		<tr>\r\n			<td valign="top"><strong>19th to 26th&nbsp;<br />\r\n			Oct 2013</strong><br />\r\n			<span style="background: #00F; color: #fff;">Booking Open</span></td>\r\n			<td align="left">Rs.64,000/- per adult<br />\r\n			Rs.62,000/- per child WB<br />\r\n			Rs.57,000/- per child NB</td>\r\n			<td align="left">Rs.62,000/- per adult<br />\r\n			Rs.60,000/- per child WB<br />\r\n			Rs.55,000/- per child NB</td>\r\n			<td align="left">Rs.61,000/- per adult<br />\r\n			Rs.59,000/- per child WB<br />\r\n			Rs.54,000/- per child NB</td>\r\n		</tr>\r\n		<tr>\r\n			<td valign="top"><strong>16th to 23rd<br />\r\n			Nov 2013</strong><br />\r\n			<span style="background: #00F; color: #fff;">Booking Open</span></td>\r\n			<td align="left">Rs.64,000/- per adult<br />\r\n			Rs.62,000/- per child WB<br />\r\n			Rs.57,000/- per child NB</td>\r\n			<td align="left">Rs.62,000/- per adult<br />\r\n			Rs.60,000/- per child WB<br />\r\n			Rs.55,000/- per child NB</td>\r\n			<td align="left">Rs.61,000/- per adult<br />\r\n			Rs.59,000/- per child WB<br />\r\n			Rs.54,000/- per child NB</td>\r\n		</tr>\r\n		<tr>\r\n			<td valign="top"><strong>21st to 28th<br />\r\n			Dec 2013</strong><br />\r\n			<span style="background: #00F; color: #fff;">Booking Open</span></td>\r\n			<td align="left">Rs.66,000/- per adult<br />\r\n			Rs.64,000/- per child WB<br />\r\n			Rs.59,000/- per child NB</td>\r\n			<td align="left">Rs.64,000/- per adult<br />\r\n			Rs.62,000/- per child WB<br />\r\n			Rs.57,000/- per child NB</td>\r\n			<td align="left">Rs.63,000/- per adult<br />\r\n			Rs.59,000/- per child WB<br />\r\n			Rs.56,000/- per child NB</td>\r\n		</tr>\r\n		<tr>\r\n			<td valign="top"><strong>13th to 20th<br />\r\n			Jan 2014</strong><br />\r\n			<span style="background: #00F; color: #fff;">Booking Open</span></td>\r\n			<td align="left">Rs.66,000/- per adult<br />\r\n			Rs.64,000/- per child WB<br />\r\n			Rs.59,000/- per child NB</td>\r\n			<td align="left">Rs.64,000/- per adult<br />\r\n			Rs.62,000/- per child WB<br />\r\n			Rs.57,000/- per child NB</td>\r\n			<td align="left">Rs.63,000/- per adult<br />\r\n			Rs.59,000/- per child WB<br />\r\n			Rs.56,000/- per child NB</td>\r\n		</tr>\r\n	</tbody>\r\n</table>\r\n\r\n<h3><span style="line-height: 1.3em;">Important Note</span></h3>\r\n\r\n<ul>\r\n	<li>All Group Tours would be conducted with Min 20 pax. &nbsp;If the Group size is below 20 pax means, the Guest would be transferred to the next available Group. &nbsp;If they want to go on the given dates means, it would be treated as SIC (Seat in Coach) basis with additional supplement cost.</li>\r\n	<li>We are not holding any confirmed seat in the flight and rooms. &nbsp;Flight seats and rooms are subject to availability.</li>\r\n	<li>Airfare and Exchange Rate&nbsp;&nbsp;(1 US$ = Rs. 60)&nbsp;are calculated as on 17th August 2013, any increase in airfare and exchange rate should be borne by the customer.</li>\r\n</ul>\r\n\r\n<h3><span style="line-height: 1.3em;">Booking Terms</span></h3>\r\n\r\n<ul>\r\n	<li>To Confirm this booking, pls Send us the SCANNED COPY of ALL THE TRAVELING GUESTS (Pls see Minimum 6 Months Validity of Passport is required for any International Travel) to <a href="mailto:sales@yougotrip.com">sales@yougotrip.com</a>&nbsp;<span style="line-height: 1.3em;">and deposit Rs.25,000/- (Non Refundable) in the below given bank and mail us the Scanned copy of the Deposit Chelan.</span></li>\r\n	<li>Balance Full Amount is Payable before 45 Days of the Travel Date</li>\r\n</ul>\r\n\r\n<h3><span style="font-family: Arial, Helvetica, sans-serif; font-size: 1em; font-weight: bold; line-height: 1.3em;">Cancelation Policy</span></h3>\r\n\r\n<ul>\r\n	<li>If booking is cancelled before 30 Days, 30% of the PACKAGE AMOUNT would be deducted</li>\r\n	<li>If booking is cancelled before 15 Days, 50% of the PACKAGE AMOUNT would be deducted</li>\r\n	<li>If booking is cancelled before 10 Days, NO REFUND WOULD BE GIVEN.</li>\r\n</ul>\r\n', 64000, 62000, 57000, 'user_image/Malaysia1.jpg', 1, 0, '2013-09-21', '0000-00-00', 0, 'Malaysia Singapore torur', 'tour malaysia,singapore'),
(4, 'Malaysia Singapore', 'Malaysia & Singapore (4 Nights & 5 Days) ', '<p><strong style="color: #135cae; font-family: Helvetica, Arial, sans-serif; font-size: 13px; line-height: 1.3em;">Package Overview </strong></p>\r\n\r\n<ul>\r\n	<li>2 Nights in Kulalumpur</li>\r\n	<li>2 Nights in Singapore</li>\r\n	<li>Economy Airfare</li>\r\n	<li><span style="line-height: 1.3em;">Important sight seeing </span></li>\r\n	<li>Malaysia &amp; Singapore Visa</li>\r\n	<li><span style="line-height: 1.3em;">All meals</span></li>\r\n</ul>\r\n', '<p><span style="color: #135cae; font-family: Helvetica, Arial, sans-serif; font-size: 13px; font-weight: bold; line-height: 1.3em;">Package Includes</span></p>\r\n\r\n<ul>\r\n	<li>2 Nights Accommodation with Breakfast at My Hotel or similar in Kulalumpur</li>\r\n	<li>Airport &ndash; Kulalumpur &ndash; Genting &ndash; Singapore Transfers in Kulalumpur</li>\r\n	<li>1 Arrival Breakfast, 3 Lunch &amp; 2 Dinners in Malaysia</li>\r\n	<li>Putra Jaya Tour</li>\r\n	<li>Half a Day Kulalumpur City Tour</li>\r\n	<li>Day Trip to Genting</li>\r\n	<li>Battu Caves</li>\r\n	<li>One Way Cable Car Ride at Genting</li>\r\n	<li><span style="line-height: 1.3em;">2 Nights Accommodation with Breakfast at Grand C Hotel or similar in Singapore</span></li>\r\n	<li>Airport &ndash; Hotel &ndash; Coach Station Transfers in Singapore</li>\r\n	<li>2 Lunch &amp; 3 Dinners in Singapore</li>\r\n	<li><span style="line-height: 1.3em;">Half a Day City Tour in Singapore</span></li>\r\n	<li>Sunset Sentosa with Admission, Under Water World, Dolphin Lagoon &amp; Songs of the Sea</li>\r\n	<li><span style="line-height: 1.3em;"><span style="line-height: 1.3em;">Singapore - Kulalumpur - Singapore by A/c Coach</span></span></li>\r\n	<li><span style="line-height: 1.3em;">All Transfers on Private Basis with the Service of Tamil/English Speaking Guide</span></li>\r\n	<li>Malaysia &amp; Singapore Visa</li>\r\n	<li>Economy Airfare</li>\r\n</ul>\r\n', '<h3>Package Excludes</h3>\r\n\r\n<ul>\r\n	<li>Passport Services</li>\r\n	<li>Any Increase in the Air Fare&nbsp;</li>\r\n	<li>Any Increase in Dollar Rate&nbsp;</li>\r\n	<li>Optional Tours if any</li>\r\n	<li>Expenses like Tips, Laundry, Porte rages etc.</li>\r\n	<li>Expenses due to Change of Itinerary / Flight Timing / Natural Disturbances etc.</li>\r\n	<li>Early Check In and Late Check Out</li>\r\n	<li>Any Surcharges due to High Season / Block out Dates / Festivals / Public Holidays</li>\r\n	<li>Any Other Expenses not mentioned in the Tour Cost</li>\r\n</ul>\r\n', '<h3><strong><span style="text-decoration: underline;">DAYWISE ITINERARY :</span></strong></h3>\r\n\r\n<p><strong>Day 1&nbsp;</strong><br />\r\nArrival at Singapore Airport<br />\r\nRefresh yourself in Airport<br />\r\nMeet &amp; Greet<br />\r\nTransfer to Kulalumpur by A/c Coach<br />\r\nEnroute Breakfast &amp; Lunch&nbsp;<br />\r\n<span style="line-height: 1.3em;">14.00 Hrs &ndash; Check In at the Kulalumpur Hotel</span><br />\r\n15.00 Hrs &ndash; Proceed to Half a Day Kulalumpur City Tour<br />\r\n20.00 Hrs &ndash; Dinner at Indian Restaurant<br />\r\nOvernight Stay in the Hotel</p>\r\n\r\n<p><strong>Day 2&nbsp;</strong><br />\r\n07.30 Hrs &ndash; Breakfast at the Hotel<br />\r\n09.00 Hrs &ndash; Proceed to Day Trip to Genting<br />\r\nEnroute Batu Caves Visit (Murugan Temple)<br />\r\nOne Way Cable Car Ride at Genting<br />\r\n13.00 Hrs &ndash; Lunch at First World Cafe<br />\r\nExplore Genting &amp; Evening Return Back to Kulalumpur<br />\r\n20.00 Hrs &ndash; Dinner at Indian Restaurant<br />\r\nOvernight Stay in the Hotel</p>\r\n\r\n<p><strong style="line-height: 1.3em;">Day 3&nbsp;</strong><br />\r\n07.30 Hrs &ndash; Breakfast at the Hotel<br />\r\n08.00 Hrs &ndash; Check Out of the Hotel &amp; Proceed to Singapore<br />\r\nEnroute Putra Jaya Tour<br />\r\nEnroute LUNCH<br />\r\n15.00 Hrs &ndash; Arrival at Singapore<br />\r\nMeet &amp; Greet<br />\r\nTransfer to the Hotel<br />\r\nCheck In at the Hotel<br />\r\nEvening is Free for Shopping<br />\r\nOvernight Stay in the Hotel</p>\r\n\r\n<p><strong>Day 4</strong><br />\r\n07.30 Hrs &ndash; Breakfast at the Hotel<br />\r\n09.30 Hrs &ndash;&nbsp;Proceed to Half a Day Singapore City Tour<br />\r\n13.00 Hrs &ndash; Lunch at Indian Restaurant<br />\r\n14.30 Hrs &ndash; Proceed to Sunset Sentosa<br />\r\n20.00 Hrs &ndash; Dinner at Indian Restaurant<br />\r\nOvernight Stay in the Hotel</p>\r\n\r\n<p><strong>Day 5</strong><br />\r\n07.30 Hrs &ndash; Breakfast at the Hotel<br />\r\nDay is Free for Shopping<br />\r\n12.00 Hrs &ndash; Check Out of the Hotel &amp; Keep the Luggage in the Hotel Lobby<br />\r\n13.00 Hrs &ndash; Lunch at Indian Restaurant<br />\r\n21.30 Hrs &ndash; Dinner at Indian Restaurant<br />\r\n23.00 Hrs &ndash; Drop at Singapore Airport</p>\r\n\r\n<p>Tour Ends</p>\r\n', '<table border="1" cellpadding="5" cellspacing="0" width="650">\r\n	<tbody>\r\n		<tr>\r\n			<th scope="col"><strong>Departure Date</strong></th>\r\n			<th scope="col"><strong>20-29 pax</strong></th>\r\n			<th scope="col"><strong>30-35 pax</strong></th>\r\n			<th scope="col"><strong>36-42 pax</strong></th>\r\n		</tr>\r\n		<tr>\r\n			<td valign="top"><strong>29th Sep to<br />\r\n			05th Oct 2013</strong><br />\r\n			<span style="background: #00F; color: #fff;">Booking Open</span></td>\r\n			<td align="left">Rs.56,900/- per adult<br />\r\n			Rs.55,400/- per child WB<br />\r\n			Rs.50,900/- per child NB</td>\r\n			<td align="left">Rs.55,900/- per adult<br />\r\n			Rs.54,400/- per child WB<br />\r\n			Rs.49,900/- per child NB</td>\r\n			<td align="left">Rs.54,900/- per adult<br />\r\n			Rs.53,400/- per child WB<br />\r\n			Rs.48,900/- per child NB</td>\r\n		</tr>\r\n		<tr>\r\n			<td valign="top"><strong>19th to 25th<br />\r\n			Oct 2013</strong><br />\r\n			<span style="background: #00F; color: #fff;">Booking Open</span></td>\r\n			<td align="left">Rs.56,900/- per adult<br />\r\n			Rs.56,400/- per child WB<br />\r\n			Rs.50,900/- per child NB</td>\r\n			<td align="left">Rs.55,900/- per adult<br />\r\n			Rs.54,400/- per child WB<br />\r\n			Rs.49,900/- per child NB</td>\r\n			<td align="left">Rs.54,900/- per adult<br />\r\n			Rs.53,400/- per child WB<br />\r\n			Rs.48,900/- per child NB</td>\r\n		</tr>\r\n		<tr>\r\n			<td valign="top"><strong>16th to 22nd&nbsp;<br />\r\n			Nov 2013</strong><br />\r\n			<span style="background: #00F; color: #fff;">Booking Open</span></td>\r\n			<td align="left">Rs.56,900/- per adult<br />\r\n			Rs.56,400/- per child WB<br />\r\n			Rs.50,900/- per child NB</td>\r\n			<td align="left">Rs.55,900/- per adult<br />\r\n			Rs.54,400/- per child WB<br />\r\n			Rs.49,900/- per child NB</td>\r\n			<td align="left">Rs.54,900/- per adult<br />\r\n			Rs.53,400/- per child WB<br />\r\n			Rs.48,900/- per child NB</td>\r\n		</tr>\r\n		<tr>\r\n			<td valign="top"><strong>21st to 27th<br />\r\n			Dec 2013</strong><br />\r\n			<span style="background: #00F; color: #fff;">Booking Open</span></td>\r\n			<td align="left">Rs.58,900/- per adult<br />\r\n			Rs.57,400/- per child WB<br />\r\n			Rs.52,900/- per child NB</td>\r\n			<td align="left">Rs.57,900/- per adult<br />\r\n			Rs.56,400/- per child WB<br />\r\n			Rs.51,900/- per child NB</td>\r\n			<td align="left">Rs.56,900/- per adult<br />\r\n			Rs.56,400/- per child WB<br />\r\n			Rs.50,900/- per child NB</td>\r\n		</tr>\r\n		<tr>\r\n			<td valign="top"><strong>12th to 18th<br />\r\n			Jan 2014</strong><br />\r\n			<span style="background: #00F; color: #fff;">Booking Open</span></td>\r\n			<td align="left">Rs.58,900/- per adult<br />\r\n			Rs.57,400/- per child WB<br />\r\n			Rs.52,900/- per child NB</td>\r\n			<td align="left">Rs.57,900/- per adult<br />\r\n			Rs.56,400/- per child WB<br />\r\n			Rs.51,900/- per child NB</td>\r\n			<td align="left">Rs.56,900/- per adult<br />\r\n			Rs.56,400/- per child WB<br />\r\n			Rs.50,900/- per child NB</td>\r\n		</tr>\r\n	</tbody>\r\n</table>\r\n\r\n<h3><span style="line-height: 1.3em;">Important Note</span></h3>\r\n\r\n<ul>\r\n	<li>All Group Tours would be conducted with Min 20 pax. &nbsp;If the Group size is below 20 pax means, the Guest would be transferred to the next available Group. &nbsp;If they want to go on the given dates means, it would be treated as SIC (Seat in Coach) basis with additional supplement cost.</li>\r\n	<li>We are not holding any confirmed seat in the flight and rooms. &nbsp;Flight seats and rooms are subject to availability.</li>\r\n	<li>Airfare and Exchange Rate&nbsp;&nbsp;(1 US$ = Rs. 60)&nbsp;are calculated as on 17th August 2013, any increase in airfare and exchange rate should be borne by the customer.</li>\r\n</ul>\r\n\r\n<h3><span style="line-height: 1.3em;">Booking Terms</span></h3>\r\n\r\n<ul>\r\n	<li>To Confirm this booking, pls Send us the SCANNED COPY of ALL THE TRAVELING GUESTS (Pls see Minimum 6 Months Validity of Passport is required for any International Travel) to <a href="mailto:sales@yougotrip.com">sales@yougotrip.com</a>&nbsp;<span style="line-height: 1.3em;">and deposit Rs.25,000/- (Non Refundable) in the below given bank and mail us the Scanned copy of the Deposit Chelan.</span></li>\r\n	<li>Balance Full Amount is Payable before 45 Days of the Travel Date</li>\r\n</ul>\r\n\r\n<h3><span style="font-family: Arial, Helvetica, sans-serif; font-size: 1em; font-weight: bold; line-height: 1.3em;">Cancelation Policy</span></h3>\r\n\r\n<ul>\r\n	<li>If booking is cancelled before 30 Days, 30% of the PACKAGE AMOUNT would be deducted</li>\r\n	<li>If booking is cancelled before 15 Days, 50% of the PACKAGE AMOUNT would be deducted</li>\r\n	<li>If booking is cancelled before 10 Days, NO REFUND WOULD BE GIVEN.</li>\r\n</ul>\r\n', 56900, 56400, 50900, 'user_image/europe1.jpg', 1, 0, '2013-09-21', '2013-09-21', 0, 'Europ Tour, France Tour', 'Tour,Erope,France ,Britan');

-- --------------------------------------------------------

--
-- Table structure for table `enquiry`
--

CREATE TABLE IF NOT EXISTS `enquiry` (
  `enquiry_id` int(8) NOT NULL AUTO_INCREMENT,
  `name` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `phone` varchar(20) NOT NULL,
  `city` varchar(30) NOT NULL,
  `comments` text NOT NULL,
  `date` datetime NOT NULL,
  PRIMARY KEY (`enquiry_id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `enquiry`
--

INSERT INTO `enquiry` (`enquiry_id`, `name`, `email`, `phone`, `city`, `comments`, `date`) VALUES
(1, '', '', '', '', '', '2013-09-25 13:04:31');

-- --------------------------------------------------------

--
-- Table structure for table `gallery`
--

CREATE TABLE IF NOT EXISTS `gallery` (
  `gallery_id` int(8) NOT NULL AUTO_INCREMENT,
  `name` varchar(150) NOT NULL,
  `desc` text NOT NULL,
  `meta_desc` varchar(255) NOT NULL,
  `meta_keyword` varchar(255) NOT NULL,
  PRIMARY KEY (`gallery_id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `gallery`
--


-- --------------------------------------------------------

--
-- Table structure for table `gallery_image`
--

CREATE TABLE IF NOT EXISTS `gallery_image` (
  `gallery_id` int(11) NOT NULL,
  `gallery_image` varchar(256) NOT NULL,
  `cdate` date NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `gallery_image`
--


-- --------------------------------------------------------

--
-- Table structure for table `invoice`
--

CREATE TABLE IF NOT EXISTS `invoice` (
  `invoiceno` int(11) NOT NULL AUTO_INCREMENT,
  `cusomer_id` int(11) NOT NULL,
  `category_desc` varchar(255) NOT NULL,
  `pack_title` varchar(255) NOT NULL,
  `customer_name` varchar(200) NOT NULL,
  `inv_date` date NOT NULL,
  `amount` decimal(15,2) NOT NULL,
  `discount` decimal(15,2) NOT NULL,
  `totalamount` decimal(15,2) NOT NULL,
  `balanceamount` decimal(15,2) NOT NULL,
  `status` varchar(15) NOT NULL,
  `agent_id` int(11) NOT NULL,
  PRIMARY KEY (`invoiceno`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=33 ;

--
-- Dumping data for table `invoice`
--

INSERT INTO `invoice` (`invoiceno`, `cusomer_id`, `category_desc`, `pack_title`, `customer_name`, `inv_date`, `amount`, `discount`, `totalamount`, `balanceamount`, `status`, `agent_id`) VALUES
(1, 6, '', '0', 'Ravindran C', '2013-10-23', '172500.00', '0.00', '172500.00', '0.00', 'created', 0),
(2, 6, '', '0', 'Ravindran C', '2013-10-23', '59800.00', '0.00', '59800.00', '0.00', 'Canceled', 0),
(3, 7, '', '0', 'user name', '2013-10-28', '172500.00', '0.00', '172500.00', '0.00', 'created', 0),
(4, 6, '', '0', 'Ravindran C', '2013-10-30', '148000.00', '0.00', '148000.00', '0.00', 'Canceled', 0),
(5, 6, '', '0', 'Ravindran C', '2013-10-30', '14500.00', '0.00', '14500.00', '0.00', 'Canceled', 0),
(6, 6, '', '0', 'Ravindran C', '2013-11-08', '10000.00', '0.00', '10000.00', '0.00', 'Canceled', 0),
(7, 6, '', '0', 'Ravindran C', '2013-11-08', '10000.00', '0.00', '10000.00', '0.00', 'Canceled', 0),
(8, 6, 'Tamil Nadu ', 'Indian Tour', 'Ravindran C', '2013-11-08', '10000.00', '0.00', '10000.00', '0.00', 'Canceled', 0),
(9, 6, 'Malaysia Singapore', 'Malaysia & Singapore (6 Nights & 7 Days) ', 'Ravindran C', '2013-11-12', '74000.00', '0.00', '74000.00', '0.00', 'Paid', 0),
(10, 6, 'Indian Tour', 'Tamil Nadu ', 'Ravindran C', '2013-11-12', '5000.00', '0.00', '5000.00', '0.00', 'Canceled', 0),
(11, 6, 'Indian Tour', 'Tamil Nadu ', 'Ravindran C', '2013-11-12', '5000.00', '0.00', '5000.00', '0.00', 'Canceled', 0),
(12, 6, 'Indian Tour', 'Tamil Nadu ', 'Ravindran C', '2013-11-12', '5000.00', '0.00', '5000.00', '0.00', 'Canceled', 0),
(13, 6, 'Indian Tour', 'Tamil Nadu ', 'Ravindran C', '2013-11-18', '5000.00', '0.00', '5000.00', '0.00', 'Canceled', 0),
(14, 6, '', '', 'Ravindran', '2013-11-19', '196000.00', '0.00', '196000.00', '0.00', 'Paid', 4),
(15, 6, 'Indian Tour', 'Tamil Nadu ', 'Ravindran C', '2013-11-22', '10000.00', '0.00', '10000.00', '0.00', 'advance', 0),
(16, 6, 'Indian Tour', 'Tamil Nadu ', 'Ravindran C', '2013-11-22', '10000.00', '0.00', '10000.00', '0.00', 'part', 0),
(17, 6, 'Indian Tour', 'Tamil Nadu ', 'Ravindran C', '2013-11-22', '5000.00', '500.00', '5000.00', '-3000.00', 'part', 0),
(18, 6, 'Malaysia Singapore', ' Singapore (4 Nights & 5 Days) ', 'Ravindran C', '2013-11-22', '59800.00', '0.00', '59800.00', '58800.00', 'advance', 0),
(19, 6, 'Indian Tour', 'Tamil Nadu ', 'Ravindran C', '2013-11-22', '5000.00', '1000.00', '5000.00', '-1000.00', 'Paid', 0),
(20, 6, 'Indian Tour', 'Tamil Nadu ', 'Ravindran C', '2013-11-22', '5000.00', '0.00', '5000.00', '4000.00', 'advance', 0),
(21, 6, 'Indian Tour', 'Tamil Nadu ', 'Ravindran C', '2013-11-22', '10000.00', '500.00', '10000.00', '4500.00', 'part', 0),
(22, 6, 'Indian Tour', 'Tamil Nadu ', 'Ravindran C', '2013-11-25', '10000.00', '1000.00', '10000.00', '-1000.00', 'Paid', 0),
(23, 6, 'Indian Tour', 'Tamil Nadu ', 'Ravindran C', '2013-11-25', '10000.00', '0.00', '10000.00', '0.00', 'Paid', 0),
(24, 6, 'Indian Tour', 'Tamil Nadu ', 'Ravindran C', '2013-11-25', '10000.00', '0.00', '10000.00', '0.00', 'paid', 0),
(25, 6, 'Indian Tour', 'Tamil Nadu ', 'Ravindran C', '2013-11-25', '10000.00', '1000.00', '10000.00', '0.00', 'Paid', 0),
(26, 6, 'Indian Tour', 'Tamil Nadu ', 'Ravindran C', '2013-11-25', '10000.00', '0.00', '10000.00', '0.00', 'paid', 0),
(27, 6, 'Indian Tour', 'Tamil Nadu ', 'Ravindran C', '2013-11-25', '10000.00', '500.00', '10000.00', '4500.00', 'part', 0),
(28, 6, 'Indian Tour', 'Tamil Nadu ', 'Ravindran C', '2013-11-25', '10000.00', '0.00', '10000.00', '3000.00', 'Part', 0),
(29, 6, 'Indian Tour', 'Tamil Nadu ', 'Ravindran C', '2013-11-26', '10000.00', '500.00', '10000.00', '4500.00', 'part', 0),
(30, 6, 'Indian Tour', 'Tamil Nadu ', 'Ravindran C', '2013-11-26', '10000.00', '1000.00', '10000.00', '0.00', 'Paid', 0),
(31, 6, '', '', 'Ravindran', '2013-11-26', '375100.00', '0.00', '375100.00', '0.00', 'created', 4),
(32, 6, 'Indian Tour', 'Tamil Nadu ', 'Ravindran C', '2013-11-27', '10000.00', '0.00', '10000.00', '10000.00', 'created', 0);

-- --------------------------------------------------------

--
-- Table structure for table `invoice_detail`
--

CREATE TABLE IF NOT EXISTS `invoice_detail` (
  `invoicedetno` int(11) NOT NULL AUTO_INCREMENT,
  `invoiceno` int(11) NOT NULL,
  `package_name` varchar(200) NOT NULL,
  `adultqty` int(11) NOT NULL,
  `adultprice` decimal(15,2) NOT NULL,
  `childqty` int(11) NOT NULL,
  `childprice` decimal(15,2) NOT NULL,
  `childwbqty` int(11) NOT NULL,
  `childwbprice` decimal(15,2) NOT NULL,
  `price` decimal(15,2) NOT NULL,
  PRIMARY KEY (`invoicedetno`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=34 ;

--
-- Dumping data for table `invoice_detail`
--

INSERT INTO `invoice_detail` (`invoicedetno`, `invoiceno`, `package_name`, `adultqty`, `adultprice`, `childqty`, `childprice`, `childwbqty`, `childwbprice`, `price`) VALUES
(1, 1, ' Singapore (4 Nights & 5 Days) ', 2, '59800.00', 0, '57400.00', 1, '52900.00', '172500.00'),
(2, 2, ' Singapore (4 Nights & 5 Days) ', 1, '59800.00', 0, '57400.00', 0, '52900.00', '59800.00'),
(3, 3, ' Singapore (4 Nights & 5 Days) ', 2, '59800.00', 0, '57400.00', 1, '52900.00', '172500.00'),
(4, 4, 'Malaysia & Singapore (6 Nights & 7 Days) ', 2, '74000.00', 0, '74000.00', 0, '69000.00', '148000.00'),
(5, 5, 'Tamil Nadu ', 2, '5000.00', 1, '4500.00', 0, '4000.00', '14500.00'),
(6, 6, 'Tamil Nadu ', 2, '5000.00', 0, '4500.00', 0, '4000.00', '10000.00'),
(7, 7, 'Tamil Nadu ', 2, '5000.00', 0, '4500.00', 0, '4000.00', '10000.00'),
(8, 8, 'Tamil Nadu ', 2, '5000.00', 0, '4500.00', 0, '4000.00', '10000.00'),
(9, 9, 'Malaysia & Singapore (6 Nights & 7 Days) ', 1, '74000.00', 0, '74000.00', 0, '69000.00', '74000.00'),
(10, 10, 'Tamil Nadu ', 1, '5000.00', 0, '4500.00', 0, '4000.00', '5000.00'),
(11, 11, 'Tamil Nadu ', 1, '5000.00', 0, '4500.00', 0, '4000.00', '5000.00'),
(12, 12, 'Tamil Nadu ', 1, '5000.00', 0, '4500.00', 0, '4000.00', '5000.00'),
(13, 13, 'Tamil Nadu ', 1, '5000.00', 0, '4500.00', 0, '4000.00', '5000.00'),
(14, 14, 'Singapore (5 Nights & 6 Days) ', 2, '66000.00', 1, '64000.00', 0, '59000.00', '196000.00'),
(15, 15, 'Tamil Nadu ', 2, '5000.00', 0, '4500.00', 0, '4000.00', '10000.00'),
(16, 16, 'Tamil Nadu ', 2, '5000.00', 0, '4500.00', 0, '4000.00', '10000.00'),
(17, 17, 'Tamil Nadu ', 1, '5000.00', 0, '4500.00', 0, '4000.00', '5000.00'),
(18, 18, ' Singapore (4 Nights & 5 Days) ', 1, '59800.00', 0, '57400.00', 0, '52900.00', '59800.00'),
(19, 19, 'Tamil Nadu ', 1, '5000.00', 0, '4500.00', 0, '4000.00', '5000.00'),
(20, 20, 'Tamil Nadu ', 1, '5000.00', 0, '4500.00', 0, '4000.00', '5000.00'),
(21, 21, 'Tamil Nadu ', 2, '5000.00', 0, '4500.00', 0, '4000.00', '10000.00'),
(22, 22, 'Tamil Nadu ', 2, '5000.00', 0, '4500.00', 0, '4000.00', '10000.00'),
(23, 23, 'Tamil Nadu ', 2, '5000.00', 0, '4500.00', 0, '4000.00', '10000.00'),
(24, 24, 'Tamil Nadu ', 2, '5000.00', 0, '4500.00', 0, '4000.00', '10000.00'),
(25, 25, 'Tamil Nadu ', 2, '5000.00', 0, '4500.00', 0, '4000.00', '10000.00'),
(26, 26, 'Tamil Nadu ', 2, '5000.00', 0, '4500.00', 0, '4000.00', '10000.00'),
(27, 27, 'Tamil Nadu ', 2, '5000.00', 0, '4500.00', 0, '4000.00', '10000.00'),
(28, 28, 'Tamil Nadu ', 2, '5000.00', 0, '4500.00', 0, '4000.00', '10000.00'),
(29, 29, 'Tamil Nadu ', 2, '5000.00', 0, '4500.00', 0, '4000.00', '10000.00'),
(30, 30, 'Tamil Nadu ', 2, '5000.00', 0, '4500.00', 0, '4000.00', '10000.00'),
(31, 31, 'Tamil Nadu ', 2, '5000.00', 1, '4500.00', 0, '4000.00', '14500.00'),
(32, 31, ' Singapore (4 Nights & 5 Days) ', 2, '70000.00', 2, '57400.00', 2, '52900.00', '360600.00'),
(33, 32, 'Tamil Nadu ', 2, '5000.00', 0, '4500.00', 0, '4000.00', '10000.00');

-- --------------------------------------------------------

--
-- Table structure for table `layout_desc`
--

CREATE TABLE IF NOT EXISTS `layout_desc` (
  `business_hours` text NOT NULL,
  `stayconnected` text NOT NULL,
  `visa_process` text NOT NULL,
  `ticket_booking` text NOT NULL,
  `why_we_are` text NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `layout_desc`
--

INSERT INTO `layout_desc` (`business_hours`, `stayconnected`, `visa_process`, `ticket_booking`, `why_we_are`) VALUES
('<ul class="unstyled">\r\n	<li><strong>Monday-Friday:</strong> 10am to 8pm</li>\r\n	<li><strong>Saturday:</strong> 11am to 3pm</li>\r\n	<li><strong>Sunday:</strong> Closed</li>\r\n</ul>\r\n', '<p>You can touch with me any time any day, feel free to contact with me.</p>\r\n', '<p>test1</p>\r\n', '<p>test1</p>\r\n', '<p>At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium voluptatum.</p>\r\n\r\n<ul class="unstyled">\r\n	<li>Odio dignissimos ducimus</li>\r\n	<li>Blanditiis praesentium volup</li>\r\n	<li>Eos et accusamus</li>\r\n</ul>\r\n');

-- --------------------------------------------------------

--
-- Table structure for table `package`
--

CREATE TABLE IF NOT EXISTS `package` (
  `pack_id` int(11) NOT NULL AUTO_INCREMENT,
  `category_desc` varchar(256) NOT NULL,
  `pack_title` varchar(256) NOT NULL,
  `pack_desc` text NOT NULL,
  `pack_includes` text NOT NULL,
  `pack_excludes` text NOT NULL,
  `itinerary` text NOT NULL,
  `dateandcost` text NOT NULL,
  `adult_price` int(11) NOT NULL,
  `child_price` int(11) NOT NULL,
  `child_wob_price` double NOT NULL,
  `pack_image` varchar(255) NOT NULL,
  `status` int(11) NOT NULL,
  `createdby` int(2) NOT NULL,
  `cdate` date NOT NULL,
  `mdate` date NOT NULL,
  `modifyby` int(11) NOT NULL,
  `meta_desc` varchar(255) NOT NULL,
  `meta_keyword` varchar(255) NOT NULL,
  `theme` varchar(500) NOT NULL,
  PRIMARY KEY (`pack_id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=21 ;

--
-- Dumping data for table `package`
--

INSERT INTO `package` (`pack_id`, `category_desc`, `pack_title`, `pack_desc`, `pack_includes`, `pack_excludes`, `itinerary`, `dateandcost`, `adult_price`, `child_price`, `child_wob_price`, `pack_image`, `status`, `createdby`, `cdate`, `mdate`, `modifyby`, `meta_desc`, `meta_keyword`, `theme`) VALUES
(11, 'Indian Tour', 'test', '', '', '', '', '', 1200, 2000, 123, 'user_image/airtel0.png', 1, 0, '2013-09-28', '2013-11-08', 0, '', '', 'Honymoon,Corporate'),
(12, 'Europ', 'Mr', '', '', '', '', '', 1200, 2000, 123, 'user_image/airtel2.png', 1, 0, '2013-09-28', '2013-10-17', 0, '', '', ''),
(13, 'Europ', 'Mr', '', '', '', '', '', 1200, 2000, 123, '../user_image/Untitled.png', 1, 0, '2013-09-28', '2013-10-17', 0, '', '', ''),
(14, 'Malaysia Singapore', 'zzz', '<p>zzz</p>\r\n', '', '', '', '', 1200, 2000, 123, '../user_image/Jellyfish.jpg', 1, 0, '2013-09-28', '0000-00-00', 0, '', '', ''),
(15, 'Indian Tour', 'Tamil Nadu ', '<p><strong style="color: #135cae; font-family: Helvetica, Arial, sans-serif; font-size: 13px; line-height: 1.3em;">Package Overview </strong></p>\r\n\r\n<ul>\r\n	<li>2 Nights in Kulalumpur</li>\r\n	<li>2 Nights in Singapore</li>\r\n	<li>Economy Airfare</li>\r\n	<li><span style="line-height: 1.3em;">Important sight seeing </span></li>\r\n	<li>Malaysia &amp; Singapore Visa</li>\r\n	<li><span style="line-height: 1.3em;">All meals</span></li>\r\n</ul>\r\n', '<p><span style="color: #135cae; font-family: Helvetica, Arial, sans-serif; font-size: 13px; font-weight: bold; line-height: 1.3em;">Package Includes</span></p>\r\n\r\n<ul>\r\n	<li>2 Nights Accommodation with Breakfast at My Hotel or similar in Kulalumpur</li>\r\n	<li>Airport &ndash; Kulalumpur &ndash; Genting &ndash; Singapore Transfers in Kulalumpur</li>\r\n	<li>1 Arrival Breakfast, 3 Lunch &amp; 2 Dinners in Malaysia</li>\r\n	<li>Putra Jaya Tour</li>\r\n	<li>Half a Day Kulalumpur City Tour</li>\r\n	<li>Day Trip to Genting</li>\r\n	<li>Battu Caves</li>\r\n	<li>One Way Cable Car Ride at Genting</li>\r\n	<li><span style="line-height: 1.3em;">2 Nights Accommodation with Breakfast at Grand C Hotel or similar in Singapore</span></li>\r\n	<li>Airport &ndash; Hotel &ndash; Coach Station Transfers in Singapore</li>\r\n	<li>2 Lunch &amp; 3 Dinners in Singapore</li>\r\n	<li><span style="line-height: 1.3em;">Half a Day City Tour in Singapore</span></li>\r\n	<li>Sunset Sentosa with Admission, Under Water World, Dolphin Lagoon &amp; Songs of the Sea</li>\r\n	<li><span style="line-height: 1.3em;"><span style="line-height: 1.3em;">Singapore - Kulalumpur - Singapore by A/c Coach</span></span></li>\r\n	<li><span style="line-height: 1.3em;">All Transfers on Private Basis with the Service of Tamil/English Speaking Guide</span></li>\r\n	<li>Malaysia &amp; Singapore Visa</li>\r\n	<li>Economy Airfare</li>\r\n</ul>\r\n', '<ul>\r\n	<li>Passport Services</li>\r\n	<li>Any Increase in the Air Fare&nbsp;</li>\r\n	<li>Any Increase in Dollar Rate&nbsp;</li>\r\n	<li>Optional Tours if any</li>\r\n	<li>Expenses like Tips, Laundry, Porte rages etc.</li>\r\n	<li>Expenses due to Change of Itinerary / Flight Timing / Natural Disturbances etc.</li>\r\n	<li>Early Check In and Late Check Out</li>\r\n	<li>Any Surcharges due to High Season / Block out Dates / Festivals / Public Holidays</li>\r\n	<li>Any Other Expenses not mentioned in the Tour Cost</li>\r\n</ul>\r\n', '<p><strong>Day 1&nbsp;</strong><br />\r\nArrival at Singapore Airport<br />\r\nRefresh yourself in Airport<br />\r\nMeet &amp; Greet<br />\r\nTransfer to Kulalumpur by A/c Coach<br />\r\nEnroute Breakfast &amp; Lunch&nbsp;<br />\r\n<span style="line-height: 1.3em;">14.00 Hrs &ndash; Check In at the Kulalumpur Hotel</span><br />\r\n15.00 Hrs &ndash; Proceed to Half a Day Kulalumpur City Tour<br />\r\n20.00 Hrs &ndash; Dinner at Indian Restaurant<br />\r\nOvernight Stay in the Hotel</p>\r\n\r\n<p><strong>Day 2&nbsp;</strong><br />\r\n07.30 Hrs &ndash; Breakfast at the Hotel<br />\r\n09.00 Hrs &ndash; Proceed to Day Trip to Genting<br />\r\nEnroute Batu Caves Visit (Murugan Temple)<br />\r\nOne Way Cable Car Ride at Genting<br />\r\n13.00 Hrs &ndash; Lunch at First World Cafe<br />\r\nExplore Genting &amp; Evening Return Back to Kulalumpur<br />\r\n20.00 Hrs &ndash; Dinner at Indian Restaurant<br />\r\nOvernight Stay in the Hotel</p>\r\n\r\n<p><strong style="line-height: 1.3em;">Day 3&nbsp;</strong><br />\r\n07.30 Hrs &ndash; Breakfast at the Hotel<br />\r\n08.00 Hrs &ndash; Check Out of the Hotel &amp; Proceed to Singapore<br />\r\nEnroute Putra Jaya Tour<br />\r\nEnroute LUNCH<br />\r\n15.00 Hrs &ndash; Arrival at Singapore<br />\r\nMeet &amp; Greet<br />\r\nTransfer to the Hotel<br />\r\nCheck In at the Hotel<br />\r\nEvening is Free for Shopping<br />\r\nOvernight Stay in the Hotel</p>\r\n\r\n<p><strong>Day 4</strong><br />\r\n07.30 Hrs &ndash; Breakfast at the Hotel<br />\r\n09.30 Hrs &ndash;&nbsp;Proceed to Half a Day Singapore City Tour<br />\r\n13.00 Hrs &ndash; Lunch at Indian Restaurant<br />\r\n14.30 Hrs &ndash; Proceed to Sunset Sentosa<br />\r\n20.00 Hrs &ndash; Dinner at Indian Restaurant<br />\r\nOvernight Stay in the Hotel</p>\r\n\r\n<p><strong>Day 5</strong><br />\r\n07.30 Hrs &ndash; Breakfast at the Hotel<br />\r\nDay is Free for Shopping<br />\r\n12.00 Hrs &ndash; Check Out of the Hotel &amp; Keep the Luggage in the Hotel Lobby<br />\r\n13.00 Hrs &ndash; Lunch at Indian Restaurant<br />\r\n21.30 Hrs &ndash; Dinner at Indian Restaurant<br />\r\n23.00 Hrs &ndash; Drop at Singapore Airport</p>\r\n\r\n<p>Tour Ends</p>\r\n', '<table border="1" cellpadding="5" cellspacing="0" width="650">\r\n	<tbody>\r\n		<tr>\r\n			<th scope="col"><strong>Departure Date</strong></th>\r\n			<th scope="col"><strong>20-29 pax</strong></th>\r\n			<th scope="col"><strong>30-35 pax</strong></th>\r\n			<th scope="col"><strong>36-42 pax</strong></th>\r\n		</tr>\r\n		<tr>\r\n			<td valign="top"><strong>29th Sep to<br />\r\n			05th Oct 2013</strong><br />\r\n			<span style="background: #00F; color: #fff;">Booking Open</span></td>\r\n			<td align="left">Rs.56,900/- per adult<br />\r\n			Rs.55,400/- per child WB<br />\r\n			Rs.50,900/- per child NB</td>\r\n			<td align="left">Rs.55,900/- per adult<br />\r\n			Rs.54,400/- per child WB<br />\r\n			Rs.49,900/- per child NB</td>\r\n			<td align="left">Rs.54,900/- per adult<br />\r\n			Rs.53,400/- per child WB<br />\r\n			Rs.48,900/- per child NB</td>\r\n		</tr>\r\n		<tr>\r\n			<td valign="top"><strong>19th to 25th<br />\r\n			Oct 2013</strong><br />\r\n			<span style="background: #00F; color: #fff;">Booking Open</span></td>\r\n			<td align="left">Rs.56,900/- per adult<br />\r\n			Rs.56,400/- per child WB<br />\r\n			Rs.50,900/- per child NB</td>\r\n			<td align="left">Rs.55,900/- per adult<br />\r\n			Rs.54,400/- per child WB<br />\r\n			Rs.49,900/- per child NB</td>\r\n			<td align="left">Rs.54,900/- per adult<br />\r\n			Rs.53,400/- per child WB<br />\r\n			Rs.48,900/- per child NB</td>\r\n		</tr>\r\n		<tr>\r\n			<td valign="top"><strong>16th to 22nd&nbsp;<br />\r\n			Nov 2013</strong><br />\r\n			<span style="background: #00F; color: #fff;">Booking Open</span></td>\r\n			<td align="left">Rs.56,900/- per adult<br />\r\n			Rs.56,400/- per child WB<br />\r\n			Rs.50,900/- per child NB</td>\r\n			<td align="left">Rs.55,900/- per adult<br />\r\n			Rs.54,400/- per child WB<br />\r\n			Rs.49,900/- per child NB</td>\r\n			<td align="left">Rs.54,900/- per adult<br />\r\n			Rs.53,400/- per child WB<br />\r\n			Rs.48,900/- per child NB</td>\r\n		</tr>\r\n		<tr>\r\n			<td valign="top"><strong>21st to 27th<br />\r\n			Dec 2013</strong><br />\r\n			<span style="background: #00F; color: #fff;">Booking Open</span></td>\r\n			<td align="left">Rs.58,900/- per adult<br />\r\n			Rs.57,400/- per child WB<br />\r\n			Rs.52,900/- per child NB</td>\r\n			<td align="left">Rs.57,900/- per adult<br />\r\n			Rs.56,400/- per child WB<br />\r\n			Rs.51,900/- per child NB</td>\r\n			<td align="left">Rs.56,900/- per adult<br />\r\n			Rs.56,400/- per child WB<br />\r\n			Rs.50,900/- per child NB</td>\r\n		</tr>\r\n		<tr>\r\n			<td valign="top"><strong>12th to 18th<br />\r\n			Jan 2014</strong><br />\r\n			<span style="background: #00F; color: #fff;">Booking Open</span></td>\r\n			<td align="left">Rs.58,900/- per adult<br />\r\n			Rs.57,400/- per child WB<br />\r\n			Rs.52,900/- per child NB</td>\r\n			<td align="left">Rs.57,900/- per adult<br />\r\n			Rs.56,400/- per child WB<br />\r\n			Rs.51,900/- per child NB</td>\r\n			<td align="left">Rs.56,900/- per adult<br />\r\n			Rs.56,400/- per child WB<br />\r\n			Rs.50,900/- per child NB</td>\r\n		</tr>\r\n	</tbody>\r\n</table>\r\n\r\n<h3><span style="line-height: 1.3em;">Important Note</span></h3>\r\n\r\n<ul>\r\n	<li>All Group Tours would be conducted with Min 20 pax. &nbsp;If the Group size is below 20 pax means, the Guest would be transferred to the next available Group. &nbsp;If they want to go on the given dates means, it would be treated as SIC (Seat in Coach) basis with additional supplement cost.</li>\r\n	<li>We are not holding any confirmed seat in the flight and rooms. &nbsp;Flight seats and rooms are subject to availability.</li>\r\n	<li>Airfare and Exchange Rate&nbsp;&nbsp;(1 US$ = Rs. 60)&nbsp;are calculated as on 17th August 2013, any increase in airfare and exchange rate should be borne by the customer.</li>\r\n</ul>\r\n\r\n<h3><span style="line-height: 1.3em;">Booking Terms</span></h3>\r\n\r\n<ul>\r\n	<li>To Confirm this booking, pls Send us the SCANNED COPY of ALL THE TRAVELING GUESTS (Pls see Minimum 6 Months Validity of Passport is required for any International Travel) to <a href="mailto:sales@yougotrip.com">sales@yougotrip.com</a>&nbsp;<span style="line-height: 1.3em;">and deposit Rs.25,000/- (Non Refundable) in the below given bank and mail us the Scanned copy of the Deposit Chelan.</span></li>\r\n	<li>Balance Full Amount is Payable before 45 Days of the Travel Date</li>\r\n</ul>\r\n\r\n<h3><span style="font-family: Arial, Helvetica, sans-serif; font-size: 1em; font-weight: bold; line-height: 1.3em;">Cancelation Policy</span></h3>\r\n\r\n<ul>\r\n	<li>If booking is cancelled before 30 Days, 30% of the PACKAGE AMOUNT would be deducted</li>\r\n	<li>If booking is cancelled before 15 Days, 50% of the PACKAGE AMOUNT would be deducted</li>\r\n	<li>If booking is cancelled before 10 Days, NO REFUND WOULD BE GIVEN.</li>\r\n</ul>\r\n', 5000, 4500, 4000, '../user_image/madurai-meenakshi-amman-temple-at-dark-.jpg', 1, 0, '2013-10-30', '0000-00-00', 0, 'Madurai,Meenakshi', 'Tamil Nadu Tour,Madurai Tour', ''),
(4, 'Malaysia Singapore', 'Malaysia & Singapore (4 Nights & 5 Days) ', '<p><strong style="color: #135cae; font-family: Helvetica, Arial, sans-serif; font-size: 13px; line-height: 1.3em;">Package Overview </strong></p>\r\n\r\n<ul>\r\n	<li>2 Nights in Kulalumpur</li>\r\n	<li>2 Nights in Singapore</li>\r\n	<li>Economy Airfare</li>\r\n	<li><span style="line-height: 1.3em;">Important sight seeing </span></li>\r\n	<li>Malaysia &amp; Singapore Visa</li>\r\n	<li><span style="line-height: 1.3em;">All meals</span></li>\r\n</ul>\r\n', '<p><span style="color: #135cae; font-family: Helvetica, Arial, sans-serif; font-size: 13px; font-weight: bold; line-height: 1.3em;">Package Includes</span></p>\r\n\r\n<ul>\r\n	<li>2 Nights Accommodation with Breakfast at My Hotel or similar in Kulalumpur</li>\r\n	<li>Airport &ndash; Kulalumpur &ndash; Genting &ndash; Singapore Transfers in Kulalumpur</li>\r\n	<li>1 Arrival Breakfast, 3 Lunch &amp; 2 Dinners in Malaysia</li>\r\n	<li>Putra Jaya Tour</li>\r\n	<li>Half a Day Kulalumpur City Tour</li>\r\n	<li>Day Trip to Genting</li>\r\n	<li>Battu Caves</li>\r\n	<li>One Way Cable Car Ride at Genting</li>\r\n	<li><span style="line-height: 1.3em;">2 Nights Accommodation with Breakfast at Grand C Hotel or similar in Singapore</span></li>\r\n	<li>Airport &ndash; Hotel &ndash; Coach Station Transfers in Singapore</li>\r\n	<li>2 Lunch &amp; 3 Dinners in Singapore</li>\r\n	<li><span style="line-height: 1.3em;">Half a Day City Tour in Singapore</span></li>\r\n	<li>Sunset Sentosa with Admission, Under Water World, Dolphin Lagoon &amp; Songs of the Sea</li>\r\n	<li><span style="line-height: 1.3em;"><span style="line-height: 1.3em;">Singapore - Kulalumpur - Singapore by A/c Coach</span></span></li>\r\n	<li><span style="line-height: 1.3em;">All Transfers on Private Basis with the Service of Tamil/English Speaking Guide</span></li>\r\n	<li>Malaysia &amp; Singapore Visa</li>\r\n	<li>Economy Airfare</li>\r\n</ul>\r\n', '<h3>Package Excludes</h3>\r\n\r\n<ul>\r\n	<li>Passport Services</li>\r\n	<li>Any Increase in the Air Fare&nbsp;</li>\r\n	<li>Any Increase in Dollar Rate&nbsp;</li>\r\n	<li>Optional Tours if any</li>\r\n	<li>Expenses like Tips, Laundry, Porte rages etc.</li>\r\n	<li>Expenses due to Change of Itinerary / Flight Timing / Natural Disturbances etc.</li>\r\n	<li>Early Check In and Late Check Out</li>\r\n	<li>Any Surcharges due to High Season / Block out Dates / Festivals / Public Holidays</li>\r\n	<li>Any Other Expenses not mentioned in the Tour Cost</li>\r\n</ul>\r\n', '<h3><strong><span style="text-decoration: underline;">DAYWISE ITINERARY :</span></strong></h3>\r\n\r\n<p><strong>Day 1&nbsp;</strong><br />\r\nArrival at Singapore Airport<br />\r\nRefresh yourself in Airport<br />\r\nMeet &amp; Greet<br />\r\nTransfer to Kulalumpur by A/c Coach<br />\r\nEnroute Breakfast &amp; Lunch&nbsp;<br />\r\n<span style="line-height: 1.3em;">14.00 Hrs &ndash; Check In at the Kulalumpur Hotel</span><br />\r\n15.00 Hrs &ndash; Proceed to Half a Day Kulalumpur City Tour<br />\r\n20.00 Hrs &ndash; Dinner at Indian Restaurant<br />\r\nOvernight Stay in the Hotel</p>\r\n\r\n<p><strong>Day 2&nbsp;</strong><br />\r\n07.30 Hrs &ndash; Breakfast at the Hotel<br />\r\n09.00 Hrs &ndash; Proceed to Day Trip to Genting<br />\r\nEnroute Batu Caves Visit (Murugan Temple)<br />\r\nOne Way Cable Car Ride at Genting<br />\r\n13.00 Hrs &ndash; Lunch at First World Cafe<br />\r\nExplore Genting &amp; Evening Return Back to Kulalumpur<br />\r\n20.00 Hrs &ndash; Dinner at Indian Restaurant<br />\r\nOvernight Stay in the Hotel</p>\r\n\r\n<p><strong style="line-height: 1.3em;">Day 3&nbsp;</strong><br />\r\n07.30 Hrs &ndash; Breakfast at the Hotel<br />\r\n08.00 Hrs &ndash; Check Out of the Hotel &amp; Proceed to Singapore<br />\r\nEnroute Putra Jaya Tour<br />\r\nEnroute LUNCH<br />\r\n15.00 Hrs &ndash; Arrival at Singapore<br />\r\nMeet &amp; Greet<br />\r\nTransfer to the Hotel<br />\r\nCheck In at the Hotel<br />\r\nEvening is Free for Shopping<br />\r\nOvernight Stay in the Hotel</p>\r\n\r\n<p><strong>Day 4</strong><br />\r\n07.30 Hrs &ndash; Breakfast at the Hotel<br />\r\n09.30 Hrs &ndash;&nbsp;Proceed to Half a Day Singapore City Tour<br />\r\n13.00 Hrs &ndash; Lunch at Indian Restaurant<br />\r\n14.30 Hrs &ndash; Proceed to Sunset Sentosa<br />\r\n20.00 Hrs &ndash; Dinner at Indian Restaurant<br />\r\nOvernight Stay in the Hotel</p>\r\n\r\n<p><strong>Day 5</strong><br />\r\n07.30 Hrs &ndash; Breakfast at the Hotel<br />\r\nDay is Free for Shopping<br />\r\n12.00 Hrs &ndash; Check Out of the Hotel &amp; Keep the Luggage in the Hotel Lobby<br />\r\n13.00 Hrs &ndash; Lunch at Indian Restaurant<br />\r\n21.30 Hrs &ndash; Dinner at Indian Restaurant<br />\r\n23.00 Hrs &ndash; Drop at Singapore Airport</p>\r\n\r\n<p>Tour Ends</p>\r\n', '<table border="1" cellpadding="5" cellspacing="0" width="650">\r\n	<tbody>\r\n		<tr>\r\n			<th scope="col"><strong>Departure Date</strong></th>\r\n			<th scope="col"><strong>20-29 pax</strong></th>\r\n			<th scope="col"><strong>30-35 pax</strong></th>\r\n			<th scope="col"><strong>36-42 pax</strong></th>\r\n		</tr>\r\n		<tr>\r\n			<td valign="top"><strong>29th Sep to<br />\r\n			05th Oct 2013</strong><br />\r\n			<span style="background: #00F; color: #fff;">Booking Open</span></td>\r\n			<td align="left">Rs.56,900/- per adult<br />\r\n			Rs.55,400/- per child WB<br />\r\n			Rs.50,900/- per child NB</td>\r\n			<td align="left">Rs.55,900/- per adult<br />\r\n			Rs.54,400/- per child WB<br />\r\n			Rs.49,900/- per child NB</td>\r\n			<td align="left">Rs.54,900/- per adult<br />\r\n			Rs.53,400/- per child WB<br />\r\n			Rs.48,900/- per child NB</td>\r\n		</tr>\r\n		<tr>\r\n			<td valign="top"><strong>19th to 25th<br />\r\n			Oct 2013</strong><br />\r\n			<span style="background: #00F; color: #fff;">Booking Open</span></td>\r\n			<td align="left">Rs.56,900/- per adult<br />\r\n			Rs.56,400/- per child WB<br />\r\n			Rs.50,900/- per child NB</td>\r\n			<td align="left">Rs.55,900/- per adult<br />\r\n			Rs.54,400/- per child WB<br />\r\n			Rs.49,900/- per child NB</td>\r\n			<td align="left">Rs.54,900/- per adult<br />\r\n			Rs.53,400/- per child WB<br />\r\n			Rs.48,900/- per child NB</td>\r\n		</tr>\r\n		<tr>\r\n			<td valign="top"><strong>16th to 22nd&nbsp;<br />\r\n			Nov 2013</strong><br />\r\n			<span style="background: #00F; color: #fff;">Booking Open</span></td>\r\n			<td align="left">Rs.56,900/- per adult<br />\r\n			Rs.56,400/- per child WB<br />\r\n			Rs.50,900/- per child NB</td>\r\n			<td align="left">Rs.55,900/- per adult<br />\r\n			Rs.54,400/- per child WB<br />\r\n			Rs.49,900/- per child NB</td>\r\n			<td align="left">Rs.54,900/- per adult<br />\r\n			Rs.53,400/- per child WB<br />\r\n			Rs.48,900/- per child NB</td>\r\n		</tr>\r\n		<tr>\r\n			<td valign="top"><strong>21st to 27th<br />\r\n			Dec 2013</strong><br />\r\n			<span style="background: #00F; color: #fff;">Booking Open</span></td>\r\n			<td align="left">Rs.58,900/- per adult<br />\r\n			Rs.57,400/- per child WB<br />\r\n			Rs.52,900/- per child NB</td>\r\n			<td align="left">Rs.57,900/- per adult<br />\r\n			Rs.56,400/- per child WB<br />\r\n			Rs.51,900/- per child NB</td>\r\n			<td align="left">Rs.56,900/- per adult<br />\r\n			Rs.56,400/- per child WB<br />\r\n			Rs.50,900/- per child NB</td>\r\n		</tr>\r\n		<tr>\r\n			<td valign="top"><strong>12th to 18th<br />\r\n			Jan 2014</strong><br />\r\n			<span style="background: #00F; color: #fff;">Booking Open</span></td>\r\n			<td align="left">Rs.58,900/- per adult<br />\r\n			Rs.57,400/- per child WB<br />\r\n			Rs.52,900/- per child NB</td>\r\n			<td align="left">Rs.57,900/- per adult<br />\r\n			Rs.56,400/- per child WB<br />\r\n			Rs.51,900/- per child NB</td>\r\n			<td align="left">Rs.56,900/- per adult<br />\r\n			Rs.56,400/- per child WB<br />\r\n			Rs.50,900/- per child NB</td>\r\n		</tr>\r\n	</tbody>\r\n</table>\r\n\r\n<h3><span style="line-height: 1.3em;">Important Note</span></h3>\r\n\r\n<ul>\r\n	<li>All Group Tours would be conducted with Min 20 pax. &nbsp;If the Group size is below 20 pax means, the Guest would be transferred to the next available Group. &nbsp;If they want to go on the given dates means, it would be treated as SIC (Seat in Coach) basis with additional supplement cost.</li>\r\n	<li>We are not holding any confirmed seat in the flight and rooms. &nbsp;Flight seats and rooms are subject to availability.</li>\r\n	<li>Airfare and Exchange Rate&nbsp;&nbsp;(1 US$ = Rs. 60)&nbsp;are calculated as on 17th August 2013, any increase in airfare and exchange rate should be borne by the customer.</li>\r\n</ul>\r\n\r\n<h3><span style="line-height: 1.3em;">Booking Terms</span></h3>\r\n\r\n<ul>\r\n	<li>To Confirm this booking, pls Send us the SCANNED COPY of ALL THE TRAVELING GUESTS (Pls see Minimum 6 Months Validity of Passport is required for any International Travel) to <a href="mailto:sales@yougotrip.com">sales@yougotrip.com</a>&nbsp;<span style="line-height: 1.3em;">and deposit Rs.25,000/- (Non Refundable) in the below given bank and mail us the Scanned copy of the Deposit Chelan.</span></li>\r\n	<li>Balance Full Amount is Payable before 45 Days of the Travel Date</li>\r\n</ul>\r\n\r\n<h3><span style="font-family: Arial, Helvetica, sans-serif; font-size: 1em; font-weight: bold; line-height: 1.3em;">Cancelation Policy</span></h3>\r\n\r\n<ul>\r\n	<li>If booking is cancelled before 30 Days, 30% of the PACKAGE AMOUNT would be deducted</li>\r\n	<li>If booking is cancelled before 15 Days, 50% of the PACKAGE AMOUNT would be deducted</li>\r\n	<li>If booking is cancelled before 10 Days, NO REFUND WOULD BE GIVEN.</li>\r\n</ul>\r\n', 56900, 56400, 50900, 'user_image/europe1.jpg', 1, 0, '2013-09-21', '2013-09-21', 0, 'Europ Tour, France Tour', 'Tour,Erope,France ,Britan', ''),
(5, 'Malaysia Singapore', 'Malaysia & Singapore (5 Nights & 6 Days) ', '<p><strong style="color: #135cae; font-family: Helvetica, Arial, sans-serif; font-size: 13px; line-height: 1.3em;">Package Overview </strong></p>\r\n\r\n<ul>\r\n	<li>3 Nights in Kulalumpur</li>\r\n	<li>2 Nights in Singapore</li>\r\n	<li>Economy Airfare</li>\r\n	<li><span style="line-height: 1.3em;">Important sight seeing </span></li>\r\n	<li>Malaysia &amp; Singapore Visa</li>\r\n	<li><span style="line-height: 1.3em;">All meals</span></li>\r\n</ul>\r\n', '<p><span style="color: #135cae; font-family: Helvetica, Arial, sans-serif; font-size: 13px; font-weight: bold; line-height: 1.3em;">Package Includes</span></p>\r\n\r\n<ul>\r\n	<li>3 Nights Accommodation with Breakfast at Arenna Stars Hotel or similar in Kulalumpur</li>\r\n	<li>Airport &ndash; Kulalumpur &ndash; Genting &ndash; Singapore Transfers in Kulalumpur</li>\r\n	<li>1 Arrival Breakfast, 4 Lunch &amp; 3 Dinners in Malaysia</li>\r\n	<li>Putra Jaya Tour</li>\r\n	<li>Half a Day Kulalumpur City Tour</li>\r\n	<li>Day Trip to Genting</li>\r\n	<li>Battu Caves</li>\r\n	<li>One Way Cable Car Ride at Genting</li>\r\n	<li><span style="line-height: 1.3em;">2 Nights Accommodation with Breakfast at Grand Chancellor Hotel or similar in Singapore</span></li>\r\n	<li>Airport &ndash; Hotel &ndash; Coach Station Transfers in Singapore</li>\r\n	<li>2 Lunch &amp; 3 Dinners in Singapore</li>\r\n	<li>Jurong Bird Park</li>\r\n	<li>Half a Day City Tour in Singapore</li>\r\n	<li>Sunset Sentosa with Admission, Under Water World, Dolphin Lagoon &amp; Songs of the Sea</li>\r\n	<li>Visit to Marina Bay Sands</li>\r\n	<li>Watch Wonderful Light &amp; Sound Show</li>\r\n	<li>Singapore - Kulalumpur - Singapore by A/c Coach</li>\r\n	<li><span style="line-height: 1.3em;">All Transfers on Private Basis with the Service of Tamil/English Speaking Guide</span></li>\r\n	<li>Malaysia &amp; Singapore Visa</li>\r\n	<li>Economy Airfare</li>\r\n</ul>\r\n', '<h3>Package Excludes</h3>\r\n\r\n<ul>\r\n	<li>Passport Services</li>\r\n	<li>Any Increase in the Air Fare&nbsp;</li>\r\n	<li>Any Increase in Dollar Rate&nbsp;</li>\r\n	<li>Optional Tours if any</li>\r\n	<li>Expenses like Tips, Laundry, Porte rages etc.</li>\r\n	<li>Expenses due to Change of Itinerary / Flight Timing / Natural Disturbances etc.</li>\r\n	<li>Early Check In and Late Check Out</li>\r\n	<li>Any Surcharges due to High Season / Block out Dates / Festivals / Public Holidays</li>\r\n	<li>Any Other Expenses not mentioned in the Tour Cost</li>\r\n</ul>\r\n', '<h3><span style="text-decoration: underline;">DAYWISE ITINERARY :</span></h3>\r\n\r\n<p><strong>Day 1&nbsp;</strong><br />\r\nArrival at Singapore Airport<br />\r\nRefresh yourself in Airport<br />\r\nMeet &amp; Greet<br />\r\nTransfer to Kulalumpur by A/c Coach<br />\r\nEnroute Breakfast &amp; Lunch&nbsp;<br />\r\nEnroute Putra Jaya Tour<br />\r\n15.00 Hrs &ndash; Check In at the Kulalumpur Hotel<br />\r\n20.00 Hrs &ndash; Dinner at Indian Restaurant<br />\r\nOvernight Stay in the Hotel</p>\r\n\r\n<p><strong>Day 2&nbsp;</strong><br />\r\n07.30 Hrs &ndash; Breakfast at the Hotel<br />\r\n09.00 Hrs &ndash; Proceed to Day Trip to Genting<br />\r\nEnroute Batu Caves Visit (Murugan Temple)<br />\r\nOne Way Cable Car Ride at Genting<br />\r\n13.00 Hrs &ndash; Lunch at First World Cafe<br />\r\nExplore Genting &amp; Evening Return Back to Kulalumpur<br />\r\n20.00 Hrs &ndash; Dinner at Indian Restaurant<br />\r\nOvernight Stay in the Hotel</p>\r\n\r\n<p><strong>Day 3&nbsp;</strong><br />\r\n07.30 Hrs &ndash; Breakfast at the Hotel<br />\r\n10.00 Hrs &ndash; Proceed to Half a Day Kulalumpur City Tour<br />\r\n13.00 Hrs &ndash; Lunch at Indian Restaurant<br />\r\nNoon is Free for Shopping<br />\r\n20.00 Hrs &ndash; Dinner at Indian Restaurant<br />\r\nOvernight Stay in the Hotel</p>\r\n\r\n<p><strong>Day 4&nbsp;</strong><br />\r\n07.30 Hrs &ndash; Breakfast at the Hotel<br />\r\n08.00 Hrs &ndash; Check Out of the Hotel &amp; Proceed to Singapore<br />\r\nEnroute LUNCH<br />\r\n15.00 Hrs &ndash; Arrival at Singapore<br />\r\nMeet &amp; Greet<br />\r\nTransfer to the Hotel<br />\r\nCheck In at the Hotel<br />\r\nEvening is Free for Shopping<br />\r\nOvernight Stay in the Hotel</p>\r\n\r\n<p><strong>Day 5</strong><br />\r\n07.30 Hrs &ndash; Breakfast at the Hotel<br />\r\n09.30 Hrs &ndash; Proceed to Jurong Bird Park<br />\r\n13.00 Hrs &ndash; Lunch at Indian Restaurant<br />\r\n14.30 Hrs &ndash; Proceed to Sunset Sentosa<br />\r\n20.00 Hrs &ndash; Dinner at Indian Restaurant<br />\r\nOvernight Stay in the Hotel</p>\r\n\r\n<p><strong>Day 6</strong><br />\r\n07.30 Hrs &ndash; Breakfast at the Hotel<br />\r\nMorning is Free for Shopping<br />\r\n12.00 Hrs &ndash; Check Out of the Hotel &amp; Keep the Luggage in the Hotel Lobby<br />\r\n13.00 Hrs &ndash; Lunch at Indian Restaurant<br />\r\n14.30 Hrs &ndash; Proceed to Half a Day Singapore City Tour<br />\r\n18.00 Hrs &ndash; Visit to Marina Bay Sands<br />\r\n20.00 Hrs &ndash; Watch Wonderful Light &amp; Sound Show<br />\r\n21.30 Hrs &ndash; Dinner at Indian Restaurant<br />\r\n23.00 Hrs &ndash; Drop at Singapore Airport</p>\r\n\r\n<p>Tour Ends</p>\r\n', '<table border="1" cellpadding="5" cellspacing="0" width="650">\r\n	<tbody>\r\n		<tr>\r\n			<th scope="col"><strong>Departure Date</strong></th>\r\n			<th scope="col"><strong>20-29 pax</strong></th>\r\n			<th scope="col"><strong>30-35 pax</strong></th>\r\n			<th scope="col"><strong>36-42 pax</strong></th>\r\n		</tr>\r\n		<tr>\r\n			<td valign="top"><strong>29th Sep to<br />\r\n			06th Oct 2013</strong><br />\r\n			<span style="background: #00F; color: #fff;">Booking Open</span></td>\r\n			<td align="left">Rs.64,000/- per adult<br />\r\n			Rs.62,000/- per child WB<br />\r\n			Rs.57,000/- per child NB</td>\r\n			<td align="left">Rs.62,000/- per adult<br />\r\n			Rs.60,000/- per child WB<br />\r\n			Rs.55,000/- per child NB</td>\r\n			<td align="left">Rs.61,000/- per adult<br />\r\n			Rs.59,000/- per child WB<br />\r\n			Rs.54,000/- per child NB</td>\r\n		</tr>\r\n		<tr>\r\n			<td valign="top"><strong>19th to 26th&nbsp;<br />\r\n			Oct 2013</strong><br />\r\n			<span style="background: #00F; color: #fff;">Booking Open</span></td>\r\n			<td align="left">Rs.64,000/- per adult<br />\r\n			Rs.62,000/- per child WB<br />\r\n			Rs.57,000/- per child NB</td>\r\n			<td align="left">Rs.62,000/- per adult<br />\r\n			Rs.60,000/- per child WB<br />\r\n			Rs.55,000/- per child NB</td>\r\n			<td align="left">Rs.61,000/- per adult<br />\r\n			Rs.59,000/- per child WB<br />\r\n			Rs.54,000/- per child NB</td>\r\n		</tr>\r\n		<tr>\r\n			<td valign="top"><strong>16th to 23rd<br />\r\n			Nov 2013</strong><br />\r\n			<span style="background: #00F; color: #fff;">Booking Open</span></td>\r\n			<td align="left">Rs.64,000/- per adult<br />\r\n			Rs.62,000/- per child WB<br />\r\n			Rs.57,000/- per child NB</td>\r\n			<td align="left">Rs.62,000/- per adult<br />\r\n			Rs.60,000/- per child WB<br />\r\n			Rs.55,000/- per child NB</td>\r\n			<td align="left">Rs.61,000/- per adult<br />\r\n			Rs.59,000/- per child WB<br />\r\n			Rs.54,000/- per child NB</td>\r\n		</tr>\r\n		<tr>\r\n			<td valign="top"><strong>21st to 28th<br />\r\n			Dec 2013</strong><br />\r\n			<span style="background: #00F; color: #fff;">Booking Open</span></td>\r\n			<td align="left">Rs.66,000/- per adult<br />\r\n			Rs.64,000/- per child WB<br />\r\n			Rs.59,000/- per child NB</td>\r\n			<td align="left">Rs.64,000/- per adult<br />\r\n			Rs.62,000/- per child WB<br />\r\n			Rs.57,000/- per child NB</td>\r\n			<td align="left">Rs.63,000/- per adult<br />\r\n			Rs.59,000/- per child WB<br />\r\n			Rs.56,000/- per child NB</td>\r\n		</tr>\r\n		<tr>\r\n			<td valign="top"><strong>13th to 20th<br />\r\n			Jan 2014</strong><br />\r\n			<span style="background: #00F; color: #fff;">Booking Open</span></td>\r\n			<td align="left">Rs.66,000/- per adult<br />\r\n			Rs.64,000/- per child WB<br />\r\n			Rs.59,000/- per child NB</td>\r\n			<td align="left">Rs.64,000/- per adult<br />\r\n			Rs.62,000/- per child WB<br />\r\n			Rs.57,000/- per child NB</td>\r\n			<td align="left">Rs.63,000/- per adult<br />\r\n			Rs.59,000/- per child WB<br />\r\n			Rs.56,000/- per child NB</td>\r\n		</tr>\r\n	</tbody>\r\n</table>\r\n\r\n<h3><span style="line-height: 1.3em;">Important Note</span></h3>\r\n\r\n<ul>\r\n	<li>All Group Tours would be conducted with Min 20 pax. &nbsp;If the Group size is below 20 pax means, the Guest would be transferred to the next available Group. &nbsp;If they want to go on the given dates means, it would be treated as SIC (Seat in Coach) basis with additional supplement cost.</li>\r\n	<li>We are not holding any confirmed seat in the flight and rooms. &nbsp;Flight seats and rooms are subject to availability.</li>\r\n	<li>Airfare and Exchange Rate&nbsp;&nbsp;(1 US$ = Rs. 60)&nbsp;are calculated as on 17th August 2013, any increase in airfare and exchange rate should be borne by the customer.</li>\r\n</ul>\r\n\r\n<h3><span style="line-height: 1.3em;">Booking Terms</span></h3>\r\n\r\n<ul>\r\n	<li>To Confirm this booking, pls Send us the SCANNED COPY of ALL THE TRAVELING GUESTS (Pls see Minimum 6 Months Validity of Passport is required for any International Travel) to <a href="mailto:sales@yougotrip.com">sales@yougotrip.com</a>&nbsp;<span style="line-height: 1.3em;">and deposit Rs.25,000/- (Non Refundable) in the below given bank and mail us the Scanned copy of the Deposit Chelan.</span></li>\r\n	<li>Balance Full Amount is Payable before 45 Days of the Travel Date</li>\r\n</ul>\r\n\r\n<h3><span style="font-family: Arial, Helvetica, sans-serif; font-size: 1em; font-weight: bold; line-height: 1.3em;">Cancelation Policy</span></h3>\r\n\r\n<ul>\r\n	<li>If booking is cancelled before 30 Days, 30% of the PACKAGE AMOUNT would be deducted</li>\r\n	<li>If booking is cancelled before 15 Days, 50% of the PACKAGE AMOUNT would be deducted</li>\r\n	<li>If booking is cancelled before 10 Days, NO REFUND WOULD BE GIVEN.</li>\r\n</ul>\r\n', 64000, 62000, 57000, 'user_image/Malaysia1.jpg', 1, 0, '2013-09-21', '0000-00-00', 0, 'Malaysia Singapore torur', 'tour malaysia,singapore', ''),
(6, 'Malaysia Singapore', 'Malaysia & Singapore (6 Nights & 7 Days) ', '<p><strong style="color: #135cae; font-family: Helvetica, Arial, sans-serif; font-size: 13px; line-height: 1.3em;">Package Overview </strong></p>\r\n\r\n<ul>\r\n	<li>3 Nights in Kulalumpur</li>\r\n	<li>2 Nights in Singapore</li>\r\n	<li>1 Night in Star Cruise</li>\r\n	<li>Economy Airfare</li>\r\n	<li><span style="line-height: 1.3em;">Important sight seeing </span></li>\r\n	<li>Malaysia &amp; Singapore Visa</li>\r\n	<li><span style="line-height: 1.3em;">All meals</span></li>\r\n</ul>\r\n', '<p><span style="color: #135cae; font-family: Helvetica, Arial, sans-serif; font-size: 13px; font-weight: bold; line-height: 1.3em;">Package Includes</span></p>\r\n\r\n<ul>\r\n	<li>3 Nights Accommodation with Breakfast at Arenna Stars Hotel or similar in Kulalumpur</li>\r\n	<li>Airport &ndash; Kulalumpur &ndash; Genting &ndash; Singapore Transfers in Kulalumpur</li>\r\n	<li>1 Arrival Breakfast, 4 Lunch &amp; 3 Dinners in Malaysia</li>\r\n	<li>Putra Jaya Tour</li>\r\n	<li>Half a Day Kulalumpur City Tour</li>\r\n	<li>Day Trip to Genting</li>\r\n	<li>Battu Caves</li>\r\n	<li>One Way Cable Car Ride at Genting</li>\r\n	<li>1 Night Star Cruise with Breakfast and Dinner</li>\r\n	<li>Half a day Penang City Tour with Lunch</li>\r\n	<li><span style="line-height: 1.3em;">2 Nights Accommodation with Breakfast at Grand Chancellor Hotel or similar in Singapore</span></li>\r\n	<li>Airport &ndash; Hotel &ndash; Coach Station Transfers in Singapore</li>\r\n	<li>2 Lunch &amp; 3 Dinners in Singapore</li>\r\n	<li>Jurong Bird Park</li>\r\n	<li>Half a Day City Tour in Singapore</li>\r\n	<li>Sunset Sentosa with Admission, Under Water World, Dolphin Lagoon &amp; Songs of the Sea</li>\r\n	<li>Visit to Marina Bay Sands</li>\r\n	<li>Watch Wonderful Light &amp; Sound Show</li>\r\n	<li>Singapore - Kulalumpur - Singapore by A/c Coach</li>\r\n	<li><span style="line-height: 1.3em;">All Transfers on Private Basis with the Service of Tamil/English Speaking Guide</span></li>\r\n	<li>Malaysia &amp; Singapore Visa</li>\r\n	<li>Economy Airfare</li>\r\n</ul>\r\n', '<h3>Package Excludes</h3>\r\n\r\n<ul>\r\n	<li>Passport Services</li>\r\n	<li>Any Increase in the Air Fare&nbsp;</li>\r\n	<li>Any Increase in Dollar Rate&nbsp;</li>\r\n	<li>Optional Tours if any</li>\r\n	<li>Expenses like Tips, Laundry, Porte rages etc.</li>\r\n	<li>Expenses due to Change of Itinerary / Flight Timing / Natural Disturbances etc.</li>\r\n	<li>Early Check In and Late Check Out</li>\r\n	<li>Any Surcharges due to High Season / Block out Dates / Festivals / Public Holidays</li>\r\n	<li>Any Other Expenses not mentioned in the Tour Cost</li>\r\n</ul>\r\n', '<h3><span style="text-decoration: underline;">DAYWISE ITINERARY :</span></h3>\r\n\r\n<p><strong>Day 1&nbsp;</strong><br />\r\nArrival at Singapore Airport<br />\r\nRefresh yourself in Airport<br />\r\nMeet &amp; Greet<br />\r\nTransfer to Kulalumpur by A/c Coach<br />\r\nEnroute Breakfast &amp; Lunch&nbsp;<br />\r\nEnroute Putra Jaya Tour<br />\r\n15.00 Hrs &ndash; Check In at the Kulalumpur Hotel<br />\r\n20.00 Hrs &ndash; Dinner at Indian Restaurant<br />\r\nOvernight Stay in the Hotel</p>\r\n\r\n<p><strong>Day 2&nbsp;</strong><br />\r\n07.30 Hrs &ndash; Breakfast at the Hotel<br />\r\n09.00 Hrs &ndash; Proceed to Day Trip to Genting<br />\r\nEnroute Batu Caves Visit (Murugan Temple)<br />\r\nOne Way Cable Car Ride at Genting<br />\r\n13.00 Hrs &ndash; Lunch at First World Cafe<br />\r\nExplore Genting &amp; Evening Return Back to Kulalumpur<br />\r\n20.00 Hrs &ndash; Dinner at Indian Restaurant<br />\r\nOvernight Stay in the Hotel</p>\r\n\r\n<p><strong>Day 3&nbsp;</strong><br />\r\n07.30 Hrs &ndash; Breakfast at the Hotel<br />\r\n10.00 Hrs &ndash; Proceed to Half a Day Kulalumpur City Tour<br />\r\n13.00 Hrs &ndash; Lunch at Indian Restaurant<br />\r\nNoon is Free for Shopping<br />\r\n20.00 Hrs &ndash; Dinner at Indian Restaurant<br />\r\nOvernight Stay in the Hotel</p>\r\n\r\n<p><strong>Day 4&nbsp;</strong><br />\r\n07.30 Hrs &ndash; Breakfast at the Hotel<br />\r\n08.00 Hrs &ndash; Check Out of the Hotel &amp; Proceed to Penang<br />\r\nEnroute LUNCH<br />\r\n14.00 Hrs &ndash; Proceed to Half a day Penang City Tour<br />\r\n17.00 Hrs &ndash; Proceed to Check in at Star Cruise<br />\r\n20.00 Hrs &ndash; Star Cruise Saling begins<br />\r\n20.30 Hrs &ndash; Dinner at Star Cruise<br />\r\nOvernight Stay in the Star Cruise</p>\r\n\r\n<p><strong>Day 5</strong><br />\r\n07.00 Hrs &ndash; Breakfast at the Star Cruise<br />\r\n08.00 Hrs &ndash; Check Out of the Star Cruise &amp; Proceed to Singapore<br />\r\nEnroute LUNCH<br />\r\n18.00 Hrs &ndash; Arrival at Singapore<br />\r\nMeet &amp; Greet<br />\r\nTransfer to the Hotel<br />\r\nCheck In at the Hotel<br />\r\nEvening is Free for Shopping<br />\r\nOvernight Stay in the Hotel</p>\r\n\r\n<p><strong>Day 6</strong><br />\r\n07.30 Hrs &ndash; Breakfast at the Hotel<br />\r\n09.30 Hrs &ndash; Proceed to Jurong Bird Park<br />\r\n13.00 Hrs &ndash; Lunch at Indian Restaurant<br />\r\n14.30 Hrs &ndash; Proceed to Sunset Sentosa<br />\r\n20.00 Hrs &ndash; Dinner at Indian Restaurant<br />\r\nOvernight Stay in the Hotel</p>\r\n\r\n<p><strong>Day 7</strong><br />\r\n07.30 Hrs &ndash; Breakfast at the Hotel<br />\r\nMorning is Free for Shopping<br />\r\n12.00 Hrs &ndash; Check Out of the Hotel &amp; Keep the Luggage in the Hotel Lobby<br />\r\n13.00 Hrs &ndash; Lunch at Indian Restaurant<br />\r\n14.30 Hrs &ndash; Proceed to Half a Day Singapore City Tour<br />\r\n18.00 Hrs &ndash; Visit to Marina Bay Sands<br />\r\n20.00 Hrs &ndash; Watch Wonderful Light &amp; Sound Show<br />\r\n21.30 Hrs &ndash; Dinner at Indian Restaurant<br />\r\n23.00 Hrs &ndash; Drop at Singapore Airport</p>\r\n\r\n<p>Tour Ends</p>\r\n', '<table border="1" cellpadding="5" cellspacing="0" width="650">\r\n	<tbody>\r\n		<tr>\r\n			<th scope="col"><strong>Departure Date</strong></th>\r\n			<th scope="col"><strong>20-29 pax</strong></th>\r\n			<th scope="col"><strong>30-35 pax</strong></th>\r\n			<th scope="col"><strong>36-42 pax</strong></th>\r\n		</tr>\r\n		<tr>\r\n			<td valign="top"><strong>29th Sep to<br />\r\n			07th Oct 2013</strong><br />\r\n			<span style="background: #00F; color: #fff;">Booking Open</span></td>\r\n			<td align="left">Rs.74,000/- per adult<br />\r\n			Rs.72,000/- per child WB<br />\r\n			Rs.67,000/- per child NB</td>\r\n			<td align="left">Rs.72,000/- per adult<br />\r\n			Rs.70,000/- per child WB<br />\r\n			Rs.65,000/- per child NB</td>\r\n			<td align="left">Rs.71,000/- per adult<br />\r\n			Rs.69,000/- per child WB<br />\r\n			Rs.64,000/- per child NB</td>\r\n		</tr>\r\n		<tr>\r\n			<td valign="top"><strong>19th to 27th<br />\r\n			Oct 2013</strong><br />\r\n			<span style="background: #00F; color: #fff;">Booking Open</span></td>\r\n			<td align="left">Rs.74,000/- per adult<br />\r\n			Rs.72,000/- per child WB<br />\r\n			Rs.67,000/- per child NB</td>\r\n			<td align="left">Rs.72,000/- per adult<br />\r\n			Rs.70,000/- per child WB<br />\r\n			Rs.65,000/- per child NB</td>\r\n			<td align="left">Rs.71,000/- per adult<br />\r\n			Rs.69,000/- per child WB<br />\r\n			Rs.64,000/- per child NB</td>\r\n		</tr>\r\n		<tr>\r\n			<td valign="top"><strong>16th to 24th&nbsp;<br />\r\n			Nov 2013</strong><br />\r\n			<span style="background: #00F; color: #fff;">Booking Open</span></td>\r\n			<td align="left">Rs.74,000/- per adult<br />\r\n			Rs.72,000/- per child WB<br />\r\n			Rs.67,000/- per child NB</td>\r\n			<td align="left">Rs.72,000/- per adult<br />\r\n			Rs.70,000/- per child WB<br />\r\n			Rs.65,000/- per child NB</td>\r\n			<td align="left">Rs.71,000/- per adult<br />\r\n			Rs.69,000/- per child WB<br />\r\n			Rs.64,000/- per child NB</td>\r\n		</tr>\r\n		<tr>\r\n			<td valign="top"><strong>21st to 29th<br />\r\n			Dec 2013</strong><br />\r\n			<span style="background: #00F; color: #fff;">Booking Open</span></td>\r\n			<td align="left">Rs.74,000/- per adult<br />\r\n			Rs.74,000/- per child WB<br />\r\n			Rs.69,000/- per child NB</td>\r\n			<td align="left">Rs.74,000/- per adult<br />\r\n			Rs.72,000/- per child WB<br />\r\n			Rs.67,000/- per child NB</td>\r\n			<td align="left">Rs.73,000/- per adult<br />\r\n			Rs.71,000/- per child WB<br />\r\n			Rs.66,000/- per child NB</td>\r\n		</tr>\r\n		<tr>\r\n			<td valign="top"><strong>11th to 19th<br />\r\n			Jan 2014</strong><br />\r\n			<span style="background: #ff0000; color: #fff;">Booking Closed</span></td>\r\n			<td align="left">Rs.74,000/- per adult<br />\r\n			Rs.72,000/- per child WB<br />\r\n			Rs.67,000/- per child NB</td>\r\n			<td align="left">Rs.72,000/- per adult<br />\r\n			Rs.70,000/- per child WB<br />\r\n			Rs.65,000/- per child NB</td>\r\n			<td align="left">Rs.71,000/- per adult<br />\r\n			Rs.69,000/- per child WB<br />\r\n			Rs.64,000/- per child NB</td>\r\n		</tr>\r\n	</tbody>\r\n</table>\r\n\r\n<h3><span style="line-height: 1.3em;">Important Note</span></h3>\r\n\r\n<ul>\r\n	<li>All Group Tours would be conducted with Min 20 pax. &nbsp;If the Group size is below 20 pax means, the Guest would be transferred to the next available Group. &nbsp;If they want to go on the given dates means, it would be treated as SIC (Seat in Coach) basis with additional supplement cost.</li>\r\n	<li>We are not holding any confirmed seat in the flight and rooms. &nbsp;Flight seats and rooms are subject to availability.</li>\r\n	<li>Airfare and Exchange Rate&nbsp;&nbsp;(1 US$ = Rs. 60)&nbsp;are calculated as on 17th August 2013, any increase in airfare and exchange rate should be borne by the customer.</li>\r\n</ul>\r\n\r\n<h3><span style="line-height: 1.3em;">Booking Terms</span></h3>\r\n\r\n<ul>\r\n	<li>To Confirm this booking, pls Send us the SCANNED COPY of ALL THE TRAVELING GUESTS (Pls see Minimum 6 Months Validity of Passport is required for any International Travel) to <a href="mailto:sales@yougotrip.com">sales@yougotrip.com</a>&nbsp;<span style="line-height: 1.3em;">and deposit Rs.25,000/- (Non Refundable) in the below given bank and mail us the Scanned copy of the Deposit Chelan.</span></li>\r\n	<li>Balance Full Amount is Payable before 45 Days of the Travel Date</li>\r\n</ul>\r\n\r\n<h3><span style="font-family: Arial, Helvetica, sans-serif; font-size: 1em; font-weight: bold; line-height: 1.3em;">Cancelation Policy</span></h3>\r\n\r\n<ul>\r\n	<li>If booking is cancelled before 30 Days, 30% of the PACKAGE AMOUNT would be deducted</li>\r\n	<li>If booking is cancelled before 15 Days, 50% of the PACKAGE AMOUNT would be deducted</li>\r\n	<li>If booking is cancelled before 10 Days, NO REFUND WOULD BE GIVEN.</li>\r\n</ul>\r\n', 74000, 74000, 69000, 'user_image/Malaysia4.jpg', 1, 0, '2013-09-21', '2013-09-21', 0, 'malaysia,singapore tour', 'malaysia singapore', '');
INSERT INTO `package` (`pack_id`, `category_desc`, `pack_title`, `pack_desc`, `pack_includes`, `pack_excludes`, `itinerary`, `dateandcost`, `adult_price`, `child_price`, `child_wob_price`, `pack_image`, `status`, `createdby`, `cdate`, `mdate`, `modifyby`, `meta_desc`, `meta_keyword`, `theme`) VALUES
(7, 'Malaysia Singapore', 'Singapore (5 Nights & 6 Days) ', '<p><strong style="color: #135cae; font-family: Helvetica, Arial, sans-serif; font-size: 13px; line-height: 1.3em;">Package Overview </strong></p>\r\n\r\n<ul>\r\n	<li>3 Nights in Kulalumpur</li>\r\n	<li>2 Nights in Singapore</li>\r\n	<li>Economy Airfare</li>\r\n	<li><span style="line-height: 1.3em;">Important sight seeing </span></li>\r\n	<li>Malaysia &amp; Singapore Visa</li>\r\n	<li><span style="line-height: 1.3em;">All meals</span></li>\r\n</ul>\r\n', '<p><span style="color: #135cae; font-family: Helvetica, Arial, sans-serif; font-size: 13px; font-weight: bold; line-height: 1.3em;">Package Includes</span></p>\r\n\r\n<ul>\r\n	<li>3 Nights Accommodation with Breakfast at Arenna Stars Hotel or similar in Kulalumpur</li>\r\n	<li>Airport &ndash; Kulalumpur &ndash; Genting &ndash; Singapore Transfers in Kulalumpur</li>\r\n	<li>1 Arrival Breakfast, 4 Lunch &amp; 3 Dinners in Malaysia</li>\r\n	<li>Putra Jaya Tour</li>\r\n	<li>Half a Day Kulalumpur City Tour</li>\r\n	<li>Day Trip to Genting</li>\r\n	<li>Battu Caves</li>\r\n	<li>One Way Cable Car Ride at Genting</li>\r\n	<li><span style="line-height: 1.3em;">2 Nights Accommodation with Breakfast at Grand Chancellor Hotel or similar in Singapore</span></li>\r\n	<li>Airport &ndash; Hotel &ndash; Coach Station Transfers in Singapore</li>\r\n	<li>2 Lunch &amp; 3 Dinners in Singapore</li>\r\n	<li>Jurong Bird Park</li>\r\n	<li>Half a Day City Tour in Singapore</li>\r\n	<li>Sunset Sentosa with Admission, Under Water World, Dolphin Lagoon &amp; Songs of the Sea</li>\r\n	<li>Visit to Marina Bay Sands</li>\r\n	<li>Watch Wonderful Light &amp; Sound Show</li>\r\n	<li>Singapore - Kulalumpur - Singapore by A/c Coach</li>\r\n	<li><span style="line-height: 1.3em;">All Transfers on Private Basis with the Service of Tamil/English Speaking Guide</span></li>\r\n	<li>Malaysia &amp; Singapore Visa</li>\r\n	<li>Economy Airfare</li>\r\n</ul>\r\n', '<h3>Package Excludes</h3>\r\n\r\n<ul>\r\n	<li>Passport Services</li>\r\n	<li>Any Increase in the Air Fare&nbsp;</li>\r\n	<li>Any Increase in Dollar Rate&nbsp;</li>\r\n	<li>Optional Tours if any</li>\r\n	<li>Expenses like Tips, Laundry, Porte rages etc.</li>\r\n	<li>Expenses due to Change of Itinerary / Flight Timing / Natural Disturbances etc.</li>\r\n	<li>Early Check In and Late Check Out</li>\r\n	<li>Any Surcharges due to High Season / Block out Dates / Festivals / Public Holidays</li>\r\n	<li>Any Other Expenses not mentioned in the Tour Cost</li>\r\n</ul>\r\n', '<h3><span style="text-decoration: underline;">DAYWISE ITINERARY :</span></h3>\r\n\r\n<p><strong>Day 1&nbsp;</strong><br />\r\nArrival at Singapore Airport<br />\r\nRefresh yourself in Airport<br />\r\nMeet &amp; Greet<br />\r\nTransfer to Kulalumpur by A/c Coach<br />\r\nEnroute Breakfast &amp; Lunch&nbsp;<br />\r\nEnroute Putra Jaya Tour<br />\r\n15.00 Hrs &ndash; Check In at the Kulalumpur Hotel<br />\r\n20.00 Hrs &ndash; Dinner at Indian Restaurant<br />\r\nOvernight Stay in the Hotel</p>\r\n\r\n<p><strong>Day 2&nbsp;</strong><br />\r\n07.30 Hrs &ndash; Breakfast at the Hotel<br />\r\n09.00 Hrs &ndash; Proceed to Day Trip to Genting<br />\r\nEnroute Batu Caves Visit (Murugan Temple)<br />\r\nOne Way Cable Car Ride at Genting<br />\r\n13.00 Hrs &ndash; Lunch at First World Cafe<br />\r\nExplore Genting &amp; Evening Return Back to Kulalumpur<br />\r\n20.00 Hrs &ndash; Dinner at Indian Restaurant<br />\r\nOvernight Stay in the Hotel</p>\r\n\r\n<p><strong>Day 3&nbsp;</strong><br />\r\n07.30 Hrs &ndash; Breakfast at the Hotel<br />\r\n10.00 Hrs &ndash; Proceed to Half a Day Kulalumpur City Tour<br />\r\n13.00 Hrs &ndash; Lunch at Indian Restaurant<br />\r\nNoon is Free for Shopping<br />\r\n20.00 Hrs &ndash; Dinner at Indian Restaurant<br />\r\nOvernight Stay in the Hotel</p>\r\n\r\n<p><strong>Day 4&nbsp;</strong><br />\r\n07.30 Hrs &ndash; Breakfast at the Hotel<br />\r\n08.00 Hrs &ndash; Check Out of the Hotel &amp; Proceed to Singapore<br />\r\nEnroute LUNCH<br />\r\n15.00 Hrs &ndash; Arrival at Singapore<br />\r\nMeet &amp; Greet<br />\r\nTransfer to the Hotel<br />\r\nCheck In at the Hotel<br />\r\nEvening is Free for Shopping<br />\r\nOvernight Stay in the Hotel</p>\r\n\r\n<p><strong>Day 5</strong><br />\r\n07.30 Hrs &ndash; Breakfast at the Hotel<br />\r\n09.30 Hrs &ndash; Proceed to Jurong Bird Park<br />\r\n13.00 Hrs &ndash; Lunch at Indian Restaurant<br />\r\n14.30 Hrs &ndash; Proceed to Sunset Sentosa<br />\r\n20.00 Hrs &ndash; Dinner at Indian Restaurant<br />\r\nOvernight Stay in the Hotel</p>\r\n\r\n<p><strong>Day 6</strong><br />\r\n07.30 Hrs &ndash; Breakfast at the Hotel<br />\r\nMorning is Free for Shopping<br />\r\n12.00 Hrs &ndash; Check Out of the Hotel &amp; Keep the Luggage in the Hotel Lobby<br />\r\n13.00 Hrs &ndash; Lunch at Indian Restaurant<br />\r\n14.30 Hrs &ndash; Proceed to Half a Day Singapore City Tour<br />\r\n18.00 Hrs &ndash; Visit to Marina Bay Sands<br />\r\n20.00 Hrs &ndash; Watch Wonderful Light &amp; Sound Show<br />\r\n21.30 Hrs &ndash; Dinner at Indian Restaurant<br />\r\n23.00 Hrs &ndash; Drop at Singapore Airport</p>\r\n\r\n<p>Tour Ends</p>\r\n', '<table border="1" cellpadding="5" cellspacing="0" width="650">\r\n	<tbody>\r\n		<tr>\r\n			<th scope="col"><strong>Departure Date</strong></th>\r\n			<th scope="col"><strong>20-29 pax</strong></th>\r\n			<th scope="col"><strong>30-35 pax</strong></th>\r\n			<th scope="col"><strong>36-42 pax</strong></th>\r\n		</tr>\r\n		<tr>\r\n			<td valign="top"><strong>29th Sep to<br />\r\n			06th Oct 2013</strong><br />\r\n			<span style="background: #00F; color: #fff;">Booking Open</span></td>\r\n			<td align="left">Rs.64,000/- per adult<br />\r\n			Rs.62,000/- per child WB<br />\r\n			Rs.57,000/- per child NB</td>\r\n			<td align="left">Rs.62,000/- per adult<br />\r\n			Rs.60,000/- per child WB<br />\r\n			Rs.55,000/- per child NB</td>\r\n			<td align="left">Rs.61,000/- per adult<br />\r\n			Rs.59,000/- per child WB<br />\r\n			Rs.54,000/- per child NB</td>\r\n		</tr>\r\n		<tr>\r\n			<td valign="top"><strong>19th to 26th&nbsp;<br />\r\n			Oct 2013</strong><br />\r\n			<span style="background: #00F; color: #fff;">Booking Open</span></td>\r\n			<td align="left">Rs.64,000/- per adult<br />\r\n			Rs.62,000/- per child WB<br />\r\n			Rs.57,000/- per child NB</td>\r\n			<td align="left">Rs.62,000/- per adult<br />\r\n			Rs.60,000/- per child WB<br />\r\n			Rs.55,000/- per child NB</td>\r\n			<td align="left">Rs.61,000/- per adult<br />\r\n			Rs.59,000/- per child WB<br />\r\n			Rs.54,000/- per child NB</td>\r\n		</tr>\r\n		<tr>\r\n			<td valign="top"><strong>16th to 23rd<br />\r\n			Nov 2013</strong><br />\r\n			<span style="background: #00F; color: #fff;">Booking Open</span></td>\r\n			<td align="left">Rs.64,000/- per adult<br />\r\n			Rs.62,000/- per child WB<br />\r\n			Rs.57,000/- per child NB</td>\r\n			<td align="left">Rs.62,000/- per adult<br />\r\n			Rs.60,000/- per child WB<br />\r\n			Rs.55,000/- per child NB</td>\r\n			<td align="left">Rs.61,000/- per adult<br />\r\n			Rs.59,000/- per child WB<br />\r\n			Rs.54,000/- per child NB</td>\r\n		</tr>\r\n		<tr>\r\n			<td valign="top"><strong>21st to 28th<br />\r\n			Dec 2013</strong><br />\r\n			<span style="background: #00F; color: #fff;">Booking Open</span></td>\r\n			<td align="left">Rs.66,000/- per adult<br />\r\n			Rs.64,000/- per child WB<br />\r\n			Rs.59,000/- per child NB</td>\r\n			<td align="left">Rs.64,000/- per adult<br />\r\n			Rs.62,000/- per child WB<br />\r\n			Rs.57,000/- per child NB</td>\r\n			<td align="left">Rs.63,000/- per adult<br />\r\n			Rs.59,000/- per child WB<br />\r\n			Rs.56,000/- per child NB</td>\r\n		</tr>\r\n		<tr>\r\n			<td valign="top"><strong>13th to 20th<br />\r\n			Jan 2014</strong><br />\r\n			<span style="background: #00F; color: #fff;">Booking Open</span></td>\r\n			<td align="left">Rs.66,000/- per adult<br />\r\n			Rs.64,000/- per child WB<br />\r\n			Rs.59,000/- per child NB</td>\r\n			<td align="left">Rs.64,000/- per adult<br />\r\n			Rs.62,000/- per child WB<br />\r\n			Rs.57,000/- per child NB</td>\r\n			<td align="left">Rs.63,000/- per adult<br />\r\n			Rs.59,000/- per child WB<br />\r\n			Rs.56,000/- per child NB</td>\r\n		</tr>\r\n	</tbody>\r\n</table>\r\n\r\n<h3><span style="line-height: 1.3em;">Important Note</span></h3>\r\n\r\n<ul>\r\n	<li>All Group Tours would be conducted with Min 20 pax. &nbsp;If the Group size is below 20 pax means, the Guest would be transferred to the next available Group. &nbsp;If they want to go on the given dates means, it would be treated as SIC (Seat in Coach) basis with additional supplement cost.</li>\r\n	<li>We are not holding any confirmed seat in the flight and rooms. &nbsp;Flight seats and rooms are subject to availability.</li>\r\n	<li>Airfare and Exchange Rate&nbsp;&nbsp;(1 US$ = Rs. 60)&nbsp;are calculated as on 17th August 2013, any increase in airfare and exchange rate should be borne by the customer.</li>\r\n</ul>\r\n\r\n<h3><span style="line-height: 1.3em;">Booking Terms</span></h3>\r\n\r\n<ul>\r\n	<li>To Confirm this booking, pls Send us the SCANNED COPY of ALL THE TRAVELING GUESTS (Pls see Minimum 6 Months Validity of Passport is required for any International Travel) to <a href="mailto:sales@yougotrip.com">sales@yougotrip.com</a>&nbsp;<span style="line-height: 1.3em;">and deposit Rs.25,000/- (Non Refundable) in the below given bank and mail us the Scanned copy of the Deposit Chelan.</span></li>\r\n	<li>Balance Full Amount is Payable before 45 Days of the Travel Date</li>\r\n</ul>\r\n\r\n<h3><span style="font-family: Arial, Helvetica, sans-serif; font-size: 1em; font-weight: bold; line-height: 1.3em;">Cancelation Policy</span></h3>\r\n\r\n<ul>\r\n	<li>If booking is cancelled before 30 Days, 30% of the PACKAGE AMOUNT would be deducted</li>\r\n	<li>If booking is cancelled before 15 Days, 50% of the PACKAGE AMOUNT would be deducted</li>\r\n	<li>If booking is cancelled before 10 Days, NO REFUND WOULD BE GIVEN.</li>\r\n</ul>\r\n', 66000, 64000, 59000, 'user_image/singapore.jpg', 1, 0, '2013-09-21', '0000-00-00', 0, 'Singapore Tour', 'Singapore tour', ''),
(8, 'Malaysia Singapore', ' Singapore (4 Nights & 5 Days) ', '<p><strong style="color: #135cae; font-family: Helvetica, Arial, sans-serif; font-size: 13px; line-height: 1.3em;">Package Overview </strong></p>\r\n\r\n<ul>\r\n	<li>2 Nights in Kulalumpur</li>\r\n	<li>2 Nights in Singapore</li>\r\n	<li>Economy Airfare</li>\r\n	<li><span style="line-height: 1.3em;">Important sight seeing </span></li>\r\n	<li>Malaysia &amp; Singapore Visa</li>\r\n	<li><span style="line-height: 1.3em;">All meals</span></li>\r\n</ul>\r\n', '<p><span style="color: #135cae; font-family: Helvetica, Arial, sans-serif; font-size: 13px; font-weight: bold; line-height: 1.3em;">Package Includes</span></p>\r\n\r\n<ul>\r\n	<li>2 Nights Accommodation with Breakfast at My Hotel or similar in Kulalumpur</li>\r\n	<li>Airport &ndash; Kulalumpur &ndash; Genting &ndash; Singapore Transfers in Kulalumpur</li>\r\n	<li>1 Arrival Breakfast, 3 Lunch &amp; 2 Dinners in Malaysia</li>\r\n	<li>Putra Jaya Tour</li>\r\n	<li>Half a Day Kulalumpur City Tour</li>\r\n	<li>Day Trip to Genting</li>\r\n	<li>Battu Caves</li>\r\n	<li>One Way Cable Car Ride at Genting</li>\r\n	<li><span style="line-height: 1.3em;">2 Nights Accommodation with Breakfast at Grand C Hotel or similar in Singapore</span></li>\r\n	<li>Airport &ndash; Hotel &ndash; Coach Station Transfers in Singapore</li>\r\n	<li>2 Lunch &amp; 3 Dinners in Singapore</li>\r\n	<li><span style="line-height: 1.3em;">Half a Day City Tour in Singapore</span></li>\r\n	<li>Sunset Sentosa with Admission, Under Water World, Dolphin Lagoon &amp; Songs of the Sea</li>\r\n	<li><span style="line-height: 1.3em;"><span style="line-height: 1.3em;">Singapore - Kulalumpur - Singapore by A/c Coach</span></span></li>\r\n	<li><span style="line-height: 1.3em;">All Transfers on Private Basis with the Service of Tamil/English Speaking Guide</span></li>\r\n	<li>Malaysia &amp; Singapore Visa</li>\r\n	<li>Economy Airfare</li>\r\n</ul>\r\n', '<h3>Package Excludes</h3>\r\n\r\n<ul>\r\n	<li>Passport Services</li>\r\n	<li>Any Increase in the Air Fare&nbsp;</li>\r\n	<li>Any Increase in Dollar Rate&nbsp;</li>\r\n	<li>Optional Tours if any</li>\r\n	<li>Expenses like Tips, Laundry, Porte rages etc.</li>\r\n	<li>Expenses due to Change of Itinerary / Flight Timing / Natural Disturbances etc.</li>\r\n	<li>Early Check In and Late Check Out</li>\r\n	<li>Any Surcharges due to High Season / Block out Dates / Festivals / Public Holidays</li>\r\n	<li>Any Other Expenses not mentioned in the Tour Cost</li>\r\n</ul>\r\n', '<h3><span style="text-decoration: underline;">DAYWISE ITINERARY :</span></h3>\r\n\r\n<p><strong>Day 1&nbsp;</strong><br />\r\nArrival at Singapore Airport<br />\r\nRefresh yourself in Airport<br />\r\nMeet &amp; Greet<br />\r\nTransfer to Kulalumpur by A/c Coach<br />\r\nEnroute Breakfast &amp; Lunch&nbsp;<br />\r\n<span style="line-height: 1.3em;">14.00 Hrs &ndash; Check In at the Kulalumpur Hotel</span><br />\r\n15.00 Hrs &ndash; Proceed to Half a Day Kulalumpur City Tour<br />\r\n20.00 Hrs &ndash; Dinner at Indian Restaurant<br />\r\nOvernight Stay in the Hotel</p>\r\n\r\n<p><strong>Day 2&nbsp;</strong><br />\r\n07.30 Hrs &ndash; Breakfast at the Hotel<br />\r\n09.00 Hrs &ndash; Proceed to Day Trip to Genting<br />\r\nEnroute Batu Caves Visit (Murugan Temple)<br />\r\nOne Way Cable Car Ride at Genting<br />\r\n13.00 Hrs &ndash; Lunch at First World Cafe<br />\r\nExplore Genting &amp; Evening Return Back to Kulalumpur<br />\r\n20.00 Hrs &ndash; Dinner at Indian Restaurant<br />\r\nOvernight Stay in the Hotel</p>\r\n\r\n<p><strong style="line-height: 1.3em;">Day 3&nbsp;</strong><br />\r\n07.30 Hrs &ndash; Breakfast at the Hotel<br />\r\n08.00 Hrs &ndash; Check Out of the Hotel &amp; Proceed to Singapore<br />\r\nEnroute Putra Jaya Tour<br />\r\nEnroute LUNCH<br />\r\n15.00 Hrs &ndash; Arrival at Singapore<br />\r\nMeet &amp; Greet<br />\r\nTransfer to the Hotel<br />\r\nCheck In at the Hotel<br />\r\nEvening is Free for Shopping<br />\r\nOvernight Stay in the Hotel</p>\r\n\r\n<p><strong>Day 4</strong><br />\r\n07.30 Hrs &ndash; Breakfast at the Hotel<br />\r\n09.30 Hrs &ndash;&nbsp;Proceed to Half a Day Singapore City Tour<br />\r\n13.00 Hrs &ndash; Lunch at Indian Restaurant<br />\r\n14.30 Hrs &ndash; Proceed to Sunset Sentosa<br />\r\n20.00 Hrs &ndash; Dinner at Indian Restaurant<br />\r\nOvernight Stay in the Hotel</p>\r\n\r\n<p><strong>Day 5</strong><br />\r\n07.30 Hrs &ndash; Breakfast at the Hotel<br />\r\nDay is Free for Shopping<br />\r\n12.00 Hrs &ndash; Check Out of the Hotel &amp; Keep the Luggage in the Hotel Lobby<br />\r\n13.00 Hrs &ndash; Lunch at Indian Restaurant<br />\r\n21.30 Hrs &ndash; Dinner at Indian Restaurant<br />\r\n23.00 Hrs &ndash; Drop at Singapore Airport</p>\r\n\r\n<p>Tour Ends</p>\r\n', '<table border="1" cellpadding="5" cellspacing="0" width="650">\r\n	<tbody>\r\n		<tr>\r\n			<th scope="col"><strong>Departure Date</strong></th>\r\n			<th scope="col"><strong>20-29 pax</strong></th>\r\n			<th scope="col"><strong>30-35 pax</strong></th>\r\n			<th scope="col"><strong>36-42 pax</strong></th>\r\n		</tr>\r\n		<tr>\r\n			<td valign="top"><strong>29th Sep to<br />\r\n			05th Oct 2013</strong><br />\r\n			<span style="background: #00F; color: #fff;">Booking Open</span></td>\r\n			<td align="left">Rs.56,900/- per adult<br />\r\n			Rs.55,400/- per child WB<br />\r\n			Rs.50,900/- per child NB</td>\r\n			<td align="left">Rs.55,900/- per adult<br />\r\n			Rs.54,400/- per child WB<br />\r\n			Rs.49,900/- per child NB</td>\r\n			<td align="left">Rs.54,900/- per adult<br />\r\n			Rs.53,400/- per child WB<br />\r\n			Rs.48,900/- per child NB</td>\r\n		</tr>\r\n		<tr>\r\n			<td valign="top"><strong>19th to 25th<br />\r\n			Oct 2013</strong><br />\r\n			<span style="background: #00F; color: #fff;">Booking Open</span></td>\r\n			<td align="left">Rs.56,900/- per adult<br />\r\n			Rs.56,400/- per child WB<br />\r\n			Rs.50,900/- per child NB</td>\r\n			<td align="left">Rs.55,900/- per adult<br />\r\n			Rs.54,400/- per child WB<br />\r\n			Rs.49,900/- per child NB</td>\r\n			<td align="left">Rs.54,900/- per adult<br />\r\n			Rs.53,400/- per child WB<br />\r\n			Rs.48,900/- per child NB</td>\r\n		</tr>\r\n		<tr>\r\n			<td valign="top"><strong>16th to 22nd&nbsp;<br />\r\n			Nov 2013</strong><br />\r\n			<span style="background: #00F; color: #fff;">Booking Open</span></td>\r\n			<td align="left">Rs.56,900/- per adult<br />\r\n			Rs.56,400/- per child WB<br />\r\n			Rs.50,900/- per child NB</td>\r\n			<td align="left">Rs.55,900/- per adult<br />\r\n			Rs.54,400/- per child WB<br />\r\n			Rs.49,900/- per child NB</td>\r\n			<td align="left">Rs.54,900/- per adult<br />\r\n			Rs.53,400/- per child WB<br />\r\n			Rs.48,900/- per child NB</td>\r\n		</tr>\r\n		<tr>\r\n			<td valign="top"><strong>21st to 27th<br />\r\n			Dec 2013</strong><br />\r\n			<span style="background: #00F; color: #fff;">Booking Open</span></td>\r\n			<td align="left">Rs.58,900/- per adult<br />\r\n			Rs.57,400/- per child WB<br />\r\n			Rs.52,900/- per child NB</td>\r\n			<td align="left">Rs.57,900/- per adult<br />\r\n			Rs.56,400/- per child WB<br />\r\n			Rs.51,900/- per child NB</td>\r\n			<td align="left">Rs.56,900/- per adult<br />\r\n			Rs.56,400/- per child WB<br />\r\n			Rs.50,900/- per child NB</td>\r\n		</tr>\r\n		<tr>\r\n			<td valign="top"><strong>12th to 18th<br />\r\n			Jan 2014</strong><br />\r\n			<span style="background: #00F; color: #fff;">Booking Open</span></td>\r\n			<td align="left">Rs.58,900/- per adult<br />\r\n			Rs.57,400/- per child WB<br />\r\n			Rs.52,900/- per child NB</td>\r\n			<td align="left">Rs.57,900/- per adult<br />\r\n			Rs.56,400/- per child WB<br />\r\n			Rs.51,900/- per child NB</td>\r\n			<td align="left">Rs.56,900/- per adult<br />\r\n			Rs.56,400/- per child WB<br />\r\n			Rs.50,900/- per child NB</td>\r\n		</tr>\r\n	</tbody>\r\n</table>\r\n\r\n<h3><span style="line-height: 1.3em;">Important Note</span></h3>\r\n\r\n<ul>\r\n	<li>All Group Tours would be conducted with Min 20 pax. &nbsp;If the Group size is below 20 pax means, the Guest would be transferred to the next available Group. &nbsp;If they want to go on the given dates means, it would be treated as SIC (Seat in Coach) basis with additional supplement cost.</li>\r\n	<li>We are not holding any confirmed seat in the flight and rooms. &nbsp;Flight seats and rooms are subject to availability.</li>\r\n	<li>Airfare and Exchange Rate&nbsp;&nbsp;(1 US$ = Rs. 60)&nbsp;are calculated as on 17th August 2013, any increase in airfare and exchange rate should be borne by the customer.</li>\r\n</ul>\r\n\r\n<h3><span style="line-height: 1.3em;">Booking Terms</span></h3>\r\n\r\n<ul>\r\n	<li>To Confirm this booking, pls Send us the SCANNED COPY of ALL THE TRAVELING GUESTS (Pls see Minimum 6 Months Validity of Passport is required for any International Travel) to <a href="mailto:sales@yougotrip.com">sales@yougotrip.com</a>&nbsp;<span style="line-height: 1.3em;">and deposit Rs.25,000/- (Non Refundable) in the below given bank and mail us the Scanned copy of the Deposit Chelan.</span></li>\r\n	<li>Balance Full Amount is Payable before 45 Days of the Travel Date</li>\r\n</ul>\r\n\r\n<h3><span style="font-family: Arial, Helvetica, sans-serif; font-size: 1em; font-weight: bold; line-height: 1.3em;">Cancelation Policy</span></h3>\r\n\r\n<ul>\r\n	<li>If booking is cancelled before 30 Days, 30% of the PACKAGE AMOUNT would be deducted</li>\r\n	<li>If booking is cancelled before 15 Days, 50% of the PACKAGE AMOUNT would be deducted</li>\r\n	<li>If booking is cancelled before 10 Days, NO REFUND WOULD BE GIVEN.</li>\r\n</ul>\r\n', 59800, 57400, 52900, 'user_image/singapore0.jpg', 1, 0, '2013-09-21', '0000-00-00', 0, 'Sinagpore Tour', 'Singapore tour', ''),
(16, 'International Pack', 'USA', '<p>USA</p>\r\n', '<p>USA</p>\r\n', '<p>USA</p>\r\n', '<p>USA</p>\r\n', '<p>USA</p>\r\n', 15000, 15000, 12000, 'images0.jpg', 1, 0, '2013-11-05', '0000-00-00', 0, 'USA', 'USA', '3'),
(17, 'International Pack', 'XXXX', '<p>XXX</p>\r\n', '', '', '', '', 1, 1, 1, 'images10.jpg', 1, 0, '2013-11-05', '0000-00-00', 0, '1', '1', 'Family,Honymoon,Corporate'),
(18, 'International Pack', 'Rounda', '', '', '', '', '', 1500, 15000, 15000, 'madurai-tourism0.jpg', 1, 0, '2013-11-05', '0000-00-00', 0, 'round', 'roune', 'Family,Corporate'),
(19, 'International Pack', 'Ravi', '', '', '', '', '', 1200, 1200, 1200, 'madu_sky8.jpg', 1, 0, '2013-11-05', '0000-00-00', 0, '', '', 'Honymoon,Corporate'),
(20, 'International Pack', 'SS', '', '', '', '', '', 1200, 1200, 1200, '0', 1, 0, '2013-11-05', '0000-00-00', 0, '', '', 'Family,Honymoon');

-- --------------------------------------------------------

--
-- Table structure for table `package_image`
--

CREATE TABLE IF NOT EXISTS `package_image` (
  `pack_id` int(11) NOT NULL,
  `pack_image` varchar(256) NOT NULL,
  `cdate` date NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `package_image`
--

INSERT INTO `package_image` (`pack_id`, `pack_image`, `cdate`) VALUES
(11, '../user_image/oom_logo_ver11.png', '2013-09-28'),
(11, 'user_image/airtel1.png', '2013-09-28'),
(4, 'user_image/Europe2.jpg', '2013-09-21'),
(4, 'user_image/Europe3.jpg', '2013-09-21'),
(4, 'user_image/Europe4.jpg', '2013-09-21'),
(4, 'user_image/Europe5.jpg', '2013-09-21'),
(4, 'user_image/Europe6.jpg', '2013-09-21'),
(5, 'user_image/Malaysia2.jpg', '2013-09-21'),
(5, 'user_image/Malaysia3.jpg', '2013-09-21'),
(6, 'user_image/singapore1.jpg', '2013-09-21'),
(6, 'user_image/singapore2.jpg', '2013-09-21'),
(8, 'user_image/singapore4.jpg', '2013-09-21'),
(8, 'user_image/singapore6.jpg', '2013-09-21'),
(15, '../user_image/images.jpg', '2013-10-30'),
(13, '../user_image/Chrysanthemum.jpg', '0000-00-00'),
(13, '../user_image/Desert.jpg', '0000-00-00'),
(15, '../user_image/madu_sky.jpg', '2013-10-30'),
(15, '../user_image/madurai-thirumalai-nayakar-mahal-temple-meenakshi-amman-towers-588900.jpg', '2013-10-30'),
(15, '../user_image/madurai-tourism.jpg', '2013-10-30'),
(16, 'madu_sky0.jpg', '2013-11-05'),
(16, 'madurai-meenakshi-amman-temple-at-dark-0.jpg', '2013-11-05'),
(0, 'madurai-meenakshi-amman-temple-at-dark-1.jpg', '2013-11-05'),
(0, 'madu_sky1.jpg', '2013-11-05'),
(18, 'madurai-meenakshi-amman-temple-at-dark-2.jpg', '2013-11-05');

-- --------------------------------------------------------

--
-- Table structure for table `payment`
--

CREATE TABLE IF NOT EXISTS `payment` (
  `payment_id` int(8) NOT NULL AUTO_INCREMENT,
  `user_id` int(8) NOT NULL,
  `credit` decimal(10,2) NOT NULL,
  `debit` decimal(10,2) NOT NULL,
  `balance` decimal(10,2) NOT NULL,
  `cdate` datetime NOT NULL,
  `comments` text NOT NULL,
  `invoice_id` int(8) NOT NULL,
  `admin_id` int(4) NOT NULL,
  PRIMARY KEY (`payment_id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=79 ;

--
-- Dumping data for table `payment`
--

INSERT INTO `payment` (`payment_id`, `user_id`, `credit`, `debit`, `balance`, `cdate`, `comments`, `invoice_id`, `admin_id`) VALUES
(1, 1, '20000.00', '5000.00', '15000.00', '2013-09-24 17:01:10', 'this is transaction test', 0, 1),
(2, 1, '5000.00', '0.00', '20000.00', '2013-09-25 10:50:24', '', 0, 1),
(3, 1, '0.00', '2000.00', '18000.00', '2013-09-25 10:58:26', '', 0, 1),
(4, 1, '2000.00', '0.00', '20000.00', '2013-09-25 10:59:25', '', 0, 1),
(5, 1, '0.00', '3000.00', '17000.00', '2013-09-25 10:59:38', '', 0, 1),
(6, 6, '500000.00', '0.00', '500000.00', '2013-10-18 10:47:10', 'Bank Deposit', 0, 1),
(7, 1, '13000.00', '0.00', '30000.00', '2013-10-18 12:37:45', '', 0, 1),
(8, 6, '0.00', '172500.00', '327500.00', '2013-10-23 00:00:00', ' Singapore (4 Nights & 5 Days) ', 1, 0),
(9, 6, '0.00', '59800.00', '267700.00', '2013-10-23 00:00:00', ' Singapore (4 Nights & 5 Days) ', 2, 0),
(10, 7, '500000.00', '0.00', '500000.00', '2013-10-28 14:11:35', 'Bank Deposit', 0, 1),
(11, 7, '0.00', '172500.00', '327500.00', '2013-10-28 00:00:00', ' Singapore (4 Nights & 5 Days) ', 3, 0),
(12, 6, '0.00', '148000.00', '119700.00', '2013-10-30 00:00:00', 'Malaysia & Singapore (6 Nights & 7 Days) ', 4, 0),
(13, 6, '0.00', '14500.00', '105200.00', '2013-10-30 00:00:00', 'Tamil Nadu ', 5, 0),
(14, 6, '200000.00', '0.00', '305200.00', '2013-10-30 14:05:01', '', 0, 1),
(15, 6, '0.00', '10000.00', '295200.00', '2013-11-08 00:00:00', 'Tamil Nadu ', 6, 0),
(16, 6, '0.00', '10000.00', '285200.00', '2013-11-11 00:00:00', '', 6, 0),
(17, 6, '0.00', '10000.00', '275200.00', '2013-11-11 00:00:00', '', 6, 0),
(18, 6, '0.00', '10000.00', '265200.00', '2013-11-11 00:00:00', '', 6, 0),
(19, 6, '0.00', '10000.00', '265200.00', '2013-11-11 00:00:00', '', 6, 0),
(20, 6, '0.00', '10000.00', '245200.00', '2013-11-11 00:00:00', '', 6, 0),
(21, 6, '0.00', '10000.00', '235200.00', '2013-11-11 00:00:00', '', 6, 0),
(22, 6, '0.00', '10000.00', '225200.00', '2013-11-11 00:00:00', '', 6, 0),
(23, 6, '0.00', '14500.00', '210700.00', '2013-11-11 00:00:00', '', 5, 0),
(24, 6, '0.00', '14500.00', '196200.00', '2013-11-11 00:00:00', '', 5, 0),
(25, 6, '0.00', '148000.00', '48200.00', '2013-11-11 00:00:00', '', 4, 0),
(26, 6, '0.00', '5000.00', '43200.00', '2013-11-12 00:00:00', '', 10, 0),
(27, 6, '0.00', '5000.00', '38200.00', '2013-11-12 00:00:00', '', 11, 0),
(28, 6, '0.00', '5000.00', '33200.00', '2013-11-12 00:00:00', '', 12, 0),
(29, 6, '0.00', '5000.00', '28200.00', '2013-11-12 00:00:00', '', 12, 0),
(30, 6, '0.00', '5000.00', '23200.00', '2013-11-12 00:00:00', 'Tamil Nadu ', 12, 0),
(31, 0, '5000.00', '0.00', '5000.00', '0000-00-00 00:00:00', 'Cancellation of invoice 12 (Indian Tour)', 12, 0),
(32, 0, '5000.00', '0.00', '10000.00', '0000-00-00 00:00:00', 'Cancellation of invoice 11 (Indian Tour)', 11, 0),
(33, 6, '5000.00', '0.00', '28200.00', '2013-11-13 00:00:00', 'Cancellation of invoice 10 (Indian Tour)', 10, 0),
(34, 6, '10000.00', '0.00', '38200.00', '2013-11-13 00:00:00', 'Cancellation of invoice 6 ()', 6, 0),
(35, 6, '148000.00', '0.00', '186200.00', '2013-11-14 00:00:00', 'Cancellation of invoice 4 ()', 4, 0),
(36, 6, '0.00', '5000.00', '181200.00', '2013-11-18 00:00:00', 'Tamil Nadu ', 13, 0),
(37, 6, '5000.00', '0.00', '186200.00', '2013-11-18 00:00:00', 'Cancellation of invoice 13 (Indian Tour)', 13, 0),
(38, 6, '14500.00', '0.00', '200700.00', '2013-11-20 00:00:00', 'Cancellation of invoice 5 ()', 5, 0),
(39, 6, '0.00', '196000.00', '4700.00', '2013-11-20 00:00:00', '', 14, 0),
(40, 6, '0.00', '1000.00', '3700.00', '2013-11-22 00:00:00', 'Tamil Nadu   Advance Amount paid', 15, 0),
(41, 6, '0.00', '1000.00', '2700.00', '2013-11-22 00:00:00', '', 9, 0),
(42, 6, '0.00', '1000.00', '1700.00', '2013-11-22 00:00:00', '', 9, 0),
(43, 6, '0.00', '1000.00', '700.00', '2013-11-22 00:00:00', '', 9, 0),
(44, 6, '150000.00', '0.00', '150700.00', '2013-11-22 14:14:33', 'Bank Deposit', 0, 1),
(45, 6, '0.00', '73000.00', '77700.00', '2013-11-22 00:00:00', 'Malaysia & Singapore (6 Nights & 7 Days)  Full  Amount paid', 9, 0),
(46, 6, '0.00', '4500.00', '73200.00', '2013-11-22 00:00:00', 'Tamil Nadu   Half Amount paid', 16, 0),
(47, 6, '0.00', '1000.00', '72200.00', '2013-11-22 00:00:00', 'Tamil Nadu   Advance Amount paid', 17, 0),
(48, 6, '0.00', '1000.00', '71200.00', '2013-11-22 00:00:00', 'Tamil Nadu   Advance Amount paid', 17, 0),
(49, 6, '0.00', '4500.00', '66700.00', '2013-11-22 00:00:00', 'Tamil Nadu   Half Amount paid', 21, 0),
(50, 6, '0.00', '5000.00', '61700.00', '2013-11-22 00:00:00', 'Tamil Nadu   Half Amount paid', 21, 0),
(51, 6, '0.00', '5000.00', '56700.00', '2013-11-22 00:00:00', 'Tamil Nadu   Half Amount paid', 21, 0),
(52, 6, '0.00', '5000.00', '51700.00', '2013-11-22 00:00:00', 'Tamil Nadu   Half Amount paid', 21, 0),
(53, 6, '0.00', '5000.00', '46700.00', '2013-11-22 00:00:00', 'Tamil Nadu   Half Amount paid', 21, 0),
(54, 6, '0.00', '5000.00', '41700.00', '2013-11-22 00:00:00', 'Tamil Nadu   Half Amount paid', 21, 0),
(55, 6, '0.00', '5000.00', '36700.00', '2013-11-22 00:00:00', 'Tamil Nadu   Half Amount paid', 21, 0),
(56, 6, '0.00', '5000.00', '31700.00', '2013-11-22 00:00:00', 'Tamil Nadu   Half Amount paid', 21, 0),
(57, 6, '0.00', '5000.00', '31700.00', '2013-11-22 00:00:00', 'Tamil Nadu Half Amount paid', 21, 0),
(58, 6, '0.00', '1000.00', '25700.00', '2013-11-22 00:00:00', 'Tamil Nadu   Advance Amount paid', 20, 0),
(59, 6, '0.00', '5000.00', '20700.00', '2013-11-22 00:00:00', 'Tamil Nadu  Full  Amount paid', 19, 0),
(60, 6, '0.00', '10000.00', '10700.00', '2013-11-25 00:00:00', 'Tamil Nadu  Full  Amount paid', 22, 0),
(61, 6, '0.00', '1000.00', '9700.00', '2013-11-25 00:00:00', 'Tamil Nadu   Advance Amount paid', 23, 0),
(62, 6, '0.00', '5000.00', '4700.00', '2013-11-25 00:00:00', 'Tamil Nadu   Half Amount paid', 24, 0),
(63, 6, '50000.00', '0.00', '54700.00', '2013-11-25 13:58:08', 'Bank Deposit', 0, 1),
(64, 6, '0.00', '9000.00', '45700.00', '2013-11-25 00:00:00', 'Tamil Nadu  Full  Amount paid', 25, 0),
(65, 6, '0.00', '2500.00', '43200.00', '2013-11-25 00:00:00', 'Tamil Nadu   Half Amount paid', 17, 0),
(66, 6, '0.00', '1000.00', '42200.00', '2013-11-25 00:00:00', ' Singapore (4 Nights & 5 Days)   Advance Amount paid', 18, 0),
(67, 6, '0.00', '1000.00', '41200.00', '2013-11-25 00:00:00', 'Tamil Nadu   Advance Amount paid', 26, 0),
(68, 6, '0.00', '5000.00', '36200.00', '2013-11-25 00:00:00', 'Tamil Nadu   Half Amount paid', 27, 0),
(69, 6, '0.00', '0.00', '31700.00', '2013-11-26 00:00:00', 'Tamil Nadu [Invoice #.24] Amount4500', 24, 0),
(70, 6, '0.00', '4000.00', '32200.00', '2013-11-26 00:00:00', 'Tamil Nadu [Invoice #.26] Amount4000', 26, 0),
(71, 6, '0.00', '5000.00', '27200.00', '2013-11-26 00:00:00', 'Tamil Nadu [Invoice #.26] Amount5000', 26, 0),
(72, 6, '0.00', '1000.00', '26200.00', '2013-11-26 00:00:00', 'Tamil Nadu [Invoice #.23] Amount1000', 23, 0),
(73, 6, '0.00', '8000.00', '18200.00', '2013-11-26 00:00:00', 'Tamil Nadu [Invoice #.23] Amount8000', 23, 0),
(74, 6, '0.00', '1000.00', '17200.00', '2013-11-26 00:00:00', 'Tamil Nadu   Advance Amount paid', 28, 0),
(75, 6, '0.00', '5000.00', '12200.00', '2013-11-26 00:00:00', 'Tamil Nadu   Half Amount paid', 29, 0),
(76, 6, '0.00', '9000.00', '3200.00', '2013-11-26 00:00:00', 'Tamil Nadu  Full  Amount paid', 30, 0),
(77, 6, '5000.00', '0.00', '8200.00', '2013-11-26 13:05:28', 'Bank Deposit', 0, 1),
(78, 6, '0.00', '6000.00', '2200.00', '2013-11-26 00:00:00', 'Tamil Nadu [Invoice #.28] Amount6000', 28, 0);

-- --------------------------------------------------------

--
-- Table structure for table `setting`
--

CREATE TABLE IF NOT EXISTS `setting` (
  `sitename` varchar(100) NOT NULL,
  `domainname` varchar(100) NOT NULL,
  `titlename` varchar(100) NOT NULL,
  `logo` varchar(200) NOT NULL,
  `subtitle` varchar(200) NOT NULL,
  `metacontent` varchar(500) NOT NULL,
  `metakeyword` varchar(500) NOT NULL,
  `searchbuttoncap` varchar(100) NOT NULL,
  `address` varchar(500) NOT NULL,
  `email` varchar(200) NOT NULL,
  `phone` varchar(30) NOT NULL,
  `website` varchar(100) NOT NULL,
  `fax` varchar(15) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `setting`
--

INSERT INTO `setting` (`sitename`, `domainname`, `titlename`, `logo`, `subtitle`, `metacontent`, `metakeyword`, `searchbuttoncap`, `address`, `email`, `phone`, `website`, `fax`) VALUES
('You go Trip', 'www.yougotrip.com', 'You go Trip', 'image/logo.png', 'Tour Package', 'yougotrip, tour', 'yougotrip, tour', 'Search', '29,30 DB Road <br> RS Puram <br> Coimbatore<br> 641002', 'info@yougotrip.com', '04222300697', 'yougotrip.com', '04222300697');

-- --------------------------------------------------------

--
-- Table structure for table `social`
--

CREATE TABLE IF NOT EXISTS `social` (
  `callus` varchar(1024) NOT NULL,
  `feed` varchar(1024) NOT NULL,
  `facebook` varchar(1024) NOT NULL,
  `twitter` varchar(1024) NOT NULL,
  `googleplus` varchar(1024) NOT NULL,
  `pinterest` varchar(1024) NOT NULL,
  `linkedin` varchar(1024) NOT NULL,
  `vimeo` varchar(1024) NOT NULL,
  `youtube` varchar(1024) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `social`
--

INSERT INTO `social` (`callus`, `feed`, `facebook`, `twitter`, `googleplus`, `pinterest`, `linkedin`, `vimeo`, `youtube`) VALUES
('8015010697 ', 'Feed1', 'facebook1', 'twtter1', 'google plus1', 'preiont1', 'linked1', 'vimeo1', 'youtube1');

-- --------------------------------------------------------

--
-- Table structure for table `theme_master`
--

CREATE TABLE IF NOT EXISTS `theme_master` (
  `theme_id` int(11) NOT NULL AUTO_INCREMENT,
  `theme_desc` varchar(100) NOT NULL,
  PRIMARY KEY (`theme_id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- Dumping data for table `theme_master`
--

INSERT INTO `theme_master` (`theme_id`, `theme_desc`) VALUES
(1, 'Family'),
(2, 'Honymoon'),
(3, 'Corporate');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE IF NOT EXISTS `users` (
  `user_id` int(8) NOT NULL AUTO_INCREMENT,
  `title` varchar(10) NOT NULL,
  `firstname` varchar(30) NOT NULL,
  `lastname` varchar(30) NOT NULL,
  `email` varchar(50) NOT NULL,
  `password` varchar(200) NOT NULL,
  `address` text NOT NULL,
  `place` varchar(30) NOT NULL,
  `state` varchar(30) NOT NULL,
  `country` varchar(30) NOT NULL,
  `pincode` int(6) NOT NULL,
  `phone` varchar(15) NOT NULL,
  `mobile` varchar(10) NOT NULL,
  `mobile2` varchar(10) NOT NULL,
  `cdate` datetime NOT NULL,
  `mdate` datetime NOT NULL,
  `status` int(3) NOT NULL DEFAULT '1',
  `agent_id` int(11) NOT NULL,
  PRIMARY KEY (`user_id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=8 ;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`user_id`, `title`, `firstname`, `lastname`, `email`, `password`, `address`, `place`, `state`, `country`, `pincode`, `phone`, `mobile`, `mobile2`, `cdate`, `mdate`, `status`, `agent_id`) VALUES
(1, 'Mr', 'yuavaraj', 'mu', 'box@gmail.com', '1a1dc91c907325c69271ddf0c944bc72', 'natham', 'avinashi', 'tamil', 'india', 641654, '0422 233456', '2147483647', '8122715049', '2013-09-24 15:14:15', '2013-10-18 12:37:45', 1, 0),
(6, 'Mr', 'Ravindran', 'C', 'cravindr@gmail.com', 'f8d078086010b1275cabe18979ad7199', '29,30DB Road RS PuramCoimbatore', 'Coimbatore', 'Tamil Nadu', 'India', 641002, '04233210982', '9944416123', '9787616123', '2013-10-15 17:51:03', '2013-11-26 13:05:28', 1, 0),
(7, 'Mr.', 'user', 'name', 'user@user.com', 'ee11cbb19052e40b07aac0ca060c23ee', 'test', 'coimbatore', 'Tamil Nadu', 'India', 641002, '04223210982', '9944461123', '', '2013-10-28 14:09:19', '2013-10-28 14:11:35', 1, 0);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
