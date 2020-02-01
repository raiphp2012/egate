-- phpMyAdmin SQL Dump
-- version 4.9.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 01, 2020 at 04:47 AM
-- Server version: 10.4.10-MariaDB
-- PHP Version: 7.3.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `egate_ci`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` int(255) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `user_type` varchar(255) NOT NULL DEFAULT 'admin'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `username`, `password`, `user_type`) VALUES
(1, 'admin', 'admin', 'admin');

-- --------------------------------------------------------

--
-- Table structure for table `appusers`
--

CREATE TABLE `appusers` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email_id` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `phone_number` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `login_method` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `firebase_token` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `gender` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `state` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `city` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `dob` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `image` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `delete_status` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `appusers`
--

INSERT INTO `appusers` (`id`, `name`, `email_id`, `phone_number`, `login_method`, `firebase_token`, `gender`, `state`, `city`, `dob`, `image`, `delete_status`, `created_at`, `updated_at`) VALUES
(6, NULL, ' ', '9871515550', 'OTP', NULL, ' ', ' ', ' ', ' ', ' ', '1', '2019-10-10 18:30:00', NULL),
(7, NULL, ' ', '9873560731', 'OTP', NULL, ' ', ' ', ' ', ' ', ' ', '1', '2019-10-10 18:30:00', NULL),
(8, NULL, ' ', '8700853187', 'OTP', NULL, ' ', ' ', ' ', ' ', ' ', '1', '2019-10-10 18:30:00', NULL),
(9, NULL, ' ', '9811587227', 'OTP', NULL, ' ', ' ', ' ', ' ', ' ', '1', '2019-10-20 18:30:00', NULL),
(10, NULL, ' ', '9990369197', 'OTP', NULL, ' ', ' ', ' ', ' ', ' ', '1', '2019-10-20 18:30:00', NULL),
(11, 'Antima', 'anna.17dec@gmail.com', '9910630140', 'OTP', NULL, 'Female', 'Uttar Pradesh', 'Noida', '1982/12/17', 'public/user_images/_user1571747343.png', '1', '2019-10-20 18:30:00', '2019-10-21 18:30:00'),
(12, NULL, ' ', '8800861203', 'OTP', NULL, ' ', ' ', ' ', ' ', ' ', '1', '2019-10-21 18:30:00', NULL),
(13, NULL, ' ', '8076354740', 'OTP', NULL, ' ', ' ', ' ', ' ', ' ', '1', '2019-10-21 18:30:00', NULL),
(14, NULL, ' ', '7985342705', 'OTP', NULL, ' ', ' ', ' ', ' ', ' ', '1', '2019-10-21 18:30:00', NULL),
(15, NULL, ' ', '7017575369', 'OTP', NULL, ' ', ' ', ' ', ' ', ' ', '1', '2019-10-21 18:30:00', NULL),
(16, NULL, ' ', '9313834366', 'OTP', NULL, ' ', ' ', ' ', ' ', ' ', '1', '2019-10-21 18:30:00', NULL),
(17, 'vikash Parashar', 'Vikash@prathamvision.com', '9873396412', 'OTP', NULL, 'Male', 'Madhya Pradesh', 'Indor', '2019/10/31', 'public/user_images/_user1573495988.png', '1', '2019-10-30 18:30:00', '2019-11-10 18:30:00');

-- --------------------------------------------------------

--
-- Table structure for table `app_banner`
--

