-- phpMyAdmin SQL Dump
-- version 4.9.5deb2
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: May 13, 2021 at 04:08 PM
-- Server version: 10.3.25-MariaDB-0ubuntu0.20.04.1
-- PHP Version: 7.4.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `case_study`
--

-- --------------------------------------------------------

--
-- Table structure for table `cart`
--

CREATE TABLE `cart` (
  `id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `cart_detail`
--

CREATE TABLE `cart_detail` (
  `id` int(11) NOT NULL,
  `cart_id` int(11) NOT NULL,
  `product_id` int(11) NOT NULL,
  `size` varchar(30) NOT NULL,
  `quantity` int(11) NOT NULL,
  `unit_price` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Stand-in structure for view `customer_orders`
-- (See below for the actual view)
--
CREATE TABLE `customer_orders` (
`order_number` int(11)
,`user_id` int(11)
,`order_date` date
,`product_id` mediumtext
,`product_code` mediumtext
,`product_name` mediumtext
,`quantity` mediumtext
,`unit_price` mediumtext
,`size` mediumtext
,`ship_address` varchar(50)
,`order_status` varchar(20)
,`name` varchar(50)
,`phone_number` varchar(20)
);

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE `orders` (
  `order_number` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `order_date` date NOT NULL,
  `ship_date` date DEFAULT NULL,
  `ship_address` varchar(50) NOT NULL,
  `order_status` varchar(20) NOT NULL DEFAULT 'shipping'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `order_detail`
--

CREATE TABLE `order_detail` (
  `id` int(11) NOT NULL,
  `order_number` int(11) NOT NULL,
  `product_id` int(11) NOT NULL,
  `quantity` int(11) NOT NULL,
  `unit_price` float NOT NULL,
  `size` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `id` int(11) NOT NULL,
  `product_code` varchar(30) NOT NULL,
  `product_name` varchar(100) NOT NULL,
  `category` varchar(20) NOT NULL,
  `vendor` varchar(20) NOT NULL,
  `description` text DEFAULT NULL,
  `image` varchar(100) NOT NULL,
  `amount` int(100) NOT NULL,
  `size` varchar(100) NOT NULL,
  `price` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id`, `product_code`, `product_name`, `category`, `vendor`, `description`, `image`, `amount`, `size`, `price`) VALUES
