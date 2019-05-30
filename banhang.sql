-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 30, 2019 at 05:11 PM
-- Server version: 10.1.40-MariaDB
-- PHP Version: 7.3.5

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `banhang`
--

-- --------------------------------------------------------

--
-- Table structure for table `bills`
--

CREATE TABLE `bills` (
  `id` int(10) UNSIGNED NOT NULL,
  `id_customer` int(11) DEFAULT NULL,
  `date_order` date DEFAULT NULL,
  `total` float DEFAULT NULL COMMENT 'tổng tiền',
  `payment` varchar(200) COLLATE utf8_unicode_ci DEFAULT NULL COMMENT 'hình thức thanh toán',
  `note` varchar(500) COLLATE utf8_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `updated_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `bills`
--

INSERT INTO `bills` (`id`, `id_customer`, `date_order`, `total`, `payment`, `note`, `created_at`, `updated_at`) VALUES
(55, 57, '2019-05-30', 20000, NULL, NULL, '2019-05-30 15:01:56', '2019-05-30 15:01:56'),
(56, 58, '2019-05-30', 20000, NULL, NULL, '2019-05-30 15:01:34', '2019-05-30 15:01:34');

-- --------------------------------------------------------

--
-- Table structure for table `bill_detail`
--

CREATE TABLE `bill_detail` (
  `id` int(10) UNSIGNED NOT NULL,
  `id_bill` int(10) NOT NULL,
  `id_product` int(10) NOT NULL,
  `quantity` int(11) NOT NULL COMMENT 'số lượng',
  `unit_price` double NOT NULL,
  `status` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `bill_detail`
--

INSERT INTO `bill_detail` (`id`, `id_bill`, `id_product`, `quantity`, `unit_price`, `status`, `created_at`, `updated_at`) VALUES
(84, 55, 108, 1, 20000, NULL, '2019-05-30 15:00:45', '2019-05-30 15:00:45'),
(85, 55, 111, 1, 25000, 'Đã xuất đơn hàng', '2019-05-30 15:01:56', '2019-05-30 15:01:56'),
(86, 56, 112, 1, 20000, NULL, '2019-05-30 15:01:27', '2019-05-30 15:01:27'),
(87, 56, 109, 1, 25000, 'Đã xuất đơn hàng', '2019-05-30 15:01:34', '2019-05-30 15:01:34');

-- --------------------------------------------------------

--
-- Table structure for table `customer`
--

CREATE TABLE `customer` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `gender` varchar(10) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `address` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `phone_number` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `note` varchar(200) COLLATE utf8_unicode_ci DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `customer`
--

INSERT INTO `customer` (`id`, `name`, `gender`, `email`, `address`, `phone_number`, `note`, `created_at`, `updated_at`) VALUES
(57, 'Nhật Võ', 'nam', 'nhatvo@gmail.com', 'Hồ Chí Minh', '0986765362', NULL, '2019-05-30 15:00:45', '2019-05-30 15:00:45'),
(58, 'Văn Nhật', 'nam', 'vannhat@gmail.com', 'Hồ Chí Minh', '0936735323', NULL, '2019-05-30 15:01:27', '2019-05-30 15:01:27');

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `id_type` int(10) UNSIGNED DEFAULT NULL,
  `description` text COLLATE utf8_unicode_ci,
  `unit_price` float DEFAULT NULL,
  `promotion_price` float DEFAULT NULL,
  `image` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `unit` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `new` varchar(10) COLLATE utf8_unicode_ci NOT NULL DEFAULT 'mới',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id`, `name`, `id_type`, `description`, `unit_price`, `promotion_price`, `image`, `unit`, `new`, `created_at`, `updated_at`) VALUES
