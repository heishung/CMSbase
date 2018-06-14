-- phpMyAdmin SQL Dump
-- version 4.8.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 14, 2018 at 09:12 AM
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
-- Database: `marketc`
--

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `id` int(10) UNSIGNED NOT NULL,
  `parent_id` int(11) NOT NULL DEFAULT '0',
  `code` varchar(11) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `name` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `desc` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `position` tinyint(4) NOT NULL DEFAULT '0',
  `tags` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` tinyint(4) NOT NULL DEFAULT '1',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`id`, `parent_id`, `code`, `name`, `slug`, `desc`, `position`, `tags`, `status`, `created_at`, `updated_at`) VALUES
(1, 0, NULL, 'Servises', 'tinh-dau', NULL, 0, NULL, 1, '2017-11-18 19:27:03', '2018-03-13 19:13:44'),
(2, 0, NULL, 'Technologies', 'tinh-dau-treo-xe', NULL, 0, NULL, 1, '2017-11-18 19:28:46', '2018-03-13 19:25:12'),
(3, 0, NULL, 'Process', 'den-xong-tinh-dau', NULL, 0, NULL, 1, '2017-11-20 18:50:41', '2018-03-13 19:26:26'),
(4, 0, NULL, 'About', 'about', NULL, 0, NULL, 1, '2018-03-13 19:26:45', '2018-03-13 19:26:45'),
(5, 0, NULL, 'Contact Us', 'contact-us', NULL, 0, NULL, 1, '2018-03-13 19:27:04', '2018-03-13 19:27:04'),
(6, 1, NULL, 'Web developmenton', 'web-developmenton', NULL, 0, NULL, 1, '2018-03-13 19:28:19', '2018-03-13 19:28:19'),
(7, 1, NULL, 'E - Commerce', 'e-commerce', NULL, 0, NULL, 1, '2018-03-13 19:28:34', '2018-03-13 19:28:34'),
(8, 1, NULL, 'Enterprise Solutions', 'enterprise-solutions', NULL, 0, NULL, 1, '2018-03-13 19:28:48', '2018-03-13 19:28:48'),
(9, 1, NULL, 'Game', 'game', NULL, 0, NULL, 1, '2018-03-13 19:31:38', '2018-03-13 19:31:38');

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2017_10_27_034524_create_products_table', 1),
(4, '2017_10_27_034818_create_product_packages_table', 1),
(5, '2017_10_27_034911_create_product_posts_table', 1),
(6, '2017_10_27_041439_create_product_settings_table', 1),
(7, '2017_10_28_025630_create_packages_table', 1),
(8, '2017_10_28_041555_modify_product_packages_table', 1),
(9, '2017_11_13_044036_create_table_categories', 1),
(10, '2017_11_15_074049_add_role_id_to_tb_user', 1),
(11, '2017_11_18_192412_add_thumbnail_to_table_posts', 1),
(12, '2018_02_02_023436_slide', 2),
(13, '2018_02_06_073335_cart', 3),
(14, '2018_02_07_035300_cart', 4),
(15, '2018_02_07_073942_cart', 5),
(17, '2018_03_02_045751_ud_cart', 6);

-- --------------------------------------------------------

--
-- Table structure for table `packages`
--

CREATE TABLE `packages` (
  `id` int(10) UNSIGNED NOT NULL,
  `code` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `volume` double NOT NULL,
  `unit` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `unit_text` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `packages`
--

INSERT INTO `packages` (`id`, `code`, `name`, `volume`, `unit`, `unit_text`, `created_at`, `updated_at`) VALUES
(1, '10ml', NULL, 10, 'ml', 'ml', '2017-11-18 19:27:18', '2017-11-18 19:27:18'),
(2, '30ml', NULL, 30, 'ml', 'ml', '2017-11-18 19:27:30', '2017-11-18 19:27:30'),
(3, '50ml', NULL, 50, 'ml', 'ml', '2017-11-18 19:27:35', '2017-11-18 19:27:35'),
(4, '100ml', NULL, 100, 'ml', 'ml', '2017-11-18 19:27:53', '2017-11-18 19:27:53');

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `posts`
--

CREATE TABLE `posts` (
  `id` int(10) UNSIGNED NOT NULL,
  `post_type` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'news',
  `title` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `thumbnail` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` text COLLATE utf8mb4_unicode_ci,
  `content` longtext COLLATE utf8mb4_unicode_ci,
  `status` tinyint(4) NOT NULL DEFAULT '1',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `posts`
--

