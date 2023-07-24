-- phpMyAdmin SQL Dump
-- version 5.1.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 14, 2022 at 04:51 PM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 7.4.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `souvenir`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin_info`
--

CREATE TABLE `admin_info` (
  `User_Name` varchar(20) NOT NULL,
  `Password` varchar(20) NOT NULL,
  `status` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `admin_info`
--

INSERT INTO `admin_info` (`User_Name`, `Password`, `status`) VALUES
('Admin12', '@dmin!@#', 1);

-- --------------------------------------------------------

--
-- Table structure for table `chocolate`
--

CREATE TABLE `chocolate` (
  `id` int(11) NOT NULL,
  `p_id` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `chocolate`
--

INSERT INTO `chocolate` (`id`, `p_id`) VALUES
(1, 1),
(2, 2),
(3, 3),
(4, 4),
(5, 5),
(6, 6),
(7, 7),
(8, 8),
(9, 9),
(10, 10),
(11, 11),
(12, 12);

-- --------------------------------------------------------

--
-- Table structure for table `contact`
--

CREATE TABLE `contact` (
  `id` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `subject` varchar(100) NOT NULL,
  `msg` mediumtext NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `status` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `feature`
--

CREATE TABLE `feature` (
  `p_id` int(11) NOT NULL,
  `pr_id` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `feature`
--

INSERT INTO `feature` (`p_id`, `pr_id`) VALUES
(1, 63),
(2, 73),
(3, 8),
(4, 21),
(5, 53),
(6, 47),
(7, 66),
(8, 72),
(9, 2),
(10, 17),
(11, 80),
(12, 61);

-- --------------------------------------------------------

--
-- Table structure for table `flower`
--

CREATE TABLE `flower` (
  `id` int(11) NOT NULL,
  `p_id` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `flower`
--

INSERT INTO `flower` (`id`, `p_id`) VALUES
(1, 13),
(2, 14),
(3, 15),
(4, 16),
(5, 17),
(6, 18),
(7, 19),
(8, 20),
(9, 21),
(10, 22),
(11, 23),
(12, 24),
(13, 81),
(14, 82),
(15, 83),
(16, 84);

-- --------------------------------------------------------

--
-- Table structure for table `gift1`
--

CREATE TABLE `gift1` (
  `id` int(11) NOT NULL,
  `p_id` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `gift1`
--

INSERT INTO `gift1` (`id`, `p_id`) VALUES
(1, 25),
(2, 26),
(3, 27),
(4, 28),
(5, 29),
(6, 30),
(7, 31),
(8, 32),
(9, 33),
(10, 34),
(11, 35),
(12, 36),
(13, 37),
(14, 38),
(15, 39),
(16, 40),
(17, 41),
(18, 42),
(19, 43),
(20, 44),
(21, 45),
(22, 46),
(23, 47),
(24, 48),
(25, 49),
(26, 50),
(27, 51),
(28, 52);

-- --------------------------------------------------------

--
-- Table structure for table `gift2`
--

CREATE TABLE `gift2` (
  `id` int(11) NOT NULL,
  `p_id` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `gift2`
--

INSERT INTO `gift2` (`id`, `p_id`) VALUES
(1, 53),
(2, 54),
(3, 57),
(4, 58),
(5, 59),
(6, 60),
(7, 61),
(8, 62),
(9, 63),
(10, 64),
(11, 65),
(12, 66),
(13, 67),
(14, 68),
(15, 69),
(16, 70),
(17, 71),
(18, 72),
(19, 73),
(20, 74),
(21, 75),
(22, 76),
(23, 77),
(24, 78),
(25, 79),
(26, 80),
(27, 55),
(28, 56);

-- --------------------------------------------------------

--
-- Table structure for table `order_info`
--

CREATE TABLE `order_info` (
  `id` int(11) NOT NULL,
  `customer_id` int(11) NOT NULL,
  `address` varchar(50) NOT NULL,
  `total` int(20) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `product`
--

CREATE TABLE `product` (
  `p_id` int(11) NOT NULL,
  `name` varchar(100) DEFAULT NULL,
  `price` int(11) DEFAULT NULL,
  `image` varchar(100) DEFAULT NULL,
  `stock` int(11) DEFAULT NULL,
  `status` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `product`
--

INSERT INTO `product` (`p_id`, `name`, `price`, `image`, `stock`, `status`) VALUES
(1, 'Break Apart Kitkat Choclairs Heart Pie', 500, 'Chocolates/break-apart-kitkat-choclairs-heart-pie.jpg', 50, 1),
(2, 'Delectable Chocolates in Floral Box 21 Pcs', 800, 'Chocolates/delectable-chocolates-in-floral-box-21-pcs.jpg', 100, 1),
(3, 'Delectable Truffles And Pralines Box 25 Pcs', 750, 'Chocolates/delectable-truffles-n-pralines-box-25-pcs.jpg', 150, 1),
(4, 'Ferrero Rocher Chocolates And Cute Teddy', 550, 'Chocolates/ferrero-rocher-chocolates-cute-teddy.jpg', 40, 1),
(5, 'High On Snack Bouquet', 350, 'Chocolates/high-on-snack-bouquet_1.jpg', 46, 1),
(6, 'Preminu Floral Box Of Chocolates 12 pcs', 900, 'Chocolates/permium-floral-box-of-chocolates-12-pcs.jpg', 90, 1),
(7, 'Luxury Ferrero Rocher', 600, 'Chocolates/luxury-ferrero-rocher.jpg', 70, 1),
(8, 'Purple Love Milk Chocolate Bouquet', 850, 'Chocolates/purple-love-milk-chocolate-bouquet.jpg', 130, 1),
(9, 'Two Storied Chocolate Treat', 700, 'Chocolates/two-storied-chocolate-treat_1.jpg', 350, 1),
(10, 'Valentine LOve Ferrero Rocher Box', 600, 'Chocolates/valentine-lOve-ferrero-rocher-box.jpg', 50, 1),
(11, 'Stripe Gift Box for Love', 800, 'Chocolates/v-day-love-stripe-gift-box.jpg', 60, 1),
(12, 'Chocolates And Herbal Colours Holi Gift Tray', 500, 'Chocolates/p-chocolates-and-herbal-colours-holi-gift-tray-155008-m.jpg', 58, 1),
(13, 'Asiatic Lilies Red Roses Cane Basket Arrangement', 1200, 'Flowers/asiatic-lilies-red-roses-cane-basket-arrangement_1.jpg', 100, 1),
(14, 'Attractive Mixed Asiatic Lilies Bunch', 800, 'Flowers/attractive-mixed-asiatic-lilies-bunch_1.jpg', 50, 1),
(15, 'Beautiful Orchids And Lilies Bunch', 1000, 'Flowers/beautiful-orchids-and-lilies-bunch.jpg', 70, 1),
(16, 'Bright Yellow Asiatic Lilies', 750, 'Flowers/bright-yellow-asiatic-lilies_1.jpg', 100, 1),
(17, 'Delicate Purple Orchids White Roses Box Arrangemen', 1050, 'Flowers/delicate-purple-orchids-white-roses-box-arrangement.jpg', 90, 1),
(18, 'Elegant Gerberas in Glass Vase', 350, 'Flowers/elegant-gerberas-in-glass-vase.jpg', 40, 1),
(19, 'Fathers Day Special Bamboo Plant', 500, 'Flowers/fathers-day-special-bamboo-plant.jpg', 200, 1),
(20, 'Fragrant Mix Of Lilies in Fishbowl Vase', 1090, 'Flowers/fragrant-mix-of-lilies-in-fishbowl-vase_1.jpg', 20, 1),
(21, 'Lovely Gerberas Bunch', 250, 'Flowers/lovely-gerberas-bunch.jpg', 100, 1),
(22, 'Lovely Mixed Flowers in Jute Wrapped Jar', 450, 'Flowers/lovely-mixed-flowers-in-jute-wrapped-jar.jpg', 55, 1),
(23, 'Mixed Flowers in Beautiful Ribbon Tied Fish Bowl', 1380, 'Flowers/mixed-flowers-in-beautiful-ribbon-tied-fish-bowl.jpg', 45, 1),
(24, 'Lovely Orchids Dondella in Cylindrical Vase', 600, 'Flowers/lovely-orchids-dandella-in-cylindrical-vase_1.jpg', 150, 1),
(25, 'Azure Edt For Men 100ml', 450, 'Gifts/azure-edt-for-men-100-ml_1.jpg', 200, 1),
(26, 'Engraved Woooden Key Chains Personalised Set of 3', 250, 'Gifts/engraved-wooden-key-chains-personalised-set-of-3.jpg', 300, 1),
(27, 'Cute Pony Unicorn Soft Toy', 400, 'Gifts/cute-pony-unicorn-soft-toy.jpg', 200, 1),
(28, 'Combo Of Personalised Black Wallet Belt', 1090, 'Gifts/combo-of-personalised-black-wallet-belt.jpg', 30, 1),
(29, 'Personalised Blutooth Led Speaker', 1380, 'Gifts/personalised-bluetooth-led-speaker.jpg', 70, 1),
(30, 'The Mean Machine Blue', 1900, 'Gifts/the-mean-machine-blue.jpg', 34, 1),
(31, 'Taj Mahal Floral Hand Painted Kettle', 2300, 'Gifts/taj-mahal-floral-handpainted-kettle_1.jpg', 20, 1),
(32, 'Women Hustler Caricature', 900, 'Gifts/p-woman-hustler-caricature-112551-m.jpg', 46, 1),
(33, 'Unique Personalized Table Clock', 950, 'Gifts/unique-personalized-table-clock_1.jpg', 37, 1),
(34, 'Colourful Birthday Balloon Bouquet', 300, 'Gifts/colourful-birthday-balloon-bouquet.jpg', 100, 1),
(35, 'Dolland  Chained Compass With Personalised Wooden Box', 750, 'Gifts/dolland-chained-compass-with-personalised-wooden-box.jpg', 78, 1),
(36, 'Ganesh Statue', 1200, 'Gifts/ganesh statue2.jpg', 45, 1),
(37, 'Happy Bday Personalized Mug', 250, 'Gifts/happy-bday-personalized-mug_1.jpg', 100, 1),
(38, 'Pampering Love Personalized Frame', 800, 'Gifts/pampering-love-personalized-frame.jpg', 200, 1),
(39, 'Love Connection Personalized Caricature Stand', 1200, 'Gifts/p-love-connection-personalized-caricature-stand-153404-m.jpg', 56, 1),
(40, 'Personalised Pretty Wallet For Her', 1200, 'Gifts/personalised-pretty-wallet-for-her.jpg', 130, 1),
(41, 'The Man Company Beard Combo', 2450, 'Gifts/the-man-company-beard-combo.jpg', 600, 1),
(42, 'Mom is Best Mug', 400, 'Gifts/mom-is-best-mug.jpg', 300, 1),
(43, 'Lovely Mom Daughter Personalised Cushion', 350, 'Gifts/lovely-mom-daughter-personalised-cushion.jpg', 270, 1),
(44, 'Love Joy Bloom Edp For Women 30ml', 400, 'Gifts/love-joy-bloom-edp-for-women-30-ml.jpg', 45, 1),
(45, 'Dark Brown Personalised Wallet Keychain', 800, 'Gifts/dark-brown-personalised-wallet-keychain.jpg', 250, 1),
(46, 'Personalised Night Lamp For Sister', 1400, 'Gifts/personalised-night-lamp-for-sister.jpg', 50, 1),
(47, 'Perfect Wooden Photo Stand Set For Special One', 1350, 'Gifts/p-perfect-wooden-photo-stand-set-for-special-one-111516-m.jpg', 300, 1),
(48, 'Beautiful pink coloured Watch for women', 1400, 'Gifts/watch.jpg', 80, 1),
(49, 'Personalised Bottle With Chocolates n NoteBook', 870, 'Gifts/v-day-personalised-bottle-with-chocolates-n-notebook.jpg', 90, 1),
(50, 'Radha Krishna Statue', 1600, 'Gifts/radhakrishna2.jpg', 180, 1),
(51, 'Personalized Square Puzzle', 750, 'Gifts/personalized-square-puzzle.jpg', 56, 1),
(52, 'Personalised Alphabet Keychain', 200, 'Gifts/personalised-alphabet-keychain.jpg', 200, 1),
(53, 'Bal Krishna Idol', 1550, 'Gifts/bal-krishna-idol_1.jpg', 100, 1),
(54, 'Coffee Lover Mug', 550, 'Gifts/coffee-lover-mug_1.jpg', 300, 1),
(55, 'Fidato Musical Dancing And Walking Robot', 8900, 'Gifts/fidato-musical-dancing-and-walking-robot.jpg', 18, 1),
(56, 'For Me Black Perfume For Men 100ml', 300, 'Gifts/for-me-black-perfume-for-men-100-ml.jpg', 150, 1),
(57, 'Personalized Birthday Special Led Speaker', 1400, 'Gifts/personalised-birthday-special-led-speaker.jpg', 40, 1),
(58, 'Resting Buddha Brass Idol', 2500, 'Gifts/resting-buddha-brass-idol_1.jpg', 80, 1),
(59, 'Mom Of Girl Personalized Caricature Stand ', 1200, 'Gifts/p-mom-of-girl-personalized-caricature-stand-136130-m.jpg', 130, 1),
(60, 'Personalized Valentine Keyring', 800, 'Gifts/personalized-valentine-keyring.jpg', 200, 1),
(61, 'Huggable Pink Teddy Bear With Neck Bow', 1050, 'Gifts/huggable-pink-teddy-bear-with-neck-bow.jpg', 49, 1),
(62, 'Embroidered Pink Sling Bag', 700, 'Gifts/embroidered-pink-sling-bag.jpg', 120, 1),
(63, 'Durga Patachitra HandPainted Kettle', 1800, 'Gifts/durga-patachitra-handpainted-kettle_1.jpg', 39, 1),
(64, 'Doctor Ganesh Statue', 1390, 'Gifts/doctor ganesh statue.jpg', 200, 1),
(65, 'Max Deodorant Hamper For Men', 1500, 'Gifts/max-deodorant-hamper-for-men.jpg', 280, 1),
(66, 'Personalised Dreamy Cushion', 350, 'Gifts/personalised-dreamy-cushion_1.jpg', 130, 1),
(67, 'Mirada Relaxing Warrior Princess Doll', 450, 'Gifts/mirada-relaxing-warrior-princess-doll.jpg', 100, 1),
(68, 'Personalized Wedding Caricature With Wooden Stand', 1800, 'Gifts/p-personalized-indian-wedding-caricature-with-wooden-stand-124673-m.jpg', 30, 1),
(69, 'Personalised Gentalmans Paper weight', 200, 'Gifts/personalised-gentlemans-paperweight.jpg', 200, 1),
(70, 'The Pamper Hamper', 1800, 'Gifts/the-pamper-hamper.jpg', 140, 1),
(71, 'Super Dad Personalised Pen In Foldable Box', 750, 'Gifts/super-dad-personalised-pen-in-foldable-box.jpg', 160, 1),
(72, 'Ganesh Metal Tea Light Candle Holder', 2100, 'Gifts/ganesha-metal-tea-light-candle-holder_1.jpg', 20, 1),
(73, 'Wild Republic Plush White Watcher Husk Soft Toy', 900, 'Gifts/wild-republic-plush-white-watcher-husk-soft-toy.jpg', 60, 1),
(74, 'Personalized Caricature With Wooden Stand For Friends', 1800, 'Gifts/p-personalized-caricature-with-wooden-stand-for-friends-122701-m.jpg', 38, 1),
(75, 'Personalised White Blue Dial Watch For Him', 1580, 'Gifts/personalised-white-blue-dial-watch-for-him_1.jpg', 100, 1),
(76, 'Personalised Square Wall Clock', 950, 'Gifts/personalised-square-wall-clock.jpg', 230, 1),
(77, 'Quit Finish Sling Bag For Women ', 1250, 'Gifts/p-quilt-finish-sling-bag-for-women-149419-m.jpg', 157, 1),
(78, 'Personalised Golden Leaf Name Plate', 2500, 'Gifts/personalised-golden-leaf-name-plate.jpg', 15, 1),
(79, 'Personalized Rotating  Mini Lamp ', 750, 'Gifts/personalized-rotating-lamp-mini_1.jpg', 175, 1),
(80, 'Loard Radha and Krishna Statue', 2550, 'Gifts/radhakrisha1.jpg', 20, 1),
(81, 'Pure White Asiatic Lilies In FishBowl Vase', 800, 'Flowers/pure-white-asiatic-lilies-in-fishbowl-vase_1.jpg', 50, 1),
(82, 'Romantic 20 Red Roses Bouquet', 650, 'Flowers/romantic-20-red-roses-bouquet_1.jpg', 30, 1),
(83, 'Sunshine Vase Arrangement', 700, 'Flowers/sunshine-vase-arrangement.jpg', 40, 1),
(84, 'Two Layer Bamboo Plant Standard', 1080, 'Flowers/two-layer-bamboo-plant-standard_1.jpg', 44, 1);

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `p_id` int(11) NOT NULL,
  `product_id` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`p_id`, `product_id`) VALUES
(1, 6),
(2, 20),
(3, 50),
(4, 33),
(5, 13),
(6, 1),
(7, 30),
(8, 44),
(9, 29),
(10, 39),
(11, 84),
(12, 80),
(13, 70),
(14, 60),
(15, 10),
(16, 22),
(17, 45),
(18, 58),
(19, 66),
(20, 76),
(21, 54),
(22, 4),
(23, 18),
(24, 78);

-- --------------------------------------------------------

--
-- Table structure for table `user_info`
--

CREATE TABLE `user_info` (
  `user_id` int(11) NOT NULL,
  `firstname` varchar(30) DEFAULT NULL,
  `lastname` varchar(30) DEFAULT NULL,
  `email` varchar(45) DEFAULT NULL,
  `phone` varchar(15) DEFAULT NULL,
  `username` varchar(30) DEFAULT NULL,
  `password` varchar(30) DEFAULT NULL,
  `address` varchar(40) DEFAULT NULL,
  `status` int(11) NOT NULL,
  `added_on` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user_info`
