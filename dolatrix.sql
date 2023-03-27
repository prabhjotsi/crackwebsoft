-- phpMyAdmin SQL Dump
-- version 4.9.4
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Dec 13, 2020 at 02:57 AM
-- Server version: 10.3.25-MariaDB-log-cll-lve
-- PHP Version: 7.3.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `brigkrnx_dolatrix`
--

-- --------------------------------------------------------

--
-- Table structure for table `about_us_features`
--

CREATE TABLE `about_us_features` (
  `id` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `about_us_features`
--

INSERT INTO `about_us_features` (`id`, `created_at`, `updated_at`, `title`) VALUES
(1, '2020-11-29 15:12:06', '2020-12-02 21:29:35', 'Managed Web Application'),
(2, '2020-11-29 15:12:06', '2020-12-02 21:29:52', '24/7 Support Services'),
(3, '2020-11-29 15:12:07', '2020-11-29 15:12:07', 'Cyber Security Solutions'),
(4, '2020-11-29 15:12:07', '2020-12-02 21:29:03', 'Networking & Security'),
(5, '2020-11-29 15:12:07', '2020-12-02 21:29:14', 'Diployment & Migration'),
(6, '2020-11-29 15:12:07', '2020-12-02 21:29:24', 'Cyber Disaster Planning');

-- --------------------------------------------------------

--
-- Table structure for table `about_us_sections`
--

CREATE TABLE `about_us_sections` (
  `id` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `description` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `sub_title` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `about_us_sections`
--

INSERT INTO `about_us_sections` (`id`, `created_at`, `updated_at`, `title`, `description`, `sub_title`, `image`) VALUES
(1, '2020-11-29 15:12:06', '2020-12-02 20:51:05', 'We Are The Trusted Cyber Security Experts We Keep Things Simple', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Vitae soluta, dignissimos aut, assumenda dolore totam natus qui cum vel omnis voluptates.', 'Creative Managed IT Solutions Agency', 'uploads/UeePGtWjNe2TUlyfDUPIgJvBQpPGpuSos9vSMSwc.png');

-- --------------------------------------------------------

--
-- Table structure for table `advantages`
--

CREATE TABLE `advantages` (
  `id` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `description` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `detail_1` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `detail_2` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `detail_3` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `advantages`
--

INSERT INTO `advantages` (`id`, `created_at`, `updated_at`, `title`, `description`, `image`, `detail_1`, `detail_2`, `detail_3`) VALUES
(1, '2020-11-29 15:12:05', '2020-11-29 15:12:05', 'Managed IT Services', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Vitae soluta, dignissimos aut, assumenda dolore totam natus qui cum vel omnis voluptates.', NULL, 'Expansions or Consolidations', 'Networking & Security Solutions', 'Security & Detailed Results'),
(2, '2020-11-29 15:12:06', '2020-11-29 15:12:06', 'Networking Solutions', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Vitae soluta, dignissimos aut, assumenda dolore totam natus qui cum vel omnis voluptates.', NULL, 'Expansions or Consolidations', 'Networking & Security Solutions', 'Security & Detailed Results'),
(3, '2020-11-29 15:12:06', '2020-11-29 15:12:06', 'Security Solutions', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Vitae soluta, dignissimos aut, assumenda dolore totam natus qui cum vel omnis voluptates.', NULL, 'Expansions or Consolidations', 'Networking & Security Solutions', 'Security & Detailed Results');

-- --------------------------------------------------------

--
-- Table structure for table `contacts`
--

CREATE TABLE `contacts` (
  `id` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `message` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `subject` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `contacts`
--

INSERT INTO `contacts` (`id`, `created_at`, `updated_at`, `name`, `message`, `subject`, `email`) VALUES
(1, '2020-11-29 15:12:13', '2020-11-29 15:12:13', 'Mohamed', 'Test Message', 'Test Subject', 'test@test.com'),
(2, '2020-11-30 18:05:01', '2020-11-30 18:05:01', 'Ahmed', 'ay 7aga', 'Subject two', 'test@tst.com');

-- --------------------------------------------------------

--
-- Table structure for table `contact_sections`
--

CREATE TABLE `contact_sections` (
  `id` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `description` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `sub_title` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `contact_sections`
--

INSERT INTO `contact_sections` (`id`, `created_at`, `updated_at`, `title`, `description`, `sub_title`, `image`) VALUES
(1, '2020-11-29 15:12:14', '2020-12-02 21:21:39', 'Contact With Us', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Vitae soluta, dignissimos aut, assumenda dolore totam natus qui cum vel omnis voluptates.', 'CONTACT US', 'uploads/z1TQPgliC7fQfFP5IpG5GGYzfQNPrMabZN6b7O74.png');

-- --------------------------------------------------------

--
-- Table structure for table `fact_sections`
--

CREATE TABLE `fact_sections` (
  `id` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `description` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `sub_title` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `fact_sections`
--

INSERT INTO `fact_sections` (`id`, `created_at`, `updated_at`, `title`, `description`, `sub_title`) VALUES
(1, '2020-11-29 15:12:10', '2020-12-02 20:48:39', 'Our Fun Facts', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed quis accumsan nisi Ut ut felis congue nisl hendrerit commodo.', 'our numbers');

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `uuid` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `features`
--

CREATE TABLE `features` (
  `id` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `icon` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `features`
--

INSERT INTO `features` (`id`, `created_at`, `updated_at`, `title`, `image`, `icon`) VALUES
(1, '2020-11-29 15:12:09', '2020-12-02 21:16:50', 'Qualified IT Experts', 'uploads/qaSdnOU90R6qMZjegbACFkL8yjYNHUmq2a0bdin3.jpeg', 'uploads/f1XZkUvxxXojaZjjqExVuoJdTU7RVD4GySpvs8Gr.png'),
(2, '2020-11-29 15:12:09', '2020-12-02 21:17:16', 'Creative IT solutions', 'uploads/pLGEzRDVMajmT7nhX2OUg4HWbSXZsLx1qDKptHpd.jpeg', 'uploads/oxwcAnRnQkQJnvQqeHd3uH1hR64EYy4MklkWKy7T.png'),
(3, '2020-11-29 15:12:10', '2020-12-02 21:16:19', 'Dedicated Team', 'uploads/EPHNpyDNDO1wo0rcB1B1MrNUy3XDnCkNstVOr8M5.jpeg', 'uploads/ITVU85bb9jwnjfRPXmSKS7FSRUjjAkEN53qPIcZz.png');

-- --------------------------------------------------------

--
-- Table structure for table `feature_sections`
--

CREATE TABLE `feature_sections` (
  `id` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `description` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `sub_title` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `feature_sections`
--

INSERT INTO `feature_sections` (`id`, `created_at`, `updated_at`, `title`, `description`, `sub_title`) VALUES
(1, '2020-11-29 15:12:09', '2020-11-29 15:12:09', ' Why Choose us', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Vitae soluta, dignissimos aut, assumenda dolore totam natus qui cum vel omnis voluptates.', ' OUR FEATURES ');

-- --------------------------------------------------------

--
-- Table structure for table `footer_section`
--

CREATE TABLE `footer_section` (
  `id` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `logo` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `logo_name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `mail_address` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `phone` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `address` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `facebook` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `twitter` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `instagram` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `google_plus` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `linkedin` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `description` text COLLATE utf8mb4_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `footer_section`
--

INSERT INTO `footer_section` (`id`, `created_at`, `updated_at`, `logo`, `logo_name`, `email`, `mail_address`, `phone`, `address`, `facebook`, `twitter`, `instagram`, `google_plus`, `linkedin`, `description`) VALUES
(1, '2020-11-29 15:12:14', '2020-11-30 18:06:53', NULL, 'Dolatrix', 'support@yourdomain.com', 'Mailing Address:xx00 E. Union Ave', '+999 90932 627', 'Suite 1100. Denver, CO 80237', 'http://www.facebook.com', 'http://www.twitter.com', 'http://www.instagram.com', 'http://www.google.com', 'http://www.linkedin.com', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Vitae soluta, dignissimos aut, assumenda dolore totam natus qui cum vel omnis voluptates.');

-- --------------------------------------------------------

--
-- Table structure for table `hero_sections`
--

CREATE TABLE `hero_sections` (
  `id` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `sub_title` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `description` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `span_title` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `hero_sections`
--

INSERT INTO `hero_sections` (`id`, `created_at`, `updated_at`, `title`, `sub_title`, `description`, `span_title`, `image`) VALUES
(1, '2020-11-29 15:12:05', '2020-11-29 15:12:05', 'Your IT Security is our top priority with Our Creative', ' Creative Managed IT Solutions Agency ', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Vitae soluta, dignissimos aut, assumenda dolore totam natus qui cum vel omnis voluptates.', 'Cyber Security Solutions.', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `main_features`
--

CREATE TABLE `main_features` (
  `id` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `description` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `main_features`
--

INSERT INTO `main_features` (`id`, `created_at`, `updated_at`, `title`, `description`, `image`) VALUES
(1, '2020-11-29 15:12:13', '2020-12-02 20:41:49', 'Security Solutions', 'Iterative approaches to corporate strategy foster collaborative thinkin', 'uploads/JLBpR3U8uO2mCLto2ntYjysN1kjCjNcZH390DDCd.png'),
(2, '2020-11-29 15:12:13', '2020-12-02 20:43:24', 'Strong Firewalls', 'Iterative approaches to corporate strategy foster collaborative thinkin', 'uploads/x9C0G7QhGRDM41jUC2n8njsSnviDHQeqtn4wI9nK.png'),
(3, '2020-11-29 15:12:13', '2020-12-02 20:43:41', 'Managed IT Servers', 'Iterative approaches to corporate strategy foster collaborative thinkin', 'uploads/6DIdSCRh6vVl8qnWsDMR46sclXaihNqdqzKa6SU1.png'),
(4, '2020-11-29 15:12:13', '2020-12-02 20:43:57', 'Websites Security', 'Iterative approaches to corporate strategy foster collaborative thinkin', 'uploads/Txzuqrb4cxNkN1qAIldphYy6t1HAqfLTeHyPJhkn.png'),
(5, '2020-11-29 15:12:13', '2020-12-02 20:44:10', 'Latest Equipment', 'Iterative approaches to corporate strategy foster collaborative thinkin', 'uploads/4QmCHOqD5DLlZKalHRzYtEICfOdUXgWvUMHgyxB5.png'),
(6, '2020-11-29 15:12:13', '2020-12-02 20:44:22', 'Cloud Computing', 'Iterative approaches to corporate strategy foster collaborative thinkin', 'uploads/W1EuzVRDiEk0zVFrly6i924aAs9I2ffjLrSPrmgo.png');

-- --------------------------------------------------------

--
-- Table structure for table `main_features_sections`
--

CREATE TABLE `main_features_sections` (
  `id` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `description` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `sub_title` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `years` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `experince` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `main_features_sections`
--

INSERT INTO `main_features_sections` (`id`, `created_at`, `updated_at`, `title`, `description`, `sub_title`, `image`, `years`, `experince`) VALUES
(1, '2020-11-29 15:12:12', '2020-11-29 15:12:12', 'Our Main Features', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Vitae soluta, dignissimos aut, assumenda dolore totam natus qui cum vel omnis voluptates.', ' Great Features ', NULL, '25', 'Years of IT & cyber security Experience');

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2019_08_19_000000_create_failed_jobs_table', 1),
(4, '2020_11_11_081115_create_hero_sections_table', 1),
(5, '2020_11_11_081841_create_main_features_table', 1),
(6, '2020_11_11_082149_create_feature_sections_table', 1),
(7, '2020_11_11_082251_create_features_table', 1),
(8, '2020_11_11_082426_create_about_us_sections_table', 1),
(9, '2020_11_11_082502_create_about_us_features_table', 1),
(10, '2020_11_11_082620_create_fact_sections_table', 1),
(11, '2020_11_11_082711_create_our_facts_table', 1),
(12, '2020_11_11_082831_create_main_features_sections_table', 1),
(13, '2020_11_11_082857_create_advantages_table', 1),
(14, '2020_11_11_084218_create_services_sections_table', 1),
(15, '2020_11_11_084256_create_services_table', 1),
(16, '2020_11_11_084327_create_team_sections_table', 1),
(17, '2020_11_11_084610_create_team_members_table', 1),
(18, '2020_11_11_084741_create_question_sections_table', 1),
(19, '2020_11_11_084819_create_questions_table', 1),
(20, '2020_11_11_084913_create_contact_sections_table', 1),
(21, '2020_11_15_084913_create_nav_bar_table', 1),
(22, '2020_11_16_084327_create_testimonials_sections_table', 1),
(23, '2020_11_16_084610_create_testimonials_table', 1),
(24, '2020_11_16_084913_create_footer_section_table', 1),
(25, '2020_11_29_084913_create_contacts_table', 1);

-- --------------------------------------------------------

--
-- Table structure for table `nav_bar`
--

CREATE TABLE `nav_bar` (
  `id` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `logo` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `logo_name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `home` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `home_style_1` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `home_style_2` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `home_style_3` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `about_us` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `services` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `faq` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `contact` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `nav_bar`
--

INSERT INTO `nav_bar` (`id`, `created_at`, `updated_at`, `logo`, `logo_name`, `home`, `home_style_1`, `home_style_2`, `home_style_3`, `about_us`, `services`, `faq`, `contact`) VALUES
(1, '2020-11-29 15:12:05', '2020-12-01 23:57:48', NULL, 'Dolatrix', 'Home', 'Home Style 1', 'Home Style 2', 'Home Style 3', 'About Us', 'Services', 'FAQ', 'Contact');

-- --------------------------------------------------------

--
-- Table structure for table `our_facts`
--

CREATE TABLE `our_facts` (
  `id` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `number` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `our_facts`
--

INSERT INTO `our_facts` (`id`, `created_at`, `updated_at`, `title`, `number`, `image`) VALUES
(1, '2020-11-29 15:12:10', '2020-12-02 20:45:21', 'Projects Completed', '1127', 'uploads/exIg3i5zoS1ENK3jneNA41feHxafdQAsIiphdtZ4.png'),
(2, '2020-11-29 15:12:10', '2020-12-02 20:45:47', 'NETWORKS SECURED', '341', 'uploads/AgWPcXQA4tRJetYndFfYnCbrAOQmQgeJCdA0CEc6.png'),
(3, '2020-11-29 15:12:10', '2020-12-02 20:46:07', 'DATA CENTERS', '232', 'uploads/77tXZXaG4LZzcoTXd6YUEX0dfuGEzQZzUL4tyN4o.png'),
(4, '2020-12-02 20:46:33', '2020-12-02 20:46:33', 'HAPPY CLIENTS', '940', 'uploads/Rmv6gjdnEj1gSUpmzzYYzklCWFm523W4Bm1sPQE2.png');

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `questions`
--

CREATE TABLE `questions` (
  `id` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `question` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `answer` text COLLATE utf8mb4_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `questions`
--

INSERT INTO `questions` (`id`, `created_at`, `updated_at`, `question`, `answer`) VALUES
(1, '2020-11-29 15:12:11', '2020-12-02 21:24:11', '- Who has access to my Security Records', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dolore omnis quaerat nostrum, pariatur ipsam sunt accusamus enim necessitatibus est fugiat, assumenda dolorem, deleniti corrupti cupiditate ipsum, dolorum voluptatum esse error?'),
(2, '2020-11-29 15:12:11', '2020-12-02 21:13:44', '- We are always carefull to Our Clients  and service', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Vitae soluta, dignissimos aut, assumenda dolore totam natus qui cum vel omnis voluptates.'),
(3, '2020-11-29 15:12:11', '2020-12-02 21:14:11', '- We are always carefull to Our Clients  and service', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Vitae soluta, dignissimos aut, assumenda dolore totam natus qui cum vel omnis voluptates.'),
(4, '2020-11-29 15:12:11', '2020-12-02 21:14:30', '- how many Security sessions I need?', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Vitae soluta, dignissimos aut, assumenda dolore totam natus qui cum vel omnis voluptates.');

-- --------------------------------------------------------

--
-- Table structure for table `question_sections`
--

CREATE TABLE `question_sections` (
  `id` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `description` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `sub_title` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `question_sections`
--

INSERT INTO `question_sections` (`id`, `created_at`, `updated_at`, `title`, `description`, `sub_title`, `image`) VALUES
(1, '2020-11-29 15:12:11', '2020-12-02 21:23:32', 'Frequently Questions', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Vitae soluta, dignissimos aut, assumenda dolore totam natus qui cum vel.', 'Frequently asked', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `services`
--

CREATE TABLE `services` (
  `id` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `description` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `services`
--

INSERT INTO `services` (`id`, `created_at`, `updated_at`, `title`, `description`, `image`) VALUES
(1, '2020-11-29 15:12:08', '2020-12-02 20:35:21', 'IT Disaster Planning', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Vitae soluta, dignissimos aut, assumenda dolore totam natus qui cum vel omnis voluptates.', 'uploads/Qz9RwzZon9tTKBf7OkRaihMITfNMY2GMgY6yzwEU.png'),
(2, '2020-11-29 15:12:08', '2020-12-02 20:35:37', 'Managed Web Application', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Vitae soluta, dignissimos aut, assumenda dolore totam natus qui cum vel omnis voluptates.', 'uploads/IiWHFZ8ekQPeCdSnZKSJlftE4UOe2tntSKWwCoz3.png'),
(3, '2020-11-29 15:12:08', '2020-12-02 20:35:49', 'Diployment and Migration', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Vitae soluta, dignissimos aut, assumenda dolore totam natus qui cum vel omnis voluptates.', 'uploads/VG3uqsV2QV0LzwE0oroOzGEwJ1t5OLdMRw69hYq8.png'),
(4, '2020-11-29 15:12:08', '2020-12-02 20:35:59', 'IT & Cloud Managment', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Vitae soluta, dignissimos aut, assumenda dolore totam natus qui cum vel omnis voluptates.', 'uploads/ePTDlzeHUSsmQ15SGnRVCwu3vaggS7TejaBKkUHD.png'),
(5, '2020-11-29 15:12:09', '2020-12-02 20:30:50', 'Networking and Security', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Vitae soluta, dignissimos aut, assumenda dolore totam natus qui cum vel omnis voluptates.', 'uploads/X3D83ogM3AK3nC7cOOCJSStq1y1QugHl6hyvbHZg.png'),
(6, '2020-11-29 15:12:09', '2020-12-02 20:35:06', 'Cyber Security Solutions', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Vitae soluta, dignissimos aut, assumenda dolore totam natus qui cum vel omnis voluptates.', 'uploads/PBRj3jXyA6LYtgYSLdfzGhqM8KVojA42oUxE7iKM.png');

-- --------------------------------------------------------

--
-- Table structure for table `services_sections`
--

CREATE TABLE `services_sections` (
  `id` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `description` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `sub_title` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `services_sections`
--

INSERT INTO `services_sections` (`id`, `created_at`, `updated_at`, `title`, `description`, `sub_title`) VALUES
(1, '2020-11-29 15:12:08', '2020-11-29 15:12:08', 'What we speciaized in', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Vitae soluta, dignissimos aut, assumenda dolore totam natus qui cum vel omnis voluptates.', ' OUR SERVICES ');

-- --------------------------------------------------------

--
-- Table structure for table `team_members`
--

CREATE TABLE `team_members` (
  `id` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `position` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `social_link` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `team_members`
--

INSERT INTO `team_members` (`id`, `created_at`, `updated_at`, `name`, `position`, `social_link`, `image`) VALUES
(2, '2020-11-29 15:12:12', '2020-12-02 20:33:15', 'SLANS ALONS', 'Web Developer', 'http://www.linkedin.com', 'uploads/Xfwe76gDxuvQRQruEbWzS5PUMLwuUR5iLpERWBIU.png'),
(3, '2020-11-29 15:12:12', '2020-12-02 20:33:30', 'JOSHA MICHAL', 'Web Developer', 'http://www.linkedin.com', 'uploads/BmjehUjNLlZuADG4gILLQIyFLdbZtKz9l8xy4Tjd.png'),
(4, '2020-11-29 15:12:12', '2020-12-02 20:37:31', 'JOHAN WRIGHT', 'Web Developer', 'http://www.linkedin.com', 'uploads/tOdnqXnsVLJZDunpXNSjjZVapNh2g1TugvoudBGE.png'),
(6, '2020-11-30 17:53:57', '2020-12-02 20:39:23', 'JOMAN HELAL', 'Company CEO', 'http://www.example.com', 'uploads/fv7W7qUPJ6jTprGTq2Fp9MLVKuTksBHt5RD6b28f.png');

-- --------------------------------------------------------

--
-- Table structure for table `team_sections`
--

CREATE TABLE `team_sections` (
  `id` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `description` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `sub_title` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `team_sections`
--

INSERT INTO `team_sections` (`id`, `created_at`, `updated_at`, `title`, `description`, `sub_title`) VALUES
(1, '2020-11-29 15:12:12', '2020-11-29 15:12:12', 'Awesome Team', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Vitae soluta, dignissimos aut, assumenda dolore totam natus qui cum vel omnis voluptates.', ' Our Team ');

-- --------------------------------------------------------

--
-- Table structure for table `testimonials`
--

CREATE TABLE `testimonials` (
  `id` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `position` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `description` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `testimonials`
--

INSERT INTO `testimonials` (`id`, `created_at`, `updated_at`, `name`, `position`, `description`, `image`) VALUES
(1, '2020-11-29 15:12:13', '2020-12-02 21:21:13', 'Ajoy Das', 'One Of Our Clients', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Vitae soluta, dignissimos aut, assumenda dolore totam natus qui cum vel omnis voluptates.', 'uploads/5ZXLIdWVw2WjTWJchV0SQ2U8Hx7meXTibTcC7gx4.jpeg'),
(2, '2020-11-29 15:12:14', '2020-12-02 21:30:34', 'Sunny Khan', 'One Of Our Clients', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Vitae soluta, dignissimos aut, assumenda dolore totam natus qui cum vel omnis voluptates.', 'uploads/UTwdTGcYGMTedZMUCYiNOuj5Zoge2ugFEDCnlJJ8.jpeg'),
(3, '2020-11-29 15:12:14', '2020-12-02 21:20:45', 'Jebin Khan', 'One Of Our Clients', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Vitae soluta, dignissimos aut, assumenda dolore totam natus qui cum vel omnis voluptates.', 'uploads/k8pk7dFoViDcUe4r10C0d4ofYrIo1SAFpktbQAbW.jpeg');

-- --------------------------------------------------------

--
-- Table structure for table `testimonials_sections`
--

CREATE TABLE `testimonials_sections` (
  `id` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `description` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `sub_title` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `testimonials_sections`
--

INSERT INTO `testimonials_sections` (`id`, `created_at`, `updated_at`, `title`, `description`, `sub_title`) VALUES
(1, '2020-11-29 15:12:13', '2020-11-29 15:12:13', 'What Our Client Say', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Vitae soluta, dignissimos aut, assumenda dolore totam natus qui cum vel omnis voluptates.', '  OUR TESTIMONIALS  ');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Mr.Admin', 'admin@admin.com', '2020-11-29 15:12:05', '$2y$10$saabK/pvV9OeQpRpxwcOfOq7I8fMVNarODigkQ7T/qB/hUZG8taMS', 'bwZ5ElaZyIyLVGGny0jYD7xv9avJcXt65CGA1IMQk9sSWMaxGEBFlB6eFj4d', '2020-11-29 15:12:05', '2020-11-29 15:12:05');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `about_us_features`
--
ALTER TABLE `about_us_features`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `about_us_sections`
--
ALTER TABLE `about_us_sections`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `advantages`
--
ALTER TABLE `advantages`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `contacts`
--
ALTER TABLE `contacts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `contact_sections`
--
ALTER TABLE `contact_sections`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `fact_sections`
--
ALTER TABLE `fact_sections`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indexes for table `features`
--
ALTER TABLE `features`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `feature_sections`
--
ALTER TABLE `feature_sections`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `footer_section`
--
ALTER TABLE `footer_section`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `hero_sections`
--
ALTER TABLE `hero_sections`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `main_features`
--
ALTER TABLE `main_features`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `main_features_sections`
--
ALTER TABLE `main_features_sections`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `nav_bar`
--
ALTER TABLE `nav_bar`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `our_facts`
--
ALTER TABLE `our_facts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indexes for table `questions`
--
ALTER TABLE `questions`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `question_sections`
--
ALTER TABLE `question_sections`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `services`
--
ALTER TABLE `services`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `services_sections`
--
ALTER TABLE `services_sections`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `team_members`
--
ALTER TABLE `team_members`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `team_sections`
--
ALTER TABLE `team_sections`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `testimonials`
--
ALTER TABLE `testimonials`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `testimonials_sections`
--
ALTER TABLE `testimonials_sections`
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
-- AUTO_INCREMENT for table `about_us_features`
--
ALTER TABLE `about_us_features`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `about_us_sections`
--
ALTER TABLE `about_us_sections`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `advantages`
--
ALTER TABLE `advantages`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `contacts`
--
ALTER TABLE `contacts`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `contact_sections`
--
ALTER TABLE `contact_sections`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `fact_sections`
--
ALTER TABLE `fact_sections`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `features`
--
ALTER TABLE `features`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `feature_sections`
--
ALTER TABLE `feature_sections`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `footer_section`
--
ALTER TABLE `footer_section`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `hero_sections`
--
ALTER TABLE `hero_sections`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `main_features`
--
ALTER TABLE `main_features`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `main_features_sections`
--
ALTER TABLE `main_features_sections`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;

--
-- AUTO_INCREMENT for table `nav_bar`
--
ALTER TABLE `nav_bar`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `our_facts`
--
ALTER TABLE `our_facts`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `questions`
--
ALTER TABLE `questions`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `question_sections`
--
ALTER TABLE `question_sections`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `services`
--
ALTER TABLE `services`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `services_sections`
--
ALTER TABLE `services_sections`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `team_members`
--
ALTER TABLE `team_members`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `team_sections`
--
ALTER TABLE `team_sections`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `testimonials`
--
ALTER TABLE `testimonials`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `testimonials_sections`
--
ALTER TABLE `testimonials_sections`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