INSERT INTO `posts` (`id`, `post_type`, `title`, `slug`, `thumbnail`, `description`, `content`, `status`, `created_at`, `updated_at`) VALUES
(1, 'about', 'About', 'about', '', NULL, '<p><strong>GIỚI THIỆU VỀ TINH DẦU THI&Ecirc;N NHI&Ecirc;N NGUY&Ecirc;N CHẤT NGUY&Ecirc;N HỒNG</strong></p>\r\n\r\n<p>T&ecirc;n c&ocirc;ng ty đầy đủ: c&ocirc;ng ty TNHH sản xuất thương mại tinh dầu Minh Hồng</p>\r\n\r\n<p>T&ecirc;n bằng tiếng nước ngo&agrave;i: MINH HONG ESSENTIAL OIL PRODUCETION TRADING&nbsp;COMPANY LIMITED</p>\r\n\r\n<p>T&ecirc;n c&ocirc;ng ty viết tắt: TINH DẦU MINH HỒNG</p>\r\n\r\n<p>Địa chỉ trụ sở ch&iacute;nh: Th&ocirc;n Lộc Phượng 1, x&atilde; Th&agrave;nh Vinh, huyện Thạch Th&agrave;nh, tỉnh Thanh H&oacute;a</p>\r\n\r\n<p>Văn ph&ograve;ng giao dịch: Số 24 ng&otilde; 698 Lạc Long Qu&acirc;n, T&acirc;y Hồ, H&agrave; Nội</p>\r\n\r\n<p>Website:&nbsp;<a href=\"http://tinhdaunguyenhong.com/\">http://tinhdaunguyenhong.com/</a></p>\r\n\r\n<p><strong>Lĩnh vực hoạt động</strong>: Sản xuất tinh dầu thi&ecirc;n nhi&ecirc;n: Tinh dầu mang thương hiệu <strong>Nguy&ecirc;n Hồng</strong> đều được sản xuất với nguy&ecirc;n liệu ho&agrave;n to&agrave;n tự nhi&ecirc;n v&agrave; nguy&ecirc;n chất bằng phương ph&aacute;p l&ocirc;i cuốn hơi nước. Nguy&ecirc;n Hồng mong muốn đem lại sản phẩm tự nhi&ecirc;n nhất, nguy&ecirc;n chất nhất v&agrave; thuần khiết nhất từ thi&ecirc;n nhi&ecirc;n đến với đời sống con người v&agrave; mang lại những lợi &iacute;ch thiết thực với sức khỏe người sử dụng từ c&aacute;c c&aacute;c loại tinh dầu tự nhi&ecirc;n.<img alt=\"\" src=\"http://tinhdaunguyenhong.com/userfiles/photos/1/15747449_1246638045422863_7546650943536072730_n.jpg\" style=\"height:960px; width:720px\" /></p>\r\n\r\n<p style=\"text-align: center;\">Ảnh: V&ugrave;ng nguy&ecirc;n liệu sả chanh</p>\r\n\r\n<p style=\"text-align: center;\"><img alt=\"\" src=\"http://tinhdaunguyenhong.com/userfiles/photos/1/18336950_1124528007657260_2101469243_n.jpg\" style=\"height:960px; width:584px\" /></p>\r\n\r\n<p style=\"text-align: center;\">Ảnh: Thu h&aacute;i nguy&ecirc;n liệu tươi</p>\r\n\r\n<p><img alt=\"\" src=\"http://tinhdaunguyenhong.com/userfiles/photos/1/18336797_1124528037657257_1113705739_n.jpg\" style=\"height:960px; width:584px\" /></p>\r\n\r\n<p style=\"text-align: center;\">Ảnh: Chưng cất tinh dầu</p>\r\n\r\n<p><strong>Slogan:</strong> TINH DẦU THẬT - GI&Aacute; TRỊ THẬT</p>', 1, '2017-11-20 18:41:01', '2017-11-20 19:00:40'),
(13, 'news', 'IRAN TUYÊN BỐ ĐÃ ĐUỔI MÁY BAY DO THÁM U2 CỦA MỸ', 'iran-tuyen-bo-da-duoi-may-bay-do-tham-u2-cua-my', '/userfiles/photos/1/IMG_4148.JPG', 'Chúng ta vẫn biết rằng, làm việc với một đoạn văn bản dễ đọc và rõ nghĩa dễ gây rối trí và cản trở việc tập trung vào yếu tố trình bày văn bản. Lorem Ipsum có ưu điểm hơn so với đoạn văn bản chỉ gồm nội dung kiểu “Nội dung, nội dung, nội', '<p>Ch&uacute;ng ta vẫn biết rằng, l&agrave;m việc với một đoạn văn bản dễ đọc v&agrave; r&otilde; nghĩa dễ g&acirc;y rối tr&iacute; v&agrave; cản trở việc tập trung v&agrave;o yếu tố tr&igrave;nh b&agrave;y văn bản. Lorem Ipsum c&oacute; ưu điểm hơn so với đoạn văn bản chỉ gồm nội dung kiểu &ldquo;Nội dung, nội dung, nội dung&rdquo; l&agrave; n&oacute; khiến văn bản giống thật hơn, b&igrave;nh thường hơn. Nhiều phần mềm thiết kế giao diện web v&agrave; d&agrave;n trang ng&agrave;y nay đ&atilde; sử dụng Lorem Ipsum l&agrave;m đoạn văn bản giả, v&agrave; nếu bạn thử t&igrave;m c&aacute;c đoạn &ldquo;Lorem ipsum&rdquo; tr&ecirc;n mạng th&igrave; sẽ kh&aacute;m ph&aacute; ra nhiều trang web hiện vẫn đang trong qu&aacute; tr&igrave;nh x&acirc;y dựng. C&oacute; nhiều phi&ecirc;n bản kh&aacute;c nhau đ&atilde; xuất hiện, đ&ocirc;i khi do v&ocirc; t&igrave;nh, nhiều khi do cố &yacute; (xen th&ecirc;m v&agrave;o những c&acirc;u h&agrave;i hước hay th&ocirc;ng tục).</p>\r\n\r\n<p>Ch&uacute;ng ta vẫn biết rằng, l&agrave;m việc với một đoạn văn bản dễ đọc v&agrave; r&otilde; nghĩa dễ g&acirc;y rối tr&iacute; v&agrave; cản trở việc tập trung v&agrave;o yếu tố tr&igrave;nh b&agrave;y văn bản. Lorem Ipsum c&oacute; ưu điểm hơn so với đoạn văn bản chỉ gồm nội dung kiểu &ldquo;Nội dung, nội dung, nội dung&rdquo; l&agrave; n&oacute; khiến văn bản giống thật hơn, b&igrave;nh thường hơn. Nhiều phần mềm thiết kế giao diện web v&agrave; d&agrave;n trang ng&agrave;y nay đ&atilde; sử dụng Lorem Ipsum l&agrave;m đoạn văn bản giả, v&agrave; nếu bạn thử t&igrave;m c&aacute;c đoạn &ldquo;Lorem ipsum&rdquo; tr&ecirc;n mạng th&igrave; sẽ kh&aacute;m ph&aacute; ra nhiều trang web hiện vẫn đang trong qu&aacute; tr&igrave;nh x&acirc;y dựng. C&oacute; nhiều phi&ecirc;n bản kh&aacute;c nhau đ&atilde; xuất hiện, đ&ocirc;i khi do v&ocirc; t&igrave;nh, nhiều khi do cố &yacute; (xen th&ecirc;m v&agrave;o những c&acirc;u h&agrave;i hước hay th&ocirc;ng tục).</p>\r\n\r\n<p>Ch&uacute;ng ta vẫn biết rằng, l&agrave;m việc với một đoạn văn bản dễ đọc v&agrave; r&otilde; nghĩa dễ g&acirc;y rối tr&iacute; v&agrave; cản trở việc tập trung v&agrave;o yếu tố tr&igrave;nh b&agrave;y văn bản. Lorem Ipsum c&oacute; ưu điểm hơn so với đoạn văn bản chỉ gồm nội dung kiểu &ldquo;Nội dung, nội dung, nội dung&rdquo; l&agrave; n&oacute; khiến văn bản giống thật hơn, b&igrave;nh thường hơn. Nhiều phần mềm thiết kế giao diện web v&agrave; d&agrave;n trang ng&agrave;y nay đ&atilde; sử dụng Lorem Ipsum l&agrave;m đoạn văn bản giả, v&agrave; nếu bạn thử t&igrave;m c&aacute;c đoạn &ldquo;Lorem ipsum&rdquo; tr&ecirc;n mạng th&igrave; sẽ kh&aacute;m ph&aacute; ra nhiều trang web hiện vẫn đang trong qu&aacute; tr&igrave;nh x&acirc;y dựng. C&oacute; nhiều phi&ecirc;n bản kh&aacute;c nhau đ&atilde; xuất hiện, đ&ocirc;i khi do v&ocirc; t&igrave;nh, nhiều khi do cố &yacute; (xen th&ecirc;m v&agrave;o những c&acirc;u h&agrave;i hước hay th&ocirc;ng tục).</p>', 1, '2018-03-02 00:20:25', '2018-03-02 00:20:25'),
(14, 'news', 'IRAN TUYÊN BỐ ĐÃ ĐUỔI MÁY BAY DO THÁM U2 CỦA MỸ', 'iran-tuyen-bo-da-duoi-may-bay-do-tham-u2-cua-my-1', '/userfiles/photos/1/bath-oil-2510793_1280.jpg', 'Chúng ta vẫn biết rằng, làm việc với một đoạn văn bản dễ đọc và rõ nghĩa dễ gây rối trí và cản trở việc tập trung vào yếu tố trình bày văn bản. Lorem Ipsum có ưu điểm hơn so với đoạn văn bản chỉ gồm nội dung kiểu “Nội dung, nội dung,', '<p>Ch&uacute;ng ta vẫn biết rằng, l&agrave;m việc với một đoạn văn bản dễ đọc v&agrave; r&otilde; nghĩa dễ g&acirc;y rối tr&iacute; v&agrave; cản trở việc tập trung v&agrave;o yếu tố tr&igrave;nh b&agrave;y văn bản. Lorem Ipsum c&oacute; ưu điểm hơn so với đoạn văn bản chỉ gồm nội dung kiểu &ldquo;Nội dung, nội dung, nội dung&rdquo; l&agrave; n&oacute; khiến văn bản giống thật hơn, b&igrave;nh thường hơn. Nhiều phần mềm thiết kế giao diện web v&agrave; d&agrave;n trang ng&agrave;y nay đ&atilde; sử dụng Lorem Ipsum l&agrave;m đoạn văn bản giả, v&agrave; nếu bạn thử t&igrave;m c&aacute;c đoạn &ldquo;Lorem ipsum&rdquo; tr&ecirc;n mạng th&igrave; sẽ kh&aacute;m ph&aacute; ra nhiều trang web hiện vẫn đang trong qu&aacute; tr&igrave;nh x&acirc;y dựng. C&oacute; nhiều phi&ecirc;n bản kh&aacute;c nhau đ&atilde; xuất hiện, đ&ocirc;i khi do v&ocirc; t&igrave;nh, nhiều khi do cố &yacute; (xen th&ecirc;m v&agrave;o những c&acirc;u h&agrave;i hước hay th&ocirc;ng tục).</p>\r\n\r\n<p>Ch&uacute;ng ta vẫn biết rằng, l&agrave;m việc với một đoạn văn bản dễ đọc v&agrave; r&otilde; nghĩa dễ g&acirc;y rối tr&iacute; v&agrave; cản trở việc tập trung v&agrave;o yếu tố tr&igrave;nh b&agrave;y văn bản. Lorem Ipsum c&oacute; ưu điểm hơn so với đoạn văn bản chỉ gồm nội dung kiểu &ldquo;Nội dung, nội dung, nội dung&rdquo; l&agrave; n&oacute; khiến văn bản giống thật hơn, b&igrave;nh thường hơn. Nhiều phần mềm thiết kế giao diện web v&agrave; d&agrave;n trang ng&agrave;y nay đ&atilde; sử dụng Lorem Ipsum l&agrave;m đoạn văn bản giả, v&agrave; nếu bạn thử t&igrave;m c&aacute;c đoạn &ldquo;Lorem ipsum&rdquo; tr&ecirc;n mạng th&igrave; sẽ kh&aacute;m ph&aacute; ra nhiều trang web hiện vẫn đang trong qu&aacute; tr&igrave;nh x&acirc;y dựng. C&oacute; nhiều phi&ecirc;n bản kh&aacute;c nhau đ&atilde; xuất hiện, đ&ocirc;i khi do v&ocirc; t&igrave;nh, nhiều khi do cố &yacute; (xen th&ecirc;m v&agrave;o những c&acirc;u h&agrave;i hước hay th&ocirc;ng tục).</p>\r\n\r\n<p>Ch&uacute;ng ta vẫn biết rằng, l&agrave;m việc với một đoạn văn bản dễ đọc v&agrave; r&otilde; nghĩa dễ g&acirc;y rối tr&iacute; v&agrave; cản trở việc tập trung v&agrave;o yếu tố tr&igrave;nh b&agrave;y văn bản. Lorem Ipsum c&oacute; ưu điểm hơn so với đoạn văn bản chỉ gồm nội dung kiểu &ldquo;Nội dung, nội dung, nội dung&rdquo; l&agrave; n&oacute; khiến văn bản giống thật hơn, b&igrave;nh thường hơn. Nhiều phần mềm thiết kế giao diện web v&agrave; d&agrave;n trang ng&agrave;y nay đ&atilde; sử dụng Lorem Ipsum l&agrave;m đoạn văn bản giả, v&agrave; nếu bạn thử t&igrave;m c&aacute;c đoạn &ldquo;Lorem ipsum&rdquo; tr&ecirc;n mạng th&igrave; sẽ kh&aacute;m ph&aacute; ra nhiều trang web hiện vẫn đang trong qu&aacute; tr&igrave;nh x&acirc;y dựng. C&oacute; nhiều phi&ecirc;n bản kh&aacute;c nhau đ&atilde; xuất hiện, đ&ocirc;i khi do v&ocirc; t&igrave;nh, nhiều khi do cố &yacute; (xen th&ecirc;m v&agrave;o những c&acirc;u h&agrave;i hước hay th&ocirc;ng tục).</p>', 1, '2018-03-02 00:21:13', '2018-03-02 00:21:13'),
(12, 'delivery', 'Chính sách giao hàng', 'chinh-sach-giao-hang', '', NULL, '<p>chinh s&aacute;ch giao h&agrave;ng</p>\r\n\r\n<p>1</p>\r\n\r\n<p>2</p>', 1, '2018-02-27 03:29:01', '2018-02-27 03:29:01'),
(15, 'news', 'IRAN TUYÊN BỐ ĐÃ ĐUỔI MÁY BAY DO THÁM U2 CỦA MỸ', 'iran-tuyen-bo-da-duoi-may-bay-do-tham-u2-cua-my-2', '/userfiles/photos/1/default-banner.png', 'asda', '<p>asdasd</p>', 1, '2018-03-02 00:43:04', '2018-03-02 00:43:04'),
(16, 'news', 'IRAN TUYÊN BỐ ĐÃ ĐUỔI MÁY BAY DO THÁM U2 CỦA MỸ', 'iran-tuyen-bo-da-duoi-may-bay-do-tham-u2-cua-my-3', '/userfiles/photos/1/default_share_image.jpg', 'asdas', '<p>dasda</p>', 1, '2018-03-02 00:43:38', '2018-03-02 00:43:38'),
(17, 'news', 'IRAN TUYÊN BỐ ĐÃ ĐUỔI MÁY BAY DO THÁM U2 CỦA MỸ', 'iran-tuyen-bo-da-duoi-may-bay-do-tham-u2-cua-my-4', '/userfiles/photos/1/lambs-lettuce-3114288_1280.jpg', 'asdas', '<p>dasda</p>', 1, '2018-03-02 00:44:03', '2018-03-02 00:44:03'),
(18, 'news', 'IRAN TUYÊN BỐ ĐÃ ĐUỔI MÁY BAY DO THÁM U2 CỦA MỸ', 'iran-tuyen-bo-da-duoi-may-bay-do-tham-u2-cua-my-5', '/filemanager/userfiles/photos/1/DSC03869.JPG', 'asd', '<p>asdasd</p>', 1, '2018-03-02 00:45:24', '2018-06-12 01:30:37');

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `id` int(10) UNSIGNED NOT NULL,
  `category_id` int(11) NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `index` int(11) NOT NULL DEFAULT '0',
  `short_description` text COLLATE utf8mb4_unicode_ci,
  `long_description` longtext COLLATE utf8mb4_unicode_ci,
  `images` text COLLATE utf8mb4_unicode_ci,
  `image_preview` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` tinyint(4) NOT NULL DEFAULT '1',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id`, `category_id`, `name`, `slug`, `index`, `short_description`, `long_description`, `images`, `image_preview`, `status`, `created_at`, `updated_at`) VALUES
