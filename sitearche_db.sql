-- phpMyAdmin SQL Dump
-- version 5.2.1deb1+deb12u1
-- https://www.phpmyadmin.net/
--
-- Hôte : localhost:3306
-- Généré le : dim. 22 juin 2025 à 03:08
-- Version du serveur : 10.11.11-MariaDB-0+deb12u1
-- Version de PHP : 8.2.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `sitearche_db`
--

-- --------------------------------------------------------

--
-- Structure de la table `contact`
--

CREATE TABLE `contact` (
  `id` int(11) NOT NULL,
  `nom` varchar(255) NOT NULL,
  `prenom` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `sujet` varchar(255) NOT NULL,
  `message` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Déchargement des données de la table `contact`
--

INSERT INTO `contact` (`id`, `nom`, `prenom`, `email`, `sujet`, `message`) VALUES
(1, 'hamza', 'hamza', 'hmz@gmail.com', 'Demande d\'infos', 'fbjkhrjehknfjenkfdljek'),
(2, 'hamza', 'hamza', 'hmz@gmail.com', 'Demande d\'infos', 'fbjkhrjehknfjenkfdljek'),
(3, 'j', 'khedidja', 'iberlamis79@gmail.com', 'Demande de Rendez-vous', 'hjkkkh');

-- --------------------------------------------------------

--
-- Structure de la table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `nom` varchar(255) NOT NULL,
  `prenom` varchar(255) NOT NULL,
  `age` int(3) NOT NULL,
  `sexe` enum('femme','homme','autre') NOT NULL,
  `adresse` text NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Déchargement des données de la table `users`
--

INSERT INTO `users` (`id`, `nom`, `prenom`, `age`, `sexe`, `adresse`, `email`, `password`) VALUES
(1, 'Lamis', 'lamis', 3, 'femme', 'belgique', 'iberlamis@gmail.com', '$2y$10$XolsRiE.P1bO3qwGf/55z.ALVldPxnppRwRut.EE3Csl5ehm3paDy'),
(2, 'khedidja', 'khedidja', 17, 'femme', 'bruxelles', 'khd@gmail.com', 'fNFFtybj$Z5y!*m'),
(3, 'akram', 'akrM', 9, 'homme', 'GYUHJKNH', 'akr@yahoo.fr', 'fNFFtybj$Z5y!*m'),
(4, 'hamza', 'hamza', 10, 'homme', 'belgique', 'hmz@gmail.com', 'fNFFtybj$Z5y!*m');

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `contact`
--
ALTER TABLE `contact`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `email` (`email`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `contact`
--
ALTER TABLE `contact`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT pour la table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
