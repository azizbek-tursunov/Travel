-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Sep 10, 2023 at 01:53 PM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `Travel`
--

-- --------------------------------------------------------

--
-- Table structure for table `abouts`
--

CREATE TABLE `abouts` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title_uz` varchar(255) NOT NULL,
  `description_uz` text NOT NULL,
  `title2_uz` varchar(255) NOT NULL,
  `description2_uz` text NOT NULL,
  `title_ru` varchar(255) NOT NULL,
  `description_ru` text NOT NULL,
  `title2_ru` varchar(255) NOT NULL,
  `description2_ru` text NOT NULL,
  `title_en` varchar(255) DEFAULT NULL,
  `description_en` text DEFAULT NULL,
  `title2_en` varchar(255) DEFAULT NULL,
  `description2_en` text DEFAULT NULL,
  `banner_image` varchar(255) NOT NULL,
  `image` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `abouts`
--

INSERT INTO `abouts` (`id`, `title_uz`, `description_uz`, `title2_uz`, `description2_uz`, `title_ru`, `description_ru`, `title2_ru`, `description2_ru`, `title_en`, `description_en`, `title2_en`, `description2_en`, `banner_image`, `image`, `created_at`, `updated_at`) VALUES
(1, 'Biz haqimizda', '<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Maxime mollitia,<br>molestiae quas vel sint commodi repudiandae consequuntur voluptatum laborum<br>numquam blanditiis harum quisquam eius sed odit fugiat iusto fuga praesentium<br>optio, eaque rerum! Provident similique accusantium nemo autem. Veritatis<br>obcaecati tenetur iure eius earum ut molestias architecto voluptate aliquam<br>nihil, eveniet aliquid culpa officia aut! Impedit sit sunt quaerat, odit,<br>tenetur error, harum nesciunt ipsum debitis quas aliquid. Reprehenderit,<br>quia. Quo neque error repudiandae fuga? Ipsa laudantium molestias eos&nbsp;<br>sapiente officiis modi at sunt excepturi</p>', 'Biz sizga eng esda qolarli sayohatlarni taklif qilamiz', '<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Maxime mollitia,<br>molestiae quas vel sint commodi repudiandae consequuntur voluptatum laborum<br>numquam blanditiis harum quisquam eius sed odit fugiat iusto fuga praesentium<br>optio, eaque rerum! Provident similique accusantium nemo autem. Veritatis<br>obcaecati tenetur iure eius earum ut molestias architecto voluptate aliquam<br>nihil, eveniet aliquid culpa officia aut! Impedit sit sunt quaerat, odit,<br>tenetur error, harum nesciunt ipsum debitis quas aliquid. Reprehenderit,<br>quia. Quo neque error repudiandae fuga? Ipsa laudantium molestias eos&nbsp;<br>sapiente officiis modi at sunt excepturi</p>', 'о нас', '<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Maxime mollitia,<br>molestiae quas vel sint commodi repudiandae consequuntur voluptatum laborum<br>numquam blanditiis harum quisquam eius sed odit fugiat iusto fuga praesentium<br>optio, eaque rerum! Provident similique accusantium nemo autem. Veritatis<br>obcaecati tenetur iure eius earum ut molestias architecto voluptate aliquam<br>nihil, eveniet aliquid culpa officia aut! Impedit sit sunt quaerat, odit,<br>tenetur error, harum nesciunt ipsum debitis quas aliquid. Reprehenderit,<br>quia. Quo neque error repudiandae fuga? Ipsa laudantium molestias eos&nbsp;<br>sapiente officiis modi at sunt excepturi</p>', 'Предлагаем вам самые запоминающиеся путешествия', '<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Maxime mollitia,<br>molestiae quas vel sint commodi repudiandae consequuntur voluptatum laborum<br>numquam blanditiis harum quisquam eius sed odit fugiat iusto fuga praesentium<br>optio, eaque rerum! Provident similique accusantium nemo autem. Veritatis<br>obcaecati tenetur iure eius earum ut molestias architecto voluptate aliquam<br>nihil, eveniet aliquid culpa officia aut! Impedit sit sunt quaerat, odit,<br>tenetur error, harum nesciunt ipsum debitis quas aliquid. Reprehenderit,<br>quia. Quo neque error repudiandae fuga? Ipsa laudantium molestias eos&nbsp;<br>sapiente officiis modi at sunt excepturi</p>', 'About us ', '<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Maxime mollitia,<br>molestiae quas vel sint commodi repudiandae consequuntur voluptatum laborum<br>numquam blanditiis harum quisquam eius sed odit fugiat iusto fuga praesentium<br>optio, eaque rerum! Provident similique accusantium nemo autem. Veritatis<br>obcaecati tenetur iure eius earum ut molestias architecto voluptate aliquam<br>nihil, eveniet aliquid culpa officia aut! Impedit sit sunt quaerat, odit,<br>tenetur error, harum nesciunt ipsum debitis quas aliquid. Reprehenderit,<br>quia. Quo neque error repudiandae fuga? Ipsa laudantium molestias eos&nbsp;<br>sapiente officiis modi at sunt excepturi</p>', 'We offer you the most memorable trips', '<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Maxime mollitia,<br>molestiae quas vel sint commodi repudiandae consequuntur voluptatum laborum<br>numquam blanditiis harum quisquam eius sed odit fugiat iusto fuga praesentium<br>optio, eaque rerum! Provident similique accusantium nemo autem. Veritatis<br>obcaecati tenetur iure eius earum ut molestias architecto voluptate aliquam<br>nihil, eveniet aliquid culpa officia aut! Impedit sit sunt quaerat, odit,<br>tenetur error, harum nesciunt ipsum debitis quas aliquid. Reprehenderit,<br>quia. Quo neque error repudiandae fuga? Ipsa laudantium molestias eos&nbsp;<br>sapiente officiis modi at sunt excepturi</p>', 'EDujEYJF7V02tVjvn1sHSh6KpnAc2x-metaZ29sZC1saWdodHMtcmVnaXN0YW4tc3F1YXJlLXNhbWFya2FuZC11cmowNDR3cmZsajJleGV5LmpwZw==-.jpg', 'tjABURcVmJwSuN2aUkN600uuLgFUPS-metaYzI4MzJjYzBmNTNhMjcxOGI0NmM4YzI2NmYyN2MzOTIuanBn-.jpg', '2023-09-09 02:15:51', '2023-09-09 02:15:51');

-- --------------------------------------------------------

--
-- Table structure for table `banners`
--

CREATE TABLE `banners` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title_uz` varchar(255) NOT NULL,
  `image_uz` varchar(255) NOT NULL,
  `title_ru` varchar(255) NOT NULL,
  `image_ru` varchar(255) NOT NULL,
  `title_en` varchar(255) NOT NULL,
  `image_en` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `contacts`
