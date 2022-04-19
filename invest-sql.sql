-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Tempo de geração: 19-Abr-2022 às 14:28
-- Versão do servidor: 5.7.31
-- versão do PHP: 7.3.21

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `invest`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `acoes`
--

DROP TABLE IF EXISTS `acoes`;
CREATE TABLE IF NOT EXISTS `acoes` (
  `id_acao` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `nome` varchar(150) NOT NULL DEFAULT '0',
  `ultimo` decimal(15,2) NOT NULL DEFAULT '0.00',
  `maximo` decimal(15,2) NOT NULL DEFAULT '0.00',
  `minimo` decimal(15,2) NOT NULL DEFAULT '0.00',
  `variacao` decimal(15,2) NOT NULL DEFAULT '0.00',
  `var` decimal(15,2) NOT NULL DEFAULT '0.00',
  `vol` decimal(15,2) NOT NULL DEFAULT '0.00',
  `image` varchar(150) DEFAULT '0',
  `valor` decimal(15,2) NOT NULL DEFAULT '0.00',
  PRIMARY KEY (`id_acao`)
) ENGINE=InnoDB AUTO_INCREMENT=46 DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `acoes`
--

INSERT INTO `acoes` (`id_acao`, `nome`, `ultimo`, `maximo`, `minimo`, `variacao`, `var`, `vol`, `image`, `valor`) VALUES
(45, '234', '234.00', '24.00', '24.00', '234.00', '2342.00', '34.00', '8514ef7d04851e4b42abb697a7469718.png', '234.00');

-- --------------------------------------------------------

--
-- Estrutura da tabela `compra_acao`
--

