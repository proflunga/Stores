-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 19, 2022 at 08:55 AM
-- Server version: 10.4.22-MariaDB
-- PHP Version: 7.4.27

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `e_store`
--

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `id` int(11) NOT NULL,
  `category_name` varchar(100) NOT NULL,
  `category_description` varchar(100) NOT NULL,
  `category_alias` varchar(100) NOT NULL,
  `parent_category` int(11) NOT NULL,
  `date_created` datetime NOT NULL DEFAULT current_timestamp(),
  `user_id` varchar(100) NOT NULL,
  `image` varchar(100) NOT NULL DEFAULT 'default.jpg',
  `status` tinyint(1) NOT NULL DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`id`, `category_name`, `category_description`, `category_alias`, `parent_category`, `date_created`, `user_id`, `image`, `status`) VALUES
(94, ' Liquids', 'Liquids', 'liquids', 94, '2022-05-12 08:34:44', '5', 'default.jpg', 1),
(95, 'Accessories', 'non', 'accessories', 0, '2022-05-12 09:04:26', '5', 'default.jpg', 1),
(96, 'Devices', 'Devices', 'devices', 0, '2022-05-12 09:05:08', '5', '96.jpg', 1);

-- --------------------------------------------------------

--
-- Table structure for table `cities`
--