--

CREATE TABLE `contacts` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `location` varchar(255) NOT NULL,
  `phone` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `banner_image` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `contacts`
--

INSERT INTO `contacts` (`id`, `location`, `phone`, `email`, `banner_image`, `created_at`, `updated_at`) VALUES
(1, 'Namangan viloyati Namangan shahri Navoiy ko\'chasi 78-uy', '901235467', 'azizbektursunovofficial@gmail.com', 'rkwYK9ccT88ApWkSlg5y6W8MsDIz5a-metaVUstUGFybGlhbWVudC5qcGc=-.jpg', '2023-09-09 02:16:37', '2023-09-09 02:16:37');

-- --------------------------------------------------------

--
-- Table structure for table `destinations`
--

CREATE TABLE `destinations` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name_uz` varchar(255) NOT NULL,
  `description_uz` text DEFAULT NULL,
  `image_uz` varchar(255) NOT NULL,
  `name_ru` varchar(255) NOT NULL,
  `description_ru` text DEFAULT NULL,
  `image_ru` varchar(255) NOT NULL,
  `name_en` varchar(255) DEFAULT NULL,
  `description_en` text DEFAULT NULL,
  `image_en` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `destinations`
--

INSERT INTO `destinations` (`id`, `name_uz`, `description_uz`, `image_uz`, `name_ru`, `description_ru`, `image_ru`, `name_en`, `description_en`, `image_en`, `created_at`, `updated_at`) VALUES
(1, 'Ichki turizm', 'O\'zbekistonning eng tarixiy va esda qolarli joylariga sayohat qiling', 'DAU1O12feZdh8Bhz94MazISvw2BM8d-metaNGM5NGQ0YWNhZmU5NzRiYzJhYjg4MDJjNTU1YzE4NDEuanBn-.jpg', 'Местный туризм', 'Путешествие по самым историческим и памятным местам Узбекистана', 'R3RpqFmR4v6IeX2SWGZ3uuhSKKi4ix-metaNGM5NGQ0YWNhZmU5NzRiYzJhYjg4MDJjNTU1YzE4NDEuanBn-.jpg', 'Domestic tourism', 'Travel to the most historical and memorable places of Uzbekistan', 'Z1HX6rYZUJFVnFtlQ5z020buwxNEAV-metaNGM5NGQ0YWNhZmU5NzRiYzJhYjg4MDJjNTU1YzE4NDEuanBn-.jpg', '2023-09-09 05:13:49', '2023-09-09 05:13:49'),
(2, 'Xalqaro sayohat', 'Biz bilan dunyoning eng qiziq nuqtalariga sayohat qiling', '2NdbjJIxCSkzZmt2FDWEm3G0lmv6Rt-metabG9uZG9uLWxvbmRvbi12ZWxpa29icml0YW5peWEtdGxqNS5qcGc=-.jpg', 'Поездки за границу', 'Путешествуйте с нами по самым интересным местам мира', 'VVRDvrqmCB7jLJ7Rn191Hab4kXg609-metabG9uZG9uLWxvbmRvbi12ZWxpa29icml0YW5peWEtdGxqNS5qcGc=-.jpg', 'International travel', 'Travel with us to the most interesting places in the world', 'Qa0BtbMkX0ryexl7NOtmH8mKXUQ5mq-metabG9uZG9uLWxvbmRvbi12ZWxpa29icml0YW5peWEtdGxqNS5qcGc=-.jpg', '2023-09-09 05:16:39', '2023-09-09 05:16:39'),
(3, 'Osiyoga sayohat', 'Xitoy, Hindistonning ajoyibotlaridan baxramand bo\'lmoqchimisiz, unda bizga murojaat qiling', '4QmEgfWMTzQJ2ejSRFvmOyxflAkGb3-metaYXNpYS0yMjUwLXgtMTUwMC1waWN0dXJlLWExdXRxcndkY2x3NDF3dWsuanBn-.jpg', 'Путешествие в Азию', 'Если вы хотите насладиться чудесами Китая и Индии, свяжитесь с нами.', 'SALmFMgVwtHq3m4r4G6xtJBvjCBC5U-metaYXNpYS0yMjUwLXgtMTUwMC1waWN0dXJlLWExdXRxcndkY2x3NDF3dWsuanBn-.jpg', 'Travel to Asia', 'If you want to enjoy the wonders of China and India, contact us', 'geJdL3gInCUr7B5HS1p20mXPk1DhKP-metaYXNpYS0yMjUwLXgtMTUwMC1waWN0dXJlLWExdXRxcndkY2x3NDF3dWsuanBn-.jpg', '2023-09-09 05:18:50', '2023-09-09 05:18:50');

-- --------------------------------------------------------

--
-- Table structure for table `destination_tours`
--

CREATE TABLE `destination_tours` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `destination_id` bigint(20) UNSIGNED NOT NULL,
  `tour_id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `destination_tours`
