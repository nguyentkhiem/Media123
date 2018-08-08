-- phpMyAdmin SQL Dump
-- version 4.8.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 06, 2018 at 10:29 AM
-- Server version: 10.1.33-MariaDB
-- PHP Version: 7.2.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `media`
--

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(7, '2014_10_12_000000_create_users_table', 1),
(8, '2014_10_12_100000_create_password_resets_table', 1),
(9, '2018_07_31_011239_create_vp_users', 1),
(10, '2018_07_31_085012_create_user_client', 1),
(11, '2018_08_02_020600_create_vp_categories', 1),
(12, '2018_08_02_031048_create_vp_movie', 1),
(13, '2018_08_03_013755_create_vp_music', 2),
(14, '2018_08_03_132021_create_vp_news', 3),
(15, '2018_08_03_140109_create_vp_images', 4),
(16, '2018_08_03_141516_create_vp_images', 5),
(17, '2018_08_03_151949_create_vp_news', 6),
(18, '2018_08_05_144132_create_vp_banner', 7),
(19, '2018_08_05_145104_create_vp_banner', 8),
(20, '2018_08_05_150143_create_vp_banner', 9);

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `user_client`
--

CREATE TABLE `user_client` (
  `client_id` int(10) UNSIGNED NOT NULL,
  `client_name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `client_img` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `client_level` tinyint(4) NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `user_client`
--

INSERT INTO `user_client` (`client_id`, `client_name`, `email`, `password`, `client_img`, `client_level`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'nguyenminhtam', 'nguyenminhtam@gmail.com', '$2y$10$HPinnYI5LPhDrdqLCJnl7Oi4CTOd.D3zzMn0.gBuZQWiB/wDbzINC', '14.jpg', 1, NULL, NULL, '2018-08-01 21:17:33'),
(2, 'vuxuanha', 'vuxuanha@gmail.com', '$2y$10$Ja82/Q1238m/IOSK.cX4l.4wlTP0/f84EN2ieyK8viy0FYejnOk.K', 'anhthanhvien4.jpg', 2, NULL, NULL, '2018-08-01 21:17:21'),
(3, 'vanbaokhanh', 'vanbaokhanh@gmail.com', '$2y$10$oBmT/mESXz7x5TSZqKxs0eIYpuJ1lYVOWI7GrCTeWkgF/QN90Ytg6', '07_RONALDO.png', 3, NULL, NULL, '2018-08-01 21:17:07'),
(4, 'Nguyễn Mai Trang', 'nguyenmaitrang@gmail.com', '$2y$10$rWvHBbjY4eXLkZtHGvrKg.Da5BPA/X4fC7WqjJCUyF41TdcN.9cWG', '11.jpg', 2, NULL, '2018-08-01 21:18:02', '2018-08-01 21:18:02'),
(5, 'Nguyển Thành Vinh', 'nguyenthanhvinh@gmail.com', '$2y$10$zEt7uvjNKlnr4/Z1ndGqyeaUB40VQdNoypMUsebNq3TE5dgmE.9SW', 'anhthanhvien4.jpg', 2, NULL, '2018-08-02 00:36:38', '2018-08-02 18:24:50');

-- --------------------------------------------------------

--
-- Table structure for table `vp_banner`
--

CREATE TABLE `vp_banner` (
  `banner_id` int(10) UNSIGNED NOT NULL,
  `banner_name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `banner_link` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `banner_price` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `banner_logo` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `banner_status` tinyint(4) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `vp_banner`
--

INSERT INTO `vp_banner` (`banner_id`, `banner_name`, `banner_link`, `banner_price`, `banner_logo`, `banner_status`, `created_at`, `updated_at`) VALUES
(1, 'Báo điện tử Dân Trí', 'http://dantri.com.vn/', '130000000', 'tieu-ngao-giang-ho-03_itww.jpg', 1, NULL, '2018-08-05 09:10:40'),
(2, 'Laravel', 'https://laravel.com/', '120000000', '11.jpg', 1, NULL, '2018-08-05 09:09:06'),
(3, 'w3schools', 'https://www.w3schools.com/', '90000000', 'athome.png', 1, NULL, '2018-08-05 09:08:13'),
(4, 'Báo điện tử vnexpress', 'https://vnexpress.net/', '100000000', 'slide-2.png', 1, NULL, '2018-08-05 09:05:34'),
(5, 'Trần Anh Computer', 'https://www.trananh.vn/', '50000000', 'hinh2.jpg', 1, '2018-08-05 08:48:46', '2018-08-05 09:05:47'),
(6, 'Báo điện tử News.Zing', 'https://news.zing.vn/', '100000000', 'banner-l-6.png', 1, '2018-08-05 08:49:03', '2018-08-05 09:07:24');

-- --------------------------------------------------------

--
-- Table structure for table `vp_categories`
--

CREATE TABLE `vp_categories` (
  `cate_id` int(10) UNSIGNED NOT NULL,
  `cate_name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `cate_slug` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `vp_categories`
--

INSERT INTO `vp_categories` (`cate_id`, `cate_name`, `cate_slug`, `created_at`, `updated_at`) VALUES
(1, 'Phim truyện', 'phim-truyen', NULL, '2018-08-04 20:34:10'),
(2, 'Âm nhạc', 'am-nhac', NULL, '2018-08-04 20:34:21'),
(3, 'Tin tức', 'tin-tuc', NULL, '2018-08-04 20:34:28'),
(4, 'Hình ảnh', 'hinh-anh', NULL, '2018-08-04 20:34:36'),
(6, 'Giao dịch', 'giao-dich', '2018-08-03 00:52:48', '2018-08-04 20:35:01'),
(7, 'Tùy chọn', 'tuy-chon', '2018-08-03 08:57:42', '2018-08-04 20:35:15'),
(8, 'Thể Thao', 'the-thao', '2018-08-04 20:37:16', '2018-08-05 07:19:46');

-- --------------------------------------------------------

--
-- Table structure for table `vp_images`
--

CREATE TABLE `vp_images` (
  `image_id` int(10) UNSIGNED NOT NULL,
  `image_name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `image_slug` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `image_img` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `image_status` tinyint(4) NOT NULL,
  `image_info` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `image_cate` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `vp_images`
--

INSERT INTO `vp_images` (`image_id`, `image_name`, `image_slug`, `image_img`, `image_status`, `image_info`, `image_cate`, `created_at`, `updated_at`) VALUES
(1, 'Máy tính và các thiết bị khác', 'may-tinh-va-cac-thiet-bi-khac', 'anh1.png', 1, '<p>BlackBerry Evolve v&agrave; Evolve X sở hữu m&agrave;n h&igrave;nh 5,99 inch, camera k&eacute;p ở mặt sau với gi&aacute; b&aacute;n 364 v&agrave; hơn 500 USD.</p>\r\n\r\n<p>Để c&oacute; th&agrave;nh c&ocirc;ng như h&ocirc;m nay, Apple cũng phải trải qua nhiều thăng trầm. Tuy nhi&ecirc;n họ gần như đ&atilde; thống trị l&agrave;ng c&ocirc;ng nghệ từ khi ra mắt chiếc iPhone đầu ti&ecirc;n.</p>\r\n\r\n<p>Sau thời gian d&agrave;i tạm dừng mảng tablet, Samsung vừa tr&igrave;nh l&agrave;ng chiếc m&aacute;y t&iacute;nh bảng cao cấp Galaxy Tab S4 với gi&aacute; từ 680 USD.</p>', 4, NULL, '2018-08-03 08:08:19'),
(2, 'Hòa tấu âm nhạc', 'hoa-tau-am-nhac', '1498207526639_500.jpg', 0, '<p>Th&agrave;nh vi&ecirc;n cuối c&ugrave;ng trong d&agrave;n huấn luyện vi&ecirc;n The Voice Kids - Giọng h&aacute;t Việt nh&iacute; 2018 ch&iacute;nh thức lộ diện qua buổi ghi h&igrave;nh ng&agrave;y 2/8, đ&oacute; ch&iacute;nh l&agrave; Khắc Hưng.</p>\r\n\r\n<p>H&atilde;ng th&ocirc;ng tấn CNN đưa tin ca sĩ Jennifer Lopez sẽ nhận giải thưởng Video Vanguard của Michael Jackson tại Lễ trao giải MTV Video Music (VMAs) v&agrave;o cuối th&aacute;ng 8.</p>', 4, NULL, '2018-08-03 08:06:52'),
(3, 'Ảnh thưởng thức âm nhạc', 'anh-thuong-thuc-am-nhac', 'poster2.jpg', 1, '<p>Rick Genest c&oacute; biệt danh &ldquo;Zombie Boy&rdquo; khi tham gia diễn xuất trong MV &quot;Born This Way&quot; của Lady Gaga. Anh vừa tự s&aacute;t tại nh&agrave; ri&ecirc;ng khi chuẩn bị bước sang tuổi 33.</p>', 4, NULL, '2018-08-03 08:05:57'),
(4, 'Xuân Trường', 'xuan-truong', 'anhthanhvien3.jpg', 1, '<p>Tất cả cầu thủ đều c&oacute; nhiều &aacute;p lực&rdquo;,&nbsp;tiền vệ Lương Xu&acirc;n Trường&nbsp;chia sẻ với b&aacute;o giới trong cuộc phỏng vấn chiều nay. &ldquo;Mọi người đều l&agrave; những cầu thủ c&oacute; phong độ rất tốt. Ngay cả bản th&acirc;n t&ocirc;i cũng chưa chắc chắn sẽ được sang Indonesia. Mọi chuyện vẫn c&ograve;n ở ph&iacute;a trước. T&ocirc;i cũng như mọi người cần phải nỗ lực hết m&igrave;nh&rdquo;.&nbsp;<br />\r\n------------<br />\r\nXem th&ecirc;m:&nbsp;<a href=\"http://vietbao.vn/Bong-da/Cong-Phuong-toa-sang-Olympic-Viet-Nam-thang-nguoc-Palestine/2147823176/306/\">C&ocirc;ng Phượng tỏa s&aacute;ng, Olympic Việt Nam thắng ngược Palestine</a>, http://vietbao.vn/Bong-da/Cong-Phuong-toa-sang-Olympic-Viet-Nam-thang-nguoc-Palestine/2147823176/306/<br />\r\nTin nhanh Việt Nam ra thế giới&nbsp;<a href=\"http://vietbao.vn/\">vietbao.vn</a>Xu&acirc;n&nbsp;</p>', 4, '2018-08-03 07:49:55', '2018-08-03 07:49:55'),
(5, 'Thiên long bát bộ 2003', 'thien-long-bat-bo-2003', '1.jpg', 1, '<h2>Sau vụ đất đ&aacute; sạt lở g&acirc;y hậu quả nặng nề ở Lai Ch&acirc;u, trời vẫn mưa to theo đợt khiến bộ đội, d&acirc;n qu&acirc;n gặp kh&oacute; khăn khi gi&uacute;p người d&acirc;n khắc phục hậu quả.</h2>', 4, '2018-08-05 02:08:52', '2018-08-05 02:08:52'),
(6, 'Đinh Lệ Nhiệt Ba', 'dinh-le-nhiet-ba', 'lucphienmon_royf.jpg', 1, '<p>X&eacute;t kết quả thi THPT quốc gia, ng&agrave;nh C&ocirc;ng nghiệp thực phẩm trường Đại học C&ocirc;ng nghiệp Thực phẩm TP HCM lấy điểm chuẩn cao nhất 18,75.</p>', 4, '2018-08-05 02:09:40', '2018-08-05 02:09:40'),
(7, 'Ảnh Phim cổ trang trung quốc 2018', 'anh-phim-co-trang-trung-quoc-2018', 'maxresdefault (1).jpg', 1, '<p>Hai vụ tai nạn m&aacute;y bay xảy ra chỉ c&aacute;ch nhau v&agrave;i giờ tr&ecirc;n d&atilde;y n&uacute;i Alps thuộc l&atilde;nh thổ Thụy Sĩ, khiến &iacute;t nhất 4 người thiệt mạng.</p>', 4, '2018-08-05 02:10:29', '2018-08-05 02:10:29'),
(8, 'Ảnh Vân Tích Truyện', 'anh-van-tich-truyen', 'vantichtruyen.jpg', 1, '<p>D&ugrave; Tesla nổi tiếng với &ocirc;t&ocirc; điện, điều trớ tr&ecirc;u l&agrave; Elon Musk vẫn chưa thuyết phục được giới ph&acirc;n t&iacute;ch c&ocirc;ng nhận đ&acirc;y l&agrave; một h&atilde;ng xe.</p>\r\n\r\n<ul>\r\n</ul>', 4, '2018-08-05 02:11:16', '2018-08-05 02:11:16');

-- --------------------------------------------------------

--
-- Table structure for table `vp_movie`
--

CREATE TABLE `vp_movie` (
  `movie_id` int(10) UNSIGNED NOT NULL,
  `movie_name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `movie_slug` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `movie_logo` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `movie_status` tinyint(4) NOT NULL,
  `movie_video` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `movie_info` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `movie_cate` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `vp_movie`
--

INSERT INTO `vp_movie` (`movie_id`, `movie_name`, `movie_slug`, `movie_logo`, `movie_status`, `movie_video`, `movie_info`, `movie_cate`, `created_at`, `updated_at`) VALUES
(1, 'FICTION', 'fiction', 'banner01.png', 1, 'ZAzWT8mRoR0', '<p><code>$str</code> <code>= &#39;This is a &lt;b&gt; Example&lt;/b&gt; &lt;a href=</code><code>&quot;#fragment&quot;</code><code>&gt;String&lt;/a&gt;</code></p>\r\n\r\n<p><code>&lt;p&gt;this a other string&lt;/p&gt;&#39;;</code></p>\r\n\r\n<p><code>echo</code> <code>$str</code><code>;</code></p>\r\n\r\n<p><code>echo</code> <code>strip_tags</code><code>(</code><code>$str</code><code>, </code><code>&#39;&lt;a&gt;&lt;p&gt;&#39;</code><code>);</code></p>', 1, NULL, '2018-08-02 02:49:29'),
(3, 'Because Im Stupid', 'because-im-stupid', 'anhthanhvien3.jpg', 1, '7gC4Dj9IqrQ', '<p><code>This is a Example String</code></p>\r\n\r\n<p><code>this a other string</code></p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p><code>This is a Example String this a other string</code></p>', 1, NULL, '2018-08-02 02:46:22'),
(4, 'The Nights', 'the-nights', '11.jpg', 0, 'UtF6Jej8yb4?list=RDUtF6Jej8yb4', '<h1>Avicii - The Nights</h1>\r\n\r\n<p>385.697.809 lượt xem</p>\r\n\r\n<p>&nbsp;</p>', 1, '2018-08-02 01:57:11', '2018-08-03 03:01:02'),
(5, 'Anh hùng xạ điêu', 'anh-hung-xa-dieu', 'Ly-Nhat-Dong-2_w_480.jpg', 1, 'RS_DpiWfSJI', '<p>Thế nhưng, thầy tr&ograve; Lopetegui đ&atilde; sớm bị dội một &quot;g&aacute;o nước lạnh&quot; ngay ph&uacute;t 12 sau t&igrave;nh huống đ&aacute; phản lưới của&nbsp;Dani Carvajal. Bị dẫn b&agrave;n trước từ kh&aacute; sớm, Real kh&ocirc;ng chịu bỏ cuộc v&agrave; họ đ&atilde; c&oacute; b&agrave;n&nbsp;gỡ h&ograve;a nhờ c&uacute; s&uacute;t xa đẹp mắt của Gareth Bale ngo&agrave;i v&ograve;ng cấm.&nbsp;</p>\r\n\r\n<p>Bước v&agrave;o hiệp 2,&nbsp;<em>Real</em>&nbsp;bất ngờ c&oacute; m&agrave;n &quot;lột x&aacute;c&quot; ngoạn mục khi những t&acirc;n binh trẻ tuổi được v&agrave;o s&acirc;n. Với tinh thần chiến đấu mạnh mẽ v&agrave; đầy nhiệt huyết, đội b&oacute;ng Ho&agrave;ng gia đ&atilde; c&oacute; 2 b&agrave;n thắng li&ecirc;n tiếp nhờ c&ocirc;ng của Asensio.</p>', 1, '2018-08-03 03:01:20', '2018-08-05 01:44:04'),
(6, 'Tân lộc đỉnh ký 2014', 'tan-loc-dinh-ky-2014', 'locdinhky.jpg', 1, 'GhbSrUvnYMg', '<h1>【Kara+Vietsub】Ca kh&uacute;c cuối phim 《Lộc Đỉnh K&yacute; 2014》 - &quot;Anh kh&ocirc;ng l&agrave; vị đại anh h&ugrave;ng em hằng mong ước&quot;</h1>\r\n\r\n<p>44.296 lượt xem</p>\r\n\r\n<p>2316 CHIA SẺ</p>', 1, '2018-08-05 01:46:15', '2018-08-05 01:46:15'),
(7, 'Tân thiên long bát bộ', 'tan-thien-long-bat-bo', 'thienlongbatbo.jpg', 1, 'S2Yp-BRQW_U', '<h1>Say m&ecirc; - Giả Thanh ( T&acirc;n thi&ecirc;n long b&aacute;t bộ 2013 OST )</h1>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>Say m&ecirc; - Giả Thanh ( T&acirc;n thi&ecirc;n long b&aacute;t bộ 2013 OST ) l&agrave; ca kh&uacute;c b&agrave;i h&aacute;t nhạc nền khi m&agrave; Kiều Phong h&uacute;t kiếm ở tập 21 . L&agrave; ca kh&uacute;c hay v&agrave; cảm động nhất trong phim ....</p>', 1, '2018-08-05 01:48:11', '2018-08-05 01:48:11'),
(8, 'Tiếu ngạo giang hồ', 'tieu-ngao-giang-ho', 'maxresdefault (5).jpg', 1, 'r_gu0LKHiGo', '<h1>TI&Ecirc;U DAO - 逍遥 &bull; Hoắc Kiến Hoa &bull; phim Tiếu Ngạo Giang Hồ 2014 (Vietsub)</h1>\r\n\r\n<p>668.636 lượt xem</p>\r\n\r\n<p>&nbsp;</p>', 1, '2018-08-05 01:49:45', '2018-08-05 01:49:45'),
(9, '[Vietsub][Kara] Servant of Evil', 'vietsubkara-servant-of-evil', 'maxresdefault (3).jpg', 1, 'U9oV5_6nUwY?list=RDU9oV5_6nUwY', '<h1>[Vietsub][Kara] Servant of Evil - Gero (悪ノ召使 - Aku no Meshitsukai)</h1>\r\n\r\n<p>Len v&agrave; Rin l&agrave; anh em sinh đ&ocirc;i nhưng từ nhỏ bị chia cắt , lớn l&ecirc;n Rin trở th&agrave;nh nữ ho&agrave;ng bạo ngược c&ograve;n Len trở về v&agrave; l&agrave;m ng hầu cho Rin</p>', 1, '2018-08-05 02:28:55', '2018-08-05 02:28:55');

-- --------------------------------------------------------

--
-- Table structure for table `vp_music`
--

CREATE TABLE `vp_music` (
  `music_id` int(10) UNSIGNED NOT NULL,
  `music_name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `music_slug` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `music_logo` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `music_status` tinyint(4) NOT NULL,
  `music_mp3` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `music_info` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `music_cate` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `vp_music`
--

INSERT INTO `vp_music` (`music_id`, `music_name`, `music_slug`, `music_logo`, `music_status`, `music_mp3`, `music_info`, `music_cate`, `created_at`, `updated_at`) VALUES
(1, 'No Brainer', 'no-brainer', 'anh5.jpg', 1, 'https://www.nhaccuatui.com/lh/auto/IxWC97t8TGgF', '<p>Artist: DJ Khaled, Justin Bieber, Chance The Rapper, Quavo. Genre: Hip Hop. Label: Sonymusic. Release date: 28/07/2017. Tracks: 1. Quality: MP3-320kbps.</p>', 2, NULL, '2018-08-03 02:53:07'),
(2, 'Darkside', 'darkside', 'Wind-music.jpg', 1, 'https://www.nhaccuatui.com/lh/auto/hetwt66S2CA8', '<p>Artist: Alan Walker feat. Au/Ra &amp; Tomine Harket. Release Date: 27/07/2018. Genre: Dance. Tracks: 1. Quality: Mp3-320kbps.</p>', 2, NULL, '2018-08-03 02:29:47'),
(3, '3 Đi', '3-di', 'anh1.png', 1, 'https://www.nhaccuatui.com/lh/auto/4m0XhXF3F4z6', '<p>&quot;3 Đi (Đi Đi Đi )&quot; do ch&iacute;nh K-ICM s&aacute;ng t&aacute;c v&agrave; phối nhạc, c&ugrave;ng ICM TEAM l&agrave;m việc miệt m&agrave;i để kịp ra sản phẩm v&agrave;o đ&uacute;ng ng&agrave;y sinh nhật của K-ICM Nguyễn Bảo Kh&aacute;nh.</p>', 2, NULL, '2018-08-03 02:29:09'),
(4, 'La La La', 'la-la-la', 'Hòa-nhạc-và-Múa-đương-đại-Việt-Nam.jpg', 0, 'https://www.nhaccuatui.com/lh/auto/3UhHlQBj8T9P', '<p>Tropical Drinks</p>', 2, '2018-08-02 20:22:47', '2018-08-05 01:59:13'),
(5, 'Đẹp Nhất Là Em', 'dep-nhat-la-em', 'c7ab21a9bc76c0abacd06522aa6735d3.jpg', 1, 'https://www.nhaccuatui.com/lh/auto/5SC1HribCGqE', '<h1>Đẹp Nhất L&agrave; Em (Between Us) (Single)</h1>\r\n\r\n<h2><a href=\"https://www.nhaccuatui.com/nghe-si-soobin-hoang-son.html\" target=\"_blank\">Soobin Ho&agrave;ng Sơn</a>,&nbsp;<a href=\"https://www.nhaccuatui.com/nghe-si-ji-yeon-tara.html\" target=\"_blank\">Ji Yeon</a></h2>\r\n\r\n<p>Single &quot;Đẹp Nhất L&agrave; Em&quot; với hai phi&ecirc;n bản tiếng H&agrave;n v&agrave; tiếng Việt l&agrave; sự kết hợp độc đ&aacute;o giữa nam ca sĩ Soobin Ho&agrave;ng Sơn v&agrave; nữ ca sĩ Ji Yeon (T-ara). Với h&igrave;nh ảnh cặp đ&ocirc;i đời thường giản dị, b&igrave;nh y&ecirc;n, hứa hẹn đ&acirc;y sẽ l&agrave; một bản ballad ngọt ng&agrave;o, dễ thương. Mời c&aacute;c bạn c&ugrave;ng thưởng thức tại NhacCuaTui.Com.</p>', 2, '2018-08-05 02:00:59', '2018-08-05 02:00:59'),
(6, 'Có Một Nơi Như Thế (Single) - Phan Mạnh Quỳnh', 'co-mot-noi-nhu-the-single-phan-manh-quynh', '14.jpg', 1, 'https://www.nhaccuatui.com/lh/auto/mGAdu9kAVymo', '<p>C&oacute; Một Nơi Như Thế (Single) - Phan Mạnh Quỳnh</p>\r\n\r\n<p>Single &quot;C&oacute; Một Nơi Như Thế&quot; do Phan Mạnh Quỳnh s&aacute;ng t&aacute;c v&agrave; tr&igrave;nh b&agrave;y. Mời c&aacute;c bạn c&ugrave;ng thưởng thức tại NhacCuaTui.com</p>', 2, '2018-08-05 02:03:20', '2018-08-05 02:03:20'),
(7, 'Nhà Em Ở Lưng Đồi (Single) - Thùy Chi', 'nha-em-o-lung-doi-single-thuy-chi', '7ffdb4120cf4af61fdcc2a70348e580c.jpg', 1, 'https://www.nhaccuatui.com/lh/auto/KCckIlT7xYV9', '<p>Nh&agrave; Em Ở Lưng Đồi (Single) - Th&ugrave;y Chi</p>\r\n\r\n<p>Single &quot;Nh&agrave; Em Ở Lưng Đồi&quot; được ca sĩ Th&ugrave;y Chi tr&igrave;nh b&agrave;y. Mời c&aacute;c bạn c&ugrave;ng thưởng thức tại NhacCuaTui.Com.</p>', 2, '2018-08-05 02:04:37', '2018-08-05 02:04:37'),
(8, 'Buồn Không Em (Single) - Đạt G', 'buon-khong-em-single-dat-g', 'list-cac-phim-tinh-cam-han-trung-cuc-hot-se-ra-mat-nam-2018-4.jpg', 1, 'https://www.nhaccuatui.com/lh/auto/G8Exhsr0qITx', '<p>Buồn Kh&ocirc;ng Em (Single) - Đạt G</p>\r\n\r\n<p>Single &quot;Buồn Kh&ocirc;ng Em&quot; được ca sĩ Đạt G tr&igrave;nh b&agrave;y. Mời c&aacute;c bạn c&ugrave;ng thưởng thức tại NhacCuaTui.Com.</p>', 2, '2018-08-05 02:05:58', '2018-08-05 02:05:58');

-- --------------------------------------------------------

--
-- Table structure for table `vp_news`
--

CREATE TABLE `vp_news` (
  `news_id` int(10) UNSIGNED NOT NULL,
  `news_name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `news_slug` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `news_logo` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `news_status` tinyint(4) NOT NULL,
  `news_content` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `news_cate` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `vp_news`
--

INSERT INTO `vp_news` (`news_id`, `news_name`, `news_slug`, `news_logo`, `news_status`, `news_content`, `news_cate`, `created_at`, `updated_at`) VALUES
(1, 'Đá nặng hàng tấn rơi đè bẹp xe khách 16 chỗ trên Quốc lộ 12', 'da-nang-hang-tan-roi-de-bep-xe-khach-16-cho-tren-quoc-lo-12', '4.jpg', 1, '<p>Si&ecirc;u Cup Anh h&ocirc;m nay sẽ khởi đầu cho chặng đường mới của Chelsea với t&acirc;n HLV Maurizio Sarri - người lu&ocirc;n cho rằng b&oacute;</p>', 3, NULL, '2018-08-05 23:15:30'),
(2, 'Hatchback cỡ nhỏ Honda Brio 2018 ra mắt, đối thủ của Kia Morning', 'hatchback-co-nho-honda-brio-2018-ra-mat-doi-thu-cua-kia-morning', '3.jpg', 0, '<p>Sau 7 năm c&oacute; mặt tr&ecirc;n thị trường, thế hệ thứ 2 của mẫu hatchback gi&aacute; rẻ&nbsp;<strong>Honda Brio</strong>&nbsp;đ&atilde;&nbsp;ch&iacute;nh thức được giới thiệu tại thị trường Indonesia, Th&aacute;i Lan v&agrave; Ấn Độ. D&ograve;ng xe cỡ nhỏ n&agrave;y sẽ cạnh tranh trực tiếp với c&aacute;c đối thủ như&nbsp;<strong>Kia Morning, Hyundai i10, Toyota Wigo,&hellip;</strong></p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p><strong>Honda Brio</strong>&nbsp;mang đậm phong c&aacute;ch của một chiếc xe đ&ocirc; thị, phần đầu xe được thiết kế tương tự những mẫu xe của h&atilde;ng như:&nbsp;<strong>Honda Civic, Honda CR-V</strong>,&hellip;tuy nhi&ecirc;n thanh chrome nối liền hai cụm đ&egrave;n chiếu s&aacute;ng được l&agrave;m nhỏ gọn lại. Đ&egrave;n pha g&oacute;c cạnh v&agrave; sắc n&eacute;t thay thế cho kiểu mắt lồi (bug-eye) ở thế hệ trước. Cản trước gần như kh&ocirc;ng thay đổi, đ&egrave;n sương m&ugrave; dạng tr&ograve;n vẫn được đặt thấp ph&iacute;a dưới.</p>\r\n\r\n<p>Biến thể cao cấp nhất RS (MT v&agrave; CVT) được trang bị m&acirc;m xe thể thao 15 inch, hệ thống điều khiển &acirc;m thanh tr&ecirc;n tay l&aacute;i (steering audio controls), lưới tản nhiệt sơn m&agrave;u đen b&oacute;ng, cản sau chuy&ecirc;n dụng với bộ khuyếch t&aacute;n kh&iacute; động học v&agrave; c&aacute;nh gi&oacute; đu&ocirc;i, gương gập mở tự động. Phi&ecirc;n bản tầm trung Brio E sẽ c&oacute; m&acirc;m xe 14 inch, đ&egrave;n sương m&ugrave;, tuỳ chọn hộp số s&agrave;n hoặc hộp số v&ocirc; cấp CVT, xe được trang bị hệ thống chống b&oacute; phanh cứng ABS v&agrave; ph&acirc;n bố lực phanh điện tử EBD.</p>', 3, NULL, '2018-08-03 09:40:52'),
(3, 'Tỷ phú Phạm Nhật Vượng vừa “bỏ túi” gần 9.000 tỷ đồng', 'ty-phu-pham-nhat-vuong-vua-bo-tui-gan-9000-ty-dong', 'chieu-cao-nam-sinh-ten-that-ca-si-toc-tien-2-1468647766162-53-0-387-500-crop-1468647786538.jpg', 1, '<p>Sức tăng của thị trường ng&agrave;y h&ocirc;m nay chủ yếu đến từ một v&agrave;i cổ phiếu trụ vốn h&oacute;a lớn, đặc biệt l&agrave; hai đầu t&agrave;u VIC-GAS. Cổ phiếu nh&oacute;m&nbsp;<a href=\"https://www.24h.com.vn/ngan-hang-c587.html\">ng&acirc;n h&agrave;ng</a>&nbsp;h&ocirc;m nay tăng giảm đan xen, tuy nhi&ecirc;n nh&igrave;n chung vẫn b&ugrave; đắp nhau để giữ lực cho thị trường.</p>\r\n\r\n<p>Cụ thể, m&atilde; GAS của Tổng c&ocirc;ng ty kh&iacute; Việt Nam đ&atilde; tăng 2.600 đồng (2,9%) l&ecirc;n 93.600 đồng/cổ phiếu, khớp lệnh 786.540 đơn vị. C&aacute;c cổ phiếu kh&aacute;c trong nh&oacute;m dầu kh&iacute; cũng tăng rất kh&aacute; như PVD tăng s&aacute;t trần, PVS tăng 600 đồng, PLX tăng 900 đồng.</p>\r\n\r\n<p>Đ&aacute;ng ch&uacute; &yacute; nhất l&agrave; VIC của Tập đo&agrave;n Vingroup đ&atilde; tăng kh&aacute; tốt 4.800 đồng, kết phi&ecirc;n ở mức 111.500 đồng/cổ phiếu với 2,53 triệu đơn vị được khớp. Ng&agrave;y 7/8 tới đ&acirc;y, gần 554 triệu cổ phiếu VIC được ph&aacute;t h&agrave;nh để trả cổ tức cho cổ đ&ocirc;ng sẽ ch&iacute;nh thực được giao dịch, n&acirc;ng tổng số lượng cổ phiếu của Vingroup l&ecirc;n con số 3,191 tỷ cổ phiếu.&nbsp;</p>\r\n\r\n<p>Ngo&agrave;i ra, phi&ecirc;n n&agrave;y cũng chứng kiến đ&agrave; tăng t&iacute;ch cực tại BVH (tăng 2.000 đồng); VRE (tăng 1.450 đồng). Trong khi đ&oacute;, c&aacute;c m&atilde; h&atilde;m chỉ số l&agrave; VCB (giảm 500 đồng), VNM (giảm 3400 đồng), SAB (giảm 4.100 đồng).</p>', 3, NULL, '2018-08-03 09:37:41'),
(4, 'U23 Việt Nam - U23 Palestine: Ngược dòng hoàn hảo, dấu ấn 2 ngôi sao', 'u23-viet-nam-u23-palestine-nguoc-dong-hoan-hao-dau-an-2-ngoi-sao', '15349589_1332112353520245_8135459791283229177_n.jpg', 1, '<p>Si&ecirc;u Cup Anh h&ocirc;m nay sẽ khởi đầu cho chặng đường mới của Chelsea với t&acirc;n HLV Maurizio Sarri - người lu&ocirc;n cho rằng b&oacute;</p>', 3, '2018-08-03 09:31:26', '2018-08-05 23:15:45'),
(5, 'Chelsea - Man City: Tìm vui trong đại chiến', 'chelsea-man-city-tim-vui-trong-dai-chien', '15349589_1332112353520245_8135459791283229177_n.jpg', 1, '<p>Si&ecirc;u Cup Anh h&ocirc;m nay sẽ khởi đầu cho chặng đường mới của Chelsea với t&acirc;n HLV Maurizio Sarri - người lu&ocirc;n cho rằng b&oacute;ng đ&aacute; phải đẹp v&agrave; vui.</p>\r\n\r\n<p>Si&ecirc;u Cup Anh h&ocirc;m nay sẽ khởi đầu cho chặng đường mới của Chelsea với t&acirc;n HLV Maurizio Sarri - người lu&ocirc;n cho rằng b&oacute;ng đ&aacute; phải đẹp v&agrave; vui.</p>\r\n\r\n<p>Si&ecirc;u Cup Anh h&ocirc;m nay sẽ khởi đầu cho chặng đường mới của Chelsea với t&acirc;n HLV Maurizio Sarri - người lu&ocirc;n cho rằng b&oacute;ng đ&aacute; phải đẹp v&agrave; vui.</p>\r\n\r\n<p>Si&ecirc;u Cup Anh h&ocirc;m nay sẽ khởi đầu cho chặng đường mới của Chelsea với t&acirc;n HLV Maurizio Sarri - người lu&ocirc;n cho rằng b&oacute;ng đ&aacute; phải đẹp v&agrave; vui.</p>', 3, '2018-08-05 02:15:13', '2018-08-05 02:15:13'),
(6, 'Cuộc sống tạm bợ của người dân vùng sạt lở Hoà Bình', 'cuoc-song-tam-bo-cua-nguoi-dan-vung-sat-lo-hoa-binh', '3D desktop.png', 1, '<p>Nơi ở tạm th&igrave; kh&ocirc;ng c&oacute; kế sinh nhai, nơi ở mới chưa biết bao giờ mới c&oacute;, c&aacute;c hộ d&acirc;n trong v&ugrave;ng sạt lở ở Ho&agrave; B&igrave;nh đang rất kh&oacute; khăn.</p>\r\n\r\n<p>Diễn vi&ecirc;n 34 tuổi sống một m&igrave;nh trong ng&ocirc;i nh&agrave; hai tầng, được b&agrave;i tr&iacute; theo phong c&aacute;ch cổ điển ở TP HCM.</p>\r\n\r\n<ul>\r\n</ul>', 3, '2018-08-05 02:16:06', '2018-08-05 02:16:06'),
(7, 'Milan hạ Barca bằng bàn thắng phút bù giờ', 'milan-ha-barca-bang-ban-thang-phut-bu-gio', '1462791107-1462785819-5.jpg', 1, '<p>Người h&ugrave;ng của U23 Việt Nam nhiều khả năng sẽ được HLV Park Hang-seo sử dụng ở trận đấu thứ hai giải giao hữu U23 quốc tế tại Mỹ Đ&igrave;nh chiều 5/8.</p>\r\n\r\n<p>Pha l&agrave;m b&agrave;n muộn của Andre Silva gi&uacute;p đội b&oacute;ng Italy gi&agrave;nh chiến thắng 1-0 ở giải giao hữu ICC 2018.</p>', 3, '2018-08-05 02:16:56', '2018-08-05 02:16:56'),
(8, 'Chùa Một Cột giữa lòng Sài Gòn', 'chua-mot-cot-giua-long-sai-gon', 'ban-gai-xinh-nhu-hot-girl-cua-thanh-vo-nguoi-ta-hinh-2.jpg', 1, '<p>Qu&aacute;n ở quận 2 nu&ocirc;i h&agrave;ng chục con vẹt đủ chủng loại, c&oacute; con gi&aacute; trị l&ecirc;n tới 5.000 USD. Nam Thi&ecirc;n Nhất Trụ do h&ograve;a thượng Th&iacute;ch Tr&iacute; Dũng x&acirc;y dựng ở quận Thủ Đức, m&ocirc; phỏng theo kiến tr&uacute;c v&agrave; kiểu d&aacute;ng của ch&ugrave;a Một Cột ở H&agrave; Nội.</p>', 3, '2018-08-05 02:17:55', '2018-08-05 02:17:55');

-- --------------------------------------------------------

--
-- Table structure for table `vp_users`
--

CREATE TABLE `vp_users` (
  `user_id` int(10) UNSIGNED NOT NULL,
  `user_name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `vp_users`
--

INSERT INTO `vp_users` (`user_id`, `user_name`, `email`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'admin', 'admin@gmail.com', '$2y$10$KcKxGKfEO3xaeJV3WXWDmO1BgSDhAvKsDx/aBy6uV.6LtbFgENo2O', NULL, NULL, NULL),
(2, 'nguyentkhiem96', 'nguyentkhiem96@gmail.com', '$2y$10$8cPeoFKLtg8h781aFpalKe4Ax50Q5HPbrylgS1YHosGei2DZ/ybSK', NULL, NULL, NULL),
(3, 'nguyenvana', 'nguyenvana@gmail.com', '$2y$10$Fa0UX47KOIzpCdNS4.SNpuHmItsPcBI8JodjbIuHV7ZM5CBNPruI6', NULL, NULL, NULL);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- Indexes for table `user_client`
--
ALTER TABLE `user_client`
  ADD PRIMARY KEY (`client_id`);

--
-- Indexes for table `vp_banner`
--
ALTER TABLE `vp_banner`
  ADD PRIMARY KEY (`banner_id`);

--
-- Indexes for table `vp_categories`
--
ALTER TABLE `vp_categories`
  ADD PRIMARY KEY (`cate_id`);

--
-- Indexes for table `vp_images`
--
ALTER TABLE `vp_images`
  ADD PRIMARY KEY (`image_id`),
  ADD KEY `vp_images_image_cate_foreign` (`image_cate`);

--
-- Indexes for table `vp_movie`
--
ALTER TABLE `vp_movie`
  ADD PRIMARY KEY (`movie_id`),
  ADD KEY `vp_movie_movie_cate_foreign` (`movie_cate`);

--
-- Indexes for table `vp_music`
--
ALTER TABLE `vp_music`
  ADD PRIMARY KEY (`music_id`),
  ADD KEY `vp_music_music_cate_foreign` (`music_cate`);

--
-- Indexes for table `vp_news`
--
ALTER TABLE `vp_news`
  ADD PRIMARY KEY (`news_id`),
  ADD KEY `vp_news_news_cate_foreign` (`news_cate`),
  ADD KEY `news_name` (`news_name`);

--
-- Indexes for table `vp_users`
--
ALTER TABLE `vp_users`
  ADD PRIMARY KEY (`user_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `user_client`
--
ALTER TABLE `user_client`
  MODIFY `client_id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `vp_banner`
--
ALTER TABLE `vp_banner`
  MODIFY `banner_id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `vp_categories`
--
ALTER TABLE `vp_categories`
  MODIFY `cate_id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `vp_images`
--
ALTER TABLE `vp_images`
  MODIFY `image_id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `vp_movie`
--
ALTER TABLE `vp_movie`
  MODIFY `movie_id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `vp_music`
--
ALTER TABLE `vp_music`
  MODIFY `music_id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `vp_news`
--
ALTER TABLE `vp_news`
  MODIFY `news_id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `vp_users`
--
ALTER TABLE `vp_users`
  MODIFY `user_id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `vp_images`
--
ALTER TABLE `vp_images`
  ADD CONSTRAINT `vp_images_image_cate_foreign` FOREIGN KEY (`image_cate`) REFERENCES `vp_categories` (`cate_id`) ON DELETE CASCADE;

--
-- Constraints for table `vp_movie`
--
ALTER TABLE `vp_movie`
  ADD CONSTRAINT `vp_movie_movie_cate_foreign` FOREIGN KEY (`movie_cate`) REFERENCES `vp_categories` (`cate_id`) ON DELETE CASCADE;

--
-- Constraints for table `vp_music`
--
ALTER TABLE `vp_music`
  ADD CONSTRAINT `vp_music_music_cate_foreign` FOREIGN KEY (`music_cate`) REFERENCES `vp_categories` (`cate_id`) ON DELETE CASCADE;

--
-- Constraints for table `vp_news`
--
ALTER TABLE `vp_news`
  ADD CONSTRAINT `vp_news_news_cate_foreign` FOREIGN KEY (`news_cate`) REFERENCES `vp_categories` (`cate_id`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
