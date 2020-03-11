-- phpMyAdmin SQL Dump
-- version 4.9.2
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1
-- Généré le :  mer. 11 mars 2020 à 16:10
-- Version du serveur :  10.4.10-MariaDB
-- Version de PHP :  7.3.12

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
  `commentaire_coach` text NOT NULL,
  `id_personne` int(11) NOT NULL,
  `id_fiche` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `commentaire`
--

INSERT INTO `commentaire` (`id_commentaire`, `alimentation_coach`, `activite_coach`, `commentaire_coach`, `id_personne`, `id_fiche`) VALUES
(3, 'Attention à votre alimentation le midi, beaucoup de mauvais lipides et en grande quantité, de plus vous semblez travailler dans un bureau, pour la perte de masse graisseuse, ce n’est pas l’idéal, rien à redire pour le soir, vous compensez avec des salades c’est très bien. Je vous conseillerais d’inverser, plutôt des salades le midi, et varier les accompagnements lorsque vous consommez des viandes grasses (agneau), préférez de la patate douce au four plutôt que des alokos en friture.', 'Alors, pour commencer, vous n’éliminerez pas plus si vous vous entraînez plus fort ou plus longtemps, vous risquez plus la blessure que la perte de masse graisseuse. <br />\r\nDe plus vous insistez sur vos jambes et négligez le reste de votre corps, ce qui n’est pas bon.<br />\r\nEncore une fois comme vous travaillez en bureau, ne délaissez pas votre dos, être trop assis n’est pas bon, même chose pour les abdos. Le dos et les abdos sont très importants.<br />\r\nJe peux vous conseiller pour les abdos :<br />\r\n20 sec lever de genoux<br />\r\n30sec jumping jack<br />\r\nAbdos debout X20<br />\r\nMountain Climber X20<br />\r\nCrunch Abdominal X10<br />\r\nToucher les talons X16<br />\r\n30 sec de planche<br />\r\nFaites 2 séries.<br />\r\n', 'Pas grand-chose à ajouter, quasiment tout est dit plus haut, néanmoins veillez à manger moins lourd et moins gras le midi, essayez de mettre en place la routine donnée pour les abdos et essayez aussi d’espacer vos entrainement, 3 jours de façon aussi intensive ce n’est pas bon, tout comme 4 jours sans sport ensuite, je vous conseillerais de passer sur un format d’entrainement LUNDI, MERCREDI, VENDREDI.', 11, 1),
(4, 'Attention à votre alimentation trop riche en lipide, vous devez commencer par arrêter les plats trop gras le soir.<br />\r\nJe vous recommande par exemple les recettes suivantes :<br />\r\n<br />\r\nRecette de Salade croquante, vinaigrette au citron:<br />\r\n<br />\r\n1 petit chou vert . 1 petit chou rouge . 1 bulbe de fenouil . 1 concombre . 3 cuillère(s) à soupe de graines de courge . 1 poignée de jeunes pousses de salade . pour la vinaigrette <br />\r\n    . 6 cuillère(s) à soupe d\'huile d\'olive . 3 cuillère(s) à soupe de vinaigre de cidre . 1 cuillère(s) à soupe de crème de citron (lemon curd a. ménès) . 1 cuillère(s) à café de moutarde au miel (a. ménès) . fleur de sel . poivre blanc du moulin<br />\r\n<br />\r\n    1. Pelez les légumes, lavez-les rapidement sous l’eau froide et passez-les au robot éminceur. Versez les légumes émincés dans un saladier.<br />\r\n    2.  Ajoutez les pousses de salade et les graines de courge.<br />\r\n    3. Réunissez tous les ingrédients de la vinaigrette et émulsionnez-les en allongeant avec 1 ou 2 c. à soupe d’eau si nécessaire. Versez dans le saladier et mélangez bien. Servez aussitôt.<br />\r\n<br />\r\n', 'Continuer sur les mêmes séries.<br />\r\nPour vos prochains entrainements ajoutons également ces exercices : 3 séries de pompes bras écartés.<br />\r\n', 'Pour vos douleurs, peut-être est-ce votre position qui est mauvaise ?<br />\r\nJe vous envoie un lien d’une bonne vidéo démonstrative pour que vous puissiez voir vos erreurs et la bonne position à adopter.<br />\r\nhttps://www.youtube.com/watch?v=TPlZLe-nk7k<br />\r\n', 11, 2),
(5, 'Que dire… hormis vous mettre légèrement en garde contre les Spaghetti Bolognaise, vos repas sont variés, et sans mauvais lipides.<br />\r\nContinuez comme ça c’est très bien.<br />\r\n', 'La encore rien à redire sur votre routine, hormis accrochez-vous, et continuez, c’est très bien et vous verrez que cela va payer.', 'Attention aux (quelques) mauvais lipides le midi, sinon RAS, continuez comme ça.', 10, 3);

