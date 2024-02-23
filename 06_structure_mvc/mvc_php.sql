-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Hôte : db
-- Généré le : ven. 23 fév. 2024 à 15:47
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
-- Structure de la table `contact`
--

CREATE TABLE `contact` (
  `id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `firstname` varchar(35) NOT NULL,
  `lastname` varchar(55) NOT NULL,
  `address1` varchar(255) NOT NULL,
  `address2` varchar(255) NOT NULL,
  `city` varchar(55) NOT NULL,
  `state` varchar(35) NOT NULL,
  `zip` varchar(30) NOT NULL,
  `message` varchar(255) NOT NULL,
  `created_at` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Déchargement des données de la table `contact`
--

INSERT INTO `contact` (`id`, `user_id`, `firstname`, `lastname`, `address1`, `address2`, `city`, `state`, `zip`, `message`, `created_at`) VALUES
(1, 5, 'Dekpo Wyna', 'Yologaza', '2 Rue du Lavoir', '', '74150 - RUMILLY', 'Auvergne-Rh&ocirc;ne-Alpes', '74150', 'Hello les devs PHP !!!', '2024-02-21 14:29:45'),
(2, 6, 'Dekpo Wyna', 'Yologaza', '2 Rue du Lavoir', '', '74150 - RUMILLY', 'Choose...', '74150', '', '2024-02-21 15:21:08'),
(3, 7, 'Dekpo Gmail', 'Yologaza', '2 Rue du Lavoir', '', 'RUMILLY', 'Corse', '74150', '', '2024-02-21 15:35:16'),
(4, 8, 'Dekpo Wyna', 'Yologaza', '2 Rue du Lavoir', '', '74150 - RUMILLY', 'Auvergne-Rh&ocirc;ne-Alpes', '74150', '', '2024-02-22 08:18:13');

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
(1, 'Mon premier article de blog', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Distinctio vel exercitationem quasi, nemo voluptatem eligendi neque, repellendus unde iusto explicabo numquam voluptatum illum expedita ab quia, quibusdam doloribus dolorum. ', 'https://cdn.pixabay.com/photo/2024/01/11/09/50/village-8501168_1280.jpg', '2024-02-20 10:24:09'),
(2, 'Mon deuxième article de blog ohoh', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Distinctio vel exercitationem quasi, nemo voluptatem eligendi neque, repellendus unde iusto explicabo numquam voluptatum illum expedita ab quia, quibusdam doloribus dolorum. Nulla.', 'https://cdn.pixabay.com/photo/2013/08/28/00/54/field-176602_1280.jpg', '2024-02-20 10:26:38'),
(5, 'Mon premier article de blog', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Distinctio vel exercitationem quasi, nemo voluptatem eligendi neque, repellendus unde iusto explicabo numquam voluptatum illum expedita ab quia, quibusdam doloribus dolorum. Nulla.', 'https://cdn.pixabay.com/photo/2024/01/11/09/50/village-8501168_1280.jpg', '2024-02-20 10:24:09'),
(6, 'Mon deuxième article de blog ohoh', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Distinctio vel exercitationem quasi, nemo voluptatem eligendi neque, repellendus unde iusto explicabo numquam voluptatum illum expedita ab quia, quibusdam doloribus dolorum. Nulla.', 'https://cdn.pixabay.com/photo/2013/08/28/00/54/field-176602_1280.jpg', '2024-02-20 10:26:38'),
(7, 'Mon troisième article de blog ehehe', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Distinctio vel exercitationem quasi, nemo voluptatem eligendi neque, repellendus unde iusto explicabo numquam voluptatum illum expedita ab quia, quibusdam doloribus dolorum. Nulla.', 'https://cdn.pixabay.com/photo/2015/01/28/23/34/mountains-615428_1280.jpg', '2024-02-20 10:26:38'),
(8, 'Quatrième article de blog ouhouhou', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Distinctio vel exercitationem quasi, nemo voluptatem eligendi neque, repellendus unde iusto explicabo numquam voluptatum illum expedita ab quia, quibusdam doloribus dolorum. Nulla.', 'https://cdn.pixabay.com/photo/2017/02/01/22/02/mountain-landscape-2031539_1280.jpg', '2024-02-20 10:29:49'),
(9, 'Mon premier article de blog', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Distinctio vel exercitationem quasi, nemo voluptatem eligendi neque, repellendus unde iusto explicabo numquam voluptatum illum expedita ab quia, quibusdam doloribus dolorum. Nulla.', 'https://cdn.pixabay.com/photo/2024/01/11/09/50/village-8501168_1280.jpg', '2024-02-20 10:24:09'),
(10, 'Mon deuxième article de blog ohoh', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Distinctio vel exercitationem quasi, nemo voluptatem eligendi neque, repellendus unde iusto explicabo numquam voluptatum illum expedita ab quia, quibusdam doloribus dolorum. Nulla.', 'https://cdn.pixabay.com/photo/2013/08/28/00/54/field-176602_1280.jpg', '2024-02-20 10:26:38'),
(11, 'Mon troisième article de blog ehehe', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Distinctio vel exercitationem quasi, nemo voluptatem eligendi neque, repellendus unde iusto explicabo numquam voluptatum illum expedita ab quia, quibusdam doloribus dolorum. Nulla.', 'https://cdn.pixabay.com/photo/2015/01/28/23/34/mountains-615428_1280.jpg', '2024-02-20 10:26:38'),
(12, 'Quatrième article de blog ouhouhou', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Distinctio vel exercitationem quasi, nemo voluptatem eligendi neque, repellendus unde iusto explicabo numquam voluptatum illum expedita ab quia, quibusdam doloribus dolorum. Nulla.', 'https://cdn.pixabay.com/photo/2017/02/01/22/02/mountain-landscape-2031539_1280.jpg', '2024-02-20 10:29:49'),
(13, 'Mon premier article de blog', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Distinctio vel exercitationem quasi, nemo voluptatem eligendi neque, repellendus unde iusto explicabo numquam voluptatum illum expedita ab quia, quibusdam doloribus dolorum. Nulla.', 'https://cdn.pixabay.com/photo/2024/01/11/09/50/village-8501168_1280.jpg', '2024-02-20 10:24:09'),
(14, 'Mon deuxième article de blog ohoh', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Distinctio vel exercitationem quasi, nemo voluptatem eligendi neque, repellendus unde iusto explicabo numquam voluptatum illum expedita ab quia, quibusdam doloribus dolorum. Nulla.', 'https://cdn.pixabay.com/photo/2013/08/28/00/54/field-176602_1280.jpg', '2024-02-20 10:26:38'),
(15, 'Mon troisième article de blog ehehe', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Distinctio vel exercitationem quasi, nemo voluptatem eligendi neque, repellendus unde iusto explicabo numquam voluptatum illum expedita ab quia, quibusdam doloribus dolorum. Nulla.', 'https://cdn.pixabay.com/photo/2015/01/28/23/34/mountains-615428_1280.jpg', '2024-02-20 10:26:38'),
(16, 'Quatrième article de blog ouhouhou', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Distinctio vel exercitationem quasi, nemo voluptatem eligendi neque, repellendus unde iusto explicabo numquam voluptatum illum expedita ab quia, quibusdam doloribus dolorum. Nulla.', 'https://cdn.pixabay.com/photo/2017/02/01/22/02/mountain-landscape-2031539_1280.jpg', '2024-02-20 10:29:49'),
(17, 'Mon premier article de blog', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Distinctio vel exercitationem quasi, nemo voluptatem eligendi neque, repellendus unde iusto explicabo numquam voluptatum illum expedita ab quia, quibusdam doloribus dolorum. Nulla.', 'https://cdn.pixabay.com/photo/2024/01/11/09/50/village-8501168_1280.jpg', '2024-02-20 10:24:09'),
(18, 'Mon deuxi&egrave;me article de blog eheheh', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Distinctio vel exercitationem quasi, nemo voluptatem eligendi neque, repellendus unde iusto explicabo numquam voluptatum illum expedita ab quia, quibusdam doloribus dolorum. Nulla.', 'https://cdn.pixabay.com/photo/2013/08/28/00/54/field-176602_1280.jpg', '2024-02-20 10:26:38'),
(21, 'Titre de mon article hello', 'Blabh blah Blabh blah Blabh blah Blabh blah Blabh blah Blabh blah Blabh blah Blabh blah hello', 'https://cdn.pixabay.com/photo/2024/01/11/09/50/village-8501168_1280.jpg', '2024-02-23 14:18:45');

-- --------------------------------------------------------

--
-- Structure de la table `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `email` varchar(80) NOT NULL,
  `password` varchar(255) NOT NULL,
  `roles` varchar(255) NOT NULL DEFAULT '[]',
  `registered_at` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Déchargement des données de la table `user`
--

INSERT INTO `user` (`id`, `email`, `password`, `roles`, `registered_at`) VALUES
(5, 'dekpo@me.com', '$2y$10$m8a9JOxwYncQaN1pP126MemmU2Uuh4U2E4F5laI3.d/3pC6WaghT2', '[\"ROLE_ADMIN\",\"ROLE_MEMBER\"]', '2024-02-21 14:29:45'),
(6, 'dw.yologaza@gmail.com', '$2y$10$5XqlJxiRx6wVLBu3YXZRIuRLAO9t6E.sms9WOJNP7z1c6fop5LkIe', '[]', '2024-02-21 15:21:08'),
(7, 'dw.yologaza@wanadoo.fr', '$2y$10$xIxrwv4.SN6HCZVDYZT95.Q/1uUrf.PZCZslGSH6aAM0DBKGxLu8y', '[]', '2024-02-21 15:35:16'),
(8, 'dekpo@icloud.com', '$2y$10$m8a9JOxwYncQaN1pP126MemmU2Uuh4U2E4F5laI3.d/3pC6WaghT2', '[]', '2024-02-22 08:18:13');

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `contact`
--
ALTER TABLE `contact`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_contact_user` (`user_id`);

--
-- Index pour la table `post`
--
ALTER TABLE `post`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `contact`
--
ALTER TABLE `contact`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT pour la table `post`
--
ALTER TABLE `post`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT pour la table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- Contraintes pour les tables déchargées
--

--
-- Contraintes pour la table `contact`
--
ALTER TABLE `contact`
  ADD CONSTRAINT `fk_contact_user` FOREIGN KEY (`user_id`) REFERENCES `user` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
