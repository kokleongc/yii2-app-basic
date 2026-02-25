CREATE DATABASE IF NOT EXISTS `yii2basic`;

USE `yii2basic`;

CREATE TABLE `country` (
    `code` CHAR(2) NOT NULL PRIMARY KEY,
    `name` CHAR(52) NOT NULL,
    `population` INT(11) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

INSERT INTO `country`
    (`code`, `name`, `population`)
VALUES
    ('AU', 'Australia', 24016400),
    ('BR', 'Brazil', 205722000),
    ('CA', 'Canada', 35985751),
    ('CN', 'China', 1375210000),
    ('DE', 'Germany', 81459000),
    ('FR', 'France', 64513242),
    ('GB', 'United Kingdom', 65097000),
    ('IN', 'India', 1285400000),
    ('RU', 'Russia', 146519759),
    ('US', 'United States', 322976000);
