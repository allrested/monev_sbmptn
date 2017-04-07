-- Adminer 4.2.5 MySQL dump

SET NAMES utf8;
SET time_zone = '+00:00';
SET foreign_key_checks = 0;
SET sql_mode = 'NO_AUTO_VALUE_ON_ZERO';

DROP DATABASE IF EXISTS `instrument`;
CREATE DATABASE `instrument` /*!40100 DEFAULT CHARACTER SET latin1 */;
USE `instrument`;

DROP TABLE IF EXISTS `cbt_penanggung_jawab`;
CREATE TABLE `cbt_penanggung_jawab` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `update_id` varchar(5) NOT NULL,
  `1y` int(5) NOT NULL,
  `1n` int(5) NOT NULL,
  `2y` int(5) NOT NULL,
  `2n` int(5) NOT NULL,
  `3y` int(5) NOT NULL,
  `3n` int(5) NOT NULL,
  `4y` int(5) NOT NULL,
  `4n` int(5) NOT NULL,
  `5y` int(5) NOT NULL,
  `5n` int(5) NOT NULL,
  `6n` int(5) NOT NULL,
  `7y` int(5) NOT NULL,
  `6y` int(5) NOT NULL,
  `8y` int(5) NOT NULL,
  `7n` int(5) NOT NULL,
  `8n` int(5) NOT NULL,
  `9y` int(5) NOT NULL,
  `10y` int(5) NOT NULL,
  `10n` int(5) NOT NULL,
  `9n` int(5) NOT NULL,
  `2t` varchar(50) DEFAULT NULL,
  `8t` varchar(50) DEFAULT NULL,
  `4t` varchar(50) DEFAULT NULL,
  `6t` varchar(50) DEFAULT NULL,
  `5t` varchar(50) DEFAULT NULL,
  `7t` varchar(50) DEFAULT NULL,
  `9t` varchar(50) DEFAULT NULL,
  `3t` varchar(50) DEFAULT NULL,
  `10t` varchar(50) DEFAULT NULL,
  `1t` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

TRUNCATE `cbt_penanggung_jawab`;

DROP TABLE IF EXISTS `cbt_peserta_sbm`;
CREATE TABLE `cbt_peserta_sbm` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `update_id` int(11) NOT NULL,
  `1y` int(11) NOT NULL,
  `1t` int(11) NOT NULL,
  `2y` int(11) NOT NULL,
  `2t` int(11) NOT NULL,
  `3y` int(11) NOT NULL,
  `3t` int(11) NOT NULL,
  `4y` int(11) NOT NULL,
  `4t` int(11) NOT NULL,
  `5y` int(11) NOT NULL,
  `5t` int(11) NOT NULL,
  `6y` int(11) NOT NULL,
  `6t` int(11) NOT NULL,
  `7y` int(11) NOT NULL,
  `7t` int(11) NOT NULL,
  `8y` int(11) NOT NULL,
  `8t` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

TRUNCATE `cbt_peserta_sbm`;