(2, 1, 'Tinh dầu Quế', 'tinh-dau-que', 0, 'Tên tiếng anh: Cinnamon Essential Oil\r\nThành phần chiết xuất: 100% nguyên chất từ Quế\r\nPhương pháp chiết xuất: Chưng cất hơi nước', '<p><strong><em><u>1. Chữa cảm c&uacute;m v&agrave; cảm lạnh</u></em></strong><em>:&nbsp;</em>Nhỏ v&agrave;i giọt tinh dầu quế v&agrave;o b&aacute;t nước n&oacute;ng, rồi &aacute;p s&aacute;t mặt v&agrave;o miệng b&aacute;t (c&aacute;ch khoảng 5cm), sau đ&oacute; h&iacute;t hơi nước n&oacute;ng bốc l&ecirc;n từ nước từ 10 đến 15 ph&uacute;t. L&agrave;m thường xuy&ecirc;n sẽ rất c&oacute; lợi cho sức khỏe, chữa khỏi cảm c&uacute;m rất nhanh. V&agrave;o m&ugrave;a đ&ocirc;ng ch&acirc;n tay thường hay bị lạnh, nhất l&agrave; những người vốn cơ thể thường hay bị lạnh gi&aacute; th&igrave; v&agrave;o mỗi buổi tối trước khi đi ngủ hoặc buổi s&aacute;ng b&ocirc;i 1 ch&uacute;t &nbsp;tinh dầu quế đ&atilde; được pha lo&atilde;ng c&ugrave;ng ch&uacute;t nước ấm hoặc dầu nền v&agrave;o người, ch&acirc;n, tay , ... th&igrave; cơ thể cả ng&agrave;y h&ocirc;m đấy sẽ ấm l&ecirc;n rất nhiều!</p>\r\n\r\n<p><strong><em><u>2. Trị đau nhức xương khớp</u></em></strong><em>:&nbsp;</em>Những người bị bệnh về xương khớp, nhất l&agrave; người gi&agrave; thường xuy&ecirc;n bị đau lưng hoặc nhức mỏi khớp gối, khớp b&agrave;n ch&acirc;n&hellip;. Thường xuy&ecirc;n b&ocirc;i tinh dầu quế đ&atilde; được pha lo&atilde;ng với nước ấm&nbsp;hoặc dầu nền (dầu dừa, dầu oliu&hellip;) v&agrave;o những v&ugrave;ng đau nhức, hiệu quả sẽ v&ocirc; c&ugrave;ng bất ngờ. N&ecirc;n d&ugrave;ng v&agrave;o m&ugrave;a đ&ocirc;ng l&agrave; tốt nhất, v&igrave; b&ocirc;i v&agrave;o m&ugrave;a h&egrave; sẽ bị n&oacute;ng.</p>\r\n\r\n<p><strong><em><u>3. Chữa c&aacute;c bệnh về đường ti&ecirc;u h&oacute;a</u></em></strong><em>: c</em>hữa đầy bụng, ợ hơi bằng c&aacute;ch b&ocirc;i tinh dầu quế đ&atilde; được pha lo&atilde;ng với nước ấm&nbsp;hoặc dầu nền(dầu dừa, dầu oliu&hellip;) v&agrave;o bụng rồi xoa nhẹ nh&agrave;ng theo chiều kim đồng hồ khoảng 5-10 ph&uacute;t sẽ hết đầy bụng&nbsp;</p>\r\n\r\n<p style=\"margin-left:-3.0pt\"><strong><em><u>4. D&ugrave;ng để tắm, giảm stress</u></em></strong><em>:</em>&nbsp;Nhỏ v&agrave;i giọt tinh dầu quế v&agrave;o bồn nước n&oacute;ng, ng&acirc;m m&igrave;nh trong đ&oacute;, cơ thể được thải độc v&agrave; v&ocirc; c&ugrave;ng sảng kho&aacute;i, ấm &aacute;p, dễ chịu.</p>\r\n\r\n<p style=\"margin-left:-3.0pt\"><strong><em><u>5. Chữa ho v&agrave; lạnh bụng cho trẻ em v&agrave;o m&ugrave;a đ&ocirc;ng</u></em></strong><em>:&nbsp;</em>Sau khi tắm cho b&eacute;, thoa 1 ch&uacute;t tinh dầu quế đ&atilde; được pha lo&atilde;ng với nước ấm hoặc dầu nền quanh rốn để tr&aacute;nh bị lạnh (N&ecirc;n b&ocirc;i thử trước ra mu b&agrave;n tay của b&eacute; để xem c&oacute; bị dị ứng kh&ocirc;ng, nếu cảm thấy n&oacute;ng th&igrave; n&ecirc;n pha th&ecirc;m nước hoặc dầu nền v&igrave; da trẻ em thường nhạy cảm hơn da người lớn, n&ecirc;n tỉ lệ pha giữa tinh dầu quế: nước hoặc dầu nền cần phải tăng l&ecirc;n). Khi trẻ bị ho, thoa một ch&uacute;t tinh dầu quế đ&atilde; pha lo&atilde;ng v&agrave;o v&ugrave;ng cổ để dứt hẳn cơn ho hoặc d&ugrave;ng đ&egrave;n x&ocirc;ng tinh dầu quế rất tốt để trị c&aacute;c cơn ho.</p>\r\n\r\n<p><strong><em><u>6. Trị chứng mất ngủ</u></em></strong><em>:&nbsp;</em>Nhỏ 1-2 giọt&nbsp;<a href=\"http://tinhdaukhanhlinh.vn/san-pham/Tinh-dau-que-73.html\">tinh dầu quế</a>&nbsp;v&agrave;o khăn tay, để cạnh đầu giường hoặc gối để c&oacute; giấc ngủ s&acirc;u.</p>\r\n\r\n<p><strong><em><u>7. Chống say t&agrave;u xe</u></em></strong><em>:&nbsp;</em>Trước khi l&ecirc;n t&agrave;u xe, thấm ch&uacute;t dầu quế v&agrave;o khăn tay rồi h&iacute;t nhẹ. M&ugrave;i dầu quế gi&uacute;p đầu &oacute;c thư gi&atilde;n, kh&ocirc;ng l&agrave;m bạn bị cho&aacute;ng bởi m&ugrave;i xăng xe.</p>\r\n\r\n<p><strong><em><u>8. Khử m&ugrave;i ph&ograve;ng</u></em></strong><em>:</em>&nbsp;D&ugrave;ng với&nbsp;<a href=\"http://tinhdaukhanhlinh.vn/san-pham/%C4%90en-Xong-Va-%C4%90ot-Tinh-dau-59\">đ&egrave;n x&ocirc;ng tinh dầu</a>&nbsp;hoặc&nbsp;<a href=\"http://tinhdaukhanhlinh.vn/san-pham/May-khuech-tan-tinh-dau-69\">m&aacute;y khuếch t&aacute;n tinh dầu</a>. Ngo&agrave;i khử m&ugrave;i h&ocirc;i trong ph&ograve;ng tinh dầu quế cũng khử m&ugrave;i thuốc l&aacute; trong ph&ograve;ng karaoke rất tốt. Hoặc c&oacute; thể lấy 1 miếng b&ocirc;ng, nhỏ tinh dầu quế v&agrave;o rồi để ở 1 g&oacute;c trong ph&ograve;ng (Lưu &yacute; để tr&aacute;nh xa tầm tay của trẻ em), đảm bảo hết sạch m&ugrave;i ẩm mốc ....Tinh dầu quế khử m&ugrave;i trong &ocirc; t&ocirc; cũng rất tốt.</p>\r\n\r\n<p><strong><em><u>9. Chữa đau đầu, nhức mỏi vai g&aacute;y</u></em></strong><em>:&nbsp;</em>Khi bị đau đầu, thoa ch&uacute;t dầu quế đ&atilde; được pha lo&atilde;ng với&nbsp;<a href=\"http://tinhdaukhanhlinh.vn/san-pham/dau-Nen-Huu-Co-Nguyen-Chat-58\">dầu nền</a>&nbsp;hoặc nước ấm v&agrave;o v&ugrave;ng g&aacute;y v&agrave; xoa b&oacute;p nhẹ nh&agrave;ng.</p>\r\n\r\n<p><strong><em><u>10. D&ugrave;ng xịt ph&ograve;ng hoặc xịt s&agrave;n xe hơi</u></em></strong><strong><em>:</em></strong>&nbsp;Pha khoảng <strong>30 giọt tinh dầu Quế v&agrave;o khoảng 100ml nước cất</strong>, nếu kh&ocirc;ng c&oacute; nước cất bạn c&oacute; thể d&ugrave;ng nước tinh khiết hoặc nước đun s&ocirc;i để nguội, lắc đều v&agrave; xịt khắp ph&ograve;ng hoặc s&agrave;n xe &ocirc; t&ocirc;. Hoặc pha <strong>30 giọt tinh dầu quế với 30ml rượu vodka, hoặc cồn nhẹ, cồn b&aacute;n ở hiệu thuốc v&agrave; 70ml nước cất</strong>, nước tinh khiết hoặc nước đun s&ocirc;i để nguội. Lắc đều hỗn hợp v&agrave; d&ugrave;ng dần. Nếu d&ugrave;ng cồn nhẹ hoặc rượu vodka bạn c&oacute; thể để dung dịch được khoảng 1 năm, Tuy nhi&ecirc;n n&ecirc;n d&ugrave;ng nước cất hoặc nước tinh khiết sẽ giữ được đ&uacute;ng m&ugrave;i tinh dầu v&agrave; tốt nhất cho sức khỏe</p>\r\n\r\n<p><strong><em><u>11. D&ugrave;ng l&agrave;m thơm quần &aacute;o</u></em></strong>: Thấm 2-3 giọt&nbsp;<a href=\"http://tinhdaukhanhlinh.vn/san-pham/Tinh-dau-que-73.html\">tinh dầu quế</a>&nbsp;v&agrave;o b&ocirc;ng g&ograve;n, hoặc sử dụng lọ treo để v&agrave;o tủ quần &aacute;o hoặc cho v&agrave;i giọt tinh dầu v&agrave;o lần xả nước cuối c&ugrave;ng khi giặt sẽ gi&uacute;p quần &aacute;o kh&ocirc;ng bị h&ocirc;i m&agrave; c&ograve;n phảng phất m&ugrave;i hương dầu quế, rất thơm.</p>\r\n\r\n<p><strong><em><u>12. D&ugrave;ng để lau nh&agrave;</u></em></strong>: Cho v&agrave;i giọt tinh dầu quế&nbsp;v&agrave;o nước lau nh&agrave; cuối c&ugrave;ng v&agrave; lau lại s&agrave;n nh&agrave;.</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p><strong>LƯU &Yacute;:</strong></p>\r\n\r\n<p>- Bảo quản&nbsp;<a href=\"http://tinhdaukhanhlinh.vn/\">tinh dầu</a>&nbsp;ở nơi tho&aacute;ng m&aacute;t v&agrave; tr&aacute;nh &aacute;nh s&aacute;ng trực tiếp, trong lọ thủy tinh k&iacute;n, tối m&agrave;u</p>\r\n\r\n<p>- Ngừng sử dụng khi ph&aacute;t hiện m&ugrave;i, m&agrave;u sắc lạ hoặc khi c&oacute; dị ứng xảy ra</p>\r\n\r\n<p>- Kh&ocirc;ng để tinh dầu rớt v&agrave;o mắt v&agrave; v&ugrave;ng nhạy cảm</p>\r\n\r\n<p>- Kh&ocirc;ng b&ocirc;i tinh dầu v&agrave;o vết thương hở</p>\r\n\r\n<p>- Để xa tầm tay trẻ em</p>\r\n\r\n<p>- Tinh dầu Quế rất n&oacute;ng, kh&ocirc;ng d&ugrave;ng cho phụ nữ c&oacute; thai.</p>\r\n\r\n<p>- Tinh dầu Quế c&oacute; t&iacute;nh n&oacute;ng n&ecirc;n nếu d&ugrave;ng trực tiếp sẽ g&acirc;y bỏng r&aacute;t. V&igrave; vậy, cần pha lo&atilde;ng tinh dầu trước khi sử dụng.</p>', '[\"\\/userfiles\\/photos\\/1\\/essential-oil-3139479_1280.jpg\",\"\\/userfiles\\/photos\\/1\\/essential-oils-3084952_1280.jpg\",\"\\/userfiles\\/photos\\/1\\/lambs-lettuce-3114288_1280.jpg\",\"\\/userfiles\\/photos\\/1\\/tdxc.jpg\"]', '/userfiles/photos/1/que2.jpg', 1, '2017-11-18 20:04:26', '2018-03-01 20:25:18'),
(8, 1, 'Xà Bông than hoạt tính', 'xa-bong-than-hoat-tinh', 0, 'Xà Bông than hoạt tính và tinh dầu Bạc Hà giúp làm sạch da, tẩy tế bào chết và giữ ẩm cho da hiệu quả.', '<p>Th&agrave;nh phần: Than Hoạt T&iacute;nh, tinh dầu Bạc H&agrave;, S&aacute;p Ong, Dầu Dừa.</p>\r\n\r\n<p>C&ocirc;ng dụng: Tẩy tế b&agrave;o chết, l&agrave;m sạch da v&agrave; dưỡng ẩm cho da.</p>\r\n\r\n<p>C&aacute;c d&ugrave;ng: Tắm, rửa tay, rửa mặt.</p>\r\n\r\n<p>Sản phẩm được d&ugrave;ng cho cả người lớn v&agrave; trẻ nhỏ, cực kỳ an to&agrave;n, kh&ocirc;ng g&acirc;y k&iacute;ch ứng da.</p>\r\n\r\n<p>Sản phẩm được sản xuất bởi c&ocirc;ng ty TNHH sản xuất thương mại tinh dầu Minh Hồng</p>\r\n\r\n<p>HSD: 6 th&aacute;ng kể từ ng&agrave;y sản xuất</p>\r\n\r\n<p>Gi&aacute; lẻ: 120.000đ/ chiếc</p>\r\n\r\n<p>Gi&aacute; sỉ: li&ecirc;n hệ 0988912579</p>\r\n\r\n<p>&nbsp;</p>', '[\"\\/userfiles\\/photos\\/1\\/IMG_4148.JPG\",\"\\/userfiles\\/photos\\/1\\/IMG_4153.JPG\",\"\\/userfiles\\/photos\\/1\\/IMG_4160.JPG\",\"\\/userfiles\\/photos\\/1\\/bath-oil-2510793_1280.jpg\"]', '/userfiles/photos/1/IMG_4153.JPG', 1, '2018-01-11 18:58:01', '2018-02-27 01:28:21'),
(9, 1, 'Xà Bông Sả Chanh', 'xa-bong-sa-chanh', 0, 'Sả Bông Sả Chanh là sự kết hợp tinh tế giữa tinh dầu Sả Chanh, dầu dừa, sáp ong, tinh bột nghệ giúp làm sạch da, giữ cho da luôn căng tràn sức sống.', '<p>Th&agrave;nh phần:&nbsp;&nbsp;Sả Chanh, dầu dừa, s&aacute;p ong, tinh bột nghệ</p>\r\n\r\n<p>C&ocirc;ng dụng: L&agrave;m sạch da, giữ ẩm, căng mịn da v&agrave; giữ cho cơ thể c&oacute; m&ugrave;i hương thơm tự nhi&ecirc;n từ tinh dầu Sả Chanh. Tốt cho c&aacute;c chứng dị ứng mẩn ngứa, hiệu quả cho việc giải độc v&agrave; chống vi&ecirc;m da g&acirc;y ra bởi c&aacute;c t&aacute;c động từ &ocirc;i nhiễm m&ocirc;i trường.</p>\r\n\r\n<p>&nbsp;</p>', NULL, '/userfiles/photos/1/IMG_4160.JPG', 1, '2018-01-11 19:06:43', '2018-01-11 19:06:43'),
(3, 1, 'Tinh dầu Tràm Gió', 'tinh-dau-tram-gio', 0, 'Tên tiếng anh: Cajeput essential oil\r\nThành phần chiết xuất: 100% từ tinh dầu tràm gió nguyên chất\r\nPhương pháp chiết xuất: bằng phương pháp lôi cuốn hơi nước.\r\nCó màu vàng rất nhạt, có hương thơm sâu, khi ngửi có cảm giác thông lên tận mũi đó là tràm chuẩn chất lượng.', '<h2><span style=\"font-size:14px\"><strong>Nguồn gốc tinh dầu tr&agrave;m gi&oacute; nguy&ecirc;n chất:</strong></span></h2>\r\n\r\n<p><span style=\"font-size:14px\"><strong>Nguồn gốc:</strong>&nbsp;Tinh dầu tr&agrave;m&nbsp;được chiết xuất từ ​​c&agrave;nh v&agrave; l&aacute; của c&acirc;y tr&agrave;m gi&oacute; bằng phương ph&aacute;p&nbsp;l&ocirc;i cuốn hơi nước.</span></p>\r\n\r\n<p><span style=\"font-size:14px\"><strong>Xuất xứ:</strong>&nbsp;Việt Nam</span></p>\r\n\r\n<h3><span style=\"font-size:14px\"><strong>Th&agrave;nh phần ch&iacute;nh của tinh dầu tr&agrave;m:</strong></span></h3>\r\n\r\n<p><span style=\"font-size:14px\">Th&agrave;nh phần ch&iacute;nh của&nbsp;<strong>tinh dầu tr&agrave;m gi&oacute; nguy&ecirc;n chất</strong>&nbsp;ti&ecirc;u chuẩn xuất khẩu&nbsp;l&agrave; Eucalyptol chiếm 42-52% v&agrave; &alpha;-Terpineol chiếm 5-12%</span></p>\r\n\r\n<p><span style=\"font-size:14px\">C&oacute; m&agrave;u v&agrave;ng rất nhạt, c&oacute; hương thơm s&acirc;u, khi ngửi c&oacute; cảm gi&aacute;c th&ocirc;ng l&ecirc;n tận mũi đ&oacute; l&agrave; tr&agrave;m chuẩn chất lượng.</span></p>\r\n\r\n<h2><span style=\"font-size:14px\"><strong>C&ocirc;ng dụng v&agrave; c&aacute;ch d&ugrave;ng tinh dầu tr&agrave;m</strong></span></h2>\r\n\r\n<p><span style=\"font-size:14px\"><strong>1. Ph&ograve;ng chống cảm lạnh, tr&aacute;nh gi&oacute; v&agrave; tr&aacute;nh ho</strong></span></p>\r\n\r\n<p><span style=\"font-size:14px\">Cho khoảng 5 giọt dầu tr&agrave;m v&agrave;o nước tắm của b&eacute;. Nhớ rửa mặt ri&ecirc;ng để tr&aacute;nh dầu v&agrave;o mắt b&eacute;. B&eacute; tắm nước c&oacute; tinh dầu tr&agrave;m sẽ giữ được cơ thể ấm &aacute;p, chống cảm, chống ho đồng thời chống cả muỗi.</span></p>\r\n\r\n<p><span style=\"font-size:14px\">Khi b&eacute; bị ho h&atilde;y d&ugrave;ng dầu tr&agrave;m xoa l&ecirc;n tay sau đ&oacute; d&ugrave;ng tay xoa l&ecirc;n lưng, ngực v&agrave; cổ của b&eacute; sẽ gi&uacute;p c&aacute;c nh&oacute;c đỡ ho, nếu b&eacute; ngạt mũi đừng xoa dầu tr&agrave;m trực tiếp l&ecirc;n mũi h&atilde;y qu&agrave;ng cho b&eacute; một chiếc khăn để giữ ấm cổ v&agrave; xức dầu tr&agrave;m l&ecirc;n khăn. Điều n&agrave;y cũng c&oacute; thể sử dụng để tr&aacute;nh gi&oacute; cho b&eacute; trước khi đi ra ngo&agrave;i.</span></p>\r\n\r\n<p><span style=\"font-size:14px\">Khi b&eacute; bị ho nhiều về nửa đ&ecirc;m v&agrave; s&aacute;ng bạn c&oacute; thể sử dụng dầu tr&agrave;m để massage l&ograve;ng b&agrave;n ch&acirc;n v&agrave; day nhẹ v&agrave;o huyệt Dũng tuyền (chỗ l&otilde;m ở giữa 1/3 l&ograve;ng b&agrave;n ch&acirc;n về ph&iacute;a ng&oacute;n) trong v&ograve;ng 2-3 ph&uacute;t, sau đ&oacute; đi tất mỏng v&agrave;o để giữ ấm ch&acirc;n. C&aacute;ch n&agrave;y cũng hiệu quả đối với người lớn.</span></p>\r\n\r\n<p><span style=\"font-size:14px\"><strong>2. Kh&aacute;ng khuẩn tốt</strong></span></p>\r\n\r\n<p><span style=\"font-size:14px\">Một trong những đặc t&iacute;nh ưu việt của dầu tr&agrave;m l&agrave; t&iacute;nh kh&aacute;ng khuẩn. Cho v&agrave;i giọt dầu tr&agrave;m trong ch&eacute;n nước n&oacute;ng, hoặc thấm dầu tr&agrave;m trong miếng b&ocirc;ng g&ograve;n để ở c&aacute;c g&oacute;c nh&agrave; sẽ gi&uacute;p bầu kh&ocirc;ng kh&iacute; trong sạch hơn, chưa kể hương tr&agrave;m thoang thoảng cũng tạo cảm gi&aacute;c dễ chịu. Dầu tr&agrave;m c&ograve;n c&oacute; t&aacute;c dụng ức chế virus, n&ecirc;n d&ugrave;ng dầu tr&agrave;m l&agrave; một c&aacute;ch hiệu quả đề ph&ograve;ng c&uacute;m.</span></p>\r\n\r\n<p><span style=\"font-size:14px\"><strong>3. Chống v&agrave; trị muỗi đốt</strong></span></p>\r\n\r\n<p><span style=\"font-size:14px\">Thoa tinh dầu tr&agrave;m v&agrave;o gấu quần, &aacute;o b&eacute; để xua đuổi muỗi. Nếu b&eacute; bị muỗi đốt th&igrave; thoa tinh dầu tr&agrave;m v&agrave;o vết muỗi đốt sẽ giảm sưng v&agrave; ngứa rất nhanh.</span></p>\r\n\r\n<p><span style=\"font-size:14px\"><strong>4. L&agrave;m giảm triệu chứng ngạt mũi ở trẻ nhỏ</strong></span></p>\r\n\r\n<p><span style=\"font-size:14px\">Tinh dầu tr&agrave;m kh&ocirc;ng c&oacute; t&iacute;nh n&oacute;ng, kh&ocirc;ng c&oacute; t&aacute;c dụng phụ. B&eacute; bị nghẹt mũi c&oacute; thể sử dụng lọ tinh dầu tr&agrave;m dạng lăn bi hoặc b&ocirc;i v&agrave;o đầu ng&oacute;n tay người lớn rồi đưa qua lại trước mũi b&eacute;, b&eacute; sẽ cảm thấy dễ chịu hơn v&agrave; đỡ nghẹt mũi hơn nhiều.</span></p>\r\n\r\n<p><span style=\"font-size:14px\">5. <strong>Chữa đầy hơi, đau bụng do kh&oacute; ti&ecirc;u h&oacute;a:</strong></span></p>\r\n\r\n<p><span style=\"font-size:14px\">Khi trẻ c&oacute; triệu chứng đầy hơi ở bụng do kh&oacute; ti&ecirc;u h&oacute;a, bố mẹ c&oacute; thể nhỏ 2-3 giọt dầu tr&agrave;m ra tay v&agrave; thoa đều l&ecirc;n bụng, việc n&agrave;y sẽ gi&uacute;p l&agrave;m n&oacute;ng bụng tống hơi ra ngo&agrave;i gi&uacute;p b&eacute; dễ chịu hơn.</span></p>\r\n\r\n<p><span style=\"font-size:14px\"><strong>LƯU &Yacute;:</strong></span></p>\r\n\r\n<p><span style=\"font-size:14px\">- Bảo quản&nbsp;<a href=\"http://tinhdaukhanhlinh.vn/\">tinh dầu</a>&nbsp;ở nơi tho&aacute;ng m&aacute;t v&agrave; tr&aacute;nh &aacute;nh s&aacute;ng trực tiếp, trong lọ thủy tinh k&iacute;n, tối m&agrave;u</span></p>\r\n\r\n<p><span style=\"font-size:14px\">- Ngừng sử dụng khi ph&aacute;t hiện m&ugrave;i, m&agrave;u sắc lạ hoặc khi c&oacute; dị ứng xảy ra</span></p>\r\n\r\n<p><span style=\"font-size:14px\">- Kh&ocirc;ng để tinh dầu vương v&agrave;o mắt v&agrave; v&ugrave;ng nhạy cảm</span></p>\r\n\r\n<p><span style=\"font-size:14px\">- Để xa tầm tay trẻ em</span></p>\r\n\r\n<p><span style=\"font-size:14px\">- Thận trọng khi d&ugrave;ng cho phụ nữ c&oacute; thai</span></p>', NULL, '/userfiles/photos/1/tram4.jpg', 1, '2017-11-18 20:32:10', '2017-11-23 00:53:17'),
(14, 3, 'Tinh dầu chống côn trùng Lam Hà', 'tinh-dau-chong-con-trung-lam-ha', 0, 'mo tả ngắn', '<p>m&ocirc; tả đầy đủ</p>', '[\"\\/userfiles\\/photos\\/1\\/IMG_4153.JPG\",\"\\/userfiles\\/photos\\/1\\/IMG_4148.JPG\",\"\\/userfiles\\/photos\\/1\\/buoi.jpg\",\"\\/userfiles\\/photos\\/1\\/que.jpg\"]', '/userfiles/photos/1/lambs-lettuce-3114288_1280.jpg', 1, '2018-03-01 21:02:53', '2018-03-01 21:15:00'),
(5, 1, 'Tinh Dầu gỗ Ngọc Am', 'tinh-dau-go-ngoc-am', 0, 'Tên tiếng Anh: Cupressus funebris Essential oils\r\n- Xuất xứ: Hoàng su phì , Hà giang.\r\n- Phương pháp chiết xuất: Chưng cất hơi nước.\r\n- Thành phần chiết xuất: Mảnh vụn rễ cây Hoàng Đàn rủ.\r\n- Mùi hương: mùi hương gỗ nồng ấm.', '<p><strong>T&aacute;c dụng của tinh dầu gỗ ngọc am:</strong></p>\r\n\r\n<p>+ Gi&uacute;p giảm căng thẳng, k&iacute;ch th&iacute;ch nhẹ nh&agrave;ng gi&uacute;p sảng kho&aacute;i, tạo cảm gi&aacute;c b&igrave;nh y&ecirc;n.</p>\r\n\r\n<p>+ Chống nhiễm khuẩn, tăng lực, lợi tiểu, khử tr&ugrave;ng, l&agrave;m thuốc an thần v&agrave; thuốc diệt nấm.&nbsp;</p>\r\n\r\n<p>+ Được d&ugrave;ng để chăm s&oacute;c da chống g&agrave;u, chống nhăn v&agrave; giảm mỡ dưới da.&nbsp;</p>\r\n\r\n<p>Ngo&agrave;i ra m&ugrave;i hương gi&uacute;p xua đuổi c&ocirc;n tr&ugrave;ng.</p>\r\n\r\n<p><strong>Ch&uacute; &yacute; khi sử dụng tinh dầu</strong></p>\r\n\r\n<p>+ Đọc kỹ hướng dẫn trước khi sử dụng</p>\r\n\r\n<p>+ Kh&ocirc;ng ăn, uống hay để tinh dầu rớt v&agrave;o mắt v&agrave; v&ugrave;ng nhạy cảm</p>\r\n\r\n<p>+ C&oacute; thể&nbsp;b&ocirc;i tinh dầu v&agrave;o vết thương hở</p>\r\n\r\n<p>+ Phụ nữ mang thai, trẻ nhỏ dưới 3 tuổi, người bệnh kinh ni&ecirc;n d&ugrave;ng c&oacute; sự chỉ định của b&aacute;c sĩ.</p>\r\n\r\n<p>+ Bảo quản nơi kh&ocirc; r&aacute;o, tr&aacute;nh &aacute;nh nắng trực tiếp</p>\r\n\r\n<p>+ Đựng k&iacute;n trong lọ k&iacute;n, để xa tầm tay trẻ em</p>\r\n\r\n<p>+ Kh&ocirc;ng sử dụng tinh dầu điều trị bệnh thay thế cho chăm s&oacute;c y tế cần thiết.</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>+ N&ecirc;n pha lo&atilde;ng tinh dầu nguy&ecirc;n chất với dầu thực vật trước khi d&ugrave;ng.&nbsp;</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>+ Kh&ocirc;ng tiếp tục sử dụng tinh dầu nếu ph&aacute;t hiện c&oacute; m&ugrave;i, m&agrave;u sắc lạ hoặc khi bị dị ứng xảy ra</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>- Bạn c&oacute; thể nhỏ v&agrave;o bồn tắm v&agrave;i giọt tinh dầu c&uacute;c l&atilde; m&atilde; l&agrave;m giảm stress v&agrave; mang đến cho bạn một giấc ngủ s&acirc;u, tạo sự y&ecirc;n b&igrave;nh v&agrave; thoải m&aacute;i cho giấc ngủ.</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>- D&ugrave;ng cho c&aacute;c loại&nbsp;Đ&egrave;n x&ocirc;ng&nbsp;tinh dầu&nbsp;</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>+ Đối với Đ&egrave;n tinh dầu miệng to (chứa nhiều nước):</p>\r\n\r\n<p>Cho nước khoảng 600C v&agrave;o 3/4 miệng chứa của đ&egrave;n ,nhỏ khoảng 4-5 giọt tinh dầu &nbsp;Đốt nến tealight đặt v&agrave;o trong l&ograve;, hoặc cắm điện, bật đ&egrave;n khi sử dụng&nbsp;đ&egrave;n tinh dầu điện thời gian hương thơm&nbsp;bắt đầu lan toả khoảng 5 ph&uacute;t sau khi đốt.</p>\r\n\r\n<p>+ Đối với Đ&egrave;n tinh dầu miệng nhỏ (chứa &iacute;t nước):</p>\r\n\r\n<p>Cho nước khoảng 400C v&agrave;o đầy miệng chứa của l&ograve; nhỏ khoảng 2-3 giọt tinh dầu. Đốt nến tealight đặt v&agrave;o trong l&ograve;, hoặc cắm điện, bật đ&egrave;n khi sử dụng đ&egrave;n tinh dầu điện sau 5 ph&uacute;t&nbsp;nước bốc hơi&nbsp;hương thơm&nbsp;bắt đầu lan toả khắp căn ph&ograve;ng của bạn.</p>\r\n\r\n<p>- Để gi&uacute;p tinh dầu của bạn tỏa hương nhanh hơn bạn c&oacute; thể tăng hết cỡ chiết &aacute;p của đ&egrave;n điện.</p>', NULL, '/userfiles/photos/1/ngocam.jpg', 1, '2017-11-18 20:37:15', '2017-11-18 20:37:15');

