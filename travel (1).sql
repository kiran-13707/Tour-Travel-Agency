-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 05, 2026 at 08:16 AM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `travel`
--

-- --------------------------------------------------------

--
-- Table structure for table `book`
--

CREATE TABLE `book` (
  `id` int(11) NOT NULL,
  `hotelID` int(11) NOT NULL,
  `hotelName` varchar(255) NOT NULL,
  `startDate` date NOT NULL,
  `endDate` date NOT NULL,
  `userID` int(11) NOT NULL,
  `price` decimal(10,2) NOT NULL,
  `peopleValue` int(11) NOT NULL,
  `discount` decimal(5,2) DEFAULT 0.00,
  `bookingName` varchar(255) NOT NULL,
  `bookingEmail` varchar(255) NOT NULL,
  `bookingPhone` varchar(20) NOT NULL,
  `create_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `book`
--

INSERT INTO `book` (`id`, `hotelID`, `hotelName`, `startDate`, `endDate`, `userID`, `price`, `peopleValue`, `discount`, `bookingName`, `bookingEmail`, `bookingPhone`, `create_at`) VALUES
(1, 20, 'Vagator Sea View', '2026-09-30', '2026-10-02', 14, 3000.00, 2, 20.00, 'kiran kanzariya', 'kanzariyakiran1307@gmail.com', '08160394602', '2026-09-29 15:44:50'),
(2, 19, 'Goa Paradise Inn', '2026-10-20', '2026-10-30', 15, 4400.00, 2, 20.00, 'princi', 'principattani3@gmail.com', '1234554321', '2026-10-01 11:03:53'),
(3, 19, 'Goa Paradise Inn', '2026-09-25', '2026-09-28', 16, 4400.00, 2, 20.00, 'kiran kanzariya', 'kanzariyakiran1307@gmail.com', '08160394602', '2026-10-03 02:30:04'),
(4, 19, 'Goa Paradise Inn', '2026-09-25', '2026-09-28', 16, 4400.00, 2, 20.00, 'kiran kanzariya', 'kanzariyakiran1307@gmail.com', '08160394602', '2026-10-03 02:30:26');

-- --------------------------------------------------------

--
-- Table structure for table `hotels`
--

CREATE TABLE `hotels` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `description` text NOT NULL,
  `city` varchar(255) NOT NULL,
  `rate` decimal(10,2) NOT NULL,
  `mrp` decimal(10,2) NOT NULL,
  `discount` decimal(5,2) NOT NULL,
  `location` varchar(255) NOT NULL,
  `lat` decimal(9,6) NOT NULL,
  `log` decimal(9,6) NOT NULL,
  `services` text NOT NULL,
  `food` text NOT NULL,
  `poster` text NOT NULL,
  `room_addHotelimages` text NOT NULL,
  `room` int(255) NOT NULL,
  `timestamps` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `hotels`
--

INSERT INTO `hotels` (`id`, `name`, `description`, `city`, `rate`, `mrp`, `discount`, `location`, `lat`, `log`, `services`, `food`, `poster`, `room_addHotelimages`, `room`, `timestamps`) VALUES
(2, 'Royal Heritage Hotel', 'Comfortable hotel for tourists and families', 'Ahmedabad', 3.20, 3000.00, 20.00, 'Navrangpura, Ahmedabad', 23.035000, 72.561000, 'parking,wifi,ac,restaurant,breakfast,room service,24/7 front desk,housekeeping', 'Gujarati, Punjabi', 'hotel1.jpg', 'hotel1a.jpg,hotel1b.jpg', 25, '2026-09-27 06:18:15'),
(3, 'Sabarmati View Hotel', 'Modern hotel near the riverfront area', 'Ahmedabad', 4.10, 3600.00, 15.00, 'Sabarmati Riverfront, Ahmedabad', 23.027600, 72.587100, 'parking,wifi,ac,restaurant,breakfast,room service,laundry,gym,24/7 front desk', 'Gujarati, North Indian', 'hotel2.jpg', 'hotel2a.jpg,hotel2b.jpg', 30, '2026-09-27 06:18:15'),
(4, 'Dwarka Palace', 'Comfortable stay near popular tourist attractions', 'Dwarka', 2.80, 3400.00, 20.00, 'Dwarka Beach Road, Dwarka', 22.244200, 68.968500, 'parking,wifi,ac,restaurant,breakfast,room service,travel desk,housekeeping,car rental', 'Gujarati, Kathiyawadi', 'hotel3.jpg', 'hotel3a.jpg,hotel3b.jpg', 28, '2026-09-27 06:18:15'),
(5, 'Somnath Residency', 'Family hotel with clean and spacious rooms', 'Somnath', 3.70, 3200.00, 15.00, 'Temple Road, Somnath', 20.888000, 70.401200, 'parking,wifi,ac,restaurant,breakfast,room service,family rooms,24/7 front desk,housekeeping', 'Gujarati, South Indian', 'hotel4.jpg', 'hotel4a.jpg,hotel4b.jpg', 24, '2026-09-27 06:18:15'),
(6, 'Gir Forest Resort', 'Peaceful resort for wildlife and nature trips', 'Gir Somnath', 4.60, 4500.00, 25.00, 'Sasan Gir Road, Gir Somnath', 21.124300, 70.824200, 'parking,wifi,pool,restaurant,ac,breakfast,garden,travel desk,car rental,kids play area', 'Gujarati, Punjabi, Continental', 'hotel5.jpg', 'hotel5a.jpg,hotel5b.jpg', 35, '2026-09-27 06:18:15'),
(7, 'Royal Rajkot Hotel', 'Modern hotel suitable for business and family trips', 'Rajkot', 2.50, 2900.00, 20.00, 'Kalawad Road, Rajkot', 22.303900, 70.802200, 'parking,wifi,ac,restaurant,breakfast,gym,room service,laundry,conference room', 'Gujarati, Kathiyawadi', 'hotel6.jpg', 'hotel6a.jpg,hotel6b.jpg', 22, '2026-09-27 06:18:15'),
(8, 'Vadodara Grand', 'Premium hotel with comfortable rooms', 'Vadodara', 4.30, 3500.00, 20.00, 'Alkapuri, Vadodara', 22.307200, 73.181200, 'parking,wifi,gym,ac,restaurant,pool,breakfast,spa,room service,conference room', 'Gujarati, Punjabi, Continental', 'hotel7.jpg', 'hotel7a.jpg,hotel7b.jpg', 32, '2026-09-27 06:18:15'),
(9, 'Surat Comfort Inn', 'Affordable hotel for tourists and business travellers', 'Surat', 1.90, 2600.00, 15.00, 'Adajan, Surat', 21.170200, 72.831100, 'parking,wifi,ac,restaurant,breakfast,room service,laundry,24/7 front desk,housekeeping', 'Gujarati, Chinese', 'hotel8.jpg', 'hotel8a.jpg,hotel8b.jpg', 20, '2026-09-27 06:18:15'),
(10, 'Kutch Desert Stay', 'Comfortable stay for exploring Kutch', 'Kutch', 3.40, 4200.00, 25.00, 'Bhuj Highway, Kutch', 23.242000, 69.666900, 'parking,wifi,restaurant,ac,breakfast,garden,travel desk,car rental,room service,24/7 front desk', 'Gujarati, Rajasthani', 'hotel9.jpg', 'hotel9a.jpg,hotel9b.jpg', 30, '2026-09-27 06:18:15'),
(11, 'Rann View Resort', 'Resort with a peaceful desert atmosphere', 'Kutch', 4.80, 5000.00, 20.00, 'Rann of Kutch Road, Kutch', 23.831000, 69.495000, 'parking,wifi,restaurant,ac,breakfast,garden,pool,travel desk,room service,kids play area', 'Gujarati, Rajasthani, Continental', 'hotel10.jpg', 'hotel10a.jpg,hotel10b.jpg', 35, '2026-09-27 06:18:15'),
(12, 'Jaipur Heritage Hotel', 'Traditional style hotel with modern facilities', 'Jaipur', 4.20, 5000.00, 30.00, 'Amer Road, Jaipur', 26.912400, 75.787300, 'parking,wifi,pool,ac,restaurant,breakfast,gym,spa,room service,travel desk,garden', 'Rajasthani, North Indian', 'hotel11.jpg', 'hotel11a.jpg,hotel11b.jpg', 40, '2026-09-27 06:18:15'),
(13, 'Pink City Residency', 'Comfortable hotel near major city attractions', 'Jaipur', 2.70, 3800.00, 20.00, 'Bani Park, Jaipur', 26.926000, 75.800000, 'parking,wifi,ac,restaurant,breakfast,room service,laundry,travel desk,housekeeping,car rental', 'Rajasthani, Punjabi', 'hotel12.jpg', 'hotel12a.jpg,hotel12b.jpg', 30, '2026-09-27 06:18:15'),
(14, 'Udaipur Lake Resort', 'Beautiful resort near the lake area', 'Udaipur', 4.70, 5200.00, 25.00, 'Lake Pichola Road, Udaipur', 24.576000, 73.683000, 'parking,wifi,pool,ac,restaurant,breakfast,spa,garden,room service,travel desk,boat ride', 'Rajasthani, Continental', 'hotel13.jpg', 'hotel13a.jpg,hotel13b.jpg', 35, '2026-09-27 06:18:15'),
(15, 'Jodhpur Palace Stay', 'Heritage style hotel with city views', 'Jodhpur', 3.60, 4500.00, 20.00, 'Ratanada, Jodhpur', 26.238900, 73.024300, 'parking,wifi,restaurant,ac,breakfast,room service,garden,travel desk,car rental,24/7 front desk', 'Rajasthani, Mughlai', 'hotel14.jpg', 'hotel14a.jpg,hotel14b.jpg', 28, '2026-09-27 06:18:15'),
(16, 'Bikaner Royal Inn', 'Comfortable hotel for heritage city tours', 'Bikaner', 2.10, 3300.00, 15.00, 'Station Road, Bikaner', 28.022900, 73.311900, 'parking,wifi,ac,restaurant,breakfast,room service,travel desk,laundry,housekeeping', 'Rajasthani, Punjabi', 'hotel15.jpg', 'hotel15a.jpg,hotel15b.jpg', 24, '2026-09-27 06:18:15'),
(17, 'Ajmer Palace Hotel', 'Family friendly hotel near tourist attractions', 'Ajmer', 3.10, 3000.00, 20.00, 'Civil Lines, Ajmer', 26.449900, 74.639900, 'parking,wifi,ac,restaurant,breakfast,family rooms,room service,travel desk,housekeeping,24/7 front desk', 'Rajasthani, North Indian', 'hotel16.jpg', 'hotel16a.jpg,hotel16b.jpg', 26, '2026-09-27 06:18:15'),
(18, 'Goa Beach Resort', 'Relaxing resort close to the beach', 'Goa', 4.50, 2800.00, 25.00, 'Calangute Beach Road, Goa', 15.544000, 73.755000, 'parking,wifi,pool,ac,restaurant,breakfast,spa,beach access,airport pickup,water sports', 'Goan, Continental, Seafood', 'hotel17.jpg', 'hotel17a.jpg,hotel17b.jpg', 45, '2026-09-27 06:18:15'),
(19, 'Goa Paradise Inn', 'Modern hotel for a comfortable beach holiday', 'Goa', 3.80, 4400.00, 20.00, 'Candolim Beach Road, Goa', 15.555700, 73.751700, 'parking,wifi,pool,restaurant,ac,breakfast,beach access,room service,bike rental,airport pickup', 'Goan, Indian, Chinese', 'hotel18.jpg', 'hotel18a.jpg,hotel18b.jpg', 35, '2026-09-27 06:18:15'),
(20, 'Vagator Sea View', 'Sea view hotel with modern facilities', 'Goa', 4.40, 3000.00, 20.00, 'Vagator Beach Road, Goa', 15.597700, 73.744000, 'parking,wifi,pool,ac,restaurant,breakfast,beach access,spa,room service,bike rental,travel desk', 'Goan, Continental, Seafood', 'hotel19.jpg', 'hotel19a.jpg,hotel19b.jpg', 30, '2026-09-27 06:18:15'),
(21, 'Mumbai City Hotel', 'Modern hotel in the heart of Mumbai', 'Mumbai', 2.90, 3000.00, 25.00, 'Andheri West, Mumbai', 19.119700, 72.846800, 'parking,wifi,gym,ac,restaurant,breakfast,room service,laundry,airport pickup,conference room,24/7 front desk', 'North Indian, Chinese, Continental', 'hotel20.jpg', 'hotel20a.jpg,hotel20b.jpg', 50, '2026-09-27 06:18:15'),
(22, 'Marine View Hotel', 'Comfortable hotel near popular city attractions', 'Mumbai', 4.00, 4800.00, 20.00, 'Marine Drive, Mumbai', 18.922000, 72.834700, 'parking,wifi,restaurant,ac,breakfast,gym,room service,laundry,airport pickup,spa,24/7 front desk', 'Maharashtrian, Seafood, Continental', 'hotel21.jpg', 'hotel21a.jpg,hotel21b.jpg', 45, '2026-09-27 06:18:15'),
(23, 'Delhi Grand Hotel', 'Premium hotel with modern facilities', 'Delhi', 3.50, 5500.00, 20.00, 'Connaught Place, Delhi', 28.631500, 77.216700, 'parking,wifi,gym,ac,restaurant,breakfast,pool,spa,room service,airport pickup,conference room', 'North Indian, Mughlai, Continental', 'hotel22.jpg', 'hotel22a.jpg,hotel22b.jpg', 50, '2026-09-27 06:18:15'),
(24, 'Capital View Inn', 'Affordable hotel for city travellers', 'Delhi', 1.70, 2600.00, 15.00, 'Karol Bagh, Delhi', 28.651900, 77.190900, 'parking,wifi,ac,restaurant,breakfast,room service,laundry,housekeeping,24/7 front desk,airport pickup', 'North Indian, Chinese', 'hotel23.jpg', 'hotel23a.jpg,hotel23b.jpg', 32, '2026-09-27 06:18:15'),
(25, 'Agra Heritage Hotel', 'Comfortable hotel for heritage tourism', 'Agra', 2.60, 3900.00, 20.00, 'Taj Ganj, Agra', 27.175100, 78.042100, 'parking,wifi,restaurant,ac,breakfast,room service,travel desk,car rental,garden,24/7 front desk', 'Mughlai, North Indian', 'hotel24.jpg', 'hotel24a.jpg,hotel24b.jpg', 35, '2026-09-27 06:18:15'),
(26, 'Manali Mountain Resort', 'Peaceful resort surrounded by mountain views', 'Manali', 4.90, 4800.00, 25.00, 'Mall Road, Manali', 32.243200, 77.189200, 'parking,wifi,restaurant,room service,breakfast,garden,travel desk,car rental,spa,kids play area,bonfire', 'North Indian, Tibetan, Continental', 'hotel25.jpg', 'hotel25a.jpg,hotel25b.jpg', 30, '2026-09-27 06:18:15'),
(27, 'Pune City Residency', 'Modern hotel suitable for business and family stays', 'Pune', 3.30, 3400.00, 15.00, 'Koregaon Park, Pune', 18.530800, 73.847500, 'parking,wifi,ac,gym,restaurant,breakfast,room service,laundry,conference room,24/7 front desk', 'Maharashtrian, North Indian, Chinese', 'hotel26.jpg', 'hotel26a.jpg,hotel26b.jpg', 28, '2026-09-27 06:18:15'),
(28, 'Nashik Valley Hotel', 'Comfortable hotel near popular attractions', 'Nashik', 2.30, 3200.00, 20.00, 'Gangapur Road, Nashik', 20.005900, 73.791000, 'parking,wifi,ac,restaurant,breakfast,room service,garden,travel desk,car rental,housekeeping', 'Maharashtrian, Punjabi', 'hotel27.jpg', 'hotel27a.jpg,hotel27b.jpg', 25, '2026-09-27 06:18:15'),
(29, 'Amritsar Golden Stay', 'Family hotel near major tourist attractions', 'Amritsar', 3.90, 3300.00, 15.00, 'Golden Temple Road, Amritsar', 31.620000, 74.876500, 'parking,wifi,restaurant,ac,breakfast,room service,travel desk,car rental,family rooms,24/7 front desk', 'Punjabi, North Indian', 'hotel28.jpg', 'hotel28a.jpg,hotel28b.jpg', 30, '2026-09-27 06:18:15'),
(30, 'Kolkata Heritage Inn', 'Traditional hotel with modern facilities', 'Kolkata', 1.50, 3800.00, 20.00, 'Park Street, Kolkata', 22.555000, 88.352000, 'parking,wifi,restaurant,ac,breakfast,room service,gym,laundry,travel desk,conference room,24/7 front desk', 'Bengali, North Indian, Chinese', 'hotel29.jpg', 'hotel29a.jpg,hotel29b.jpg', 32, '2026-09-27 06:18:15'),
(31, 'Chennai Marina Hotel', 'Modern hotel close to popular city attractions', 'Chennai', 4.60, 4000.00, 20.00, 'Marina Beach Road, Chennai', 13.050000, 80.282400, 'parking,wifi,pool,ac,restaurant,breakfast,room service,gym,beach access,airport pickup,travel desk', 'South Indian, Chinese, Continental', 'hotel30.jpg', 'hotel30a.jpg,hotel30b.jpg', 38, '2026-09-27 06:18:15'),
(32, 'Calangute Grand Resort', 'Luxury resort near the beautiful Calangute beach', 'Goa', 3.10, 5200.00, 25.00, 'Calangute Beach Road, Goa', 15.543000, 73.755000, 'parking,wifi,pool,ac,restaurant', 'Goan, Seafood, Continental', 'hotel31.jpg', 'hotel31a.jpg,hotel31b.jpg', 42, '2026-09-27 06:43:04'),
(33, 'Baga Beach Hotel', 'Modern hotel for a relaxing beach holiday', 'Goa', 2.50, 4700.00, 20.00, 'Baga Beach Road, Goa', 15.555000, 73.751700, 'parking,wifi,pool,ac', 'Goan, Indian, Chinese', 'hotel32.jpg', 'hotel32a.jpg,hotel32b.jpg', 38, '2026-09-27 06:43:04'),
(34, 'Panaji Comfort Resort', 'Comfortable resort near popular attractions', 'Goa', 4.05, 3900.00, 15.00, 'Miramar Beach Road, Panaji', 15.490900, 73.827800, 'parking,wifi,ac,restaurant', 'Goan, North Indian, Continental', 'hotel33.jpg', 'hotel33a.jpg,hotel33b.jpg', 30, '2026-09-27 06:43:04');

-- --------------------------------------------------------

--
-- Table structure for table `packages`
--

CREATE TABLE `packages` (
  `id` int(11) NOT NULL,
  `package_name` varchar(150) NOT NULL,
  `destination` varchar(100) NOT NULL,
  `duration` varchar(50) DEFAULT NULL,
  `price` decimal(10,2) DEFAULT NULL,
  `description` text DEFAULT NULL,
  `status` varchar(20) DEFAULT 'Active'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `packages`
--

INSERT INTO `packages` (`id`, `package_name`, `destination`, `duration`, `price`, `description`, `status`) VALUES
(1, 'Goa Beach Tour', 'Goa', '3 Days / 2 Nights', 5000.00, 'Enjoy beaches and sightseeing in Goa.', 'Active'),
(2, 'Rajasthan Heritage Tour', 'Rajasthan', '5 Days / 4 Nights', 8500.00, 'Explore forts, palaces and heritage places.', 'Active'),
(3, 'Gujarat Heritage Tour', 'Gujarat', '4 Days / 3 Nights', 6500.00, 'Visit famous heritage and tourist places of Gujarat.', 'Active'),
(4, 'Mumbai City Tour', 'Mumbai', '2 Days / 1 Night', 4500.00, 'Explore major attractions of Mumbai.', 'Active'),
(5, 'Delhi City Tour', 'Delhi', '3 Days / 2 Nights', 5500.00, 'Explore historical and famous places of Delhi.', 'Active');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `mobile` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `timestamp` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `mobile`, `password`, `timestamp`) VALUES
(1, 'jhyfj', '123345455', '202cb962ac59075b964b07152d234b70', '2026-09-24 08:44:01'),
(2, 'fgd', '1234567987', '250cf8b51c773f3f8dc8b4be867a9a02', '2026-09-24 10:23:57'),
(4, 'dave', '1234567890', '99c5e07b4d5de9d18c350cdf64c5aa3d', '2026-09-24 11:39:01'),
(5, 'kiran', '1234567890', '024d7f84fff11dd7e8d9c510137a2381', '2026-09-24 12:06:11'),
(6, 'komal', '1234567890', '202cb962ac59075b964b07152d234b70', '2026-09-24 12:08:00'),
(7, 'tanvi', '1234567890', '81b073de9370ea873f548e31b8adc081', '2026-09-24 13:53:00'),
(8, 'tanvi', '12345678', 'd81f9c1be2e08964bf9f24b15f0e4900', '2026-09-24 13:53:26'),
(9, 'faiz', '123456781', '761c7920f470038d4c8a619c79eddd62', '2026-09-24 13:55:26'),
(10, 'chhaya', '1234567890', 'd516b13671a4179d9b7b458a6ebdeb92', '2026-09-25 08:56:01'),
(11, 'Tanvi', '1234567890', '99c5e07b4d5de9d18c350cdf64c5aa3d', '2026-09-26 15:57:42'),
(12, 'Tanvi', '0987654321', '92daa86ad43a42f28f4bf58e94667c95', '2026-09-26 15:58:27'),
(13, 'syam', '987654321', 'df6d2338b2b8fce1ec2f6dda0a630eb0', '2026-09-29 04:30:57'),
(14, 'kiran', '0987654321', 'fd5c905bcd8c3348ad1b35d7231ee2b1', '2026-09-29 15:44:22'),
(15, 'princi', '1234554321', '289dff07669d7a23de0ef88d2f7129e7', '2026-10-01 10:59:38'),
(16, 'Riddhi', '6789067890', '9fe8593a8a330607d76796b35c64c600', '2026-10-01 16:31:48');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `book`
--
ALTER TABLE `book`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `hotels`
--
ALTER TABLE `hotels`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `packages`
--
ALTER TABLE `packages`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `book`
--
ALTER TABLE `book`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `hotels`
--
ALTER TABLE `hotels`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=35;

--
-- AUTO_INCREMENT for table `packages`
--
ALTER TABLE `packages`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
