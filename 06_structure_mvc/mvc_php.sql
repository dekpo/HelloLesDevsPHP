-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Hôte : db
-- Généré le : mar. 20 fév. 2024 à 15:49
-- Version du serveur : 11.2.2-MariaDB-1:11.2.2+maria~ubu2204
-- Version de PHP : 8.2.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `mvc_php`
--

-- --------------------------------------------------------

--
-- Structure de la table `post`
--

CREATE TABLE `post` (
  `id` int(11) NOT NULL,
  `title` varchar(80) NOT NULL,
  `description` varchar(255) NOT NULL,
  `image` varchar(255) NOT NULL,
  `created_at` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Déchargement des données de la table `post`
--

INSERT INTO `post` (`id`, `title`, `description`, `image`, `created_at`) VALUES
(1, 'Mon premier article de blog', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Distinctio vel exercitationem quasi, nemo voluptatem eligendi neque, repellendus unde iusto explicabo numquam voluptatum illum expedita ab quia, quibusdam doloribus dolorum. Nulla.', 'https://cdn.pixabay.com/photo/2024/01/11/09/50/village-8501168_1280.jpg', '2024-02-20 10:24:09'),
(2, 'Mon deuxième article de blog ohoh', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Distinctio vel exercitationem quasi, nemo voluptatem eligendi neque, repellendus unde iusto explicabo numquam voluptatum illum expedita ab quia, quibusdam doloribus dolorum. Nulla.', 'https://cdn.pixabay.com/photo/2013/08/28/00/54/field-176602_1280.jpg', '2024-02-20 10:26:38'),
(3, 'Mon troisième article de blog ehehe', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Distinctio vel exercitationem quasi, nemo voluptatem eligendi neque, repellendus unde iusto explicabo numquam voluptatum illum expedita ab quia, quibusdam doloribus dolorum. Nulla.', 'https://cdn.pixabay.com/photo/2015/01/28/23/34/mountains-615428_1280.jpg', '2024-02-20 10:26:38'),
(4, 'Quatrième article de blog ouhouhou', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Distinctio vel exercitationem quasi, nemo voluptatem eligendi neque, repellendus unde iusto explicabo numquam voluptatum illum expedita ab quia, quibusdam doloribus dolorum. Nulla.', 'https://cdn.pixabay.com/photo/2017/02/01/22/02/mountain-landscape-2031539_1280.jpg', '2024-02-20 10:29:49');

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `post`
--
ALTER TABLE `post`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `post`
--
ALTER TABLE `post`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