DROP TABLE IF EXISTS `compra_acao`;
CREATE TABLE IF NOT EXISTS `compra_acao` (
  `id_user` bigint(20) UNSIGNED NOT NULL,
  `id_acao` int(10) UNSIGNED NOT NULL,
  KEY `FK__users` (`id_user`),
  KEY `FK_compra_acao_acoes` (`id_acao`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `compra_acao`
--

INSERT INTO `compra_acao` (`id_user`, `id_acao`) VALUES
(1, 45);

-- --------------------------------------------------------

--
-- Estrutura da tabela `failed_jobs`
--

DROP TABLE IF EXISTS `failed_jobs`;
CREATE TABLE IF NOT EXISTS `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `uuid` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`),
  UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Estrutura da tabela `migrations`
--

DROP TABLE IF EXISTS `migrations`;
CREATE TABLE IF NOT EXISTS `migrations` (
  `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `migration` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=7 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Extraindo dados da tabela `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2014_10_12_200000_add_two_factor_columns_to_users_table', 1),
(4, '2019_08_19_000000_create_failed_jobs_table', 1),
(5, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(6, '2022_03_18_162830_create_sessions_table', 1);

-- --------------------------------------------------------

--
-- Estrutura da tabela `password_resets`
--

DROP TABLE IF EXISTS `password_resets`;
CREATE TABLE IF NOT EXISTS `password_resets` (
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  KEY `password_resets_email_index` (`email`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Estrutura da tabela `personal_access_tokens`
--

DROP TABLE IF EXISTS `personal_access_tokens`;
CREATE TABLE IF NOT EXISTS `personal_access_tokens` (
  `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `tokenable_type` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tokenable_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(64) COLLATE utf8mb4_unicode_ci NOT NULL,
  `abilities` text COLLATE utf8mb4_unicode_ci,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Estrutura da tabela `sessions`
--

DROP TABLE IF EXISTS `sessions`;
CREATE TABLE IF NOT EXISTS `sessions` (
  `id` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_id` bigint(20) UNSIGNED DEFAULT NULL,
  `ip_address` varchar(45) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `user_agent` text COLLATE utf8mb4_unicode_ci,
  `payload` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `last_activity` int(11) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `sessions_user_id_index` (`user_id`),
  KEY `sessions_last_activity_index` (`last_activity`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Extraindo dados da tabela `sessions`
--

INSERT INTO `sessions` (`id`, `user_id`, `ip_address`, `user_agent`, `payload`, `last_activity`) VALUES
('yVXTM7Rb9qfFvlj2skikDDYoYxjmnmLcmdKnUEEa', NULL, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/99.0.4844.82 Safari/537.36', 'YToyOntzOjY6Il90b2tlbiI7czo0MDoiaHdiN1NoUmVhV0h5bk92Z0pFMEdjS0lKUlhNSGxDTmZPbG1YNDdQZSI7czo2OiJfZmxhc2giO2E6Mjp7czozOiJvbGQiO2E6MDp7fXM6MzoibmV3IjthOjA6e319fQ==', 1648149412),
('2mDOWWy0cuyihgCUqlRPlYgeTVejGaelEAQhlcoM', 1, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/99.0.4844.82 Safari/537.36', 'YTo2OntzOjY6Il90b2tlbiI7czo0MDoiSVdDQnREcEZ6WjBCSWZSN0x4RXpvT1FnaWV4Z2RzdTBoNlVoR3pMZSI7czo2OiJfZmxhc2giO2E6Mjp7czozOiJvbGQiO2E6MDp7fXM6MzoibmV3IjthOjA6e319czozOiJ1cmwiO2E6MDp7fXM6OToiX3ByZXZpb3VzIjthOjE6e3M6MzoidXJsIjtzOjIxOiJodHRwOi8vbG9jYWxob3N0OjgwMDAiO31zOjUwOiJsb2dpbl93ZWJfNTliYTM2YWRkYzJiMmY5NDAxNTgwZjAxNGM3ZjU4ZWE0ZTMwOTg5ZCI7aToxO3M6MTc6InBhc3N3b3JkX2hhc2hfd2ViIjtzOjYwOiIkMnkkMTAkR3RhaDl4OW9RNkVyY3RxVjVKRUpiTzFZaE1HdmR1MndUbGFIN1pLYnR2d0tFS1YwZDNyUi4iO30=', 1648152351);

-- --------------------------------------------------------

--
-- Estrutura da tabela `users`
--

DROP TABLE IF EXISTS `users`;
CREATE TABLE IF NOT EXISTS `users` (
  `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `two_factor_secret` text COLLATE utf8mb4_unicode_ci,
  `two_factor_recovery_codes` text COLLATE utf8mb4_unicode_ci,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `current_team_id` bigint(20) UNSIGNED DEFAULT NULL,
  `profile_photo_path` varchar(2048) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `users_email_unique` (`email`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Extraindo dados da tabela `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `two_factor_secret`, `two_factor_recovery_codes`, `remember_token`, `current_team_id`, `profile_photo_path`, `created_at`, `updated_at`) VALUES
(1, 'ricardo', 'ricardo-s-a@hotmail.com', NULL, '$2y$10$Gtah9x9oQ6ErctqV5JEJbO1YhMGvdu2wTlaH7ZKbtvwKEKV0d3rR.', NULL, NULL, NULL, NULL, NULL, '2022-03-18 21:03:49', '2022-03-18 21:03:49'),
(2, 'maria', 'maria@maria.com', NULL, '$2y$10$5RIagfD/xuXa.AgbcyCgLeKkkkADF2j0MYmWjhCbSCgySk5.jNNyW', NULL, NULL, NULL, NULL, NULL, '2022-03-21 22:31:02', '2022-03-21 22:31:02'),
(3, 'admin', 'admin@admin.com', NULL, '$2y$10$ZNo583UPc/tiCALV94DA0u1.VSXR1H/v7bGj.d1tAgHMBN7DGhkMi', NULL, NULL, NULL, NULL, NULL, '2022-03-22 21:35:46', '2022-03-22 21:35:46');

-- --------------------------------------------------------

--
-- Estrutura da tabela `user_acao`
--

DROP TABLE IF EXISTS `user_acao`;
CREATE TABLE IF NOT EXISTS `user_acao` (
  `id_user` bigint(20) UNSIGNED NOT NULL,
  `id_acao` int(10) UNSIGNED NOT NULL DEFAULT '0',
  KEY `FK_user_acao_users` (`id_user`),
  KEY `FK_user_acao_acoes` (`id_acao`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `user_acao`
--

INSERT INTO `user_acao` (`id_user`, `id_acao`) VALUES
(1, 45);

--
-- Restrições para despejos de tabelas
--

--
-- Limitadores para a tabela `compra_acao`
--
ALTER TABLE `compra_acao`
  ADD CONSTRAINT `FK__users` FOREIGN KEY (`id_user`) REFERENCES `users` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `FK_compra_acao_acoes` FOREIGN KEY (`id_acao`) REFERENCES `acoes` (`id_acao`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Limitadores para a tabela `user_acao`
--
ALTER TABLE `user_acao`
  ADD CONSTRAINT `FK_user_acao_acoes` FOREIGN KEY (`id_acao`) REFERENCES `acoes` (`id_acao`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `FK_user_acao_users` FOREIGN KEY (`id_user`) REFERENCES `users` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