DROP TABLE IF EXISTS `cbt_petugas_monev`;
CREATE TABLE `cbt_petugas_monev` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `update_id` varchar(5) NOT NULL,
  `a3a` int(1) NOT NULL,
  `a3c` int(1) NOT NULL,
  `a1` int(1) NOT NULL,
  `a3b` int(1) NOT NULL,
  `a2` int(1) NOT NULL,
  `a5` int(1) NOT NULL,
  `a3d` int(1) NOT NULL,
  `a4` int(1) NOT NULL,
  `a3e` int(1) NOT NULL,
  `b1` int(1) NOT NULL,
  `b2` int(1) NOT NULL,
  `b3` int(1) NOT NULL,
  `b4` int(1) NOT NULL,
  `c1` int(1) NOT NULL,
  `c2` int(1) NOT NULL,
  `c3` int(1) NOT NULL,
  `c4` int(1) NOT NULL,
  `d1` int(1) NOT NULL,
  `d2` int(1) NOT NULL,
  `d3` int(1) NOT NULL,
  `d7` int(1) NOT NULL,
  `d6` int(1) NOT NULL,
  `d5` int(1) NOT NULL,
  `d4` int(1) NOT NULL,
  `e1` int(1) NOT NULL,
  `e5` int(1) NOT NULL,
  `e4` int(1) NOT NULL,
  `e3` int(1) NOT NULL,
  `e2` int(1) NOT NULL,
  `a1t` varchar(255) NOT NULL,
  `a3at` varchar(255) NOT NULL,
  `a3bt` varchar(255) NOT NULL,
  `a3ct` varchar(255) NOT NULL,
  `a3dt` varchar(255) NOT NULL,
  `a3et` varchar(255) NOT NULL,
  `b4t` varchar(255) NOT NULL,
  `a5t` varchar(255) NOT NULL,
  `a4t` varchar(255) NOT NULL,
  `b3t` varchar(255) NOT NULL,
  `b2t` varchar(255) NOT NULL,
  `b1t` varchar(255) NOT NULL,
  `c3t` varchar(255) NOT NULL,
  `a2t` varchar(255) NOT NULL,
  `c1t` varchar(255) NOT NULL,
  `c2t` varchar(255) NOT NULL,
  `c4t` varchar(255) NOT NULL,
  `d1t` varchar(255) NOT NULL,
  `d7t` varchar(255) NOT NULL,
  `d6t` varchar(255) NOT NULL,
  `d5t` varchar(255) NOT NULL,
  `d4t` varchar(255) NOT NULL,
  `d3t` varchar(255) NOT NULL,
  `d2t` varchar(255) NOT NULL,
  `e1t` varchar(255) NOT NULL,
  `e5t` varchar(255) NOT NULL,
  `e4t` varchar(255) NOT NULL,
  `e3t` varchar(255) NOT NULL,
  `e2t` varchar(255) NOT NULL,
  `f` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

TRUNCATE `cbt_petugas_monev`;

DROP TABLE IF EXISTS `masukan_terpenting`;
CREATE TABLE `masukan_terpenting` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `update_id` int(4) NOT NULL,
  `isi1` varchar(255) DEFAULT NULL,
  `isi2` varchar(255) DEFAULT NULL,
  `isi3` varchar(255) DEFAULT NULL,
  `tanggal_sos` varchar(255) DEFAULT NULL,
  `lokasi_sos` varchar(255) DEFAULT NULL,
  `biaya` int(12) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

TRUNCATE `masukan_terpenting`;

DROP TABLE IF EXISTS `penanggung_jawab`;
CREATE TABLE `penanggung_jawab` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `update_id` varchar(5) NOT NULL,
  `1y` int(5) NOT NULL,
  `1n` int(5) NOT NULL,
  `2y` int(5) NOT NULL,
  `2n` int(5) NOT NULL,
  `3y` int(5) NOT NULL,
  `3n` int(5) NOT NULL,
  `4y` int(5) NOT NULL,
  `4n` int(5) NOT NULL,
  `5y` int(5) NOT NULL,
  `5n` int(5) NOT NULL,
  `6n` int(5) NOT NULL,
  `7y` int(5) NOT NULL,
  `6y` int(5) NOT NULL,
  `8y` int(5) NOT NULL,
  `7n` int(5) NOT NULL,
  `8n` int(5) NOT NULL,
  `9y` int(5) NOT NULL,
  `17n` int(5) NOT NULL,
  `11y` int(5) NOT NULL,
  `10y` int(5) NOT NULL,
  `10n` int(5) NOT NULL,
  `11n` int(5) NOT NULL,
  `9n` int(5) NOT NULL,
  `14y` int(5) NOT NULL,
  `13y` int(5) NOT NULL,
  `12n` int(5) NOT NULL,
  `13n` int(5) NOT NULL,
  `14n` int(5) NOT NULL,
  `15y` int(5) NOT NULL,
  `15n` int(5) NOT NULL,
  `16y` int(5) NOT NULL,
  `16n` int(5) NOT NULL,
  `17y` int(5) NOT NULL,
  `12y` int(5) NOT NULL,
  `16t` varchar(50) DEFAULT NULL,
  `1t` varchar(50) DEFAULT NULL,
  `18n` int(5) NOT NULL,
  `19y` int(5) NOT NULL,
  `2t` varchar(50) DEFAULT NULL,
  `8t` varchar(50) DEFAULT NULL,
  `4t` varchar(50) DEFAULT NULL,
  `6t` varchar(50) DEFAULT NULL,
  `5t` varchar(50) DEFAULT NULL,
  `7t` varchar(50) DEFAULT NULL,
  `9t` varchar(50) DEFAULT NULL,
  `3t` varchar(50) DEFAULT NULL,
  `10t` varchar(50) DEFAULT NULL,
  `11t` varchar(50) DEFAULT NULL,
  `12t` varchar(50) DEFAULT NULL,
  `13t` varchar(50) DEFAULT NULL,
  `14t` varchar(50) NOT NULL,
  `15t` varchar(50) DEFAULT NULL,
  `17t` varchar(50) DEFAULT NULL,
  `18y` int(5) NOT NULL,
  `18t` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