(1002325, '100', 'Air Max Torch 4', 'Women', 'Nike', 'Breathable mesh uppers with synthetic overlays provide ventilation and support. \r\nSecure lace-up closure. Molded EVA sock liners offer comfort and support underfoot.\r\nPhylon midsoles with visible Max Air units in the heels provide lightweight cushioning. \r\nFull-length BRS 1000® carbon fiber rubber Waffle outsole for durability and traction. \r\nBreathable shoe lining for added comfort. Padded collar and tongue. Nike branding details', 'Nike Air Max Torch 4.jpg', 20, '5,6,7,8', 85),
(1002326, '101', 'Max Excee Sneakers', 'Women', 'Nike', 'Mesh, leather and suede upper with synthetic leather overlays. Cushioned insole. Foam midsole and foam outsole with rubber outsole pods provide lightweight comfort and durability. Visible Air unit is visible through 3 windows for an updated look. Breathable fabric shoe lining. Padded collar and tongue for added comfort. Elongated design lines honor the Air Max 90 while modernizing it in a provocative way. Nike® branding details', 'Max Excee Sneakers.jpg', 30, '5,6,7,8', 90),
(1002327, '102', 'Max Bolt Sneakers', 'Women', 'Nike', 'Combination upper. Secure lace-up closure. Cushioned insole. Cushioning Air Max heel unit. Durable outsole. Breathable shoe lining. Padded collar and tongue for added comfort. Nike branding details', 'Max Bolt Sneakers.jpg', 50, '5,6,7,8', 85),
(1002328, '103', 'Max Motion 2 Running Shoes', 'Women', 'Nike', 'Durable woven uppers with seamless overlays built to move naturally with the foot. Lace up closure for a secure fit. Cushioned insoleInjected . Phylon midsole for lightweight cushioning and comfort. U-shaped Max Air unit in the heel provides resilient cushioning and impact absorption. Durable outsole for great tractionBreathable shoe lining. Padded tongue and collar. Fabric pull loop at heel. Nike® branding details', 'Max Motion 2 Running Shoes.jpg', 100, '5,6,7,8', 85),
(1002329, '104', 'Max Infinity 2 Sneakers', 'Women', 'Nike', 'Combination upper. Secure lace-up closure. Cushioned insole. U-shaped Max Air unit in the heel provides resilient cushioning and impact absorption. Durable outsole. Breathable shoe lining. Padded collar for added comfort. Pull loop at tongue for easier on and off. Nike branding details', 'Max Infinity 2 Sneakers.jpg', 10, '5,6,7,8', 100),
(1002330, '105', 'Max Invigor Print Sneakers', 'Women', 'Nike', 'Run with superior comfort and style in the Nike Air Max Invigor Print! These running sneakers feature breathable mesh uppers with TPU skin overlays, visible Air Max unit in the heel for shock absorption, and eye-catching ombre color design. Step up your running game with the Nike Air Max Invigor Print!', 'Max Invigor Print Sneakers.jpg', 100, '5,6,7,8', 90),
(1002331, '106', 'Max SC Sneakers', 'Women', 'Nike', 'Breathable combination upper. Secure lace-up closure. Cushioning insole. Durable rubber tread for solid traction. Breathable shoe lining. Padded collar and tongue for added comfort. Nike branding details', 'Max SC Sneakers.jpg', 12, '5,6,7,8', 75),
(1002332, '107', 'Chelsea Western Boots', 'Women', 'Wanted Lonestar', 'Synthetic upper. Easy pull-on entry. Approx. 2 1/2 inch block heel. Stylish pointed toe. Cushioned insole. Durable outsole. Smooth boot lining. Western style ankle boot', 'Chelsea Western Boots.jpg', 20, '5,6,7,8', 70),
(1002333, '108', 'Tekoa Chelsea Rain Boots', 'Women', 'Journee Collection', 'Rain boots are probably the cutest piece of an outfit during the rainy seasons. This adorable rain boot by Journee Collection is the perfect ankle height to be able to slip on and off easily. This boot is also water resistant and features a rubber material. This boot comes in the cutest 5 patterns that are versatile and will surely match any outfit!', 'Tekoa Chelsea Rain Boots.jpg', 20, '5,6,7,8', 50),
(1002334, '109', 'Brandi Chelsea Wedge Booties', 'Women', 'Aerosoles', 'The Brandi by Aerosoles® is the wedge with some edge that you totally need in your collection. This versatile ankle bootie would go perfect with anything you have stashed away in that closet from skinny jeans to dresses.', 'Brandi Chelsea Wedge Booties.jpg', 20, '5,6,7,8', 80),
(1002335, '110', 'Revolution 5 Running Shoes', 'Men', 'Nike', 'The Nike Revolution 5 cushions your stride with soft foam to keep you running in comfort. Lightweight knit material wraps your foot in breathable support, while a minimalist design fits in anywhere your day takes you.', 'Revolution 5 Running Shoes.jpg', 12, '5,6,7,8', 65),
(1002336, '111', 'Air Monarch IV Training Shoes', 'Men', 'Nike', 'The Nike Air Monarch IV Men\'s training shoe delivers lightweight cushioning, solid support and excellent traction, along with an updated, sleek design built for rigorous training on the field and in the gym.', 'Air Monarch IV Training Shoes.jpg', 10, '5,6,7,8', 70),
(1002337, '112', 'Under Armour Assert 8 Running Shoes', 'Men', 'Wide', 'Durable upper. Secure lace-up closure. Cushioned insole for added comfort. Durable outsole for solid traction. Breathable shoe lining for added comfort. UA branding details for added style', 'Under Armour Assert 8 Running Shoes.jpg', 10, '5,6,7,8', 60);

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `phone_number` varchar(20) NOT NULL,
  `address` varchar(100) NOT NULL,
  `account` varchar(50) NOT NULL,
  `password` varchar(100) NOT NULL,
  `email` varchar(50) NOT NULL,
  `permission` int(11) NOT NULL DEFAULT 0,
  `image` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `name`, `phone_number`, `address`, `account`, `password`, `email`, `permission`, `image`) VALUES
(1, 'Sơn', '0363776256', 'Hà Nội', 'admin', '$2y$10$Cn7UzXbDRw6u7NnwYGZgkOwGdzABfEZgid4hFmZ.trkJhL.9cLsrG', '22nguyenduyson06@gmail.com', 1, ''),
(3, 'Nguyen Duy Son', '0363776256', 'ha noi', 'ndson', '$2y$10$JbqZu0kPgokUDljgo3CZ3.YkSZcRppb0PvKKk/u0/a3CLgJt5wmIK', 'nguyenduyson@gmail.com', 0, NULL);

