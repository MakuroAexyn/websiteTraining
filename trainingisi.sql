SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";

--
-- Base de données :  `trainingisi`
--

-- --------------------------------------------------------

--
-- Structure de la table `produits`
--

CREATE TABLE `produits` (
  `id` int(11) NOT NULL,
  `nom` varchar(255) NOT NULL,
  `efficacite` int(11) NOT NULL,
  `annee` int(11) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

--
-- Contenu de la table `produits`
--

INSERT INTO `produits` (`id`, `nom`, `efficacite`, `annee`) VALUES
(1, 'compute_pgcd.py', 8, 2015),
(2, 'remove_error.py', 9, 2016),
(3, 'change_sql_tables.py', 6, 2014);

-- --------------------------------------------------------

--
-- Structure de la table `secret`
--

CREATE TABLE `secret` (
  `id` int(11) NOT NULL,
  `flag` varchar(255) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

--
-- Contenu de la table `secret`
--

INSERT INTO `secret` (`id`, `flag`) VALUES
(1, 'ISILAB{sQl_aCROss_TABLES}');

--
-- Index pour les tables exportées
--

--
-- Index pour la table `produits`
--
ALTER TABLE `produits`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `secret`
--
ALTER TABLE `secret`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT pour les tables exportées
--

--
-- AUTO_INCREMENT pour la table `produits`
--
ALTER TABLE `produits`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT pour la table `secret`
--
ALTER TABLE `secret`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=3;
