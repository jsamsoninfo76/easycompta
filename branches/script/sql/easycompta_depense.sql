--
-- Structure de la table `easycompta_depense`
--

CREATE TABLE IF NOT EXISTS `easycompta_depense` (
  `id_depense` int(11) NOT NULL AUTO_INCREMENT,
  `cout` int(11) NOT NULL,
  `id_categorie` int(11) NOT NULL,
  `id_user` int(11) NOT NULL,
  `description` varchar(255) NOT NULL,
  PRIMARY KEY (`id_depense`),
  KEY `id_categorie` (`id_categorie`),
  KEY `id_user` (`id_user`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;