-- --------------------------------------------------------

--
-- Stand-in structure for view `UserCart`
-- (See below for the actual view)
--
CREATE TABLE `UserCart` (
`cart_id` int(11)
,`user_id` int(11)
,`product_id` int(11)
,`size` varchar(30)
,`quantity` int(11)
,`unit_price` float
,`product_code` varchar(30)
,`product_name` varchar(100)
);

-- --------------------------------------------------------

--
-- Structure for view `customer_orders`
--
DROP TABLE IF EXISTS `customer_orders`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `customer_orders`  AS  select `orders`.`order_number` AS `order_number`,`orders`.`user_id` AS `user_id`,`orders`.`order_date` AS `order_date`,group_concat(`order_detail`.`product_id` separator ',') AS `product_id`,group_concat(`products`.`product_code` separator ',') AS `product_code`,group_concat(`products`.`product_name` separator ',') AS `product_name`,group_concat(`order_detail`.`quantity` separator ',') AS `quantity`,group_concat(`order_detail`.`unit_price` separator ',') AS `unit_price`,group_concat(`order_detail`.`size` separator ',') AS `size`,`orders`.`ship_address` AS `ship_address`,`orders`.`order_status` AS `order_status`,`user`.`name` AS `name`,`user`.`phone_number` AS `phone_number` from (((`orders` join `order_detail` on(`orders`.`order_number` = `order_detail`.`order_number`)) join `user` on(`orders`.`user_id` = `user`.`id`)) join `products` on(`order_detail`.`product_id` = `products`.`id`)) group by `order_detail`.`order_number` ;

-- --------------------------------------------------------

--
-- Structure for view `UserCart`
--
DROP TABLE IF EXISTS `UserCart`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `UserCart`  AS  select `cart`.`id` AS `cart_id`,`cart`.`user_id` AS `user_id`,`cart_detail`.`product_id` AS `product_id`,`cart_detail`.`size` AS `size`,`cart_detail`.`quantity` AS `quantity`,`cart_detail`.`unit_price` AS `unit_price`,`products`.`product_code` AS `product_code`,`products`.`product_name` AS `product_name` from ((`cart` join `cart_detail` on(`cart`.`id` = `cart_detail`.`cart_id`)) join `products` on(`cart_detail`.`product_id` = `products`.`id`)) ;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `cart`
--
ALTER TABLE `cart`
  ADD PRIMARY KEY (`id`),
  ADD KEY `user_id` (`user_id`);

--
-- Indexes for table `cart_detail`
--
ALTER TABLE `cart_detail`
  ADD PRIMARY KEY (`id`),
  ADD KEY `product_id` (`product_id`),
  ADD KEY `cart_id` (`cart_id`);

--
-- Indexes for table `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`order_number`),
  ADD KEY `user_id` (`user_id`);

--
-- Indexes for table `order_detail`
--
ALTER TABLE `order_detail`
  ADD PRIMARY KEY (`id`),
  ADD KEY `product_id` (`product_id`),
  ADD KEY `order_number` (`order_number`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `account` (`account`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `cart`
--
ALTER TABLE `cart`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `cart_detail`
--
ALTER TABLE `cart_detail`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT for table `orders`
--
ALTER TABLE `orders`
  MODIFY `order_number` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT for table `order_detail`
--
ALTER TABLE `order_detail`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=1002338;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `cart`
--
ALTER TABLE `cart`
  ADD CONSTRAINT `cart_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `user` (`id`);

--
-- Constraints for table `cart_detail`
--
ALTER TABLE `cart_detail`
  ADD CONSTRAINT `cart_detail_ibfk_2` FOREIGN KEY (`product_id`) REFERENCES `products` (`id`),
  ADD CONSTRAINT `cart_detail_ibfk_3` FOREIGN KEY (`cart_id`) REFERENCES `cart` (`id`);

--
-- Constraints for table `orders`
--
ALTER TABLE `orders`
  ADD CONSTRAINT `orders_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `user` (`id`);

--
-- Constraints for table `order_detail`
--
ALTER TABLE `order_detail`
  ADD CONSTRAINT `order_detail_ibfk_2` FOREIGN KEY (`product_id`) REFERENCES `products` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
