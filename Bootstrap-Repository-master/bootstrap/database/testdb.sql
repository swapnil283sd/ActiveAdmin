-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 03, 2018 at 07:21 AM
-- Server version: 10.1.30-MariaDB
-- PHP Version: 5.6.33

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `testdb`
--

-- --------------------------------------------------------

--
-- Table structure for table `countries`
--

CREATE TABLE `countries` (
  `srno` int(3) NOT NULL,
  `country_code` varchar(3) NOT NULL,
  `country_name` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `countries`
--

INSERT INTO `countries` (`srno`, `country_code`, `country_name`) VALUES
(1, 'AF', 'Afghanistan'),
(2, 'AL', 'Albania'),
(3, 'DZ', 'Algeria'),
(4, 'DS', 'American Samoa'),
(5, 'AD', 'Andorra'),
(6, 'AO', 'Angola'),
(7, 'AI', 'Anguilla'),
(8, 'AQ', 'Antarctica'),
(9, 'AG', 'Antigua and Bar'),
(10, 'AR', 'Argentina'),
(11, 'AM', 'Armenia'),
(12, 'AW', 'Aruba'),
(13, 'AU', 'Australia'),
(14, 'AT', 'Austria'),
(15, 'AZ', 'Azerbaijan'),
(16, 'BS', 'Bahamas'),
(17, 'BH', 'Bahrain'),
(18, 'BD', 'Bangladesh'),
(19, 'BB', 'Barbados'),
(20, 'BY', 'Belarus'),
(21, 'BE', 'Belgium'),
(22, 'BZ', 'Belize'),
(23, 'BJ', 'Benin'),
(24, 'BM', 'Bermuda'),
(25, 'BT', 'Bhutan'),
(26, 'BO', 'Bolivia'),
(27, 'BA', 'Bosnia and Herz'),
(28, 'BW', 'Botswana'),
(29, 'BV', 'Bouvet Island'),
(30, 'BR', 'Brazil'),
(31, 'IO', 'British Indian '),
(32, 'BN', 'Brunei Darussal'),
(33, 'BG', 'Bulgaria'),
(34, 'BF', 'Burkina Faso'),
(35, 'BI', 'Burundi'),
(36, 'KH', 'Cambodia'),
(37, 'CM', 'Cameroon'),
(38, 'CA', 'Canada'),
(39, 'CV', 'Cape Verde'),
(40, 'KY', 'Cayman Islands'),
(41, 'CF', 'Central African'),
(42, 'TD', 'Chad'),
(43, 'CL', 'Chile'),
(44, 'CN', 'China'),
(45, 'CX', 'Christmas Islan'),
(46, 'CC', 'Cocos (Keeling)'),
(47, 'CO', 'Colombia'),
(48, 'KM', 'Comoros'),
(49, 'CG', 'Congo'),
(50, 'CK', 'Cook Islands'),
(51, 'CR', 'Costa Rica'),
(52, 'HR', 'Croatia (Hrvats'),
(53, 'CU', 'Cuba'),
(54, 'CY', 'Cyprus'),
(55, 'CZ', 'Czech Republic'),
(56, 'DK', 'Denmark'),
(57, 'DJ', 'Djibouti'),
(58, 'DM', 'Dominica'),
(59, 'DO', 'Dominican Repub'),
(60, 'TP', 'East Timor'),
(61, 'EC', 'Ecuador'),
(62, 'EG', 'Egypt'),
(63, 'SV', 'El Salvador'),
(64, 'GQ', 'Equatorial Guin'),
(65, 'ER', 'Eritrea'),
(66, 'EE', 'Estonia'),
(67, 'ET', 'Ethiopia'),
(68, 'FK', 'Falkland Island'),
(69, 'FO', 'Faroe Islands'),
(70, 'FJ', 'Fiji'),
(71, 'FI', 'Finland'),
(72, 'FR', 'France'),
(73, 'FX', 'France, Metropo'),
(74, 'GF', 'French Guiana'),
(75, 'PF', 'French Polynesi'),
(76, 'TF', 'French Southern'),
(77, 'GA', 'Gabon'),
(78, 'GM', 'Gambia'),
(79, 'GE', 'Georgia'),
(80, 'DE', 'Germany'),
(81, 'GH', 'Ghana'),
(82, 'GI', 'Gibraltar'),
(83, 'GK', 'Guernsey'),
(84, 'GR', 'Greece'),
(85, 'GL', 'Greenland'),
(86, 'GD', 'Grenada'),
(87, 'GP', 'Guadeloupe'),
(88, 'GU', 'Guam'),
(89, 'GT', 'Guatemala'),
(90, 'GN', 'Guinea'),
(91, 'GW', 'Guinea-Bissau'),
(92, 'GY', 'Guyana'),
(93, 'HT', 'Haiti'),
(94, 'HM', 'Heard and Mc Do'),
(95, 'HN', 'Honduras'),
(96, 'HK', 'Hong Kong'),
(97, 'HU', 'Hungary'),
(98, 'IS', 'Iceland'),
(99, 'IN', 'India'),
(100, 'IM', 'Isle of Man'),
(101, 'ID', 'Indonesia'),
(102, 'IR', 'Iran (Islamic R'),
(103, 'IQ', 'Iraq'),
(104, 'IE', 'Ireland'),
(105, 'IL', 'Israel'),
(106, 'IT', 'Italy'),
(107, 'CI', 'Ivory Coast'),
(108, 'JE', 'Jersey'),
(109, 'JM', 'Jamaica'),
(110, 'JP', 'Japan'),
(111, 'JO', 'Jordan'),
(112, 'KZ', 'Kazakhstan'),
(113, 'KE', 'Kenya'),
(114, 'KI', 'Kiribati'),
(115, 'KP', 'Korea, Democrat'),
(116, 'KR', 'Korea, Republic'),
(117, 'XK', 'Kosovo'),
(118, 'KW', 'Kuwait'),
(119, 'KG', 'Kyrgyzstan'),
(120, 'LA', 'Lao People\'s De'),
(121, 'LV', 'Latvia'),
(122, 'LB', 'Lebanon'),
(123, 'LS', 'Lesotho'),
(124, 'LR', 'Liberia'),
(125, 'LY', 'Libyan Arab Jam'),
(126, 'LI', 'Liechtenstein'),
(127, 'LT', 'Lithuania'),
(128, 'LU', 'Luxembourg'),
(129, 'MO', 'Macau'),
(130, 'MK', 'Macedonia'),
(131, 'MG', 'Madagascar'),
(132, 'MW', 'Malawi'),
(133, 'MY', 'Malaysia'),
(134, 'MV', 'Maldives'),
(135, 'ML', 'Mali'),
(136, 'MT', 'Malta'),
(137, 'MH', 'Marshall Island'),
(138, 'MQ', 'Martinique'),
(139, 'MR', 'Mauritania'),
(140, 'MU', 'Mauritius'),
(141, 'TY', 'Mayotte'),
(142, 'MX', 'Mexico'),
(143, 'FM', 'Micronesia, Fed'),
(144, 'MD', 'Moldova, Republ'),
(145, 'MC', 'Monaco'),
(146, 'MN', 'Mongolia'),
(147, 'ME', 'Montenegro'),
(148, 'MS', 'Montserrat'),
(149, 'MA', 'Morocco'),
(150, 'MZ', 'Mozambique'),
(151, 'MM', 'Myanmar'),
(152, 'NA', 'Namibia'),
(153, 'NR', 'Nauru'),
(154, 'NP', 'Nepal'),
(155, 'NL', 'Netherlands'),
(156, 'AN', 'Netherlands Ant'),
(157, 'NC', 'New Caledonia'),
(158, 'NZ', 'New Zealand'),
(159, 'NI', 'Nicaragua'),
(160, 'NE', 'Niger'),
(161, 'NG', 'Nigeria'),
(162, 'NU', 'Niue'),
(163, 'NF', 'Norfolk Island'),
(164, 'MP', 'Northern Marian'),
(165, 'NO', 'Norway'),
(166, 'OM', 'Oman'),
(167, 'PK', 'Pakistan'),
(168, 'PW', 'Palau'),
(169, 'PS', 'Palestine'),
(170, 'PA', 'Panama'),
(171, 'PG', 'Papua New Guine'),
(172, 'PY', 'Paraguay'),
(173, 'PE', 'Peru'),
(174, 'PH', 'Philippines'),
(175, 'PN', 'Pitcairn'),
(176, 'PL', 'Poland'),
(177, 'PT', 'Portugal'),
(178, 'PR', 'Puerto Rico'),
(179, 'QA', 'Qatar'),
(180, 'RE', 'Reunion'),
(181, 'RO', 'Romania'),
(182, 'RU', 'Russian Federat'),
(183, 'RW', 'Rwanda'),
(184, 'KN', 'Saint Kitts and'),
(185, 'LC', 'Saint Lucia'),
(186, 'VC', 'Saint Vincent a'),
(187, 'WS', 'Samoa'),
(188, 'SM', 'San Marino'),
(189, 'ST', 'Sao Tome and Pr'),
(190, 'SA', 'Saudi Arabia'),
(191, 'SN', 'Senegal'),
(192, 'RS', 'Serbia'),
(193, 'SC', 'Seychelles'),
(194, 'SL', 'Sierra Leone'),
(195, 'SG', 'Singapore'),
(196, 'SK', 'Slovakia'),
(197, 'SI', 'Slovenia'),
(198, 'SB', 'Solomon Islands'),
(199, 'SO', 'Somalia'),
(200, 'ZA', 'South Africa'),
(201, 'GS', 'South Georgia S'),
(202, 'ES', 'Spain'),
(203, 'LK', 'Sri Lanka'),
(204, 'SH', 'St. Helena'),
(205, 'PM', 'St. Pierre and '),
(206, 'SD', 'Sudan'),
(207, 'SR', 'Suriname'),
(208, 'SJ', 'Svalbard and Ja'),
(209, 'SZ', 'Swaziland'),
(210, 'SE', 'Sweden'),
(211, 'CH', 'Switzerland'),
(212, 'SY', 'Syrian Arab Rep'),
(213, 'TW', 'Taiwan'),
(214, 'TJ', 'Tajikistan'),
(215, 'TZ', 'Tanzania, Unite'),
(216, 'TH', 'Thailand'),
(217, 'TG', 'Togo'),
(218, 'TK', 'Tokelau'),
(219, 'TO', 'Tonga'),
(220, 'TT', 'Trinidad and To'),
(221, 'TN', 'Tunisia'),
(222, 'TR', 'Turkey'),
(223, 'TM', 'Turkmenistan'),
(224, 'TC', 'Turks and Caico'),
(225, 'TV', 'Tuvalu'),
(226, 'UG', 'Uganda'),
(227, 'UA', 'Ukraine'),
(228, 'AE', 'United Arab Emi'),
(229, 'GB', 'United Kingdom'),
(230, 'US', 'United States'),
(231, 'UM', 'United States m'),
(232, 'UY', 'Uruguay'),
(233, 'UZ', 'Uzbekistan'),
(234, 'VU', 'Vanuatu'),
(235, 'VA', 'Vatican City St'),
(236, 'VE', 'Venezuela'),
(237, 'VN', 'Vietnam'),
(238, 'VG', 'Virgin Islands '),
(239, 'VI', 'Virgin Islands '),
(240, 'WF', 'Wallis and Futu'),
(241, 'EH', 'Western Sahara'),
(242, 'YE', 'Yemen'),
(243, 'ZR', 'Zaire'),
(244, 'ZM', 'Zambia'),
(245, 'ZW', 'Zimbabwe');

-- --------------------------------------------------------

--
-- Table structure for table `employee`
--

CREATE TABLE `employee` (
  `srno` int(5) NOT NULL,
  `emp_id` int(5) NOT NULL,
  `emp_name` varchar(20) NOT NULL,
  `emp_email` varchar(40) NOT NULL,
  `emp_mobileno` varchar(10) NOT NULL,
  `emp_password` varchar(8) NOT NULL,
  `query_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `employee`
--

INSERT INTO `employee` (`srno`, `emp_id`, `emp_name`, `emp_email`, `emp_mobileno`, `emp_password`, `query_id`) VALUES
(3, 10110, 'umesh', 'umeshc@ec-mobility.biz', '7875496971', '1234', 100);

-- --------------------------------------------------------

--
-- Table structure for table `flight_book`
--

CREATE TABLE `flight_book` (
  `srno` int(5) NOT NULL,
  `emp_name` varchar(40) NOT NULL,
  `admin_name` varchar(40) NOT NULL,
  `flight_origin` varchar(40) NOT NULL,
  `flight_desctination` varchar(40) NOT NULL,
  `flight_start_date` varchar(40) NOT NULL,
  `flight_end_date` varchar(40) NOT NULL,
  `flight_on_person` varchar(40) NOT NULL,
  `flight_password_number` varchar(20) NOT NULL,
  `flight_visa_status` int(1) NOT NULL,
  `query_id` int(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `hotel_book`
--

CREATE TABLE `hotel_book` (
  `srno` int(2) NOT NULL,
  `emp_name` varchar(40) NOT NULL,
  `admin_name` varchar(40) NOT NULL,
  `hotel_city` varchar(40) NOT NULL,
  `hotel_pre1` varchar(40) DEFAULT NULL,
  `hotel_pre2` varchar(40) DEFAULT NULL,
  `hotel_checkin` varchar(15) NOT NULL,
  `hotel_checkout` varchar(15) NOT NULL,
  `hotel_guestname` varchar(40) NOT NULL,
  `hotel_member` int(2) NOT NULL,
  `hotel_roomcount` int(2) NOT NULL,
  `query_id` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `hotel_book`
--

INSERT INTO `hotel_book` (`srno`, `emp_name`, `admin_name`, `hotel_city`, `hotel_pre1`, `hotel_pre2`, `hotel_checkin`, `hotel_checkout`, `hotel_guestname`, `hotel_member`, `hotel_roomcount`, `query_id`) VALUES
(3, 'umesh', 'Omkar Deshpande', 'NAGPUR', 'ss', 'ss', '04/17/2018', '04/30/2018', 'Umesh Charpe', 1, 1, 'HO-105'),
(4, 'umesh', 'Omkar Deshpande', 'AMNER', 'sd', 'ss', '04/17/2018', '04/30/2018', 'Umesh Charpe', 1, 1, 'HO-106'),
(5, 'umesh', 'Omkar Deshpande', 'NAGPUR', '', '', '04/17/2018', '04/25/2018', 'umesh', 1, 1, 'HO-109'),
(6, 'umesh', 'Omkar Deshpande', 'NAGPUR', '', '', '04/17/2018', '04/25/2018', 'umesh', 1, 1, 'HO-109'),
(7, 'umesh', 'Omkar Deshpande', '', '', '', '', '', '', 0, 0, 'HO-109'),
(8, 'umesh', 'Omkar Deshpande', '', '', '', '', '', '', 0, 0, 'HO-109'),
(9, 'umesh', 'Omkar Deshpande', '', '', '', '', '', '', 0, 0, 'HO-109'),
(10, 'umesh', 'Omkar Deshpande', 'NAGPUR', '', '', '04/17/2018', '04/25/2018', 'umesh', 1, 1, 'HO-109'),
(11, 'umesh', 'Omkar Deshpande', 'NAGPUR', '', '', '', '', 'umesh', 0, 0, 'HO-110'),
(12, 'umesh', 'Omkar Deshpande', 'NAGPUR', '', '', '', '', 'umesh', 0, 0, 'HO-110'),
(13, 'umesh', 'Vaidya Sir', 'AMNER', '', '', '04/17/2018', '04/17/2018', 'Umesh Charpe', 1, 1, 'HO-111'),
(14, 'umesh', 'Vaidya Sir', 'AMNER', '', '', '04/17/2018', '04/17/2018', 'Umesh Charpe', 1, 1, 'HO-111'),
(15, 'umesh', 'Vaidya Sir', 'AMNER', '', '', '04/17/2018', '04/17/2018', 'Umesh Charpe', 1, 1, 'HO-111'),
(16, 'umesh', 'Omkar Deshpande', 'AURANGABAD', 'ff', 'ff', '04/03/2018', '04/11/2018', 'Umesh Charpe', 1, 1, 'HO-112'),
(17, 'umesh', 'Omkar Deshpande', 'NAGPUR', '', '', '04/10/2018', '04/10/2018', 'umesh', 1, 1, 'HO-112'),
(18, 'umesh', 'Omkar Deshpande', 'NAGPUR', '', '', '04/25/2018', '04/30/2018', 'umesh', 2, 1, 'HO-112'),
(19, 'umesh', 'Omkar Deshpande', 'AMNER', 'NULL', 'NULL', '04/09/2018', '04/24/2018', 'Umesh Charpe', 2, 2, 'HO-113'),
(20, 'umesh', 'Vaidya Sir', 'AURANGABAD', 'NULL', 'NULL', '03/04/2018', '17/04/2018', 'Umesh Charpe', 2, 2, 'HO-121');

-- --------------------------------------------------------

--
-- Table structure for table `lunch_book`
--

CREATE TABLE `lunch_book` (
  `srno` int(5) NOT NULL,
  `emp_name` varchar(40) NOT NULL,
  `admin_name` varchar(40) NOT NULL,
  `querie_id` varchar(10) NOT NULL,
  `lunch_category` varchar(15) NOT NULL,
  `lunch_date` varchar(15) NOT NULL,
  `lunch_member_count` int(2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `lunch_book`
--

INSERT INTO `lunch_book` (`srno`, `emp_name`, `admin_name`, `querie_id`, `lunch_category`, `lunch_date`, `lunch_member_count`) VALUES
(1, 'umesh', 'Vaidya Sir', 'LU-123', 'Non-Veg', '12/11/2018', 1),
(2, 'umesh', 'Vaidya Sir', 'LU-123', '', '', 0),
(3, 'umesh', 'Vaidya Sir', 'LU-123', '', '', 0);

-- --------------------------------------------------------

--
-- Table structure for table `queries`
--

CREATE TABLE `queries` (
  `srno` int(11) NOT NULL,
  `emp_name` varchar(40) NOT NULL,
  `emp_email` varchar(40) NOT NULL,
  `admin_name` varchar(40) NOT NULL,
  `request_details` varchar(150) NOT NULL,
  `request_date` varchar(15) NOT NULL,
  `request_time` varchar(10) NOT NULL,
  `status` int(11) NOT NULL,
  `query_id` varchar(6) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `queries`
--

INSERT INTO `queries` (`srno`, `emp_name`, `emp_email`, `admin_name`, `request_details`, `request_date`, `request_time`, `status`, `query_id`) VALUES
(51, 'umesh', 'umeshc@ec-mobility.biz', 'Sachin Kulkarni', 'Taxi Arragement', '2018-03-30', '15:37:50', 0, 'TA-51'),
(52, 'umesh', 'umeshc@ec-mobility.biz', 'Omkar Deshpande', 'Lunch Arragement For User', '2018-03-30', '15:38:01', 0, 'LU-52'),
(53, 'umesh', 'umeshc@ec-mobility.biz', 'Vaidya Sir', 'Lunch Arragement For User', '2018-03-30', '15:38:12', 0, 'LU-53'),
(54, 'umesh', 'umeshc@ec-mobility.biz', 'Sachin Kulkarni', 'Flight Ticket Booking Request', '2018-03-30', '15:38:20', 0, 'FL-54'),
(55, 'umesh', 'umeshc@ec-mobility.biz', 'Sachin Kulkarni', 'Flight Ticket Booking Request', '2018-03-30', '15:40:06', 0, 'FL-55'),
(56, 'umesh', 'umeshc@ec-mobility.biz', 'Sachin Kulkarni', 'hotel Booking Request', '2018-03-30', '17:13:55', 0, 'HO-56'),
(57, 'umesh', 'umeshc@ec-mobility.biz', 'Omkar Deshpande', 'Flight Ticket Booking Request', '2018-03-30', '17:26:34', 0, 'FL-57'),
(58, 'umesh', 'umeshc@ec-mobility.biz', 'Sachin Kulkarni', 'Flight Ticket Booking Request', '2018-03-30', '17:53:23', 0, 'FL-58'),
(59, 'umesh', 'umeshc@ec-mobility.biz', 'Vaidya Sir', 'hotel Booking Request', '2018-04-02', '09:35:13', 0, 'HO-59'),
(86, 'umesh', 'umeshc@ec-mobility.biz', 'Omkar Deshpande', 'hotel Booking Request', '2018-04-02', '11:16:33', 0, 'HO-86'),
(87, 'umesh', 'umeshc@ec-mobility.biz', 'Omkar Deshpande', 'Lunch Arragement For User', '2018-04-02', '11:20:59', 0, 'LU-87'),
(88, 'umesh', 'umeshc@ec-mobility.biz', 'Vaidya Sir', 'Taxi Arragement', '2018-04-02', '11:21:06', 0, 'TA-88'),
(89, 'umesh', 'umeshc@ec-mobility.biz', 'Vaidya Sir', 'VISA Request', '2018-04-02', '11:21:12', 0, 'VI-89'),
(90, 'umesh', 'umeshc@ec-mobility.biz', 'Omkar Deshpande', 'VISA Request', '2018-04-02', '11:21:24', 0, 'VI-90'),
(91, 'umesh', 'umeshc@ec-mobility.biz', 'Vaidya Sir', 'VISA Request', '2018-04-02', '11:21:49', 0, 'VI-91'),
(92, 'umesh', 'umeshc@ec-mobility.biz', 'Omkar Deshpande', 'hotel Booking Request', '2018-04-02', '11:24:40', 0, 'HO-92'),
(93, 'umesh', 'umeshc@ec-mobility.biz', 'Omkar Deshpande', 'hotel Booking Request', '2018-04-02', '11:36:46', 0, 'HO-93'),
(94, 'umesh', 'umeshc@ec-mobility.biz', 'Omkar Deshpande', 'hotel Booking Request', '2018-04-02', '11:45:06', 0, 'HO-94'),
(95, 'umesh', 'umeshc@ec-mobility.biz', 'Vaidya Sir', 'hotel Booking Request', '2018-04-02', '11:47:53', 0, 'HO-95'),
(97, 'umesh', 'umeshc@ec-mobility.biz', 'Vaidya Sir', 'hotel Booking Request', '2018-04-02', '11:50:51', 0, 'HO-97'),
(98, 'umesh', 'umeshc@ec-mobility.biz', 'Omkar Deshpande', 'VISA Request', '2018-04-02', '12:37:22', 0, 'VI-98'),
(99, 'umesh', 'umeshc@ec-mobility.biz', 'Vaidya Sir', 'Lunch Arragement For User', '2018-04-02', '12:37:51', 0, 'LU-99'),
(100, 'umesh', 'umeshc@ec-mobility.biz', 'Vaidya Sir', 'Lunch Arragement For User', '2018-04-02', '14:13:00', 0, 'LU-100'),
(101, 'umesh', 'umeshc@ec-mobility.biz', 'Vaidya Sir', 'hotel Booking Request', '2018-04-02', '14:35:52', 0, ''),
(102, 'umesh', 'umeshc@ec-mobility.biz', 'Sachin Kulkarni', 'hotel Booking Request', '2018-04-02', '14:46:00', 0, ''),
(103, 'umesh', 'umeshc@ec-mobility.biz', 'Omkar Deshpande', 'hotel Booking Request', '2018-04-02', '14:47:05', 0, 'HO-103'),
(104, 'umesh', 'umeshc@ec-mobility.biz', 'Omkar Deshpande', 'hotel Booking Request', '2018-04-02', '14:48:33', 0, 'HO-104'),
(105, 'umesh', 'umeshc@ec-mobility.biz', 'Omkar Deshpande', 'hotel Booking Request', '2018-04-02', '14:51:01', 0, 'HO-105'),
(106, 'umesh', 'umeshc@ec-mobility.biz', 'Omkar Deshpande', 'hotel Booking Request', '2018-04-02', '14:59:37', 0, 'HO-106'),
(107, 'umesh', 'umeshc@ec-mobility.biz', 'Sachin Kulkarni', 'hotel Booking Request', '2018-04-02', '15:10:16', 0, 'HO-107'),
(108, 'umesh', 'umeshc@ec-mobility.biz', 'Omkar Deshpande', 'hotel Booking Request', '2018-04-02', '15:11:35', 0, 'HO-108'),
(109, 'umesh', 'umeshc@ec-mobility.biz', 'Omkar Deshpande', 'hotel Booking Request', '2018-04-02', '15:13:18', 0, 'HO-109'),
(110, 'umesh', 'umeshc@ec-mobility.biz', 'Omkar Deshpande', 'hotel Booking Request', '2018-04-02', '15:26:13', 0, 'HO-110'),
(111, 'umesh', 'umeshc@ec-mobility.biz', 'Vaidya Sir', 'hotel Booking Request', '2018-04-02', '15:34:12', 0, 'HO-111'),
(112, 'umesh', 'umeshc@ec-mobility.biz', 'Omkar Deshpande', 'hotel Booking Request', '2018-04-02', '15:37:58', 0, 'HO-112'),
(113, 'umesh', 'umeshc@ec-mobility.biz', 'Omkar Deshpande', 'hotel Booking Request', '2018-04-02', '15:46:18', 0, 'HO-113'),
(114, 'umesh', 'umeshc@ec-mobility.biz', 'Vaidya Sir', 'VISA Request', '2018-04-02', '15:47:49', 0, 'VI-114'),
(115, 'umesh', 'umeshc@ec-mobility.biz', 'Omkar Deshpande', 'VISA Request', '2018-04-02', '16:48:38', 0, 'VI-115'),
(116, 'umesh', 'umeshc@ec-mobility.biz', 'Vaidya Sir', 'VISA Request', '2018-04-02', '16:49:22', 0, 'VI-116'),
(117, 'umesh', 'umeshc@ec-mobility.biz', 'Vaidya Sir', 'VISA Request', '2018-04-02', '16:56:39', 0, 'VI-117'),
(118, 'umesh', 'umeshc@ec-mobility.biz', 'Vaidya Sir', 'Lunch Arragement For User', '2018-04-02', '17:20:21', 0, 'LU-118'),
(119, 'umesh', 'umeshc@ec-mobility.biz', 'Vaidya Sir', 'Taxi Arragement', '2018-04-02', '17:22:52', 0, 'TA-119'),
(120, 'umesh', 'umeshc@ec-mobility.biz', 'Sachin Kulkarni', 'Lunch Arragement For User', '2018-04-02', '17:25:15', 0, 'LU-120'),
(121, 'umesh', 'umeshc@ec-mobility.biz', 'Vaidya Sir', 'hotel Booking Request', '2018-04-02', '18:11:24', 0, 'HO-121'),
(122, 'umesh', 'umeshc@ec-mobility.biz', 'Vaidya Sir', 'Lunch Arragement For User', '2018-04-03', '08:56:10', 0, 'LU-122'),
(123, 'umesh', 'umeshc@ec-mobility.biz', 'Vaidya Sir', 'Lunch Arragement For User', '2018-04-03', '08:56:32', 0, 'LU-123'),
(124, 'umesh', 'umeshc@ec-mobility.biz', 'Vaidya Sir', 'Taxi Arragement', '2018-04-03', '09:08:16', 0, 'TA-124'),
(125, 'umesh', 'umeshc@ec-mobility.biz', 'Sachin Kulkarni', 'Taxi Arragement', '2018-04-03', '09:43:28', 0, 'TA-125');

-- --------------------------------------------------------

--
-- Table structure for table `taxi_booking`
--

CREATE TABLE `taxi_booking` (
  `srno` int(5) NOT NULL,
  `emp_name` varchar(40) NOT NULL,
  `admin_name` varchar(40) NOT NULL,
  `querie_id` varchar(11) NOT NULL,
  `taxi_start_date` varchar(11) NOT NULL,
  `taxi_guest_name` varchar(11) NOT NULL,
  `taxi_time` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `taxi_booking`
--

INSERT INTO `taxi_booking` (`srno`, `emp_name`, `admin_name`, `querie_id`, `taxi_start_date`, `taxi_guest_name`, `taxi_time`) VALUES
(3, 'umesh', 'Sachin Kulkarni', 'TA-125', '11/11/11', 'Umesh Charp', '2');

-- --------------------------------------------------------

--
-- Table structure for table `visa_request`
--

CREATE TABLE `visa_request` (
  `srno` int(5) NOT NULL,
  `emp_name` varchar(40) NOT NULL,
  `admin_name` varchar(40) NOT NULL,
  `querie_id` varchar(10) NOT NULL,
  `visa_start_date` varchar(15) NOT NULL,
  `visa_end_date` varchar(15) NOT NULL,
  `visa_country` varchar(40) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `visa_request`
--

INSERT INTO `visa_request` (`srno`, `emp_name`, `admin_name`, `querie_id`, `visa_start_date`, `visa_end_date`, `visa_country`) VALUES
(1, 'umesh', 'Vaidya Sir', 'VI-117', '08/04/2018', '16/04/2018', 'andorra');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `countries`
--
ALTER TABLE `countries`
  ADD PRIMARY KEY (`srno`);

--
-- Indexes for table `employee`
--
ALTER TABLE `employee`
  ADD PRIMARY KEY (`srno`);

--
-- Indexes for table `flight_book`
--
ALTER TABLE `flight_book`
  ADD PRIMARY KEY (`srno`);

--
-- Indexes for table `hotel_book`
--
ALTER TABLE `hotel_book`
  ADD PRIMARY KEY (`srno`);

--
-- Indexes for table `lunch_book`
--
ALTER TABLE `lunch_book`
  ADD PRIMARY KEY (`srno`);

--
-- Indexes for table `queries`
--
ALTER TABLE `queries`
  ADD PRIMARY KEY (`srno`);

--
-- Indexes for table `taxi_booking`
--
ALTER TABLE `taxi_booking`
  ADD PRIMARY KEY (`srno`);

--
-- Indexes for table `visa_request`
--
ALTER TABLE `visa_request`
  ADD PRIMARY KEY (`srno`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `countries`
--
ALTER TABLE `countries`
  MODIFY `srno` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=246;

--
-- AUTO_INCREMENT for table `employee`
--
ALTER TABLE `employee`
  MODIFY `srno` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `flight_book`
--
ALTER TABLE `flight_book`
  MODIFY `srno` int(5) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `hotel_book`
--
ALTER TABLE `hotel_book`
  MODIFY `srno` int(2) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT for table `lunch_book`
--
ALTER TABLE `lunch_book`
  MODIFY `srno` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `queries`
--
ALTER TABLE `queries`
  MODIFY `srno` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=126;

--
-- AUTO_INCREMENT for table `taxi_booking`
--
ALTER TABLE `taxi_booking`
  MODIFY `srno` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `visa_request`
--
ALTER TABLE `visa_request`
  MODIFY `srno` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