--

INSERT INTO `user_info` (`user_id`, `firstname`, `lastname`, `email`, `phone`, `username`, `password`, `address`, `status`, `added_on`) VALUES
(1, 'Binod', 'Pandey', 'pandeybinod26@gmail.com', '9805439748', 'bini26', 'bini20000', 'Badera', 1, '2022-04-11 12:00:42');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin_info`
--
ALTER TABLE `admin_info`
  ADD PRIMARY KEY (`User_Name`);

--
-- Indexes for table `chocolate`
--
ALTER TABLE `chocolate`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `contact`
--
ALTER TABLE `contact`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `feature`
--
ALTER TABLE `feature`
  ADD PRIMARY KEY (`p_id`);

--
-- Indexes for table `flower`
--
ALTER TABLE `flower`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `gift1`
--
ALTER TABLE `gift1`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `gift2`
--
ALTER TABLE `gift2`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `product`
--
ALTER TABLE `product`
  ADD PRIMARY KEY (`p_id`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`p_id`);

--
-- Indexes for table `user_info`
--
ALTER TABLE `user_info`
  ADD PRIMARY KEY (`user_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `chocolate`
--
ALTER TABLE `chocolate`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `flower`
--
ALTER TABLE `flower`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `gift1`
--
ALTER TABLE `gift1`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=29;

--
-- AUTO_INCREMENT for table `gift2`
--
ALTER TABLE `gift2`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=29;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
