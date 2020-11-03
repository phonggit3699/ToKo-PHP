-- phpMyAdmin SQL Dump
-- version 5.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 15, 2020 at 04:06 PM
-- Server version: 10.4.11-MariaDB
-- PHP Version: 7.4.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `toko`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` int(100) NOT NULL,
  `user` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `name` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `password` varchar(50) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `user`, `name`, `password`) VALUES
(1, 'admin', 'admin', '21232f297a57a5a743894a0e4a801fc3'),
(24, 'Phương', 'phuong', '25d55ad283aa400af464c76d713c07ad'),
(26, 'Duy', 'duy', '81dc9bdb52d04dc20036dbd8313ed055');

-- --------------------------------------------------------

--
-- Table structure for table `book`
--

CREATE TABLE `book` (
  `id` int(100) NOT NULL,
  `name` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `price` double NOT NULL,
  `author` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `description` varchar(256) COLLATE utf8_unicode_ci DEFAULT NULL,
  `quantity` tinyint(255) DEFAULT NULL,
  `image` varchar(256) COLLATE utf8_unicode_ci NOT NULL,
  `category` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `subcategory` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `code` varchar(10) COLLATE utf8_unicode_ci DEFAULT NULL,
  `date` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `book`
--

INSERT INTO `book` (`id`, `name`, `price`, `author`, `description`, `quantity`, `image`, `category`, `subcategory`, `code`, `date`) VALUES
(1, 'Sách mới', 20000, 'Phong', 'Đọc là khóc', 3, '../../public/images/uploads/demo.jpg', 'Tình cảm', '', 'DEMO', '2020-06-03'),
(31, 'Sách demo', 10000, 'Demo', 'Demo DEmo', 13, '../../public/images/uploads/photo1514606141082-1514606141082-1514690372285.jpg', 'Tình cảm', '', 'TH855', '2020-06-27'),
(40, 'Truyện hài', 20000.234, 'Long', 'đọc là hài', 3, '../../public/images/uploads/WIN_20200525_19_45_28_Pro.jpg', 'Hài hước', 'Dí dỏm', 'MH370', '2020-06-13'),
(43, 'Nghệ thuật bán hàng bậc cao', 10000.37, 'Zig Ziglar', 'Triết lý chứa đựng trong cuốn sách Nghệ thuật bán hàng bậc cao thật đơn giản: “Bạn có thể có được những tất cả mọi thứ trong cuộc sống nếu bạn biết giúp người khác đạt được điều họ muốn”', 10, '../../public/images/uploads/1415.jpg', 'Kinh doanh', 'Bí quyết kinh doanh', 'NT123', '2020-06-13'),
(44, 'Hoa thiên cốt', 10000, 'Fresh Quả Quả', 'Hoa Thiên Cốt của Fresh Quả Quả đã làm mưa làm gió từ trên thị trường sách đến màn ảnh nhỏ trong những năm gần đây. Giữa Hoa Thiên Cốt và Bạch Tử Họa là một câu chuyện tình yêu bi thương nhưng cuối cùng cũng được trùng phùng hạnh phúc.', 10, '../../public/images/uploads/8646.jpg', 'Ngôn tình', 'Cổ trang', 'HTC00', '2020-06-13'),
(45, 'Nghệ thuật bán hàng bậc cao', 10000.37, 'Zig Ziglar', 'Triết lý chứa đựng trong cuốn sách Nghệ thuật bán hàng bậc cao thật đơn giản: “Bạn có thể có được những tất cả mọi thứ trong cuộc sống nếu bạn biết giúp người khác đạt được điều họ muốn”', 10, '../../public/images/uploads/1415.jpg', 'Kinh doanh', 'Bí quyết kinh doanh', 'NT123', '2020-06-13'),
(46, 'Hoa thiên cốt', 10000, 'Fresh Quả Quả', 'Hoa Thiên Cốt của Fresh Quả Quả đã làm mưa làm gió từ trên thị trường sách đến màn ảnh nhỏ trong những năm gần đây. Giữa Hoa Thiên Cốt và Bạch Tử Họa là một câu chuyện tình yêu bi thương nhưng cuối cùng cũng được trùng phùng hạnh phúc.', 10, '../../public/images/uploads/8646.jpg', 'Ngôn tình', 'Cổ trang', 'HTC00', '2020-06-13'),
(47, 'Nghệ thuật bán hàng bậc cao', 10000.37, 'Zig Ziglar', 'Triết lý chứa đựng trong cuốn sách Nghệ thuật bán hàng bậc cao thật đơn giản: “Bạn có thể có được những tất cả mọi thứ trong cuộc sống nếu bạn biết giúp người khác đạt được điều họ muốn”', 10, '../../public/images/uploads/1415.jpg', 'Kinh doanh', 'Bí quyết kinh doanh', 'NT123', '2020-06-13'),
(48, 'Nghệ thuật bán hàng bậc cao', 10000.37, 'Zig Ziglar', 'Triết lý chứa đựng trong cuốn sách Nghệ thuật bán hàng bậc cao thật đơn giản: “Bạn có thể có được những tất cả mọi thứ trong cuộc sống nếu bạn biết giúp người khác đạt được điều họ muốn”', 10, '../../public/images/uploads/1415.jpg', 'Kinh doanh', 'Bí quyết kinh doanh', 'NT123', '2020-06-13'),
(49, 'Sách mới', 20000, 'Phong', 'Đọc là khóc', 3, '../../public/images/uploads/demo.jpg', 'Tình cảm', '', 'DEMO', '2020-06-03'),
(50, 'Nghệ thuật bán hàng bậc cao', 10000.37, 'Zig Ziglar', 'Triết lý chứa đựng trong cuốn sách Nghệ thuật bán hàng bậc cao thật đơn giản: “Bạn có thể có được những tất cả mọi thứ trong cuộc sống nếu bạn biết giúp người khác đạt được điều họ muốn”', 10, '../../public/images/uploads/1415.jpg', 'Kinh doanh', 'Bí quyết kinh doanh', 'NT123', '2020-06-13'),
(52, 'Mộ Khâu Tử', 10000, 'Hà Đăng', 'Dưới mộ cổ xuất hiện một bức tranh kể lại câu chuyện ngày trước, hé lộ một bí mật của ngôi mộ.\r\n\r\nChuyện kể rằng ngày xửa ngày xưa Trư Bát Giới (cách gọi tắt của “kẻ mình người đầu heo”) là một tên thư sinh gầy gò yếu ớt, có thể nói là gầy trơ xương....', 1, '../../public/images/uploads/25921.jpg', 'Truyện ma tâm linh', 'Linh dị', 'MKT-01', '2020-06-13'),
(53, 'Khởi nghiệp thành công từ nhà đầu tư mạo hiểm', 10000, 'Tim Draper', 'Với hơn 30 năm kinh nghiệm trong lĩnh vực đầu tư mạo hiểm, Tim Draper đã hỗ trợ, chỉ dẫn, dạy dỗ, tư vấn và cấp vốn cho hàng trăm Anh hùng Khởi nghiệp. Theo Tim, Anh hùng Khởi nghiệp là những người thúc đẩy sự tiến bộ, người không chỉ muốn thay đổi thế giớ', 1, '../../public/images/uploads/24730.jpg', 'Khởi nghiệp', 'Kinh doanh', 'KNTCTNDTMH', '2020-06-13'),
(54, 'Marketing cho startup', 10000, 'Simona Covel', 'Bạn đang cầm trên tay cuốn sách chứa đựng những tài liệu giá trị từ các phóng viên kỳ cựu, các biên tập viên xuất sắc và các chuyên gia giàu kinh nghiệm về lĩnh vực marketing và kinh tế.', 1, '../../public/images/uploads/24994.jpg', 'Marketing - Bán hàng', 'Kinh doanh', 'MCS-01', '2020-06-13'),
(55, 'Nhân sự cốt cán', 10000, 'Seth Godin', 'Làm thế nào để thúc đẩy sự nghiệp và tạo ra tương lai rực rỡ bất chấp xuất phát điểm của bạn ở đâu?\r\n\r\nTại sao một số người dễ dàng bị sa thải, nản chí và bị thu hẹp mọi cơ hội, trong khi những người khác có cơ hội lựa chọn? Trong cuốn sách ấn tượng này, S', 1, '../../public/images/uploads/25113.jpg', 'Quản trị - Lãnh đạo', 'Kinh doanh', 'NSCC-01', '2020-06-13'),
(56, 'Mở rộng doanh nghiệp', 10000, 'Verne Harnish', 'Mở rộng doanh nghiệp sẽ là một trong những cuốn sách kinh doanh hay nhất mà bạn từng đọc.\r\n\r\n\"Ý tưởng dẫn dắt một công ty đi từ chiếc ao nhỏ bé, tù túng ra biển lớn có thể đầy ắp những háo hức, nhưng cũng sẽ vô cùng gian nan nếu thiếu đi những hướng dẫn ch', 1, '../../public/images/uploads/22820.jpg', 'Đầu tư - Tài chính', 'Kinh doanh', 'MRDN-01', '2020-06-13'),
(57, 'Cuộc chiến phố Wall', 10000, 'Kathleen Day', 'Kể từ thời khai sinh chế độ Cộng hòa, người Mỹ đã phải bận tâm với các câu hỏi về ngân hàng, tiền và tín dụng, với quyền lực của chúng ta, với vấn đề kép - làm thế nào để tạo ra các tập đoàn đồng thời hạn chế sức phá hoại của của chúng. Từ giá trị của tiền', 1, '../../public/images/uploads/25693.jpg', 'Kiến thức kinh tế', 'Kinh doanh', 'CCPW-01', '2020-06-13'),
(58, 'Cẩm nang mở nhà hàng', 10000, 'Roger Fields', 'Cẩm nang mở nhà hàng như một cuốn hướng dẫn khởi nghiệp cung cấp cho những chủ nhà hàng tương lai cách lên kế hoạch để mở một nhà hàng của riêng mình, từ kinh phí, địa điểm, thiết kế không gian, xây dựng thực đơn, marketing quảng bá, quản lý tài chính...  ', 1, '../../public/images/uploads/24999.jpg', 'Kinh doanh tổng hợp', 'Kinh doanh', 'CNMNH-01', '2020-06-13'),
(59, 'Thịnh thế kiều y', 10000, 'Phương Phương', 'Tô Tử Ngữ xuất hiện khiến Cố Thanh Hoàn không thể tiếp tục bình tĩnh được nữa. Không yêu sẽ không hận, một khi đã hận thì cả đời không thể quên.\r\n\r\nTriệu Cảnh Diễm tỏ rõ lập trường bản thân sẽ ủng hộ Thanh Hoàn vô điều kiện, thậm chí còn đánh nhau với Thế ', 10, '../../public/images/uploads/25896.jpg', 'Cổ trang', 'Ngôn tình', 'TTKY-01', '2020-06-13'),
(60, 'Chỉ yêu mình em', 10000, 'Phù Đồ Yêu', 'Qua lời Nghiêm Thừa Trì, Hạ Trường Duyệt biết được Dịch Hải Âm mắc chứng rối loạn ngôn ngữ, việc đóng phim là để anh có thể chữa trị được bệnh. Cùng lúc đó, Dịch Hải Âm nhờ Nghiêm Thừa Trì giúp anh tìm được một người con gái – thông qua manh mối là một cái', 1, '../../public/images/uploads/25912.jpg', 'Hiện đại', 'Ngôn tình', 'CYME-01', '2020-06-13'),
(61, 'Xuyên nhanh: Nhiệm vụ Ái Hồn', 10000, 'Một Con Mèo Ngốc', 'Mặc dù đã cố hết sức thay đổi cốt truyện nhưng Ninh Ngưng không ngờ bản thân vẫn phải đối mặt với những nguy hiểm do cặp cẩu nam nữ tạo ra. Cô nàng thực tập ngây thơ sẽ phải xử lý những tình huống một mất một còn ra sao?\r\n\r\nNinh Ngưng và tiểu ca ca nảy sin', 1, '../../public/images/uploads/25915.jpg', 'Xuyên không', 'Ngôn tình', 'XNNVAH-01', '2020-06-13'),
(62, 'Thiên hậu trở về', 10000, 'Hạ Uyển Anh', 'Mặc dù không tán thành với cách làm của ông cụ Lệ, nhưng Lệ Lôi vẫn không thể bỏ ngoài tai lời cảnh báo của ông. Anh đưa Hạ Lăng tới gặp một vị cao nhân, sau đó nhận được một lá bùa có thể giúp anh gánh được những tai họa mà Hạ Lăng gặp phải. Trong một lần', 1, '../../public/images/uploads/25909.jpg', 'Trùng sinh', 'Ngôn tình', 'THTV-01', '2020-06-13'),
(63, 'Đông Túy Hạ Hàm', 10000, 'Miêu Lão Sư', 'Triệu Nhã xảy ra chuyện, Đông Túy âm thầm đón cậu con trai của cô ấy về để tiện về lo liệu. Phía Âm Tam sau lần này cũng quyết định gọi thêm người bên Tế Quỷ sang phụ trách công việc', 1, '../../public/images/uploads/25830.jpg', 'Huyền ảo', 'Ngôn tình', 'DTHH-01', '2020-06-13');

-- --------------------------------------------------------

--
-- Table structure for table `cart`
--

CREATE TABLE `cart` (
  `id` int(100) NOT NULL,
  `name` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `price` double NOT NULL,
  `quantity` tinyint(255) DEFAULT NULL,
  `image` varchar(256) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(100) NOT NULL,
  `user` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `name` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `password` varchar(50) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `user`, `name`, `password`) VALUES
(1, 'user', 'user', 'user'),
(2, 'user', 'user', 'user');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `book`
--
ALTER TABLE `book`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `cart`
--
ALTER TABLE `cart`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;

--
-- AUTO_INCREMENT for table `book`
--
ALTER TABLE `book`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=64;

--
-- AUTO_INCREMENT for table `cart`
--
ALTER TABLE `cart`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
