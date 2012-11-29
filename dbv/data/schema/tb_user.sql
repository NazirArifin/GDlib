CREATE TABLE `tb_user` (
  `ID_USER` int(11) NOT NULL,
  `ID_LEVEL_USER` int(11) DEFAULT NULL,
  `NAMA_USER` varchar(20) DEFAULT NULL,
  `LEVEL_USER` char(1) DEFAULT NULL,
  `AKTIVITAS_USER` text,
  `NO_INDUK_USER` varchar(20) DEFAULT NULL,
  `ID_FACEBOOK_USER` varchar(20) DEFAULT NULL,
  PRIMARY KEY (`ID_USER`),
  KEY `FK_LEVEL_USER` (`ID_LEVEL_USER`),
  CONSTRAINT `FK_LEVEL_USER` FOREIGN KEY (`ID_LEVEL_USER`) REFERENCES `tb_level_user` (`ID_LEVEL_USER`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8