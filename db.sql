-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Jan 22, 2024 at 01:11 PM
-- Server version: 10.5.23-MariaDB
-- PHP Version: 8.1.26

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `veldtuoy_veldtoe`
--

-- --------------------------------------------------------

--
-- Table structure for table `accommodation_availability`
--

CREATE TABLE `accommodation_availability` (
  `id` int(11) NOT NULL,
  `accommodation_id` int(11) NOT NULL,
  `date_closed` date NOT NULL,
  `booking_id` int(11) DEFAULT NULL,
  `date_created` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `accommodation_features`
--

CREATE TABLE `accommodation_features` (
  `id` int(11) NOT NULL,
  `accommodation_id` int(11) NOT NULL,
  `feature_id` int(11) NOT NULL,
  `date_created` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `accommodation_services`
--

CREATE TABLE `accommodation_services` (
  `id` int(11) NOT NULL,
  `accommodation_id` int(11) NOT NULL,
  `service_id` int(11) NOT NULL,
  `date_created` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `accommodation_units`
--

CREATE TABLE `accommodation_units` (
  `unit_id` int(11) NOT NULL,
  `farm_id` int(11) NOT NULL,
  `accommodation_id` int(11) NOT NULL COMMENT 'Accommodation Type',
  `name` text DEFAULT NULL,
  `capacity` int(11) NOT NULL,
  `price` int(11) NOT NULL,
  `price_unit` varchar(255) NOT NULL DEFAULT 'ZAR',
  `price_level` int(11) NOT NULL DEFAULT 2,
  `date_created` timestamp NOT NULL DEFAULT current_timestamp(),
  `date_updated` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `accommodation_units`
--

INSERT INTO `accommodation_units` (`unit_id`, `farm_id`, `accommodation_id`, `name`, `capacity`, `price`, `price_unit`, `price_level`, `date_created`, `date_updated`) VALUES
(1, 2258, 1, 'Hunters Lodge', 12, 500, 'ZAR', 2, '2024-01-19 09:38:37', '2024-01-19 09:38:37'),
(2, 2258, 4, 'Survival Camp', 15, 200, 'ZAR', 2, '2024-01-19 09:38:37', '2024-01-19 09:38:37'),
(3, 6681, 2, 'Wild Luxury', 4, 1500, 'ZAR', 3, '2024-01-19 09:38:37', '2024-01-19 09:38:37'),
(4, 6681, 3, 'Full Exposure', 4, 1300, 'ZAR', 3, '2024-01-19 09:38:37', '2024-01-19 09:38:37');

-- --------------------------------------------------------

--
-- Table structure for table `bookings`
--

CREATE TABLE `bookings` (
  `booking_id` int(11) NOT NULL,
  `hunter_id` int(11) NOT NULL,
  `farm_id` int(11) NOT NULL,
  `booking_date_from` date NOT NULL,
  `booking_date_to` date NOT NULL,
  `number_hunters` int(11) NOT NULL,
  `number_guests` int(11) NOT NULL,
  `farmer_booking` int(1) DEFAULT NULL,
  `open_to_sharing` int(11) NOT NULL DEFAULT 0,
  `rating` int(11) DEFAULT NULL,
  `created_date` timestamp NOT NULL DEFAULT current_timestamp(),
  `modified_date` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `farm`
--

CREATE TABLE `farm` (
  `farm_id` int(6) NOT NULL,
  `category` int(11) DEFAULT NULL,
  `farmer_id` int(11) NOT NULL,
  `farm_number` varchar(26) NOT NULL,
  `owner_name` varchar(100) NOT NULL,
  `owner_surname` varchar(100) NOT NULL,
  `owner_email` text NOT NULL,
  `owner_mobile` int(20) NOT NULL,
  `farm_name` varchar(250) NOT NULL,
  `district` varchar(100) NOT NULL,
  `longitude` decimal(10,0) NOT NULL,
  `latitude` decimal(10,0) NOT NULL,
  `farm_description_english` mediumtext NOT NULL,
  `farm_description_afrikaans` mediumtext NOT NULL,
  `farm_size` int(11) UNSIGNED NOT NULL,
  `accommodation` int(10) NOT NULL,
  `aircon` int(1) NOT NULL DEFAULT 0,
  `free_wifi` int(1) NOT NULL DEFAULT 0,
  `housekeeping` int(1) NOT NULL DEFAULT 0,
  `swimming_pool` int(1) NOT NULL DEFAULT 0,
  `dstv` int(1) NOT NULL DEFAULT 0,
  `wood` int(1) NOT NULL DEFAULT 0,
  `boma` int(1) NOT NULL DEFAULT 0,
  `fitness_center` int(11) NOT NULL DEFAULT 0,
  `meeting_hall` int(11) NOT NULL DEFAULT 0,
  `bar_lounge` int(11) NOT NULL DEFAULT 0,
  `restaurant` int(11) NOT NULL DEFAULT 0,
  `terrace_patio` int(11) NOT NULL DEFAULT 0,
  `free_parking` int(11) NOT NULL DEFAULT 0,
  `pet_allowed` int(11) NOT NULL DEFAULT 0,
  `gift_shop` int(11) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `farm`
--

INSERT INTO `farm` (`farm_id`, `category`, `farmer_id`, `farm_number`, `owner_name`, `owner_surname`, `owner_email`, `owner_mobile`, `farm_name`, `district`, `longitude`, `latitude`, `farm_description_english`, `farm_description_afrikaans`, `farm_size`, `accommodation`, `aircon`, `free_wifi`, `housekeeping`, `swimming_pool`, `dstv`, `wood`, `boma`, `fitness_center`, `meeting_hall`, `bar_lounge`, `restaurant`, `terrace_patio`, `free_parking`, `pet_allowed`, `gift_shop`) VALUES
(2258, NULL, 0, '', 'Bob', 'Goldenhuis', 'bgoldenhuis@gmail.com', 848889999, 'Goldenhorn', 'Ghariep', 28, -26, 'kingdom fields', 'koningryk velde', 0, 12, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(6681, NULL, 0, '', 'Valory', 'Sedges', 'val@sedges.com', 847778888, 'Smokeridge', 'Springbok', -26, 28, 'Quartzite mountains', 'quartzite mountains', 0, 12, 0, 1, 0, 0, 1, 0, 1, 0, 0, 0, 0, 0, 0, 0, 0);

-- --------------------------------------------------------

--
-- Table structure for table `farmer_profiles`
--

CREATE TABLE `farmer_profiles` (
  `farmer_id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `surname` varchar(100) NOT NULL,
  `email` text NOT NULL,
  `mobile` int(18) NOT NULL,
  `regdate` datetime NOT NULL DEFAULT current_timestamp(),
  `pwd` varchar(560) NOT NULL,
  `date_last_active` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `farm_accommodation_stock`
--

CREATE TABLE `farm_accommodation_stock` (
  `accommodation_id` int(11) NOT NULL,
  `farm_id` int(11) NOT NULL,
  `capacity` int(3) NOT NULL,
  `boma` int(4) NOT NULL,
  `butcher_annex` int(11) NOT NULL,
  `braai` int(11) NOT NULL,
  `wifi` int(1) DEFAULT NULL,
  `dstv` int(1) DEFAULT NULL,
  `housekeeping` int(1) DEFAULT NULL,
  `cook` int(1) DEFAULT NULL,
  `fridge` int(1) DEFAULT NULL,
  `selfcater` int(1) DEFAULT NULL,
  `towels` int(1) DEFAULT NULL,
  `linen` int(1) DEFAULT NULL,
  `fan` int(1) DEFAULT NULL,
  `aircon` int(1) DEFAULT NULL,
  `electricity` int(1) DEFAULT NULL,
  `tapwater` int(1) DEFAULT NULL,
  `bath_shower` int(1) DEFAULT NULL COMMENT '0=nothing\r\n1=bath\r\n2=shower',
  `swimmingpool` int(1) DEFAULT NULL,
  `price` decimal(10,0) NOT NULL,
  `price_unit` int(11) NOT NULL,
  `price_level` int(11) NOT NULL DEFAULT 2
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `farm_animal_stock`
--

CREATE TABLE `farm_animal_stock` (
  `stock_id` int(11) NOT NULL,
  `farm_id` int(11) NOT NULL,
  `animal_id` int(11) NOT NULL,
  `male` int(11) NOT NULL,
  `male_price` decimal(10,0) NOT NULL,
  `female` int(11) NOT NULL,
  `female_price` decimal(10,0) NOT NULL,
  `trophy_price` decimal(10,0) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `farm_features`
--

CREATE TABLE `farm_features` (
  `id` int(11) NOT NULL,
  `farm_id` int(11) NOT NULL,
  `feature_id` int(11) NOT NULL,
  `date_created` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `farm_ratings`
--

CREATE TABLE `farm_ratings` (
  `farm_ratings_id` int(11) NOT NULL,
  `farm_id` int(6) NOT NULL,
  `hunter_id` int(100) NOT NULL,
  `star_rating` int(11) NOT NULL,
  `as_advertised` int(1) NOT NULL,
  `recommend` int(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `farm_services`
--

CREATE TABLE `farm_services` (
  `id` int(11) NOT NULL,
  `farm_id` int(11) NOT NULL,
  `service_id` int(11) NOT NULL,
  `date_created` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `farm_service_stock`
--

CREATE TABLE `farm_service_stock` (
  `service_id` int(11) NOT NULL,
  `farm_id` int(11) NOT NULL,
  `service_price` decimal(10,0) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `favourites`
--

CREATE TABLE `favourites` (
  `id` int(11) NOT NULL,
  `farm_id` int(11) NOT NULL,
  `hunter_id` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `hunter_profiles`
--

CREATE TABLE `hunter_profiles` (
  `hunter_id` int(100) NOT NULL,
  `name` varchar(100) NOT NULL,
  `surname` varchar(100) NOT NULL,
  `email` text NOT NULL,
  `mobile` int(18) NOT NULL,
  `pwd` varchar(255) NOT NULL,
  `regdate` datetime NOT NULL DEFAULT current_timestamp(),
  `language` int(11) NOT NULL DEFAULT 0,
  `date_updated` timestamp NOT NULL DEFAULT current_timestamp(),
  `date_last_used` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `hunter_profiles`
--

INSERT INTO `hunter_profiles` (`hunter_id`, `name`, `surname`, `email`, `mobile`, `pwd`, `regdate`, `language`, `date_updated`, `date_last_used`) VALUES
(1, 'Pierre', '2plus3', 'johndoe@gmail.com', 12364587, '', '2023-11-20 18:38:28', 0, '2024-01-19 08:21:32', '2024-01-19 08:21:32'),
(2, 'Pierre', '2plus3', 'johndoe@gmail.com', 12364587, '', '2023-11-20 18:38:28', 0, '2024-01-19 08:21:32', '2024-01-19 08:21:32'),
(4, 'Quinlind', 'Viver', 'quin@vortex.io', 824455116, '', '2023-11-20 18:38:28', 0, '2024-01-19 08:21:32', '2024-01-19 08:21:32'),
(22, 'Quinlind', 'Viver', 'quin@vortex.io', 824455116, '', '2023-11-20 18:38:28', 0, '2024-01-19 08:21:32', '2024-01-19 08:21:32'),
(23, 'Chat', 'GPT', 'jane@doe.com', 987654321, '', '2023-11-20 18:48:48', 0, '2024-01-19 08:21:32', '2024-01-19 08:21:32'),
(24, 'Gerrie', 'Geertsema', 'gerrie@gert.co.za', 34568712, '', '2023-11-20 20:17:51', 0, '2024-01-19 08:21:32', '2024-01-19 08:21:32'),
(25, 'Susan', 'Van Dyk', 'sue@klip.co.za', 34568712, '', '2023-11-22 06:33:52', 0, '2024-01-19 08:21:32', '2024-01-19 08:21:32'),
(26, 'fsdfsdf', 'fsfsdf', 'dfsfs@dfsf.com', 234234324, '', '2023-11-23 20:20:17', 0, '2024-01-19 08:21:32', '2024-01-19 08:21:32'),
(27, 'Gavin', 'McRigel', 'gmcrigel@gmail.com', 845556666, '', '2023-12-03 08:55:14', 0, '2024-01-19 08:21:32', '2024-01-19 08:21:32'),
(28, 'Lyle', 'Ageroth', 'lage@gmail.com', 514449999, '', '2023-12-03 09:52:49', 0, '2024-01-19 08:21:32', '2024-01-19 08:21:32'),
(29, 'Lyle', 'Ageroth', 'lage@gmail.com', 514449999, '', '2023-12-03 10:00:28', 0, '2024-01-19 08:21:32', '2024-01-19 08:21:32'),
(30, 'Lyle', 'Ageroth', 'lage@gmail.com', 514449999, '', '2023-12-03 10:01:03', 0, '2024-01-19 08:21:32', '2024-01-19 08:21:32'),
(31, 'Lyle', 'Ageroth', 'lage@gmail.com', 514449999, '', '2023-12-03 10:06:51', 0, '2024-01-19 08:21:32', '2024-01-19 08:21:32'),
(32, 'Lyle', 'Ageroth', 'lage@gmail.com', 514449999, '', '2023-12-03 10:07:37', 0, '2024-01-19 08:21:32', '2024-01-19 08:21:32'),
(33, 'Lyle', 'Ageroth', 'lage@gmail.com', 514449999, '', '2023-12-03 10:10:04', 0, '2024-01-19 08:21:32', '2024-01-19 08:21:32'),
(34, 'Quinlind', 'Viver', 'quin@vortex.io', 824455116, '', '2023-12-03 15:30:40', 0, '2024-01-19 08:21:32', '2024-01-19 08:21:32'),
(42, 'Quinlind', 'Viver', 'quin@vortex.io', 824455116, '', '2023-12-03 15:45:59', 0, '2024-01-19 08:21:32', '2024-01-19 08:21:32'),
(43, 'Quinlind', 'Viver', 'quin@vortex.io', 824455116, '', '2023-12-03 15:52:01', 0, '2024-01-19 08:21:32', '2024-01-19 08:21:32'),
(44, 'Quinlind', 'Viver', 'quin@vortex.io', 824455116, '', '2023-12-03 15:52:11', 0, '2024-01-19 08:21:32', '2024-01-19 08:21:32'),
(63, 'Magyar', 'Revon', 'mrev@gmail.com', 842221111, '', '2023-12-03 16:44:11', 0, '2024-01-19 08:21:32', '2024-01-19 08:21:32'),
(69, 'terrance', 'van jaarsveld', 't@v.com', 1236789, '', '2023-12-23 16:38:08', 0, '2024-01-19 08:21:32', '2024-01-19 08:21:32'),
(70, 'Thabo', 'de Lange', 't.delange@vortex.co.za', 843325116, '', '2024-01-08 19:08:46', 0, '2024-01-19 08:21:32', '2024-01-19 08:21:32'),
(71, 'Malone', 'Sinclair', 'ms@gmail.com', 857782244, '', '2024-01-08 19:30:43', 0, '2024-01-19 08:21:32', '2024-01-19 08:21:32'),
(72, 'Giana', 'Verone', 'gv@gmail.com', 857714488, '', '2024-01-08 19:32:16', 0, '2024-01-19 08:21:32', '2024-01-19 08:21:32'),
(73, 'Thabo', 'de Lange', 't.delange@vortex.co.za', 843325116, '', '2024-01-16 21:29:32', 0, '2024-01-19 08:21:32', '2024-01-19 08:21:32'),
(74, 'Thabo', 'de Lange', 't.delange@vortex.co.za', 843325116, '', '2024-01-16 21:30:04', 0, '2024-01-19 08:21:32', '2024-01-19 08:21:32'),
(75, 'Thabo', 'de Lange', 't.delange@vortex.co.za', 843325116, '', '2024-01-22 08:44:56', 0, '2024-01-22 06:44:56', '2024-01-22 06:44:56'),
(76, 'Thabo', 'de Lange', 't.delange@vortex.co.za', 843325116, '', '2024-01-22 08:46:54', 0, '2024-01-22 06:46:54', '2024-01-22 06:46:54'),
(77, 'Thabo', 'de Lange', 't.delange@vortex.co.za', 843325116, '', '2024-01-22 08:49:12', 0, '2024-01-22 06:49:12', '2024-01-22 06:49:12'),
(78, 'Thabo', 'de Lange', 't.delange@vortex.co.za', 843325116, 'Greatmayhem', '2024-01-22 12:57:40', 0, '2024-01-22 10:57:40', '2024-01-22 10:57:40');

-- --------------------------------------------------------

--
-- Table structure for table `hunter_ratings`
--

CREATE TABLE `hunter_ratings` (
  `hunter_ratings_id` int(11) NOT NULL,
  `farm_id` int(6) NOT NULL,
  `hunter_id` int(100) NOT NULL,
  `star_rating` int(11) NOT NULL,
  `neatness` int(1) NOT NULL,
  `recommend` int(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `reference_accommodation`
--

CREATE TABLE `reference_accommodation` (
  `accommodation_id` int(11) NOT NULL,
  `english` varchar(100) NOT NULL,
  `afrikaans` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `reference_accommodation`
--

INSERT INTO `reference_accommodation` (`accommodation_id`, `english`, `afrikaans`) VALUES
(1, 'Lodge', 'Jaghuis'),
(2, 'Challet', 'Chalet'),
(3, 'Tent', 'Tent'),
(4, 'Camping', 'Kamp');

-- --------------------------------------------------------

--
-- Table structure for table `reference_animals`
--

CREATE TABLE `reference_animals` (
  `animal_id` int(11) NOT NULL,
  `english` text NOT NULL,
  `afrikaans` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `reference_animals`
--

INSERT INTO `reference_animals` (`animal_id`, `english`, `afrikaans`) VALUES
(2, 'Black wildebeest', 'Blou wildebees'),
(3, 'Blue wildebeest', 'Swart wildebees'),
(4, 'Buffalo', 'Buffel'),
(5, 'Bushpig', 'Bosvark'),
(6, 'Caracal', 'Rooikat'),
(7, 'Common eland', 'Eland'),
(8, 'Elephant', 'Olifant'),
(9, 'Gemsbuck', 'Gemsbok'),
(10, 'Giraffe', 'Kameelperd'),
(11, 'Greater kudu', 'Koedoe'),
(12, 'Impala', 'Rooibok'),
(13, 'Lechwe', 'Lechwe'),
(14, 'Leopard', 'Luiperd'),
(15, 'Nyala', 'Nyala'),
(16, 'Red hartbeest', 'Rooi hartebees'),
(17, 'Reedbuck', 'Rietbok'),
(18, 'Roan sable', 'Bastergemsbok'),
(19, 'Sable antelope', 'Swartwitpens'),
(20, 'Springbok', 'Springbok'),
(21, 'Steenbok', 'Steenbok'),
(22, 'Warthog', 'Vlakvark'),
(23, 'Waterbuck', 'Waterbok'),
(24, 'Zebra', 'Sebra');

-- --------------------------------------------------------

--
-- Table structure for table `reference_features`
--

CREATE TABLE `reference_features` (
  `id` int(11) NOT NULL,
  `english` text NOT NULL,
  `afrikaans` text NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `reference_features`
--

INSERT INTO `reference_features` (`id`, `english`, `afrikaans`) VALUES
(1, 'Boma', 'Boma'),
(2, 'Fan', 'Waaier'),
(3, 'Air Conditioner', 'Lugverkoeler'),
(4, 'Electricity', 'Elektrisiteit'),
(5, 'Tap Water', 'Kraanwater'),
(6, 'Linen', 'Linne'),
(7, 'Towels', 'Handdoeke'),
(8, 'Self-catering', 'Selfsorg'),
(9, 'Fridge', 'Yskas'),
(10, 'Cook', 'Kok'),
(11, 'Housekeeping', 'Huishouding'),
(12, 'DSTV', 'DSTV'),
(13, 'WiFi', 'WiFi'),
(14, 'Braai', 'Braai'),
(15, 'Butcher Annex', 'Slaghuis Bygebou'),
(16, 'Bath', 'Bad'),
(17, 'Shower', 'Stort'),
(18, 'Swimming Pool', 'Swembad'),
(19, 'Wood', 'Hout'),
(20, 'Fitness Centre', 'Fiksheidsentrum'),
(21, 'Meeting Hall', 'Vergaderingsaal'),
(22, 'Bar/Lounge', 'Kroeg/Kuierarea'),
(23, 'Restaurant', 'Restaurant'),
(24, 'Terrace/Patio', 'Stoep'),
(25, 'Free Parking', 'Gratis Parkering'),
(26, 'Pets Allowed', 'Diere Toegelaat'),
(27, 'Gift Shop', 'Geskenkwinkel');

-- --------------------------------------------------------

--
-- Table structure for table `reference_services`
--

CREATE TABLE `reference_services` (
  `service_id` int(11) NOT NULL,
  `english` varchar(50) NOT NULL,
  `afrikaans` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `reference_services`
--

INSERT INTO `reference_services` (`service_id`, `english`, `afrikaans`) VALUES
(1, 'Gun Hire', 'Wapen Huur'),
(2, 'Bakkie Hire', 'Bakkie Huur'),
(3, 'Bow Hire', 'Boog Huur'),
(4, 'Professional Hunter', 'Profesionele Jagter'),
(5, 'Cooking', 'Kok'),
(6, 'Butchering', 'Vleisverwerking');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `accommodation_availability`
--
ALTER TABLE `accommodation_availability`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `accommodation_features`
--
ALTER TABLE `accommodation_features`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `accommodation_services`
--
ALTER TABLE `accommodation_services`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `accommodation_units`
--
ALTER TABLE `accommodation_units`
  ADD PRIMARY KEY (`unit_id`);

--
-- Indexes for table `bookings`
--
ALTER TABLE `bookings`
  ADD PRIMARY KEY (`booking_id`),
  ADD UNIQUE KEY `bookings` (`booking_id`),
  ADD KEY `hunter_id` (`hunter_id`,`farm_id`);

--
-- Indexes for table `farm`
--
ALTER TABLE `farm`
  ADD PRIMARY KEY (`farm_id`),
  ADD KEY `farmer_id` (`farmer_id`);

--
-- Indexes for table `farmer_profiles`
--
ALTER TABLE `farmer_profiles`
  ADD PRIMARY KEY (`farmer_id`),
  ADD KEY `name` (`name`,`surname`);

--
-- Indexes for table `farm_accommodation_stock`
--
ALTER TABLE `farm_accommodation_stock`
  ADD PRIMARY KEY (`accommodation_id`),
  ADD KEY `farm_id` (`farm_id`),
  ADD KEY `accommodation_id` (`accommodation_id`);

--
-- Indexes for table `farm_animal_stock`
--
ALTER TABLE `farm_animal_stock`
  ADD PRIMARY KEY (`stock_id`),
  ADD KEY `stock_id` (`stock_id`,`farm_id`),
  ADD KEY `animal_id` (`animal_id`),
  ADD KEY `farm_id` (`farm_id`);

--
-- Indexes for table `farm_features`
--
ALTER TABLE `farm_features`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `farm_ratings`
--
ALTER TABLE `farm_ratings`
  ADD PRIMARY KEY (`farm_ratings_id`),
  ADD KEY `hunter_id` (`hunter_id`,`farm_id`),
  ADD KEY `farm_id` (`farm_id`);

--
-- Indexes for table `farm_services`
--
ALTER TABLE `farm_services`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `farm_service_stock`
--
ALTER TABLE `farm_service_stock`
  ADD PRIMARY KEY (`service_id`),
  ADD KEY `farm_id` (`farm_id`,`service_id`);

--
-- Indexes for table `favourites`
--
ALTER TABLE `favourites`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `hunter_profiles`
--
ALTER TABLE `hunter_profiles`
  ADD PRIMARY KEY (`hunter_id`);

--
-- Indexes for table `hunter_ratings`
--
ALTER TABLE `hunter_ratings`
  ADD PRIMARY KEY (`hunter_ratings_id`),
  ADD KEY `farm_id` (`farm_id`);

--
-- Indexes for table `reference_accommodation`
--
ALTER TABLE `reference_accommodation`
  ADD PRIMARY KEY (`accommodation_id`),
  ADD KEY `accommodation_id` (`accommodation_id`);

--
-- Indexes for table `reference_animals`
--
ALTER TABLE `reference_animals`
  ADD PRIMARY KEY (`animal_id`),
  ADD KEY `animal_id` (`animal_id`);

--
-- Indexes for table `reference_features`
--
ALTER TABLE `reference_features`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `reference_services`
--
ALTER TABLE `reference_services`
  ADD PRIMARY KEY (`service_id`),
  ADD KEY `service_id` (`service_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `accommodation_availability`
--
ALTER TABLE `accommodation_availability`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `accommodation_features`
--
ALTER TABLE `accommodation_features`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `accommodation_services`
--
ALTER TABLE `accommodation_services`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `accommodation_units`
--
ALTER TABLE `accommodation_units`
  MODIFY `unit_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `bookings`
--
ALTER TABLE `bookings`
  MODIFY `booking_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `farm`
--
ALTER TABLE `farm`
  MODIFY `farm_id` int(6) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6682;

--
-- AUTO_INCREMENT for table `farmer_profiles`
--
ALTER TABLE `farmer_profiles`
  MODIFY `farmer_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `farm_accommodation_stock`
--
ALTER TABLE `farm_accommodation_stock`
  MODIFY `accommodation_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `farm_features`
--
ALTER TABLE `farm_features`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `farm_ratings`
--
ALTER TABLE `farm_ratings`
  MODIFY `farm_ratings_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `farm_services`
--
ALTER TABLE `farm_services`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `favourites`
--
ALTER TABLE `favourites`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `hunter_profiles`
--
ALTER TABLE `hunter_profiles`
  MODIFY `hunter_id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=79;

--
-- AUTO_INCREMENT for table `hunter_ratings`
--
ALTER TABLE `hunter_ratings`
  MODIFY `hunter_ratings_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `reference_accommodation`
--
ALTER TABLE `reference_accommodation`
  MODIFY `accommodation_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `reference_animals`
--
ALTER TABLE `reference_animals`
  MODIFY `animal_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;

--
-- AUTO_INCREMENT for table `reference_features`
--
ALTER TABLE `reference_features`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;

--
-- AUTO_INCREMENT for table `reference_services`
--
ALTER TABLE `reference_services`
  MODIFY `service_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `bookings`
--
ALTER TABLE `bookings`
  ADD CONSTRAINT `bookings_ibfk_1` FOREIGN KEY (`hunter_id`) REFERENCES `hunter_profiles` (`hunter_id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `bookings_ibfk_2` FOREIGN KEY (`farm_id`) REFERENCES `farm` (`farm_id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `farmer_profiles`
--
ALTER TABLE `farmer_profiles`
  ADD CONSTRAINT `farmer_profiles_ibfk_1` FOREIGN KEY (`farmer_id`) REFERENCES `farm` (`farmer_id`);

--
-- Constraints for table `farm_accommodation_stock`
--
ALTER TABLE `farm_accommodation_stock`
  ADD CONSTRAINT `farm_accommodation_stock_ibfk_1` FOREIGN KEY (`farm_id`) REFERENCES `farm` (`farm_id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `farm_accommodation_stock_ibfk_2` FOREIGN KEY (`accommodation_id`) REFERENCES `reference_accommodation` (`accommodation_id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `farm_animal_stock`
--
ALTER TABLE `farm_animal_stock`
  ADD CONSTRAINT `farm_animal_stock_ibfk_1` FOREIGN KEY (`animal_id`) REFERENCES `reference_animals` (`animal_id`) ON DELETE NO ACTION ON UPDATE CASCADE,
  ADD CONSTRAINT `farm_animal_stock_ibfk_2` FOREIGN KEY (`farm_id`) REFERENCES `farm` (`farm_id`) ON DELETE NO ACTION ON UPDATE CASCADE;

--
-- Constraints for table `farm_ratings`
--
ALTER TABLE `farm_ratings`
  ADD CONSTRAINT `farm_ratings_ibfk_1` FOREIGN KEY (`farm_id`) REFERENCES `farm` (`farm_id`) ON DELETE NO ACTION ON UPDATE CASCADE;

--
-- Constraints for table `farm_service_stock`
--
ALTER TABLE `farm_service_stock`
  ADD CONSTRAINT `farm_service_stock_ibfk_1` FOREIGN KEY (`service_id`) REFERENCES `reference_services` (`service_id`) ON DELETE NO ACTION,
  ADD CONSTRAINT `farm_service_stock_ibfk_2` FOREIGN KEY (`farm_id`) REFERENCES `farm` (`farm_id`) ON DELETE NO ACTION ON UPDATE CASCADE;

--
-- Constraints for table `hunter_ratings`
--
ALTER TABLE `hunter_ratings`
  ADD CONSTRAINT `hunter_ratings_ibfk_1` FOREIGN KEY (`hunter_id`) REFERENCES `hunter_profiles` (`hunter_id`) ON DELETE NO ACTION ON UPDATE NO ACTION;
COMMIT;

ALTER TABLE `farm` 
    MODIFY COLUMN `longitude` DECIMAL(10,6) NOT NULL;

ALTER TABLE `farm` 
    MODIFY COLUMN `latitude` DECIMAL(10,6) NOT NULL;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;