-- Adminer 4.7.8 MySQL dump

SET NAMES utf8;
SET time_zone = '+00:00';
SET foreign_key_checks = 0;
SET sql_mode = 'NO_AUTO_VALUE_ON_ZERO';

DROP TABLE IF EXISTS `antrian`;
CREATE TABLE `antrian` (
  `id_antrian` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `tanggal` datetime DEFAULT NULL,
  `no_antrian` int(11) NOT NULL,
  `status` int(1) NOT NULL,
  `id_pelayanan` int(11) NOT NULL,
  `waktu_panggil` datetime DEFAULT NULL,
  `waktu_selesai` datetime DEFAULT NULL,
  `id_loket` int(11) NOT NULL,
  PRIMARY KEY (`id_antrian`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

INSERT INTO `antrian` (`id_antrian`, `tanggal`, `no_antrian`, `status`, `id_pelayanan`, `waktu_panggil`, `waktu_selesai`, `id_loket`) VALUES
(2,	'2021-07-09 00:00:00',	121,	1,	12,	'2021-07-09 02:12:00',	'2021-07-09 04:12:00',	0),
(3,	'2021-07-09 01:18:00',	12,	0,	2,	'2021-07-09 04:18:00',	'2021-07-09 07:19:00',	0);







DROP TABLE IF EXISTS `loket`;
CREATE TABLE `loket` (
  `id_loket` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `nama_loket` varchar(100) NOT NULL,
  `keterangan` text NOT NULL,
  `id_pelayanan` int(11) NOT NULL,
  `created_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL,
  PRIMARY KEY (`id_loket`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

INSERT INTO `loket` (`id_loket`, `nama_loket`, `keterangan`, `id_pelayanan`, `created_at`, `updated_at`) VALUES
(1,	'Mawar',	'mawar',	19,	'2021-07-10 17:09:55',	'2021-07-10 17:09:55'),
(5,	'Melati',	'aaa',	20,	'2021-07-10 20:03:40',	'2021-07-10 20:03:40');

DROP TABLE IF EXISTS `migrations`;
CREATE TABLE `migrations` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `version` varchar(255) NOT NULL,
  `class` varchar(255) NOT NULL,
  `group` varchar(255) NOT NULL,
  `namespace` varchar(255) NOT NULL,
  `time` int(11) NOT NULL,
  `batch` int(11) unsigned NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

INSERT INTO `migrations` (`id`, `version`, `class`, `group`, `namespace`, `time`, `batch`) VALUES
(5,	'2021-07-08-085619',	'App\\Database\\Migrations\\Pelayanan',	'default',	'App',	1625735195,	1),
(6,	'2021-07-08-085936',	'App\\Database\\Migrations\\Loket',	'default',	'App',	1625735195,	1),
(7,	'2021-07-08-090133',	'App\\Database\\Migrations\\Antrian',	'default',	'App',	1625735195,	1),
(8,	'2017-11-20-223112',	'Myth\\Auth\\Database\\Migrations\\CreateAuthTables',	'default',	'Myth\\Auth',	1625885885,	2);

DROP TABLE IF EXISTS `pelayanan`;
CREATE TABLE `pelayanan` (
  `id_pelayanan` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `nama_pelayanan` varchar(100) NOT NULL,
  `keterangan` text NOT NULL,
  `code_pelayanan` varchar(100) NOT NULL,
  `created_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL,
  PRIMARY KEY (`id_pelayanan`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

INSERT INTO `pelayanan` (`id_pelayanan`, `nama_pelayanan`, `keterangan`, `code_pelayanan`, `created_at`, `updated_at`) VALUES
(19,	'Berobat',	'Berobat',	'',	'2021-07-08 20:07:00',	'2021-07-08 20:07:00'),
(20,	'Berkunjung',	'Berkunjung',	'',	'2021-07-10 16:58:13',	'2021-07-10 16:58:13'),
(21,	'asdads',	'ssss',	'12',	'2021-07-11 20:45:08',	'2021-07-11 20:45:08');

SET NAMES utf8mb4;


-- 2021-07-12 02:00:54