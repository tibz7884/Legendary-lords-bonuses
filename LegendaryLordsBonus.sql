-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Hôte : localhost:8889
-- Généré le : dim. 20 fév. 2022 à 11:33
-- Version du serveur :  5.7.34
-- Version de PHP : 7.4.21

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `LegendaryLordsBonus`
--

-- --------------------------------------------------------

--
-- Structure de la table `legendarylords`
--

CREATE TABLE `legendarylords` (
  `id` int(11) NOT NULL,
  `legendary_lord` varchar(30) DEFAULT NULL,
  `bonus1` text NOT NULL,
  `bonus2` text,
  `bonus3` text,
  `race_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `legendarylords`
--

INSERT INTO `legendarylords` (`id`, `legendary_lord`, `bonus1`, `bonus2`, `bonus3`, `race_id`) VALUES
(1, 'Tyrion', 'melee attack +2', 'recruit rank +2', 'none', 1),
(2, 'Teclis', 'winds reserve +10', 'none', 'none', 1),
(3, 'Alarielle', 'public order +4', 'winds reserve +5', 'growth +10', 1),
(4, 'Alith_Anar', 'hero action cost -15%', 'hero success chance +10%', 'none', 1),
(5, 'Eltharion', 'missile resistance +10%', 'attribute : charge defense vs large', 'none', 1),
(6, 'Imrik', 'bonus vs large +8%', 'fire resistance 25%', 'none', 1),
(7, 'Mazdamundi', 'command area +25%', 'none', 'none', 2),
(8, 'Kroq_Gar', 'public order +2', 'melee defense +10', 'none', 2),
(9, 'Tehenhauin', 'capture +15%', 'attrition -25% all', 'none', 2),
(10, 'Tiktaq_to', 'movement range +10%', 'line of sight +10%', 'none', 2),
(11, 'Nakai', 'Bonus vs large +10', 'Melee defense +10', 'none', 2),
(12, 'Gor Rok', 'Commandement +4', 'Attribute : expert charge defense', 'None', 2),
(13, 'Malekith', 'Raiding income +10%', 'Ability : frénésie', 'none', 3),
(14, 'Morathi', 'hero action cost -10%', 'hero self defense +10%', 'none', 3),
(15, 'Hellebron', 'Perce armure +20', 'Melee attack +5', 'none', 3),
(16, 'Lokhir', 'Immune to storm & reef attrition', 'none', 'none', 3),
(17, 'Malus', 'Perce armure +10', 'Armure -5', 'none', 3),
(18, 'Queek', 'Bonus vs infantery +6', 'none', 'none', 4),
(19, 'Skrolk', 'Immune swamp attrition', 'public order -5', 'none', 4),
(20, 'Tretch', 'Speed +12%', 'leadership +4 during underway intercept', 'none', 4);

-- --------------------------------------------------------

--
-- Structure de la table `race`
--

CREATE TABLE `race` (
  `id` int(11) NOT NULL,
  `race` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `race`
--

INSERT INTO `race` (`id`, `race`) VALUES
(1, 'hauts_elfes'),
(2, 'hommes_lezards'),
(3, 'elfes_noirs'),
(4, 'skaven'),
(5, 'cote_vampire'),
(6, 'rois_des_tombes'),
(7, 'empire'),
(8, 'nains'),
(9, 'orcs'),
(10, 'vampires'),
(11, 'norsca'),
(12, 'bretonnia'),
(13, 'wood_elfes'),
(14, 'hommes_betes'),
(15, 'chaos');

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `legendarylords`
--
ALTER TABLE `legendarylords`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_raceId` (`race_id`);

--
-- Index pour la table `race`
--
ALTER TABLE `race`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `legendarylords`
--
ALTER TABLE `legendarylords`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT pour la table `race`
--
ALTER TABLE `race`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- Contraintes pour les tables déchargées
--

--
-- Contraintes pour la table `legendarylords`
--
ALTER TABLE `legendarylords`
  ADD CONSTRAINT `fk_raceId` FOREIGN KEY (`race_id`) REFERENCES `Race` (`id`),
  ADD CONSTRAINT `legendarylords_ibfk_1` FOREIGN KEY (`race_id`) REFERENCES `race` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
