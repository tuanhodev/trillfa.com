-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1:3306
-- Thời gian đã tạo: Th12 14, 2023 lúc 01:45 PM
-- Phiên bản máy phục vụ: 10.5.19-MariaDB-cll-lve
-- Phiên bản PHP: 7.2.34

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Cơ sở dữ liệu: `u567263846_trillfa`
--

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `attachmentable`
--

CREATE TABLE `attachmentable` (
  `id` int(10) UNSIGNED NOT NULL,
  `attachmentable_type` varchar(255) NOT NULL,
  `attachmentable_id` int(10) UNSIGNED NOT NULL,
  `attachment_id` int(10) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `attachments`
--

CREATE TABLE `attachments` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` text NOT NULL,
  `original_name` text NOT NULL,
  `mime` varchar(255) NOT NULL,
  `extension` varchar(255) DEFAULT NULL,
  `size` bigint(20) NOT NULL DEFAULT 0,
  `sort` int(11) NOT NULL DEFAULT 0,
  `path` text NOT NULL,
  `description` text DEFAULT NULL,
  `alt` text DEFAULT NULL,
  `hash` text DEFAULT NULL,
  `disk` varchar(255) NOT NULL DEFAULT 'public',
  `user_id` bigint(20) UNSIGNED DEFAULT NULL,
  `group` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `attachments`
--

INSERT INTO `attachments` (`id`, `name`, `original_name`, `mime`, `extension`, `size`, `sort`, `path`, `description`, `alt`, `hash`, `disk`, `user_id`, `group`, `created_at`, `updated_at`) VALUES
(1, '15bdcb90fcda201e743743e2143bb29da4cf6462', 'banners-3.jpg', 'image/jpeg', 'jpg', 525907, 0, '2023/12/02/', NULL, NULL, '774bf297eebc0ff2e31f36fc6cb6e93f4ad2a21e', 'public', 1, 'banners', '2023-12-02 23:52:51', '2023-12-02 23:52:51'),
(2, '15bdcb90fcda201e743743e2143bb29da4cf6462', 'banners-3.jpg', 'image/jpeg', 'jpg', 525907, 0, '2023/12/02/', NULL, NULL, '774bf297eebc0ff2e31f36fc6cb6e93f4ad2a21e', 'public', 1, 'banners', '2023-12-02 23:53:26', '2023-12-02 23:53:26'),
(3, 'd828a93eac2280862eb6bee96932563b3aadaa19', '_bb37f472-9d8f-4ddd-ab1f-e95dcb82f675.jpeg', 'image/jpeg', 'jpeg', 224424, 0, '2023/12/02/', NULL, NULL, '464ad34a742a1decc2b6a0db2ab71da411e98d07', 'public', 1, 'banners', '2023-12-02 23:54:21', '2023-12-02 23:54:21'),
(4, 'd4cb5ef23a063a7ef3160d47f1664bd586afe84b', '_d255ad09-e592-4019-a558-22d466f23907.jpeg', 'image/jpeg', 'jpeg', 225981, 0, '2023/12/02/', NULL, NULL, '3174aec8046ddaf911088fd8a1f019dda28c83ec', 'public', 1, 'banners', '2023-12-02 23:54:36', '2023-12-02 23:54:36'),
(5, 'b9e27b86e1ec22223134d4af49cd55946f1044f4', '_34937842-96b6-4332-90ba-36a06c5068d3.jpeg', 'image/jpeg', 'jpeg', 195583, 0, '2023/12/02/', NULL, NULL, '3643e53159db59e290960f3781a5558ebe00c2e8', 'public', 1, 'banners', '2023-12-02 23:54:59', '2023-12-02 23:54:59'),
(6, '6e872a9769a91d6063b9ba77e7f7b2a3ca96bd62', 'featured-1.png', 'image/png', 'png', 29303, 0, '2023/12/02/', NULL, NULL, 'f9e5769c4fd171ee2e4ce861843b7f03c66188a2', 'public', 1, 'banners', '2023-12-02 23:55:46', '2023-12-02 23:55:46'),
(7, '02ab1d70a58bed390134154d32ad09fb505d6980', 'featured-2.png', 'image/png', 'png', 27283, 0, '2023/12/02/', NULL, NULL, 'd66365af914487492bf55d8fdbba40724c5c6189', 'public', 1, 'banners', '2023-12-02 23:56:02', '2023-12-02 23:56:02'),
(8, '2cc50d6143a7e7038662d2b35c221fe1b9828567', 'featured-3.png', 'image/png', 'png', 39599, 0, '2023/12/02/', NULL, NULL, '194c67387b6041b0d60329f529c32b0fc7962e07', 'public', 1, 'banners', '2023-12-02 23:56:18', '2023-12-02 23:56:18'),
(9, '9d186f9f91dc8679d7109a1bc77f55c52463f2be', '_4198c65a-06e2-4c69-bc83-dcd20a3742ce.jpeg', 'image/jpeg', 'jpeg', 207832, 0, '2023/12/02/', NULL, NULL, '986fc15685dcd3fecf17d778b1306cca57d25faf', 'public', 1, 'banners', '2023-12-02 23:56:56', '2023-12-02 23:56:56'),
(10, 'b9e27b86e1ec22223134d4af49cd55946f1044f4', '_34937842-96b6-4332-90ba-36a06c5068d3.jpeg', 'image/jpeg', 'jpeg', 195583, 0, '2023/12/02/', NULL, NULL, '3643e53159db59e290960f3781a5558ebe00c2e8', 'public', 1, 'posts', '2023-12-03 01:10:12', '2023-12-03 01:10:12'),
(11, '3c5e063eaf76afeacd1d9bb7141e84c5cf199825', 'trill-studio-retro-fashion-01.jpg', 'image/jpeg', 'jpg', 459587, 0, '2023/12/04/', NULL, NULL, 'a215f4372327467a0321b1232a1fd381a54c26e0', 'public', 1, 'posts', '2023-12-04 13:50:50', '2023-12-04 13:50:50'),
(12, 'd6755497101a8767d35c82607be4b4e77b92ea58', 'trill-studio-cong-so-65.jpeg', 'image/jpeg', 'jpeg', 158902, 0, '2023/12/07/', NULL, NULL, '93a09fe14265ac11dee2b851ec08c30473befedf', 'public', 1, 'posts', '2023-12-07 11:13:57', '2023-12-07 11:13:57'),
(13, '2014bba0268665af5894be7b35475642e50e5167', 'trill-studio-cong-so-71.jpeg', 'image/jpeg', 'jpeg', 166498, 0, '2023/12/07/', NULL, NULL, '0b92e53cafad522f637c4ba7b611a34ad11a6ba5', 'public', 1, 'posts', '2023-12-07 17:53:39', '2023-12-07 17:53:39'),
(14, '66bfc7d18a23ab3d7b5cdf4bf7af483f29974cd7', 'trill-studio-cong-so-70.jpeg', 'image/jpeg', 'jpeg', 119984, 0, '2023/12/07/', NULL, NULL, '40275f5a94fea87bd4ccea6acdf7c7c2dbf5a92f', 'public', 1, 'posts', '2023-12-07 17:54:21', '2023-12-07 17:54:21'),
(15, 'f286f146288857ad8a05464676c982722ff0b448', 'trill-studio-mix-truyen-thong-hien-dai-14.jpeg', 'image/jpeg', 'jpeg', 152580, 0, '2023/12/07/', NULL, NULL, '0d47985066831b04b5d1ba384b07dbdf1e379133', 'public', 1, 'posts', '2023-12-07 18:47:23', '2023-12-07 18:47:23'),
(16, '35bd312107adbf389ff9f121f094b62290136cb2', 'trill-studio-cong-so-retro- 94.jpeg', 'image/jpeg', 'jpeg', 161916, 0, '2023/12/07/', NULL, NULL, '42e4f76c2d41c9e1beaf6ae28f7b91d10e084616', 'public', 1, 'posts', '2023-12-07 18:48:27', '2023-12-07 18:48:27'),
(17, '0c591f88872ac48860cc79f9c6762480cc17ff49', 'trill-studio-do-da-tiec-5.jpeg', 'image/jpeg', 'jpeg', 132064, 0, '2023/12/07/', NULL, NULL, 'f331a1fa9249d1648996a8acfbd3a809810a74ad', 'public', 1, 'posts', '2023-12-07 21:52:47', '2023-12-07 21:52:47'),
(18, '1f1562fe5e35cab2325f5b2b2904864b28d674fb', 'trill-studio-do-da-tiec-16.jpeg', 'image/jpeg', 'jpeg', 183174, 0, '2023/12/08/', NULL, NULL, '044d44c5f058f4e73112322215ec859ea53d3cf0', 'public', 1, 'banners', '2023-12-08 09:41:42', '2023-12-08 09:41:42'),
(19, '2560ed828cc684fa52b05b89678779322a254cbe', 'trill-studio-do-da-tiec-8.jpeg', 'image/jpeg', 'jpeg', 116315, 0, '2023/12/08/', NULL, NULL, '662dc7d8c2d3b92121a71c90116cf5a4e9b0e1bd', 'public', 1, 'banners', '2023-12-08 09:43:11', '2023-12-08 09:43:11'),
(20, 'a5af975d47c7f3bd9ffbd17300cc7484631743ea', 'trill-studio-dam-but-chi-somi-lua-24.jpg', 'image/jpeg', 'jpg', 374172, 0, '2023/12/08/', NULL, NULL, '488edeb5090e3ef90fde165688fa001dddaaf37d', 'public', 1, 'posts', '2023-12-08 18:26:52', '2023-12-08 18:26:52'),
(21, '02431233391e5c305106d8232a09e9e139593904', '_1f59702d-0307-4254-9f53-6b36b47a6145.jpeg', 'image/jpeg', 'jpeg', 162337, 0, '2023/12/09/', NULL, NULL, '8afe175cb2822bb15a279701f6a32bd6b8e27c62', 'public', 1, 'posts', '2023-12-09 22:04:06', '2023-12-09 22:04:06');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `comments`
--

CREATE TABLE `comments` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `content` text DEFAULT NULL,
  `visible` tinyint(1) NOT NULL DEFAULT 1,
  `publiched_at` datetime DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `comments`
--

INSERT INTO `comments` (`id`, `user_id`, `content`, `visible`, `publiched_at`, `created_at`, `updated_at`) VALUES
(1, 1, 'test comment', 1, NULL, '2023-10-17 04:18:27', '2023-10-17 06:52:38'),
(2, 1, 'test comment 2', 1, NULL, '2023-10-17 06:59:23', '2023-10-17 07:02:00');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `comment_post`
--

CREATE TABLE `comment_post` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `comment_id` bigint(20) NOT NULL,
  `post_id` bigint(20) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `uuid` varchar(255) NOT NULL,
  `connection` text NOT NULL,
  `queue` text NOT NULL,
  `payload` longtext NOT NULL,
  `exception` longtext NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `menus`
--

CREATE TABLE `menus` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `parent_id` bigint(20) UNSIGNED DEFAULT NULL,
  `name` varchar(255) NOT NULL,
  `slug` varchar(255) DEFAULT NULL,
  `route` varchar(255) NOT NULL,
  `color` varchar(255) DEFAULT NULL,
  `icon` varchar(255) NOT NULL DEFAULT 'collection',
  `ordering` float(8,1) NOT NULL DEFAULT 0.0,
  `menu_group` varchar(120) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `menus`
--

INSERT INTO `menus` (`id`, `parent_id`, `name`, `slug`, `route`, `color`, `icon`, `ordering`, `menu_group`, `created_at`, `updated_at`) VALUES
(1, NULL, 'Menu Bên Trái', 'menu-left-side', 'home', 'primary', 'menu', 0.0, 'menu-left-side', NULL, NULL),
(2, 1, 'Trang chính', 'trang-chinh', 'home', '', 'house', 0.1, 'menu-left-side', '2023-10-18 17:07:53', '2023-10-29 01:47:45'),
(3, 1, 'Chuyên mục', 'chuyen-muc', 'blog.topic', '', 'collection', 0.2, 'menu-left-side', '2023-10-18 17:09:22', '2023-10-18 17:11:27'),
(4, 1, 'Blog', 'blog', 'blog.index', '', 'newspaper', 0.3, 'menu-left-side', '2023-10-18 17:13:29', '2023-10-18 17:26:06'),
(5, 1, 'Giới thiệu', 'gioi-thieu', 'about', '', 'person-vcard', 0.4, 'menu-left-side', '2023-10-18 17:15:20', '2023-10-18 17:15:20'),
(100, NULL, 'Bộ sưu tập', 'bo-suu-tap', 'blog.collection', NULL, 'collection', 100.0, NULL, '2023-10-29 01:37:55', '2023-10-29 01:42:26');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_reset_tokens_table', 1),
(3, '2019_08_19_000000_create_failed_jobs_table', 1),
(4, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(5, '2015_04_12_000000_create_orchid_users_table', 2),
(6, '2015_10_19_214424_create_orchid_roles_table', 2),
(7, '2015_10_19_214425_create_orchid_role_users_table', 2),
(8, '2016_08_07_125128_create_orchid_attachmentstable_table', 2),
(9, '2017_09_17_125801_create_notifications_table', 2),
(10, '2023_09_29_120759_create_topics_table', 3),
(11, '2023_09_29_120820_create_tags_table', 3),
(12, '2023_09_29_120832_create_posts_table', 3),
(13, '2023_09_29_120904_create_post_tags_table', 3),
(14, '2023_09_29_143200_create_post_topics_table', 3),
(15, '2023_10_12_120840_create_pages_table', 4),
(18, '2023_10_14_162814_add_type_to_tags_table', 6),
(20, '2023_10_16_081754_add_seo_to_posts_table', 7),
(21, '2023_10_17_025913_create_settings_table', 8),
(24, '2023_10_17_063515_create_comments_table', 9),
(25, '2023_10_17_104818_create_comment_post_table', 10),
(26, '2023_10_17_143054_add_view_count_to_posts_table', 11),
(27, '2023_10_18_233817_create_menus_table', 12),
(28, '2023_10_19_085638_create_truyenthongs_table', 13),
(29, '2023_10_19_094142_change_column_type', 14),
(31, '2023_11_09_182419_add_anchor_link_to_posts_table', 15),
(32, '2023_11_21_174456_add_topic_type_column_to_topics_table', 16);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `notifications`
--

CREATE TABLE `notifications` (
  `id` char(36) NOT NULL,
  `type` varchar(255) NOT NULL,
  `notifiable_type` varchar(255) NOT NULL,
  `notifiable_id` bigint(20) UNSIGNED NOT NULL,
  `data` text NOT NULL,
  `read_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `pagse`
--

CREATE TABLE `pagse` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(255) NOT NULL,
  `slug` varchar(255) NOT NULL,
  `description` text DEFAULT NULL,
  `content` longtext DEFAULT NULL,
  `thumbnail` varchar(255) DEFAULT NULL,
  `status` tinyint(4) NOT NULL DEFAULT 0 COMMENT '0 = visible, 1 = hidden',
  `published_at` datetime DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `password_reset_tokens`
--

CREATE TABLE `password_reset_tokens` (
  `email` varchar(255) NOT NULL,
  `token` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `personal_access_tokens`
--

CREATE TABLE `personal_access_tokens` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `tokenable_type` varchar(255) NOT NULL,
  `tokenable_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `token` varchar(64) NOT NULL,
  `abilities` text DEFAULT NULL,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `expires_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `posts`
--

CREATE TABLE `posts` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(255) NOT NULL,
  `slug` varchar(255) NOT NULL,
  `content` longtext DEFAULT NULL,
  `anchor_link` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_bin DEFAULT NULL CHECK (json_valid(`anchor_link`)),
  `thumbnail` varchar(255) DEFAULT NULL,
  `post_type` enum('post','project','collection','page') DEFAULT NULL,
  `status` tinyint(4) NOT NULL DEFAULT 0 COMMENT '0 = visible, 1 = hidden',
  `meta_keywords` varchar(255) DEFAULT NULL,
  `meta_description` mediumtext DEFAULT NULL,
  `published_at` datetime DEFAULT NULL,
  `view_count` bigint(20) NOT NULL DEFAULT 0,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `posts`
--

INSERT INTO `posts` (`id`, `user_id`, `title`, `slug`, `content`, `anchor_link`, `thumbnail`, `post_type`, `status`, `meta_keywords`, `meta_description`, `published_at`, `view_count`, `created_at`, `updated_at`) VALUES
(1, 1, 'Gợi ý cách phối đồ đi dự tiệc cho chị em', 'goi-y-cach-phoi-do-di-du-tiec-cho-chi-em', 'Dự tiệc là một dịp quan trọng để phái đẹp thể hiện gu thời trang và phong cách của mình. Tuy nhiên, việc lựa chọn trang phục đi dự tiệc sao cho vừa sang trọng, thanh lịch lại phù hợp với vóc dáng và hoàn cảnh không phải là điều dễ dàng. Dưới đây là một số gợi ý cách phối đồ đi dự tiệc cho phụ nữ Việt Nam mà bạn có thể tham khảo:\r\n\r\n## 1. Đầm xòe\r\n\r\nĐầm xòe là một item không thể thiếu trong tủ đồ của phái đẹp khi đi dự tiệc. Những chiếc đầm xòe với thiết kế dáng dài, ôm sát cơ thể sẽ giúp tôn lên vóc dáng của bạn, đồng thời tạo cảm giác thanh lịch, duyên dáng.\r\n\r\n- **Lựa chọn chất liệu:** Để tạo cảm giác sang trọng, bạn nên lựa chọn đầm xòe được làm từ chất liệu cao cấp như lụa, satin, voan,...\r\n  \r\n- **Lựa chọn màu sắc:** Màu đen, trắng, đỏ, xanh navy,... là những màu sắc cơ bản, dễ phối đồ và phù hợp với nhiều hoàn cảnh.\r\n  \r\n- **Lựa chọn kiểu dáng:** Đầm xòe dáng dài, cổ chữ V, tay bồng,... là những kiểu dáng phù hợp với vóc dáng của phụ nữ Việt Nam.\r\n\r\n![trill-studio-dam-da-tiec-1](https://raw.githubusercontent.com/tuanhodev/atd-storage/main/BlogCollection/DamDaTiec%20-%20Mix/trill-studio-do-da-tiec-9.jpg)\r\n\r\n<center>Đầm xòe dạ tiệc</center>\r\n\r\nNgoài ra, bạn cũng có thể lựa chọn những chiếc đầm xòe có thiết kế cách điệu, độc đáo để tạo điểm nhấn cho set đồ của mình. Ví dụ, bạn có thể lựa chọn đầm xòe đính đá, đầm xòe xếp ly, đầm xòe lệch vai,...\r\n\r\n## 2. Đầm suông\r\n\r\nĐầm suông là một lựa chọn phù hợp cho những cô nàng yêu thích phong cách thoải mái, năng động. Những chiếc đầm suông với thiết kế dáng dài, có thể có họa tiết hoặc trơn sẽ giúp bạn trông vừa thanh lịch, vừa trẻ trung.\r\n\r\n![trill-studio-dam-da-tiec-1](https://raw.githubusercontent.com/tuanhodev/atd-storage/main/BlogCollection/DamDaTiec%20-%20Mix/trill-studio-do-da-tiec-1.jpg)\r\n\r\n<center>Đầm suông dạ tiệc</center>\r\n\r\n- **Lựa chọn chất liệu:** Để tạo cảm giác sang trọng, bạn nên lựa chọn đầm suông được làm từ chất liệu cao cấp như lụa, satin, voan,...\r\n  \r\n- **Lựa chọn màu sắc:** Màu trung tính như đen, trắng, xám,... là những màu sắc phù hợp với nhiều hoàn cảnh.\r\n  \r\n- **Lựa chọn họa tiết:** Bạn có thể lựa chọn đầm suông có họa tiết hoa, chấm bi, kẻ sọc,... để tạo điểm nhấn cho set đồ của mình.\r\n  \r\n\r\nNgoài ra, bạn cũng có thể lựa chọn những chiếc đầm suông có thiết kế nhấn eo để tôn lên vòng eo thon gọn của mình.\r\n\r\n## 3. Quần tây ống loe phối áo sơ mi\r\n\r\nQuần tây ống loe phối áo sơ mi là một set đồ mang phong cách thanh lịch, tinh tế. Bạn có thể lựa chọn quần tây ống loe có màu sắc trung tính như đen, trắng, xám để dễ dàng kết hợp với các loại áo sơ mi khác nhau. Ngoài ra, bạn cũng có thể phối quần tây ống loe với áo sơ mi có họa tiết để tạo điểm nhấn cho set đồ của mình.\r\n\r\n![trill-studio-dam-da-tiec-4](https://raw.githubusercontent.com/tuanhodev/atd-storage/main/BlogCollection/Trill%20-%20TruyenThong%20-%20HienDai/trill-studio-mix-truyen-thong-hien-dai-4.jpg)\r\n\r\n<center>Quần ống loe áo sơ mi</center>\r\n\r\n- **Lựa chọn chất liệu:** Để tạo cảm giác sang trọng, bạn nên lựa chọn quần tây ống loe được làm từ chất liệu cao cấp như vải tweed, vải dạ,...\r\n  \r\n- **Lựa chọn kiểu dáng:** Quần tây ống loe dáng suông, dáng ôm,... là những kiểu dáng phù hợp với vóc dáng của phụ nữ Việt Nam.\r\n  \r\n- **Lựa chọn màu sắc:** Màu trung tính như đen, trắng, xám,... là những màu sắc phù hợp với nhiều hoàn cảnh.\r\n  \r\n\r\nBạn có thể lựa chọn những chiếc quần tây ống loe có thiết kế nhấn eo hoặc có đường xẻ tà để tạo điểm nhấn cho set đồ của mình.\r\n\r\n## 4. Chân váy bút chì phối áo sơ mi hoặc áo thun\r\n\r\nChân váy bút chì phối áo sơ mi hoặc áo thun là một set đồ mang phong cách trẻ trung, năng động. Bạn có thể lựa chọn chân váy bút chì có màu sắc trung tính hoặc có họa tiết tùy theo sở thích. Ngoài ra, bạn cũng có thể kết hợp chân váy bút chì với áo thun', '{\"1\":{\"anchor_name\":\"1. \\u0110\\u1ea7m x\\u00f2e\",\"anchor_id\":\"#1-dam-xoe\"},\"2\":{\"anchor_name\":\"2. \\u0110\\u1ea7m su\\u00f4ng\",\"anchor_id\":\"#2-dam-suong\"},\"3\":{\"anchor_name\":\"3. Qu\\u1ea7n t\\u00e2y \\u1ed1ng loe ph\\u1ed1i \\u00e1o s\\u01a1 mi\",\"anchor_id\":\"#3-quan-tay-ong-loe-phoi-ao-so-mi\"}}', '\"17\"', 'post', 1, 'Trillfa Fashion, sơ mi công sở 2024, đồ dạ tiệc, quần tây dáng suông, thời trang công sở cao cấp', 'Tìm kiếm trang phục dạ tiệc phù hợp với phong cách của bạn tại Trillfa Fashion. Gợi ý đồ dạ tiệc cho phụ nữ Việt Nam. Tự tin thể hiện phong cách của bạn tại bữa tiệc với những gợi ý từ chúng tôi.”', '2023-12-01 00:00:00', 0, '2023-12-03 01:11:14', '2023-12-10 10:13:10'),
(2, 1, 'Xu hướng thời trang tại Việt Nam 2024', 'xu-huong-thoi-trang-tai-viet-nam-2024', '## Giới thiệu\r\n\r\nNăm 2024 đánh dấu một bước phát triển mới của ngành công nghiệp thời trang tại Việt Nam.\r\nVới sự phát triển của kinh tế và sự thay đổi trong gu thẩm mỹ của người tiêu dùng,\r\nxu hướng thời trang tại Việt Nam trong năm 2024 hứa hẹn sẽ mang đến những điểm nhấn độc đáo và sáng tạo.\r\n\r\n<br/>\r\n\r\n## 1. Retro là một phong cách mà Trillfa Fashion rất là tâm đắc\r\n\r\nNăm 2024 Trillfa Fashion muốn gọi tên phong cách Retro, phong cách này dự kiến sẽ tiếp tục phát triển và trở thành một xu hướng chủ đạo.\r\nÁo sơ mi cổ điển, váy xòe, quần ống rộng và các phụ kiện vintage sẽ trở thành những món đồ được ưa chuộng. Màu sắc nhẹ nhàng và họa tiết hoa lá sẽ là điểm nhấn trong thiết kế retro.\r\nđó chính là xu hướng thời trang `Retro` đang trở thành một trào lưu phổ biến tại Việt Nam.\r\n\r\n<!-- hinh anh -->\r\n\r\n![trill-studio-cong-so-retro-96](https://raw.githubusercontent.com/tuanhodev/atd-storage/main/BlogCollection/CongSo/trill-studio-cong-so-retro-%2096.jpg)\r\n\r\n![trill-studio-cong-so-retro-98](https://raw.githubusercontent.com/tuanhodev/atd-storage/main/BlogCollection/CongSo/trill-studio-cong-so-retro-%2098.jpg)\r\n\r\n![trill-studio-cong-so-retro-102](https://raw.githubusercontent.com/tuanhodev/atd-storage/main/BlogCollection/CongSo/trill-studio-cong-so-retro-%20102.jpg)\r\n\r\n<center><i>Phong cách thời trang retro</i></center>\r\n\r\n<br/>\r\n\r\n## 2. Sự kết hợp giữa truyền thống và hiện đại\r\n\r\nViệt Nam là một đất nước có nền văn hóa truyền thống phong phú. \r\nXu hướng thời trang tại Việt Nam năm 2024 sẽ kết hợp giữa yếu tố truyền thống và hiện đại. \r\nCác nhà thiết kế sẽ tìm cách kết hợp áo dài truyền thống với các chi tiết hiện đại, tạo nên những bộ trang phục độc đáo và đầy sáng tạo. Sự kết hợp này sẽ mang đến một cái nhìn mới mẻ và độc đáo về thời trang Việt Nam.\r\n\r\n<!-- hinh anh -->\r\n\r\n![trill-studio-mix-truyen-thong-hien-dai-1](https://raw.githubusercontent.com/tuanhodev/atd-storage/main/BlogCollection/Trill%20-%20TruyenThong%20-%20HienDai/trill-studio-mix-truyen-thong-hien-dai-1.jpg)\r\n\r\n![trill-studio-mix-truyen-thong-hien-dai-2](https://raw.githubusercontent.com/tuanhodev/atd-storage/main/BlogCollection/Trill%20-%20TruyenThong%20-%20HienDai/trill-studio-mix-truyen-thong-hien-dai-2.jpg)\r\n\r\n![trill-studio-mix-truyen-thong-hien-dai-4](https://raw.githubusercontent.com/tuanhodev/atd-storage/main/BlogCollection/Trill%20-%20TruyenThong%20-%20HienDai/trill-studio-mix-truyen-thong-hien-dai-4.jpg)\r\n\r\n![trill-studio-mix-truyen-thong-hien-dai-13](https://raw.githubusercontent.com/tuanhodev/atd-storage/main/BlogCollection/Trill%20-%20TruyenThong%20-%20HienDai/trill-studio-mix-truyen-thong-hien-dai-13.jpg)\r\n\r\n![trill-studio-mix-truyen-thong-hien-dai-14](https://raw.githubusercontent.com/tuanhodev/atd-storage/main/BlogCollection/Trill%20-%20TruyenThong%20-%20HienDai/trill-studio-mix-truyen-thong-hien-dai-14.jpg)\r\n\r\n<center><i>Truyền thống giữa hiện đại</i></center>\r\n\r\n<br/>\r\n\r\n## 3. Sự phát triển của thương hiệu thời trang Việt\r\n\r\nTrong những năm gần đây, các thương hiệu thời trang \r\nViệt Nam đã có sự phát triển mạnh mẽ và được công nhận trên thị trường quốc tế. Năm 2024, xu hướng này dự kiến sẽ tiếp tục phát triển. Các nhà thiết kế và nhãn hiệu thời trang Việt Nam sẽ tập trung vào việc tạo ra những sản phẩm chất lượng cao, độc đáo và có tính cạnh tranh trên thị trường quốc tế. Điều này sẽ giúp thúc đẩy sự phát triển của ngành công nghiệp thời trang Việt Nam.\r\n\r\n<br/>\r\n\r\n## 4. Sự bền vững và thân thiện với môi trường\r\n\r\nTrong bối cảnh tăng cường nhận thức về bảo vệ môi trường, \r\nxu hướng thời trang bền vững và thân thiện với môi trường đang trở thành một xu hướng quan trọng tại Việt Nam. Năm 2024, người tiêu dùng sẽ tìm kiếm những sản phẩm thời trang được làm từ nguyên liệu tái chế, không gây ô nhiễm môi trường và có quy trình sản xuất bền vững. Các nhãn hiệu thời trang Việt Nam sẽ đáp ứng nhu cầu này bằng cách tạo ra những sản phẩm thân thiện với môi trường và đồng thời giữ được tính thẩm mỹ và phong cách.\r\n\r\n<br/>\r\n\r\n## Kết luận\r\n\r\nXu hướng thời trang tại Việt Nam năm 2024 sẽ mang đến sự kết hợp giữa truyền thống và hiện đại,\r\nsự phát triển của các thương hiệu thời trang Việt, sự bền vững và thân thiện với môi trường. \r\nĐây là những xu hướng đáng chú ý và hứa hẹn sẽ tạo nên sự đột phá và phát triển cho ngành công nghiệp thời trang tại Việt Nam.', '{\"1\":{\"anchor_name\":\"1. Retro l\\u00e0 m\\u1ed9t phong c\\u00e1ch m\\u00e0 Trillfa Fashion r\\u1ea5t l\\u00e0 t\\u00e2m \\u0111\\u1eafc\",\"anchor_id\":\"#1-retro-la-mot-phong-cach-ma-trillfa-fashion-rat-la-tam-dac\"},\"2\":{\"anchor_name\":\"2. S\\u1ef1 k\\u1ebft h\\u1ee3p gi\\u1eefa truy\\u1ec1n th\\u1ed1ng v\\u00e0 hi\\u1ec7n \\u0111\\u1ea1i\",\"anchor_id\":\"#2-su-ket-hop-giua-truyen-thong-va-hien-dai\"},\"3\":{\"anchor_name\":\"3. S\\u1ef1 ph\\u00e1t tri\\u1ec3n c\\u1ee7a th\\u01b0\\u01a1ng hi\\u1ec7u th\\u1eddi trang Vi\\u1ec7t\",\"anchor_id\":\"#3-su-phat-trien-cua-thuong-hieu-thoi-trang-viet\"},\"4\":{\"anchor_name\":\"4. S\\u1ef1 b\\u1ec1n v\\u1eefng v\\u00e0 th\\u00e2n thi\\u1ec7n v\\u1edbi m\\u00f4i tr\\u01b0\\u1eddng\",\"anchor_id\":\"#4-su-ben-vung-va-than-thien-voi-moi-truong\"},\"5\":{\"anchor_name\":\"5. K\\u1ebft lu\\u1eadn\",\"anchor_id\":\"#ket-luan\"}}', '\"16\"', 'post', 1, 'Trillfa Fashion, thương hiệu thời trang giá tầm trung chất lượng cao cấp, xu hướng thời trang năm 2024', 'Năm 2024 đánh dấu một bước phát triển mới của ngành công nghiệp thời trang tại Việt Nam. Với sự phát triển của kinh tế và sự thay đổi trong gu thẩm mỹ của người tiêu dùng, xu hướng thời trang năm 2024 hứa hẹn sẽ mang đến những điểm nhấn độc đáo và sáng tạo. Trillfa Fashion một trong những thương hiệu thời trang giá tầm trung chất lượng cao cấp, đã cập nhật xu hướng thời trang 2024 trên trang web của mình', '2023-12-04 00:00:00', 0, '2023-12-04 13:52:47', '2023-12-10 10:18:12'),
(3, 1, 'Xu hướng thời trang công sở 2024 | Set áo blazer - quần tây dáng suông', 'xu-huong-thoi-trang-cong-so-2024-set-ao-blazer-quan-tay-dang-suong', 'Thời trang công sở ngày nay không chỉ đơn giản là trang phục để làm việc \r\nmà còn là biểu tượng cho sự tự tin và phong cách cá nhân. \r\nTrong bài viết này, **TRILLFA FASHION** sẽ cùng khám phá **Mẫu áo sơ mi công sở 2024** dành cho phụ nữ Việt Nam tỏa sáng\r\ntrong độ tuổi từ 25 đến 35, với sự kết hợp hết nước chấm giữa cặp bài trùng **Áo blazer** và **quần tây dáng suông**.\r\n\r\n![trill-studio-cong-so-1](https://raw.githubusercontent.com/tuanhodev/atd-storage/main/BlogCollection/CongSo/trill-studio-cong-so-1.jpg)\r\n\r\n<br/>\r\n\r\n## Áo blazer - Sự lựa chọn hoàn hảo cho thời trang công sở\r\n\r\nÁo blazer là một trong những item không thể thiếu trong tủ đồ của phụ nữ công sở. Với thiết kế sang trọng và cao cấp, áo blazer giúp tôn lên vẻ đẹp và sự chuyên nghiệp của người mặc. Đồng thời, áo blazer cũng mang đến sự tự tin và phong cách cá nhân cho phụ nữ.\r\nKhi chọn áo blazer, bạn nên chú ý đến chất liệu và kiểu dáng. Đối với thời tiết nóng ẩm của Việt Nam, nên lựa chọn áo blazer làm từ chất liệu nhẹ như lanh hoặc cotton để thoáng mát. Kiểu dáng áo blazer cần phù hợp với dáng người, tạo cảm giác vừa vặn và thoải mái khi mặc.\r\nHiện tại **Trillfa Fashion** đang cung cấp các **Mẫu áo sơ mi công sở 2024** hàng tự thiết kế và sản xuất số lượng giới hạn, chất lượng hoàn thiện cao. Dưới đay là một số ý tưởng về **Áo Plazer cao cấp** để bạn tham khảo.\r\n\r\n![trill-studio-cong-so-3](https://raw.githubusercontent.com/tuanhodev/atd-storage/main/BlogCollection/CongSo/trill-studio-cong-so-3.jpg)\r\n\r\n![trill-studio-cong-so12](https://raw.githubusercontent.com/tuanhodev/atd-storage/main/BlogCollection/CongSo/trill-studio-cong-so-12.jpg)\r\n\r\n![trill-studio-cong-so-69](https://raw.githubusercontent.com/tuanhodev/atd-storage/main/BlogCollection/CongSo/trill-studio-cong-so-69.jpg)\r\n\r\n<br/>\r\n\r\n## Quần tây dáng suông - Sự kết hợp hoàn hảo với áo blazer\r\n\r\nĐể tạo nên phong cách ăn ý và cá tính, quần tây dáng suông là sự lựa chọn tuyệt vời. Với kiểu dáng rộng rãi và thoải mái, \r\nquần tây dáng suông giúp bạn tự do di chuyển và làm việc mà không gò bó. Đồng thời, \r\nquần tây dáng suông cũng tạo nên vẻ ngoài thanh lịch và hiện đại.\r\nKhi chọn quần tây dáng suông, bạn nên chú ý đến chiều dài và màu sắc.\r\nQuần tây nên có chiều dài vừa phải, không quá dài hoặc quá ngắn. \r\nMàu sắc của quần tây cần phù hợp với áo blazer và tạo nên sự cân đối cho trang phục.\r\nTham khảo một vài ý tưởng về **Quần tây dáng suông** từ Trill.\r\n\r\n![trill-studio-cong-so-22](https://raw.githubusercontent.com/tuanhodev/atd-storage/main/BlogCollection/CongSo/trill-studio-cong-so-22.jpg)\r\n\r\n![trill-studio-cong-so-24](https://raw.githubusercontent.com/tuanhodev/atd-storage/main/BlogCollection/CongSo/trill-studio-cong-so-24.jpg)\r\n\r\n![trill-studio-cong-so-77](https://raw.githubusercontent.com/tuanhodev/atd-storage/main/BlogCollection/CongSo/trill-studio-cong-so-77.jpg)\r\n\r\n<br/>\r\n\r\n## Phụ kiện và trang phục kết hợp\r\n\r\nĐể tạo nên phong cách thời trang công sở hoàn hảo, \r\nbạn cần kết hợp áo blazer và quần tây dáng suông với các phụ kiện phù hợp. \r\nVí dụ như một chiếc túi xách nhỏ gọn và sang trọng, đôi giày cao gót hoặc giày thể thao thanh lịch là một lựa chọn thông minh, \r\ntùy theo sở thích cá nhân. Ngoài ra, bạn cũng có thể thêm một chiếc đồng hồ và một chiếc khuyên tai nhỏ \r\nđể tăng thêm điểm nhấn cho trang phục.\r\n\r\n![trillstudiocongso-71](https://raw.githubusercontent.com/tuanhodev/atd-storage/main/BlogCollection/CongSo/trill-studio-cong-so-71.jpg)\r\n\r\n<br/>\r\n\r\n## Kết luận\r\n\r\nVới sự kết hợp giữa **Áo blazer** và **Quần tây dáng suông**, bạn có thể tạo nên phong cách thời trang công sở\r\ncá tính và phù hợp với phụ nữ Việt Nam trong độ tuổi từ 25 đến 35. Hãy chọn những trang phục \r\ncó giá cả tầm trung và chất liệu sang trọng từ **Trill Stusio** để tạo nên vẻ ngoài chuyên nghiệp và tự tin. \r\nHãy thể hiện cá tính của bạn thông qua phong cách thời trang công sở độc đáo và sáng tạo!', '{\"2\":{\"anchor_name\":\"1. \\u00c1o blazer - S\\u1ef1 l\\u1ef1a ch\\u1ecdn ho\\u00e0n h\\u1ea3o cho th\\u1eddi trang c\\u00f4ng s\\u1edf\",\"anchor_id\":\"#ao-blazer-su-lua-chon-hoan-hao-cho-thoi-trang-cong-s\"},\"3\":{\"anchor_name\":\"2. Qu\\u1ea7n t\\u00e2y d\\u00e1ng su\\u00f4ng - S\\u1ef1 k\\u1ebft h\\u1ee3p ho\\u00e0n h\\u1ea3o v\\u1edbi \\u00e1o blazer\",\"anchor_id\":\"#quan-tay-dang-suong-su-ket-hop-hoan-hao-voi-ao-blazer\"},\"4\":{\"anchor_name\":\"3. Ph\\u1ee5 ki\\u1ec7n v\\u00e0 trang ph\\u1ee5c k\\u1ebft h\\u1ee3p\",\"anchor_id\":\"#phu-kien-va-trang-phuc-ket-ho\"},\"5\":{\"anchor_name\":\"4. Ph\\u1ee5 ki\\u1ec7n v\\u00e0 trang ph\\u1ee5c k\\u1ebft h\\u1ee3p\",\"anchor_id\":\"#phu-kien-va-trang-phuc-ket-hop\"},\"6\":{\"anchor_name\":\"5. K\\u1ebft lu\\u1eadn\",\"anchor_id\":\"#ket-luan\"}}', '\"14\"', 'post', 1, 'Trillfa Fashion, sơ mi công sở 2024, Áo blazer, và quần tây dáng suông, thời trang công sở cao cấp', 'Trong bài viết này, **Trillfa Fashion** sẽ giới thiệu đến bạn mẫu áo sơ mi công sở 2024 dành cho phụ nữ Việt Nam trong độ tuổi từ 25 đến 35.\r\nMẫu áo sơ mi này được thiết kế với sự kết hợp hết nước chấm giữa cập bài trùng Áo blazer và quần tây dáng suông, giúp bạn tỏa sáng trong môi trường làm việc.', '2023-12-07 00:00:00', 0, '2023-12-07 11:19:32', '2023-12-10 10:19:36'),
(4, 1, 'Cách phối đầm bút chì và sơ mi lụa - Xu hướng thời trang công sở 2024', 'cach-phoi-dam-but-chi-va-so-mi-lua-xu-huong-thoi-trang-cong-so-2024', '## Trillfa Fashion - Thương hiệu thời trang công sở cao cấp giá bình dân\r\n\r\n<br/>\r\n\r\nTrillfa Fashion là một thương hiệu thời trang thiết kế, một trong những thế mạnh là trang phục công sở cao cấp giá bình dân, Trillfa cung cấp đa dạng các loại sản phẩm trong đó có đầm bút chì và sơ mi lụa chất lượng cao. Sản phẩm tự thiết kế rất thanh lịch, sang trọng và hiện đại pha lẫn nét cá tính độc đáo, các sản phẩm của Trillfa luôn được các chị em tin tưởng lựa chọn.\r\n\r\n<br/>\r\n\r\n## Xu hướng thời trang công sở 2024\r\n\r\n\r\nNăm 2024, xu hướng thời trang công sở hướng đến sự thanh lịch, sang trọng nhưng vẫn trẻ trung và năng động, màu sắc đậm và mạnh mẽ, tạm rời xa màu trung tính truyền thống. Trong đó, đầm bút chì và sơ mi lụa là hai món đồ không thể thiếu trong tủ đồ của các chị em công sở.\r\n\r\n<br/>\r\n\r\n## Cách phối đầm bút chì và sơ mi lụa\r\n\r\nĐể phối đầm bút chì và sơ mi lụa đẹp, bạn cần lưu ý một số nguyên tắc sau:\r\n\r\n<br/>\r\n\r\n## 1. Chọn màu sắc phù hợp:\r\n\r\nMàu sắc của đầm bút chì và sơ mi lụa nên hài hòa với nhau, tạo nên tổng thể thống nhất. Bạn có thể chọn đầm bút chì và sơ mi lụa cùng màu hoặc phối màu tương phản để tạo điểm nhấn. Duới đây là một vài ví dụ:\r\n\r\n<br/>\r\n\r\n**Đầm bút chì đậm màu và sơ mi lụa sáng:** \r\n\r\nĐây là phối đồ kinh điển, luôn được các chị em yêu thích. Sự kết hợp giữa màu đậm sang trọng và màu trắng kem hoặc trắng ngà... mang đến vẻ ngoài thanh lịch và quý phái cho người mặc.\r\n\r\n![trillfa-bam-but-chi-dam-mau-so-mi-sang-mau](https://raw.githubusercontent.com/tuanhodev/atd-storage/main/BlogCollection/DamButChi%20-%20SomiLua/trill-studio-dam-but-chi-somi-lua-1.jpg)\r\n\r\n![trillfa-bam-but-chi-dam-mau-so-mi-sang-mau](https://raw.githubusercontent.com/tuanhodev/atd-storage/main/BlogCollection/DamButChi%20-%20SomiLua/trill-studio-dam-but-chi-somi-lua-20.jpg)\r\n\r\n![trillfa-bam-but-chi-dam-mau-so-mi-sang-mau](https://raw.githubusercontent.com/tuanhodev/atd-storage/main/BlogCollection/DamButChi%20-%20SomiLua/trill-studio-dam-but-chi-somi-lua-25.jpg)\r\n\r\n<br/>\r\n\r\n**Đầm bút chì màu xanh ngọc lục hoặc xanh lá và sơ mi lụa màu sáng:** \\\r\nĐây là phối đồ trẻ trung và hiện đại, phù hợp với những cô nàng yêu thích phong cách ngọt ngào. Sự kết hợp giữa màu xanh thanh lịch và màu hồng ngọt ngào mang đến vẻ ngoài trẻ trung năng động cho người mặc.\r\n\r\n![trillfa-bam-but-chi-dam-mau-so-mi-sang-mau](https://raw.githubusercontent.com/tuanhodev/atd-storage/main/BlogCollection/DamButChi%20-%20SomiLua/trill-studio-dam-but-chi-somi-lua-22.jpg)\r\n\r\n<br/>\r\n\r\n**Đầm bút chì cam đỏ và sơ mi lụa màu sáng:** \r\n\r\nĐây là phối đồ nổi bật và cá tính, phù hợp với những cô nàng yêu thích phong cách mạnh mẽ. Sự kết hợp giữa màu cam đỏ rực rỡ và màu trắng tinh khiết mang đến vẻ ngoài sang trọng và quyến rũ cho người mặc.\r\n\r\n![trillfa-bam-but-chi-dam-mau-so-mi-sang-mau](https://raw.githubusercontent.com/tuanhodev/atd-storage/main/BlogCollection/DamButChi%20-%20SomiLua/trill-studio-dam-but-chi-somi-lua-2.jpg)\r\n\r\n![trillfa-bam-but-chi-dam-mau-so-mi-sang-mau](https://raw.githubusercontent.com/tuanhodev/atd-storage/main/BlogCollection/DamButChi%20-%20SomiLua/trill-studio-dam-but-chi-somi-lua-3.jpg)\r\n\r\n![trillfa-bam-but-chi-dam-mau-so-mi-sang-mau](https://raw.githubusercontent.com/tuanhodev/atd-storage/main/BlogCollection/DamButChi%20-%20SomiLua/trill-studio-dam-but-chi-somi-lua-54.jpg)\r\n\r\n<br/>\r\n\r\n## 2. Lưu ý khi phối đồ đầm bút chì và sơ mi lụa\r\n\r\n**Chất liệu:**  \r\n\r\nĐầm bút chì và sơ mi lụa nên được làm từ chất liệu mềm mại, thoáng mát để tạo cảm giác thoải mái khi mặc. Bạn có thể chọn đầm bút chì và sơ mi lụa được làm từ các chất liệu như: cotton, lụa, voan,...\r\n\r\n**Kích thước:** \r\n\r\nĐầm bút chì và sơ mi lụa nên vừa vặn với cơ thể, không quá rộng hoặc quá bó sát.\r\n\r\n**Kiểu tóc và trang điểm:** \r\n\r\nKiểu tóc và trang điểm cũng góp phần tạo nên vẻ ngoài hoàn hảo cho bạn. Bạn có thể chọn kiểu tóc đơn giản và trang điểm nhẹ nhàng để tôn lên vẻ thanh lịch và chuyên nghiệp của mình.\r\n\r\n<br/>\r\n\r\n## 3. Chăm chút phụ kiện\r\n\r\n>Ngoài việc chú ý đến các nguyên tắc phối đồ cơ bản, bạn cũng có thể tham khảo một số gợi ý sau để tạo nên vẻ ngoài ấn tượng và cá tính hơn:\r\n\r\n**Trang trí đầm bút chì:** \r\n\r\nBạn có thể thêm thắt một số chi tiết trang trí cho đầm bút chì như nơ, đai lưng, bèo nhún, hoa văn,... để tạo điểm nhấn và mang đến vẻ ngoài trẻ trung, năng động hơn.\r\n\r\n**Chọn kiểu sơ mi lụa phù hợp:** \r\n\r\nBạn có thể chọn kiểu sơ mi lụa có cổ bèo, cổ vuông, cổ chữ V,... để tạo nên vẻ ngoài khác biệt và thời thượng hơn.\r\n\r\n**Phối đồ với phụ kiện:** \r\n\r\nBạn có thể kết hợp đầm bút chì và sơ mi lụa với các phụ kiện như giày cao gót, túi xách, trang sức,... để tạo nên tổng thể hài hòa và ấn tượng hơn.\r\n\r\n<br/>\r\n\r\n**Hãy ghé Trillfa để tham khảo và chọn đc bộ trang phục ưng ý nhé.**\r\n\r\n*Rất cảm ơn mọi người đã ghé đọc !*', '{\"1\":{\"anchor_name\":\"1. Trillfa Fashion - Th\\u01b0\\u01a1ng hi\\u1ec7u th\\u1eddi trang c\\u00f4ng s\\u1edf cao c\\u1ea5p gi\\u00e1 b\\u00ecnh d\\u00e2n\",\"anchor_id\":\"#trillfa-fashion-thuong-hieu-thoi-trang-cong-so-cao-cap-gia-binh-dan\"},\"4\":{\"anchor_name\":\"2. Xu h\\u01b0\\u1edbng th\\u1eddi trang c\\u00f4ng s\\u1edf 2024\",\"anchor_id\":\"#xu-huong-thoi-trang-cong-so-2024\"},\"5\":{\"anchor_name\":\"3. C\\u00e1ch ph\\u1ed1i \\u0111\\u1ea7m b\\u00fat ch\\u00ec v\\u00e0 s\\u01a1 mi l\\u1ee5a\",\"anchor_id\":\"#cach-phoi-dam-but-chi-va-so-mi-lua\"},\"6\":{\"anchor_name\":\"4. L\\u01b0u \\u00fd khi ph\\u1ed1i \\u0111\\u1ed3 \\u0111\\u1ea7m b\\u00fat ch\\u00ec v\\u00e0 s\\u01a1 mi l\\u1ee5a\",\"anchor_id\":\"#cach-phoi-dam-but-chi-va-so-mi-lua\"},\"7\":{\"anchor_name\":\"5. Ch\\u0103m ch\\u00fat ph\\u1ee5 ki\\u1ec7n\",\"anchor_id\":\"#3-cham-chut-phu-kien\"}}', '\"20\"', 'post', 1, NULL, '# Trillfa Fashion - Thời trang công sở cao cấp giá bình dân\r\n\r\n## Cách phối đầm bút chì và sơ mi lụa tỏa sáng nơi công sở với đầm bút chì và sơ mi lụa từ Trillfa Fashion\r\n\r\n## Tại Trillfa Fashion, chúng tôi mang đến cho bạn những chiếc đầm bút chì và sơ mi lụa chất lượng cao, với giá cả phải chăng.\r\n\r\n**Dưới đây là một số gợi ý phối đồ với đầm bút chì và sơ mi lụa từ Trillfa Fashion:**\r\n\r\n*Phối đầm bút chì đậm màu với sơ mi lụa sáng\r\n\r\n*Phối đầm bút chì màu xanh lá hoặc xanh ngọc lục với sơ mi lụa sáng màu\r\n\r\nHãy đến với Trillfa Fashion để lựa chọn cho mình những chiếc đầm bút chì và sơ mi lụa phù hợp nhất, và tỏa sáng nơi công sở nhé!', '2023-12-08 00:00:00', 0, '2023-12-08 18:29:57', '2023-12-10 10:15:12'),
(5, 1, 'Cách phối đồ công sở cho nàng mập - Xu hướng thời trang công sở 2024', 'cach-phoi-do-cong-so-cho-nang-map-xu-huong-thoi-trang-cong-so-2024', '## Trillfa Fashion - Thời trang công sở cao cấp giá bình dân\r\n\r\nCó thân hình mũm mĩm dễ thương là một trong những nỗi lo của nhiều nàng khi lựa chọn trang phục công sở. Tuy nhiên, chỉ cần nắm được một số mẹo nhỏ, bạn hoàn toàn có thể diện những bộ đồ công sở vừa đẹp vừa tôn dáng.\r\n\r\n<br/>\r\n\r\n## Chất liệu vải\r\n\r\nChất liệu vải là yếu tố quan trọng giúp bạn che đi khuyết điểm cơ thể. Bạn không nên chọn những loại vải quá mỏng sẽ khiến cơ thể bạn trông to hơn, trong khi chất liệu vải dày sẽ khiến bạn trông nặng nề. Ngược lại nên chọn những chất liệu vải có độ dày vừa phải vải như cotton, voan, chiffon,... là những chất liệu vải mềm mại, có độ co giãn tốt, giúp bạn thoải mái khi vận động sẽ là lựa chọn phù hợp. \r\n\r\n<br/>\r\n\r\n## Kiểu dáng trang phục\r\n\r\nKiểu dáng trang phục cũng là yếu tố quan trọng cần lưu ý. Bạn không nên chọn những kiểu đồ quá bó sát vì sẽ khiến các khuyết điểm cơ thể của bạn lộ rõ hơn. Những kiểu dáng trang phục suông và rộng rãi như váy xòe, đầm peplum, áo sơ mi cổ chữ V,... là lựa chọn phù hợp cho nàng mập. Những kiểu này dáng sẽ giúp bạn che đi khuyết điểm cơ thể và tạo cảm giác thoải mái, dễ chịu.\r\n\r\n<br/>\r\n\r\n## Màu sắc trang phục\r\n\r\nMàu sắc trang phục cũng góp phần tạo nên sự cân đối cho cơ thể. Bạn nên chọn những gam màu sáng, tươi tắn như trắng, be, xanh nhạt,... Những gam màu này sẽ giúp bạn trông thon gọn hơn. Và nói không với gam màu tối nếu bạn không muốn cơ thể mình nhìn to lơn.\r\n\r\n<br/>\r\n\r\n## Dưới đây Trillfa sẽ gợi ý một số cách phối đồ công sở cho nàng mập!\r\n\r\n**Váy xòe**\r\n\r\nVáy xòe là một trong những item thời trang công sở không thể thiếu của những cô nàng mũm mĩm. Váy xòe giúp che đi khuyết điểm vòng 2, vòng 3 và tạo cảm giác thanh mảnh cho cơ thể. Bạn có thể phối váy xòe với áo sơ mi, áo thun,... tùy theo sở thích.\r\n\r\n![trillfa-vay-xoe-so-mi-1](https://raw.githubusercontent.com/tuanhodev/atd-storage/main/BlogCollection/CongSo-NguoiMap/trillfa-congso-nguoi-map-1.jpg)\r\n\r\n![trillfa-vay-xoe-so-mi-2](https://raw.githubusercontent.com/tuanhodev/atd-storage/main/BlogCollection/CongSo-NguoiMap/trillfa-congso-nguoi-map-2.jpg)\r\n\r\n![trillfa-vay-xoe-so-mi-3](https://raw.githubusercontent.com/tuanhodev/atd-storage/main/BlogCollection/CongSo-NguoiMap/trillfa-congso-nguoi-map-3.jpg)\r\n\r\n\r\n<center><i>Váy xòe kết hợp với áo sơ mi cổ chữ V</i></center>\r\n\r\n<br/>\r\n\r\n**Đầm peplum**\r\n\r\nĐầm peplum là một kiểu đầm có thiết kế phần eo phồng giúp tạo cảm giác vòng eo thon gọn hơn. Đầm peplum có thể được phối với nhiều kiểu áo khác nhau, tạo nên những bộ trang phục công sở thanh lịch và thời trang.\r\n\r\n![trillfa-vay-xoe-so-mi-4](https://raw.githubusercontent.com/tuanhodev/atd-storage/main/BlogCollection/CongSo-NguoiMap/trillfa-congso-nguoi-map-4.jpg)\r\n\r\n![trillfa-vay-xoe-so-mi-5](https://raw.githubusercontent.com/tuanhodev/atd-storage/main/BlogCollection/CongSo-NguoiMap/trillfa-congso-nguoi-map-5.jpg)\r\n\r\n![trillfa-vay-xoe-so-mi-6](https://raw.githubusercontent.com/tuanhodev/atd-storage/main/BlogCollection/CongSo-NguoiMap/trillfa-congso-nguoi-map-6.jpg)\r\n\r\n![trillfa-vay-xoe-so-mi-7](https://raw.githubusercontent.com/tuanhodev/atd-storage/main/BlogCollection/CongSo-NguoiMap/trillfa-congso-nguoi-map-7.jpg)\r\n\r\n![trillfa-vay-xoe-so-mi-8](https://raw.githubusercontent.com/tuanhodev/atd-storage/main/BlogCollection/CongSo-NguoiMap/trillfa-congso-nguoi-map-8.jpg)\r\n\r\n<center><i>Đầm peplum</i></center>\r\n\r\n<br/>\r\n\r\n## Quần tây ống suông\r\n\r\nQuần âu ống suông giúp tạo cảm giác thoải mái, dễ chịu cho người mặc. Bạn có thể phối quần âu ống suông với áo sơ mi, áo thun,... tùy theo sở thích.\r\n\r\n<br/>\r\n\r\n## Túm lại\r\n\r\nHy vọng một số thủ thuật Trillfa vừa gợi ý sẽ dúp Chị Em tự tin hơn khi sải bước nơi công sở. Mặc dù vậy Trillfa luôn khuyến khích chị em phụ nữ nên thực hiện kết hợp nhiều biện pháp như tập gym hoặc kiên trỳ chế độ ăn kiêng để duy trì một vóc giáng lý tưởng. Chúc Chị Em mình luôn đẹp trong mọi hoàn cảnh và luôn nhớ ủng hộ Trillfa nhiều hơn nhé.\r\n\r\n<br/>\r\n\r\n*Rất cảm ơn mọi người đã ghé đọc!*', '{\"1\":{\"anchor_name\":\"1. Trillfa Fashion - Th\\u1eddi trang c\\u00f4ng s\\u1edf cao c\\u1ea5p gi\\u00e1 b\\u00ecnh d\\u00e2n\",\"anchor_id\":\"#trillfa-fashion-thoi-trang-cong-so-cao-cap-gia-binh-dan\"},\"2\":{\"anchor_name\":\"2. Ch\\u1ea5t li\\u1ec7u v\\u1ea3i\",\"anchor_id\":\"#chat-lieu-vai\"},\"3\":{\"anchor_name\":\"3. Ki\\u1ec3u d\\u00e1ng trang ph\\u1ee5c\",\"anchor_id\":\"#kieu-dang-trang-phuc\"},\"4\":{\"anchor_name\":\"4. M\\u00e0u s\\u1eafc trang ph\\u1ee5c\",\"anchor_id\":\"#mau-sac-trang-phuc\"},\"5\":{\"anchor_name\":\"5. D\\u01b0\\u1edbi \\u0111\\u00e2y Trillfa s\\u1ebd g\\u1ee3i \\u00fd m\\u1ed9t s\\u1ed1 c\\u00e1ch ph\\u1ed1i \\u0111\\u1ed3 c\\u00f4ng s\\u1edf cho n\\u00e0ng m\\u1eadp!\",\"anchor_id\":\"#duoi-day-trillfa-se-goi-y-mot-so-cach-phoi-do-cong-so-cho-nang-map\"},\"6\":{\"anchor_name\":\"6. Qu\\u1ea7n t\\u00e2y \\u1ed1ng su\\u00f4ng\",\"anchor_id\":\"#quan-tay-ong-suong\"},\"7\":{\"anchor_name\":\"7. T\\u00fam l\\u1ea1i\",\"anchor_id\":\"#tum-lai\"}}', '\"21\"', 'post', 1, NULL, 'Trillfa Fashion - Thời trang công sở cao cấp giá bình dân\r\nDưới đây là một số gợi ý dúp nàng mập tự tin hơn nơi công sở:\r\n- Chất liệu vải\r\n- Kiểu dáng trang phục\r\n- Màu sắc trang phục\r\n- Dưới đây Trillfa sẽ gợi ý một số cách phối đồ công sở cho nàng mập!\r\n- Quần tây ống suông\r\nNhấn xem ngay để biết thêm nhiều mẹo hay.', '2023-12-09 00:00:00', 0, '2023-12-09 22:04:14', '2023-12-10 10:24:30');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `post_tags`
--

CREATE TABLE `post_tags` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `post_id` bigint(20) NOT NULL,
  `tag_id` bigint(20) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `post_tags`
--

INSERT INTO `post_tags` (`id`, `post_id`, `tag_id`, `created_at`, `updated_at`) VALUES
(2, 2, 1, NULL, NULL),
(3, 3, 1, NULL, NULL),
(4, 4, 1, NULL, NULL),
(5, 5, 1, NULL, NULL),
(6, 6, 1, NULL, NULL),
(7, 7, 1, NULL, NULL),
(8, 6, 3, NULL, NULL),
(9, 8, 2, NULL, NULL),
(10, 8, 3, NULL, NULL),
(11, 9, 2, NULL, NULL),
(12, 9, 4, NULL, NULL),
(13, 10, 3, NULL, NULL),
(14, 11, 3, NULL, NULL),
(15, 12, 3, NULL, NULL),
(16, 12, 5, NULL, NULL),
(17, 13, 4, NULL, NULL),
(18, 14, 3, NULL, NULL),
(19, 15, 2, NULL, NULL),
(20, 16, 3, NULL, NULL),
(21, 16, 5, NULL, NULL),
(22, 1, 2, NULL, NULL),
(23, 3, 4, NULL, NULL),
(24, 4, 4, NULL, NULL),
(25, 5, 4, NULL, NULL),
(26, 5, 5, NULL, NULL),
(27, 5, 6, NULL, NULL);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `post_topics`
--

CREATE TABLE `post_topics` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `post_id` bigint(20) NOT NULL,
  `topic_id` bigint(20) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `post_topics`
--

INSERT INTO `post_topics` (`id`, `post_id`, `topic_id`, `created_at`, `updated_at`) VALUES
(9, 6, 9, NULL, NULL),
(10, 7, 7, NULL, NULL),
(11, 8, 8, NULL, NULL),
(12, 9, 9, NULL, NULL),
(13, 10, 9, NULL, NULL),
(14, 10, 8, NULL, NULL),
(16, 7, 8, NULL, NULL),
(17, 7, 9, NULL, NULL),
(18, 8, 9, NULL, NULL),
(20, 12, 13, NULL, NULL),
(21, 13, 13, NULL, NULL),
(25, 14, 13, NULL, NULL),
(26, 11, 8, NULL, NULL),
(27, 15, 13, NULL, NULL),
(28, 16, 14, NULL, NULL),
(29, 1, 6, NULL, NULL),
(30, 2, 10, NULL, NULL),
(31, 3, 4, NULL, NULL),
(32, 3, 5, NULL, NULL),
(33, 3, 10, NULL, NULL),
(34, 4, 4, NULL, NULL),
(35, 4, 10, NULL, NULL),
(36, 5, 4, NULL, NULL);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `roles`
--

CREATE TABLE `roles` (
  `id` int(10) UNSIGNED NOT NULL,
  `slug` varchar(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `permissions` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_bin DEFAULT NULL CHECK (json_valid(`permissions`)),
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `roles`
--

INSERT INTO `roles` (`id`, `slug`, `name`, `permissions`, `created_at`, `updated_at`) VALUES
(1, 'atdmin', 'atdmin', '{\"platform.index\": \"1\", \"platform.systems.roles\": \"1\", \"platform.systems.users\": \"1\", \"platform.systems.attachment\": \"1\"}', '2023-10-11 08:55:08', '2023-10-11 08:55:08'),
(2, 'nhavan', 'Nhà văn', '{\"platform.index\": \"1\", \"platform.systems.roles\": \"0\", \"platform.systems.users\": \"0\", \"platform.systems.attachment\": \"1\"}', '2023-10-11 08:55:51', '2023-10-11 09:15:30');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `role_users`
--

CREATE TABLE `role_users` (
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `role_id` int(10) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `role_users`
--

INSERT INTO `role_users` (`user_id`, `role_id`) VALUES
(1, 1),
(2, 2);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `settings`
--

CREATE TABLE `settings` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `label` varchar(255) NOT NULL,
  `key` varchar(255) NOT NULL,
  `value` text NOT NULL,
  `attributes` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `settings`
--

INSERT INTO `settings` (`id`, `label`, `key`, `value`, `attributes`, `created_at`, `updated_at`) VALUES
(1, 'Tên thương hiệu', 'ten-thuong-hieu', 'Trillfa Fashion', '\"Studio v\\u1ec1 thi\\u1ebft k\\u1ebf th\\u1eddi trang chuy\\u00ean nghi\\u1ec7p\"', '2023-10-16 22:35:03', '2023-12-08 09:32:35'),
(2, 'Số điện thoại', 'so-dien-thoai', '0987530253', NULL, '2023-10-16 22:37:14', '2023-10-16 22:52:08'),
(3, 'Email', 'email', 'tuan.ho.designer@gmail.com', NULL, '2023-10-16 22:42:35', '2023-10-16 22:44:41'),
(5, 'Địa chỉ', 'dia-chi', 'Quận Tân Phú, TP.Hồ Chí Minh', NULL, '2023-10-16 22:46:30', '2023-12-06 22:37:40'),
(6, 'Ngày làm việc trong tuần', 'ngay-lam-viec-trong-tuan', 'Thứ 2 - Thứ 7', NULL, '2023-10-16 22:51:46', '2023-10-16 22:51:46'),
(7, 'Giờ làm việc', 'gio-lam-viec', '8 giờ - 17 giờ', NULL, '2023-10-16 22:53:16', '2023-10-16 22:53:16'),
(8, 'Youtube', 'youtube', 'https://youtube.com/@trillfa', NULL, '2023-10-20 01:05:28', '2023-10-20 01:05:28'),
(9, 'Facebook', 'facebook', 'https://youtube.com/@trillfa', '\"facebook\"', '2023-10-20 01:05:45', '2023-10-20 01:05:45'),
(10, 'description', 'description', 'Trillfa Fashion - thương hiệu thời trang độc đáo và thanh lịch, mang đến sự tự tin và phong cách cho phái đẹp. Khám phá bộ sưu tập trang phục và trang phục thanh lịch sang trọng của chúng tôi. Tạo nên phong cách và cá tính của riêng bạn với Trill Studio. Trill cũng chuyên sản xuất thời trang công sở và hàng kỹ số lượng ít', NULL, '2023-11-19 19:20:28', '2023-12-08 09:33:00');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `tags`
--

CREATE TABLE `tags` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `slug` varchar(255) NOT NULL,
  `type` enum('post','product','project') NOT NULL DEFAULT 'post',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `tags`
--

INSERT INTO `tags` (`id`, `name`, `slug`, `type`, `created_at`, `updated_at`) VALUES
(1, 'Mặc đẹp', 'mac-dep', 'post', '2023-12-03 00:18:14', '2023-12-03 00:18:14'),
(2, 'Mix đồ đi tiệc', 'mix-do-di-tiec', 'post', '2023-12-03 00:18:35', '2023-12-03 00:18:35'),
(3, 'Sống khỏe', 'song-khoe', 'post', '2023-12-03 00:18:51', '2023-12-03 00:18:51'),
(4, 'Sơ mi công sở', 'so-mi-cong-so', 'post', '2023-12-03 00:19:13', '2023-12-03 00:19:13'),
(5, 'Đẹp nàng mập công sở', 'dep-nang-map-cong-so', 'post', '2023-12-09 21:59:59', '2023-12-09 21:59:59'),
(6, 'Cách mix đồ đẹp và chuẩn gu', 'cach-mix-do-dep-va-chuan-gu', 'post', '2023-12-09 22:00:49', '2023-12-09 22:00:49'),
(7, 'Trang điểm', 'trang-diem', 'post', '2023-12-09 22:01:08', '2023-12-09 22:01:08');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `topics`
--

CREATE TABLE `topics` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `parent_id` bigint(20) UNSIGNED DEFAULT NULL,
  `name` varchar(255) NOT NULL,
  `slug` varchar(255) NOT NULL,
  `topic_type` enum('post','project','collection','page') NOT NULL DEFAULT 'post',
  `thumbnail` varchar(255) DEFAULT NULL,
  `meta_title` varchar(255) DEFAULT NULL,
  `meta_keyword` varchar(255) DEFAULT NULL,
  `meta_description` mediumtext DEFAULT NULL,
  `status` tinyint(4) NOT NULL DEFAULT 0 COMMENT '0 = visible, 1 = hidden',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `topics`
--

INSERT INTO `topics` (`id`, `parent_id`, `name`, `slug`, `topic_type`, `thumbnail`, `meta_title`, `meta_keyword`, `meta_description`, `status`, `created_at`, `updated_at`) VALUES
(1, NULL, 'Mặc đẹp công sở', 'mac-dep-cong-so', 'post', NULL, NULL, NULL, NULL, 1, '2023-12-02 23:58:28', '2023-12-03 00:11:50'),
(2, NULL, 'Nổi bật khi dự tiệc', 'noi-bat-khi-du-tiec', 'post', NULL, NULL, NULL, NULL, 1, '2023-12-02 23:59:00', '2023-12-03 00:12:02'),
(3, NULL, 'Trill và cuộc sống', 'trill-va-cuoc-song', 'post', NULL, NULL, NULL, NULL, 1, '2023-12-02 23:59:17', '2023-12-03 00:12:09'),
(4, 1, 'Cách phối đồ công sở cho nàng mập', 'cach-phoi-do-cong-so-cho-nang-map', 'post', NULL, NULL, NULL, NULL, 1, '2023-12-03 00:03:10', '2023-12-09 21:56:59'),
(5, 1, 'Muốn mặc đẹp công sở nên biết', 'muon-mac-dep-cong-so-nen-biet', 'post', NULL, NULL, NULL, NULL, 1, '2023-12-03 00:03:52', '2023-12-09 22:27:07'),
(6, 2, 'Bí quyết mix đồ đi tiệc', 'bi-quyet-mix-do-di-tiec', 'post', NULL, NULL, NULL, NULL, 1, '2023-12-03 00:11:41', '2023-12-03 00:11:41'),
(7, 3, 'Cách trang điểm khi đi tiệc', 'cach-trang-diem-khi-di-tiec', 'post', NULL, NULL, NULL, NULL, 1, '2023-12-03 00:14:57', '2023-12-03 00:14:57'),
(8, NULL, 'Xuân He 2024', 'xuan-he-2024', 'collection', NULL, NULL, NULL, NULL, 1, '2023-12-03 00:16:19', '2023-12-03 00:16:19'),
(9, NULL, 'Đón Thu 2024', 'don-thu-2024', 'collection', NULL, NULL, NULL, NULL, 1, '2023-12-03 00:16:44', '2023-12-03 00:16:44'),
(10, 3, 'Xu hướng thời trang', 'xu-huong-thoi-trang', 'post', NULL, NULL, NULL, NULL, 1, '2023-12-04 13:49:49', '2023-12-04 13:49:49'),
(11, 3, 'Cách phối đồ cho nàng mập', 'cach-phoi-do-cho-nang-map', 'post', NULL, NULL, NULL, NULL, 1, '2023-12-09 21:59:31', '2023-12-09 21:59:31');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `truyenthongs`
--

CREATE TABLE `truyenthongs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `topic_id` bigint(20) DEFAULT NULL,
  `group` varchar(255) DEFAULT NULL,
  `ordering` varchar(255) NOT NULL,
  `title` varchar(255) NOT NULL,
  `description` text DEFAULT NULL,
  `route` varchar(255) DEFAULT NULL,
  `image` varchar(255) DEFAULT NULL,
  `color-primary` varchar(255) DEFAULT NULL,
  `color-secondary` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `truyenthongs`
--

INSERT INTO `truyenthongs` (`id`, `topic_id`, `group`, `ordering`, `title`, `description`, `route`, `image`, `color-primary`, `color-secondary`, `created_at`, `updated_at`) VALUES
(1, NULL, 'trangChinh', '0', 'Thời Trang ngiều hơn', 'Cùng đọc bản tin hàng tuần của Trillfa Fashion, để tìm hiểu các mẹo hữu ích về nhiều lĩnh vực cuộc sống, khám phá các phong cách thời trang độc đáo và bắt kịp xu hướng thế giới.', '/blog', '\"18\"', 'primary', 'secondary', NULL, '2023-12-08 09:41:47'),
(2, NULL, 'trangChinh', '1', 'Bộ sưu tập  mới', 'Trillfa Fashion - bộ sưu tập xuân hè 2024', '/blog/xuan-he-2024/chuyen-muc', '\"19\"', 'primary', 'secondary', NULL, '2023-12-08 09:43:18'),
(4, NULL, 'featured', '100', 'Sáng tạo trên nền tảng kinh nghiêm', 'Trillfa Fashion với hơn 10 năm kinh nghiệm thiết kế cho nhiều thương hiệu thời trang, cho ra đời nhiều mẫu mã bán chạy sẽ mang đến cho bạn một dich vụ thiết kế chất lượng', 'home', '\"6\"', 'primary', 'secondary', NULL, '2023-12-08 09:39:27'),
(5, NULL, 'featured', '100', 'Sản xuất từ sự am hiểu thiết kế', 'Bạn có đang gặp khó khăn trong việc gắn kết giữa hai mảng Thiết kế và Sản xuất. Đúng vậy, vấn đề nhức nhối thường gặp này được cải thiện khi tích hợp dịch vụ từ Trillfa Fashion.', 'home', '\"7\"', 'primary', 'secondary', NULL, '2023-12-08 09:39:42'),
(6, NULL, 'featured', '100', 'Nỗ lực nhiều hơn nữa hướng tới khách hàng', 'Ngoài thời gian tập trung vào chuyên môn thiết kế và nâng cao chất lượng sản xuất để đáp ứng tốt nhu cầu từ khách hàng, Trillfa Fashion còn dành thời gian tổng hợp xu hướng và xuất bản nhiều bài viết về thời trang', 'home', '\"8\"', 'primary', 'secondary', NULL, '2023-12-08 09:40:00'),
(7, NULL, 'home-banners-1', '10', 'Trill Studio có những gì', 'Trill tập trung cung cấp nhiều dịch vụ chuyên sâu trong lĩnh vực thời trang bao gồm : <br>\r\nThiết kế - Sản xuất mẫu theo yêu cầu <br>\r\nSản xuất theo đơn hàng chất lượng cao <br>\r\nCấu hình phòng thiết kế mẫu giúp doanh nghiệp giảm gánh nặng vận hành', 'collections', '\"9\"', 'primary', 'secondary', NULL, '2023-12-02 23:57:01'),
(13, NULL, 'banners-collection', '4', 'Banners collection', 'Blog đầu trang collection', 'blog.collection', '\"3\"', NULL, NULL, '2023-12-01 02:53:41', '2023-12-02 23:54:25'),
(14, NULL, 'banners-topic', '5', 'Banners topic', 'Banners topic', 'blog.topic.posts', '\"5\"', NULL, NULL, '2023-12-01 03:02:36', '2023-12-02 23:55:03'),
(15, NULL, 'banners-blog', '2', 'Banners blog', 'Banners blog', 'blog.index', '\"4\"', NULL, NULL, '2023-12-01 03:19:57', '2023-12-02 23:54:41');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) NOT NULL,
  `remember_token` varchar(100) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `permissions` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_bin DEFAULT NULL CHECK (json_valid(`permissions`))
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`, `permissions`) VALUES
(1, 'Anh Tuấn', 'tuan.ho.designer@gmail.com', NULL, '$2y$10$uqqvyO/zW/gWmXUtQtgaxeFSZuL9qsAlPsG7RFbLBD2y7dHfXvomi', 'aP3skE4rEU3a5wYiF8CFYY7GvpXxWuyVoTEyLgSSEuHKMJ851uC0dXOL0TOo', '2023-10-09 09:17:08', '2023-10-17 04:23:17', '{\"platform.index\": \"1\", \"platform.systems.roles\": \"1\", \"platform.systems.users\": \"1\", \"platform.systems.attachment\": \"1\"}'),
(2, 'Rong Reu', 'rongreu2768@gmail.com', NULL, '$2y$10$H0F1izQ4iFTBRAC3jCbfFet9sLRqrn2o1h6SCSLn/oG.kwgVhyFIm', 'Pd6tBne5TwNOTekRyJDei1bO04DGEBOddSW3TInE4jBgMD0rZJJ4sbAylElN', '2023-10-11 08:57:37', '2023-10-11 08:57:37', '{\"platform.index\": \"0\", \"platform.systems.roles\": \"0\", \"platform.systems.users\": \"0\", \"platform.systems.attachment\": \"0\"}');

--
-- Chỉ mục cho các bảng đã đổ
--

--
-- Chỉ mục cho bảng `attachmentable`
--
ALTER TABLE `attachmentable`
  ADD PRIMARY KEY (`id`),
  ADD KEY `attachmentable_attachmentable_type_attachmentable_id_index` (`attachmentable_type`,`attachmentable_id`),
  ADD KEY `attachmentable_attachment_id_foreign` (`attachment_id`);

--
-- Chỉ mục cho bảng `attachments`
--
ALTER TABLE `attachments`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `comments`
--
ALTER TABLE `comments`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `comment_post`
--
ALTER TABLE `comment_post`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Chỉ mục cho bảng `menus`
--
ALTER TABLE `menus`
  ADD PRIMARY KEY (`id`),
  ADD KEY `menus_parent_id_foreign` (`parent_id`);

--
-- Chỉ mục cho bảng `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `notifications`
--
ALTER TABLE `notifications`
  ADD PRIMARY KEY (`id`),
  ADD KEY `notifications_notifiable_type_notifiable_id_index` (`notifiable_type`,`notifiable_id`);

--
-- Chỉ mục cho bảng `pagse`
--
ALTER TABLE `pagse`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `password_reset_tokens`
--
ALTER TABLE `password_reset_tokens`
  ADD PRIMARY KEY (`email`);

--
-- Chỉ mục cho bảng `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

--
-- Chỉ mục cho bảng `posts`
--
ALTER TABLE `posts`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `post_tags`
--
ALTER TABLE `post_tags`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `post_topics`
--
ALTER TABLE `post_topics`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `roles`
--
ALTER TABLE `roles`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `roles_slug_unique` (`slug`);

--
-- Chỉ mục cho bảng `role_users`
--
ALTER TABLE `role_users`
  ADD PRIMARY KEY (`user_id`,`role_id`),
  ADD KEY `role_users_role_id_foreign` (`role_id`);

--
-- Chỉ mục cho bảng `settings`
--
ALTER TABLE `settings`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `tags`
--
ALTER TABLE `tags`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `topics`
--
ALTER TABLE `topics`
  ADD PRIMARY KEY (`id`),
  ADD KEY `topics_parent_id_foreign` (`parent_id`);

--
-- Chỉ mục cho bảng `truyenthongs`
--
ALTER TABLE `truyenthongs`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- AUTO_INCREMENT cho các bảng đã đổ
--

--
-- AUTO_INCREMENT cho bảng `attachmentable`
--
ALTER TABLE `attachmentable`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT cho bảng `attachments`
--
ALTER TABLE `attachments`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT cho bảng `comments`
--
ALTER TABLE `comments`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT cho bảng `comment_post`
--
ALTER TABLE `comment_post`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT cho bảng `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT cho bảng `menus`
--
ALTER TABLE `menus`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5101;

--
-- AUTO_INCREMENT cho bảng `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=33;

--
-- AUTO_INCREMENT cho bảng `pagse`
--
ALTER TABLE `pagse`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT cho bảng `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT cho bảng `posts`
--
ALTER TABLE `posts`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT cho bảng `post_tags`
--
ALTER TABLE `post_tags`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;

--
-- AUTO_INCREMENT cho bảng `post_topics`
--
ALTER TABLE `post_topics`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=37;

--
-- AUTO_INCREMENT cho bảng `roles`
--
ALTER TABLE `roles`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT cho bảng `settings`
--
ALTER TABLE `settings`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT cho bảng `tags`
--
ALTER TABLE `tags`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT cho bảng `topics`
--
ALTER TABLE `topics`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT cho bảng `truyenthongs`
--
ALTER TABLE `truyenthongs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT cho bảng `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- Các ràng buộc cho các bảng đã đổ
--

--
-- Các ràng buộc cho bảng `attachmentable`
--
ALTER TABLE `attachmentable`
  ADD CONSTRAINT `attachmentable_attachment_id_foreign` FOREIGN KEY (`attachment_id`) REFERENCES `attachments` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Các ràng buộc cho bảng `menus`
--
ALTER TABLE `menus`
  ADD CONSTRAINT `menus_parent_id_foreign` FOREIGN KEY (`parent_id`) REFERENCES `menus` (`id`) ON DELETE CASCADE;

--
-- Các ràng buộc cho bảng `role_users`
--
ALTER TABLE `role_users`
  ADD CONSTRAINT `role_users_role_id_foreign` FOREIGN KEY (`role_id`) REFERENCES `roles` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `role_users_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Các ràng buộc cho bảng `topics`
--
ALTER TABLE `topics`
  ADD CONSTRAINT `topics_parent_id_foreign` FOREIGN KEY (`parent_id`) REFERENCES `topics` (`id`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