-- --------------------------------------------------------

--
-- Table structure for table `product_packages`
--

CREATE TABLE `product_packages` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(16) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `volume` double NOT NULL,
  `volume_unit` varchar(8) COLLATE utf8mb4_unicode_ci NOT NULL,
  `volume_unit_text` varchar(8) COLLATE utf8mb4_unicode_ci NOT NULL,
  `product_id` int(10) UNSIGNED NOT NULL,
  `index` int(11) NOT NULL DEFAULT '0',
  `price` double NOT NULL DEFAULT '0',
  `price_unit` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `description` text COLLATE utf8mb4_unicode_ci,
  `status` tinyint(4) NOT NULL DEFAULT '1',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `product_packages`
--

INSERT INTO `product_packages` (`id`, `name`, `volume`, `volume_unit`, `volume_unit_text`, `product_id`, `index`, `price`, `price_unit`, `description`, `status`, `created_at`, `updated_at`) VALUES
(1, NULL, 10, 'ml', 'ml', 1, 0, 75000, 'vnd', NULL, 1, '2017-11-18 19:58:58', '2017-11-18 19:58:58'),
(28, NULL, 100, 'ml', 'ml', 1, 0, 500000, 'vnd', NULL, 1, '2018-01-29 23:41:37', '2018-01-29 23:41:37'),
(27, NULL, 50, 'ml', 'ml', 1, 0, 260000, 'vnd', NULL, 1, '2018-01-29 23:41:03', '2018-01-29 23:41:03'),
(26, NULL, 30, 'ml', 'ml', 1, 0, 180000, 'vnd', NULL, 1, '2018-01-29 23:40:10', '2018-01-29 23:40:10'),
(5, NULL, 10, 'ml', 'ml', 2, 0, 75000, 'vnd', NULL, 1, '2017-11-18 20:25:46', '2017-11-18 20:25:46'),
(31, NULL, 30, 'ml', 'ml', 2, 0, 180000, 'vnd', NULL, 1, '2018-01-29 23:43:12', '2018-01-29 23:43:12'),
(30, NULL, 50, 'ml', 'ml', 2, 0, 260000, 'vnd', NULL, 1, '2018-01-29 23:43:00', '2018-01-29 23:43:00'),
(9, NULL, 10, 'ml', 'ml', 3, 0, 80000, 'vnd', NULL, 1, '2017-11-18 20:37:51', '2017-11-18 20:37:51'),
(35, NULL, 100, 'ml', 'ml', 3, 0, 520000, 'vnd', NULL, 1, '2018-01-29 23:45:02', '2018-01-29 23:45:02'),
(34, NULL, 50, 'ml', 'ml', 3, 0, 280000, 'vnd', NULL, 1, '2018-01-29 23:44:40', '2018-01-29 23:44:40'),
(33, NULL, 30, 'ml', 'ml', 3, 0, 200000, 'vnd', NULL, 1, '2018-01-29 23:44:21', '2018-01-29 23:44:21'),
(40, NULL, 100, 'ml', 'ml', 4, 0, 850000, 'vnd', NULL, 1, '2018-01-29 23:47:28', '2018-01-29 23:47:28'),
(39, NULL, 50, 'ml', 'ml', 4, 0, 500000, 'vnd', NULL, 1, '2018-01-29 23:47:00', '2018-01-29 23:47:00'),
(38, NULL, 30, 'ml', 'ml', 4, 0, 300000, 'vnd', NULL, 1, '2018-01-29 23:46:35', '2018-01-29 23:46:35'),
(37, NULL, 10, 'ml', 'ml', 4, 0, 125000, 'vnd', NULL, 1, '2018-01-29 23:45:58', '2018-01-29 23:45:58'),
(44, NULL, 100, 'ml', 'ml', 5, 0, 840000, 'vnd', NULL, 1, '2018-01-29 23:49:31', '2018-01-29 23:49:31'),
(43, NULL, 50, 'ml', 'ml', 5, 0, 480000, 'vnd', NULL, 1, '2018-01-29 23:49:12', '2018-01-29 23:49:12'),
(42, NULL, 30, 'ml', 'ml', 5, 0, 300000, 'vnd', NULL, 1, '2018-01-29 23:48:38', '2018-01-29 23:48:38'),
(41, NULL, 10, 'ml', 'ml', 5, 0, 120000, 'vnd', NULL, 1, '2018-01-29 23:47:57', '2018-01-29 23:47:57'),
(21, NULL, 10, 'ml', 'ml', 6, 0, 150000, 'vnd', NULL, 1, '2017-11-20 01:19:46', '2017-11-20 01:19:46'),
(22, NULL, 10, 'ml', 'ml', 7, 0, 150000, 'vnd', NULL, 1, '2017-11-20 17:07:33', '2017-11-20 17:07:33'),
(23, NULL, 100, 'ml', 'ml', 8, 0, 120000, 'vnd', NULL, 1, '2018-01-11 19:00:14', '2018-01-11 19:00:14'),
(24, NULL, 100, 'ml', 'ml', 9, 0, 120000, 'vnd', NULL, 1, '2018-01-11 19:09:56', '2018-01-11 19:09:56'),
(25, NULL, 100, 'ml', 'ml', 10, 0, 120000, 'vnd', NULL, 1, '2018-01-11 19:10:20', '2018-01-11 19:10:20'),
(32, NULL, 100, 'ml', 'ml', 2, 0, 500000, 'vnd', NULL, 1, '2018-01-29 23:43:30', '2018-01-29 23:43:30'),
(45, NULL, 10, 'ml', 'ml', 14, 0, 150000, 'vnd', NULL, 1, '2018-03-01 21:04:32', '2018-03-01 21:04:32');

