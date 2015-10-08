-- --------------------------------------------------------
-- Host:                         127.0.0.1
-- Server version:               5.6.17-log - MySQL Community Server (GPL)
-- Server OS:                    Win32
-- HeidiSQL Version:             8.3.0.4694
-- --------------------------------------------------------

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET NAMES utf8 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;

-- Dumping database structure for imoti
DROP DATABASE IF EXISTS `imoti`;
CREATE DATABASE IF NOT EXISTS `imoti` /*!40100 DEFAULT CHARACTER SET utf8 COLLATE utf8_unicode_ci */;
USE `imoti`;


-- Dumping structure for table imoti.accounts
DROP TABLE IF EXISTS `accounts`;
CREATE TABLE IF NOT EXISTS `accounts` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `username` varchar(50) CHARACTER SET utf8 NOT NULL,
  `password` varchar(255) CHARACTER SET utf8 NOT NULL,
  `email` varchar(255) CHARACTER SET utf8 NOT NULL,
  `display_name` varchar(255) COLLATE utf8_unicode_ci NOT NULL COMMENT 'The name which will be displayed onto site',
  `remember_token` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `is_agency` enum('0','1') CHARACTER SET utf8 NOT NULL DEFAULT '0' COMMENT 'Whether or not is real estate agancy',
  `is_subprofile` enum('0','1') CHARACTER SET utf8 NOT NULL DEFAULT '0' COMMENT 'Whether or not is a subprofile of the current one',
  `online` enum('0','1') COLLATE utf8_unicode_ci NOT NULL DEFAULT '0' COMMENT 'Is this account is online',
  `active` enum('0','1') COLLATE utf8_unicode_ci NOT NULL DEFAULT '1' COMMENT 'Banned or active account',
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  PRIMARY KEY (`id`),
  UNIQUE KEY `email` (`email`),
  UNIQUE KEY `username` (`username`),
  KEY `id` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=10 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- Dumping data for table imoti.accounts: ~6 rows (approximately)
DELETE FROM `accounts`;
/*!40000 ALTER TABLE `accounts` DISABLE KEYS */;
INSERT INTO `accounts` (`id`, `username`, `password`, `email`, `display_name`, `remember_token`, `is_agency`, `is_subprofile`, `online`, `active`, `created_at`, `updated_at`) VALUES
	(1, 'relax', '$2y$10$V1gEtXPm8kTu2wtbHfmcn.5FLpy1w5GrVstNX0YGiBg4B1LM8mSgu', 'relax4o92@gmail.com', 'Стефан Тотев', 'ZiVu74oelDrtwuRR3PqZNKZN9iA2bG7QzGz9z6Yfr7eFgEfPuOhFtbRbNPAH', '0', '0', '0', '1', '2015-10-03 23:09:12', '2015-10-08 17:30:04'),
	(5, 'test', '$2y$10$1QQI80FgRsPE1fuwfJZx.u15b9Es3v1.EQKG1V9LLEA7KKbHIjBwm', 'test@test.bg', 'Test Display Name', 'kVPl0P6wrw6cnR6J9w9SFL4zv1fQ3MRsB1DU8oJnHqhov8djVgJ4hR84nJhm', '0', '0', '0', '1', '2015-10-04 20:06:40', '2015-10-08 07:29:30'),
	(6, 'relax4o', '$2y$10$fWyhSqblbj/zS4FxmfsXpObb8BN6QMGuJRzG/3/FwL8cJ45ebij.q', 'stefan.totev92@gmail.com', 'Стефчо', 'q2KqY8xdy8Ii2MN1itxqTvOakZOETVm1kvcAorPxFEhPbSNQc8oRIbw6mMLh', '0', '0', '0', '1', '2015-10-07 17:58:03', '2015-10-08 17:22:38'),
	(7, 'relaxx', '$2y$10$lNgu09rFOg5lKyOP/xCu.uwPwa.M3YWt70GBD6q8/HVEI4v84OpVS', 'koti@ima.bg', 'ko mi ima', NULL, '0', '0', '0', '1', '2015-10-07 19:41:30', '2015-10-07 19:41:30'),
	(8, 'telefon', '$2y$10$wIAV7vxXPDXL/ra/2XVun.zif/1scbvI/VT7UmyxB.xHTwYh6IbTe', 'telefon@samsung.com', 'Ot telefona', 'KTkhCN4hhjb4o34Q3v5uLa8S8WeXXEU17yxb9YB7t7NfW308mihjCpIGfork', '0', '0', '0', '1', '2015-10-08 16:50:09', '2015-10-08 16:52:26'),
	(9, 'stefan', '$2y$10$0K4XfLzo1gQ0voEApnGsq.o4fwJvEOFGLxnBt6gtb7iZ.nvbSx616', 'stefan@asd.bg', 'stefan', NULL, '0', '0', '1', '1', '2015-10-08 17:30:31', '2015-10-08 17:31:06');
/*!40000 ALTER TABLE `accounts` ENABLE KEYS */;


-- Dumping structure for table imoti.agency_accounts
DROP TABLE IF EXISTS `agency_accounts`;
CREATE TABLE IF NOT EXISTS `agency_accounts` (
  `agency_id` int(11) unsigned NOT NULL COMMENT 'Current account id',
  `account_id` int(11) unsigned NOT NULL COMMENT 'The id of the subprofile of the current account id',
  PRIMARY KEY (`agency_id`,`account_id`),
  KEY `FK_subaccounts_accounts_2` (`account_id`),
  CONSTRAINT `FK_subaccounts_accounts` FOREIGN KEY (`agency_id`) REFERENCES `accounts` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  CONSTRAINT `FK_subaccounts_accounts_2` FOREIGN KEY (`account_id`) REFERENCES `accounts` (`id`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- Dumping data for table imoti.agency_accounts: ~0 rows (approximately)
DELETE FROM `agency_accounts`;
/*!40000 ALTER TABLE `agency_accounts` DISABLE KEYS */;
/*!40000 ALTER TABLE `agency_accounts` ENABLE KEYS */;


-- Dumping structure for table imoti.password_resets
DROP TABLE IF EXISTS `password_resets`;
CREATE TABLE IF NOT EXISTS `password_resets` (
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  KEY `password_resets_email_index` (`email`),
  KEY `password_resets_token_index` (`token`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- Dumping data for table imoti.password_resets: ~0 rows (approximately)
DELETE FROM `password_resets`;
/*!40000 ALTER TABLE `password_resets` DISABLE KEYS */;
/*!40000 ALTER TABLE `password_resets` ENABLE KEYS */;


-- Dumping structure for table imoti.profiles
DROP TABLE IF EXISTS `profiles`;
CREATE TABLE IF NOT EXISTS `profiles` (
  `account_id` int(11) unsigned NOT NULL,
  PRIMARY KEY (`account_id`),
  CONSTRAINT `FK__accounts` FOREIGN KEY (`account_id`) REFERENCES `accounts` (`id`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- Dumping data for table imoti.profiles: ~0 rows (approximately)
DELETE FROM `profiles`;
/*!40000 ALTER TABLE `profiles` DISABLE KEYS */;
/*!40000 ALTER TABLE `profiles` ENABLE KEYS */;
/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IF(@OLD_FOREIGN_KEY_CHECKS IS NULL, 1, @OLD_FOREIGN_KEY_CHECKS) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