CREATE TABLE `app_banner` (
  `id` int(255) NOT NULL,
  `b_image` varchar(255) NOT NULL,
  `status` enum('1','0') NOT NULL DEFAULT '1'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `app_banner`
--

INSERT INTO `app_banner` (`id`, `b_image`, `status`) VALUES
(1, 'assets/image/image1.png', '1');

-- --------------------------------------------------------

--
-- Table structure for table `app_image`
--

CREATE TABLE `app_image` (
  `id` int(255) NOT NULL,
  `img_name` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `app_image`
--

INSERT INTO `app_image` (`id`, `img_name`) VALUES
(1, 'all_banner.png');

-- --------------------------------------------------------

--
-- Table structure for table `bottom_banner`
--

CREATE TABLE `bottom_banner` (
  `id` int(255) NOT NULL,
  `b_image` varchar(255) NOT NULL,
  `status` enum('1','0') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `bottom_banner`
--

INSERT INTO `bottom_banner` (`id`, `b_image`, `status`) VALUES
(1, '1111.jpg', '1'),
(2, '62.jpg', '1');

-- --------------------------------------------------------

--
-- Table structure for table `brand`
--

CREATE TABLE `brand` (
  `brand_id` int(100) NOT NULL,
  `brand_name` varchar(255) NOT NULL,
  `status` enum('0','1') NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `brand`
--

INSERT INTO `brand` (`brand_id`, `brand_name`, `status`) VALUES
(2, 'brand1', '1'),
(3, 'brand3', '1'),
(4, 'brand4', '1');

-- --------------------------------------------------------

--
-- Table structure for table `cart`
--

CREATE TABLE `cart` (
  `cart_id` int(100) NOT NULL,
  `pro_id` varchar(255) NOT NULL,
  `user_id` varchar(255) NOT NULL,
  `c_quantity` varchar(255) NOT NULL,
  `size` varchar(255) NOT NULL,
  `colour` varchar(255) NOT NULL,
  `c_price` varchar(255) NOT NULL,
  `coupon` varchar(255) DEFAULT NULL,
  `status` enum('1','0') NOT NULL DEFAULT '0',
  `delete_status` enum('1','0') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `cart`
--

INSERT INTO `cart` (`cart_id`, `pro_id`, `user_id`, `c_quantity`, `size`, `colour`, `c_price`, `coupon`, `status`, `delete_status`) VALUES
(95, '3', '21', '4', '60', '#228B22', '599', NULL, '1', '0'),
(96, '4', '21', '1', '60', '#FFFF00', '799', NULL, '1', '0'),
(97, '1', '21', '4', '50', '#ff0000', '3534', NULL, '1', '0'),
(98, '2', '21', '3', '60', '#FFFF00', '1000', NULL, '1', '0');

-- --------------------------------------------------------

--
-- Table structure for table `category`
--

CREATE TABLE `category` (
  `cat_id` int(100) NOT NULL,
  `cate_name` varchar(255) NOT NULL,
  `category_image` varchar(255) NOT NULL,
  `status` enum('0','1') NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `category`
--

INSERT INTO `category` (`cat_id`, `cate_name`, `category_image`, `status`) VALUES
(6, 'Projectors', 'eg_i9a.png', '1'),
(7, 'SCREENS', 'hero.jpg', '1'),
(8, 'Accessories', 'egate_cable1.jpg', '1'),
(9, 'HEADPHONES', '0DFB7C4954907A9CC6354B251750CC40.jpg', '1');

-- --------------------------------------------------------

--
-- Table structure for table `citis`
--

CREATE TABLE `citis` (
  `city_id` int(100) NOT NULL,
  `city_name` varchar(255) NOT NULL,
  `state_id` varchar(255) NOT NULL,
  `status` enum('1','0') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `citis`
--

INSERT INTO `citis` (`city_id`, `city_name`, `state_id`, `status`) VALUES
(1, 'Adoni', '1', '0'),
(2, 'Amaravati', '1', '0'),
(3, 'Anantapur', '1', '0'),
(4, 'Chandragiri', '1', '0'),
(5, 'Chittoor', '1', '0'),
(6, 'Dowlaiswaram', '1', '0'),
(7, 'Eluru', '1', '0'),
(8, 'Guntur', '1', '0'),
(9, 'Kadapa', '1', '0'),
(10, 'Kakinada', '1', '0'),
(11, 'Kurnool', '1', '0'),
(12, 'Machilipatnam', '1', '0'),
(13, 'Nagarjunako??a', '1', '0'),
(14, 'Rajahmundry', '1', '0'),
(15, 'Srikakulam', '1', '0'),
(16, 'Tirupati', '1', '0'),
(17, 'Vijayawada', '1', '0'),
(18, 'Visakhapatnam', '1', '0'),
(19, 'Vizianagaram', '1', '0'),
(20, 'Yemmiganur', '1', '0'),
(21, 'Itanagar', '2', ''),
(22, 'Dhuburi', '3', ''),
(23, 'Dispur', '3', '0'),
(24, 'Guwahati', '3', '0'),
(25, 'Jorhat', '3', '0'),
(26, 'Nagaon', '3', '0'),
(27, 'Sibsagar', '3', '0'),
(28, 'Silchar', '3', '0'),
(29, 'Tezpur', '3', '0'),
(30, 'Tinsukia', '3', '0'),
(31, 'Ara', '5', '0'),
(32, 'Baruni', '5', '0'),
(33, 'Begusarai', '5', '0'),
(34, 'Bettiah', '5', '0'),
(35, 'Bhagalpur', '5', '0'),
(36, 'Bihar Sharif', '5', '0'),
(37, 'Bodh Gaya', '5', '0'),
(38, 'Buxar', '5', '0'),
(39, 'Chapra', '5', '0'),
(40, 'Darbhanga', '5', '0'),
(41, 'Dehri', '5', '0'),
(42, 'Dinapur Nizamat', '5', '0'),
(43, 'Gaya', '5', '0'),
(44, 'Hajipur', '5', '0'),
(45, 'Jamalpur', '5', '0'),
(46, 'Katihar', '5', '0'),
(47, 'Madhubani', '5', '0'),
(48, 'Motihari', '5', '0'),
(49, 'Munger', '5', '0'),
(50, 'Muzaffarpur', '5', '0'),
(51, 'Patna', '5', '0'),
(52, 'Purnia', '5', '0'),
(53, 'Pusa', '5', '0'),
(54, 'Saharsa', '5', '0'),
(55, 'Samastipur', '5', '0'),
(56, 'Sasaram', '5', '0'),
(57, 'Sitamarhi', '5', '0'),
(58, 'Siwan', '5', '0'),
(66, 'Ambikapur', '4', '0'),
(67, 'Bhilai', '4', '0'),
(68, 'Dhamtari', '4', '0'),
(69, 'Durg', '4', '0'),
(70, 'Jagdalpur', '4', '0'),
(71, 'Raipur', '4', '0'),
(72, 'Rajnandgaon', '4', '0'),
(73, 'Madgaon', '6', '0'),
(74, 'Panaji', '6', '0'),
(75, 'Ahmadabad', '7', '0'),
(76, 'Amreli', '7', '0'),
(77, 'Bharuch', '7', '0');

-- --------------------------------------------------------

--
-- Table structure for table `color`
--

CREATE TABLE `color` (
  `c_id` int(255) NOT NULL,
  `c_name` varchar(255) NOT NULL,
  `c_code` varchar(255) NOT NULL,
  `status` varchar(255) NOT NULL DEFAULT '0'
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `color`
--

INSERT INTO `color` (`c_id`, `c_name`, `c_code`, `status`) VALUES
(2, 'Maroon', '#228B22', '1'),
(3, 'Midnight Blue', '#191970', '1'),
(4, 'Yellow', '#FFFF00', '1'),
(5, 'mustard', '#ffdb58', '1');

-- --------------------------------------------------------

--
-- Table structure for table `contactform_pratham`
--

CREATE TABLE `contactform_pratham` (
  `id` int(255) NOT NULL,
  `fname` varchar(255) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `website` varchar(255) DEFAULT NULL,
  `msg` text DEFAULT NULL,
  `date_time` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `contactform_pratham`
--

INSERT INTO `contactform_pratham` (`id`, `fname`, `email`, `website`, `msg`, `date_time`) VALUES
(10, 'sonali', 'sonaliu2014@gmail.com', '8826589808', 'hi ', '2019-12-03 13:04:52'),
(13, 'Denniscic', 'temptest261214990@gmail.com', 'http://www.xe-88.asia/sitemap.xml', 'http://www.xe-88.asia/sitemap.xml - Show more>>>', '2019-12-03 14:40:54'),
(14, 'RobertZot', 'temptest92130364@gmail.com', 'http://www.918indo.com/tag/deposit-casino-mega88-indonesia-via-pulsa/', 'Deposit Casino Mega88 Indonesia via Pulsa – 918indo.com   <a href=http://www.918indo.com/tag/deposit-casino-mega88-indonesia-via-pulsa/>Click here>>></a>', '2019-12-03 22:48:22'),
(15, 'Vivek Singhal', 'htcars2019@gmail.com', '9599296891', 'looking for developing a website and mobile application (android & ios)', '2019-12-04 06:51:44'),
(16, 'Brandonjaway', 'contentisking1.8@gmail.com', 'https://ngonvl.org', '<a href=https://ngonvl.org>Home</a>', '2019-12-04 19:53:00'),
(17, 'Sourav Mukherjee', 'sourav@pnddigital.com', '07492732273', 'This is Sourav, Currently working with \"Pnddigital Organization\"(pnddigital.com). I\'m a blogger outreach service provider. I\'ve a great resource of high quality genuine blogs with various niche I can easily host your quality article/content in this high quality blogs at very reasonable rates, If you need any reviews about your blogs please contact me...   \r\n\r\nThanks!  \r\nSourav M.\r\nsourav@pnddigital.com\r\nsouravlinkbuildingexpert@gmail.com', '2019-12-06 07:15:48');

-- --------------------------------------------------------

--
-- Table structure for table `keys`
--

CREATE TABLE `keys` (
  `id` int(255) NOT NULL,
  `user_id` varchar(255) NOT NULL,
  `key` varchar(255) NOT NULL,
  `level` varchar(255) NOT NULL,
  `ignore_limit` varchar(255) NOT NULL,
  `is_private_key` varchar(255) NOT NULL,
  `ip_addrresses` varchar(255) NOT NULL,
  `date_created` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `keys`
--

INSERT INTO `keys` (`id`, `user_id`, `key`, `level`, `ignore_limit`, `is_private_key`, `ip_addrresses`, `date_created`) VALUES
(1, '0', 'CODEX@123', '0', '0', '0', 'NULL', '2019-10-04 00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `logo`
--

CREATE TABLE `logo` (
  `id` int(100) NOT NULL,
  `logo_name` varchar(255) NOT NULL,
  `image` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `product`
--

CREATE TABLE `product` (
  `pro_id` int(100) NOT NULL,
  `pro_name` varchar(255) NOT NULL,
  `pro_url` varchar(255) NOT NULL,
  `pro_category_id` varchar(255) NOT NULL,
  `pro_sub_category` varchar(255) NOT NULL,
  `pro_child` varchar(255) DEFAULT NULL,
  `pro_sku` varchar(255) NOT NULL,
  `pro_price` varchar(255) NOT NULL,
  `pro_quantity` varchar(255) NOT NULL,
  `m_name` varchar(255) NOT NULL,
  `m_number` varchar(255) NOT NULL,
  `d_tech` varchar(255) NOT NULL,
  `b_requried` varchar(255) NOT NULL,
  `dis_requried` varchar(255) NOT NULL,
  `bat_include` varchar(255) NOT NULL,
  `w_item` varchar(255) NOT NULL,
  `pro_size` varchar(255) NOT NULL,
  `pro_sale_price` varchar(255) NOT NULL,
  `pro_new` enum('0','1') DEFAULT NULL,
  `pro_arrival` enum('0','1') DEFAULT NULL,
  `metrial_id` varchar(255) NOT NULL,
  `brand_id` varchar(255) NOT NULL,
  `model_name` varchar(255) NOT NULL,
  `pro_feat_image` varchar(255) NOT NULL,
  `pro_gallery_image` varchar(255) NOT NULL,
  `pro_sort_desc` text NOT NULL,
  `pro_full_desc` text NOT NULL,
  `pro_meta_content` varchar(255) NOT NULL,
  `pro_color` varchar(255) NOT NULL,
  `pro_date` date NOT NULL,
  `pro_popular` enum('1','0') DEFAULT NULL,
  `pro_type` enum('MALE','FEMALE') DEFAULT NULL,
  `status` enum('1','0') NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `product`
--

INSERT INTO `product` (`pro_id`, `pro_name`, `pro_url`, `pro_category_id`, `pro_sub_category`, `pro_child`, `pro_sku`, `pro_price`, `pro_quantity`, `m_name`, `m_number`, `d_tech`, `b_requried`, `dis_requried`, `bat_include`, `w_item`, `pro_size`, `pro_sale_price`, `pro_new`, `pro_arrival`, `metrial_id`, `brand_id`, `model_name`, `pro_feat_image`, `pro_gallery_image`, `pro_sort_desc`, `pro_full_desc`, `pro_meta_content`, `pro_color`, `pro_date`, `pro_popular`, `pro_type`, `status`) VALUES
(2, 'sdfg', 'sdfg_564263404', '6', '18', '', 'dsf', '2344', '32', 'ereerer', 'esfrdsafsdfg', 'sdafdf', 'test', 'dsf', 'dsf', 'erttr', '60', '324', '1', NULL, '', '18', '', 'P531-6.png', 'P531-6.png,P531-11.png,P531-12.png', 'dfgfdgfdgfdgfdgfdgdfgfdfddfdffhdgfhfgjgfjhdfgfdgfdgfdgfdgfdgdfgfdfddfdffhdgfhfgjgfjhdfgfdgfdgfdgfdgfdgdfgfdfddfdffhdgfhfgjgfjhdfgfdgfdgfdgfdgfdgdfgfdfddfdffhdgfhfgjgfjhdfgfdgfdgfdgfdgfdgdfgfdfddfdffhdgfhfgjgfjhdfgfdgfdgfdgfdgfdgdfgfdfddfdffhdgfhfgjgfjhdfgfdgfdgfdgfdgfdgdfgfdfddfdffhdgfhfgjgfjhdfgfdgfdgfdgfdgfdgdfgfdfddfdffhdgfhfgjgfjh', 'dfgfdgfdgfdgfdgfdgdfgfdfddfdffhdgfhfgjgfjhdfgfdgfdgfdgfdgfdgdfgfdfddfdffhdgfhfgjgfjhdfgfdgfdgfdgfdgfdgdfgfdfddfdffhdgfhfgjgfjhdfgfdgfdgfdgfdgfdgdfgfdfddfdffhdgfhfgjgfjhdfgfdgfdgfdgfdgfdgdfgfdfddfdffhdgfhfgjgfjhdfgfdgfdgfdgfdgfdgdfgfdfddfdffhdgfhfgjgfjhdfgfdgfdgfdgfdgfdgdfgfdfddfdffhdgfhfgjgfjhdfgfdgfdgfdgfdgfdgdfgfdfddfdffhdgfhfgjgfjh', 'dfgfdgfdgfdgfdgfdgdfgfdfddfdffhdgfhfgjgfjhdfgfdgfdgfdgfdgfdgdfgfdfddfdffhdgfhfgjgfjh', '#228B22', '2020-02-01', NULL, NULL, '1');

-- --------------------------------------------------------

--
-- Table structure for table `product_feedback`
--

CREATE TABLE `product_feedback` (
  `id` int(255) NOT NULL,
  `pro_id` varchar(255) NOT NULL,
  `user_id` varchar(255) NOT NULL,
  `description` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `product_feedback`
--

INSERT INTO `product_feedback` (`id`, `pro_id`, `user_id`, `description`) VALUES
(1, '1', '1', 'test'),
(2, '1', '1', 'test'),
(3, '1', '1', 'test'),
(4, '1', '1', 'test'),
(5, '1', '1', 'test'),
(6, '1', '2', 'dfgdfgdfgdfg'),
(7, '24', '123', 'testy'),
(8, '24', '123', 'testy');

-- --------------------------------------------------------

--
-- Table structure for table `promocode`
--

CREATE TABLE `promocode` (
  `p_id` int(255) NOT NULL,
  `promo_name` varchar(255) NOT NULL,
  `discount_amnt` varchar(255) NOT NULL,
  `exp_date` date NOT NULL,
  `dis_type` enum('rs','percent') DEFAULT NULL,
  `status` enum('1','0') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `promocode`
--

INSERT INTO `promocode` (`p_id`, `promo_name`, `discount_amnt`, `exp_date`, `dis_type`, `status`) VALUES
(1, 'test2', '20', '2019-12-28', 'rs', '1'),
(2, 'test', '30', '2019-12-28', 'percent', '1');

-- --------------------------------------------------------

--
-- Table structure for table `quantity`
--

CREATE TABLE `quantity` (
  `id` int(255) NOT NULL,
  `qnty_name` varchar(255) NOT NULL,
  `status` enum('0','1') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `quantity`
--

INSERT INTO `quantity` (`id`, `qnty_name`, `status`) VALUES
(1, '300', '1'),
(2, '200', '1');

-- --------------------------------------------------------

--
-- Table structure for table `recent_product`
--

CREATE TABLE `recent_product` (
  `id` int(255) NOT NULL,
  `pro_id` varchar(255) NOT NULL,
  `user_id` varchar(255) NOT NULL,
  `created_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `recent_product`
--

INSERT INTO `recent_product` (`id`, `pro_id`, `user_id`, `created_at`) VALUES
(1, '2', '1', '2020-01-27 07:21:06');

-- --------------------------------------------------------

--
-- Table structure for table `referal_code`
--

CREATE TABLE `referal_code` (
  `id` int(255) NOT NULL,
  `user_id` varchar(255) NOT NULL,
  `code` varchar(255) NOT NULL,
  `discount_price` varchar(255) NOT NULL,
  `status` enum('1','0') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `referal_code`
--

INSERT INTO `referal_code` (`id`, `user_id`, `code`, `discount_price`, `status`) VALUES
(1, '1', 'rdergy', '10', '1'),
(2, '2', 'tyr', '20', '1');

-- --------------------------------------------------------

--
-- Table structure for table `shipping_address`
--

CREATE TABLE `shipping_address` (
  `id` int(255) NOT NULL,
  `first_name` varchar(255) NOT NULL,
  `last_name` varchar(255) NOT NULL,
  `country` varchar(255) NOT NULL,
  `state` varchar(255) NOT NULL,
  `city` varchar(255) NOT NULL,
  `postal_code` varchar(255) NOT NULL,
  `phone_no` varchar(255) NOT NULL,
  `user_id` varchar(255) NOT NULL,
  `flat` varchar(255) NOT NULL,
  `street` varchar(255) NOT NULL,
  `od_address` varchar(255) NOT NULL,
  `user_email` varchar(255) NOT NULL,
  `landmark` varchar(255) NOT NULL,
  `address_type` varchar(255) NOT NULL,
  `lat` varchar(255) NOT NULL,
  `lng` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `shipping_address`
--

INSERT INTO `shipping_address` (`id`, `first_name`, `last_name`, `country`, `state`, `city`, `postal_code`, `phone_no`, `user_id`, `flat`, `street`, `od_address`, `user_email`, `landmark`, `address_type`, `lat`, `lng`) VALUES
(1, 'vikash', 'kumar', 'India', 'Uttar Pradesh', 'Noida', '201301', '7404587641', '21', 'shdg', 'test', 'Noida Sector 18, Noida, Uttar Pradesh, India', 'test@gmail.com', 'wer', '', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `size`
--

CREATE TABLE `size` (
  `size_id` int(100) NOT NULL,
  `name` varchar(255) NOT NULL,
  `status` enum('1','0') NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `size`
--

INSERT INTO `size` (`size_id`, `name`, `status`) VALUES
(2, '60', '1'),
(3, '20', '1'),
(4, '30', '1'),
(5, 'xxl', '1'),
(6, 'xl', '1'),
(7, 'sm', '1');

-- --------------------------------------------------------

--
-- Table structure for table `state`
--

CREATE TABLE `state` (
  `st_id` int(100) NOT NULL,
  `state_name` varchar(255) NOT NULL,
  `status` enum('1','0') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `state`
--

INSERT INTO `state` (`st_id`, `state_name`, `status`) VALUES
(1, 'Andhra Pradesh', '1'),
(2, 'Arunachal Pradesh', '1'),
(3, 'Assam', '1'),
(4, 'Chhattisgarh', '1'),
(5, 'Bihar', '1'),
(6, 'Goa', '1'),
(7, 'Gujarat', '1'),
(8, 'Haryana', '1'),
(9, 'Himachal Pradesh', '1'),
(10, 'Jammu and Kashmi', '1'),
(11, 'Jharkhand', '1'),
(12, 'Karnataka', '1'),
(13, 'Kerala', '1'),
(14, 'Madhya Pradesh', ''),
(15, 'Maharashtra', '1'),
(16, 'Manipur', '1'),
(17, 'Meghalaya', '1'),
(18, 'Mizoram', '1'),
(19, 'Nagaland', '1'),
(20, 'Odisha', '1'),
(21, 'Punjab', '1'),
(22, 'Rajasthan', '1'),
(23, 'Sikkim', '1'),
(24, 'Tamil Nadu', '1'),
(25, 'Telangana', '1'),
(26, 'Tripura', '1'),
(27, 'Uttar Pradesh', '1'),
(28, 'Uttarakhand', '1'),
(29, 'West Bengal', '1');

-- --------------------------------------------------------

--
-- Table structure for table `states`
--

CREATE TABLE `states` (
  `st_id` int(255) NOT NULL,
  `state_name` varchar(255) NOT NULL,
  `status` enum('1','0') NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `subcategory`
--

CREATE TABLE `subcategory` (
  `sub_id` int(100) NOT NULL,
  `sub_cat_name` varchar(255) NOT NULL,
  `sabcat_image` varchar(255) NOT NULL,
  `category_id` varchar(255) NOT NULL,
  `status` enum('0','1') NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `subcategory`
--

INSERT INTO `subcategory` (`sub_id`, `sub_cat_name`, `sabcat_image`, `category_id`, `status`) VALUES
(1, 'I Series', 'half.jpg', '1', '1'),
(2, 'K Series', 'women_tshirt.jpg', '1', '1'),
(3, 'P Series', 't-shirt.jpg', '1', '1'),
(4, 'X Series', 'him.jpg', '1', '1'),
(5, 'Q Series', 'her.jpg', '1', '1'),
(6, 'Eyelet', 'mensshirt,jpg', '2', '1'),
(7, 'Maptype', 'womens.jpg', '2', '1'),
(8, 'Pull Down', 'printed.jpg', '2', '1'),
(9, 'Auto Lock', 'kids.jpg', '2', '1'),
(10, 'Tropod', 'mensshoes', '2', '1'),
(11, 'womens', 'womensshoes.jpg', '3', '1'),
(12, 'youth', 'youth.jpg', '3', '1'),
(13, 'Jacket', 'jacket.jpg', '4', '1'),
(14, 'pullovers', 'pullovers.jpg', '4', '1'),
(15, 'sweatshirt', 'sweatshirt.jpg', '4', '1'),
(16, 'Duffle', 'duffle.jpg', '5', '1'),
(17, 'Laptop', 'laptop.jpg', '5', '1'),
(18, 'I SERIES', '19--(1)1.png', '6', '1'),
(19, 'K SERIES', 'K9-11.png', '6', '1'),
(20, 'P SERIES', 'p9-31.png', '6', '1'),
(21, 'X SERIES', 'x3-1.png', '6', '1'),
(22, 'Q SERIES', 'P531-11.png', '6', '1');

-- --------------------------------------------------------

--
-- Table structure for table `subchild`
--

CREATE TABLE `subchild` (
  `id` int(255) NOT NULL,
  `sub_child_name` varchar(255) NOT NULL,
  `sub_id` varchar(255) NOT NULL,
  `category_id` varchar(255) NOT NULL,
  `child_image` varchar(255) NOT NULL,
  `status` enum('0','1') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `subchild`
--

INSERT INTO `subchild` (`id`, `sub_child_name`, `sub_id`, `category_id`, `child_image`, `status`) VALUES
(1, 'HALF SALVES', '1', '1', 'halfmens.jpg', '1'),
(2, 'FULL SALVES', '1', '1', 'fullmens.jpg', '1'),
(3, 'BASIC', '1', '1', 'basic.jpg', '1'),
(4, 'DOODLS', '1', '1', 'doodls.jpg', '1'),
(5, 'polo', '1', '1', 'polo.jpg', '1'),
(6, 'half', '2', '1', 'halfmens.jpg', '1'),
(7, 'Full salvess', '7', '1', 'full1.jpg', '1'),
(8, 'basic', '7', '1', 'basic1.jpg', '1'),
(9, 'Doodls', '11', '1', 'doodles1.jpg', '1'),
(10, 'polo', '7', '1', 'polo3.jpg', '1'),
(11, 'half', '8', '1', 'half3.jpg', '1'),
(12, 'half', '4', '1', 'half4.jpg', '1'),
(13, 'half', '5', '1', 'her1.jpg', '1'),
(14, 'Full salvess', '8', '1', 'full11.jpg', '1'),
(15, 'Full Salves', '2', '1', 'fullwomens.jpg', '1'),
(16, 'BASIC', '2', '1', 'basicwomens.jpg', '1'),
(17, 'DOODLS', '2', '1', 'doodlswomens', '1'),
(18, 'POLO', '2', '1', 'doodlswomen.jpg', '1'),
(19, 'FULL SALVES', '3', '1', 'printmens.jpg', '1'),
(20, 'Half SALVES', '3', '1', 'printmens.jpg', '1'),
(21, 'HALF SALVES', '6', '2', 'halfmens.jpg', '1'),
(22, 'FULL SALVES', '7', '2', 'full.jpg', '1'),
(23, 'printed', '8', '2', 'printedmens.jpg', '1'),
(24, 'Half ', '9', '2', 'halfkids.jpg', '1'),
(25, 'FULL ', '9', '2', 'fullkids.jpg', '1'),
(26, 'casual', '10', '3', 'casual.jpg', '1'),
(27, 'SPORTS', '10', '3', 'sports.jpg', '1'),
(28, 'casual', '11', '3', 'wcasual.jpg', '1'),
(29, 'casual', '12', '3', 'ycasual.jpg', '1'),
(30, 'sports', '12', '3', 'sportsss.jpg', '1'),
(31, 'Half ', '13', '4', 'halfjacket.jpg', '1'),
(32, 'FULL', '13', '4', 'fulljacket.jpg', '1'),
(33, 'HALF', '14', '4', 'pulloversmens.jpg', '1'),
(34, 'full', '14', '4', 'pulloversmens.jpg', '1'),
(35, 'Half', '15', '4', 'haflsweet.jpg', '1'),
(36, 'full', '15', '4', 'fullsweet.jpg', '1');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_user`
--

CREATE TABLE `tbl_user` (
  `user_id` int(255) NOT NULL,
  `token` varchar(255) NOT NULL,
  `user_name` varchar(255) NOT NULL,
  `user_password` varchar(255) NOT NULL,
  `user_phone` varchar(255) DEFAULT NULL,
  `user_email` varchar(255) DEFAULT NULL,
  `first_name` varchar(255) NOT NULL,
  `last_name` varchar(255) NOT NULL,
  `state` varchar(255) NOT NULL,
  `city` varchar(255) NOT NULL,
  `user_image` varchar(255) NOT NULL,
  `user_type` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_user`
--

INSERT INTO `tbl_user` (`user_id`, `token`, `user_name`, `user_password`, `user_phone`, `user_email`, `first_name`, `last_name`, `state`, `city`, `user_image`, `user_type`) VALUES
(2, 'sdffr', 'test', '', '12345851', '', '', '', '', '', '46989cfd87655025c191b5aff5c6b81b.png', ''),
(3, 'sdfdf', 'test', '', '', '', '', '', '', '', '', ''),
(4, 'sdfdf', 'test', '', '1', '', '', '', '', '', '', ''),
(5, 'sdfdf', 'vikas', 'test', '12333333345', 'vik2813110@gmail.com', 'vikash', 'sharma', 'bihar', 'gaya', '', 'user'),
(6, 'sdfdf', 'vikash', 'admin', '1234567890', 'vik281315@gmail.com', 'vikash', 'kumar', '1', '1', '', 'user'),
(7, 'sdfdfr', '', '', '1245562345', '', '', '', '', '', '', ''),
(8, '3434', 'asd', '1234567', '098754563334', 'dfsgdw@dfg.dfg', 'test', 'test', '1', '1', '', 'user'),
(9, '3434', '', '', '098754568976', '', '', '', '', '', '', ''),
(10, '3434', '', '', '9873396412', '', '', '', '', '', '', ''),
(11, '3434', '', '', '9873396499', '', '', '', '', '', '', ''),
(12, '3434', '', '', '9873396494', '', '', '', '', '', '', ''),
(13, '3434', '', '', '9873396496', '', '', '', '', '', '', ''),
(14, '3434', '', '', '9873396490', '', '', '', '', '', '', ''),
(15, '3212', '', '', '0987545689', '', '', '', '', '', '', ''),
(16, '', 'vikas', 'test', '', 'bsslvikas@gmail.com', 'vikash', 'sharma', '', '', '', ''),
(17, 'vikash', '', '', '', 'vik2813110@gmail.com', '', '', '', '', '', ''),
(18, '', 'dfg', 'gh', NULL, 'df@fg.fgh.gh', 'fg', 'fdg', '', '', '', ''),
(19, '', 'dfg', 'gh', NULL, 'df@fg.fgh.gh', 'fg', 'fdg', '', '', '', ''),
(20, '', 'test3', 'test3', '1234567890', 'vik23@fg.fgh', 'vikas', 'dfgh', 'fgh', 'fhgfgh', '', ''),
(21, '', 'test3', 'test3', '1234567890', 'test@gmail.com', 'test3', 'test', 'up', 'noida', '', ''),
(22, 'test', '', '', '123456789', 'vik2813110@gmail.com', '', '', '', '', '', ''),
(23, 'test2', '', '', '12345678923', 'vik28131sdf10@gmail.com', '', '', '', '', '', ''),
(24, 'test23', '', '', '123456783', 'vik281313sdf10@gmail.com', '', '', '', '', '', ''),
(25, 'test23ds', '', '', '123456123', 'vik281313sdsf10@gmail.com', '', '', '', '', '', ''),
(26, 'test2er3ds', '', '', '1234536123', 'vik281sf10@gmail.com', '', '', '', '', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `top_banner`
--

CREATE TABLE `top_banner` (
  `id` int(255) NOT NULL,
  `b_image` varchar(255) NOT NULL,
  `status` enum('1','0') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `top_banner`
--

INSERT INTO `top_banner` (`id`, `b_image`, `status`) VALUES
(3, 'banner_cloathing.jpg', '1');

-- --------------------------------------------------------

--
-- Table structure for table `transction_history`
--

CREATE TABLE `transction_history` (
  `id` int(255) NOT NULL,
  `user_id` varchar(255) NOT NULL,
  `product_id` varchar(255) NOT NULL,
  `amount` varchar(255) NOT NULL,
  `promo_code` varchar(255) NOT NULL,
  `order_id` varchar(255) NOT NULL,
  `dlvry_address` varchar(255) NOT NULL,
  `status` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `transction_history`
--

INSERT INTO `transction_history` (`id`, `user_id`, `product_id`, `amount`, `promo_code`, `order_id`, `dlvry_address`, `status`) VALUES
(9, '21', '[[\"1\",\"2\",\"70\",\"3534\",\"#0000A0\"],[\"2\",\"2\",\"60\",\"1000\",\"#ff0000\"]]', '9038', '30', '989988', '1', 'success'),
(10, '21', '[[\"1\",\"1\",\"12\",\"3534\",\"#0000A0\"]]', '3504', '30', '111194', '1', 'success'),
(11, '21', '[[\"2\",\"1\",\"60\",\"1000\",\"\"]]', '970', '30', '176265', '1', 'success'),
(12, '21', '[[\"1\",\"2\",\"12\",\"3534\",\"#ff0000\"]]', '7038', '30', '953622', '1', 'success'),
(13, '21', '[[\"1\",\"3\",\"70\",\"3534\",\"#ff0000\"]]', '10572', '30', '784918', '1', 'success'),
(14, '21', '[[\"1\",\"2\",\"70\",\"3534\",\"#ff0000\"]]', '7038', '30', '858096', '1', 'success'),
(15, '21', '[[\"1\",\"1\",\"60\",\"3534\",\"#ff0000\"]]', '3504', '30', '652879', '1', 'success'),
(16, '21', '[[\"1\",\"3\",\"12\",\"3534\",\"#0000A0\"]]', '10572', '30', '235179', '1', 'success'),
(17, '21', '[[\"1\",\"2\",\"12\",\"3534\",\"\"]]', '7038', '30', '828889', '1', 'success'),
(18, '21', '[[\"1\",\"2\",\"60\",\"3534\",\"\"]]', '7038', '30', '141370', '1', 'success'),
(19, '21', '[[\"3\",\"2\",\"60\",\"599\",\"\"]]', '1168', '30', '506292', '1', 'success'),
(20, '21', '[[\"3\",\"2\",\"60\",\"599\",\"\"]]', '1168', '30', '624071', '1', 'success'),
(21, '21', '[[\"3\",\"3\",\"60\",\"599\",\"\"]]', '1767', '30', '746556', '1', 'success'),
(22, '21', '[[\"1\",\"3\",\"60\",\"3534\",\"\"]]', '10572', '30', '735859', '1', 'success'),
(23, '21', '[[\"3\",\"1\",\"60\",\"599\",\"\"]]', '569', '30', '237863', '1', 'success'),
(24, '21', '[[\"3\",\"3\",\"60\",\"599\",\"\"]]', '1767', '30', '602969', '1', 'success'),
(25, '21', '[[\"3\",\"2\",\"60\",\"599\",\"\"]]', '1168', '30', '877635', '1', 'success'),
(26, '21', '[[\"1\",\"1\",\"60\",\"3534\",\"\"]]', '3504', '30', '615656', '1', 'success'),
(27, '21', '[[\"3\",\"1\",\"60\",\"599\",\"\"]]', '569', '30', '274175', '1', 'success'),
(28, '21', '[[\"1\",\"1\",\"70\",\"3534\",\"\"]]', '3504', '30', '757771', '1', 'success'),
(29, '21', '[[\"1\",\"2\",\"50\",\"3534\",\"\"]]', '7038', '30', '923851', '1', 'success'),
(30, '21', '[[\"3\",\"1\",\"60\",\"599\",\"\"]]', '569', '30', '79015', '1', 'success'),
(31, '21', '[[\"3\",\"1\",\"60\",\"599\",\"\"]]', '569', '30', '309759', '1', 'success'),
(32, '21', '[[\"1\",\"1\",\"60\",\"3534\",\"\"]]', '3504', '30', '333104', '1', 'success'),
(33, '21', '[[\"1\",\"2\",\"50\",\"3534\",\"\"]]', '7038', '30', '51651', '1', 'success'),
(34, '21', '[[\"1\",\"1\",\"60\",\"3534\",\"\"]]', '3504', '30', '3673', '1', 'success'),
(35, '21', '[[\"3\",\"1\",\"60\",\"599\",\"\"]]', '569', '30', '894722', '1', 'success'),
(36, '21', '[[\"3\",\"1\",\"60\",\"599\",\"\"]]', '569', '30', '42758', '1', 'success'),
(37, '21', '[[\"3\",\"1\",\"60\",\"599\",\"\"]]', '569', '30', '522731', '1', 'success'),
(38, '21', '[[\"1\",\"2\",\"60\",\"3534\",\"\"]]', '7038', '30', '844389', '1', 'success'),
(39, '21', '[[\"3\",\"2\",\"60\",\"599\",\"\"]]', '1168', '30', '922297', '1', 'success'),
(40, '21', '[[\"3\",\"1\",\"60\",\"599\",\"\"]]', '569', '30', '581256', '1', 'success'),
(41, '21', '[[\"3\",\"1\",\"60\",\"599\",\"\"]]', '569', '30', '897201', '1', 'success'),
(42, '21', '[[\"3\",\"1\",\"60\",\"599\",\"\"]]', '569', '30', '867010', '1', 'success'),
(43, '21', '[[\"3\",\"1\",\"60\",\"599\",\"\"]]', '569', '30', '760942', '1', 'success'),
(44, '21', '[[\"3\",\"1\",\"60\",\"599\",\"\"]]', '569', '30', '787414', '1', 'success'),
(45, '21', '[[\"3\",\"1\",\"60\",\"599\",\"\"]]', '569', '30', '62545', '1', 'success'),
(46, '21', '[[\"1\",\"1\",\"60\",\"3534\",\"\"]]', '3504', '30', '337443', '1', 'success'),
(47, '21', '[[\"3\",\"1\",\"60\",\"599\",\"\"]]', '569', '30', '826159', '1', 'success'),
(48, '21', '[[\"1\",\"1\",\"70\",\"3534\",\"\"]]', '3504', '30', '966039', '1', 'success'),
(49, '21', '[[\"3\",\"1\",\"60\",\"599\",\"\"]]', '569', '30', '265150', '1', 'success'),
(50, '21', '[[\"3\",\"1\",\"60\",\"599\",\"\"]]', '569', '30', '709251', '1', 'success'),
(51, '21', '[[\"3\",\"1\",\"60\",\"599\",\"\"]]', '569', '30', '269827', '1', 'success'),
(52, '21', '[[\"1\",\"1\",\"60\",\"3534\",\"\"]]', '3534', '0', '526756', '1', 'success'),
(53, '21', '[[\"1\",\"1\",\"60\",\"3534\",\"\"]]', '3534', '0', '844515', '1', 'success'),
(54, '21', '[[\"1\",\"1\",\"60\",\"3534\",\"\"]]', '3534', '0', '422869', '1', 'success'),
(55, '21', '[[\"1\",\"1\",\"60\",\"3534\",\"\"]]', '3534', '0', '330463', '1', 'success'),
(56, '21', '[[\"1\",\"1\",\"60\",\"3534\",\"\"]]', '3534', '0', '862139', '1', 'success'),
(57, '21', '[[\"1\",\"1\",\"60\",\"3534\",\"\"]]', '3534', '0', '193865', '1', 'success'),
(58, '2', '[]', '21', 'we2', '1', 'e', 'w'),
(59, '2', '[]', '21', 'we2', '1', 'e', 'w'),
(60, '2', '[]', '21', 'we2', '1', 'e', 'w'),
(61, '2', '[]', '21', 'we2', '1', 'e', 'w'),
(62, '2', '[]', '21', 'we2', '1', 'e', 'w'),
(63, '2', '[]', '21', 'we2', '1', 'e', 'w'),
(64, '2', '[]', '21', 'we2', '1', 'e', 'w'),
(65, '2', '[]', '21', 'we2', '1', 'e', 'w'),
(66, '2', '[]', '21', 'we2', '1', 'e', 'w'),
(67, '2', '[[null,null,null,null]]', '213', 'test', '1', 'tesr', '1'),
(68, '2', '[[null,null,null,null]]', '213', 'test', '1', 'tesr', '1');

-- --------------------------------------------------------

--
-- Table structure for table `wallet`
--

CREATE TABLE `wallet` (
  `id` int(255) NOT NULL,
  `user_id` varchar(255) NOT NULL,
  `amount` varchar(255) NOT NULL,
  `method` varchar(255) NOT NULL,
  `transaction_type` varchar(255) NOT NULL,
  `created_at` datetime NOT NULL,
  `updated_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `wallet`
--

INSERT INTO `wallet` (`id`, `user_id`, `amount`, `method`, `transaction_type`, `created_at`, `updated_at`) VALUES
(1, '5', '255', 'by referal', 'credit', '2019-11-14 03:10:07', '0000-00-00 00:00:00'),
(2, '13', '200', 'by referal', 'credit', '2019-11-14 01:02:04', '0000-00-00 00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `wishlist`
--

CREATE TABLE `wishlist` (
  `w_id` int(255) NOT NULL,
  `pro_id` varchar(255) NOT NULL,
  `user_id` varchar(255) NOT NULL,
  `status` enum('1','0') NOT NULL,
  `delete_status` enum('1','0') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `wishlist`
--

INSERT INTO `wishlist` (`w_id`, `pro_id`, `user_id`, `status`, `delete_status`) VALUES
(1, '1', '21', '1', '0');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `appusers`
--
ALTER TABLE `appusers`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `app_banner`
--
ALTER TABLE `app_banner`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `app_image`
--
ALTER TABLE `app_image`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `bottom_banner`
--
ALTER TABLE `bottom_banner`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `brand`
--
ALTER TABLE `brand`
  ADD PRIMARY KEY (`brand_id`);

--
-- Indexes for table `cart`
--
ALTER TABLE `cart`
  ADD PRIMARY KEY (`cart_id`);

--
-- Indexes for table `category`
--
ALTER TABLE `category`
  ADD PRIMARY KEY (`cat_id`);

--
-- Indexes for table `citis`
--
ALTER TABLE `citis`
  ADD PRIMARY KEY (`city_id`);

--
-- Indexes for table `color`
--
ALTER TABLE `color`
  ADD PRIMARY KEY (`c_id`);

--
-- Indexes for table `contactform_pratham`
--
ALTER TABLE `contactform_pratham`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `keys`
--
ALTER TABLE `keys`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `logo`
--
ALTER TABLE `logo`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `product`
--
ALTER TABLE `product`
  ADD PRIMARY KEY (`pro_id`);

--
-- Indexes for table `product_feedback`
--
ALTER TABLE `product_feedback`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `promocode`
--
ALTER TABLE `promocode`
  ADD PRIMARY KEY (`p_id`);

--
-- Indexes for table `quantity`
--
ALTER TABLE `quantity`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `recent_product`
--
ALTER TABLE `recent_product`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `referal_code`
--
ALTER TABLE `referal_code`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `shipping_address`
--
ALTER TABLE `shipping_address`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `size`
--
ALTER TABLE `size`
  ADD PRIMARY KEY (`size_id`);

--
-- Indexes for table `state`
--
ALTER TABLE `state`
  ADD PRIMARY KEY (`st_id`);

--
-- Indexes for table `subcategory`
--
ALTER TABLE `subcategory`
  ADD PRIMARY KEY (`sub_id`);

--
-- Indexes for table `subchild`
--
ALTER TABLE `subchild`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_user`
--
ALTER TABLE `tbl_user`
  ADD PRIMARY KEY (`user_id`);

--
-- Indexes for table `top_banner`
--
ALTER TABLE `top_banner`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `transction_history`
--
ALTER TABLE `transction_history`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `wallet`
--
ALTER TABLE `wallet`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `wishlist`
--
ALTER TABLE `wishlist`
  ADD PRIMARY KEY (`w_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `appusers`
--
ALTER TABLE `appusers`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `app_banner`
--
ALTER TABLE `app_banner`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `app_image`
--
ALTER TABLE `app_image`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `bottom_banner`
--
ALTER TABLE `bottom_banner`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `brand`
--
ALTER TABLE `brand`
  MODIFY `brand_id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `cart`
--
ALTER TABLE `cart`
  MODIFY `cart_id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=99;

--
-- AUTO_INCREMENT for table `category`
--
ALTER TABLE `category`
  MODIFY `cat_id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `citis`
--
ALTER TABLE `citis`
  MODIFY `city_id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=78;

--
-- AUTO_INCREMENT for table `contactform_pratham`
--
ALTER TABLE `contactform_pratham`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `keys`
--
ALTER TABLE `keys`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `logo`
--
ALTER TABLE `logo`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `product`
--
ALTER TABLE `product`
  MODIFY `pro_id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `product_feedback`
--
ALTER TABLE `product_feedback`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `promocode`
--
ALTER TABLE `promocode`
  MODIFY `p_id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `quantity`
--
ALTER TABLE `quantity`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `recent_product`
--
ALTER TABLE `recent_product`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `referal_code`
--
ALTER TABLE `referal_code`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `shipping_address`
--
ALTER TABLE `shipping_address`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `size`
--
ALTER TABLE `size`
  MODIFY `size_id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `state`
--
ALTER TABLE `state`
  MODIFY `st_id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=30;

--
-- AUTO_INCREMENT for table `subcategory`
--
ALTER TABLE `subcategory`
  MODIFY `sub_id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- AUTO_INCREMENT for table `subchild`
--
ALTER TABLE `subchild`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=37;

--
-- AUTO_INCREMENT for table `tbl_user`
--
ALTER TABLE `tbl_user`
  MODIFY `user_id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;

--
-- AUTO_INCREMENT for table `top_banner`
--
ALTER TABLE `top_banner`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `transction_history`
--
ALTER TABLE `transction_history`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=69;

--
-- AUTO_INCREMENT for table `wallet`
--
ALTER TABLE `wallet`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `wishlist`
--
ALTER TABLE `wishlist`
  MODIFY `w_id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
