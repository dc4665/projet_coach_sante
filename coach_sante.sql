-- phpMyAdmin SQL Dump
-- version 4.9.1
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1
-- Généré le :  lun. 02 mars 2020 à 10:13
-- Version du serveur :  10.4.8-MariaDB
-- Version de PHP :  7.3.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données :  `coach_sante`
--

-- --------------------------------------------------------

--
-- Structure de la table `commentaire`
--

CREATE TABLE `commentaire` (
  `id_commentaire` int(11) NOT NULL,
  `alimentation_coach` text NOT NULL,
  `activite_coach` text NOT NULL,
  `commentaire _coach` text NOT NULL,
  `id_personne` int(11) NOT NULL,
  `id_fiche` int(11) NOT NULL,
  `actif` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `commentaire`
--

INSERT INTO `commentaire` (`id_commentaire`, `alimentation_coach`, `activite_coach`, `commentaire _coach`, `id_personne`, `id_fiche`, `actif`) VALUES
(1, 'Un corps sain débute par une alimentation saine, cela est un bon début', 'Pour la prochaine séance essaye de monter le rythme tout en restant sur la qualité des mouvements', 'Bonne semaine', 3, 1, 0),
(2, 'Tu continue sur ta lancée', 'Essaye de rester sur cette dynamique', 'Rien a dire', 3, 2, 0);

-- --------------------------------------------------------

--
-- Structure de la table `fichesuivi`
--

CREATE TABLE `fichesuivi` (
  `id_fiche` int(11) NOT NULL,
  `date_fiche` date NOT NULL,
  `alimentation` text NOT NULL,
  `activite` text NOT NULL,
  `commentaire` text NOT NULL,
  `chemin_photo_face` varchar(200) NOT NULL,
  `chemin_photo_profil` varchar(200) NOT NULL,
  `id_personne` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `fichesuivi`
--

INSERT INTO `fichesuivi` (`id_fiche`, `date_fiche`, `alimentation`, `activite`, `commentaire`, `chemin_photo_face`, `chemin_photo_profil`, `id_personne`) VALUES
(1, '2020-02-11', 'Riz nature accompagné de dinde emincée', 'Course a pieds, Squats, Superman', 'Cela fut très dur', 'google.com/photo-de-face', 'google.com/photo-de-profil', 4),
(2, '2020-02-18', 'Riz avec de la dinde poêlée et des légumes vapeur', 'Seance de muscu a la salle', 'Eprouvant physiquement', 'google.com/photo-de-face', 'google.com/photo-de-profil', 4),
(3, '2020-01-01', 'Salade de thon et haricots blancs, deux tranches de pain (blé entier), quartiers d\'orange', 'Running sur 5km, Développé couché, squats', 'La première semaine est très dure', 'google.com/photo-de-face', 'google.com/photo-de-profil', 5),
(4, '2020-01-08', 'Salade de betteraves et mangues, tranche de pain (blé entier), Morue aux olives et fenouil, Orge et Ananas glacé au rhum', 'Running sur 5km, Presse, 1 séance de crossfit', 'Je sens deja que je prend un peu en condition physique', 'google.com/photo-de-face', 'google.com/photo-de-profil', 5),
(5, '2020-01-15', 'Filet de saumon, riz blanc et epinards', '5km sur Vélo elliptique, course de 5km sur tapis', 'Tout doucement je sens que l\'alimentation a un gros rôle a jouer dans ma perte de poids', 'google.com/photo-de-face', 'google.com/photo-de-profil', 5),
(6, '2020-01-22', 'Patates douces, poulet, brocoli, carottes, chou-fleur cuits a la vapeur', '6km sur Vélo elliptique, course de 6km sur tapis', 'J\'essaie d\'augmenter les distances pour dépasser mes limites', 'google.com/photo-de-face', 'google.com/photo-de-profil', 5),
(7, '2020-02-25', 'Poisson au court bouillon, 2 tomates avec un peu d\'huile d\'olive', 'Course a pieds de 4km, un peu de développé couché a la salle', 'Je remercie mon coach de m\'avoir lancé la dedans, c\'est dur mais ça fait du bien de se dépenser !', 'google.com/photo-de-face', 'google.com/photo-de-profil', 4),
(8, '2020-03-03', 'Escalope de poulet, poivrons, yahourt', 'Course a pieds de 5km, un peu de développé couché a la salle, squats, 1 séance de cross fit', 'Je commence vraiment a sentir la différence par rapport a la première semaine', 'google.com/photo-de-face', 'google.com/photo-de-profil', 4),
(9, '2020-01-04', 'Spaghettis Bolognaise avec pâtes complètes et légumes', 'Sprint fractionné, 5km de velo', 'Je me dépense mais j\'ai du mal', 'google.com/photo-de-face', 'google.com/photo-de-profil', 6),
(10, '2020-01-11', 'Blanc de poulet, riz complet, fromage blanc et une banane', '2 séances de crossfit, 1 match de tennis d\'une heure et demi', 'Mon cardio est pas très bon mais je me force pour aller jusqu\'au bout de la séance', 'google.com/photo-de-face', 'google.com/photo-de-profil', 6),
(11, '2020-01-18', 'Poisson a la vapeur et brocolis, yahourt', 'Séance de musculation a la salle de sport et quelques longueur a la piscine', 'Je sens une différence en montant les escaliers, je ne suis plus essoufflé arrivé en haut !', 'google.com/photo-de-face', 'google.com/photo-de-profil', 6),
(12, '2020-01-25', 'Roti de boeuf froid, 2 tranches de pain de seigle, laitue et tomates arrosées d\'huile d\'olive', '4.93km a velo et 4.93km de course a pieds', 'Je revis physiquement ! Ce programme est un vrai changement dans ma vie ! ', 'google.com/photo-de-face', 'google.com/photo-de-profil', 6);

-- --------------------------------------------------------

--
-- Structure de la table `personne`
--

CREATE TABLE `personne` (
  `id_personne` int(11) NOT NULL,
  `nom` varchar(50) NOT NULL,
  `prenom` varchar(50) NOT NULL,
  `tel` int(11) NOT NULL,
  `email` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `date_naissance` date DEFAULT NULL,
  `sexe` varchar(20) DEFAULT NULL,
  `taille` int(11) DEFAULT NULL,
  `id_role` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `personne`
--

INSERT INTO `personne` (`id_personne`, `nom`, `prenom`, `tel`, `email`, `password`, `date_naissance`, `sexe`, `taille`, `id_role`) VALUES
(1, 'Crastion', 'Alexandre', 631468275, 'alexandre.crastion@outlook.fr', 'password', '1992-12-06', 'Homme', 186, 1),
(2, 'Blanchard', 'Melanie', 646813465, 'melanie.blanchard@outlook.fr', 'password', '1991-08-01', 'Femme', 179, 2),
(3, 'Artlao', 'Hugo', 693647892, 'hugo.atlao@outlook.fr', 'password', '1995-09-12', 'Homme', 189, 2),
(4, 'Wastjer', 'Lucas', 678946118, 'lucas.wastjer@outlook.fr', 'password', '1995-11-16', 'Homme', 179, 3),
(5, 'Léo', 'Braesch', 651344965, 'testclient@gmail.com', 'password', '1999-05-01', 'Homme', 179, 3),
(6, 'Macron', 'Emmanuel', 649817964, 'emmanuel.macron@president.fr', 'password', '1977-12-21', 'Homme', 177, 3);

-- --------------------------------------------------------

--
-- Structure de la table `poids`
--

CREATE TABLE `poids` (
  `id_poids` int(11) NOT NULL,
  `valeur_poids` float NOT NULL,
  `date_poids` date NOT NULL,
  `id_personne` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `poids`
--

INSERT INTO `poids` (`id_poids`, `valeur_poids`, `date_poids`, `id_personne`) VALUES
(1, 52, '2020-02-11', 4),
(2, 54, '2020-02-01', 4);

-- --------------------------------------------------------

--
-- Structure de la table `rang`
--

CREATE TABLE `rang` (
  `id_rang` int(10) NOT NULL,
  `name` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Structure de la table `role`
--

CREATE TABLE `role` (
  `id_role` int(11) NOT NULL,
  `nom_role` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `role`
--

INSERT INTO `role` (`id_role`, `nom_role`) VALUES
(1, 'Administrateur'),
(2, 'Coach'),
(3, 'Membre');

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `commentaire`
--
ALTER TABLE `commentaire`
  ADD PRIMARY KEY (`id_commentaire`);

--
-- Index pour la table `fichesuivi`
--
ALTER TABLE `fichesuivi`
  ADD PRIMARY KEY (`id_fiche`),
  ADD KEY `id_personne` (`id_personne`);

--
-- Index pour la table `personne`
--
ALTER TABLE `personne`
  ADD PRIMARY KEY (`id_personne`),
  ADD KEY `id_role` (`id_role`);

--
-- Index pour la table `poids`
--
ALTER TABLE `poids`
  ADD PRIMARY KEY (`id_poids`),
  ADD KEY `id_personne` (`id_personne`);

--
-- Index pour la table `rang`
--
ALTER TABLE `rang`
  ADD PRIMARY KEY (`id_rang`);

--
-- Index pour la table `role`
--
ALTER TABLE `role`
  ADD PRIMARY KEY (`id_role`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `commentaire`
--
ALTER TABLE `commentaire`
  MODIFY `id_commentaire` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT pour la table `fichesuivi`
--
ALTER TABLE `fichesuivi`
  MODIFY `id_fiche` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT pour la table `personne`
--
ALTER TABLE `personne`
  MODIFY `id_personne` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT pour la table `poids`
--
ALTER TABLE `poids`
  MODIFY `id_poids` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT pour la table `rang`
--
ALTER TABLE `rang`
  MODIFY `id_rang` int(10) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `role`
--
ALTER TABLE `role`
  MODIFY `id_role` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- Contraintes pour les tables déchargées
--

--
-- Contraintes pour la table `commentaire`
--
ALTER TABLE `commentaire`
  ADD CONSTRAINT `commentaire_ibfk_1` FOREIGN KEY (`id_fiche`) REFERENCES `fichesuivi` (`id_fiche`),
  ADD CONSTRAINT `commentaire_ibfk_2` FOREIGN KEY (`id_personne`) REFERENCES `personne` (`id_personne`);

--
-- Contraintes pour la table `fichesuivi`
--
ALTER TABLE `fichesuivi`
  ADD CONSTRAINT `fichesuivi_ibfk_1` FOREIGN KEY (`id_personne`) REFERENCES `personne` (`id_personne`);

--
-- Contraintes pour la table `personne`
--
ALTER TABLE `personne`
  ADD CONSTRAINT `personne_ibfk_1` FOREIGN KEY (`id_role`) REFERENCES `role` (`id_role`);

--
-- Contraintes pour la table `poids`
--
ALTER TABLE `poids`
  ADD CONSTRAINT `poids_ibfk_1` FOREIGN KEY (`id_personne`) REFERENCES `personne` (`id_personne`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
