CREATE DATABASE `db477496277` DEFAULT CHARACTER SET latin1 COLLATE latin1_general_ci;
USE db477496277;

-- --------------------------------------------------------

-- 
-- Structure de la table `CATEGORY`
-- 

CREATE TABLE `CATEGORY` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(200) COLLATE latin1_general_ci NOT NULL,
  `id_menu_type` int(11) NOT NULL,
  `id_carte` int(11) NOT NULL,
  `sort_number` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=3 DEFAULT CHARSET=latin1 COLLATE=latin1_general_ci AUTO_INCREMENT=3 ;
INSERT INTO `CATEGORY` VALUES (1, 'maki', 1, 1, 0);
INSERT INTO `CATEGORY` VALUES (2, 'maki 8 pièces', 1, 1, 0);


-- Structure de la table `HORAIRES`
-- 

CREATE TABLE `HORAIRES` (
  `ID` int(11) NOT NULL AUTO_INCREMENT,
  `idR` int(11) NOT NULL,
  `day` int(11) NOT NULL,
  `ouverture` time NOT NULL,
  `fermeture` time NOT NULL,
  PRIMARY KEY (`ID`)
) ENGINE=InnoDB AUTO_INCREMENT=1487 DEFAULT CHARSET=latin1 AUTO_INCREMENT=1487 ;

CREATE TABLE `PRODUCT` (
  `id_product` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(200) COLLATE latin1_general_ci NOT NULL,
  `description` varchar(500) COLLATE latin1_general_ci NOT NULL,
  `price` float NOT NULL,
  `id_category` int(11) NOT NULL,
  `sort_number_product` int(11) NOT NULL,
  PRIMARY KEY (`id_product`)
) ENGINE=MyISAM AUTO_INCREMENT=5 DEFAULT CHARSET=latin1 COLLATE=latin1_general_ci AUTO_INCREMENT=5 ;

-- 
-- Contenu de la table `PRODUCT`
-- 

INSERT INTO `PRODUCT` VALUES (1, 'saumon', '', 4, 1, 0);
INSERT INTO `PRODUCT` VALUES (2, 'saumon / avocat', '', 4, 2, 0);
INSERT INTO `PRODUCT` VALUES (3, 'thon', '', 4, 2, 0);
INSERT INTO `PRODUCT` VALUES (4, 'saumon / cheese', '', 4, 1, 0);


CREATE TABLE `RESTAURANT` (
  `idR` int(11) NOT NULL AUTO_INCREMENT,
  `idC` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `address` varchar(200) NOT NULL,
  `zip` varchar(5) NOT NULL,
  `category` varchar(100) NOT NULL,
  `phone_number` varchar(10) NOT NULL,
  `number_orders` int(11) NOT NULL DEFAULT '0',
  `picture` varchar(50) NOT NULL,
  PRIMARY KEY (`idR`)
) ENGINE=InnoDB AUTO_INCREMENT=180 DEFAULT CHARSET=latin1 AUTO_INCREMENT=180 ;

INSERT INTO `RESTAURANT` VALUES (1, 1, 'Mandarin 168 prestige', '98 Rue de Saussure', '75017', 'Chinois/Thaï', '0142129898', 0, '1.gif');

-- 

CREATE TABLE `SELECTION` (
  `ID` int(11) NOT NULL AUTO_INCREMENT,
  `zip_code` varchar(5) NOT NULL,
  `id_resto` int(11) NOT NULL,
  PRIMARY KEY (`ID`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

CREATE TABLE `ZONE_LIV` (
  `ID` int(11) NOT NULL AUTO_INCREMENT,
  `idR` int(11) NOT NULL,
  `zip_code` varchar(5) NOT NULL,
  `min_liv` varchar(100) NOT NULL,
  PRIMARY KEY (`ID`)
) ENGINE=InnoDB AUTO_INCREMENT=399 DEFAULT CHARSET=latin1 AUTO_INCREMENT=399 ;


-- 