(94, 'RedBull', 15, 'Một trong các loại đồ uống tăng lực hiệu quả trong các buổi học, ban ngày làm việc căng thẳng và cả đêm khuya, hàng đầu trên thị trường.\r\nĐóng gói: Lon 250ml.\r\nNhà sản xuất: Thai Corp International Vietnam Co.Ltd.', 15000, 12000, '5_redbull.jpg', 'phần', 'cũ', '2019-05-18 16:28:53', '2019-05-18 16:28:53'),
(95, '7-Up', 15, 'Nước giải khát 7up là nước giải khát có ga với hương vị chanh tự nhiên mang lại cảm giác sảng khoái cho người dùng khi uống. Đặc biệt là vào mùa hè thì uống nước lạnh 7up thì thật tuyệt vời.\r\nHãng sản xuất	: Pepsico', 15000, NULL, '7_up.jpg', 'phần', 'cũ', '2019-05-18 16:33:45', '2019-05-18 16:33:45'),
(96, 'Fanta', 15, 'Nước ngọt Fanta hương cam là thức uống giải khát rất được ưa chuộng trên toàn thế giới. Fanta hương cam mang đến cảm giác tươi mới, sảng khoái bất tận với hương cam dịu ngọt. Fanta là một sản phẩm của thương hiệu nước giải khát hàng đầu Coca-Cola, hoàn toàn không sử dụng chất bảo quản và hóa chất độc hại, mang đến cảm giác yên tâm cho người sử dụng.', 15000, NULL, 'fanta.jpg', 'phần', 'cũ', '2019-05-18 16:36:50', '2019-05-18 16:36:50'),
(98, 'Pepso', 15, 'Nước giải khát Pepsi là loại nước giải khát được người tiêu dùng thế giới biết đến nhiều nhất hiện nay. Và loại nước giải khát này đã có mặt trên 195 quốc gia trên thế giới và được người tiêu dùng yêu thích và sử dụng.\r\nHãng sản xuất	: Pepsico.', 15000, NULL, 'r_pepsi.jpg', 'phần', 'cũ', '2019-05-18 16:40:45', '2019-05-18 16:40:45'),
(99, 'Cappuccino', 12, 'Capuchino là một thức uống sang trọng và cầu kỳ, bao gồm ba phần chính: cà phê espresso, sữa nóng và sữa sủi bọt. Thường người ta sẽ rắc lên trên cốc cà phê Capuchino một ít bột ca cao hay bột quế để cafe capuchino sẽ ngon và đậm đà hơn. Người pha có thể tạo hình trang trí trên bề mặt cốc để tạo sự hấp dẫn.\r\nCapuchino có vị cà phê trầm và nhẹ, cùng hương thơm của kem hòa lẫn vị béo của sữa. Chỉ cần nhấp môi một ngụm nóng, bạn sẽ có ngay cảm giác thích thú khi thưởng thức một món ngon cùng với tâm trạng sảng khoái, đầu óc tỉnh táo, minh mẫn.', 35000, 30000, 'cappuccino.jpg', 'ly', 'mới', '2019-05-18 16:50:25', '2019-05-18 16:50:25'),
(100, 'Latte', 12, 'Khi chuẩn bị Latte, cà phê Espresso và sữa nóng được trộn lẫn vào nhau, bên trên vẫn là lớp foam nhưng mỏng và nhẹ hơn Cappucinno.', 45000, 40000, 'latte.jpg', 'ly', 'mới', '2019-05-18 16:54:52', '2019-05-18 16:54:52'),
(101, 'Coffee with Cream', 12, 'Coffee Cream cho những ai yêu thích thức uống tinh tế và quan tâm đến sức khỏe. Bằng sự hòa quyện giữa cà phê nguyên chất và lớp kem mềm mại đã tạo nên ly cà phê thật hoàn hảo, khác biệt và có lợi cho sức khỏe.\r\nKING COFFEE 2in1 - Sự lựa chọn sức khỏe cho thế hệ tiên phong. \r\nThành phần chính: Cà phê hòa tan, bột kem.', 45000, 40000, 'coffeecream.jpg', 'ly', 'mới', '2019-05-18 16:59:53', '2019-05-18 16:59:53'),
(102, 'Americano', 12, 'Americano là sự kết hợp giữa cà phê espresso thêm vào nước đun sôi. Bạn có thể tùy thích lựa chọn uống nóng hoặc dùng chung với đá.', 50000, 40000, 'Americano.jpg', 'ly', 'mới', '2019-05-18 17:04:44', '2019-05-18 17:04:44'),
(103, 'Black Coffee', 12, 'Black Coffee là sản phẩm cà phê hòa tan sáng tạo, với ý tưởng tạo ra các loại cà phê đáp ứng sở thích của khách hàng.\r\nHương vị: Black Coffee có hương vị đậm đà, sự kết hợp tinh tế giữa hai dòng cà phê Robusta và Arabica Việt Nam thứ thiệt. Hương thơm nồng nàn tỏa ra ngay từ khi mở gói.', 20000, NULL, 'Black Coffee.jpg', 'ly', 'cũ', '2019-05-18 17:09:37', '2019-05-18 17:09:37'),
(104, 'Milk Coffee', 12, 'Milk Coffee Việt Nam: Được biết tới là một thức uống vừa ngọt vừa đậm đặc, cà phê sữa đá của Việt Nam được pha chế từ hạt cà phê rang xay thô, không cầu kỳ, sau đó dùng phin để chế từng giọt vào một chiếc tách có sữa đặc dưới đáy, khi hoàn tất quá trình đòi hỏi sự chờ đợi nhẫn nại đó, người dùng có thể cho thêm đá để tận hưởng một ly cà phê sữa đá mát lịm “tỉnh người”.', 25000, NULL, 'milkcoffee.jpg', 'ly', 'cũ', '2019-05-18 17:12:35', '2019-05-18 17:12:35'),
(105, 'Lemon Cake', 13, 'Bánh chanh (lemon cake) tương tự như với pound cake nhưng có vị thơm của vỏ chanh rất đặc trưng, thích hợp dùng vào mùa hè cho bạn cảm giác tươi mát, sản khoái.', 25000, 15000, 'lemoncake.jpg', 'cái', 'mới', '2019-05-18 17:18:29', '2019-05-18 17:18:29'),
(106, 'Chocolate Cake', 13, 'Bánh socola là một trong những món tráng miệng phổ biến nhất và được yêu thích ở rất nhiều nơi trên thế giới, trong đó có Việt Nam. Một chiếc bánh với cấu trúc đặc trưng mềm mượt và xốp mịn, kết hợp cùng hương vị socola thơm ngon đậm đà chưa bao giờ thôi hấp dẫn đối với các tín đồ yêu thích socola, chắc chắn sẽ là món tráng miệng hoàn hảo cho bất kì bữa ăn nào.', 20000, NULL, 'chocolate-cake.jpg', 'cái', 'cũ', '2019-05-18 17:26:52', '2019-05-18 17:26:52'),
(107, 'Macaron Cake', 13, 'Bánh macaron là loại bánh ngọt được làm từ nguyên liệu chính là trứng, đường cát, bột hạnh nhân, và một chút màu thực phẩm. Phủ bên trong hai lớp bánh giòn tan là lớp nhân được làm từ kem bơ hoặc mứt. Là chiếc bánh được mệnh danh là nàng tiểu thư bánh đỏng đảnh của nước Pháp bởi vẻ kiêu kỳ, nhìn thì đơn giản nhưng để làm ra chiếc bánh không hề đơn giản chút nào.', 30000, 25000, 'macaroncake.jpg', 'cái', 'mới', '2019-05-18 17:30:31', '2019-05-18 17:30:31'),
(108, 'Strawberry Cake', 13, 'Strawberry shortcake là một bản hòa ca nhẹ nhàng giữa vị dâu chua dịu và vị béo ngậy của kem tươi. Bánh được cấu tạo từ 3 lớp bánh gato mềm xốp, xen kẽ với 3 lớp kem tươi béo ngậy. Nổi bật giữa các lớp bánh & kem là màu đỏ của mứt dâu cùng dâu tươi.', 25000, 20000, 'strawberry-cake.jpg', 'cái', 'mới', '2019-05-18 17:34:48', '2019-05-18 17:34:48'),
(109, 'Trà sữa trái cây', 14, 'Trà Sữa Trái Cây Tươi không như những loại trà sữa thông thường, bởi còn kết hợp với hương vị trái cây tươi tự nhiên một cách hài hòa. Hương vị trái cây trong những ly đồ uống luôn có sự hấp dẫn đặc biệt với tất cả mọi người.', 30000, 25000, 'tra-sua-trai-cay.jpg', 'ly', 'mới', '2019-05-18 17:42:22', '2019-05-18 17:42:22'),
(110, 'Trà sữa kem Cheese', 14, 'Trà Sữa Kem Cheese ngon có phô mai mặn mặn, kèm hương trà thơm phức kết hợp sữa tươi béo béo khiến ai cũng sẽ mê mẩn.', 30000, NULL, 'hong-tra-kem-cheese.jpg', 'ly', 'cũ', '2019-05-18 17:45:41', '2019-05-18 17:45:41'),
(111, 'Trà sữa trà xanh', 14, 'Vị béo và đắng dịu cùng vị ngọt của ly Trà sữa trà xanh sẽ đánh thức vị giác của bạn, khơi dậy cảm giác mát lạnh, thư giản và sản khoái cùng hương thơm trà xanh thoang thoảng.', 30000, 25000, 'trà-sữa-trà-xanh.jpg', 'ly', 'mới', '2019-05-18 17:48:32', '2019-05-18 17:48:32'),
(112, 'Trà sữa khoai môn', 14, 'Trà sữa khoai môn có vị béo béo, bùi bùi lạ miệng. Hơn nữa, màu trà sữa là màu tím khoai môn mát mắt, ai nhìn cũng muốn uống ngay. Đã từng là món “best – seller” tại các quán trà sữa Bobapop, Gongcha,… cho đến nay được sáng tạo thêm như trà sữa khoai môn đậu đỏ, trà sữa khoai môn tươi,…Còn chần chờ gì nữa hãy khám phá món trà sữa khoai môn ngay nhé.', 25000, 20000, 'tskhoaimon.jpg', 'hộp', 'mới', '2019-05-18 17:55:04', '2019-05-18 17:55:04'),
(113, 'Sting', 15, 'Nước tăng lực Sting là một sản phẩm của Pepsico được các bạn trẻ rất yêu thích. Sting dâu tây đỏ là sự kết hợp đột phá giữa nước tăng lực và hương dâu tây tự nhiên cho mùi thơm dịu ngọt, hương dâu đậm đà cùng vị gas nhẹ mang lại cảm giác sảng khoái và thú vị cho người uống.', 15000, NULL, 'sting.jpg', 'phần', 'cũ', '2019-05-18 17:57:24', '2019-05-18 17:57:24'),
(114, 'Cheese Cake', 13, 'Bánh Cheesecake là một loại bánh phô mai rất nổi tiếng tại nhiều quốc gia trên thế giới. Hòa theo sự phát triển của bánh kết hợp văn hóa mỗi nước mà Cheesecake có nhiều biến tấu khác nhau. Một số quốc gia có Cheesecake rất ngon có thể kể tên như Hy Lạp, Ý, Anh, Đức, Pháp, Bỉ, Mỹ và Nhật Bản. Vị béo của bánh kết hợp độ mềm mịn đã giúp cho loại bánh này có mặt trong rất nhiều tiệm bánh lớn nhỏ. Tại Việt Nam, Cheesecake cũng là một trong những loại bánh được rất nhiều người, đặc biệt là giới trẻ yêu thích', 30000, 25000, 'CheeseCake.jpg', 'cái', 'mới', '2019-05-30 13:49:45', '2019-05-30 13:49:45'),
(115, 'Panettone Cake', 13, 'Panettone được làm từ bột mì nguyên cám cùng nho khô, vỏ cam, được ngâm với hỗn hợp rượu từ Pháp, điểm xuyết với thảo mộc và các loại quả phương Đông. Hỗn hợp trái cây này được chuẩn bị trước 2 ngày để có thể thấm thật đều mùi hương nồng ấm.', 20000, 15000, 'panettonecake.jpg', 'cái', 'cũ', '2019-05-30 13:52:34', '2019-05-30 13:52:34'),
(116, 'Trà sữa truyền thống', 14, 'Trà sữa truyền thống cực kỳ phổ biến trên thị trường thức uống giải khát. Nó phù hợp với khẩu vị của nhiều đối tượng: học sinh, trẻ em, người lớn, người già… Điểm cộng lớn nhất cho thức uống này là vị đắng, chan chát và ngọt hậu hòa quyện với hương thơm ngậy mà không béo của sữa. Nhâm nhi từng ngụm nước độc đáo này, ta như được bay bổng vào thế giới của thiên nhiên, quên đi mệt mỏi, cái nắng hè oi ả bên ngoài.', 20000, 15000, 'TStruyenthong.jpg', 'ly', 'cũ', '2019-05-30 14:13:12', '2019-05-30 14:13:12'),
(117, 'Trà sữa trân châu', 14, 'Trà sữa trân châu đang là món ăn ngon hot trend trên thị trường, vị béo ngậy của sữa tươi thanh trùng, vị dai dai ngọt ngọt của trân châu đường nâu - loại topping gây sốt sẽ khiến bạn uống mãi không dừng.', 30000, 25000, 'tsTranChau.jpg', 'ly', 'mới', '2019-05-30 14:14:44', '2019-05-30 14:14:44'),
(118, 'CocaCola', 15, 'Nước ngọt Coca Cola giúp bạn xua tan mọi cảm giác mệt mỏi, căng thẳng, đem lại cảm giác thoải mái sau mỗi lần sử dụng.', 15000, NULL, 'Cocacola.jpg', 'phần', 'cũ', '2019-05-30 14:17:21', '2019-05-30 14:17:21');

