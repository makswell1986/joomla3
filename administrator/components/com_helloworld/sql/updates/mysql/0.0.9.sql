DROP TABLE IF EXISTS `#__helloworld`;

CREATE TABLE `#__helloworld` (
 `id` INT(11) NOT NULL AUTO_INCREMENT,
 `greeting` VARCHAR(25) NOT NULL,
 `published` tinyint(4) NOT NULL DEFAULT '1',
 PRIMARY KEY (`id`)
)
 ENGINE =InnoDB
 AUTO_INCREMENT =0
 DEFAULT CHARSET =utf8mb4;

INSERT INTO `#__helloworld` (`greeting`) VALUES
('HW3'),
('HW4'),
('HW5'),
('HW6'),
('HW7'),
('HW8'),
('HW9'),
('HW10'),
('HW11'),
('HW12'),
('HW13'),
('HW14'),
('HW15'),
('HW16'),
('HW17'),
('HW18'),
('HW19'),
('HW20'),
('HW21'),
('HW22'),
('HW23'),
('HW24'),
('HW25'),
('HW26'),
('HW27'),
('HW28'),
('HW29'),
('HW30');