TRUNCATE `penanggung_jawab`;

DROP TABLE IF EXISTS `pendaftaran`;
CREATE TABLE `pendaftaran` (
  `id` int(255) NOT NULL AUTO_INCREMENT,
  `update_id` int(4) NOT NULL,
  `siswa` varchar(255) DEFAULT NULL,
  `guru_bk` varchar(255) DEFAULT NULL,
  `kepsek` varchar(255) DEFAULT NULL,
  `ortu` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

TRUNCATE `pendaftaran`;

DROP TABLE IF EXISTS `peserta_sbm`;
CREATE TABLE `peserta_sbm` (
  `id` int(11) NOT NULL,
  `update_id` int(11) NOT NULL,
  `1y` int(11) NOT NULL,
  `1t` int(11) NOT NULL,
  `2y` int(11) NOT NULL,
  `2t` int(11) NOT NULL,
  `3y` int(11) NOT NULL,
  `3t` int(11) NOT NULL,
  `4y` int(11) NOT NULL,
  `4t` int(11) NOT NULL,
  `5y` int(11) NOT NULL,
  `5t` int(11) NOT NULL,
  `6y` int(11) NOT NULL,
  `6t` int(11) NOT NULL,
  `peserta_sbm_catatan` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

TRUNCATE `peserta_sbm`;

DROP TABLE IF EXISTS `petugas_monev`;
CREATE TABLE `petugas_monev` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `update_id` varchar(5) NOT NULL,
  `a3a` int(1) NOT NULL,
  `a3c` int(1) NOT NULL,
  `a1` int(1) NOT NULL,
  `a3b` int(1) NOT NULL,
  `a2` int(1) NOT NULL,
  `a3f` int(1) NOT NULL,
  `a5` int(1) NOT NULL,
  `a3d` int(1) NOT NULL,
  `a4` int(1) NOT NULL,
  `a3e` int(1) NOT NULL,
  `b1` int(1) NOT NULL,
  `b2` int(1) NOT NULL,
  `b3` int(1) NOT NULL,
  `b4` int(1) NOT NULL,
  `c1` int(1) NOT NULL,
  `c2` int(1) NOT NULL,
  `c3` int(1) NOT NULL,
  `c4` int(1) NOT NULL,
  `c5` int(1) NOT NULL,
  `c6` int(1) NOT NULL,
  `d1` int(1) NOT NULL,
  `bf1` int(9) NOT NULL,
  `af1` int(9) NOT NULL,
  `df2` int(9) NOT NULL,
  `df1` int(9) NOT NULL,
  `cf2` int(9) NOT NULL,
  `aff1` int(1) NOT NULL,
  `ae1` int(1) NOT NULL,
  `be1` int(1) NOT NULL,
  `de1` int(1) NOT NULL,
  `ce1` int(1) NOT NULL,
  `cf1` int(9) NOT NULL,
  `ff3` varchar(12) NOT NULL,
  `cff1` int(1) NOT NULL,
  `a1t` varchar(255) NOT NULL,
  `de1t` varchar(255) NOT NULL,
  `ce1t` varchar(255) NOT NULL,
  `be1t` varchar(255) NOT NULL,
  `ae1t` varchar(255) NOT NULL,
  `bff1` int(1) NOT NULL,
  `dff1` int(1) NOT NULL,
  `g` varchar(255) NOT NULL,
  `bf2` int(9) NOT NULL,
  `ff2` varchar(255) NOT NULL,
  `a3at` varchar(255) NOT NULL,
  `a3bt` varchar(255) NOT NULL,
  `a3ct` varchar(255) NOT NULL,
  `a3dt` varchar(255) NOT NULL,
  `a3ft` varchar(255) NOT NULL,
  `a3et` varchar(255) NOT NULL,
  `b4t` varchar(255) NOT NULL,
  `a5t` varchar(255) NOT NULL,
  `a4t` varchar(255) NOT NULL,
  `b3t` varchar(255) NOT NULL,
  `b2t` varchar(255) NOT NULL,
  `b1t` varchar(255) NOT NULL,
  `c3t` varchar(255) NOT NULL,
  `c6t` varchar(255) NOT NULL,
  `a2t` varchar(255) NOT NULL,
  `c1t` varchar(255) NOT NULL,
  `c2t` varchar(255) NOT NULL,
  `c4t` varchar(255) NOT NULL,
  `d1t` varchar(255) NOT NULL,
  `c5t` varchar(255) NOT NULL,
  `af2` int(9) NOT NULL,
  `ee1` int(1) NOT NULL,
  `eet` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

TRUNCATE `petugas_monev`;

DROP TABLE IF EXISTS `portofolio`;
CREATE TABLE `portofolio` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `update_id` int(4) NOT NULL,
  `status_keolahragaan` tinyint(1) DEFAULT NULL,
  `status_seni` tinyint(1) DEFAULT NULL,
  `masukan_keolahragaan` varchar(255) DEFAULT NULL,
  `masukan_seni` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

TRUNCATE `portofolio`;

DROP TABLE IF EXISTS `t_1`;
CREATE TABLE `t_1` (
  `id` int(255) NOT NULL AUTO_INCREMENT,
  `update_id` int(4) NOT NULL,
  `mengundang_kepsek` int(4) DEFAULT NULL,
  `mengundang_guru` int(4) DEFAULT NULL,
  `mengundang_siswa` int(4) DEFAULT NULL,
  `mengundang_jum` int(4) DEFAULT NULL,
  `mengundang_lok` int(4) DEFAULT NULL,
  `mengundang_lainya` varchar(255) DEFAULT NULL,
  `mengunjungi_kepsek` int(4) DEFAULT NULL,
  `mengunjungi_guru` int(4) DEFAULT NULL,
  `mengunjungi_siswa` int(4) DEFAULT NULL,
  `mengunjungi_jum` int(4) DEFAULT NULL,
  `mengunjungi_lok` int(4) DEFAULT NULL,
  `mengunjungi_lainya` varchar(255) DEFAULT NULL,
  `media_kepsek` int(4) DEFAULT NULL,
  `media_guru` int(4) DEFAULT NULL,
  `media_siswa` varchar(4) DEFAULT NULL,
  `media_jum` int(4) DEFAULT NULL,
  `media_lok` int(4) DEFAULT NULL,
  `media_lainya` varchar(255) DEFAULT NULL,
  `leaflet_kepsek` int(4) DEFAULT NULL,
  `leaflet_guru` int(4) DEFAULT NULL,
  `leaflet_siswa` int(4) DEFAULT NULL,
  `leaflet_jum` int(4) DEFAULT NULL,
  `leaflet_lok` int(4) DEFAULT NULL,
  `leaflet_lainya` varchar(255) DEFAULT NULL,
  `baliho_kepsek` int(4) DEFAULT NULL,
  `baliho_guru` int(4) DEFAULT NULL,
  `baliho_siswa` int(4) DEFAULT NULL,
  `baliho_jum` int(4) DEFAULT NULL,
  `baliho_lok` int(4) DEFAULT NULL,
  `baliho_lainya` varchar(255) DEFAULT NULL,
  `tv_kepsek` int(4) DEFAULT NULL,
  `tv_guru` int(4) DEFAULT NULL,
  `tv_siswa` int(4) DEFAULT NULL,
  `tv_jum` int(4) DEFAULT NULL,
  `tv_lok` int(4) DEFAULT NULL,
  `tv_lainya` varchar(255) DEFAULT NULL,
  `radio_kepsek` int(4) DEFAULT NULL,
  `radio_guru` int(4) DEFAULT NULL,
  `radio_siswa` int(4) DEFAULT NULL,
  `radio_jum` int(4) DEFAULT NULL,
  `radio_lok` int(4) DEFAULT NULL,
  `radio_lainya` varchar(255) DEFAULT NULL,
  `lainya_pes` varchar(255) DEFAULT NULL,
  `lainya_jum` varchar(255) DEFAULT NULL,
  `lainya_lok` varchar(255) DEFAULT NULL,
  `lainya_lainya` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

TRUNCATE `t_1`;

DROP TABLE IF EXISTS `t_2`;
CREATE TABLE `t_2` (
  `id` int(255) NOT NULL AUTO_INCREMENT,
  `update_id` int(4) NOT NULL,
  `status_kepsek` tinyint(1) DEFAULT NULL,
  `ket_kepsek` tinyint(1) DEFAULT NULL,
  `status_gurubk` tinyint(1) DEFAULT NULL,
  `ket_gurubk` tinyint(1) DEFAULT NULL,
  `status_siswa` tinyint(1) DEFAULT NULL,
  `ket_siswa` tinyint(1) DEFAULT NULL,
  `status_ortu` tinyint(1) DEFAULT NULL,
  `ket_ortu` tinyint(1) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

TRUNCATE `t_2`;

DROP TABLE IF EXISTS `t_3`;
CREATE TABLE `t_3` (
  `id` int(255) NOT NULL AUTO_INCREMENT,
  `update_id` int(4) NOT NULL,
  `status_helpdesk` tinyint(1) DEFAULT NULL,
  `status_telpon` tinyint(1) DEFAULT NULL,
  `status_sms` tinyint(1) DEFAULT NULL,
  `status_twitter` tinyint(1) DEFAULT NULL,
  `status_fb` tinyint(1) DEFAULT NULL,
  `ket_helpdesk` tinyint(1) DEFAULT NULL,
  `ket_telpon` int(2) DEFAULT NULL,
  `ket_sms` int(3) DEFAULT NULL,
  `ket_twitter` int(2) DEFAULT NULL,
  `ket_fb` int(2) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

TRUNCATE `t_3`;

DROP TABLE IF EXISTS `t_4`;
CREATE TABLE `t_4` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `update_id` int(4) NOT NULL,
  `status_koneksi` tinyint(1) DEFAULT NULL,
  `status_npsn` tinyint(1) DEFAULT NULL,
  `status_nisn` tinyint(1) DEFAULT NULL,
  `status_akreditasi` tinyint(1) DEFAULT NULL,
  `status_cara` tinyint(1) DEFAULT NULL,
  `status_kurikulum` tinyint(1) DEFAULT NULL,
  `lainya` varchar(255) DEFAULT NULL,
  `ket_koneksi` tinyint(1) DEFAULT NULL,
  `ket_npsn` tinyint(1) DEFAULT NULL,
  `ket_nisn` tinyint(1) DEFAULT NULL,
  `ket_akreditasi` tinyint(1) DEFAULT NULL,
  `ket_cara` tinyint(1) DEFAULT NULL,
  `ket_kurikulum` tinyint(1) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

TRUNCATE `t_4`;

DROP TABLE IF EXISTS `t_5`;
CREATE TABLE `t_5` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `update_id` int(4) NOT NULL,
  `isi` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

TRUNCATE `t_5`;

DROP TABLE IF EXISTS `t_file`;
CREATE TABLE `t_file` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `update_id` varchar(4) NOT NULL,
  `nama_file` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

TRUNCATE `t_file`;

DROP TABLE IF EXISTS `t_monev`;
CREATE TABLE `t_monev` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(20) NOT NULL,
  `password` varchar(255) NOT NULL,
  `lokasi_monev` varchar(50) NOT NULL,
  `nama_petugas` varchar(30) NOT NULL,
  `asal_ptn` int(3) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

TRUNCATE `t_monev`;
INSERT INTO `t_monev` (`id`, `username`, `password`, `lokasi_monev`, `nama_petugas`, `asal_ptn`) VALUES
(1,	'test',	'test',	'ITS',	'test',	11);

DROP TABLE IF EXISTS `t_user`;
CREATE TABLE `t_user` (
  `id` int(255) NOT NULL AUTO_INCREMENT,
  `kode` varchar(5) NOT NULL,
  `password` varchar(5) NOT NULL,
  `nama` varchar(50) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

TRUNCATE `t_user`;
INSERT INTO `t_user` (`id`, `kode`, `password`, `nama`) VALUES
(1,	'11',	'11',	'UNIVERSITAS SYIAH KUALA'),
(2,	'12',	'12',	'UNIVERSITAS MALIKUSSALEH'),
(3,	'13',	'13',	'UNIVERSITAS TEUKU UMAR'),
(4,	'14',	'14',	'UNIVERSITAS NEGERI MEDAN'),
(5,	'15',	'15',	'UNIVERSITAS SUMATERA UTARA'),
(6,	'16',	'16',	'UNIVERSITAS SAMUDRA'),
(7,	'17',	'17',	'UNIVERSITAS NEGERI PADANG'),
(8,	'18',	'18',	'UNIVERSITAS ANDALAS'),
(9,	'19',	'19',	'UNIVERSITAS RIAU'),
(10,	'20',	'20',	'UNIVERSITAS ISLAM NEGERI SULTAN SYARIF KASIM'),
(11,	'21',	'21',	'UNIVERSITAS JAMBI'),
(12,	'22',	'22',	'UNIVERSITAS MARITIM RAJA ALI HAJI'),
(13,	'23',	'23',	'UNIVERSITAS SRIWIJAYA'),
(14,	'24',	'24',	'UNIVERSITAS BANGKA BELITUNG'),
(15,	'25',	'25',	'UNIVERSITAS BENGKULU'),
(16,	'26',	'26',	'INSTITUT TEKNOLOGI SUMATERA'),
(17,	'27',	'27',	'UNIVERSITAS LAMPUNG'),
(18,	'28',	'28',	'UNIVERSITAS ISLAM NEGERI RADEN FATAH'),
(19,	'29',	'29',	'UNIVERSITAS ISLAM NEGERI AR-RANIRY'),
(20,	'30',	'30',	'UNIVERSITAS NEGERI JAKARTA'),
(21,	'31',	'31',	'UNIVERSITAS INDONESIA'),
(22,	'32',	'32',	'UNIVERSITAS ISLAM NEGERI JAKARTA'),
(23,	'33',	'33',	'INSTITUT PERTANIAN BOGOR'),
(24,	'34',	'34',	'UNIVERSITAS PENDIDIKAN INDONESIA'),
(25,	'35',	'35',	'INSTITUT TEKNOLOGI BANDUNG'),
(26,	'36',	'36',	'UNIVERSITAS PADJADJARAN'),
(27,	'37',	'37',	'UNIVERSITAS ISLAM NEGERI SUNAN GUNUNG DJATI'),
(28,	'38',	'38',	'UNIVERSITAS SULTAN AGENG TIRTAYASA'),
(29,	'39',	'39',	'UPN \"VETERAN\" JAKARTA'),
(30,	'40',	'40',	'UNIVERSITAS SILIWANGI'),
(31,	'41',	'41',	'UNIVERSITAS JENDERAL SOEDIRMAN'),
(32,	'42',	'42',	'UNIVERSITAS NEGERI SEMARANG'),
(33,	'43',	'43',	'UNIVERSITAS DIPONEGORO'),
(34,	'44',	'44',	'UNIVERSITAS SEBELAS MARET'),
(35,	'45',	'45',	'UNIVERSITAS ISLAM NEGERI WALISONGO'),
(36,	'46',	'46',	'UNIVERSITAS NEGERI YOGYAKARTA'),
(37,	'47',	'47',	'UNIVERSITAS GADJAH MADA'),
(38,	'48',	'48',	'UNIVERSITAS ISLAM NEGERI SUNAN KALIJAGA'),
(39,	'49',	'49',	'UPN \"VETERAN\" YOGYAKARTA'),
(40,	'50',	'50',	'UNIVERSITAS NEGERI SURABAYA'),
(41,	'51',	'51',	'INSTITUT TEKNOLOGI SEPULUH NOPEMBER'),
(42,	'52',	'52',	'UNIVERSITAS AIRLANGGA'),
(43,	'53',	'53',	'UNIVERSITAS TRUNOJOYO'),
(44,	'54',	'54',	'UNIVERSITAS ISLAM NEGERI SUNAN AMPEL SURABAYA'),
(45,	'55',	'55',	'UNIVERSITAS NEGERI MALANG'),
(46,	'56',	'56',	'UNIVERSITAS BRAWIJAYA'),
(47,	'57',	'57',	'UNIVERSITAS ISLAM NEGERI MALANG'),
(48,	'58',	'58',	'UNIVERSITAS JEMBER'),
(49,	'59',	'59',	'UPN \"VETERAN\" JAWA TIMUR'),
(50,	'63',	'63',	'UNIVERSITAS UDAYANA'),
(51,	'64',	'64',	'UNIVERSITAS PENDIDIKAN GANESHA'),
(52,	'65',	'65',	'UNIVERSITAS MATARAM'),
(53,	'66',	'66',	'UNIVERSITAS NUSA CENDANA'),
(54,	'67',	'67',	'UNIVERSITAS TIMOR'),
(55,	'71',	'71',	'UNIVERSITAS TANJUNGPURA'),
(56,	'73',	'73',	'UNIVERSITAS PALANGKARAYA'),
(57,	'75',	'75',	'UNIVERSITAS LAMBUNG MANGKURAT'),
(58,	'77',	'77',	'UNIVERSITAS MULAWARMAN'),
(59,	'78',	'78',	'UNIVERSITAS BORNEO TARAKAN'),
(60,	'79',	'79',	'INSTITUT TEKNOLOGI KALIMANTAN'),
(61,	'80',	'80',	'UNIVERSITAS NEGERI MAKASSAR'),
(62,	'81',	'81',	'UNIVERSITAS ISLAM NEGERI ALAUDDIN'),
(63,	'82',	'82',	'UNIVERSITAS HASANUDDIN'),
(64,	'83',	'83',	'UNIVERSITAS TADULAKO'),
(65,	'84',	'84',	'UNIVERSITAS HALUOLEO'),
(66,	'85',	'85',	'UNIVERSITAS NEGERI GORONTALO'),
(67,	'86',	'86',	'UNIVERSITAS NEGERI MANADO'),
(68,	'87',	'87',	'UNIVERSITAS SAM RATULANGI'),
(69,	'88',	'88',	'UNIVERSITAS SULAWESI BARAT'),
(70,	'89',	'89',	'UNIVERSITAS SEMBILAN BELAS NOVEMBER KOLAKA'),
(71,	'90',	'90',	'UNIVERSITAS SINGAPERBANGSA KARAWANG'),
(72,	'91',	'91',	'UNIVERSITAS TIDAR'),
(73,	'92',	'92',	'UNIVERSITAS ISLAM NEGERI SUMATERA UTARA'),
(74,	'93',	'93',	'UNIVERSITAS PATTIMURA'),
(75,	'94',	'94',	'UNIVERSITAS CENDERAWASIH'),
(76,	'95',	'95',	'UNIVERSITAS KHAIRUN'),
(77,	'96',	'96',	'UNIVERSITAS PAPUA'),
(78,	'98',	'98',	'UNIVERSITAS MUSAMUS MERAUKE'),
(79,	'admin',	'admin',	'ADMINISTRATOR');

-- 2017-04-06 15:27:05
