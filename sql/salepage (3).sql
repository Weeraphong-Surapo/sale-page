-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: localhost:8889
-- Generation Time: Nov 17, 2022 at 02:44 PM
-- Server version: 5.7.34
-- PHP Version: 8.0.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `salepage`
--

-- --------------------------------------------------------

--
-- Table structure for table `tb_admin`
--

CREATE TABLE `tb_admin` (
  `id` int(11) NOT NULL,
  `username` text NOT NULL,
  `password` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tb_admin`
--

INSERT INTO `tb_admin` (`id`, `username`, `password`) VALUES
(1, 'admin', 'admin');

-- --------------------------------------------------------

--
-- Table structure for table `tb_contents`
--

CREATE TABLE `tb_contents` (
  `id` int(11) NOT NULL,
  `img_content` text NOT NULL,
  `type` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tb_contents`
--

INSERT INTO `tb_contents` (`id`, `img_content`, `type`) VALUES
(1, 'upload/6227-macbook-pro-14-and-16_overview__fz0lron5xyuu_og.png', 'profile_cover'),
(2, 'upload/98547-2.webp', 'profile'),
(3, 'upload/95585-3.jpeg', 'content_1'),
(4, 'upload/8576-5.webp', 'content_2'),
(5, 'upload/43973-7.webp', 'content_3'),
(6, 'upload/87360-8.jpg', 'content_4'),
(7, 'upload/88558-10.jpg', 'content_5'),
(8, 'upload/49373-11.jpeg', 'content_6'),
(9, 'upload/44958-13.jpeg', 'content_7'),
(10, 'upload/60550-14.jpeg', 'review_1'),
(11, 'upload/31994-15.jpeg', 'review_2'),
(12, 'upload/41842-mac.webp', 'review_3'),
(13, 'upload/36469-17.jpeg', 'review_4'),
(14, 'upload/29068-18.jpeg', 'review_5'),
(15, 'upload/32604-16.jpeg', 'review_6'),
(16, 'upload/24843-41.jpeg', 'review_7'),
(17, 'upload/19201-43.webp', 'review_8'),
(18, 'upload/17836-41.webp', 'review_9'),
(19, 'upload/75874-43.jpeg', 'review_10'),
(20, 'upload/39164-25.jpeg', 'review_11'),
(21, 'upload/76202-20.png', 'review_12'),
(22, 'upload/74865-21.jpeg', 'review_13'),
(23, 'upload/18175-22.jpeg', 'review_14'),
(24, 'upload/5177-23.jpeg', 'content_8'),
(25, 'upload/11230-24.jpeg', 'content_9'),
(26, 'upload/76732-19.png', 'content_10'),
(27, 'upload/32460-26.jpeg', 'content_11'),
(28, 'upload/60194-30.jpeg', 'content_12');

-- --------------------------------------------------------

--
-- Table structure for table `tb_links`
--

CREATE TABLE `tb_links` (
  `id` int(11) NOT NULL,
  `link` text NOT NULL,
  `type` text NOT NULL,
  `img` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tb_links`
--

INSERT INTO `tb_links` (`id`, `link`, `type`, `img`) VALUES
(1, 'https://line.me/ti/p/hm19S5OThq66', 'line', 'img/line.webp'),
(2, 'https://web.facebook.com/werupong.surapo/', 'facebook', 'img/facebook.webp'),
(3, 'NmXpcUci6cDFWWUGNRKFIEekT3Z6Tcawye7LEtT8D8Q', 'notify_line', 'img/line_notify.png'),
(4, '0857683006', 'prompay', 'img/prompay.png');

-- --------------------------------------------------------

--
-- Table structure for table `tb_order`
--

CREATE TABLE `tb_order` (
  `id` int(11) NOT NULL,
  `order_id` int(11) NOT NULL,
  `product` text NOT NULL,
  `qty` int(11) NOT NULL,
  `price` int(11) NOT NULL,
  `delivery` int(11) NOT NULL,
  `code_delivery` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tb_order`
--

INSERT INTO `tb_order` (`id`, `order_id`, `product`, `qty`, `price`, `delivery`, `code_delivery`) VALUES
(1, 1, 'iphone', 1, 9800, 150, '35683'),
(2, 1, 'MacBook M1', 1, 32000, 150, '35683'),
(3, 1, 'ipad Pro', 1, 28000, 150, '35683'),
(4, 1, 'ari pord', 1, 6900, 150, '35683'),
(5, 1, 'apple watch', 1, 15000, 150, '35683'),
(6, 2, 'MacBook M1', 1, 32000, 150, '219225'),
(7, 3, 'iphone', 1, 9800, 150, '225550'),
(8, 4, 'ari pord', 1, 6900, 150, '695985'),
(9, 5, 'ari pord', 1, 6900, 150, '352147'),
(10, 6, 'ari pord', 1, 6900, 150, '773606'),
(11, 7, 'apple watch', 1, 15000, 150, '498473'),
(12, 8, 'ari pord', 1, 6900, 150, '715144'),
(13, 9, 'ari pord', 1, 6900, 150, '593702'),
(14, 10, 'ari pord', 1, 6900, 150, '298786'),
(15, 11, 'MacBook M1', 1, 32000, 150, '780691'),
(16, 12, 'MacBook M1', 1, 32000, 150, '65631'),
(17, 13, 'ari pord', 1, 6900, 150, '217023'),
(18, 14, 'MacBook M1', 1, 32000, 150, '454495'),
(19, 15, 'ipad Pro', 1, 28000, 150, '557624'),
(20, 15, 'MacBook M1', 1, 32000, 150, '557624'),
(21, 16, 'ari pord', 1, 6900, 150, '41612'),
(22, 17, 'ari pord', 1, 6900, 150, '262177'),
(23, 18, 'ari pord', 1, 6900, 150, '15564'),
(24, 19, 'MacBook M1', 1, 32000, 150, '651970');

-- --------------------------------------------------------

--
-- Table structure for table `tb_product`
--

CREATE TABLE `tb_product` (
  `id` int(11) NOT NULL,
  `product_name` text,
  `product_price` int(11) DEFAULT NULL,
  `product_delivery` int(11) DEFAULT NULL,
  `product_img` text,
  `detail` text
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tb_product`
--

INSERT INTO `tb_product` (`id`, `product_name`, `product_price`, `product_delivery`, `product_img`, `detail`) VALUES
(2, 'iphone', 9800, 150, 'upload/10230-macbook-pro-14-and-16_overview__fz0lron5xyuu_og.png', 'fdsf'),
(3, 'MacBook M1', 32000, 150, 'upload/34905-4.jpeg', 'Macbook'),
(4, 'ipad Pro', 28000, 150, 'upload/74336-8.jpg', 'ipad'),
(5, 'apple watch', 15000, 150, 'upload/85098-18.jpeg', 'apple watch'),
(6, 'ari pord', 6900, 150, 'upload/54930-23.jpeg', 'aripord');

-- --------------------------------------------------------

--
-- Table structure for table `tb_text_content`
--

CREATE TABLE `tb_text_content` (
  `id` int(11) NOT NULL,
  `text_content` text NOT NULL,
  `type` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tb_text_content`
--

INSERT INTO `tb_text_content` (`id`, `text_content`, `type`) VALUES
(1, 'ทดสอบ', 'header_1'),
(2, 'Safari มีคุณสมบัติอันล้ำสมัยที่จะช่วยให้คุณสนุกกับการท่องเว็บยิ่งขึ้น ด้วยหลากหลายวิธียิ่งกว่าเดิม\n                    ทั้งยังมีคุณสมบัติความเป็นส่วนตัวที่มาพร้อมเครื่องที่ช่วยปกป้องข้อมูลและช่วยให้ Mac ของคุณปลอดภัย\n                    ส่วนหน้าเริ่มต้นที่ได้รับการอัปเดตมาใหม่ก็ช่วยให้คุณบันทึก ค้นหา และแชร์เว็บไซต์ที่\n                    คุณโปรดปรานได้อย่างรวดเร็วและง่ายดาย นอกจากนี้ยังมีคำแนะนำโดย Siri ซึ่งจะแสดงที่คั่นหน้า,\n                    ลิงก์จากรายการอ่าน, แถบ iCloud, ลิงก์ที่คุณได้รับในแอปข้อความ และอีกมากมาย555 ทดสอบ', 'text_1'),
(3, 'แอประดับโปร', 'header_2'),
(4, 'Logic Pro จะเปลี่ยน Mac ของคุณให้กลายเป็นสตูดิโอสำหรับการบันทึกเสียงและผลิตงาน MIDI\n                    ที่สมบูรณ์แบบ เรียกว่ามีครบทุกอย่างที่จำเป็นเพื่อให้คุณแต่งเพลง บันทึก ปรับแต่ง และมิกซ์เสียง\n                    อย่างที่ไม่เคยทำได้มาก่อน และด้วยคอลเลกชั่นปลั๊กอินเต็มรูปแบบมากมาย พร้อมด้วยเสียงและลูป\n                    ที่มีให้เลือกเป็นพันๆ ก็เท่ากับว่าคุณมีทุกอย่างที่ต้องการนับตั้งแต่เริ่มมีแรงบันดาลใจไปจนถึงตอน\n                    ทำมาสเตอร์สุดท้ายเสร็จ ดังนั้นไม่ว่าเพลงที่คุณต้องการสร้างสรรค์จะเป็นแบบไหนก็ไม่ใช่ปัญหา5555', 'text_2'),
(5, 'คำถามที่พบบ่อย', 'header_ask'),
(6, 'มีค่าจัดส่งหรือไม่ ?', 'head_1'),
(7, 'สั่งซื้อ 1 ขวด มีค่าจัดส่ง 50 บาท \n\n                                    สั่งซื้อ 2 ขวด ขึ้นไป ฟรีค่าจัดส่ง', 'text_head_1'),
(8, 'มีเก็บเงินปลายทางหรือไม่ ?', 'head_2'),
(9, 'มีบริการเก็บปลายทาง', 'text_head_2'),
(10, 'มีสินค้าพร้อมส่งหรือไม่ ?', 'head_3'),
(11, 'สินค้าพร้อมส่ง ส่งตรงจากบริษัท 100 %\n', 'text_head_3'),
(12, 'รีวิวสินค้า', 'head_review');

-- --------------------------------------------------------

--
-- Table structure for table `tb_users_delivery`
--

CREATE TABLE `tb_users_delivery` (
  `id` int(11) NOT NULL,
  `name` text NOT NULL,
  `phone` text NOT NULL,
  `address` text NOT NULL,
  `img_online` text,
  `email` text NOT NULL,
  `code_delivery` text NOT NULL,
  `transport` text,
  `status` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tb_users_delivery`
--

INSERT INTO `tb_users_delivery` (`id`, `name`, `phone`, `address`, `img_online`, `email`, `code_delivery`, `transport`, `status`) VALUES
(1, 'หกด', '527257', 'หกดห', NULL, 'weeraphong61045@gmail.com', '35683', 'หฟด', 2),
(2, 'weeraphong', '0925562767', 'sdaf', NULL, 'weeraphong61045@gmail.com', '219225', 'dsfs', 2),
(3, 'sdaf', '0925562767', 'safaafs', NULL, 'weeraphong61045@gmail.com', '225550', NULL, 1),
(4, 'saf', '0925562767', 'saf', NULL, 'weeraphong61045@gmail.com', '695985', NULL, 1),
(5, 'saf', '0925562767', 'saf', NULL, 'weeraphong61045@gmail.com', '352147', NULL, 1),
(6, 'sdaf', '7454', 'saf', NULL, 'weeraphong61045@gmail.com', '773606', NULL, 1),
(7, 'saf', '0925562767', 'saf', NULL, 'weeraphong61045@gmail.com', '498473', NULL, 1),
(8, 'sfa', '0925562767', 'saf', NULL, 'weeraphong61045@gmail.com', '715144', NULL, 1),
(9, 'weeraphong', '0925562767', 'sfsf', NULL, 'weeraphong61045@gmail.com', '593702', NULL, 1),
(10, 'saf', '0925562767', 'saf', NULL, 'weeraphong61045@gmail.com', '298786', NULL, 1),
(11, 'weeraphong', '0925562767', 'safsaf', NULL, 'weeraphong61045@gmail.com', '780691', NULL, 1),
(12, 'weeraphong', '0925562767', 'safsaf', NULL, 'weeraphong61045@gmail.com', '65631', NULL, 1),
(13, 'weeraphong', '4654654654', 'sf', NULL, 'weeraphong61045@gmail.com', '217023', NULL, 1),
(14, 'sfa', '0925562767', 'saf', NULL, 'weeraphong61045@gmail.com', '454495', NULL, 1),
(15, 'dsf', '0925562767', 'safaf', NULL, 'weeraphong61045@gmail.com', '557624', NULL, 1),
(16, 'weeraphong', '0925562767', 'saf', NULL, 'weeraphong61045@gmail.com', '41612', NULL, 1),
(17, 'weeraphong', '0925562767', 'sfa', NULL, 'weeraphong61045@gmail.com', '262177', NULL, 1),
(18, 'weeraphong', '0925562767', 'saf', NULL, 'weeraphong61045@gmail.com', '15564', NULL, 1),
(19, 'weeraphong', '0925562767', 'saff', NULL, 'weeraphong61045@gmail.com', '651970', NULL, 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tb_admin`
--
ALTER TABLE `tb_admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tb_contents`
--
ALTER TABLE `tb_contents`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tb_links`
--
ALTER TABLE `tb_links`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tb_order`
--
ALTER TABLE `tb_order`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tb_product`
--
ALTER TABLE `tb_product`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tb_text_content`
--
ALTER TABLE `tb_text_content`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tb_users_delivery`
--
ALTER TABLE `tb_users_delivery`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tb_admin`
--
ALTER TABLE `tb_admin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `tb_contents`
--
ALTER TABLE `tb_contents`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=29;

--
-- AUTO_INCREMENT for table `tb_links`
--
ALTER TABLE `tb_links`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `tb_order`
--
ALTER TABLE `tb_order`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;

--
-- AUTO_INCREMENT for table `tb_product`
--
ALTER TABLE `tb_product`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `tb_text_content`
--
ALTER TABLE `tb_text_content`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `tb_users_delivery`
--
ALTER TABLE `tb_users_delivery`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