-- --------------------------------------------------------

--
-- Table structure for table `slide`
--

CREATE TABLE `slide` (
  `id` int(11) NOT NULL,
  `link` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `image` varchar(100) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `slide`
--

INSERT INTO `slide` (`id`, `link`, `image`) VALUES
(1, '', 'banner1.jpg'),
(2, '', 'banner2.jpg'),
(3, '', 'banner3.jpg'),
(4, '', 'banner4.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `support`
--

CREATE TABLE `support` (
  `id` int(10) UNSIGNED NOT NULL,
  `full_name` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `title` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci DEFAULT NULL,
  `content` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `status` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL DEFAULT 'Chưa phản hồi',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `support`
--

INSERT INTO `support` (`id`, `full_name`, `email`, `title`, `content`, `status`, `created_at`, `updated_at`) VALUES
(1, 'Văn Công A', 'aaa@gmail.com', 'Ship hàng', 'Cửa hàng có ship hàng không?', 'Chưa phản hồi', '2019-05-30 15:03:49', '2019-05-30 15:03:49');

-- --------------------------------------------------------

--
-- Table structure for table `type_products`
--

CREATE TABLE `type_products` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `description` text COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `type_products`
--

INSERT INTO `type_products` (`id`, `name`, `description`, `created_at`, `updated_at`) VALUES
(12, 'Coffee', 'Sạch, tươi mới kết hợp với sự cân bằng của hương thơm, vị chua, đắng cùng với vị ngọt tự nhiên chính là các yếu tố quan trọng nhất tạo nên một ly cà phê ngon.', '2018-12-26 14:26:23', '2018-12-26 14:26:23'),
(13, 'Cakes', 'Bánh ngọt là một trong những món ăn được rất nhiều người yêu thích. Một chiếc bánh ngọt ngon kết hợp với ly cà phê nóng sẽ mang lại sự thoải mái, giảm streess. Thưởng thức một chiếc bánh ngọt được ví như tận hưởng một thú vui bởi nuông chiều vị giác cũng làm thỏa mãn bản thân sau những giờ làm việc, học tập căng thẳng', '2018-12-26 14:26:39', '2018-12-26 14:26:39'),
(14, 'Milk tea', 'Không chỉ là thức uống thân thuộc của học trò, món trà này còn mang trong mình lịch sử thú vị và nhiều biến thể khi chu du đến các đất nước khác nhau.', '2018-12-26 14:26:50', '2018-12-26 14:26:50'),
(15, 'Others', 'Các loại nước uống khác', '2018-12-26 14:27:05', '2018-12-26 14:27:05');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(10) UNSIGNED NOT NULL,
  `full_name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `isAdmin` varchar(10) COLLATE utf8_unicode_ci DEFAULT 'Không',
  `password` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `phone` varchar(20) COLLATE utf8_unicode_ci DEFAULT NULL,
  `address` varchar(1024) COLLATE utf8_unicode_ci DEFAULT NULL,
  `remember_token` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `full_name`, `email`, `isAdmin`, `password`, `phone`, `address`, `remember_token`, `created_at`, `updated_at`) VALUES
(16, 'Admin', 'admin@gmail.com', 'Có', '$2y$10$OOjs5wA1qTTZZJkdOcgJuuoltSN.w94iWx/lYHv4TLX9cLIeb1RkC', '0986765362', 'Hồ Chí Minh', 'NhUv7DASPmY6tqNYoN8F0gigmBBazep7IN3tf7G2tzLTZ7tN8nOh0zat1x36', '2019-05-30 13:40:22', '2019-05-30 13:40:22'),
(17, 'Nguyễn Văn Nhật', 'vannhat8198@gmail.com', 'Có', '$2y$10$oCzupbRr667KUKqNfHn5F.WpoZMEAtwS0zwJNUhyB9JG3351WiwhS', '0987654321', 'Hồ', NULL, '2019-05-30 13:42:32', '2019-05-30 13:42:32'),
(18, 'Võ Hoàng Nhật', '1612462@gmail.com', 'Có', '$2y$10$bYxbwURb1VkBLvX8gf4Y.uQohtOXIbinRykD92049DT1A/geUqDNW', '0978654521', 'Hồ Chí Minh', NULL, '2019-05-30 13:43:09', '2019-05-30 13:43:09'),
(19, 'Nhật Nguyễn', 'nhat123@gmail.com', 'Không', '$2y$10$SJ5tS6R0IFPbz5jB5O84S.9GWOoT6TWOyK1N5eG7loHK7aSCzOBoK', '0123456789', 'Q12 TP. Hồ Chí Minh', NULL, '2019-05-30 14:58:47', '2019-05-30 14:58:47');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `bills`
--
ALTER TABLE `bills`
  ADD PRIMARY KEY (`id`),
  ADD KEY `bills_ibfk_1` (`id_customer`);

--
-- Indexes for table `bill_detail`
--
ALTER TABLE `bill_detail`
  ADD PRIMARY KEY (`id`),
  ADD KEY `bill_detail_ibfk_2` (`id_product`);

--
-- Indexes for table `customer`
--
ALTER TABLE `customer`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`),
  ADD KEY `products_id_type_foreign` (`id_type`);

--
-- Indexes for table `slide`
--
ALTER TABLE `slide`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `support`
--
ALTER TABLE `support`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `type_products`
--
ALTER TABLE `type_products`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `bills`
--
ALTER TABLE `bills`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=57;

--
-- AUTO_INCREMENT for table `bill_detail`
--
ALTER TABLE `bill_detail`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=88;

--
-- AUTO_INCREMENT for table `customer`
--
ALTER TABLE `customer`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=59;

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=119;

--
-- AUTO_INCREMENT for table `slide`
--
ALTER TABLE `slide`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `support`
--
ALTER TABLE `support`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `type_products`
--
ALTER TABLE `type_products`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `products`
--
ALTER TABLE `products`
  ADD CONSTRAINT `products_id_type_foreign` FOREIGN KEY (`id_type`) REFERENCES `type_products` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
