CREATE TABLE `tb_rate` (
  `ID_RATE` int(11) NOT NULL,
  `ID_DOKUMEN` int(11) DEFAULT NULL,
  `ID_USER` int(11) DEFAULT NULL,
  `TANGGAL_RATE` datetime DEFAULT NULL,
  `NILAI_RATE` int(11) DEFAULT NULL,
  PRIMARY KEY (`ID_RATE`),
  KEY `FK_RATE_DOKUMEN` (`ID_DOKUMEN`),
  KEY `FK_USER_RATE` (`ID_USER`),
  CONSTRAINT `FK_RATE_DOKUMEN` FOREIGN KEY (`ID_DOKUMEN`) REFERENCES `tb_dokumen` (`ID_DOKUMEN`),
  CONSTRAINT `FK_USER_RATE` FOREIGN KEY (`ID_USER`) REFERENCES `tb_user` (`ID_USER`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8