-- phpMyAdmin SQL Dump
-- version 4.9.5deb2
-- https://www.phpmyadmin.net/
--
-- Hôte : localhost:3306
-- Généré le : mer. 09 juin 2021 à 22:44
-- Version du serveur :  8.0.25
-- Version de PHP : 7.4.3
-- Author = Mamed Noor Gohabur

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `portfolio`
--

-- --------------------------------------------------------

--
-- Structure de la table `Projects`
--

CREATE TABLE `Projects` (
  `name` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `picture` varchar(150) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `stack` varchar(150) COLLATE utf8mb4_unicode_ci NOT NULL,
  `link` varchar(200) COLLATE utf8mb4_unicode_ci NOT NULL,
  `repo` varchar(200) COLLATE utf8mb4_unicode_ci NOT NULL,
  `id` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `Projects`
--

INSERT INTO `Projects` (`name`, `description`, `picture`, `stack`, `link`, `repo`, `id`) VALUES
('Pixie Wilders', 'Création d’une marketplace de photographie', 'asset/images/60c11876cfd8dPixieWilders.png', 'HTML, CSS Git et Github', 'https://mamednoor.github.io/project1PixieWilder/', 'https://github.com/Mamednoor/project1PixieWilder', 1),
('Worker and Co', 'Création d’un site vitrine pour une agence de co-working', 'asset/images/60c11d51a219aWorker&Co.png', 'HTML, CSS, Bootstrap, Git et Github, SCRUM', 'https://workerandco.netlify.app', 'https://github.com/Mamednoor/project-wbf3', 2),
('Cook and Cake', 'Création d’une Application web de cuisine avec consommation d\'API', 'asset/images/60c11de8733beCookAndCake.png', 'React, JavaScript, HTML, CSS, Git et Github, SCRUM', 'https://cookandcake.netlify.app/', 'https://github.com/Mamednoor/paris-0320-project2-Cook-Cake', 3),
('Goat Vs Chicken', 'Création d\'un jeux vidéo lors d\'un Hackathon de 24H à la WildCodeSchool Paris', 'asset/images/60c11e3eece6cGoatvsChicken.png', 'JavaScript, Phaser3, Git et Github', 'https://romantic-swirles-0e45a7.netlify.app/', 'https://github.com/Mamednoor/HackathonProject', 4),
('Doc\'Talk', 'Création d\'une application mobile mettant en relation médecins et patients. Hackathon Doctolib 2020', 'asset/images/60c11e8a2de24doctalk.png', 'MySQL, React, Node.js, Socket.io, Git et GitHub, SCRUM', 'https://doctalk.netlify.app/', 'https://github.com/Mamednoor/doctalkfusion', 5),
('Papier Crayon', 'Création d’une marketplace de design Papier crayon', 'asset/images/60c11ed0a98f8papiercrayon.png', 'MySQL, React, Node.js, Socket.io, Git et GitHub, SCRUM', 'https://doctalk.netlify.app/', 'https://github.com/Mamednoor/doctalkfusion', 6),
('Todo List', 'Création d’une Todo List avec Redux', 'asset/images/60c11f5371addTodoList.png', 'React + Redux, Git et Github', 'https://redux-train-todoapp.netlify.app/', 'https://github.com/Mamednoor/redux-train', 7),
('Portfolio - React', 'Premier portfolio réalisé avec React afin d\'exposer mes projets', 'asset/images/60c1218ed5e86PortfolioReact.png', 'HTML CSS, Javascript, React, AntDesign, Styled Component, Git et Github', 'https://mamednoor.netlify.app/', 'https://github.com/Mamednoor/Mamednoor', 8);

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `Projects`
--
ALTER TABLE `Projects`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `Projects`
--
ALTER TABLE `Projects`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