CREATE TABLE `cities` (
  `id` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `country_id` int(11) NOT NULL,
  `date_added` datetime NOT NULL,
  `user_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `cities`
--

INSERT INTO `cities` (`id`, `name`, `country_id`, `date_added`, `user_id`) VALUES
(1, 'Harare', 1, '2022-03-27 10:10:57', 1);

-- --------------------------------------------------------

--
-- Table structure for table `company_details`
--

CREATE TABLE `company_details` (
  `id` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `phone_numbers` varchar(50) NOT NULL,
  `physical_address` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `logo` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `company_details`
--

INSERT INTO `company_details` (`id`, `name`, `phone_numbers`, `physical_address`, `email`, `logo`) VALUES
(1, 'Clouds to You', '07700000000, 770000000', 'Alexandra Park  Harare', 'test@mail.co', 'default.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `countries`
--

CREATE TABLE `countries` (
  `id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `phone_code` varchar(100) NOT NULL,
  `currency_name` varchar(50) NOT NULL,
  `currency_code` varchar(100) NOT NULL,
  `date_added` datetime NOT NULL,
  `user_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `countries`
--

INSERT INTO `countries` (`id`, `name`, `phone_code`, `currency_name`, `currency_code`, `date_added`, `user_id`) VALUES
(1, 'Zimbabwe', '+263', 'Zim dollar', 'ZWD', '2022-03-27 10:02:54', 0);

-- --------------------------------------------------------

--
-- Table structure for table `customers`
--

CREATE TABLE `customers` (
  `id` int(11) NOT NULL,
  `customer_code` varchar(50) NOT NULL,
  `company` varchar(50) NOT NULL,
  `first_name` varchar(100) NOT NULL,
  `last_name` varchar(100) NOT NULL,
  `nationality` int(11) NOT NULL,
  `id_number` varchar(50) NOT NULL,
  `dob` date NOT NULL,
  `gender_id` int(11) NOT NULL,
  `address_line1` varchar(100) NOT NULL,
  `address_line2` varchar(100) NOT NULL,
  `address_line_city` int(11) NOT NULL,
  `address_line_country` int(11) NOT NULL,
  `email` varchar(100) NOT NULL,
  `phone_number` varchar(100) NOT NULL,
  `phone_code` int(11) NOT NULL,
  `username` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `two_factor_status` tinyint(1) NOT NULL DEFAULT 0,
  `two_factor_pin` varchar(100) DEFAULT NULL,
  `new_account_status` tinyint(1) NOT NULL DEFAULT 1,
  `active_account_status` tinyint(1) NOT NULL DEFAULT 0,
  `user_id` int(11) NOT NULL,
  `date_added` datetime NOT NULL,
  `last_modified` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `customers`
--

INSERT INTO `customers` (`id`, `customer_code`, `company`, `first_name`, `last_name`, `nationality`, `id_number`, `dob`, `gender_id`, `address_line1`, `address_line2`, `address_line_city`, `address_line_country`, `email`, `phone_number`, `phone_code`, `username`, `password`, `two_factor_status`, `two_factor_pin`, `new_account_status`, `active_account_status`, `user_id`, `date_added`, `last_modified`) VALUES
(1, '22100000', 'Aplimac', 'Chikomborero', 'Mandaza', 1, '74745558D45', '1990-03-27', 1, '23 HPOGA', 'PONGA', 1, 1, 'chikolmandaza@gmail.com', '0774376705', 1, 'chiko', 'chiko', 0, NULL, 0, 1, 1, '2022-03-27 10:12:35', '2022-03-27 10:12:35'),
(2, '2205683', 'Raymond Trading', 'Raymond', 'Musa', 1, '74745558D49', '1990-04-15', 1, '23 Hodge', 'Hoffin', 1, 1, 'raymond@trading.com', '0774376705', 1, 'raymond', 'raymond', 0, '55555', 0, 1, 0, '2022-04-15 16:41:46', '2022-04-15 16:41:46'),
(17, '2205472', 'delv', 'rgaegaegaega', 'agdfgdfgdfg', 1, '6465645634', '2022-05-17', 1, ' c cv cv', 'vcvbxcbxcv', 1, 1, 'vimbaiymandaza@gmail.com', '0774376705', 1, 'vimbaiymandaza@gmail.com', '', 0, NULL, 1, 0, 5, '2022-05-16 11:40:11', '2022-05-16 11:40:11');

-- --------------------------------------------------------

--
-- Table structure for table `delivery`
--

CREATE TABLE `delivery` (
  `id` int(11) NOT NULL,
  `order_id` int(11) NOT NULL,
  `date` int(11) NOT NULL DEFAULT current_timestamp(),
  `driver_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `vehicle_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `gender`
--

CREATE TABLE `gender` (
  `id` int(11) NOT NULL,
  `code` varchar(50) NOT NULL,
  `description` varchar(50) NOT NULL,
  `date_added` datetime NOT NULL,
  `user_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `gender`
--

INSERT INTO `gender` (`id`, `code`, `description`, `date_added`, `user_id`) VALUES
(1, 'male', 'Male', '2022-03-27 10:17:29', 1),
(2, 'female', 'Female', '2022-03-27 10:17:29', 1);

-- --------------------------------------------------------

--
-- Table structure for table `individuals`
--

CREATE TABLE `individuals` (
  `id` int(11) NOT NULL,
  `national_id` varchar(100) NOT NULL,
  `title` int(11) NOT NULL,
  `first_name` varchar(100) NOT NULL,
  `middle_name` varchar(100) NOT NULL,
  `last_name` varchar(100) NOT NULL,
  `marital_status` int(11) NOT NULL,
  `gender` int(11) NOT NULL,
  `nationality` int(11) NOT NULL,
  `citizenship` int(11) NOT NULL,
  `birth_date` date NOT NULL,
  `address_line1` varchar(100) NOT NULL,
  `address_line2` varchar(100) NOT NULL,
  `city` int(11) NOT NULL,
  `country` int(11) NOT NULL,
  `mobile_number` varchar(100) NOT NULL,
  `telephone_number` varchar(100) NOT NULL,
  `email_address` varchar(100) NOT NULL,
  `drivers_licence` varchar(100) NOT NULL,
  `passport_number` varchar(100) NOT NULL,
  `created_on` int(11) NOT NULL,
  `created_by` int(11) NOT NULL,
  `status_registration` tinyint(1) NOT NULL,
  `status_active_account` tinyint(1) NOT NULL,
  `profile_image` varchar(50) NOT NULL DEFAULT 'default_individual.jpg'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `individuals`
--

INSERT INTO `individuals` (`id`, `national_id`, `title`, `first_name`, `middle_name`, `last_name`, `marital_status`, `gender`, `nationality`, `citizenship`, `birth_date`, `address_line1`, `address_line2`, `city`, `country`, `mobile_number`, `telephone_number`, `email_address`, `drivers_licence`, `passport_number`, `created_on`, `created_by`, `status_registration`, `status_active_account`, `profile_image`) VALUES
(2, '42585889E78', 1, 'Chiko', 'L', 'Mandaza', 1, 1, 1, 1, '1990-03-10', 'edwedwedew', 'fcwefwefwe', 1, 1, '2528288', '82828281', 'vwv@vfv.vfv', '23fc', 'wef', 0, 0, 0, 0, 'default_individual.jpg'),
(83, '23171212F28', 1, 'Chiko', 'Gowel', 'home', 1, 1, 1, 1, '1990-04-08', '33 hodge', 'dwe', 1, 1, '+263775554324', '+263775554324', 'chikomandaza@outlook.com', '', '', 2022, 2, 0, 0, 'default_individual.jpg'),
(84, '23171212F23', 1, 'Chiko', 'Gowel', 'home', 1, 1, 1, 1, '1990-03-01', '33 hodge', 'qwqw', 1, 1, '+263775554324', '+263775554324', 'chikomandaza@outlook.com', '5f5', '7s7', 2022, 2, 0, 0, 'default_individual.jpg'),
(85, '56747885S58', 1, 'Galis', '', 'Most', 1, 1, 1, 1, '0000-00-00', '23 Hook', 'Samble', 1, 1, '00263776778776', '00263242856987', 'mail@test.com', '', '', 2022, 2, 0, 0, 'default_individual.jpg'),
(86, '23171212F26', 1, 'ghhh', 'jjj', 'home', 1, 1, 1, 1, '2022-03-09', '33 hodge', 'bnb', 1, 1, '+263775554324', '+263775554324', 'chikomandaza@outlook.com', 'm', 'jn', 2022, 3, 0, 0, 'default_individual.jpg'),
(87, '23171212F27', 1, 'wefwef', 'wefwef', 'vrvwrv', 1, 1, 1, 1, '2022-03-31', '33 hodge', 'wefe', 1, 1, '+263775554324', '+263775554324', 'chikomandaza@outlook.com', 'vv', 'QW', 2022, 3, 0, 0, 'default_individual.jpg'),
(88, '23181212F23', 1, 'hkvjkh', 'hkbvkvh', 'lbjhkbh', 1, 1, 1, 1, '1991-04-01', '33 hodge', 'bmjj', 1, 1, '+263775554324', '+263775554324', 'chikomandaza@outlook.com', '5f5', 'PN', 2022, 3, 0, 0, 'default_individual.jpg'),
(89, '43371212F23', 1, 'david', 'farai', 'kosera', 1, 1, 1, 1, '1990-03-11', 'weffqrf', 'regwer', 1, 1, '+263775554324', '+263775554324', 'chikomandaza@outlook.com', 'DL', '7s7', 2022, 3, 0, 0, 'default_individual.jpg'),
(90, '43378212F23', 1, 'Tafadzwa', ' ', 'Dube', 1, 1, 1, 1, '1996-03-02', '33 hodge', 'dfdwfe', 1, 1, '+263775554324', '+263775554324', 'chikomandaza@outlook.com', '', '', 2022, 3, 0, 0, 'default_individual.jpg'),
(91, '42525885G47', 1, 'Temba', '', 'Ronda', 1, 1, 1, 1, '0000-00-00', '23 Hook', 'Samble', 1, 1, '00263776778776', '00263242856987', 'mail@test.com', '', '', 2022, 3, 0, 0, 'default_individual.jpg'),
(92, '43376212F23', 1, 'david', 'Leo', 'motsi', 1, 1, 1, 1, '1990-03-11', '33 hodge', 'red', 1, 1, '+263775554324', '+263775554324', 'chikomandaza@outlook.com', '', '', 2022, 3, 0, 0, 'default_individual.jpg'),
(93, '45858778K87', 1, 'Temba', '', 'Ronda', 1, 1, 1, 1, '0000-00-00', '23 Hook', 'Samble', 1, 1, '00263776778776', '00263242856987', 'mail@test.com', '', '', 2022, 3, 0, 0, 'default_individual.jpg'),
(94, '52545458D58', 1, 'Temba', '', 'Ronda', 1, 1, 1, 1, '0000-00-00', '23 Hook', 'Samble', 1, 1, '00263776778776', '00263242856987', 'mail@test.com', '', '', 2022, 3, 0, 0, 'default_individual.jpg'),
(95, '52552225F965', 1, 'Josepjh', 'Clopas', 'Sanya', 1, 1, 1, 1, '1964-05-01', '8 Ngoni', 'Nyameni', 1, 1, '+263775554324', '+263775554324', 'joseph@yahoo.com', 'na', 'na', 2022, 3, 0, 0, 'default_individual.jpg'),
(96, '85856698F52', 1, 'Chikomboreroo', 'Gowel', 'Mandaza', 1, 1, 1, 1, '1990-02-05', '33 hodge', 'ewfwef', 1, 1, '+263775554324', '+263775554677', 'lovemore@aplimac.co.zw', '', '', 2022, 4, 0, 0, 'default_individual.jpg'),
(99, '23171212F23d', 1, 'btrbgtbbgt', 'trbgtrgb', 'rtbtgrb', 1, 2, 1, 1, '2022-03-08', '33 hodge', 'brgbtb', 1, 1, '+263775554324', '+263775554324', 'test@mail.com', '', '', 2022, 4, 0, 0, 'default_individual.jpg'),
(100, '23171212F2', 1, 'Panashe', 'Gowel', 'SUrname', 1, 1, 1, 1, '1990-03-23', '33 hodge', 'bsdfbsd', 1, 1, '+263775554324', '+263775554324', 'rowin@mail.com', 'vfver3', '43534F', 2022, 11, 0, 0, 'default_individual.jpg'),
(101, '23171212F23z', 1, 'Joseph', 'Gowel', 'Sanya', 1, 1, 1, 1, '2022-03-12', '33 hodge', 'r34tr34', 1, 1, '+263775554324', '+263775554324', 'joseph@yahoo.com', '', '', 2022, 11, 0, 0, 'default_individual.jpg'),
(102, '43371412F23', 1, 'testDir', 'Gowel', 'lastname', 1, 1, 1, 1, '1990-03-20', '33 hodge', 'ewewe', 1, 1, '', '', 'chikomandaza@outlook.com', '5f5', 'we', 2022, 5, 0, 0, 'default_individual.jpg'),
(103, '43371212M23', 1, 'Matsanga', 'Gowel', 'Hondo', 1, 1, 1, 1, '2000-03-14', '33 hodge', 'aaax', 1, 1, '+263775554324', '+263775554324', 'chikomandaza@outlook.com', '', '', 2022, 5, 0, 0, 'default_individual.jpg'),
(104, '23171212Q23', 1, 'Test', 'Gowel', 'Dep', 1, 1, 1, 1, '1990-03-24', '33 hodge', 'dcwdc', 1, 1, '+263775554324', '+263775554324', 'refgd@wrefv', 'd23', '23r', 2022, 5, 0, 0, 'default_individual.jpg'),
(105, '23171212Z23', 1, 'test3', 'Gowel', 'test3', 1, 1, 1, 1, '1990-03-09', '33 hodge', 'default', 4, 1, '+263775554324', '+263775554324', 'aplimaczw@gmail.com', '', '', 2022, 5, 0, 0, 'default_individual.jpg'),
(106, '33344433J33', 2, 'Queen', '', 'Vee', 0, 2, 1, 1, '0000-00-00', '24 Hook', 'Samble', 1, 1, '00263776778776', '00263242856987', 'mail2@test.com', '', '', 2022, 5, 0, 0, 'default_individual.jpg'),
(107, '78545458D58', 1, 'Kwala', '', 'Rule', 1, 1, 1, 1, '0000-00-00', '23 Hook', 'Samble', 1, 1, '00263776778776', '00263242856987', 'mail@testing.com', '', '', 2022, 5, 0, 0, 'default_individual.jpg'),
(108, '99344433J33', 2, 'Sevi', '', 'Nov', 0, 2, 1, 1, '0000-00-00', '24 Hook', 'Samble', 1, 1, '00263776778776', '00263242856987', 'mail2@testing.com', '', '', 2022, 5, 0, 0, 'default_individual.jpg'),
(109, '43399212F23', 1, 'Richard', 'Gowel', 'Prickson', 1, 1, 1, 1, '1990-03-09', '33 hodge', 'efeff', 1, 1, '+263775554324', '+263775554324', 'chikomandaza@outlook.com', 'QWQW', 'PNee', 2022, 5, 0, 0, 'default_individual.jpg'),
(110, '43991212F23', 2, 'Sha', 'Gowel', 'Sha', 1, 1, 1, 1, '1992-03-30', '33 hodge', 'fwefwef', 1, 1, '+263775554324', '+263775554324', 'chikomandaza@outlook.com', '', '', 2022, 5, 0, 0, 'default_individual.jpg'),
(111, '43379992F23', 1, 'Chiko', 'Gowel', 'home', 1, 1, 1, 1, '1990-03-31', '33 hodge', 'tenn', 1, 1, '+263775554324', '+263775554324', 'chikomandaza@outlook.com', '', '', 2022, 5, 0, 0, 'default_individual.jpg'),
(112, '1', 1, 'Klopp1', '', 'Reff1', 1, 1, 1, 1, '2020-01-02', '4 Rod', 'Hatfield', 0, 1, '774525485', '', 'klopaldo@mail.com', '', '', 2022, 5, 0, 0, 'default_individual.jpg'),
(113, '2', 1, 'Klopp2', '', 'Reff2', 0, 1, 1, 1, '1998-01-03', '5 Rod', 'Hatfield', 0, 1, '774525485', '', 'test@mail.com1', '', '', 2022, 5, 0, 0, 'default_individual.jpg'),
(114, '', 0, '', '', '', 0, 0, 0, 0, '0000-00-00', '', '', 0, 0, '', '', '', '', '', 2022, 5, 0, 0, 'default_individual.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `inquiries`
--

CREATE TABLE `inquiries` (
  `id` int(11) NOT NULL,
  `Invoice_number` varchar(50) NOT NULL,
  `customer_id` int(11) NOT NULL,
  `status` tinyint(1) NOT NULL DEFAULT 0,
  `archied_status` int(11) NOT NULL DEFAULT 0,
  `date_of_enquiry` timestamp NOT NULL DEFAULT current_timestamp(),
  `delivery_address` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `inquiries`
--

INSERT INTO `inquiries` (`id`, `Invoice_number`, `customer_id`, `status`, `archied_status`, `date_of_enquiry`, `delivery_address`) VALUES
(1, '25353245', 1, 1, 0, '2022-03-07 22:00:00', 'ededfewfdewfdewfewfewfwefewfew haraea'),
(2, '35345234', 1, 0, 0, '2022-04-06 22:00:00', 'na');

-- --------------------------------------------------------

--
-- Table structure for table `inquiries_products`
--

CREATE TABLE `inquiries_products` (
  `id` int(11) NOT NULL,
  `inquiries_id` int(11) NOT NULL,
  `product_id` int(11) NOT NULL,
  `quantity` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `inquiries_products`
--

INSERT INTO `inquiries_products` (`id`, `inquiries_id`, `product_id`, `quantity`) VALUES
(4, 1, 1, 2),
(5, 1, 2, 3),
(6, 2, 7, 5);

-- --------------------------------------------------------

--
-- Table structure for table `inquiry_cart`
--

CREATE TABLE `inquiry_cart` (
  `id` int(11) NOT NULL,
  `customer_id` int(11) NOT NULL,
  `product_id` int(11) NOT NULL,
  `date` date NOT NULL DEFAULT current_timestamp(),
  `quantity` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `inquiry_cart`
--

INSERT INTO `inquiry_cart` (`id`, `customer_id`, `product_id`, `date`, `quantity`) VALUES
(1, 1, 1, '2022-04-11', 1),
(2, 5, 0, '2022-04-19', 0),
(3, 5, 0, '2022-04-19', 0),
(4, 5, 0, '2022-04-19', 1),
(5, 5, 0, '2022-04-19', 1),
(6, 5, 0, '2022-04-19', 1),
(7, 5, 0, '2022-04-19', 2),
(8, 1, 0, '2022-04-19', 1),
(9, 5, 0, '2022-04-27', 1);

-- --------------------------------------------------------

--
-- Table structure for table `invoices`
--

CREATE TABLE `invoices` (
  `id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `customer_id` int(11) NOT NULL,
  `payment_method_id` int(11) NOT NULL,
  `currency_rate` float NOT NULL,
  `total_bill` float NOT NULL,
  `void_status` tinyint(1) NOT NULL,
  `voided_by` int(11) NOT NULL,
  `void_date` datetime NOT NULL,
  `inquiries_id` int(11) NOT NULL,
  `tax` float NOT NULL,
  `date` date NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `invoice_products`
--

CREATE TABLE `invoice_products` (
  `id` int(11) NOT NULL,
  `product_id` int(11) NOT NULL,
  `invoice_id` int(11) NOT NULL,
  `price` int(11) NOT NULL,
  `quantity` int(11) NOT NULL,
  `discount` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `marital_status`
--

CREATE TABLE `marital_status` (
  `id` int(11) NOT NULL,
  `code` varchar(50) NOT NULL,
  `description` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `marital_status`
--

INSERT INTO `marital_status` (`id`, `code`, `description`) VALUES
(1, 'single', 'Single');

-- --------------------------------------------------------

--
-- Table structure for table `notifications`
--

CREATE TABLE `notifications` (
  `id` int(11) NOT NULL,
  `title` varchar(50) NOT NULL,
  `msg` varchar(100) NOT NULL,
  `date` datetime NOT NULL DEFAULT current_timestamp(),
  `user_id` int(11) NOT NULL,
  `read_status` tinyint(1) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `notifications`
--

INSERT INTO `notifications` (`id`, `title`, `msg`, `date`, `user_id`, `read_status`) VALUES
(17, 'Welcome ', 'fvsewerwg', '2022-05-13 16:18:47', 5, 1),
(18, 'Security', '34y4y45y45y', '2022-05-13 16:18:47', 5, 1);

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE `orders` (
  `id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `inquiry_id` int(11) NOT NULL,
  `document` int(11) NOT NULL,
  `date` datetime NOT NULL,
  `order_status` int(11) NOT NULL DEFAULT 0,
  `archied_status` int(11) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `orders`
--

INSERT INTO `orders` (`id`, `user_id`, `inquiry_id`, `document`, `date`, `order_status`, `archied_status`) VALUES
(1, 1, 1, 0, '2022-04-04 16:19:47', 1, 0),
(2, 1, 2, 0, '2022-04-12 13:00:13', 0, 1);

-- --------------------------------------------------------

--
-- Table structure for table `orders_products`
--

CREATE TABLE `orders_products` (
  `id` int(11) NOT NULL,
  `quotation_products_id` int(11) NOT NULL,
  `quantity` int(11) NOT NULL,
  `orders_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `orders_products`
--

INSERT INTO `orders_products` (`id`, `quotation_products_id`, `quantity`, `orders_id`) VALUES
(1, 1, 5, 1),
(2, 2, 5, 1),
(3, 3, 7, 1),
(4, 6, 33, 2),
(5, 4, 15, 2),
(6, 5, 4, 2);

-- --------------------------------------------------------

--
-- Table structure for table `payment_method`
--

CREATE TABLE `payment_method` (
  `id` int(11) NOT NULL,
  `code` varchar(50) NOT NULL,
  `description` varchar(100) NOT NULL,
  `usd_rate` float NOT NULL,
  `date` datetime NOT NULL DEFAULT current_timestamp(),
  `user_id` int(11) NOT NULL,
  `status` tinyint(1) NOT NULL DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `payment_method`
--

INSERT INTO `payment_method` (`id`, `code`, `description`, `usd_rate`, `date`, `user_id`, `status`) VALUES
(1, 'Cash USD', 'Cash USD Payment', 1, '2022-04-12 18:59:32', 5, 1),
(2, 'CASH ZWD', 'CASH ZWD Payment', 280, '2022-04-12 19:03:06', 5, 1),
(3, 'ECOCASH', 'ECOCASH PAYMENT', 300, '2022-04-12 19:03:06', 5, 1);

-- --------------------------------------------------------

--
-- Table structure for table `pos_cart`
--

CREATE TABLE `pos_cart` (
  `id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `product_id` int(11) NOT NULL,
  `quantity` int(11) NOT NULL,
  `price` float NOT NULL,
  `date_created` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `pos_sale`
--

CREATE TABLE `pos_sale` (
  `id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL DEFAULT 0,
  `customer_id` int(11) NOT NULL DEFAULT 0,
  `invoice_id` int(11) NOT NULL DEFAULT 0,
  `payment_method_id` int(11) NOT NULL,
  `currency_rate` float NOT NULL DEFAULT 1,
  `tax` int(11) NOT NULL,
  `total_bill` float NOT NULL,
  `date` datetime NOT NULL DEFAULT current_timestamp(),
  `void_status` tinyint(1) NOT NULL DEFAULT 0,
  `voided_by` int(11) NOT NULL,
  `void_date` date NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `pos_sale`
--

INSERT INTO `pos_sale` (`id`, `user_id`, `customer_id`, `invoice_id`, `payment_method_id`, `currency_rate`, `tax`, `total_bill`, `date`, `void_status`, `voided_by`, `void_date`) VALUES
(95, 5, 1, 0, 1, 1, 1, 23, '2022-05-16 10:51:32', 0, 0, '2022-05-16'),
(96, 5, 17, 0, 1, 1, 1, 50, '2022-05-16 11:42:13', 0, 0, '2022-05-16'),
(97, 5, 1, 0, 1, 1, 1, 60, '2022-05-16 15:37:26', 0, 0, '2022-05-16'),
(98, 5, 2, 0, 3, 300, 1, 23, '2022-05-16 16:20:18', 0, 0, '2022-05-16');

-- --------------------------------------------------------

--
-- Table structure for table `pos_sales_products`
--

CREATE TABLE `pos_sales_products` (
  `id` int(11) NOT NULL,
  `pos_sale_id` int(11) NOT NULL,
  `product_id` int(11) NOT NULL,
  `quantity` int(11) NOT NULL,
  `price` float NOT NULL,
  `discount` float NOT NULL DEFAULT 0,
  `date` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `pos_sales_products`
--

INSERT INTO `pos_sales_products` (`id`, `pos_sale_id`, `product_id`, `quantity`, `price`, `discount`, `date`) VALUES
(134, 95, 64, 1, 23, 0, '2022-05-16 10:51:32'),
(135, 96, 48, 1, 50, 0, '2022-05-16 11:42:14'),
(136, 97, 30, 1, 10, 0, '2022-05-16 15:37:27'),
(137, 97, 48, 1, 50, 0, '2022-05-16 15:37:27'),
(138, 98, 64, 1, 23, 0, '2022-05-16 16:20:19');

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `id` int(11) NOT NULL,
  `category_id` int(11) NOT NULL,
  `product_name` varchar(100) NOT NULL,
  `product_description` text NOT NULL,
  `product_image` varchar(100) NOT NULL DEFAULT 'default.jpg',
  `product_cost` float NOT NULL DEFAULT 0,
  `product_price` float NOT NULL,
  `tax_id` int(11) NOT NULL DEFAULT 0,
  `product_discount` float NOT NULL DEFAULT 0,
  `product_rating` int(11) NOT NULL DEFAULT 0,
  `product_code` varchar(50) NOT NULL,
  `product_quantity` int(11) NOT NULL,
  `views` int(11) NOT NULL DEFAULT 0,
  `is_featured` tinyint(1) NOT NULL DEFAULT 0,
  `date_added` datetime NOT NULL DEFAULT current_timestamp(),
  `user_id` int(11) NOT NULL,
  `status_published` tinyint(1) NOT NULL DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id`, `category_id`, `product_name`, `product_description`, `product_image`, `product_cost`, `product_price`, `tax_id`, `product_discount`, `product_rating`, `product_code`, `product_quantity`, `views`, `is_featured`, `date_added`, `user_id`, `status_published`) VALUES
(1, 94, 'Nasty Juice  -Cush Man | Mango - 0MG', 'Nasty Juice  -Cush Man | Mango - 0MG', '1-5450.jpg', 0, 40, 2, 1, 2, '8225', 85, 0, 1, '2022-03-27 16:34:54', 1, 1),
(2, 94, 'Watermelon', 'Bearing', '2-6340.jpg', 0, 90, 1, 0, 5, '555T', 1022, 5, 1, '2022-03-27 18:49:42', 1, 1),
(7, 94, 'Nasty Juice  -Trap Queen | Strawbery - 0MG', 'Nasty Juice - Trap Queen - Shake and Vape - Nasty Juice \r\n\r\nTyre\r\n', '7-6939.jpg', 0, 50, 1, 10, 0, 'NJ12312', 7977, 0, 1, '2022-03-29 15:54:32', 1, 1),
(30, 94, 'Nasty Jiuce - Green Ape | Apple - 0mg', 'Green Ape | Apple', '30-3968.png', 0, 10, 0, 0, 0, 'OS100910', 95, 0, 0, '2022-04-18 13:53:12', 5, 1),
(48, 96, 'Smok-Nord 4-Blue grey armor ', 'non', '48-5797.png', 0, 50, 0, 0, 0, '423652366234', 17, 0, 0, '2022-05-05 21:00:49', 5, 1),
(54, 94, 'rvwevervwev', 'x', '54-2781.jpg', 0, 23, 0, 0, 0, 'vewvv', 52, 0, 0, '2022-05-12 11:02:20', 5, 1),
(64, 94, 'f3rfwerfgerg', 'x', '64-3892.png', 0, 23, 0, 0, 0, '4r2r4f234r', 19, 0, 0, '2022-05-13 12:01:18', 5, 1),
(66, 94, 'twtgferfwerfr', 'x', 'default.jpg', 0, 12, 0, 0, 0, 'eferfwerferfer', 3, 0, 0, '2022-05-16 10:39:52', 5, 1);

-- --------------------------------------------------------

--
-- Table structure for table `products_liquids`
--

CREATE TABLE `products_liquids` (
  `id` int(11) NOT NULL,
  `product_id` int(11) NOT NULL,
  `brand` int(11) NOT NULL,
  `flavor` int(11) NOT NULL,
  `strength` int(11) NOT NULL,
  `date` datetime NOT NULL,
  `user` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `products_liquids`
--

INSERT INTO `products_liquids` (`id`, `product_id`, `brand`, `flavor`, `strength`, `date`, `user`) VALUES
(1, 1, 1, 1, 1, '2022-05-02 23:09:44', 0),
(3, 7, 1, 2, 1, '2022-05-04 08:54:24', 0),
(4, 30, 1, 3, 1, '2022-05-04 08:55:52', 0);

-- --------------------------------------------------------

--
-- Table structure for table `products_ordered`
--

CREATE TABLE `products_ordered` (
  `id` int(11) NOT NULL,
  `products_id` int(11) NOT NULL,
  `enquiry_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `products_ordered`
--

INSERT INTO `products_ordered` (`id`, `products_id`, `enquiry_id`) VALUES
(24, 1, 1);

-- --------------------------------------------------------

--
-- Table structure for table `product_brands`
--

CREATE TABLE `product_brands` (
  `id` int(11) NOT NULL,
  `code` varchar(30) NOT NULL,
  `description` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `product_brands`
--

INSERT INTO `product_brands` (`id`, `code`, `description`) VALUES
(1, '', 'NSTY WORLDWIDE SDN BHD'),
(2, '', 'BLVK Order Form Shareef Hassan'),
(3, '', 'Airscream Order Form v6.2'),
(4, '', 'Vape Dinner Lady Order form new'),
(5, '', 'ROW Order Form'),
(6, '', 'Fcukin Flava Order Form');

-- --------------------------------------------------------

--
-- Table structure for table `product_brands_devices`
--

CREATE TABLE `product_brands_devices` (
  `id` int(11) NOT NULL,
  `code` varchar(30) NOT NULL,
  `description` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `product_brands_devices`
--

INSERT INTO `product_brands_devices` (`id`, `code`, `description`) VALUES
(1, 'smok', 'Smok');

-- --------------------------------------------------------

--
-- Table structure for table `product_colour`
--

CREATE TABLE `product_colour` (
  `id` int(11) NOT NULL,
  `code` varchar(30) NOT NULL,
  `description` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `product_colour`
--

INSERT INTO `product_colour` (`id`, `code`, `description`) VALUES
(1, 'Blue grey armor ', 'Blue grey armor '),
(2, 'Red grey armor', 'Red grey armor');

-- --------------------------------------------------------

--
-- Table structure for table `product_devices`
--

CREATE TABLE `product_devices` (
  `id` int(11) NOT NULL,
  `product_id` int(11) NOT NULL,
  `brand` int(11) NOT NULL,
  `model` int(11) NOT NULL,
  `color` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `product_devices`
--

INSERT INTO `product_devices` (`id`, `product_id`, `brand`, `model`, `color`) VALUES
(2, 48, 1, 1, 1);

-- --------------------------------------------------------

--
-- Table structure for table `product_flavours`
--

CREATE TABLE `product_flavours` (
  `id` int(11) NOT NULL,
  `code` varchar(30) NOT NULL,
  `description` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `product_flavours`
--

INSERT INTO `product_flavours` (`id`, `code`, `description`) VALUES
(1, 'Cush Man | Mango', 'Cush Man | Mango'),
(2, 'Trap Queen | Strawbery', 'Trap Queen | Strawbery'),
(3, 'Green Ape | Apple', 'Green Ape | Apple');

-- --------------------------------------------------------

--
-- Table structure for table `product_model`
--

CREATE TABLE `product_model` (
  `id` int(11) NOT NULL,
  `code` varchar(30) NOT NULL,
  `description` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `product_model`
--

INSERT INTO `product_model` (`id`, `code`, `description`) VALUES
(1, 'nord4', 'Nord 4');

-- --------------------------------------------------------

--
-- Table structure for table `product_strength`
--

CREATE TABLE `product_strength` (
  `id` int(11) NOT NULL,
  `code` varchar(30) NOT NULL,
  `description` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `product_strength`
--

INSERT INTO `product_strength` (`id`, `code`, `description`) VALUES
(1, '0mg', '0 MG'),
(2, '3mg', '3 MG'),
(3, '6mg', '6 MG'),
(4, '12mg', '12 MG'),
(5, '18mg', '18 MG'),
(6, '20mg', '20 MG'),
(7, '35mg', '35 MG'),
(8, '50mg', '50 MG');

-- --------------------------------------------------------

--
-- Table structure for table `product_views`
--

CREATE TABLE `product_views` (
  `id` int(11) NOT NULL,
  `product_id` int(11) NOT NULL,
  `views` bigint(20) NOT NULL DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `product_views`
--

INSERT INTO `product_views` (`id`, `product_id`, `views`) VALUES
(5, 1, 10),
(14, 7, 2);

-- --------------------------------------------------------

--
-- Table structure for table `quotations`
--

CREATE TABLE `quotations` (
  `id` int(11) NOT NULL,
  `quotation_number` varchar(50) NOT NULL,
  `inquiries_id` int(11) NOT NULL,
  `customer_details` text NOT NULL,
  `tax` float NOT NULL,
  `date` date NOT NULL DEFAULT current_timestamp(),
  `quotation_date` date NOT NULL,
  `notes` text NOT NULL,
  `payment_method` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `system_date` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `quotations`
--

INSERT INTO `quotations` (`id`, `quotation_number`, `inquiries_id`, `customer_details`, `tax`, `date`, `quotation_date`, `notes`, `payment_method`, `user_id`, `system_date`) VALUES
(11, '22054203', 0, 'x', 0, '2022-05-15', '2022-05-15', 'x', 1, 5, '2022-05-15 18:21:11');

-- --------------------------------------------------------

--
-- Table structure for table `quotation_cart`
--

CREATE TABLE `quotation_cart` (
  `id` int(11) NOT NULL,
  `customer_id` int(11) NOT NULL,
  `customer_details` text NOT NULL,
  `inquiry_id` int(11) NOT NULL,
  `quotation_date` date NOT NULL DEFAULT current_timestamp(),
  `notes` text NOT NULL,
  `payment_method` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `system_date` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `quotation_cart`
--

INSERT INTO `quotation_cart` (`id`, `customer_id`, `customer_details`, `inquiry_id`, `quotation_date`, `notes`, `payment_method`, `user_id`, `system_date`) VALUES
(12, 0, '', 0, '2022-05-15', '', 0, 5, '2022-05-15 18:21:11');

-- --------------------------------------------------------

--
-- Table structure for table `quotation_products`
--

CREATE TABLE `quotation_products` (
  `id` int(11) NOT NULL,
  `quotations_id` int(11) NOT NULL,
  `product_id` int(11) NOT NULL,
  `price` int(11) NOT NULL,
  `quantity` int(11) NOT NULL,
  `discount` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `quotation_products`
--

INSERT INTO `quotation_products` (`id`, `quotations_id`, `product_id`, `price`, `quantity`, `discount`) VALUES
(6, 12, 7, 85, 2, 0);

-- --------------------------------------------------------

--
-- Table structure for table `report_types`
--

CREATE TABLE `report_types` (
  `id` int(11) NOT NULL,
  `code` varchar(30) NOT NULL,
  `description` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `report_types`
--

INSERT INTO `report_types` (`id`, `code`, `description`) VALUES
(1, 'products_demand', 'Product Demand'),
(2, 'customer_sales', 'Customer Sales');

-- --------------------------------------------------------

--
-- Table structure for table `sales`
--

CREATE TABLE `sales` (
  `id` int(11) NOT NULL,
  `user_id_fk` int(11) NOT NULL,
  `order_id` int(11) NOT NULL,
  `status` tinyint(1) NOT NULL,
  `date` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `sales_products`
--

CREATE TABLE `sales_products` (
  `id` int(11) NOT NULL,
  `sales_id` int(11) NOT NULL,
  `orders_products_id` int(11) NOT NULL,
  `quantity` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `site_visits`
--

CREATE TABLE `site_visits` (
  `id` int(11) NOT NULL,
  `customer_id` int(11) NOT NULL,
  `count` bigint(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `site_visits`
--

INSERT INTO `site_visits` (`id`, `customer_id`, `count`) VALUES
(1, 1, 23);

-- --------------------------------------------------------

--
-- Table structure for table `system_modules`
--

CREATE TABLE `system_modules` (
  `id` int(11) NOT NULL,
  `menu_order` int(11) NOT NULL,
  `code` varchar(30) NOT NULL,
  `name` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `system_modules`
--

INSERT INTO `system_modules` (`id`, `menu_order`, `code`, `name`) VALUES
(1, 10, 'inventory', 'inventory'),
(2, 20, 'customers', 'customers'),
(3, 30, 'inquiries', 'inquiries'),
(4, 40, 'orders', 'orders'),
(5, 50, 'sales', 'sales'),
(6, 60, 'pos', 'pos'),
(7, 70, 'stores', 'stores'),
(8, 80, 'my_account', 'My Account'),
(9, 90, 'manage_users', 'Manage Users'),
(10, 100, 'global_config', 'Global Config'),
(11, 31, 'quotations', 'Quotations'),
(12, 41, 'billing', 'Billing');

-- --------------------------------------------------------

--
-- Table structure for table `tax`
--

CREATE TABLE `tax` (
  `id` int(11) NOT NULL,
  `code` varchar(10) NOT NULL,
  `description` varchar(30) NOT NULL,
  `tax_amount` double NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tax`
--

INSERT INTO `tax` (`id`, `code`, `description`, `tax_amount`) VALUES
(1, 'G100', 'General', 2.5),
(2, 'TAX0', 'No Tax', 0);

-- --------------------------------------------------------

--
-- Table structure for table `titles`
--

CREATE TABLE `titles` (
  `id` int(11) NOT NULL,
  `code` varchar(50) NOT NULL,
  `description` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `titles`
--

INSERT INTO `titles` (`id`, `code`, `description`) VALUES
(1, 'mr', 'Mr'),
(2, 'Mrs', 'Mrs'),
(3, 'miss', 'Miss');

-- --------------------------------------------------------

--
-- Table structure for table `users_admin`
--

CREATE TABLE `users_admin` (
  `id` int(11) NOT NULL,
  `first_name` varchar(50) NOT NULL,
  `last_name` varchar(50) NOT NULL,
  `nat_id` varchar(50) NOT NULL,
  `phone_number` varchar(28) NOT NULL,
  `username` varchar(20) NOT NULL,
  `user_email` varchar(200) NOT NULL,
  `password` varchar(20) NOT NULL,
  `profile_image` varchar(50) NOT NULL DEFAULT 'default.jpg',
  `branch` varchar(11) NOT NULL,
  `password_reset_flag` int(11) NOT NULL,
  `password_reset_ticket_num` int(11) DEFAULT NULL,
  `two_factor_status` tinyint(1) NOT NULL,
  `two_factor_pin` varchar(10) NOT NULL,
  `client_id` int(11) NOT NULL,
  `account_status` tinyint(1) NOT NULL,
  `user_group` int(11) NOT NULL,
  `access_level_id` int(11) DEFAULT 1,
  `new_account_flag` tinyint(1) NOT NULL DEFAULT 1,
  `fund_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users_admin`
--

INSERT INTO `users_admin` (`id`, `first_name`, `last_name`, `nat_id`, `phone_number`, `username`, `user_email`, `password`, `profile_image`, `branch`, `password_reset_flag`, `password_reset_ticket_num`, `two_factor_status`, `two_factor_pin`, `client_id`, `account_status`, `user_group`, `access_level_id`, `new_account_flag`, `fund_id`) VALUES
(5, 'Test', 'User', '', '0774376705', 'testuser', 'test@mail.co', '88888888', 'default.jpg', '1', 0, 74373, 1, '55555', 96, 1, 4, 2, 0, 0),
(13, 'Rowin', 'Mhandu', '', '', 'rowin', 'rowin@mail.com', '77777777', 'default.jpg', '1', 0, 0, 0, '55555', 100, 1, 1, 2, 0, 0);

-- --------------------------------------------------------

--
-- Table structure for table `user_access_levels`
--

CREATE TABLE `user_access_levels` (
  `id` int(11) NOT NULL,
  `code` int(11) NOT NULL,
  `description` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user_access_levels`
--

INSERT INTO `user_access_levels` (`id`, `code`, `description`) VALUES
(1, 1, 'Level 1'),
(2, 2, 'Level 2'),
(3, 3, 'Level 3');

-- --------------------------------------------------------

--
-- Table structure for table `user_group`
--

CREATE TABLE `user_group` (
  `id` int(11) NOT NULL,
  `code` varchar(20) NOT NULL,
  `description` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user_group`
--

INSERT INTO `user_group` (`id`, `code`, `description`) VALUES
(1, 'cashier', 'Cashier'),
(2, 'manager', 'Manager'),
(4, 'developer', 'Developer');

-- --------------------------------------------------------

--
-- Table structure for table `user_permissions`
--

CREATE TABLE `user_permissions` (
  `id` int(11) NOT NULL,
  `user_group_id` int(11) NOT NULL,
  `system_modules` int(11) NOT NULL,
  `date` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user_permissions`
--

INSERT INTO `user_permissions` (`id`, `user_group_id`, `system_modules`, `date`) VALUES
(4, 1, 6, '2022-05-03 07:37:41'),
(5, 1, 8, '2022-05-03 07:37:41'),
(6, 2, 1, '2022-05-03 07:39:15'),
(7, 2, 2, '2022-05-03 07:39:15'),
(8, 2, 5, '2022-05-03 07:39:15'),
(9, 2, 6, '2022-05-03 07:39:15'),
(10, 2, 8, '2022-05-03 07:39:15'),
(16, 4, 1, '2022-05-05 11:28:02'),
(17, 4, 2, '2022-05-05 11:28:02'),
(18, 4, 3, '2022-05-05 11:28:02'),
(19, 4, 5, '2022-05-05 11:28:02'),
(20, 4, 6, '2022-05-05 11:28:02'),
(21, 4, 7, '2022-05-05 11:28:02'),
(22, 4, 8, '2022-05-05 11:28:02'),
(23, 4, 9, '2022-05-05 11:28:02'),
(24, 4, 10, '2022-05-05 11:28:02'),
(25, 4, 11, '2022-05-05 11:28:02'),
(26, 4, 12, '2022-05-14 23:26:39');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `category_alias` (`category_alias`),
  ADD UNIQUE KEY `category_name` (`category_name`),
  ADD KEY `parent_category` (`parent_category`);

--
-- Indexes for table `cities`
--
ALTER TABLE `cities`
  ADD PRIMARY KEY (`id`),
  ADD KEY `country_id` (`country_id`);

--
-- Indexes for table `company_details`
--
ALTER TABLE `company_details`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `countries`
--
ALTER TABLE `countries`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `customers`
--
ALTER TABLE `customers`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `email` (`email`),
  ADD UNIQUE KEY `username` (`username`),
  ADD UNIQUE KEY `id_number` (`id_number`),
  ADD UNIQUE KEY `customer_code` (`customer_code`),
  ADD KEY `customers_ibfk_1` (`nationality`),
  ADD KEY `phone_code` (`phone_code`),
  ADD KEY `address_line_city` (`address_line_city`),
  ADD KEY `address_line_country` (`address_line_country`),
  ADD KEY `gender_id` (`gender_id`);

--
-- Indexes for table `delivery`
--
ALTER TABLE `delivery`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `gender`
--
ALTER TABLE `gender`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `individuals`
--
ALTER TABLE `individuals`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `inquiries`
--
ALTER TABLE `inquiries`
  ADD PRIMARY KEY (`id`),
  ADD KEY `customer_id` (`customer_id`);

--
-- Indexes for table `inquiries_products`
--
ALTER TABLE `inquiries_products`
  ADD PRIMARY KEY (`id`),
  ADD KEY `inquiries_products_ibfk_1` (`inquiries_id`),
  ADD KEY `product_id` (`product_id`);

--
-- Indexes for table `inquiry_cart`
--
ALTER TABLE `inquiry_cart`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `invoices`
--
ALTER TABLE `invoices`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `invoice_products`
--
ALTER TABLE `invoice_products`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `marital_status`
--
ALTER TABLE `marital_status`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `code` (`code`);

--
-- Indexes for table `notifications`
--
ALTER TABLE `notifications`
  ADD PRIMARY KEY (`id`),
  ADD KEY `user_id` (`user_id`);

--
-- Indexes for table `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `orders_products`
--
ALTER TABLE `orders_products`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `payment_method`
--
ALTER TABLE `payment_method`
  ADD PRIMARY KEY (`id`),
  ADD KEY `user_id` (`user_id`);

--
-- Indexes for table `pos_cart`
--
ALTER TABLE `pos_cart`
  ADD PRIMARY KEY (`id`),
  ADD KEY `product_id` (`product_id`),
  ADD KEY `user_id` (`user_id`);

--
-- Indexes for table `pos_sale`
--
ALTER TABLE `pos_sale`
  ADD PRIMARY KEY (`id`),
  ADD KEY `pos_sale_ibfk_1` (`payment_method_id`),
  ADD KEY `user_id` (`user_id`),
  ADD KEY `tax` (`tax`),
  ADD KEY `pos_sale_ibfk_4` (`customer_id`);

--
-- Indexes for table `pos_sales_products`
--
ALTER TABLE `pos_sales_products`
  ADD PRIMARY KEY (`id`),
  ADD KEY `pos_sales_products_ibfk_1` (`pos_sale_id`),
  ADD KEY `product_id` (`product_id`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `product_code` (`product_code`),
  ADD KEY `category_id` (`category_id`);

--
-- Indexes for table `products_liquids`
--
ALTER TABLE `products_liquids`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `product_id` (`product_id`),
  ADD KEY `strength` (`strength`),
  ADD KEY `flavor` (`flavor`),
  ADD KEY `brand` (`brand`);

--
-- Indexes for table `products_ordered`
--
ALTER TABLE `products_ordered`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `product_brands`
--
ALTER TABLE `product_brands`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `product_brands_devices`
--
ALTER TABLE `product_brands_devices`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `product_colour`
--
ALTER TABLE `product_colour`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `product_devices`
--
ALTER TABLE `product_devices`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `product_id` (`product_id`),
  ADD KEY `color` (`color`),
  ADD KEY `model` (`model`),
  ADD KEY `product_devices_ibfk_2` (`brand`);

--
-- Indexes for table `product_flavours`
--
ALTER TABLE `product_flavours`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `product_model`
--
ALTER TABLE `product_model`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `product_strength`
--
ALTER TABLE `product_strength`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `product_views`
--
ALTER TABLE `product_views`
  ADD PRIMARY KEY (`id`),
  ADD KEY `product_id` (`product_id`);

--
-- Indexes for table `quotations`
--
ALTER TABLE `quotations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `quotation_cart`
--
ALTER TABLE `quotation_cart`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `user_id` (`user_id`);

--
-- Indexes for table `quotation_products`
--
ALTER TABLE `quotation_products`
  ADD PRIMARY KEY (`id`),
  ADD KEY `quotation_products_ibfk_1` (`quotations_id`);

--
-- Indexes for table `report_types`
--
ALTER TABLE `report_types`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `site_visits`
--
ALTER TABLE `site_visits`
  ADD PRIMARY KEY (`id`),
  ADD KEY `customer_id` (`customer_id`);

--
-- Indexes for table `system_modules`
--
ALTER TABLE `system_modules`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tax`
--
ALTER TABLE `tax`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `titles`
--
ALTER TABLE `titles`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users_admin`
--
ALTER TABLE `users_admin`
  ADD PRIMARY KEY (`id`),
  ADD KEY `client_id` (`client_id`),
  ADD KEY `users_admin_ibfk_2` (`access_level_id`),
  ADD KEY `branch` (`branch`),
  ADD KEY `users_admin_ibfk_1` (`user_group`);

--
-- Indexes for table `user_access_levels`
--
ALTER TABLE `user_access_levels`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `code` (`code`);

--
-- Indexes for table `user_group`
--
ALTER TABLE `user_group`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user_permissions`
--
ALTER TABLE `user_permissions`
  ADD PRIMARY KEY (`id`),
  ADD KEY `system_modules` (`system_modules`),
  ADD KEY `user_group_id` (`user_group_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=97;

--
-- AUTO_INCREMENT for table `cities`
--
ALTER TABLE `cities`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `company_details`
--
ALTER TABLE `company_details`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `countries`
--
ALTER TABLE `countries`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `customers`
--
ALTER TABLE `customers`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `delivery`
--
ALTER TABLE `delivery`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `gender`
--
ALTER TABLE `gender`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `individuals`
--
ALTER TABLE `individuals`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=115;

--
-- AUTO_INCREMENT for table `inquiries`
--
ALTER TABLE `inquiries`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `inquiries_products`
--
ALTER TABLE `inquiries_products`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `inquiry_cart`
--
ALTER TABLE `inquiry_cart`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `invoices`
--
ALTER TABLE `invoices`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `invoice_products`
--
ALTER TABLE `invoice_products`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `marital_status`
--
ALTER TABLE `marital_status`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `notifications`
--
ALTER TABLE `notifications`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT for table `orders`
--
ALTER TABLE `orders`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `orders_products`
--
ALTER TABLE `orders_products`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `payment_method`
--
ALTER TABLE `payment_method`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `pos_cart`
--
ALTER TABLE `pos_cart`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=212;

--
-- AUTO_INCREMENT for table `pos_sale`
--
ALTER TABLE `pos_sale`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=99;

--
-- AUTO_INCREMENT for table `pos_sales_products`
--
ALTER TABLE `pos_sales_products`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=139;

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=67;

--
-- AUTO_INCREMENT for table `products_liquids`
--
ALTER TABLE `products_liquids`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `products_ordered`
--
ALTER TABLE `products_ordered`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;

--
-- AUTO_INCREMENT for table `product_brands`
--
ALTER TABLE `product_brands`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `product_brands_devices`
--
ALTER TABLE `product_brands_devices`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `product_colour`
--
ALTER TABLE `product_colour`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `product_devices`
--
ALTER TABLE `product_devices`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `product_flavours`
--
ALTER TABLE `product_flavours`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `product_model`
--
ALTER TABLE `product_model`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `product_strength`
--
ALTER TABLE `product_strength`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `product_views`
--
ALTER TABLE `product_views`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `quotations`
--
ALTER TABLE `quotations`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `quotation_cart`
--
ALTER TABLE `quotation_cart`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `quotation_products`
--
ALTER TABLE `quotation_products`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `report_types`
--
ALTER TABLE `report_types`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `site_visits`
--
ALTER TABLE `site_visits`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `system_modules`
--
ALTER TABLE `system_modules`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `tax`
--
ALTER TABLE `tax`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `titles`
--
ALTER TABLE `titles`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `users_admin`
--
ALTER TABLE `users_admin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT for table `user_access_levels`
--
ALTER TABLE `user_access_levels`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `user_group`
--
ALTER TABLE `user_group`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `user_permissions`
--
ALTER TABLE `user_permissions`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `cities`
--
ALTER TABLE `cities`
  ADD CONSTRAINT `cities_ibfk_1` FOREIGN KEY (`country_id`) REFERENCES `countries` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `customers`
--
ALTER TABLE `customers`
  ADD CONSTRAINT `customers_ibfk_1` FOREIGN KEY (`nationality`) REFERENCES `countries` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `customers_ibfk_2` FOREIGN KEY (`phone_code`) REFERENCES `countries` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `customers_ibfk_3` FOREIGN KEY (`address_line_city`) REFERENCES `cities` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `customers_ibfk_4` FOREIGN KEY (`address_line_country`) REFERENCES `countries` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `customers_ibfk_5` FOREIGN KEY (`gender_id`) REFERENCES `gender` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `inquiries`
--
ALTER TABLE `inquiries`
  ADD CONSTRAINT `inquiries_ibfk_1` FOREIGN KEY (`customer_id`) REFERENCES `customers` (`id`);

--
-- Constraints for table `inquiries_products`
--
ALTER TABLE `inquiries_products`
  ADD CONSTRAINT `inquiries_products_ibfk_1` FOREIGN KEY (`inquiries_id`) REFERENCES `inquiries` (`id`) ON UPDATE CASCADE,
  ADD CONSTRAINT `inquiries_products_ibfk_2` FOREIGN KEY (`product_id`) REFERENCES `products` (`id`) ON UPDATE CASCADE;

--
-- Constraints for table `notifications`
--
ALTER TABLE `notifications`
  ADD CONSTRAINT `notifications_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `users_admin` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `payment_method`
--
ALTER TABLE `payment_method`
  ADD CONSTRAINT `payment_method_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `users_admin` (`id`);

--
-- Constraints for table `pos_cart`
--
ALTER TABLE `pos_cart`
  ADD CONSTRAINT `pos_cart_ibfk_1` FOREIGN KEY (`product_id`) REFERENCES `products` (`id`),
  ADD CONSTRAINT `pos_cart_ibfk_2` FOREIGN KEY (`user_id`) REFERENCES `users_admin` (`id`);

--
-- Constraints for table `pos_sale`
--
ALTER TABLE `pos_sale`
  ADD CONSTRAINT `pos_sale_ibfk_1` FOREIGN KEY (`payment_method_id`) REFERENCES `payment_method` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `pos_sale_ibfk_2` FOREIGN KEY (`payment_method_id`) REFERENCES `payment_method` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `pos_sale_ibfk_3` FOREIGN KEY (`tax`) REFERENCES `tax` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `pos_sale_ibfk_4` FOREIGN KEY (`customer_id`) REFERENCES `customers` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `pos_sales_products`
--
ALTER TABLE `pos_sales_products`
  ADD CONSTRAINT `pos_sales_products_ibfk_1` FOREIGN KEY (`pos_sale_id`) REFERENCES `pos_sale` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `pos_sales_products_ibfk_2` FOREIGN KEY (`product_id`) REFERENCES `products` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `products`
--
ALTER TABLE `products`
  ADD CONSTRAINT `products_ibfk_1` FOREIGN KEY (`category_id`) REFERENCES `categories` (`id`);

--
-- Constraints for table `products_liquids`
--
ALTER TABLE `products_liquids`
  ADD CONSTRAINT `products_liquids_ibfk_1` FOREIGN KEY (`product_id`) REFERENCES `products` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `products_liquids_ibfk_2` FOREIGN KEY (`strength`) REFERENCES `product_strength` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `products_liquids_ibfk_3` FOREIGN KEY (`flavor`) REFERENCES `product_flavours` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `products_liquids_ibfk_4` FOREIGN KEY (`brand`) REFERENCES `product_brands` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `product_devices`
--
ALTER TABLE `product_devices`
  ADD CONSTRAINT `product_devices_ibfk_1` FOREIGN KEY (`product_id`) REFERENCES `products` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `product_devices_ibfk_2` FOREIGN KEY (`brand`) REFERENCES `product_brands_devices` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `product_devices_ibfk_3` FOREIGN KEY (`color`) REFERENCES `product_colour` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `product_devices_ibfk_4` FOREIGN KEY (`model`) REFERENCES `product_model` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `product_views`
--
ALTER TABLE `product_views`
  ADD CONSTRAINT `product_views_ibfk_1` FOREIGN KEY (`product_id`) REFERENCES `products` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `quotation_cart`
--
ALTER TABLE `quotation_cart`
  ADD CONSTRAINT `quotation_cart_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `users_admin` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `site_visits`
--
ALTER TABLE `site_visits`
  ADD CONSTRAINT `site_visits_ibfk_1` FOREIGN KEY (`customer_id`) REFERENCES `customers` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `users_admin`
--
ALTER TABLE `users_admin`
  ADD CONSTRAINT `users_admin_ibfk_1` FOREIGN KEY (`user_group`) REFERENCES `user_group` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `user_permissions`
--
ALTER TABLE `user_permissions`
  ADD CONSTRAINT `user_permissions_ibfk_1` FOREIGN KEY (`system_modules`) REFERENCES `system_modules` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `user_permissions_ibfk_2` FOREIGN KEY (`user_group_id`) REFERENCES `user_group` (`id`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
