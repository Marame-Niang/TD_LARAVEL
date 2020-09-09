-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Hôte : localhost
-- Généré le : mer. 09 sep. 2020 à 14:37
-- Version du serveur :  10.4.13-MariaDB
-- Version de PHP : 7.4.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `TDLaravel`
--

-- --------------------------------------------------------

--
-- Structure de la table `client_non_salaries`
--

CREATE TABLE `client_non_salaries` (
  `id` int(10) UNSIGNED NOT NULL,
  `matricule` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `cni` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nom` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `prenom` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `sexe` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `datenaiss` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `telephone` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `adresse` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `client_non_salaries`
--

INSERT INTO `client_non_salaries` (`id`, `matricule`, `cni`, `nom`, `prenom`, `sexe`, `datenaiss`, `telephone`, `adresse`, `email`, `created_at`, `updated_at`) VALUES
(1, '8KGHERMM', '2668809078587', 'Babou', 'COdou', 'feminin', '2020-09-02', '787677677', 'bjcfdjggjjljhjhcd', 'diadia@gmail.com', '2020-09-07 08:08:28', '2020-09-07 08:08:28'),
(2, '76UHHDKW', '2234567890098', 'Mbaye', 'Lala', 'feminin', '1991-02-08', '78 123 45 69', 'Mbour', 'jgkjgjdh@outlook.fr', '2020-09-07 08:47:11', '2020-09-07 08:47:11'),
(3, 'JCATMAEA', '11234567890098', 'Mar', 'Balla', 'masculin', '1994-07-06', '77 123 45 67', 'Canada', 'mama@gmail.com', '2020-09-07 10:04:07', '2020-09-07 10:04:07'),
(4, '99W299MT', '11234567890098', 'Mar', 'Balla', 'masculin', '1994-07-06', '77 123 45 67', 'Canada', 'mama@gmail.com', '2020-09-07 10:13:33', '2020-09-07 10:13:33'),
(5, 'W466UDMC', '11234567890098', 'Mar', 'Balla', 'masculin', '1994-07-06', '77 123 45 67', 'Canada', 'mama@gmail.com', '2020-09-07 10:14:35', '2020-09-07 10:14:35'),
(6, 'J8HKDGNK', '11234567890098', 'Mar', 'Balla', 'masculin', '1994-07-06', '77 123 45 67', 'Canada', 'mama@gmail.com', '2020-09-07 10:15:44', '2020-09-07 10:15:44'),
(7, 'AEPEAHMP', '11234567890098', 'Mar', 'Balla', 'masculin', '1994-07-06', '77 123 45 67', 'Canada', 'mama@gmail.com', '2020-09-07 10:16:27', '2020-09-07 10:16:27'),
(8, 'HEAPF4AU', '11234567890098', 'Mar', 'Balla', 'masculin', '1994-07-06', '77 123 45 67', 'Canada', 'mama@gmail.com', '2020-09-07 10:16:45', '2020-09-07 10:16:45'),
(9, 'R47PTHKR', '2668809078587', 'Niang', 'Fatima', 'feminin', '1987-09-07', '77 656 69 57', 'Mbao', 'jhgyffu@gmail.com', '2020-09-07 21:48:46', '2020-09-07 21:48:46');

-- --------------------------------------------------------

--
-- Structure de la table `client_salaries`
--

CREATE TABLE `client_salaries` (
  `id` int(10) UNSIGNED NOT NULL,
  `matricule` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `cni` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nom` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `prenom` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `sexe` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `datenaiss` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `telephone` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `adresse` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `raison_sociale` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `salaire` decimal(8,2) NOT NULL,
  `nom_employeur` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `adr_employeur` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Structure de la table `compte_bloques`
--

CREATE TABLE `compte_bloques` (
  `id` int(10) UNSIGNED NOT NULL,
  `client_salaries_id` int(10) UNSIGNED NOT NULL,
  `client_non_salaries_id` int(10) UNSIGNED NOT NULL,
  `entreprises_id` int(10) UNSIGNED NOT NULL,
  `numero` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `$rib` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `solde` decimal(8,2) NOT NULL,
  `dateOuverture` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `fraisOuverture` decimal(8,2) NOT NULL,
  `remuneration` decimal(8,2) NOT NULL,
  `dateDebut` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `dateFin` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Structure de la table `compte_courants`
--

CREATE TABLE `compte_courants` (
  `id` int(10) UNSIGNED NOT NULL,
  `client_salaries_id` int(10) UNSIGNED NOT NULL,
  `numero` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `$rib` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `solde` decimal(8,2) NOT NULL,
  `dateOuverture` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `agios` decimal(8,2) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Structure de la table `compte_simples`
--

CREATE TABLE `compte_simples` (
  `id` int(10) UNSIGNED NOT NULL,
  `client_salaries_id` int(10) UNSIGNED NOT NULL,
  `client_non_salaries_id` int(10) UNSIGNED NOT NULL,
  `entreprise_id` int(10) UNSIGNED NOT NULL,
  `numero` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `$rib` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `solde` decimal(8,2) NOT NULL,
  `dateOuverture` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `fraisOuverture` decimal(8,2) NOT NULL,
  `remuneration` decimal(8,2) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Structure de la table `entreprises`
--

CREATE TABLE `entreprises` (
  `id` int(10) UNSIGNED NOT NULL,
  `nom_entreprise` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tel_entreprise` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_entreprise` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `budget_entreprise` decimal(8,2) NOT NULL,
  `adr_entreprise` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Structure de la table `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Structure de la table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2019_08_19_000000_create_failed_jobs_table', 1),
(4, '2020_08_30_151525_create_client_non_salaries_table', 1),
(5, '2020_08_30_151553_create_client_salaries_table', 1),
(6, '2020_08_30_151635_create_entreprises_table', 1),
(7, '2020_08_30_151959_create_compte_simples_table', 1),
(8, '2020_08_30_152010_create_compte_courants_table', 1),
(9, '2020_08_30_152025_create_compte_bloques_table', 1);

-- --------------------------------------------------------

--
-- Structure de la table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Structure de la table `users`
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
-- Déchargement des données de la table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Marame', 'thiatatou@gmail.com', NULL, '$2y$10$1UkApLKx1X2Es/1geQcx6.apM5GdrCzz0XbyqOkJjk2J2bNNMvbVq', NULL, '2020-08-31 12:02:02', '2020-08-31 12:02:02');

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `client_non_salaries`
--
ALTER TABLE `client_non_salaries`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `client_salaries`
--
ALTER TABLE `client_salaries`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `compte_bloques`
--
ALTER TABLE `compte_bloques`
  ADD PRIMARY KEY (`id`),
  ADD KEY `compte_bloques_client_salaries_id_foreign` (`client_salaries_id`),
  ADD KEY `compte_bloques_client_non_salaries_id_foreign` (`client_non_salaries_id`),
  ADD KEY `compte_bloques_entreprises_id_foreign` (`entreprises_id`);

--
-- Index pour la table `compte_courants`
--
ALTER TABLE `compte_courants`
  ADD PRIMARY KEY (`id`),
  ADD KEY `compte_courants_client_salaries_id_foreign` (`client_salaries_id`);

--
-- Index pour la table `compte_simples`
--
ALTER TABLE `compte_simples`
  ADD PRIMARY KEY (`id`),
  ADD KEY `compte_simples_client_salaries_id_foreign` (`client_salaries_id`),
  ADD KEY `compte_simples_client_non_salaries_id_foreign` (`client_non_salaries_id`),
  ADD KEY `compte_simples_entreprise_id_foreign` (`entreprise_id`);

--
-- Index pour la table `entreprises`
--
ALTER TABLE `entreprises`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Index pour la table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `client_non_salaries`
--
ALTER TABLE `client_non_salaries`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT pour la table `client_salaries`
--
ALTER TABLE `client_salaries`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `compte_bloques`
--
ALTER TABLE `compte_bloques`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `compte_courants`
--
ALTER TABLE `compte_courants`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `compte_simples`
--
ALTER TABLE `compte_simples`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `entreprises`
--
ALTER TABLE `entreprises`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT pour la table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- Contraintes pour les tables déchargées
--

--
-- Contraintes pour la table `compte_bloques`
--
ALTER TABLE `compte_bloques`
  ADD CONSTRAINT `compte_bloques_client_non_salaries_id_foreign` FOREIGN KEY (`client_non_salaries_id`) REFERENCES `client_non_salaries` (`id`),
  ADD CONSTRAINT `compte_bloques_client_salaries_id_foreign` FOREIGN KEY (`client_salaries_id`) REFERENCES `client_salaries` (`id`),
  ADD CONSTRAINT `compte_bloques_entreprises_id_foreign` FOREIGN KEY (`entreprises_id`) REFERENCES `entreprises` (`id`);

--
-- Contraintes pour la table `compte_courants`
--
ALTER TABLE `compte_courants`
  ADD CONSTRAINT `compte_courants_client_salaries_id_foreign` FOREIGN KEY (`client_salaries_id`) REFERENCES `client_salaries` (`id`);

--
-- Contraintes pour la table `compte_simples`
--
ALTER TABLE `compte_simples`
  ADD CONSTRAINT `compte_simples_client_non_salaries_id_foreign` FOREIGN KEY (`client_non_salaries_id`) REFERENCES `client_non_salaries` (`id`),
  ADD CONSTRAINT `compte_simples_client_salaries_id_foreign` FOREIGN KEY (`client_salaries_id`) REFERENCES `client_salaries` (`id`),
  ADD CONSTRAINT `compte_simples_entreprise_id_foreign` FOREIGN KEY (`entreprise_id`) REFERENCES `entreprises` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
