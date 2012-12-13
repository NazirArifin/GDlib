-- phpMyAdmin SQL Dump
-- version 3.4.5
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Waktu pembuatan: 13. Desember 2012 jam 08:57
-- Versi Server: 5.5.16
-- Versi PHP: 5.3.8

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `gdlib`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_aktivitas`
--

CREATE TABLE IF NOT EXISTS `tb_aktivitas` (
  `ID_AKTIVITAS` int(11) NOT NULL AUTO_INCREMENT,
  `ID_JENIS_AKTIVITAS` int(11) DEFAULT NULL,
  `NAMA_AKTIVITAS` varchar(20) DEFAULT NULL,
  PRIMARY KEY (`ID_AKTIVITAS`),
  KEY `FK_JENIS_AKTIVITAS` (`ID_JENIS_AKTIVITAS`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_dokumen`
--

CREATE TABLE IF NOT EXISTS `tb_dokumen` (
  `ID_DOKUMEN` int(11) NOT NULL AUTO_INCREMENT,
  `ID_KATEGORI_DOKUMEN` int(11) DEFAULT NULL,
  `ID_JENIS_DOKUMEN` int(11) DEFAULT NULL,
  `ID_STATUS_DOKUMEN` int(11) DEFAULT NULL,
  `ID_USER` int(11) DEFAULT NULL,
  `JUDUL_DOKUMEN` varchar(50) DEFAULT NULL,
  `PENGARANG_DOKUMEN` varchar(20) DEFAULT NULL,
  `PROLOG_DOKUMEN` text,
  `TAHUN_PENERBITAN_DOKUMEN` varchar(4) DEFAULT NULL,
  `FILE_DOKUMEN` varchar(50) DEFAULT NULL,
  `FOTO_DOKUMEN` varchar(50) DEFAULT NULL,
  `KATA_KUNCI_DOKUMEN` text,
  `UKURAN_FILE_DOKUMEN` float DEFAULT NULL,
  `RATE_DOKUMEN` int(11) DEFAULT NULL,
  `JUMLAH_DOWNLOAD_DOKUMEN` int(11) DEFAULT NULL,
  `JUMLAH_BACA_DOKUMEN` int(11) DEFAULT NULL,
  PRIMARY KEY (`ID_DOKUMEN`),
  KEY `FK_JENIS_DOKUMEN` (`ID_JENIS_DOKUMEN`),
  KEY `FK_KATEGORI_DOKUMEN` (`ID_KATEGORI_DOKUMEN`),
  KEY `FK_STATUS_DOKUMEN` (`ID_STATUS_DOKUMEN`),
  KEY `FK_USER_DOKUMEN` (`ID_USER`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_jenis_aktivitas`
--

CREATE TABLE IF NOT EXISTS `tb_jenis_aktivitas` (
  `ID_JENIS_AKTIVITAS` int(11) NOT NULL AUTO_INCREMENT,
  `NAMA_JENIS_AKTIVITAS` varchar(20) DEFAULT NULL,
  PRIMARY KEY (`ID_JENIS_AKTIVITAS`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_jenis_dokumen`
--

CREATE TABLE IF NOT EXISTS `tb_jenis_dokumen` (
  `ID_JENIS_DOKUMEN` int(11) NOT NULL AUTO_INCREMENT,
  `JENIS_DOKUMEN` varchar(10) DEFAULT NULL,
  PRIMARY KEY (`ID_JENIS_DOKUMEN`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_kategori_dokumen`
--

CREATE TABLE IF NOT EXISTS `tb_kategori_dokumen` (
  `ID_KATEGORI_DOKUMEN` int(11) NOT NULL AUTO_INCREMENT,
  `NAMA_KATEGORI_DOKUMEN` varchar(20) DEFAULT NULL,
  PRIMARY KEY (`ID_KATEGORI_DOKUMEN`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_level_user`
--

CREATE TABLE IF NOT EXISTS `tb_level_user` (
  `ID_LEVEL_USER` int(11) NOT NULL AUTO_INCREMENT,
  `NAMA_LEVEL_USER` varchar(20) DEFAULT NULL,
  PRIMARY KEY (`ID_LEVEL_USER`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=7 ;

--
-- Dumping data untuk tabel `tb_level_user`
--

INSERT INTO `tb_level_user` (`ID_LEVEL_USER`, `NAMA_LEVEL_USER`) VALUES
(1, 'admin'),
(2, 'dosen'),
(3, 'mahasiswa');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_news`
--

CREATE TABLE IF NOT EXISTS `tb_news` (
  `ID_NEWS` int(11) NOT NULL AUTO_INCREMENT,
  `ID_STATUS_NEWS` int(11) DEFAULT NULL,
  `JUDUL_NEWS` varchar(40) DEFAULT NULL,
  `ISI_NEWS` text,
  `GAMBAR_NEWS` varchar(50) DEFAULT NULL,
  `STATUS_NEWS` char(1) DEFAULT NULL,
  PRIMARY KEY (`ID_NEWS`),
  KEY `FK_STATUS_NEWS` (`ID_STATUS_NEWS`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_profil`
--

CREATE TABLE IF NOT EXISTS `tb_profil` (
  `ID_PROFIL` int(11) NOT NULL AUTO_INCREMENT,
  `ID_USER` int(11) DEFAULT NULL,
  `NAMA_PROFIL` varchar(50) DEFAULT NULL,
  `JENIS_KELAMIN` char(1) DEFAULT NULL,
  `TEMPAT_LAHIR` varchar(20) DEFAULT NULL,
  `TGL_LAHIR` datetime DEFAULT NULL,
  `ALAMAT_PROFIL` varchar(50) DEFAULT NULL,
  `EMAIL_PROFIL` varchar(50) DEFAULT NULL,
  `TAMPIL_EMAIL_PROFIL` char(1) DEFAULT NULL,
  `NO_HP_PROFIL` varchar(12) DEFAULT NULL,
  `TAMPIL_NO_HP_PROFIL` char(1) DEFAULT NULL,
  `FOTO_PROFIL` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`ID_PROFIL`),
  KEY `FK_USER_PROFIL` (`ID_USER`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=13 ;

--
-- Dumping data untuk tabel `tb_profil`
--

INSERT INTO `tb_profil` (`ID_PROFIL`, `ID_USER`, `NAMA_PROFIL`, `JENIS_KELAMIN`, `TEMPAT_LAHIR`, `TGL_LAHIR`, `ALAMAT_PROFIL`, `EMAIL_PROFIL`, `TAMPIL_EMAIL_PROFIL`, `NO_HP_PROFIL`, `TAMPIL_NO_HP_PROFIL`, `FOTO_PROFIL`) VALUES
(9, 9, 'SafaNa', 'L', 'Sumenep', '2002-07-17 00:00:00', 'Sumenep', 'safana.bib@gmail.com', 'Y', '087750221441', 'Y', 'habib.jpg'),
(10, 10, 'Deje Novear', 'L', 'Pasongsongan', '2012-12-27 00:00:00', 'Pasongsongan', 'irawan.deki88@gmail.com', 'Y', '082773881917', 'Y', 'deki.png');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_rate`
--

CREATE TABLE IF NOT EXISTS `tb_rate` (
  `ID_RATE` int(11) NOT NULL AUTO_INCREMENT,
  `ID_DOKUMEN` int(11) DEFAULT NULL,
  `ID_USER` int(11) DEFAULT NULL,
  `TANGGAL_RATE` datetime DEFAULT NULL,
  `NILAI_RATE` int(11) DEFAULT NULL,
  PRIMARY KEY (`ID_RATE`),
  KEY `FK_RATE_DOKUMEN` (`ID_DOKUMEN`),
  KEY `FK_USER_RATE` (`ID_USER`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_status_dokumen`
--

CREATE TABLE IF NOT EXISTS `tb_status_dokumen` (
  `ID_STATUS_DOKUMEN` int(11) NOT NULL AUTO_INCREMENT,
  `NAMA_STATUS_DOKUMEN` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`ID_STATUS_DOKUMEN`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_status_news`
--

CREATE TABLE IF NOT EXISTS `tb_status_news` (
  `ID_STATUS_NEWS` int(11) NOT NULL AUTO_INCREMENT,
  `NAMA_STATUS_NEWS` varchar(20) DEFAULT NULL,
  PRIMARY KEY (`ID_STATUS_NEWS`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_user`
--

CREATE TABLE IF NOT EXISTS `tb_user` (
  `ID_USER` int(11) NOT NULL AUTO_INCREMENT,
  `ID_LEVEL_USER` int(11) DEFAULT NULL,
  `NAMA_USER` varchar(20) DEFAULT NULL,
  `AKTIVITAS_USER` text,
  `NO_INDUK_USER` varchar(20) DEFAULT NULL,
  `ID_FACEBOOK_USER` varchar(20) DEFAULT NULL,
  PRIMARY KEY (`ID_USER`),
  KEY `FK_LEVEL_USER` (`ID_LEVEL_USER`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=13 ;

--
-- Dumping data untuk tabel `tb_user`
--

INSERT INTO `tb_user` (`ID_USER`, `ID_LEVEL_USER`, `NAMA_USER`, `AKTIVITAS_USER`, `NO_INDUK_USER`, `ID_FACEBOOK_USER`) VALUES
(9, 1, 'Habibullah', 'innput data', '0955201556', 'www.facebook.com/hab'),
(10, 2, 'Deki Andi Irawan', 'Upload, View dan Download', '0955201588', 'www.faceboo.com/deki'),
(11, 1, 'Habibullah', 'innput data', '0955201556', 'www.facebook.com/hab'),
(12, 2, 'Deki Andi Irawan', 'Upload, View dan Download', '0955201588', 'www.faceboo.com/deki');

--
-- Ketidakleluasaan untuk tabel pelimpahan (Dumped Tables)
--

--
-- Ketidakleluasaan untuk tabel `tb_aktivitas`
--
ALTER TABLE `tb_aktivitas`
  ADD CONSTRAINT `FK_JENIS_AKTIVITAS` FOREIGN KEY (`ID_JENIS_AKTIVITAS`) REFERENCES `tb_jenis_aktivitas` (`ID_JENIS_AKTIVITAS`);

--
-- Ketidakleluasaan untuk tabel `tb_dokumen`
--
ALTER TABLE `tb_dokumen`
  ADD CONSTRAINT `FK_JENIS_DOKUMEN` FOREIGN KEY (`ID_JENIS_DOKUMEN`) REFERENCES `tb_jenis_dokumen` (`ID_JENIS_DOKUMEN`),
  ADD CONSTRAINT `FK_KATEGORI_DOKUMEN` FOREIGN KEY (`ID_KATEGORI_DOKUMEN`) REFERENCES `tb_kategori_dokumen` (`ID_KATEGORI_DOKUMEN`),
  ADD CONSTRAINT `FK_STATUS_DOKUMEN` FOREIGN KEY (`ID_STATUS_DOKUMEN`) REFERENCES `tb_status_dokumen` (`ID_STATUS_DOKUMEN`),
  ADD CONSTRAINT `FK_USER_DOKUMEN` FOREIGN KEY (`ID_USER`) REFERENCES `tb_user` (`ID_USER`);

--
-- Ketidakleluasaan untuk tabel `tb_news`
--
ALTER TABLE `tb_news`
  ADD CONSTRAINT `FK_STATUS_NEWS` FOREIGN KEY (`ID_STATUS_NEWS`) REFERENCES `tb_status_news` (`ID_STATUS_NEWS`);

--
-- Ketidakleluasaan untuk tabel `tb_profil`
--
ALTER TABLE `tb_profil`
  ADD CONSTRAINT `FK_USER_PROFIL` FOREIGN KEY (`ID_USER`) REFERENCES `tb_user` (`ID_USER`);

--
-- Ketidakleluasaan untuk tabel `tb_rate`
--
ALTER TABLE `tb_rate`
  ADD CONSTRAINT `FK_RATE_DOKUMEN` FOREIGN KEY (`ID_DOKUMEN`) REFERENCES `tb_dokumen` (`ID_DOKUMEN`),
  ADD CONSTRAINT `FK_USER_RATE` FOREIGN KEY (`ID_USER`) REFERENCES `tb_user` (`ID_USER`);

--
-- Ketidakleluasaan untuk tabel `tb_user`
--
ALTER TABLE `tb_user`
  ADD CONSTRAINT `FK_LEVEL_USER` FOREIGN KEY (`ID_LEVEL_USER`) REFERENCES `tb_level_user` (`ID_LEVEL_USER`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