--

INSERT INTO `destination_tours` (`id`, `destination_id`, `tour_id`, `created_at`, `updated_at`) VALUES
(1, 3, 1, NULL, NULL),
(2, 2, 2, NULL, NULL),
(3, 1, 3, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
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
-- Table structure for table `footers`
--

CREATE TABLE `footers` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `about_uz` text NOT NULL,
  `contact_uz` text NOT NULL,
  `about_ru` text NOT NULL,
  `contact_ru` text NOT NULL,
  `about_en` text DEFAULT NULL,
  `contact_en` text DEFAULT NULL,
  `social` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_bin NOT NULL CHECK (json_valid(`social`)),
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `footers`
--

INSERT INTO `footers` (`id`, `about_uz`, `contact_uz`, `about_ru`, `contact_ru`, `about_en`, `contact_en`, `social`, `created_at`, `updated_at`) VALUES
(1, '<p><strong>Biz bilan sayohat qilganingizdan xursandmiz</strong></p>', '<p><strong>Bizning manzil:</strong></p><p>Namangan shahri, Namangan viloyati.</p><p><strong>Aloqa uchun telefonlar:</strong></p><p>998901234567</p>', '<p>Мы рады, что вы путешествовали с нами</p>', '<p>Наш адрес:<br><br>Город Наманган, Наманганской области.<br><br>Телефоны для связи:<br><br>998901234567</p>', '<p>We are glad you traveled with us</p>', '<p>Our address:<br><br>Namangan city, Namangan region.<br><br>Phones for contact:<br><br>998901234567</p>', '[{\"name\":\"facebook-f\",\"url\":\"#\"},{\"name\":\"instagram\",\"url\":\"#\"},{\"name\":\"telegram\",\"url\":\"#\"},{\"name\":\"youtube\",\"url\":\"#\"}]', '2023-09-09 02:19:14', '2023-09-09 02:19:14');

-- --------------------------------------------------------

--
-- Table structure for table `home_pages`
--

CREATE TABLE `home_pages` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `banner` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_bin NOT NULL CHECK (json_valid(`banner`)),
  `about_uz` varchar(255) NOT NULL,
  `about_text_uz` varchar(255) NOT NULL,
  `about_ru` varchar(255) NOT NULL,
  `about_text_ru` varchar(255) NOT NULL,
  `about_en` varchar(255) NOT NULL,
  `about_text_en` varchar(255) NOT NULL,
  `image` varchar(255) NOT NULL,
  `image2` varchar(255) NOT NULL,
  `video_text_uz` varchar(255) NOT NULL,
  `video_text_ru` varchar(255) NOT NULL,
  `video_text_en` varchar(255) NOT NULL,
  `video_background` varchar(255) NOT NULL,
  `video_link` varchar(255) NOT NULL,
  `CTa_text_uz` varchar(255) NOT NULL,
  `CTa_text_ru` varchar(255) NOT NULL,
  `CTa_text_en` varchar(255) NOT NULL,
  `CTa_link` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `home_pages`
--

INSERT INTO `home_pages` (`id`, `banner`, `about_uz`, `about_text_uz`, `about_ru`, `about_text_ru`, `about_en`, `about_text_en`, `image`, `image2`, `video_text_uz`, `video_text_ru`, `video_text_en`, `video_background`, `video_link`, `CTa_text_uz`, `CTa_text_ru`, `CTa_text_en`, `CTa_link`, `created_at`, `updated_at`) VALUES
(1, '[{\"title_uz\":\"Biz bilan sayohat qiling\",\"image_uz\":\"8qJwC82hquiuCUqasuaYvZlUvJp0bw-metac2FtYXJrYW5kLmpwZw==-.jpg\",\"title_ru\":\"\\u041f\\u0443\\u0442\\u0435\\u0448\\u0435\\u0441\\u0442\\u0432\\u0443\\u0439\\u0442\\u0435 \\u0441 \\u043d\\u0430\\u043c\\u0438\",\"image_ru\":\"JbCgYRTT6y1bI78ikmZmt5JtRLiSXl-metaNGM5NGQ0YWNhZmU5NzRiYzJhYjg4MDJjNTU1YzE4NDEuanBn-.jpg\",\"title_en\":\"Travel with us\",\"image_en\":\"O9p6aKznTp2kUbdHBqzJ3LjOVOp2bA-metac2FtYXJrYW5kLmpwZw==-.jpg\"},{\"title_uz\":\"Tanlovda adashmang\",\"image_uz\":\"hUeDxyFRb8bbfrqPWuRo6AEp6WJ3wn-metaNjg3MzlmNGRjNDNhMDJiNzRlM2Q3LnBuZw==-.png\",\"title_ru\":\"\\u041d\\u0435 \\u0442\\u0435\\u0440\\u044f\\u0439\\u0442\\u0435\\u0441\\u044c \\u0432 \\u0432\\u044b\\u0431\\u043e\\u0440\\u0435\",\"image_ru\":\"mKeS387mpBJpmgvDcLy6Ew7vUI5HdF-metaYnVraGFyYS5qcGc=-.jpg\",\"title_en\":\"Don\'t get lost in the selection\",\"image_en\":\"qLwa05GhuCW5mDgkIFVbEd9JkWbTc4-metaYnVraGFyYS5qcGc=-.jpg\"}]', 'Mix Travel sayohat agentligi', '<p>Biz Namangan viloyatidagi eng sifatli va eng yaxshi sayohat agentligimiz. Bizning 50 ta davlatda filiallarimiz bor. Bizni tanlab adashmaysiz.</p>', 'Турагентство «Микс Тревел»', '<p>Мы самое качественное и лучшее туристическое агентство в Наманганской области. У нас есть филиалы в 50 странах. Вы не ошибетесь, выбрав нас.</p>', 'Mix Travel travel agency', '<p>We are the best quality and best travel agency in Namangan region. We have branches in 50 countries. You will not go wrong choosing us.</p>', '7908FHyIdpQdDcsCXopYpjH5h8uTxt-metaeGl2YTEuanBn-.jpg', 'ddFoTX935cF13XuRlEqdA9O1zMTc1K-metaeGl2YTMuanBn-.jpg', 'Biz haqimizda videoni tomosha qiling ', 'Посмотрите видео о нас', 'Watch the video about us', 'v3zK9abYqYx6dbgcp3buPNcy8iCB4Z-metac2FtYXJrYW5kLmpwZw==-.jpg', 'https://youtu.be/7xStxJVOJhI?si=6LuFYOLQEvBfZSXp', 'Telegram kanalimizga obuna bo\'ling', 'Подпишитесь на наш Telegram-канал', 'Subscribe to our Telegram channel', '#', '2023-09-09 04:53:45', '2023-09-09 05:10:22');

-- --------------------------------------------------------

--
-- Table structure for table `hotels`
--

CREATE TABLE `hotels` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name_uz` varchar(255) NOT NULL,
  `description_uz` text NOT NULL,
  `name_ru` varchar(255) NOT NULL,
  `description_ru` text NOT NULL,
  `name_en` varchar(255) DEFAULT NULL,
  `description_en` text DEFAULT NULL,
  `link` varchar(255) NOT NULL,
  `image` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `hotels`
--

INSERT INTO `hotels` (`id`, `name_uz`, `description_uz`, `name_ru`, `description_ru`, `name_en`, `description_en`, `link`, `image`, `created_at`, `updated_at`) VALUES
(1, 'Shedevr', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Maxime mollitia,\nmolestiae quas vel sint commodi repudiandae consequuntur voluptatum laborum\nnumquam blanditiis harum quisquam eius sed odit fugiat iusto fuga praesentium\noptio, eaque rerum! Provid', 'Shedevr', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Maxime mollitia,\nmolestiae quas vel sint commodi repudiandae consequuntur voluptatum laborum\nnumquam blanditiis harum quisquam eius sed odit fugiat iusto fuga praesentium\noptio, eaque rerum! Provid', 'Shedevr', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Maxime mollitia,\nmolestiae quas vel sint commodi repudiandae consequuntur voluptatum laborum\nnumquam blanditiis harum quisquam eius sed odit fugiat iusto fuga praesentium\noptio, eaque rerum! Provid', '#', '74eMTmCMIUJ5FWpANDyoh7wJUcjBQP-metaSG90ZWwtR2FsdmV6LWFuZC1TcGEuanBn-.jpg', '2023-09-09 05:41:45', '2023-09-09 05:41:45'),
(2, '\"Orzu Hotel\"', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Maxime mollitia,\nmolestiae quas vel sint commodi repudiandae consequuntur voluptatum laborum\nnumquam blanditiis harum quisquam eius sed odit fugiat iusto fuga praesentium\noptio, eaque rerum! Provid', '\"Orzu Hotel\"', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Maxime mollitia,\nmolestiae quas vel sint commodi repudiandae consequuntur voluptatum laborum\nnumquam blanditiis harum quisquam eius sed odit fugiat iusto fuga praesentium\noptio, eaque rerum! Provid', '\"Orzu Hotel\"', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Maxime mollitia,\nmolestiae quas vel sint commodi repudiandae consequuntur voluptatum laborum\nnumquam blanditiis harum quisquam eius sed odit fugiat iusto fuga praesentium\noptio, eaque rerum! Provid', '#', 'xAWyagAtg7WV1ydH0J2IrEtYtU0DZa-metaTW9udGFnZS1CZXZlcmx5LUhpbGxzLmpwZw==-.jpg', '2023-09-09 05:42:28', '2023-09-09 05:42:28');

-- --------------------------------------------------------

--
-- Table structure for table `logos`
--

CREATE TABLE `logos` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `logo` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `logos`
--

INSERT INTO `logos` (`id`, `logo`, `created_at`, `updated_at`) VALUES
(1, 'bJP4VYMTzSnVeR9u5Xsz37equsFER3-metab3V0cHV0LW9ubGluZXBuZ3Rvb2xzICgyKS5wbmc=-.png', '2023-09-09 02:11:53', '2023-09-09 02:11:53');

-- --------------------------------------------------------

--
-- Table structure for table `messages`
--

CREATE TABLE `messages` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `message` text NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `messages`
--

INSERT INTO `messages` (`id`, `name`, `email`, `message`, `created_at`, `updated_at`) VALUES
(1, 'Azizbek Tursunov', 'azizbektursunovofficial@gmail.com', 'sadasdasdsadasd', '2023-09-09 05:49:11', '2023-09-09 05:49:11');

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_reset_tokens_table', 1),
(3, '2019_08_19_000000_create_failed_jobs_table', 1),
(4, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(5, '2023_09_07_125610_create_tours_table', 1),
(6, '2023_09_07_125627_create_hotels_table', 1),
(7, '2023_09_07_125636_create_destinations_table', 1),
(8, '2023_09_07_125718_create_orders_table', 1),
(9, '2023_09_07_131006_create_destination_tours_table', 1),
(10, '2023_09_07_155704_create_contacts_table', 1),
(11, '2023_09_08_042708_create_footers_table', 1),
(12, '2023_09_08_051902_create_banners_table', 1),
(13, '2023_09_08_084302_create_partners_table', 1),
(14, '2023_09_08_084429_create_abouts_table', 1),
(15, '2023_09_08_120737_create_messages_table', 1),
(16, '2023_09_08_135312_create_home_pages_table', 1),
(17, '2023_09_09_061327_create_logos_table', 1);

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE `orders` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `tour_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `phone` varchar(255) NOT NULL,
  `addition` text DEFAULT NULL,
  `is_contacted` tinyint(1) NOT NULL DEFAULT 0,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `orders`
--

INSERT INTO `orders` (`id`, `tour_id`, `name`, `phone`, `addition`, `is_contacted`, `created_at`, `updated_at`) VALUES
(1, 1, 'Samandar', '+1 (589) 144-7495', 'sdafasfadadasd', 0, '2023-09-09 05:47:03', '2023-09-09 05:47:03');

-- --------------------------------------------------------

--
-- Table structure for table `partners`
--

CREATE TABLE `partners` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `image` varchar(255) NOT NULL,
  `link` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `partners`
--

INSERT INTO `partners` (`id`, `name`, `image`, `link`, `created_at`, `updated_at`) VALUES
(1, 'Uzbekistan Airways', 'SvvJgfBhvVYRQPSsSffAd0vUcP3z0R-metadXpiLWFpcndheXMucG5n-.png', '#', '2023-09-09 05:42:57', '2023-09-09 05:42:57'),
(2, 'Turkish airlines', 'u9GX6NOro9JZVaIluH03ZVXjw9j99t-metaVHVya2lzaC1BaXJsaW5lcy1Mb2dvLTE5OTAtMjAwOC5wbmc=-.png', '#', '2023-09-09 05:43:15', '2023-09-09 05:43:15'),
(3, 'Payme', 'P0fgYUxRUVJwkNw8PvrP4IhXuvoo8u-metaMTIwMHg2MzB3YS5wbmc=-.png', '#', '2023-09-09 05:43:30', '2023-09-09 05:43:30'),
(4, 'Click Evolution', 'JwcvGPelSk41SgAjYlgotfaQNV91bZ-metaY2xpY2tvZy5wbmc=-.png', '#', '2023-09-09 05:43:52', '2023-09-09 05:43:52');

-- --------------------------------------------------------

--
-- Table structure for table `password_reset_tokens`
--

CREATE TABLE `password_reset_tokens` (
  `email` varchar(255) NOT NULL,
  `token` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `personal_access_tokens`
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
-- Table structure for table `tours`
--

CREATE TABLE `tours` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name_uz` varchar(255) NOT NULL,
  `description_uz` text NOT NULL,
  `direction_uz` varchar(255) NOT NULL,
  `image_uz` varchar(255) NOT NULL,
  `name_ru` varchar(255) NOT NULL,
  `description_ru` text NOT NULL,
  `direction_ru` varchar(255) NOT NULL,
  `image_ru` varchar(255) NOT NULL,
  `name_en` varchar(255) DEFAULT NULL,
  `description_en` text DEFAULT NULL,
  `direction_en` varchar(255) DEFAULT NULL,
  `image_en` varchar(255) DEFAULT NULL,
  `price` bigint(20) NOT NULL,
  `banner_image` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `tours`
--

INSERT INTO `tours` (`id`, `name_uz`, `description_uz`, `direction_uz`, `image_uz`, `name_ru`, `description_ru`, `direction_ru`, `image_ru`, `name_en`, `description_en`, `direction_en`, `image_en`, `price`, `banner_image`, `created_at`, `updated_at`) VALUES
(1, 'Hindiston sayohati', '<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Maxime mollitia,<br>molestiae quas vel sint commodi repudiandae consequuntur voluptatum laborum<br>numquam blanditiis harum quisquam eius sed odit fugiat iusto fuga praesentium<br>optio, eaque rerum! Provident similique accusantium nemo autem. Veritatis<br>obcaecati tenetur iure eius earum ut molestias architecto voluptate aliquam<br>nihil, eveniet aliquid culpa officia aut! Impedit sit sunt quaerat, odit,<br>tenetur error, harum nesciunt ipsum debitis quas aliquid. Reprehenderit,<br>quia. Quo neque error repudiandae fuga? Ipsa laudantium molestias eos&nbsp;<br>sapiente officiis modi at sunt excepturi</p>', 'Toshkent-Hindiston, Hindiston-Toshkent', 'YpPgAwVtr7QFh1CNXBrXVBFkiPgbal-metaaW5kaWEuanBn-.jpg', 'тур по Индии', '<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Maxime mollitia,<br>molestiae quas vel sint commodi repudiandae consequuntur voluptatum laborum<br>numquam blanditiis harum quisquam eius sed odit fugiat iusto fuga praesentium<br>optio, eaque rerum! Provident similique accusantium nemo autem. Veritatis<br>obcaecati tenetur iure eius earum ut molestias architecto voluptate aliquam<br>nihil, eveniet aliquid culpa officia aut! Impedit sit sunt quaerat, odit,<br>tenetur error, harum nesciunt ipsum debitis quas aliquid. Reprehenderit,<br>quia. Quo neque error repudiandae fuga? Ipsa laudantium molestias eos&nbsp;<br>sapiente officiis modi at sunt excepturi</p>', 'Ташкент-Индия, Индия-Ташкент', 'jTAlk1asYqq1bzll94i4UFbNSgvTN2-metaaW5kaWEuanBn-.jpg', 'India tour', '<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Maxime mollitia,<br>molestiae quas vel sint commodi repudiandae consequuntur voluptatum laborum<br>numquam blanditiis harum quisquam eius sed odit fugiat iusto fuga praesentium<br>optio, eaque rerum! Provident similique accusantium nemo autem. Veritatis<br>obcaecati tenetur iure eius earum ut molestias architecto voluptate aliquam<br>nihil, eveniet aliquid culpa officia aut! Impedit sit sunt quaerat, odit,<br>tenetur error, harum nesciunt ipsum debitis quas aliquid. Reprehenderit,<br>quia. Quo neque error repudiandae fuga? Ipsa laudantium molestias eos&nbsp;<br>sapiente officiis modi at sunt excepturi</p>', 'Tashkent-India, India-Tashkent', 'xRxi5XjEbmUFEXYm98z89AaGsXBCX7-metaaW5kaWEuanBn-.jpg', 100000, 'niZIA7wKK1nc1iXNhgxnihvOn9en2x-metadGFqLW1haGFsLTQxMDkxMTBfMTkyMC5qcGc=-.jpg', '2023-09-09 05:27:33', '2023-09-09 05:27:33'),
(2, 'Amerika orzusi', '<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Maxime mollitia,<br>molestiae quas vel sint commodi repudiandae consequuntur voluptatum laborum<br>numquam blanditiis harum quisquam eius sed odit fugiat iusto fuga praesentium<br>optio, eaque rerum! Provident similique accusantium nemo autem. Veritatis<br>obcaecati tenetur iure eius earum ut molestias architecto voluptate aliquam<br>nihil, eveniet aliquid culpa officia aut! Impedit sit sunt quaerat, odit,<br>tenetur error, harum nesciunt ipsum debitis quas aliquid. Reprehenderit,<br>quia. Quo neque error repudiandae fuga? Ipsa laudantium molestias eos&nbsp;<br>sapiente officiis modi at sunt excepturi</p>', 'Toshkent-Istanbul-Nyu-york', 'Wkfs8RkOtbyHVRfiJuCpw2FmbP2rA2-metabmV3eW9yay5qcGc=-.jpg', 'Американская мечта', '<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Maxime mollitia,<br>molestiae quas vel sint commodi repudiandae consequuntur voluptatum laborum<br>numquam blanditiis harum quisquam eius sed odit fugiat iusto fuga praesentium<br>optio, eaque rerum! Provident similique accusantium nemo autem. Veritatis<br>obcaecati tenetur iure eius earum ut molestias architecto voluptate aliquam<br>nihil, eveniet aliquid culpa officia aut! Impedit sit sunt quaerat, odit,<br>tenetur error, harum nesciunt ipsum debitis quas aliquid. Reprehenderit,<br>quia. Quo neque error repudiandae fuga? Ipsa laudantium molestias eos&nbsp;<br>sapiente officiis modi at sunt excepturi</p>', 'Ташкент-Стамбул-Нью-Йорк', 'Vk1eprQBTgasZE31JdqPhBh9XnjA4P-metabmV3eW9yay5qcGc=-.jpg', 'The American Dream', '<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Maxime mollitia,<br>molestiae quas vel sint commodi repudiandae consequuntur voluptatum laborum<br>numquam blanditiis harum quisquam eius sed odit fugiat iusto fuga praesentium<br>optio, eaque rerum! Provident similique accusantium nemo autem. Veritatis<br>obcaecati tenetur iure eius earum ut molestias architecto voluptate aliquam<br>nihil, eveniet aliquid culpa officia aut! Impedit sit sunt quaerat, odit,<br>tenetur error, harum nesciunt ipsum debitis quas aliquid. Reprehenderit,<br>quia. Quo neque error repudiandae fuga? Ipsa laudantium molestias eos&nbsp;<br>sapiente officiis modi at sunt excepturi</p>', 'Tashkent-Istanbul-New York', 'xD8uuNy7kLfgrVXPlfE8ZbI79TLUgN-metabmV3eW9yay5qcGc=-.jpg', 7999909, 'sPRtir5R3rvgTrEssEkaK1vBV14FgO-metacG9ydGxhbmQtc3RlZWwtYnJpZGdlLWZyb20tYWJvdmUteHVyZmljMGFjOXVoNWRoci5qcGc=-.jpg', '2023-09-09 05:34:20', '2023-09-09 09:01:41'),
(3, 'Samarqand (imom Buhoriy)', '<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Maxime mollitia,<br>molestiae quas vel sint commodi repudiandae consequuntur voluptatum laborum<br>numquam blanditiis harum quisquam eius sed odit fugiat iusto fuga praesentium<br>optio, eaque rerum! Provident similique accusantium nemo autem. Veritatis<br>obcaecati tenetur iure eius earum ut molestias architecto voluptate aliquam<br>nihil, eveniet aliquid culpa officia aut! Impedit sit sunt quaerat, odit,<br>tenetur error, harum nesciunt ipsum debitis quas aliquid. Reprehenderit,<br>quia. Quo neque error repudiandae fuga? Ipsa laudantium molestias eos&nbsp;<br>sapiente officiis modi at sunt excepturi</p>', 'Namangan-Toshkent-Samarqand', 'KUNh1C0cZhm0IAKeIhQsdemQrFEiVa-metaYzI4MzJjYzBmNTNhMjcxOGI0NmM4YzI2NmYyN2MzOTIuanBn-.jpg', 'Самарканд (Имам Бухари)', '<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Maxime mollitia,<br>molestiae quas vel sint commodi repudiandae consequuntur voluptatum laborum<br>numquam blanditiis harum quisquam eius sed odit fugiat iusto fuga praesentium<br>optio, eaque rerum! Provident similique accusantium nemo autem. Veritatis<br>obcaecati tenetur iure eius earum ut molestias architecto voluptate aliquam<br>nihil, eveniet aliquid culpa officia aut! Impedit sit sunt quaerat, odit,<br>tenetur error, harum nesciunt ipsum debitis quas aliquid. Reprehenderit,<br>quia. Quo neque error repudiandae fuga? Ipsa laudantium molestias eos&nbsp;<br>sapiente officiis modi at sunt excepturi</p>', 'Наманган-Ташкент-Самарканд', 'r3C5FKZXgu7JtiB8FEDFCfcfsvwUxf-metaYzI4MzJjYzBmNTNhMjcxOGI0NmM4YzI2NmYyN2MzOTIuanBn-.jpg', 'Samarkand (Imam Bukhari)', '<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Maxime mollitia,<br>molestiae quas vel sint commodi repudiandae consequuntur voluptatum laborum<br>numquam blanditiis harum quisquam eius sed odit fugiat iusto fuga praesentium<br>optio, eaque rerum! Provident similique accusantium nemo autem. Veritatis<br>obcaecati tenetur iure eius earum ut molestias architecto voluptate aliquam<br>nihil, eveniet aliquid culpa officia aut! Impedit sit sunt quaerat, odit,<br>tenetur error, harum nesciunt ipsum debitis quas aliquid. Reprehenderit,<br>quia. Quo neque error repudiandae fuga? Ipsa laudantium molestias eos&nbsp;<br>sapiente officiis modi at sunt excepturi</p>', 'Namangan-Tashkent-Samarkand', 'AxMiwF6Abl0FamO7XAa1z2kSnbyu3W-metaYzI4MzJjYzBmNTNhMjcxOGI0NmM4YzI2NmYyN2MzOTIuanBn-.jpg', 424242342, 'B0tFNXUXVweUFNwQqAspybJ7jhAYpv-metaZ29sZC1saWdodHMtcmVnaXN0YW4tc3F1YXJlLXNhbWFya2FuZC11cmowNDR3cmZsajJleGV5LmpwZw==-.jpg', '2023-09-09 05:39:33', '2023-09-09 05:39:33');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) NOT NULL,
  `remember_token` varchar(100) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Azizbek', 'admin@mail.com', NULL, '$2y$10$dJDNp6uZ.mdIQTtFlg2Fn.uhLyZilwGqbLADsOrxLnciY0x1GMwsG', 'OJuHBchXr7iK84IV5Vu8MWdqViiy2ktaZ93X3ayoAGy8UZQzapE679Vc09mz', '2023-09-09 02:11:06', '2023-09-09 02:11:06');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `abouts`
--
ALTER TABLE `abouts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `banners`
--
ALTER TABLE `banners`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `contacts`
--
ALTER TABLE `contacts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `destinations`
--
ALTER TABLE `destinations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `destination_tours`
--
ALTER TABLE `destination_tours`
  ADD PRIMARY KEY (`id`),
  ADD KEY `destination_tours_destination_id_foreign` (`destination_id`),
  ADD KEY `destination_tours_tour_id_foreign` (`tour_id`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indexes for table `footers`
--
ALTER TABLE `footers`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `home_pages`
--
ALTER TABLE `home_pages`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `hotels`
--
ALTER TABLE `hotels`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `logos`
--
ALTER TABLE `logos`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `messages`
--
ALTER TABLE `messages`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`id`),
  ADD KEY `orders_tour_id_foreign` (`tour_id`);

--
-- Indexes for table `partners`
--
ALTER TABLE `partners`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `password_reset_tokens`
--
ALTER TABLE `password_reset_tokens`
  ADD PRIMARY KEY (`email`);

--
-- Indexes for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

--
-- Indexes for table `tours`
--
ALTER TABLE `tours`
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
-- AUTO_INCREMENT for table `abouts`
--
ALTER TABLE `abouts`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `banners`
--
ALTER TABLE `banners`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `contacts`
--
ALTER TABLE `contacts`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `destinations`
--
ALTER TABLE `destinations`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `destination_tours`
--
ALTER TABLE `destination_tours`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `footers`
--
ALTER TABLE `footers`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `home_pages`
--
ALTER TABLE `home_pages`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `hotels`
--
ALTER TABLE `hotels`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `logos`
--
ALTER TABLE `logos`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `messages`
--
ALTER TABLE `messages`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `orders`
--
ALTER TABLE `orders`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `partners`
--
ALTER TABLE `partners`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tours`
--
ALTER TABLE `tours`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `destination_tours`
--
ALTER TABLE `destination_tours`
  ADD CONSTRAINT `destination_tours_destination_id_foreign` FOREIGN KEY (`destination_id`) REFERENCES `destinations` (`id`),
  ADD CONSTRAINT `destination_tours_tour_id_foreign` FOREIGN KEY (`tour_id`) REFERENCES `tours` (`id`);

--
-- Constraints for table `orders`
--
ALTER TABLE `orders`
  ADD CONSTRAINT `orders_tour_id_foreign` FOREIGN KEY (`tour_id`) REFERENCES `tours` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
