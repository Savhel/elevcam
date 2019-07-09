-- phpMyAdmin SQL Dump
-- version 4.9.1
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1
-- Généré le :  ven. 01 juil. 2022 à 12:06
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
-- Base de données :  `bd_geschool`
--

-- --------------------------------------------------------

--
-- Structure de la table `etudiant`
--

CREATE TABLE `etudiant` (
  `idetudiant` int(11) NOT NULL,
  `matricule` char(9) NOT NULL,
  `nom` varchar(30) NOT NULL,
  `prenom` varchar(30) NOT NULL,
  `filiere` varchar(255) NOT NULL,
  `mail` varchar(255) NOT NULL,
  `phone` varchar(255) NOT NULL,
  `pseudo` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `active` tinyint(1) NOT NULL,
  `photo` varchar(255) NOT NULL,
  `pris` tinyint(1) NOT NULL,
  `niveau` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `etudiant`
--

INSERT INTO `etudiant` (`idetudiant`, `matricule`, `nom`, `prenom`, `filiere`, `mail`, `phone`, `pseudo`, `password`, `active`, `photo`, `pris`, `niveau`) VALUES
(53, '99nyzon22', 'Nzogue', 'Onyx', 'GSI', 'rachelnzogue9@gmail.com', '690295069', 'rachou', '$2y$10$ZXKET6enRsdS4wPpjn5B2OWWkI03Xwca5kywllYk2RutYDxxm/WeO', 1, 'photos/in.jpg', 1, 'niv1'),
(57, '54ebzor22', 'Nzogue', 'rebecca', 'GSI', 'nzoguerebecca@gmail.com', '657342299', 'sunshine', '$2y$10$Cqt09.P5JbL3ny0Xk5L2Auc7hszq2J14fxhAnHzPG.iCTxZI.Eexu', 1, 'photos/in4.jpg', 1, 'niv1'),
(58, '94utaka22', 'makougang', 'ruth', 'GSI', 'makoukalach@gmail.com', '698347669', 'kalach', '$2y$10$6aUe7DTS808l1CPJVs1vVuUvDsHZBR1EOL3jvr5Qjsdv8F9Cpapmi', 1, 'photos/in6.jpg', 0, 'niv1'),
(59, '53rnam@22', 'kameni', 'ornela', 'GSI', 'azerty@gmail', '657439876', 'fally', '$2y$10$QTNd0lPTQMgsJKqDkXmfYOm4VD3/QpGGMTir.GIgqQOP4Of0S0DFq', 1, 'photos/in8.jpg', 1, 'niv1'),
(60, '99avsa222', 'tsafack', 'savio', 'GSI', 'blife1255@gmail.com', '690295069', 'blhack', '$2y$10$uPvVfGKsuPeaTBBMIFpMwOgQwM2gFrFHYE11pAsl6eacJW0PfZGue', 1, 'photos/in.jpg', 1, 'niv1');

-- --------------------------------------------------------

--
-- Structure de la table `fichier`
--

CREATE TABLE `fichier` (
  `id` int(11) NOT NULL,
  `contenu` varchar(255) NOT NULL,
  `exp` varchar(255) NOT NULL,
  `filiere` varchar(30) NOT NULL,
  `nom` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `fichier`
--

INSERT INTO `fichier` (`id`, `contenu`, `exp`, `filiere`, `nom`) VALUES
(1, 'photos/ga2.jpg', 'Bakonga', '', ''),
(2, '../photos/ga2.jpg', 'Bakonga', '', ''),
(3, '../photos/+Fiche pratique de synthèse n°2+ - Eco Géné BTS1.pdf', '52ohakm22', 'GSI', ''),
(4, '../photos/+Fiche pratique de synthèse n°2+ - Eco Géné BTS1.pdf', '52ohakm22', 'GSI', 'economie'),
(6, '../photos/videoplayback (2).mp4', '52ohakm22', 'GSI', 'cisco');

-- --------------------------------------------------------

--
-- Structure de la table `filiere`
--

CREATE TABLE `filiere` (
  `id` int(11) NOT NULL,
  `nom` varchar(255) NOT NULL,
  `niveau` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `filiere`
--

INSERT INTO `filiere` (`id`, `nom`, `niveau`) VALUES
(1, 'GSI', 'niv1'),
(3, 'MCV', 'niv1'),
(5, 'CGE', 'niv1');

-- --------------------------------------------------------

--
-- Structure de la table `message`
--

CREATE TABLE `message` (
  `id` int(11) NOT NULL,
  `contenu` varchar(255) NOT NULL,
  `exp` varchar(255) NOT NULL,
  `recep` varchar(255) NOT NULL,
  `time` datetime NOT NULL,
  `active` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `message`
--

INSERT INTO `message` (`id`, `contenu`, `exp`, `recep`, `time`, `active`) VALUES
(6, 'comment tu vas ??', '52ohakm22', '99nyzon22', '2022-04-24 07:04:23', 0),
(8, 'salut', '52ohakm22', '54ebzor22', '2022-04-24 08:04:20', 0),
(9, 'bonjour mon petit', '52ohakm22', '99avsa222', '2022-04-25 12:04:33', 0),
(10, 'bonjour', '52ohakm22', '99nyzon22', '2022-04-25 12:04:36', 0);

-- --------------------------------------------------------

--
-- Structure de la table `niveau`
--

CREATE TABLE `niveau` (
  `id` int(11) NOT NULL,
  `niveau` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `niveau`
--

INSERT INTO `niveau` (`id`, `niveau`) VALUES
(1, 'niv1'),
(2, 'niv2'),
(3, 'licence'),
(4, 'master');

-- --------------------------------------------------------

--
-- Structure de la table `stagiaire`
--

CREATE TABLE `stagiaire` (
  `id` int(11) NOT NULL,
  `nom` varchar(255) NOT NULL,
  `prenom` varchar(255) NOT NULL,
  `filiere` char(3) NOT NULL,
  `mail` varchar(255) NOT NULL,
  `tel` varchar(255) NOT NULL,
  `pseudo` varchar(255) NOT NULL,
  `matricule` char(9) NOT NULL,
  `niveau` varchar(25) NOT NULL,
  `password` varchar(255) NOT NULL,
  `photo` varchar(255) NOT NULL,
  `super` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `stagiaire`
--

INSERT INTO `stagiaire` (`id`, `nom`, `prenom`, `filiere`, `mail`, `tel`, `pseudo`, `matricule`, `niveau`, `password`, `photo`, `super`) VALUES
(2, 'Nzogue', 'Onyx', 'GSI', 'rachelnzogue9@gmail.com', '690295069', 'rachou', '99nyzon22', 'niv1', '$2y$10$ZXKET6enRsdS4wPpjn5B2OWWkI03Xwca5kywllYk2RutYDxxm/WeO', 'photos/in.jpg', '52ohakm22'),
(3, 'Nzogue', 'rebecca', 'GSI', 'nzoguerebecca@gmail.com', '657342299', 'sunshine', '54ebzor22', 'niv1', '$2y$10$Cqt09.P5JbL3ny0Xk5L2Auc7hszq2J14fxhAnHzPG.iCTxZI.Eexu', 'photos/in4.jpg', '52ohakm22'),
(4, 'kameni', 'ornela', 'GSI', 'azerty@gmail', '657439876', 'fally', '53rnam@22', 'niv1', '$2y$10$QTNd0lPTQMgsJKqDkXmfYOm4VD3/QpGGMTir.GIgqQOP4Of0S0DFq', 'photos/in8.jpg', '52ohakm22'),
(5, 'tsafack', 'savio', 'GSI', 'blife1255@gmail.com', '690295069', 'blhack', '99avsa222', 'niv1', '$2y$10$uPvVfGKsuPeaTBBMIFpMwOgQwM2gFrFHYE11pAsl6eacJW0PfZGue', 'photos/in.jpg', '52ohakm22');

-- --------------------------------------------------------

--
-- Structure de la table `superviseur`
--

CREATE TABLE `superviseur` (
  `id` int(11) NOT NULL,
  `matricule` char(9) NOT NULL,
  `nom` varchar(255) NOT NULL,
  `prenom` varchar(255) NOT NULL,
  `photo` varchar(255) NOT NULL,
  `active` tinyint(1) NOT NULL,
  `specialite` varchar(255) NOT NULL,
  `pwd` varchar(255) NOT NULL,
  `mail` varchar(255) NOT NULL,
  `phone` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `superviseur`
--

INSERT INTO `superviseur` (`id`, `matricule`, `nom`, `prenom`, `photo`, `active`, `specialite`, `pwd`, `mail`, `phone`) VALUES
(1, '53onebu22', 'Debalou', 'Ronald', 'photos/in5.jpg', 1, 'GSI', '$2y$10$hqidQXap5bL824SH6uCGF.jufikVIx9WcFrZu6uy7PSriuj.54OWi', 'debalouronald@gmail.com', '654337865'),
(2, '99avot222', 'Fotso', 'savio', '../../../photos/in7.jpg', 1, 'GSI', '$2y$10$JzOA6IfOmyNruGsAYSlubOonrUg7JyaTANnjmdmBE3auaaJ24bfDy', 'blife1255@gmail.com', '690295069'),
(3, '52ohakm22', 'Bakonga', 'johnson', 'photos/in9.jpg', 1, 'GSI', '$2y$10$v/EoxwfSSMhq5cgQ0iQ9PenKY3W4Y7/a3eItksmL3T3NfvoJatkeS', 'baki@gmail.com', '654123798');

-- --------------------------------------------------------

--
-- Structure de la table `tache`
--

CREATE TABLE `tache` (
  `id` int(11) NOT NULL,
  `libelle` varchar(255) NOT NULL,
  `super` varchar(255) NOT NULL,
  `exec` varchar(255) NOT NULL,
  `jour` date NOT NULL,
  `sta_v` tinyint(1) NOT NULL,
  `sup_v` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `tache`
--

INSERT INTO `tache` (`id`, `libelle`, `super`, `exec`, `jour`, `sta_v`, `sup_v`) VALUES
(2, 'verifier les codes php ', '52ohakm22', '99nyzon22', '2022-04-25', 0, 0),
(3, 'appeler les clients', '52ohakm22', '54ebzor22', '2022-04-25', 0, 0),
(4, 'code pascal', '52ohakm22', '99avsa222', '2022-04-25', 1, 1);

-- --------------------------------------------------------

--
-- Structure de la table `users`
--

CREATE TABLE `users` (
  `Iduser` int(11) NOT NULL,
  `login` varchar(30) DEFAULT NULL,
  `pwd` varchar(30) DEFAULT NULL,
  `role` varchar(30) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `users`
--

INSERT INTO `users` (`Iduser`, `login`, `pwd`, `role`) VALUES
(2, 'kameni', 'qwerty', 'utilisateur'),
(6, 'Savio', 'azerty', 'administrateur'),
(7, 'rachel', 'rachou', 'utilisateur');

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `etudiant`
--
ALTER TABLE `etudiant`
  ADD PRIMARY KEY (`idetudiant`);

--
-- Index pour la table `fichier`
--
ALTER TABLE `fichier`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `filiere`
--
ALTER TABLE `filiere`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `message`
--
ALTER TABLE `message`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `niveau`
--
ALTER TABLE `niveau`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `stagiaire`
--
ALTER TABLE `stagiaire`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `superviseur`
--
ALTER TABLE `superviseur`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `tache`
--
ALTER TABLE `tache`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`Iduser`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `etudiant`
--
ALTER TABLE `etudiant`
  MODIFY `idetudiant` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=61;

--
-- AUTO_INCREMENT pour la table `fichier`
--
ALTER TABLE `fichier`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT pour la table `filiere`
--
ALTER TABLE `filiere`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT pour la table `message`
--
ALTER TABLE `message`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT pour la table `niveau`
--
ALTER TABLE `niveau`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT pour la table `stagiaire`
--
ALTER TABLE `stagiaire`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT pour la table `superviseur`
--
ALTER TABLE `superviseur`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT pour la table `tache`
--
ALTER TABLE `tache`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT pour la table `users`
--
ALTER TABLE `users`
  MODIFY `Iduser` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
