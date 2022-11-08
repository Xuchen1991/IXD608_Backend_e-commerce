-- phpMyAdmin SQL Dump
-- version 4.9.7
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Nov 07, 2022 at 08:51 PM
-- Server version: 5.7.39-cll-lve
-- PHP Version: 7.3.32

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `ixd608_store_products`
--

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `id` int(11) NOT NULL,
  `date_create` datetime NOT NULL,
  `date_modify` datetime NOT NULL,
  `category` varchar(32) NOT NULL,
  `title` varchar(128) NOT NULL,
  `images` varchar(255) NOT NULL,
  `thumbnail` varchar(255) NOT NULL,
  `price` decimal(10,2) NOT NULL,
  `description` text NOT NULL,
  `quantity` int(10) NOT NULL,
  `total` decimal(10,0) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id`, `date_create`, `date_modify`, `category`, `title`, `images`, `thumbnail`, `price`, `description`, `quantity`, `total`) VALUES
(1, '2022-11-07 20:38:54', '2022-11-07 20:38:54', 'computer accessories', 'Roost', '', 'roost.jpg', 39.99, 'The bracket used to support the laptop is convenient for adjusting the position, height and angle of view of the laptop, which is helpful for cooling the laptop. Lightweight and foldable.', 30, 0),
(2, '2022-11-07 21:04:57', '2022-11-07 21:04:57', 'computer accessories', 'Mouse', '', 'mouse.jpg', 15.99, 'Optical mouse, a common computer accessory, is more conducive to your work, study, games and entertainment.', 30, 0),
(3, '2022-11-07 21:08:36', '2022-11-07 21:08:36', 'computer accessories', 'Keyboard', '', 'keyboard.jpg', 23.99, 'Keyboard, a common computer accessory, is more conducive to your work, study, games and entertainment.', 30, 0),
(4, '2022-11-07 21:09:48', '2022-11-07 21:09:48', 'computer accessories', 'Portable hard drive', '', 'portableharddrive.jpg', 89.99, 'When your computer is low on memory, it helps you store a lot of files. With USB 3.0 interface is very fast in storage and download.', 30, 0),
(5, '2022-11-07 21:22:07', '2022-11-07 21:22:07', 'computer accessories', 'usb-usbc adapter', '', 'adapter.jpg', 12.99, 'The usb-usbc adapter can help you connect the USB and USBC devices.', 30, 0),
(6, '2022-11-07 21:25:25', '2022-11-07 21:25:25', 'computer accessories', 'Data cable', '', 'datacable.jpg', 7.99, 'Data cable to help you transfer data between computers and devices.', 30, 0),
(7, '2022-11-07 21:28:17', '2022-11-07 21:28:17', 'computer accessories', 'Laptop bag', '', 'laptopbag.jpg', 18.99, 'The laptop bag can help you store your laptop, make it easy to carry it when you go out, and better protect your computer from damage.', 30, 0),
(8, '2022-11-07 21:33:04', '2022-11-07 21:33:04', 'computer accessories', 'Monitor Protector', '', 'monitorprotector.jpg', 49.99, 'Screen Protector can protect your computer monitor from wear, dust or dirt, and prevent harmful rays from harming your eyes.', 30, 0),
(9, '2022-11-07 21:35:36', '2022-11-07 21:35:36', 'computer accessories', 'Monitor cleaning kit', '', 'monitorcleaningkit.jpg', 9.99, 'Monitor cleaning kit, a professional cleaning kit, can clean your computer monitor. It is convenient to use and has a remarkable effect on cleaning dirt and dust.', 30, 0),
(10, '2022-11-07 21:38:23', '2022-11-07 21:38:23', 'computer accessories', 'Keyboard cleaner', '', 'keyboardcleaner.jpg', 15.99, 'Keyboard cleaner, a full set of professional cleaning equipment, can easily clean dirt in every place of the keyboard, making your computer keyboard a new look.', 30, 0),
(11, '2022-11-07 21:44:29', '2022-11-07 21:44:29', 'computer accessories', 'Video card holder', '', 'videocardholder.jpg', 11.99, 'This video card holder is light and sturdy, which can effectively support your desktop computer\'s video card, making your computer more secure and sturdy.', 30, 0),
(12, '2022-11-07 21:45:42', '2022-11-07 21:45:42', 'computer accessories', 'Mouse Pad', '', 'mousepad.jpg', 7.99, 'The mouse pad is made of soft, skin friendly material. The comfortable touch can effectively relieve fatigue and pressure. More effectively protect the mouse from abrasion and make the mouse more accurate', 30, 0);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