-- --------------------------------------------------------

--
-- Table structure for table `settings`
--

CREATE TABLE `settings` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `key` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `value` text COLLATE utf8mb4_unicode_ci,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `settings`
--

INSERT INTO `settings` (`id`, `name`, `key`, `value`, `created_at`, `updated_at`) VALUES
(1, NULL, 'footer', '{\"footer_content\":\"<h1><span style=\\\"font-size:24px\\\">Tinh D\\u1ea7u Thi&ecirc;n Nhi&ecirc;n Nguy&ecirc;n H\\u1ed3ng<\\/span><\\/h1>\\r\\n\\r\\n<p><strong>CSSX<\\/strong>: Th&agrave;nh Vinh, Th\\u1ea1ch Th&agrave;nh, Thanh H&oacute;a<\\/p>\\r\\n\\r\\n<p><strong>VPGD<\\/strong>: S\\u1ed1 24 ng&otilde; 698, L\\u1ea1c Long Qu&acirc;n, T&acirc;y H\\u1ed3, H&agrave; N\\u1ed9i<\\/p>\\r\\n\\r\\n<p>097 479 4979 - MS H\\u1ed3ng<\\/p>\\r\\n\\r\\n<p>098 891 2579 - Mr Minh<\\/p>\\r\\n\\r\\n<p>Khu V\\u1ef1c T&acirc;y Nguy&ecirc;n:&nbsp;Ms B&ugrave;i Th\\u01a1m: 01655755099<\\/p>\\r\\n\\r\\n<p>Khu v\\u1ef1c Ph&iacute;a Nam: Mr Th\\u1ef1c: 01649006315<\\/p>\\r\\n\\r\\n<p>&nbsp;<\\/p>\",\"key\":\"footer\"}', '2017-11-18 13:22:59', '2017-11-20 00:37:59'),
(2, NULL, 'contactInfo', '{\"branch_name\":\"SOFT ENTERTAIMENT DEV\",\"contact_name\":\"C\\u00f4ng ty c\\u1ed5 ph\\u1ea7n DevSoft\",\"contact_address\":\"T\\u1ea7ng 11 t\\u00f2a nh\\u00e0 SunSquare 21 \\u0110\\u01b0\\u1eddng L\\u00ea \\u0110\\u1ee9c Th\\u1ecd, T\\u1eeb Li\\u00eam, H\\u00e0 N\\u1ed9i, Vi\\u1ec7t Nam\",\"contact_phone\":\"097 479 4979\",\"contact_email\":\"support@marketc.net\",\"contact_hotline\":null,\"contact_fanpage\":null,\"key\":\"contactInfo\"}', '2017-11-18 22:13:49', '2018-06-12 20:41:12'),
(3, NULL, 'images', '{\"logo\":\"\\/filemanager\\/userfiles\\/photos\\/1\\/logo.png\",\"favicon\":\"\\/filemanager\\/userfiles\\/photos\\/1\\/logo.png\",\"key\":\"images\"}', '2017-11-19 14:21:08', '2018-06-12 02:51:32'),
(4, NULL, 'bankInfo', '{\"bank_name\":\"VCB\",\"bank_account_number\":\"0611001914591\",\"bank_account_name\":\"nghi\\u00eam Th\\u1ebf H\\u01b0ng\",\"bank_account_branch\":\"H\\u00e0 N\\u1ed9i\",\"key\":\"bankInfo\"}', '2017-11-20 00:20:58', '2018-06-11 21:40:24'),
(5, NULL, 'socialInfo', '{\"facebook\":\"https:\\/\\/www.facebook.com\\/tinhdauthiennhiennguyenhong\\/\",\"google\":null,\"youtube\":null,\"twitter\":null,\"linkedin\":null,\"key\":\"socialInfo\"}', '2017-11-20 00:22:41', '2017-11-20 00:22:41'),
(6, NULL, 'banners', '{\"banner_title\":\"Tinh d\\u1ea7u th\\u1eadt - Gi\\u00e1 tr\\u1ecb th\\u1eadt\",\"banner_image\":\"\\/filemanager\\/userfiles\\/photos\\/1\\/DSC03869.JPG\",\"key\":\"banners\"}', '2017-11-20 19:33:09', '2018-06-11 03:10:11'),
(7, NULL, 'script', '{\"header\":null,\"body\":null,\"key\":\"script\"}', '2017-11-23 02:04:18', '2018-06-11 03:11:22'),
(17, NULL, 'slide', '{\"images1\":\"\\/userfiles\\/photos\\/1\\/bath-oil-2510793_1280.jpg\",\"images2\":\"\\/userfiles\\/photos\\/1\\/lambs-lettuce-3114288_1280.jpg\",\"images3\":\"\\/userfiles\\/photos\\/1\\/essential-oil-3139479_1280.jpg\",\"key\":\"slide\"}', '2018-02-22 03:46:16', '2018-02-22 20:30:52'),
(18, NULL, 'meta_data', '{\"meta_title\":\"MarketC\",\"meta_keywords\":\"metakey words\",\"meta_desc\":\"meta description\",\"meta_img\":\"\\/filemanager\\/userfiles\\/photos\\/1\\/logo.png\",\"key\":\"meta_data\"}', '2018-05-18 01:23:41', '2018-06-12 03:33:29');

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
  `updated_at` timestamp NULL DEFAULT NULL,
  `role_id` varchar(16) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'subscriber',
  `email_verified` tinyint(4) DEFAULT '0'
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `password`, `remember_token`, `created_at`, `updated_at`, `role_id`, `email_verified`) VALUES
(1, 'Super Admin', 'admin@gmail.com', '$2y$10$9loJg.YNERyeJBhy6BkMPe9zX3SIbsdywozC.G9q7oRDeX3wmtSLK', 'Ewfp6Lvq0W8SuM7M9RcVg8g7qKuNt2ITAAUm2BFSTv7hpUpuIRgMVokRE6z7', '2017-11-18 13:06:15', '2017-11-18 13:06:15', 'admin', 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `categories_name_unique` (`name`),
  ADD UNIQUE KEY `categories_slug_unique` (`slug`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `packages`
--
ALTER TABLE `packages`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `packages_code_unique` (`code`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indexes for table `posts`
--
ALTER TABLE `posts`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `posts_slug_unique` (`slug`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `products_name_unique` (`name`),
  ADD UNIQUE KEY `products_slug_unique` (`slug`);

--
-- Indexes for table `product_packages`
--
ALTER TABLE `product_packages`
  ADD PRIMARY KEY (`id`),
  ADD KEY `product_packages_product_id_foreign` (`product_id`);

--
-- Indexes for table `settings`
--
ALTER TABLE `settings`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `settings_key_unique` (`key`);

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
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `packages`
--
ALTER TABLE `packages`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `posts`
--
ALTER TABLE `posts`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `product_packages`
--
ALTER TABLE `product_packages`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=46;

--
-- AUTO_INCREMENT for table `settings`
--
ALTER TABLE `settings`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