-- --------------------------------------------------------

--
-- Structure de la table `fichesuivi`
--

CREATE TABLE `fichesuivi` (
  `id_fiche` int(11) NOT NULL,
  `date_fiche` date NOT NULL,
  `poids` int(11) NOT NULL,
  `alimentation` text NOT NULL,
  `activite` text NOT NULL,
  `commentaire` text NOT NULL,
  `actif` int(11) NOT NULL,
  `chemin_photo_face` varchar(200) NOT NULL,
  `chemin_photo_profil` varchar(200) NOT NULL,
  `id_personne` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `fichesuivi`
--

INSERT INTO `fichesuivi` (`id_fiche`, `date_fiche`, `poids`, `alimentation`, `activite`, `commentaire`, `actif`, `chemin_photo_face`, `chemin_photo_profil`, `id_personne`) VALUES
(1, '2020-02-11', 86, 'Lundi: Midi: Poulet Curry avec du riz.\r\nSoir: Salade niçoise <br> <br>\r\n\r\nMardi:Midi: Pizza 4 fromages.\r\nSoir: Salade de lentille <br> <br>\r\n\r\nMercredi: Midi: Steack Frite Salade.  \r\nSoir: Pot au feu <br> <br>\r\n\r\nJeudi: Midi: Döner Frite. Soir: Salade  composée <br> <br>\r\n\r\nVendredi: Midi: Alokos frit et côtes d\'agneau. Soir: Cabillaud vapeurs, Riz noir', 'Lundi: Séances Jambes <br>\r\n4 séries de 16 reps fentes avec poids (30kg)<br>\r\n4 séries de 12 reps leg curl (à 50kg)<br>\r\n4 Séries de 12 reps Squat avec barre à 70kg <br>\r\n4 séries de 12 reps Leg Press à 100Kg <br>\r\n4 Series - 15 reps mollets debouts avec poids 20kg <br>\r\nMardi: Séances bras <br>\r\nBiceps: <br>\r\n4 séries 12 reps Curl avec haltères 10kg <br>\r\n4 séries 12 reps Curl poulie 20kg <br>\r\n4 Séries 12 reps curl barre 20kg <br>\r\nTriceps: <br>\r\n4 séries 12 reps développé inversé 30kg <br>\r\n4 séries 15 dips sur banc <br>\r\n4séries 10 reps kickback avec haltère 12kg <br>\r\n4séries 12 reps extension poulie 30kg <br>\r\n\r\nMercredi: séance Pectoraux <br>\r\n6 séries 10 reps développé couchés avec haltères 30kg <br>\r\n6 séries 12 reps développé incliné barre 30kg <br>\r\n6 séries 12 reps pull-over avec machine 40kg <br>\r\n6 series 12 reps pull-over avec haltères 15 kg <br>\r\n', 'J\'ai du mal à manger correctement le midi alors je compense en faisant des séances plus longues à la salle  ', 1, 'man_face.jpg', 'man_profil.jpg', 12),
(2, '2020-02-18', 77, 'Lundi: Midi: Nouilles Cordons Bleu. \r\nSoir: Riz (50g) et Brocolis <br><br>\r\n\r\nMardi: Midi: Sandwich sur le pouce. \r\nSoir : Pizza <br><br>\r\n\r\nMercredi : Midi: Steack Frite. Soir: Pizza <br><br>\r\n\r\nJeudi: Midi: Burger. Soir: Riz Blanc et Poulet <br><br>\r\n\r\nVendredi : Midi: Cassoulet. \r\nSoir: Soirée au bar avec des amis et planchette de charcuterie.', 'Lundi et Mercredi: <br>\r\n3 séries 10 pompes <br>\r\n5 séries 30 crunchs <br>\r\n2 séries 12 reps Dev couchés à la barre 20kg <br>\r\n4x 1min mountain climber <br>\r\n\r\nJeudi: <br>\r\n1h Vélo elliptique <br>', 'Semaine difficile, beaucoup de dossier au travail \\. <br>\r\nJ\'ai des douleurs dans le dos pendant la séance de pompes, est-ce normal ? ', 1, 'man_face.jpg', 'man_profil.jpg', 12),
(3, '2020-01-01', 72, 'Lundi: Midi: Spaghetti Bolognaise.  \r\nSoir: Daurade Grillée et Quinoa. <br> <br>\r\n\r\nMardi: Midi: Tofu mariné et ratatouille. \r\nSoir: Salade Verte, haricot noir et Fromage.  <br> <br>\r\n\r\nMercredi: Midi: Burritos végan (guacamole, haricot noir, salade; fromage sauce fajitas). Soir: Nuggets de Poulet maison salade.  <br> <br>\r\n\r\nJeudi: Midi: Salade de pâte, tomate, olive, fromage, thon cornichon. \r\nSoir: Poulet au four, frite de patate douce', 'Lundi: 15 km de Jogging  <br> \r\nMardi: 10 km de Jogging et 6 x 30 pompes  <br> \r\nMercredi: 20km de jogging  <br> \r\nJeudi: <br>  Séance Jambes à la salle  \r\n20 min de cardio sur tapis, \r\n6 séries de 20 reps Squat (20kg) <br> \r\n6 Séries 20reps fentes latérales (poids du corps) <br> \r\n6séries 20 reps soulevé de terre (15kg)\r\nVendredi: 10km de jogging.', 'J\'essaye de mettre beaucoup de sucre lent pour préparer mon semi marathon dans 2 mois.  <br> \r\nJ\'accentue aussi la musculation de mes jambes', 1, 'man_face.jpg', 'man_profil.jpg', 13),
(5, '2020-01-15', 98, 'Lundi: Midi: Blanquette de veau. \r\nSoir: Filet de saumon, riz blanc et épinards. \r\n\r\nMardi: Midi: Risotto Champignon. \r\nSoir: Poulet fumé lentille. <br><br>\r\n\r\nMercredi: Midi: Sandwich. Soir: Choucroute poisson. <br><br>\r\n\r\nJeudi: Tomate farcie et Quinoa\r\nSoir: Endive Jambon et béchamel. <br><br>\r\n\r\nVendredi: Midi: Salade d\'Ebly\r\nSoir: Bouillabaisse ', 'toute la semaine: <br> 20 Min de rameur\r\nLundi: Programme Dos <br>\r\n3 Séries 12 Reps Traction <br>\r\n3 Séries 12 Reps Tirage vertical nuque <br>\r\n3 Séries 12 Reps Rowing à la barre <br>\r\n3 Séries 12 Reps Rowing Haltères <br>\r\nMercredi: Pectoraux <br>\r\n4 Séries 8 Reps Dev inclinés avec Haltères <br>\r\n4 Séries 8 Reps Dev écarté couché avec Haltères <br>\r\n4 Séries 8 Reps Poulies vis à vis\r\nVendredi: Jambes <br>\r\n4 séries de 16 reps fentes avec poids (30kg) <br>\r\n4 séries de 12 reps leg curl (à 50kg) <br>\r\n4 Séries de 12 reps Squat avec barre à 70kg <br>\r\n\r\n\r\n', 'RAS cette semaine, j\'applique votre programme et surveille mon alimentation pour perdre du poids. <br>\r\nJ\'ai d\'ailleurs déjà perdu 2 Kg.', 0, 'man_face.jpg', 'man_profil.jpg', 13),
(6, '2020-01-22', 88, 'Lundi: Midi: Patates douces, poulet. \r\nSoir: Côte de Boeuf brocoli, carottes, chou-fleur cuits a la vapeur. \r\n\r\nMardi: Midi: Purée de carottes Merguez.\r\nSoir: Cuisse de poulet au four, Patates douces. <br><br>\r\n\r\nMercredi: midi: Moules Frites. \r\nSoir: Salade de Quinoa composée. <br><br>\r\n\r\nJeudi: Midi: Salade César.\r\nSoir: Aubergine gratinée, Poivron farcie. <br><br>\r\n\r\nVendredi: Midi: Carpaccio de Boeuf\r\nSteack Vegan, petit légumes ', 'Lundi Bras <br>\r\nBiceps: <br>\r\n4 séries 12 reps Curl avec haltères 10kg <br>\r\n4 séries 12 reps Curl poulie 20kg <br>\r\n4 Séries 12 reps curl barre 20kg <br>\r\nTriceps:  <br>\r\n4 séries 12 reps développé inversé 30kg <br>\r\n4 séries 15 dips sur banc <br>\r\n4séries 10 reps kickback avec haltère 12kg <br>\r\n4séries 12 reps extension poulie 30kg <br>\r\nMercredi Jambes - Abdos <br>\r\n4 séries de 16 reps fentes avec poids (30kg) <br>\r\n4 séries de 12 reps leg curl (à 50kg)<br>\r\n4 Séries de 12 reps Squat avec barre à 70kg <br>\r\n4 séries de 12 reps Leg Press à 100Kg <br>\r\n4x 20 Abdos en V <br>\r\n4x 25 Superman <br>\r\n4 x 45 sec Planche <br>\r\nVendredi Dos - Pectoraux <br>\r\n3 Séries 12 Reps Traction <br>\r\n3 Séries 12 Reps Tirage vertical nuque <br>\r\n3 Séries 12 Reps Rowing à la barre <br>\r\n3 Séries 12 Reps Rowing Haltères <br>\r\n\r\n4 Séries 8 Reps Dev inclinés avec Haltères <br>\r\n4 Séries 8 Reps Dev écarté couché avec Haltères <br>\r\n4 Séries 8 Reps Poulies vis à vis\r\n', 'Je suis le programme que vous m\'avez fourni, je galère, mais c\'est gratifiant d\'y arriver.', 0, 'man_face.jpg', 'man_profil.jpg', 13),
(7, '2020-02-25', 125, 'Lundi: Midi: Chorba. Soir: Poulet Basquaise. <br> <br>\r\n\r\nMardi: Midi: Tofu mariné et ratatouille.\r\nSoir: Salade Verte, haricot noir et Fromage. <br> <br>\r\n\r\nMercredi: Midi: Burritos végan (guacamole, haricot noir, salade; fromage sauce fajitas). <br> <br>\r\n\r\nJeudi: Boeuf gros sel crudité. Soir: Pizza vegan (pâte à base de choux fleur) <br> <br>\r\n\r\nVendredi: Sauté de Soja, gratin de broccolis', '40 min de Cardio sur tapis <br>\r\nBiceps: <br>\r\n4 séries 12 reps Curl avec haltères 10kg <br>\r\n4 séries 12 reps Curl poulie 20kg <br>\r\n4 Séries 12 reps curl barre 20kg <br>\r\nTriceps: <br>\r\n4 séries 12 reps développé inversé 30kg <br>\r\n4 séries 15 dips sur banc <br>\r\n4séries 10 reps kickback avec haltère 12kg <br>\r\n4séries 12 reps extension poulie 30kg <br>\r\nMercredi Jambes - Abdos <br>\r\n4 séries de 16 reps fentes avec poids (30kg) <br>\r\n4 séries de 12 reps leg curl (à 50kg) <br>\r\n4 Séries de 12 reps Squat avec barre à 70kg <br>\r\n4 séries de 12 reps Leg Press à 100Kg <br>\r\n4x 20 Abdos en V <br>\r\n4x 25 Superman <br>\r\n4 x 45 sec Planche <br>\r\nVendredi Dos - Pectoraux <br>\r\n3 Séries 12 Reps Traction <br>\r\n3 Séries 12 Reps Tirage vertical nuque <br>\r\n3 Séries 12 Reps Rowing à la barre <br>\r\n3 Séries 12 Reps Rowing Haltères <br>\r\n\r\n4 Séries 8 Reps Dev inclinés avec Haltères <br>\r\n4 Séries 8 Reps Dev écarté couché avec Haltères <br>\r\n4 Séries 8 Reps Poulies vis à vis\r\n', 'Je remercie mon coach de m\'avoir lancé la dedans, c\'est vraiment difficile mais le fait de retrouver la forme me motive comme jaja !! ', 0, 'man_face.jpg', 'man_profil.jpg', 12),
(8, '2020-03-03', 84, 'Lundi: Midi: Sandwich thon-mayo.  \r\nSoir: Omelette champignon. <br> <br>\r\n\r\nMardi: Midi: Sandwich sur le pouce. Soir : Pizza <br> <br>\r\n\r\nMercredi : Midi: Steack Frite. \r\nSoir: Pizza <br> <br>\r\n\r\nJeudi: Midi: Burger. Soir: Riz Blanc et Poulet. <br> <br>\r\n\r\nVendredi : Midi: Cassoulet. \r\nSoir: Soirée au bar avec des amis et planchette de charcuterie.', 'Course a pieds de 5km, un peu de développé couché a la salle, squats, 1 séance de cross fit', 'Cette semaine était très très compliqué, vraiment peu de temps pour m\'entrainer correctement à cause du travail. ', 0, 'man_face.jpg', 'man_profil.jpg', 12);

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
  `password` text NOT NULL,
  `date_naissance` date DEFAULT NULL,
  `sexe` varchar(20) DEFAULT NULL,
  `taille` int(11) DEFAULT NULL,
  `id_role` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `personne`
--

INSERT INTO `personne` (`id_personne`, `nom`, `prenom`, `tel`, `email`, `password`, `date_naissance`, `sexe`, `taille`, `id_role`) VALUES
(9, 'Crastion', 'Alexandre', 603040201, 'alexandre@gmail.com', '$2y$10$egIL2giCNLMelM24Mml74u6miDQQaT8QvwB7RvQYY7GFotNPGXnc2', '1984-04-03', 'homme', 188, 1),
(10, 'Blanchard', 'Mélanie', 675463211, 'melanie@gmail.com', '$2y$10$BSObLRrEQ8nnhRDupwdCYeriWiUTN8..sL/CsyO4jyIG6icTHyZMC', '1992-10-12', 'femme', 174, 2),
(11, 'Salama', 'Hugo', 697854467, 'hugo@gmail.com', '$2y$10$FX8MCdSEMJTN8uJThENoG.vOfb3Bmu8bHImwz6RjZEvn6N43U97H2', '1980-08-01', 'homme', 190, 2),
(12, 'Grandcolas', 'Thomas', 655773435, 'grandcolas@gmail.com', '$2y$10$QP2ELY9adQaiipGtPqvwnu4.9ruSawIi.7sqwRgkCukIIiFRXEW8O', '1990-03-03', 'homme', 180, 3),
(13, 'Schmidt', 'Joffrey', 688992233, 'schmidt@gmail.com', '$2y$10$BEKd5e6lwzNNifcBsI47zunJA7DBzegiVDOwqEK3zf.ifTs9zcGcq', '1983-11-05', 'homme', 191, 3),
(14, 'Misha', 'Sarah', 713667823, 'misha@gmail.com', '$2y$10$CHA952HCWeDEH5dyAbWpmO0e2HjikDjsZNov8BI6BUN28zDlzJ8Vi', '1995-10-07', 'femme', 155, 3);

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
  ADD PRIMARY KEY (`id_commentaire`),
  ADD KEY `commentaire_ibfk_1` (`id_fiche`),
  ADD KEY `commentaire_ibfk_2` (`id_personne`);

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
  MODIFY `id_commentaire` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT pour la table `fichesuivi`
--
ALTER TABLE `fichesuivi`
  MODIFY `id_fiche` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT pour la table `personne`
--
ALTER TABLE `personne`
  MODIFY `id_personne` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

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
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
