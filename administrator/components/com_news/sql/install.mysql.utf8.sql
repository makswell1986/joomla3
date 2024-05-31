DROP TABLE IF EXISTS `#__news`;

CREATE TABLE `#__news` (
 `id` INT(11) NOT NULL AUTO_INCREMENT,
 `title` VARCHAR(25) NOT NULL,
 `published` tinyint(4) DEFAULT NULL,
 `text` text NOT NULL,
 `images` varchar(1024) NOT NULL DEFAULT '',
 `publish_up` datetime DEFAULT NULL,
 `alias` varchar(45) DEFAULT NULL,
 PRIMARY KEY (`id`)
) ENGINE =MyISAM  AUTO_INCREMENT =11  DEFAULT CHARSET =utf8mb4;

