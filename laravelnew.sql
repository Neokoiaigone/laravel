-- phpMyAdmin SQL Dump
-- version 4.6.4
-- https://www.phpmyadmin.net/
--
-- Client :  localhost:8889
-- Généré le :  Mar 02 Mai 2017 à 11:37
-- Version du serveur :  5.6.28
-- Version de PHP :  7.0.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";

--
-- Base de données :  `laravel-new`
--

-- --------------------------------------------------------

--
-- Structure de la table `articles`
--

CREATE TABLE `articles` (
  `id` int(10) UNSIGNED NOT NULL,
  `title` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `content` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `images` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_id` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Contenu de la table `articles`
--

INSERT INTO `articles` (`id`, `title`, `content`, `images`, `user_id`, `created_at`, `updated_at`) VALUES
(1, 'Prof.', 'Quisquam ducimus fuga est harum laboriosam. Aspernatur saepe maiores qui sapiente labore error voluptatibus. Autem deserunt nemo ea sequi enim quae vitae. Quas sit eveniet voluptatibus aliquam at. Aliquam qui occaecati fuga aliquam.', 'http://lorempixel.com/256/256/?58449', 25, '2017-02-16 22:36:45', '2017-02-16 22:36:45'),
(2, 'Dr.', 'Vero aut ut recusandae laborum facere qui id eum. Facilis possimus aut iusto dolores quas.', 'http://lorempixel.com/256/256/?30628', 12, '2017-02-16 22:36:45', '2017-02-16 22:36:45'),
(3, 'Dr.', 'Et aut repudiandae consequatur consequatur. Eveniet vero consequatur a quae similique sed non. Animi libero quae perferendis. Minus quaerat minus dolorum assumenda totam sit eum.', 'http://lorempixel.com/256/256/?37487', 6, '2017-02-16 22:36:45', '2017-02-16 22:36:45'),
(5, 'Dr.', 'Minima aut omnis alias itaque rem temporibus ad. Quibusdam qui aut nihil veniam quis. Voluptatum esse omnis quo in et.', 'http://lorempixel.com/256/256/?20715', 23, '2017-02-16 22:36:45', '2017-02-16 22:36:45'),
(6, 'Dr.', 'Nemo est aut sunt veniam ut ut. Accusantium ullam quis magnam quaerat ducimus.', 'http://lorempixel.com/256/256/?71050', 13, '2017-02-16 22:36:45', '2017-02-16 22:36:45'),
(7, 'Ms.', 'Quaerat ex consequuntur maiores. Illum autem tempore provident reprehenderit. Quisquam deleniti sit dolore omnis aut. Nostrum et minima ab totam illum.', 'http://lorempixel.com/256/256/?82365', 29, '2017-02-16 22:36:45', '2017-02-16 22:36:45'),
(8, 'Mr.', 'Sunt suscipit necessitatibus sit quas. Id qui ea ducimus expedita. Vel dolor reiciendis tempora recusandae omnis perspiciatis.', 'http://lorempixel.com/256/256/?94166', 7, '2017-02-16 22:36:45', '2017-02-16 22:36:45'),
(9, 'Prof.', 'Dolorum voluptas rerum molestiae aut est ducimus. Aperiam quos hic porro. Autem voluptas vitae soluta earum omnis rerum. Quis sunt enim dolores aut iste.', 'http://lorempixel.com/256/256/?58915', 8, '2017-02-16 22:36:45', '2017-02-16 22:36:45'),
(10, 'Mrs.', 'Ducimus enim quis in quia ipsam. Et et labore et ullam consequatur. Saepe odit sit perspiciatis. Est tempore corrupti ratione autem neque.', 'http://lorempixel.com/256/256/?80061', 28, '2017-02-16 22:36:45', '2017-02-16 22:36:45'),
(11, 'Dr.', 'Optio voluptatibus illum qui minus cupiditate aliquam. Quia velit ut accusantium accusamus. Explicabo quod sit eos rem ducimus ut illo eveniet.', 'http://lorempixel.com/256/256/?87581', 7, '2017-02-16 22:36:45', '2017-02-16 22:36:45'),
(12, 'Mr.', 'Laborum omnis consequatur delectus consequatur dolor dolores tempore. Vel voluptatem mollitia et nemo.', 'http://lorempixel.com/256/256/?39145', 2, '2017-02-16 22:36:45', '2017-02-16 22:36:45'),
(13, 'Miss', 'Repellendus est quod voluptatibus amet aut repudiandae. Voluptatem iste at qui impedit quo quia. Laudantium quia amet rerum harum nostrum. Quis expedita et cupiditate labore totam.', 'http://lorempixel.com/256/256/?92848', 13, '2017-02-16 22:36:45', '2017-02-16 22:36:45'),
(14, 'Mr.', 'Quo quidem hic vel necessitatibus. Alias quaerat autem architecto est. Molestiae deleniti ipsam itaque commodi dolores quaerat.', 'http://lorempixel.com/256/256/?77190', 4, '2017-02-16 22:36:45', '2017-02-16 22:36:45'),
(15, 'Dr.', 'Voluptates pariatur eum soluta architecto cupiditate iste. Nam iusto ducimus ut ipsum repudiandae. Consequuntur aliquid atque corrupti et possimus assumenda similique.', 'http://lorempixel.com/256/256/?37784', 11, '2017-02-16 22:36:45', '2017-02-16 22:36:45'),
(16, 'Prof.', 'Eum doloremque odio illo fugit. Sunt non dolorem esse at sit. Quas vel magnam voluptatem.', 'http://lorempixel.com/256/256/?75988', 6, '2017-02-16 22:36:45', '2017-02-16 22:36:45'),
(17, 'Dr.', 'Dolores ea laboriosam ex ipsam amet numquam. Ea repudiandae praesentium nihil ea. Quia in porro doloremque suscipit nihil.', 'http://lorempixel.com/256/256/?35348', 1, '2017-02-16 22:36:45', '2017-02-16 22:36:45'),
(18, 'Dr.', 'Neque sit nisi reprehenderit. Enim qui quo numquam inventore voluptatem. Tempore temporibus odit illum fugiat cum ut itaque. Consequatur aut quidem esse id molestiae.', 'http://lorempixel.com/256/256/?71390', 28, '2017-02-16 22:36:45', '2017-02-16 22:36:45'),
(19, 'Ms.', 'Nemo porro excepturi dignissimos aut quis ut et. Iste maxime quidem reiciendis ipsam reprehenderit. Ut hic aut quam quisquam cum sunt non repudiandae. Quo quo molestias unde aut. Animi ipsam est dolor vero cum.', 'http://lorempixel.com/256/256/?38920', 27, '2017-02-16 22:36:45', '2017-02-16 22:36:45'),
(20, 'Mr.', 'Repellendus sapiente omnis placeat eaque maxime voluptatem aliquam. Sed corrupti aliquam voluptas ut. Eos labore et qui similique dicta id dolorem.', 'http://lorempixel.com/256/256/?13136', 16, '2017-02-16 22:36:45', '2017-02-16 22:36:45'),
(21, 'Ms.', 'Nulla consequatur architecto a qui non aliquam nesciunt. Magni ullam reiciendis veritatis possimus culpa qui. Qui et officiis commodi fugit. Consequuntur corrupti rerum assumenda ut et aut cum. Atque provident in non asperiores.', 'http://lorempixel.com/256/256/?69332', 3, '2017-02-16 22:36:45', '2017-02-16 22:36:45'),
(22, 'Mrs.', 'Fugiat et recusandae harum reprehenderit aut. Culpa alias harum excepturi mollitia. Doloremque odio perferendis porro sed dignissimos delectus ratione. Ipsa aut vitae ut quibusdam est vel.', 'http://lorempixel.com/256/256/?27128', 7, '2017-02-16 22:36:45', '2017-02-16 22:36:45'),
(23, 'Dr.', 'Ipsam aut ex voluptatibus qui. Eligendi nam magni sint assumenda. Nam assumenda quas in est sunt quia dolorem. Voluptatem vel qui odio voluptate dolorum. Deleniti est asperiores aut et.', 'http://lorempixel.com/256/256/?26966', 15, '2017-02-16 22:36:45', '2017-02-16 22:36:45'),
(24, 'Prof.', 'Temporibus doloribus dolores magni. Consectetur omnis et iure perspiciatis laudantium blanditiis quibusdam. Optio voluptates fuga quia velit.', 'http://lorempixel.com/256/256/?74091', 5, '2017-02-16 22:36:45', '2017-02-16 22:36:45'),
(27, 'Prof.', 'Voluptas molestiae earum similique sint cumque officiis maxime odio. Nam labore eos est nam ratione. Aspernatur suscipit molestiae et et sunt.', 'http://lorempixel.com/256/256/?79948', 6, '2017-02-16 22:36:45', '2017-02-16 22:36:45'),
(28, 'Dr.', 'Facilis nobis in culpa eius et. Ab voluptatum illo voluptatum et rerum. Magni et recusandae sed quisquam consequatur sit atque dolores.', 'http://lorempixel.com/256/256/?39170', 8, '2017-02-16 22:36:45', '2017-02-16 22:36:45'),
(31, 'okzodkzodkozkodkzokdIIUIUI', 'dzozodkzodkzodkozkdozkdok9IIIOI', 'https://i.ytimg.com/vi/BGtROJeMPeE/maxresdefault.jpg', 32, '2017-02-16 23:07:13', '2017-02-17 14:47:30'),
(32, 'TYUIOIUYTRTYUIOP', 'JHKLMKJHGJKLMLKJHJKLMKJHJ', 'https://i.ytimg.com/vi/BGtROJeMPeE/maxresdefault.jpg', 31, '2017-02-17 14:48:47', '2017-02-17 14:48:47'),
(33, 'DRR.', 'lkkdklksldksldklskdlksldksldk', 'https://i.ytimg.com/vi/BGtROJeMPeE/maxresdefault.jpg', 32, '2017-02-17 16:11:15', '2017-02-18 04:23:47');

-- --------------------------------------------------------

--
-- Structure de la table `comments`
--

CREATE TABLE `comments` (
  `id` int(10) UNSIGNED NOT NULL,
  `content` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `article_id` int(10) UNSIGNED NOT NULL,
  `user_id` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Contenu de la table `comments`
--

INSERT INTO `comments` (`id`, `content`, `article_id`, `user_id`, `created_at`, `updated_at`) VALUES
(2, 'Debitis fugit incidunt quos expedita. Nihil dolor voluptatem consequatur. Natus voluptatem blanditiis ut quo qui dolores at autem. Ut maxime est et.', 11, 9, '2017-02-16 22:36:45', '2017-02-16 22:36:45'),
(3, 'Aut enim consectetur accusamus reprehenderit excepturi nisi eum nisi. Nulla inventore vitae deleniti. Distinctio in non eum tempora vel eos. Vel tenetur voluptas voluptatem expedita unde ullam.', 20, 8, '2017-02-16 22:36:45', '2017-02-16 22:36:45'),
(4, 'Blanditiis nihil porro aperiam. Voluptatem quia consectetur repellat consequatur. Quo eum sed et in.', 23, 21, '2017-02-16 22:36:45', '2017-02-16 22:36:45'),
(6, 'Voluptas magni et et eum assumenda sed. Sit nihil ipsum dolore consequatur nobis rerum odit occaecati. Ut dolorem exercitationem cum autem ut voluptatem ea rerum. Natus consectetur eius dolores natus quia reiciendis perspiciatis.', 10, 25, '2017-02-16 22:36:45', '2017-02-16 22:36:45'),
(7, 'Recusandae recusandae molestias ab incidunt. Assumenda sapiente perferendis et.', 14, 9, '2017-02-16 22:36:45', '2017-02-16 22:36:45'),
(8, 'Fugiat consequuntur quo sint saepe. In sit nobis libero consequatur animi et. Repellat dolorem ipsam voluptatem non libero. Nulla iusto praesentium autem nemo quod dolor sequi.', 17, 24, '2017-02-16 22:36:45', '2017-02-16 22:36:45'),
(9, 'Sapiente quae qui distinctio. Enim sint asperiores magnam aut eligendi. Soluta earum ducimus repellat sed quo omnis amet. Sit aut nostrum voluptate sed odio ab voluptas.', 24, 20, '2017-02-16 22:36:45', '2017-02-16 22:36:45'),
(10, 'Id voluptate occaecati rem odio ut maiores illo. Eum inventore nesciunt repellendus provident adipisci consequatur nihil. Est sit voluptatum maiores necessitatibus aperiam minima explicabo sit.', 1, 8, '2017-02-16 22:36:45', '2017-02-16 22:36:45'),
(11, 'Ex mollitia recusandae dolor. Quas ipsam cupiditate nihil facere. Enim officia non sapiente eum ipsam. Debitis rerum molestiae enim.', 11, 7, '2017-02-16 22:36:45', '2017-02-16 22:36:45'),
(12, 'Voluptatem error tenetur ab accusantium doloremque non. Eum similique quis a. Earum illo earum dolorem. Officia consequuntur omnis repudiandae odit accusamus.', 27, 11, '2017-02-16 22:36:45', '2017-02-16 22:36:45'),
(13, 'Laboriosam et ut quia aspernatur magnam iure. Optio impedit ad et. Qui sunt nostrum expedita quia vel expedita. Et nostrum harum porro doloribus fuga omnis nostrum.', 21, 30, '2017-02-16 22:36:45', '2017-02-16 22:36:45'),
(15, 'Voluptates accusantium deleniti doloremque. Recusandae et labore consequatur voluptatem voluptatem labore mollitia. Omnis aperiam consequatur et pariatur laboriosam vitae et perferendis.', 18, 11, '2017-02-16 22:36:45', '2017-02-16 22:36:45'),
(16, 'Praesentium cum harum eaque ullam et similique. Dicta alias velit ipsum aliquid. Veniam consequuntur saepe voluptatem. Consequatur laudantium saepe eaque eligendi. Quod consequatur temporibus distinctio cum qui tenetur.', 27, 9, '2017-02-16 22:36:45', '2017-02-16 22:36:45'),
(17, 'Labore occaecati neque ullam velit dolorum eius nesciunt. At expedita nobis qui cumque tempora perferendis optio dolorem.', 24, 16, '2017-02-16 22:36:45', '2017-02-16 22:36:45'),
(18, 'Veniam possimus minus eveniet. Modi repudiandae sequi voluptatum est blanditiis facere inventore eum. Nulla rerum quod ad qui nisi. Praesentium eveniet nam quas.', 2, 27, '2017-02-16 22:36:45', '2017-02-16 22:36:45'),
(20, 'Cum blanditiis repellat iste quam tenetur ratione numquam. Minus quibusdam fugit laborum velit facere voluptas. Qui qui qui ea quo est nihil harum laudantium.', 12, 6, '2017-02-16 22:36:45', '2017-02-16 22:36:45'),
(21, 'Esse beatae consequatur repellat sed nihil earum architecto. Deleniti vel eligendi aut consequuntur voluptatem dolorem vel.', 13, 1, '2017-02-16 22:36:45', '2017-02-16 22:36:45'),
(23, 'Ut quia laboriosam voluptatem inventore. Sint ea aut laborum libero ducimus illo. Dolores ea et consectetur cum magni vel corrupti. Molestiae consequuntur quo laboriosam provident provident.', 12, 21, '2017-02-16 22:36:45', '2017-02-16 22:36:45'),
(24, 'Et similique iusto qui non quaerat totam unde. Cumque consequatur tenetur deleniti illum dolorem. Voluptate atque sunt voluptatibus. Ea rerum quam doloribus sit.', 22, 17, '2017-02-16 22:36:45', '2017-02-16 22:36:45'),
(25, 'Est assumenda vel est incidunt aut voluptate. Quia at explicabo assumenda laborum qui ut voluptatem. Placeat expedita modi sed id officia dolor dolor.', 1, 16, '2017-02-16 22:36:45', '2017-02-16 22:36:45'),
(26, 'Impedit eos perspiciatis rem consequatur accusantium consequatur. Dolores aspernatur nam sit consequatur praesentium.', 22, 10, '2017-02-16 22:36:45', '2017-02-16 22:36:45'),
(27, 'Aut veritatis expedita ipsum et asperiores et sit. Sunt minima dolores quo voluptatem id ipsa rem. Illum illum consequatur repellendus alias quae aperiam. Modi sint consequatur laborum aspernatur consectetur minima modi.', 16, 10, '2017-02-16 22:36:45', '2017-02-16 22:36:45'),
(28, 'In blanditiis fuga facere. Dolor dolorem nisi et sint necessitatibus eius quo. Blanditiis et fugiat facere suscipit iusto sed quam.', 27, 29, '2017-02-16 22:36:45', '2017-02-16 22:36:45'),
(29, 'Libero omnis odio praesentium reprehenderit ipsam odio. Aut vitae dicta culpa omnis dolores. Fugit animi magni soluta ea. Aspernatur voluptatem laudantium velit minus consectetur error assumenda.', 14, 30, '2017-02-16 22:36:45', '2017-02-16 22:36:45'),
(30, 'Et est sit velit molestiae. Illum ut distinctio dolor voluptatibus reiciendis. Et libero corrupti quasi modi pariatur.', 23, 29, '2017-02-16 22:36:45', '2017-02-16 22:36:45'),
(31, 'YUIOOIUYTYUIOP7890', 28, 31, '2017-02-16 22:38:17', '2017-02-16 22:38:23'),
(32, 'OKOKOKOKOKOKOKO', 28, 31, '2017-02-16 22:48:48', '2017-02-16 22:48:48'),
(33, 'odkozkdozkdokzodkzod', 28, 32, '2017-02-16 23:06:28', '2017-02-16 23:06:28'),
(34, '6789876567890°', 31, 32, '2017-02-16 23:13:43', '2017-02-16 23:13:43'),
(35, 'UUHUHUHUHUHU8988888IJIJIIJIJJ', 31, 31, '2017-02-16 23:15:09', '2017-02-17 14:14:21'),
(36, 'klkkklklklklklklklkl', 31, 31, '2017-02-17 14:47:43', '2017-02-17 14:47:43'),
(37, 'UYTYUIOIUYTYUIOP99999', 32, 31, '2017-02-17 15:15:25', '2017-02-17 15:19:19'),
(38, 'kdkslkdlskldkslkdlskd', 32, 32, '2017-02-17 16:08:29', '2017-02-17 16:08:29'),
(39, 'YGYGYGYGYGYGY00oooo11111', 33, 31, '2017-02-17 22:08:54', '2017-02-25 18:48:04'),
(40, 'IJIJIJIJIJIJIIJI', 33, 31, '2017-02-18 03:49:57', '2017-02-18 03:49:57'),
(41, 'ssssssssssssss', 33, 31, '2017-02-25 11:05:02', '2017-02-25 11:05:02');

-- --------------------------------------------------------

--
-- Structure de la table `forms`
--

CREATE TABLE `forms` (
  `id` int(10) UNSIGNED NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `content` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Contenu de la table `forms`
--

INSERT INTO `forms` (`id`, `email`, `content`, `created_at`, `updated_at`) VALUES
(1, 'louisalexandrebricq@yahoo.fr', 'blablablabla', '2017-02-17 21:32:58', '2017-02-17 21:32:58'),
(3, 'louisalexandrebricq94@yahoo.fr', 'fpleplepfleplfpelfpe', '2017-02-17 22:58:12', '2017-02-17 22:58:12');

-- --------------------------------------------------------

--
-- Structure de la table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Contenu de la table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2017_02_08_110408_create_articles_table', 1),
(4, '2017_02_08_111820_foreign_key', 1),
(5, '2017_02_12_162349_create_comments_table', 1),
(6, '2017_02_12_170207__foreign_keycomm', 1),
(7, '2017_02_12_233951_create_forms_table', 1);

-- --------------------------------------------------------

--
-- Structure de la table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Structure de la table `users`
--

CREATE TABLE `users` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `isAdmin` tinyint(1) NOT NULL DEFAULT '0',
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Contenu de la table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `password`, `isAdmin`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Dr. Floy Hessel', 'abelardo.schoen@example.com', '$2y$10$k8AaaNEtVWUkII8XqfptJ.JR7IXscDnyDCKOJh21eT5quFCJi0g8.', 0, 'CX7j5C0bQR', '2017-02-16 22:36:45', '2017-02-16 22:36:45'),
(2, 'Taryn Keebler', 'fabiola.mcglynn@example.org', '$2y$10$k8AaaNEtVWUkII8XqfptJ.JR7IXscDnyDCKOJh21eT5quFCJi0g8.', 0, 'bsZprg8csM', '2017-02-16 22:36:45', '2017-02-16 22:36:45'),
(3, 'Merritt Wiegand', 'ryleigh.mcdermott@example.com', '$2y$10$k8AaaNEtVWUkII8XqfptJ.JR7IXscDnyDCKOJh21eT5quFCJi0g8.', 0, 'snIyAIz2vj', '2017-02-16 22:36:45', '2017-02-16 22:36:45'),
(4, 'Mr. Melvin Dicki DVM', 'joyce48@example.org', '$2y$10$k8AaaNEtVWUkII8XqfptJ.JR7IXscDnyDCKOJh21eT5quFCJi0g8.', 0, 'otYYIXMHqv', '2017-02-16 22:36:45', '2017-02-16 22:36:45'),
(5, 'Florida Reilly', 'augustine71@example.net', '$2y$10$k8AaaNEtVWUkII8XqfptJ.JR7IXscDnyDCKOJh21eT5quFCJi0g8.', 0, 'q1fqoxLoDa', '2017-02-16 22:36:45', '2017-02-16 22:36:45'),
(6, 'Lyric Orn DDS', 'darby.lehner@example.org', '$2y$10$k8AaaNEtVWUkII8XqfptJ.JR7IXscDnyDCKOJh21eT5quFCJi0g8.', 0, 'UN1EBb0o7n', '2017-02-16 22:36:45', '2017-02-16 22:36:45'),
(7, 'Mr. Craig Lesch', 'wyman.daniela@example.net', '$2y$10$k8AaaNEtVWUkII8XqfptJ.JR7IXscDnyDCKOJh21eT5quFCJi0g8.', 0, 'nu4HJgysgm', '2017-02-16 22:36:45', '2017-02-16 22:36:45'),
(8, 'Elody Wolff', 'ujakubowski@example.com', '$2y$10$k8AaaNEtVWUkII8XqfptJ.JR7IXscDnyDCKOJh21eT5quFCJi0g8.', 0, 'hrVoqWt3gO', '2017-02-16 22:36:45', '2017-02-16 22:36:45'),
(9, 'Deontae Osinski', 'nhoppe@example.org', '$2y$10$k8AaaNEtVWUkII8XqfptJ.JR7IXscDnyDCKOJh21eT5quFCJi0g8.', 0, 'dP4jAWFLQM', '2017-02-16 22:36:45', '2017-02-16 22:36:45'),
(10, 'Kaci Stamm', 'samir.leuschke@example.net', '$2y$10$k8AaaNEtVWUkII8XqfptJ.JR7IXscDnyDCKOJh21eT5quFCJi0g8.', 0, 'aMCyoXZ5gX', '2017-02-16 22:36:45', '2017-02-16 22:36:45'),
(11, 'Dorthy O\'Connell', 'trevion57@example.org', '$2y$10$k8AaaNEtVWUkII8XqfptJ.JR7IXscDnyDCKOJh21eT5quFCJi0g8.', 0, 'LSfhViuc8I', '2017-02-16 22:36:45', '2017-02-16 22:36:45'),
(12, 'Mrs. Daphnee Rogahn DDS', 'margarette06@example.org', '$2y$10$k8AaaNEtVWUkII8XqfptJ.JR7IXscDnyDCKOJh21eT5quFCJi0g8.', 0, 'Z3XwxXhz3J', '2017-02-16 22:36:45', '2017-02-16 22:36:45'),
(13, 'Mr. Chet Purdy', 'frederick23@example.org', '$2y$10$k8AaaNEtVWUkII8XqfptJ.JR7IXscDnyDCKOJh21eT5quFCJi0g8.', 0, 'dEHZepSZIg', '2017-02-16 22:36:45', '2017-02-16 22:36:45'),
(14, 'Maggie Daugherty', 'ilarkin@example.com', '$2y$10$k8AaaNEtVWUkII8XqfptJ.JR7IXscDnyDCKOJh21eT5quFCJi0g8.', 0, 'i2z5dofID5', '2017-02-16 22:36:45', '2017-02-16 22:36:45'),
(15, 'Faustino Bechtelar', 'linwood.kunze@example.org', '$2y$10$k8AaaNEtVWUkII8XqfptJ.JR7IXscDnyDCKOJh21eT5quFCJi0g8.', 0, '3rJMIv3DL1', '2017-02-16 22:36:45', '2017-02-16 22:36:45'),
(16, 'Grace Boehm', 'freddie.windler@example.net', '$2y$10$k8AaaNEtVWUkII8XqfptJ.JR7IXscDnyDCKOJh21eT5quFCJi0g8.', 0, 'hDl1NpHcW5', '2017-02-16 22:36:45', '2017-02-16 22:36:45'),
(17, 'Candido Lesch', 'zhowe@example.net', '$2y$10$k8AaaNEtVWUkII8XqfptJ.JR7IXscDnyDCKOJh21eT5quFCJi0g8.', 0, 'zziTz3JvxV', '2017-02-16 22:36:45', '2017-02-16 22:36:45'),
(18, 'Prof. Terrence Sipes III', 'isobel64@example.com', '$2y$10$k8AaaNEtVWUkII8XqfptJ.JR7IXscDnyDCKOJh21eT5quFCJi0g8.', 0, 'Eq4qVmDbWg', '2017-02-16 22:36:45', '2017-02-16 22:36:45'),
(19, 'Kiana Purdy', 'general75@example.com', '$2y$10$k8AaaNEtVWUkII8XqfptJ.JR7IXscDnyDCKOJh21eT5quFCJi0g8.', 0, '8WjNYRazPK', '2017-02-16 22:36:45', '2017-02-16 22:36:45'),
(20, 'Manuel Bernier', 'reva79@example.net', '$2y$10$k8AaaNEtVWUkII8XqfptJ.JR7IXscDnyDCKOJh21eT5quFCJi0g8.', 0, 'Tc8HjK9E0H', '2017-02-16 22:36:45', '2017-02-16 22:36:45'),
(21, 'Sydnie Trantow', 'kolby.hoppe@example.net', '$2y$10$k8AaaNEtVWUkII8XqfptJ.JR7IXscDnyDCKOJh21eT5quFCJi0g8.', 0, 'R1ZRKAkTZK', '2017-02-16 22:36:45', '2017-02-16 22:36:45'),
(22, 'Florence Batz', 'mae13@example.org', '$2y$10$k8AaaNEtVWUkII8XqfptJ.JR7IXscDnyDCKOJh21eT5quFCJi0g8.', 0, 'kNY1bO193k', '2017-02-16 22:36:45', '2017-02-16 22:36:45'),
(23, 'Dr. Delbert Murazik', 'sincere66@example.org', '$2y$10$k8AaaNEtVWUkII8XqfptJ.JR7IXscDnyDCKOJh21eT5quFCJi0g8.', 0, 'hgazZppyU5', '2017-02-16 22:36:45', '2017-02-16 22:36:45'),
(24, 'Lemuel Kuhn PhD', 'rmonahan@example.com', '$2y$10$k8AaaNEtVWUkII8XqfptJ.JR7IXscDnyDCKOJh21eT5quFCJi0g8.', 0, 'AWaT6r1iM6', '2017-02-16 22:36:45', '2017-02-16 22:36:45'),
(25, 'Dr. Carson Altenwerth MD', 'gianni14@example.org', '$2y$10$k8AaaNEtVWUkII8XqfptJ.JR7IXscDnyDCKOJh21eT5quFCJi0g8.', 0, 'dI1BPg1fqv', '2017-02-16 22:36:45', '2017-02-16 22:36:45'),
(26, 'Camila Robel', 'barton.delphine@example.net', '$2y$10$k8AaaNEtVWUkII8XqfptJ.JR7IXscDnyDCKOJh21eT5quFCJi0g8.', 0, '4lOo004gji', '2017-02-16 22:36:45', '2017-02-16 22:36:45'),
(27, 'Neoma Hodkiewicz', 'danial.quitzon@example.net', '$2y$10$k8AaaNEtVWUkII8XqfptJ.JR7IXscDnyDCKOJh21eT5quFCJi0g8.', 0, 'D20IJkKdGq', '2017-02-16 22:36:45', '2017-02-16 22:36:45'),
(28, 'Prof. Freeda Bogisich DDS', 'jjacobi@example.net', '$2y$10$k8AaaNEtVWUkII8XqfptJ.JR7IXscDnyDCKOJh21eT5quFCJi0g8.', 0, 'wKVRMseQ9Q', '2017-02-16 22:36:45', '2017-02-16 22:36:45'),
(29, 'Berry Wisozk', 'jabernathy@example.org', '$2y$10$k8AaaNEtVWUkII8XqfptJ.JR7IXscDnyDCKOJh21eT5quFCJi0g8.', 0, '72H2HLoFk5', '2017-02-16 22:36:45', '2017-02-16 22:36:45'),
(30, 'Shannon Lesch', 'lafayette.brekke@example.org', '$2y$10$k8AaaNEtVWUkII8XqfptJ.JR7IXscDnyDCKOJh21eT5quFCJi0g8.', 0, 'rAJHGp0yGw', '2017-02-16 22:36:45', '2017-02-16 22:36:45'),
(31, 'neo', 'louisalexandrebricq@yahoo.fr', '$2y$10$ZZosZx5PNE1YUJST6Tkp2.BUbIqrfsiszB1J75lIbjpgkjZw6kLBu', 1, 'IDfTcy7pgZFBuvACHLL6cFMomJjmHSGSj9J3VQl2AuZGBEwJimETqD4I0G2U', '2017-02-16 22:37:17', '2017-02-16 22:37:17'),
(32, 'neo2', 'louisalexandrebricq94@yahoo.fr', '$2y$10$IrUFxg.PJe6LJbeFUYvgxuR5l47kdA3Z1lfNoRvbB2s5X8vKCi8Hq', 0, '9DglnUslDjP6zRW5lQ2DBlir563cJECuCKR1u8r0hbmNqWJ82kBQNMy6N4Nj', '2017-02-16 23:06:14', '2017-02-16 23:06:14'),
(33, 'Neo3', 'louisalexandrebricq94360@yahoo.fr', '$2y$10$Woh3dptx/uYLyT5d6eap7e3ELjoYoFkCeS..l9fJADtrJWTznCcEm', 1, NULL, '2017-05-02 06:09:16', '2017-05-02 06:09:16');

--
-- Index pour les tables exportées
--

--
-- Index pour la table `articles`
--
ALTER TABLE `articles`
  ADD PRIMARY KEY (`id`),
  ADD KEY `articles_user_id_foreign` (`user_id`);

--
-- Index pour la table `comments`
--
ALTER TABLE `comments`
  ADD PRIMARY KEY (`id`),
  ADD KEY `comments_article_id_foreign` (`article_id`),
  ADD KEY `comments_user_id_foreign` (`user_id`);

--
-- Index pour la table `forms`
--
ALTER TABLE `forms`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `forms_email_unique` (`email`);

--
-- Index pour la table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`),
  ADD KEY `password_resets_token_index` (`token`);

--
-- Index pour la table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- AUTO_INCREMENT pour les tables exportées
--

--
-- AUTO_INCREMENT pour la table `articles`
--
ALTER TABLE `articles`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=34;
--
-- AUTO_INCREMENT pour la table `comments`
--
ALTER TABLE `comments`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=42;
--
-- AUTO_INCREMENT pour la table `forms`
--
ALTER TABLE `forms`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT pour la table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
--
-- AUTO_INCREMENT pour la table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=34;
--
-- Contraintes pour les tables exportées
--

--
-- Contraintes pour la table `articles`
--
ALTER TABLE `articles`
  ADD CONSTRAINT `articles_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`);

--
-- Contraintes pour la table `comments`
--
ALTER TABLE `comments`
  ADD CONSTRAINT `comments_article_id_foreign` FOREIGN KEY (`article_id`) REFERENCES `articles` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `comments_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`);
