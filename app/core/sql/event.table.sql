
--
-- Database: `whereat_db`
--
CREATE DATABASE IF NOT EXISTS `whereat_db` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `whereat_db`;


CREATE TABLE `events` (
	`_id` INT AUTO_INCREMENT PRIMARY KEY,
	`_id_host` INT NOT NULL,
	`title` VARCHAR(225) NOT NULL,
	`lat` DOUBLE NULL,
	`long` DOUBLE NULL
);

