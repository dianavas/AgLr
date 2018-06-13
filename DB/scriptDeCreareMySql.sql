DROP TABLE IF EXISTS `utilizator`;
CREATE TABLE `utilizator` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `email` varchar(45) NOT NULL,
  `nume` varchar(45) NOT NULL,
  `prenume` varchar(45) NOT NULL,
  `username` varchar(45) NOT NULL,
  `parola` varchar(45) NOT NULL,
  `data_nastere` datetime NOT NULL,
  `tip` varchar(45) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

DROP TABLE IF EXISTS `teren`;
CREATE TABLE `teren` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `id_utilizator` int(11) NOT NULL,
  `clima` varchar(45),
  `riscuri` varchar(45),
  `altele` varchar(45),
  `categorie` int(1),
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

DROP TABLE IF EXISTS `cadastru`;
CREATE TABLE `cadastru` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `id_teren` int(11) NOT NULL,
  `suprafata` int(45),
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

