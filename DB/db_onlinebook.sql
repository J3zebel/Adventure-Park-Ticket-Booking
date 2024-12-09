-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 09, 2024 at 10:12 AM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.0.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_onlinebook`
--

-- --------------------------------------------------------

--
-- Table structure for table `cat_tbl`
--

CREATE TABLE `cat_tbl` (
  `category_id` int(11) NOT NULL,
  `category_name` varchar(35) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `cat_tbl`
--

INSERT INTO `cat_tbl` (`category_id`, `category_name`) VALUES
(5, 'tech'),
(6, 'doctor '),
(7, 'teacher');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_admin`
--

CREATE TABLE `tbl_admin` (
  `admin_id` int(11) NOT NULL,
  `admin_name` varchar(20) NOT NULL,
  `admin_email` varchar(30) NOT NULL,
  `admin_password` varchar(30) NOT NULL,
  `compswd` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tbl_admin`
--

INSERT INTO `tbl_admin` (`admin_id`, `admin_name`, `admin_email`, `admin_password`, `compswd`) VALUES
(18, 'Swathi', 'swathiaparna0@gmail.com', 'Swathi@123', 'Swathi@123'),
(19, 'Aswani Krishnan', 'aswani7@gmail.com', 'Aswani@098', 'Aswani@098'),
(20, 'Sudhin', 'sudhin@gmail.com', 'Sudhin@789', 'Sudhin@789');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_adventure`
--

CREATE TABLE `tbl_adventure` (
  `adv_id` int(11) NOT NULL,
  `adv_name` varchar(50) NOT NULL,
  `adv_email` varchar(30) NOT NULL,
  `adv_logo` varchar(50) NOT NULL,
  `adv_proof` varchar(50) NOT NULL,
  `adv_password` varchar(20) NOT NULL,
  `place_id` int(11) NOT NULL,
  `adv_contact` varchar(30) NOT NULL,
  `adv_status` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tbl_adventure`
--

INSERT INTO `tbl_adventure` (`adv_id`, `adv_name`, `adv_email`, `adv_logo`, `adv_proof`, `adv_password`, `place_id`, `adv_contact`, `adv_status`) VALUES
(30, 'Adventure Park', 'adventureparkvagamon@gmail.com', 'ADV LOGO.png', 'Proof.jpg', 'Adventurepark@123', 30, '9843265430', 0);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_booking`
--

CREATE TABLE `tbl_booking` (
  `booking_id` int(11) NOT NULL,
  `booking_date` date NOT NULL,
  `user_id` int(11) NOT NULL,
  `booking_status` int(11) NOT NULL DEFAULT 0,
  `book_to_date` varchar(30) NOT NULL,
  `booking_amount` int(11) NOT NULL,
  `slot_id` int(11) NOT NULL,
  `no_of_tickets` int(11) NOT NULL,
  `ride_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tbl_booking`
--

INSERT INTO `tbl_booking` (`booking_id`, `booking_date`, `user_id`, `booking_status`, `book_to_date`, `booking_amount`, `slot_id`, `no_of_tickets`, `ride_id`) VALUES
(44, '2024-12-07', 35, 1, '2024-12-10', 750, 6, 3, 38),
(45, '2024-12-07', 35, 1, '2024-12-10', 750, 6, 3, 45),
(46, '2024-12-07', 33, 2, '2024-12-12', 4000, 7, 5, 39),
(47, '2024-12-07', 34, 2, '2024-12-18', 7000, 6, 2, 37),
(48, '2024-12-09', 33, 0, '2024-12-19', 0, 6, 3, 39);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_category`
--

CREATE TABLE `tbl_category` (
  `category_id` int(11) NOT NULL,
  `category_name` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tbl_category`
--

INSERT INTO `tbl_category` (`category_id`, `category_name`) VALUES
(13, ' ZIPLINE'),
(14, ' PARAGLIDING'),
(15, 'KAYAKING'),
(16, 'SKY ROLLER'),
(17, 'SKY CYCLE'),
(19, 'GIANT SWING'),
(20, 'GLASS BRIDGE'),
(21, 'TREKKING');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_complaint`
--

CREATE TABLE `tbl_complaint` (
  `com_id` int(11) NOT NULL,
  `com_title` varchar(30) NOT NULL,
  `com_content` varchar(500) NOT NULL,
  `com_reply` varchar(500) NOT NULL,
  `com_status` char(1) NOT NULL DEFAULT '0',
  `com_date` date NOT NULL,
  `user_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tbl_complaint`
--

INSERT INTO `tbl_complaint` (`com_id`, `com_title`, `com_content`, `com_reply`, `com_status`, `com_date`, `user_id`) VALUES
(24, 'HJH', 'VH', '', '0', '2024-12-09', 33);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_customer`
--

CREATE TABLE `tbl_customer` (
  `customer_id` int(11) NOT NULL,
  `customer_name` varchar(30) NOT NULL,
  `customer_age` int(11) NOT NULL,
  `booking_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tbl_customer`
--

INSERT INTO `tbl_customer` (`customer_id`, `customer_name`, `customer_age`, `booking_id`) VALUES
(49, 'Priyanga Sunil', 27, 44),
(50, 'Sunil Kumar', 31, 44),
(51, 'Nila Sunil', 4, 44),
(52, 'Priyanga Sunil', 27, 45),
(53, 'Sunil Kumar', 31, 45),
(54, 'Nila Sunil', 4, 45),
(55, 'Sana', 21, 46),
(56, 'Rose', 21, 46),
(57, 'Vishnu', 21, 46),
(58, 'Aleena', 21, 46),
(59, 'Nirmal', 21, 46),
(60, 'Ajmal S', 24, 47),
(61, 'Hasna', 20, 47),
(62, 'Priyanga Sunil', 27, 48),
(63, 'Sunil Kumar', 31, 48),
(64, 'Nila Sunil', 9, 48);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_district`
--

CREATE TABLE `tbl_district` (
  `district_id` int(11) NOT NULL,
  `district_name` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tbl_district`
--

INSERT INTO `tbl_district` (`district_id`, `district_name`) VALUES
(18, 'THIRUVANANTHAPURAM'),
(19, 'KOLLAM'),
(20, 'PATHANAMTHITTA'),
(21, 'ALAPPUZHA'),
(22, 'KOTTAYAM'),
(23, 'IDUKKI'),
(24, 'ERNAKULAM'),
(25, 'THRISSUR'),
(26, 'PALAKKAD'),
(27, 'MALAPPURAM'),
(28, 'KOZHIKKOD'),
(29, 'WAYANAD'),
(30, 'KANNUR'),
(31, 'KASARGOD');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_feedback`
--

CREATE TABLE `tbl_feedback` (
  `feedback_id` int(11) NOT NULL,
  `feedback_content` varchar(150) NOT NULL,
  `user_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tbl_feedback`
--

INSERT INTO `tbl_feedback` (`feedback_id`, `feedback_content`, `user_id`) VALUES
(2, 'We are finally back home fron our trip and I would like to thank you for making memories.', 34);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_gallery`
--

CREATE TABLE `tbl_gallery` (
  `img_id` int(11) NOT NULL,
  `img_photo` varchar(100) NOT NULL,
  `ride_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tbl_gallery`
--

INSERT INTO `tbl_gallery` (`img_id`, `img_photo`, `ride_id`) VALUES
(61, 'paragliding gallery1.jpg', 37),
(62, 'Paragliding gallery2.jpg', 37);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_place`
--

CREATE TABLE `tbl_place` (
  `place_id` int(11) NOT NULL,
  `place_name` varchar(30) NOT NULL,
  `place_pin` varchar(30) NOT NULL,
  `district_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tbl_place`
--

INSERT INTO `tbl_place` (`place_id`, `place_name`, `place_pin`, `district_id`) VALUES
(16, 'pothencode', '698035', 18),
(17, 'Chavara', '690524', 19),
(18, 'Ranni', '675543', 20),
(19, 'Kayamkulam', '665401', 21),
(20, 'Puthupally', '654388', 22),
(21, 'Vagamon', '598763', 23),
(22, 'Vaykkom', '543988', 24),
(23, 'Ollur', '556782', 25),
(24, 'Chittur', '876540', 26),
(25, 'Ponnani', '587764', 27),
(26, 'Vadakara', '568834', 28),
(27, 'Kalpetta', '673121', 29),
(28, 'Thalasseri', '654908', 30),
(29, 'Bayaru', '657413', 31),
(30, 'Vagamon', '685503', 23);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_rides`
--

CREATE TABLE `tbl_rides` (
  `ride_id` int(11) NOT NULL,
  `category_id` int(11) NOT NULL,
  `ride_description` varchar(300) NOT NULL,
  `ride_photo` varchar(100) NOT NULL,
  `ride_rate` int(11) NOT NULL,
  `ride_age` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tbl_rides`
--

INSERT INTO `tbl_rides` (`ride_id`, `category_id`, `ride_description`, `ride_photo`, `ride_rate`, `ride_age`) VALUES
(37, 14, 'One of the most exciting activity near the glass bridge is paragliding.', 'paragliding main.jpg', 3500, 14),
(38, 20, 'The Vagamon Glass Bridge is one of the unique Glass Bridge Skywalks in India among many others.', 'glass bridge main.jpeg', 250, 3),
(39, 13, 'Experience the thrill of ziplining over Vagamons breathtaking panoramic mountain views.', 'zipline main.webp', 800, 8),
(41, 19, 'The Giant Swing in Vagamon offers thrilling freefall and panoramic views of hills and valleys.', 'Gaint Swing.jpeg', 250, 6),
(42, 21, 'Trekking in Vagamon offers scenic trails through lush hills, pine forests, and meadows, with stunning mountain views.', 'trekking.jpeg', 300, 3),
(43, 16, 'The Sky Roller in Vagamon offers thrilling aerial twists, speed, and stunning views over valleys.', 'Sky Roller.jpeg', 450, 6),
(44, 17, 'The Sky Cycle in Vagamon allows riders to pedal above scenic landscapes, enjoying breathtaking views.', 'Sky Cycle.jpeg', 450, 6),
(45, 15, 'Kayaking in Vagamon features serene waters and stunning natural landscapes.', 'kayaking main.webp', 250, 3);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_slot`
--

CREATE TABLE `tbl_slot` (
  `slot_id` int(11) NOT NULL,
  `slot_count` int(11) NOT NULL,
  `slot_fromtime` varchar(30) NOT NULL,
  `slot_totime` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tbl_slot`
--

INSERT INTO `tbl_slot` (`slot_id`, `slot_count`, `slot_fromtime`, `slot_totime`) VALUES
(6, 30, '10:00', '12:00'),
(7, 40, '12:30', '05:00');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_subcategory`
--

CREATE TABLE `tbl_subcategory` (
  `subcategory_id` int(11) NOT NULL,
  `subcategory_name` varchar(30) NOT NULL,
  `category_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tbl_subcategory`
--

INSERT INTO `tbl_subcategory` (`subcategory_id`, `subcategory_name`, `category_id`) VALUES
(1, '', 0),
(2, 'gffdfdfd', 0),
(3, 'gffdfdfd', 0),
(4, 'maths', 5),
(8, 'English', 5),
(9, 'ss', 7);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_user`
--

CREATE TABLE `tbl_user` (
  `user_id` int(11) NOT NULL,
  `user_name` varchar(30) NOT NULL,
  `user_contact` varchar(13) NOT NULL,
  `user_email` varchar(20) NOT NULL,
  `user_photo` varchar(20) NOT NULL,
  `user_password` varchar(30) NOT NULL,
  `place_id` int(11) NOT NULL,
  `user_proof` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tbl_user`
--

INSERT INTO `tbl_user` (`user_id`, `user_name`, `user_contact`, `user_email`, `user_photo`, `user_password`, `place_id`, `user_proof`) VALUES
(33, 'Sana', '9934283572', 'sana104@gmail.com', 'female1.jpg', 'Sana@104', 16, 'proof4.jpg'),
(34, 'Ajmal S', '7735261937', 'ajmal06@gmail.com', 'male2.jpg', 'Ajmal@06', 18, 'proof1.jpg'),
(35, 'Priyanka Sunil', '9755230122', 'priyanga47@gmail.com', 'female2.jpg', 'Priyanga@47', 22, 'proof3.jpg');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `cat_tbl`
--
ALTER TABLE `cat_tbl`
  ADD PRIMARY KEY (`category_id`);

--
-- Indexes for table `tbl_admin`
--
ALTER TABLE `tbl_admin`
  ADD PRIMARY KEY (`admin_id`);

--
-- Indexes for table `tbl_adventure`
--
ALTER TABLE `tbl_adventure`
  ADD PRIMARY KEY (`adv_id`);

--
-- Indexes for table `tbl_booking`
--
ALTER TABLE `tbl_booking`
  ADD PRIMARY KEY (`booking_id`);

--
-- Indexes for table `tbl_category`
--
ALTER TABLE `tbl_category`
  ADD PRIMARY KEY (`category_id`);

--
-- Indexes for table `tbl_complaint`
--
ALTER TABLE `tbl_complaint`
  ADD PRIMARY KEY (`com_id`);

--
-- Indexes for table `tbl_customer`
--
ALTER TABLE `tbl_customer`
  ADD PRIMARY KEY (`customer_id`);

--
-- Indexes for table `tbl_district`
--
ALTER TABLE `tbl_district`
  ADD PRIMARY KEY (`district_id`);

--
-- Indexes for table `tbl_feedback`
--
ALTER TABLE `tbl_feedback`
  ADD PRIMARY KEY (`feedback_id`);

--
-- Indexes for table `tbl_gallery`
--
ALTER TABLE `tbl_gallery`
  ADD PRIMARY KEY (`img_id`);

--
-- Indexes for table `tbl_place`
--
ALTER TABLE `tbl_place`
  ADD PRIMARY KEY (`place_id`);

--
-- Indexes for table `tbl_rides`
--
ALTER TABLE `tbl_rides`
  ADD PRIMARY KEY (`ride_id`);

--
-- Indexes for table `tbl_slot`
--
ALTER TABLE `tbl_slot`
  ADD PRIMARY KEY (`slot_id`);

--
-- Indexes for table `tbl_subcategory`
--
ALTER TABLE `tbl_subcategory`
  ADD PRIMARY KEY (`subcategory_id`);

--
-- Indexes for table `tbl_user`
--
ALTER TABLE `tbl_user`
  ADD PRIMARY KEY (`user_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `cat_tbl`
--
ALTER TABLE `cat_tbl`
  MODIFY `category_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `tbl_admin`
--
ALTER TABLE `tbl_admin`
  MODIFY `admin_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT for table `tbl_adventure`
--
ALTER TABLE `tbl_adventure`
  MODIFY `adv_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=31;

--
-- AUTO_INCREMENT for table `tbl_booking`
--
ALTER TABLE `tbl_booking`
  MODIFY `booking_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=49;

--
-- AUTO_INCREMENT for table `tbl_category`
--
ALTER TABLE `tbl_category`
  MODIFY `category_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT for table `tbl_complaint`
--
ALTER TABLE `tbl_complaint`
  MODIFY `com_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;

--
-- AUTO_INCREMENT for table `tbl_customer`
--
ALTER TABLE `tbl_customer`
  MODIFY `customer_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=65;

--
-- AUTO_INCREMENT for table `tbl_district`
--
ALTER TABLE `tbl_district`
  MODIFY `district_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=33;

--
-- AUTO_INCREMENT for table `tbl_feedback`
--
ALTER TABLE `tbl_feedback`
  MODIFY `feedback_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `tbl_gallery`
--
ALTER TABLE `tbl_gallery`
  MODIFY `img_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=63;

--
-- AUTO_INCREMENT for table `tbl_place`
--
ALTER TABLE `tbl_place`
  MODIFY `place_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=31;

--
-- AUTO_INCREMENT for table `tbl_rides`
--
ALTER TABLE `tbl_rides`
  MODIFY `ride_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=46;

--
-- AUTO_INCREMENT for table `tbl_slot`
--
ALTER TABLE `tbl_slot`
  MODIFY `slot_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `tbl_subcategory`
--
ALTER TABLE `tbl_subcategory`
  MODIFY `subcategory_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `tbl_user`
--
ALTER TABLE `tbl_user`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=36;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
